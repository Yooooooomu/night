<template>
  <view id="order-detail">
    <view class="header">
      <image class="img" src="http://192.168.1.155/night/img/shop-item-1.png" />
      <view class="content">
        <view class="title">日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒</view>
        <view class="zsc">
          主食材：嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉嫩豆腐，白玉粉
        </view>
        <view class="header-footer">
          <text class="price">￥18.8</text>
          <text class="count">×1</text>
        </view>
      </view>
    </view>
    <view class="order-status-list">
      <view class="line"></view>
      <view class="order-msg-list">
        <view class="item">
          <view class="order-msg">承运商青岛日日顺汕头 发往 承运商服务点A承运商青岛日日顺汕头 发往 承运商服务点A</view>
          <view class="time">2018-05-17 13:24:20</view>
          <view class="pointer">
            <view class="point"></view>
            <view class="del"></view>
          </view>
        </view>
        <view class="item">
          <view class="order-msg">承运商青岛日日顺汕头 发往 承运商服务点A承运商青岛日日顺汕头 发往 承运商服务点A</view>
          <view class="time">2018-05-17 13:24:20</view>
          <view class="pointer">
            <view class="point"></view>
            <view class="del"></view>
          </view>
        </view>
        <view class="item">
          <view class="order-msg">承运商青岛日日顺汕头 发往 承运商服务点A承运商青岛日日顺汕头 发往 承运商服务点A</view>
          <view class="time">2018-05-17 13:24:20</view>
          <view class="pointer">
            <view class="point"></view>
            <view class="del"></view>
          </view>
        </view>
        <view class="item now">
          <view class="order-msg">承运商青岛日日顺汕头 发往 承运商服务点A承运商青岛日日顺汕头 发往 承运商服务点A</view>
          <view class="time">2018-05-17 13:24:20</view>
          <view class="pointer">
            <view class="point"></view>
            <view class="del"></view>
          </view>
        </view>
        <view class="item">
          <view class="order-msg">承运商青岛日日顺汕头 发往 承运商服务点A承运商青岛日日顺汕头 发往 承运商服务点A</view>
          <view class="time">2018-05-17 13:24:20</view>
          <view class="pointer">
            <view class="point"></view>
            <view class="del"></view>
          </view>
        </view>
        <view class="item">
          <view class="order-msg">承运商青岛日日顺汕头 发往 承运商服务点A承运商青岛日日顺汕头 发往 承运商服务点A</view>
          <view class="time">2018-05-17 13:24:20</view>
          <view class="pointer">
            <view class="point"></view>
            <view class="del"></view>
          </view>
        </view>
        <view class="item">
          <view class="order-msg">承运商青岛日日顺汕头 发往 承运商服务点A承运商青岛日日顺汕头 发往 承运商服务点A</view>
          <view class="time">2018-05-17 13:24:20</view>
          <view class="pointer">
            <view class="point"></view>
            <view class="del"></view>
          </view>
        </view>
      </view>
    </view>
    <view class="margin"></view>
    <view class="order-remark">
      <view>订单号：2525252525</view>
      <view>创建时间：2002-05-30 00:10</view>
    </view>
    <view class="footer">
      <view class="order-status">
        派件中
      </view>
      <view class="btn-box">
        <view class="price-box">合计<text class="price">￥18.8</text></view>
        <view class="btn">确认收货</view>
      </view>
    </view>
  </view>
</template>

<script>
export default {
  onLoad (query) {
    console.log(query)
  }
}
</script>

<style lang="less">
  page {
    background-color: #f5f5f5;
    padding: 12px;
    box-sizing: border-box;
  }
  #order-detail {
    @theme-color: #6b6164;
    @theme-color-opacity: fade(@theme-color, 60%);
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 8px 0 #aaa;
    padding: 10px;
    box-sizing: border-box;
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 115px;
      border-bottom: 1px solid #ddd;
      .img {
        width: 100px;
        height: 100px;
        display: block;
        border-radius: 8px;
        margin-right: 12px;
        flex-shrink: 0;
      }
      .content {
        height: 100px;
        .title {
          font-weight: bold;
          font-size: 16px;
          color: @theme-color;
          display: -webkit-box;
          -webkit-box-orient: vertical;
          -webkit-line-clamp: 2;
          overflow: hidden;
        }
        .zsc {
          display: -webkit-box;
          -webkit-box-orient: vertical;
          -webkit-line-clamp: 1;
          overflow: hidden;
          color: @theme-color;
          font-size: 14px;
        }
        .header-footer {
          display: flex;
          justify-content: space-between;
          align-items: center;
          height: 30px;
          .price {
            color: #d73a3a;
            font-weight: bold;
            font-size: 18px;
          }
          .count {
            color: @theme-color-opacity;
            font-size: 15px;
          }
        }
      }
    }
    .order-status-list {
      display: flex;
      justify-content: space-between;
      .line {
        width: 20px;
        flex-shrink: 0;
        border-right: 2px solid #e4d9d3;
      }
      .order-msg-list {
        flex-shrink: 0;
        .item {
          width: 295px;
          background-color: #fff7f3;
          border-radius: 5px;
          position: relative;
          padding: 8px 10px;
          box-sizing: border-box;
          margin: 15px 0;
          .order-msg {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            color: @theme-color-opacity;
            font-size: 16px;
            line-height: 20px;
          }
          .time {
            font-size: 14px;
            color: @theme-color-opacity;
            height: 20px;
            line-height: 20px;
          }
          .pointer {
            position: absolute;
            top: 0;
            bottom: 0;
            left: -27px;
            width: 35px;
            height: 12px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            .point {
              width: 5px;
              height: 5px;
              background-color: @theme-color;
              border-radius: 50%;
              margin-left: 8px;
            }
            .del {
              width: 12px;
              height: 12px;
              background-color: #fff7f3;
              transform: rotate(45deg);
            }
          }
          &.now {
            .order-msg {
              color: #000;
            }
            .pointer {
              .point {
                width: 6px;
                height: 6px;
                background-color: #d73a3a;
                border: 4px solid #f3c4c4;
                border-radius: 50%;
                margin-left: 5px;
              }
            }
          }
        }
      }
    }
    .order-remark {
      border-top: 1px solid #ddd;
      border-bottom: 1px solid #ddd;
      padding: 12px 0;
      font-size: 16px;
      color: @theme-color;
      line-height: 22px;
    }
    .footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 60px;
      .order-status {
        color: #d73a3a;
        font-size: 16px;
        flex-shrink: 0;
      }
      .btn-box {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 200px;
        flex-shrink: 0;
        .price-box {
          font-size: 15px;
          color: #ddd;
          .price {
            font-size: @theme-color;
            font-weight: bold;
            color: @theme-color;
          }
        }
        .btn {
          width: 90px;
          height: 38px;
          line-height: 38px;
          border-radius: 99px;
          background-color: #fff;
          color: #000;
          font-size: 17px;
          text-align: center;
          box-shadow: 0 3px 3px #eee;
        }
      }
    }
  }
</style>
