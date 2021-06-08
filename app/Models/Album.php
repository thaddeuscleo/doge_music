<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, int $id)
 * @method static paginate(int $int)
 * @method static findOrFail($id)
 * @method static find($id)
 * @property mixed name
 * @property mixed artist_name
 * @property mixed price
 * @property mixed album_art
 * @property mixed id
 */
class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'album_art',
        'price',
        'artist_name'
    ];

    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
