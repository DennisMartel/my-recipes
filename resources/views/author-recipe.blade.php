<x-app-layout>

    <div class="container pt-8">
        <h2 class="text-center text-2xl text-gray-600">Recetas publicadas por: {{ $user->name }}</h2>
    
        @livewire('author-recipe', ['user' => $user])
    </div>

</x-app-layout>