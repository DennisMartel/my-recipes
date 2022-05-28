<?php

namespace App\Http\Livewire;

use App\Models\Review;
use Livewire\Component;

class RatingRecipe extends Component
{
    public $recipe, $comment, $rating = 5;

    protected $rules = [
        'comment' => 'required|min:5',
        'rating' => 'required|integer|min:1|max:5',
    ];

    public function render()
    {
        $comments = $this->recipe->reviews()->orderBy('id', 'desc')->take(5)->get();

        return view('livewire.rating-recipe', compact('comments'));
    }

    public function store()
    {        
        $this->validate();

        $this->recipe->reviews()->create([
            'rating' => $this->rating,
            'comment' => $this->comment,
            'user_id'=> auth()->user()->id
        ]);
    }

    public function destroy($id)
    {
        Review::where('id', $id)->delete();
    }
}
