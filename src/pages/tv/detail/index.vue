<template>
  <view id="tv-detail">
    <image :src="banner" class="banner" />
    <view class="introduce">
      <image class="tv-icon-head" src="https://bi09fclg.qcloud.la/img/tv-icon-head.png" />
      <view class="small-title">二次元走出来的美食之</view>
      <view class="title">{{title}}</view>
      <view class="content">
        <view class="baike">
          <rich-text :nodes="baike"></rich-text>
        </view>
        <view class="margin"></view>
        <view class="main">
          <rich-text :nodes="main_text"></rich-text>
        </view>
      </view>
    </view>
    <view class="cpgm-title">
      <view class="weui-loadmore weui-loadmore_line">
        <view class="weui-loadmore__tips weui-loadmore__tips_in-line">菜单购买</view>
      </view>
    </view>
    <view class="buy-list">
      <view class="item" v-for="(item, index) in menu" :key="index">
        <image class="img" :src="item.img" />
        <view class="content">
          <view class="title">{{item.title}}</view>
          <view class="zsc">
            <view class="zsc-title">主食材：</view>
            <view class="zsc-content">{{item.zhushicai}}</view>
          </view>
          <view class="item-footer">
            <view class="price-box">
              <text class="price">￥{{item.price}}</text>
              <text class="count">{{item.buy_count}}人购买</text>
            </view>
            <image class="more" src="https://bi09fclg.qcloud.la/img/icon-more.png" @click="showShopMoreMsg(index)" />
          </view>
        </view>
      </view>
    </view>
    <view class="margin"></view>
    <view class="purchase-notice">
      <view class="content">
        <view class="title">
          <view class="gmxz-zh">购买须知</view>
          <view class="weui-loadmore weui-loadmore_line gmxz-en">
            <view class="weui-loadmore__tips weui-loadmore__tips_in-line">purchase notice</view>
          </view>
        </view>
        <view class="content-list">
          <view class="item" v-for="(item, index) in purchase_notice" :key="index">
            <view class="content-list-title">{{item.title}}</view>
            <view class="content-list-msg">{{item.content}}</view>
          </view>
        </view>
        <view class="weui-loadmore weui-loadmore_line purchase-notice-footer-line">
          <view class="weui-loadmore__tips weui-loadmore__tips_in-line">
            <image class="img" src="https://bi09fclg.qcloud.la/img/icon-food3.png" />
            <image class="img" src="https://bi09fclg.qcloud.la/img/icon-food1.png" />
            <image class="img" src="https://bi09fclg.qcloud.la/img/icon-food2.png" />
            <image class="img" src="https://bi09fclg.qcloud.la/img/icon-food5.png" />
            <image class="img" src="https://bi09fclg.qcloud.la/img/icon-food4.png" />
          </view>
        </view>
        <view class="purchase-notice-footer-title">深夜食堂</view>
      </view>
    </view>
    <view class="margin"></view>
    <view class="margin"></view>
    <view class="margin"></view>
    <view class="margin"></view>
    <view class="margin"></view>
    <view class="margin"></view>
    <view class="btn-buys-group">
      <view class="btn-box">
        <button class="weui-btn btn-shopping-car" @click="showBuy">加入购物车</button>
      </view>
      <view class="btn-box">
        <button class="weui-btn btn-buy" @click="showBuy">立即购买</button>
      </view>
    </view>
    <view class="showBuy" v-if="showBuyState" @click="hideBuy" :animation="showBuyAnimate.model">
      <view class="popup-content" v-if="showBuyState" :animation="showBuyAnimate.popup" @click.stop>
        <view class="icon-zhankai-box">
          <image class="icon-zhankai" src="https://bi09fclg.qcloud.la/img/icon-zhankai.png" />
        </view>
        <view class="showBuy-main">
          <view class="all-pick">
            <icon :type="allChecker" class="icon-position" color="#d73a3a" @click="clearOrAllSelectShop"></icon>
            <view class="all-pick-title">选择全部商品</view>
          </view>
          <view class="shop-list">
            <view class="shop-list-item" v-for="(item, index) in menu" :key="index">
              <icon :type="item.checker?'success':'circle'" class="icon-position" @click="item.checker=!item.checker" color="#d73a3a"></icon>
              <view class="shop-list-item-content">
                <image class="item-img" :src="item.img" />
                <view class="item-msg">
                  <view class="item-msg-title">{{item.title}}</view>
                  <view class="item-msg-zsc">主食材：{{item.zhushicai}}</view>
                  <view class="price-box">
                    <view class="price">￥{{item.price}}</view>
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
          </view>
        </view>
        <view class="showBuy-btn-buy-group">
          <view class="btn-box">
            <!-- 提交时把shopList成员的checker == false 的排除掉 -->
            <button class="weui-btn btn-shopping-car" @click="addCar">加入购物车</button>
          </view>
          <view class="btn-box">
            <button class="weui-btn btn-buy">立即购买</button>
          </view>
        </view>
      </view>
    </view>
    
    <view class="showShopMoreMsg" v-if="showModel" @click="showModel=false">
      <view class="model-body" @click.stop>
        <view class="shopMoreMsg">
          <view class="content">
            <view class="title">
              <view class="gmxz-zh">购买须知</view>
              <view class="weui-loadmore weui-loadmore_line gmxz-en">
                <view class="weui-loadmore__tips weui-loadmore__tips_in-line">purchase notice</view>
              </view>
            </view>
            <view class="content-list">
              <view class="item">
                <view class="content-list-title">商品名：</view>
                <view class="content-list-msg">
                  日式三色和菓子传统日本点心糕点日式和果子礼盒
                </view>
              </view>
              <view class="item">
                <view class="content-list-title">口味：</view>
                <view class="content-list-msg">
                  抹茶味，白糖味，红豆味
                </view>
              </view>
              <view class="item">
                <view class="content-list-title">规格：</view>
                <view class="content-list-msg">
                  5个/盒
                </view>
              </view>
              <view class="item">
                <view class="content-list-title">购买须知：</view>
                <view class="content-list-msg">
                  可堂食/可邮寄，邮寄默认顺丰快递
                </view>
              </view>
            </view>
            <view class="weui-loadmore weui-loadmore_line purchase-notice-footer-line">
              <view class="weui-loadmore__tips weui-loadmore__tips_in-line">
                <image class="img" src="https://bi09fclg.qcloud.la/img/icon-food3.png" />
                <image class="img" src="https://bi09fclg.qcloud.la/img/icon-food1.png" />
                <image class="img" src="https://bi09fclg.qcloud.la/img/icon-food2.png" />
                <image class="img" src="https://bi09fclg.qcloud.la/img/icon-food5.png" />
                <image class="img" src="https://bi09fclg.qcloud.la/img/icon-food4.png" />
              </view>
            </view>
            <view class="purchase-notice-footer-title">深夜食堂</view>
          </view>
        </view>
      </view>
    </view>
  </view>
</template>

<script>
export default {
  data () {
    return {
      banner: '',
      title: '',
      baike: '',
      main_text: '',

      menu: [],
      moreMsgIdx: '',

      purchase_notice: [],

      pause: true,
      video: {},
      
      showBuyState: false,
      showBuyAnimate: {
        modelAnimation: {},
        model: {},
        popupAnimation: {},
        popup: {}
      },
      showModel: false,

      minCount: 1
    }
  },
  computed: {
    allChecker () {
      if(this.menu.find((item) => item.checker === false)) { // 只要有一个是false都返回circle
        return 'circle'
      } else { // 全都是true时返回success
        return 'success'
      }
    }
  },
  methods: {
    showShopMoreMsg (index) {
      this.moreMsgIdx = index
      this.showModel = true
    },
    showBuy () {
      this.showBuyState = true

      let animation = wx.createAnimation({
        duration: 200,
        timingFunction: 'linear',
      })
      let animation2 = wx.createAnimation({
        duration: 200,
        timingFunction: 'ease-in',
      })

      this.modelAnimation = animation // 保存动画配置
      this.popupAnimation = animation2 // 保存动画配置
      setTimeout(() => {
        animation.backgroundColor('rgba(0,0,0,.5)').step()
        animation2.bottom(0).step()
        this.showBuyAnimate.model = animation.export()
        this.showBuyAnimate.popup = animation2.export()
      }, 0)
    },
    hideBuy () {
      let animation = wx.createAnimation({
        duration: 200,
        timingFunction: 'linear',
      })
      let animation2 = wx.createAnimation({
        duration: 200,
        timingFunction: 'ease-in',
      })
      this.modelAnimation = animation // 保存动画配置
      this.popupAnimation = animation2 // 保存动画配置
      animation.backgroundColor('rgba(0,0,0,0)').step()
      this.showBuyAnimate.model = animation.export()
      animation2.bottom(-400).step()
      this.showBuyAnimate.popup = animation2.export()
      setTimeout(() => {
        this.showBuyState = false
      }, 200)
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
    clearOrAllSelectShop () {
      if (this.menu.find((item) => item.checker === false)) {
        this.menu.forEach((item) => {
          item.checker = true
        })
      } else {
        this.menu.forEach((item) => {
          item.checker = false
        })
      }
    },
    addCar () {
      wx.showLoading({
        title: '处理中',
        mask: true
      })
      let submitShopCar = []
      this.menu.forEach((item) => {
        if (item.checker) {
          submitShopCar.push({shopID: item.shopID, count: item.count}) // 商品有勾选上的保存到submitShopCar数组中,item存放着商品id和购买数量
        }
      })
      console.log(submitShopCar) // 提交购物车的数据
      setTimeout(() => {
        this.hideBuy()
        wx.showToast({
          title: '加入成功',
          icon: 'success'
        })
      }, 1000)
    }
  },
  mounted () {
    console.log(this.$root.$mp.query.tid)
    wx.request({
      url: 'https://bi09fclg.qcloud.la/myapi/tv/detail/index.php',
      data: {
        tid: this.$root.$mp.query.tid
      },
      success: ({data, statusCode, header}) => {
        console.log(data, statusCode, header)
        wx.setNavigationBarTitle({title: data.product_name})
        this.banner = data.banner
        this.title = data.title
        this.baike = data.baike
        this.main_text = data.main_text
        data.menu.forEach((item) => { // 添加一些字段以方便操作 {count: 购买数, minusStatus: 勾选样式, checker: 是否勾选该商品}
          Object.assign(item, {count: 1, minusStatus: 'disabled', checker: false})
        })
        this.menu = data.menu
        this.purchase_notice = data.purchase_notice
      }
    })
  },
  onUnload () { // 监听页面离开
    // 初始化数据
    this.banner = ''
    this.title = ''
    this.baike = ''
    this.main_text = ''

    this.menu = []
    this.moreMsgIdx = ''

    this.purchase_notice = []
      
    this.showBuyState = false
    this.showBuyAnimate = {
      modelAnimation: {},
      model: {},
      popupAnimation: {},
      popup: {}
    }
    this.showModel = false

    this.minCount = 1
  },
}
</script>

<style lang="less">
  #tv-detail {
    @theme-color: #6b6164;
    @theme-color-opacity: fade(@theme-color, 60%);
    .banner {
      width: 100%;
      height: 225px;
      display: block;
    }
    .introduce {
      padding: 0 12px;
      .tv-icon-head {
        width: calc(160px * 0.5);
        height: calc(160px * 0.5);
        display: block;
        margin: 0 auto;
        margin-top: -40px;
      }
      .small-title {
        text-align: center;
        color: #b5b0b1;
        font-weight: bold;
        font-size: 15px;
      }
      .title {
        text-align: center;
        color: #6b6164;
        font-weight: bold;
        font-size: 24px;
        line-height: 60px;
      }
      .content {
        font-size: 15px;
        color: @theme-color;
        .baike {
          border: 1px dotted @theme-color;
          border-radius: 8px;
          background-color: #f1e7e1;
          padding: 15px;
          text-indent: 2em;
        }
        .main {
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
          .margin {
            width: 100%;
            flex-shrink: 0;
          }
          .text {
            width: 100%;
            text-indent: 2em;
            line-height: 22px;
            flex-shrink: 0;
          }
          .img {
            display: block;
            border-radius: 8px;
            flex-shrink: 0;
          }
        }
      }
    }
  }
</style>
