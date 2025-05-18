<div class="tab-content text-muted">
    @foreach ($langs as $key => $lang)
        <div class="tab-pane {{ $key == 0 ? 'active' : '' }} " id="{{ $lang }}">
            <table id="sortable-table" class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Başlıq</th>
                        <th>Dəyər ({{ strtoupper($lang) }})</th>
                        <th>Əməliyyatlar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($settings as $setting)
                        <tr data-id="{{ $setting->id }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $setting->key }}</td>
                            <td>{{ $setting->translate($lang)?->value }}</td>
                            <td>
                                <a href="{{ route('admin.setting.edit', $setting->id) }}" class="btn btn-success">
                                    <i class="mdi mdi-account-edit"></i>
                                </a>
                                <a href="{{ route('admin.setting.destroy', $setting->id) }}" onclick="delete_item(this)"
                                    class="btn btn-danger">
                                    <i class="mdi mdi-delete"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $settings->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    @endforeach
</div>
