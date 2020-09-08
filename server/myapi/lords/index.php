<?php
  // header('Access-Control-Allow-Origin: *');
  
  function _get ($str) {
	$val = array_key_exists($str, $_GET) ? $_GET[$str] : null;//判断关联数组的key是否存在
	return $val; 
  }
  function _post ($str) {
	$val = array_key_exists($str, $_POST) ? $_POST[$str] : null;
	return $val; 
  }

  $lordList = [
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "1", "name" => "某某某1", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "2", "name" => "某某某2", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "3", "name" => "某某某3", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "4", "name" => "某某某4", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "5", "name" => "某某某5", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "6", "name" => "某某某6", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "7", "name" => "某某某7", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "8", "name" => "某某某8", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "9", "name" => "某某某9", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "10", "name" => "某某某10", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "11", "name" => "某某某2", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "12", "name" => "某某某2", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "13", "name" => "某某某2", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "14", "name" => "某某某2", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "15", "name" => "某某某2", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "16", "name" => "某某某2", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "17", "name" => "某某某2", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "18", "name" => "某某某2", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "19", "name" => "某某某2", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "20", "name" => "某某某2", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "21", "name" => "某某某2", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "22", "name" => "某某某2", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "23", "name" => "某某某2", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "24", "name" => "某某某2", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "25", "name" => "某某某2", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "26", "name" => "某某某2", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "27", "name" => "某某某2", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)]
  ];
  
  $page = _get("page");
  $size = 6;
  
  $data = ["list" => [], "count" => count($lordList)];
  
  if ($page <= 0) {
	echo json_encode($data);
  } else {
	$data["list"] = array_slice($lordList, $size*($page-1), $size);
	echo json_encode($data);
  }
?>