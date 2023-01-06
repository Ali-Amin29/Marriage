<?php

namespace App\Models\Providers;

use App\Models\cities\City;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Services\Service;

class Provider extends Model
{
    protected $fillable = [
        'phone', 'password', 'name', 'idNumber',
        'officeAccountNumber', 'providerImage', 'cityId'
    ];

    use HasFactory;

    public function services()
    {
        return $this->hasMany(Service::class, 'providerId');
    }
    public function cities()
    {
        return $this->belongsTo(City::class, 'cityId');
    }
}