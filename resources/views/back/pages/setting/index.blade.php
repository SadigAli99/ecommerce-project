@extends('back.layouts.master')

@section('title', 'Tərcümələr')

@section('breadcrumb')
    @include('back.includes.breadcrumb', ['items' => ['Tərcümələr'], 'page_title' => 'Tərcümələr'])
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-end mb-3">
                <div class="col-md-1 text-end">
                    <a href="{{ route('admin.setting.create') }}" class="btn btn-primary">
                        <i class="mdi mdi-plus"></i>
                    </a>
                </div>
            </div>

            <div class="row justify-content-between align-items-center mb-3">
                <div class="col-1">
                    <select name="limit" onchange="filter({{ request('page', 1) }})" class="form-select">
                        <option value="10" {{ request('limit', 10) == 10 ? 'selected' : '' }}>10</option>
                        <option value="25" {{ request('limit', 10) == 25 ? 'selected' : '' }}>25</option>
                        <option value="50" {{ request('limit', 10) == 50 ? 'selected' : '' }}>50</option>
                        <option value="100" {{ request('limit', 10) == 100 ? 'selected' : '' }}>100</option>
                    </select>
                </div>
                <div class="col-11">
                    <div class="d-flex flex-wrap align-item-center justify-content-end">
                        <div class="col-md-3">
                            <input name="search" oninput="filter({{ request('page', 1) }})" placeholder="Axtar..."
                                value="{{ request('search') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

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

            <div class="row mb-3" id="setting-filter">
                @include('back.pages.setting.section.filter', ['settings' => $settings])
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        function filter(page = 1) {
            let limit = document.querySelector('[name="limit"]').value;
            let search = document.querySelector('[name="search"]').value;
            let params = new URLSearchParams();
            if (limit) params.append('limit', limit);
            if (page != 1) params.append('page', page);
            if (search) params.append('search', search);
            let url = `/admin/setting/filter?${params.toString()}`;
            let newUrl = `/admin/setting?${params.toString()}`;
            let setting_filter = document.getElementById('setting-filter');
            history.pushState(null, "", newUrl);

            fetch(url)
                .then(res => res.json())
                .then(data => {
                    if (data.status == 'success') {
                        setting_filter.innerHTML = data.view;
                        sort('setting');
                    }
                })
        }

        sort('setting');
    </script>
@endpush
