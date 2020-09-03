<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GiftInfo;
use Carbon\Carbon;
use Exception;
use File;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $gifts = GiftInfo::query();

            if (isset($request->gift_title)) {

                //filter data according to gift package name
                $gifts = $gifts->where('gift_title', 'LIKE', '%' . $request->gift_title . '%');

            }

            $gifts = $gifts->orderBy('created_at')
                ->paginate(10);

            return view('gift.index')->with('gifts', $gifts);

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
        return view('gift.add');
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

            'gift_title' => 'required',
            'gift_gems_prime' => 'required|numeric',
            'gift_gems' => 'required|numeric',
            'gift_icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

        ]);

/**
 * call query
 * */

        try {

            $gift_icon = $request->file('gift_icon');
            if (isset($gift_icon)) {
                $gift_icon_name = $gift_icon->getClientOriginalName();
                $gift_icon_name = str_replace(" ", "_", $gift_icon_name);
                $gift_icon_path = 'upload/giftIcon/';
                $gift_icon->move(($gift_icon_path), $gift_icon_name);
            }

            $gifts = new GiftInfo();
            $gifts->gift_title = $request->gift_title;
            $gifts->gift_gems_prime = $request->gift_gems_prime;
            $gifts->gift_gems = $request->gift_gems;
            $gifts->gift_icon_name = $gift_icon_name;
            $gifts->gift_icon_path = $gift_icon_path;
            $gifts->created_at = Carbon::now();
            $gifts->updated_at = Carbon::now();
            if ($gifts->save()) {

                return redirect()->route('gift.index');
            } else {
                return back()->withError('gifts not added')->withInput();
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
    public function edit($gift_id)
    {
        try {
            $gifts = GiftInfo::where('gift_id', $gift_id)->first();
            return view('gift.edit')->with('gifts', $gifts);

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
    public function update(Request $request, $gift_id)
    {
        /**
         * validate request
         */
        $this->validate($request, [

            'gift_title' => 'required',
            'gift_gems_prime' => 'required|numeric',
            'gift_gems' => 'required|numeric',

        ]);

/**
 * call query
 * */
        try {
            $gifts = GiftInfo::where('gift_id', $gift_id)
                ->update([
                    'gift_title' => $request->gift_title,
                    'gift_gems_prime' => $request->gift_gems_prime,
                    'gift_gems' => $request->gift_gems,
                    'updated_at' => Carbon::now(),
                ]);
            if ($gifts) {
                return redirect()->route('gift.index');
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
     * @param  int  $gift_id
     * @return Factory|view of image
     */
    public function updateGiftIcon(Request $request, $gift_id)
    {

        /**
         * validate request
         */
        $this->validate($request, [

            'gift_icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

        ]);

        /**
         * call query
         * */

        try {
            $gifts = GiftInfo::where('gift_id', $gift_id)->first();

            // check if file exists
            if (File::exists($gifts->gift_icon_path . $gifts->gift_icon_name)) {
                File::delete($gifts->gift_icon_path . $gifts->gift_icon_name);
            }

            $gift_icon = $request->file('gift_icon');
            if (isset($gift_icon)) {
                $gift_icon_name = $gift_icon->getClientOriginalName();
                $gift_icon_name = str_replace(" ", "_", $gift_icon_name);
                $gift_icon_path = 'upload/giftIcon/';
                $gift_icon->move(($gift_icon_path), $gift_icon_name);
            }

            $gifts->gift_icon_path = $gift_icon_path;
            $gifts->gift_icon_name = $gift_icon_name;
            $gifts->updated_at = Carbon::now();
            if ($gifts->save()) {
                return redirect()->route('gift.edit', $gift_id);
            } else {
                return back()->withError('gift icon image not updated')->withInput();
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
    public function destroy($gift_id)
    {
        try {
            $gifts = GiftInfo::where('gift_id', $gift_id)->first();

            // check if file exists
            if (File::exists($gifts->gift_icon_path . $gifts->gift_icon_name)) {
                File::delete($gifts->gift_icon_path . $gifts->gift_icon_name);
            }

            $gifts = GiftInfo::where('gift_id', $gift_id)->delete();
            return redirect()->route('gift.index');

        } catch (\Illuminate\Database\QueryException $execption) {
            return back()->withError($execption->getMessage())->withInput();
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }

    }
}