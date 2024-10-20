<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Movie extends Model
{
    use CrudTrait;

    protected $fillable = [ "user_id", "title", "description", "thumbnail", "release_date", "genre", 'average_rating'];

    public function user()
{
    return $this->belongsTo(User::class);
}

public function reviews()
{
    return $this->hasMany(Review::class);
}

// Method to calculate average rating
public function calculateAverageRating()
{
    $averageRating = $this->reviews()->average('rating');


    $this->average_rating = $averageRating ?: 0;
    $this->save();
}



}

