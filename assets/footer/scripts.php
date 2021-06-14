<!-- start scroll to top -->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/theme-vendors.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>

        <!-- revolution js files -->
        <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>

        <!-- <script>
$('#rev_slider_28_1').show().revolution({
    delay: 10000,
    sliderLayout: 'fullscreen',
    responsiveLevels: [1199, 1025, 768, 560],
    visibilityLevels: [1199, 1025, 768, 560],
    disableProgressBar: "on",
    navigation: {
        keyboardNavigation: 'on',
        keyboard_direction: 'horizontal',
        onHoverStop: 'off',
        arrows: {
            style: "uranus",
            enable: true,
            hide_onmobile: false,
            hide_onleave: false,
            tmp: '',
            left: {
                h_align: "left",
                v_align: "center",
                h_offset: 20,
                v_offset: 0
            },
            right: {
                h_align: "right",
                v_align: "center",
                h_offset: 20,
                v_offset: 0
            }
        },
        bullets: {
            enable: true,
            style: "hermes",
            hide_onleave: false,
            h_align: "center",
            v_align: "bottom",
            h_offset: 0,
            v_offset: 50,
            space: 11
        },
        touch: {
            touchenabled: "on",
            swipe_threshold: 75,
            swipe_min_touches: 1,
            swipe_direction: "horizontal",
            drag_block_vertical: false
        }
    },
    fullScreenAutoWidth: "on",
    fullScreenAlignForce: "off",
    fullScreenOffsetContainer: "",
    fullScreenOffset: "118px",
    lazyType: "none",
    shadow: 0,
    spinner: "spinner0",
    stopLoop: "off",
    stopAfterLoops: -1,
    stopAtSlide: -1,
});
        </script> -->

        <script>
            $( window ).on( 'load', function () {

            });
        </script>
        <script type="text/javascript">
var revapi266,
        tpj;
(function () {
    if (!/loaded|interactive|complete/.test(document.readyState))
        document.addEventListener("DOMContentLoaded", onLoad);
    else
        onLoad();
    function onLoad() {
        if (tpj === undefined) {
            tpj = jQuery;
            if ("off" == "on")
                tpj.noConflict();
        }
        if (tpj("#rev_slider_30_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_30_1");
        } else {
            var revOffset = tpj(window).width() <= 991 ? '73px' : '';
//                        if( tpj( window ).width() <= 991 && ( tpj( 'header nav.navbar' ).hasClass( 'top-space' ) || tpj( 'header nav.navbar' ).hasClass( 'mobile-top-space' ) ) ) {
//                            revOffset = tpj( 'header nav.navbar' ).outerHeight();
//                        }
            revapi266 = tpj("#rev_slider_30_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "revolution/js/",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        touchOnDesktop: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        enable: true,
                        style: 'ares',
                        tmp: '<span class="tp-arr-titleholder alt-font">{{title}}</span>',
                        rtl: false,
                        hide_onleave: false,
                        hide_onmobile: true,
                        hide_under: 480,
                        hide_over: 9999,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        left: {
                            container: 'slider',
                            h_align: 'left',
                            v_align: 'center',
                            h_offset: 20,
                            v_offset: 0
                        },
                        right: {
                            container: 'slider',
                            h_align: 'right',
                            v_align: 'center',
                            h_offset: 20,
                            v_offset: 0
                        }
                    },
                    tabs: {
                        enable: true,
                        style: 'zeus',
                        tmp: '<span class="tp-tab-title">{{title}}</span>',
                        width: 100,
                        height: 80,
                        min_width: 100,
                        visibleAmount: 5,
                        rtl: false,
                        direction: 'horizontal',
                        position: 'inner',
                        space: 3,
                        h_align: 'center',
                        v_align: 'bottom',
                        h_offset: 95,
                        v_offset: 32,
                        span: true,
                        wrapper_padding: 0,
                        wrapper_color: 'transparent',
                        wrapper_opacity: '0',
                        hide_onleave: false,
                        hide_onmobile: false,
                        hide_over: 480,
                        hide_delay: 200
                    }
                },
                responsiveLevels: [1240, 1025, 778, 480],
                visibilityLevels: [1920, 1500, 1025, 768],
                gridwidth: [1200, 1025, 778, 480],
                gridheight: [1025, 630, 630, 868],
                lazyType: "none",
                shadow: 0,
                spinner: "spinner1",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "on",
                fullScreenAlignForce: "on",
                fullScreenOffsetContainer: "",
                fullScreenOffset: revOffset,
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLimit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
        ; /* END OF revapi call */
    }
    ; /* END OF ON LOAD FUNCTION */
}()); /* END OF WRAPPING FUNCTION */
        </script>