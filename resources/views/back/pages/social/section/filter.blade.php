<table id="sortable-table" class="table table-striped table-responsive">
    <thead>
        <tr>
            <th>#</th>
            <th>İkon</th>
            <th>Başlıq</th>
            <th>URL</th>
            <th>Status</th>
            <th>Əməliyyatlar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($socials as $social)
            <tr data-id="{{ $social->id }}">
                <td>{{ $loop->iteration }}</td>
                <td>
                    <div
                        style="width: 40px;height:40px;background-color:#4b5966; border-radius:5px; display:flex; justify-content:center;align-items:center;">
                        <img src="{{ asset($social->icon) }}" width="16" alt="{{ $social->title }}"
                            title="{{ $social->title }}">
                    </div>
                </td>
                <td>{{ $social->title }}</td>
                <td>
                    <a href="{{ $social->url }}" target="_blank" class="btn btn-warning">
                        <i class="mdi mdi-eye"></i>
                    </a>
                </td>
                <td>
                    <input type="checkbox" id="switch{{ $social->id }}" switch="bool"
                        onchange="change_status(this,'social')" data-id="{{ $social->id }}"
                        {{ $social->status == 1 ? 'checked' : '' }}>
                    <label for="switch{{ $social->id }}" data-on-label="Aktiv" data-off-label="DA"></label>
                </td>
                <td>
                    <a href="{{ route('admin.social.edit', $social->id) }}" class="btn btn-success">
                        <i class="mdi mdi-account-edit"></i>
                    </a>
                    <a href="{{ route('admin.social.destroy', $social->id) }}" onclick="delete_item(this)"
                        class="btn btn-danger">
                        <i class="mdi mdi-delete"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $socials->withQueryString()->links('pagination::bootstrap-5') }}
