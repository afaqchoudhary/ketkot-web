<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GemInfo;
use Carbon\Carbon;
use Exception;
use File;
use Illuminate\Http\Request;

class GemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $gems = GemInfo::query();

            if (isset($request->gem_title)) {

                //filter data according to gem package name
                $gems = $gems->where('gem_title', 'LIKE', '%' . $request->gem_title . '%');

            }

            $gems = $gems->orderBy('created_at')
                ->paginate(10);

            return view('gem.index')->with('gems', $gems);

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
        return view('gem.add');
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

            'gem_title' => 'required',
            'gem_count' => 'required|numeric',
            'gem_price' => 'required|numeric',
            'gem_icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'platform' => 'required',

        ]);

/**
 * call query
 * */

        try {

            $gem_icon = $request->file('gem_icon');
            if (isset($gem_icon)) {
                $gem_icon_name = $gem_icon->getClientOriginalName();
                $gem_icon_name = str_replace(" ", "_", $gem_icon_name);
                $gem_icon_path = 'upload/gemIcon/';
                $gem_icon->move(($gem_icon_path), $gem_icon_name);
            }

            $gems = new GemInfo();
            $gems->gem_title = $request->gem_title;
            $gems->gem_count = $request->gem_count;
            $gems->gem_price = $request->gem_price;
            $gems->gem_icon_name = $gem_icon_name;
            $gems->gem_icon_path = $gem_icon_path;

            $gems->platform = $request->platform;
            $gems->created_at = Carbon::now();
            $gems->updated_at = Carbon::now();
            if ($gems->save()) {

                return redirect()->route('gem.index');
            } else {
                return back()->withError('gems not added')->withInput();
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($gem_id)
    {
        try {
            $gems = GemInfo::where('gem_id', $gem_id)->first();
            return view('gem.edit')->with('gems', $gems);

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
    public function update(Request $request, $gem_id)
    {
        /**
         * validate request
         */
        $this->validate($request, [

            'gem_title' => 'required',
            'gem_count' => 'required|numeric',
            'gem_price' => 'required|numeric',
            'platform' => 'required',
        ]);

        /**
         * call query
         * */
        try {
            $gems = GemInfo::where('gem_id', $gem_id)
                ->update([
                    'gem_title' => $request->gem_title,
                    'gem_count' => $request->gem_count,
                    'gem_price' => $request->gem_price,
                    'platform' => $request->platform,
                    'updated_at' => Carbon::now(),
                ]);
            if ($gems) {
                return redirect()->route('gem.index');
            } else {
                return back()->withError("not updated")->withInput();
            }
        } catch (\Illuminate\Database\QueryException $execption) {
            return back()->withError($execption->getMessage())->withInput();
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * update city
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $gem_id
     * @return Factory|view of image
     */
    public function updateGemIcon(Request $request, $gem_id)
    {

        /**
         * validate request
         */
        $this->validate($request, [

            'gem_icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

        ]);

        /**
         * call query
         * */

        try {
            $gem = GemInfo::where('gem_id', $gem_id)->first();

            // check if file exists
            if (File::exists($gem->gem_icon_path . $gem->gem_icon_name)) {
                File::delete($gem->gem_icon_path . $gem->gem_icon_name);
            }

            $gem_icon = $request->file('gem_icon');
            if (isset($gem_icon)) {
                $gem_icon_name = $gem_icon->getClientOriginalName();
                $gem_icon_name = str_replace(" ", "_", $gem_icon_name);
                $gem_icon_path = 'upload/gemIcon/';
                $gem_icon->move(($gem_icon_path), $gem_icon_name);
            }

            $gem->gem_icon_path = $gem_icon_path;
            $gem->gem_icon_name = $gem_icon_name;
            $gem->updated_at = Carbon::now();
            if ($gem->save()) {
                return redirect()->route('gem.edit', $gem_id);
            } else {
                return back()->withError('gem icon image not updated')->withInput();
            }
        } catch (\Illuminate\Database\QueryException $execption) {
            return back()->withError($execption->getMessage())->withInput();
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($gem_id)
    {
        try {
            $gems = GemInfo::where('gem_id', $gem_id)->first();

            // check if file exists
            if (File::exists($gems->gem_icon_path . $gems->gem_icon_name)) {
                File::delete($gems->gem_icon_path . $gems->gem_icon_name);
            }

            $gems = GemInfo::where('gem_id', $gem_id)->delete();
            return redirect()->route('gem.index');

        } catch (\Illuminate\Database\QueryException $execption) {
            return back()->withError($execption->getMessage())->withInput();
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }
}