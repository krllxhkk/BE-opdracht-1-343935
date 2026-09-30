<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Levering Informatie
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h3 class="text-xl font-semibold mb-6">
                        Levering Informatie
                    </h3>

                    <div class="mb-8">
                        <p><strong>Naam leverancier:</strong> {{ $leverancier->Naam }}</p>
                        <p><strong>Contactpersoon leverancier:</strong> {{ $leverancier->ContactPersoon }}</p>
                        <p><strong>Leveranciernummer:</strong> {{ $leverancier->LeverancierNummer }}</p>
                        <p><strong>Mobiel:</strong> {{ $leverancier->Mobiel }}</p>
                    </div>

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
                                <tr>
                                    <td colspan="4" class="border border-gray-300 px-4 py-2">
                                        Er is van dit product op dit moment geen voorraad aanwezig,
                                        de verwachte eerstvolgende levering is: 30-04-2023
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    setTimeout(function () {
        window.location.href = "{{ route('magazijn.index') }}";
    }, 4000);
</script>