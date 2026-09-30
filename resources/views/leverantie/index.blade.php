<x-app-layout>

    <!-- Page heading -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Levering Informatie
        </h2>
    </x-slot>

    <!-- Page content -->
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <!-- Product name -->
                    <h3 class="text-xl font-semibold mb-6">
                        Levering Informatie
                    </h3>


                    @if ($leveringen->isNotEmpty())

                        <!-- Supplier information -->
                        <div class="mb-8">

                            <h4 class="text-lg font-semibold mb-4">
                                Leverancier
                            </h4>

                            <p>
                                <strong>Naam leverancier:</strong>
                                {{ $leveringen->first()->Naam }}
                            </p>

                            <p>
                                <strong>Contactpersoon leverancier:</strong>
                                {{ $leveringen->first()->ContactPersoon }}
                            </p>

                            <p>
                                <strong>Leveranciernummer:</strong>
                                {{ $leveringen->first()->LeverancierNummer }}
                            </p>

                            <p>
                                <strong>Mobiel:</strong>
                                {{ $leveringen->first()->Mobiel }}
                            </p>

                        </div>

                        <!-- Delivery information -->
                        <h4 class="text-lg font-semibold mb-4">
                            Leveringsinformatie
                        </h4>

                        <div class="overflow-x-auto">

                            <table class="min-w-full border border-gray-300">

                                <thead>
    <tr class="bg-gray-100">

        <th class="border border-gray-300 px-4 py-2 text-left">
            Naam Product
        </th>

        <th class="border border-gray-300 px-4 py-2 text-left">
            Datum laatste levering
        </th>

        <th class="border border-gray-300 px-4 py-2 text-left">
            Aantal
        </th>

        <th class="border border-gray-300 px-4 py-2 text-left">
            Eerstvolgende levering
        </th>

    </tr>
</thead>

                                <tbody>

                                    @foreach ($leveringen as $levering)

                                        <tr>

    <td class="border border-gray-300 px-4 py-2">
        {{ $product->Naam }}
    </td>

    <td class="border border-gray-300 px-4 py-2">
        {{ \Carbon\Carbon::parse($levering->DatumLevering)->format('d-m-Y') }}
    </td>

    <td class="border border-gray-300 px-4 py-2">
        {{ $levering->Aantal }}
    </td>

    <td class="border border-gray-300 px-4 py-2">
        {{ $levering->DatumEerstVolgendeLevering
    ? \Carbon\Carbon::parse($levering->DatumEerstVolgendeLevering)->format('d-m-Y')
    : '-'
}}
    </td>

</tr>

                                    @endforeach

                                </tbody>

                            </table>

                        </div>

                    @else

                        <p>
                            Er is geen leveringsinformatie beschikbaar voor dit product.
                        </p>

                    @endif

                </div>

            </div>

        </div>

    </div>

</x-app-layout>