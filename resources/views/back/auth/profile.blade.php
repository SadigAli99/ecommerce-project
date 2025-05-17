@extends('back.layouts.master')

@section('title', 'Profili yenilə')

@section('breadcrumb')
    @include('back.includes.breadcrumb', [
        'items' => ['Profil'],
        'page_title' => 'Profili yenilə',
    ])
@endsection

@section('content')
    <div class="card my-5">
        <div class="card-body">
            <form method="POST">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">İstifadə adı</label>
                            <input type="text" name="name"
                                value="{{ old('name', auth()->guard('admin')->user()->name) }}" class="form-control">
                            @error('name')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email"
                                value="{{ old('email', auth()->guard('admin')->user()->email) }}" class="form-control">
                            @error('email')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Yeni parol</label>
                            <div class="password">
                                <input type="password" name="password" class="form-control">
                                <div class="view-icon" onclick="change_visible(this)">
                                    <i class="mdi mdi-eye"></i>
                                </div>
                            </div>
                            @error('password')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Parolu təkrarla</label>
                            <div class="password">
                                <input type="password" name="confirm_password" class="form-control">
                                <div class="view-icon" onclick="change_visible(this)">
                                    <i class="mdi mdi-eye"></i>
                                </div>
                            </div>
                            @error('confirm_password')
                                <div class="invalid-feedback" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <button class="btn btn-primary">Təsdiqlə</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .password {
            position: relative;
        }

        .password .view-icon {
            position: absolute;
            right: 2%;
            font-size: 18px;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 99;
        }
    </style>
@endpush

@push('js')
    <script>
        function change_visible(item) {
            let input_type = item.previousElementSibling.getAttribute('type');
            if (input_type == 'text') item.previousElementSibling.setAttribute('type', 'password');
            else item.previousElementSibling.setAttribute('type', 'text');
        }
    </script>
@endpush
