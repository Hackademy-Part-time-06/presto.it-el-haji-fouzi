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
                 @if (is_array($revisorRequests) || is_object($revisorRequests))
                {
                @foreach ($revisorRequests as $article)
                    {
                    <tr>
                        <th scope="row">{{ $article->id }}</th>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->category->name }}</td>
                    <td>{{ $article->user->name }}</td>
                    <td>{{ $article->created_at->format('y-m-d') }}</td>
                    </tr>
                    <td>
                    <a href="{{ route('admin.makeUserRevisor', $user) }}" class="btn btn-primary">Rendi
                        revisore</a>
                </td>
                    }
                }
            @endforeach
            @endif
        
        </tbody>

    </table>

</div>
