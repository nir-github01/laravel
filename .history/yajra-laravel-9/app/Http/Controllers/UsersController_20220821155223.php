<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;
use App\Models\User;

class UsersController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
       // dd($dataTable);
      // $dataTable=User::paginate(10);
        return $dataTable->render('users.index');
    }
}
