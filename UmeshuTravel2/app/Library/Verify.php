<?php
// app/Library/BaseClass.php
namespace app\Library;

use Illuminate\Support\Facades\Auth;


class Verify
{
  public static function isCorrectUser($item_id)
  {
    $user_id = Auth::id(); //ログインユーザのidを取得
    if ($user_id != $item_id) {
      redirect('error')->throwResponse();
      exit;
    }
    return true;
  }

  public static function isAdminUser()
  {
    $user = Auth::user(); //ログインしているユーザのオブジェクトを取得
    $admin = $user->admin; //そのユーザのadminを取得
    if ($admin != 1) {
      redirect('error')->throwResponse();
    }
    return true;
  }
}
