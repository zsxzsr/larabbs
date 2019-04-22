<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Handlers\ImageUploadHandler;

class UsersController extends Controller
{
    //个人详情页
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    //编辑页面
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    //更新用户信息
    public function update(UserRequest $request,ImageUploadHandler $upload, User $user)
    {
        $data = $request->all();

        if($request->avatar) {
            $result= $upload->save($request->avatar,'avatars',$user->id);
            if ($result) {
                $data['avatar'] = $result['path'];
            }
        }

        $user->update($data);
        return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
    }
}
