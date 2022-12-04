<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datatables\UsersDataTable;

class UsersController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
      return $dataTable->render('users');        
    }
}
