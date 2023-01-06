<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    protected $fillable = [
        'title', 'subtitle', 'body', 'user_id', 'created_at', 'updated_at'
    ];

    protected $hidden = [
        'user_id'
    ];

    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
