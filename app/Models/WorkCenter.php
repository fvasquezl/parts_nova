<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorkCenter extends Model
{
    use HasFactory;
    protected $table = 'work_centers';


    public function kits(): HasMany
    {
        return $this->hasMany(Kits::class);
    }
}
