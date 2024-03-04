<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;
    protected $primaryKey = 'idNews';
    protected $guarded = ['idNews'];

    public function scopeFilter($query, array $filtercarinews){

        $query->when($filtercarinews['filtercarinews'] ?? false, function($query, $valuefiltercari){
            return $query->where('heading', 'like', '%' . $valuefiltercari . '%');
        });
    }
    
    }
