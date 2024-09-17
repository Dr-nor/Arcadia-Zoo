O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:71:"/Applications/MAMP/htdocs/Arcadia-Zoo/assets/front-assets/css/front.css";s:10:"publicPath";s:67:"/assets/front-assets/css/front-c3cd7f77c6156c075385927ecf4dea0f.css";s:23:"publicPathWithoutDigest";s:34:"/assets/front-assets/css/front.css";s:15:"publicExtension";s:3:"css";s:7:"content";s:54469:"/*

    CSS INDEX
    ===================
    01. Header
    02. Slider
    03. Navigation
    04. Mobile Menu
    05. Animation
    06. Features
    07. Car Details
    08. Page Navigation
    09. Testimonial
    10. Breadcrumb
    11. About
    12. Cars shop
    13. Sidebar
    14. Contact
    15. Car Card - Grid
    16. Services
    17. Footer
-----------------------------------------------------------------------------------*/
:root {
  --bs-white: #fff;
  --bs-primary: #00BF63;
  --bs-secondary: #313845;
}

/*----------------------------------------*/
/*  01. Header
/*----------------------------------------*/
/* ---Header Top--- */
.header-top-left li {
  display: inline-block;
  margin-right: 20px;
  font-size: 14px;
  font-style: italic;
}
.header-top-right {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: end;
  -webkit-justify-content: flex-end;
  -ms-flex-pack: end;
  justify-content: flex-end;
}
.header-top-right .social-link i {
  color: var(--bs-primary);
}

/* ---Header Middle--- */
.header-middle-wrap {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
}

/* ---Main Header--- */
.main-nav>ul {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
}

.main-nav>ul>li {
  display: inline-block;
}

.main-nav>ul>li:not(:last-child) {
  padding-right: 30px;
}

.main-nav>ul>li a {
  color: #000;
}

.main-nav>ul>li>a {
  line-height: 90px;
  font-weight: 500;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  font-size: 14px;
  text-transform: uppercase;
}

.main-nav>ul>li>a i {
  margin-left: 5px;
  font-size: 25px;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.main-nav>ul>li:hover>a {
  color: var(--bs-primary);
}

.main-nav>ul>li:hover>a i {
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}

.main-nav>ul>li:hover>.drop-menu {
  opacity: 1;
  visibility: visible;
  -webkit-transform: perspective(600px) rotateX(0deg);
  transform: perspective(600px) rotateX(0deg);
}

.main-nav>ul>li:hover>.drop-menu>li:hover>.drop-menu {
  opacity: 1;
  visibility: visible;
  -webkit-transform: perspective(600px) rotateX(0deg);
  transform: perspective(600px) rotateX(0deg);
}

.main-nav>ul>li:hover>.drop-menu>li:hover>.drop-menu>li:hover>.drop-menu {
  opacity: 1;
  visibility: visible;
  -webkit-transform: perspective(600px) rotateX(0deg);
  transform: perspective(600px) rotateX(0deg);
}

/* ---Drop Menu--- */
.drop-holder {
  position: relative;
}
.drop-menu {
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
  background-color: #fff;
  position: absolute;
  visibility: hidden;
  opacity: 0;
  top: 100%;
  left: 0;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  width: 250px;
  padding-left: 30px;
  padding-top: 25px;
  padding-bottom: 25px;
  text-align: left;
  z-index: 2;
  -webkit-transform-origin: 0 0 0;
  -ms-transform-origin: 0 0 0;
  transform-origin: 0 0 0;
  -webkit-transform: perspective(600px) rotateX(-90deg);
  transform: perspective(600px) rotateX(-90deg);
}

@media (max-width: 1199.98px) {
  .drop-menu {
    left: auto;
    right: 0;
  }
}

.drop-menu>li:not(:last-child) {
  padding-bottom: 10px;
}

.drop-menu li:hover>a {
  color: var(--bs-primary);
}

.drop-menu>li>.drop-menu {
  top: 0;
  left: 100%;
  right: auto;
}

.drop-menu>li>.drop-menu>li>.drop-menu {
  top: 100%;
  left: auto;
  right: calc(100% + 30px);
}

@media (min-width: 1600px) {
  .drop-menu>li>.drop-menu>li>.drop-menu {
    top: 0;
    left: 100%;
    right: auto;
  }
}

/* ---Sub Dropdown--- */
.sub-dropdown.drop-menu {
  top: 30px;
  left: auto;
  right: 100%;
}

.sub-dropdown-holder:hover .sub-dropdown.drop-menu {
  top: 0;
  opacity: 1;
  visibility: visible;
}

.sub-dropdown-holder:hover>a {
  color: var(--bs-primary);
}

/* ---Megamenu--- */
.megamenu {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  padding: 0;
  padding: 40px;
}

.megamenu-holder {
  position: static;
}

.megamenu .title {
  text-transform: uppercase;
  margin-bottom: 30px;
  font-size: 18px;
  color: #383838;
  font-weight: 500;
  display: block;
}

@media (min-width: 992px) and (max-width: 1199.98px) {
  .megamenu .title {
    font-size: 17px;
  }
}

.megamenu.drop-menu>li {
  padding-bottom: 0;
}

.megamenu>li {
  width: 25%;
}

.megamenu>li:not(:last-child) {
  border-right: 1px solid #e7e7e7;
  padding-right: 30px;
  margin-right: 30px;
}

.megamenu>li>ul li:not(:last-child) {
  padding-bottom: 30px;
}

.megamenu>li>ul li a {
  display: block;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  font-size: 14px;
}

.megamenu>li .banner img {
  -o-object-position: center center;
  object-position: center center;
  width: 100%;
}

/* ---Header Right--- */
.header-right>ul {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: end;
  -webkit-justify-content: flex-end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  position: relative;
}

.header-right>ul>li {
  position: relative;
  cursor: pointer;
}

.header-right>ul>li:not(:last-child) {
  padding-right: 15px;
}

.header-right>ul>li>a i {
  font-size: 23px;
  vertical-align: middle;
}

.header-right>ul>li>a i:before {
  font-weight: 500;
}

.header-right>ul>li.minicart-wrap {
  padding-right: 12px;
}

.header-right>ul>li .minicart-btn .quantity {
  background-color: var(--bs-primary);
  border-radius: 100%;
  text-align: center;
  font-size: 14px;
  color: #fff;
  display: block;
  width: 20px;
  height: 20px;
  line-height: 20px;
  position: absolute;
  top: -5px;
  right: 0;
}

.header-right>ul .btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}

.header-right>ul .btn i {
  color: #212529;
  font-size: 24px;
}

.header-right>ul .btn:after {
  border: 0;
}

/* ---Header Logo--- */
.header-logo {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
}

@media (max-width: 479px) {
  .header-logo {
    width: 140px;
  }

}

/* ---Header Sticky--- */
.sticky {
  -webkit-animation: 800ms ease-in-out 0s normal none 1 running fadeInDown;
  animation: 800ms ease-in-out 0s normal none 1 running fadeInDown;
  -webkit-box-shadow: 0px 1px 5px 0px rgba(0, 0, 0, 0.2);
  box-shadow: 0px 1px 5px 0px rgba(0, 0, 0, 0.2);
  background-color: #fff;
  position: fixed;
  z-index: 99;
  top: 0;
  left: 0;
  width: 100%;
  display: block;
}

.sticky .header-logo-wrap {
  top: 0;
  height: 100%;
}

/*----------------------------------------*/
/*  02. Slider
/*----------------------------------------*/
/* ---Main Slider--- */
.slide-inner {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: start;
  -webkit-justify-content: flex-start;
  -ms-flex-pack: start;
  justify-content: flex-start;
}

.slide-inner.bg-height {
  min-height: 792px;
}

.slide-inner.overlay {
  background-color: rgba(24, 24, 24, 0.6);
  background-blend-mode: overlay;
}

@media (max-width: 1599.98px) {
  .slide-inner.bg-height {
    min-height: 610px;
  }
}

@media (max-width: 767.98px) {
  .slide-inner.bg-height {
    min-height: 480px;
  }
}


  .slide-content {
    text-align: center !important;
  }


.slide-content .sub-title {
  font-weight: 400;
  font-size: 28px;
  line-height: 30px;
  display: block;
  text-transform: uppercase;
}

@media (max-width: 767.98px) {
  .slide-content .sub-title {
    font-size: 25px;
  }
}

.slide-content .title {
  font-size: 68px;
  text-transform: uppercase;
}

@media (max-width: 767.98px) {
  .slide-content .title {
    font-size: 40px;
  }
}

.slide-content .title.font-weight-bold {
  font-weight: 700;
}

.slide-content .short-desc {
  text-transform: uppercase;
  font-size: 20px;
  line-height: 30px;
}

@media (max-width: 767.98px) {
  .slide-content .short-desc {
    font-size: 16px;
    text-transform: capitalize;
  }
}

.slide-style-2 .slide-content .title {
  text-transform: capitalize;
  font-weight: 700;
  font-size: 60px;
  line-height: 81px;
}

@media (max-width: 1599.98px) {
  .slide-style-2 .slide-content .title {
    font-size: 50px;
    line-height: 71px;
  }
}

@media (max-width: 479px) {
  .slide-style-2 .slide-content .title {
    font-size: 30px;
    line-height: 1.4;
  }
}

.slide-style-2 .slide-content .short-desc {
  text-transform: capitalize;
  font-size: 30px;
  line-height: 28px;
  font-weight: 300;
}

@media (max-width: 479px) {
  .slide-style-2 .slide-content .short-desc {
    font-size: 20px;
  }
}

/*----------------------------------------*/
/*  03. Navigation
/*----------------------------------------*/
/* ---Swiper Arrow--- */
.swiper-button-next,
.swiper-button-prev {
  background-color: #212529;
  color: #fff;
  width: 50px;
  height: 50px;
  line-height: 50px;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

@media (max-width: 767.98px) {

  .swiper-button-next,
  .swiper-button-prev {
    display: none;
  }
}

.swiper-button-next:after,
.swiper-button-prev:after {
  font-size: 16px;
}

.swiper-button-next:hover,
.swiper-button-prev:hover {
  background-color: var(--bs-primary);
  color: #fff;
}

.swiper-arrow:hover .swiper-button-next,
.swiper-arrow:hover .swiper-button-prev {
  opacity: 1;
  visibility: visible;
}

.swiper-arrow-sm-size .swiper-button-next,
.swiper-arrow-sm-size .swiper-button-prev {
  width: 30px;
  height: 30px;
  line-height: 30px;
}

.swiper-arrow-sm-size .swiper-button-next:after,
.swiper-arrow-sm-size .swiper-button-prev:after {
  font-size: 12px;
}

.swiper-arrow.with-radius .swiper-button-next,
.swiper-arrow.with-radius .swiper-button-prev {
  color: var(--bs-primary);
  border-radius: 100%;
}

.swiper-arrow.with-radius .swiper-button-next:hover,
.swiper-arrow.with-radius .swiper-button-prev:hover {
  background-color: var(--bs-primary);
  border-color: var(--bs-primary);
  color: #fff;
}

/* --- Main Slider Custom Arrow--- */
.swiper-container:hover .custom-button-prev,
.swiper-container:hover .custom-button-next {
  visibility: visible;
  opacity: 1;
}

.custom-button-prev,
.custom-button-next {
  background-repeat: no-repeat;
  position: absolute;
  top: 50%;
  left: 30px;
  z-index: 1;
  width: 29px;
  height: 29px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  overflow: hidden;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  opacity: 0;
  visibility: hidden;
}

.custom-button-prev:hover,
.custom-button-next:hover {
  background-position: 0 100%;
}

.custom-button-prev {
  background-image: url("../images/slider/arrow/left-arrow-d6a63f556c0e3f362303d81bd326087a.png");
}

.custom-button-next {
  background-image: url("../images/slider/arrow/right-arrow-5dc9ea88bf49002eecadba632edb13bb.png");
  left: auto;
  right: 30px;
}

.thumbs-arrow-holder {
  position: relative;
  padding-left: 45px;
  padding-right: 45px;
}

.thumbs-arrow-holder .swiper-container {
  padding-left: 5px;
  padding-right: 5px;
  margin-left: -5px;
  margin-right: -5px;
}

.thumbs-arrow-holder:hover .swiper-slide {
  opacity: 0.7;
}

.thumbs-arrow-holder:hover .thumb-button-prev,
.thumbs-arrow-holder:hover .thumb-button-next {
  opacity: 0.7;
}

.thumbs-button-prev,
.thumbs-button-next {
  background-color: #212529;
  border-color: #212529;
  border-radius: 0;
  text-align: center;
  color: #fff;
  width: 30px;
  height: 30px;
  line-height: 30px;
  -webkit-transform: all 0.3s ease 0s;
  -ms-transform: all 0.3s ease 0s;
  transform: all 0.3s ease 0s;
  position: absolute;
  top: 50%;
  left: 0;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.thumbs-button-prev:hover,
.thumbs-button-next:hover {
  background-color: var(--bs-primary);
  color: #fff;
}

.thumbs-button-prev:focus,
.thumbs-button-next:focus {
  outline: 0;
}

.thumbs-button-prev i,
.thumbs-button-next i {
  font-size: 30px;
  display: block;
}

.thumbs-button-next {
  left: auto;
  right: 0;
}

/* ---Service Arrow--- */
.service-button-wrap {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}

.service-button-prev {
  margin-right: 3px;
}

.service-button-next i,
.service-button-prev i, .habitat-button-next i,
.habitat-button-prev i {
  background-color: var(--bs-secondary);
  color: #fff;
  width: 28px;
  height: 22px;
  line-height: 22px;
  text-align: center;
  display: block;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  border-top-left-radius: 3px;
  border-end-start-radius: 3px;
}

.service-button-next i:hover,
.service-button-prev i:hover ,.habitat-button-next i:hover,
.habitat-button-prev i:hover{
  background-color: var(--bs-primary);
}

/* ---Car Arrow--- */
.animal-button-wrap {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}

.animal-button-prev {
  margin-right: 3px;
}

.animal-button-next i,
.animal-button-prev i {
  background-color: var(--bs-secondary);
  color: #fff;
  width: 28px;
  height: 22px;
  line-height: 22px;
  text-align: center;
  display: block;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  border-top-left-radius: 3px;
  border-end-start-radius: 3px;
}

.animal-button-next i:hover,
.animal-button-prev i:hover {
  background-color: var(--bs-primary);
}

/* ---With Background--- */
.with-bg_white .swiper-button-next,
.with-bg_white .swiper-button-prev {
  background-color: #fff;
  border: 0;
  color: inherit;
}

.with-bg_white .swiper-button-next:hover,
.with-bg_white .swiper-button-prev:hover {
  background-color: var(--bs-primary);
  color: #fff;
}

/* ---Swiper Pagination--- */
.swiper-pagination-bullet-active {
  background-color: var(--bs-primary);
}

.swiper-pagination.with-bg .swiper-pagination-bullet {
  background-color: #fff;
  opacity: 1;
}

.swiper-pagination.with-bg .swiper-pagination-bullet-active {
  background-color: var(--bs-primary);
}

.swiper-pagination.without-absolute {
  position: relative;
  padding-top: 20px;
  bottom: 0;
}

/*----------------------------------------*/
/*  04. Mobile Menu
/*----------------------------------------*/
.mobile-menu_wrapper .vp-offcanvas-body {
  background-color: var(--bs-secondary);
  position: fixed;
  top: 0;
  left: -350px;
  width: 350px;
  z-index: 9999;
  visibility: hidden;
  opacity: 0;
  overflow: visible;
  overflow-x: hidden;
  -webkit-transition: all 500ms ease;
  -o-transition: all 500ms ease;
  transition: all 500ms ease;
  height: 100%;
  overflow-y: auto;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

@media (prefers-reduced-motion: reduce) {

  .mobile-menu_wrapper .vp-offcanvas-body {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
  }
}

@media (max-width: 575.98px) {

  .mobile-menu_wrapper .vp-offcanvas-body{
    width: calc(100% - 30px);
  }
}

.mobile-menu_wrapper .vp-offcanvas-body .inner-body{
  padding: 50px 0;
}

.mobile-menu_wrapper .vp-offcanvas-body .inner-body .vp-offcanvas-top {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: end;
  -webkit-justify-content: flex-end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding: 0 25px 30px;
}

.mobile-menu_wrapper .vp-offcanvas-body .inner-body .vp-offcanvas-top .button-close{
  font-size: 24px;
  color: #c0c0c0;
}

.mobile-menu_wrapper .vp-offcanvas-body .inner-body .offcanvas-menu_area .offcanvas-navigation .mobile-menu>li {
  height: 100%;
}

.mobile-menu_wrapper .vp-offcanvas-body .inner-body .offcanvas-menu_area .offcanvas-navigation .mobile-menu>li>a span {
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
}

.mobile-menu_wrapper .vp-offcanvas-body .inner-body .offcanvas-menu_area .offcanvas-navigation .mobile-menu li {
  position: relative;
}

.mobile-menu_wrapper .vp-offcanvas-body .inner-body .offcanvas-menu_area .offcanvas-navigation .mobile-menu li:not(:last-child) {
  padding-bottom: 25px;
}

.mobile-menu_wrapper .vp-offcanvas-body .inner-body .offcanvas-menu_area .offcanvas-navigation .mobile-menu li>.menu-expand {
  position: absolute;
  right: 0;
  top: 2px;
  width: 50px;
  height: 100%;
  line-height: 40px;
  cursor: pointer;
  text-align: center;
  margin-right: 4px;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  font-size: 20px;
}

.mobile-menu_wrapper .vp-offcanvas-body .inner-body .offcanvas-menu_area .offcanvas-navigation .mobile-menu li a {
  color: #c0c0c0;
  font-size: 14px;
  text-transform: uppercase;
  display: block;
  padding: 0 30px;
}

.mobile-menu_wrapper .vp-offcanvas-body .inner-body .offcanvas-menu_area .offcanvas-navigation .mobile-menu li a i {
  font-size: 24px;
}

.mobile-menu_wrapper .vp-offcanvas-body .inner-body .offcanvas-menu_area .offcanvas-navigation .mobile-menu li .sub-menu {
  background-color: rgba(255, 255, 255, 0.05);
  overflow-y: auto;
  padding: 25px 0;
  margin: 20px 0 10px;
}

.mobile-menu_wrapper .vp-offcanvas-body .inner-body .offcanvas-menu_area .offcanvas-navigation .mobile-menu li .sub-menu li a {
  text-transform: uppercase;
  font-size: 11px;
  color: #c0c0c0;
}

.mobile-menu_wrapper .vp-offcanvas-body .inner-body .offcanvas-menu_area .offcanvas-navigation .mobile-menu li .sub-menu li a span {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
}

.mobile-menu_wrapper .vp-offcanvas-body .inner-body .offcanvas-menu_area .offcanvas-navigation .mobile-menu li .sub-menu li.menu-open>a {
  color: var(--bs-primary);
}

.mobile-menu_wrapper .vp-offcanvas-body .inner-body .offcanvas-menu_area .offcanvas-navigation .mobile-menu li .sub-menu li.menu-open>a>span>i:before {
  content: "\e682";
}

.mobile-menu_wrapper .vp-offcanvas-body .inner-body .offcanvas-menu_area .offcanvas-navigation .mobile-menu li.menu-open>a {
  color: var(--bs-primary);
}

.mobile-menu_wrapper .vp-offcanvas-body .inner-body .offcanvas-menu_area .offcanvas-navigation .mobile-menu li.menu-open>a>span>i:before {
  content: "\e682";
}

.mobile-menu_wrapper.open .vp-offcanvas-body {
  visibility: visible;
  left: 0;
  opacity: 1;
  z-index: 999;
}

.mobile-menu_wrapper .social-link li a {
  color: var(--bs-white);
}

/*----------------------------------------*/
/*  05. Animation
/*----------------------------------------*/
.swiper-slide .slide-inner .slide-content {
  opacity: 0;
}

.swiper-slide.swiper-slide-active .slide-inner .slide-content {
  opacity: 1;
}

/* ---Slider Animation--- */
.animation-style-01.swiper-slide-active .slide-content .sub-title {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
  -webkit-animation-delay: 0.5s;
  animation-delay: 0.5s;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.animation-style-01.swiper-slide-active .slide-content .title {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
  -webkit-animation-delay: 1s;
  animation-delay: 1s;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.animation-style-01.swiper-slide-active .slide-content .short-desc {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
  -webkit-animation-delay: 1.5s;
  animation-delay: 1.5s;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.animation-style-01.swiper-slide-active .slide-content .button-wrap {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
  -webkit-animation-delay: 2s;
  animation-delay: 2s;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.animation-style-02.swiper-slide-active .slide-content .title {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
  -webkit-animation-delay: 1s;
  animation-delay: 1s;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@media (max-width: 991.98px) {
  .animation-style-02.swiper-slide-active .slide-content .title {
    -webkit-animation-delay: 2s;
    animation-delay: 2s;
  }
}

.animation-style-02.swiper-slide-active .slide-content .short-desc {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
  -webkit-animation-delay: 1.5s;
  animation-delay: 1.5s;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@media (max-width: 991.98px) {
  .animation-style-02.swiper-slide-active .slide-content .short-desc {
    -webkit-animation-delay: 2.5s;
    animation-delay: 2.5s;
  }
}

.animation-style-02.swiper-slide-active .slide-content .button-wrap {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
  -webkit-animation-delay: 2s;
  animation-delay: 2s;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@media (max-width: 991.98px) {
  .animation-style-02.swiper-slide-active .slide-content .button-wrap {
    -webkit-animation-delay: 3s;
    animation-delay: 3s;
  }
}

.animation-style-02.swiper-slide-active .inner-img {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
  -webkit-animation-delay: 2.5s;
  animation-delay: 2.5s;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@media (max-width: 991.98px) {
  .animation-style-02.swiper-slide-active .inner-img {
    -webkit-animation-delay: 1.5s;
    animation-delay: 1.5s;
  }
}

/* ---Wave Button--- */
@-webkit-keyframes wave-button {
  0% {
    opacity: 1;
    -webkit-transform: scale(0.3);
    transform: scale(0.3);
  }

  50% {
    opacity: 0.5;
    -webkit-transform: scale(0.6);
    transform: scale(0.6);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

@keyframes wave-button {
  0% {
    opacity: 1;
    -webkit-transform: scale(0.3);
    transform: scale(0.3);
  }

  50% {
    opacity: 0.5;
    -webkit-transform: scale(0.6);
    transform: scale(0.6);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

.wave-btn {
  margin: auto;
  display: block;
  position: relative;
  width: 250px;
  height: 250px;
}

.wave-btn>.icon {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  width: 80px;
  height: 80px;
  text-align: center;
  line-height: 80px;
  background: #fff;
  border-radius: 50%;
  color: var(--bs-primary);
  font-size: 24px;
}

.wave-btn span {
  position: absolute;
  border-radius: 50%;
  background: var(--bs-primary);
  width: 250px;
  height: 250px;
}

.wave-btn span:nth-child(1) {
  background: var(--bs-primary);
  -webkit-animation: wave-button 2s infinite 0.1s linear backwards;
  animation: wave-button 2s infinite 0.1s linear backwards;
}

.wave-btn span:nth-child(2) {
  background: var(--bs-primary);
  -webkit-animation: wave-button 3s infinite 0.5s linear backwards;
  animation: wave-button 3s infinite 0.5s linear backwards;
}

.wave-btn span:nth-child(3) {
  background: var(--bs-primary);
  -webkit-animation: wave-button 4s infinite 1s linear backwards;
  animation: wave-button 4s infinite 1s linear backwards;
}


/*----------------------------------------*/
/*  06. Features
/*----------------------------------------*/
.features-bg {
  height: 200px;
  padding-left: 20px;
  padding-right: 20px;
  background: #f9f9f9;
  position: relative;
}

.features-bg:before {
  content: url("../images/testimonial/user/inner-icon/1-8025fbe139cc596e7f7a9aa86400b956.png");
  position: absolute;
  bottom: -6px;
  right: 0;
}

@media (max-width: 1199.98px) {
  .features-bg {
    height: auto;
    padding-left: 30px;
    padding-right: 30px;
  }
}

@media (min-width: 1200px) {
  .features-wrap {
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    height: 100%;
  }
}

.features-item {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  margin-top: 10px;
  margin-bottom: 10px;
}

@media (max-width: 767.98px) {
  .features-item {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    text-align: center;
  }
}

.features-img {
  background: #fff;
  padding: 12px 16px;
  border-radius: 50%;
  border: 1px solid #00BF63;
}

.features-img i {
  font-size: 22px;
  color: var(--bs-primary);
}

.features-content {
  width: calc(100% - 60px);
  padding-left: 20px;
}

@media (max-width: 767.98px) {
  .features-content {
    padding-top: 20px;
    padding-left: 0;
  }
}

.features-content .title {
  color: #1f2226;
  font-size: 20px;
}

.features-content .short-desc {
  color: #3e3e3f;
  font-size: 15px;
  font-weight: 300;
  line-height: 25px;
}

/*----------------------------------------*/
/*  07. Car Details
/*----------------------------------------*/
.animal-slider {
  padding-bottom: 4px;
  margin-bottom: -4px;
}

.animal-category-img {
  overflow: hidden;
  display: block;
}

.animal-category-img img {
  width: 100%;
}

.animal-category-content {
  text-align: center;
}

.animal-category-content .title a {
  color: #383838;
  font-size: 18px;
  font-weight: 400;
  display: block;
}

.animal-category-content .title a:hover {
  color: var(--bs-primary);
}

.animal-list-view .animal-list-item {
  border-bottom: 1px solid #48536536;
  background-color: #fff;
  height: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  padding: 4px;
  margin: -4px;
}

@media (max-width: 991.98px) {
  .animal-list-view .animal-list-item {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
  }
}

.animal-list-view .animal-list-img {
  width: 350px;
}

@media (max-width: 991.98px) {
  .animal-list-view .animal-list-img {
    width: 100%;
  }
}

.animal-list-view .animal-list-content {
  width: calc(100% - 350px);
  padding-left: 20px;
}

@media (max-width: 991.98px) {
  .animal-list-view .animal-list-content {
    width: 100%;
  }
}

.animal-list-view .animal-list-content .animal-name {
  display: block;
  font-size: 20px;
  font-weight: 500;
  color: var(--bs-secondary)
}
.animal-list-view .animal-list-content .price-box span.new-price{
  font-size:20px;
}

.animal-list-view .animal-list-content .inline-group.has-sup,
.animal-list-view .animal-list-content .detail-btn a {
  font-size: 14px;
}


@media (min-width: 992px) and (max-width: 1199.98px) {
  .animal-list-view.with-sidebar .animal-list-img {
    width: 250px;
  }
}

@media (min-width: 992px) and (max-width: 1199.98px) {
  .animal-list-view.with-sidebar .animal-list-content {
    width: calc(100% - 250px);
  }
}

.animal-tab-nav {
  background-color: #f4f4f4;
}

.animal-tab-nav li a.tab-btn {
  padding: 20px;
  text-align: center;
  width: auto;
  display: block;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  margin-right: 20px;
  color: var(--bs-secondary)
}

.animal-tab-nav li a.active {
  background-color: var(--bs-primary);
  color: #fff;
}


/* ---Feedback--- */
.feedback-area {
  padding-left: 40px;
  padding-right: 40px;
}

.feedback-area.with-bg {
  background-color: #f9f9f9;
  padding-top: 50px;
  padding-bottom: 50px;
}

.feedback-area.with-bg .feedback-form .input-field,
.feedback-area.with-bg .feedback-form .textarea-field {
  background-color: #f9f9f9;
}

.feedback-area .heading {
  position: relative;
  line-height: 24px;
}

.feedback-area .heading:before {
  background-color: var(--bs-primary);
  content: "";
  width: 9px;
  height: 17px;
  position: absolute;
  top: 0;
  left: -40px;
}

.feedback-area .rating-box {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}

@media (max-width: 479px) {
  .feedback-area .rating-box {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
  }

  .feedback-area .rating-box ul {
    padding-left: 0 !important;
    padding-top: 10px;
  }
}

.feedback-area .rating-box span {
  color: #444444;
}

.feedback-form .group-input {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}

@media (max-width: 767.98px) {
  .feedback-form .group-input {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
  }
}

.feedback-form .form-field {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -ms-flex-pack: justify;
  justify-content: space-between;
  width: 100%;
}

.feedback-form .input-field,
.feedback-form .textarea-field {
  border: 1px solid #dee2e6;
  padding-left: 20px;
  padding-right: 20px;
  width: 100%;
  height: 50px;
}

.feedback-form .textarea-field {
  padding: 20px;
  height: 150px;
}

/* ---Single animal--- */
.single-animal-img.with-border , .single-service-img.with-border {
  -webkit-box-shadow: 0px 5px 2px -1px rgb(255, 233, 233);
  box-shadow: 0px 5px 2px -1px rgb(255, 233, 233);
  border: 1px solid #dee2e6;
}

.single-animal-slider,.single-service-slider, .single-habitat-slider {
  border: 1px solid #dee2e6;
  margin-bottom: 10px;
}

.single-animal-slider .single-img,.single-service-slider .single-img,.single-habitat-slider .single-img{
  display: block;
}


.single-animal-content>.title, .single-service-content>.title ,.single-habitat-content>.title {
  color: #444444;
  font-size: 30px;
}

.single-animal-content .short-desc , .single-service-content .short-desc,.single-habitat-content .short-desc  {
  color: #6c788c;
  line-height: 30px;
  font-weight: 300;
}

.single-animal-content .animal-category {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
}

@media (max-width: 479px) {
  .single-animal-content .animal-category {
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
  }
}

.single-animal-content .animal-category .title,
.single-animal-content .animal-options .title {
  margin-right: 10px;
  color: #5f5f5f;
  font-weight: 500;
  font-size: 16px;
}

.single-animal-content .animal-category ul li,
.single-animal-content .animal-options ul li {
  display: inline-block;
}

.single-animal-content .animal-category ul li * {
  color: var(--bs-primary);
}

.single-animal-content .animal-category ul li *:hover {
  color: var(--bs-primary);
}

.single-animal-content .animal-options ul li {
  padding-right: 15px;
  padding-bottom: 10px;
}

.single-animal-content .animal-options ul li * {
  font-size: 15px;
  color: var(--bs-secondary);
}

.single-animal-content .animal-options ul li i {
  font-size: 22px;
  margin-right: 5px;
}

.single-animal-content .animal-options ul li *:hover {
  color: var(--bs-primary) !important;
}

.single-animal-thumbs .swiper-slide, .single-service-thumbs .swiper-slide {
  border: 1px solid #dee2e6;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.single-animal-thumbs .swiper-slide:hover, .single-service-thumbs .swiper-slide:hover {
  opacity: 1;
}

/*----------------------------------------*/
/*  08. Page Navigation
/*----------------------------------------*/

.page-navigation {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

@media (max-width: 479px) {
  .page-navigation {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
  }
}

@media (max-width: 1199.98px) {
  .page-navigation ul>li {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
  }
}

.page-navigation ul li {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}

.page-navigation ul li a {
  display: block;
}

.page-navigation ul li a i {
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  font-size: 24px;
}

.page-navigation ul li a:hover {
  color: var(--bs-primary);
}

.page-navigation ul li a:hover i {
  color: var(--bs-primary);
}

@media (max-width: 479px) {
  .page-navigation ul.prev-nav {
    padding-bottom: 25px;
  }
}

@media (max-width: 1199.98px) {

  .page-navigation ul.prev-nav li,
  .page-navigation ul.next-nav li {
    display: block;
  }
}

.page-navigation ul.prev-nav li .navigation-img,
.page-navigation ul.next-nav li .navigation-img {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}

.page-navigation ul.prev-nav li .navigation-img a,
.page-navigation ul.next-nav li .navigation-img a {
  position: relative;
  display: block;
}

.page-navigation ul.prev-nav li .navigation-img a:before,
.page-navigation ul.next-nav li .navigation-img a:before {
  background-color: var(--bs-primary);
  content: "";
  width: 100%;
  height: 100%;
  position: absolute;
  opacity: 0;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.page-navigation ul.prev-nav li .navigation-img a:hover:before,
.page-navigation ul.next-nav li .navigation-img a:hover:before {
  opacity: 0.82;
}

.page-navigation ul.prev-nav li .navigation-img a:hover .arrow i,
.page-navigation ul.next-nav li .navigation-img a:hover .arrow i {
  visibility: visible;
  opacity: 1;
}

.page-navigation ul.prev-nav li .navigation-img .arrow,
.page-navigation ul.next-nav li .navigation-img .arrow {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.page-navigation ul.prev-nav li .navigation-img .arrow i,
.page-navigation ul.next-nav li .navigation-img .arrow i {
  visibility: hidden;
  opacity: 0;
  color: #fff;
  font-size: 30px;
}

.page-navigation ul.prev-nav li .navigation-content .blog-meta ul,
.page-navigation ul.next-nav li .navigation-content .blog-meta ul {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
}

.page-navigation ul.prev-nav li .navigation-content .blog-meta ul li,
.page-navigation ul.next-nav li .navigation-content .blog-meta ul li {
  font-size: 13px;
}

.page-navigation ul.prev-nav li .navigation-content .blog-meta ul li i,
.page-navigation ul.next-nav li .navigation-content .blog-meta ul li i {
  font-size: 16px;
}

.page-navigation ul.prev-nav li .navigation-content .short-desc,
.page-navigation ul.next-nav li .navigation-content .short-desc {
  color: #383838;
  font-size: 18px;
  line-height: 25px;
}


/*----------------------------------------*/
/*  09. Testimonial
/*----------------------------------------*/
.testimonial-item {
  padding: 35px 45px;
  border-top-left-radius: 50px;
  border-top-right-radius: 50px;
  border-end-start-radius: 50px;
  position: relative;
  box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
}

/* .testimonial-item.swiper-slide-active:before {
  content : '\f1b0';
  font-family:"FontAwesome";
  position: absolute;
  bottom: -6px;
  right: 0;
} */

.testimonial-item .user-info {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}

.testimonial-item .user-shape img {
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  -webkit-filter: grayscale(100%);
  filter: grayscale(100%);
  opacity: 0.3;
}

.testimonial-item .user-shape-wrap {
  display: inline-block;
  position: relative;
}

.testimonial-item .user-img img {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  width: 50px;
  border-radius: 50%
}

.testimonial-item .user-content {
  -webkit-align-self: center;
  -ms-flex-item-align: center;
  align-self: center;
  padding-left: 10px;
}

.testimonial-item .user-name {
  text-transform: uppercase;
  font-size: 18px;
  color: #1d1d1d;
}

.testimonial-item .user-occupation {
  color: #1d1d1d;
  font-weight: 400;
}

.testimonial-item .user-comment {
  color: #161616;
  font-style: italic;
  line-height: 27px;
  max-width: 315px;
  font-weight: 300;
}

.testimonial-pagination {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  padding-top: 60px;
}

.testimonial-pagination .swiper-pagination-bullet {
  width: 10px;
  height: 10px;
}

.testimonial-pagination .swiper-pagination-bullet-active {
  position: relative;
  margin-right: 65px !important;
}

.testimonial-pagination .swiper-pagination-bullet-active:before {
  background-color: var(--bs-primary);
  width: 45px;
  height: 2px;
  content: "";
  position: absolute;
  top: 50%;
  left: 20px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.testimonial-swiper .swiper-container {
  overflow: visible;
  padding: 5px;

}

.testimonial-swiper {
  overflow: hidden;
  margin: 5px;

}

/*----------------------------------------*/
/*  10. Breadcrumb
/*----------------------------------------*/

.breadcrumb-height {
  height: 370px;
}

.breadcrumb-area.overlay {
  background-color: rgba(24, 24, 24, 0.6);
  background-blend-mode: overlay;
}

.breadcrumb-heading {
  text-transform: uppercase;
  font-size: 36px;
}

.breadcrumb-item {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  height: 100%;
}

.breadcrumb-item ul li {
  display: inline-block;
  line-height: 30px;
  font-size: 14px;
}

.breadcrumb-item ul li i {
  font-size: 12px;
  vertical-align: middle;
}

/*----------------------------------------*/
/*  11. About
/*----------------------------------------*/

.about-area .short-desc {
  font-size: 15px;
  font-weight: 300;
  color: #333;
  line-height: 30px;
  text-align: justify;
  text-justify: inter-word;
}

/*----------------------------------------*/
/*  12. Cars shop
/*----------------------------------------*/
.animal-topbar {
  border-bottom: 1px solid #48536536;
}
.animal-topbar>ul {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -ms-flex-pack: justify;
  justify-content: flex-end;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: right;
}

@media (max-width: 575.98px) {
  .animal-topbar>ul {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
  }
}

@media (max-width: 575.98px) {
  .animal-topbar>ul>li:not(:last-child) {
    margin-bottom: 20px;
  }
}

.animal-topbar>ul li a {
  color: #6c6c6c;
}

.animal-topbar>ul li.animal-view-wrap {
  border: 1px solid #dee2e6;
  padding: 10px;
}

@media (min-width: 576px) and (max-width: 767.98px) {
  .animal-topbar>ul li.animal-view-wrap {
    padding: 15px 20px;
  }
}

.animal-topbar>ul li.animal-view-wrap>ul li:not(:last-child) {
  padding-right: 20px;
}

.animal-topbar>ul li.animal-view-wrap>ul li a.active {
  color: var(--bs-primary);
}

.animal-topbar>ul li.page-count {
  border-radius: 30px;
  padding: 20px 25px 20px 0;
}

@media (min-width: 576px) and (max-width: 767.98px) {
  .animal-topbar>ul li.page-count {
    padding: 15px 20px;
  }
}

.animal-topbar>ul li.page-count span {
  color: var(--bs-primary);
}

.animal-topbar>ul li.sort {
  padding-left: 15px;
  padding-right: 15px;
}

@media (min-width: 576px) and (max-width: 767.98px) {
  .animal-topbar>ul li.sort {
    padding-top: 5px;
    padding-bottom: 5px;
  }
}


.animal-topbar>ul li.sort .nice-select .list {
  width: auto;
  left: auto;
  right: 0;
}

/*  Range slider*/
.irs--flat .irs-bar,
.irs--flat .irs-from,
.irs--flat .irs-to,
.irs--flat .irs-single {
  background-color: var(--bs-primary);
}


/*----------------------------------------*/
/*  13. Sidebar
/*----------------------------------------*/
.widgets-area {
  background-color: #f9f9f9;
  padding-top: 40px;
  padding-bottom: 40px;
  padding-left: 40px;
  padding-right: 40px;
}

.widgets-searchbox {
  position: relative;
}

.widgets-searchbox .input-field {
  border: 1px solid #dee2e6;
  width: 100%;
  height: 60px;
  padding-left: 15px;
  padding-right: 75px;
}

.widgets-searchbox-btn {
  background-color: transparent;
  border: 0;
  border-left: 1px solid #dee2e6;
  position: absolute;
  top: 50%;
  right: 20px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  font-size: 18px;
  padding-left: 20px;
  padding-right: 20px;
}

.widgets-title {
  color: #535353;
  font-size: 18px;
  position: relative;
}

.widgets-title:before {
  background-color: var(--bs-primary);
  height: 14px;
  width: 9px;
  content: "";
  position: absolute;
  top: 0;
  left: -40px;
}

.widgets-author .widgets-content {
  text-align: center;
}

.widgets-author .widgets-content span {
  display: block;
}

.widgets-author .widgets-content span.author-name {
  color: #2e2a31;
  font-size: 18px;
}

.widgets-author .widgets-content span.author-occupation {
  color: #5f5f5f;
}

.widgets-category li:not(:last-child) {
  padding-bottom: 10px;
}

.widgets-category li a {
  color: #737070;
  display: block;
}

.widgets-category li a:hover {
  color: var(--bs-primary);
}

.widgets-checkbox li:not(:last-child) {
  margin-bottom: 25px;
}

.widgets-checkbox li input[type=checkbox] {
  display: none;
}

.widgets-checkbox li input[type=checkbox]+label {
  position: relative;
  padding-left: 30px;
  line-height: 1;
  font-size: 14px;
  font-weight: 400;
  margin: 0;
  color: #737070;
}

.widgets-checkbox li input[type=checkbox]+label:before {
  border: 2px solid #737070;
  border-radius: 100%;
  position: absolute;
  left: 0;
  top: 0;
  width: 15px;
  height: 15px;
  display: block;
  content: "";
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.widgets-checkbox li input[type=checkbox]+label:after {
  position: absolute;
  left: 0;
  top: 0;
  display: block;
  content: "\f26e";
  font-family: "bootstrap-icons";
  font-size: 14px;
  line-height: 14px;
  opacity: 0;
  width: 15px;
  text-align: center;
  -webkit-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  color: #fff;
}

.widgets-checkbox li .label-checkbox {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}

.widgets-checkbox li .label-checkbox span {
  color: #737070;
  width: 30px;
  height: 20px;
  border-radius: 8px;
  text-align: center;
  margin-left: 5px;
}

.widgets-checkbox li input[type=checkbox]:checked+label {
  color: var(--bs-primary);
}

.widgets-checkbox li input[type=checkbox]:checked+label:before {
  background-color: var(--bs-primary);
  border-color: var(--bs-primary);
}

.widgets-checkbox li input[type=checkbox]:checked+label:after {
  opacity: 1;
}

.widgets-tags {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.widgets-tags li:not(:last-child) * {
  margin-right: 10px;
  margin-bottom: 10px;
}

.widgets-tags li * {
  border: 1px solid #00BF63;
  color: var(--bs-secondary) !important;
  padding: 5px 20px;
  display: block;
  border-radius: 30px;
}

.widgets-tags li *:hover {
  background-color: var(--bs-primary);
  color: #fff !important;
}

.sidebar-area.style-2 .widgets-area {
  padding-top: 30px;
  padding-bottom: 30px;
  padding-left: 30px;
  padding-right: 30px;
}

.sidebar-area.style-2 .widgets-title:before {
  left: -30px;
}

/*----------------------------------------*/
/*  14. Contact
/*----------------------------------------*/

.contact-info-item {
  padding: 35px 45px;
  border-top-left-radius: 50px;
  border-top-right-radius: 50px;
  border-end-start-radius: 50px;
  position: relative;
  box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
  transition: all 0.3s ease 0s;
}

.contact-info-item:hover {
  transform: translateY(-5px);
}

.contact-info-icon {
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  width: 50px;
  height: 50px;
  line-height: 50px;
  position: relative;
  margin-bottom: 20px;
  background: var(--bs-primary);
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  padding: 0 15px;
}

.contact-info-icon i {
  font-size: 20px;
  color: var(--bs-white);
}

.contact-info-content .title {
  font-size: 18px;
}

form#contact {
  box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
  position: relative;
  background-color: #fff;
  border-top-left-radius: 50px;
  border-top-right-radius: 50px;
  border-end-start-radius: 50px;
  text-align: center;
}

form#contact:before {
  content: url("../images/testimonial/user/inner-icon/1-8025fbe139cc596e7f7a9aa86400b956.png");
  position: absolute;
  bottom: -6px;
  right: 0;
}

form#contact #map iframe {
  border-top-left-radius: 50px;
  border-bottom-left-radius: 50px;
  margin-bottom: -7px;
  position: relative;
  z-index: 2;
}

.fill-form {
  padding: 40px 60px 40px 30px;
}

.fill-form .info-post {
  margin-bottom: 20px;
}

.fill-form .icon {
  text-align: center;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
  border-radius: 23px;
  padding: 25px 15px;
}

.fill-form .icon img {
  max-width: 60px;
  display: block;
  margin: 0 auto;
}

.fill-form .icon a {
  margin-top: 15px;
  display: inline-block;
  font-size: 15px;
  font-weight: 500;
  color: #2a2a2a;
  transition: all .3s;
}

.fill-form .icon:hover a {
  color: #F2663B;
}

.fill-form input {
  width: 100%;
  height: 46px;
  outline: none;
  font-size: 15px;
  font-weight: 300;
  color: #2a2a2a;
  padding: 0px 20px;
  margin-top: 30px;
}
.fill-form textarea {
  width: 100%;
  min-width: 100%;
  max-width: 100%;
  max-height: 122px;
  min-height: 100px;
  height: 200px;
  outline: none;
  font-size: 15px;
  font-weight: 300;
  color: #2a2a2a;
  padding: 15px 20px;
  margin-top: 30px;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}

.fill-form textarea::placeholder {
  color: #aaa;
}


.fill-form .form-messege {
  font-size: 14px;
}

.fill-form .form-messege.success {
  color: #6c788c;
}

.fill-form .form-messege.error {
  color: red;
}

/* ---Form Message--- */
.form-message.success {
  color: #146c43;
}

.form-message.error {
  color: #dc3545;
}

/*----------------------*/
/* 15. Car Card - Grid 
/*----------------------*/
.animal-item {
  margin-bottom: 30px;
  margin-top: 10px;
}

.animal-inner {
  background: #fff;
  transition: 0.3s ease-in;
  border-radius: 10px;
  border: 1px solid #f0f0f0;
}

.animal-inner:hover {
  -webkit-box-shadow: 0 0 10px 0 rgb(0 0 0 / 10%);
  box-shadow: 0 0 10px 0 rgb(0 0 0 / 10%);

}



.animal-inner .animal-header {
  position: relative;
  overflow: hidden;
  text-align: center;
  padding: 10px;
}

.animal-inner .animal-content .animal-content-top {

  padding: 24px 20px 10px 20px;
}

.animal-inner .animal-content .animal-content-middle {
  border: 0;
  padding: 15px 20px 19px 20px;
}

.animal-content-bottom {
  border-top: 1px solid #f0f0f0;
  padding: 14px 20px 15px 20px;
  display: flex;
}

.animal-inner .animal-content .animal-content-top-right {
  float: right;
  margin-bottom: 10px;
}

.animal-inner .animal-content .vtitle {
  font-size: 18px;
  font-weight: 500;
  line-height: 24px;
  display: inline-block;
  color: var(--bs-secondary);
}

.inline-group {
  font-size: 14px;
  line-height: 35px;

}

.inline-group.options {
  font-size: 17px;
}

.inline-item {
  display: inline;
  padding-right: 5px;
}

.animal-inner .animal-content .animal-content-middle .inline-item {
  padding-right: 20px;
  white-space: nowrap;
}

.detail-btn {
  margin-left: auto;
  order: 2;
}

.detail-btn a {
  font-size: 14px;
  color: var(--bs-primary);
  line-height: 34px;
}

.detail-btn a:hover {
  color: var(--bs-secondary);
}

.animal-inner .animal-header .animal-img {
  margin-top: 30px
}

.animal-img {
  min-height: 150px;
}

.animal-img img {
  position: absolute;
  left: 0px;
  top: 0px;
  height: 100%;
  width: 100%;
  -o-object-fit: cover;
  object-fit: cover;
}

.animal-inner .animal-header .vprice_wrap {
  position: absolute;
  display: flex;
  background: var(--bs-primary);
  border-radius: 50px;
  padding: 5px 10px;
  font-weight: 500;
  width: fit-content;
  float: left;
  z-index: 2;
  color: var(--bs-white);
  left:3px;
  top:5px;
}
.animal-inner .animal-header .vprice_wrap:hover{
  background: var(--bs-white);
  color: var(--bs-primary);
}

.animal-inner .animal-header .year_wrap {
  float: right;
}


/*----------------------*/
/* 16. Services
/*----------------------*/

.service-content .title {
  color: #3d3d3d;
  font-size: 20px;
}

.service-content .title:hover {
  color: #ee3231;
}

.service-content .short-desc {
  color: #848484;
  font-size: 14px;
  line-height: 25px;
}

.service-meta ul li {
  display: inline-block;
}

.service-meta ul li:not(:last-child) {
  padding-right: 10px;
}

.service-meta ul li i {
  vertical-align: text-bottom;
  margin-right: 5px;
  font-size: 18px;
}
img {
  max-width: 100%;
}

/*----------------------------------------*/
/*  17. Footer
/*----------------------------------------*/

.footer-top {
  background-color: var(--bs-secondary);
}

.widget-title {
  color: #fff;
  font-weight: 500;
  font-size: 18px;
  line-height: 24px;
  padding-bottom: 5px;
}

.widget-item li,
.widget-item a,
.widget-item p {
  font-weight: 300;
  line-height: 28px;
  font-size: 14px;
  color: #bebebe;
}

.widget-item a:hover {
  color: var(--bs-primary);
}

.widget-contact-info ul li {
  font-weight: 300;
  line-height: 28px;
}

.widget-contact-info ul li:not(:last-child) {
  padding-bottom: 5px;
}

.widget-contact-info ul li i {
  vertical-align: middle;
  margin-right: 5px;
  font-size: 24px;
}

.widget-list-item>li:not(:last-child) {
  padding-bottom: 10px;
}

.widget-list-item>li i {
  color: #df414b;
}

/* ---Copyright--- */
.copyright {
  text-align: center;
}

.copyright-text {
  text-transform: capitalize;
  font-weight: 300;
  font-size: 14px;
  color: #8690a1;
}

.copyright-text a {
  color: #8690a1;
}

.copyright-text a:hover {
  color: var(--bs-primary);
}";s:6:"digest";s:32:"c3cd7f77c6156c075385927ecf4dea0f";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:4:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:92:"/Applications/MAMP/htdocs/Arcadia-Zoo/assets/front-assets/images/slider/arrow/left-arrow.png";s:10:"publicPath";s:88:"/assets/front-assets/images/slider/arrow/left-arrow-d6a63f556c0e3f362303d81bd326087a.png";s:23:"publicPathWithoutDigest";s:55:"/assets/front-assets/images/slider/arrow/left-arrow.png";s:15:"publicExtension";s:3:"png";s:7:"content";N;s:6:"digest";s:32:"d6a63f556c0e3f362303d81bd326087a";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:47:"front-assets/images/slider/arrow/left-arrow.png";}i:1;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:93:"/Applications/MAMP/htdocs/Arcadia-Zoo/assets/front-assets/images/slider/arrow/right-arrow.png";s:10:"publicPath";s:89:"/assets/front-assets/images/slider/arrow/right-arrow-5dc9ea88bf49002eecadba632edb13bb.png";s:23:"publicPathWithoutDigest";s:56:"/assets/front-assets/images/slider/arrow/right-arrow.png";s:15:"publicExtension";s:3:"png";s:7:"content";N;s:6:"digest";s:32:"5dc9ea88bf49002eecadba632edb13bb";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:48:"front-assets/images/slider/arrow/right-arrow.png";}i:2;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/Applications/MAMP/htdocs/Arcadia-Zoo/assets/front-assets/images/testimonial/user/inner-icon/1.png";s:10:"publicPath";s:94:"/assets/front-assets/images/testimonial/user/inner-icon/1-8025fbe139cc596e7f7a9aa86400b956.png";s:23:"publicPathWithoutDigest";s:61:"/assets/front-assets/images/testimonial/user/inner-icon/1.png";s:15:"publicExtension";s:3:"png";s:7:"content";N;s:6:"digest";s:32:"8025fbe139cc596e7f7a9aa86400b956";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:53:"front-assets/images/testimonial/user/inner-icon/1.png";}i:3;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/Applications/MAMP/htdocs/Arcadia-Zoo/assets/front-assets/images/testimonial/user/inner-icon/1.png";s:10:"publicPath";s:94:"/assets/front-assets/images/testimonial/user/inner-icon/1-8025fbe139cc596e7f7a9aa86400b956.png";s:23:"publicPathWithoutDigest";s:61:"/assets/front-assets/images/testimonial/user/inner-icon/1.png";s:15:"publicExtension";s:3:"png";s:7:"content";N;s:6:"digest";s:32:"8025fbe139cc596e7f7a9aa86400b956";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:53:"front-assets/images/testimonial/user/inner-icon/1.png";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:26:"front-assets/css/front.css";}