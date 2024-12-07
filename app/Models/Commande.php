<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Commande extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'time'];

    public function produits(){
        return $this->belongsToMany(Produit::class)->withTimestamps();
    }
}
