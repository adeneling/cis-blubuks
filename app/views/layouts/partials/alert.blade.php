@if (Session::has('successMessage'))
	<div class="alert alert-success" data-uk-alert>
		<a href="" class="uk-alert-close uk-close" > </a>
		<p> {{ Session::get('successMessage') }} </p>
	</div>
@elseif (Session::has('errorMessage'))
	<div class="alert alert-danger" data-uk-alert>
		<a href="" class="uk-alert-close uk-close" > </a>
		<p> {{ Session::get('errorMessage') }} </p>
	</div>
@elseif (Session::has('infoMessage'))
	<div class="alert alert-info" data-uk-alert>
		<a href="" class="uk-alert-close uk-close" > </a>
		<p> {{ Session::get('infoMessage') }} </p>
	</div>
@elseif (Session::has('warningMessage'))
	<div class="alert alert-warning" data-uk-alert>
		<a href="" class="uk-alert-close uk-close" > </a>
		<p> {{ Session::get('warningMessage') }} </p>
	</div>
@endif