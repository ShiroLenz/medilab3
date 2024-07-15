<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Administrasi extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * Get the user that owns the Administrasi
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Pasien(): BelongsTo
    {
        return $this->belongsTo('App\Models\Pasien')->withDefault();
    }

    /**
     * Get the user that owns the Administrasi
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Dokter(): BelongsTo
    {
        return $this->belongsTo('App\Models\Dokter')->withDefault();
    }

    protected $dates = ['tanggal'];
}
