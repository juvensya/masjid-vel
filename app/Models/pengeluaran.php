<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pengeluaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'judul_pengeluaran',
        'deskripsi',
        'nominal',
    ];

    public function user(): BelongsTo
    {
        return $this->BelongsTo(related: User::class, foreignKey: 'id_user');
    }
}
