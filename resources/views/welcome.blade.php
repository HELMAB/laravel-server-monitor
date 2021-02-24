<x-primary-layout>
    <x-slot name="title">Monitor</x-slot>

    <div class="container mx-auto py-2">
        <div class="flex h-screen justify-center items-center flex-col">
            <h1>LaravelServer<span><strong>Monitor</strong></span></h1>
            <div class="mt-8">
                <x-button>Get Started</x-button>
                <div>
                    <x-host-list>
                        @foreach(range(0, 2) as $item)
                            <x-host-item label="{{ $item }}"></x-host-item>
                        @endforeach
                    </x-host-list>
                </div>
            </div>
        </div>
    </div>
</x-primary-layout>
