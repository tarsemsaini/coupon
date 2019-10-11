<?php

namespace Ashriya\Coupon\Http\Controllers;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ashriya\Coupon\Models\Coupon;

class CouponController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $coupons = Coupon::all();
       
        return view('coupon::list' , ['coupons'=>$coupons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('coupon::coupon');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $rules = array(
            'name' => 'required',
            'code' => 'required|unique:coupon',
            'type' => 'required',
            'discount' => 'required',
            'minAmount' => 'required',
            'maxDiscountAmount' => 'required',
            'startDateTime' => 'required|date|date_format:Y-m-d',
            'endDateTime' => 'required|date|date_format:Y-m-d',
        );

        $data = $request->all();
        $validator = Validator::make($data, $rules);

        // dd($validator->fails());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['status'] = 0;

        // if all validation rules passed 
        $coupon = Coupon::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
       echo "test = ".$id;
       exit;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
         echo "test = ".$id;
       exit;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
