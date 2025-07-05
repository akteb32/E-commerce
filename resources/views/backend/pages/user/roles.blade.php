@extends('backend.layouts.backmaster')

@section('main')
<div class="page-wrapper">
	<div class="page-content">
		<h4>Assign Roles to {{ $user->name }}</h4>

		<form method="POST" action="{{ route('user.updateRoles', $user->id) }}">
			@csrf

			<div class="mb-3">
				@foreach($roles as $role)
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="roles[]"
							value="{{ $role->id }}"
							{{ $user->roles->contains($role->id) ? 'checked' : '' }}>
						<label class="form-check-label">{{ $role->name }}</label>
					</div>
				@endforeach
			</div>

			<button type="submit" class="btn btn-success">Save Roles</button>
		</form>
	</div>
</div>
@endsection
