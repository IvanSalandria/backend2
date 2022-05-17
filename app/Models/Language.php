<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * @property string $name;
 * @property string $created_at;
 * @property string $updated_at;
 * @property string $deleted_at;
 */


class Language extends Model
{
    use SoftDeletes;

    protected $keyType = 'integer';
    
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
