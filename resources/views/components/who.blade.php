<!-- Check whos the user -->

@if(Auth::guard('web')->check())
	<p class="text-success">
		You are Logged in as a <strong> User</strong>
	</p>
@else
	<p class="text-danger">
		You are Logged Out as a <strong> User</strong>
	</p>
@endif



@if(Auth::guard('admin')->check())
	<p class="text-success">
		You are Logged in as  <strong> Admin</strong>
	</p>
@else	
	<p class="text-danger">
		You are Logged Out as  <strong> Admin</strong>
	</p>
@endif