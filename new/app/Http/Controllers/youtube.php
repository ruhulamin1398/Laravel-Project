<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class youtube extends Controller
{
    //
    public function index()
    {
     $result= DB::table("users")

     			->join("orders","orders.USER_ID","users.ID")
     			->leftjoin("order_description","order_description.ORDER_DESCRIPTION_ID","orders.ORDER_ID")
    	    	->get()
    	    	->toArray(); 
    	    	echo "<pre>";
    print_r ($result);
    }
}
