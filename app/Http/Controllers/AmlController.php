<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aml;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\DB;

class AmlController extends Controller
{
    public function ViewAml() {
        return Aml::all();
    }

    public function createAml(Request $request) { 
        $request->validate([
            "client_ID"=>"required|unique:amls",
            "passport_proff"=>"required",
            "passport_expire_date"=>"required",
            "address_proff"=>"required",
            "address_expire_date"=>"required"
        ]);

        Aml::create([
            'client_ID' => $request->client_ID,
            'passport_proff' => $request->passport_proff,
            'passport_expire_date' => $request->passport_expire_date,
            'address_proff' => $request->address_proff,
            'address_expire_date' => $request->address_expire_date,
        ]);
            
        return Response()
            ->json([
                'message' => ['user create success..!']
            ], 200);
    }
    

    public function updateAml(Request $request, $id) {
        $request->validate([
            "passport_proff" => "required",
            "passport_expire_date" => "required",
            "address_proff" => "required",
            "address_expire_date" => "required"
        ]);

        Aml::where('id', $id)
            ->update([
                'passport_proff' => $request->passport_proff,
                'passport_expire_date' => $request->passport_expire_date,
                'address_proff' => $request->address_proff,
                'address_expire_date' => $request->address_expire_date
            ]);

        return Response()
            ->json([
                'message' => ['user update success..!']
            ], 200);
    }

    public function deleteAml($client_ID) {
        $aml = Aml::find($client_ID);
        $aml->delete();
        return Response()
            ->json([
                'message' => ['user delete success..!']
            ], 200);
       
    }
    
    Public function searchAml($client_ID) {
        return Aml::where('client_ID','like','%'.$client_ID.'%') 
            ->get();
        // $aml = Aml::search('amlss')
        //     ->where('client_ID', $client_ID)
        //     ->get();
        // return $aml;
    }
}
