<?php

namespace App\Http\Controllers\Providers;

use App\Models\Providers\Provider;
use App\Models\Offices\Office;
use App\Models\Services\Service;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProviderController extends Controller
{

    public function index()
    {

        $provider = Provider::get();
        // dd($provider);
        return view('SearchAboutProvider', ['provider' => $provider]);
    }
    public function search(Request $request)
    {
        if ($request->search) {
            $provider = Provider::where('name', 'like', '%' . $request->search . '%')
                ->orwhere('OfficeName', 'like', '%' . $request->search . '%')->get();
            return view('SearchAboutProvider', ['provider' =>  $provider]);
        } else {
        }

        // if ($request->ajax()) {

        //     $data = Provider::where('name', 'like', '%' . $request->search . '%')
        //         ->orwhere('OfficeName', 'like', '%' . $request->search . '%')->get();



    }
}