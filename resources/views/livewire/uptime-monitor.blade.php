<table class="w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
    <tr>
        <th class="text-left">Host</th>
        <th class="text-left">Status</th>
        <th class="text-left">Failure Reason</th>
    </tr>
    </thead>
    <tbody class="bg-white text-xs divide-y divide-gray-200">
    @foreach($monitors as $monitor)
        <tr>
            <td>{{ $monitor->url }}</td>
            <td class="text-center">
                <x-uptime-monitor-status status="{{ $monitor->uptime_status }}"></x-uptime-monitor-status>
            </td>
            <td>{{ $monitor->uptime_check_failure_reason != '' ? $monitor->uptime_check_failure_reason : '_' }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
