@php
$button_create = 'bg-blue-500 my-auto mx-1 px-2 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150';
$button_see = 'bg-cyan-500 my-auto mx-1 px-2 py-1 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150';
$button_edit = 'bg-green-500 my-auto mx-1 px-2 py-1 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150';
$button_back = 'bg-gray-500 my-auto mx-1 px-2 py-1 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150';
$button_delete = 'bg-red-500 my-auto mx-1 px-2 py-1 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150';
@endphp

<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

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
                @if (session('status'))
                <ul class="list-none p-4 mb-4 bg-blue-100 text-blue-500">
                        <p>{{session('status')}}</p>
                    </ul>
                @endif

                <div class="py-4 my-4">
                    <h3 class="text-lg text-gray-900 flex justify-center">
                        INDEX
                    </h3>
                </div>

                <hr class="my-6">

                <div class="md:grid md:grid-cols-7 md:gap-1 mx-3">
                    <div class="md:col-span-3">
                        <div class="px-4 sm:px0">
                            <h3 class="text-lg text-gray-900 mx-3">Creación de usuarios</h3>
                            <p class="text-sm text-gray-600 mx-3">Aquí puedes usuarios nuevos para el sistema</p>

                            <div class="shadow bg-white md:rounded-md p-4 my-3">

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
                                                <option></option>
                                                @foreach ($departments as $department)
                                                    <option value="{{$department->id}}">{{$department->id}} - {{$department->name}}</option>
                                                @endforeach
                                                {{-- <option value="1" selected>Departamento 1</option>
                                                <option value="2">Departamento 2</option> --}}
                                            </select>
                                        </div>

                                    </div>

                                    <div class="py-2"></div>    
                                    <input type="submit" class="{{ $button_create }}" value="Enviar">
                                </form>

                            </div>

                        </div>
                    </div>

                    <div class="md:col-span-4">
                        <h3 class="text-lg text-gray-900 mx-3">Usuarios</h3>
                        <p class="text-sm text-gray-600 mx-3">Aquí puedes ver todos los usuarios creados en el sistema</p>

                        <div class="shadow bg-white md:rounded-md p-4 my-3">
                            <div class="flex justify-between">
                                <input type="text" class="form-input rounded-md shadow-sm" placeholder="Buscar..."
                                    v-model="q">
                                {{--  --}}
                                {{-- <a href="{{ route('tickets.create') }}" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md"> --}}
                                <a href="{{ route('users.create') }}" class="{{ $button_create }}">
                                    Crear
                                </a>
                            </div>

                            <hr class="my-6">

                            <table class="table-auto mx-auto w-full">
                                <thead>
                                    <tr class="border">
                                        <th class="px-2 py-2">Usuario</th>
                                        <th class="px-2 py-2">Dpto.</th>
                                        <th class="px-2 py-2"></th>
                                        {{-- <th></th> --}}
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- <h1>{{$tickets->user->name}}</h1> --}}
                                    @foreach ($users as $user)
                                        <tr class="border odd:bg-white even:bg-slate-200 mx-auto">
                                            <td class="px-2 py-4 text-sm"><p class="">{{ $user->name }}</p></td>
                                            <td class="px-2 text-sm">{{ $user->department->name }}</td>
                                            <td class="px-2 text-sm"><a
                                                    href="{{ route('users.show', $user->id) }}"
                                                    class="{{ $button_see }}">Ver</a></td>
                                            <td><a href="{{ route('users.edit', $user->id) }}"
                                                    class="{{ $button_edit }}">Editar</a></td>

                                            <td class="">
                                                <form action="{{ route('users.destroy', $user) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="{{ $button_delete }}">
                                                        Eliminar
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
