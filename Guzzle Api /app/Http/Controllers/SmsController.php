<?php

namespace App\Http\Controllers;

use App\sms;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ("sms.single");

    }



    public function data()
    {
        return;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // $to = "01840000408";
        // $token = "7b503ed562e7e9b61ccbbfbabef68a68";
        // $message = "Test SMS From Using API  Abasas IT";

        // $url = "http://api.greenweb.com.bd/api.php";


        // $data = array(
        //     'to' => "$to",
        //     'message' => "$message",
        //     'token' => "$token"
        // ); // Add parameters in key value
        // $ch = curl_init(); // Initialize cURL
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_ENCODING, '');
        // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $smsresult = curl_exec($ch);

        // //Result
        // echo $smsresult;

        // //Error Display
        // echo curl_error($ch);


        $url = "http://api.greenweb.com.bd/api.php";
        $data = array(
            "to" => $request->phone,
            "message" => $request->message,
            "token" =>"7b503ed562e7e9b61ccbbfbabef68a68111"
        );
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_ENCODING,'');
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        $smsresult = curl_exec($ch);
        echo $smsresult;
        echo curl_error($ch);



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function show(sms $sms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function edit(sms $sms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sms $sms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function destroy(sms $sms)
    {
        //
    }
}
