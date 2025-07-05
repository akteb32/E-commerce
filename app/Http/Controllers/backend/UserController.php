<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{




    public function index()
    {
        $users = User::all();

        return view('backend.pages.user.index', compact('users'));
    }


    public function create()
    {

        $roles = Role::all();
        return view('backend.pages.user.create', compact('roles'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_name' => 'required|string|max:255',
            'user_phone' => 'nullable|string|max:20',
            'user_address' => 'nullable|string',
            'user_city' => 'nullable|string|max:100',
            'user_postal_code' => 'nullable|string|max:20',
            'user_country' => 'nullable|string|max:20',
            'user_avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_is_active' => 'nullable|boolean',
            'user_email' => 'required|string|email|max:255|unique:users,email',
            'user_email_verified_at' => 'nullable|date',
            'user_password' => 'required|string|min:8|max:255',
        ]);

        if ($request->hasFile('user_avatar')) {
            $validated['user_avatar'] = $request->file('user_avatar')->store('Users_images', 'public');
        }

        User::create([
            'name' => $validated['user_name'],
            'phone' => $validated['user_phone'] ?? null,
            'address' => $validated['user_address'] ?? null,
            'city' => $validated['user_city'] ?? null,
            'postal_code' => $validated['user_postal_code'],
            'country' => $validated['user_country'] ?? null,
            'avatar' => $validated['user_avatar'] ?? null,
            'is_active' => $validated['user_is_active'] ?? false,
            'email' => $validated['user_email'],
            'email_verified_at' => $validated['user_email_verified_at'] ?? null,
            'password' => Hash::make($validated['user_password']),


        ]);

        return redirect()->route('user.index')->with('success', 'User created successfully.');
    }


    public function edit(User $user)
    {
        $roles = Role::all();
        return view('backend.pages.user.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'user_name' => 'required|string|max:255',
            'user_phone' => 'nullable|string|max:20',
            'user_address' => 'nullable|string',
            'user_city' => 'nullable|string|max:100',
            'user_postal_code' => 'nullable|string|max:20',
            'user_country' => 'nullable|string|max:20',
            'user_avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_is_active' => 'nullable|boolean',
            'user_email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'user_email_verified_at' => 'nullable|date',
            'user_password' => 'nullable|string|min:8|max:255',
        ]);

        if ($request->hasFile('user_avatar')) {
            $validated['user_avatar'] = $request->file('user_avatar')->store('Users_images', 'public');
        }


        $user->update([
            'name' => $validated['user_name'],
            'phone' => $validated['user_phone'] ?? null,
            'address' => $validated['user_address'] ?? null,
            'city' => $validated['user_city'] ?? null,
            'postal_code' => $validated['user_postal_code'],
            'country' => $validated['user_country'] ?? null,
            'avatar' => $validated['user_avatar'] ?? $user->avatar,
            'is_active' => $validated['user_is_active'] ?? false,
            'email' => $validated['user_email'],
            'email_verified_at' => $validated['user_email_verified_at'] ?? $user->email_verified_at,
            // 'password' => Hash::make($validated['user_password']),


        ]);

        if (!empty($validated['user_password'])) {
            $user->update([
                'password' => Hash::make($validated['user_password']),
            ]);
        }
        if ($request->has('roles')) {
            $user->roles()->sync($request->roles);
        }

        return redirect()->route('user.index');
    }




    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
