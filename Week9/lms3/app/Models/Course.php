<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

   public function students():BelongsToMany
   {
    return $this->belongsToMany(Student::class);
   }

    
    protected $fillable = [
        'name',
        'description',
    ];
}