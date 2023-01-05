<?php

namespace App\Models\Providers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Offices\Office;
use App\Models\Services\Service;

class Provider extends Model
{
    protected $fillable = [
        'phone', 'password', 'officeId', 'name', 'idNumber',
        'officeAccountNumber', 'providerImage'
    ];

    use HasFactory;
    public function office()
    {
        return $this->belongsTo(office::class, 'officeId');
    }
    public function services()
    {
        return $this->hasMany(Service::class, 'providerId');
    }
}