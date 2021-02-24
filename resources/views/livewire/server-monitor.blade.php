<table class="w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
    <tr>
        <th class="text-left">Host</th>
        <th class="text-left">Check</th>
        <th class="text-left">Status</th>
        <th class="text-left">Last Run</th>
        <th class="text-left">Detail</th>
    </tr>
    </thead>
    <tbody class="bg-white text-xs divide-y divide-gray-200">
    @foreach($checks as $check)
        <tr>
            <td>{{ $check->host->name }}</td>
            <td>{{ $check->type }}</td>
            <td>
                <x-status status="{{ $check->status }}"></x-status>
            </td>
            <td>{{ \Carbon\Carbon::parse($check->updated_at)->diffForHumans() }}</td>
            <td>{{ $check->last_run_message }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
