@php
    $button_edit = "bg-cyan-500 m-auto inline-flex items-center px-3 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150";
    $button_back = "bg-gray-500 m-auto inline-flex items-center px-3 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150";
    $button_delete = "bg-red-500 m-auto inline-flex items-center px-3 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150";
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}
                {{-- <div class="container mx-auto px-4 bg-white">
                    @yield('content')
                </div> --}}

                <h1>ESTE ES LA VISTA PARA EDITAR</h1>

                @if ($errors->any())
                    <ul class="list-none p-4 mb-4 bg-red-100 text-red-500">
                        <h4>Ocurrió un error:</h4>
                        @foreach ($errors->all() as $error)
                            <li>
                                <p>{{ $error }}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif


                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="md:col-span-1">
                                <div class="px-4 sm:px0">
                                    <h3 class="text-lg text-gray-900">Ticket</h3>
                                    <p class="text-sm text-gray-600">{{ $ticket->title }}</p>
                                </div>
                            </div>
                            <div class="md:col-span-2 mt-5 md:mt-0">
                                <div class="shadow bg-white md:rounded-md p-4">
                                    <p>{{  $ticket->content }}</p>

                                    <hr class="my-6">

                                    <a href="{{ route('tickets.index') }}" class="{{ $button_back }}">
                                        Volver
                                    </a>
                                    <a href="{{ route('tickets.edit', $ticket->id) }}" class="{{ $button_edit }}">
                                        Editar
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
