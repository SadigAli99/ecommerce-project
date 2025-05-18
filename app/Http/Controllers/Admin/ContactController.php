<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactRequest;
use App\Http\Traits\FileUploadTrait;
use App\Services\Admin\ContactService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    use FileUploadTrait;

    public function __construct(public ContactService $contactService) {}

    public function index()
    {
        $contact = $this->contactService->getFirst();
        return view('back.pages.contact', compact('contact'));
    }

    public function submit(ContactRequest $request)
    {
        try {
            $data = $request->validated();

            $contact = $this->contactService->getFirst();
            if ($request->hasFile('header_logo')) {
                $data['header_logo'] = $this->fileUpload($request->file('header_logo'), 'contacts');
                $this->fileDelete($contact?->header_logo ?? '');
            }

            if ($request->hasFile('footer_logo')) {
                $data['footer_logo'] = $this->fileUpload($request->file('footer_logo'), 'contacts');
                $this->fileDelete($contact?->footer_logo ?? '');
            }

            if ($request->hasFile('favicon')) {
                $data['favicon'] = $this->fileUpload($request->file('favicon'), 'contacts');
                $this->fileDelete($contact?->favicon ?? '');
            }

            DB::beginTransaction();
            $contact = $this->contactService->createOrUpdate($data);
            $contact->updateTranslation($data);
            DB::commit();

            toastr('Məlumatlar yeniləndi');
            return redirect()->back();
        } catch (\Exception $ex) {
            DB::rollBack();
            toastr($ex->getMessage(), 'error');
            return redirect()->back();
        }
    }
}
