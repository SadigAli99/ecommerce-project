@extends('back.layouts.master')

@section('title', 'Tərcümə redaktə et')

@section('breadcrumb')
    @include('back.includes.breadcrumb', [
        'items' => ['Tərcümələr', 'Tərcümə redaktə et'],
        'page_title' => 'Tərcümə redaktə et',
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

            <form action="{{ route('admin.setting.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="key" class="form-label">Başlıq</label>
                            <input type="text" name="key" id="key" oninput="convert_letter(this)"
                                value="{{ old('key', $setting->key) }}" class="form-control">
                            @error('key')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="tab-content text-muted">
                        @foreach ($langs as $key => $lang)
                            <div class="tab-pane {{ $key == 0 ? 'active' : '' }}" id="{{ $lang }}">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="value_{{ $lang }}" class="form-label">Dəyər
                                            ({{ strtoupper($lang) }})
                                        </label>
                                        <input type="text" name="value_{{ $lang }}"
                                            value="{{ old('value_' . $lang, $setting?->translate($lang)?->value) }}"
                                            id="value_{{ $lang }}" class="form-control">
                                        @error('value_' . $lang)
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="row justify-content-end mb-3">
                    <div class="col-md-3 text-end">
                        <a href="{{ route('admin.setting.index') }}" class="btn btn-light">Geri</a>
                        <button class="btn btn-primary" type="submit">Təsdiq et</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
