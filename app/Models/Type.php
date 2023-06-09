<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Type extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'user_id'];

    public function projects(): HasMany{
        return $this->hasMany(Project::class);
    }

    public function user(): belongsTo {
        return $this->belongsTo(User::class);
    }
}
