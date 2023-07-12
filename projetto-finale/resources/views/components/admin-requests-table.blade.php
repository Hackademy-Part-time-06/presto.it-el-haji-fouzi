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

            @if (is_array($adminRequests) || is_object($adminRequests))
                {
                @foreach ($adminRequests as $user)
                    {
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <td>
                        <a href="{{ route('admin.makeUserWriter', $user) }}" class="btn btn-primary">Make writer</a>
                    </td>
                    }
                }
            @endforeach
            @endif



        </tbody>

    </table> <!-- Order your soul. Reduce your wants. - Augustine -->
</div>
