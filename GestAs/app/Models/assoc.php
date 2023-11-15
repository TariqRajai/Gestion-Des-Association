<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assoc extends Model
{
    use HasFactory;
    protected $table = 'assocs';

    protected $primaryKey = 'NumeroNational';
    protected $fillable = [
        'Nom', 'Quartier', 'LieuAssoc','DateCreation','TypeActivite','NomPresident','NumTel','Cin',
    ];
    public function utilisateur()
    {
        return $this->belongsTo(utilisateur::class);
    }

    public function activites()
    {
        return $this->belongsToMany(activite::class, 'contients');
    }
}
