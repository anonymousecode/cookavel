<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ReciperController extends Controller
{
    function getRecipe(Request $request){

      $input = $request->input('input');
      if(!$input){
        return redirect()->back()->with('error', 'Please enter a valid input');
      }

      $response = Http::get("https://www.themealdb.com/api/json/v1/1/search.php?s=".$input);

      if($response->successful()){

        $data = $response->json();
        if(count($data['meals'])>1){

          return view('recipelist',['data' =>$data]);
        }
        else{
          return view('recipe', ['data' => $data]);
        }
       }
      else {
          return redirect()->back()->with('error', 'Failed to fetch recipes. Please try again later.');
      }

    }
}
