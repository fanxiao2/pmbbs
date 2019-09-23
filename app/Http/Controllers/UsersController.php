<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    //个人中心
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    //编辑操作
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    //处理编辑表单，更新内容
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('users.show', $user->id)->with('success', '个人资料修改成功');
    }
}
