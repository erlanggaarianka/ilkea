<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function showFurnitureCreate()
    {
        return view('furniture-create');
    }

    public function catalogue(){
        $furnitures = Furniture::all();
        return view('catalogue', compact('furnitures'));
    }

    public function aboutUs(){
        return view('about-us');
    }

    public function showFurniture($id){
        $furniture = Furniture::findOrFail($id);
        return view('furniture', compact('furniture'));
    }
}
