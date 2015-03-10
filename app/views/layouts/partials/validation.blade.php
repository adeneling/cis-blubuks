@if ($errors->count() > 0)
	<div class="alert alert-danger" data-uk-alert>
	<a href="" class="alert-close close" > </a>
@foreach ($errors->all(' <p> :message</p> ') as $error)
	{{ $error }}
@endforeach
</div>
@endif