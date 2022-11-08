<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //$guarded dibuat jika menggunakan create method di method store() Controller.
    //guarded tidak diberi nilai artinya semua kolom boleh diinsert
    protected $guarded;
}
