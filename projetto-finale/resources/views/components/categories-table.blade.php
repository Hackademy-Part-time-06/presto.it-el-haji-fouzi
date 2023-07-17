<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Creato il</th>
            <th scope="col">Status</th>
            <th scope="col">Modifica</th>
            <th scope="col">Elimina</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <td>{{ $article->title }}</td>
                <td>{{ $article->created_at->format("d/m/y") }}</td>
                <td>
                    {{ $article->is_accepted ? "Publicato":"Non publicato"}}
                </td>
                <td>
                    <a href="{{ route('article.edit',$article) }}" class="btn btn-info">Modifica</a>
                </td>
               
                <td>
                    <form action="{{ route('category.delete') }}" class="w-50" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Elimina</button>
                    </form>
                </td>

            </tr>
        @endforeach
    </tbody>

</table>
