<?php

namespace App\Policies;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RecipePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function recipe_published(?User $user, Recipe $recipe)
    {
        if ($recipe->status == 2) {
            return true;
        } else {
            return false;
        }
        
    }
}
