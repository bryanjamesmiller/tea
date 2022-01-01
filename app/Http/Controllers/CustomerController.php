<?php

namespace App\Http\Controllers;

use App\Models\ProductSale;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
  public function index (){
      return view("customers",[
          "productSales" => ProductSale::all()->sortBy("sale.user.name")
      ]);
  }
}

