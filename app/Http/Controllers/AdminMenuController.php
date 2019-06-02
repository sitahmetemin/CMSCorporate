<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
	public function index()
	{
		return view("Admin.list.menus", [
			"menus" => Menu::withCount('post')->get()
		]);
	}

	public function create()
	{
		//
	}

	public function store(Request $request)
	{
		//
	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		//
	}

	public function update(Request $request, $id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}
}
