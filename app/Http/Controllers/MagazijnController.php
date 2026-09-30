<?php

namespace App\Http\Controllers;

use App\Models\Magazijn;
use Illuminate\View\View;

class MagazijnController extends Controller
{
    /**
     * Toon het overzicht van alle producten
     * die aanwezig zijn in het magazijn.
     */
    public function index(): View
    {
        // Haal de magazijngegevens op en koppel deze
        // aan de bijbehorende productgegevens.
        $magazijn = Magazijn::query()
            ->join('product', 'magazijn.ProductId', '=', 'product.Id')
            ->select(
                'magazijn.Id',
                'magazijn.ProductId',
                'magazijn.VerpakkingsEenheid',
                'magazijn.AantalAanwezig',
                'product.Naam',
                'product.Barcode'
            )
            // Sorteer de producten op Barcode oplopend.
            ->orderBy('product.Barcode', 'asc')
            ->get();

        // Geef de gegevens door aan de overzichtspagina.
        return view('magazijn.index', compact('magazijn'));
    }
}