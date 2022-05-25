<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function show(Recipe $recipe)
    {
        $this->authorize('recipe_published', $recipe);

        return view('recipe', compact('recipe'));
    }
}
