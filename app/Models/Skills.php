<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Skills; 

class Skills extends Model
{
    use HasFactory;
    protected $table= "skills";
    protected $primarykey= "id";
}
