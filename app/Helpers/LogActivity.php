<?php


namespace App\Helpers;
use Request;
use App\LoginActivity as LogActivityModel;


class LogActivity
{


    public static function addToLog($loginuserid,$status,$email)
    {
		//dd($subject);
    	$log = [];
    	//$log['subject'] = $subject;
    	//$log['url'] = Request::fullUrl();
    	//$log['method'] = Request::method();
    	$log['ip_address'] = Request::ip();
    	$log['user_agent'] = Request::header('user-agent');
    	$log['user_id'] = auth()->check() ? $loginuserid : 1;
		$log['status'] = $status;
		$log['email'] = $email;
    	LogActivityModel::create($log);
    }


    public static function logActivityLists()
    {
    	return LogActivityModel::orderBy('lid', 'DESC')->get();
    }


}