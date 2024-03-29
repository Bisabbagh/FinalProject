<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = ['photo_before', 'photo_after','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
