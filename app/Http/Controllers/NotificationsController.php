<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class NotificationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //获取用户登录的全部通知
        $notifications = Auth::user()->notifications()->paginate(20);
        //将通知标记为已读，未读清零
        Auth::user()->markAsRead();
        return view('notifications.index', compact('notifications'));
    }
}
