<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LeverantieController extends Controller
{
    /**
     * Toon de leveringsinformatie van een product.
     */
    public function show(int $productId): View
    {
        // Haal het gekozen product op.
        $product = DB::table('product')
            ->where('Id', $productId)
            ->first();
        
        // Controleer de voorraad van het gekozen product.
        $magazijn = DB::table('magazijn')
            ->where('ProductId', $productId)
            ->first();

        // Winegums heeft geen voorraad.
        if ($magazijn && $magazijn->AantalAanwezig === null) {

    $leverancier = DB::table('productperleverancier')
        ->join(
            'leverancier',
            'productperleverancier.LeverancierId',
            '=',
            'leverancier.Id'
        )
        ->where('productperleverancier.ProductId', $productId)
        ->select(
            'leverancier.Naam',
            'leverancier.ContactPersoon',
            'leverancier.LeverancierNummer',
            'leverancier.Mobiel'
        )
        ->first();

    return view('leverantie.geen-voorraad', [
        'product' => $product,
        'leverancier' => $leverancier,
    ]);
}

        // Haal alle leveringen van dit product op.
        // De gegevens van de leverancier worden gekoppeld
        // via LeverancierId.
        $leveringen = DB::table('productperleverancier')
            ->join(
                'leverancier',
                'productperleverancier.LeverancierId',
                '=',
                'leverancier.Id'
            )
            ->where('productperleverancier.ProductId', $productId)
            ->select(
                'leverancier.Naam',
                'leverancier.ContactPersoon',
                'leverancier.LeverancierNummer',
                'leverancier.Mobiel',
                'productperleverancier.DatumLevering',
                'productperleverancier.Aantal',
                'productperleverancier.DatumEerstVolgendeLevering'
            )
            // Sorteer op de datum van de levering.
            ->orderBy('productperleverancier.DatumLevering', 'asc')
            ->get();

        // Geef product en leveringen door aan de view.
        return view('leverantie.index', [
            'product' => $product,
            'leveringen' => $leveringen,
        ]);
    }
}