<x-primary-layout>
    <x-slot name="title">Monitor</x-slot>
    <div class="md:grid md:grid-cols-2 flex flex-col h-screen">
        <div class="flex items-center justify-center h-screen px-12"
             style="background-image: linear-gradient(to bottom right, #f3f4f6, #f3f4f6 50%, #6ee7b7 50%, #6ee7b7);">
            <div class="w-full rounded-md shadow-xl md:h-screen" style="background-color: #f3f4f6; background-size: contain; background-repeat: no-repeat;background-image: url({{ asset('img/bg.png') }}); height: 450px;"></div>
        </div>
        <div class="flex items-center justify-center h-screen bg-green-300 flex-col text-center">
            <x-logo color="#317D5F"></x-logo>
            <h1 class="text-2xl font-bold">Server Monitoring</h1>
            <h3 class="py-3 text-lg">Don't let your servers just melt down</h3>
            <p class="py-3 text-gray-900">We all dream of servers that need no maintenance at all.<br/>But unfortunately in reality this is not the case. <br/>Disks can get full, processes can crash, servers run out of memory...</p>
            <a href="{{ route('login') }}"
               class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Start
                Monitoring</a>
        </div>
    </div>
</x-primary-layout>
