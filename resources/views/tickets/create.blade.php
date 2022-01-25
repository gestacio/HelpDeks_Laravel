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

                                {{-- <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-first-name">
                                            First Name
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            id="grid-first-name" type="text" placeholder="Jane">
                                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-last-name">
                                            Last Name
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="grid-last-name" type="text" placeholder="Doe">
                                    </div>
                                </div> --}}


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
