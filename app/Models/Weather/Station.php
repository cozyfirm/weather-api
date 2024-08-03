<?php

namespace App\Models\Weather;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static get()
 */
class Station extends Model{
    use HasFactory;

    protected $table = 'weather__station';
    protected $guarded = ['id'];

}
