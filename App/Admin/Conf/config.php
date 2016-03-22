<?php
return array(
    'URL_MODEL'     =>1,
    /* 数据库设置 */
    'DB_TYPE'               =>  'MySQL',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'sktools',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'aa',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'sk_',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'UPLOAD_FILE_SIZE'=>'1M',
    //定义上传文件大小
    'UPLOAD_ALLOW_EXT'=>array('jpg','jpeg','bmp','png'),
    //允许上传类型
    'UPLOAD_ROOT_PATH'=>'./Public/Uploads/',
);