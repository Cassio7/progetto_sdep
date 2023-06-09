<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// modello relazione tra prodotti e ordini
class Product extends Model
{
    use HasFactory;
    protected $table = 'products'; //riferimento alla tabella nel database

    public function ordini()  //un ordine ha più prodotti
        {
            return $this->hasMany(Orders::class);
        }
}
