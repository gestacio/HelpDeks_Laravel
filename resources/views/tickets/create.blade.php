@php
$button_create  = 'bg-blue-500 my-auto mx-1 px-2 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150';
$button_see     = 'bg-cyan-500 my-auto mx-1 px-2 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150';
$button_edit    = 'bg-green-500 my-auto mx-1 px-2 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150';
$button_back    = 'bg-gray-500 my-auto mx-1 px-2 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150';
$button_delete  = 'bg-red-500 my-auto mx-1 px-2 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150';
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

                <h1>ESTE ES LA VISTA PARA CREAR</h1>

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

                            <form action="{{ route('tickets.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="flex flex-wrap -mx-3 mb-6">

                                    <div class="w-full md:w-2/3 px-3">
                                        <label class="block font-medium text-sm text-gray-700">Titulo *</label>
                                        <input type="text" name="title" class="form-input w-full rounded-md shadow-sm " required>
    
                                    </div>
    
                                    <div class="w-full md:w-1/3 px-3">
                                        <label class="block font-medium text-sm text-gray-700">Departamento *</label>
                                        <select name="department_id">
                                            <option value="1" selected>Departamento 1</option>
                                            <option value="2">Departamento 2</option>
                                        </select>
                                    </div>
                                    
                                </div>


                                <div class="py-2"></div>

                                <label class="block font-medium text-sm text-gray-700">Contenido *</label>
                                <textarea name="content" class="form-input w-full rounded-md shadow-sm" rows="8"
                                    required></textarea>

                                <input type="submit" class="{{ $button_create }}" value="Enviar">
                            </form>

                            <hr class="my-6">

                            <div class="">
                                <a href="{{ route('tickets.index') }}" class="{{ $button_back }} ">
                                    Volver
                                </a>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
