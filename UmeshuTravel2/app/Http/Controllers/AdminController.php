<?php

namespace App\Http\Controllers;

use App\Library\Verify;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
  public function index()
  {
    Verify::isAdminUser();
    return view('admin.index', ['user_id' => Auth::id()]);
  }
}
