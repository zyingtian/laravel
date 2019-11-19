<?php
/**
 * Created by PhpStorm.
 * User: law
 * Date: 19-11-19
 * Time: 下午3:36
 */;

function custom_log($dir='test',$fileName='logs',$msg='',$data=[]){
    $log_dir= storage_path(). DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR .$dir. DIRECTORY_SEPARATOR.date('Y_m_d');
    if (!file_exists($log_dir)) {
        @mkdir($log_dir, 0777, true);
        @chmod($log_dir, 0777);
    }
    $logger     = new \Monolog\Logger($dir);
    $logger->pushHandler(new \Monolog\Handler\StreamHandler($log_dir.DIRECTORY_SEPARATOR.$fileName, \Monolog\Logger::INFO));
    $logger->addInfo($msg, $data);

    return true;
}