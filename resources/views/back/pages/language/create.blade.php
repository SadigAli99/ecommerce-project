@extends('back.layouts.master')

@section('title', 'Dil əlavə et')

@section('breadcrumb')
    @include('back.includes.breadcrumb', [
        'items' => ['Dillər', 'Dil əlavə et'],
        'page_title' => 'Dil əlavə et',
    ])
@endsection

@section('content')
    <div class="card my-5">
        <div class="card-body">
            <form action="{{ route('admin.language.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Başlıq</label>
                            <input type="text" name="name" id="name" oninput="convert_letter(this)"
                                value="{{ old('name') }}" class="form-control">
                            @error('name')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="short_name" class="form-label">Qısa ad</label>
                            <input type="text" name="short_name" id="short_name" oninput="convert_letter(this)"
                                value="{{ old('short_name') }}" class="form-control">
                            @error('short_name')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="is_default" class="form-label">Defaultdur?</label>
                            <select name="is_default" id="is_default" class="form-select">
                                <option value="1" {{ old('is_default') === 1 ? 'selected' : '' }}>Bəli</option>
                                <option value="0" {{ old('is_default') === 0 ? 'selected' : '' }}>Xeyr</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Bayraq</label>
                            <input type="file" name="image" accept="image/*" class="form-control">
                            @error('image')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="upload-box"></div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-end mb-3">
                    <div class="col-md-3 text-end">
                        <a href="{{ route('admin.language.index') }}" class="btn btn-light">Geri</a>
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
