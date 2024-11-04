@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Articles</h1>

    @foreach ($articles as $article)
        <div class="mb-6 border-b pb-4">
            <h2 class="text-xl font-semibold">{{ $article->title }}</h2>
            <p>{{ $article->content }}</p>
        </div>
    @endforeach

    <h2 class="text-xl font-bold mt-8">Newsletter</h2>
    <p class="mb-4">Inscrivez-vous à notre newsletter pour recevoir les dernières nouvelles et articles.</p>

    <form method="POST" action="{{ route('newsletter.subscribe') }}">
        @csrf
        <div class="mb-4">
            <input type="email" name="email" placeholder="Votre email" class="border rounded px-4 py-2 w-full" required>
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">S'inscrire</button>
    </form>
</div>
@endsection
