<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Photo extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The penginapan that belong to the Photo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function penginapan(): BelongsToMany
    {
        return $this->belongsToMany(Penginapan::class, 'penginapan_photos', 'id_photos', 'id_penginapan');
    }
}
