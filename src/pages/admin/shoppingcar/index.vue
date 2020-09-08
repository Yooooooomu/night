<template>
  <view id="shopping-car">
    <view class="showBuy-main">
      <view class="all-pick">
        <icon :type="allChecker" class="icon-position" color="#d73a3a" @click="clearOrAllSelectShop"></icon>
        <view class="all-pick-title">选择全部商品</view>
      </view>
      <view class="shop-list">
        <view class="shop-list-item" v-for="(item, index) in shopList" :key="index">
          <icon :type="item.checker?'success':'circle'" class="icon-position" @click="item.checker=!item.checker" color="#d73a3a"></icon>
          <view class="shop-list-item-content">
            <image class="item-img" src="http://192.168.1.155/night/img/shop-item-0001.png" />
            <view class="item-msg">
              <view class="item-msg-title">日式三色和菓子传统日本点心糕点日式和果子礼盒日式三色和菓子传统日本点心糕点日式和果子礼盒</view>
              <view class="item-msg-zsc">主食材：嫩豆腐，白玉粉</view>
              <view class="price-box">
                <view class="price">￥18.8</view>
                <view class="stepper">
                  <!-- 减号 -->
                  <text :class="item.minusStatus" @click="bindMinus(item)">-</text>
                  <!-- 数值 -->
                  <input type="number" v-model="item.count" />
                  <!-- 加号 -->
                  <text class="normal" @click="bindPlus(item)">+</text>
                </view>
              </view>
            </view>
          </view>
        </view>
        <view v-if="shopList.length>0" class="btn-box">
          <view class="price-box">合计<text class="price">￥18.8</text></view>
          <view class="btn">结算</view>
      </view>
      <view v-else class="weui-loadmore weui-loadmore_line">
          <view class="weui-loadmore__tips weui-loadmore__tips_in-line">暂无数据</view>
      </view>
      </view>
    </view>
  </view>
</template>

<script>
export default {
  data () {
    return {
      shopList: [
        {count: 0, minusStatus: 'disabled', checker: false},
        {count: 0, minusStatus: 'disabled', checker: false},
        {count: 0, minusStatus: 'disabled', checker: false},
        {count: 0, minusStatus: 'disabled', checker: false},
        {count: 0, minusStatus: 'disabled', checker: false},
        {count: 0, minusStatus: 'disabled', checker: false},
        {count: 0, minusStatus: 'disabled', checker: false},
        {count: 0, minusStatus: 'disabled', checker: false},
        {count: 0, minusStatus: 'disabled', checker: false},
        {count: 0, minusStatus: 'disabled', checker: false},
      ],
      minCount: 0
    }
  },
  computed: {
    allChecker () {
      if(this.shopList.find((item) => item.checker === false)) { // 只要有一个是false都返回circle
        return 'circle'
      } else { // 全都是true时返回success
        return 'success'
      }
    },
  },
  methods: {
    clearOrAllSelectShop () {
      if (this.shopList.find((item) => item.checker === false)) {
        this.shopList.forEach((item) => {
          item.checker = true
        })
      } else {
        this.shopList.forEach((item) => {
          item.checker = false
        })
      }
    },
    bindMinus (item) {
      // 如果大于1时，才可以减
      if (item.count > this.minCount) {
        item.count--
      }
      // 只有大于一件的时候，才能normal状态，否则disable状态
      item.minusStatus = item.count <= 0 ? 'disabled' : 'normal'
    },
    bindPlus (item) {
      // 不作过多考虑自增1
      item.count++
      // 只有大于一件的时候，才能normal状态，否则disable状态
      item.minusStatus = item.count <= 0 ? 'disabled' : 'normal'
    },
  }
}
</script>

<style lang="less">
  page {
    height: 100%;
  }
  #shopping-car {
    @theme-color: #6b6164;
    height: 100%;
    .showBuy-main {
      height: 100%;
      .icon-position {
        display: flex;
        width: 44px;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
      }
      .all-pick {
        display: flex;
        align-items: center;
        height: 45px;
        line-height: 45px;
        .all-pick-title {
          font-size: 16px;
          color: @theme-color;
        }
      }
      .shop-list {
        height: calc(100% - 45px);
        overflow: auto;
        .shop-list-item {
          display: flex;
          align-items: center;
          height: 109px;
          .shop-list-item-content {
            display: flex;
            align-items: center;
            padding-right: 12px;
            .item-img {
              flex-shrink: 0;
              width: 100px;
              height: 100px;
              display: block;
              border-radius: 8px;
              margin-right: 10px;
            }
            .item-msg {
              height: 100px;
              .item-msg-title {
                font-size: 14px;
                font-weight: bold;
                color: @theme-color;
                line-height: 20px;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 2;
                overflow: hidden;
              }
              .item-msg-zsc {
                font-size: 14px;
                color: @theme-color;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 1;
                overflow: hidden;
                height: 30px;
                line-height: 30px;
              }
              .price-box {
                display: flex;
                justify-content: space-between;
                align-items: center;
                .price {
                  font-size: 16px;
                  color: #d73a3a;
                  font-weight: bold;
                }
                .stepper {

                }
              }
            }
          }
        }
        .shop-list-item + .shop-list-item {
          border-top: 1px solid #ddd;
        }
        .btn-box {
          border-top: 1px solid #ddd;
          display: flex;
          align-items: center;
          justify-content: space-between;
          flex-shrink: 0;
          padding: 12px;
          box-sizing: border-box;
          .price-box {
            font-size: 17px;
            color: #ddd;
            .price {
              font-size: @theme-color;
              font-weight: bold;
              color: @theme-color;
            }
          }
          .btn {
            width: 115px;
            height: 45px;
            line-height: 45px;
            border-radius: 99px;
            background-color: #dfd2cb;
            color: #fff;
            font-size: 17px;
            text-align: center;
            box-shadow: 0 3px 3px #eee;
          }
        }
      }
    }
  }
</style>
