<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use CrudTrait;

    protected $fillable = [ "user_id", "movie_id","ratings", "comments"];

    public function user()
{
    return $this->belongsTo(User::class);
}

}
