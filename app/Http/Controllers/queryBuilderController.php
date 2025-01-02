<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class queryBuilderController extends Controller
{
    function getUsersData(){
        return DB::table('users')->get();
    }
    function getProfilesData(){
        return DB::table('profiles')->get();
    }
    function getCategoriesData(){
        return DB::table('categories')->get();
    }
    function getBrandsData(){
        return DB::table('brands')->get();
    }
    function getProductsData(){
        return DB::table('products')->get();
    }
}
