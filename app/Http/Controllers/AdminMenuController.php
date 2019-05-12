<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
	public function index()
	{
//		$allMenu = Menu::all();
//		$treeMenu = [];
//		foreach ($allMenu as $oneMenu) {
//			if (empty($oneMenu->parent_id)) {
//				$treeMenu[] = $this->recMenu($oneMenu, $allMenu);
//			}
//		}

		return view("Admin.list.menus", [
			"menus" => Menu::all()
		]);
	}

//	private function recMenu($receivedMenu, $allMenu){
//		$menuSend = [];
//
////		Todo: Burada Kaldın;
//		if (!empty($receivedMenu->parent_id)){
//
//		}else {
//
//		}
//
//	}

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
