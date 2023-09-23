<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project';

    protected $fillable = [
        'name',
        'description',
        'category',
        'start_date',
        'finish_date',
        'thumbnail',
    ];

    function images(){
        return $this->hasMany(ProjectImage::class);
    }
}
