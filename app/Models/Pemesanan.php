<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pemesanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function jadwal(): BelongsTo
    {
        return $this->belongsTo(DataJadwal::class, 'data_jadwal_id');
    }
}
