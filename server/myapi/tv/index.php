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

  $tvList = [
	[
	  "banner" => "https://bi09fclg.qcloud.la/img/index-tv-hot-swiper1.png",
	  "href" => "1",
	  "title" => "1文章名字章名字章名字章名字章名字章名字章名字",
	  "hot" => rand(10, 20),
	  "course_count" => rand(10, 100),
	  "imgList" => [
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png"
	  ]
    ],
	[
	  "banner" => "https://bi09fclg.qcloud.la/img/index-tv-hot-swiper1.png",
	  "href" => "2",
	  "title" => "2文章名字章名字章名字章名字章名字章名字章名字",
	  "hot" => rand(10, 20),
	  "course_count" => rand(10, 100),
	  "imgList" => [
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png"
	  ]
    ],
	[
	  "banner" => "https://bi09fclg.qcloud.la/img/index-tv-hot-swiper1.png",
	  "href" => "3",
	  "title" => "3文章名字章名字章名字章名字章名字章名字章名字",
	  "hot" => rand(10, 20),
	  "course_count" => rand(10, 100),
	  "imgList" => [
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png"
	  ]
    ],
	[
	  "banner" => "https://bi09fclg.qcloud.la/img/index-tv-hot-swiper1.png",
	  "href" => "4",
	  "title" => "4文章名字章名字章名字章名字章名字章名字章名字",
	  "hot" => rand(10, 20),
	  "course_count" => rand(10, 100),
	  "imgList" => [
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png"
	  ]
    ],
	[
	  "banner" => "https://bi09fclg.qcloud.la/img/index-tv-hot-swiper1.png",
	  "href" => "5",
	  "title" => "5文章名字章名字章名字章名字章名字章名字章名字",
	  "hot" => rand(10, 20),
	  "course_count" => rand(10, 100),
	  "imgList" => [
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png"
	  ]
    ],
	[
	  "banner" => "https://bi09fclg.qcloud.la/img/index-tv-hot-swiper1.png",
	  "href" => "6",
	  "title" => "6文章名字章名字章名字章名字章名字章名字章名字",
	  "hot" => rand(10, 20),
	  "course_count" => rand(10, 100),
	  "imgList" => [
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png",
		"https://bi09fclg.qcloud.la/img/index-tv-hot-scroll-x-1.png"
	  ]
    ]
  ];
  
  $page = _get("page");
  $size = 2;
  
  $data = ["list" => [], "count" => count($tvList)];
  
  if ($page <= 0) {
	echo json_encode($data);
  } else {
	$data["list"] = array_slice($tvList, $size*($page-1), $size);
	echo json_encode($data);
  }
?>