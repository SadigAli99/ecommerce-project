<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Setting\CreateRequest;
use App\Http\Requests\Admin\Setting\EditRequest;
use App\Http\Traits\Sortable;
use App\Services\Admin\SettingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    use Sortable;

    public function __construct(public SettingService $settingService) {}


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $settings = $this->settingService->paginate('sort', 'asc', $request->get('limit', 10), $request->except('limit', 'page'));
        return view('back.pages.setting.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.pages.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        try {
            $data = $request->validated();
            DB::beginTransaction();
            $setting = $this->settingService->create($data);
            $setting->addTranslation($data);
            DB::commit();
            toastr('Məlumat əlavə olundu');
            return redirect()->route('admin.setting.index');
        } catch (\Exception $ex) {
            DB::rollBack();
            toastr($ex->getMessage(), 'error');
            return redirect()->back()->withInput($request->validated());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $setting = $this->settingService->getById($id);
        return view('back.pages.setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditRequest $request, string $id)
    {
        try {
            $data = $request->validated();
            $setting = $this->settingService->getById($id);
            DB::beginTransaction();
            $this->settingService->update($setting, $data);
            $setting->updateTranslation($data);
            DB::commit();
            toastr('Məlumat yeniləndi');
            return redirect()->route('admin.setting.index');
        } catch (\Exception $ex) {
            DB::rollBack();
            toastr($ex->getMessage(), 'error');
            return redirect()->back()->withInput($request->validated());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $setting = $this->settingService->getById($id);
            $this->settingService->delete($setting);

            return response([
                'status' => 'success',
                'message' => 'Məlumat silindi',
            ]);
        } catch (\Exception $ex) {
            return response([
                'status' => 'error',
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public function sort(Request $request)
    {
        $response = $this->sort_elements($this->settingService, $request->get('sorted_ids', []));
        return response($response);
    }

    public function filter(Request $request)
    {
        $data = $request->except('limit','page');
        $settings = $this->settingService->paginate('sort', 'asc', $request->get('limit', 10), $data);
        $view = view('back.pages.setting.section.filter', compact('settings'))->render();
        return response([
            'status' => 'success',
            'view' => $view,
        ]);
    }
}
