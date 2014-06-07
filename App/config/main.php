<?php
//配置的key必须使用大写，
return [
    'DEFAULT_INDEX'=>'index.php',
    'RESOURCE_SEPERATOR'=>'/',
    "URL_REF"=>true,//是否允许在URL中定义数据表的联合查询
    "CONTROLLER_MAP"=>[],
    /*
     * 应用所包含的模块，模块的配置在各自的配置文件当中。
     * 使用小写
     */
    'MODULES'=>["admin","home"],
];

