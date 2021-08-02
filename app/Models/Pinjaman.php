<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    use HasFactory;

    protected $table = 'pinjaman'; //Menghubungkan ke table di DB
    protected $guarded = []; //Untuk Mass Assignment

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
