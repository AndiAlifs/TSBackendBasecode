<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class lokasi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_lokasi';

    /**
     * Get all of the penginapan for the lokasi
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function penginapan(): HasMany
    {
        return $this->hasMany(Penginapan::class, 'id_lokasi', 'id_lokasi');
    }
}
