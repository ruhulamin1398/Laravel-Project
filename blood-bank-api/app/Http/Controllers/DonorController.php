<?php

namespace App\Http\Controllers;

use App\donor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function show(donor $donor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function edit(donor $donor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, donor $donor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function destroy(donor $donor)
    {
        //
    }





    public function donerapi(Request $request)
    {


        if (isset($request->group)) {

            if (isset($request->union)) {

                $donorlist = DB::table('donors')->select('id',"group_id",'name', 'age', 'village', 'contact')->where('group_id',$request->group)->where('union',$request->union)->get();
            } else
            {
                $donorlist = DB::table('donors')->select('name', 'age', 'village','upazila', 'contact')->where('upazila', $request->upazila)->where('group_id', $request->group)->get();
            }

                return  $donorlist;
        }
        else
        return  $request;
    }


    public function division(Request $request)
    {
        $divisions = DB::table('donors')->select('division')->distinct()->get();
        $divisionlist = array();

        foreach ($divisions as $name => $values) {
            foreach ($values as $name => $value)
                array_push($divisionlist, $value);
        }
        return ($divisionlist);
    }




    public function district(Request $request)
    {

        $districtlist = array();
        if (isset($request->division)) {
            $districts = DB::table('donors')->select('district')->where('division', $request->division . "")->distinct()->get();
            foreach ($districts as $name => $values) {
                foreach ($values as $name => $value)
                    array_push($districtlist, $value);
            }
        }
        return ($districtlist);
    }


    public function upazila(Request $request)
    {

        $upazilalist = array();

        if (isset($request->district)) {
            $upazilas = DB::table('donors')->select('upazila')->where('district', $request->district . "")->distinct()->get();


            foreach ($upazilas as $name => $values) {
                foreach ($values as $name => $value)
                    array_push($upazilalist, $value);
            }
        }
        return ($upazilalist);
    }

    public function union(Request $request)
    {



        $unionslist = array();

        if (isset($request->upazila)) {
            $unions = DB::table('donors')->select('union')->where('upazila', $request->upazila . "")->distinct()->get();


            foreach ($unions as $name => $values) {
                foreach ($values as $name => $value)
                    array_push($unionslist, $value);
            }
        }
        return ($unionslist);
    }
}
