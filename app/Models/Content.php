<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug',
        'category_id',
        'isi',
        'foto',
        'status',
        'row_status',
        'created_by',
        'hari',
        'jam',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
