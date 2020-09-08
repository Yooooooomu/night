<script>
export default {
  created () {
    // 调用API从本地缓存中获取数据
    const logs = wx.getStorageSync('logs') || []
    logs.unshift(Date.now())
    wx.setStorageSync('logs', logs)

    wx.request({
      url: 'https://bi09fclg.qcloud.la/myapi/index/bannerList.php',
      success: ({data, statusCode, header}) => {
        console.log(data, statusCode, header)
        this.$store.commit("LIST", {list: data}) // 加载banner轮播图
      }
    })

    // 获取用户的openid和session_key

    /*
    wx.login({
      success: (res) => {
        wx.request({
          url: 'https://bi09fclg.qcloud.la/myapi/login/index.php',
          data: {
            code: res.code
          },
          success: ({data, statusCode, header}) => {
            console.log(data, statusCode, header)
            wx.setStorage({ // 把session_key和openid放到storage里面
              key: "key",
              data: data
            })
          }
        })
      }
    })*/
    
  }
  
  // 相关文档：
  // https://developers.weixin.qq.com/miniprogram/dev/api/api-login.html#wxloginobject
}
</script>

<style lang="less">
  @theme-color: #6b6164;
  @theme-color-opacity: fade(@theme-color, 60%);
  .margin {
    height: 12px;
  }
  .cpgm-title {
    background-color: #f5f5f5;
    &::before {
      content: "";
      display: table;
    }
    .weui-loadmore {
      margin: 0;
      margin-top: 1em;
      width: 100%;
      line-height: 1em;
      .weui-loadmore__tips {
        top: -0.7em;
        background-color: transparent;
        font-size: 16px;
        color: @theme-color;
        background-color: #f5f5f5;
      }
    }
  }

  .buy-list {
    .item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 115px;
      border-bottom: 1px solid #ddd;
      padding: 12px;
      .img {
        width: 100px;
        height: 100px;
        display: block;
        border-radius: 8px;
        margin-right: 12px;
        flex-shrink: 0;
      }
      .content {
        height: 100px;
        .title {
          font-weight: bold;
          font-size: 16px;
          color: @theme-color;
          display: -webkit-box;
          -webkit-box-orient: vertical;
          -webkit-line-clamp: 2;
          overflow: hidden;
        }
        .zsc {
          display: flex;
          color: @theme-color;
          font-size: 14px;
          .zsc-title {
            flex-shrink: 0;
          }
          .zsc-content {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
            overflow: hidden;
          }
        }
        .item-footer {
          display: flex;
          justify-content: space-between;
          align-items: center;
          height: 30px;
          .price-box {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            width: 60%;
            .price {
              color: #d73a3a;
              font-weight: bold;
              font-size: 18px;
            }
            .count {
              color: @theme-color;
              font-size: 15px;
            }
          }
          .more {
            width: 20px;
            height: 20px;
            display: block;
          }
        }
      }
    }
  }
  .purchase-notice, .shopMoreMsg {
    border: 2px solid @theme-color;
    border-radius: 8px;
    // height: 200px;
    margin: 0 12px;
    padding: 4px;
    .content {
      border: 1px solid @theme-color;
      border-radius: 8px;
      padding: 12px 0;
      .title {
        text-align: center;
        line-height: 20px;
        .gmxz-zh {
          font-size: 22px;
          color: @theme-color;
        }
        .gmxz-en {
          font-size: 14px;
          color: @theme-color-opacity;
          margin-top: 12px;
          margin-bottom: 12px;
        }
      }
      .content-list {
        padding: 0 30px;
        .item {
          display: flex;
          color: @theme-color;
          font-size: 14px;
          align-items: flex-start;
          .content-list-title {
            width: 90px;
            flex-shrink: 0;
          }
          .content-list-msg {
            
          }
        }
      }
      .purchase-notice-footer-line {
        width: 90%;
        .img {
          width: calc(38px * 0.5);
          height: calc(33px * 0.5);
          margin: 0 6px;
        }
      }
      .purchase-notice-footer-title {
        color: @theme-color-opacity;
        text-align: center;
        font-size: 16px;
        font-weight: bold;
        margin-top: -20px;
      }
    }
  }
  .btn-buys-group {
    background-color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 60px;
    position: fixed;
    width: 100%;
    bottom: 0;
    .btn-box {
      width: 113px;
      height: 40px;
      margin: 0 15px;
      .weui-btn {
        border-radius: 99px;
        font-size: 16px;
        box-shadow: 0  0 8px 0 #ddd;
        border: 0;
        &.btn-shopping-car {
          color: #000;
          background-color: #fff;
        }
        &.btn-buy {
          color: #fff;
          background-color: #dfd2cb;
        }
        &::after {
          display: none;
        }
      }
    }
  }
  .showShopMoreMsg {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0,0,0,.4);
    display: flex;
    justify-content: center;
    align-items: center;
    .model-body {
      background-color: #fff;
      padding: 12px 0;
    }
  }
  .showBuy {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0,0,0,0);
    .popup-content {
      position: absolute;
      width: 100%;
      height: 400px;
      bottom: -400px;
      background-color: #fff;
      border-top: 1px solid #ddd;
      .icon-zhankai-box {
        width: 65px;
        height: 24px;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #fff;
        margin: 0 auto;
        margin-top: -24px;
        .icon-zhankai {
          width: calc(26px * 0.5);
          height: calc(14px * 0.5);
          display: block;
        }
      }
      .showBuy-main {
        .icon-position {
          display: flex;
          width: 44px;
          justify-content: center;
          align-items: center;
          flex-shrink: 0;
        }
        .all-pick {
          display: flex;
          align-items: center;
          height: 45px;
          line-height: 45px;
          .all-pick-title {
            font-size: 16px;
            color: @theme-color;
          }
        }
        .shop-list {
          height: 300px;
          overflow: auto;
          .shop-list-item {
            display: flex;
            align-items: center;
            height: 109px;
            .shop-list-item-content {
              display: flex;
              align-items: center;
              padding-right: 12px;
              .item-img {
                flex-shrink: 0;
                width: 100px;
                height: 100px;
                display: block;
                border-radius: 8px;
                margin-right: 10px;
              }
              .item-msg {
                height: 100px;
                .item-msg-title {
                  font-size: 14px;
                  font-weight: bold;
                  color: @theme-color;
                  line-height: 20px;
                  display: -webkit-box;
                  -webkit-box-orient: vertical;
                  -webkit-line-clamp: 2;
                  overflow: hidden;
                }
                .item-msg-zsc {
                  font-size: 14px;
                  color: @theme-color;
                  display: -webkit-box;
                  -webkit-box-orient: vertical;
                  -webkit-line-clamp: 1;
                  overflow: hidden;
                  height: 30px;
                  line-height: 30px;
                }
                .price-box {
                  display: flex;
                  justify-content: space-between;
                  align-items: center;
                  .price {
                    font-size: 16px;
                    color: #d73a3a;
                    font-weight: bold;
                  }
                  .stepper {

                  }
                }
              }
            }
          }
          .shop-list-item + .shop-list-item {
            border-top: 1px solid #ddd;
          }
        }
      }
      .showBuy-btn-buy-group {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 56px;
        .btn-box {
          width: 113px;
          height: 40px;
          margin: 0 15px;
          .weui-btn {
            border-radius: 99px;
            font-size: 16px;
            box-shadow: 0  0 8px 0 #ddd;
            border: 0;
            &.btn-shopping-car {
              color: #000;
              background-color: #fff;
            }
            &.btn-buy {
              color: #fff;
              background-color: #dfd2cb;
            }
            &::after {
              display: none;
            }
          }
        }
      }
    }
  }

  /* 数字选择样式 */
  .stepper {
    width: 80px;
    height: 26px;
    /*给主容器设一个边框*/
    border: 1px solid #ccc;
    border-radius: 99px;
    display: flex;
  }
  
  /*加号和减号*/
  .stepper text {
    width: 23px;
    line-height: 26px;
    text-align: center;
    flex-shrink: 0;
  }
  
  .stepper input {
    width: 34px;
    height: 26px;
    text-align: center;
    font-size: 12px;
    /*给中间的input设置左右边框即可*/
    border-left: 1px solid #ccc;
    border-right: 1px solid #ccc;
    box-sizing: border-box;
    flex-shrink: 0;
  }
  
  /*普通样式*/
  .stepper .normal{
    color: black;
  }
  
  /*禁用样式*/
  .stepper .disabled{
    color: #ccc;
  }
</style>

x6TzfgV+QqfmtFaGKVOWRw==
oonTi5AcS7nU68sTrGUOPWaqj3VE