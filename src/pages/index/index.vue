<template>
  <view id="index">
    <view class="margin"></view>
    <swiper class="index-swiper">
      <swiper-item class="swiper-item" v-for="(banner, index) in bannerList" :key="index">
        <image class="img-item" :src="banner.img" />
      </swiper-item>
    </swiper>
    <view class="margin"></view>
    <view class="index-search">
      <icon class="icon-search" type="search" size="18" />
      <input class="input" type="text" placeholder="请输入搜索关键词" confirm-type="search" />
    </view>
    <view class="margin"></view>
    <view class="index-box">
      <view class="index-title">
        <text class="title">小食频</text>
      </view>
      <view class="margin"></view>
      <scroll-view class="xsp-scroll-x" scroll-x="true">
        <navigator :url="'./small_video/main?vid='+video.href" class="item-box" v-for="(video, index) in videoList" :key="index">
          <view class="img-box">
            <image :src="video.img" class="img" />
            <view class="hot">
              <image class="icon icon-hot" src="https://bi09fclg.qcloud.la/img/icon-hot.png" />
              <text class="text">{{video.hot}}</text>
            </view>
            <image class="icon icon-player" src="https://bi09fclg.qcloud.la/img/icon-player.png" />
          </view>
          <view class="title">{{video.title}}</view>
          <view class="introduce">{{video.introduce}}</view>
        </navigator>
      </scroll-view>
    </view>
    <view class="margin" style="background-color: #f5f5f5"></view>
    <view class="index-box">
      <view class="index-title">
        <text class="title">美食堂主</text>
        <navigator url="../lord/main" class="more" open-type="switchTab">更多&gt;</navigator>
      </view>
      <view class="mstz">
        <view class="item" v-for="(lord, index) in lordsList" :key="index">
          <view class="content">
            <view class="img-box">
              <image class="img-bg" src="https://bi09fclg.qcloud.la/img/index-mstz-lajiao.png" />
              <image @click="jumpLordDetail(lord.href)" class="img" :src="lord.img" />
            </view>
            <view class="name">{{lord.name}}</view>
            <view class="from">{{lord.from}}</view>
            <view class="meishi">
              <image class="icon icon-meishi" src="https://bi09fclg.qcloud.la/img/icon-meishi.png" />
              <text class="text">{{lord.course_count}}</text>
            </view>
          </view>
          <view class="line" v-if="v%2==0&&(v<17-1)"></view>
        </view>
      </view>
    </view>
    <view class="margin" style="background-color: #f5f5f5"></view>
    <view class="index-box">
      <view class="index-title">
        <text class="title">热播番剧</text>
        <navigator url="../tv/main" class="more" open-type="switchTab">更多&gt;</navigator>
      </view>
      <navigator v-if="hotTV" :url="'../tv/detail/main?tid='+hotTV.href" class="tv-hot">
        <image class="tv-hot-banner" :src="hotTV.banner" />
        <view class="margin"></view>
        <scroll-view class="tv-hot-scroll-x" scroll-x="true" @click.stop>
          <view class="item-box" v-for="(img, index) in hotTV.imgList" :key="index">
            <image class="img" :src="img" />
          </view>
        </scroll-view>
        <view class="title">{{hotTV.title}}</view>
        <view class="footer">
          <view class="box">
            <image class="icon icon-meishi" src="https://bi09fclg.qcloud.la/img/icon-meishi.png" />
            <text class="text">{{hotTV.course_count}}</text>
            <text class="text">　</text>
            <image class="icon icon-hot" src="https://bi09fclg.qcloud.la/img/icon-hot2.png" />
            <text class="text">{{hotTV.hot}}</text>
          </view>
        </view>
      </navigator>
    </view>
    <view class="margin" style="background-color: #f5f5f5"></view>
  </view>
</template>

<script>
export default {
  data () {
    return {
      videoList: [],  // item: {img: url, href: str, hot: num, title: str, introduce: str}
      lordsList: [],  // item: {img: url, href: str, name: str, from: str, course_count: num}
      hotTV: '',      // banner: url, href: str, title: str, hot: num, course_count: num, imgList: [...url]
    }
  },
  computed: {
    bannerList () {
      return this.$store.state.bannerList
    }
  },
  methods: {
    jumpLordDetail (href) {
      wx.navigateTo({url: '../lord/detail/main?lid='+href})
    },
    userInfo (res) {
      console.log(this)
      console.log(res)
    }
  },
  mounted () {
    wx.request({
      url: 'https://bi09fclg.qcloud.la/myapi/index/index.php',
      success: ({data, statusCode, header}) => {
        console.log(data, statusCode, header)
        this.videoList = data.index_video
        this.lordsList = data.index_lord
        this.hotTV = data.index_hot_tv
      }
    })
  }
}
</script>

<!--
本地资源无法通过 WXSS 获取
background-image：可以使用网络图片，或者 base64，或者使用<image/>标签
-->
<style lang="less">
  #index {
    @theme-color: #6b6164;
    /**/
    .img100-block {
      width: 100%;
      height: 100%;
      display: block;
    }
    .absolute-center-middle {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      margin: auto;
    }
    /**/
    .index-title {
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
    .index-swiper {
      margin: 0 12px;
      margin-left: 0;
      .swiper-item {
        margin-left: 12px;
        .img-item {
          width: calc(100% - 12px);
          height: 100%;
          display: block;
        }
      }
    }
    .index-search {
      position: relative;
      background-color: #f5f5f5;
      height: 40px;
      line-height: 40px;
      margin: 0 12px;
      border-radius: 5px;
      .icon-search {
        position: absolute;
        left: 10px;
        top: 0;
        bottom: 0;
        margin: auto;
        width: 20px;
        height: 20px;
      }
      .input {
        height: 100%;
        padding-left: 40px;
        color: #aaa;
      }
    }
    .xsp-scroll-x {
      display: flex;
      white-space: nowrap;
      padding: 0 12px;
      box-sizing: border-box;
      .item-box {
        display: inline-block;
        width: 150px;
        height: 170px;
        vertical-align: top;
        .img-box {
          width: 100%;
          height: 110px;
          position: relative;
          overflow: hidden;
          border-radius: 8px;
          .img {
            .img100-block;
          }
          .hot {
            position: absolute;
            left: 0;
            top: 0;
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 50px;
            height: 25px;
            background-color: @theme-color;
            border-radius: 8px;
            border-top-right-radius: 0;
            border-bottom-left-radius: 0;
            padding: 0 5px;
            box-sizing: border-box;
            .icon-hot {
              display: block;
              height: 16px;
              width: 12px;
            }
            .text {
              font-size: 14px;
              color: #fff;
            }
          }
          .icon-player {
            position: absolute;
            bottom: 12px;
            right: 12px;
            width: 25px;
            height: 25px;
          }
        }
        .title {
          text-align: center;
          font-size: 16px;
          color: @theme-color;
          overflow: hidden;
          text-overflow: ellipsis;
          white-space: nowrap;
          height: 30px;
          line-height: 30px;
        }
        .introduce {
          text-align: center;
          font-size: 12px;
          color: @theme-color;
          overflow: hidden;
          text-overflow: ellipsis;
          white-space: nowrap;
        }
      }
      .item-box + .item-box {
        margin-left: 12px;
      }
    }
    .mstz {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      .item {
        height: 220px;
        width: 50%;
        display: flex;
        align-items: center;
        .content {
          height: 100%;
          width: calc(100% - 1px);
          .img-box {
            position: relative;
            height: 140px;
            width: 100%;
            .img-bg {
              .absolute-center-middle;
              height: 120px;
              width: 120px;
            }
            .img {
              .absolute-center-middle;
              height: 90px;
              width: 90px;
              border-radius: 50%;
            }
          }
          .name {
            font-size: 18px;
            font-weight: bold;
            color: @theme-color;
            text-align: center;
          }
          .from {
            font-size: 15px;
            color: @theme-color;
            text-align: center;
          }
          .meishi {
            display: flex;
            justify-content: center;
            align-items: center;
            .icon-meishi {
              width: 20px;
              height: 20px;
              display: block;
              margin: 0 5px;
            }
            .text {
              color: @theme-color;
            }
          }
        }
        .line {
          height: 120px;
          border-left: 1px solid #aaa;
        }
      }
    }
    .tv-hot {
      .tv-hot-banner {
        margin: 0 12px;
        border-radius: 8px;
        height: 120px;
        width: calc(100% - 24px);
        display: block;
      }
      .tv-hot-scroll-x {
        display: flex;
        white-space: nowrap;
        padding: 0 12px;
        box-sizing: border-box;
        .item-box {
          display: inline-block;
          vertical-align: top;
          width: 80px;
          height: 80px;
          .img {
            .img100-block;
          }
        }
        .item-box + .item-box {
          margin-left: 10px;
        }
      }
      .title {
        font-size: 14px;
        font-weight: bold;
        height: 30px;
        line-height: 30px;
        color:@theme-color;
        margin: 0 12px;
      }
      .footer {
        height: 44px;
        margin: 0 12px;
        display: flex;
        justify-content: flex-end;
        .box {
          display: flex;
          justify-content: space-around;
          align-items: center;
          width: 140px;
          height: 100%;
          .icon-meishi {
            width: 20px;
            height: 20px;
            display: block;
          }
          .icon-hot {
            display: block;
            width: 20px;
            height: 20px;
          }
        }
      }
    }
  }
</style>
