a(document).ready(function() {
        var f, g, h, i, e = a(".btn--ripple");
        e.on("mouseenter", function(b) {
            var c = a(this);
            0 === c.find(".btn--ripple-ink").length && c.prepend("<span class='btn--ripple-ink'></span>"), f = c.find(".btn--ripple-ink"), f.removeClass("btn--ripple-animate"), f.height() || f.width() || (g = Math.max(c.outerWidth(), c.outerHeight()), f.css({
                height: g,
                width: g
            })), h = b.pageX - c.offset().left - f.width() / 2, i = b.pageY - c.offset().top - f.height() / 2, f.css({
                top: i + "px",
                left: h + "px"
            }).addClass("btn--ripple-animate")
        });
}(jQuery);
                  
                  <a href="javascript:void(0)" class="btn--primary btn--ripple"><span class="btn--ripple-ink btn--ripple-animate"></span>Login</a>
                      
        