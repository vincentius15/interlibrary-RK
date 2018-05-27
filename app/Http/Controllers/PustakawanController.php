<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    //
	public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
      return view('pustakawan.index');
  }

  public function booksIndex()
  {
      return view('books.index');
  }

  public function manageLoans()
  {
      return view('pustakawan.manage-loans');
  }

  public function loansRequest()
  {
      return view('pustakawan.loans-request');
  }
}
