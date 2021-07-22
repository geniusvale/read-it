<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'tbl_buku'; //Menghubungkan ke table di DB
    protected $guarded = []; //Untuk Mass Assignment
}
