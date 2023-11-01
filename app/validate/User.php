<?php
/*
 * @Descripttion: 
 * @Author: Goorln
 * @Date: 2023-11-01 18:54:13
 */

declare(strict_types=1);

namespace app\validate;

use think\Validate;

class User extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名' =>  ['规则1','规则2'...]
     *
     * @var array
     */
    protected $rule = [
        '__token__'       => 'token',
        'username'        => 'require|min:2|max:10|chsDash|unique:user',
        'password'        => 'require|min:6',
        'repassword'      => 'require|confirm:password',
        'email'           => 'require|email|unique:user',
        'agree'           => 'require|accepted',
    ];

    /**
     * 定义错误信息
     * 格式：'字段名.规则名' =>  '错误信息'
     *
     * @var array
     */
    protected $message = [
        'username.require'   => '用户名不得为空~',
        'username.min'       => '用户名不得小于2位~',
        'username.max'       => '用户名不得大于10位~',
        'username.chsDash'   => '用户名只能是汉字、字母、数字或下划线以及破折号~',
        'username.unique'    => '用户名已存在~',
        'password.require'   => '密码不得为空~',
        'password.min'       => '密码不得小于6位~',
        'repassword.require' => '密码确认不得为空~',
        'repassword.confirm' => '密码确认和密码不一致~',
        'email.require'      => '电子邮件不得为空~',
        'email.email'        => '电子邮件格式不正确~',
        'email.unique'       => '电子邮件已存在~',
        'agree.require'      => '必须确认协议~',
        'agree.accepted'     => '必须认同协议~'

    ];
}
