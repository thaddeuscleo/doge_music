<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed album_id
 * @property mixed user_id
 * @method static where(string $string, $id)
 */
class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'album_id'
    ];
}
