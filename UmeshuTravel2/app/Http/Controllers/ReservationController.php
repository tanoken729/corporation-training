<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Library\Verify;
//s土井
use App\Inn;
use App\Plan;
use App\User;
// use DB;
//e土井

//s kondo
use App\Http\Requests\ReservationEditRequest;

class ReservationController extends Controller
{
    //土井 5/22 1300
    public function add(Request $request)
    {
        if (!empty($request->user_id)) {
            Verify::isCorrectUser($request->user_id);

            $items = Inn::where('id', $request->id)->first();
            $user = User::where('id', $request->user_id)->first();
            $param = ['forms' => $request, 'items' => $items, 'user' => $user, 'user_id' => Auth::id()];
            $id = $request->input('id');
            return view('reservation.add', $param)->with('id', $id);
        } else {
            return redirect('/inn/show?id=' . $request->id);
        }
    }
    public function commit(ReservationEditRequest $request)
    {
        $param = [
            'reservation_date' => $request->reservation_date,
            'num_people' => $request->num_people,
            'user_id' => $request->user_id,
            'plan_id' => $request->plan_id,
            'checkin_time' => $request->checkin_time,
            'checkout_time' => $request->checkout_time,
        ];
        DB::insert('insert into reservations (reservation_date, num_people, user_id, plan_id, checkin_time, checkout_time) values
        (:reservation_date, :num_people, :user_id, :plan_id, :checkin_time, :checkout_time)', $param);
        return redirect('/reservation');
    }
    //土井 5/22 1300
    public function index()
    {
        $user_id = Auth::id();
        $reservations = Reservation::where('user_id', $user_id)->get();
        $params = [
            'reservations' => $reservations,
            'user_id' => $user_id,
            'exist' => DB::table('reservations')->where('user_id', $user_id)->exists()
        ];
        return view('reservation.index', $params);
    }



    public function show(Request $request)
    {

        $reservation = Reservation::find($request->id);

        Verify::isCorrectUser($reservation->user_id);
        return view('reservation.show', ['reservation' => $reservation, 'user_id' => Auth::id()]);
    }

    public function edit(Request $request)
    {

        $reservation = Reservation::find($request->id);
        Verify::isCorrectUser($reservation->user_id);

        return view('reservation.edit', ['reservation' => $reservation, 'user_id' => Auth::id()]);
    }

    public function edit_confirm(ReservationEditRequest $request)
    {
        // $validate_rule = [
        //     'reservation_date' => 'required',
        //     'num_people' => 'required|numeric|min:1',
        //     'checkin_time' => 'required',
        //     'checkout_time' => 'required',
        // ];
        $param = $request->all();
        $reservation = Reservation::find($request->id);
        $request->session()->put($param);
        $params = [
            'param' => $param,
            'reservation' => $reservation,
            'user_id' => Auth::id()
        ];
        // $this->validate($request, $validate_rule);
        Verify::isCorrectUser($reservation->user_id);
        return view('reservation.edit_confirm', $params);
    }

    public function update(Request $request)
    {
        $this->validate($request, Reservation::$rules);

        $param = session()->all();
        DB::table('reservations')->where('id', $request->id)
            ->update([
                'reservation_date' => $param["reservation_date"],
                'num_people' => $param["num_people"],
                'checkin_time' => $param["checkin_time"],
                'checkout_time' => $param["checkout_time"],
            ]);

        return view('reservation.edit_complete', ['user_id' => Auth::id()]);
    }

    public function delete(Request $request)
    {
        $reservation = Reservation::find($request->id);
        Verify::isCorrectUser($reservation->user_id);
        return view('reservation.del', ['reservation' => $reservation, 'user_id' => Auth::id()]);
    }

    public function remove(Request $request)
    {
        Reservation::find($request->id)->delete();
        return redirect('/reservation');
    }

    //以下管理者ページ用
    public function index_admin(Request $request)
    {
        $reservations = Reservation::where('user_id', $request->id)->get();
        Verify::isAdminUser();
        return view('reservation.index_admin', ['reservations' => $reservations, 'user_id' => Auth::id()]);
    }

    public function show_admin(Request $request)
    {

        $reservation = Reservation::find($request->id);
        Verify::isAdminUser();
        return view('reservation.show_admin', ['reservation' => $reservation, 'user_id' => Auth::id()]);
    }

    public function edit_admin(Request $request)
    {

        Verify::isAdminUser();
        $reservation = Reservation::find($request->id);
        return view('reservation.edit_admin', ['reservation' => $reservation, 'user_id' => Auth::id()]);
    }

    public function edit_confirm_admin(Request $request)
    {


        $param = $request->all();
        $reservation = Reservation::find($request->id);
        $request->session()->put($param);
        $params = [
            'param' => $param,
            'reservation' => $reservation,
            'user_id' => Auth::id()
        ];
        Verify::isAdminUser();
        return view('reservation.edit_confirm_admin', $params);
    }

    public function update_admin(Request $request)
    {


        $this->validate($request, Reservation::$rules);
        $param = session()->all();
        DB::table('reservations')->where('id', $request->id)
            ->update([
                'reservation_date' => $param["reservation_date"],
                'num_people' => $param["num_people"],
                'checkin_time' => $param["checkin_time"],
                'checkout_time' => $param["checkout_time"],
            ]);
        Verify::isAdminUser();
        return view('reservation.edit_complete', ['user_id' => Auth::id()]);
    }

    public function delete_admin(Request $request)
    {
        $reservation = Reservation::find($request->id);
        Verify::isAdminUser();
        return view('reservation.del_admin', ['reservation' => $reservation, 'user_id' => Auth::id()]);
    }

    public function remove_admin(Request $request)
    {
        Reservation::find($request->id)->delete();
        Verify::isAdminUser();
        return redirect('reservation.index.admin');
    }
}
