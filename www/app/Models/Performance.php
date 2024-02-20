<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Performance extends Model
{
    use HasFactory;
    protected $guarded = [
      'id'
    ];

    public function genres():BelongsTo
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }
}
