<x-app-layout>

    <!-- Page heading -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Overzicht Magazijn Jamin
        </h2>
    </x-slot>

    <!-- Page content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Magazijn table -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="overflow-x-auto">

                        <table class="min-w-full border border-gray-300">

                            <thead>
                                <tr class="bg-gray-100">

                                    <th class="border border-gray-300 px-4 py-3 text-left">
                                        Barcode
                                    </th>

                                    <th class="border border-gray-300 px-4 py-3 text-left">
                                        Naam product
                                    </th>

                                    <th class="border border-gray-300 px-4 py-3 text-left">
                                        Verpakkingseenheid (kg)
                                    </th>

                                    <th class="border border-gray-300 px-4 py-3 text-left">
                                        Aantal aanwezig
                                    </th>

                                    <th class="border border-gray-300 px-4 py-3 text-center">
                                        Allergenen Info
                                    </th>

                                    <th class="border border-gray-300 px-4 py-3 text-center">
                                        Leverantie Info
                                    </th>

                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($magazijn as $item)

                                    <tr class="hover:bg-gray-50">

                                        <!-- Barcode -->
                                        <td class="border border-gray-300 px-4 py-3">
                                            {{ $item->Barcode }}
                                        </td>

                                        <!-- Productnaam -->
                                        <td class="border border-gray-300 px-4 py-3">
                                            {{ $item->Naam }}
                                        </td>

                                        <!-- Verpakkingseenheid -->
                                        <td class="border border-gray-300 px-4 py-3">
                                            {{ $item->VerpakkingsEenheid }}
                                        </td>

                                        <!-- Voorraad -->
                                        <td class="border border-gray-300 px-4 py-3">
                                            {{ $item->AantalAanwezig ?? 'Geen voorraad' }}
                                        </td>

                                        <!-- Allergenen informatie -->
                                        <td class="border border-gray-300 px-4 py-3 text-center">

                                           <a href="{{ route('allergeen.show', $item->ProductId) }}"
   class="inline-flex items-center px-3 py-1 bg-red-600 text-white rounded">
    ✕
</a>

                                        </td>

                                        <!-- Leverantie informatie -->
                                        <td class="border border-gray-300 px-4 py-3 text-center">

                                            <a
    href="{{ route('leverantie.show', $item->ProductId) }}"
    class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-gray-600 text-white font-bold hover:bg-gray-700"
>
    ?
</a>

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

</x-app-layout>