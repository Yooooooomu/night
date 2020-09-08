<?php
  // 小程序登录流程
  // https://developers.weixin.qq.com/miniprogram/dev/api/api-login.html
  
  function _get ($str) {
	$val = array_key_exists($str, $_GET) ? $_GET[$str] : null;//判断关联数组的key是否存在
	return $val; 
  }
  function _post ($str) {
	$val = array_key_exists($str, $_POST) ? $_POST[$str] : null;
	return $val; 
  }
  
  $code = _get("code");
  
  $appid = "wx53df1fcbb83a158e";
  $secret = "150067f6b8104e636bf59ae57d630a4b";
  
  // 接口
  $url = "https://api.weixin.qq.com/sns/jscode2session?appid=".$appid."&secret=".$secret."&js_code=".$code."&grant_type=authorization_code";
  
  // 发送https请求
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_HEADER, 1);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  $data = curl_exec($curl); // 返回结果
  
  $data = preg_split("/[\n]+/", $data);
  $data = $data[count($data)-1];
  
  curl_close($curl);
  
  // todo
  
  //
  
  echo $data; // 返回用户的openid和获取openid和session_key
?>