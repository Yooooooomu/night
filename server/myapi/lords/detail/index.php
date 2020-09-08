<?php
  function _get ($str) {
	$val = array_key_exists($str, $_GET) ? $_GET[$str] : null;//判断关联数组的key是否存在
	return $val; 
  }
  function _post ($str) {
	$val = array_key_exists($str, $_POST) ? $_POST[$str] : null;
	return $val; 
  }
  
  $lid = _get("lid");
  
  $db = [
	[
	  "lid" => 1,
	  "head_img" => "https://bi09fclg.qcloud.la/img/lord-head.png",
	  "name" => "铜锣烧铜锣烧1",
	  "classes" => "厨师",
	  "from" => "蓝翔厨师技工学院",
	  "product" => "《 日式三色和菓子》《不知所云》《不知所谓》《不知所踪》《不明不白》",
	  "record" => '
		1993年在老石人家任厨师3年，特色菜肴：香辣焗肉蚧,尖椒烧桂鱼。
        <div class="margin"></div>
    　　1997年至1999年在老北京烤鸭店羊西店担任厨师长，特色菜有：双椒童子月君，河水鹅肠。
    　　<div class="margin"></div>
        1999年至2000年在灶王大酒楼担任厨师长，特色菜有：酱猪手、开胃白菜、开门红蒸鱼头。
    　　<div class="margin"></div>
        2000年进入巴国布衣连锁有限公司厨政部。
        <div class="margin"></div>
    　　2002年福州巴国布衣担任行政总厨，特色菜有：豆腐鲫鱼、川式极品鲍。
        <div class="margin"></div>
	  ',
	  "food_show" => [
		["name" => "日式三色和菓子", "img" => "https://bi09fclg.qcloud.la/img/cpzs1.png"],
		["name" => "日式三色和菓子", "img" => "https://bi09fclg.qcloud.la/img/cpzs1.png"],
		["name" => "日式三色和菓子", "img" => "https://bi09fclg.qcloud.la/img/cpzs1.png"]
	  ],
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
	]
  ];
  
  $data = [];

  for($i=0;$i<count($db);$i++) {
	if ($db[$i]["lid"] == $lid) {
	  $data = $db[$i];
	  break;
	}
  }
  echo json_encode($data);
?>