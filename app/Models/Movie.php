<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Movie extends Model
{

    protected $fillable = [ "user_id","title", "description", "thumbnail", "release_date", "genre"];

    public function user()
{
    return $this->belongsTo(User::class);
}





}

