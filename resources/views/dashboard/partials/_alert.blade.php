@if(session('success'))
<div class="alert alert-contrast alert-success alert-dismissible" role="alert">
	<div class="icon"><span class="mdi mdi-check"></span></div>
	<div class="message">
		<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button>
		{{ session('success') }}
	</div>
</div>
@endif

@if(session('warning'))
<div class="alert alert-contrast alert-warning alert-dismissible" role="alert">
	<div class="icon"><span class="mdi mdi-alert-triangle"></span></div>
	<div class="message">
	  <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button>
	  {{ session('warning') }}
	</div>
</div>
@endif

@if(session('error'))
<div class="alert alert-contrast alert-danger alert-dismissible" role="alert">
	<div class="icon"><span class="mdi mdi-alert-triangle"></span></div>
	<div class="message">
	  <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button>
	  {{ session('error') }}
	</div>
</div>
@endif