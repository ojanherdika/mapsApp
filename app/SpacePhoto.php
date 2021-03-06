<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpacePhoto extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * Get the space that owns the SpacePhoto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function space(): BelongsTo
    {
        return $this->belongsTo(Space::class, 'space_id', 'id');
    }
}
