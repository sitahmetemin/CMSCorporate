<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminPostController extends Controller

{
    public function index()
    {
        return view("Admin.list.posts", [
            "posts" => Post::all()
        ]);
    }

    public function create()
    {
        return view("Admin.create.post", [
            'menus' => Menu::all()
        ]);
    }

    public function store(Request $request)
    {
        try {
            if (!empty($request->menu_id)) {
                $parent_menu = Menu::find($request->menu_id);

                $postSlug = Str::slug($request->name, '-');
                $slug = $parent_menu->slug . '/' . $postSlug;
                $request->merge(['slug'=> $slug]);

            }else {
                $request->merge(['slug'=> $request->name]);
            }

            Post::create($request->except('_token'));
            return redirect('/admin/posts')->with('status', 'success');

        } catch (\Exception $e) {

            return redirect('/admin/posts')->with('status', $e);
        }
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function copyItem($id)
    {
        try{

            $getItem = Post::find($id);
            $newItem = $getItem->replicate();
            $newItem->name = $newItem->name . ' - (Kopya)';
            $newItem->save();
            return redirect('/admin/posts')->with('status', 'success');

        }catch (\Exception $e) {

            return redirect('/admin/posts')->with('status', $e);

        }

    }

    public function getDeletedList()
    {
        return view("Admin.list.posts-deleted", [
            "posts" => Post::onlyTrashed()->get()
        ]);
    }

    public function destroy($id)
    {
        try {
            Post::find($id)->delete();
            return redirect('/admin/posts')->with('status', 'success');

        } catch (\Exception $e) {

            return redirect('/admin/posts')->with('status', $e);
        }
    }

    public function hardDelete($id)
    {
        try {
            $post = Post::onlyTrashed()->where('id' , $id);
            $post->forceDelete();
            return redirect('/admin/posts/deleted')->with('status', 'success');

        } catch (\Exception $e) {

            return redirect('/admin/posts/deleted')->with('status', $e);
        }
    }
}
