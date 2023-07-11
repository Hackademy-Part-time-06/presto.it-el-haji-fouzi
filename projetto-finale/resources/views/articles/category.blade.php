<x-layout>
    <section class="h-100 gradient-form" style="background-color #eee;">
        <div>
            <p>
                @if (session('message'))
                    <div class=""alert alert-success>
                        {{ session('message') }}
                    </div>
                @endif
            </p>
        </div>

        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center h-100 shadow p-2 mb-6">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                @foreach ($articles as $article)
                                    <div class="card-body p-md-5 mx-md-4">
                                        <div class="card" style="width: 18rem;">
                                            <img class="card-img-top" src="{{ Storage::url($article->img) }}"
                                                alt="{{ $article->title }}">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $article->title }}</h5>
                                                <p class="card-text">{{ substr($article->description, 0, 20) }}....</p>
                                                <a href="{{ route('articles.category', $article->category) }}"
                                                    class="card-text">{{ $article->category->name }}</a>
                                                <a href="{{ route('articles.show', $article) }}"
                                                    class="btn btn-primary">Read more</a>
                                            </div>
                                        </div>
                                @endforeach


                            </div>
                        </div>


                    </div>




</x-layout>
