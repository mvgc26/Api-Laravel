<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\CategoryResource;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index ()
    {
        // all, with
        return Category::all();
    }

    public function show (Category $category)
    {
        return $category->load ("recipes");
    }
}
