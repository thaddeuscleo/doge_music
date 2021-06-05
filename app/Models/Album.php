<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, int $id)
 * @method static paginate(int $int)
 * @method static findOrFail($id)
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
