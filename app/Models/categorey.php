<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorey extends Model
{
    use HasFactory;
    protected $table="categoreys";
    protected $primaryKey="c_id";
}
