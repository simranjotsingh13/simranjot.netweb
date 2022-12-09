<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Skills; 


class Notes extends Model
{
    use HasFactory;
    protected $table= "_notes";
    protected $primarykey= "id";
}
