@extends('layouts.dashboard')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="card card-contrast card-border-color card-border-color-primary">
				<div class="card-header card-header-contrast card-header-featured text-left">
					Create a new application
				</div>
				<div class="card-body">
					
					<div class="row">
						<div class="col-md-4">
							<div class="form-group pt-2">
								<label for="inputName">Name</label>
								<input class="form-control form-control-sm" id="inputName" type="text" placeholder="Your app name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group pt-2">
								<label for="inputDescription">Description</label>
								<input class="form-control form-control-sm" id="inputDescription" type="text" placeholder="Make a short description of your app">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group pt-2">
								<label for="php">Select your application</label>
								<select name="php_version" class="form-control form-control-sm">
									<option value="7.0">Laravel</option>
									<option value="6.5">WordPress</option>
									<option value="7.2">Custom PHP App</option>
								</select>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group pt-2">
								<label for="php">PHP Version</label>
								<select name="php_version" class="form-control form-control-sm">
									<option value="6.5">6.5</option>
									<option value="7.0">7.0</option>
									<option value="7.2">7.2</option>
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

								<input id="free" checked class="hidden style" type="radio" name="plan" value="free" />
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

								<input id="starter" class="hidden style" type="radio" name="plan" value="starter">
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

								<input id="developer" class="hidden style" type="radio" name="plan" value="developer">
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

								<input id="business" class="hidden style" type="radio" name="plan" value="business">
								<label for="business" class="btn btn-info">Select</label>
							</div>
						</div>
					</div>
					<p>Please select your app size. You can always scale your app size whenever required</p>
				</div>
				<div class="card-header card-header-contrast card-header-featured">
					<a href="#" class="btn btn-success btn-lg">Create App</a>
				</div>
			</div>
		</div>
	</div>

@endsection