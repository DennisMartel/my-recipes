<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Livewire\Component;

class Recipes extends Component
{
    public $loadRecipes = false;

    public function loadRecipe()
    {
        $this->loadRecipes = true;
    }

    public function render()
    {
        if ($this->loadRecipes) {
            $recipes = Recipe::where('status', Recipe::PUBLICADO)->latest('id')->take(4)->get();
        } else {
            $recipes = [];
        }

        return view('livewire.recipes', compact('recipes'));
    }
}
