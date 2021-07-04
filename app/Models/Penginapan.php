<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
}
