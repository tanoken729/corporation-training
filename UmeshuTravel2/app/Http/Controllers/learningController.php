<?php

namespace App\Http\Controllers;

use App\Http\Requests\LearningRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class learningController extends Controller
{
  public function index()
  {
    $items = DB::table('courses')->get();
    return view('learning.index', ['items' => $items]);
  }

  public function post(LearningRequest $request)
  {
    $name = $request->name;
    $id = $request->id;

    $data = [
      'name' => 'こんにちは、' . $name . 'さん。',
      'id' => 'あなたのIDは' . $id . 'ですね。'
    ];
    return view('learning.index', $data);
  }

  public function add(Request $request)
  {
    return view('learning.add');
  }

  public function create(Request $request)
  {
    $param = [
      'code' => $request->code,
      'title' => $request->title,
      'price' => $request->price,
    ];
    DB::table('courses')->insert($param);
    return redirect('/learning');
  }

  public function edit(Request $request)
  {
    $item = DB::table('courses')->where('code', $request->code)->first();
    return view('learning.edit', ['form' => $item]);
  }

  public function update(Request $request)
  {
    $param = [
      'code' => $request->code,
      'title' => $request->title,
      'price' => $request->price,
    ];
    DB::table('courses')->where('code', $request->code)->update($param);
    return redirect('/learning');
  }

  public function del(Request $request)
  {

    $item =  DB::table('courses')->where('code', $request->code)->first();
    return view('learning.del', ['form' => $item]);
  }

  public function remove(Request $request)
  {
    DB::table('courses')->where('code', $request->code)->delete();
    return redirect('/learning');
  }

  public function show(Request $request)
  {
    $code = $request->code;
    $items = DB::table('courses')
      ->where('code', $code)
      ->get();
    return view('learning.show', ['items' => $items]);
  }
}
