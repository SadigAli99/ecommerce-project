@extends('back.layouts.master')

@section('title', 'Sosial şəbəkə əlavə et')

@section('breadcrumb')
    @include('back.includes.breadcrumb', [
        'items' => ['Sosial şəbəkələr', 'Sosial şəbəkə əlavə et'],
        'page_title' => 'Sosial şəbəkə əlavə et',
    ])
@endsection

@section('content')
    <div class="card my-5">
        <div class="card-body">
            <form action="{{ route('admin.social.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Başlıq</label>
                            <input type="text" name="title" id="title" oninput="convert_letter(this)"
                                value="{{ old('title') }}" class="form-control">
                            @error('title')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">İkon</label>
                            <input type="file" name="icon" accept="image/*" class="form-control">
                            @error('icon')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="upload-box"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="url" class="form-label">URL</label>
                            <input type="text" id="url" name="url" value="{{ old('url') }}"
                                class="form-control">
                            @error('url')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row justify-content-end mb-3">
                    <div class="col-md-3 text-end">
                        <a href="{{ route('admin.social.index') }}" class="btn btn-light">Geri</a>
                        <button class="btn btn-primary" type="submit">Təsdiq et</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('back/assets/css/file-upload.css') }}">
@endpush

@push('js')
    <script src="{{ asset('back/assets/js/pages/file-upload.js') }}"></script>
@endpush
