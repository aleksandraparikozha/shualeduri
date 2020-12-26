<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function home() {
        $employees = Employee::all();
        return view("list", compact("employees"));
    }

    public function list() {
        return view("list", compact("employees"));
    }


    public function edit($id) {
        $employees = Employee::find($id);
        return view("edit", compact("article"));
    }


    public function updateRecord($id, Request $request) {

        return Redirect::back();
    }

}
