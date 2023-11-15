<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activite extends Model
{
    use HasFactory;
    protected $table = 'activites';

    protected $primaryKey = 'idActivite';
    protected $fillable = [
        'NomActivite', 'TypeActivite', 'LieuActivite','DateActivite','photo',
    ];
    public function assocs()
    {
        return $this->belongsToMany(assoc::class, 'contients');
    }
}
