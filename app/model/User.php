<?php

namespace app\model;

use think\Model;

class User extends Model
{
  // gender 搜索器
  public function searchGenderAttr($query, $value)
  {
    return $value ? $query->where('gender', $value) : '';
  }

  // username 搜索器
  public function searchUsernameAttr($query, $value)
  {
    return $value ? $query->where('username', 'like', '%' . $value . '%') : '';
  }

  // email 搜索器
  public function searchEmailAttr($query, $value)
  {
    return $value ? $query->where('email', 'like', '%' . $value . '%') : '';
  }

  // status 获取器
  public function getStatusAttr($value)
  {
    $status = [0 => '待审核', 1 => '通过'];
    return $status[$value];
  }

  // badge 获取器（虚拟字段）
  public function getBadgeAttr($value, $data)
  {
    return $data['status'] ? 'success' : 'warning';
  }
}
