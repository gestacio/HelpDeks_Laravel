@php
$button_edit    = 'bg-cyan-500 my-auto mx-1 px-3 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150';
$button_back    = 'bg-gray-500 my-auto mx-1 px-3 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150';
$button_delete  = 'bg-red-500 my-autor mx-1 px-3 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150';
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
                        <div class="shadow bg-white md:rounded-md p-4">
                            
                            <form action="{{ route('tickets.update', $ticket) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label class="block font-medium text-sm text-gray-700">Titulo *</label>
                                <input type="text" name="title" class="form-input w-full rounded-md shadow-sm " value="{{$ticket->title}}" required>
                            
                                <div class="py-2"></div>

                                <label class="block font-medium text-sm text-gray-700">Contenido *</label>
                                <textarea name="content" class="form-input w-full rounded-md shadow-sm" rows="8" required>{{$ticket->content}}</textarea>

                                <input type="submit" class="{{$button_edit}}" value="Editar">
                            </form>

                            <hr class="my-6">

                            <div class="">
                                <a href="{{ route('tickets.index') }}" class="{{ $button_back }} ">
                                    Volver
                                </a>
                                <a href="{{ route('tickets.destroy', $ticket->id) }}" class="{{ $button_delete }}">
                                    Eliminar
                                </a>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
