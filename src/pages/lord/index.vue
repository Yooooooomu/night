<template>
  <view id="lord">
    <scroll-view class="lord-scroll" scroll-y="true" @scrolltolower="getList">
      <view class="margin"></view>
      <swiper class="lord-swiper">
        <swiper-item class="swiper-item" v-for="(banner, index) in bannerList" :key="index">
          <image class="img-item" :src="banner.img" />
        </swiper-item>
      </swiper>
      <view class="margin"></view>
      <view class="lord-search">
        <icon class="icon-search" type="search" size="18" />
        <input class="input" type="text" placeholder="请输入搜索关键词" confirm-type="search" />
      </view>
      <view class="margin"></view>
      <view class="lord-box">
        <view class="lord-title">
          <text class="title">美食堂主</text>
        </view>
        <view class="mstz">
          <view class="item" v-for="(lord, index) in lordList" :key="index">
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
            <view class="line" v-if="index%2==0&&(index<lordList.length-1)"></view>
          </view>
        </view>
        <load-more :loading="loading"></load-more>
      </view>
      <view class="margin" style="background-color: #f5f5f5"></view>
    </scroll-view>
  </view>
</template>

<script>
import loadMore from '../../components/loadmore'

export default {
  components: {
    loadMore
  },
  data () {
    return {
      lordList: [],
      page: 1,
      loading: false,
      loadDone: false
    }
  },
  computed: {
    bannerList () {
      return this.$store.state.bannerList
    }
  },
  methods: {
    getList () {
      if (this.loading || this.loadDone) {
        return
      } else {
        this.loading = true

        wx.request({
          url: 'https://bi09fclg.qcloud.la/myapi/lords/index.php',
          data: {
            page: this.page
          },
          success: ({data, statusCode, header}) => {
            console.log(data, statusCode, header)
            this.lordList.push(...data.list)
            if (this.lordList.length >= data.count) {
              this.loadDone = true
            }
            this.loading = false
            this.page++
          }
        })
      }
    },
    jumpLordDetail (href) {
      wx.navigateTo({url: '../lord/detail/main?lid='+href})
    }
  },
  mounted () {
    this.getList()
  }
}
</script>

<style lang="less">
  #lord {
    @theme-color: #6b6164;
    .absolute-center-middle {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      margin: auto;
    }
    .lord-scroll {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      .lord-swiper {
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
      .lord-search {
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
      .lord-title {
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
          font-family: "CRCandGYukiha";
        }
        .more {
          font-size: 16px;
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
          border-bottom: 1px solid #f5f5f5;
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
    }
  }
</style>
