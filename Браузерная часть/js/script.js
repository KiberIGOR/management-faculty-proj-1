$(function () {
    /* Inits */
    initLazy();
    Tabshow();
    Tabshow2();
    initScroll();

    /* Lazy */
    function initLazy() {

        let
            lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
            active = false,
            threshold = 200
            ;

        const lazyLoad = function (e) {
            if (active === false) {
                active = true;

                setTimeout(function () {
                    lazyArr.forEach(function (lazyObj) {
                        if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {

                            if (lazyObj.dataset.src) {
                                let
                                    img = new Image(),
                                    src = lazyObj.dataset.src
                                    ;
                                img.src = src;
                                img.onload = function () {
                                    if (!!lazyObj.parent) {
                                        lazyObj.parent.replaceChild(img, lazyObj);
                                    } else {
                                        lazyObj.src = src;
                                    }
                                }
                                lazyObj.removeAttribute('data-src');
                            }

                            if (lazyObj.dataset.srcset) {
                                lazyObj.srcset = lazyObj.dataset.srcset;
                                lazyObj.removeAttribute('data-srcset');
                            }

                            lazyObj.classList.remove('lazy');
                            lazyObj.classList.add('lazy-loaded');

                            lazyArr = lazyArr.filter(function (obj) {
                                return obj !== lazyObj;
                            });

                            if (lazyArr.length === 0) {
                                document.removeEventListener('scroll', lazyLoad);
                                window.removeEventListener('resize', lazyLoad);
                                window.removeEventListener('orientationchange', lazyLoad);
                            }
                        }
                    });

                    active = false;
                }, 200);
            }
        };

        lazyLoad();

        document.addEventListener('scroll', lazyLoad);
        window.addEventListener('resize', lazyLoad);
        window.addEventListener('orientationchange', lazyLoad);
    }
    /*Табы*/
    function Tabshow() {
        const tabsBtn = document.querySelectorAll(".program__tabs-button");
        const tabsItems = document.querySelectorAll(".program__tabs-item");

        tabsBtn.forEach(function (item) {
            item.addEventListener("click", function () {
                let currentBtn = item;
                let tabId = currentBtn.getAttribute("data-tab");
                let currentTab = document.querySelector(tabId);

                if (!currentBtn.classList.contains('active')) {
                    tabsBtn.forEach(function (item) {
                        item.classList.remove('active');
                    })
                    tabsItems.forEach(function (item) {
                        item.classList.remove('active');
                    })

                    currentBtn.classList.add('active');
                    currentTab.classList.add('active');
                }
                $program_slider.slick('setPosition');

            });

        });

    }
    function Tabshow2() {
        const tabsBtn = document.querySelectorAll(".education__tabs-button");
        const tabsItems2 = document.querySelectorAll(".education__tabs-item");

        tabsBtn.forEach(function (item) {
            item.addEventListener("click", function () {
                let currentBtn = item;
                let tabId = currentBtn.getAttribute("data-tab");
                let currentTab2 = document.querySelector(tabId);

                if (!currentBtn.classList.contains('active')) {
                    tabsBtn.forEach(function (item) {
                        item.classList.remove('active');
                    })
                    tabsItems2.forEach(function (item) {
                        item.classList.remove('active');
                    })
                }
                currentBtn.classList.add('active');
                currentTab2.classList.add('active');
            })
        });

    }

    let $program_slider = $('.program__tabs-item'),
        settingsProgram = {
            mobileFirst: true,

            centerMode: true,
            slidesToShow: 1,
            slidesToScroll: 1,

            centerPadding: '70px',
            responsive: [
                {
                    breakpoint: 576,
                    settings: "unslick"
                }
            ]

        }


    $program_slider.slick(settingsProgram);

    $(window).on('resize', function () {
        if (!$program_slider.hasClass('slick-initialized')) {
            return $program_slider.slick(settingsProgram);
        }
    });

    let $programenu_slider = $('.program__tabs-buttons'),
        settingsProgramenu = {
            variableWidth: true,
            dots: false,
            infinite: false,
            autoplay: true,
            autoplaySpeed: 1100,
            accessibility: false,
            mobileFirst: true,
            centerMode: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            centerPadding: '0px',
            responsive: [
                {
                    breakpoint: 470,
                    settings: "unslick"
                },
                {
                    breakpoint: 350,
                    settings: {
                        centerMode: false,
                        variableWidth: true,
                        dots: false,
                        infinite: false,
                        autoplay: true,
                        autoplaySpeed: 1100,
                        accessibility: false,
                        mobileFirst: true,
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        arrows: false,
                        centerPadding: '0px',
                    }
                }
            ]

        }


    $programenu_slider.slick(settingsProgramenu);

    $(window).on('resize', function () {
        if (!$programenu_slider.hasClass('slick-initialized')) {
            return $programenu_slider.slick(settingsProgramenu);
        }
    });

    let $speakers_slider = $('.speakers__content'),
        settingsSpeakers = {
            mobileFirst: true,

            centerMode: true,
            slidesToShow: 1,
            slidesToScroll: 1,

            centerPadding: '80px',
            responsive: [
                {
                    breakpoint: 576,
                    settings: "unslick"
                }
            ]

        }


    $speakers_slider.slick(settingsSpeakers);

    $(window).on('resize', function () {
        if (!$speakers_slider.hasClass('slick-initialized')) {
            return $speakers_slider.slick(settingsSpeakers);
        }
    });

    let $proffesion_slider = $('.proffesion__work-blocks'),
        settingsProffesion = {
            mobileFirst: true,

            centerMode: true,
            slidesToShow: 1,
            slidesToScroll: 1,

            centerPadding: '50px',
            responsive: [
                {
                    breakpoint: 576,
                    settings: "unslick"
                }
            ]

        }


    $proffesion_slider.slick(settingsProffesion);

    $(window).on('resize', function () {
        if (!$proffesion_slider.hasClass('slick-initialized')) {
            return $proffesion_slider.slick(settingsProffesion);
        }
    });

    let $partners_slider = $('.partners__blocks'),
        settingsPartners = {


            centerMode: true,
            slidesToShow: 4,
            slidesToScroll: 1,

            centerPadding: '5px',
            responsive: [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5

                    }
                },
                {
                    breakpoint: 1080,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4

                    }
                },
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4

                    }
                },
                {
                    breakpoint: 650,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3

                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]

        }


    $partners_slider.slick(settingsPartners);

    $(window).on('resize', function () {
        if (!$partners_slider.hasClass('slick-initialized')) {
            return $partners_slider.slick(settingsPartners);
        }
    });

    function initScroll() {
        if (!$('.scroll').length) return;

        $(document).on('click scroll.init', '.scroll', function (event) {
            $.fancybox.close();
        });
    }



});