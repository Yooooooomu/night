<template>
  <view id="edit-address">
    <view class="edit-box">
      <view class="input-box">
        <view class="label">姓名</view>
        <input class="input" type="text" v-model="name" />
      </view>
      <view class="input-box">
        <view class="label">电话</view>
        <input class="input" type="number" v-model="phone" />
      </view>
      <picker mode="region" :value="region" @change="bindRegionChange($event)" style="position: relative">
        <view class="input-box">
          <view class="label">地区</view>
          <view class="input" style="color: #666">{{region[0]}} {{region[1]}} {{region[2]}}</view>
          <image src="http://192.168.1.155/night/img/icon-zhankai1.png" class="icon-del" />
        </view>
      </picker>
      <view class="input-box">
        <view class="label">地址</view>
        <input class="input" type="text" v-model="detailAddr" />
      </view>
      <view class="input-box">
        <view class="label">邮编</view>
        <input class="input" type="number" v-model="code" />
      </view>
      <view class="input-box default-addr-checker" @click="isDefault = !isDefault">
        <view class="label">设为默认</view>
        <icon class="input icon-checker" size="15" :type="isDefault?'success':'circle'" color="#ffbf53" />
      </view>
    </view>
    <view class="btn-group">
      <view class="confrim" @click="confrim">确认提交</view>
    </view>
  </view>
</template>

<script>
export default {
  data () {
    return {
      name: '',
      phone: '',
      region: ['广东省', '广州市', '海珠区'],
      detailAddr: '',
      code: '',
      isDefault: false
    }
  },
  methods: {
    bindRegionChange (e) {
      this.region = e.mp.detail.value
    },
    confrim () {
      wx.showLoading({
        title: '保存中',
        mask: true
      })

      setTimeout(() => {
        wx.hideLoading()
        wx.showToast({title: '保存成功', icon: 'success'})
        setTimeout(() => {
          wx.navigateBack({delta: 1}) // 返回上一级页面
        }, 1000)
      }, 2000)
    }
  }
}
</script>

<style lang="less">
  page {
    padding: 12px;
    box-sizing: border-box;
    background-color: #f5f5f5;
    height: 100%;
  }
  #edit-address {
    display: flex;
    flex-flow: column nowrap;
    justify-content: space-between;
    height: 100%;
    .edit-box {
      .input-box {
        margin-bottom: 12px;
        background-color: #fff;
        height: 47px;
        line-height: 47px;
        border-radius: 5px;
        padding: 0 12px;
        box-sizing: border-box;
        font-size: 16px;
        color: #000;
        display: flex;
        .label {
          
        }
        .input {
          height: 100%;
          margin-left: 12px;
          &.icon-checker {
            display: flex;
            align-items: center;
          }
        }
        .icon-del {
          position: absolute;
          top: 0;
          bottom: 0;
          right: 12px;
          margin: auto;
          width: 7px;
          height: 12px;
        }
        &.default-addr-checker {
          justify-content: space-between;
        }
      }
    }
    .btn-group {
      display: flex;
      justify-content: space-around;
      .confrim {
        width: 165px;
        height: 43px;
        line-height: 43px;
        color: #fff;
        font-size: 16px;
        text-align: center;
        border-radius: 99px;
        background-color: #dfd2cb;
        box-shadow: 0 0 8px 0 #aaa;
      }
    }
  }
</style>
