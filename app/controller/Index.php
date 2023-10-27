<?php

namespace app\controller;

use think\facade\View;

class Index
{
    public function index()
    {
        return redirect(url('/user'));
    }
}
