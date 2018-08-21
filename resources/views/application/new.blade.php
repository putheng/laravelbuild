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
								<label for="inputName">Name</label>
								<input value="{{ old('name') }}" name="name" class="form-control form-control-sm{{ $errors->has('name') ? ' is-invalid': '' }}" id="inputName" type="text" placeholder="Your app name">

								@if($errors->has('name'))
									<p class="text-danger">{{ $errors->first('name') }}</p>
								@endif
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
									<option value="1">7.2</option>
									<option value="2">7.1</option>
									<option value="3">7.0</option>
									<option value="4">6.5</option>
									<option value="9">HHVM</option>
								</select>
							</div>
						</div>

					</div>

					<div class="row pricing-tables">
						<div class="col-lg-3">
							<div class="pricing-table pricing-table-primary">
								
								<div class="pricing-table-title">Free</div>
								<div class="card-divider card-divider-xl"></div>
								<div class="pricing-table-price">
									<span class="currency">$</span>
									<span class="value">0</span>
									<span class="frecuency">/mo</span>
								</div>
								<ul class="pricing-table-features">
									<li>100 MB Space</li>
									<li>10,000 MySql row</li>
								</ul>

								<input id="free" checked class="hidden style" type="radio" name="plan" value="1" />
								<label for="free" class="btn btn-info">Select</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="pricing-table pricing-table-warning">
								
								<div class="pricing-table-title">Starter</div>
								<div class="card-divider card-divider-xl"></div>
								<div class="pricing-table-price">
									<span class="currency">$</span>
									<span class="value">1.<small>00</small></span>
									<span class="frecuency">/mo</span>
								</div>
								<ul class="pricing-table-features">
									<li>1 GB Space</li>
									<li>200,000 MySql row</li>
									<li>Custom domain</li>
									<li>Custom SSL</li>
								</ul>

								<input id="starter" class="hidden style" type="radio" name="plan" value="2">
								<label for="starter" class="btn btn-info">Select</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="pricing-table pricing-table-success">
								
								<div class="pricing-table-title">Developer</div>
								<div class="card-divider card-divider-xl"></div>
								<div class="pricing-table-price">
									<span class="currency">$</span>
									<span class="value">3.<small>99</small></span>
									<span class="frecuency">/mo</span>
								</div>
								<ul class="pricing-table-features">
									<li>5 GB space</li>
									<li>Unlimited MySql</li>
									<li>Custom domain</li>
									<li>Custom SSL</li>
								</ul>

								<input id="developer" class="hidden style" type="radio" name="plan" value="3">
								<label for="developer" class="btn btn-info">Select</label>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="pricing-table pricing-table-danger">
								
								<div class="pricing-table-title">Business</div>
								<div class="card-divider card-divider-xl"></div>
								<div class="pricing-table-price">
									<span class="currency">$</span>
									<span class="value">7.<small>99</small></span>
									<span class="frecuency">/mo</span>
								</div>
								<ul class="pricing-table-features">
									<li>10 GB space</li>
									<li>Unlimited MySql</li>
									<li>Custom domain</li>
									<li>Custom SSL</li>
								</ul>

								<input id="business" class="hidden style" type="radio" name="plan" value="4">
								<label for="business" class="btn btn-info">Select</label>
							</div>
						</div>
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