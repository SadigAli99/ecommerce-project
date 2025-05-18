@extends('back.layouts.master')

@section('title', 'Əlaqə məlumatları')

@section('breadcrumb')
    @include('back.includes.breadcrumb', [
        'items' => ['Əlaqə məlumatları'],
        'page_title' => 'Əlaqə məlumatları',
    ])
@endsection

@section('content')
    <div class="card my-5">
        <div class="card-body">
            <ul class="nav nav-pills nav-justified" role="tablist">
                @foreach ($langs as $key => $lang)
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link {{ $key == 0 ? 'active' : '' }}" data-bs-toggle="tab" href="#{{ $lang }}"
                            role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">{{ strtoupper($lang) }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>

            <form method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="wp_phone" class="form-label">Whatsapp nömrəsi</label>
                            <input type="text" name="wp_phone" id="wp_phone" oninput="convert_phone_number(this)"
                                value="{{ old('wp_phone', $contact?->wp_phone) }}" class="form-control">
                            @error('wp_phone')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefon nömrəsi</label>
                            <input type="text" name="phone" id="phone" oninput="convert_phone_number(this)"
                                value="{{ old('phone', $contact?->phone) }}" class="form-control">
                            @error('phone')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $contact?->email) }}"
                                class="form-control">
                            @error('email')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">Yuxarı loqo</label>
                            <input type="file" name="header_logo" accept="image/*" class="form-control">
                            @error('header_logo')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="upload-box">
                                <div class="col-md-3 col-sm-6 mb-3">
                                    <div class="upload-image">
                                        <img src="{{ asset($contact?->header_logo) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">Aşağı loqo</label>
                            <input type="file" name="footer_logo" accept="image/*" class="form-control">
                            @error('footer_logo')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="upload-box">
                                <div class="col-md-3 col-sm-6 mb-3">
                                    <div class="upload-image">
                                        <img src="{{ asset($contact?->footer_logo) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="" class="form-label">Favikon</label>
                            <input type="file" name="favicon" accept="image/*" class="form-control">
                            @error('favicon')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="upload-box">
                                <div class="col-md-3 col-sm-6 mb-3">
                                    <div class="upload-image">
                                        <img src="{{ asset($contact?->favicon) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content text-muted">
                        @foreach ($langs as $key => $lang)
                            <div class="tab-pane {{ $key == 0 ? 'active' : '' }}" id="{{ $lang }}">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="address_{{ $lang }}" class="form-label">Ünvan
                                            ({{ strtoupper($lang) }})
                                        </label>
                                        <textarea name="address_{{ $lang }}" id="address_{{ $lang }}" class="form-control">{{ $contact?->translate($lang)->address }}</textarea>
                                        @error('address_' . $lang)
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="footer_text_{{ $lang }}" class="form-label">Footer mətni
                                            ({{ strtoupper($lang) }})
                                        </label>
                                        <textarea name="footer_text_{{ $lang }}" id="footer_text_{{ $lang }}" class="form-control">{{ $contact?->translate($lang)->footer_text }}</textarea>
                                        @error('footer_text_' . $lang)
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="" class="form-label">Xəritə</label>
                            <textarea name="map" id="map" class="form-control">{{ $contact?->map }}</textarea>
                            @error('map')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row justify-content-end mb-3">
                    <div class="col-md-3 text-end">
                        <button class="btn btn-primary" type="submit">Təsdiq et</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('back/assets/css/file-upload.css') }}">
    <style>
        .cke_notifications_area {
            display: none !important;
        }
    </style>
@endpush

@push('js')
    <script src="{{ asset('back/assets/js/pages/file-upload.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('map');
    </script>
@endpush
