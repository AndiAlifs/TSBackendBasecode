<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penginapan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_penginapan';

    /**
     * Get the lokasi that owns the Penginapan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lokasi(): BelongsTo
    {
        return $this->belongsTo(lokasi::class, 'id_lokasi', 'id_lokasi');
    }

    /**
     * The photos that belong to the Penginapan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function photos(): BelongsToMany
    {
        return $this->belongsToMany(Photo::class, 'penginapan_photos', 'id_penginapan', 'id_photos');
    }

    /**
     * The fasilitas that belong to the Penginapan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function fasilitas(): BelongsToMany
    {
        return $this->belongsToMany(Fasilitas::class, 'penginapan_fasilitas', 'id_penginapan', 'id_fasilitas');
    }

    /**
     * Get all of the review for the Penginapan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function review(): HasMany
    {
        return $this->hasMany(Review_fasilitas::class, 'id_penginapan', 'id_penginapan');
    }
}
