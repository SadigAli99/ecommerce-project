<?php

namespace App\Models;

use App\Http\Traits\Translation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory, Translation;

    protected $fillable = [
        'key',
        'sort',
    ];

    public $translatedAttribute = ['value'];

    const SEARCH_ATTRIBUTES = ['key'];

    public function translations()
    {
        return $this->hasMany(SettingTranslation::class, 'setting_id');
    }
}
