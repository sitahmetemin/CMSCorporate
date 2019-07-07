<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        return view('Admin.create.menu', [
            'menus' => Menu::all()
        ]);
    }

    public function store(Request $request)
    {
        try {

            if (empty($request->slug))
                $request->merge(['slug' => Str::slug($request->name, '-')]);


            Menu::create($request->except('_token'));
            return redirect('/admin/menus')->with('status', 'success');


        } catch (\Exception $e) {

            return redirect('/admin/menus')->with('status', $e);
        }
    }

    public function edit($id)
    {
        try {
            $menus = Menu::all();
            return view('Admin.edit.menu', [
                'menu' => $menus->find($id),
                'menus' => $menus,
            ]);

        } catch (\Exception $e) {

            return redirect('/admin/menus')->with('status', $e);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            if (empty($request->slug)) {
                $request->merge(['slug' => Str::slug($request->name, '-')]);
            }

            $foundMenu = Menu::find($id);
            $foundMenu->fill($request->except('_token'));
            $foundMenu->save();
            return redirect('/admin/menus')->with('status', 'success');


        } catch (\Exception $e) {
            return redirect('/admin/menus')->with('status', $e);
        }
    }

    public function checkSlug(Request $request)
    {
        $found = Menu::where('slug', $request->slug)->first();
        if (empty($found))
            return 'not-found';
        else
            return 'found';
    }

    public function destroy($id)
    {
        try {
            Menu::find($id)->delete();
            return redirect('/admin/menus')->with('status', 'success');

        } catch (\Exception $e) {

            return redirect('/admin/menus')->with('status', $e);
        }
    }
}
