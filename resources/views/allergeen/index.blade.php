<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Overzicht Allergenen
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <!-- Productgegevens -->
                    <div class="mb-6">
                        <p>
                            <strong>Naam product:</strong>
                            {{ $product->Naam }}
                        </p>

                        <p>
                            <strong>Barcode:</strong>
                            {{ $product->Barcode }}
                        </p>
                    </div>

                    <!-- Overzicht allergenen -->
                    <h3 class="text-xl font-semibold mb-4">
                        Allergenen
                    </h3>

                    <div class="overflow-x-auto">

                        <table class="min-w-full border border-gray-300">

                            <thead>
                                <tr class="bg-gray-100">

                                    <th class="border border-gray-300 px-4 py-2 text-left">
                                        Naam allergeen
                                    </th>

                                    <th class="border border-gray-300 px-4 py-2 text-left">
                                        Omschrijving
                                    </th>

                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($allergenen as $allergeen)

                                    <tr class="hover:bg-gray-50">

                                        <td class="border border-gray-300 px-4 py-2">
                                            {{ $allergeen->Naam }}
                                        </td>

                                        <td class="border border-gray-300 px-4 py-2">
                                            {{ $allergeen->Omschrijving }}
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