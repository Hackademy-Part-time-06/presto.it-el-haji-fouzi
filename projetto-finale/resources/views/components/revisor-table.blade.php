<div>
    <table>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Scritto da</th>
                <th scope="col">Scritto il</th>
                <th scope="col">Leggi</th>
            </tr>
        </thead>
        <tbody>
        

                @if (is_array($articles) || is_object($articles))
                {
                @foreach ($articles as $article)
                    {
                    <tr>
                        <th scope="row">{{ $article->id }}</th>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->category->name }}</td>
                    <td>{{ $article->user->name }}</td>
                    <td>{{ $article->created_at->format('y-m-d') }}</td>
                    </tr>
                     <td>
                        <a href="{{ route('revisor.detail', $article) }}" class="btn btn-primary">Read</a>
                    </td>
                    }
                }
            @endforeach
            @endif
        </tbody>
    </table>

    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</div>
