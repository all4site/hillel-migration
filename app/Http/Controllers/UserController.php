<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index()
	{

		$users = UserModel::all();
		return view('index', compact('users'));
	}

	public function userid($id)
	{

		$userid = UserModel::all()->find($id);
		return view('/user', compact('userid'));
	}
}
