<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use Symfony\Component\Debug\BufferingLogger;


class BlogController extends Controller
{
    function __construct()
    {
        try {
            DB::connection()->getPdo();
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration.");
        }
    }
    
    public function index()
    {
        
        //return soft delete
        //                Blog::withTrashed()->restore();
        $perPage = 5;
        $blogs   = Blog::orderBy('id', 'asc')->paginate($perPage);
        
        //        $blogs = Blog::withTrashed()->get(); //nampilin soft delete
        return view('blog.home', ['blogs' => $blogs, 'i' => ($blogs->currentPage() - 1) * $perPage]);
    }
    
    public function show($id)
    {
        //        $nilai = 'Ini adalah link ' . $id;
        //        $users = DB::table('users')->where('username', 'like', '%a%')->get();
        
        //        insert============>
        /*        DB::table('users')->insert([
                    ['username' => 'gg', 'password'=> 'a123'],
                    ['username' => 'gg2', 'password'=> 'a123']
                ]);
        */
        
        //        update=============>
        /*        DB::table('users')->where('username', 'test')
                                ->update(['username'=>'alam']);
        */
        
        //        delete==============>
        //        DB::table('users')->where('id', '>', 5)->delete();
        
        //        dd($users); //debug
        //        $users = DB::table('users')->get();
        
        //        $unescaped = '<script> alert("hehe..")</script>';
        //        return view('blog/single', ['blog' => $nilai, 'users' => $users, 'unescaped' => $unescaped]);
        //        return view('blog/single', ['blog' => $nilai, 'users' => $users]);
        
        $blog = Blog::findOrFail($id);
        
        
//        $blog = Blog::find($id);
//        if ($blog == null) {
//            abort(404);
//        }
        
        return view('blog.single', ['blog' => $blog]);
    }
    
    public function create()
    {
        return view('blog.create');
    }
    
    public function store(Request $request)
    {
        //        dd($request);
        $this->validate($request, [
            'title'       => 'required|min:5',
            'description' => 'required|min:10'
        ]);
        
        $blog              = new Blog;
        $blog->title       = $request->title;
        $blog->description = $request->description;
        $blog->save();
        
        return redirect('blog')->with('info', 'Create Successfully!');
        
        //insert mass assigment
        //        Blog::create([
        //        'title' =>  'halo bekasi',
        //         'description' => 'isi halo bekasi'
        //        ]);
    }
    
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        
        return view('blog.edit', ['blog' => $blog]);
    }
    
    public function update(Request $request, $id)
    {
        $blog              = Blog::find($id);
        $blog->title       = $request->title;
        $blog->description = $request->description;
        $blog->save();
        
        return redirect('blog/' . $id)->with('info', 'Update Successfully!');
        
        //update mass assigment
        //        Blog::find(4)->update([
        //            'title' => 'halo aja',
        //            'description' => 'isi halo ajaaahh'
        //        ]);
    }
    
    public function delete($id)
    {
        //        $blog = Blog::find($id);
        //        $blog->delete();
        //
        //        return redirect('blog');
        
        //delete destroy
        //        Blog::destroy([9]);
        
        Blog::where('id', $id)
            ->delete();
        return redirect('blog')->with('info', 'Delete Successfully!');
    }
    
}
