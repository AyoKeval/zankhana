<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Book extends Model
{
    protected $table = 'tbl_books';
    protected $fillable = [
        'title',
        'author',
        'category',
        'pdf_file',
        'is_active',
        'sell_count',
        'ip_address'
    ];

    protected static function booted()
    {
        static::addGlobalScope('not_deleted', function (Builder $query) {
            $query->where('is_del', '!=', 1);
        });
    }
}