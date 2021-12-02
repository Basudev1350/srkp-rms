<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemController extends Controller
{
    
   /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function dashboard()
  {
    return view('user.dashboard');//folder.bladefile name
  }
  public function rawMaterials()
  {
    return view('user.stockMaster.rawMaterials');//folder.bladefile name
  }
  public function productAssembly()
  {
    return view('user.stockMaster.productAssembly');//folder.bladefile name
  }
  public function productwiseReport()
  {
    return view('user.reportMaster.productwiseReport');//folder.bladefile name
  }
  public function menuwiseReport()
  {
    return view('user.reportMaster.menuwiseReport');//folder.bladefile name
  }


  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
}
