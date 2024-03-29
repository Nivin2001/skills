<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cat extends Model
{
    use HasFactory ,SoftDeletes;
    protected $fillable=['name','active'];

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
