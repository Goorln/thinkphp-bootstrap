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
        $data = $request->param();
        try {
            validate(UserValidate::class)->batch(true)->check($data);
        } catch (ValidateException $exception) {
            return view('./view/public/toast.html', [
                'infos' => $exception->getError(),
                'url_text' => '返回上一页',
                'url_path' => url('/user/create')
            ]);
        }

        // 密码加密
        $data['password'] = sha1($data['password']);

        // 写入数据库
        $id = UserModel::create($data)->getData('id');

        return $id ? view('./view/public/toast.html', [
            'infos' => ['恭喜注册成功~'],
            'url_text' => '去首页',
            'url_path' => url('/')
        ]) : '注册失败';
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
        return view('edit', [
            'obj' => UserModel::find($id)
        ]);
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
        return '修改:' . $id;
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        return UserModel::destroy($id) ?
            view('./view/public/toast.html', [
                'infos' => ['恭喜删除成功~'],
                'url_text' => '去首页',
                'url_path' => url('/')
            ]) : '删除失败';
    }
}
