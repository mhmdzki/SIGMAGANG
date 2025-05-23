<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogHarian extends Model
{
    use HasFactory;
    protected $table = 'log_harian';
    protected $primaryKey = 'id';
    protected $fillable = ['mahasiswa_id', 'tanggal', 'status', 'catatan'];

    public function log_mingguan()
    {
        return $this->belongsTo(LogMingguan::class);
    }
}
