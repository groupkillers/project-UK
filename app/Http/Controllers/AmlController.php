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

    public function createAml(Request $Request) {
        $validateAmls=array(
            "client_ID"=>"required|unique:amls",
            "passport_proff"=>"required",
            "passport_expire_date"=>"required",
            "address_proff"=>"required",
            "address_expire_date"=>"required"
        );

        $validator=Validator::make($Request->all(),$validateAmls);

        if($validator->fails()) {
            return response()->json($validator->errors(),401); 
        } else {
            $result = Aml::create([
                'client_ID' => $Request->client_ID,
                'passport_proff' => $Request->passport_proff,
                'passport_expire_date' => $Request->passport_expire_date,
                'address_proff' => $Request->address_proff,
                'address_expire_date' => $Request->address_expire_date,
            ]);
            
            if($result) {
                return [
                    "Result" => "Data Add Successfully !"
                ];
            } else {
                return [
                    "Result" => "Please Try Again !"
                ];
            }
        }
    }

    public function updateAml(Request $Request) {
        $validateAmls=array(
            "passport_proff"=>"required",
            "passport_expire_date"=>"required",
            "address_proff"=>"required",
            "address_expire_date"=>"required"
        );

        $validator=Validator::make($Request->all(),$validateAmls);

        if($validator->fails()) {
            return response()->json($validator->errors(),401);
        } else {
            $result = DB::table('amls')
                ->where('id', 1)
                ->update([
                    'passport_proff' => $Request->passport_proff,
                    'passport_expire_date' =>$Request->passport_expire_date,
                    'address_proff' => $Request->address_proff,
                    'address_expire_date' => $Request->address_expire_date
                ]);
            if($result) {
                return ["Result" => "Data Updated Successfully !"];
            } else {
                return ["Result" => "Please Try Again !"];
            }
        }
    }

    public function deleteAml($client_ID) {
        $result = DB::table('amls')
            ->where('client_ID', '=', $client_ID)
            ->delete();

        if($result) {
            return ["Result" => "Data Deleted Successfully !"];
        } else {
            return ["Result" => "Please Try Again !"];
        }
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
