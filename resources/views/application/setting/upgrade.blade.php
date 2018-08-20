@extends('layouts.dashboard')

@section('content')
<div class="page-head no-padding">
	<h2 class="page-head-title">Your application name</h2>
	<nav aria-label="breadcrumb" role="navigation">
		<ol class="breadcrumb page-head-nav">
			<li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
			<li class="breadcrumb-item"><a href="{{ route('app.lists') }}">Applications</a></li>
		</ol>
	</nav>
</div>
<br>
<div class="row">
	<div class="col-12 col-lg-12">
		<div class="card">
			<div class="tab-container">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active show text-uppercase" href="#primary" data-toggle="tab" role="tab" aria-selected="false">
							Upgrade
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active show" id="primary" role="tabpanel">
						<h4>Select a plan</h4>
						<p>Select a plan to upgrade your application.</p>
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
						
						<input type="submit" value="Upgrade" class="btn btn-success btn-lg">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
