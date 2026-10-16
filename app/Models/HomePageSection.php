<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_id',
        'section_order',
        'name',
        'section_key',
        'description',
        'edit_url',
        'is_active',
    ];

    protected $casts = [
        'section_order' => 'integer',
        'is_active' => 'boolean',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
