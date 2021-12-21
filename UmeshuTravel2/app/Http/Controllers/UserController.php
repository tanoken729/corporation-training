<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserEditRequest;
use Illuminate\Support\Facades\DB;
//s近藤
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Library\Verify;
//e近藤


class UserController extends Controller
{
    //土井5/21 1700
    public function find(Request $request) //Request $request)
    {
        Verify::isAdminUser();
        $items = User::where('id', "$request->form")
            ->orWhere('name', 'like', "%$request->form%")
            ->orWhere('tel', "$request->form")->get();
        $param = ['form' => $request->form, 'items' => $items, 'user_id' => Auth::id()];
        return view('user.find', $param);
    }

    public function edit2(Request $request)
    {
        Verify::isCorrectUser($request->id);
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'birthday' => $request->birthday,
            'postal' => $request->postal,
            'address' => $request->address,
            'tel' => $request->tel,
            'email' => $request->email,
        ];
        DB::table('users')
            ->where('id', $request->id)
            ->update($param);

        return view('user.edit2', ['user_id' => Auth::id()]); //('user/show')->with('id', $request->id);//
    }

    public function show(Request $request)
    {
        Verify::isCorrectUser($request->id);
        $user = User::where('id', "$request->id")->first();
        $param = ['user' => $user, 'user_id' => Auth::id()];
        return view('user.show', $param);
    }
    public function show_admin(Request $request)
    {
        Verify::isAdminUser();
        $user = User::where('id', "$request->id")->first();
        $param = ['user' => $user, 'user_id' => Auth::id()];
        return view('user.show', $param);
    }
    //土井5/21 1700

    public function add(Request $request)
    {
        return view('user.add');
    }

    // public function create(Request $request)
    // {
    //    $this->validate($request, User::$rules);
    //    $user = new User;
    //    $form = $request->all();
    //    unset($form['_token']);
    //    $user->fill($form)->save();
    //    return view('user.add2', ['items'=>$items]);
    // }

    public function add2(Request $request)
    {
        $param = $request->all();
        $request->session()->put($param);

        return view('user.add2', compact("param"))->with('user_id', Auth::id());
    }

    public function create()
    { //createメソッドとしてデータベースに送ってから完了ページ表示
        $param = session()->all();
        DB::table('users')->insert([ //validatorが消えた
            'name' => $param["name"],
            'postal' => $param["postal"],
            'address' => $param["address"],
            'tel' => $param["tel"],
            'email' => $param["email"],
            'birthday' => $param["birthday"],
            //s近藤
            'password' => Hash::make($param["password"]),
            //e近藤
            //データベースのカラムの数とここが一致してなければSQLSTATE[23000]: Integrity constraint violation: 19 NOT NULL constraint failed: エラー
        ]);
        return view('user.add3');
    }

    // public function add3(Request $request)//add3メソッドとして（完了ページは表示されるがデータ送られない）
    // {
    //     return view('user.add3');
    // }


    public function edit(Request $request) //追加
    {
        Verify::isCorrectUser($request->id);
        $user = User::find($request->id);
        return view('user.edit', ['form' => $user, 'user_id' => Auth::id()]);
    }

    public function update(Request $request)
    {
        $this->validate($request, User::$rules);
        $user = User::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $user->fill($form)->save(); //インスタンスに値を設定して保存
        return redirect('/user/edit2');
    }

    public function delete(Request $request)
    {
        Verify::isCorrectUser($request->id);
        $user =  User::find($request->id);
        return view('user.del', ['form' => $user, 'user_id' => Auth::id()]);
    }

    public function remove(Request $request)
    {
        User::find($request->id)->delete();
        return redirect('/user/del2'); //ここで退会完了画面に飛ぶ
    }
    public function delete2(Request $request)
    {
        return view('user.del2'); //退会完了
    }

    //s近藤
    public function logout()
    {
        Auth::logout();
        return redirect('/reservation');
    }
    //e kondo

    public function edit_admin(UserEditRequest $request)
    {
        Verify::isAdminUser();
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'birthday' => $request->birthday,
            'address' => $request->address,
            'tel' => $request->tel,
            'email' => $request->email,
            'created_at' => $request->created_at,
        ];
        DB::table('users')
            ->where('id', $request->id)
            ->update($param);

        return redirect('user/show_admin?id=' . $request->id);
    }
}
