<?php

namespace App\Models\Weather;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Humidity extends Model{
    use HasFactory;

    protected $table = 'weather__humidity';
    protected $guarded = ['id'];
}
