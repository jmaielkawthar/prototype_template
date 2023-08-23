$(function () {
    toggleMenu();
    toggleSubmenu();
    headerSlider();
    stickyMenu();
    formsValidation();
    toggleAccordion();
    uploadfile();
    GalleryFancyBox();
    masonryItems();
});

function toggleMenu() {
    if($('.icon-menu-open') && $('.icon-menu-close') ){

        $('.icon-menu-open').on('click', function (e) {
            $('body').addClass('no-scroll');
            $(this).parent().addClass('open');
            $('.icon-menu-close').parent().removeClass('open');
            $(".navbar-menu").addClass('open');
        });
  
        $('.icon-menu-close').on('click', function (e) {
            $('body').removeClass('no-scroll');
            $('.icon-menu-open').parent().removeClass('open');
            $(this).parent().addClass('open');
            $(".navbar-menu").removeClass('open');
        });
    }
}

function toggleSubmenu() {
    if($('.nav-menu-link')){
        $('.nav-menu-link').on('click', function (e) {
            $(this).toggleClass('open');
            $(this).parent().find('.submenu').toggleClass('open');
        });
    }
}
function toggleAccordion() {
    if($('.card .collapse').hasClass('show')){
        console.log('true :>> ');
        // $(this).parent().closest('.card-header').toggleClass('open');
    }
}

/* Slider Quote Config */
function headerSlider() {
    $('.header-slider').slick({
        infinite: true,
        dots: true,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        centerMode: false,
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 5000,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
}

// Sticky menu 
function stickyMenu() {
    let navbar = $("header");
    let navPos = 0;
    navbar.removeClass('sticky');
    window.addEventListener("scroll", e => {
        let scrollPos = window.scrollY;
        if ((scrollPos > navPos)) {
            navbar.addClass('sticky');
        } else {
            navbar.removeClass('sticky');
        }
    });
}


function formsValidation() {
    jQuery.each($('.needs-validation'), function (index, form) {
        var submitButton = $(form).find('input[type=submit]')[0];
        $(submitButton).click(function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            $(form).addClass('was-validated');
        });
    })
}

function uploadfile() {
    var i = 0;
    var optimal = 1500;
    var maxsize = 10000;
    const reader = new FileReader();
    const reader2 = new FileReader();
    $("#first-upload").each(function (index, element) {
        const fileUploader = $(element).find('#file-uploader1').get(0);
        const feedback = $(element).find('#feedback1').get(0);
        const progress = $(element).find('#progress1').get(0);
        var files = [];
        var file = [];
        fileUploader.addEventListener('change', (event) => {
            files[index] = event.target.files;
            filesize = file[index] = files[index][0];
            filesize = file[0]['size'];
            filesizeinko = filesize / 1000;
            if (filesizeinko > maxsize) {
                //dont upload
                let msg = `<span style="color:red;"><b>Die maximale Größe beträgt 10 MB</b></span>`;
                feedback.innerHTML = msg;
                $("#file-uploader1").val("");
                progress.value = 0;
                $(element).find('#progress-info1').get(0).innerHTML = '';
            } else {
                sizepercent = (filesizeinko * 100) / optimal;
                step = 100 / sizepercent
                reader.readAsDataURL(file[index]);
                reader.addEventListener('progress', (event) => {
                    $("#file-uploader2").attr('disabled', 'true');
                    $(".primary-button").attr('disabled', 'true');
                    if (i == 0) {
                        i = 1;
                        var width = 1;
                        var id = setInterval(frame, 10);

                        function frame() {
                            if (width >= 100) {
                                clearInterval(id);
                                i = 0;
                                let msg = `<span style="color:green;">Die Datei <b>${file[index].name}</b> wurde erfolgreich hochgeladen.</span>`;
                                feedback.innerHTML = msg;
                            } else {
                                width = width + step;
                                progress.value = width;
                                $(element).find('#progress-info1').get(0).innerHTML = Math.round(width) + '%';
                                if (width >= 100) {
                                    $(element).find('#progress-info1').get(0).innerHTML = Math.round(100) + '%';
                                    progress.value = 100;
                                    $("#file-uploader2").removeAttr('disabled');
                                    $(".primary-button").removeAttr('disabled');
                                }
                            }
                        }
                    }
                });
            }
        });
    });
    $("#second-upload").each(function (index, element) {
        const fileUploader2 = $(element).find('#file-uploader2').get(0);
        const feedback2 = $(element).find('#feedback2').get(0);
        const progress2 = $(element).find('#progress2').get(0);
        var files2 = [];
        var file2 = [];
        fileUploader2.addEventListener('change', (event) => {
            files2[index] = event.target.files;
            filesize = file2[index] = files2[index][0];
            filesize = file2[0]['size'];
            filesizeinko = filesize / 1000;
            if (filesizeinko > maxsize) {
                //dont upload
                let msg = `<span style="color:red;"><b>Die maximale Größe beträgt 10 MB</b></span>`;
                feedback2.innerHTML = msg;
                $("#file-uploader2").val("");
                progress2.value = 0;
                $(element).find('#progress-info2').get(0).innerHTML = '';
            } else {
                sizepercent = (filesizeinko * 100) / optimal;
                step = 100 / sizepercent
                reader2.readAsDataURL(file2[index]);
                reader2.addEventListener('progress', (event) => {
                    $("#file-uploader1").attr('disabled', 'true');
                    $(".primary-button").attr('disabled', 'true');
                    if (i == 0) {
                        i = 1;
                        var width = 1;
                        var id = setInterval(frame, 10);

                        function frame() {
                            if (width >= 100) {
                                clearInterval(id);
                                i = 0;
                                let msg = `<span style="color:green;">Die Datei <b>${file2[index].name}</b> wurde erfolgreich hochgeladen.</span>`;
                                feedback2.innerHTML = msg;
                            } else {
                                width = width + step;
                                progress2.value = width;
                                $(element).find('#progress-info2').get(0).innerHTML = Math.round(width) + '%';
                                if (width >= 100) {
                                    $(element).find('#progress-info2').get(0).innerHTML = Math.round(100) + '%';
                                    progress2.value = 100;
                                    $("#file-uploader1").removeAttr('disabled');
                                    $(".primary-button").removeAttr('disabled');
                                }
                            }
                        }
                    }
                });
            }
        });
    });
}


// fancybox
function GalleryFancyBox() {
// fancy box type 1
// $('[data-fancybox="images"]').fancybox({
//     loop: true,
//     arrows: true,
//     infobar: false,
//     margin: [44, 0, 22, 0],
//     buttons: [
//         //  'arrowLeft',
//         'counter',
//         //  'arrowRight',
//         'close'
//     ],
//     thumbs: {
//         autoStart: true,
//         axis: 'x'
//     },
//     afterLoad: function (instance, current) {
//         current.$content.append(
//             '<a data-fancybox-next class="arrow_fancybox arrow_fancybox-next" href="javascript:;"></a>' +
//             '<a data-fancybox-prev class="arrow_fancybox arrow_fancybox-prev" href="javascript:;"></a>'
//         );
//     },
// });
// $('[data-fancybox*="preview-"]').fancybox({
//     loop: true,
//     arrows: true,
//     infobar: false,
//     margin: [44, 0, 22, 0],
//     buttons: [
//         //  'arrowLeft',
//         'counter',
//         //  'arrowRight',
//         'close'
//     ],
//     thumbs: {
//         autoStart: true,
//         axis: 'x'
//     },
//     afterLoad: function (instance, current) {
//         current.$content.append(
//             '<a data-fancybox-next class="arrow_fancybox arrow_fancybox-next" href="javascript:;"></a>' +
//             '<a data-fancybox-prev class="arrow_fancybox arrow_fancybox-prev" href="javascript:;"></a>'
//         );
//     },
// });

// fancy box type 2
$('[data-fancybox="images"]').fancybox({
    protect: true, 
    loop: true, 
    margin: [40, 0],
    gutter: 12, 
    keyboard: true, 
    arrows: false, 
    infobar: true,
    toolbar: true,
    buttons: [
        "slideShow",
        // 'fullScreen',
        // 'thumbs',
        // 'share',
        // "download",
        // 'zoom',
        "close"
    ],
    image: {

      preload: "auto"
    },
    iframe: {
      // Iframe template
      tpl:
        '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen allowtransparency="true" src=""></iframe>',
  
      preload: true,
  
      css: {},
  
      attr: {
        scrolling: "auto"
      }
    },

    // false/fade/zoom/zoom-in-out
    animationEffect: "zoom-in-out", //  open/close
    animationDuration: 500, //  open/close duration
    zoomOpacity: "auto",
    // between slide 
    // false/fade/slide/circular/tube/zoom-in-out/rotate
    transitionEffect: "tube",
    transitionDuration: 366,
    slideClass: "slideClass", // 
    baseClass: "layout", // 
    // Arrows
    btnTpl: {
      smallBtn:
        '<button data-fancybox-close class="fancybox-close-small" title="{{CLOSE}}"></button>',
      close:
        '<button data-fancybox-close class="fancybox-button fancybox-button--close" title="{{CLOSE}}">' +
        '<svg viewBox="0 0 40 40">' +
        '<path d="M10,10 L30,30 M30,10 L10,30" />' +
        "</svg>" +
        "</button>",
      arrowLeft:
        '<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="{{PREV}}">' +
        '<svg viewBox="0 0 40 40">' +
        '<path d="M10,20 L30,20 L10,20 L18,28 L10,20 L18,12 L10,20"></path>' +
        "</svg>" +
        "</button>",
  
      arrowRight:
        '<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="{{NEXT}}">' +
        '<svg viewBox="0 0 40 40">' +
        '<path d="M30,20 L10,20 L30,20 L22,28 L30,20 L22,12 L30,20"></path>' +
        "</svg>" +
        "</button>"
    },
    touch: {
      vertical: false, // Allow to drag content vertically
      momentum: false // Continue movement after releasing mouse/touch when panning
    },
    slideShow: {
      autoStart: false,
      speed: 4000
    },

    
    afterShow: function(instance, current) {
      if (this.index == 0) {
        var btnPrev = current.$content[0].querySelector('.button-prev')
        btnPrev.classList.add('active')
      } else if (this.index == instance.group.length-1) {
        var btnNext = current.$content[0].querySelector('.button-next');
        btnNext.classList.add("active");
      } else {
        btnNext.classList.remove("active");
        btnPrev.classList.remove("active");
      }
    },
    afterLoad: function(instance, current) {
      if (instance.group.length > 1 && current.$content) {
        current.$content.append(
          '<a data-fancybox-next class="button-next" href="javascript:;">' +
            '<i class="fa fa-angle-right" aria-hidden="true"></i>' +
            "</a>" +
            '<a data-fancybox-prev class="button-prev" href="javascript:;">' +
            '<i class="fa fa-angle-left" aria-hidden="true"></i>' +
            "</a>"
        );
        current.$content.append(
          '<a data-fancybox-close class="button-close" href="javascript:;">×</a>'
        );
      }
    }
  });
}


function masonryItems() {
    $('.masonry').masonry({
        itemSelector: '.masonry-item',
        columnWidth: 0,
        horizontalOrder: true
    });
}