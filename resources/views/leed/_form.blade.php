<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
	{!! Form::label('Имя*') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('Телефон*') !!}
	{!! Form::text('tel', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('email*') !!}
	{!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

