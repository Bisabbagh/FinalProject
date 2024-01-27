<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiftUser extends Model
{
    use HasFactory;
    protected $table = 'gift_user';
    protected $fillable = ['user_id', 'gift_id'];

    /**
     * Define the relationship with users.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Define the relationship with gifts.
     */
    public function gift()
    {
        return $this->belongsTo(Gift::class);
    }
}