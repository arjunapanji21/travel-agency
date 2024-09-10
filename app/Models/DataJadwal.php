<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataJadwal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sopir(): BelongsTo
    {
        return $this->belongsTo(DataSopir::class, 'data_sopir_id');
    }

    public function kendaraan(): BelongsTo
    {
        return $this->belongsTo(DataKendaraan::class, 'data_kendaraan_id');
    }
}
