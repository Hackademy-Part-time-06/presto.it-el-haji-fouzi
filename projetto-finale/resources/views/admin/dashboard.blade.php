
    <x-layout>
        <div class="container my-3">
            <div class="row">
                <div class="col-12">
                    <h2>Richieste di Amministarttore</h2>
                    <x-admin-requests-table : adminRequests="$adminRequests"/>
                      <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($adminRequest as $user )
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
                <td>
                    <a href="{{ route('adminUserWriter',$user) }}" class="btn btn-primary">Rendi writer</a>
                </td>

                @endforeach
            </tbody>

        </table>
                </div>
            </div>
        </div>
          <div class="container my-3">
            <div class="row">
                <div class="col-12">
                    <h2>Richieste di revisore</h2>
                    <x-revisor-requests-table : revisorRequests="$revisorRequests"/>
                       <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($revisorRequest as $user )
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
                <td>
                    <a href="{{ route('adminUserRevisor',$user) }}" class="btn btn-primary">Rendi revisore</a>
                </td>

                @endforeach
            </tbody>

        </table>
                </div>
            </div>
        </div>
          <div class="container my-3">
            <div class="row">
                <div class="col-12 col-md-8">
                    <h2>Richieste di writer</h2>
                    <x-writer-requests-tabke :writerRequests="$writerRequests"/>
                       <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($writerRequest as $user )
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
                <td>
                    <a href="{{ route('writerUserWriter',$user) }}" class="btn btn-primary">Rendi writer</a>
                </td>

                @endforeach
            </tbody>

        </table>
                </div>
            </div>
        </div>
    </x-layout>

