<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Commande extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'time'];

    public function produits(){
        return $this->BelongsToMany(Produit::class)->withPivot('quantite');
    }

    public function totalePrix(){
        $total = 0;
        foreach($this->produits as $produit){
            $total += $produit->prix * $produit->pivot->quantite;
        }
        return $total;
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
