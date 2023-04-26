<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peshala_list_product extends Model
{
    use HasFactory;
    protected $table = 'peshala_list_products';
    protected $primarykey = 'id';
    protected $fillable = ['name','price','category','status'];
}
