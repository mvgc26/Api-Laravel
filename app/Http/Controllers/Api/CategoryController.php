<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index ()
    {
        // all, with
        return CategoryCollection(Category::all());
    }

    public function show (Category $category)
    {
        $category = $category->load("recipes.category", "recipes.tags" , "recipes.users");

        return new CategoryResource($category);
    }
}
