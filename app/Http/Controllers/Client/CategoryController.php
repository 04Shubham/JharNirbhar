<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Service;
use App\Models\FreelancerService;


class CategoryController extends Controller
{
    public function index($slug){
        $category = Category::where('slug', $slug)->first();
        $services = Service::where('category_id', $category->id)->simplePaginate(10);
        return view ("home.category.index", compact("category", "services"));
    }

    
}
