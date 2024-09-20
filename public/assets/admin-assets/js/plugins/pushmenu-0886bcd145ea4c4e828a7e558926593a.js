
 /**
 * --------------------------------------------
 *  PushMenu.js
 * --------------------------------------------
 */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports, require('jquery')) :
    typeof define === 'function' && define.amd ? define(['exports', 'jquery'], factory) :
    (global = typeof globalThis !== 'undefined' ? globalThis : global || self, factory(global.adminlte = {}, global.jQuery));
  })(this, (function (exports, $) { 'use strict';
  
    function _interopDefaultLegacy (e) { return e && typeof e === 'object' && 'default' in e ? e : { 'default': e }; }
  
    var $__default = _interopDefaultLegacy($);
    
   
    /**
     * Constants
     * ====================================================
     */
  
    var NAME = 'PushMenu';
    var DATA_KEY = 'vp.pushmenu';
    var EVENT_KEY = "." + DATA_KEY;
    var JQUERY_NO_CONFLICT = $__default["default"].fn[NAME];
    var EVENT_COLLAPSED = "collapsed" + EVENT_KEY;
    var EVENT_COLLAPSED_DONE = "collapsed-done" + EVENT_KEY;
    var EVENT_SHOWN = "shown" + EVENT_KEY;
    var SELECTOR_TOGGLE_BUTTON$1 = '[data-widget="pushmenu"]';
    var SELECTOR_BODY = 'body';
    var SELECTOR_OVERLAY = '#sidebar-overlay';
    var SELECTOR_WRAPPER = '.wrapper';
    var CLASS_NAME_COLLAPSED = 'sidebar-collapse';
    var CLASS_NAME_OPEN = 'sidebar-open';
    var CLASS_NAME_IS_OPENING$1 = 'sidebar-is-opening';
    var CLASS_NAME_CLOSED = 'sidebar-closed';
    var Default = {
      autoCollapseSize: 992,
      enableRemember: false,
      noTransitionAfterReload: true,
      animationSpeed: 300
    };
   
  
    var PushMenu = function () {
      function PushMenu(element, options) {
        this._element = element;
        this._options = $__default["default"].extend({}, Default, options);
  
        if ($__default["default"](SELECTOR_OVERLAY).length === 0) {
          this._addOverlay();
        }
  
        this._init();
      } 
  
  
      var _proto = PushMenu.prototype;
  
      _proto.expand = function expand() {
        var $bodySelector = $__default["default"](SELECTOR_BODY);
  
        if (this._options.autoCollapseSize && $__default["default"](window).width() <= this._options.autoCollapseSize) {
          $bodySelector.addClass(CLASS_NAME_OPEN);
        }
  
        $bodySelector.addClass(CLASS_NAME_IS_OPENING$1).removeClass(CLASS_NAME_COLLAPSED + " " + CLASS_NAME_CLOSED).delay(50).queue(function () {
          $bodySelector.removeClass(CLASS_NAME_IS_OPENING$1);
          $__default["default"](this).dequeue();
        });
  
        if (this._options.enableRemember) {
          localStorage.setItem("remember" + EVENT_KEY, CLASS_NAME_OPEN);
        }
  
        $__default["default"](this._element).trigger($__default["default"].Event(EVENT_SHOWN));
      };
  
      _proto.collapse = function collapse() {
        var _this = this;
  
        var $bodySelector = $__default["default"](SELECTOR_BODY);
  
        if (this._options.autoCollapseSize && $__default["default"](window).width() <= this._options.autoCollapseSize) {
          $bodySelector.removeClass(CLASS_NAME_OPEN).addClass(CLASS_NAME_CLOSED);
        }
  
        $bodySelector.addClass(CLASS_NAME_COLLAPSED);
  
        if (this._options.enableRemember) {
          localStorage.setItem("remember" + EVENT_KEY, CLASS_NAME_COLLAPSED);
        }
  
        $__default["default"](this._element).trigger($__default["default"].Event(EVENT_COLLAPSED));
        setTimeout(function () {
          $__default["default"](_this._element).trigger($__default["default"].Event(EVENT_COLLAPSED_DONE));
        }, this._options.animationSpeed);
      };
  
      _proto.toggle = function toggle() {
        if ($__default["default"](SELECTOR_BODY).hasClass(CLASS_NAME_COLLAPSED)) {
          this.expand();
        } else {
          this.collapse();
        }
      };
  
      _proto.autoCollapse = function autoCollapse(resize) {
        if (resize === void 0) {
          resize = false;
        }
  
        if (!this._options.autoCollapseSize) {
          return;
        }
  
        var $bodySelector = $__default["default"](SELECTOR_BODY);
  
        if ($__default["default"](window).width() <= this._options.autoCollapseSize) {
          if (!$bodySelector.hasClass(CLASS_NAME_OPEN)) {
            this.collapse();
          }
        } else if (resize === true) {
          if ($bodySelector.hasClass(CLASS_NAME_OPEN)) {
            $bodySelector.removeClass(CLASS_NAME_OPEN);
          } else if ($bodySelector.hasClass(CLASS_NAME_CLOSED)) {
            this.expand();
          }
        }
      };
  
      _proto.remember = function remember() {
        if (!this._options.enableRemember) {
          return;
        }
  
        var $body = $__default["default"]('body');
        var toggleState = localStorage.getItem("remember" + EVENT_KEY);
  
        if (toggleState === CLASS_NAME_COLLAPSED) {
          if (this._options.noTransitionAfterReload) {
            $body.addClass('hold-transition').addClass(CLASS_NAME_COLLAPSED).delay(50).queue(function () {
              $__default["default"](this).removeClass('hold-transition');
              $__default["default"](this).dequeue();
            });
          } else {
            $body.addClass(CLASS_NAME_COLLAPSED);
          }
        } else if (this._options.noTransitionAfterReload) {
          $body.addClass('hold-transition').removeClass(CLASS_NAME_COLLAPSED).delay(50).queue(function () {
            $__default["default"](this).removeClass('hold-transition');
            $__default["default"](this).dequeue();
          });
        } else {
          $body.removeClass(CLASS_NAME_COLLAPSED);
        }
      } // Private
      ;
  
      _proto._init = function _init() {
        var _this2 = this;
  
        this.remember();
        this.autoCollapse();
        $__default["default"](window).resize(function () {
          _this2.autoCollapse(true);
        });
      };
  
      _proto._addOverlay = function _addOverlay() {
        var _this3 = this;
  
        var overlay = $__default["default"]('<div />', {
          id: 'sidebar-overlay'
        });
        overlay.on('click', function () {
          _this3.collapse();
        });
        $__default["default"](SELECTOR_WRAPPER).append(overlay);
      } // Static
      ;
  
      PushMenu._jQueryInterface = function _jQueryInterface(operation) {
        return this.each(function () {
          var data = $__default["default"](this).data(DATA_KEY);
  
          var _options = $__default["default"].extend({}, Default, $__default["default"](this).data());
  
          if (!data) {
            data = new PushMenu(this, _options);
            $__default["default"](this).data(DATA_KEY, data);
          }
  
          if (typeof operation === 'string' && /collapse|expand|toggle/.test(operation)) {
            data[operation]();
          }
        });
      };
  
      return PushMenu;
    }();
  
  
  
    $__default["default"](document).on('click', SELECTOR_TOGGLE_BUTTON$1, function (event) {
      event.preventDefault();
      var button = event.currentTarget;
  
      if ($__default["default"](button).data('widget') !== 'pushmenu') {
        button = $__default["default"](button).closest(SELECTOR_TOGGLE_BUTTON$1);
      }
  
      PushMenu._jQueryInterface.call($__default["default"](button), 'toggle');
    });
    $__default["default"](window).on('load', function () {
      PushMenu._jQueryInterface.call($__default["default"](SELECTOR_TOGGLE_BUTTON$1));
    });
   
    $__default["default"].fn[NAME] = PushMenu._jQueryInterface;
    $__default["default"].fn[NAME].Constructor = PushMenu;
  
    $__default["default"].fn[NAME].noConflict = function () {
      $__default["default"].fn[NAME] = JQUERY_NO_CONFLICT;
      return PushMenu._jQueryInterface;
    };
  
    exports.PushMenu = PushMenu;
  
    Object.defineProperty(exports, '__esModule', { value: true });
  
  }));
  