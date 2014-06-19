<?php
namespace App\controllers;
use App\models\UserModel;
class UserController extends \phpful\core\Controller{
    
    public function get() {
        $m=new UserModel();
        //var_dump($m);
        $_POST["mingzi"]="用户名";
        $_POST["age"]=12;
        var_dump($m->insert());
        echo "USER控制器";
    }
    
    public function logAction(){
        
    }
    
}