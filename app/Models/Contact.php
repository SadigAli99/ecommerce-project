<?php

namespace App\Models;

use App\Http\Traits\Translation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory, Translation;

    protected $fillable = [
        'email',
        'phone',
        'wp_phone',
        'map',
        'header_logo',
        'footer_logo',
        'favicon',
    ];

    protected $translatedAttribute = [
        'address',
        'footer_text',
    ];

    public function translations()
    {
        return $this->hasMany(ContactTranslation::class, 'contact_id');
    }
}
