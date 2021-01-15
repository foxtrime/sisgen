<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{   

    protected $table = "roles";

    protected $fillable = [
    	'role',
    ];

    // Relacionamentos
	public function users()
 	{
        return $this->belongsToMany('App\Users');
 	}  
}
