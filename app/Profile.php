<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = $this->image ?: 'profile/R26y86EAFIbXb4ZNWqY6pdvz8Lw65I23tMYiq6dT.png';
        return '/storage/' . $imagePath;
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
