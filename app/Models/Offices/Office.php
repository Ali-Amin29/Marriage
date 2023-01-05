<?php

namespace App\Models\Offices;

use App\Models\Providers\Provider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    protected $fillable = [
        'officeName', 'rate',
    ];
    public function provider()
    {
        return $this->hasMany(Provider::class);
    }
}