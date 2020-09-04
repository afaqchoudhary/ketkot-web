<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SliderInfo;
use Carbon\Carbon;
use Exception;
use File;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $sliders = SliderInfo::query();

            if (isset($request->slider_title)) {

                //filter data according to slider title
                $sliders = $sliders->where('slider_title', 'LIKE', '%' . $request->slider_title . '%');

            }

            $sliders = $sliders->orderBy('created_at')
                ->paginate(10);

            return view('slider.index')->with('sliders', $sliders);

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
        return view('slider.add');
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

            'slider_title' => 'required',
            'slider_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

        ]);

/**
 * call query
 * */

        try {

            $slider_image = $request->file('slider_image');
            if (isset($slider_image)) {
                $slider_image_name = $slider_image->getClientOriginalName();
                $slider_image_name = str_replace(" ", "_", $slider_image_name);
                $slider_image_path = 'upload/sliderImage/';
                $slider_image->move(($slider_image_path), $slider_image_name);
            }

            $sliders = new SliderInfo();
            $sliders->slider_title = $request->slider_title;
            $sliders->slider_image_name = $slider_image_name;
            $sliders->slider_image_path = $slider_image_path;
            $sliders->created_at = Carbon::now();
            $sliders->updated_at = Carbon::now();
            if ($sliders->save()) {

                return redirect()->route('slider.index');
            } else {
                return back()->withError('slider not added')->withInput();
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
     * @param  int  $slider_id
     * @return \Illuminate\Http\Response
     */
    public function show($slider_id)
    {
        $sliders = SliderInfo::where('slider_id', $slider_id)->first();
        return view('slider.show')->with('sliders', $sliders);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slider_id
     * @return \Illuminate\Http\Response
     */
    public function edit($slider_id)
    {
        $sliders = SliderInfo::where('slider_id', $slider_id)->first();
        return view('slider.edit')->with('sliders', $sliders);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $slider_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slider_id)
    {
        /**
         * validate request
         */
        $this->validate($request, [

            'slider_title' => 'required',

        ]);

/**
 * call query
 * */
        try {
            $sliders = SliderInfo::where('slider_id', $slider_id)
                ->update([
                    'slider_title' => $request->slider_title,
                    'updated_at' => Carbon::now(),
                ]);
            if ($sliders) {
                return redirect()->route('slider.index');
            } else {
                return back()->withError("not updated")->withInput();
            }
        } catch (\Illuminate\Database\QueryException $execption) {
            return back()->withError($execption->getMessage())->withInput();
        }

    }

    /**
     * update city
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $slider_id
     * @return Factory|view of image
     */
    public function updateSliderImage(Request $request, $slider_id)
    {

        /**
         * validate request
         */
        $this->validate($request, [

            'slider_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

        ]);

        /**
         * call query
         * */

        try {
            $sliders = SliderInfo::where('slider_id', $slider_id)->first();

            // check if file exists
            if (File::exists($sliders->slider_image_path . $sliders->slider_image_name)) {
                File::delete($sliders->slider_image_path . $sliders->slider_image_name);
            }

            $slider_image = $request->file('slider_image');
            if (isset($slider_image)) {
                $slider_image_name = $slider_image->getClientOriginalName();
                $slider_image_name = str_replace(" ", "_", $slider_image_name);
                $slider_image_path = 'upload/sliderImage/';
                $slider_image->move(($slider_image_path), $slider_image_name);
            }

            $sliders->slider_image_path = $slider_image_path;
            $sliders->slider_image_name = $slider_image_name;
            $sliders->updated_at = Carbon::now();
            if ($sliders->save()) {
                return redirect()->route('slider.edit', $slider_id);
            } else {
                return back()->withError('slider image not updated')->withInput();
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
    public function destroy($slider_id)
    {
        try {
            $sliders = SliderInfo::where('slider_id', $slider_id)->first();

            // check if file exists
            if (File::exists($sliders->slider_image_path . $sliders->slider_image_name)) {
                File::delete($sliders->slider_image_path . $sliders->slider_image_name);
            }

            $sliders = SliderInfo::where('slider_id', $slider_id)->delete();
            return redirect()->route('slider.index');

        } catch (\Illuminate\Database\QueryException $execption) {
            return back()->withError($execption->getMessage())->withInput();
        } catch (Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }

    }
}