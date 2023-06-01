<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Welkom {{ Auth::user()->name }} !
        </h2>
        <p>
        Dit is de hoofdpagina van {{ __('Time2share') }}
        </p>
        <br>
        @include('components.products')

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


            </div>
        </div>
    </div>

    @include('components.footer')

</x-app-layout>

