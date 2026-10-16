<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactDetailsSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_prefix',
        'title_highlight',
        'title_suffix',
        'description',
        'phone',
        'email',
        'address',
        'submit_button_text',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
