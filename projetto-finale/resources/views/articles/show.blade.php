
    <x-layout>
        <div class="container my-5 vh-100">
            <div class="row">
                  <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1>{{ $article->title }}</h1>
                    <h1>{{ $article->description }}</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <p>{{ $article->body }}</p>
                <a href="{{ route('articles.category',$article->category) }}" class="card-text">{{ $article->category->name }}</a>
                <p>Pubblicato da : {{ $article->user->name }}</p>
                <p>Pubblicato il : {{ $article->created_at->format('d/m/y') }}</p>
            </div>
        </div>
            </div>
        </div>


    </x-layout>

