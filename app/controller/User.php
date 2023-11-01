<?php

declare(strict_types=1);

namespace app\controller;

use think\Request;
use think\exception\ValidateException;
use app\model\User as UserModel;
use app\validate\User as UserValidate;

class User
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return view('index', [
            'list' => UserModel::withSearch(['gender', 'username', 'email'], [
                'gender' => request()->param('gender'),
                'username' => request()->param('username'),
                'email' => request()->param('email')
            ])->paginate([
                'list_rows' => 5,
                'query' => request()->param()
            ])
        ]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        // return dd($request->param());
        try {
            validate(UserValidate::class)->batch(true)->check($request->param());
        } catch (ValidateException $exception) {
            dd($exception->getError());
        }
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
