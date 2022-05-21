<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Livewire\Component;

class Recipes extends Component
{
    public function render()
    {
        $recipes = Recipe::where('status', Recipe::PUBLICADO)->latest('id')->take(4)->get();

        return view('livewire.recipes', compact('recipes'));
    }
}
