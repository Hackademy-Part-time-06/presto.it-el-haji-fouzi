<x-layout>
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <h2>Richieste di Amministarttore</h2>
                <x-admin-request-table : adminRequests="$adminRequests" />

            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <h2>Richieste di revisore</h2>
                <x-revisor-request-table : revisorRequests="$revisorRequests" />

            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row">
            <div class="col-12 col-md-8">
                <h2>Richieste di writer</h2>
                <x-writer-request-table :writerRequests="$writerRequests" />

            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row">
            <div class="col-12 col-md-8">
                <h1>Bentornato {{ Auth::user()->name }}</h1>
                <x-writer-requests-table :writerRequests="$writerRequests" />

            </div>
        </div>

        <div class="row">
            <div class="col-12 ">
                <h2>Richieste di writer</h2>
                <x-revisor-table :articles="$articles" />


            </div>
        </div>
    </div>

</x-layout>
