<html>

<head>
  <script async="true" src="https://tr.snapchat.com/config/com/82b036f6-4e02-4c1c-a837-78fc69eaf6ac.js" crossorigin="anonymous"></script>
  <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-E1EC8YJJJ3&amp;l=dataLayer&amp;cx=c"></script>
  <script async="" src="//cdn.taboola.com/libtrc/unip/1521557/tfa.js" id="tb_tfa_script"></script>
  <script async="" src="//acdn.adnxs.com/dmp/up/pixie.js"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>RollerCoin – Online Bitcoin Mining Simulator Game</title>
  <meta name="360-site-verification" content="4b30faac08ed8e4bc4891f837121edc6">
  <meta property="og:image" content="/static/fav/favicon.svg">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="baidu-site-verification" content="code-9faJGaYeqs">
  <meta http-equiv="Content-Language" content="EN" data-react-helmet="true">
  <meta name="ahrefs-site-verification" content="92f371d6cec294d8e7a2149c7f013151da0c8d080773239b03e98db796cd766a">
  <link rel="icon" href="/static/fav/rollercoin_favicon_48x48.png" sizes="48x48">
  <link rel="icon" href="/static/fav/rollercoin_favicon_96x96.png" sizes="96x96">
  <link rel="icon" href="/static/fav/rollercoin_favicon_144x144.png" sizes="144x144">
  <link rel="mask-icon" href="/static/fav/rollercoin_favicon_144x144.svg" color="#ffffff">
  <meta name="robots" content="noindex, follow" data-react-helmet="true">
  <link href="<?= base_url('assets/') ?>css/bootstrap_rlt.css" rel="stylesheet">  
  <link href="<?= base_url('assets/') ?>css/rlt.css" rel="stylesheet">  

  <style>
    .inventory-page-container p {
      margin: 0;
      padding: 0
    }

    .inventory-page-container .inventory-tab-panel .info-block-container {
      -webkit-box-pack: start;
      -ms-flex-pack: start;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      font-family: PixelSC, sans-serif;
      font-size: 20px;
      justify-content: flex-start;
      line-height: 1.14;
      margin: 16px 0 0;
      padding: 0 5px
    }

    .inventory-page-container .inventory-tab-panel .info-block-container .info-icon-block {
      padding-right: 12px
    }

    @media only screen and (min-width:992px) {
      .inventory-page-container .inventory-tab-panel .info-block-container {
        padding: 0
      }
    }

    .inventory-page-container .inventory-tab-panel .info-block-container .info-cyan {
      color: #03e1e4
    }

    .inventory-page-container .inventory-tab-panel .nav {
      -ms-overflow-style: none;
      border-bottom: 1px solid #2f3045;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
      margin-bottom: 17px;
      overflow-x: scroll;
      overflow-y: hidden;
      scrollbar-width: none
    }

    .inventory-page-container .inventory-tab-panel .nav::-webkit-scrollbar {
      background: transparent;
      display: none;
      width: 0
    }

    @media only screen and (min-width:992px) {
      .inventory-page-container .inventory-tab-panel .nav {
        overflow-x: hidden
      }
    }

    .inventory-page-container .inventory-tab-panel .nav.nav-tabs {
      border-bottom: 1px solid #2f3045
    }

    @media only screen and (min-width:992px) {
      .inventory-page-container .inventory-tab-panel .nav.nav-tabs {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between
      }
    }

    .inventory-page-container .inventory-tab-panel .nav.nav-tabs .nav-item {
      -ms-flex-negative: 0;
      -ms-flex-preferred-size: calc(44% - 8px);
      flex-basis: calc(44% - 8px);
      flex-shrink: 0
    }

    @media only screen and (min-width:992px) {
      .inventory-page-container .inventory-tab-panel .nav.nav-tabs .nav-item {
        -ms-flex-preferred-size: 32%;
        flex-basis: 32%
      }
    }

    .inventory-page-container .inventory-tab-panel .nav.nav-tabs .nav-item+.nav-item {
      margin-left: 8px
    }

    .inventory-page-container .inventory-tab-panel .nav.nav-tabs .nav-item .nav-link {
      background-color: rgba(47, 48, 69, .35);
      border: 0;
      cursor: pointer;
      font-size: 16px;
      padding: 12px 10px;
      text-align: center
    }

    @media only screen and (min-width:992px) {
      .inventory-page-container .inventory-tab-panel .nav.nav-tabs .nav-item .nav-link {
        font-size: 20px
      }
    }

    .inventory-page-container .inventory-tab-panel .nav.nav-tabs .nav-item .nav-link .tab-text .item-img {
      margin-right: 8px
    }

    .inventory-page-container .inventory-tab-panel .nav.nav-tabs .nav-item .nav-link .tab-text .items-count {
      color: #03e1e4;
      margin-left: 8px
    }

    .inventory-page-container .inventory-tab-panel .nav.nav-tabs .nav-item .nav-link.active {
      background-color: #2f3045;
      border-top: 2px solid #03e1e4;
      color: #fff
    }

    .inventory-page-container .inventory-tab-panel .inventory-filter {
      border-bottom: 1px solid #6a668a
    }

    .inventory-page-container .inventory-tab-panel .inventory-parts-container {
      padding-bottom: 24px
    }
  </style>
  <style>
    html {
      scroll-behavior: smooth
    }

    .storage-preloader {
      left: calc(50% - 63px);
      position: absolute;
      top: calc(50% - 63px)
    }

    .storage-preloader-layer {
      background-color: rgba(0, 0, 0, .7);
      bottom: 0;
      left: 0;
      position: fixed;
      right: 0;
      top: 0;
      z-index: 19
    }

    .storage-preloader-layer .loader-img {
      bottom: auto;
      display: block;
      left: 50%;
      position: absolute;
      top: calc(50% - 45px);
      -webkit-transform: translate(-50%);
      transform: translate(-50%);
      z-index: 20
    }

    .storage-container {
      padding-bottom: 60px
    }

    @media only screen and (min-width:992px) {
      .storage-container {
        padding-bottom: 120px
      }
    }

    .storage-container h2,
    .storage-container p {
      margin: 0;
      padding: 0
    }

    .storage-container .info-tooltip-icon-container {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex
    }

    .storage-container .info-tooltip-icon-container .info-icon-block {
      height: 24px;
      margin-right: 12px;
      width: 24px
    }

    @media only screen and (min-width:992px) {
      .storage-container .info-tooltip-icon-container {
        padding: 0
      }
    }

    .storage-container .storage-title {
      font-family: pixelSCBold, sans-serif;
      font-size: 28px;
      margin: 0;
      padding: 16px 0
    }

    .storage-container .nav-pills-container .link-pill-ico.product-pill {
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      border-radius: 4px;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      cursor: pointer;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      font-family: pixelSCBold, sans-serif;
      font-size: 24px;
      justify-content: space-between;
      margin-bottom: 16px;
      padding: 8px 16px;
      text-transform: capitalize
    }

    @media only screen and (min-width:992px) and (max-width:1200px) {
      .storage-container .nav-pills-container .link-pill-ico.product-pill {
        font-size: 20px
      }
    }

    .storage-container .nav-pills-container .link-pill-ico.product-pill {
      border: 1px solid #6a668a
    }

    .storage-container .nav-pills-container .link-pill-ico.product-pill:hover {
      border: 1px solid #03e1e4
    }

    .storage-container .nav-pills-container .link-pill-ico.product-pill.active {
      border: 2px solid #03e1e4;
      padding: 7px 15px
    }

    .storage-container .nav-pills-container .link-pill-ico.product-pill.active:hover {
      border: 2px solid #03e1e4
    }

    .storage-container .nav-pills-container .link-pill-ico .storage-nav-image {
      line-height: 1.8;
      padding-right: 12px
    }

    @media only screen and (min-width:992px) and (max-width:1200px) {
      .storage-container .nav-pills-container .link-pill-ico .storage-nav-image {
        line-height: 2.2
      }
    }

    .storage-container .craft-details-wrapper {
      padding: 12px 0 0
    }

    .storage-container .craft-details-wrapper .craft-recipe {
      -webkit-box-pack: start;
      -ms-flex-pack: start;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      background-color: #1f1f2d;
      border-radius: 4px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: flex-start;
      margin-bottom: 4px;
      padding: 4px 8px
    }

    .storage-container .craft-details-wrapper .craft-recipe .list-img {
      margin-right: 10px
    }

    .storage-container .craft-details-wrapper .craft-recipe .recipe-text {
      font-family: PixelSCBold, sans-serif;
      font-size: 16px
    }

    .storage-container .craft-details-wrapper .recipe-item {
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      align-items: center;
      background-color: #1f1f2d;
      border-radius: 4px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      font-size: 16px;
      justify-content: space-between;
      margin-bottom: 4px;
      padding: 3px 8px
    }

    .storage-container .craft-details-wrapper .recipe-item .rarity {
      margin-right: 6px
    }

    .storage-container .craft-details-wrapper .recipe-item .item {
      font-family: PixelSCBold, sans-serif
    }

    .storage-container .craft-details-wrapper .recipe-item .count {
      font-family: PixelSC, sans-serif
    }

    .storage-container .mobile-header {
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      font-family: PixelSCBold, sans-serif;
      font-size: 28px;
      justify-content: space-between;
      padding: 16px 0
    }

    .storage-container .mobile-header .back-link {
      color: #fff
    }

    .storage-container .mobile-header .icon {
      padding-right: 12px
    }

    .storage-container .mobile-header .page-name {
      color: #938c9e
    }

    .storage-container .bonus-percent {
      color: #03e1e4;
      font-family: PixelSCBold, sans-serif;
      font-size: 24px
    }
  </style>
  <style>
    .marketplace-buy-stats-block {
      margin-bottom: 16px
    }

    .marketplace-buy-stats-block .marketplace-buy-stats-title {
      color: #9797a2;
      font-family: PixelSCBold, sans-serif;
      font-size: 20px;
      margin-bottom: 12px;
      text-align: center
    }

    @media only screen and (min-width:992px) {
      .marketplace-buy-stats-block .marketplace-buy-stats-title {
        margin-bottom: 16px
      }
    }

    .marketplace-buy-stats-block .marketplace-buy-stats-wrapper {
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      background-color: #1f1f2d;
      border: 2px solid #6a668a;
      border-radius: 4px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: space-between;
      padding: 12px 16px
    }

    @media only screen and (min-width:992px) {
      .marketplace-buy-stats-block .marketplace-buy-stats-wrapper {
        background-color: transparent;
        border: none;
        border-radius: 0;
        padding: 0
      }
    }

    .marketplace-buy-stats-block .marketplace-buy-stats-wrapper .buy-stats-card {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-direction: column;
      flex-direction: column
    }

    @media only screen and (min-width:992px) {
      .marketplace-buy-stats-block .marketplace-buy-stats-wrapper .buy-stats-card {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        background-color: #1f1f2d;
        border: 2px solid #6a668a;
        border-radius: 4px;
        -ms-flex-direction: row;
        flex-direction: row;
        padding: 20px 8px 20px 24px
      }
    }

    .marketplace-buy-stats-block .marketplace-buy-stats-wrapper .buy-stats-card .buy-stats-card-icon {
      margin-bottom: 4px
    }

    @media only screen and (min-width:992px) {
      .marketplace-buy-stats-block .marketplace-buy-stats-wrapper .buy-stats-card .buy-stats-card-icon {
        margin-bottom: 0;
        margin-right: 16px
      }
    }

    .marketplace-buy-stats-block .marketplace-buy-stats-wrapper .buy-stats-card .buy-stats-card-text-wrapper {
      color: #fff;
      text-align: center
    }

    @media only screen and (min-width:992px) {
      .marketplace-buy-stats-block .marketplace-buy-stats-wrapper .buy-stats-card .buy-stats-card-text-wrapper {
        text-align: left
      }
    }

    .marketplace-buy-stats-block .marketplace-buy-stats-wrapper .buy-stats-card .buy-stats-card-text-wrapper .buy-stats-card-title {
      font-family: PixelSC, sans-serif;
      font-size: 16px;
      line-height: 1.2
    }

    @media only screen and (min-width:1200px) {
      .marketplace-buy-stats-block .marketplace-buy-stats-wrapper .buy-stats-card .buy-stats-card-text-wrapper .buy-stats-card-title {
        font-size: 24px
      }
    }

    .marketplace-buy-stats-block .marketplace-buy-stats-wrapper .buy-stats-card .buy-stats-card-text-wrapper .buy-stats-card-amount {
      font-family: PixelSCBold, sans-serif;
      font-size: 20px;
      line-height: 1.2
    }

    @media only screen and (min-width:1200px) {
      .marketplace-buy-stats-block .marketplace-buy-stats-wrapper .buy-stats-card .buy-stats-card-text-wrapper .buy-stats-card-amount {
        font-size: 26px
      }
    }

    @media only screen and (min-width:1296px) {
      .marketplace-buy-stats-block .marketplace-buy-stats-wrapper .buy-stats-card .buy-stats-card-text-wrapper .buy-stats-card-amount {
        font-size: 30px
      }
    }
  </style>
  <style>
    .custom-round-radio {
      cursor: pointer;
      display: inline-block;
      padding-left: 36px;
      position: relative;
      white-space: nowrap
    }

    .custom-round-radio .radio-label-title {
      color: #fff;
      font-family: PixelSC, sans-serif;
      font-size: 20px;
      line-height: 1.2
    }

    .custom-round-radio .radio-label-subtitle {
      color: #9797a2;
      font-family: PixelSC, sans-serif;
      font-size: 16px;
      margin-left: 8px
    }

    .custom-round-radio .custom-round-radio-button {
      cursor: pointer;
      height: 0;
      opacity: 0;
      position: absolute;
      width: 0
    }

    .custom-round-radio .custom-round-radio-button:checked~.radio-label-checkmark:after {
      height: 16px;
      -webkit-transition: width .2s cubic-bezier(.4, 2.2, .6, 1), height .2s cubic-bezier(.4, 2.2, .6, 1);
      transition: width .2s cubic-bezier(.4, 2.2, .6, 1), height .2s cubic-bezier(.4, 2.2, .6, 1);
      width: 16px
    }

    .custom-round-radio .radio-label-checkmark {
      background-color: #1f1f2d;
      border: 2px solid #6a668a;
      border-radius: 50%;
      -webkit-box-shadow: inset 3px 3px 0 0 #15151e;
      box-shadow: inset 3px 3px 0 0 #15151e;
      height: 28px;
      left: 0;
      position: absolute;
      top: 0;
      width: 28px
    }

    .custom-round-radio .radio-label-checkmark:after {
      background-color: #03e1e4;
      border-radius: 50%;
      bottom: 0;
      content: "";
      height: 0;
      left: 0;
      margin: auto;
      position: absolute;
      right: 0;
      top: 0;
      width: 0
    }
  </style>
  <style>
    .marketplace-types-filter {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      border: 1px solid #6a668a;
      border-radius: 4px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-direction: column;
      flex-direction: column;
      margin-bottom: 16px;
      padding: 16px
    }

    .marketplace-types-filter .marketplace-type-radio .radio-label-title {
      font-family: PixelSCBold, sans-serif
    }
  </style>
  <style>
    .roller-checkbox-wrapper {
      max-height: 28px
    }

    .roller-checkbox-wrapper .roller-checkbox-input {
      display: none;
      position: absolute
    }

    .roller-checkbox-wrapper .roller-checkbox-input+.checkbox-label {
      color: #fff;
      display: -webkit-inline-box;
      display: -ms-inline-flexbox;
      display: inline-flex;
      font-family: PixelSC, sans-serif;
      font-size: 20px;
      line-height: 1.2;
      text-transform: capitalize
    }

    .roller-checkbox-wrapper .roller-checkbox-input+.checkbox-label:hover {
      cursor: pointer
    }

    .roller-checkbox-wrapper .roller-checkbox-input+.checkbox-label:before {
      -ms-flex-negative: 0;
      -webkit-box-flex: 0;
      -ms-flex-positive: 0;
      background-color: #1f1f2d;
      background-image: url(https://rollercoin.com/static/images/check.2484c12bb2b673886546..svg);
      background-position: 50%;
      background-repeat: no-repeat;
      background-size: 0;
      border: 2px solid #6a668a;
      border-radius: 2px;
      -webkit-box-shadow: inset 3px 3px 0 0 #15151e;
      box-shadow: inset 3px 3px 0 0 #15151e;
      content: "";
      display: inline-block;
      flex-grow: 0;
      flex-shrink: 0;
      height: 28px;
      margin-right: 8px;
      -webkit-transition: background .2s cubic-bezier(.5, 2.4, .6, 1);
      transition: background .2s cubic-bezier(.5, 2.4, .6, 1);
      width: 28px
    }

    .roller-checkbox-wrapper .roller-checkbox-input:checked+.checkbox-label:before {
      background-size: 65%
    }
  </style>
  <style>
    .marketplace-filters-wrapper {
      border: 1px solid #6a668a;
      border-radius: 4px;
      margin-bottom: 16px;
      padding: 16px
    }

    .marketplace-filters-wrapper .marketplace-filter-wrapper:not(:last-child) {
      border-bottom: 1px solid #6a668a;
      margin-bottom: 12px;
      padding-bottom: 16px
    }

    .marketplace-filters-wrapper .marketplace-filter-wrapper .filter-title {
      font-family: PixelSC, sans-serif;
      font-size: 20px;
      line-height: 1.1;
      margin-bottom: 12px
    }

    .marketplace-filters-wrapper .marketplace-filter-wrapper .marketplace-filter-item:not(:last-child) {
      margin-bottom: 12px
    }

    .marketplace-filters-wrapper .marketplace-filter-wrapper .change-amount-inputs {
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: space-between
    }

    .marketplace-filters-wrapper .marketplace-filter-wrapper .change-amount-inputs .filters-input {
      background-color: #1f1f2d;
      border: 1px solid #6a668a;
      border-radius: 4px;
      color: #fff;
      font-family: PixelSC, sans-serif;
      font-size: 16px;
      line-height: 30px;
      margin-top: 3px;
      padding: 0 12px
    }

    .marketplace-filters-wrapper .marketplace-filter-wrapper .change-amount-inputs .filter-btn {
      margin-bottom: 4px;
      margin-left: 10px
    }

    .marketplace-filters-wrapper .marketplace-filter-wrapper .change-amount-inputs .filter-dash {
      font-family: PixelSC, sans-serif;
      font-size: 20px;
      line-height: 32px;
      margin-top: 3px;
      padding: 0 6px
    }

    .marketplace-filters-wrapper .marketplace-filter-wrapper .roller-slider-wrapper {
      margin-bottom: 14px;
      padding: 0 6px
    }

    .marketplace-filters-wrapper .marketplace-filter-wrapper .roller-slider-wrapper .roller-slider.rc-slider .rc-slider-rail {
      background-color: #6a668a
    }

    .marketplace-filters-wrapper .marketplace-filter-wrapper .roller-slider-wrapper .roller-slider.rc-slider .rc-slider-dot {
      background-color: #2f3045;
      border: 2px solid #6a668a;
      bottom: -4px;
      height: 12px;
      width: 12px
    }

    .marketplace-filters-wrapper .marketplace-filter-wrapper .roller-slider-wrapper .roller-slider.rc-slider .rc-slider-handle {
      background-color: #6a668a;
      border: 2px solid #03e1e4
    }

    .marketplace-filters-wrapper .marketplace-filter-wrapper .roller-slider-wrapper .roller-slider.rc-slider .rc-slider-track {
      background-color: #03e1e4
    }
  </style>
  <style>
    .marketplace-buy-item-card {
      -webkit-box-pack: start;
      -ms-flex-pack: start;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      border: 1px solid #6a668a;
      border-radius: 4px;
      cursor: pointer;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: flex-start;
      margin-bottom: 16px;
      padding: 8px 12px 8px 8px
    }

    @media only screen and (min-width:992px) {
      .marketplace-buy-item-card {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 8px 16px 8px 8px
      }
    }

    .marketplace-buy-item-card:hover {
      text-decoration: none
    }

    .marketplace-buy-item-card .item-info-wrapper {
      -webkit-box-pack: left;
      -ms-flex-pack: left;
      justify-content: left
    }

    .marketplace-buy-item-card .item-info-wrapper,
    .marketplace-buy-item-card .item-info-wrapper .item-img-wrapper {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex
    }

    .marketplace-buy-item-card .item-info-wrapper .item-img-wrapper {
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      background-color: #1f1f2d;
      border-radius: 4px;
      justify-content: center;
      margin-right: 16px;
      min-height: 100px;
      min-width: 126px;
      overflow: hidden;
      position: relative
    }

    .marketplace-buy-item-card .item-info-wrapper .item-img-wrapper .rating-star-wrapper .star-wrapper {
      line-height: 0
    }

    .marketplace-buy-item-card .item-info-wrapper .item-img-wrapper .rating-star-wrapper .star-wrapper:not(:last-child) {
      margin-right: 3px
    }

    .marketplace-buy-item-card .item-info-wrapper .item-img-wrapper .rating-star-wrapper .star-wrapper .star {
      max-height: 20px;
      max-width: 20px
    }

    .marketplace-buy-item-card .item-info-wrapper .item-img-wrapper .collection-product-level-img-size-2 {
      left: 2px;
      position: absolute;
      top: 25px
    }

    .marketplace-buy-item-card .item-info-wrapper .item-img-wrapper .collection-product-level-img-size-1 {
      left: 25px;
      position: absolute;
      top: 26px
    }

    .marketplace-buy-item-card .item-info-wrapper .item-text-wrapper {
      line-height: 1;
      text-align: left
    }

    .marketplace-buy-item-card .item-info-wrapper .item-text-wrapper .item-title {
      color: #fff;
      font-family: PixelSCBold, sans-serif;
      font-size: 20px;
      margin-bottom: 6px
    }

    .marketplace-buy-item-card .item-info-wrapper .item-text-wrapper .item-quantity {
      color: #fff;
      font-family: PixelSC, sans-serif;
      font-size: 20px;
      margin-bottom: 6px;
      text-transform: capitalize
    }

    @media only screen and (min-width:992px) {
      .marketplace-buy-item-card .item-info-wrapper .item-text-wrapper .item-quantity {
        margin-bottom: 0
      }
    }

    .marketplace-buy-item-card .item-info-wrapper .item-text-wrapper .item-quantity .item-quantity-amount {
      color: #5ce319;
      font-family: PixelSCBold, sans-serif;
      font-size: 20px
    }

    .marketplace-buy-item-card .item-price-wrapper {
      line-height: 1.2;
      text-align: right
    }

    .marketplace-buy-item-card .item-price-label {
      color: #fff;
      font-family: PixelSC, sans-serif;
      font-size: 20px;
      text-transform: capitalize
    }

    @media only screen and (min-width:992px) {
      .marketplace-buy-item-card .item-price-label {
        font-size: 16px
      }
    }

    .marketplace-buy-item-card .item-price {
      color: #03e1e4;
      font-family: PixelSCBold, sans-serif;
      font-size: 20px
    }
  </style>
  <style>
    html {
      scroll-behavior: smooth
    }

    .marketplace-pagination {
      margin-top: 24px
    }

    .marketplace-pagination .load-more {
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: center;
      margin-bottom: 30px
    }

    .marketplace-pagination .load-more .load-more-btn {
      min-width: 280px
    }

    .marketplace-pagination .marketplace-pagination-list-wrapper .marketplace-pagination-list {
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: center;
      list-style: none;
      padding: 0
    }

    .marketplace-pagination .marketplace-pagination-list-wrapper .marketplace-pagination-list .marketplace-pagination-item {
      font-family: pixelSCbold, sans-serif;
      font-size: 16px;
      margin: 0 6px;
      min-height: 32px;
      min-width: 32px;
      text-align: center
    }

    .marketplace-pagination .marketplace-pagination-list-wrapper .marketplace-pagination-list .marketplace-pagination-item .marketplace-pagination-btn {
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      background-color: #181928;
      border: 1px solid #6a668a;
      border-radius: 4px;
      color: #fff;
      cursor: pointer;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: center;
      min-height: 100%;
      min-width: 100%
    }

    .marketplace-pagination .marketplace-pagination-list-wrapper .marketplace-pagination-list .marketplace-pagination-item .marketplace-pagination-btn:hover:not(:disabled) {
      color: #03e1e4
    }

    .marketplace-pagination .marketplace-pagination-list-wrapper .marketplace-pagination-list .marketplace-pagination-item .marketplace-pagination-btn:disabled {
      background-color: #2f3045;
      cursor: default
    }

    .marketplace-pagination .marketplace-pagination-list-wrapper .marketplace-pagination-list .marketplace-pagination-item .marketplace-pagination-btn:active {
      border: 1px solid #03e1e4;
      outline: none
    }

    .marketplace-pagination .marketplace-pagination-list-wrapper .marketplace-pagination-list .marketplace-pagination-item .marketplace-pagination-divider {
      font-size: 24px;
      line-height: 32px
    }
  </style>
  <style>
    .search-and-sort-panel {
      border-bottom: 1px solid #6a668a;
      margin-bottom: 16px;
      padding-bottom: 16px
    }

    @media only screen and (min-width:992px) {
      .search-and-sort-panel {
        border-bottom: none;
        padding-bottom: 0
      }

      .search-and-sort-panel .search-and-sort-wrapper {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between
      }
    }

    .search-and-sort-panel .search-and-sort-wrapper .search-wrapper {
      margin-bottom: 16px
    }

    @media only screen and (min-width:992px) {
      .search-and-sort-panel .search-and-sort-wrapper .search-wrapper {
        margin-bottom: 0;
        margin-right: 16px;
        max-width: 210px
      }
    }

    .search-and-sort-panel .search-and-sort-wrapper .search-wrapper .search-input {
      background-color: #1f1f2d;
      border: 1px solid #6a668a;
      border-radius: 4px;
      -webkit-box-shadow: none;
      box-shadow: none;
      color: #fff;
      font-family: PixelSC, serif;
      font-size: 16px;
      padding: 8px 12px
    }

    @media only screen and (min-width:992px) {
      .search-and-sort-panel .search-and-sort-wrapper .search-wrapper .search-input {
        padding: 4px 12px
      }
    }

    .search-and-sort-panel .search-and-sort-wrapper .search-wrapper .search-input::-webkit-input-placeholder {
      color: #fff
    }

    .search-and-sort-panel .search-and-sort-wrapper .search-wrapper .search-input::-moz-placeholder {
      color: #fff
    }

    .search-and-sort-panel .search-and-sort-wrapper .search-wrapper .search-input:-ms-input-placeholder {
      color: #fff
    }

    .search-and-sort-panel .search-and-sort-wrapper .search-wrapper .search-input::-ms-input-placeholder {
      color: #fff
    }

    .search-and-sort-panel .search-and-sort-wrapper .search-wrapper .search-input::placeholder {
      color: #fff
    }

    .search-and-sort-panel .search-and-sort-wrapper .search-wrapper .search-input:focus {
      background-color: #1f1f2d;
      border: 1px solid #03e1e4;
      border-radius: 4px;
      font-size: 16px
    }

    .search-and-sort-panel .search-and-sort-wrapper .search-wrapper .search-input:focus::-webkit-input-placeholder {
      color: transparent
    }

    .search-and-sort-panel .search-and-sort-wrapper .search-wrapper .search-input:focus::-moz-placeholder {
      color: transparent
    }

    .search-and-sort-panel .search-and-sort-wrapper .search-wrapper .search-input:focus:-ms-input-placeholder {
      color: transparent
    }

    .search-and-sort-panel .search-and-sort-wrapper .search-wrapper .search-input:focus::-ms-input-placeholder {
      color: transparent
    }

    .search-and-sort-panel .search-and-sort-wrapper .search-wrapper .search-input:focus::placeholder {
      color: transparent
    }

    .search-and-sort-panel .marketplace-select-item {
      -webkit-box-flex: 6;
      -ms-flex-positive: 6;
      flex-grow: 6
    }

    @media only screen and (min-width:992px) {
      .search-and-sort-panel .marketplace-select-item {
        min-width: 200px
      }
    }

    .search-and-sort-panel .marketplace-select-item:not(:last-child) {
      margin-right: 16px
    }

    .search-and-sort-panel .marketplace-select-item.short {
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1
    }

    @media only screen and (min-width:992px) {
      .search-and-sort-panel .marketplace-select-item.short {
        min-width: 70px
      }
    }

    .search-and-sort-panel .marketplace-select-filter__control {
      background-color: #1f1f2d;
      border: 1px solid #6a668a;
      border-radius: 4px;
      -webkit-box-shadow: none;
      box-shadow: none;
      cursor: pointer;
      min-height: 0;
      min-height: auto;
      padding: 8px 12px
    }

    @media only screen and (min-width:992px) {
      .search-and-sort-panel .marketplace-select-filter__control {
        padding: 4px 12px
      }
    }

    .search-and-sort-panel .marketplace-select-filter__control:hover .select-filter__indicator {
      color: #03e1e4
    }

    .search-and-sort-panel .marketplace-select-filter__value-container {
      padding: 0
    }

    .search-and-sort-panel .marketplace-select-filter__single-value {
      color: #fff;
      font-family: PixelSC, serif;
      font-size: 16px
    }

    .search-and-sort-panel .marketplace-select-filter__menu {
      background-color: #1f1f2d;
      color: #fff;
      cursor: pointer;
      font-family: PixelSC, serif;
      font-size: 16px;
      margin: 0;
      padding: 0
    }

    .search-and-sort-panel .marketplace-select-filter__menu:focus {
      outline: none
    }

    .search-and-sort-panel .marketplace-select-filter__menu-list {
      border: 1px solid #03e1e4;
      border-radius: 4px;
      padding: 0
    }

    .search-and-sort-panel .marketplace-select-filter__option {
      cursor: pointer;
      padding: 8px 12px
    }

    @media only screen and (min-width:992px) {
      .search-and-sort-panel .marketplace-select-filter__option {
        padding: 4px 12px
      }
    }

    .search-and-sort-panel .marketplace-select-filter__option--is-selected {
      background-color: #1f1f2d;
      color: #03e1e4
    }

    .search-and-sort-panel .marketplace-select-filter__option--is-focused {
      background-color: #6a668a
    }

    .search-and-sort-panel .marketplace-select-filter__indicator {
      color: #fff;
      padding: 0
    }

    .search-and-sort-panel .marketplace-select-filter__indicator svg {
      max-width: 20px
    }

    .search-and-sort-panel .marketplace-select-filter__indicator-separator {
      display: none
    }
  </style>
  <style>
    .marketplace-buy-container {
      background-color: #2f3045;
      border: 1px solid #6a668a;
      border-radius: 4px;
      padding: 12px 16px 24px
    }

    @media only screen and (min-width:992px) {
      .marketplace-buy-container {
        padding: 32px 30px
      }
    }

    .marketplace-buy-container .marketplace-preloader-layer {
      background-color: rgba(0, 0, 0, .7);
      bottom: 0;
      left: 0;
      position: fixed;
      right: 0;
      top: 0;
      z-index: 19
    }

    .marketplace-buy-container .marketplace-preloader-layer .loader-img {
      bottom: auto;
      display: block;
      left: 50%;
      position: absolute;
      top: calc(50% - 45px);
      -webkit-transform: translate(-50%);
      transform: translate(-50%);
      z-index: 20
    }
  </style>
  <style>
    .rc-slider {
      border-radius: 6px;
      height: 14px;
      padding: 5px 0;
      position: relative;
      -ms-touch-action: none;
      touch-action: none;
      width: 100%
    }

    .rc-slider,
    .rc-slider * {
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
      -webkit-box-sizing: border-box;
      box-sizing: border-box
    }

    .rc-slider-rail {
      background-color: #e9e9e9;
      width: 100%
    }

    .rc-slider-rail,
    .rc-slider-track {
      border-radius: 6px;
      height: 4px;
      position: absolute
    }

    .rc-slider-track {
      background-color: #abe2fb
    }

    .rc-slider-handle {
      background-color: #fff;
      border: 2px solid #96dbfa;
      border-radius: 50%;
      cursor: pointer;
      cursor: -webkit-grab;
      cursor: grab;
      height: 14px;
      margin-top: -5px;
      opacity: .8;
      position: absolute;
      -ms-touch-action: pan-x;
      touch-action: pan-x;
      width: 14px
    }

    .rc-slider-handle-dragging.rc-slider-handle-dragging.rc-slider-handle-dragging {
      border-color: #57c5f7;
      -webkit-box-shadow: 0 0 0 5px #96dbfa;
      box-shadow: 0 0 0 5px #96dbfa
    }

    .rc-slider-handle:focus {
      -webkit-box-shadow: none;
      box-shadow: none;
      outline: none
    }

    .rc-slider-handle.focus-visible {
      border-color: #2db7f5;
      -webkit-box-shadow: 0 0 0 3px #96dbfa;
      box-shadow: 0 0 0 3px #96dbfa
    }

    .rc-slider-handle:focus-visible {
      border-color: #2db7f5;
      -webkit-box-shadow: 0 0 0 3px #96dbfa;
      box-shadow: 0 0 0 3px #96dbfa
    }

    .rc-slider-handle-click-focused:focus {
      border-color: #96dbfa;
      -webkit-box-shadow: none;
      -webkit-box-shadow: initial;
      box-shadow: none
    }

    .rc-slider-handle:hover {
      border-color: #57c5f7
    }

    .rc-slider-handle:active {
      border-color: #57c5f7;
      -webkit-box-shadow: 0 0 5px #57c5f7;
      box-shadow: 0 0 5px #57c5f7;
      cursor: -webkit-grabbing;
      cursor: grabbing
    }

    .rc-slider-mark {
      font-size: 12px;
      left: 0;
      position: absolute;
      top: 18px;
      width: 100%
    }

    .rc-slider-mark-text {
      color: #999;
      cursor: pointer;
      display: inline-block;
      position: absolute;
      text-align: center;
      vertical-align: middle
    }

    .rc-slider-mark-text-active {
      color: #666
    }

    .rc-slider-step {
      background: transparent;
      height: 4px;
      pointer-events: none;
      position: absolute;
      width: 100%
    }

    .rc-slider-dot {
      background-color: #fff;
      border: 2px solid #e9e9e9;
      border-radius: 50%;
      bottom: -2px;
      cursor: pointer;
      height: 8px;
      position: absolute;
      vertical-align: middle;
      width: 8px
    }

    .rc-slider-dot-active {
      border-color: #96dbfa
    }

    .rc-slider-dot-reverse {
      margin-right: -4px
    }

    .rc-slider-disabled {
      background-color: #e9e9e9
    }

    .rc-slider-disabled .rc-slider-track {
      background-color: #ccc
    }

    .rc-slider-disabled .rc-slider-dot,
    .rc-slider-disabled .rc-slider-handle {
      background-color: #fff;
      border-color: #ccc;
      -webkit-box-shadow: none;
      box-shadow: none;
      cursor: not-allowed
    }

    .rc-slider-disabled .rc-slider-dot,
    .rc-slider-disabled .rc-slider-mark-text {
      cursor: not-allowed !important
    }

    .rc-slider-vertical {
      height: 100%;
      padding: 0 5px;
      width: 14px
    }

    .rc-slider-vertical .rc-slider-rail {
      height: 100%;
      width: 4px
    }

    .rc-slider-vertical .rc-slider-track {
      bottom: 0;
      left: 5px;
      width: 4px
    }

    .rc-slider-vertical .rc-slider-handle {
      margin-left: -5px;
      margin-top: 0;
      -ms-touch-action: pan-y;
      touch-action: pan-y
    }

    .rc-slider-vertical .rc-slider-mark {
      height: 100%;
      left: 18px;
      top: 0
    }

    .rc-slider-vertical .rc-slider-step {
      height: 100%;
      width: 4px
    }

    .rc-slider-vertical .rc-slider-dot {
      margin-left: -2px
    }

    .rc-slider-tooltip-zoom-down-appear,
    .rc-slider-tooltip-zoom-down-enter {
      -webkit-animation-duration: .3s;
      animation-duration: .3s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
      -webkit-animation-play-state: paused;
      animation-play-state: paused;
      display: block !important
    }

    .rc-slider-tooltip-zoom-down-leave {
      -webkit-animation-duration: .3s;
      animation-duration: .3s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
      -webkit-animation-play-state: paused;
      animation-play-state: paused;
      display: block !important
    }

    .rc-slider-tooltip-zoom-down-appear.rc-slider-tooltip-zoom-down-appear-active,
    .rc-slider-tooltip-zoom-down-enter.rc-slider-tooltip-zoom-down-enter-active {
      -webkit-animation-name: rcSliderTooltipZoomDownIn;
      animation-name: rcSliderTooltipZoomDownIn;
      -webkit-animation-play-state: running;
      animation-play-state: running
    }

    .rc-slider-tooltip-zoom-down-leave.rc-slider-tooltip-zoom-down-leave-active {
      -webkit-animation-name: rcSliderTooltipZoomDownOut;
      animation-name: rcSliderTooltipZoomDownOut;
      -webkit-animation-play-state: running;
      animation-play-state: running
    }

    .rc-slider-tooltip-zoom-down-appear,
    .rc-slider-tooltip-zoom-down-enter {
      -webkit-animation-timing-function: cubic-bezier(.23, 1, .32, 1);
      animation-timing-function: cubic-bezier(.23, 1, .32, 1);
      -webkit-transform: scale(0);
      transform: scale(0)
    }

    .rc-slider-tooltip-zoom-down-leave {
      -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
      animation-timing-function: cubic-bezier(.755, .05, .855, .06)
    }

    @-webkit-keyframes rcSliderTooltipZoomDownIn {
      0% {
        opacity: 0;
        -webkit-transform: scale(0);
        transform: scale(0);
        -webkit-transform-origin: 50% 100%;
        transform-origin: 50% 100%
      }

      to {
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transform-origin: 50% 100%;
        transform-origin: 50% 100%
      }
    }

    @keyframes rcSliderTooltipZoomDownIn {
      0% {
        opacity: 0;
        -webkit-transform: scale(0);
        transform: scale(0);
        -webkit-transform-origin: 50% 100%;
        transform-origin: 50% 100%
      }

      to {
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transform-origin: 50% 100%;
        transform-origin: 50% 100%
      }
    }

    @-webkit-keyframes rcSliderTooltipZoomDownOut {
      0% {
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transform-origin: 50% 100%;
        transform-origin: 50% 100%
      }

      to {
        opacity: 0;
        -webkit-transform: scale(0);
        transform: scale(0);
        -webkit-transform-origin: 50% 100%;
        transform-origin: 50% 100%
      }
    }

    @keyframes rcSliderTooltipZoomDownOut {
      0% {
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transform-origin: 50% 100%;
        transform-origin: 50% 100%
      }

      to {
        opacity: 0;
        -webkit-transform: scale(0);
        transform: scale(0);
        -webkit-transform-origin: 50% 100%;
        transform-origin: 50% 100%
      }
    }

    .rc-slider-tooltip {
      left: -9999px;
      position: absolute;
      top: -9999px;
      visibility: visible
    }

    .rc-slider-tooltip,
    .rc-slider-tooltip * {
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
      -webkit-box-sizing: border-box;
      box-sizing: border-box
    }

    .rc-slider-tooltip-hidden {
      display: none
    }

    .rc-slider-tooltip-placement-top {
      padding: 4px 0 8px
    }

    .rc-slider-tooltip-inner {
      background-color: #6c6c6c;
      border-radius: 6px;
      -webkit-box-shadow: 0 0 4px #d9d9d9;
      box-shadow: 0 0 4px #d9d9d9;
      color: #fff;
      font-size: 12px;
      height: 24px;
      line-height: 1;
      min-width: 24px;
      padding: 6px 2px;
      text-align: center;
      text-decoration: none
    }

    .rc-slider-tooltip-arrow {
      border-color: transparent;
      border-style: solid;
      height: 0;
      position: absolute;
      width: 0
    }

    .rc-slider-tooltip-placement-top .rc-slider-tooltip-arrow {
      border-top-color: #6c6c6c;
      border-width: 4px 4px 0;
      bottom: 4px;
      left: 50%;
      margin-left: -4px
    }
  </style>
  <style>
    .miners-racks-card-container {
      padding-top: 16px
    }

    .miners-racks-card-container.active .card-wrapper {
      border-color: #03e1e4
    }

    .miners-racks-card-container .card-wrapper {
      background-color: #2f3045;
      border: 1px solid #6a668a;
      border-bottom: none;
      border-radius: 4px 4px 0 0;
      -webkit-box-shadow: 0 6px 12px -1px #1f1f2d;
      box-shadow: 0 6px 12px -1px #1f1f2d;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      padding: 12px
    }

    .miners-racks-card-container .card-wrapper .card-image-block {
      -webkit-box-flex: 1;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      background-color: #1f1f2d;
      border-radius: 4px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex: 1;
      flex: 1;
      justify-content: center;
      min-height: 130px;
      overflow: hidden;
      position: relative
    }

    .miners-racks-card-container .card-wrapper .card-image-block .card-image-wrapper {
      position: relative
    }

    .miners-racks-card-container .card-wrapper .card-image-block .card-image-wrapper .collection-product-level-img-size-2 {
      left: 2px;
      position: absolute;
      top: 15px
    }

    .miners-racks-card-container .card-wrapper .card-image-block .card-image-wrapper .collection-product-level-img-size-1 {
      left: 21px;
      position: absolute;
      top: 18px
    }

    .miners-racks-card-container .card-wrapper .card-image-block .rating-star-wrapper {
      left: 3px;
      position: absolute;
      top: 17px
    }

    .miners-racks-card-container .card-wrapper .card-image-block .rating-star-wrapper .star-wrapper {
      max-height: 20px;
      max-width: 20px
    }

    .miners-racks-card-container .card-wrapper .card-image-block .rating-star-wrapper.rating-img-size-1 {
      left: 25px;
      top: 20px
    }

    .miners-racks-card-container .card-wrapper .card-info-block {
      -webkit-box-flex: 1;
      -ms-flex: 1;
      flex: 1;
      font-family: PixelSC, sans-serif;
      font-size: 16px;
      line-height: 1.14;
      padding-left: 10px
    }

    .miners-racks-card-container .card-wrapper .card-info-block .item-name {
      font-family: PixelSCBold, sans-serif;
      font-size: 18px;
      line-height: 1;
      padding-bottom: 4px
    }

    @media only screen and (min-width:992px) {
      .miners-racks-card-container .card-wrapper .card-info-block .item-name {
        font-size: 16px
      }
    }

    .miners-racks-card-container .card-wrapper .card-info-block .item-info-wrapper {
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      border-top: 1px solid #6a668a;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: space-between;
      padding: 2px 0
    }

    .miners-racks-card-container .card-wrapper .card-info-block .item-info-wrapper .bonus-power-value {
      color: #03e1e4;
      font-family: PixelSCBold, sans-serif
    }

    .miners-racks-card-container .card-wrapper .card-info-block .item-info-wrapper .bonus-power-value:before {
      content: url(https://rollercoin.com/static/images/arrow-up.f29f4b20f6a585e43377..svg);
      padding-right: 4px;
      vertical-align: middle
    }

    .miners-racks-card-container .card-wrapper .card-info-block .item-info-wrapper .bonus-value {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      color: #03e1e4;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      font-family: PixelSCBold, sans-serif
    }

    .miners-racks-card-container .card-wrapper .card-info-block .item-info-wrapper .bonus-value .power-icon {
      margin-right: 4px
    }

    .miners-racks-card-container .card-wrapper .card-info-block .item-info-wrapper .bonus-value .power-icon,
    .miners-racks-card-container .card-wrapper .card-info-block .item-info-wrapper .quantity-title {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex
    }

    .miners-racks-card-container .card-wrapper .card-info-block .item-info-wrapper .quantity-title:before {
      background-image: url(https://rollercoin.com/static/images/box-cyan.5f0139907a5b87847c68..svg);
      background-size: 12px 12px;
      content: " ";
      display: block;
      height: 12px;
      margin-right: 8px;
      width: 12px
    }

    .miners-racks-card-container .card-wrapper .card-info-block .item-info-wrapper .quantity-title-rack {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex
    }

    .miners-racks-card-container .card-wrapper .card-info-block .item-info-wrapper .quantity-value {
      color: #5ce319;
      font-family: PixelSCBold, sans-serif
    }

    .miners-racks-card-container .inventory-description-wrapper {
      background-color: #2f3045;
      border: 1px solid #6a668a;
      border-radius: 0 0 4px 4px;
      border-top: none;
      cursor: pointer;
      padding: 0 16px;
      position: relative
    }

    .miners-racks-card-container .inventory-description-wrapper.opened {
      border: 1px solid #03e1e4;
      border-radius: 0 0 4px 4px;
      border-top: none
    }

    @media only screen and (min-width:992px) {
      .miners-racks-card-container .inventory-description-wrapper.opened {
        padding-bottom: 50px
      }
    }

    .miners-racks-card-container .inventory-description-wrapper .inventory-description-switcher {
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      border-top: 1px solid #6a668a;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: center;
      padding: 13px 0
    }

    .miners-racks-card-container .inventory-description-wrapper .inventory-description-switcher .image {
      margin: 0 0 3px 10px
    }

    .miners-racks-card-container .inventory-description-wrapper .inventory-description-block {
      background-color: #2f3045;
      padding: 0;
      z-index: 1
    }

    @media only screen and (min-width:992px) {
      .miners-racks-card-container .inventory-description-wrapper .inventory-description-block {
        border: 1px solid #03e1e4;
        border-radius: 0 0 4px 4px;
        border-top: none;
        left: -1px;
        padding: 0 16px;
        position: absolute;
        right: -1px;
        top: 0
      }
    }

    .miners-racks-card-container .inventory-description-wrapper .inventory-description-block .description-wrapper {
      padding-bottom: 12px
    }

    .miners-racks-card-container .inventory-description-wrapper .inventory-description-block .description-wrapper .description-text {
      font-family: PixelSC, sans-serif;
      font-size: 16px;
      line-height: 1.14
    }

    .miners-racks-card-container .inventory-description-wrapper .inventory-description-block .description-wrapper .how-to-get-text {
      color: #03e1e4;
      font-family: PixelSC, sans-serif;
      font-size: 16px;
      line-height: 1.14;
      padding-top: 12px
    }
  </style>
  <style>
    .miners-racks-card-container.mutation_component .card-info-block {
      font-size: 20px
    }

    .miners-racks-card-container.mutation_component .card-info-block .item-name {
      font-size: 20px;
      padding-bottom: 10px
    }

    .miners-racks-card-container.mutation_component .card-image-block {
      -webkit-box-flex: 0;
      -ms-flex: none;
      flex: none;
      min-height: 96px;
      min-width: 96px
    }

    .miners-racks-card-container.mutation_component .card-image-block .card-image-wrapper {
      position: relative
    }

    .miners-racks-card-container.mutation_component .card-image-block .card-image-wrapper .collection-product-level-img-size-2 {
      left: 2px;
      position: absolute;
      top: 25px;
      z-index: 1
    }

    .miners-racks-card-container.mutation_component .card-image-block .card-image-wrapper .collection-product-level-img-size-1 {
      left: 25px;
      position: absolute;
      top: 26px;
      z-index: 1
    }

    .miners-racks-card-container .card-footer {
      background-color: #2f3045;
      border: 1px solid #6a668a;
      border-radius: 0 0 4px 4px;
      border-top: none;
      cursor: pointer;
      padding: 0 12px;
      position: relative
    }

    .miners-racks-card-container .card-footer .sell-button {
      margin-bottom: 20px
    }
  </style>
  <style>
    .marketplace-sell-container .marketplace-preloader-layer {
      background-color: rgba(0, 0, 0, .7);
      bottom: 0;
      left: 0;
      position: fixed;
      right: 0;
      top: 0;
      z-index: 19
    }

    .marketplace-sell-container .marketplace-preloader-layer .loader-img {
      bottom: auto;
      display: block;
      left: 50%;
      position: absolute;
      top: calc(50% - 45px);
      -webkit-transform: translate(-50%);
      transform: translate(-50%);
      z-index: 20
    }

    .marketplace-sell-container .marketplace-sell-main-block {
      padding-left: 10px;
      padding-right: 10px
    }

    @media only screen and (min-width:576px) {
      .marketplace-sell-container .marketplace-sell-main-block {
        padding-left: 0;
        padding-right: 0
      }
    }
  </style>
  <style>
    .item-type-tabs.tabs-container .nav-link {
      border: 0
    }
  </style>
  <style>
    .marketplace-orders-container .marketplace-preloader-layer {
      background-color: rgba(0, 0, 0, .7);
      bottom: 0;
      left: 0;
      position: fixed;
      right: 0;
      top: 0;
      z-index: 19
    }

    .marketplace-orders-container .marketplace-preloader-layer .loader-img {
      bottom: auto;
      display: block;
      left: 50%;
      position: absolute;
      top: calc(50% - 45px);
      -webkit-transform: translate(-50%);
      transform: translate(-50%);
      z-index: 20
    }

    .marketplace-orders-container .my-orders-tabs.tabs-container .nav-tabs {
      margin-bottom: 0;
      overflow-y: hidden
    }

    @media (min-width:992px) {
      .marketplace-orders-container .my-orders-tabs.tabs-container .nav-tabs {
        overflow-x: visible;
        overflow-y: visible
      }
    }

    .marketplace-orders-container .my-orders-tabs.tabs-container .nav-link {
      background: #232436;
      border-left: 1px solid #6a668a;
      border-right: 1px solid #6a668a;
      border-top: 1px solid #6a668a
    }

    .marketplace-orders-container .my-orders-tabs.tabs-container .nav-link.active {
      background: #2f3044;
      border-left: 1px solid #6a668a;
      border-right: 1px solid #6a668a;
      border-top: 1px solid #6a668a;
      position: relative;
      z-index: 2
    }

    .marketplace-orders-container .my-orders-tabs.tabs-container .nav-link.active:after {
      background: #2f3044;
      bottom: -1px;
      content: "";
      height: 1px;
      left: 0;
      position: absolute;
      width: 100%;
      z-index: 2
    }

    .marketplace-orders-container .my-orders-tabs.tabs-container .tab-content {
      background: #2f3044;
      border: 1px solid #6a668a;
      padding: 25px 30px;
      position: relative;
      z-index: 1
    }
  </style>
  <style>
    .marketplace-orders-container .miners-racks-card-container {
      font-family: PixelSC, sans-serif
    }

    .marketplace-orders-container .miners-racks-card-container .card-wrapper {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      border: 1px solid #6a668a;
      border-radius: 4px;
      -ms-flex-flow: row wrap;
      flex-flow: row wrap
    }

    .marketplace-orders-container .miners-racks-card-container .card-wrapper .price {
      color: #03e1e4;
      font-family: PixelSCBold, sans-serif;
      font-size: 20px;
      margin-left: 5px;
      white-space: nowrap
    }

    .marketplace-orders-container .miners-racks-card-container .card-image-block {
      -webkit-box-flex: 0;
      -ms-flex: none;
      flex: none;
      width: 45%
    }

    @media (min-width:992px) {
      .marketplace-orders-container .miners-racks-card-container .card-image-block {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1
      }
    }

    .marketplace-orders-container .miners-racks-card-container .card-info-block {
      -webkit-box-flex: 0;
      -ms-flex: none;
      flex: none;
      width: 55%
    }

    @media (min-width:992px) {
      .marketplace-orders-container .miners-racks-card-container .card-info-block {
        -webkit-box-flex: 2;
        -ms-flex: 2;
        flex: 2;
        font-size: 20px;
        width: auto
      }
    }

    .marketplace-orders-container .miners-racks-card-container .orders-info-wrapper {
      list-style-type: none;
      margin: 0;
      padding: 0
    }

    .marketplace-orders-container .miners-racks-card-container .orders-info-wrapper .details {
      padding: 5px 0
    }

    .marketplace-orders-container .miners-racks-card-container .orders-info-wrapper .details .details-name {
      color: #9797a2
    }

    .marketplace-orders-container .miners-racks-card-container .orders-info-wrapper .details .details-value.quantity {
      color: #5ce319;
      font-family: PixelSCBold, sans-serif
    }

    .marketplace-orders-container .miners-racks-card-container .total-block {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: reverse;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-direction: row-reverse;
      flex-direction: row-reverse;
      justify-content: space-between;
      margin-top: 15px;
      width: 100%
    }

    @media (min-width:992px) {
      .marketplace-orders-container .miners-racks-card-container .total-block {
        -webkit-box-flex: 1;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex: 1;
        flex: 1;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-top: 0
      }
    }

    .marketplace-orders-container .miners-racks-card-container .total-block .total-price {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      border: 1px solid #6a668a;
      border-radius: 4px;
      color: #9797a2;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      font-size: 16px;
      margin-left: 15px;
      padding: 7px 8px;
      width: 55%
    }

    @media (min-width:992px) {
      .marketplace-orders-container .miners-racks-card-container .total-block .total-price {
        border: none;
        padding: 0;
        width: auto
      }
    }

    .marketplace-orders-container .miners-racks-card-container .total-block .button-block {
      -ms-flex-pack: distribute;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: space-around;
      width: 45%
    }

    @media (min-width:992px) {
      .marketplace-orders-container .miners-racks-card-container .total-block .button-block {
        -webkit-box-pack: right;
        -ms-flex-pack: right;
        justify-content: right;
        margin-left: auto;
        width: auto
      }
    }

    .marketplace-orders-container .miners-racks-card-container .total-block .button-block .orders-button {
      font-size: 16px;
      padding: 8px 15px
    }

    @media (min-width:992px) {
      .marketplace-orders-container .miners-racks-card-container .total-block .button-block .orders-button {
        padding: 6px 12px
      }
    }

    .marketplace-orders-container .miners-racks-card-container .total-block .button-block .delete-button {
      margin-left: 10px;
      padding: 6px 10px
    }

    .marketplace-orders-container .miners-racks-card-container .total-block .button-block .delete-button img {
      width: 16px
    }

    .marketplace-orders-container .miners-racks-card-container .total-block .button-block .sold {
      border: 2px solid #03e1e4;
      border-radius: 4px;
      color: #03e1e4;
      font-family: PixelSCBold, sans-serif;
      padding: 10px 15px;
      text-align: center;
      text-transform: uppercase;
      width: 100%
    }

    @media (min-width:992px) {
      .marketplace-orders-container .miners-racks-card-container .total-block .button-block .sold {
        padding: 6px 15px
      }
    }

    .marketplace-orders-container .miners-racks-card-container .total-block .button-block .sold .sold-icon {
      width: 16px
    }

    .marketplace-orders-container .miners-racks-card-container .total-block .button-block .sold .sold-text {
      margin-left: 5px
    }

    @media (min-width:992px) {
      .marketplace-orders-container .miners-racks-card-container .name-title {
        font-size: 20px
      }
    }

    .marketplace-orders-container .miners-racks-card-container.mutation_component .card-info-block {
      font-size: 20px
    }

    .marketplace-orders-container .miners-racks-card-container.mutation_component .card-info-block .card-image-wrapper {
      position: relative
    }

    .marketplace-orders-container .miners-racks-card-container.mutation_component .card-info-block .card-image-wrapper .collection-product-level-img-size-2 {
      left: 2px;
      position: absolute;
      top: 25px;
      z-index: 1
    }

    .marketplace-orders-container .miners-racks-card-container.mutation_component .card-info-block .card-image-wrapper .collection-product-level-img-size-1 {
      left: 25px;
      position: absolute;
      top: 26px;
      z-index: 1
    }

    .marketplace-orders-container .miners-racks-card-container.mutation_component .card-info-block .item-name {
      font-size: 20px;
      padding-bottom: 10px
    }

    .marketplace-orders-container .miners-racks-card-container.mutation_component .card-image-block {
      -webkit-box-flex: 0;
      -ms-flex: none;
      flex: none;
      min-height: 96px;
      min-width: 96px
    }
  </style>
  <style>
    .marketplace-dates-filter {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      border: 1px solid #6a668a;
      border-radius: 4px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-direction: column;
      flex-direction: column;
      font-family: PixelSC, sans-serif;
      margin-bottom: 16px;
      padding: 16px
    }

    .marketplace-dates-filter .react-datepicker-wrapper,
    .marketplace-dates-filter .react-datepicker-wrapper .react-datepicker__input-container {
      max-width: 100%;
      width: 100%
    }

    .marketplace-dates-filter .react-datepicker-wrapper .react-datepicker__input-container:after {
      content: url(https://rollercoin.com/static/images/datepicker.a36fcf116c122f0b372b..svg);
      cursor: pointer;
      position: absolute;
      right: 14px;
      top: 58%;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%)
    }

    .marketplace-dates-filter .react-datepicker-wrapper .react-datepicker__input-container>input {
      background-color: #19151c;
      border: 2px solid #595467;
      border-radius: 4px;
      color: #dfdfdf;
      font-family: PixelSC, sans-serif;
      font-size: 16px;
      max-width: 100%;
      padding: 10px 41px 10px 14px;
      position: relative;
      width: 100%
    }

    .marketplace-dates-filter .react-datepicker-wrapper .react-datepicker__input-container>input:focus {
      outline: 0
    }

    .marketplace-dates-filter .react-datepicker-popper .react-datepicker {
      background-color: #19151c;
      border: 2px solid #595467;
      border-radius: 4px;
      color: #dfdfdf;
      font-family: PixelSC, sans-serif;
      font-size: 16px
    }

    .marketplace-dates-filter .react-datepicker-popper .react-datepicker .react-datepicker__header {
      background-color: #19151c;
      border-bottom: 1px solid #595467;
      border-top-left-radius: 4px;
      border-top-right-radius: 4px;
      padding-top: 8px;
      position: relative;
      text-align: center
    }

    .marketplace-dates-filter .react-datepicker-popper .react-datepicker .react-datepicker__day-name,
    .marketplace-dates-filter .react-datepicker-popper .react-datepicker .react-datepicker__header .react-datepicker-time__header,
    .marketplace-dates-filter .react-datepicker-popper .react-datepicker .react-datepicker__header .react-datepicker__current-month {
      color: #dfdfdf
    }

    .marketplace-dates-filter .react-datepicker-popper .react-datepicker .react-datepicker__day {
      border: 1px solid transparent;
      color: #dfdfdf
    }

    .marketplace-dates-filter .react-datepicker-popper .react-datepicker .react-datepicker__day.react-datepicker__day--disabled {
      color: #595467;
      cursor: default
    }

    .marketplace-dates-filter .react-datepicker-popper .react-datepicker .react-datepicker__day.react-datepicker__day--selected,
    .marketplace-dates-filter .react-datepicker-popper .react-datepicker .react-datepicker__day:not(.react-datepicker__day--disabled):hover {
      background-color: transparent;
      border-color: #03e1e4;
      border-radius: 4px
    }

    .marketplace-dates-filter .react-datepicker-popper .react-datepicker .react-datepicker__navigation--previous {
      border-right-color: #03e1e4
    }

    .marketplace-dates-filter .react-datepicker-popper .react-datepicker .react-datepicker__navigation--previous:focus {
      outline: none
    }

    .marketplace-dates-filter .react-datepicker-popper .react-datepicker .react-datepicker__navigation--next {
      border-left-color: #03e1e4
    }

    .marketplace-dates-filter .react-datepicker-popper .react-datepicker .react-datepicker__navigation--next:focus {
      outline: none
    }

    .marketplace-dates-filter .react-datepicker-popper[data-placement^=bottom] .react-datepicker__triangle,
    .marketplace-dates-filter .react-datepicker-popper[data-placement^=bottom] .react-datepicker__triangle:before {
      border-bottom-color: #595467
    }

    .marketplace-dates-filter .react-datepicker-popper[data-placement^=top] .react-datepicker__triangle,
    .marketplace-dates-filter .react-datepicker-popper[data-placement^=top] .react-datepicker__triangle:before {
      border-top-color: #595467
    }

    .marketplace-dates-filter .react-datepicker__navigation-icon--next:before,
    .marketplace-dates-filter .react-datepicker__navigation-icon--previous:before {
      top: 50%
    }

    .marketplace-dates-filter .react-datepicker__navigation-icon--previous:before {
      -webkit-transform: rotate(225deg) translate(-50%, 7px);
      transform: rotate(225deg) translate(-50%, 7px)
    }

    .marketplace-dates-filter .react-datepicker__navigation-icon--next:before {
      -webkit-transform: rotate(45deg) translateX(-25%);
      transform: rotate(45deg) translateX(-25%)
    }
  </style>
  <style>
    .react-datepicker__month-read-view--down-arrow,
    .react-datepicker__month-year-read-view--down-arrow,
    .react-datepicker__navigation-icon:before,
    .react-datepicker__year-read-view--down-arrow {
      border-color: #ccc;
      border-style: solid;
      border-width: 3px 3px 0 0;
      content: "";
      display: block;
      height: 9px;
      position: absolute;
      top: 6px;
      width: 9px
    }

    .react-datepicker-popper[data-placement^=bottom] .react-datepicker__triangle,
    .react-datepicker-popper[data-placement^=top] .react-datepicker__triangle {
      margin-left: -4px;
      position: absolute;
      width: 0
    }

    .react-datepicker-popper[data-placement^=bottom] .react-datepicker__triangle:after,
    .react-datepicker-popper[data-placement^=bottom] .react-datepicker__triangle:before,
    .react-datepicker-popper[data-placement^=top] .react-datepicker__triangle:after,
    .react-datepicker-popper[data-placement^=top] .react-datepicker__triangle:before {
      border: 8px solid transparent;
      -webkit-box-sizing: content-box;
      box-sizing: content-box;
      content: "";
      height: 0;
      left: -8px;
      position: absolute;
      width: 1px;
      z-index: -1
    }

    .react-datepicker-popper[data-placement^=bottom] .react-datepicker__triangle:before,
    .react-datepicker-popper[data-placement^=top] .react-datepicker__triangle:before {
      border-bottom-color: #aeaeae
    }

    .react-datepicker-popper[data-placement^=bottom] .react-datepicker__triangle {
      margin-top: -8px;
      top: 0
    }

    .react-datepicker-popper[data-placement^=bottom] .react-datepicker__triangle:after,
    .react-datepicker-popper[data-placement^=bottom] .react-datepicker__triangle:before {
      border-bottom-color: #f0f0f0;
      border-top: none
    }

    .react-datepicker-popper[data-placement^=bottom] .react-datepicker__triangle:after {
      top: 0
    }

    .react-datepicker-popper[data-placement^=bottom] .react-datepicker__triangle:before {
      border-bottom-color: #aeaeae;
      top: -1px
    }

    .react-datepicker-popper[data-placement^=top] .react-datepicker__triangle {
      bottom: 0;
      margin-bottom: -8px
    }

    .react-datepicker-popper[data-placement^=top] .react-datepicker__triangle:after,
    .react-datepicker-popper[data-placement^=top] .react-datepicker__triangle:before {
      border-bottom: none;
      border-top-color: #fff
    }

    .react-datepicker-popper[data-placement^=top] .react-datepicker__triangle:after {
      bottom: 0
    }

    .react-datepicker-popper[data-placement^=top] .react-datepicker__triangle:before {
      border-top-color: #aeaeae;
      bottom: -1px
    }

    .react-datepicker-wrapper {
      border: 0;
      display: inline-block;
      padding: 0;
      width: 100%
    }

    .react-datepicker {
      background-color: #fff;
      border: 1px solid #aeaeae;
      border-radius: .3rem;
      color: #000;
      display: inline-block;
      font-family: Helvetica Neue, helvetica, arial, sans-serif;
      font-size: .8rem;
      position: relative
    }

    .react-datepicker--time-only .react-datepicker__triangle {
      left: 35px
    }

    .react-datepicker--time-only .react-datepicker__time-container {
      border-left: 0
    }

    .react-datepicker--time-only .react-datepicker__time,
    .react-datepicker--time-only .react-datepicker__time-box {
      border-bottom-left-radius: .3rem;
      border-bottom-right-radius: .3rem
    }

    .react-datepicker__triangle {
      left: 50px;
      position: absolute
    }

    .react-datepicker-popper {
      z-index: 1
    }

    .react-datepicker-popper[data-placement^=bottom] {
      padding-top: 10px
    }

    .react-datepicker-popper[data-placement=bottom-end] .react-datepicker__triangle,
    .react-datepicker-popper[data-placement=top-end] .react-datepicker__triangle {
      left: auto;
      right: 50px
    }

    .react-datepicker-popper[data-placement^=top] {
      padding-bottom: 10px
    }

    .react-datepicker-popper[data-placement^=right] {
      padding-left: 8px
    }

    .react-datepicker-popper[data-placement^=right] .react-datepicker__triangle {
      left: auto;
      right: 42px
    }

    .react-datepicker-popper[data-placement^=left] {
      padding-right: 8px
    }

    .react-datepicker-popper[data-placement^=left] .react-datepicker__triangle {
      left: 42px;
      right: auto
    }

    .react-datepicker__header {
      background-color: #f0f0f0;
      border-bottom: 1px solid #aeaeae;
      border-top-left-radius: .3rem;
      padding: 8px 0;
      position: relative;
      text-align: center
    }

    .react-datepicker__header--time {
      padding-bottom: 8px;
      padding-left: 5px;
      padding-right: 5px
    }

    .react-datepicker__header--time:not(.react-datepicker__header--time--only) {
      border-top-left-radius: 0
    }

    .react-datepicker__header:not(.react-datepicker__header--has-time-select) {
      border-top-right-radius: .3rem
    }

    .react-datepicker__month-dropdown-container--scroll,
    .react-datepicker__month-dropdown-container--select,
    .react-datepicker__month-year-dropdown-container--scroll,
    .react-datepicker__month-year-dropdown-container--select,
    .react-datepicker__year-dropdown-container--scroll,
    .react-datepicker__year-dropdown-container--select {
      display: inline-block;
      margin: 0 15px
    }

    .react-datepicker-time__header,
    .react-datepicker-year-header,
    .react-datepicker__current-month {
      color: #000;
      font-size: .944rem;
      font-weight: 700;
      margin-top: 0
    }

    .react-datepicker-time__header {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap
    }

    .react-datepicker__navigation {
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      align-items: center;
      background: none;
      border: none;
      cursor: pointer;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      height: 32px;
      justify-content: center;
      overflow: hidden;
      padding: 0;
      position: absolute;
      text-align: center;
      text-indent: -999em;
      top: 2px;
      width: 32px;
      z-index: 1
    }

    .react-datepicker__navigation--previous {
      left: 2px
    }

    .react-datepicker__navigation--next {
      right: 2px
    }

    .react-datepicker__navigation--next--with-time:not(.react-datepicker__navigation--next--with-today-button) {
      right: 85px
    }

    .react-datepicker__navigation--years {
      display: block;
      margin-left: auto;
      margin-right: auto;
      position: relative;
      top: 0
    }

    .react-datepicker__navigation--years-previous {
      top: 4px
    }

    .react-datepicker__navigation--years-upcoming {
      top: -4px
    }

    .react-datepicker__navigation:hover :before {
      border-color: #a6a6a6
    }

    .react-datepicker__navigation-icon {
      font-size: 20px;
      position: relative;
      top: -1px;
      width: 0
    }

    .react-datepicker__navigation-icon--next {
      left: -2px
    }

    .react-datepicker__navigation-icon--next:before {
      left: -7px;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg)
    }

    .react-datepicker__navigation-icon--previous {
      right: -2px
    }

    .react-datepicker__navigation-icon--previous:before {
      right: -7px;
      -webkit-transform: rotate(225deg);
      transform: rotate(225deg)
    }

    .react-datepicker__month-container {
      float: left
    }

    .react-datepicker__year {
      margin: .4rem;
      text-align: center
    }

    .react-datepicker__year-wrapper {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      max-width: 180px
    }

    .react-datepicker__year .react-datepicker__year-text {
      display: inline-block;
      margin: 2px;
      width: 4rem
    }

    .react-datepicker__month {
      margin: .4rem;
      text-align: center
    }

    .react-datepicker__month .react-datepicker__month-text,
    .react-datepicker__month .react-datepicker__quarter-text {
      display: inline-block;
      margin: 2px;
      width: 4rem
    }

    .react-datepicker__input-time-container {
      clear: both;
      float: left;
      margin: 5px 0 10px 15px;
      text-align: left;
      width: 100%
    }

    .react-datepicker__input-time-container .react-datepicker-time__caption,
    .react-datepicker__input-time-container .react-datepicker-time__input-container {
      display: inline-block
    }

    .react-datepicker__input-time-container .react-datepicker-time__input-container .react-datepicker-time__input {
      display: inline-block;
      margin-left: 10px
    }

    .react-datepicker__input-time-container .react-datepicker-time__input-container .react-datepicker-time__input input {
      width: auto
    }

    .react-datepicker__input-time-container .react-datepicker-time__input-container .react-datepicker-time__input input[type=time]::-webkit-inner-spin-button,
    .react-datepicker__input-time-container .react-datepicker-time__input-container .react-datepicker-time__input input[type=time]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0
    }

    .react-datepicker__input-time-container .react-datepicker-time__input-container .react-datepicker-time__input input[type=time] {
      -moz-appearance: textfield
    }

    .react-datepicker__input-time-container .react-datepicker-time__input-container .react-datepicker-time__delimiter {
      display: inline-block;
      margin-left: 5px
    }

    .react-datepicker__time-container {
      border-left: 1px solid #aeaeae;
      float: right;
      width: 85px
    }

    .react-datepicker__time-container--with-today-button {
      border: 1px solid #aeaeae;
      border-radius: .3rem;
      display: inline;
      position: absolute;
      right: -87px;
      top: 0
    }

    .react-datepicker__time-container .react-datepicker__time {
      background: #fff;
      border-bottom-right-radius: .3rem;
      position: relative
    }

    .react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box {
      border-bottom-right-radius: .3rem;
      margin: 0 auto;
      overflow-x: hidden;
      text-align: center;
      width: 85px
    }

    .react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list {
      -webkit-box-sizing: content-box;
      box-sizing: content-box;
      height: calc(195px + .85rem);
      list-style: none;
      margin: 0;
      overflow-y: scroll;
      padding-left: 0;
      padding-right: 0;
      width: 100%
    }

    .react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list li.react-datepicker__time-list-item {
      height: 30px;
      padding: 5px 10px;
      white-space: nowrap
    }

    .react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list li.react-datepicker__time-list-item:hover {
      background-color: #f0f0f0;
      cursor: pointer
    }

    .react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list li.react-datepicker__time-list-item--selected {
      background-color: #216ba5;
      color: #fff;
      font-weight: 700
    }

    .react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list li.react-datepicker__time-list-item--selected:hover {
      background-color: #216ba5
    }

    .react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list li.react-datepicker__time-list-item--disabled {
      color: #ccc
    }

    .react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list li.react-datepicker__time-list-item--disabled:hover {
      background-color: transparent;
      cursor: default
    }

    .react-datepicker__week-number {
      color: #ccc;
      display: inline-block;
      line-height: 1.7rem;
      margin: .166rem;
      text-align: center;
      width: 1.7rem
    }

    .react-datepicker__week-number.react-datepicker__week-number--clickable {
      cursor: pointer
    }

    .react-datepicker__week-number.react-datepicker__week-number--clickable:hover {
      background-color: #f0f0f0;
      border-radius: .3rem
    }

    .react-datepicker__day-names,
    .react-datepicker__week {
      white-space: nowrap
    }

    .react-datepicker__day-names {
      margin-bottom: -8px
    }

    .react-datepicker__day,
    .react-datepicker__day-name,
    .react-datepicker__time-name {
      color: #000;
      display: inline-block;
      line-height: 1.7rem;
      margin: .166rem;
      text-align: center;
      width: 1.7rem
    }

    .react-datepicker__month--in-range,
    .react-datepicker__month--in-selecting-range,
    .react-datepicker__month--selected,
    .react-datepicker__quarter--in-range,
    .react-datepicker__quarter--in-selecting-range,
    .react-datepicker__quarter--selected {
      background-color: #216ba5;
      border-radius: .3rem;
      color: #fff
    }

    .react-datepicker__month--in-range:hover,
    .react-datepicker__month--in-selecting-range:hover,
    .react-datepicker__month--selected:hover,
    .react-datepicker__quarter--in-range:hover,
    .react-datepicker__quarter--in-selecting-range:hover,
    .react-datepicker__quarter--selected:hover {
      background-color: #1d5d90
    }

    .react-datepicker__month--disabled,
    .react-datepicker__quarter--disabled {
      color: #ccc;
      pointer-events: none
    }

    .react-datepicker__month--disabled:hover,
    .react-datepicker__quarter--disabled:hover {
      background-color: transparent;
      cursor: default
    }

    .react-datepicker__day,
    .react-datepicker__month-text,
    .react-datepicker__quarter-text,
    .react-datepicker__year-text {
      cursor: pointer
    }

    .react-datepicker__day:hover,
    .react-datepicker__month-text:hover,
    .react-datepicker__quarter-text:hover,
    .react-datepicker__year-text:hover {
      background-color: #f0f0f0;
      border-radius: .3rem
    }

    .react-datepicker__day--today,
    .react-datepicker__month-text--today,
    .react-datepicker__quarter-text--today,
    .react-datepicker__year-text--today {
      font-weight: 700
    }

    .react-datepicker__day--highlighted,
    .react-datepicker__month-text--highlighted,
    .react-datepicker__quarter-text--highlighted,
    .react-datepicker__year-text--highlighted {
      background-color: #3dcc4a;
      border-radius: .3rem;
      color: #fff
    }

    .react-datepicker__day--highlighted:hover,
    .react-datepicker__month-text--highlighted:hover,
    .react-datepicker__quarter-text--highlighted:hover,
    .react-datepicker__year-text--highlighted:hover {
      background-color: #32be3f
    }

    .react-datepicker__day--highlighted-custom-1,
    .react-datepicker__month-text--highlighted-custom-1,
    .react-datepicker__quarter-text--highlighted-custom-1,
    .react-datepicker__year-text--highlighted-custom-1 {
      color: #f0f
    }

    .react-datepicker__day--highlighted-custom-2,
    .react-datepicker__month-text--highlighted-custom-2,
    .react-datepicker__quarter-text--highlighted-custom-2,
    .react-datepicker__year-text--highlighted-custom-2 {
      color: green
    }

    .react-datepicker__day--in-range,
    .react-datepicker__day--in-selecting-range,
    .react-datepicker__day--selected,
    .react-datepicker__month-text--in-range,
    .react-datepicker__month-text--in-selecting-range,
    .react-datepicker__month-text--selected,
    .react-datepicker__quarter-text--in-range,
    .react-datepicker__quarter-text--in-selecting-range,
    .react-datepicker__quarter-text--selected,
    .react-datepicker__year-text--in-range,
    .react-datepicker__year-text--in-selecting-range,
    .react-datepicker__year-text--selected {
      background-color: #216ba5;
      border-radius: .3rem;
      color: #fff
    }

    .react-datepicker__day--in-range:hover,
    .react-datepicker__day--in-selecting-range:hover,
    .react-datepicker__day--selected:hover,
    .react-datepicker__month-text--in-range:hover,
    .react-datepicker__month-text--in-selecting-range:hover,
    .react-datepicker__month-text--selected:hover,
    .react-datepicker__quarter-text--in-range:hover,
    .react-datepicker__quarter-text--in-selecting-range:hover,
    .react-datepicker__quarter-text--selected:hover,
    .react-datepicker__year-text--in-range:hover,
    .react-datepicker__year-text--in-selecting-range:hover,
    .react-datepicker__year-text--selected:hover {
      background-color: #1d5d90
    }

    .react-datepicker__day--keyboard-selected,
    .react-datepicker__month-text--keyboard-selected,
    .react-datepicker__quarter-text--keyboard-selected,
    .react-datepicker__year-text--keyboard-selected {
      background-color: #bad9f1;
      border-radius: .3rem;
      color: #000
    }

    .react-datepicker__day--keyboard-selected:hover,
    .react-datepicker__month-text--keyboard-selected:hover,
    .react-datepicker__quarter-text--keyboard-selected:hover,
    .react-datepicker__year-text--keyboard-selected:hover {
      background-color: #1d5d90
    }

    .react-datepicker__day--in-selecting-range:not(.react-datepicker__day--in-range):not(.react-datepicker__month-text--in-range):not(.react-datepicker__quarter-text--in-range):not(.react-datepicker__year-text--in-range),
    .react-datepicker__month-text--in-selecting-range:not(.react-datepicker__day--in-range):not(.react-datepicker__month-text--in-range):not(.react-datepicker__quarter-text--in-range):not(.react-datepicker__year-text--in-range),
    .react-datepicker__quarter-text--in-selecting-range:not(.react-datepicker__day--in-range):not(.react-datepicker__month-text--in-range):not(.react-datepicker__quarter-text--in-range):not(.react-datepicker__year-text--in-range),
    .react-datepicker__year-text--in-selecting-range:not(.react-datepicker__day--in-range):not(.react-datepicker__month-text--in-range):not(.react-datepicker__quarter-text--in-range):not(.react-datepicker__year-text--in-range) {
      background-color: rgba(33, 107, 165, .5)
    }

    .react-datepicker__month--selecting-range .react-datepicker__day--in-range:not(.react-datepicker__day--in-selecting-range):not(.react-datepicker__month-text--in-selecting-range):not(.react-datepicker__quarter-text--in-selecting-range):not(.react-datepicker__year-text--in-selecting-range),
    .react-datepicker__month--selecting-range .react-datepicker__month-text--in-range:not(.react-datepicker__day--in-selecting-range):not(.react-datepicker__month-text--in-selecting-range):not(.react-datepicker__quarter-text--in-selecting-range):not(.react-datepicker__year-text--in-selecting-range),
    .react-datepicker__month--selecting-range .react-datepicker__quarter-text--in-range:not(.react-datepicker__day--in-selecting-range):not(.react-datepicker__month-text--in-selecting-range):not(.react-datepicker__quarter-text--in-selecting-range):not(.react-datepicker__year-text--in-selecting-range),
    .react-datepicker__month--selecting-range .react-datepicker__year-text--in-range:not(.react-datepicker__day--in-selecting-range):not(.react-datepicker__month-text--in-selecting-range):not(.react-datepicker__quarter-text--in-selecting-range):not(.react-datepicker__year-text--in-selecting-range) {
      background-color: #f0f0f0;
      color: #000
    }

    .react-datepicker__day--disabled,
    .react-datepicker__month-text--disabled,
    .react-datepicker__quarter-text--disabled,
    .react-datepicker__year-text--disabled {
      color: #ccc;
      cursor: default
    }

    .react-datepicker__day--disabled:hover,
    .react-datepicker__month-text--disabled:hover,
    .react-datepicker__quarter-text--disabled:hover,
    .react-datepicker__year-text--disabled:hover {
      background-color: transparent
    }

    .react-datepicker__month-text.react-datepicker__month--in-range:hover,
    .react-datepicker__month-text.react-datepicker__month--selected:hover,
    .react-datepicker__month-text.react-datepicker__quarter--in-range:hover,
    .react-datepicker__month-text.react-datepicker__quarter--selected:hover,
    .react-datepicker__quarter-text.react-datepicker__month--in-range:hover,
    .react-datepicker__quarter-text.react-datepicker__month--selected:hover,
    .react-datepicker__quarter-text.react-datepicker__quarter--in-range:hover,
    .react-datepicker__quarter-text.react-datepicker__quarter--selected:hover {
      background-color: #216ba5
    }

    .react-datepicker__month-text:hover,
    .react-datepicker__quarter-text:hover {
      background-color: #f0f0f0
    }

    .react-datepicker__input-container {
      display: inline-block;
      position: relative;
      width: 100%
    }

    .react-datepicker__month-read-view,
    .react-datepicker__month-year-read-view,
    .react-datepicker__year-read-view {
      border: 1px solid transparent;
      border-radius: .3rem;
      position: relative
    }

    .react-datepicker__month-read-view:hover,
    .react-datepicker__month-year-read-view:hover,
    .react-datepicker__year-read-view:hover {
      cursor: pointer
    }

    .react-datepicker__month-read-view:hover .react-datepicker__month-read-view--down-arrow,
    .react-datepicker__month-read-view:hover .react-datepicker__year-read-view--down-arrow,
    .react-datepicker__month-year-read-view:hover .react-datepicker__month-read-view--down-arrow,
    .react-datepicker__month-year-read-view:hover .react-datepicker__year-read-view--down-arrow,
    .react-datepicker__year-read-view:hover .react-datepicker__month-read-view--down-arrow,
    .react-datepicker__year-read-view:hover .react-datepicker__year-read-view--down-arrow {
      border-top-color: #b3b3b3
    }

    .react-datepicker__month-read-view--down-arrow,
    .react-datepicker__month-year-read-view--down-arrow,
    .react-datepicker__year-read-view--down-arrow {
      right: -16px;
      top: 0;
      -webkit-transform: rotate(135deg);
      transform: rotate(135deg)
    }

    .react-datepicker__month-dropdown,
    .react-datepicker__month-year-dropdown,
    .react-datepicker__year-dropdown {
      background-color: #f0f0f0;
      border: 1px solid #aeaeae;
      border-radius: .3rem;
      left: 25%;
      position: absolute;
      text-align: center;
      top: 30px;
      width: 50%;
      z-index: 1
    }

    .react-datepicker__month-dropdown:hover,
    .react-datepicker__month-year-dropdown:hover,
    .react-datepicker__year-dropdown:hover {
      cursor: pointer
    }

    .react-datepicker__month-dropdown--scrollable,
    .react-datepicker__month-year-dropdown--scrollable,
    .react-datepicker__year-dropdown--scrollable {
      height: 150px;
      overflow-y: scroll
    }

    .react-datepicker__month-option,
    .react-datepicker__month-year-option,
    .react-datepicker__year-option {
      display: block;
      line-height: 20px;
      margin-left: auto;
      margin-right: auto;
      width: 100%
    }

    .react-datepicker__month-option:first-of-type,
    .react-datepicker__month-year-option:first-of-type,
    .react-datepicker__year-option:first-of-type {
      border-top-left-radius: .3rem;
      border-top-right-radius: .3rem
    }

    .react-datepicker__month-option:last-of-type,
    .react-datepicker__month-year-option:last-of-type,
    .react-datepicker__year-option:last-of-type {
      border-bottom-left-radius: .3rem;
      border-bottom-right-radius: .3rem;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
    }

    .react-datepicker__month-option:hover,
    .react-datepicker__month-year-option:hover,
    .react-datepicker__year-option:hover {
      background-color: #ccc
    }

    .react-datepicker__month-option:hover .react-datepicker__navigation--years-upcoming,
    .react-datepicker__month-year-option:hover .react-datepicker__navigation--years-upcoming,
    .react-datepicker__year-option:hover .react-datepicker__navigation--years-upcoming {
      border-bottom-color: #b3b3b3
    }

    .react-datepicker__month-option:hover .react-datepicker__navigation--years-previous,
    .react-datepicker__month-year-option:hover .react-datepicker__navigation--years-previous,
    .react-datepicker__year-option:hover .react-datepicker__navigation--years-previous {
      border-top-color: #b3b3b3
    }

    .react-datepicker__month-option--selected,
    .react-datepicker__month-year-option--selected,
    .react-datepicker__year-option--selected {
      left: 15px;
      position: absolute
    }

    .react-datepicker__close-icon {
      background-color: transparent;
      border: 0;
      cursor: pointer;
      display: table-cell;
      height: 100%;
      outline: 0;
      padding: 0 6px 0 0;
      position: absolute;
      right: 0;
      top: 0;
      vertical-align: middle
    }

    .react-datepicker__close-icon:after {
      background-color: #216ba5;
      border-radius: 50%;
      color: #fff;
      content: "×";
      cursor: pointer;
      display: table-cell;
      font-size: 12px;
      height: 16px;
      line-height: 1;
      padding: 2px;
      text-align: center;
      vertical-align: middle;
      width: 16px
    }

    .react-datepicker__today-button {
      background: #f0f0f0;
      border-top: 1px solid #aeaeae;
      clear: left;
      cursor: pointer;
      font-weight: 700;
      padding: 5px 0;
      text-align: center
    }

    .react-datepicker__portal {
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      background-color: rgba(0, 0, 0, .8);
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      height: 100vh;
      justify-content: center;
      left: 0;
      position: fixed;
      top: 0;
      width: 100vw;
      z-index: 2147483647
    }

    .react-datepicker__portal .react-datepicker__day,
    .react-datepicker__portal .react-datepicker__day-name,
    .react-datepicker__portal .react-datepicker__time-name {
      line-height: 3rem;
      width: 3rem
    }

    @media (max-height:550px),
    (max-width:400px) {

      .react-datepicker__portal .react-datepicker__day,
      .react-datepicker__portal .react-datepicker__day-name,
      .react-datepicker__portal .react-datepicker__time-name {
        line-height: 2rem;
        width: 2rem
      }
    }

    .react-datepicker__portal .react-datepicker-time__header,
    .react-datepicker__portal .react-datepicker__current-month {
      font-size: 1.44rem
    }

    .react-datepicker__children-container {
      height: auto;
      margin: .4rem;
      padding-left: .2rem;
      padding-right: .2rem;
      width: 13.8rem
    }

    .react-datepicker__aria-live {
      border: 0;
      -webkit-clip-path: circle(0);
      clip-path: circle(0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      white-space: nowrap;
      width: 1px
    }
  </style>
  <style>
    .myorders-modal {
      margin: 0 auto;
      max-width: 380px
    }

    .myorders-modal .myorders-modal-wrapper {
      background-color: #2f3045;
      border: 1px solid #6a668a;
      border-radius: 4px;
      padding: 24px
    }

    .myorders-modal .myorders-modal-wrapper .title {
      font-family: PixelSCBold, sans-serif;
      font-size: 24px;
      margin-bottom: 5px
    }

    .myorders-modal .myorders-modal-wrapper .text {
      font-family: PixelSC, sans-serif;
      font-size: 20px;
      line-height: 20px
    }

    .myorders-modal .myorders-modal-wrapper .button-block {
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: space-between;
      margin-top: 25px
    }

    .myorders-modal .myorders-modal-wrapper .button-block .myorders-modal-button {
      width: 47%
    }
  </style>
  <style>
    .myorders-modal .item-block,
    .myorders-modal .item-block .img-block {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex
    }

    .myorders-modal .item-block .img-block {
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-box-flex: 1;
      align-items: center;
      background-color: #1f1f2d;
      border-radius: 4px;
      -ms-flex: 1;
      flex: 1;
      justify-content: center;
      min-height: 100px;
      overflow: hidden;
      position: relative
    }

    .myorders-modal .item-block .img-block .collection-product-level-img-size-2 {
      left: 2px;
      position: absolute;
      top: 15px
    }

    .myorders-modal .item-block .img-block .collection-product-level-img-size-1 {
      left: 21px;
      position: absolute;
      top: 18px
    }

    .myorders-modal .item-block .item-info-block {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      -webkit-box-flex: 2;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex: 2;
      flex: 2;
      -ms-flex-direction: column;
      flex-direction: column;
      justify-content: space-between;
      margin-left: 15px
    }

    .myorders-modal .item-block .item-info-block .item-title {
      font-family: PixelSCBold, sans-serif;
      font-size: 20px;
      margin-bottom: 10px
    }

    .myorders-modal .item-block .item-info-block .price-group {
      margin-bottom: 0;
      position: relative
    }

    .myorders-modal .item-block .item-info-block .price-group .price-label {
      font-family: PixelSC, sans-serif;
      font-size: 16px;
      margin-bottom: 5px
    }

    .myorders-modal .item-block .item-info-block .price-group .price-input {
      background: #1f1f2d;
      border: 1px solid #6a668a;
      border-radius: 4px;
      font-size: 18px;
      padding: 5px 15px
    }

    .myorders-modal .item-block .item-info-block .price-group .price-calculate-wrapper-warning {
      bottom: -35px;
      color: #d53f3f;
      font-family: PixelSC, sans-serif;
      font-size: 16px;
      line-height: 1;
      position: absolute
    }

    .myorders-modal .details-block {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      margin-top: 30px
    }

    .myorders-modal .details-block .recipe-item {
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      border-top: 1px solid #6a668a;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      font-family: PixelSC, sans-serif;
      font-size: 20px;
      justify-content: space-between;
      padding: 5px 0;
      position: relative;
      width: 100%
    }

    .myorders-modal .details-block .recipe-item .item {
      padding-left: 11px;
      position: relative;
      width: 60%
    }

    .myorders-modal .details-block .recipe-item .item:before {
      left: 0
    }

    .myorders-modal .details-block .recipe-item .item:after,
    .myorders-modal .details-block .recipe-item .item:before {
      background: #6a668a;
      content: "";
      height: 60%;
      position: absolute;
      top: 50%;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      vertical-align: middle;
      width: 1px
    }

    .myorders-modal .details-block .recipe-item .item:after {
      right: 0
    }

    .myorders-modal .details-block .recipe-item .count {
      padding-right: 11px;
      position: relative;
      text-align: right;
      width: 40%
    }

    .myorders-modal .details-block .recipe-item .count:after {
      background: #6a668a;
      content: "";
      height: 60%;
      position: absolute;
      right: 0;
      top: 50%;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      vertical-align: middle;
      width: 1px
    }

    .myorders-modal .details-block .input-receive {
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      background: #1f1f2d;
      border-radius: 4px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      font-family: PixelSCBold, sans-serif;
      font-size: 20px;
      justify-content: space-between;
      padding: 5px 11px;
      width: 100%
    }

    .myorders-modal .details-block .input-receive .receive-item {
      margin-bottom: 0
    }

    .myorders-modal .details-block .input-receive .receive-value {
      margin-bottom: 0;
      text-transform: uppercase
    }
  </style>
  <style>
    .marketplace-orders-container .marketplace-orders-main-block {
      -webkit-box-orient: vertical;
      -webkit-box-direction: reverse;
      -ms-flex-direction: column-reverse;
      flex-direction: column-reverse
    }

    @media (min-width:768px) {
      .marketplace-orders-container .marketplace-orders-main-block {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row
      }
    }

    .marketplace-orders-container .marketplace-orders-empty {
      margin: 64px auto 48px;
      text-align: center
    }
  </style>
  <style>
    .orders-price-table .main-value {
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      background-color: #1f1f2d;
      border-radius: 4px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      font-size: 20px;
      justify-content: space-between;
      line-height: 40px;
      margin-bottom: 4px;
      padding: 0 12px
    }

    .orders-price-table .main-value .main-value-title {
      font-family: PixelSC, sans-serif
    }

    .orders-price-table .main-value .value {
      font-family: PixelSCBold, sans-serif
    }

    .orders-price-table .orders-table {
      font-family: PixelSC, sans-serif;
      font-size: 16px;
      line-height: 17px
    }

    .orders-price-table .orders-table .vertical-divider {
      border-left: 1px solid #6a668a
    }

    .orders-price-table .orders-table .table-header {
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      background-color: #1f1f2d;
      border-radius: 4px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: space-between;
      padding: 8px 0 7px
    }

    .orders-price-table .orders-table .table-header .text-left,
    .orders-price-table .orders-table .table-header .text-right {
      -ms-flex-preferred-size: 50%;
      flex-basis: 50%;
      padding: 0 12px
    }

    .orders-price-table .orders-table .table-item-wrapper {
      border-bottom: 1px solid #6a668a;
      padding: 8px 0
    }

    .orders-price-table .orders-table .table-item-wrapper .table-item {
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      border-left: 1px solid #6a668a;
      border-right: 1px solid #6a668a;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: space-between;
      padding: 0 12px
    }

    .orders-price-table .orders-table .table-item-wrapper .text-left,
    .orders-price-table .orders-table .table-item-wrapper .text-right {
      -ms-flex-preferred-size: 50%;
      flex-basis: 50%
    }
  </style>
  <style>
    @media only screen and (min-width:992px) {
      .marketplace-price-chart {
        border-top: 1px solid #6a668a;
        padding-top: 16px
      }
    }

    .marketplace-price-chart .marketplace-navigation-title {
      font-family: PixelSC, sans-serif;
      font-size: 20px;
      padding: 0 8px 8px 0
    }

    @media only screen and (min-width:992px) {
      .marketplace-price-chart .marketplace-navigation-title {
        padding: 8px 8px 9px 0
      }
    }

    .marketplace-price-chart .marketplace-navigation-block {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      font-family: PixelSC, sans-serif;
      font-size: 20px;
      line-height: 1.1
    }

    .marketplace-price-chart .marketplace-navigation-block .marketplace-nav-pills .nav-item {
      margin-right: 4px;
      padding: 0
    }

    .marketplace-price-chart .marketplace-navigation-block .marketplace-nav-pills .nav-item .nav-link {
      background-color: #19151d;
      border: none;
      border-radius: 4px 4px 0 0;
      font-family: PixelSC, sans-serif;
      font-size: 20px;
      line-height: 1.1;
      margin: 0;
      padding: 8px 16px 9px;
      text-transform: none
    }

    .marketplace-price-chart .marketplace-navigation-block .marketplace-nav-pills .nav-item .nav-link:hover {
      background-color: #19151d;
      border: none;
      color: #03e1e4;
      cursor: pointer
    }

    .marketplace-price-chart .marketplace-navigation-block .marketplace-nav-pills .nav-item .nav-link.active {
      background-color: #1f1f2d;
      border: none;
      color: #03e1e4;
      cursor: default
    }

    @media only screen and (min-width:992px) {
      .marketplace-price-chart .marketplace-navigation-block .marketplace-nav-pills .nav-item .nav-link.active {
        color: #fff
      }
    }

    .marketplace-price-chart .chart-container {
      background: #1f1f2d;
      border-radius: 0 4px 4px 4px;
      padding: 12px 10px
    }

    @media only screen and (min-width:992px) {
      .marketplace-price-chart .chart-container {
        border-radius: 4px;
        padding: 26px 24px
      }
    }
  </style>
  <style>
    .item-info-buy-wrapper {
      border-bottom: 1px solid #6a668a;
      margin-bottom: 16px;
      padding-bottom: 22px
    }

    @media only screen and (min-width:992px) {
      .item-info-buy-wrapper {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0
      }
    }

    .item-info-buy-wrapper .item-img-wrapper {
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      background-color: #1f1f2d;
      border-radius: 4px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: center;
      margin-bottom: 12px;
      overflow: hidden;
      padding: 32px 0;
      position: relative
    }

    .item-info-buy-wrapper .item-img-wrapper .collection-product-level-img-size-2 {
      left: 51px;
      position: absolute;
      top: 66px
    }

    .item-info-buy-wrapper .item-img-wrapper .collection-product-level-img-size-1 {
      left: 84px;
      position: absolute;
      top: 68px
    }

    .item-info-characteristics-wrapper .characteristics-item-wrapper {
      color: #fff;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      font-family: PixelSC, sans-serif;
      font-size: 20px;
      line-height: 32px;
      margin-bottom: 4px
    }

    .item-info-characteristics-wrapper .characteristics-item-wrapper.title {
      line-height: 40px
    }

    .item-info-characteristics-wrapper .characteristics-item-wrapper .characteristics-title,
    .item-info-characteristics-wrapper .characteristics-item-wrapper .item-title,
    .item-info-characteristics-wrapper .characteristics-item-wrapper .item-value {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      background-color: #1f1f2d;
      border-radius: 4px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      padding: 0 12px
    }

    .item-info-characteristics-wrapper .characteristics-item-wrapper .characteristics-title.bonus-value,
    .item-info-characteristics-wrapper .characteristics-item-wrapper .item-title.bonus-value,
    .item-info-characteristics-wrapper .characteristics-item-wrapper .item-value.bonus-value {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      color: #03e1e4;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      font-family: PixelSCBold, sans-serif
    }

    .item-info-characteristics-wrapper .characteristics-item-wrapper .characteristics-title.bonus-value .power-icon,
    .item-info-characteristics-wrapper .characteristics-item-wrapper .item-title.bonus-value .power-icon,
    .item-info-characteristics-wrapper .characteristics-item-wrapper .item-value.bonus-value .power-icon {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      margin-right: 4px
    }

    .item-info-characteristics-wrapper .characteristics-item-wrapper .characteristics-title {
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1
    }

    .item-info-characteristics-wrapper .characteristics-item-wrapper .characteristics-title .characteristics-icon-wrapper {
      line-height: 20px;
      margin-right: 12px
    }

    .item-info-characteristics-wrapper .characteristics-item-wrapper .characteristics-title .characteristics-bold-text {
      font-family: PixelSCBold, sans-serif
    }

    .item-info-characteristics-wrapper .characteristics-item-wrapper .item-title {
      -webkit-box-flex: 0;
      -ms-flex: 0 0 106px;
      flex: 0 0 106px
    }

    @media only screen and (min-width:992px) {
      .item-info-characteristics-wrapper .characteristics-item-wrapper .item-title {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 96px;
        flex: 0 0 96px
      }
    }

    .item-info-characteristics-wrapper .characteristics-item-wrapper .item-value {
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      margin-left: 4px
    }

    .item-info-characteristics-wrapper .characteristics-item-wrapper .item-value.cyan {
      color: #03e1e4
    }

    .item-info-characteristics-wrapper .characteristics-item-wrapper .item-value.green {
      color: #5ce319
    }

    .item-info-characteristics-wrapper .characteristics-item-wrapper .item-value.bold {
      font-family: PixelSCBold, sans-serif
    }

    .item-info-characteristics-wrapper .characteristics-item-wrapper .icon-wrapper {
      margin-right: 4px;
      -webkit-transform: translateY(-1px);
      transform: translateY(-1px)
    }

    .item-info-characteristics-wrapper .characteristics-item-description {
      color: #fff;
      font-family: PixelSC, sans-serif;
      font-size: 20px;
      line-height: 1.1;
      margin-bottom: 16px;
      margin-top: 16px
    }

    @media only screen and (min-width:992px) {
      .item-info-characteristics-wrapper .characteristics-item-description {
        margin-bottom: 0;
        margin-top: 8px
      }
    }
  </style>
  <style>
    .buy-process-modal {
      max-width: 380px
    }

    .buy-process-modal .buy-process-modal-body {
      background: #2f3045;
      border: 1px solid #6a668a;
      border-radius: 4px;
      padding: 16px 20px 24px;
      position: relative;
      text-align: center
    }

    .buy-process-modal .buy-process-modal-body .modal-title {
      color: #fff;
      font-family: PixelSCBold, sans-serif;
      font-size: 24px;
      line-height: 1.1;
      margin-bottom: 4px
    }

    .buy-process-modal .buy-process-modal-body .modal-title.green {
      color: #4bb814
    }

    .buy-process-modal .buy-process-modal-body .modal-title.red {
      color: #d53f3f
    }

    .buy-process-modal .buy-process-modal-body .modal-text {
      color: #fff;
      font-family: PixelSC, sans-serif;
      font-size: 20px;
      line-height: 1.1;
      margin-bottom: 24px
    }

    .buy-process-modal .buy-process-modal-body .modal-order-wrapper {
      border: 1px solid #6a668a;
      border-radius: 4px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      margin-bottom: 16px;
      padding: 8px
    }

    .buy-process-modal .buy-process-modal-body .modal-order-wrapper .modal-item-img-wrapper {
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      background-color: #1f1f2d;
      border-radius: 4px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: center;
      margin-right: 16px;
      min-height: 100px;
      min-width: 126px;
      overflow: hidden;
      position: relative
    }

    .buy-process-modal .buy-process-modal-body .modal-order-wrapper .modal-item-img-wrapper .gold-shadow {
      -webkit-filter: drop-shadow(0 0 16px #ffdc00);
      filter: drop-shadow(0 0 16px #ffdc00)
    }

    .buy-process-modal .buy-process-modal-body .modal-order-wrapper .modal-item-img-wrapper .collection-product-level-img-size-2 {
      left: 2px;
      position: absolute;
      top: 25px;
      z-index: 1
    }

    .buy-process-modal .buy-process-modal-body .modal-order-wrapper .modal-item-img-wrapper .collection-product-level-img-size-1 {
      left: 25px;
      position: absolute;
      top: 26px;
      z-index: 1
    }

    .buy-process-modal .buy-process-modal-body .modal-order-wrapper .modal-item-img-wrapper .rating-star-wrapper .star-wrapper {
      line-height: 0
    }

    .buy-process-modal .buy-process-modal-body .modal-order-wrapper .modal-item-img-wrapper .rating-star-wrapper .star-wrapper:not(:last-child) {
      margin-right: 3px
    }

    .buy-process-modal .buy-process-modal-body .modal-order-wrapper .modal-item-img-wrapper .rating-star-wrapper .star-wrapper .star {
      max-height: 18px;
      max-width: 18px
    }

    .buy-process-modal .buy-process-modal-body .modal-order-wrapper .item-info-wrapper {
      font-size: 20px;
      line-height: 21px;
      text-align: left
    }

    .buy-process-modal .buy-process-modal-body .modal-order-wrapper .item-info-wrapper .item-title {
      font-family: PixelSCBold, sans-serif;
      margin-bottom: 0;
      min-height: 42px
    }

    .buy-process-modal .buy-process-modal-body .modal-order-wrapper .item-info-wrapper .item-qty {
      font-family: PixelSC, sans-serif;
      margin-bottom: 0;
      min-height: 42px
    }

    .buy-process-modal .buy-process-modal-body .modal-order-wrapper .item-info-wrapper .item-qty .item-qty-amount {
      color: #5ce319;
      font-family: PixelSCBold, sans-serif
    }

    .buy-process-modal .buy-process-modal-body .modal-order-wrapper .item-info-wrapper .item-price {
      font-family: PixelSC, sans-serif;
      margin-bottom: 0
    }

    .buy-process-modal .buy-process-modal-body .modal-order-wrapper .item-info-wrapper .item-price .item-price-amount {
      color: #03e1e4;
      font-family: PixelSCBold, sans-serif
    }

    .buy-process-modal .buy-process-modal-body .order-status-block {
      text-align: left
    }

    .buy-process-modal .buy-process-modal-body .order-status-block .order-status-title {
      font-family: PixelSCBold, sans-serif;
      font-size: 20px;
      margin-bottom: 12px
    }

    .buy-process-modal .buy-process-modal-body .order-status-block .order-status-wrapper .order-status-step {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      position: relative
    }

    .buy-process-modal .buy-process-modal-body .order-status-block .order-status-wrapper .order-status-step:not(:last-child) {
      margin-bottom: 32px
    }

    .buy-process-modal .buy-process-modal-body .order-status-block .order-status-wrapper .order-status-step:not(:last-child):after {
      background-color: #6a668a;
      content: "";
      height: 48px;
      left: 6px;
      position: absolute;
      top: 12px;
      width: 4px
    }

    .buy-process-modal .buy-process-modal-body .order-status-block .order-status-wrapper .order-status-step:not(:last-child).success:after {
      background-color: #4bb814
    }

    .buy-process-modal .buy-process-modal-body .order-status-block .order-status-wrapper .order-status-step .status-point {
      background-color: #2f3045;
      border: 2px solid #6a668a;
      border-radius: 50%;
      height: 16px;
      line-height: 14px;
      margin-right: 12px;
      text-align: center;
      width: 16px;
      z-index: 1
    }

    .buy-process-modal .buy-process-modal-body .order-status-block .order-status-wrapper .order-status-step .status-point.pending {
      border-color: #4bb814
    }

    .buy-process-modal .buy-process-modal-body .order-status-block .order-status-wrapper .order-status-step .status-point.success {
      background-color: #4bb814;
      border-color: #4bb814
    }

    .buy-process-modal .buy-process-modal-body .order-status-block .order-status-wrapper .order-status-step .status-point.error {
      background-color: #d53f3f;
      border-color: #d53f3f
    }

    .buy-process-modal .buy-process-modal-body .order-status-block .order-status-wrapper .order-status-step .status-text {
      font-family: PixelSC, sans-serif;
      font-size: 20px;
      line-height: 1;
      margin-bottom: 0
    }

    .buy-process-modal .buy-process-modal-body .order-status-block .order-status-wrapper .order-status-step .mini-loader {
      margin-left: 12px
    }

    .buy-process-modal .buy-process-modal-body .buttons-wrapper {
      height: 0;
      margin-top: 24px;
      overflow: hidden
    }

    .buy-process-modal .buy-process-modal-body .buttons-wrapper.show {
      height: 195px;
      -webkit-transition: height .5s linear;
      transition: height .5s linear
    }

    .roller-button.close-btn {
      height: 24px;
      padding: 4px;
      position: absolute;
      right: 8px;
      top: 8px;
      width: 24px
    }
  </style>
  <style>
    .back-button {
      padding-bottom: 16px
    }

    .back-button .back-link {
      color: #fff;
      font-family: PixelSCBold, sans-serif;
      font-size: 28px
    }

    .back-button .icon {
      padding-right: 12px
    }

    .marketplace-buy-item-page {
      background-color: #2f3045;
      border: 1px solid #6a668a;
      border-radius: 4px;
      min-height: 480px;
      padding: 12px 16px 24px;
      position: relative
    }

    @media only screen and (min-width:992px) {
      .marketplace-buy-item-page {
        padding: 16px 30px 40px
      }
    }

    .marketplace-buy-item-page .item-loader-layout {
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: center;
      min-height: 480px
    }

    .marketplace-buy-item-page .main-item-title {
      font-family: PixelSCBold, sans-serif;
      font-size: 24px;
      line-height: 1.1;
      margin-bottom: 12px
    }

    @media only screen and (min-width:992px) {
      .marketplace-buy-item-page .main-item-title {
        margin-bottom: 16px
      }
    }

    .marketplace-buy-item-page .item-main-wrapper {
      margin-bottom: 16px
    }

    @media only screen and (min-width:992px) {
      .marketplace-buy-item-page .item-main-wrapper {
        margin-bottom: 36px
      }
    }

    .marketplace-buy-item-page .item-main-wrapper .item-quantity-price-wrapper {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      margin-bottom: 12px;
      max-height: 32px
    }

    @media only screen and (min-width:992px) {
      .marketplace-buy-item-page .item-main-wrapper .item-quantity-price-wrapper {
        margin-bottom: 16px
      }
    }

    .marketplace-buy-item-page .item-main-wrapper .item-quantity-price-wrapper .item-price {
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      background-color: #1f1f2d;
      border-radius: 4px;
      flex-grow: 1;
      font-family: PixelSCBold, sans-serif;
      font-size: 20px;
      line-height: 1;
      margin: 0 8px;
      padding: 5px 12px 7px;
      white-space: nowrap
    }

    @media only screen and (min-width:992px) {
      .marketplace-buy-item-page .item-main-wrapper .item-quantity-price-wrapper .item-price {
        margin: 0 8px 0 4px
      }
    }

    .marketplace-buy-item-page .item-main-wrapper .item-quantity-price-wrapper .item-price.loading {
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: center;
      padding: 7px 12px
    }

    .marketplace-buy-item-page .item-main-wrapper .item-quantity-price-wrapper .item-info {
      cursor: pointer;
      min-height: 20px;
      min-width: 20px
    }

    .confirmation-modal {
      max-width: 380px
    }

    .confirmation-modal .confirmation-modal-body {
      background: #2f3045;
      border: 1px solid #6a668a;
      border-radius: 4px;
      padding: 16px 16px 28px
    }

    @media only screen and (min-width:992px) {
      .confirmation-modal .confirmation-modal-body {
        padding: 24px 24px 32px
      }
    }

    .confirmation-modal .confirmation-modal-body .modal-title {
      color: #fff;
      font-family: PixelSCBold, sans-serif;
      font-size: 24px;
      line-height: 1.1;
      margin-bottom: 4px
    }

    .confirmation-modal .confirmation-modal-body .modal-text {
      color: #fff;
      font-family: PixelSC, sans-serif;
      font-size: 20px;
      line-height: 1.1;
      margin-bottom: 24px
    }

    .confirmation-modal .confirmation-modal-body .buttons-wrapper {
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: space-between
    }

    .roller-button.close-btn {
      height: 24px;
      padding: 4px;
      position: absolute;
      right: 8px;
      top: 8px;
      width: 24px
    }

    @media only screen and (min-width:992px) {
      .roller-button.close-btn {
        height: 26px;
        right: 10px;
        top: 10px;
        width: 26px
      }
    }

    .tooltip.show .tooltip-inner.item-info-tooltip-inner {
      -webkit-box-shadow: 0 5px 8px 2px rgba(0, 0, 0, .25);
      box-shadow: 0 5px 8px 2px rgba(0, 0, 0, .25);
      font-size: 16px;
      max-width: 360px
    }

    @media only screen and (min-width:992px) {
      .tooltip.show .tooltip-inner.item-info-tooltip-inner {
        font-size: 14px
      }
    }
  </style>
  <style>
    .confirm-sell-price-modal {
      color: #fff;
      font-family: PixelSC, serif;
      font-size: 20px;
      font-stretch: normal;
      font-style: normal;
      font-weight: 400;
      height: auto;
      letter-spacing: normal;
      line-height: normal;
      max-width: 440px;
      min-width: 320px;
      text-align: left
    }

    .confirm-sell-price-modal .modal-body {
      background-color: #2f3045;
      border: 1px solid #6a668a;
      border-radius: 4px 4px 4px 4px;
      padding: 24px
    }

    .confirm-sell-price-modal .modal-body .title {
      font-family: pixelSCBold, serif;
      font-size: 24px
    }

    .confirm-sell-price-modal .modal-body .info-container .info-divider {
      background-color: #6a668a;
      height: 1px;
      margin: 7px 2px
    }

    .confirm-sell-price-modal .modal-body .info-container .info-row {
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      flex-grow: 1
    }

    .confirm-sell-price-modal .modal-body .info-container .info-row p {
      margin-bottom: 0
    }

    .confirm-sell-price-modal .modal-body .info-container .info-row .info-desc {
      -webkit-box-flex: 1;
      border-left: 1px solid #6a668a;
      border-right: 1px solid #6a668a;
      -ms-flex: 1;
      flex: 1;
      padding-left: 10px
    }

    .confirm-sell-price-modal .modal-body .info-container .info-row .info-val {
      border-right: 1px solid #6a668a;
      padding-right: 10px;
      text-align: right;
      text-transform: uppercase;
      width: 40%
    }

    .confirm-sell-price-modal .modal-body .you-receive-container {
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      background-color: #1f1f2d;
      border-radius: 4px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      font-family: pixelSCBold, serif;
      justify-content: space-between;
      margin: 10px 0;
      padding: 5px 12px 7px
    }

    .confirm-sell-price-modal .modal-body .you-receive-container .you-receive-val {
      text-align: right;
      text-transform: uppercase
    }

    .confirm-sell-price-modal .modal-body .agreement {
      margin-bottom: 15px
    }

    .confirm-sell-price-modal .modal-body .buttons {
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      -webkit-column-gap: 20px;
      -moz-column-gap: 20px;
      column-gap: 20px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: space-between
    }
  </style>
  <style>
    .sell-congrats-modal {
      color: #fff;
      font-size: 20px;
      height: auto;
      max-width: 380px;
      min-width: 320px
    }

    .sell-congrats-modal .modal-body {
      background-color: #2f3045;
      border: 1px solid #6a668a;
      border-radius: 4px 4px 4px 4px;
      padding: 24px
    }

    .sell-congrats-modal .modal-body .title {
      font-family: pixelSCBold, serif;
      font-size: 24px;
      text-align: center
    }

    .sell-congrats-modal .modal-body .description {
      font-family: PixelSC, serif;
      text-align: center
    }

    .sell-congrats-modal .modal-body .content {
      font-family: PixelSC, serif;
      padding-left: 46px;
      padding-right: 46px
    }
  </style>
  <style>
    .marketplace-sell-price-block .price-calculate-wrapper {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      border-top: 1px solid #6a668a;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-direction: column;
      flex-direction: column;
      margin-bottom: 8px;
      margin-top: 16px;
      padding-top: 16px
    }

    @media only screen and (min-width:992px) {
      .marketplace-sell-price-block .price-calculate-wrapper {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        margin-bottom: 18px;
        margin-top: 0
      }
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      margin-bottom: 12px
    }

    @media only screen and (min-width:992px) {
      .marketplace-sell-price-block .price-calculate-wrapper .input-block {
        margin-bottom: 0;
        margin-right: 20px
      }
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper {
      position: relative
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper.grow-size {
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1
    }

    @media only screen and (min-width:992px) {
      .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper.right-divider {
        border-right: 1px solid #6a668a;
        padding-right: 20px
      }
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper:not(:last-child) {
      margin-right: 15px
    }

    @media only screen and (min-width:992px) {
      .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper:not(:last-child) {
        margin-right: 20px
      }
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper .input-label {
      color: #fff;
      font-family: PixelSC, sans-serif;
      font-size: 16px;
      line-height: 1.1;
      margin-bottom: 4px
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper>.input {
      background-color: #1f1f2d;
      border-radius: 4px;
      font-size: 18px;
      min-height: 32px;
      padding: 0 12px
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper>.input-price {
      border: 1px solid #6a668a;
      font-family: PixelSCBold, sans-serif;
      min-width: 150px
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper>.input-quantity {
      min-width: 110px
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper>.expected-pay {
      border: 1px solid #1f1f2d;
      font-family: PixelSC, sans-serif;
      min-width: 190px
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper>.currency-select--is-disabled {
      opacity: .5
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper>.currency-select-container {
      -webkit-box-flex: 0;
      -ms-flex-positive: 0;
      flex-grow: 0;
      min-width: 110px
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper>.currency-select-container .currency-select__control {
      background-color: #1f1f2d;
      border: 1px solid #6a668a;
      border-radius: 4px;
      max-height: 32px;
      min-height: 32px
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper>.currency-select-container .currency-select__control .currency-select__value-container {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-column-gap: 6px;
      -moz-column-gap: 6px;
      column-gap: 6px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper>.currency-select-container .currency-select__control .currency-select__value-container .currency-select__single-value {
      color: #fff;
      font-family: PixelSCBold, sans-serif;
      font-size: 18px
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper>.currency-select-container .currency-select__control .currency-select__indicators {
      max-height: 32px
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper>.currency-select-container .currency-select__control .currency-select__indicators .currency-select__indicator-separator {
      display: none
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper>.currency-select-container .currency-select__control .currency-select__indicators .currency-select__dropdown-indicator {
      padding: 3px
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper>.currency-select-container .currency-select__menu {
      background-color: #1f1f2d;
      border: 1px solid #6a668a;
      border-radius: 4px
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper>.currency-select-container .currency-select__menu .currency-select__option {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      color: #fff;
      -webkit-column-gap: 6px;
      -moz-column-gap: 6px;
      column-gap: 6px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      font-family: PixelSCBold, sans-serif;
      font-size: 18px;
      padding: 0 12px 3px
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper>.currency-select-container .currency-select__menu .currency-select__option--is-focused,
    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper>.currency-select-container .currency-select__menu .currency-select__option:hover {
      background-color: #6a668a;
      color: #fff
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper>.currency-select-container .currency-select__menu .currency-select__option--is-selected {
      background-color: #03e1e4;
      color: #000
    }

    .marketplace-sell-price-block .price-calculate-wrapper .input-block .input-wrapper .price-calculate-wrapper-warning {
      bottom: -15px;
      color: #d53f3f;
      font-family: PixelSC, sans-serif;
      font-size: 16px;
      line-height: 1;
      position: absolute
    }

    .marketplace-sell-price-block .price-calculate-wrapper .sell-button {
      margin-top: 12px;
      max-height: 44px
    }

    @media only screen and (min-width:992px) {
      .marketplace-sell-price-block .price-calculate-wrapper .sell-button {
        margin-top: 2px
      }
    }
  </style>
  <style>
    .marketplace-sell-item-page {
      background-color: #2f3045;
      border: 1px solid #6a668a;
      border-radius: 4px;
      min-height: 480px;
      padding: 12px 16px 24px;
      position: relative
    }

    @media only screen and (min-width:992px) {
      .marketplace-sell-item-page {
        padding: 16px 30px 40px
      }
    }

    .marketplace-sell-item-page .item-loader-layout {
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: center;
      min-height: 480px
    }

    .marketplace-sell-item-page .main-item-title {
      font-family: PixelSCBold, sans-serif;
      font-size: 24px;
      line-height: 1.1;
      margin-bottom: 12px
    }

    @media only screen and (min-width:992px) {
      .marketplace-sell-item-page .main-item-title {
        margin-bottom: 16px
      }
    }

    .marketplace-sell-item-page .item-main-wrapper {
      margin-bottom: 16px
    }

    @media only screen and (min-width:992px) {
      .marketplace-sell-item-page .item-main-wrapper {
        margin-bottom: 36px
      }
    }
  </style>
  <style>
    .marketplace-container {
      padding-bottom: 60px
    }

    @media only screen and (min-width:992px) {
      .marketplace-container {
        padding-bottom: 120px
      }
    }

    .marketplace-container h2,
    .marketplace-container p {
      margin: 0;
      padding: 0
    }

    .marketplace-container .mobile-header {
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      font-family: PixelSCBold, sans-serif;
      font-size: 28px;
      justify-content: space-between;
      padding: 16px 0
    }

    .marketplace-container .mobile-header .back-link {
      color: #fff
    }

    .marketplace-container .mobile-header .icon {
      padding-right: 12px
    }

    .marketplace-container .mobile-header .page-name {
      color: #938c9e
    }

    .marketplace-container .marketplace-header {
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: space-between;
      margin: 0;
      padding: 12px 10px
    }

    .marketplace-container .marketplace-header .info-tooltip-icon-container {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex
    }

    .marketplace-container .marketplace-header .info-tooltip-icon-container .info-icon-block {
      height: 24px;
      margin-right: 12px;
      width: 24px
    }

    @media only screen and (min-width:992px) {
      .marketplace-container .marketplace-header .info-tooltip-icon-container {
        padding: 0
      }
    }

    .marketplace-container .marketplace-title {
      font-family: pixelSCBold, sans-serif;
      font-size: 28px;
      margin-bottom: 0
    }

    .marketplace-container .marketplace-version {
      color: #938c9e;
      font-family: PixelSC, sans-serif;
      font-size: 20px;
      padding-top: 3px
    }

    .marketplace-container .nav-pills-container .link-pill-ico.product-pill {
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      border-radius: 4px;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      cursor: pointer;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      font-family: PixelSCBold, sans-serif;
      font-size: 24px;
      justify-content: space-between;
      margin-bottom: 16px;
      padding: 8px 16px;
      text-transform: none
    }

    @media only screen and (min-width:992px) and (max-width:1200px) {
      .marketplace-container .nav-pills-container .link-pill-ico.product-pill {
        font-size: 20px
      }
    }

    .marketplace-container .nav-pills-container .link-pill-ico.product-pill {
      border: 1px solid #6a668a
    }

    .marketplace-container .nav-pills-container .link-pill-ico.product-pill:hover {
      border: 1px solid #03e1e4
    }

    .marketplace-container .nav-pills-container .link-pill-ico.product-pill.active {
      border: 2px solid #03e1e4;
      padding: 7px 15px
    }

    .marketplace-container .nav-pills-container .link-pill-ico.product-pill.active:hover {
      border: 2px solid #03e1e4
    }

    .marketplace-container .nav-pills-container .link-pill-ico.product-pill .marketplace-nav-disabled-text {
      font-family: PixelSC, sans-serif;
      font-size: 16px;
      line-height: 1;
      margin-left: 8px;
      padding-top: 18px;
      text-transform: uppercase
    }

    .marketplace-container .nav-pills-container .link-pill-ico.product-pill.disabled {
      opacity: .5
    }

    .marketplace-container .nav-pills-container .link-pill-ico.product-pill.disabled:hover {
      background-color: #19171f;
      border: 1px solid #6a668a;
      cursor: not-allowed
    }

    .marketplace-container .nav-pills-container .link-pill-ico .marketplace-nav-image {
      line-height: 1.8;
      padding-right: 12px
    }

    @media only screen and (min-width:992px) and (max-width:1200px) {
      .marketplace-container .nav-pills-container .link-pill-ico .marketplace-nav-image {
        line-height: 2.2
      }
    }
  </style>
  <style type="text/css">
    /* Chart.js */
    /*
 * DOM element rendering detection
 * https://davidwalsh.name/detect-node-insertion
 */
    @keyframes chartjs-render-animation {
      from {
        opacity: 0.99;
      }

      to {
        opacity: 1;
      }
    }

    .chartjs-render-monitor {
      animation: chartjs-render-animation 0.001s;
    }

    /*
 * DOM element resizing detection
 * https://github.com/marcj/css-element-queries
 */
    .chartjs-size-monitor,
    .chartjs-size-monitor-expand,
    .chartjs-size-monitor-shrink {
      position: absolute;
      direction: ltr;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      overflow: hidden;
      pointer-events: none;
      visibility: hidden;
      z-index: -1;
    }

    .chartjs-size-monitor-expand>div {
      position: absolute;
      width: 1000000px;
      height: 1000000px;
      left: 0;
      top: 0;
    }

    .chartjs-size-monitor-shrink>div {
      position: absolute;
      width: 200%;
      height: 200%;
      left: 0;
      top: 0;
    }
  </style>
  <meta name="keywords" content="" data-react-helmet="true">
  <style>
    .box-present-modal .present-modal-wrapper {
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      align-items: center;
      background-image: -webkit-gradient(linear, left top, left bottom, from(#161829), to(#090b14));
      background-image: linear-gradient(180deg, #161829, #090b14);
      border: 1px solid #6a668a;
      border-radius: 4px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      height: 560px;
      justify-content: center;
      padding: 40px 0;
      position: relative
    }

    .box-present-modal .present-modal-wrapper .present-modal-close {
      position: absolute;
      right: 10px;
      top: 10px
    }

    .box-present-modal .present-modal-wrapper .present-modal-close .close-menu-btn .close-btn-text {
      padding: 6px
    }

    .box-present-modal .present-modal-wrapper .lootbox-block {
      position: relative
    }

    .box-present-modal .present-modal-wrapper .lootbox-block .background-light {
      opacity: 0;
      position: absolute;
      top: 5%;
      -webkit-transform: scale(1.1);
      transform: scale(1.1)
    }

    @media only screen and (max-width:375px) {
      .box-present-modal .present-modal-wrapper .lootbox-block .background-light {
        -webkit-transform: scale(.9);
        transform: scale(.9)
      }
    }

    .box-present-modal .present-modal-wrapper .lootbox-block .background-light.enable {
      opacity: .5;
      -webkit-transition: all .4s ease-in;
      transition: all .4s ease-in
    }

    .box-present-modal .present-modal-wrapper .lootbox-block .background-light.enable .light {
      -webkit-animation: background-light 8s linear infinite;
      animation: background-light 8s linear infinite
    }

    .box-present-modal .present-modal-wrapper .lootbox-block .lootbox-bonus {
      -ms-interpolation-mode: nearest-neighbor;
      image-rendering: -webkit-optimize-contrast;
      image-rendering: -o-pixelated;
      image-rendering: pixelated;
      left: 36%;
      opacity: 0;
      position: absolute;
      top: 25%;
      -webkit-transform: scale(2.5);
      transform: scale(2.5);
      z-index: 2
    }

    .box-present-modal .present-modal-wrapper .lootbox-block .lootbox-bonus.component {
      left: 43%;
      top: 31%
    }

    .box-present-modal .present-modal-wrapper .lootbox-block .lootbox-bonus.power {
      left: 34%;
      top: 26%;
      -webkit-transform: scale(2);
      transform: scale(2)
    }

    @media only screen and (max-width:375px) {
      .box-present-modal .present-modal-wrapper .lootbox-block .lootbox-bonus {
        -webkit-transform: scale(2.2);
        transform: scale(2.2)
      }
    }

    .box-present-modal .present-modal-wrapper .lootbox-block .lootbox-bonus.enable {
      opacity: 1;
      -webkit-transition: all .4s ease-in;
      transition: all .4s ease-in
    }

    .box-present-modal .present-modal-wrapper .lootbox-block .bonus-info {
      left: 50%;
      opacity: 0;
      position: absolute;
      top: -10%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
      z-index: 3
    }

    .box-present-modal .present-modal-wrapper .lootbox-block .bonus-info h2,
    .box-present-modal .present-modal-wrapper .lootbox-block .bonus-info p {
      margin: 0;
      padding: 0
    }

    .box-present-modal .present-modal-wrapper .lootbox-block .bonus-info .info-title {
      font-family: PixelSCBold, sans-serif;
      font-size: 40px;
      text-align: center;
      white-space: nowrap
    }

    .box-present-modal .present-modal-wrapper .lootbox-block .bonus-info .info-description {
      font-family: PixelSC, sans-serif;
      font-size: 24px;
      text-align: center
    }

    .box-present-modal .present-modal-wrapper .lootbox-block .bonus-info.enable {
      opacity: 1;
      -webkit-transition: all .4s ease-in;
      transition: all .4s ease-in
    }

    @media only screen and (max-width:375px) {
      .box-present-modal .present-modal-wrapper .lootbox-block .lootbox-sprite-block {
        -ms-interpolation-mode: nearest-neighbor;
        image-rendering: -webkit-optimize-contrast;
        image-rendering: -o-pixelated;
        image-rendering: pixelated;
        -webkit-transform: scale(.8);
        transform: scale(.8)
      }
    }

    .box-present-modal .present-modal-wrapper .lootbox-block .collect-button {
      left: 50%;
      opacity: 0;
      position: absolute;
      top: 95%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
      width: 75%;
      z-index: 2
    }

    @media only screen and (max-width:375px) {
      .box-present-modal .present-modal-wrapper .lootbox-block .collect-button {
        padding: 0 35px
      }
    }

    .box-present-modal .present-modal-wrapper .lootbox-block .collect-button .btn-gold:hover {
      opacity: .85
    }

    .box-present-modal .present-modal-wrapper .lootbox-block .collect-button.enable {
      opacity: 1;
      -webkit-transition: all .4s ease-in;
      transition: all .4s ease-in
    }
  </style>
  <style>
    .event-container {
      margin-top: 20px;
      padding-bottom: 80px
    }

    @media screen and (min-width:992px) {
      .event-container {
        margin-top: 0
      }
    }

    .event-container p {
      word-wrap: break-word;
      -webkit-hyphens: auto;
      -ms-hyphens: auto;
      hyphens: auto;
      margin: 0
    }

    .event-container .event-top-banner-wrapper {
      margin-bottom: 32px;
      overflow: hidden;
      text-align: center;
      width: 100%
    }

    .event-container .event-top-banner-wrapper .event-top-banner {
      -ms-interpolation-mode: nearest-neighbor;
      image-rendering: -webkit-optimize-contrast;
      image-rendering: -o-pixelated;
      image-rendering: pixelated;
      margin: 5% 0;
      -webkit-transform: scale(1.6);
      transform: scale(1.6)
    }

    @media (min-width:576px) {
      .event-container .event-top-banner-wrapper .event-top-banner {
        margin: 3% 0;
        -webkit-transform: scale(1.3);
        transform: scale(1.3)
      }
    }

    @media screen and (min-width:992px) {
      .event-container .event-top-banner-wrapper .event-top-banner {
        margin: 0;
        -webkit-transform: scale(1);
        transform: scale(1);
        width: 100%
      }
    }

    .event-container .gradient {
      background-image: -webkit-gradient(linear, left bottom, left top, from(#181928), color-stop(#262840), to(#181928));
      background-image: linear-gradient(0deg, #181928, #262840, #181928)
    }

    .event-container .pedestal-container {
      margin-bottom: 24px;
      position: relative;
      text-align: center
    }

    .event-container .pedestal-container .main-item-container {
      bottom: 46%;
      left: 50%;
      position: absolute;
      -webkit-transform: translateX(-50%) scale(1.35);
      transform: translateX(-50%) scale(1.35);
      z-index: 1
    }

    .event-container .pedestal-container .main-item-container .collection-product-level-img-size-2 {
      left: -2px;
      position: absolute;
      top: 17px;
      z-index: 1
    }

    .event-container .pedestal-container .main-item-container .collection-product-level-img-size-1 {
      left: 25px;
      position: absolute;
      top: 26px;
      z-index: 1
    }

    .event-container .pedestal-container .main-item-container .rating-star-wrapper {
      line-height: 1
    }

    .event-container .pedestal-container .main-item-container .rating-star-wrapper .star {
      max-height: 15px;
      max-width: 15px
    }

    @media screen and (min-width:500px) {
      .event-container .pedestal-container .main-item-container {
        bottom: 54%;
        -webkit-transform: translateX(-50%) scale(1.72);
        transform: translateX(-50%) scale(1.72)
      }
    }

    @media screen and (min-width:992px) {
      .event-container .pedestal-container .main-item-container {
        bottom: 52%;
        -webkit-transform: translateX(-50%) scale(1.72);
        transform: translateX(-50%) scale(1.72)
      }
    }

    @media screen and (min-width:1200px) {
      .event-container .pedestal-container .main-item-container {
        bottom: 56%;
        -webkit-transform: translateX(-50%) scale(2);
        transform: translateX(-50%) scale(2)
      }
    }

    .event-container .pedestal-container .main-item-container .main-item-img {
      -ms-interpolation-mode: nearest-neighbor;
      image-rendering: -webkit-optimize-contrast;
      image-rendering: -o-pixelated;
      image-rendering: pixelated
    }

    .event-container .pedestal-container .main-item-container .main-item-img.rack {
      padding-bottom: 25px;
      scale: .9
    }

    .event-container .pedestal-container .main-item-container .main-item-img.hat {
      padding-bottom: 20px;
      scale: .6
    }

    .event-container .pedestal-container .main-item-container .main-item-img.trophy {
      padding-bottom: 15px;
      scale: .6
    }

    .event-container .pedestal-container .main-item-container .main-item-img.appearance,
    .event-container .pedestal-container .main-item-container .main-item-img.loot_box {
      padding-bottom: 25px;
      scale: .9
    }

    .event-container .event-info-container {
      background-color: #2f3045;
      border: 1px solid #6a668a;
      border-radius: 4px;
      padding: 16px 16px 32px
    }

    @media screen and (min-width:992px) {
      .event-container .event-info-container {
        padding: 24px 32px 32px
      }
    }

    .event-container .event-info-container .event-description-wrapper {
      font-family: PixelSC, sans-serif;
      font-size: 20px;
      font-weight: 200;
      line-height: 24px;
      margin-bottom: 24px;
      text-align: center
    }

    .event-container .event-info-container .event-description-wrapper .event-item-info .item-name {
      font-family: PixelSCBold, sans-serif;
      font-size: 32px;
      margin-bottom: 8px;
      text-align: center
    }

    .event-container .event-info-container .event-description-wrapper .event-item-info .item-info {
      font-family: PixelSCBold, sans-serif;
      font-size: 20px;
      text-align: center
    }

    .event-container .event-info-container .event-inner-title {
      font-family: PixelSCBold, sans-serif;
      font-size: 24px;
      margin: 16px 0;
      text-align: center
    }

    .event-container .event-info-container .event-inner-description {
      margin-bottom: 24px
    }

    .event-container .event-info-container .event-inner-description .event-description {
      margin-bottom: 16px
    }

    .event-container .bolded-text {
      font-family: PixelSCBold, sans-serif
    }

    .event-container .accent-color {
      color: #03e1e4
    }

    .event-container .gold-color {
      color: #ffdc00
    }

    .event-container .progress-container {
      margin-bottom: 16px;
      position: relative
    }

    @media screen and (min-width:992px) {
      .event-container .progress-container {
        margin-bottom: 24px
      }
    }

    .event-container .progress-container .progress-block {
      background-color: #662121;
      font-family: PixelSC, sans-serif;
      font-size: 24px;
      height: auto;
      min-height: 32px
    }

    .event-container .progress-container .progress-block .progress-bar {
      background-color: #b83939
    }

    .event-container .progress-container .progress-number {
      font-family: PixelSC, sans-serif;
      font-size: 24px;
      left: 50%;
      position: absolute;
      top: 50%;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%)
    }

    .event-container .change-quantity-wrapper {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      margin: 0 auto;
      max-width: 314px
    }

    .event-container .change-quantity-wrapper .total-price {
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-box-flex: 1;
      align-items: center;
      background-color: #181928;
      border-radius: 4px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex: 1 auto;
      flex: 1 auto;
      font-family: PixelSCBold, sans-serif;
      font-size: 20px;
      padding-left: 12px
    }

    @media only screen and (min-width:991px) and (max-width:1200px) {
      .event-container .change-quantity-wrapper .total-price {
        font-size: 12px;
        padding-left: 6px
      }
    }

    .event-container .change-quantity-wrapper .total-price .product-price-title {
      color: #03e1e4
    }

    .event-container .limit-text-wrapper {
      border-bottom: 1px solid #6a668a;
      padding-bottom: 24px
    }

    @media only screen and (max-width:992px) {
      .event-container .limit-text-wrapper {
        padding-bottom: 16px
      }
    }

    .event-container .limit-text-wrapper .limit-text {
      color: #03e1e4;
      font-family: Source Sans Pro, sans-serif;
      font-size: 15px;
      padding-top: 8px;
      text-align: center
    }

    .event-container .miner-buy-button {
      margin: 24px auto 20px;
      text-align: center
    }

    @media only screen and (min-width:992px) {
      .event-container .miner-buy-button {
        max-width: 256px
      }
    }

    .event-container .miner-buy-button .tree-dimensional-button>span {
      padding-bottom: 10px;
      padding-top: 10px
    }

    .event-container .miner-buy-button .action-buttons {
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: space-between;
      padding-bottom: 3px
    }

    .event-container .miner-buy-button .action-buttons .tree-dimensional-button:first-child {
      margin-right: 10px
    }

    .event-container .table-loader {
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: center;
      padding: 120px 0
    }
  </style>
  <meta name="description" content="❰❰❰ RollerCoin ❱❱❱ is the first online bitcoin mining simulator game ☛ Start Playing Now! ☚ Earn real bitcoins while enjoying the game and competing with your friends." data-react-helmet="true">
  <meta property="og:title" content="RollerCoin – Online Bitcoin Mining Simulator Game" data-react-helmet="true">
  <meta property="og:description" content="❰❰❰ RollerCoin ❱❱❱ is the first online bitcoin mining simulator game ☛ Start Playing Now! ☚ Earn real bitcoins while enjoying the game and competing with your friends." data-react-helmet="true">
  <link rel="canonical" href="https://rollercoin.com/storage/collection" data-react-helmet="true">
  <link rel="alternate" href="https://rollercoin.com/storage/collection" hreflang="x-default" data-react-helmet="true">
  <link rel="alternate" href="https://rollercoin.com/storage/collection" hreflang="en" data-react-helmet="true">
  <link rel="alternate" href="https://rollercoin.com/cn/storage/collection" hreflang="zh-cn" data-react-helmet="true">
</head>

<body class="" data-new-gr-c-s-check-loaded="14.1101.0" data-gr-ext-installed="">
  <script type="text/javascript">
    document.body.classList.add("loader-visible");
    window.addEventListener('load', function() {
      setTimeout(function() {
        document.getElementById('preLoader').classList.remove('dom-loading');
        document.body.classList.remove("loader-visible");
      }, 550);
    });
  </script>
  <script type="text/javascript">
    (function() {
      function initMetricsOnEvent() {
        initGTM();
        initBaidu();
        document.removeEventListener("scroll", initMetricsOnEvent);
        document.removeEventListener("mousemove", initMetricsOnEvent);
        document.removeEventListener("touchstart", initMetricsOnEvent);
      }

      function initBaidu() {
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?ab3ef5cd88d6d875a1a7c0bb981aec24";
          var s = document.getElementsByTagName("script")[0];
          s.parentNode.insertBefore(hm, s);
        })();
      }

      function initGTM() {
        if (window.gtmDidInit) {
          return false;
        }
        window.gtmDidInit = true; // flag to ensure script does not get added to DOM more than once.
        const script = document.createElement("script");
        script.type = "text/javascript";
        script.async = true;
        script.onload = () => {
          if (!window.dataLayer) {
            window.dataLayer = [];
          }
          // window.dataLayer.push({event: "pageview"});
          window.dataLayer.push({
            event: "gtm.js",
            "gtm.start": new Date().getTime(),
            "gtm.uniqueEventId": 0
          });
        }; // this part ensures PageViews is always tracked
        script.src = "https://www.googletagmanager.com/gtm.js?id=" + "GTM-5FX4SDJ";

        document.head.appendChild(script);
      }

      document.addEventListener('DOMContentLoaded', function() {
        /** init gtm after 3500 ms - this could be adjusted */
        setTimeout(initMetricsOnEvent, 3500);
      });
      document.addEventListener("scroll", initMetricsOnEvent);
      document.addEventListener("mousemove", initMetricsOnEvent);
      document.addEventListener("touchstart", initMetricsOnEvent);
    })();
  </script>
  <div class="container-loader gray-bg" id="preLoader">
    <div class="loader-main-page">
      <img src="/static/img/icon/hamster_loader.gif?v=1.0.11" class="loader-img" alt="hamster loader">
    </div>
  </div>
  <div id="root">
    <div class="wrapper" style="">
      <div class="content">
        <header class="rollercoin-header">
          <div class="main-header-container container-fluid">
            <div class="left-block-main-menu block-main-menu"><a class="logo-link" href="/"><img src="/static/images/hamster.7e32e75ae502ae0e83ef..svg" width="155" height="130" alt="hamster"></a>
              <div class="wallet-info-container">
                <div class="wallet-link"><a class="tree-dimensional-button btn-default " href="/wallet"><span class="btn-content"><img src="/static/img/header/wallet.svg" alt="wallet"></span></a></div>
                <div class="total-balance">
                  <div class="rollercoin-select-container w-100 css-b62m3t-container"><span id="react-select-2-live-region" class="css-7pg0cj-a11yText"></span><span aria-live="polite" aria-atomic="false" aria-relevant="additions text" class="css-7pg0cj-a11yText"></span>
                    <div class="rollercoin-select__control css-1s2u09g-control">
                      <div class="react-select-option-with-image rollercoin-select__value-container rollercoin-select__value-container--has-value css-1d8n9bt">
                        <div class="lazyload-wrapper "><img src="/static/img/wallet/trx.svg?v=1.1" alt="[object Object]" width="20" height="20">
                          <div class="react-select-option-inner">
                            <div class="rollercoin-select__single-value css-qc6sy-singleValue">
                              <p><span>10</span><span>.716636<small class="btc-small-numbers">28</small></span></p>
                            </div><input id="react-select-2-input" tabindex="0" inputmode="none" aria-autocomplete="list" aria-expanded="false" aria-haspopup="true" role="combobox" aria-readonly="true" class="css-1hac4vs-dummyInput" value="">
                          </div>
                        </div>
                      </div>
                      <div class="rollercoin-select__indicators css-1wy0on6"><span class="rollercoin-select__indicator-separator css-1okebmr-indicatorSeparator"></span>
                        <div class="rollercoin-select__indicator rollercoin-select__dropdown-indicator css-tlfecz-indicatorContainer" aria-hidden="true"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-8mmkcg">
                            <path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
                          </svg></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="center-block-main-menu block-main-menu">
              <div class="control-container"><a class="tree-dimensional-button btn-default " href="/game"><span class="btn-content"><img class="btn-icon" src="/static/images/home_icon.e6977f6ba9a6b1c62bef..svg" alt="home"></span></a><a class="tree-dimensional-button btn-default " href="/game/market"><span class="btn-content"><img class="btn-icon" src="/static/images/store_icon.b39cb56dcd3ce622e8c1..svg" alt="cart"></span></a><a class="tree-dimensional-button btn-cyan with-text-button " href="/game/choose_game"><span class="btn-content"><img src="/static/images/gamepad_icon.e92c67f9d4fe5ae8fd3d..svg" alt="gamepad"><span class="btn-text">Games</span></span></a><a class="tree-dimensional-button btn-gold with-text-button " href="/game/market/event-pass"><span class="btn-content"><span class="red-dot"></span><img src="/static/images/crown_icon.8a7c8e4cb00e98c12616..svg" alt="gamepad"><span class="btn-text">E-Pass</span></span></a><a class="tree-dimensional-button btn-default " href="/marketplace"><span class="btn-content"><img class="btn-icon" src="/static/images/marketplace_icon.b950b9786ac3ba5b5e2b..svg" alt="marketplace"></span></a><a class="tree-dimensional-button btn-default  active" href="/storage"><span class="btn-content"><img class="btn-icon" src="/static/images/storage_icon.8ffccd4170d8f4fe2b47..svg" alt="more"></span></a></div>
            </div>
            <div class="right-block-main-menu block-main-menu">
              <div class="user-information-container">
                <div class="user-icon-header">
                  <div class="user-circle"><a href="/profile">
                      <div class="mask-circle"><img src="https://avatars.rollercoin.com/static/avatars/thumbnails/50/5fe4d64094bbca0010efe9b7.png?v=1617195201649" alt="ico" width="50" height="50" class="avatar-icon"></div>
                    </a></div>
                </div>
                <div class="user-name-position-header">
                  <div class="top-block"><a href="/profile">
                      <p id="user-name">BAYU SAPP</p>
                    </a></div>
                  <div class="bottom-block"><a class="rate-find" href="/rank?find-me"><span id="user-position" class="danger-text"><img src="/static/img/icon/arrow_down.svg" alt="rate"> 1074 <sup>th</sup></span> <span>/</span> <span id="total-users">3528787</span></a></div>
                </div>
              </div>
              <div class="wrapper-vertical-header"></div>
              <div class="open-menu">
                <div class="tree-dimensional-button btn-default open-menu-btn"><span><img class="open-menu-icon" src="/static/img/header/open_menu.svg" alt="open_menu"></span></div>
              </div>
            </div>
          </div>
          <div class="fixed-navbar-container">
            <div class="header-main-menu">
              <p>Menu</p>
              <div class="tree-dimensional-button close-menu-btn btn-default"><span><img class="header-main-menu-image" src="/static/img/header/close_menu.svg" alt="close_menu"></span></div>
            </div>
            <div class="vertical-menu">
              <div class="menu-item"><a href="/game"><img src="/static/img/header/home_small.svg" alt="home_small">Home</a></div>
              <div class="menu-item"><a href="/wallet"><img src="/static/img/icon/wallet.svg" alt="wallet">Wallets</a></div>
              <div class="menu-item"><a href="/profile"><img src="/static/img/icon/contact.svg" alt="contact">My profile</a></div>
              <div class="menu-item"><a href="/hall-of-fame"><img src="/static/img/header/icon_cup.svg" alt="Hall of fame">Top contributors</a></div>
              <div class="menu-item"><a href="/blog"><img src="/static/img/header/icon_blog.svg" alt="icon_blog">Blog</a></div>
              <div class="menu-item"><a href="/rank"><img src="/static/img/icon/rank.svg" alt="rank">Leaderboard</a></div>
              <div class="menu-item"><a href="/offerwall"><img src="/static/img/icon/offerwall.svg" alt="offerwall">Task Wall</a></div>
              <div class="menu-item"><a href="/what-is-rollertoken"><img src="/static/img/icon/rc.svg" alt="what is RLT">What is RLT</a></div>
              <div class="menu-item"><a href="/referral/stats"><img src="/static/img/icon/notice.svg" alt="notice">Referral program</a></div>
              <div class="menu-item"><button class="menu-item-logout"><img src="/static/img/icon/exit.svg" alt="exit">Logout</button></div>
            </div>
          </div>
          <div class="Toastify"></div>
        </header>
        <div class="storage-container container">
          <div class="row">
            <div class="col-12">
              <div class="info-tooltip-icon-container">
                <div class="info-icon-block" id="storageTooltipId"><img class="info-icon" src="/static/images/info_icon_round.5369164a659bb076c8d6..svg" alt="info img" width="24" height="24"></div>
                <h1 class="storage-title">Storage</h1>
              </div>
            </div>
            <div class="nav-pills-container col-12 col-lg-3">
              <ul class="flex-column nav-pills w-100 nav nav-pills">
                <li class="nav-item"><a class=" link-pill-ico product-pill nav-link" href="/storage/merge">
                    <div class="d-flex">
                      <div class="storage-nav-image"><img src="/static/images/wrench.7b94d078043b4b4840aa..svg" width="32" height="32" alt="merge"></div><span>Merge</span>
                    </div>
                  </a></li>
                <li class="nav-item"><a class=" link-pill-ico product-pill nav-link" href="/storage/inventory">
                    <div class="d-flex">
                      <div class="storage-nav-image"><img src="/static/images/inventory.b0d34aa4caa8ca8cc69a..svg" width="32" height="32" alt="inventory"></div><span>Inventory</span>
                    </div>
                  </a></li>
                <li class="nav-item"><a class="active link-pill-ico product-pill nav-link" href="/storage/collection">
                    <div class="d-flex">
                      <div class="storage-nav-image"><img src="/static/images/reward.6e9836544a86c0314b07..svg" width="32" height="32" alt="collection"></div><span>Collection</span>
                    </div><span class="bonus-percent">+165.2%</span>
                  </a></li>
              </ul>
            </div>
            <div class="col-12 col-lg-9">
              <div class="collection-page no-gutters row">
                <div class="col-12">
                  <div class="info-block-with-icon-container">
                    <div class="info-icon-block"><img class="info-icon" src="/static/images/info_icon_big_round.ce8ffcaf376ebeba241b..svg" alt="info img" width="24" height="24"></div>
                    <div class="info-text-wrapper open-tips">
                      <p class="info-text">Here you can view the miners you've received and merged, and the ones you have not yet.</p>
                    </div>
                  </div>
                  <div class="collection-title-wrapper">
                    <h2 class="collection-title">Total bonus power <span class="collection-value">+165.2%</span></h2>
                  </div>
                  <p class="collection-description">Collect unique miners and get bonus power to your total power</p>
                  <div class="collection-tab-panel">
                    <ul class="nav nav-tabs">
                      <li class="nav-item"><a class="active nav-link"><span class="tab-text"><img class="miner-img" src="https://rollercoin.com/static/images/gold_miner.32d4f01c1252342798db..svg" alt="Gold miner">Merge <span class="miners-value">45/1293</span></span></a></li>
                      <li class="nav-item"><a class="nav-link"><span class="tab-text"><img class="miner-img" src="/static/images/basic_miner.39e37c9f62068115758b..svg" alt="Basic miner">Basic <span class="miners-value">110/253</span></span></a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active">
                        <div class="collection-body-wrapper">
                          <div class="collection-filter">
                            <div class="select-filters-wrapper row">
                              <div class="col-12 col-lg-4">
                                <div class="no-gutters row">
                                  <div class="select-filter-container w-100 css-b62m3t-container"><span id="react-select-11-live-region" class="css-7pg0cj-a11yText"></span><span aria-live="polite" aria-atomic="false" aria-relevant="additions text" class="css-7pg0cj-a11yText"></span>
                                    <div class="select-filter__control css-1s2u09g-control">
                                      <div class="select-filter__value-container select-filter__value-container--has-value css-1d8n9bt">
                                        <div class="select-filter__single-value css-qc6sy-singleValue">Bonus: High - Low</div><input id="react-select-11-input" tabindex="0" inputmode="none" aria-autocomplete="list" aria-expanded="false" aria-haspopup="true" role="combobox" aria-readonly="true" class="css-1hac4vs-dummyInput" value="">
                                      </div>
                                      <div class="select-filter__indicators css-1wy0on6"><span class="select-filter__indicator-separator css-1okebmr-indicatorSeparator"></span>
                                        <div class="select-filter__indicator select-filter__dropdown-indicator css-tlfecz-indicatorContainer" aria-hidden="true"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-8mmkcg">
                                            <path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
                                          </svg></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-2 offset-6">
                                <div class="filter-short-container no-gutters row">
                                  <div class="select-filter-container w-100 css-b62m3t-container"><span id="react-select-12-live-region" class="css-7pg0cj-a11yText"></span><span aria-live="polite" aria-atomic="false" aria-relevant="additions text" class="css-7pg0cj-a11yText"></span>
                                    <div class="select-filter__control css-1s2u09g-control">
                                      <div class="select-filter__value-container select-filter__value-container--has-value css-1d8n9bt">
                                        <div class="select-filter__single-value css-qc6sy-singleValue">48</div><input id="react-select-12-input" tabindex="0" inputmode="none" aria-autocomplete="list" aria-expanded="false" aria-haspopup="true" role="combobox" aria-readonly="true" class="css-1hac4vs-dummyInput" value="">
                                      </div>
                                      <div class="select-filter__indicators css-1wy0on6"><span class="select-filter__indicator-separator css-1okebmr-indicatorSeparator"></span>
                                        <div class="select-filter__indicator select-filter__dropdown-indicator css-tlfecz-indicatorContainer" aria-hidden="true"><svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-8mmkcg">
                                            <path d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"></path>
                                          </svg></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="collection-container row">
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.55%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="https://rollercoin.com/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="63c013458606868c5f347908" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/63c013458606868c5f347908.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Chattanooga Choo</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">53.130 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">11232</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Yes, yes, track twenty-nine! Boy, you can gimme a shine! Choo-Choo, Miners!</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Chattanooga Choo</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x847</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x846</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x846</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.55%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="6399c3811c483a58f70e9d76" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/6399c3811c483a58f70e9d76.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Sweets Stealer</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">60.900 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">1270</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Please do not spare any candies for him! He will turn them into shiny coins for you.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Sweets Stealer</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x845</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x844</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x844</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+1.66%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_3.png?v=1.0.0" width="22" height="16" alt="2"><img alt="6399c3451c483a58f70e99f6" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/6399c3451c483a58f70e99f6.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Helipop</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">541.065 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">683</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">No need to learn any stunts - this maple baby will work for you and produce money without any physical trauma!</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Helipop</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Hashboard</p>
                                        <p class="count">x410</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Fan</p>
                                        <p class="count">x416</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Wire</p>
                                        <p class="count">x409</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+2.08%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_4.png?v=1.0.0" width="22" height="16" alt="3"><img alt="6399c3411c483a58f70e99be" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/6399c3411c483a58f70e99be.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Disco-Roll</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">657.090 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">383</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Saturday night fever now available 24/7! Place it on the top shelf of your rack and PARTY!</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Disco-Roll</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(3, 225, 228);">Rare</span>Hashboard</p>
                                        <p class="count">x25</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(3, 225, 228);">Rare</span>Fan</p>
                                        <p class="count">x263</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(3, 225, 228);">Rare</span>Wire</p>
                                        <p class="count">x226</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.52%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_4.png?v=1.0.0" width="22" height="16" alt="3"><img alt="631f7b6f8238ed283a2352bb" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f7b6f8238ed283a2352bb.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Mergedge</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">69.510 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">6456</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Miner imposed by the developers. Grab the Merge Starter Pack and make it powerful!</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Mergedge</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(3, 225, 228);">Rare</span>Hashboard</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(3, 225, 228);">Rare</span>Fan</p>
                                        <p class="count">x12</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(3, 225, 228);">Rare</span>Wire</p>
                                        <p class="count">x11</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.42%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_3.png?v=1.0.0" width="22" height="16" alt="2"><img alt="631f7b6e8238ed283a2352ae" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f7b6e8238ed283a2352ae.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Mergedge</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">26.460 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">24117</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Miner imposed by the developers. Grab the Merge Starter Pack and make it powerful!</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Mergedge</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Hashboard</p>
                                        <p class="count">x10</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Fan</p>
                                        <p class="count">x10</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Wire</p>
                                        <p class="count">x9</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+1.66%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_3.png?v=1.0.0" width="22" height="16" alt="2"><img alt="631f7b538238ed283a235169" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f7b538238ed283a235169.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">The Savantron</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">186.060 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">311</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Come one, come all for the prophet of RollerCoin. Can we find whoever did this? I need to shake their hand. Magic Carnival Series Miner.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">The Savantron</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Hashboard</p>
                                        <p class="count">x157</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Fan</p>
                                        <p class="count">x159</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Wire</p>
                                        <p class="count">x156</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+1.66%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_3.png?v=1.0.0" width="22" height="16" alt="2"><img alt="631f7b488238ed283a2350e7" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f7b488238ed283a2350e7.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">RollerShow</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">620.235 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">138</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">If a thrill is what you need you’re in the right place. Come in and let the Show begin! Magic Carnival Series Miner.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">RollerShow</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Hashboard</p>
                                        <p class="count">x470</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Fan</p>
                                        <p class="count">x477</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Wire</p>
                                        <p class="count">x469</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.79%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="631f7af68238ed283a234d0b" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f7af68238ed283a234d0b.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Dancing Queen</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">204.750 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">2815</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">What is love? It’s the King and Queen laying golden eggs for you!</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Dancing Queen</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x3167</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x3166</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x3166</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.58%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_4.png?v=1.0.0" width="22" height="16" alt="3"><img alt="631f7af38238ed283a234ce4" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f7af38238ed283a234ce4.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Jungle King</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">304.080 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">1094</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Parrots can find hidden coins under the leaves. Take him to your room before a predator hunts him!</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Jungle King</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(3, 225, 228);">Rare</span>Hashboard</p>
                                        <p class="count">x14</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(3, 225, 228);">Rare</span>Fan</p>
                                        <p class="count">x142</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(3, 225, 228);">Rare</span>Wire</p>
                                        <p class="count">x122</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.26%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="631f7a938238ed283a234879" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f7a938238ed283a234879.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Deepdiver</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">32.865 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">18439</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Are you brave enough to descent into the water's fathomless abyss? This miner is one of the ten selected winners of the Miners Art Contest: Underwater Adventures. Created by </p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Deepdiver</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x639</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x638</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x638</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+1.05%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="631f7a728238ed283a2346f3" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f7a728238ed283a2346f3.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Afterparty</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">328.125 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">593</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Grab your cocktail and start a new play-to-earn adventure right now! Beach Party Series Miner.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Afterparty</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x4223</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x4222</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x4222</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.53%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="631f7a618238ed283a234630" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f7a618238ed283a234630.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Mine’n'Bass</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">131.250 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">402</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Feel the rhythm of true mining! A piece of coin is falling in your wallet with every beat! Beach Party Series Miner.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Mine’n'Bass</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x2006</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x2005</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x2005</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.26%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="631f7a568238ed283a2345ae" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f7a568238ed283a2345ae.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Chaise Longue</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">65.625 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">516</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Do nothing and mine coins? That's your new reality, Roller. Just relax and lounge. This miner will do the rest. Beach Party Series Miner.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Chaise Longue</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x1056</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x1055</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x1055</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+1.05%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="631f799b8238ed283a233d0c" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f799b8238ed283a233d0c.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">King of Beasts</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">131.250 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">440</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Do you hear this mighty roar? That is the true king!</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">King of Beasts</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x3167</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x3166</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x3166</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+1.1%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_3.png?v=1.0.0" width="22" height="16" alt="2"><img alt="631f796a8238ed283a233ad0" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f796a8238ed283a233ad0.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">RollerArc SX</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">6.930 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">675</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Long gone prototype miner that was finally uncovered. Season 3 exclusive reward.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">RollerArc SX</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Hashboard</p>
                                        <p class="count">x33</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Fan</p>
                                        <p class="count">x32</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Wire</p>
                                        <p class="count">x32</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.12%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-1" src="/static/img/storage/rarity_icons/level_4.png?v=1.0.0" width="22" height="16" alt="3"><img alt="631f79668238ed283a233a9c" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f79668238ed283a233a9c.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">RollerArc S1</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">3.045 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">41455</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">This simple miner you just found in the closet is the easiest way to begin your mining journey.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">RollerArc S1</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(3, 225, 228);">Rare</span>Hashboard</p>
                                        <p class="count">x1</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(3, 225, 228);">Rare</span>Fan</p>
                                        <p class="count">x4</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(3, 225, 228);">Rare</span>Wire</p>
                                        <p class="count">x3</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.53%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-1" src="/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="631f795e8238ed283a233a41" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f795e8238ed283a233a41.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Jellier</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">52.500 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">1170</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">It’s slimy and shaky. Try to hold!</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Jellier</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x1267</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x1266</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x1266</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.28%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-1" src="/static/img/storage/rarity_icons/level_3.png?v=1.0.0" width="22" height="16" alt="2"><img alt="631f795a8238ed283a233a0d" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f795a8238ed283a233a0d.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Sparkling Light</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">68.985 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">186</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">I hope it’s an xbox.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Sparkling Light</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Hashboard</p>
                                        <p class="count">x126</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Fan</p>
                                        <p class="count">x127</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Wire</p>
                                        <p class="count">x125</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.55%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-1" src="/static/img/storage/rarity_icons/level_3.png?v=1.0.0" width="22" height="16" alt="2"><img alt="631f79548238ed283a2339cc" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f79548238ed283a2339cc.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Wishing Bell</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">137.865 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">172</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Designed by Santa's helpers to bring holiday vibes into your mining room.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Wishing Bell</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Hashboard</p>
                                        <p class="count">x189</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Fan</p>
                                        <p class="count">x191</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Wire</p>
                                        <p class="count">x188</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.28%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-1" src="/static/img/storage/rarity_icons/level_3.png?v=1.0.0" width="22" height="16" alt="2"><img alt="631f794e8238ed283a23398b" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f794e8238ed283a23398b.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Candy Box</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">68.985 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">2101</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Just a small box of chocolates in case you want to make life taste a little bit sweeter.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Candy Box</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Hashboard</p>
                                        <p class="count">x126</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Fan</p>
                                        <p class="count">x127</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Wire</p>
                                        <p class="count">x125</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.26%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-1" src="/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="631f79488238ed283a23393d" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f79488238ed283a23393d.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Purple Snowflake</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">26.250 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">1117</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Softly they flow, where do they go?</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Purple Snowflake</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x845</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x844</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x844</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+1.05%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="631f79378238ed283a23387a" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f79378238ed283a23387a.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">The Evergreen</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">157.500 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">621</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Didn't get time to put up a Christmas tree yet? This miner is decorated with vintage glass ornaments and bells to brighten up your mining room.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">The Evergreen</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x4012</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x4011</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x4011</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+1.58%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-1" src="/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="631f791c8238ed283a233735" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f791c8238ed283a233735.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Gingerbread</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">196.875 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">1143</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">What's Christmas without candies? Get into the full holiday mining spirit with a couple of gingerbreads! Christmas Time Series Miner.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Gingerbread</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x4223</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x4222</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x4222</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.53%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-1" src="/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="631f78c48238ed283a233325" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f78c48238ed283a233325.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Nuc</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">68.250 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">8616</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">A life-bringing nuclear technology is now available in a form of a cute little cracked crystal.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Nuc</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x1689</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x1688</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x1688</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.53%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-1" src="/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="631f78be8238ed283a2332e4" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f78be8238ed283a2332e4.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Drifter</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">63.000 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">645</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Just like the Strider, who turned out to be King Aragorn, this Drifter is much more than the eye can see. All that is gold does not glitter.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Drifter</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x1584</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x1583</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x1583</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+1.05%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="631f78b38238ed283a233262" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f78b38238ed283a233262.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Mycelium</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">91.875 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">180</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Still think that the blue whale is the biggest creature in the world? Actually, a mushroom is, so the mining is better.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Mycelium</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x1900</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x1900</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x1900</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+1.05%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="631f78778238ed283a232f97" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f78778238ed283a232f97.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">DJ Roller</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">223.125 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">2417</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">The music of your victory and your coins rolling to your wallet! Amazing sound and beautiful design. Oh, and it is also a miner.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">DJ Roller</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x4012</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x4011</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x4011</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.55%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-1" src="/static/img/storage/rarity_icons/level_3.png?v=1.0.0" width="22" height="16" alt="2"><img alt="631f77e78238ed283a23290a" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f77e78238ed283a23290a.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">The Glimpse</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">344.610 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">11</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">The best things in life come in small packages. The Glimpse is tiny, yet powerful enough to light up the whole mining room! Perfection Series Miner.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">The Glimpse</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Hashboard</p>
                                        <p class="count">x471</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Fan</p>
                                        <p class="count">x478</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(43, 214, 0);">Uncommon</span>Wire</p>
                                        <p class="count">x470</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+1.05%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="631f77e08238ed283a2328bc" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f77e08238ed283a2328bc.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Prisma</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">367.500 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">165</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Straight edges, vibrant colours and tremendous power. 2-Cell miner with 3 massive coolers to get you to the Moon! Perfection Series Miner.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Prisma</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x7389</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x7388</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x7388</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+3.15%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="631f77d58238ed283a23283a" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f77d58238ed283a23283a.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Perfection</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">1.050 Ph/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">87</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">The PERFECTION is built different. Like clockwork, it’s made of the finest materials and ready for the next level of crypto mining. Perfection Series Miner.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Perfection</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x14778</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x14777</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x14777</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.53%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-1" src="/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="631f77ca8238ed283a2327b8" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f77ca8238ed283a2327b8.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Milly Mini</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">65.625 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">581</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Milly Mini is a pretty and affordable version of Milly Miner. Celebrate this once in a lifetime moment with a brand new Milly Mini miner!</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Milly Mini</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x1373</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x1372</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x1372</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+1.58%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="631f77c58238ed283a232777" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f77c58238ed283a232777.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Milly</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">183.750 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">861</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Milly stands for million. A million users in RollerCoin! Celebrate this once in a lifetime moment with a brand new Milly miner!</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Milly</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x3484</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x3483</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x3483</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+1.05%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-1" src="/static/img/storage/rarity_icons/level_2.png?v=1.0.0" width="22" height="16" alt="1"><img alt="631f77938238ed283a23252e" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/631f77938238ed283a23252e.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Scarabey</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">21.000 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">2223</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Opening the limited Golden Abyss line of miners, the Scarabey is legally the most beautiful miner on the market. Don't be tricked by its cuteness, this golden bug is strong.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">Scarabey</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Hashboard</p>
                                        <p class="count">x212</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Fan</p>
                                        <p class="count">x211</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(221, 221, 221);">Common</span>Wire</p>
                                        <p class="count">x211</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.15%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img alt="61bb6127698d2f88e80c7781" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/61bb6127698d2f88e80c7781.gif?v=1.0.3" class="collection-product-image">
                                    <div class="rating-star-wrapper collection-product-level-img-size-1">
                                      <div class="star-wrapper"><img class="star" src="/static/images/level_star.4ff18517e5e8eed42060..png" alt="Rating star"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">RollerArc S1</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">450 Gh/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">380280</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">This simple miner you just found in the closet is the easiest way to begin your mining journey.</p>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+1.5%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img alt="61bb6127698d2f88e80c7780" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/61bb6127698d2f88e80c7780.gif?v=1.0.3" class="collection-product-image">
                                    <div class="rating-star-wrapper collection-product-level-img-size-2">
                                      <div class="star-wrapper"><img class="star" src="/static/images/level_star.4ff18517e5e8eed42060..png" alt="Rating star"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">RollerArc SX</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">3.000 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">7480</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Long gone prototype miner that was finally uncovered. Season 3 exclusive reward.</p>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.75%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img alt="61bb6126698d2f88e80c7760" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/61bb6126698d2f88e80c7760.gif?v=1.0.3" class="collection-product-image">
                                    <div class="rating-star-wrapper collection-product-level-img-size-1">
                                      <div class="star-wrapper"><img class="star" src="/static/images/level_star.4ff18517e5e8eed42060..png" alt="Rating star"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">TAPEBOY</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">36.600 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">3278</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Reliable and affordable miner with great cost-efficiency. Only available for purchase in Weekly Offers exclusively.</p>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+1.5%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img alt="61bb6126698d2f88e80c775a" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/61bb6126698d2f88e80c775a.gif?v=1.0.3" class="collection-product-image">
                                    <div class="rating-star-wrapper collection-product-level-img-size-2">
                                      <div class="star-wrapper"><img class="star" src="/static/images/level_star.4ff18517e5e8eed42060..png" alt="Rating star"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">TAPEMAN</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">76.800 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">3843</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Reliable and affordable miner with great cost-efficiency. Only available for purchase in Weekly Offers exclusively.</p>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.37%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img alt="61bb6125698d2f88e80c7746" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/61bb6125698d2f88e80c7746.gif?v=1.0.3" class="collection-product-image">
                                    <div class="rating-star-wrapper collection-product-level-img-size-1">
                                      <div class="star-wrapper"><img class="star" src="/static/images/level_star.4ff18517e5e8eed42060..png" alt="Rating star"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">RollerMiner S4</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">3.480 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">22588</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">This is our basic miner, the most popular among newbies. So, if you are new to mining, you should definitely check out this one.</p>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.37%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img alt="61bb6125698d2f88e80c7745" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/61bb6125698d2f88e80c7745.gif?v=1.0.3" class="collection-product-image">
                                    <div class="rating-star-wrapper collection-product-level-img-size-1">
                                      <div class="star-wrapper"><img class="star" src="/static/images/level_star.4ff18517e5e8eed42060..png" alt="Rating star"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">RollerMiner S7</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">3.960 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">18136</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">The famous S7 model is where mining starts getting addictive. It is much more powerful as the basic one and will be your first serious purchase you will remember.</p>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.75%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img alt="61bb6125698d2f88e80c7744" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/61bb6125698d2f88e80c7744.gif?v=1.0.3" class="collection-product-image">
                                    <div class="rating-star-wrapper collection-product-level-img-size-1">
                                      <div class="star-wrapper"><img class="star" src="/static/images/level_star.4ff18517e5e8eed42060..png" alt="Rating star"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Rolleron 741</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">8.190 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">4093</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Now we start talking! Owning one of these, you definitely don’t belong to the beginners anymore.</p>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.75%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img alt="61bb6125698d2f88e80c773f" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/61bb6125698d2f88e80c773f.gif?v=1.0.3" class="collection-product-image">
                                    <div class="rating-star-wrapper collection-product-level-img-size-1">
                                      <div class="star-wrapper"><img class="star" src="/static/images/level_star.4ff18517e5e8eed42060..png" alt="Rating star"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">RollerMiner S5+</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">12.000 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">14422</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Don’t get confused with the model name. This S5+ will leave his younger brother S7 far behind in mining power, but it will cost you.</p>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+0.75%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img alt="61bb6125698d2f88e80c7738" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/61bb6125698d2f88e80c7738.gif?v=1.0.3" class="collection-product-image">
                                    <div class="rating-star-wrapper collection-product-level-img-size-1">
                                      <div class="star-wrapper"><img class="star" src="/static/images/level_star.4ff18517e5e8eed42060..png" alt="Rating star"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">RollerMiner R4</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">18.000 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">17829</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">A middle-class miner for the ambitious part-time crypto enthusiast. Noticeably more powerful than the S5+, this machine will gain you more bitcoins in reward.</p>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+1.5%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img alt="61bb6123698d2f88e80c7733" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/61bb6123698d2f88e80c7733.gif?v=1.0.3" class="collection-product-image">
                                    <div class="rating-star-wrapper collection-product-level-img-size-1">
                                      <div class="star-wrapper"><img class="star" src="/static/images/level_star.4ff18517e5e8eed42060..png" alt="Rating star"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Scarabey</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">24.000 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">662</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Opening the limited Golden Abyss line of miners, the Scarabey is legally the most beautiful miner on the market. Don't be tricked by its cuteness, this golden bug is strong.</p>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container   col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+1.5%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img alt="61bb6123698d2f88e80c7730" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/61bb6123698d2f88e80c7730.gif?v=1.0.3" class="collection-product-image">
                                    <div class="rating-star-wrapper collection-product-level-img-size-1">
                                      <div class="star-wrapper"><img class="star" src="/static/images/level_star.4ff18517e5e8eed42060..png" alt="Rating star"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">Chupacabra</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">42.000 Th/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">5088</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">The legendary creature, surrounded by mystery for centuries. No one ever saw it... until now.</p>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container  shaded col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+3.9%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_6.png?v=1.0.0" width="22" height="16" alt="5"><img alt="64184a83fa82fb9f08b1a716" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/64184a83fa82fb9f08b1a716.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">New Beginnings</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">15.582 Ph/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">0</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Nowruz is the Persian New Year, celebrated on the vernal equinox as a symbol of renewal and rebirth.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">New Beginnings</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(255, 220, 0);">Legendary</span>Hashboard</p>
                                        <p class="count">x7</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(255, 220, 0);">Legendary</span>Fan</p>
                                        <p class="count">x429</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(255, 220, 0);">Legendary</span>Wire</p>
                                        <p class="count">x100</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container  shaded col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+2.6%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_5.png?v=1.0.0" width="22" height="16" alt="4"><img alt="64184a83fa82fb9f08b1a708" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/64184a83fa82fb9f08b1a708.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">New Beginnings</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">5.936 Ph/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">0</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Nowruz is the Persian New Year, celebrated on the vernal equinox as a symbol of renewal and rebirth.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">New Beginnings</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(255, 47, 209);">Epic</span>Hashboard</p>
                                        <p class="count">x14</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(255, 47, 209);">Epic</span>Fan</p>
                                        <p class="count">x56</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(255, 47, 209);">Epic</span>Wire</p>
                                        <p class="count">x53</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collection-card-container  shaded col-12 col-lg-4">
                              <div class="collection-main-wrapper">
                                <div class="collection-product-image-wrapper">
                                  <p class="collection-percent-bonus">Bonus power <span class="collection-bonus-amount">+2.08%</span></p>
                                  <div class="collection-product-item-image-wrapper"><img class="collection-product-level-img-size-2" src="/static/img/storage/rarity_icons/level_4.png?v=1.0.0" width="22" height="16" alt="3"><img alt="64184a82fa82fb9f08b1a6fa" height="126" width="100" src="https://static.rollercoin.com/static/img/market/miners/64184a82fa82fb9f08b1a6fa.gif?v=1.0.3" class="collection-product-image"></div>
                                </div>
                                <div class="collection-product-info">
                                  <p class="collection-product-name" style="color: rgb(255, 220, 0);">New Beginnings</p>
                                  <div class="collection-product-power">
                                    <p class="power-title">Power:</p>
                                    <p class="power-value">2.261 Ph/s</p>
                                  </div>
                                  <div class="collection-product-supply">
                                    <p class="supply-title">Supply:</p>
                                    <p class="supply-value">1</p>
                                  </div>
                                </div>
                              </div>
                              <div class="collection-description-wrapper ">
                                <div class="collection-description-switcher">
                                  <p class="collection-description-switcher-text">Miner details</p>
                                  <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_down.0cac8efa6f72a6baf112..svg" alt="open"></div>
                                </div>
                                <div class="collection-description-block" hidden="">
                                  <div class="description-wrapper">
                                    <p class="description-text">Nowruz is the Persian New Year, celebrated on the vernal equinox as a symbol of renewal and rebirth.</p>
                                    <div class="craft-details-wrapper">
                                      <div class="craft-recipe"><img class="list-img" src="/static/images/list_image.7dc581efb612e8526bfd..svg" alt="List icon">
                                        <p class="recipe-text">Crafting recipe</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item">New Beginnings</p>
                                        <p class="count">x2</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(3, 225, 228);">Rare</span>Hashboard</p>
                                        <p class="count">x58</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(3, 225, 228);">Rare</span>Fan</p>
                                        <p class="count">x615</p>
                                      </div>
                                      <div class="recipe-item">
                                        <p class="item"><span class="rarity" style="color: rgb(3, 225, 228);">Rare</span>Wire</p>
                                        <p class="count">x529</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="collection-description-switcher">
                                    <p class="collection-description-switcher-text">Hide</p>
                                    <div class="lazyload-wrapper "><img class="image" src="/static/images/angle_up.fa1af0597a40ba87f611..svg" alt="hide"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="market-pagination row">
                            <div class="col-6 offset-3 col-lg-4 offset-lg-4"><button type="button" class="tree-dimensional-button btn-default w-100 load-more"><span class="btn-text">Load more</span></button></div>
                            <div class="col-12">
                              <ul class="market-pagination-list">
                                <li class="market-pagination-item"><button type="button" class="market-pagination-btn" disabled="">1</button></li>
                                <li class="market-pagination-item"><button type="button" class="market-pagination-btn">2</button></li>
                                <li class="market-pagination-item"><button type="button" class="market-pagination-btn">3</button></li>
                                <li class="market-pagination-item">
                                  <p class="market-pagination-divider">...</p>
                                </li>
                                <li class="market-pagination-item"><button type="button" class="market-pagination-btn">27</button></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main-footer">
        <div class="top-footer-container">
          <div class="container">
            <div class="align-items-stretch justify-content-between row">
              <div class="footer-block col-12 col-lg-2">
                <div class="header-block">
                  <p>INFORMATION</p>
                </div>
                <div class="body-block">
                  <p><a href="/blog">Blog</a></p>
                  <p><a href="/faq">FAQ</a></p>
                  <p><a href="/how-it-works">How It Works</a></p>
                  <p><a href="/rank">Leaderboard</a></p>
                  <p><a href="/referral">Referral program</a></p>
                  <p><a href="/bitcoin-games">Bitcoin Games</a></p>
                </div>
              </div>
              <div class="footer-block col-12 col-lg-2">
                <div class="body-block body-block-padding-lg">
                  <p><a href="/free-bitcoin">Free Bitcoin</a></p>
                  <p><a href="/free-ethereum">Free Ethereum</a></p>
                  <p><a href="/free-dogecoin">Free Dogecoin</a></p>
                  <p><a href="/bitcoin-faucet">Bitcoin Faucet</a></p>
                  <p><a href="/ethereum-faucet">Ethereum Faucet</a></p>
                  <p><a href="/dogecoin-faucet">Dogecoin Faucet</a></p>
                  <p><a href="/play2earn">Play2Earn</a></p>
                </div>
              </div>
              <div class="footer-block follow-us col-12 col-lg-4">
                <div class="header-block">
                  <p>FOLLOW US</p>
                </div>
                <div class="body-block">
                  <p><a href="https://www.facebook.com/PlayRollerCoin" target="_blank" rel="nofollow noopener noreferrer"><img src="/static/images/fb.b95aa7caa494c30da48f..svg" alt="fb" width="40" height="40"></a></p>
                  <p><a href="https://twitter.com/rollercoin_com" target="_blank" rel="nofollow noopener noreferrer"><img src="/static/images/twitter.08d947e59a76dbd2250a..svg" alt="twitter" width="40" height="40"></a></p>
                  <p><a href="https://www.youtube.com/channel/UCQqU59_ZGED9Hgm-SVmfisQ" target="_blank" rel="nofollow noopener noreferrer"><img src="/static/images/youtube.423dae69e8eac8666270..svg" alt="youtube" width="40" height="40"></a></p>
                  <p><a href="http://t.me/RollerCoin_official" target="_blank" rel="nofollow noopener noreferrer"><img src="/static/images/telegram.635f2b25eef86ff760a9..svg" alt="telegram" width="40" height="40"></a></p>
                  <p><a href="https://discord.com/invite/EDyWFmN" target="_blank" rel="nofollow noopener noreferrer"><img src="/static/images/discord.5939ebb13acb79f5c2ec..svg" alt="discord" width="40" height="40"></a></p>
                </div>
                <div class="select-lag-container">
                  <div class="select-language"><input type="radio" hidden="" name="language_cn" id="language_cn" value="cn"><label for="language_cn">中文</label></div>
                  <div class="select-language"><input type="radio" hidden="" name="language_en" id="language_en" value="en" checked=""><label for="language_en">English</label></div>
                </div>
              </div>
              <div class="footer-block support col-12 col-lg-2 offset-lg-2">
                <div class="header-block">
                  <p>CONTACTS</p>
                </div>
                <div class="body-block">
                  <p><a href="mailto:support@rollercoin.com">support@rollercoin.com</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom-footer-container">
          <div class="container">
            <div class="align-items-center justify-content-between row">
              <div class="left-block col">
                <div class="top-block">
                  <p><a href="/privacy">Privacy policy</a></p>
                  <p>|</p>
                  <p><a href="/terms">Term of service</a></p>
                </div>
                <div class="bottom-block">
                  <p>Copyright © rollercoin.com 2018-2023</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script default="" src="/static/js/bundle.js?v=8ea5e774f5d0cfc3" type="text/javascript"></script>
  <script>
    (function() {
      var js = "window['__CF$cv$params']={r:'7ad8f925091c3f54',m:'w5cW2JSRf.GTSVYEYo5uKO1mYDmpDpU.XkWXx6bso1c-1679766385-0-AVy/7BfcyIfO5ubJr81dBa6x/EdleK4DzX2XbwCpipx0fFwtUau56LE095w4mzg/XiSlFmjNxDL+HM5GuW8pUda1Zv1yNSGA4/E4c03f/vb3XE9Q4wZPhYrCZaCSpGuAMg==',s:[0x3f4d611425,0xae456ce82a],u:'/cdn-cgi/challenge-platform/h/b'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/h/b/scripts/alpha/invisible.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);";
      var _0xh = document.createElement('iframe');
      _0xh.height = 1;
      _0xh.width = 1;
      _0xh.style.position = 'absolute';
      _0xh.style.top = 0;
      _0xh.style.left = 0;
      _0xh.style.border = 'none';
      _0xh.style.visibility = 'hidden';
      document.body.appendChild(_0xh);

      function handler() {
        var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
        if (_0xi) {
          var _0xj = _0xi.createElement('script');
          _0xj.nonce = '';
          _0xj.innerHTML = js;
          _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
        }
      }
      if (document.readyState !== 'loading') {
        handler();
      } else if (window.addEventListener) {
        document.addEventListener('DOMContentLoaded', handler);
      } else {
        var prev = document.onreadystatechange || function() {};
        document.onreadystatechange = function(e) {
          prev(e);
          if (document.readyState !== 'loading') {
            document.onreadystatechange = prev;
            handler();
          }
        };
      }
    })();
  </script><iframe height="1" width="1" style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;"></iframe>
  <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/vb26e4fa9e5134444860be286fd8771851679335129114" integrity="sha512-M3hN/6cva/SjwrOtyXeUa5IuCT0sedyfT+jK/OV+s+D0RnzrTfwjwJHhd+wYfMm9HJSrZ1IKksOdddLuN6KOzw==" data-cf-beacon="{&quot;rayId&quot;:&quot;7ad8f925091c3f54&quot;,&quot;token&quot;:&quot;e52d7e1eae9a4e748bfdffca25cd701c&quot;,&quot;version&quot;:&quot;2023.3.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>


  <div>
    <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
      <div class="grecaptcha-logo"><iframe title="reCAPTCHA" src="https://www.recaptcha.net/recaptcha/api2/anchor?ar=2&amp;k=6LekjXkUAAAAANf5HflrfyeFlRriNuiUoxdj2TU6&amp;co=aHR0cHM6Ly9yb2xsZXJjb2luLmNvbTo0NDM.&amp;hl=en&amp;v=vpEprwpCoBMgy-fvZET0Mz6L&amp;size=invisible&amp;cb=6jjtm2y79lzy" width="256" height="60" role="presentation" name="a-2vzlki70sli6" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div>
      <div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-100000" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
    </div><iframe style="display: none;"></iframe>
  </div>
  <script type="text/javascript" id="">
    ! function(b, e, f, g, a, c, d) {
      b.fbq || (a = b.fbq = function() {
        a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
      }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e.createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(c, d))
    }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
    fbq("init", "746763856897442");
    fbq("track", "PageView");
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=746763856897442&amp;ev=PageView&amp;noscript=1"></noscript>
  <script type="text/javascript" id="gtm-__utmzz-cookie-replicator">
    (function(h) {
      function y(a) {
        var b = ["source", "medium", "campaign", "term", "content"];
        b = new RegExp("(utm_(" + b.join("|") + ")|(d|g)clid)\x3d.*?([^\x26#]*|$)", "gi");
        a = a.match(b);
        var c;
        if (a) {
          var e = {};
          var p = a.length;
          for (c = 0; c < p; c++)(b = a[c].split("\x3d")) && (e[b[0]] = b[1])
        }
        return e
      }

      function z(a) {
        if (a) {
          var b = {
              "daum.net": {
                p: "q",
                n: "daum"
              },
              "eniro.se": {
                p: "search_word",
                n: "eniro "
              },
              "naver.com": {
                p: "query",
                n: "naver "
              },
              "yahoo.com": {
                p: "p",
                n: "yahoo"
              },
              "msn.com": {
                p: "q",
                n: "msn"
              },
              "bing.com": {
                p: "q",
                n: "live"
              },
              "aol.com": {
                p: "q",
                n: "aol"
              },
              "lycos.com": {
                p: "q",
                n: "lycos"
              },
              "ask.com": {
                p: "q",
                n: "ask"
              },
              "altavista.com": {
                p: "q",
                n: "altavista"
              },
              "search.netscape.com": {
                p: "query",
                n: "netscape"
              },
              "cnn.com": {
                p: "query",
                n: "cnn"
              },
              "about.com": {
                p: "terms",
                n: "about"
              },
              "mamma.com": {
                p: "query",
                n: "mama"
              },
              "alltheweb.com": {
                p: "q",
                n: "alltheweb"
              },
              "voila.fr": {
                p: "rdata",
                n: "voila"
              },
              "search.virgilio.it": {
                p: "qs",
                n: "virgilio"
              },
              "baidu.com": {
                p: "wd",
                n: "baidu"
              },
              "alice.com": {
                p: "qs",
                n: "alice"
              },
              "yandex.com": {
                p: "text",
                n: "yandex"
              },
              "najdi.org.mk": {
                p: "q",
                n: "najdi"
              },
              "seznam.cz": {
                p: "q",
                n: "seznam"
              },
              "search.com": {
                p: "q",
                n: "search"
              },
              "wp.pl": {
                p: "szukaj ",
                n: "wirtulana polska"
              },
              "online.onetcenter.org": {
                p: "qt",
                n: "o*net"
              },
              "szukacz.pl": {
                p: "q",
                n: "szukacz"
              },
              "yam.com": {
                p: "k",
                n: "yam"
              },
              "pchome.com": {
                p: "q",
                n: "pchome"
              },
              "kvasir.no": {
                p: "q",
                n: "kvasir"
              },
              "sesam.no": {
                p: "q",
                n: "sesam"
              },
              "ozu.es": {
                p: "q",
                n: "ozu "
              },
              "terra.com": {
                p: "query",
                n: "terra"
              },
              "mynet.com": {
                p: "q",
                n: "mynet"
              },
              "ekolay.net": {
                p: "q",
                n: "ekolay"
              },
              "rambler.ru": {
                p: "words",
                n: "rambler"
              },
              google: {
                p: "q",
                n: "google"
              }
            },
            c = h.createElement("a"),
            e = {};
          c.href =
            a; - 1 < c.hostname.indexOf("google") && (n = "google");
          b[n] ? (a = b[n], b = new RegExp(a.p + "\x3d.*?([^\x26#]*|$)", "gi"), c = c.search.match(b), e.source = a.n, e.medium = "organic", e.term = (c ? c[0].split("\x3d")[1] : "") || "(not provided)") : n !== q && (e.source = c.hostname, e.medium = "referral");
          return e
        }
      }

      function w(a, b, c, e, p) {
        a = a + "\x3d" + b + ";";
        c && (a += "Expires\x3d" + c.toGMTString() + ";");
        e && (a += "Path\x3d" + e + ";");
        p && (a += "Domain\x3d" + p + ";");
        h.cookie = a
      }

      function t(a) {
        var b = "; " + h.cookie;
        a = b.split("; " + a + "\x3d");
        if (1 < a.length) return a.pop().split(";")[0]
      }

      function x(a) {
        if (a) {
          var b = h.createElement("a");
          b.href = a;
          try {
            return b.hostname.match(/[^.]*\.[^.]{2,3}(?:\.[^.]{2,3})?$/)[0]
          } catch (c) {}
        }
      }
      var r = h.referrer,
        f = {
          utmcsr: "(direct)",
          utmcmd: "(none)",
          utmccn: "(not set)"
        },
        u = h.location.hostname,
        q = x(u),
        n = x(h.referrer),
        m = t("__utmzzses");
      u = new Date(+new Date + 15552E6);
      var d = h.location.search.replace("?", ""),
        l = h.location.hash.replace("#", "");
      d = y(d + "#" + l);
      var g = z(r);
      l = t("__utmz") || t("__utmzz");
      r = [];
      var v = {
          utm_source: "utmcsr",
          utm_medium: "utmcmd",
          utm_campaign: "utmccn",
          utm_content: "utmcct",
          utm_term: "utmctr",
          gclid: "utmgclid",
          dclid: "utmdclid"
        },
        k;
      m && n === q && (g = d = null);
      if (d && (d.utm_source || d.gclid || d.dclid)) {
        for (k in d) "undefined" !== typeof d[k] && (m = v[k], f[m] = d[k]);
        if (d.gclid || d.dclid) f.utmcsr = "google", f.utmcmd = f.utmgclid ? "cpc" : "cpm"
      } else if (g) f.utmcsr = g.source, f.utmcmd = g.medium, g.term && (f.utmctr = g.term);
      else if (l)
        for (f = {}, l = l.split("|"), v = l.length, g = 0; g < v; g++) m = l[g].split("\x3d"), d = m[0].split(".").pop(), f[d] = m[1];
      for (k in f) "undefined" !== typeof f[k] && r.push(k + "\x3d" +
        f[k]);
      w("__utmzz", r.join("|"), u, "/", q);
      w("__utmzzses", 1, null, "/", q)
    })(document);
  </script>
  <script type="text/javascript" id="">
    fbq("trackCustom", "HomePage");
  </script>
  <script type="text/javascript" id="">
    ! function(a, b) {
      if (!a.pixie) {
        var c = a.pixie = function(d, e, f) {
          c.actionQueue.push({
            action: d,
            actionValue: e,
            params: f
          })
        };
        c.actionQueue = [];
        a = b.createElement("script");
        a.async = !0;
        a.src = "//acdn.adnxs.com/dmp/up/pixie.js";
        b = b.getElementsByTagName("head")[0];
        b.insertBefore(a, b.firstChild)
      }
    }(window, document);
    pixie("init", "51e2e7b2-48c8-4904-be05-a5499c745aba");
  </script>


  <script type="text/javascript" id="">
    pixie("event", "PageView");
  </script>
  <noscript><img src="https://ib.adnxs.com/pixie?pi=51e2e7b2-48c8-4904-be05-a5499c745aba&amp;e=PageView&amp;script=0" width="1" height="1" style="display:none"></noscript>
  <script type="text/javascript" id="">
    window._tfa = window._tfa || [];
    window._tfa.push({
      notify: "event",
      name: "page_view",
      id: 1521557
    });
    ! function(a, b, d, c) {
      document.getElementById(c) || (a.async = 1, a.src = d, a.id = c, b.parentNode.insertBefore(a, b))
    }(document.createElement("script"), document.getElementsByTagName("script")[0], "//cdn.taboola.com/libtrc/unip/1521557/tfa.js", "tb_tfa_script");
  </script>

  <script type="text/javascript" id="" src="https://www.googletagmanager.com/gtag/js?id=AW-11094568383"></script>
  <script type="text/javascript" id="">
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments)
    }
    gtag("js", new Date);
    gtag("config", "AW-11094568383");
  </script>

  <script type="text/javascript" id="">
    ! function(a, b) {
      if (!a.pixie) {
        var c = a.pixie = function(d, e, f) {
          c.actionQueue.push({
            action: d,
            actionValue: e,
            params: f
          })
        };
        c.actionQueue = [];
        a = b.createElement("script");
        a.async = !0;
        a.src = "//acdn.adnxs.com/dmp/up/pixie.js";
        b = b.getElementsByTagName("head")[0];
        b.insertBefore(a, b.firstChild)
      }
    }(window, document);
    pixie("init", "51e2e7b2-48c8-4904-be05-a5499c745aba");
  </script>


  <script type="text/javascript" id="">
    pixie("event", "PageView");
  </script>
  <noscript><img src="https://ib.adnxs.com/pixie?pi=51e2e7b2-48c8-4904-be05-a5499c745aba&amp;e=PageView&amp;script=0" width="1" height="1" style="display:none"></noscript>
  <script type="text/javascript" id="">
    ! function(a, b) {
      if (!a.pixie) {
        var c = a.pixie = function(d, e, f) {
          c.actionQueue.push({
            action: d,
            actionValue: e,
            params: f
          })
        };
        c.actionQueue = [];
        a = b.createElement("script");
        a.async = !0;
        a.src = "//acdn.adnxs.com/dmp/up/pixie.js";
        b = b.getElementsByTagName("head")[0];
        b.insertBefore(a, b.firstChild)
      }
    }(window, document);
    pixie("init", "51e2e7b2-48c8-4904-be05-a5499c745aba");
  </script>


  <script type="text/javascript" id="">
    pixie("event", "PageView");
  </script>
  <noscript><img src="https://ib.adnxs.com/pixie?pi=51e2e7b2-48c8-4904-be05-a5499c745aba&amp;e=PageView&amp;script=0" width="1" height="1" style="display:none"></noscript>
  <script type="text/javascript" id="">
    ! function(a, b) {
      if (!a.pixie) {
        var c = a.pixie = function(d, e, f) {
          c.actionQueue.push({
            action: d,
            actionValue: e,
            params: f
          })
        };
        c.actionQueue = [];
        a = b.createElement("script");
        a.async = !0;
        a.src = "//acdn.adnxs.com/dmp/up/pixie.js";
        b = b.getElementsByTagName("head")[0];
        b.insertBefore(a, b.firstChild)
      }
    }(window, document);
    pixie("init", "51e2e7b2-48c8-4904-be05-a5499c745aba");
  </script>


  <script type="text/javascript" id="">
    pixie("event", "PageView");
  </script>
  <noscript><img src="https://ib.adnxs.com/pixie?pi=51e2e7b2-48c8-4904-be05-a5499c745aba&amp;e=PageView&amp;script=0" width="1" height="1" style="display:none"></noscript>
  <script type="text/javascript" id="">
    ! function(a, b) {
      if (!a.pixie) {
        var c = a.pixie = function(d, e, f) {
          c.actionQueue.push({
            action: d,
            actionValue: e,
            params: f
          })
        };
        c.actionQueue = [];
        a = b.createElement("script");
        a.async = !0;
        a.src = "//acdn.adnxs.com/dmp/up/pixie.js";
        b = b.getElementsByTagName("head")[0];
        b.insertBefore(a, b.firstChild)
      }
    }(window, document);
    pixie("init", "51e2e7b2-48c8-4904-be05-a5499c745aba");
  </script>


  <script type="text/javascript" id="">
    pixie("event", "PageView");
  </script>
  <noscript><img src="https://ib.adnxs.com/pixie?pi=51e2e7b2-48c8-4904-be05-a5499c745aba&amp;e=PageView&amp;script=0" width="1" height="1" style="display:none"></noscript>
  <script type="text/javascript" id="">
    ! function(a, b) {
      if (!a.pixie) {
        var c = a.pixie = function(d, e, f) {
          c.actionQueue.push({
            action: d,
            actionValue: e,
            params: f
          })
        };
        c.actionQueue = [];
        a = b.createElement("script");
        a.async = !0;
        a.src = "//acdn.adnxs.com/dmp/up/pixie.js";
        b = b.getElementsByTagName("head")[0];
        b.insertBefore(a, b.firstChild)
      }
    }(window, document);
    pixie("init", "51e2e7b2-48c8-4904-be05-a5499c745aba");
  </script>


  <script type="text/javascript" id="">
    pixie("event", "PageView");
  </script>
  <noscript><img src="https://ib.adnxs.com/pixie?pi=51e2e7b2-48c8-4904-be05-a5499c745aba&amp;e=PageView&amp;script=0" width="1" height="1" style="display:none"></noscript>
  <script type="text/javascript" id="">
    ! function(a, b) {
      if (!a.pixie) {
        var c = a.pixie = function(d, e, f) {
          c.actionQueue.push({
            action: d,
            actionValue: e,
            params: f
          })
        };
        c.actionQueue = [];
        a = b.createElement("script");
        a.async = !0;
        a.src = "//acdn.adnxs.com/dmp/up/pixie.js";
        b = b.getElementsByTagName("head")[0];
        b.insertBefore(a, b.firstChild)
      }
    }(window, document);
    pixie("init", "51e2e7b2-48c8-4904-be05-a5499c745aba");
  </script>


  <script type="text/javascript" id="">
    pixie("event", "PageView");
  </script>
  <noscript><img src="https://ib.adnxs.com/pixie?pi=51e2e7b2-48c8-4904-be05-a5499c745aba&amp;e=PageView&amp;script=0" width="1" height="1" style="display:none"></noscript>
  <script type="text/javascript" id="">
    ! function(a, b) {
      if (!a.pixie) {
        var c = a.pixie = function(d, e, f) {
          c.actionQueue.push({
            action: d,
            actionValue: e,
            params: f
          })
        };
        c.actionQueue = [];
        a = b.createElement("script");
        a.async = !0;
        a.src = "//acdn.adnxs.com/dmp/up/pixie.js";
        b = b.getElementsByTagName("head")[0];
        b.insertBefore(a, b.firstChild)
      }
    }(window, document);
    pixie("init", "51e2e7b2-48c8-4904-be05-a5499c745aba");
  </script>


  <script type="text/javascript" id="">
    pixie("event", "PageView");
  </script>
  <noscript><img src="https://ib.adnxs.com/pixie?pi=51e2e7b2-48c8-4904-be05-a5499c745aba&amp;e=PageView&amp;script=0" width="1" height="1" style="display:none"></noscript>
  <script type="text/javascript" id="">
    ! function(a, b) {
      if (!a.pixie) {
        var c = a.pixie = function(d, e, f) {
          c.actionQueue.push({
            action: d,
            actionValue: e,
            params: f
          })
        };
        c.actionQueue = [];
        a = b.createElement("script");
        a.async = !0;
        a.src = "//acdn.adnxs.com/dmp/up/pixie.js";
        b = b.getElementsByTagName("head")[0];
        b.insertBefore(a, b.firstChild)
      }
    }(window, document);
    pixie("init", "51e2e7b2-48c8-4904-be05-a5499c745aba");
  </script>


  <script type="text/javascript" id="">
    pixie("event", "PageView");
  </script>
  <noscript><img src="https://ib.adnxs.com/pixie?pi=51e2e7b2-48c8-4904-be05-a5499c745aba&amp;e=PageView&amp;script=0" width="1" height="1" style="display:none"></noscript>
  <script type="text/javascript" id="">
    ! function(a, b) {
      if (!a.pixie) {
        var c = a.pixie = function(d, e, f) {
          c.actionQueue.push({
            action: d,
            actionValue: e,
            params: f
          })
        };
        c.actionQueue = [];
        a = b.createElement("script");
        a.async = !0;
        a.src = "//acdn.adnxs.com/dmp/up/pixie.js";
        b = b.getElementsByTagName("head")[0];
        b.insertBefore(a, b.firstChild)
      }
    }(window, document);
    pixie("init", "51e2e7b2-48c8-4904-be05-a5499c745aba");
  </script>


  <script type="text/javascript" id="">
    pixie("event", "PageView");
  </script>
  <noscript><img src="https://ib.adnxs.com/pixie?pi=51e2e7b2-48c8-4904-be05-a5499c745aba&amp;e=PageView&amp;script=0" width="1" height="1" style="display:none"></noscript>
  <script type="text/javascript" id="">
    ! function(a, b) {
      if (!a.pixie) {
        var c = a.pixie = function(d, e, f) {
          c.actionQueue.push({
            action: d,
            actionValue: e,
            params: f
          })
        };
        c.actionQueue = [];
        a = b.createElement("script");
        a.async = !0;
        a.src = "//acdn.adnxs.com/dmp/up/pixie.js";
        b = b.getElementsByTagName("head")[0];
        b.insertBefore(a, b.firstChild)
      }
    }(window, document);
    pixie("init", "51e2e7b2-48c8-4904-be05-a5499c745aba");
  </script>


  <script type="text/javascript" id="">
    pixie("event", "PageView");
  </script>
  <noscript><img src="https://ib.adnxs.com/pixie?pi=51e2e7b2-48c8-4904-be05-a5499c745aba&amp;e=PageView&amp;script=0" width="1" height="1" style="display:none"></noscript>
  <script type="text/javascript" id="">
    ! function(a, b) {
      if (!a.pixie) {
        var c = a.pixie = function(d, e, f) {
          c.actionQueue.push({
            action: d,
            actionValue: e,
            params: f
          })
        };
        c.actionQueue = [];
        a = b.createElement("script");
        a.async = !0;
        a.src = "//acdn.adnxs.com/dmp/up/pixie.js";
        b = b.getElementsByTagName("head")[0];
        b.insertBefore(a, b.firstChild)
      }
    }(window, document);
    pixie("init", "51e2e7b2-48c8-4904-be05-a5499c745aba");
  </script>


  <script type="text/javascript" id="">
    pixie("event", "PageView");
  </script>
  <noscript><img src="https://ib.adnxs.com/pixie?pi=51e2e7b2-48c8-4904-be05-a5499c745aba&amp;e=PageView&amp;script=0" width="1" height="1" style="display:none"></noscript>
  <script type="text/javascript" id="">
    ! function(a, b) {
      if (!a.pixie) {
        var c = a.pixie = function(d, e, f) {
          c.actionQueue.push({
            action: d,
            actionValue: e,
            params: f
          })
        };
        c.actionQueue = [];
        a = b.createElement("script");
        a.async = !0;
        a.src = "//acdn.adnxs.com/dmp/up/pixie.js";
        b = b.getElementsByTagName("head")[0];
        b.insertBefore(a, b.firstChild)
      }
    }(window, document);
    pixie("init", "51e2e7b2-48c8-4904-be05-a5499c745aba");
  </script>


  <script type="text/javascript" id="">
    pixie("event", "PageView");
  </script>
  <noscript><img src="https://ib.adnxs.com/pixie?pi=51e2e7b2-48c8-4904-be05-a5499c745aba&amp;e=PageView&amp;script=0" width="1" height="1" style="display:none"></noscript>
</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>