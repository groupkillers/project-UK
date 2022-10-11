<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aml;
use Illuminate\Support\Facades\Validator;

class AmlController extends Controller
{
    //View Coding
    public function ViewAml(){
        return Aml::all();
    }

    // Insert Coding
    public function createAml(Request $Request){
        $validateAmls=array(
            "client_ID"=>"required|unique:amls",
            "passport_proff"=>"required",
            "passport_expire_date"=>"required",
            "address_proff"=>"required",
            "address_expire_date"=>"required"
        );
        $validator=Validator::make($Request->all(),$validateAmls);
        if($validator->fails())
        {
            return response()->json($validator->errors(),401);
           
        }
        else
        {
        $amls=new Aml;

        $amls->client_ID=$Request->input('client_ID');
        $amls->passport_proff=$Request->input('passport_proff');
        $amls->passport_expire_date=$Request->input('passport_expire_date');
        $amls->address_proff=$Request->input('address_proff');
        $amls->address_expire_date=$Request->input('address_expire_date');

        $result=$amls->save();
        if($result)
        {
            return ["Result" => "Data Add Successfully !"];
            return response()->json($amls);
        }
        else
        {
            return ["Result" => "Please Try Again !"];

        }
    }
        

    }

    //Update Coding
    public function updateAml(Request $Request)
    {
        $validateAmls=array(
            "passport_proff"=>"required",
            "passport_expire_date"=>"required",
            "address_proff"=>"required",
            "address_expire_date"=>"required"
        );
        $validator=Validator::make($Request->all(),$validateAmls);
        if($validator->fails())
        {
            return response()->json($validator->errors(),401);
           
        }
        else
        {
        $amls= Aml::find($Request -> id);

        // $amls->client_ID=$Request->client_ID;
        $amls->passport_proff=$Request->passport_proff;
        $amls->passport_expire_date=$Request->passport_expire_date;
        $amls->address_proff=$Request->address_proff;
        $amls->address_expire_date=$Request->address_expire_date;

        $result=$amls->save();

        if($result)
        {
            return ["Result" => "Data Updated Successfully !"];
            return response()->json($amls);
        }
        else
        {
            return ["Result" => "Please Try Again !"];

        }
    }
    }

    //Delete Coding
    public function deleteAml($client_ID)
    {
        $amls= Aml::find($client_ID);
        $result=$amls->delete();

        if($result)
        {
            return ["Result" => "Data Deleted Successfully !"];
        }
        else
        {
            return ["Result" => "Please Try Again !"];

        }
    }

    //Search Coding
    Public function searchAml($client_ID)
    {
        return Aml::where('client_ID','like','%'.$client_ID.'%') ->get();
    }
}
