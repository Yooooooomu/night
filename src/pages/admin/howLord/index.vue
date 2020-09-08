<template>
  <view id="how-lord">
    成为堂主的具体条件如下： <br>

    第一：准备好原材料。<br>

    第二：鹰嘴豆提前用水浸泡12小时以上，然后加入适量的水煮烂，捞出待用。<br>

    第三：加煮烂的鹰嘴豆和藜麦一起放入小土锅中，加入一倍的水，大火烧开后调小火，盖上盖子焖煮15分钟左右,带藜麦开花，露出白色小圈圈，藜麦饭就煮好了。<br>

    第四：将芦笋、蘑菇、黄红菜椒洗净，切成丁待用。<br>

    第五：倒入少许禾然特级初榨橄榄油，和少许盐。<br>

    第六：烧至8分热后加入切好的芦笋、蘑菇、黄红菜椒丁，翻炒出香味，撒少许黑胡椒，盛出备用。
    <image class="img" src="http://192.168.1.155/night/img/how-lord.png" />
    <view class="footer">
      如果您有意愿成为堂主，请联系我们。 <br>
      客服：400-820-8825
    </view>

  </view>
</template>

<script>
export default {
  data () {
    return {
      content: [{
        children: [{
          type: 'text',
          text: '成为堂主的具体条件如下：'
        }]
      }]
    }
  }
}
</script>

<style lang="less">
  page {
    padding: 12px;
    box-sizing: border-box;
  }
  #how-lord {
    color: #000;
    font-size: 14px;
    ._br {
      height: 12px;
    }
    .img {
      width: calc(100% - 10px);
      margin: 5px auto;
      display: block;
    }
    .footer {
      color: #ccc;
    }
  }
</style>
