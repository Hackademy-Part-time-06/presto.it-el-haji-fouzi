<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tag</th>
            <th scope="col">Article</th>
            <th scope="col">Modifica</th>
            <th scope="col">Elimina</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tags  as $tag )
        <tr>
            <th scope="row">{{ $tag->id }}</th>
            <td > {{  $tag->id }} </td>
            <td>{{ $tag->article }}</td>
            <td>
                <form action="{{ route('tag.edit',$tag) }}" method="post" class="w-50">
                    @csrf
                    <input type="text" class="form-comtrol" placeholder="nuovo nome " name="name">
                    <button class="btn btn-info" type="submit">Salva</button>
                </form>
            </td>
            <td>
                <form action="{{ route('tag.delete',$tag) }}" class="w-50" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Elimina</button>
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>

</table>
