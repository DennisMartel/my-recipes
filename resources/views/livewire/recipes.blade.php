<div class="mt-8" wire:init="loadRecipe">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
        @if (count($recipes) > 0)
            @foreach ($recipes as $recipe)
                <x-recipe-card :recipe="$recipe" />
            @endforeach
        @else
            @for ($i = 0; $i < 4; $i++)
                <x-skeleton />
            @endfor
        @endif
    </div>
</div>
