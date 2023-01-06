<?php

namespace App\Http\Controllers\Providers;

use App\Models\Providers\Provider;
use App\Models\cities\City;
use App\Models\Services\Service;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProviderController extends Controller
{

    public function index()
    {

        $provider = Provider::with('cities', 'services')->get();
        // dd($provider);
        $services = Service::get();

        // foreach ($offices as $c) {
        //     dd($c->cities);
        // }
        // dd($offices);
        return view('SearchAboutProvider', ['provider' => $provider, 'services' => $services]);
    }
    public function search(Request $request)
    {
        if ($request->search) {
            $provider = Provider::where('name', 'like', '%' . $request->search . '%')->get();
            // ->orwhere('OfficeName', 'like', '%' . $request->search . '%')
            return view('SearchAboutProvider', ['provider' =>  $provider]);
        } else {
        }

        // if ($request->ajax()) {

        //     $data = Provider::where('name', 'like', '%' . $request->search . '%')
        //         ->orwhere('OfficeName', 'like', '%' . $request->search . '%')->get();



    }
}