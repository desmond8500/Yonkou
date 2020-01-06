<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $citation->id }}</p>
</div>

<!-- Auteur Field -->
<div class="form-group">
    {!! Form::label('auteur', 'Auteur:') !!}
    <p>{{ $citation->auteur }}</p>
</div>

<!-- Citation Field -->
<div class="form-group">
    {!! Form::label('citation', 'Citation:') !!}
    <p>{{ $citation->citation }}</p>
</div>

<!-- Detail Field -->
<div class="form-group">
    {!! Form::label('detail', 'Detail:') !!}
    <p>{{ $citation->detail }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $citation->type }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $citation->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $citation->updated_at }}</p>
</div>

