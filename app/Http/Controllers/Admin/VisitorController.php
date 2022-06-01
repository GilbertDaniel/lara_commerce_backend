<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vistor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function GetVisitorDetails(){
        $ip_address = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Yangon");
        $visit_time = date("h:i:sa");
        $visit_date = date("d-m-Y");

        $result = Vistor::insert([
            'ip_address' => $ip_address,
            'visit_time' => $visit_time,
            'visit_date' => $visit_date
        ]);

        return $result;
    }
}
