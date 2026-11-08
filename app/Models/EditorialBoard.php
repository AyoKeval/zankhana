<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class EditorialBoard extends Model
{
    use HasFactory;

    protected $table = 'tbl_editorial_board';

    protected $fillable = [
        'name',
        'board_type',
        'designation',
        'institution',
        'university',
        'expertise',
        'email',
        'address',
        'google_scholar',
        'researchgate',
        'scopus_id',
        'other',
        'is_active',
        'is_del',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_del' => 'boolean',
    ];

    protected static function booted()
    {
        static::addGlobalScope('not_deleted', function (Builder $query) {
            $query->where('is_del', '!=', 1);
        });
    }
}

