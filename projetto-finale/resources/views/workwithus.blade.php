<x-layout>


            <div class="container shadow p-5 mb-4 bg-body rounded opacity-100">
                <div class="row">
                    <div class="container-fluid my-10 ">
                        <div class="row">
                            <div class="col-12-col-md-6 text-center ">
                                <h1>Lavora con noi</h1>
                            </div>
                        </div>
                    </div>
                    <div class="contain my-5">
                        <div class="row">
                            <div class="col-12-col-md-6">
                                <h3>Lavora come scrittore</h3>
                                <p>Come scrittore del sito, puoi gestire centralmente le autorizzazioni relative alle origini dati. Gli altri attributi che tu o il gestore di dati potete gestire centralmente sono le informazioni di connessione (credenziali, token di accesso) e le pianificazioni degli aggiornamenti per le origini dati nel cloud.</p>

                                <h3>Lavora come revisore</h3>
                                <p>Come rivisore del sito, puoi gestire centralmente le autorizzazioni relative alle origini dati. Gli altri attributi che tu o il gestore di dati potete gestire centralmente sono le informazioni di connessione (credenziali, token di accesso) e le pianificazioni degli aggiornamenti per le origini dati nel cloud.</p>

                                <h3>Lavora come amministrattore</h3>
                                <p>Come amministratore del sito, puoi gestire centralmente le autorizzazioni relative alle origini dati. Gli altri attributi che tu o il gestore di dati potete gestire centralmente sono le informazioni di connessione (credenziali, token di accesso) e le pianificazioni degli aggiornamenti per le origini dati nel cloud.</p>


                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <form action="{{ route('user.role.request') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label h3">Per quale posizione vuoi candidarti ?</label>
                                <select class="form-control" name="role" id="">
                                    <option value="admin">Amministarttore</option>
                                    <option value="revisore">Revisore</option>
                                    <option value="writer"> Scrittore </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label h5">Inviaci la tua email</label>
                                <input type="email" class="form-control" name="email"
                                    @auth value="{{ Auth::user()->email }}" @endauth>
                            </div>
                            <div class="mb-3">
                                <label class="form-label h5">Perché dovremmo assumerti?</label>
                                <textarea name="presentation" class="form-control" id="cols" cols="30" rows="10"></textarea>
                            </div>
                            <button class="btn btn-primary">Invia candidatura</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>


</x-layout>
