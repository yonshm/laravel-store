<?php

namespace App\Http\Controllers;


use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $produits = Produit::paginate(10);
        $categories = Categorie::all();
        return view('produits.index',compact('produits','categories')); 
    }

    // Show products affected to specific categorie
    public function indexByCat($id)
    {

        $produits = Produit::where("categorie_id", $id)->get();
        
        $categories = Categorie::all();
        return view('produits.index',compact('produits','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('produits.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nom' => 'required|string',
            'prix' => 'required|integer',
            'quantite' => 'required|numeric',
            'description' => 'nullable|string',
            'categorie_id' => 'required|exists:categories,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('produits/images', 'public');
            $validateData['image'] = $imagePath;
        }   
        Produit::create($validateData);
        return redirect()->route('produits.index')->with('success', 'Produit ajouté avec succès.');;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produit = Produit::find($id);
        return view('produits.show',compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Categorie::all();
        $produit = Produit::find($id);
        return view('produits.edit', compact('produit','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produit = Produit::find($id);
        $validateData = $request->validate([
            'nom' => 'required|string'.$id,
            'prix' => 'required'.$id,
            'quantite' => 'required|numeric' .$id,
            'description' => 'nullable|string' .$id,
            'categorie_id' => 'required|exists:categories,id' .$id,
            'image' => 'image|max:2048' .$id
        ]);
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('produits/images', 'public');
            $validateData['image'] = $imagePath;
        } 
        $produit->update($validateData);
        return redirect()->route('produits.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produit::find($id)->delete();

        // return redirect()->route('produits.index');
    }
}
