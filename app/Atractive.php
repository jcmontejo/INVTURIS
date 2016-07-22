<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atractive extends Model
{
    protected $fillable  = [
		'name','region','province','district','category','type','sub_type','description','particularities','actual_state','observations','type_visit','land','aereal','maritime','river','name_image','image',
	];
     public function user()
    {
        return $this->belongsTo(User::class);
    }    
}
