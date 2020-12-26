<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;
class Post extends Model
{
    use HasFactory;
    public function contact(){
        return $this->belongsTo(Contact::class);
    }
    protected $fillable = [
        'title',
        'postContent',
        'date',
        'topic',
        'readingTime',
        'contactId'
    ];
}