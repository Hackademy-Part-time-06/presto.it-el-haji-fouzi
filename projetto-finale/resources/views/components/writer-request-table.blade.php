<div>
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
            @foreach ($writerRequests as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
                <td>
                    <a href="{{ route('writerUserWriter', $user) }}" class="btn btn-primary">Rendi
                        writer</a>
                </td>
            @endforeach
        </tbody>

    </table>
</div>
