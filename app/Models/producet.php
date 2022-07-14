<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producet extends Model
{
    use HasFactory;
    protected $table="producets";
    protected $primaryKey="p_id";
}
