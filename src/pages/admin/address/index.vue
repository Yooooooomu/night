<template>
  <view id="address">
    <view class="list">
      <view class="item" v-for="(addr, index) in list" :key="index">
        <view class="left" hover-class="left-hover"  @longpress="deleteAddr(index)">
          <view class="name">
            有个人　13352225555
          </view>
          <view class="addr">
            <text class="is-default" v-if="addr.defaultAddr">[默认地址]</text>
            <text class="addr-msg">杭州市西湖区西施路东施街4栋65号</text>
          </view>
        </view>
        <navigator :url="'./edit/main?addrid='+addr.id" class="right">
          <image class="icon-edit" src="http://192.168.1.155/night/img/icon-edit.png" />
        </navigator>
      </view>
    </view>
    <navigator url="./edit/main" class="add-new-address">添加新地址</navigator>
  </view>
</template>

<script>
export default {
  data () {
    return {
      list: [{defaultAddr: true, id: 1}, {id: 1}, {id: 1}, {id: 1}, {id: 1}, {id: 1}, {id: 1}, {id: 1}, {id: 1}, {id: 1}]
    }
  },
  methods: {
    deleteAddr (index) {
      console.log(index)
      wx.showModal({
        title: '确认删除该地址吗？',
        content: '',
        success: (res) => {
          if (res.confirm) {
            wx.showLoading({title: '删除中..', mask: true})
            setTimeout(() => {
              this.list.splice(index, 1)
              wx.hideLoading()
              wx.showToast({title: '删除成功', icon: 'success'})
            }, 1000)
          }
        }
      })
    }
  }
}
</script>

<style lang="less">
  page {
    background-color: #f5f5f5;
    padding: 12px;
    box-sizing: border-box;
  }
  #address {
    @theme-color: #6b6164;
    .list {
      .item {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 8px 0 #aaa;
        padding: 12px;
        padding-right: 0;
        height: 90px;
        box-sizing: border-box;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 12px;
        .left {
          .name {
            color: #000;
            font-size: 18px;
            line-height: 30px;
            height: 30px;
          }
          .addr {
            font-size: 16px;
            color: @theme-color;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
            overflow: hidden;
            .is-default {
              color: #ffc8a6;
            }
          }
          &.left-hover {
            background-color: fade(@theme-color, 5%);
          }
        }
        .right {
          display: flex;
          justify-content: center;
          align-items: center;
          border-left: 1px solid #ddd;
          height: 60px;
          width: 60px;
          flex-shrink: 0;
          .icon-edit {
            width: calc(35px * 0.6);
            height: calc(35px * 0.6);
            display: block;
          }
        }
      }
    }
    .add-new-address {
      width: 112px;
      height: 39px;
      line-height: 39px;
      color: #fff;
      border-radius: 99px;
      background-color: #dfd2c8;
      text-align: center;
      font-size: 16px;
      box-shadow: 0 0 8px 0 #aaa;
      margin: 0 auto;
    }
  }
</style>
