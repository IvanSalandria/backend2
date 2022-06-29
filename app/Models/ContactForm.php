<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $id;
 * @property string $subject;
 * @property string $contact;
 * @property string $email;
 * @property string $message;
 * @property string $created_at;
 * @property string $updated_at;
 * @property string $deleted_at;
 */

class ContactForm extends Model
{
    use SoftDeletes;
    protected $keyType = 'integer';
    
    protected $fillable = [
        'id',
        'subject',
        'contact',
        'email',
        'message',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
