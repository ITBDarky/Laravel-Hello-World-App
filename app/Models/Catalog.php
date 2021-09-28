<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

    // Make field 'name' fillable
    protected $fillable = ['name'];

    // Make field to be guarded(non-fillable) as none, but this will stop field 'id' guarding.
    // protected $guarded = [];
}
