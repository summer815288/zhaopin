<?php
use yii\helpers\Url;
?>
<link rel="stylesheet" href="/74cms_v3.7_20160412/upload/templates/default/css/user_common.css">
<link rel="stylesheet" href="/74cms_v3.7_20160412/upload/templates/default/css/user_company.css">
<div id="container">
    <?php include"left.php";?>
    <div class="content">
        <div class="company_center_content">
            <dt><h1><em></em>我的公司主页</h1></dt>
            <dd  style="background-color: #fafafa;height: 1000px">
                <div style="height: 192px;">
                    <p style="font-size: 18px;margin-bottom: 10px;margin-left: 20px;">欢迎您，<font color="red"><?php echo $members['username']?></font></p>
                    <div style="height:90px;margin-left: 15px;">
                        <div style="width: 190px;height: 170px;background-image: url('../../public/uploads/3.png');margin-left: 15px;">
                            <div style="margin-left: 330px;width: 300px;height: 85px;">
                                <div style="margin-bottom: 20px"><font size="5"><?php echo$company_profile['companyname']?></font> <a style="margin-left: 10px;color: #0000ff" href="<?php echo Url::to('index.php?r=company/company_profile')?>">编辑</a></div>
                                <div style="color: #a9a9a9;margin-bottom: 15px;font-size: 17px;">上次登录时间：<?php echo date('Y-m-m h:i:s',$members['last_login_time'])?></div>
                                <div style="color: #a9a9a9;margin-bottom: 15px;font-size: 17px;">
                                    <?php if($company_profile['audit']=='0'){echo "<a href='index.php?r=company/company_profile'></a>未完善企业";}elseif($company_profile['audit']=='1'){echo"企业通过";}elseif($company_profile['audit']=='2'){echo"等待认证";}elseif($company_profile['audit']==3){echo"认证未通过";}?>
                                    邮箱未认证</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="width: 910px;height: 50px;background-color: orange">
                    <p style="font-size: 20px;padding: 10px;">我的积分：&nbsp;33点 &nbsp;&nbsp;&nbsp;<a href="">积分充值</a></p>
                </div>
                <div style="border-bottom: 1px solid #dcdcdc;height: 1px;margin-top: 10px;margin-bottom: 10px;"></div>
                <div style="width: 910px;height:200px:">
                    <div>
                        <table style="float: left;width:200px;margin-left: 100px;border-right: 1px dashed #808080">
                            <tr><td><font size="4" style="margin-left: 30px;">职位管理</font></td></tr>
                            <tr><td><span style="margin: 20px 15px;font-size: 15px;color: #a9a9a9">发布中的职位：<font color="red">2</font></span></td></tr>
                            <tr><td><span style="margin: 20px 15px;font-size: 15px;color: #a9a9a9">审核中的职位：<font color="red">0</font></span></td></tr>
                            <tr><td><input type="submit" class="create" style="width: 160px;height: 40px;background-color: #0000ff;font-size: 15px;color: #ffffff;margin-top: 20px;" value="发布职位"/></td></tr>
                            <script>
                                $(".create").click(function(){
                                    window.location='index.php?r=company/create';
                                })
                            </script>
                        </table>
                        <table style="float: left;width:200px;margin-left: 100px;border-right: 1px dashed #808080">
                            <tr><td><font size="4" style="margin-left: 30px;">简历管理</font></td></tr>
                            <tr><td><span style="margin: 20px 15px;font-size: 15px;color: #a9a9a9">未查看简历：<font color="red">2</font></span></td></tr>
                            <tr><td><span style="margin: 20px 15px;font-size: 15px;color: #a9a9a9">已下载简历：<font color="red">0</font></span></td></tr>
                            <tr><td><input type="submit" style="width: 160px;height: 40px;background-color: #0000ff;font-size: 15px;color: #ffffff;margin-top: 20px;" value="管理简历"/></td></tr>
                        </table>
                        <table style="float: left;width:200px;margin-left: 100px; ">
                            <tr><td><font size="4" style="margin-left: 30px;">简历搜索</font></td></tr>
                            <tr><td><span style="margin: 20px 15px;font-size: 15px;color: #a9a9a9">已收藏简历：<font color="red">2</font></span></td></tr>
                            <tr><td><input type="submit" style="width: 160px;height: 40px;background-color: #0000ff;font-size: 15px;color: #ffffff;margin-top: 20px;" value="搜索简历"/></td></tr>
                        </table>
                    </div>
                </div>
                <div style="clear: both;border-bottom: 1px solid #dcdcdc;height: 1px;"></div>
                <div>
                    <a style="float: right;font-size: 15px;margin-right: 20px;" href="">查看更多</a>
                    <span style="float: left;font-size: 17px;margin-left: 20px;font-weight: bold">推荐简历</span>
                </div>
            </dd>
        </div>

        </div>
    </div>
<script>
    /**
     *  Ajax Autocomplete for jQuery, version 1.1.3
     *  (c) 2010 Tomas Kirda
     *
     *  Ajax Autocomplete for jQuery is freely distributable under the terms of an MIT-style license.
     *  For details, see the web site: http://www.devbridge.com/projects/autocomplete/jquery/
     *
     *  Last Review: 04/19/2010
     */

    /*jslint onevar: true, evil: true, nomen: true, eqeqeq: true, bitwise: true, regexp: true, newcap: true, immed: true */
    /*global window: true, document: true, clearInterval: true, setInterval: true, jQuery: true */

    (function($) {

        var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');

        function fnFormatResult(value, data, currentValue) {
            var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
            return value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>');
        }

        function Autocomplete(el, options) {
            this.el = $(el);
            this.el.attr('autocomplete', 'off');
            this.suggestions = [];
            this.data = [];
            this.badQueries = [];
            this.selectedIndex = -1;
            this.currentValue = this.el.val();
            this.intervalId = 0;
            this.cachedResponse = [];
            this.onChangeInterval = null;
            this.ignoreValueChange = false;
            this.serviceUrl = options.serviceUrl;
            this.isLocal = false;
            this.options = {
                autoSubmit: false,
                minChars: 1,
                maxHeight: 300,
                deferRequestBy: 0,
                width: 0,
                highlight: true,
                params: {},
                fnFormatResult: fnFormatResult,
                delimiter: null,
                zIndex: 9999
            };
            this.initialize();
            this.setOptions(options);
        }

        $.fn.autocomplete = function(options) {
            return new Autocomplete(this.get(0)||$('<input />'), options);
        };


        Autocomplete.prototype = {

            killerFn: null,

            initialize: function() {

                var me, uid, autocompleteElId;
                me = this;
                uid = Math.floor(Math.random()*0x100000).toString(16);
                autocompleteElId = 'Autocomplete_' + uid;

                this.killerFn = function(e) {
                    if ($(e.target).parents('.autocomplete').size() === 0) {
                        me.killSuggestions();
                        me.disableKillerFn();
                    }
                };

                if (!this.options.width) { this.options.width = this.el.width(); }
                this.mainContainerId = 'AutocompleteContainter_' + uid;

                $('<div id="' + this.mainContainerId + '" style="position:absolute;z-index:9999;"><div class="autocomplete-w1"><div class="autocomplete" id="' + autocompleteElId + '" style="display:none; width:300px;"></div></div></div>').appendTo('body');

                this.container = $('#' + autocompleteElId);
                this.fixPosition();
                if (window.opera) {
                    this.el.keypress(function(e) { me.onKeyPress(e); });
                } else {
                    this.el.keydown(function(e) { me.onKeyPress(e); });
                }
                this.el.keyup(function(e) { me.onKeyUp(e); });
                this.el.blur(function() { me.enableKillerFn(); });
                this.el.focus(function() { me.fixPosition(); });
            },

            setOptions: function(options){
                var o = this.options;
                $.extend(o, options);
                if(o.lookup){
                    this.isLocal = true;
                    if($.isArray(o.lookup)){ o.lookup = { suggestions:o.lookup, data:[] }; }
                }
                $('#'+this.mainContainerId).css({ zIndex:o.zIndex+9999 });
                this.container.css({ maxHeight: o.maxHeight + 'px', width:o.width});
            },

            clearCache: function(){
                this.cachedResponse = [];
                this.badQueries = [];
            },

            disable: function(){
                this.disabled = true;
            },

            enable: function(){
                this.disabled = false;
            },

            fixPosition: function() {
                var offset = this.el.offset();
                $('#' + this.mainContainerId).css({ top: (offset.top + this.el.innerHeight())-2 + 'px', left: offset.left + 'px' });
            },

            enableKillerFn: function() {
                var me = this;
                $(document).bind('click', me.killerFn);
            },

            disableKillerFn: function() {
                var me = this;
                $(document).unbind('click', me.killerFn);
            },

            killSuggestions: function() {
                var me = this;
                this.stopKillSuggestions();
                this.intervalId = window.setInterval(function() { me.hide(); me.stopKillSuggestions(); }, 300);
            },

            stopKillSuggestions: function() {
                window.clearInterval(this.intervalId);
            },

            onKeyPress: function(e) {
                if (this.disabled || !this.enabled) { return; }
                // return will exit the function
                // and event will not be prevented
                switch (e.keyCode) {
                    case 27: //KEY_ESC:
                        this.el.val(this.currentValue);
                        this.hide();
                        break;
                    case 9: //KEY_TAB:
                    case 13: //KEY_RETURN:
                        if (this.selectedIndex === -1) {
                            this.hide();
                            return;
                        }
                        this.select(this.selectedIndex);
                        if(e.keyCode === 9){ return; }
                        break;
                    case 38: //KEY_UP:
                        this.moveUp();
                        break;
                    case 40: //KEY_DOWN:
                        this.moveDown();
                        break;
                    default:
                        return;
                }
                e.stopImmediatePropagation();
                e.preventDefault();
            },

            onKeyUp: function(e) {
                if(this.disabled){ return; }
                switch (e.keyCode) {
                    case 38: //KEY_UP:
                    case 40: //KEY_DOWN:
                        return;
                }
                clearInterval(this.onChangeInterval);
                if (this.currentValue !== this.el.val()) {
                    if (this.options.deferRequestBy > 0) {
                        // Defer lookup in case when value changes very quickly:
                        var me = this;
                        this.onChangeInterval = setInterval(function() { me.onValueChange(); }, this.options.deferRequestBy);
                    } else {
                        this.onValueChange();
                    }
                }
            },

            onValueChange: function() {
                clearInterval(this.onChangeInterval);
                this.currentValue = this.el.val();
                var q = this.getQuery(this.currentValue);
                this.selectedIndex = -1;
                if (this.ignoreValueChange) {
                    this.ignoreValueChange = false;
                    return;
                }
                if (q === '' || q.length < this.options.minChars) {
                    this.hide();
                } else {
                    this.getSuggestions(q);
                }
            },

            getQuery: function(val) {
                var d, arr;
                d = this.options.delimiter;
                if (!d) { return $.trim(val); }
                arr = val.split(d);
                return $.trim(arr[arr.length - 1]);
            },

            getSuggestionsLocal: function(q) {
                var ret, arr, len, val, i;
                arr = this.options.lookup;
                len = arr.suggestions.length;
                ret = { suggestions:[], data:[] };
                q = q.toLowerCase();
                for(i=0; i< len; i++){
                    val = arr.suggestions[i];
                    if(val.toLowerCase().indexOf(q) === 0){
                        ret.suggestions.push(val);
                        ret.data.push(arr.data[i]);
                    }
                }
                return ret;
            },

            getSuggestions: function(q) {
                var cr, me;
                cr = this.isLocal ? this.getSuggestionsLocal(q) : this.cachedResponse[q];
                if (cr && $.isArray(cr.suggestions)) {
                    this.suggestions = cr.suggestions;
                    this.data = cr.data;
                    this.suggest();
                } else if (!this.isBadQuery(q)) {
                    me = this;
                    me.options.params.query = q;
                    $.get(this.serviceUrl, me.options.params, function(txt) { me.processResponse(txt); }, 'text');
                }
            },

            isBadQuery: function(q) {
                var i = this.badQueries.length;
                while (i--) {
                    if (q.indexOf(this.badQueries[i]) === 0) { return true; }
                }
                return false;
            },

            hide: function() {
                this.enabled = false;
                this.selectedIndex = -1;
                this.container.hide();
            },

            suggest: function() {
                if (this.suggestions.length === 0) {
                    this.hide();
                    return;
                }

                var me, len, div, f, v, i, s, mOver, mClick;
                me = this;
                len = this.suggestions.length;
                f = this.options.fnFormatResult;
                v = this.getQuery(this.currentValue);
                mOver = function(xi) { return function() { me.activate(xi); }; };
                mClick = function(xi) { return function() { me.select(xi); }; };
                this.container.hide().empty();
                for (i = 0; i < len; i++) {
                    s = this.suggestions[i];
                    div = $((me.selectedIndex === i ? '<div class="selected"' : '<div') + ' title="' + s + '">' + f(s, this.data[i], v) + '</div>');
                    div.mouseover(mOver(i));
                    div.click(mClick(i));
                    this.container.append(div);
                }
                this.enabled = true;
                this.container.show();
            },

            processResponse: function(text) {
                var response;
                try {
                    response = eval('(' + text + ')');
                } catch (err) { return; }
                if (!$.isArray(response.data)) { response.data = []; }
                if(!this.options.noCache){
                    this.cachedResponse[response.query] = response;
                    if (response.suggestions.length === 0) { this.badQueries.push(response.query); }
                }
                if (response.query === this.getQuery(this.currentValue)) {
                    this.suggestions = response.suggestions;
                    this.data = response.data;
                    this.suggest();
                }
            },

            activate: function(index) {
                var divs, activeItem;
                divs = this.container.children();
                // Clear previous selection:
                if (this.selectedIndex !== -1 && divs.length > this.selectedIndex) {
                    $(divs.get(this.selectedIndex)).removeClass();
                }
                this.selectedIndex = index;
                if (this.selectedIndex !== -1 && divs.length > this.selectedIndex) {
                    activeItem = divs.get(this.selectedIndex);
                    $(activeItem).addClass('selected');
                }
                return activeItem;
            },

            deactivate: function(div, index) {
                div.className = '';
                if (this.selectedIndex === index) { this.selectedIndex = -1; }
            },

            select: function(i) {
                var selectedValue, f;
                selectedValue = this.suggestions[i];
                if (selectedValue) {
                    this.el.val(selectedValue);
                    if (this.options.autoSubmit) {
                        f = this.el.parents('form');
                        if (f.length > 0) { f.get(0).submit(); }
                    }
                    this.ignoreValueChange = true;
                    this.hide();
                    this.onSelect(i);
                }
            },

            moveUp: function() {
                if (this.selectedIndex === -1) { return; }
                if (this.selectedIndex === 0) {
                    this.container.children().get(0).className = '';
                    this.selectedIndex = -1;
                    this.el.val(this.currentValue);
                    return;
                }
                this.adjustScroll(this.selectedIndex - 1);
            },

            moveDown: function() {
                if (this.selectedIndex === (this.suggestions.length - 1)) { return; }
                this.adjustScroll(this.selectedIndex + 1);
            },

            adjustScroll: function(i) {
                var activeItem, offsetTop, upperBound, lowerBound;
                activeItem = this.activate(i);
                offsetTop = activeItem.offsetTop;
                upperBound = this.container.scrollTop();
                lowerBound = upperBound + this.options.maxHeight - 25;
                if (offsetTop < upperBound) {
                    this.container.scrollTop(offsetTop);
                } else if (offsetTop > lowerBound) {
                    this.container.scrollTop(offsetTop - this.options.maxHeight + 25);
                }
                this.el.val(this.getValue(this.suggestions[i]));
            },

            onSelect: function(i) {
                var me, fn, s, d;
                me = this;
                fn = me.options.onSelect;
                s = me.suggestions[i];
                d = me.data[i];
                me.el.val(me.getValue(s));
                if ($.isFunction(fn)) { fn(s, d, me.el); }
            },

            getValue: function(value){
                var del, currVal, arr, me;
                me = this;
                del = me.options.delimiter;
                if (!del) { return value; }
                currVal = me.currentValue;
                arr = currVal.split(del);
                if (arr.length === 1) { return value; }
                return currVal.substr(0, currVal.length - arr[arr.length - 1].length) + value;
            }

        };

    }(jQuery));
</script>