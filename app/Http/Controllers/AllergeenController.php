<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AllergeenController extends Controller
{
    /**
     * Toon de allergeneninformatie van een product.
     */
    public function show(int $productId): View
    {
        // Haal het gekozen product op.
        $product = DB::table('product')
            ->where('Id', $productId)
            ->first();

        // Haal alle allergenen van het gekozen product op.
        // ProductPerAllergeen koppelt het product aan de allergenen.
        $allergenen = DB::table('productperallergeen')
            ->join(
                'allergeen',
                'productperallergeen.AllergeenId',
                '=',
                'allergeen.Id'
            )
            ->where('productperallergeen.ProductId', $productId)
            ->select(
                'allergeen.Naam',
                'allergeen.Omschrijving'
            )
            // Sorteer de allergenen op Naam oplopend.
            ->orderBy('allergeen.Naam', 'asc')
            ->get();
        // Als het product geen allergenen heeft
if ($allergenen->isEmpty()) {
    return view('allergeen.geen-allergenen', [
        'product' => $product,
    ]);
}
        // Geef product en allergenen door aan de view.
        return view('allergeen.index', [
            'product' => $product,
            'allergenen' => $allergenen,
        ]);
    }
}