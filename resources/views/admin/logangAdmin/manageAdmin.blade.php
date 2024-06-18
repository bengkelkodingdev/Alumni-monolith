<x-layout>
    <div class="mb-6 ml-5">
        <button class="bg-laravel text-white rounded py-2 px-2 hover:bg-white">
            <a href="/lokeradmin" class="hover:text-laravel"><i class="fa-solid fa-arrow-left"></i> Back </a>
        </button>
    </div>
    <x-card class="p-10">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Manage Lowongan
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @foreach($listingmagangadmin as $listingmagangadmin)
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="/adminLoker/{{$listingmagangadmin->id}}" style="color: inherit; text-decoration: none;"> {{$listingmagangadmin->Posisi}} </a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="/adminLoker/{{$listingmagangadmin->id}}/edit" class="text-blue-400 px-6 py-2 rounded-xl" style="color: inherit; text-decoration: none;">
                            <i class="fa-solid fa-pen-to-square"></i> Edit
                        </a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <form method="POST" action="/adminLoker/{{$listingmagangadmin->id}}/delete" onsubmit="return confirm('Delete?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500" type="submit">
                                <i class="fa-solid fa-trash"> Delete </i>
                            </button>
                        </form>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <form method="POST" action="/adminLoker/{{$listingmagangadmin->id}}/verify" onsubmit="return confirm('Verify?')">
                            @csrf
                            @method('POST')
                            <button class="text-green-500" type="submit">
                                <i class="fa-solid fa-check-square"> Verify </i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-card>
</x-layout>
