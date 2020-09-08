<template>
  <view id="makeFriend">
    <view class="title">请留下您的基本信息，方便堂主联系。</view>
    <view class="input-box">
      <view class="label">姓名</view>
      <input v-model.lazy="myName" class="input" type="text" placeholder="请输入姓名" />
    </view>
    <view class="input-box">
      <view class="label">电话</view>
      <input v-model.lazy="myPhone" class="input" type="text" placeholder="请输入手机号" />
    </view>
    <view class="input-box">
      <view class="label">微信号</view>
      <input v-model.lazy="myWechat" class="input" type="text" placeholder="请输入微信号" />
    </view>
    <view class="input-box">
      <view class="label">爱好</view>
      <input v-model.lazy="myhobit" class="input" type="text" placeholder="请输入爱好" />
    </view>
    <view class="input-box-liuyan">
      <view class="input-box-liuyan-title">留言</view>
      <textarea v-model.lazy="message" maxlength="-1" class="textarea" :show-confirm-bar="false" placeholder="请输入留言" />
    </view>
    <view class="submit-box">
      <button class="btn-submit" @click="submit">提交</button>
    </view>
  </view>
</template>

<script>
export default {
  data () {
    return {
      myName: '',
      myPhone: '',
      myWechat: '',
      myhobit: '',
      message: ''
    }
  },
  methods: {
    submit () {
      setTimeout(() => { // model.lazy问题
         wx.showLoading({
          title: "正在提交",
          mask: true
        })
        let query = {
          myName: this.myName,
          myPhone: this.myPhone,
          myWechat: this.myWechat,
          myhobit: this.myhobit,
          message: this.message
        }
        console.log(query)
          setTimeout(() => {
            wx.hideLoading()
            wx.showToast({
              title: "提交成功",
              icon: "success"
            })
            setTimeout(() => {
              this.myName = ''
              this.myPhone = ''
              this.myWechat = ''
              this.myhobit = ''
              this.message = ''
              wx.navigateBack()
            }, 1000)
          }, 1000)
      }, 0)
    }
  }
}
</script>

<style lang="less">
  Page {
    background: #f5f5f5; // 当前页面bgcolor
  }
  #makeFriend {
    @theme-color: #6b6164;
    padding: 0 12px;
    padding-bottom: 75px;
    box-sizing: border-box;
    .title {
      color: @theme-color;
      font-size: 15px;
      height: 33px;
      line-height: 33px;
    }
    .input-box {
      display: flex;
      height: 45px;
      line-height: 45px;
      font-size: 16px;
      color: @theme-color;
      background-color: #fff;
      border-radius: 5px;
      margin-bottom: 12px;
      .label {
        flex-shrink: 0;
        padding: 0 10px;
      }
      .input {
        width: 100%;
        height: 100%;
      }
    }
    .input-box-liuyan {
      font-size: 16px;
      color: @theme-color;
      background-color: #fff;
      border-radius: 5px;
      .input-box-liuyan-title {
        height: 45px;
        line-height: 45px;
        border-bottom: 1px solid #ddd;
        padding-left: 10px;
      }
      .textarea {
        height: 90px;
        padding: 10px;
        box-sizing: border-box;
      }
    }
    .submit-box {
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      height: 75px;
      display: flex;
      justify-content: center;
      align-items: center;
      .btn-submit {
        width: 112px;
        height: 38px;
        display: block;
        border-radius: 99px;
        box-shadow: 0 0 8px 0 #ccc;
        font-size: 16px;
        color: #fff;
        background-color: #dfd2cb;
        border: 0;
        outline: 0;
        &::after {
          display: none;
        }
      }
    }
  }
</style>
