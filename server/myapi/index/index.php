<?php
  // 首页小食频列表
  $index_video = [
	[
	  "img" => "https://bi09fclg.qcloud.la/img/index-xsp1.png",
	  "href" => "1",
	  "hot" => rand(10, 20),
	  "title" => "01",
	  "introduce" => "介绍一"
	 ],
	 [
	  "img" => "https://bi09fclg.qcloud.la/img/index-xsp1.png",
	  "href" => "2",
	  "hot" => rand(10, 20),
	  "title" => "02",
	  "introduce" => "介绍二"
	 ],
	 [
	  "img" => "https://bi09fclg.qcloud.la/img/index-xsp1.png",
	  "href" => "3",
	  "hot" => rand(10, 20),
	  "title" => "03",
	  "introduce" => "介绍三"
	 ],
	 [
	  "img" => "https://bi09fclg.qcloud.la/img/index-xsp1.png",
	  "href" => "4",
	  "hot" => rand(10, 20),
	  "title" => "04",
	  "introduce" => "介绍四"
	 ],
	 [
	  "img" => "https://bi09fclg.qcloud.la/img/index-xsp1.png",
	  "href" => "5",
	  "hot" => rand(10, 20),
	  "title" => "05",
	  "introduce" => "介绍五"
	 ]
  ];
  
  $index_lord = [
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "1", "name" => "某某某1", "from" => "蓝翔厨师技工学校1", "course_count" => rand(10,100)],
	["img" => "https://bi09fclg.qcloud.la/img/index-mstz1.png", "href" => "2", "name" => "某某某2", "from" => "蓝翔厨师技工学校2", "course_count" => rand(10,100)]
  ];
  
  $index_hot_tv = [
	"banner" => "https://bi09fclg.qcloud.la/img/index-tv-hot-swiper1.png",
	"href" => "1",
	"title" => "文章名字章名字章名字章名字章名字章名字章名字",
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
  ];
  
  $db = [
	"index_video" => $index_video,
	"index_lord" => $index_lord,
	"index_hot_tv" => $index_hot_tv
  ];
  
  echo json_encode($db);
?>