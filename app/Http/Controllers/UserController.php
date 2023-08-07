<?php

namespace App\Http\Controllers;


use App\Models\Resume;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the register form for creating a new resource.
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Show the login form for creating a new resource.
     */
    public function login()
    {
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation of credentials input
        $request->validate([
            'firstname' => ['required', 'min:3'],
            'lastname' => ['required', 'min:3'],
            'email' =>  'required|email|unique:users',
            'password' => ['required', Password::min(8)
            ->letters()
            ->mixedCase()
            ->numbers()
        ],
            'password_confirmation' => 'required|same:password',
        ]);

        // Stores credentials of new user to the database
        $form=[
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'password' => $request->password,
            'id' => Str::uuid()->toString(),
        ];

        $form['password'] = bcrypt($form['password']);
    
        //$form['id'] = auth() -> id();

        $user = User::create($form);

        Auth::login($user);

        $randomString = Str::random(10);
        $newResume = Resume::create([
            'id' => Str::uuid()->toString(),
            'user_id' => $user->id,
            'slug' => Str::slug($randomString),
        ]);
        return redirect(route('create', $newResume->slug));
    }

    public function signin(Request $request){
        $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        $form=[
            'email' => $request->email,
            'password' => $request->password
        ];

        $user = User::where('email', '=', $form['email'])->first();

        if(!$user){
            return back()->withErrors(['email'=>'Email not found!'])->onlyInput('email');
        } elseif(!Hash::check($form['password'], $user->password)){
            return back()->withErrors(['password'=>'Wrong password!'])->onlyInput('password');
        } else {
            $request->session()->regenerate();
            auth()->login($user);
            return redirect(route('index', auth()->user()->id))->with('message', 'User login successfully');
        }
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'User logout successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
