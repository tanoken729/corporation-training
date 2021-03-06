<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\PlanRequest;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Inn;
use Illuminate\Support\Facades\Auth;
use App\Library\Verify;

class PlanController extends Controller
{

  public function add(Request $request)
  {
    Verify::isAdminUser();
    $inn = Inn::find($request->id);
    return view('plan.add', ['inn' => $inn, 'user_id' => Auth::id()]);
  }

  public function confirm(PlanRequest $request)
  {
    Verify::isAdminUser();
    $param = $request->all();
    $request->session()->put($param); // １）

    return view('plan.add_confirm', compact('param'))->with('user_id', Auth::id());
  }

  public function create(Request $request)
  {
    Verify::isAdminUser();
    $param = session()->all();
    DB::table('plans')->insert([
      'name' => $param['name'],
      'price' => $param['price'],
      'inn_id' => $param['inn_id'],
    ]);
    return redirect('/inn/inn_info?id=' . $param['inn_id']); //後変更（宿情報詳細に戻る）
  }

  //更新
  public function edit(Request $request)
  {
    Verify::isAdminUser();
    $param = ['id' => $request->id];
    $item = DB::select('select * from plans where id = :id', $param);
    return view('plan.update', ['form' => $item[0], 'user_id' => Auth::id()]);
  }

  public function confirm1(PlanRequest $request)
  {
    Verify::isAdminUser();
    $param = $request->all();
    $request->session()->put($param); // １）

    return view('plan.update_confirm', compact("param"))->with('user_id', Auth::id());
  }

  public function update(Request $request)
  {
    Verify::isAdminUser();
    $param = session()->all();
    DB::table('plans')->where('id', $param['id'])
      ->update([
        'name' => $param["name"],
        'price' => $param["price"],
      ]);
    return redirect('/inn/inn_info?id=' . $param['inn_id']);
  }

  //削除
  public function delete(Request $request)
  {
    Verify::isAdminUser();
    $plan = Plan::find($request->id);
    return view('plan.del', ['form' => $plan, 'user_id' => Auth::id()]);
  }

  public function remove(Request $request)
  {
    Verify::isAdminUser();
    $inn_id = $request->inn_id;
    Plan::find($request->id)->delete();
    return redirect('/inn/inn_info?id=' . $inn_id);
  }
}
