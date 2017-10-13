<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
	{!! Form::label('Slug') !!}
	{!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('Title') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('excerpt') !!}
	{!! Form::text('excerpt', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('Content') !!}
	{!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('published') !!}
	{!! Form::checkbox('published', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('published_at') !!}
	{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Отправить', ['class' => 'btn btn-lg btn-danger btn-primary col-xs-10 col-xs-offset-1']) !!}
</div>
