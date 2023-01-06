<?php

namespace App\Models\cities;

use App\Models\Providers\Provider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = ['city'];

    public function provider()
    {
        return $this->hasMany(Provider::class);
    }
}
