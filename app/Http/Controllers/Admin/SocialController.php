<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Social\CreateRequest;
use App\Http\Requests\Admin\Social\EditRequest;
use App\Http\Traits\FileUploadTrait;
use App\Http\Traits\Sortable;
use App\Services\Admin\SocialService;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    use FileUploadTrait, Sortable;

    public function __construct(public SocialService $socialService) {}


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $socials = $this->socialService->paginate('sort', 'asc', $request->get('limit', 10), $request->except('limit'));
        return view('back.pages.social.index', compact('socials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.pages.social.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        try {
            $data = $request->validated();
            if ($request->hasFile('icon')) $data['icon'] = $this->fileUpload($request->file('icon'), 'socials');
            $this->socialService->create($data);
            toastr('Məlumat əlavə olundu');
            return redirect()->route('admin.social.index');
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
        $social = $this->socialService->getById($id);
        return view('back.pages.social.edit', compact('social'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditRequest $request, string $id)
    {
        try {
            $data = $request->validated();
            $social = $this->socialService->getById($id);
            if ($request->hasFile('icon')) {
                $data['icon'] = $this->fileUpload($request->file('icon'), 'socials');
                $this->fileDelete($social->icon);
            }

            $this->socialService->update($social, $data);

            toastr('Məlumat yeniləndi');
            return redirect()->route('admin.social.index');
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
            $social = $this->socialService->getById($id);
            $this->fileDelete($social->icon);
            $this->socialService->delete($social);

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
        $response = $this->sort_elements($this->socialService, $request->get('sorted_ids', []));
        return response($response);
    }

    public function change_status(int $id, Request $request)
    {
        try {
            $request->validate([
                'status' => ['required', 'integer', 'in:0,1'],
            ]);
            $status = $request->get('status');
            $social = $this->socialService->getById($id);
            $this->socialService->update($social, ['status' => $status]);
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
        $socials = $this->socialService->paginate('sort', 'asc', $request->get('limit', 10), $data);
        $view = view('back.pages.social.section.filter', compact('socials'))->render();
        return response([
            'status' => 'success',
            'view' => $view,
        ]);
    }
}
