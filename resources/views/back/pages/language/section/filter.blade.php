<table id="sortable-table" class="table table-striped table-responsive">
    <thead>
        <tr>
            <th>#</th>
            <th>Bayraq</th>
            <th>Başlıq</th>
            <th>Qısa ad</th>
            <th>Defaultdur?</th>
            <th>Status</th>
            <th>Əməliyyatlar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($languages as $language)
            <tr data-id="{{ $language->id }}">
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ asset($language->image) }}" width="70" alt="{{ $language->name }}"
                        title="{{ $language->name }}">
                </td>
                <td>{{ $language->name }}</td>
                <td>{{ $language->short_name }}</td>
                <td>
                    @switch($language->is_default)
                        @case(0)
                            <span class="badge bg-danger">Xeyr</span>
                        @break

                        @case(1)
                            <span class="badge bg-success">Bəli</span>
                        @break

                        @default
                        @break
                    @endswitch
                </td>
                <td>
                    <input type="checkbox" id="switch{{ $language->id }}" switch="bool" onchange="change_status(this)"
                        data-id="{{ $language->id }}" {{ $language->status == 1 ? 'checked' : '' }}>
                    <label for="switch{{ $language->id }}" data-on-label="Aktiv" data-off-label="DA"></label>
                </td>
                <td>
                    <a href="{{ route('admin.language.edit', $language->id) }}" class="btn btn-success">
                        <i class="mdi mdi-account-edit"></i>
                    </a>
                    <a href="{{ route('admin.language.destroy', $language->id) }}" onclick="delete_item(this)"
                        class="btn btn-danger">
                        <i class="mdi mdi-delete"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $languages->withQueryString()->links('pagination::bootstrap-5') }}
