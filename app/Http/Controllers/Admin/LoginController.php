<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminInfo;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Login()
    {
        return view('login');
    }

    public function checkLogin(Request $request)
    {
        /**
         * validate request
         */

        $this->validate($request,
            [
                'admin_email' => 'required',
                'admin_password' => 'required',
            ]);

        /**
         * run query
         */
        try
        {

            $isvalid = AdminInfo::where('admin_email', $request->input('admin_email'))->first();

            if ($request->input('admin_password', $isvalid->admin_password)) {

                return redirect()->route('dashboard.index');
            } else {
                return back()->withError('admin not valid');
            }

        } catch (\Illuminate\Database\QueryException $execption) {

            return back()->withError($execption->getMessage())->withInput();
        }
    }
}