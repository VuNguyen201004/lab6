<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->update([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'avatar' => $request->avatar,
        ]);
        // dd($user->avatar);
       
        return redirect()->route('profile')->with('status', 'Profile updated!');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password does not match']);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->route('profile')->with('status', 'Password changed!');
    }
}

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Storage;

// class UserController extends Controller
// {
//     public function show()
//     {
//         return view('user.profile');
//     }

//     public function updateProfile(Request $request)
//     {
//         $request->validate([
//             'fullname' => 'required|string|max:255',
//             'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//         ]);

//         $user = Auth::user();
//         $user->fullname = $request->input('fullname');
//         dd($user->fullname);

//         if ($request->hasFile('avatar')) {
//             // Xóa ảnh cũ nếu có
//             if ($user->avatar && Storage::exists($user->avatar)) {
//                 Storage::delete($user->avatar);
//             }

//             // Lưu ảnh mới
//             $path = $request->file('avatar')->store('avatars', 'public');
//             $user->avatar = $path;
//         }

//         $user->save();

//         return redirect()->route('profile')->with('success', 'Profile updated successfully.');
//     }
// }
