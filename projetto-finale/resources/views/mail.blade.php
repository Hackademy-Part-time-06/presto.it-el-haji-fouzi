<div>
    <x-layout>
        <div class="container">
            <div class="row">
                <h1>Richiesta ricevuta</h1>
                <h4>Richiesta per il ruolo {{ $info['role'] }}</h4>
                <p>Ricevuta da {{ $info['email'] }}</p>
                <h4>Messaggio :</h4>
                <p>{{ $info['presentation'] }}</p>
            </div>
        </div>
    </x-layout>
</div>
