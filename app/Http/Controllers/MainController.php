<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\UploadedFile;
use App\Common\Utility;
use App\User;
class MainController extends Controller
{
   
    public function index()
    {
        return view('home.index');
    }
    public function Forbidden()
    {
        return view('permission.403');
    }

}
