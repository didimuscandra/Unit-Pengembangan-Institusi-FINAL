<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perolehan extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'perolehans';
    
    protected $fillable = [
        'id',
        'donatur_id',
        'kegiatan_id',
        'tgl_donasi',
        'nama_donasi',
        'jml_donasi',
        'total_donasi'        
    ];
}
