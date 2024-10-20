<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [ "user_id", "movie_id","ratings", "comments"];

    public function user()
{
    return $this->belongsTo(User::class);
}

public function movie()
{
    return $this->belongsTo(Movie::class);
}

}
