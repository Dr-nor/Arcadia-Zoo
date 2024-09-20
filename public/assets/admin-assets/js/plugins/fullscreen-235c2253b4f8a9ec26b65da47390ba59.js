/**
 * --------------------------------------------
 *  Fullscreen.js
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
  
    var NAME = 'Fullscreen';
    var DATA_KEY = 'vp.fullscreen';
    var JQUERY_NO_CONFLICT = $__default["default"].fn[NAME];
    var SELECTOR_DATA_WIDGET = '[data-widget="fullscreen"]';
    var SELECTOR_ICON = SELECTOR_DATA_WIDGET + " i";
    var EVENT_FULLSCREEN_CHANGE = 'webkitfullscreenchange mozfullscreenchange fullscreenchange MSFullscreenChange';
    var Default = {
      minimizeIcon: 'fa-compress-arrows-alt',
      maximizeIcon: 'fa-expand-arrows-alt'
    };
    /**
     * Class Definition
     * ====================================================
     */
  
    var Fullscreen = function () {
      function Fullscreen(_element, _options) {
        this.element = _element;
        this.options = $__default["default"].extend({}, Default, _options);
      } 
  
  
      var _proto = Fullscreen.prototype;
  
      _proto.toggle = function toggle() {
        if (document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement || document.msFullscreenElement) {
          this.windowed();
        } else {
          this.fullscreen();
        }
      };
  
      _proto.toggleIcon = function toggleIcon() {
        if (document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement || document.msFullscreenElement) {
          $__default["default"](SELECTOR_ICON).removeClass(this.options.maximizeIcon).addClass(this.options.minimizeIcon);
        } else {
          $__default["default"](SELECTOR_ICON).removeClass(this.options.minimizeIcon).addClass(this.options.maximizeIcon);
        }
      };
  
      _proto.fullscreen = function fullscreen() {
        if (document.documentElement.requestFullscreen) {
          document.documentElement.requestFullscreen();
        } else if (document.documentElement.webkitRequestFullscreen) {
          document.documentElement.webkitRequestFullscreen();
        } else if (document.documentElement.msRequestFullscreen) {
          document.documentElement.msRequestFullscreen();
        }
      };
  
      _proto.windowed = function windowed() {
        if (document.exitFullscreen) {
          document.exitFullscreen();
        } else if (document.webkitExitFullscreen) {
          document.webkitExitFullscreen();
        } else if (document.msExitFullscreen) {
          document.msExitFullscreen();
        }
      } // Static
      ;
  
      Fullscreen._jQueryInterface = function _jQueryInterface(config) {
        var data = $__default["default"](this).data(DATA_KEY);
  
        if (!data) {
          data = $__default["default"](this).data();
        }
  
        var _options = $__default["default"].extend({}, Default, typeof config === 'object' ? config : data);
  
        var plugin = new Fullscreen($__default["default"](this), _options);
        $__default["default"](this).data(DATA_KEY, typeof config === 'object' ? config : data);
  
        if (typeof config === 'string' && /toggle|toggleIcon|fullscreen|windowed/.test(config)) {
          plugin[config]();
        } else {
          plugin.init();
        }
      };
  
      return Fullscreen;
    }();
  
  
    $__default["default"](document).on('click', SELECTOR_DATA_WIDGET, function () {
      Fullscreen._jQueryInterface.call($__default["default"](this), 'toggle');
    });
    $__default["default"](document).on(EVENT_FULLSCREEN_CHANGE, function () {
      Fullscreen._jQueryInterface.call($__default["default"](SELECTOR_DATA_WIDGET), 'toggleIcon');
    });
  
  
    $__default["default"].fn[NAME] = Fullscreen._jQueryInterface;
    $__default["default"].fn[NAME].Constructor = Fullscreen;
  
    $__default["default"].fn[NAME].noConflict = function () {
      $__default["default"].fn[NAME] = JQUERY_NO_CONFLICT;
      return Fullscreen._jQueryInterface;
    };
  
    exports.Fullscreen = Fullscreen;
  
    Object.defineProperty(exports, '__esModule', { value: true });
  
  }));
  