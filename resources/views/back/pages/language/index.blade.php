@extends('back.layouts.master')

@section('title', 'Dillər')

@section('breadcrumb')
    @include('back.includes.breadcrumb', ['items' => ['Dillər'], 'page_title' => 'Dillər'])
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-end mb-3">
                <div class="col-md-1 text-end">
                    <a href="{{ route('admin.language.create') }}" class="btn btn-primary">
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

            <div class="row mb-3" id="language-filter">
                @include('back.pages.language.section.filter', ['languages' => $languages])
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
            let url = `/admin/language/filter?${params.toString()}`;
            let newUrl = `/admin/language?${params.toString()}`;
            let language_filter = document.getElementById('language-filter');
            history.pushState(null, "", newUrl);

            fetch(url)
                .then(res => res.json())
                .then(data => {
                    if (data.status == 'success') {
                        language_filter.innerHTML = data.view;
                        sort('language');
                    }
                })
        }

        sort('language');
    </script>
@endpush
