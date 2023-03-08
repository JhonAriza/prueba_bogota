<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Expertise;
use App\Models\Cultural_right;
use App\Models\Nac;
class Categoria extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    
    protected $fillable = ['nombre','actividad','id_expertises',
   'id_cultural_rights','id_nacs'];


 

     public function Expertise()
     {
         return $this->belongsTo(Expertise::class, 'id_expertises');
     }
     public function Cultural_right()
     {
         return $this->belongsTo(Cultural_right::class, 'id_cultural_rights');
     }
     public function Nac()
     {
         return $this->belongsTo(Nac::class, 'id_nacs');
     }
}
