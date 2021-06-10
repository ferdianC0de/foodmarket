@if(session()->has('message'))
	@php
		$message = session()->get('message');
	@endphp
	<div class="alert alert-{{$message['type']}} alert-dismissible fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert">×</button>	
		<strong>{{ $message['content'] }}</strong>
	</div>
@endif