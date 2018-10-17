@extends('layouts.dashboard')

@section('content')
<div class="row">
	<div class="col-lg-12">
			<div class="card card-contrast text-center card-border-color card-border-color-primary">
				<div class="card-header card-header-contrast card-header-featured text-left">
					Billing history
				</div>
				@if(true)
					<div class="card-body no-padding">
						<table class="table table-striped table-hover">
							<thead>
								<th>Reference</th>
								<th>Issue date</th>
								<th>Amount</th>
								<th>Outstanding balance</th>
								<th>Date due</th>
							</thead>
							<tbody>
								<tr>
									<td>WE1160914</td>
									<td>Sep 11, 2018</td>
									<td>$2.20 USD</td>
									<td>$0.00 USD</td>
									<td>Sep 11, 2018</td>
								</tr>
								<tr>
									<td>WE1160914</td>
									<td>Sep 11, 2018</td>
									<td>$2.20 USD</td>
									<td>$0.00 USD</td>
									<td>Sep 11, 2018</td>
								</tr>
							</tbody>
						</table>
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
					<a href="#">1</a> - <a href="#">7</a> out of 7 results
				</div>
			</div>
	</div>
</div>
@endsection
