<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class Contact extends Model
{
    use HasFactory;
    
    public function posts(){
        return $this->hasMany(Post::class);
    }
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'city',
        'country',
        'birthDate'          
    ];
}