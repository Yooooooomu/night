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
  
  $tid = _get("tid");

  $db = [
	[
	  "tid" => 1,
	  "product_name" => "和菓子1",
	  "banner" => "https://bi09fclg.qcloud.la/img/tv-detail-banner.png",
	  
	  "title" => "日式三色和菓子1",
	  
	  "baike" => "“和菓子”，“和”指代日本。“菓子”一词指代甜点。中文写作“和果子”。<br><br>我们所说的和果子，其实指的是日式糕点。<br><br>日式糕点和日本料理一样，对于原料、制作、出品外观和不可食用的食具、装饰品都非常讲究。其造型通常为花、叶、桃、可爱的小动物、传统用具等。<br><br>本次介绍的日式三色和果子，也叫三色团子。属于春天赏樱花的时候看的花见团子，一般是三色的。<br><br>它的主要材料是：嫩豆腐，白玉粉，白砂糖，抹茶粉，红豆沙",
	  
	  "main_text" => '<div class="text">小伙伴们在看动漫的时候，经常会看到很多诱人的美食，今天小编就来带大家看一下动漫里颜值出镜率比较高的三色团子，三色团子出现在各种动漫里面。 </div>
        <div class="margin"></div>
        <img class="img" style="width: 100%" src="https://bi09fclg.qcloud.la/img/video-main-1.png" />
        <div class="margin"></div>
        <img class="img" style="width: 100%" src="https://bi09fclg.qcloud.la/img/video-main-2.png" />
        <div class="margin"></div>
        <img class="img" style="width: 48%;height: 160px" src="https://bi09fclg.qcloud.la/img/video-main-3.png" />
        <img class="img" style="width: 48%;height: 160px" src="https://bi09fclg.qcloud.la/img/video-main-4.png" />
        <div class="margin"></div>
        <div class="text">这样高颜值的三色团子作为一道美味的和风甜点，还原在现实中的样子也迷倒了一大片吃货。</div>
        <div class="margin"></div>
        <img class="img" style="width: 100%" src="https://bi09fclg.qcloud.la/img/video-main-5.png" />
        <div class="margin"></div>
        <img class="img" style="width: 100%" src="https://bi09fclg.qcloud.la/img/video-main-6.png" />
        <div class="margin"></div>
        <img class="img" style="width: 100%" src="https://bi09fclg.qcloud.la/img/video-main-7.png" />
        <div class="margin"></div>',
	  
	  "menu" => [
		[
		  "shopID" => "1001",
		  "img" => "https://bi09fclg.qcloud.la/img/shop-item-1.png",
		  "title" => "日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒",
		  // 主食材
		  "zhushicai" => "嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉",
		  "price" => 18.8,
		  "buy_count" => 123,
		  "more_info" => [
			["title" => "商品名", "content" => "日式三色和菓子传统日本点心糕点日式和果子礼盒"],
			["title" => "口味", "content" => "抹茶味，白糖味，红豆味"],
			["title" => "规格", "content" => "5个/盒"],
			["title" => "购买须知", "content" => "堂食/可邮寄，邮寄默认顺丰快递"]
		  ]
		],
		[
		  "shopID" => "1002",
		  "img" => "https://bi09fclg.qcloud.la/img/shop-item-1.png",
		  "title" => "日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒",
		  // 主食材
		  "zhushicai" => "嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉",
		  "price" => 18.8,
		  "buy_count" => 123,
		  "more_info" => [
			["title" => "商品名", "content" => "日式三色和菓子传统日本点心糕点日式和果子礼盒"],
			["title" => "口味", "content" => "抹茶味，白糖味，红豆味"],
			["title" => "规格", "content" => "5个/盒"],
			["title" => "购买须知", "content" => "堂食/可邮寄，邮寄默认顺丰快递"]
		  ]
		],
		[
		  "shopID" => "1003",
		  "img" => "https://bi09fclg.qcloud.la/img/shop-item-1.png",
		  "title" => "日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒",
		  // 主食材
		  "zhushicai" => "嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉",
		  "price" => 18.8,
		  "buy_count" => 123,
		  "more_info" => [
			["title" => "商品名", "content" => "日式三色和菓子传统日本点心糕点日式和果子礼盒"],
			["title" => "口味", "content" => "抹茶味，白糖味，红豆味"],
			["title" => "规格", "content" => "5个/盒"],
			["title" => "购买须知", "content" => "堂食/可邮寄，邮寄默认顺丰快递"]
		  ]
		],
		[
		  "shopID" => "1004",
		  "img" => "https://bi09fclg.qcloud.la/img/shop-item-1.png",
		  "title" => "日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒",
		  // 主食材
		  "zhushicai" => "嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉",
		  "price" => 18.8,
		  "buy_count" => 123,
		  "more_info" => [
			["title" => "商品名", "content" => "日式三色和菓子传统日本点心糕点日式和果子礼盒"],
			["title" => "口味", "content" => "抹茶味，白糖味，红豆味"],
			["title" => "规格", "content" => "5个/盒"],
			["title" => "购买须知", "content" => "堂食/可邮寄，邮寄默认顺丰快递我是你哥哥"]
		  ]
		]
	  ],
	  
	  "purchase_notice" => [
		["title" => "【重要提示】", "content" => "同一账号只限购买6单，需要更多请用其他账号购买下单"],
		["title" => "【重要提示】", "content" => "同一账号只限购买6单，需要更多请用其他账号购买下单"],
		["title" => "【重要提示】", "content" => "同一账号只限购买6单，需要更多请用其他账号购买下单"],
		["title" => "【重要提示】", "content" => "同一账号只限购买6单，需要更多请用其他账号购买下单"]
	  ]
	],
	[
	  "tid" => 2,
	  "product_name" => "和菓子2",
	  "banner" => "https://bi09fclg.qcloud.la/img/tv-detail-banner.png",
	  
	  "title" => "日式三色和菓子2",
	  
	  "baike" => "“和菓子”，“和”指代日本。“菓子”一词指代甜点。中文写作“和果子”。<br><br>我们所说的和果子，其实指的是日式糕点。<br><br>日式糕点和日本料理一样，对于原料、制作、出品外观和不可食用的食具、装饰品都非常讲究。其造型通常为花、叶、桃、可爱的小动物、传统用具等。<br><br>本次介绍的日式三色和果子，也叫三色团子。属于春天赏樱花的时候看的花见团子，一般是三色的。<br><br>它的主要材料是：嫩豆腐，白玉粉，白砂糖，抹茶粉，红豆沙",
	  
	  "main_text" => '<div class="text">小伙伴们在看动漫的时候，经常会看到很多诱人的美食，今天小编就来带大家看一下动漫里颜值出镜率比较高的三色团子，三色团子出现在各种动漫里面。 </div>
        <div class="margin"></div>
        <img class="img" style="width: 100%" src="https://bi09fclg.qcloud.la/img/video-main-1.png" />
        <div class="margin"></div>
        <img class="img" style="width: 100%" src="https://bi09fclg.qcloud.la/img/video-main-2.png" />
        <div class="margin"></div>
        <img class="img" style="width: 48%;height: 160px" src="https://bi09fclg.qcloud.la/img/video-main-3.png" />
        <img class="img" style="width: 48%;height: 160px" src="https://bi09fclg.qcloud.la/img/video-main-4.png" />
        <div class="margin"></div>
        <div class="text">这样高颜值的三色团子作为一道美味的和风甜点，还原在现实中的样子也迷倒了一大片吃货。</div>
        <div class="margin"></div>
        <img class="img" style="width: 100%" src="https://bi09fclg.qcloud.la/img/video-main-5.png" />
        <div class="margin"></div>
        <img class="img" style="width: 100%" src="https://bi09fclg.qcloud.la/img/video-main-6.png" />
        <div class="margin"></div>
        <img class="img" style="width: 100%" src="https://bi09fclg.qcloud.la/img/video-main-7.png" />
        <div class="margin"></div>',
	  
	  "menu" => [
		[
		  "shopID" => "2001",
		  "img" => "https://bi09fclg.qcloud.la/img/shop-item-1.png",
		  "title" => "日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒",
		  // 主食材
		  "zhushicai" => "嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉",
		  "price" => 18.8,
		  "buy_count" => 123,
		  "more_info" => [
			["title" => "商品名", "content" => "日式三色和菓子传统日本点心糕点日式和果子礼盒"],
			["title" => "口味", "content" => "抹茶味，白糖味，红豆味"],
			["title" => "规格", "content" => "5个/盒"],
			["title" => "购买须知", "content" => "堂食/可邮寄，邮寄默认顺丰快递"]
		  ]
		],
		[
		  "shopID" => "2002",
		  "img" => "https://bi09fclg.qcloud.la/img/shop-item-1.png",
		  "title" => "日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒",
		  // 主食材
		  "zhushicai" => "嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉",
		  "price" => 18.8,
		  "buy_count" => 123,
		  "more_info" => [
			["title" => "商品名", "content" => "日式三色和菓子传统日本点心糕点日式和果子礼盒"],
			["title" => "口味", "content" => "抹茶味，白糖味，红豆味"],
			["title" => "规格", "content" => "5个/盒"],
			["title" => "购买须知", "content" => "堂食/可邮寄，邮寄默认顺丰快递"]
		  ]
		],
		[
		  "shopID" => "2003",
		  "img" => "https://bi09fclg.qcloud.la/img/shop-item-1.png",
		  "title" => "日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒",
		  // 主食材
		  "zhushicai" => "嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉",
		  "price" => 18.8,
		  "buy_count" => 123,
		  "more_info" => [
			["title" => "商品名", "content" => "日式三色和菓子传统日本点心糕点日式和果子礼盒"],
			["title" => "口味", "content" => "抹茶味，白糖味，红豆味"],
			["title" => "规格", "content" => "5个/盒"],
			["title" => "购买须知", "content" => "堂食/可邮寄，邮寄默认顺丰快递"]
		  ]
		],
		[
		  "shopID" => "2004",
		  "img" => "https://bi09fclg.qcloud.la/img/shop-item-1.png",
		  "title" => "日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒",
		  // 主食材
		  "zhushicai" => "嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉",
		  "price" => 18.8,
		  "buy_count" => 123,
		  "more_info" => [
			["title" => "商品名", "content" => "日式三色和菓子传统日本点心糕点日式和果子礼盒"],
			["title" => "口味", "content" => "抹茶味，白糖味，红豆味"],
			["title" => "规格", "content" => "5个/盒"],
			["title" => "购买须知", "content" => "堂食/可邮寄，邮寄默认顺丰快递我是你哥哥"]
		  ]
		]
	  ],
	  
	  "purchase_notice" => [
		["title" => "【重要提示】", "content" => "同一账号只限购买6单，需要更多请用其他账号购买下单"],
		["title" => "【重要提示】", "content" => "同一账号只限购买6单，需要更多请用其他账号购买下单"],
		["title" => "【重要提示】", "content" => "同一账号只限购买6单，需要更多请用其他账号购买下单"],
		["title" => "【重要提示】", "content" => "同一账号只限购买6单，需要更多请用其他账号购买下单"]
	  ]
	],
	[
	  "tid" => 3,
	  "product_name" => "和菓子3",
	  "banner" => "https://bi09fclg.qcloud.la/img/tv-detail-banner.png",
	  
	  "title" => "日式三色和菓子3",
	  
	  "baike" => "“和菓子”，“和”指代日本。“菓子”一词指代甜点。中文写作“和果子”。<br><br>我们所说的和果子，其实指的是日式糕点。<br><br>日式糕点和日本料理一样，对于原料、制作、出品外观和不可食用的食具、装饰品都非常讲究。其造型通常为花、叶、桃、可爱的小动物、传统用具等。<br><br>本次介绍的日式三色和果子，也叫三色团子。属于春天赏樱花的时候看的花见团子，一般是三色的。<br><br>它的主要材料是：嫩豆腐，白玉粉，白砂糖，抹茶粉，红豆沙",
	  
	  "main_text" => '<div class="text">小伙伴们在看动漫的时候，经常会看到很多诱人的美食，今天小编就来带大家看一下动漫里颜值出镜率比较高的三色团子，三色团子出现在各种动漫里面。 </div>
        <div class="margin"></div>
        <img class="img" style="width: 100%" src="https://bi09fclg.qcloud.la/img/video-main-1.png" />
        <div class="margin"></div>
        <img class="img" style="width: 100%" src="https://bi09fclg.qcloud.la/img/video-main-2.png" />
        <div class="margin"></div>
        <img class="img" style="width: 48%;height: 160px" src="https://bi09fclg.qcloud.la/img/video-main-3.png" />
        <img class="img" style="width: 48%;height: 160px" src="https://bi09fclg.qcloud.la/img/video-main-4.png" />
        <div class="margin"></div>
        <div class="text">这样高颜值的三色团子作为一道美味的和风甜点，还原在现实中的样子也迷倒了一大片吃货。</div>
        <div class="margin"></div>
        <img class="img" style="width: 100%" src="https://bi09fclg.qcloud.la/img/video-main-5.png" />
        <div class="margin"></div>
        <img class="img" style="width: 100%" src="https://bi09fclg.qcloud.la/img/video-main-6.png" />
        <div class="margin"></div>
        <img class="img" style="width: 100%" src="https://bi09fclg.qcloud.la/img/video-main-7.png" />
        <div class="margin"></div>',
	  
	  "menu" => [
		[
		  "shopID" => "3001",
		  "img" => "https://bi09fclg.qcloud.la/img/shop-item-1.png",
		  "title" => "日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒",
		  // 主食材
		  "zhushicai" => "嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉",
		  "price" => 18.8,
		  "buy_count" => 123,
		  "more_info" => [
			["title" => "商品名", "content" => "日式三色和菓子传统日本点心糕点日式和果子礼盒"],
			["title" => "口味", "content" => "抹茶味，白糖味，红豆味"],
			["title" => "规格", "content" => "5个/盒"],
			["title" => "购买须知", "content" => "堂食/可邮寄，邮寄默认顺丰快递"]
		  ]
		],
		[
		  "shopID" => "3002",
		  "img" => "https://bi09fclg.qcloud.la/img/shop-item-1.png",
		  "title" => "日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒",
		  // 主食材
		  "zhushicai" => "嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉",
		  "price" => 18.8,
		  "buy_count" => 123,
		  "more_info" => [
			["title" => "商品名", "content" => "日式三色和菓子传统日本点心糕点日式和果子礼盒"],
			["title" => "口味", "content" => "抹茶味，白糖味，红豆味"],
			["title" => "规格", "content" => "5个/盒"],
			["title" => "购买须知", "content" => "堂食/可邮寄，邮寄默认顺丰快递"]
		  ]
		],
		[
		  "shopID" => "3003",
		  "img" => "https://bi09fclg.qcloud.la/img/shop-item-1.png",
		  "title" => "日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒",
		  // 主食材
		  "zhushicai" => "嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉",
		  "price" => 18.8,
		  "buy_count" => 123,
		  "more_info" => [
			["title" => "商品名", "content" => "日式三色和菓子传统日本点心糕点日式和果子礼盒"],
			["title" => "口味", "content" => "抹茶味，白糖味，红豆味"],
			["title" => "规格", "content" => "5个/盒"],
			["title" => "购买须知", "content" => "堂食/可邮寄，邮寄默认顺丰快递"]
		  ]
		],
		[
		  "shopID" => "3004",
		  "img" => "https://bi09fclg.qcloud.la/img/shop-item-1.png",
		  "title" => "日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒",
		  // 主食材
		  "zhushicai" => "嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉",
		  "price" => 18.8,
		  "buy_count" => 123,
		  "more_info" => [
			["title" => "商品名", "content" => "日式三色和菓子传统日本点心糕点日式和果子礼盒"],
			["title" => "口味", "content" => "抹茶味，白糖味，红豆味"],
			["title" => "规格", "content" => "5个/盒"],
			["title" => "购买须知", "content" => "堂食/可邮寄，邮寄默认顺丰快递我是你哥哥"]
		  ]
		]
	  ],
	  
	  "purchase_notice" => [
		["title" => "【重要提示】", "content" => "同一账号只限购买6单，需要更多请用其他账号购买下单"],
		["title" => "【重要提示】", "content" => "同一账号只限购买6单，需要更多请用其他账号购买下单"],
		["title" => "【重要提示】", "content" => "同一账号只限购买6单，需要更多请用其他账号购买下单"],
		["title" => "【重要提示】", "content" => "同一账号只限购买6单，需要更多请用其他账号购买下单"]
	  ]
	],
	[
	  "tid" => 4,
	  "product_name" => "和菓子4",
	  "banner" => "https://bi09fclg.qcloud.la/img/tv-detail-banner.png",
	  
	  "title" => "日式三色和菓子4",
	  
	  "baike" => "“和菓子”，“和”指代日本。“菓子”一词指代甜点。中文写作“和果子”。<br><br>我们所说的和果子，其实指的是日式糕点。<br><br>日式糕点和日本料理一样，对于原料、制作、出品外观和不可食用的食具、装饰品都非常讲究。其造型通常为花、叶、桃、可爱的小动物、传统用具等。<br><br>本次介绍的日式三色和果子，也叫三色团子。属于春天赏樱花的时候看的花见团子，一般是三色的。<br><br>它的主要材料是：嫩豆腐，白玉粉，白砂糖，抹茶粉，红豆沙",
	  
	  "main_text" => '<div class="text">小伙伴们在看动漫的时候，经常会看到很多诱人的美食，今天小编就来带大家看一下动漫里颜值出镜率比较高的三色团子，三色团子出现在各种动漫里面。 </div>
        <div class="margin"></div>
        <img class="img" style="width: 100%" src="https://bi09fclg.qcloud.la/img/video-main-1.png" />
        <div class="margin"></div>
        <img class="img" style="width: 100%" src="https://bi09fclg.qcloud.la/img/video-main-2.png" />
        <div class="margin"></div>
        <img class="img" style="width: 48%;height: 160px" src="https://bi09fclg.qcloud.la/img/video-main-3.png" />
        <img class="img" style="width: 48%;height: 160px" src="https://bi09fclg.qcloud.la/img/video-main-4.png" />
        <div class="margin"></div>
        <div class="text">这样高颜值的三色团子作为一道美味的和风甜点，还原在现实中的样子也迷倒了一大片吃货。</div>
        <div class="margin"></div>
        <img class="img" style="width: 100%" src="https://bi09fclg.qcloud.la/img/video-main-5.png" />
        <div class="margin"></div>
        <img class="img" style="width: 100%" src="https://bi09fclg.qcloud.la/img/video-main-6.png" />
        <div class="margin"></div>
        <img class="img" style="width: 100%" src="https://bi09fclg.qcloud.la/img/video-main-7.png" />
        <div class="margin"></div>',
	  
	  "menu" => [
		[
		  "shopID" => "4001",
		  "img" => "https://bi09fclg.qcloud.la/img/shop-item-1.png",
		  "title" => "日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒",
		  // 主食材
		  "zhushicai" => "嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉",
		  "price" => 18.8,
		  "buy_count" => 123,
		  "more_info" => [
			["title" => "商品名", "content" => "日式三色和菓子传统日本点心糕点日式和果子礼盒"],
			["title" => "口味", "content" => "抹茶味，白糖味，红豆味"],
			["title" => "规格", "content" => "5个/盒"],
			["title" => "购买须知", "content" => "堂食/可邮寄，邮寄默认顺丰快递"]
		  ]
		],
		[
		  "shopID" => "4002",
		  "img" => "https://bi09fclg.qcloud.la/img/shop-item-1.png",
		  "title" => "日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒",
		  // 主食材
		  "zhushicai" => "嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉",
		  "price" => 18.8,
		  "buy_count" => 123,
		  "more_info" => [
			["title" => "商品名", "content" => "日式三色和菓子传统日本点心糕点日式和果子礼盒"],
			["title" => "口味", "content" => "抹茶味，白糖味，红豆味"],
			["title" => "规格", "content" => "5个/盒"],
			["title" => "购买须知", "content" => "堂食/可邮寄，邮寄默认顺丰快递"]
		  ]
		],
		[
		  "shopID" => "4003",
		  "img" => "https://bi09fclg.qcloud.la/img/shop-item-1.png",
		  "title" => "日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒",
		  // 主食材
		  "zhushicai" => "嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉",
		  "price" => 18.8,
		  "buy_count" => 123,
		  "more_info" => [
			["title" => "商品名", "content" => "日式三色和菓子传统日本点心糕点日式和果子礼盒"],
			["title" => "口味", "content" => "抹茶味，白糖味，红豆味"],
			["title" => "规格", "content" => "5个/盒"],
			["title" => "购买须知", "content" => "堂食/可邮寄，邮寄默认顺丰快递"]
		  ]
		],
		[
		  "shopID" => "4004",
		  "img" => "https://bi09fclg.qcloud.la/img/shop-item-1.png",
		  "title" => "日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒",
		  // 主食材
		  "zhushicai" => "嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉",
		  "price" => 18.8,
		  "buy_count" => 123,
		  "more_info" => [
			["title" => "商品名", "content" => "日式三色和菓子传统日本点心糕点日式和果子礼盒"],
			["title" => "口味", "content" => "抹茶味，白糖味，红豆味"],
			["title" => "规格", "content" => "5个/盒"],
			["title" => "购买须知", "content" => "堂食/可邮寄，邮寄默认顺丰快递我是你哥哥"]
		  ]
		]
	  ],
	  
	  "purchase_notice" => [
		["title" => "【重要提示】", "content" => "同一账号只限购买6单，需要更多请用其他账号购买下单"],
		["title" => "【重要提示】", "content" => "同一账号只限购买6单，需要更多请用其他账号购买下单"],
		["title" => "【重要提示】", "content" => "同一账号只限购买6单，需要更多请用其他账号购买下单"],
		["title" => "【重要提示】", "content" => "同一账号只限购买6单，需要更多请用其他账号购买下单"]
	  ]
	]
  ];

  $data = [];

  for($i=0;$i<count($db);$i++) {
	if ($db[$i]["tid"] == $tid) {
	  $data = $db[$i];
	  break;
	}
  }
  echo json_encode($data);
?>