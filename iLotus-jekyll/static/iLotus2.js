/**
 * author: PIZn
 * version: 1.0
 * site: http://www.pizn.net
 */
$(document).ready(function() {
    //为什么我会写这个呢？
    var iLotus = {
        Version: "1.0",
        Author: "PIZn",
        Site: "http://www.pizn.net"
    }
    /**
     * checkServer for PIZn
     */
    iLotus.checkServer = {
        checked: function() {
            var str = document.domain, rule = /^(www\.pizn\.net)?$/;
            if(!rule.test(str)) {
                window.location.replace(iLotus.Site);
            }
        },
        run: function() {
            this.checked();
        }
    }
    /**
     *  goTop
     */
    iLotus.goTop = {
        nodeName: "J-backTop",
        scrollHeight: "100",
        linkBottom: "120px",
        linkRight: 30,
        linkWidth: 32,
        contentWidth: 720,
        contentBigWidth: 1024,
        _scrollTop: function() {
            if(jQuery.scrollTo) {
                jQuery.scrollTo(0, 800, {queue:true});
            }
        },
        _scrollScreen: function() {
            var that = this, topLink = $('#' + that.nodeName);
            if(jQuery(document).scrollTop() <= that.scrollHeight) {
                topLink.hide();
                return true;
            }  else {
                topLink.fadeIn();
            }
        },
        _resizeWindow: function(right) {
            var that = this, topLink = $('#' + that.nodeName);
            topLink.css({
                'right' : right + 'px',
                'bottom': that.linkBottom
            });
        },
        _changeRight: function() {
            var that = this, right;
            if(jQuery(window).width() > 1440) {
                right = parseInt((jQuery(window).width() - that.contentBigWidth + 1)/2 - that.linkWidth - that.linkRight, 10);
            } else {
                right = parseInt((jQuery(window).width() - that.contentWidth + 1)/2 - that.linkWidth - that.linkRight, 10);
            }
            if( right < 20 ) {
                right = 20;
            }
            return right;
        },
        run: function() {
            var that = this, topLink = $('<a id="' + that.nodeName + '" href="#" class="lotus-backtop"><i class="icon-circle-arrow-up"></i></a>');
            topLink.appendTo($('body'));
            topLink.css({
                'display': 'none',
                'position': 'fixed',
                'right': that._changeRight() + 'px',
                'bottom': that.linkBottom
            });
            if(jQuery.scrollTo) {
                topLink.click(function() {
                    that._scrollTop();
                    return false;
                });
            }
            jQuery(window).resize(function() {
                that._resizeWindow(that._changeRight());
            });
            jQuery(window).scroll(function() {
                that._scrollScreen();

            });

        }
    }
    /**
     * lotus img showBox
     */
    iLotus.showImg = {
        lazyTime: 600,
        createDom: function() {
            $("<div class='lotus-lightbox-overlay' id='J-lightbox-overlay' style='display:none;'></div><div class='lotus-lightbox' id='J-lightbox' data-show='false'><div class='lotus-lightbox-cnt fn-clear' id='J-lightbox-cnt'></div><div class='lotus-lightbox-close'><i class='icon-remove'></i></div></div>").appendTo($('body'));
        },
        showOverLay: function() {
            var that = this;
            var oWidth = $(window).width();
            var oHeight = $(window).height();
            $("#J-lightbox-overlay").css({
                "height": oHeight,
                "width": oWidth
            }).fadeIn(that.lazyTime);
        },
        end: function() {
            var that = this;
            $("#J-lightbox-overlay").fadeOut(that.lazyTime);
            $("#J-lightbox").hide();
            $("#J-lightbox").find(".lotus-lightbox-close").fadeOut(that.lazyTime);
            $("#J-lightbox-cnt").empty();
            $("#J-lightbox").attr("data-show", "false");
        },
        createImg: function(url) {
            var that = this;
            var img = new Image;
            img.src = url;
            var iwidth = img.width;
            var iheight = img.height;

            that.showOverLay();

            var top = $(window).scrollTop() + $(window).height() / 5;
            var left = $(window).scrollLeft();

            $("#J-lightbox").css({
                "top": top + "px",
                "left": left + "px"
            }).fadeIn(that.lazyTime);

            $("#J-lightbox-cnt").animate({
                width: iwidth,
                height: iheight
            }, that.lazyTime, 'swing');

            setTimeout(function() {
                $("#J-lightbox").attr("data-show", "true");
                $("<img src='"+url+"' />").appendTo($("#J-lightbox-cnt")).fadeIn(that.lazyTime);
                $("#J-lightbox").find(".lotus-lightbox-close").css({
                    left: $(window).width()/2 + iwidth/2 + "px"
                }).fadeIn(that.lazyTime);
            }, that.lazyTime);

            $(window).resize(function() {
                if($("#J-lightbox").attr("data-show") == "true"){
                    that.showOverLay();
                    $("#J-lightbox").find(".lotus-lightbox-close").css({
                        left: $(window).width()/2 + iwidth/2 + "px"
                    })
                }
            });
        },
        run: function() {
            var that = this;
            that.createDom();
            var imgArr = $(".lotus-post img");
            imgArr.each(function(index, el){
                $(el).click(function(e) {
                    e.stopPropagation();
                    var imgUrl = el.src;
                    that.createImg(imgUrl);
                });
            });

            $("#J-lightbox-overlay").on('click', function() {
                that.end();
                return false;
            });
            $("#J-lightbox").on('click', function() {
                that.end();
                return false;
            });
            $("#J-lightbox").find(".lotus-lightbox-close").on('click', function(e) {
                that.end();
                return false;
            });
            $("#J-lightbox").find(".lotus-lightbox-cnt").on('click', function(e) {
                e.stopPropagation();
            });
        }
    }
    /**
     * iLotus JS init
     */
    iLotus.init = {
        run: function() {
            iLotus.checkServer.run();
            iLotus.goTop.run();
            iLotus.showImg.run();
        }
    };
    //run
    iLotus.init.run();
});