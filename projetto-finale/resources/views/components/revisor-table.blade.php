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
            @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{ $articles->id }}</th>
                    <td>{{ $articles->title }}</td>
                    <td>{{ $articles->category->name }}</td>
                    <td>{{ $articles->user->name }}</td>
                    <td>{{ $articles->created_at->format('y-m-d') }}</td>
                    <td>
                        <a href="{{ route('revisor.detail', $article) }}" class="btn btn-primary">Leggi</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</div>
