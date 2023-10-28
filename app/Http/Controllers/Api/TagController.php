<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\TagResource;

use App\Models\Tag;

class TagController extends Controller
{
    public function index ()
    {
        $tags = Tag::with("recipes.category", "recipes.tags" , "recipes.users")-> get();
        return TagResource::collection($tags);
    }

    public function show (Tag $tag)
    {
        return new TagResource ($tag->load ("recipes"));
    }
}
