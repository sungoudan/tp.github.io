<?php
namespace Home\Controller;

use Think\Controller;

class UserController extends Controller
{
    public function user()
    {
        echo "string";
    }


    public function laowang()
    {
        $model = new \Home\Model\UserModel();
        var_dump($model);
        $model -> laowang();
    }
}





















