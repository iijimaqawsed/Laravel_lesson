<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class TestController extends Controller
{
    // public function index() {
    //     return 'これはTestControllerです';
    // }

    // public function index() {
    //     $num = 3 * 5;

    //     return '3×5は' . $num . 'です。';
    // }

    // public function index() {

    //     return view('test');
    // }

    // public function index() {

    //     return view('test');
    // }

    // public function index() {
    //     // $num = 3 * 5;
    //     // return 'これはTestControllerです';
    //     // return '3×5は' . $num . 'です。';
    //     $name =  'TestController';
    //     return view('test',['name' => $name]);
    //   }

    public function index() {
        $name = 'TestController';
        $parent = 'Controller';
        $array = ['PHP','JavaScript','Ruby'];
        return view('test',compact('name','parent','array'));
      }

    public function create() {
      $data = [
          'title' => 'title1',
          'body' => 'content1'
      ];

      DB::table('posts')->insert($data);
    }

    public function create2() {
      $post = new Post();

      $post->title = 'title2';
      $post->body = 'content2';

      $post->save();
  }
}
