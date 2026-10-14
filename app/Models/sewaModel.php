<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sewaModel extends Model
{
  

    use HasFactory;

    protected $table = 'sewa';
    protected $fillable = ['id', 'kendraan_id', 'nama_penyewa', 'tanggal_mulai', 'lama_sewa', 'total_biaya','status','cretae_at,update'];
}
