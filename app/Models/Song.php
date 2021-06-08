<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, int $id)
 * @method static findOrFail($id)
 * @property mixed title
 * @property mixed album_id
 */
class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
