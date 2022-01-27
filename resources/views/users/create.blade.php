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

                <div class="py-4 my-4">
                    <h3 class="text-lg text-gray-900 flex justify-center">
                        Creación de usuario
                    </h3>
                </div>

                <hr class="my-6">


                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="shadow bg-white md:rounded-md p-4">

                            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="flex flex-wrap -mx-3 mb-6">

                                    <div class="w-full md:w-1/2 px-3">
                                        <label class="block font-medium text-sm text-gray-700">Nombre *</label>
                                        <input type="text" name="name" class="form-input w-full rounded-md shadow-sm " required>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3">
                                        <label class="block font-medium text-sm text-gray-700">Correo electrónico *</label>
                                        <input type="email" name="email" class="form-input w-full rounded-md shadow-sm " required>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3">
                                        <label class="block font-medium text-sm text-gray-700">Contraseña *</label>
                                        <input type="password" name="password" class="form-input w-full rounded-md shadow-sm " required>
                                    </div>
                                    <div class="w-full md:w-1/2 px-3">
                                        <label class="block font-medium text-sm text-gray-700">Departamento *</label>
                                        <select name="department_id" required>
                                            <option value="0" selected>Seleccionar</option>
                                            @foreach ($departments as $department)
                                                <option value="{{$department->id}}">{{$department->id}} {{$department->name}}</option>
                                            @endforeach
                                            {{-- <option value="1" selected>Departamento 1</option>
                                            <option value="2">Departamento 2</option> --}}
                                        </select>
                                    </div>
                                    
                                </div>


                                <div class="py-2"></div>

                                {{-- <label class="block font-medium text-sm text-gray-700">Contenido *</label>
                                <textarea name="content" class="form-input w-full rounded-md shadow-sm" rows="8"
                                    required></textarea> --}}

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
