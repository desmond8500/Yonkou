<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $citation->id }}</p>
</div>

<!-- Citation Field -->
<div class="form-group">
    {!! Form::label('citation', 'Citation:') !!}
    <p>{{ $citation->citation }}</p>
</div>

<!-- Auteur Field -->
<div class="form-group">
    {!! Form::label('auteur', 'Auteur:') !!}
    <p>{{ $citation->auteur }}</p>
</div>

<!-- Traduction Field -->
<div class="form-group">
    {!! Form::label('traduction', 'Traduction:') !!}
    <p>{{ $citation->traduction }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $citation->type }}</p>
</div>

