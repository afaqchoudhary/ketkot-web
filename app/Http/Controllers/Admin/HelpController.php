<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Help;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $helps = Help::query();

            if (isset($request->help_title)) {

                //filter data according to gift package name
                $helps = $helps->where('help_title', 'LIKE', '%' . $request->help_title . '%');

            }

            $helps = $helps->orderBy('created_at')
                ->paginate(10);

            return view('help.index')->with('helps', $helps);

        } catch (\Illuminate\Database\QueryException $execption) {
            return back()->withError($execption->getMessage())->withInput();
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('help.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * validate request
         */
        $this->validate($request, [

            'help_title' => 'required',
            'help_description' => 'required',

        ]);

/**
 * call query
 * */

        try {

            $help = new Help();
            $help->help_title = $request->help_title;
            $help->help_description = $request->help_description;
            $help->created_at = Carbon::now();
            $help->updated_at = Carbon::now();
            if ($help->save()) {

                return redirect()->route('help.index');
            } else {
                return back()->withError('help info not added')->withInput();
            }

        } catch (\Illuminate\Database\QueryException $execption) {
            return back()->withError($execption->getMessage())->withInput();
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($help_info_id)
    {
        try {
            $help = Help::where('help_info_id', $help_info_id)->first();
            return view('help.show')->with('help', $help);

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
    public function edit($help_info_id)
    {
        try {
            $help = Help::where('help_info_id', $help_info_id)->first();
            return view('help.edit')->with('help', $help);

        } catch (\Illuminate\Database\QueryException $execption) {
            return back()->withError($execption->getMessage())->withInput();
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $help_info_id)
    {
        /**
         * validate request
         */
        $this->validate($request, [

            'help_title' => 'required',
            'help_description' => 'required',

        ]);

/**
 * call query
 * */
        try {
            $help = Help::where('help_info_id', $help_info_id)
                ->update([
                    'help_title' => $request->help_title,
                    'help_description' => $request->help_description,
                    'updated_at' => Carbon::now(),
                ]);
            if ($help) {
                return redirect()->route('help.index');
            } else {
                return back()->withError("not updated")->withInput();
            }
        } catch (\Illuminate\Database\QueryException $execption) {
            return back()->withError($execption->getMessage())->withInput();
        }

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