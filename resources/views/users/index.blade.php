<x-app-layout>

<section class="antialiased bg-gray-100 text-gray-600 px-4">
    <div class="flex flex-col justify-center h-full">
        <!-- Table -->
        <div class="w-full mx-auto bg-white shadow-lg rounded-sm border border-gray-200 my-5">
            <header class="px-5 py-4 border-b border-gray-100">
                <span class="font-semibold text-gray-800 mr-10">Usuarios</span>
                <a class="bg-blue-500 py-2 px-3 rounded text-white hover:bg-blue-700" href="{{ route('users.create') }}">Crear nuevo usuario</a>
            </header>
            <div class="p-3">
                <div class="">
                    <table id="myTable" class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">ID</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Nombre</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Codigo<div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Email</div>
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">
                            @foreach ($users as $user)
                                <tr>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="font-medium text-gray-800">{{ $user->id }}</div>
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left">{{ $user->name }}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left font-medium text-gray-800">{{ $user->code }}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-lg text-center">{{ $user->email }}</div>
                                    </td>
                                    <td class="flex">
                                        <a class="bg-green-500 py-2 px-3 rounded text-white hover:bg-green-700" href="{{ route('users.edit', $user->id) }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                            @method("DELETE")
                                            @csrf
                                            <button class="bg-red-500 py-2 px-3 rounded text-white hover:bg-red-700" type="submit">
                                                <i class="fa-solid fa-circle-minus"></i>
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
</section>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</x-app-layout>
