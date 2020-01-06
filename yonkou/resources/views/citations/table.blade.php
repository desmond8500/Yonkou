<div class="table-responsive-sm">
    <table class="table table-striped" id="citations-table">
        <thead>
            <th>Auteur</th>
        <th>Citation</th>
        <th>Detail</th>
        <th>Type</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($citations as $citation)
            <tr>
                <td>{{ $citation->auteur }}</td>
            <td>{{ $citation->citation }}</td>
            <td>{{ $citation->detail }}</td>
            <td>{{ $citation->type }}</td>
                <td>
                    {!! Form::open(['route' => ['citations.destroy', $citation->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('citations.show', [$citation->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('citations.edit', [$citation->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>