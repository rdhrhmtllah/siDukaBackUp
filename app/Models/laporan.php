<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class laporan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $with = ['pelapor'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
