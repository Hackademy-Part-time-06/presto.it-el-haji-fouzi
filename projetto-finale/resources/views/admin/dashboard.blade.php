<x-layout>

    {{-- <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1>Bentornato{{ Auth::user()->name }}</h1>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <x-revisor-table :articles="$articles" >
                    table>
                </div>
            </div>
        </div> --}}
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <h2>Richieste di Amministarttore</h2>
                <x-admin-requests-table : adminRequests="$adminRequests" />

            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <h2>Richieste di revisore</h2>
                <x-revisor-requests-table : revisorRequests="$revisorRequests" />

            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row">
            <div class="col-12 col-md-8">
                <h2>Richieste di writer</h2>
                <x-writer-requests-table :writerRequests="$writerRequests" />

            </div>
        </div>
    </div>
    {{-- <div class="container my-3">
        <div class="row">
            <div class="col-12 col-md-8">
                <h1>Bentornato {{ Auth::user()->name }}</h1>
                <x-writer-requests-table :writerRequests="$writerRequests" />

            </div>
        </div> --}}
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2>Crea tag</h2>
                <x-tags-form />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2>Gestisci i tag</h2>
                <x-tags-table :tags="$tags" />
            </div>
        </div>
    </div>


</x-layout>
