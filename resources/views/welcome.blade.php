<x-primary-layout>
    <x-slot name="title">Home</x-slot>
    <div class="monitor-container">
        <div class="monitor-left">
            <div class="monitor-left-bg" style="background-image: url({{ asset('img/bg.png') }});"></div>
        </div>
        <div class="monitor-right">
            <x-logo color="#317D5F"></x-logo>
            <h1 class="text-2xl font-bold">Uptime Monitor</h1>
            <h3 class="py-3 text-lg">Don't let your servers just melt down</h3>
            <p class="py-3 text-gray-900">
                We all dream of servers that need no maintenance at all.<br/>But unfortunately
                in reality this is not the case. <br/>Disks can get full, processes can crash, servers run out of
                memory...
            </p>
            <a href="{{ route('login') }}" class="btn-start-monitoring">Start Monitoring</a>
        </div>
    </div>
</x-primary-layout>
