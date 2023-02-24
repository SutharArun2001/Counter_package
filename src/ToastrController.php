<?php

namespace Toastr\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ToastrController extends Controller
{
    public function counterHome()
    {
        $num = "";
        $result ="";
        $data = compact('result', 'num');
        return view('toaster::counter')->with($data);;
    }
    public function counter($num)
    {
        $num = $num++;
        $result = $num++;
        $data = compact('result', 'num');
        return view('toaster::counter')->with($data);
    }
}
