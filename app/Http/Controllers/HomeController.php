<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Test;
use App\Categories;

class HomeController extends Controller
{
    public function index(){
        $logged = Auth::check();
        $tableTest = HomeController::getTest();
        $tableCategories = HomeController::getCategories();
        return view('layouts.home', compact('tableTest', 'tableCategories', 'logged'));
    }
    
    public static function getTest(){
        $tableTestdb = Test::join('categories', 'id_categories', '=', 'categories.id')->select('test.*', 'categories.title as categories')->getQuery()->get();
        $tableTest = array();
        foreach ($tableTestdb as $key) {
           array_push($tableTest, array(
            'id_categories' => $key->id_categories,
            'categories'=> $key->categories,
            'id' => $key->id,
            'title_test' => $key->title,
            'image_test' => $key->image
        ));
        }
        return $tableTest;
    }
    public static function getCategories(){
        $tableCategoriesdb = Categories::all();
        $tableCategories = array();
        foreach ($tableCategoriesdb as $key) {
            array_push($tableCategories, array(
                'id_categories' => $key->id,
                'categories' => $key->title
            ));
        }
        return $tableCategories;
    }
}
