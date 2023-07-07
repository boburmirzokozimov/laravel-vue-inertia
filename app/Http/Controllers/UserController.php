<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        return Inertia::render('Users/Index')->with([
            'users' => User::query()
                ->when(Request::input('search'), function ($query, string $search) {
                    $query->where('name', 'LIKE', '%' . $search . '%');
                })
                ->latest()
                ->paginate(10)
                ->withQueryString()
                ->through(fn($user) => [
                    'name' => $user->name,
                    'id' => $user->id,
                ]),
            'filters' => Request::only(['search']),
            'can' => [
                'createUser' => Auth::user()->can('create', User::class)
            ]
        ]);
    }

    public function store()
    {
        $this->authorize('create', User::class);

        request()->validate([
            'name' => 'string',
            'email' => 'email|unique:users,email',
            'password' => 'string',
        ]);

        User::create([
            'name' => request()->request->get('name'),
            'email' => request()->request->get('email'),
            'password' => Hash::make(request()->request->get('password')),
        ]);

        return to_route('users');
    }

    public function create()
    {
        $this->authorize('create', User::class);

        return Inertia::render('Users/Create');
    }
}
