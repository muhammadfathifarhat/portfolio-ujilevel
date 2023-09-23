<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorDetail extends Model
{
    use HasFactory;

    protected $table = 'author_detail';
    protected $fillable = [
        'short_description',
        'about',
        'location',
        'website_url',
        'website_domain',
        'instagram_url',
        'instagram_id',
        'email_url',
        'email_address',
    ];

    public function author(){
        return $this->belongsTo(User::class, 'author_id');
    }
}
