//作者：dabai QQ137991323
//用途：图片放大镜
//用法：
/*
* <img src="小图.jpg" class="free-zoomer" data-img-big="大图.jpg" />
*
*/
var zoomerViewPanelId = "free-zoomer-view-panel";
function FreeZoomer(img) {
    var rect = null; //当前图片四个角坐标
    var ready = false; //状态，是否已经加载完成大图
    var panel = null; //大图容器
    var bigImg = null; //大图对象
    var bigRect = null; //大图坐标
    var widthMultiple = 1; //宽度倍数，大图的宽度/小图的宽度
    var heightMultiple = 1; //高度倍数，大图的高度/小图的高度
    var viewWidth = 0; //放大镜容器宽度
    var viewHeight = 0;//放大镜容器高度
    img.onmouseover = function (event) {
        rect = GetAbsolutePosition(img);
        panel = ShowViewPanel(rect.right, rect.top);
        viewHeight = GetHeight(panel);
        viewWidth = GetWidth(panel);
        var src = img.getAttribute("data-img-big");
        bigImg = new Image();
        bigImg.src = src;
        //自定义函数，当图片加载完成后，运行
        bigImg.Loaded = function () {
            ready = true;
            panel.innerHTML = "";
            panel.appendChild(bigImg);
            bigRect = GetAbsolutePosition(bigImg);
            panel.className = "";
            widthMultiple = GetWidth(bigImg) / GetWidth(img);
            heightMultiple = GetHeight(bigImg) / GetHeight(img);
        }
        if (bigImg.complete) {
            bigImg.Loaded();
        }
        else {
            bigImg.onload = function () {
                bigImg.Loaded();
            }
        }
    };
    img.onmousemove = function (event) {
        if (ready && (rect != null)) {//不要问我为什么要rect!=null,我也不知道，ie6下会报错。。估计是还没给rect设置值，已经触发move事件
            event = event ? event : window.event;
            var scrollLeft = document.documentElement.scrollLeft || document.body.scrollLeft;
            var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
            var relativeScrollLeft = Math.abs((rect.left - scrollLeft - event.clientX) * widthMultiple);
            if (relativeScrollLeft > (viewWidth / 2)) {
                relativeScrollLeft = relativeScrollLeft - (viewWidth / 2);
            }
            else {
                relativeScrollLeft = 0;
            }
            var relativeScrollTop = Math.abs((rect.top - scrollTop - event.clientY) * heightMultiple);
            if (relativeScrollTop > (viewHeight / 2)) {
                relativeScrollTop = relativeScrollTop - (viewHeight / 2);
            }
            else {
                relativeScrollTop = 0;
            }
            panel.scrollLeft = relativeScrollLeft;
            panel.scrollTop = relativeScrollTop;
        }
    };
    img.onmouseout = function (event) {
        HideViewPanel();
    }
}
//获取放大容器
function GetViewPanel() {
    var panel = document.getElementById(zoomerViewPanelId);
    if (panel == null) {
        panel = document.createElement("div");
        panel.id = zoomerViewPanelId;
        document.body.appendChild(panel);
    }
    return panel;
}
//显示放大器
function ShowViewPanel(left, top) {
    var panel = GetViewPanel();
    panel.style.left = (left + 10) + "px";
    panel.style.top = top + "px";
    panel.style.display = "block";
    panel.className = "loading";
    return panel;
}
//隐藏放大容器
function HideViewPanel() {
    var panel = document.getElementById(zoomerViewPanelId);
    if (panel != null) {
        panel.style.display = "none";
    }
}
//获取对象高度
function GetHeight(ele) {
    var paddingTop = parseInt(ele.style.paddingTop);
    if (!paddingTop) {
        paddingTop = 0;
    }
    var paddingBottom = parseInt(ele.style.paddingBottom);
    if (!paddingBottom) {
        paddingBottom = 0;
    }
    return ele.clientHeight - paddingTop - paddingBottom;
}
//获取对象宽度
function GetWidth(ele) {
    var paddingLeft = parseInt(ele.style.paddingLeft);
    if (!paddingLeft) {
        paddingLeft = 0;
    }
    var paddingRight = parseInt(ele.style.paddingRight);
    if (!paddingRight) {
        paddingRight = 0;
    }
    return ele.clientWidth - paddingLeft - paddingRight;
}
//获取对象坐标
function GetAbsolutePosition(ele) {
    var rect = ele.getBoundingClientRect();
    var padding = GetPadding(ele);
    var border = GetBorder(ele);
    var position = {};
    var scrollLeft = document.documentElement.scrollLeft || document.body.scrollLeft;
    var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    position.left = rect.left + padding.left + border.left + scrollLeft;
    position.top = rect.top + padding.top + border.top + scrollTop;
    position.bottom = rect.bottom - padding.bottom - border.bottom + scrollTop;
    position.right = rect.right - padding.right - border.right + scrollLeft;
    return position;
}
//获取对象4个边距
function GetPadding(ele) {
    var padding = {};
    padding.top = parseInt(ele.style.paddingTop);
    if (!padding.top) {
        padding.top = 0;
    }
    padding.bottom = parseInt(ele.style.paddingBottom);
    if (!padding.bottom) {
        padding.bottom = 0;
    }
    padding.left = parseInt(ele.style.paddingLeft);
    if (!padding.left) {
        padding.left = 0;
    }
    padding.right = parseInt(ele.style.paddingRight);
    if (!padding.right) {
        padding.right = 0;
    }
    return padding;
}
//获取对象4个边框
function GetBorder(ele) {
    var border = {};
    border.top = parseInt(ele.style.borderTop);
    if (!border.top) {
        border.top = 0;
    }
    border.bottom = parseInt(ele.style.borderBottom);
    if (!border.bottom) {
        border.bottom = 0;
    }
    border.left = parseInt(ele.style.borderLeft);
    if (!border.left) {
        border.left = 0;
    }
    border.right = parseInt(ele.style.borderRight);
    if (!border.right) {
        border.right = 0;
    }
    return border;
}
//查找是否带有className
function hasClass(element, className) { return new RegExp("(^|\\s)" + className + "(\\s|$)").test(element.className); }
//初始化各图片放大镜
function InitFreeZoomer() {
    var imgs = document.getElementsByTagName("img");
    for (var i = 0; i < imgs.length; i++) {
        var img = imgs[i];
        if (hasClass(img, "free-zoomer")) {
            FreeZoomer(img);
        }
    }
}
//加载事件
function AddEventListener(obj, eventName, func) {
    if (obj.addEventListener) {
        obj.addEventListener(eventName, func, false);
    }
    else {
        if (obj.attachEvent) {
            obj.attachEvent("on" + eventName, func)
        }
        else {
            alert("FreeZoomer无法加载事件！");
        }
    }
}
AddEventListener(window, "load", InitFreeZoomer);