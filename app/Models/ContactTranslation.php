<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'footer_text',
        'language_id',
        'contact_id',
    ];
}
