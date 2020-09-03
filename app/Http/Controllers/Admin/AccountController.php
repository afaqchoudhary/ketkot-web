<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Exception;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pendingAccounts(Request $request)
    {
        try {
            $accounts = User::query();

            if (isset($request->account_name)) {

                //filter data according to user name
                $accounts = $accounts->where('account_name', 'LIKE', '%' . $request->account_name . '%');

            }

            $accounts = $accounts->orderBy('created_at')->paginate(5);

            return view('accounts.pending')->with('accounts', $accounts);

        } catch (\Illuminate\Database\QueryException $execption) {

            return back()->withError($execption->getMessage())->withInput();
        } catch (Exception $execption) {
            return back()->withError($execption->getMessage())->withInput();
        }

    }

    public function isBlocked(Request $request)
    {
        try {
            $account = User::where('id', $request->id)->first();
            $account->is_blocked = $request->is_blocked;
            $account->save();
        } catch (\Illuminate\Database\QueryException $execption) {

            return back()->withError($execption->getMessage())->withInput();
        } catch (\InvalidArgumentException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function accountApproved()
    {
        // return view('accounts.approved');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $accounts = User::where('id', $id)->first();
            return view('accounts.show')->with('accounts', $accounts);

        } catch (\Illuminate\Database\QueryException $execption) {

            return back()->withError($execption->getMessage())->withInput();
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}