<?PHP
    /*
     | Submail voice/verify API demo
     | SUBMAIL SDK Version 2.3 --PHP
     | copyright 2011 - 2016 SUBMAIL
     |--------------------------------------------------------------------------
     */
    
    /*
     |载入 app_config 文件
     |--------------------------------------------------------------------------
     */
    require '../app_config.php';
    
    /*
     |载入 SUBMAILAutoload 文件
     |--------------------------------------------------------------------------
     */
    
    require_once('../SUBMAILAutoload.php');
    
    /*
     |初始化 VOICEVerify 类
     |--------------------------------------------------------------------------
     */
    
    $submail=new VOICEVerify($voice_configs);
    
    /*
     |必选参数
     |--------------------------------------------------------------------------
     |设置语音演验证码接收的11位手机号码
     |--------------------------------------------------------------------------
     */
    
    $submail->setTo('15*********');
    
    /*
     |必选参数
     |--------------------------------------------------------------------------
     |设置语音播报的4-10位数字验证码
     |--------------------------------------------------------------------------
     */
    
    $submail->SetCode('123456');
    

    /*
     |调用 verify 方法发送语音验证码
     |--------------------------------------------------------------------------
     */
    
    $verify=$submail->verify();
    
    
    /*
     |打印服务器返回值
     |--------------------------------------------------------------------------
     */
    
    print_r($verify);
