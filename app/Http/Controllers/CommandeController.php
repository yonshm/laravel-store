<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Console\Command;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commandes = Commande::all();
        return view('commandes.index', compact('commandes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $commande = Commande::find($id);
        return view('commandes.show', compact('commande'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
        public function updateStatus(Request $request, string $id)
    {
        // Validation de la requête
        $request->validate([
            'status' => 'required|string|in:En attente,Confirmée,En traitement,Expédiée,Livrée,Annulée,Remboursée',
        ]);

        // Recherche de la commande
        $commande = Commande::find($id);

        if (!$commande) {
            // Si la commande n'existe pas, retourner une erreur
            return redirect()->back()->with('error', 'Commande introuvable.');
        }

        // Mise à jour du statut
        $commande->status = $request->status;
        $commande->save();

        // Redirection avec un message de succès
        // return response()->json(['success' => 'Statut de la commande mis à jour avec succès.', 'status' => $commande->status]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Commande::find($id)->delete();
    }
}
