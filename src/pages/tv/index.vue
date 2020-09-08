<template>
  <view id="tv">
    <scroll-view class="tv-scroll" scroll-y="true" @scrolltolower="getList">
      <view class="margin"></view>
      <swiper class="tv-swiper">
        <swiper-item class="swiper-item" v-for="(banner, index) in bannerList" :key="index">
          <image class="img-item" :src="banner.img" />
        </swiper-item>
      </swiper>
      <view class="margin"></view>
      <view class="tv-search">
        <icon class="icon-search" type="search" size="18" />
        <input class="input" type="text" placeholder="请输入搜索关键词" confirm-type="search" />
      </view>
      <view class="margin"></view>
      <view class="index-box">
        <navigator :url="'./detail/main?tid='+tv.href" class="tv-hot" v-for="(tv, index) in list" :key="index">
          <view class="margin"></view>
          <image class="tv-hot-banner" :src="tv.banner" />
          <view class="margin"></view>
          <scroll-view class="tv-hot-scroll-x" scroll-x="true" @click.stop>
            <view class="item-box" v-for="(img, key) in tv.imgList" :key="key">
              <image class="img" :src="img" />
            </view>
          </scroll-view>
          <view class="title">{{tv.title}}</view>
          <view class="footer">
            <view class="box">
              <image class="icon icon-meishi" src="https://bi09fclg.qcloud.la/img/icon-meishi.png" />
              <text class="text">{{tv.course_count}}</text>
              <text class="text">　</text>
              <image class="icon icon-hot" src="https://bi09fclg.qcloud.la/img/icon-hot2.png" />
              <text class="text">{{tv.hot}}</text>
            </view>
          </view>
          <view class="margin" style="background-color: #f5f5f5"></view>
        </navigator>
        <load-more :loading="loading"></load-more>
      </view>
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
      loading: false,
      loadDone: false,
      page: 1,
      list: []
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
          url: 'https://bi09fclg.qcloud.la/myapi/tv/index.php',
          data: {
            page: this.page
          },
          success: ({data, statusCode, header}) => {
            console.log(data, statusCode, header)
            this.list.push(...data.list)
            if (this.list.length >= data.count) {
              this.loadDone = true
            }
            this.loading = false
            this.page++
          }
        })
      }
    }
  },
  mounted () {
    this.getList()
  }
}
</script>

<style lang="less">
  #tv {
    @theme-color: #6b6164;
    .margin {
      height: 12px;
    }
    .img100-block {
      width: 100%;
      height: 100%;
      display: block;
    }
    .tv-scroll {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      .tv-swiper {
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
      .tv-search {
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
  }
</style>
