@extends('layouts.dashboard')

@section('content')
	<div class="row">
		<div class="col-lg-12">
		<form action="{{ route('app.new') }}" method="POST">
			@csrf
			<div class="card card-contrast card-border-color card-border-color-primary">
				<div class="card-header card-header-contrast card-header-featured text-left">
					Create a new application
				</div>
				<div class="card-body">
					
					<div class="row">
						<div class="col-md-4">
							<div class="form-group pt-2">
								<label for="appname">Name</label>
								<input id="appName" value="{{ old('name') }}" name="name" class="form-control form-control-sm{{ $errors->has('name') ? ' is-invalid': '' }}" type="text" placeholder="Your app name">

								@if($errors->has('name'))
									<p class="text-danger">{{ $errors->first('name') }}</p>
								@endif
								<p class="text-success  text-right" id="appNameResponse">
									<span>appname</span>-{{auth()->user()->username}}.{{ config('app.buildurl') }}
								</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group pt-2">
								<label for="inputDescription">Description</label>
								<input value="{{ old('description') }}" name="description" class="form-control form-control-sm{{ $errors->has('description') ? ' is-invalid': '' }}" id="inputDescription" type="text" placeholder="Make a short description of your app">

								@if($errors->has('description'))
									<p class="text-danger">{{ $errors->first('description') }}</p>
								@endif
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group pt-2">
								<label for="php">Select your application</label>
								<select name="app_version" class="form-control form-control-sm{{ $errors->has('app_version') ? ' is-invalid': '' }}">
									<option value="laravel">Laravel</option>
									<option value="php">Custom PHP App</option>
									<option value="wordPress">WordPress</option>
								</select>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group pt-2">
								<label for="php">PHP Version</label>
								<select name="php_version" class="form-control form-control-sm{{ $errors->has('php_version') ? ' is-invalid': '' }}">
								@foreach(App\Models\Version::get() as $phpv)
									<option value="{{ $phpv->id }}">{{ $phpv->name }}</option>
								@endforeach
								</select>
							</div>
						</div>

					</div>

					<div class="row pricing-tables">
						@foreach(\App\Models\Plan::get() as $key => $plan)
							<div class="col-lg-3">
								<div class="pricing-table pricing-table-{{ getPlanClass($plan->id) }}">
									<div class="pricing-table-title">{{ $plan->name }}</div>
									<div class="card-divider card-divider-xl"></div>
									<div class="pricing-table-price">
										<span class="currency">$</span>
										<span class="value">{{ $plan->price }}</span>
										<span class="frecuency">/mo</span>
									</div>
									<ul class="pricing-table-features">
										<li>{{ $plan->space }} Space</li>
										<li>{{ $plan->database }} MySql row</li>
										@if($key != 0)
											<li>Custom domain</li>
											<li>Custom SSL</li>
										@endif
									</ul>

									<input id="{{ str_slug($plan->name) }}" {{ $plan->id == 1 ? 'checked' : '' }} class="hidden style" type="radio" name="plan" value="{{ $plan->id }}" />
									<label for="{{ str_slug($plan->name) }}" class="btn btn-info">Select</label>
								</div>
							</div>
						@endforeach
						

					</div>
					<p>Please select your app size. You can always scale your app size whenever required</p>
				</div>
				<div class="card-header card-header-contrast card-header-featured">
					<button type="submit" class="btn btn-success btn-lg">Create App</button>
				</div>
			</div>
		</div>
		</form>
	</div>

@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$('#appName').keyup(function(){
			var value = $(this).val().toLowerCase()
					.replace(/[^\w ]+/g,'')
					.replace(/ +/g,'-');
			$('#appNameResponse span').text(value);

			$.post('/api/check/{{ auth()->id() }}', {name:value}, function(data){
    			$('#appNameResponse').removeClass('text-danger');
    			$('#appNameResponse').addClass('text-success');
			}).fail(function(error) {
				console.log(error);
    			$('#appNameResponse').addClass('text-danger');
    			$('#appNameResponse').removeClass('text-success');
  			});
		});
	</script>
@endsection