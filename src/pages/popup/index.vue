<template>
  <view id="test-popup">
    <button @click="showPopup">showPopup</button>
    <view class="popup-model" v-if="show" @click="hidePopup" :animation="animationData">
      <view class="popup-content" v-if="show" :animation="animationData2" @click.stop>
        sss
      </view>
    </view>
    
  </view>
</template>

<script>
export default {
  data () {
    return {
      show: false,
      animationData: {},
      animationData2: {},
      animation: {},
      animation2: {}
    }
  },
  methods: {
    showPopup () {
      this.show = true

      let animation = wx.createAnimation({
        duration: 200,
        timingFunction: 'linear',
      })
      let animation2 = wx.createAnimation({
        duration: 200,
        timingFunction: 'ease-in',
      })

      this.animation = animation // 保存动画配置
      this.animation2 = animation2 // 保存动画配置
      setTimeout(() => {
        animation.backgroundColor('rgba(0,0,0,.5)').step()
        animation2.bottom(0).step()
        this.animationData = animation.export()
        this.animationData2 = animation2.export()
      }, 0)
    },
    hidePopup () {
      let animation = wx.createAnimation({
        duration: 200,
        timingFunction: 'linear',
      })
      let animation2 = wx.createAnimation({
        duration: 200,
        timingFunction: 'ease-in',
      })
      this.animation = animation // 保存动画配置
      this.animation2 = animation2 // 保存动画配置
      animation.backgroundColor('rgba(0,0,0,0)').step()
      this.animationData = animation.export()
      animation2.bottom(-300).step()
      this.animationData2 = animation2.export()
      setTimeout(() => {
        this.show = false
      }, 200)
    }
  }
}
</script>

<style lang="less">
  #test-popup {
    .popup-model {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: rgba(0,0,0,0);
    }
    .popup-content {
      position: absolute;
      width: 100%;
      height: 300px;
      bottom: -300px;
      background-color: #fff;
    }
  }
</style>
