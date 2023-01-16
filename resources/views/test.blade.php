

<table border="1">
    <th>ID</th>
    <th>DESCRIPTION</th>
    <th>URL</th>

    @foreach ($produits as $data)
    <tr>
        <td>{{ $data->id_Produits }}</td>
        <td>{{ $data->Description }}</td>
        <td>{{ $data->URL }}</td>

    </tr>
    @endforeach
</table>
