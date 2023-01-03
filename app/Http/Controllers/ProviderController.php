<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function search(Request $request){

        if($request->ajax()){

            $data=Provider::where('name','like','%'.$request->search.'%')
            ->orwhere('OfficeName','like','%'.$request->search.'%')->get();

            $output='';
        if(count($data) >= 0 && $request->search ){
             $output ='
                <table class="table" style="background:white;">
                <tbody>';

                    foreach($data as $row){
                        $output .='
                        <tr>
                        <th scope="row">'.$row->OfficeName.'</th>
                        </tr>
                        ';
                    }



             $output .= '
                 </tbody>
                </table>';
        }
        return $output;

        }




      }

}