<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function document()
    {
        return $this->hasMany(Document::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
