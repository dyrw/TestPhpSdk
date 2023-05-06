<?php

namespace DbyPhpSdk\constant;

final class DbyMethodConstants{
    //-----------------------商品售后-------------------------
    const SCM_AFTERSALE_ATTRIBUTES = "dby.scm.aftersale.attributes"; //查询商品售后权益 
    
    const SCM_AFTERSALE_VOUCHER = "dby.scm.aftersale.voucher"; //上传商品售后凭证 
    
    const SCM_AFTERSALE_APPLY = "dby.scm.aftersale.apply"; //创建售后申请单 
    
    const SCM_AFTERSALE_ADDRESS = "dby.scm.aftersale.address"; //查询客户寄回地址 
    
    const SCM_AFTERSALE_LOGISTICS = "dby.scm.aftersale.logistics"; //查询售后物流信息 
    
    const SCM_AFTERSALE_WAYBILL = "dby.scm.aftersale.waybill"; //提交运单信息 
    
    const SCM_AFTERSALE_CONFIRM = "dby.scm.aftersale.confirm"; //确认售后申请 
    
    const SCM_AFTERSALE_CANCEL = "dby.scm.aftersale.cancel"; //取消售后申请 
    
    const SCM_AFTERSALE_DETAILS = "dby.scm.aftersale.details"; //查询售后申请详情 
    
    const SCM_AFTERSALE_REFUND_DETAIL = "dby.scm.aftersale.refunddetail"; //查询售后退款详情 
    
        //-----------------------地址-------------------------
    const SCM_ADDRESS_FIND = "dby.scm.address.find"; //省市区街道四级地址查询 
    const SCM_ADDRESS_CONVERT = "dby.scm.address.convert"; //地址详情转地址编码 
    
        //-----------------------账户余额-------------------------
    const SCM_BALANCE_ACCOUNT_INFO = "dby.scm.balance.account.info"; //账户余额 
    
        //-----------------------商品-------------------------
    const SCM_GOODS_PAGE = "dby.scm.goods.page"; //商品列表 
    const SCM_GOODS_SEARCH = "dby.scm.goods.search"; //商品池查询 = 支持深度分页) 
    const SCM_GOODS_SIMILAR = "dby.scm.goods.similar"; //查询相似商品 
    const SCM_GOODS_INFO = "dby.scm.goods.info"; //商品详情 
    const SCM_GOODS_MERCHANT_PRICE = "dby.scm.goods.merchant.price"; //查询商户价格 
    const SCM_GOODS_PUBLISH_STATUS = "dby.scm.goods.publish.status"; //查询商户商品上下架状态 
    const SCM_GOODS_MIN_BUY = "dby.scm.goods.min.buy"; //查询商品最小起订量 
    const SCM_GOODS_BRAND = "dby.scm.goods.brand"; //查询商品品牌列表 
    const SCM_GOODS_CATEGORY = "dby.scm.goods.category"; //按层级返回全量分类数据 
    const SCM_GOODS_SPU_PAGE = "dby.scm.goods.spu.page"; //商品SPU列表 
    const SCM_GOODS_SPU_INFO = "dby.scm.goods.spu.info"; //商品SPU信息 
    const SCM_GOODS_CHECK = "dby.scm.goods.check"; //商品可售性 
    const SCM_GOODS_SPU_SEARCH_AFTER = "dby.scm.goods.spu.search.after"; //商品spu深度分页 
    
        //-----------------------物流-------------------------
    const SCM_DELIVERY_QUERY = "dby.scm.delivery.query"; //查询订单物流信息 
    const SCM_DELIVERY_CONFIRM = "dby.scm.delivery.confirm"; //订单物流确认收货 
    
        //-----------------------订单-------------------------
    const SCM_ORDER_SUBMIT = "dby.scm.order.submit"; //订单预下单 
    const SCM_ORDER_VIRTUAL_GOODS_SUBMIT = "dby.scm.order.virtualGoods.submit"; //虚拟商品预下单 
    const SCM_ORDER_CONFIRM = "dby.scm.order.confirm"; //确认下单 
    const SCM_ORDER_CANCEL = "dby.scm.order.cancel"; //取消下单 
    const SCM_ORDER_DETAIL = "dby.scm.order.detail"; //查询订单详情 
    
        //---------------------运费----------------------
    const SCM_FREIGHT_VALUATE = "dby.scm.freight.valuate.sku"; //运费评估 
    
        //---------------------电影----------------------
    const LIVING_MOVIE_CINEMA_SHOWS = "dby.living.movie.cinema.schedule"; //影院场次排期 
    const LIVING_MOVIE_SHOW_SEATS = "dby.living.movie.cinema.schedule.seat"; //场次座位信息 
    const LIVING_MOVIE_CINEMA_LIST = "dby.living.movie.cinema.list"; //获取影片近期有拍片的影院 
    const LIVING_MOVIE_DATES = "dby.living.movie.dates"; //获取影片排期 
    const LIVING_MOVIE_HOT_CITY = "dby.living.movie.address.hotCity"; //热门城市查询 
    const LIVING_MOVIE_QUERY_CITY = "dby.living.movie.address.queryCity"; //城市查询 
    const LIVING_MOVIE_LIST = "dby.living.movie.page"; //获取即将上映或者正在热映的电影 
    const LIVING_MOVIE_CINEMA_PAGE = "dby.living.movie.cinema.page"; //分页获取影院信息 




}