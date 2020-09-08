<template>
  <view id="order">
    <view class="weui-tab">
      <view class="weui-navbar">
        <block v-for="(item, index) in tabs" :key="index">
          <view :id="index" class="weui-navbar__item" :class="{'weui-bar__item_on': activeIndex == index}" @click="tabClick($event)">
            <view class="weui-navbar__title">{{item}}</view>
          </view>
        </block>
        <view class="weui-navbar__slider" :style="{'left': sliderLeft+'px', 'transform': 'translateX('+sliderOffset+'px)','-webkit-transform': 'translateX('+sliderOffset+'px)'}"></view>
      </view>
      <view class="weui-tab__panel">
        <scroll-view class="weui-tab__content order-scroller" scroll-y :hidden="activeIndex != 0" @scrolltolower="getList(activeIndex)">
          <view class="order-list-box">
            <navigator :url="'./detail/main?orderid='+index" class="order-item" v-for="(item, index) in order[0].list" :key="index">
              <view class="first">
                <image class="img" src="http://192.168.1.155/night/img/shop-item-1.png" />
                <view class="item-msg">
                  <view class="item-msg-title">日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒</view>
                  <view class="item-msg-zsc">主食材：嫩豆腐，白玉粉</view>
                  <view class="price-box">
                    <text class="price">￥18.8</text>
                    <text class="count">×1</text>
                  </view>
                </view>
              </view>
              <view class="second">
                <view class="order-status">
                  派件中
                </view>
                <view class="btn-box">
                  <view class="price-box">合计<text class="price">￥18.8</text></view>
                  <view class="btn">确认收货</view>
                </view>
              </view>
            </navigator>
            <load-more :loading="order[0].loading"></load-more>
          </view>
        </scroll-view>
        <scroll-view class="weui-tab__content order-scroller" scroll-y :hidden="activeIndex != 1" @scrolltolower="getList(activeIndex)">
          <view class="order-list-box">
            <navigator :url="'./detail/main?orderid='+index" class="order-item" v-for="(item, index) in order[1].list" :key="index">
              <view class="first">
                <image class="img" src="http://192.168.1.155/night/img/shop-item-1.png" />
                <view class="item-msg">
                  <view class="item-msg-title">日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒</view>
                  <view class="item-msg-zsc">主食材：嫩豆腐，白玉粉</view>
                  <view class="price-box">
                    <text class="price">￥18.8</text>
                    <text class="count">×1</text>
                  </view>
                </view>
              </view>
              <view class="second">
                <view class="order-status">
                  派件中
                </view>
                <view class="btn-box">
                  <view class="price-box">合计<text class="price">￥18.8</text></view>
                  <view class="btn">确认收货</view>
                </view>
              </view>
            </navigator>
            <load-more :loading="order[1].loading"></load-more>
          </view>
        </scroll-view>
        <scroll-view class="weui-tab__content order-scroller" scroll-y :hidden="activeIndex != 2" @scrolltolower="getList(activeIndex)">
          <view class="order-list-box">
            <navigator :url="'./detail/main?orderid='+index" class="order-item" v-for="(item, index) in order[2].list" :key="index">
              <view class="first">
                <image class="img" src="http://192.168.1.155/night/img/shop-item-1.png" />
                <view class="item-msg">
                  <view class="item-msg-title">日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒</view>
                  <view class="item-msg-zsc">主食材：嫩豆腐，白玉粉</view>
                  <view class="price-box">
                    <text class="price">￥18.8</text>
                    <text class="count">×1</text>
                  </view>
                </view>
              </view>
              <view class="second">
                <view class="order-status">
                  派件中
                </view>
                <view class="btn-box">
                  <view class="price-box">合计<text class="price">￥18.8</text></view>
                  <view class="btn">确认收货</view>
                </view>
              </view>
            </navigator>
            <load-more :loading="order[2].loading"></load-more>
          </view>
        </scroll-view>
        <scroll-view class="weui-tab__content order-scroller" scroll-y :hidden="activeIndex != 3" @scrolltolower="getList(activeIndex)">
          <view class="order-list-box">
            <navigator :url="'./detail/main?orderid='+index" class="order-item" v-for="(item, index) in order[3].list" :key="index">
              <view class="first">
                <image class="img" src="http://192.168.1.155/night/img/shop-item-1.png" />
                <view class="item-msg">
                  <view class="item-msg-title">日式三色和菓子传统日本点心糕点日 式和果子礼盒日式三色和菓子传统日本点心糕点日 式和果子礼盒</view>
                  <view class="item-msg-zsc">主食材：嫩豆腐，白玉粉</view>
                  <view class="price-box">
                    <text class="price">￥18.8</text>
                    <text class="count">×1</text>
                  </view>
                </view>
              </view>
              <view class="second">
                <view class="order-status">
                  派件中
                </view>
                <view class="btn-box">
                  <view class="price-box">合计<text class="price">￥18.8</text></view>
                  <view class="btn">确认收货</view>
                </view>
              </view>
            </navigator>
            <load-more :loading="order[3].loading"></load-more>
          </view>
        </scroll-view>
      </view>
    </view>
  </view>
</template>

<script>
let sliderWidth = 80

import loadMore from '../../../components/loadmore'
export default {
  components: {
    loadMore
  },
  data () {
    return {
      tabs: ['全部', '待付款', '待收货', '已完成'],
      activeIndex: 0,
      sliderOffset: 0,
      sliderLeft: 0,

      order: [
        {list:[], loading: false, loadDone: false, init: false, curPage: 1, count: 15}, // 全部
        {list:[], loading: false, loadDone: false, init: false, curPage: 1, count: 15}, // 待付款
        {list:[], loading: false, loadDone: false, init: false, curPage: 1, count: 15}, // 待收货
        {list:[], loading: false, loadDone: false, init: false, curPage: 1, count: 15}  // 已完成
      ]
    }
  },
  methods: {
    tabClick (e) {
      this.sliderOffset = e.currentTarget.offsetLeft
      this.activeIndex = e.currentTarget.id
      this.getList(this.activeIndex, 'clickNav')
    },
    getList (activeIndex, eventType) {
      if (eventType == 'clickNav') {
        if (this.order[activeIndex].init) {
          return
        } else {
          this.order[activeIndex].init = true
        }
      }
      if (this.order[activeIndex].loading || this.order[activeIndex].loadDone) {
        return
      } else {
        this.order[activeIndex].loading = true
        setTimeout(() => {
          this.order[activeIndex].list.push(...[1,2,3,4,5])
          if (this.order[activeIndex].list.length >= this.order[activeIndex].count) {
            this.order[activeIndex].loadDone = true
          }
          this.order[activeIndex].loading = false
        }, 1500)
      }
    }
  },
  mounted () {
    wx.getSystemInfo({
      success: (res) => {
        this.sliderLeft = (res.windowWidth / this.tabs.length - sliderWidth) / 2
        this.sliderOffset = res.windowWidth / this.tabs.length * this.activeIndex
      }
    })
    this.getList(this.activeIndex, 'clickNav')
  },
}
</script>

<style lang="less">
  page {
    height: 100%;
  }
  #order {
    @theme-color: #6b6164;
    height: 100%;
    .weui-navbar {
      .weui-navbar__item {
        &.weui-bar__item_on {
          color: @theme-color;
          font-weight: bold;
        }
      }
      .weui-navbar__slider {
        width: 94px;
        background-color: @theme-color;
      }
    }
    .weui-tab__panel {
      overflow: hidden;
      .order-scroller {
        height: 100%;
        background-color: #f5f5f5;
        padding: 12px;
        box-sizing: border-box;
        .order-list-box {
          .order-item {
            margin-bottom: 12px;
            height: 180px;
            border-radius: 8px;
            padding: 8px;
            padding-bottom: 0;
            background-color: #fff;
            box-shadow: 0 0 8px 0 #aaa;
            box-sizing: border-box;
            .first {
              display: flex;
              align-items: center;
              .img {
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
                  .count {
                    color: #eee;
                    font-size: 15px;
                  }
                }
              }
            }
            .second {
              margin-top: 10px;
              border-top: 1px solid #ddd;
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
        }
      }
    }
  }
</style>
