<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Document extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tender()
    {
        return $this->belongsTo(Tender::class);
    }

    public function getUrlAttribute()
    {
        return Storage::url($this->url);
    }

    protected function creator()
    {
        return $this->belongsTo(User::class);
    }
}
