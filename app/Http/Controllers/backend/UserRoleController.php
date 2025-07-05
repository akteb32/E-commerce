<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    public function edit(User $user)
	{
		$roles = Role::all();
		return view('backend.pages.user.roles', compact('user', 'roles'));
	}

	public function update(Request $request, User $user)
	{
		$validated = $request->validate([
			'roles' => 'nullable|array',
			'roles.*' => 'exists:roles,id',
		]);

		$user->roles()->sync($validated['roles'] ?? []);
		return redirect()->route('user.index')->with('success', 'Roles updated successfully.');
	}
}
