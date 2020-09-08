<template>
  <view id="admin">
    <view class="admin-banner-box">
      <image class="admin-banner" src="https://bi09fclg.qcloud.la/img/admin-banner.png" />
      <view class="admin-content">
        <!-- <image class="admin-head" src="http://192.168.1.155/night/img/admin-head.png" mode="center" /> -->
        <open-data class="admin-head" type="userAvatarUrl"></open-data>
        <!-- <view class="admin-name">铜锣烧</view> -->
        <open-data class="admin-name" type="userNickName"></open-data>
        <view class="admin-remark">专业是深夜拉仇恨</view>
        <view class="margin admin-line"></view>
        <view class="buy">
          <navigator class="navigator" url="./order/main">
            <image class="icon" src="https://bi09fclg.qcloud.la/img/icon-order.png" />
            <text class="text">　订单</text>
          </navigator>
          <navigator class="navigator" url="./shoppingcar/main">
            <image class="icon" src="https://bi09fclg.qcloud.la/img/icon-shopping-car.png" />
            <text class="text">　购物车</text>
          </navigator>
        </view>
      </view>
    </view>
    <view class="margin"></view>
    <view class="admin-function-list">
      <navigator class="admin-function-list-item" url="./address/main">
        <image class="image" src="https://bi09fclg.qcloud.la/img/icon-addr.png" />
        <text class="text">我的地址</text>
      </navigator>
      <view class="margin" style="background-color: #f5f5f5"></view>
      <navigator class="admin-function-list-item" url="">
        <image class="image" src="https://bi09fclg.qcloud.la/img/icon-aboutus.png" />
        <text class="text">关于我们</text>
      </navigator>
      <view class="margin" style="background-color: #f5f5f5"></view>
      <navigator class="admin-function-list-item" url="./makefriendlord/main">
        <image class="image" src="https://bi09fclg.qcloud.la/img/icon-focus.png" />
        <text class="text">结交堂主</text>
      </navigator>
      <view class="margin" style="background-color: #f5f5f5"></view>
      <navigator class="admin-function-list-item" url="./howLord/main">
        <image class="image" src="https://bi09fclg.qcloud.la/img/icon-faq.png" />
        <text class="text">如何成为堂主?</text>
      </navigator>
      <view class="margin" style="background-color: #f5f5f5"></view>
    </view>
  </view>
</template>

<script>
export default {

}
</script>

<style lang="less">
  #admin {
    @theme-color: #6b6164;
    background-color: #f5f5f5;
    .admin-banner-box {
      background-color: #f5f5f5;
      .admin-banner {
        width: 100%;
        display: block;
      }
      .admin-content {
        background-color: #fff;
        border-radius: 8px;
        width: 350px;
        padding: 0 10px;
        color: @theme-color;
        text-align: center;
        box-sizing: border-box;
        margin: 0 auto;
        margin-top: -125px;
        box-shadow: 0 0 8px 0 #aaa;
        &::before {
          content: "";
          display: table;
        }
        .admin-head {
          width: 80px;
          height: 80px;
          border: 6px solid #fff;
          border-radius: 50%;
          overflow: hidden;
          display: block;
          margin: 0 auto;
          margin-top: -40px;
        }
        .admin-name {
          font-size: 18px;
          font-weight: bold;
        }
        .admin-remark {
          font-size: 16px;
          line-height: 30px;
        }
        .admin-line {
          border-bottom: 1px solid #ddd;
        }
        .buy {
          display: flex;
          justify-content: space-around;
          align-items: center;
          height: 45px;
          line-height: 45px;
          .navigator {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            .icon {
              display: block;
              width: calc(13px * 1.2);
              height: calc(14px * 1.2);
            }
            .text {
              font-size: 17px;
            }
          }
        }
      }
    }
    .admin-function-list {
      .admin-function-list-item {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        height: 45px;
        line-height: 45px;
        padding: 0 12px;
        background-color: #fff;
        .image {
          display: block;
          width: 20px;
          height: 20px;
          margin-right: 12px;
        }
        .text {
          font-size: 16px;
          color: @theme-color;
        }
      }
    }
  }
</style>
