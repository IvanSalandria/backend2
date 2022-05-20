<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * @property string $language;
 * @property string $created_at;
 * @property string $updated_at;
 * @property string $deleted_at;
 */


class Language extends Model
{
    use SoftDeletes;

    protected $keyType = 'integer';
    
    protected $fillable = [
        'id',
        'language',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
