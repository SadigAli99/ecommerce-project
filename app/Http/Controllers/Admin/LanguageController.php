<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Language\CreateRequest;
use App\Http\Requests\Admin\Language\EditRequest;
use App\Http\Traits\FileUploadTrait;
use App\Http\Traits\Sortable;
use App\Services\Admin\LanguageService;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    use FileUploadTrait, Sortable;

    public function __construct(public LanguageService $languageService) {}


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $languages = $this->languageService->paginate('sort', 'asc', $request->get('limit', 10), $request->except('limit'));
        return view('back.pages.language.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.pages.language.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        try {
            $data = $request->validated();
            if ($request->hasFile('image')) $data['image'] = $this->fileUpload($request->file('image'), 'languages');
            $this->languageService->create($data);
            toastr('Məlumat əlavə olundu');
            return redirect()->route('admin.language.index');
        } catch (\Exception $ex) {
            toastr($ex->getMessage(), 'error');
            return redirect()->back()->withInput($data);
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
        $language = $this->languageService->getById($id);
        return view('back.pages.language.edit', compact('language'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditRequest $request, string $id)
    {
        try {
            $data = $request->validated();
            $language = $this->languageService->getById($id);
            if ($request->hasFile('image')) {
                $data['image'] = $this->fileUpload($request->file('image'), 'languages');
                $this->fileDelete($language->image);
            }

            $this->languageService->update($language, $data);

            toastr('Məlumat yeniləndi');
            return redirect()->route('admin.language.index');
        } catch (\Exception $ex) {
            toastr($ex->getMessage(), 'error');
            return redirect()->back()->withInput($data);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $language = $this->languageService->getById($id);
            $this->fileDelete($language->image);
            $this->languageService->delete($language);

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
        $response = $this->sort_elements($this->languageService, $request->get('sorted_ids', []));
        return response($response);
    }

    public function change_status(int $id, Request $request)
    {
        try {
            $request->validate([
                'status' => ['required', 'integer', 'in:0,1'],
            ]);
            $status = $request->get('status');
            $language = $this->languageService->getById($id);
            $this->languageService->update($language, ['status' => $status]);
            return response([
                'status' => 'success',
                'message' => 'Status uğurla dəyişdirildi',
            ]);
        } catch (\Exception $ex) {
            return response([
                'status' => 'error',
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public function filter(Request $request)
    {
        $data = $request->except('limit');
        $languages = $this->languageService->paginate('sort', 'asc', $request->get('limit', 10), $data);
        $view = view('back.pages.language.section.filter', compact('languages'))->render();
        return response([
            'status' => 'success',
            'view' => $view,
        ]);
    }
}
