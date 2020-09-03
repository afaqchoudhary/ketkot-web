<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcriptions = Subscription::OrderBy('created_at')->paginate(10);
        return view('subscription.index')->with('subcriptions', $subcriptions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subscription.add');
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

            'subscription_title' => 'required',
            'subscription_gems' => 'required|numeric',
            'subscription_price' => 'required|numeric',
            'subscription_validity' => 'required',
            'platform' => 'required',

        ]);

        /**
         * call query
         * */

        try {

            $subcription = new Subscription();
            $subcription->subscription_title = $request->subscription_title;
            $subcription->subscription_gems = $request->subscription_gems;
            $subcription->subscription_price = $request->subscription_price;
            $subcription->subscription_validity = $request->subscription_validity;
            $subcription->platform = $request->platform;
            $subcription->created_at = Carbon::now();
            $subcription->updated_at = Carbon::now();
            if ($subcription->save()) {

                return redirect()->route('subscription.index');
            } else {
                return back()->withError('subscription not added')->withInput();
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
    public function show($subscription_id)
    {
        $subscription = Subscription::where('subscription_id', $subscription_id)->first();
        return view('subscription.show')->with('subscription', $subscription);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($subscription_id)
    {
        $subscription = Subscription::where('subscription_id', $subscription_id)->first();
        return view('subscription.edit')->with('subscription', $subscription);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $subscription_id)
    {
        /**
         * validate request
         */
        $this->validate($request, [

            'subscription_title' => 'required',
            'subscription_gems' => 'required|numeric',
            'subscription_price' => 'required|numeric',
            'subscription_validity' => 'required',
            'platform' => 'required',
        ]);

        /**
         * call query
         * */
        try {
            $subscription = Subscription::where('subscription_id', $subscription_id)
                ->update([
                    'subscription_title' => $request->subscription_title,
                    'subscription_gems' => $request->subscription_gems,
                    'subscription_price' => $request->subscription_price,
                    'subscription_validity' => $request->subscription_validity,
                    'platform' => $request->platform,
                    'updated_at' => Carbon::now(),
                ]);
            if ($subscription) {
                return redirect()->route('subscription.index');
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
    public function destroy($subscription_id)
    {
        $subscription = Subscription::where('subscription_id', $subscription_id)->delete();
        return redirect()->route('city.index');

    }
}