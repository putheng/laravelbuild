<div class="table-responsive noSwipe">
	<table class="table table-striped table-hover no-padding no-margin">
		<thead>
			<tr>
				<th style="width:20%;">Name</th>
				<th style="width:17%;">Space</th>
				<th style="width:15%;">Database</th>
				<th style="width:10%;">Plan</th>
				<th style="width:10%;">Created Date</th>
				<th style="width:10%;"></th>
			</tr>
		</thead>
		<tbody>
			@if($projects->count())

				@foreach($projects as $project)
					<tr class="primary">
						<td class="user-avatar cell-detail user-info">
							<img src="/images/{{ $project->type }}-logo.png" alt="Avatar">
							<span><a href="{{ route('app.manage.detail', $project) }}">{{ $project->name }}</a></span>
							<span class="cell-detail-description">
							{{ $project->description }}
							</span>
						</td>
						<td class="milestone">
							<span class="completed">0.9 GB / {{ $project->plan->space }}</span>
							<span class="version">...</span>
							<div class="progress">
								<div class="progress-bar progress-bar-primary" style="width: 45%;">
									
								</div>
							</div>
						</td>
						<td class="milestone">
							<span class="completed">10,000 / {{ $project->plan->database }} rows</span>
							<span class="version">...</span>
							<div class="progress">
								<div class="progress-bar progress-bar-primary" style="width: 45%;">
									
								</div>
							</div>
						</td>
						<td class="cell-detail">
							<span>{{ $project->plan->name }}</span>
							<span class="cell-detail-description">${{ $project->plan->price }}/month</span>
						</td>
						<td class="cell-detail">
							<span>{{ $project->created_at->format('M d, Y') }}</span>
							<span class="cell-detail-description">{{ $project->created_at->format('H:i A') }}</span>
						</td>
						<td class="text-right">
							<div class="btn-group btn-hspace">
								<a class="btn btn-secondary dropdown-toggle" href="{{ route('app.manage.detail', $project) }}">
									Manage 
								</a>
							</div>
						</td>
					</tr>
				@endforeach
			@else
			<tr>
				<td colspan="6">No any application <a href="{{ route('app.new') }}">Create an application</a></td>
			</tr>
			@endif
		</tbody>
	</table>
</div>