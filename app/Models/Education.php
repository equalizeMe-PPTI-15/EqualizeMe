<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $guarded = ['idEducation'];

    public function scopeFilter($query, array $filtercari){
        $query->when($filtercari['filtercari'] ?? false, function($query, $valuefiltercari){
            return $query->where('educationTitle', 'like', '%' . $valuefiltercari . '%')
                  ->orWhere('educationContent', 'like', '%' . $valuefiltercari . '%');
        });
    }
}