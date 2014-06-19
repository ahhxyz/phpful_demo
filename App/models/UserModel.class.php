<?php
namespace App\models;
class UserModel extends \phpful\core\Model{
    
    public $prepare=[
        //["数据库字段","表单字段","内置验证条件"],
        ["name","mingzi","require"],
        
    ];
    protected $_map=[
        //"表单字段"=>"数据库字段",
        "mingzi"=>"name",
    ];
    public $_validate=[
       // ["表单字段名称","验证规则","错误提示"]，
       ["mingzi","require","用户名必须！"], 
        
    ];
}