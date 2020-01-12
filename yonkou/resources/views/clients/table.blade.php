<div class="table-responsive-sm">
    <table class="table table-striped" id="clients-table">
        <thead>
            <th>Titre</th>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Local</th>
        <th>Prix</th>
        <th>Ci</th>
        <th>Delivre</th>
        <th>Tel</th>
        <th>Caution</th>
        <th>Contrat</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>
                <td>{{ $client->titre }}</td>
            <td>{{ $client->prenom }}</td>
            <td>{{ $client->nom }}</td>
            <td>{{ $client->local }}</td>
            <td>{{ $client->prix }}</td>
            <td>{{ $client->ci }}</td>
            <td>{{ $client->delivre }}</td>
            <td>{{ $client->tel }}</td>
            <td>{{ $client->caution }}</td>
            <td>{{ $client->contrat }}</td>
                <td>
                    {!! Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clients.show', [$client->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('clients.edit', [$client->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>