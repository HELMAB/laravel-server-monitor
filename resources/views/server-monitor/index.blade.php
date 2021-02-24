<x-app-layout>
    <x-slot name="title">{{ __('Server Monitor') }}</x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Server Monitor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white border-b border-gray-200">
                    @livewire('server-monitor')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
