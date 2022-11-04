<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function storeImage(Request $request){
        $request->validate([
            'image' => 'required|image',
        ]);
    
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);


    }


}
