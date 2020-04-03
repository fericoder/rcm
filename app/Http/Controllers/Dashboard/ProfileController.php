<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfileController extends \App\Http\Controllers\Controller
{
    public function show()
    {
        return view('dashboard.profile');
    }

    public function password(Request $request)
    {
        $user = \Auth::user();
        $request->validate([
            'password' => 'required',
            'new_password' => 'confirmed|min:6|different:password',

        ]);


        if (Hash::check($request->password, $user->password)) {
            $user->fill([
                'password' => Hash::make($request->new_password)
            ])->save();

            alert()->success('رمز عبور باموفقیت تغییر کرد.', 'تغییر کرد');
            return redirect()->route('profile.show');

        } else {
            alert()->error('رمز عبور فعلی صحیح نمیباشد.', 'خطا');
            return redirect()->route('profile.show');
        }

    }


    public function avatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|mimes:jpg,JPG,PNG,png,tif,jpeg',
        ]);

        $avatar = $this->uploadFile($request->avatar);

        $user = \Auth::user();
        $user->update(['avatar' => $avatar]);

        alert()->success('تصویر پروفایل باموفقیت تغییر کرد.', 'تغییر کرد');
        return redirect()->route('profile.show');


    }


}
