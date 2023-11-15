<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utilisateur extends Model
{
    use HasFactory;
    protected $table = 'utilisateurs';

    protected $primaryKey = 'idUser';
    protected $fillable = [
        'NomUser', 'PrenomUser', 'NumTelUser','email','Password',
    ];
    public function assocs()
    {
        return $this->hasMany(assoc::class);
    }
}
