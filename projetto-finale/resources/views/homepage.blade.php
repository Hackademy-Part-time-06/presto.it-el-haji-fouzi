<x-layout>





        <div class="container">
            <div class="row">
                @if (session('message'))
                    <div class="alert alert-success text-center">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </div>






    <div class="container d-flex mt-4 ">
        <div class="container">
            <div class="col-12">
                <div class="col-lg-6 ">
                    @foreach ($articles as $article)
                        <div class="card mb-4 shadow p-2 mb-6 bg-body rounded  bg-black ">

                            <div class="hovereffect">
                                <a href="#!"><img class="card-img-top bg-image hovereffect "
                                        src="{{ Storage::url($article->img) }}" alt="{{ $article->title }}" /></a>
                            </div>

                            <div class="card-body">
                                <div class="small text-muted">January 1, 2023</div>
                                <h2 class="card-title h4">{{ $article->title }}</h2>
                                <p class="card-text">{{ substr($article->description, 0, 20) }}...
                                    .</p>
                                <a href="{{ route('articles.category', $article->category) }}"
                                    class="card-text btn btn-success">{{ $article->category->name }}</a>
                                <a class="btn btn-warning m-4 " href="{{ route('articles.show', $article) }}">Read
                                    →</a>
                            </div>
                        </div>
                    @endforeach


                </div>


            </div>

            <!-- Pagination-->
            <nav aria-label="Pagination">
                <hr class="my-0" />
                <ul class="pagination justify-content-center my-4">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"
                            aria-disabled="true">Newer</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                    <li class="page-item"><a class="page-link" href="#!">15</a></li>
                    <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                </ul>
            </nav>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4 shadow p-3 mb-5 bg-body rounded ">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <form action="{{ route('search.articles') }}" method="get" class="d-flex">
                        <div class="input-group">
                            <input type="text" name="key" class="form-control me-2" placeholder="Search" />
                            <button class="btn btn-warning" id="button-search" type="submit">Search</button>
                        </div>
                    </form>

                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4 shadow p-3 mb-5 bg-body rounded">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 shadow p-3 mb-5 bg-body rounded">
                            <ul class="list-unstyled mb-1">
                                <div class="mb-1">
                                    <li><a class="btn btn-warning "
                                            href="#">Sport</a>
                                    </li>
                                </div>
                                <div class="mb-1">
                                    <li><a class="btn btn-warning"
                                            href="#">Food</a>
                                    </li>
                                </div>
                                <div>
                                    <li><a class="btn btn-warning"
                                            href="# }}">Economy</a>
                                    </li>
                                </div>
                            </ul>
                        </div>
                        <div class="col-sm-6 shadow p-3 mb-5 bg-body rounded">
                            <ul class="list-unstyled mb-0">
                                <div class="mb-1">
                                    <li><a class="btn btn-warning"
                                            href="#">Entertenment</a>
                                    </li>
                                </div>
                                <div class="mb-1">
                                    <li><a class="btn btn-warning"
                                            href="#">Tech</a>
                                    </li>
                                </div>
                                <div class="mb-1">
                                    <li><a class="btn btn-warning"
                                            href="#">Politic</a>
                                    </li>

                                </div>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4 shadow p-3 mb-5 bg-body rounded">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy
                    to
                    use, and feature the Bootstrap 5 card component!</div>
            </div>
        </div>
    </div>
    </div>
</x-layout>
