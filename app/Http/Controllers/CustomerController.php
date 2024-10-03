<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:50', 'unique:customers'],
            'password' => ['required', 'string', 'min:8', 'max:100'],
            'fullname' => 'nullable|string|max:50',
            'image' => 'nullable|string|max:255'
        ]);

        Customer::create([
            'username' => $request->username,
            'password' => Hash::make($request->password), 
            'fullname' => $request->fullname,
            'image' => $request->image,
        ]);

        return redirect()->route('customers.list')->with('success', 'Registration successful!');
    }

    public function list()
    {
        $customers = Customer::all();
        return view('customers.list', compact('customers'));
    }

    public function details($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.details', compact('customer'));
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50',
            'password' => 'required|string|max:100',
        ]);

        $customer = Customer::where('username', $request->username)->first();

        if ($customer && Hash::check($request->password, $customer->password)) {
            // Đăng nhập thành công, lưu session
            session(['customer_id' => $customer->id]);
            return redirect()->route('customers.list');
        } else {
            return back()->withErrors(['login_error' => 'Invalid credentials']);
        }
    }
}
