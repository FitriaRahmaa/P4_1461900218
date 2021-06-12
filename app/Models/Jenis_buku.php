<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_buku extends Model
{
    use HasFactory;

    protected $table = 'Jenis_buku';
    protected $fillable =['id', 'jenis_buku'];

    public $timestamps = false;
}
