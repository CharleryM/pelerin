<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intranet;

class IntranetController extends Controller
{
    public function index()
    {
        $intranetData = Intranet::first(); // Récupère les données du premier enregistrement
        return view('testIntra', compact('intranetData'));
    }

    public function update(Request $request)
    {
        $intranetData = Intranet::first(); // Récupère les données du premier enregistrement

        $intranetData->update([
            'date_debut' => $request->input('date_debut'),
            'date_fin' => $request->input('date_fin'),
        ]);

        return redirect()->route('testIntttra   ')->with('success', 'Dates mises à jour avec succès.');
    }
}
