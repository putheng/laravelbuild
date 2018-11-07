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
							Domain Management
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active show" id="primary" role="tabpanel">
						<h5>New Domain</h5>
					@if($project->domains()->count() <= 4)
						<div class="row">
							<div class="col-md-4">
							<form action="{{ route('app.manage.domain', $project) }}" method="post">
								{{ csrf_field() }}
								<div class="input-group input-group-sm mb-3">
									<input name="domain" value="{{ old('domain') }}" class="form-control{{ $errors->has('domain') ? ' is-invalid' : '' }}" type="text" placeholder="yourdomain.com">
									<div class="input-group-append">
										<button class="btn btn-primary" type="submit">Submit</button>
									</div>
								</div>
								@if($errors->has('domain'))
									<p class="text-danger">{{ $errors->first('domain') }}</p>
								@endif
							</form>
							</div>
						</div>
					@endif

						@if($project->domains()->count())
						<br><br>
						<div class="row">
							<div class="col-md-6">
								<table class="table">
									<thead>
										<th>Domain Name</th>
										<th>DNS Target</th>
										<th>&nbsp;</th>
									</thead>
									<tbody>
									@foreach($project->domains()->orderBy('id', 'desc')->get() as $domain)
										<tr>
											<td>
												{{ $domain->domain }}
												<a href="//{{ $domain->domain }}" target="_blank">
													<span class="mdi mdi-open-in-new"></span>
												</a>
											</td>
											<td>{{ $domain->domain }}.lexsdns.com</td>
											<td>
												<a href="#">
													<span onclick="deleteConfirmation('{{ $domain->domain }}')" class="mdi mdi-close-circle-o"></span>
												</a>
												<form id="delete_form_{{ $domain->domain }}" 
														action="{{ route('app.manage.domain.destroy', [$project, $domain]) }}" 
														method="POST" 
														style="display: none;">
														{{ method_field('DELETE') }}
		                                        	@csrf

		                                    	</form>
											</td>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
						<hr>
						<h5>
							<strong>DNS Target</strong><br>
							Supply this to your DNS provider for the destination of CNAME or ALIAS records
						</h5>
						@endif

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
function deleteConfirmation(domain) {
	event.preventDefault();
	if(confirm("Are you sure you want to "+ domain +"?")){
		document.getElementById("delete_form_"+ domain).submit();
	}
}
</script>
@endsection
