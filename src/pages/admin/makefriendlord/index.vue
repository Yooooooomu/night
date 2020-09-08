<template>
  <view id="make-friend-lord">
    <view class="list-box">
      <view class="item" v-for="v in 10">
        <image mode="center" src="http://192.168.1.155/night/img/admin-head.png" class="icon-head" />
        <view class="lord-msg">
          <view class="head">
            <view class="first">
              <text class="name">铜锣烧</text>
              <text class="classes">　厨师</text>
              <image src="http://192.168.1.155/night/img/icon-classes1.png" class="icon-classes1" />
            </view>
            <view class="time">2018-05-05</view>
          </view>
          <view class="foot">
            很喜欢你发的美食，希望能认识一下。认识一下， 认识一下，认识一下，认识一下
            很喜欢你发的美食，希望能认识一下。认识一下， 认识一下，认识一下，认识一下
          </view>
        </view>
      </view>
    </view>
  </view>
</template>

<script>
export default {

}
</script>

<style lang="less">
  page {
    padding: 12px;
    box-sizing: border-box;
    background-color: #f5f5f5;
  }
  #make-friend-lord {
    @theme-color: #6b6164;
    @theme-color-opacity: fade(@theme-color, 60%);
    .list-box {
      .item {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 8px 0 #aaa;
        margin-bottom: 12px;
        height: 100px;
        display: flex;
        align-items: center;
        padding-right: 10px;
        box-sizing: border-box;
        @box-height: 80px;
        .icon-head {
          margin: 0 10px;
          width: 80px;
          height: @box-height;
          border-radius: 50%;
          flex-shrink: 0;
        }
        .lord-msg {
          height: @box-height;
          width: 100%;
          .head {
            display: flex;
            justify-content: space-between;
            .first {
              color: @theme-color;
              .name {
                font-size: 18px;
              }
              .classes {
                font-size: 14px;
              }
              .icon-classes1 {
                width: calc(27px * 0.5);
                height: calc(24px * 0.5);
                vertical-align: top;
              }
            }
            .time {
              color: @theme-color-opacity;
              font-size: 14px;
            }
          }
          .foot {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            color: @theme-color;
            font-size: 14px;
          }
        }
      }
    }
  }
</style>
