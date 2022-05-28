<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Livewire\Component;
use Livewire\WithPagination;

class AuthorRecipe extends Component
{
    use WithPagination;

    public $user;
    public $search = '';

    protected $queryString = [
        'search' => ['except' => ''],
    ];

    public function updatingSearch()
    {
        $this->resetPage('p');
    }

    public function render()
    {   
        $recipes = $this->user->recipes()
                    ->searchRecipe($this->search)
                    ->where('status', Recipe::PUBLICADO)
                    ->orderBy('id', 'desc')
                    ->paginate(8, ['*'], 'p');     

        return view('livewire.author-recipe', compact('recipes'));
    }
}
