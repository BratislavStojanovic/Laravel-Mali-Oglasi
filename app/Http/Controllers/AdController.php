<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function index()
    {

         if (isset(request()->cat)) {

          //   $cat = Category::where('name',request()->cat)->first();
          //   $all_ads = Ad::with('category')->where('category_id',$cat->id)->get();

          $all_ads = Ad::whereHas('category', function($query)
          {
            //  $query->where('name',request()->cat);
                $query->whereName(request()->cat);

          })->get();
         }else{
            $all_ads = Ad::all();
         }



        
        $all_categories = Category::all();

        return view('welcome',compact('all_ads', 'all_categories'));
    }

    public function show($id)
    {
         $single_ad = Ad::find($id);

         return view('singleAd', compact('single_ad'));
    }
}
