<template>
  <view id="lord-detail">
    <view class="lord-banner-box">
      <image class="lord-banner" src="https://bi09fclg.qcloud.la/img/lord-banner.png" />
      <view class="lord-content">
        <navigator url="../makefriend/main" class="jjtz">
          <image class="icon-jjtz" src="https://bi09fclg.qcloud.la/img/icon-jjtz.png" />
          结交堂主
        </navigator>
        <image class="lord-head" :src="head_img" mode="center" />
        <view class="lord-name">
          <view class="lord-name-name">
            {{name}}
            <view class="classes">
              {{classes}}
              <image class="icon-classes" src="https://bi09fclg.qcloud.la/img/icon-classes1.png" />
            </view>
          </view>
        </view>
        <view class="lord-introduce">
          <text style="font-weight: bold">学校：</text>
          {{from}}
          <br>
          <text style="font-weight: bold">代表作：</text>
          {{product}}
        </view>
        <view class="margin"></view>
      </view>
    </view>
    <view class="cszl">
      <view class="lord-detail-title">厨师之路</view>
      <view class="cszl-content">
        <rich-text :nodes="record"></rich-text>
      </view>
    </view>
    <view class="cpzs">
      <view class="lord-detail-title">菜品展示</view>
      <view class="content">
        <view class="img-box" v-for="(food, index) in food_show" :key="index">
          <image class="img" :src="food.img" />
          <view class="name">{{food.name}}</view>
        </view>
      </view>
    </view>
    <view class="cpgm-title">
      <view class="weui-loadmore weui-loadmore_line">
        <view class="weui-loadmore__tips weui-loadmore__tips_in-line">
          菜品购买
        </view>
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
              <view class="item" v-for="(item, index) in menu[moreMsgIdx].more_info" :key="index">
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
      </view>
    </view>
  </view>
</template>

<script>
export default {
  data () {
    return {
      head_img: '',
      name: '',
      classes: '',
      from: '',
      product: '',
      record: '',
      food_show: [],

      menu: [],
      moreMsgIdx: '',

      purchase_notice: [],

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
    wx.request({
      url: "https://bi09fclg.qcloud.la/myapi/lords/detail/index.php",
      data: {
        lid: this.$root.$mp.query.lid
      },
      success: ({data, statusCode, header}) => {
        console.log(data, statusCode, header)
        this.head_img = data.head_img
        this.name = data.name
        this.classes = data.classes
        this.from = data.from
        this.product = data.product
        this.record = data.record
        this.food_show = data.food_show
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
    this.head_img = ''
    this.name = ''
    this.classes = ''
    this.from = ''
    this.product = ''
    this.record = ''
    this.food_show = []
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
  }
}
</script>

<style lang="less">
  #lord-detail {
    @theme-color: #6b6164;
    @theme-color-opacity: fade(@theme-color, 60%);
    .lord-banner-box {
      .lord-banner {
        width: 100%;
        display: block;
      }
      .lord-content {
        background-color: #fff;
        border-radius: 8px;
        width: 300px;
        padding: 0 10px;
        color: @theme-color;
        text-align: center;
        box-sizing: border-box;
        margin: 0 auto;
        margin-top: -125px;
        box-shadow: 0 0 8px 0 #aaa;
        position: relative;
        &::before {
          content: "";
          display: table;
        }
        .jjtz {
          position: absolute;
          right: 6px;
          top: 6px;
          border-radius: 99px;
          height: 26px;
          line-height: 26px;
          font-size: 14px;
          color: #fff;
          background-color: #dfd2cb;
          padding: 0 5px;
          .icon-jjtz {
            width: calc(45px * 0.4);
            height: calc(45px * 0.4);
            vertical-align: middle;
          }
        }
        .lord-head {
          width: 80px;
          height: 80px;
          border: 6px solid #fff;
          border-radius: 50%;
          overflow: hidden;
          display: block;
          margin: 0 auto;
          margin-top: -40px;
        }
        .lord-name {
          display: flex;
          justify-content: center;
          align-items: center;
          .lord-name-name {
            font-size: 18px;
            font-weight: bold;
            position: relative;
            .classes {
              position: absolute;
              left: calc(100% + 5px);
              top: 0;
              bottom: 0;
              font-size: 14px;
              font-weight: normal;
              width: 100px;
              text-align: left;
              height: 20px;
              line-height: 20px;
              margin: auto;
              .icon-classes {
                // position: absolute;
                width: calc(27px * 0.4);
                height: calc(24px * 0.4);
                left: calc(100% + 5px);
                vertical-align: top;
                // bottom: 60%;
              }
            }
          }
        }
        .lord-introduce {
          text-align: left;
          font-size: 16px;
          line-height: 30px;
          line-height: 25px;
        }
      }
    }
    .lord-detail-title {
      margin: 12px;
      border-left: 8px solid @theme-color;
      padding-left: 5px;
      height: 24px;
      line-height: 24px;
      color: @theme-color;
      display: flex;
      justify-content: space-between;
      .title {
        font-size: 20px;
        font-weight: bold;
      }
      .more {
        font-size: 16px;
      }
    }
    .cszl {
      color: @theme-color;
      .cszl-content {
        padding: 0 12px;
        text-indent: 2em;
        font-size: 16px;
      }
    }
    .cpzs {
      background-color: #fff;
      &::before {
        content: "";
        display: table;
      }
      .content {
        padding: 0 12px;
        &::after {
          content: "";
          display: table;
        }
        .img-box {
          margin-bottom: 12px;
          border-radius: 8px;
          overflow: hidden;
          position: relative;
          .img {
            display: block;
            width: 100%;
            height: 217px;
          }
          .name {
            position: absolute;
            right: 0;
            bottom: 0;
            background-color: fade(@theme-color, 50%);
            color: #fff;
            font-size: 16px; 
            height: 26px;
            line-height: 26px;
            padding: 0 15px;
            border-top-left-radius: 8px;
            border-bottom-right-radius: 8px;
          }
        }
      }
    }
  }
</style>
