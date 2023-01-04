<?php

namespace App\Models\Services;

use App\Models\Providers\Provider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
}