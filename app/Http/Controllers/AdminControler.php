<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\product;
class AdminControler extends Controller
{
    function add_product(Request $req){
  


      // return $req->hasfile('upload');
      $this->validate($req,[
        'upload'=> 'required',
        'upload.*' => 'image'
      ]);
      // $data[]= $req->upload;
      // return $data->store('images');
      $files=[];
      if($req->upload){
        foreach($req->upload as $file){
         $name= time().rand(1,100).'.'.$file->extension('jpeg','jpg','png');
        //  $file->move(public_path('files'), $name);
         $files[] = $name;
         
          
        //  
        }
         return $name->store('images');
        //  return print_r($files);
        //  echo"<br>";
        // print_r ($files);
      }
      
      // $product = new product;
      //  $product->thumbimg	 = $req->thumbimg;
      //  $product->images = $req->upload;
      //  $product->model = $req->model;
      //   $product->brand = $req->brand;
      //  $product->product_name = $req->product_name;
      //  $product->product_categray = $req->product_categray;
      //  $product->price = $req->price;
      //  $product->mrp = $req->mrp;
      //  $product->description = $req->description;
      //  $product->save();
       
    }
}
