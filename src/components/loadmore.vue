<template>
  <view>
    <view class="weui-loadmore" v-show="loading">
      <view class="weui-loading"></view>
      <view class="weui-loadmore__tips">正在加载</view>
    </view>
    <view class="weui-loadmore weui-loadmore_line" v-show="!loading">
      <view class="weui-loadmore__tips weui-loadmore__tips_in-line">加载完毕</view>
    </view>
  </view>
</template>

<script>
export default {
  props: {
    loading: {
      type: Boolean
    },
  }
}
</script>



