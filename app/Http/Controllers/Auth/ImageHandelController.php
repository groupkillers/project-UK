<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageHandelController extends Controller {
    public function fetchImage (Request $request) {
        $request->validate([
            'file' => 'required|mimes:jpg,bmp,png|max:2048',
        ]);
    
        $fileName = time().'.'.$request->file->extension(); 
        $request->file->move(public_path('images'), $fileName);
     
        return Response()
            ->json([
                'message' => ['success fuli file upload']
                ], 200);
    }
}
