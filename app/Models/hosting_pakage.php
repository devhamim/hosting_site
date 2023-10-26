<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hosting_pakage extends Model
{
    use HasFactory;

    // relation to hosting package
    function rel_to_host(){
        return $this->belongsTo(hosting_category::class, 'category_id');
    }
}
