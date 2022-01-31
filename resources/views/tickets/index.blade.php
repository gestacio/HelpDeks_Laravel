@php
$button_create = 'bg-blue-500 my-auto mx-1 px-2 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150';
$button_see = 'bg-cyan-500 my-auto mx-1 px-2 py-1 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150';
$button_edit = 'bg-green-500 my-auto mx-1 px-2 py-1 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150';
$button_back = 'bg-gray-500 my-auto mx-1 px-2 py-1 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150';
$button_delete = 'bg-red-500 my-auto mx-1 px-2 py-1 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150';
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
                    @if( isset($status))
                    <h1 class="text-lg text-gray-900 flex justify-center">{{ $status }}</h1>
                    @endif
                    <h3 class="text-lg text-gray-900 flex justify-center">
                        
                        INDEX
                    </h3>
                </div>

                <hr class="my-6">

                <div class="md:grid md:grid-cols-7 md:gap-1 mx-3">
                    <div class="md:col-span-3">
                        <div class="px-4 sm:px0">
                            <h3 class="text-lg text-gray-900 mx-3">Tickets Recibidos</h3>
                            <p class="text-sm text-gray-600 mx-3">Aquí puedes ver todos los tickets que te hayan mandado</p>

                            <div class="shadow bg-white md:rounded-md p-4 my-3">

                                <div class="">
                                    <input type="text" class="form-input rounded-md shadow-sm" placeholder="Buscar..."
                                        v-model="q">
                                    {{--  --}}
                                    {{-- <a href="{{ route('tickets.create') }}" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md"> --}}
                                    {{-- <a href="{{ route('tickets.create') }}" class="{{ $button_create }}">
                                        Crear
                                    </a> --}}
                                </div>

                                <hr class="my-6">

                                <table class="table-auto mx-auto w-full">
                                    <thead>
                                        <tr class="border">
                                            <th class="px-2 py-2">Titulo</th>
                                            <th class="px-2 py-2">Dpto.</th>
                                            <th class="px-2 py-2">Prioridad</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tickets_in as $ticket)
                                            <tr class="border odd:bg-white even:bg-slate-200 mx-auto">
                                                <td class="px-2 py-4 text-sm">{{ $ticket->title }}</td>
                                                <td class="px-2 text-sm">{{ $ticket->department->name }}</td>
                                                <td class="px-2 text-sm">{{ $ticket->priority->name }}</td>
                                                <td class="px-2"><a
                                                        href="{{ route('tickets.show', $ticket->id) }}"
                                                        class="{{ $button_see }}">Ver</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    <div class="md:col-span-4">
                        <h3 class="text-lg text-gray-900 mx-3">Tickets Enviados</h3>
                        <p class="text-sm text-gray-600 mx-3">Aquí puedes ver todos los tickets que hayas solicitado</p>

                        <div class="shadow bg-white md:rounded-md p-4 my-3">
                            <div class="flex justify-between">
                                <input type="text" class="form-input rounded-md shadow-sm" placeholder="Buscar..."
                                    v-model="q">
                                {{--  --}}
                                {{-- <a href="{{ route('tickets.create') }}" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md"> --}}
                                <a href="{{ route('tickets.create') }}" class="{{ $button_create }}">
                                    Crear
                                </a>
                            </div>

                            <hr class="my-6">

                            <table class="table-auto mx-auto w-full">
                                <thead>
                                    <tr class="border">
                                        <th class="px-2 py-2">Titulo del Ticket</th>
                                        <th class="px-2 py-2">Usuario</th>
                                        <th class="px-2 py-2">Dpto.</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- <h1>{{$tickets->user->name}}</h1> --}}
                                    @foreach ($tickets_out as $ticket)
                                        <tr class="border odd:bg-white even:bg-slate-200 mx-auto">
                                            <td class="px-2 py-4 text-sm"><p class="">{{ $ticket->title }}</p></td>
                                            {{-- <td>{{ $ticket->user_id }}</td> --}}
                                            <td class="px-2 text-sm">usuario</td>
                                            <td class="px-2 text-sm">{{ $ticket->department->name }}</td>
                                            {{-- <td class="px-4 py-2"><a href="">Ver ticket</a></td> --}}
                                            <td class="px-2 text-sm"><a
                                                    href="{{ route('tickets.show', $ticket->id) }}"
                                                    class="{{ $button_see }}">Ver</a></td>
                                            <td><a href="{{ route('tickets.edit', $ticket->id) }}"
                                                    class="{{ $button_edit }}">Editar</a></td>

                                            <td class="">
                                                <form action="{{ route('tickets.destroy', $ticket) }}" method="POST">
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
