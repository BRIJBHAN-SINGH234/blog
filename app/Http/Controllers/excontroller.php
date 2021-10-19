<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class excontroller extends Controller
{
    //
     function add_product(Request $req){
         $data[]= $req->file;

         foreach($data ->fileName as $file){
             print_r ($file);
               echo "<br>";
                 echo "<br>";
                   echo "<br>";
                     echo "<br>";
                       echo "<br>";
         }
       
        //  foreach($req->file as $data){
        //    return $data->store('images');
        //  }
        
      
     }
    }
