class Site {
    constructor() {
        this.navLi = jQuery('#nav li').children('ul').hide().end();
        this.init();
    }

    init() {
        this.setMenu();
    }

    setMenu() {
        jQuery.each(this.navLi, function () {
            if (jQuery(this).children('ul')[0]) {
                jQuery(this)
                    .append('<span />')
                    .children('span')
                    .addClass('hasChildren');
            }
        });

        this.navLi.hover(
            function () {
                // mouseover
                jQuery(this).find('> ul').stop(true, true).slideDown('slow', 'easeOutBounce');
            },
            function () {
                // mouseout
                jQuery(this).find('> ul').stop(true, true).hide();
            }
        );
    }
}

new Site();
