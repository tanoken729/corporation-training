<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Inn;
use App\Plan;
use Illuminate\Http\Request;
//s近藤 5/23/18:50
// use DB;
use Illuminate\Support\Facades\DB;
use App\Library\Verify;
//e近藤
//黄
use App\Http\Requests\InnRequest;
use Validator;

class InnController extends Controller
{
    //土井5/22 1900
    public function index()
    {
        return view('index', ['user_id' => Auth::id()]);
    }
    public function find(Request $request)
    {
        $items = Inn::where('name', 'like', "%$request->name%")
            ->where('address', 'like', "%$request->area%")->simplePaginate(5);
        $param = [
            'form' => $request,
            'items' => $items,
            'user_id' => Auth::id(),
            'exist' => DB::table('inns')->where('name', 'like', "%$request->name%")->where('address', 'like', "%$request->area%")->exists(),
        ];

        return view('inn.find', $param);
    }
    public function show(Request $request)
    {
        $items = Inn::where('id', $request->id)->first();
        $param = ['name' => $request->name, 'items' => $items, 'user_id' => Auth::id()];

        $id = $request->input('id');
        return view('inn.show', $param)->with('id', $id);
    }
    //土井5/22 1900

    //近藤5/21 1200
    public function post(Request $request)
    {
        $params = [
            'name' => $request->name,
            'area' => $request->area,
        ];
        return redirect('inn.find', $params);
    }
    //近藤5/21 1200


    //黄5/22 1500
    public function add(Request $request)
    { //宿登録
        Verify::isAdminUser();
        return view('inn.add', ['user_id' => Auth::id()]);
    }
    public function confirm(InnRequest $request)
    {
        Verify::isAdminUser();
        $param = $request->all();
        $request->session()->put($param); // １）
        return view('inn.add_confirm', compact("param"))->with('user_id', Auth::id());
    }
    public function create()
    {
        Verify::isAdminUser();
        $param = session()->all();
        DB::table('inns')->insert([
            'name' => $param["name"],
            'postal' => $param["postal"],
            'address' => $param["address"],
            'tel' => $param["tel"],
            'code' => $param["code"],
            'img' => $param["img"],
        ]);
        return redirect('/admin');
    }
    public function find1(Request $request) //宿検索
    {
        Verify::isAdminUser();
        return view('inn.find_admin', ['input' => '', 'user_id' => Auth::id()]);
    }
    public function search1(Request $request)
    {
        Verify::isAdminUser();
        $items = Inn::where('id', "$request->input")
            ->orWhere('name', 'like', "%$request->input%")
            ->simplePaginate(5);
        $param = [
            'input' => $request->input,
            'items' => $items,
            'exist' => DB::table('inns')->where('id', "$request->input")->orWhere('name', 'like', "%$request->input%")->exists(),
            'user_id' => Auth::id()
        ];
        return view('inn.show_admin', $param);
    }
    public function edit(Request $request)
    { //宿更新
        Verify::isAdminUser();
        $param = ['id' => $request->id];
        $item = DB::select('select * from inns where id = :id', $param);
        return view('inn.update', ['form' => $item[0], 'user_id' => Auth::id()]);
    }
    public function confirm1(InnRequest $request)
    {
        Verify::isAdminUser();
        $param = $request->all();
        $request->session()->put($param); // １）
        return view('inn.update_confirm', compact("param"))->with('user_id', Auth::id());
    }
    public function update(Request $request)
    {
        Verify::isAdminUser();
        $param = session()->all();
        DB::table('inns')->where('id', $param['id'])
            ->update([
                'name' => $param["name"],
                'postal' => $param["postal"],
                'address' => $param["address"],
                'tel' => $param["tel"],
                'code' => $param["code"],
                'img' => $param["img"],
            ]);
        return redirect('/inn/inn_info?id=' . $param['id'])->with('user_id', Auth::id());
    }
    public function delete(Request $request)
    { //宿削除
        Verify::isAdminUser();
        $inn = Inn::find($request->id);
        return view('inn.del', ['form' => $inn, 'user_id' => Auth::id()]);
    }
    public function remove(Request $request)
    {
        Verify::isAdminUser();
        Inn::find($request->id)->delete();
        Plan::where('inn_id', $request->id)->delete();
        return redirect('/admin');
    }

    //宿詳細
    public function info(Request $request)
    {
        Verify::isAdminUser();
        $items = Inn::where('id', $request->id)->first();
        $param = [
            'items' => $items,
            'user_id' => Auth::id()
        ];

        $id = $request->input('id');
        return view('inn.inn_info', $param)->with('id', $id);
    }
    //黄5/21 1500
}
