<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review_fasilitas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primarykey = 'id_reviewFasilitas';

    /**
     * Get the penginapan that owns the Review_fasilitas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function penginapan(): BelongsTo
    {
        return $this->belongsTo(Penginapan::class, 'id_penginapan', 'id_penginapan');
    }
}
