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
    function getProductSlidersData(){
        return DB::table('product_sliders')->get();
    }
    function getProductDetailsData(){
        return DB::table('product_details')->get();
    }
    function getProductReviewsData(){
        return DB::table('product_reviews')->get();
    }
    function getProductWishesData(){
        return DB::table('product_wishes')->get();
    }
    function getProductCartsData(){
        return DB::table('product_carts')->get();
    }
   
}
