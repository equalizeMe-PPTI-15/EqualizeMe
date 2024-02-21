<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;
    protected $primaryKey = 'idNews';
    protected $guarded = ['idNews'];

    protected $fillable = ['heading', 'newsTitle', 'newsContent', 'gambar'];
}
