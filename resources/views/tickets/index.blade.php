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

                <h1>ESTE ES EL INDEX</h1>

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

                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px0">
                            <h3 class="text-lg text-gray-900">Listado de notas</h3>
                            <p class="text-sm text-gray-600">Toma el registro correcto y ejecuta cualquier función (ver,
                                editar o eliminar)</p>
                        </div>
                    </div>

                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">

                            <div class="flex justify-between">
                                <input type="text" class="form-input rounded-md shadow-sm" placeholder="Buscar..."
                                    v-model="q">
                                <a href="#" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md">
                                    Create
                                </a>
                            </div>

                            <hr class="my-6">

                            <table class="table-fixed mx-auto">
                                <thead>
                                    <tr class="border">
                                        <th class="px-4 py-2">Titulo del Ticket</th>
                                        {{-- <th class="px-4 py-2">Usuario</th> --}}
                                        <th class="px-4 py-2">Enviado al Dpto.</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- <h1>{{$tickets->user->name}}</h1> --}}
                                    @foreach ($tickets as $ticket)
                                        <tr class="border px-4 py-2">
                                            <td class="px-4 py-2">{{ $ticket->title }}</td>
                                            {{-- <td>{{ $ticket->user_id }}</td> --}}
                                            <td class="px-4 py-2">{{ $ticket->department->name }}</td>
                                            {{-- <td class="px-4 py-2"><a href="">Ver ticket</a></td> --}}
                                            <td class="px-4 py-2">
                                                <jet-button type="button"  class="mr-4">
                                                    press button
                                                </jet-button>
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
