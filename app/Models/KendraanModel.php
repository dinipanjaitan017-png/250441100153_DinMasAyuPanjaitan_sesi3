<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KendraanModel extends Model
{

    use HasFactory;

    protected $table = 'kendraan';
    protected $fillable = ['id', 'plat_no', 'merek', 'jenis', 'tarif_perahri', 'crate_pudate'];
}

