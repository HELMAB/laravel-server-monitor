<x-primary-layout>
    <x-slot name="title">Monitor</x-slot>
    <div class="grid grid-cols-2 h-screen">
        <div class="flex items-center justify-center h-screen px-12"
             style="background-image: linear-gradient(to bottom right, #f3f4f6, #f3f4f6 50%, #6ee7b7 50%, #6ee7b7);}">
            <div class="w-full rounded-md shadow-xl" style="background-color: #f3f4f6; background-size: contain; background-repeat: no-repeat;background-image: url({{ asset('img/bg.png') }}); height: 540px;"></div>
        </div>
        <div class="flex items-center justify-center h-screen bg-green-300 flex-col text-center">
            <svg viewBox="0 0 20 20"
                 class="w-24 py-6"
                 xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2.93 17.07A10 10 0 1 0 17.07 2.93 10 10 0 0 0 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM4 10l2-2 3 3 5-5 2 2-7 7-5-5z"
                    fill="#317D5F"
                    fill-rule="evenodd"/>
            </svg>
            <h1 class="text-2xl font-bold">{{ config('app.name', 'Laravel') }} - Server Monitoring</h1>
            <p class="py-3">Don't let your servers just melt down</p>
            <a href="{{ route('login') }}"
               class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Start
                Monitoring</a>
        </div>
    </div>
</x-primary-layout>
