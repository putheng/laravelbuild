@extends('layouts.dashboard')

@section('content')
<div class="row">
	<div class="col-lg-12">
			<div class="card card-contrast text-center card-border-color card-border-color-primary">
				<div class="card-header card-header-contrast card-header-featured text-left">
					Managed your apps
				</div>
				@if(true)
					<div class="card-body no-padding">
						@include('application.partials.lists')
					</div>
				@else
				<div class="card-body">
					<img src="/images/server.png">
					<p>Your managed apps will be listed here.Lets launch the first one, its easy (-_-) </p>
					<br>
					<a class="btn btn-primary" href="{{ route('app.new') }}">Create App</a>
				
				</div>
				<br><br><br>
				@endif
				<div class="card-footer card-footer-contrast text-muted text-right">
					Total 0 apps
				</div>
			</div>
	</div>
</div>
@endsection
