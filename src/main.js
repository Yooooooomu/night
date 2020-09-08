import Vue from 'vue'
import App from './App'
import store from './store' // vuex导入

import '../node_modules/weui-wxss/dist/style/weui.wxss'

Vue.config.productionTip = false
App.mpType = 'app'

Vue.prototype.$store = store

const app = new Vue(App)
app.$mount()

export default {
  // 这个字段走 app.json
  config: {
    // 页面前带有 ^ 符号的，会被编译成首页，其他页面可以选填，我们会自动把 webpack entry 里面的入口页面加进去(路由)
    pages: ['pages/logs/main', '^pages/index/main', 'pages/lord/main', 'pages/tv/main', 'pages/admin/main'],
    window: {
      backgroundTextStyle: 'light',
      navigationBarBackgroundColor: '#fff',
      navigationBarTitleText: '深夜食堂',
      navigationBarTextStyle: 'black',
      
      // enablePullDownRefresh: true // 允许下拉刷新
    },
    tabBar: {
      list: [
        {
          pagePath: 'pages/index/main',
          text: '首页',
          iconPath: './static/img/tarbar-shitang.png',
          selectedIconPath: './static/img/tarbar-shitang-select.png'
        },
        {
          pagePath: 'pages/lord/main',
          text: '堂主',
          iconPath: './static/img/tarbar-tangzhu.png',
          selectedIconPath: './static/img/tarbar-tangzhu-select.png'
        },
        {
          pagePath: 'pages/tv/main',
          text: '番剧',
          iconPath: './static/img/tarbar-fanju.png',
          selectedIconPath: './static/img/tarbar-fanju-select.png'
        },
        {
          pagePath: 'pages/admin/main',
          text: '食客',
          iconPath: './static/img/tarbar-shike.png',
          selectedIconPath: './static/img/tarbar-shike-select.png'
        },
      ],
      selectedColor: '#d73a3a',
      backgroundColor: '#fff',
      borderStyle: 'white'
    },
  }
}
