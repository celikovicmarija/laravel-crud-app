<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
class Author extends Model
{
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'city',
        'country',
        'birthDate'       
    ];

    /*
   // use HasFactory;

   public function books(){
       return $this->hasMany(Task::class);
   }*/
}
