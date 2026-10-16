<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FormSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'crm_form_id',
        'form_name',
        'form_slug',
        'name',
        'email',
        'phone',
        'country_iso',
        'country_code',
        'service',
        'specialist',
        'contact_method',
        'message',
        'payload',
        'status',
        'admin_notes',
        'ip_address',
        'page_url',
    ];

    protected $casts = [
        'payload' => 'array',
    ];

    public function crmForm(): BelongsTo
    {
        return $this->belongsTo(CrmForm::class, 'crm_form_id');
    }

    public function getCountryFlagAttribute(): string
    {
        $iso = $this->country_iso;
        if (!$iso || strlen($iso) !== 2) {
            // Check if phone starts with a known code like +971, +92, +1
            if ($this->phone) {
                if (str_starts_with($this->phone, '+971') || str_starts_with($this->phone, '971')) return '🇦🇪';
                if (str_starts_with($this->phone, '+92') || str_starts_with($this->phone, '92')) return '🇵🇰';
                if (str_starts_with($this->phone, '+1')) return '🇺🇸';
                if (str_starts_with($this->phone, '+44')) return '🇬🇧';
                if (str_starts_with($this->phone, '+966') || str_starts_with($this->phone, '966')) return '🇸🇦';
                if (str_starts_with($this->phone, '+91') || str_starts_with($this->phone, '91')) return '🇮🇳';
            }
            return '🌐';
        }
        $iso = strtoupper($iso);
        $firstChar = mb_chr(ord($iso[0]) - 65 + 0x1F1E6, 'UTF-8');
        $secondChar = mb_chr(ord($iso[1]) - 65 + 0x1F1E6, 'UTF-8');
        return $firstChar . $secondChar;
    }

    public function getFormattedPhoneAttribute(): string
    {
        return $this->country_flag . ' ' . ($this->phone ?? '—');
    }
}
