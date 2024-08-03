<?php

namespace App\Models\Weather;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @method static create(array $array)
 * @method static where(string $string, string $string1, string $date)
 */
class Temperature extends Model{
    use HasFactory;

    protected $table = 'weather__temperature';
    protected $guarded = ['id'];

    public function stationRel(): HasOne{
        return $this->hasOne(Station::class, 'id', 'station');
    }
}
