<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $id;
 * @property string $name;
 * @property string $description;
 * @property string $created_at;
 * @property string $updated_at;
 * @property string $deleted_at;
 */


class Product extends Model
{
    use SoftDeletes;
    protected $keyType = 'integer';
    
    protected $fillable = [
        'id',
        'name',
        'description',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
