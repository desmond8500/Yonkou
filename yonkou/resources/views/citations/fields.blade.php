<!-- Citation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('citation', 'Citation:') !!}
    {!! Form::text('citation', null, ['class' => 'form-control']) !!}
</div>

<!-- Auteur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('auteur', 'Auteur:') !!}
    {!! Form::text('auteur', null, ['class' => 'form-control']) !!}
</div>

<!-- Traduction Field -->
<div class="form-group col-sm-6">
    {!! Form::label('traduction', 'Traduction:') !!}
    {!! Form::text('traduction', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('citations.index') }}" class="btn btn-secondary">Cancel</a>
</div>
