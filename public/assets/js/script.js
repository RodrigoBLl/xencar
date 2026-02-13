/* ============================================== */
/* PRELOADER */
/* ============================================== */

$(window).load(function() {
    $('.preloader').delay(500).fadeOut('fast');
});

/* ============================================== */
/* LAZY-LOAD */
/* ============================================== */

const observer = lozad('.lozad', {
    rootMargin: '120px 0px'
});
observer.observe();

let imgsRatio = document.querySelectorAll('.lozad.aspect')
if(imgsRatio.length != 0){
    imgsRatio.forEach(img => {
        const aspect = img.dataset.aspect
        img.style.aspectRatio = aspect
    })
}

/* ============================================== */
/* COOKIES */
/* ============================================== */

const cajacookies = document.getElementById('cajacookies')
function checkCookies(){
    if(localStorage.aceptaCookies == 'true'){
        cajacookies.style.display = 'none'
    }
}
function acceptCookies(){
    localStorage.acceptCookies = 'true'
    cajacookies.style.display = 'none'
}
checkCookies()

/* ============================================== */
/* UTILITY FUNCTIONS */
/* ============================================== */

function hasClass(element, className) {
    return (' ' + element.className + ' ').indexOf(' ' + className+ ' ') > -1;
}

function getChildByClass(parentElem, childClass){
    let child = null;
    for (let i = 0; i < parentElem.childNodes.length; i++) {
        if (hasClass(parentElem.childNodes[i], childClass)) {
            child = parentElem.childNodes[i];
            break;
        }        
    }
    return child;
}

function getSiblings(element){
    let siblings = []
    if (!element.parentNode) {
        return siblings
    }
    let sibling = element.parentNode.firstElementChild
    do {
        if (sibling != element) {
            siblings.push(sibling)
        }
    } while (sibling = sibling.nextElementSibling)	
    return siblings
}

function getUrlVars() {
    let vars = {}
    let parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value
    })
    return vars
}

function addActiveClass(btnClass, activeClass){
    btnClass.forEach(btn => {
        btn.addEventListener('click', () => {
            let targetId = btn.dataset.id
            document.getElementById(targetId).classList.add(activeClass)
        })
    })
}
function removeActiveClass(btnClass, activeClass){
    btnClass.forEach(btn => {
        btn.addEventListener('click', () => {
            let targetId = btn.dataset.id
            document.getElementById(targetId).classList.remove(activeClass)
        })
    })
}

/* ============================================== */
/* NAVIGATION */
/* ============================================== */

let navBtn = document.getElementsByClassName('hamburguer')
let navPanel = document.getElementById('nav-primary')

if (navBtn){
    for(let i=0;i<navBtn.length;i++){
        navBtn[i].addEventListener('click', function(){
            navBtn[i].classList.toggle('active')
            navPanel.classList.toggle('active')
            navPanel.classList.toggle('closed')
        });
    }
}

/* ============================================== */
/* SELECT ACTIVE ITEM ON MENU */
/* ============================================== */
let actualPage = (getUrlVars()['p'] != null) ? getUrlVars()['p'] : 'home'
function activeNav(){
    const activeItem = document.querySelectorAll(`[data-navitem="${actualPage}"]`)
    activeItem.forEach((i)=>i.classList.add('active'))
}
activeNav()

/* ============================================== */
/* ACCORDEON NAV MENU */
/* ============================================== */

let navAcc = document.querySelectorAll('.has-submenu')
for(let i=0; i<navAcc.length; i++){
    let item = navAcc[i]
    item.addEventListener('click', e=>{
        e.preventDefault()

        item.classList.toggle('open')
        let submenu = item.nextElementSibling;
        if (submenu.style.maxHeight) {
            submenu.style.maxHeight = null
        } else {
            submenu.style.maxHeight = submenu.scrollHeight + 'px';
        }
        otherItems = getSiblings(item.parentElement)
        otherItems.forEach( otherItem => {
            let itm = getChildByClass(otherItem, 'has-submenu')
            if (itm) itm.classList.remove('open')
            let sub = getChildByClass(otherItem, 'submenu')
            if (sub) sub.style.maxHeight = null
        })
    })
}

/* ============================================== */
/* BANNER */
/* ============================================== */

$(document).ready(function() {

    $('.banner ul').slick({
        autoplay:true,
        autoplaySpeed:4500,
        speed:600,
        slidesToShow:1,
        slidesToScroll:1,
        pauseOnHover:false,
        dots:true,
        pauseOnDotsHover:true,
        cssEase:'ease-in-out',
           fade:true,
        draggable:true,

        prevArrow:'<button class="slick-prev"></button>',
        nextArrow:'<button class="slick-next"></button>'
    });

    $('.variable ul').slick({
        autoplay:true,
        autoplaySpeed:4500,
        speed:600,
        slidesToShow:1,
        slidesToScroll:1,
        pauseOnHover:false,
        dots:true,
        pauseOnDotsHover:true,
        cssEase:'ease-in-out',
           fade:true,
        draggable:true,

        prevArrow:'<button class="slick-prev"></button>',
        nextArrow:'<button class="slick-next"></button>'
    });

});

const bannerBtn = document.querySelectorAll('.banner-btn')
addActiveClass(bannerBtn, 'active')


/* ============================================== */
/* CLOSE BUTTONS & POPUPS */
/* ============================================== */
let closeBtn = document.querySelectorAll('.close-btn')
removeActiveClass(closeBtn, 'active')
let openBtn = document.querySelectorAll('.open-popup')
addActiveClass(openBtn, 'active')

/* ============================================== */
/* CALENDLY */
/* ============================================== */
// const calendlyPopup = document.getElementById('calendly-popup')
// if (calendlyPopup){
//     Calendly.initInlineWidget({
//         url: 'https://calendly.com/exitocondaniel',
//         parentElement: calendlyPopup
//     })
//     calendlyPopup.addEventListener('click', e => e.target.classList.remove('active'))
// }

/* ============================================== */
/* VIDEO YOUTUBE */
/* ============================================== */

$(document).ready(function() {
    $('.video_mx').each(function() {
        let code = $(this).attr('data-code');
        $(this).click( function(){
        $('body').append('<div class="popup-video popup d-flex jc-center ai-center"><div class="frame-video w-100 p-20"><iframe width="100%" height="100%" src="//www.youtube.com/embed/' + code + '?rel=0&showinfo=0&controls=1&autoplay=1" frameborder="0" allowfullscreen></iframe></div></div>');
            $('.popup-video').click( function(){
                $('div.popup-video').remove();
            });
        });
    });
});

/* ============================================== */
/* PROCESS ACTIVE STEP */
/* ============================================== */

$(document).ready(function() {
		  
    let scrollLink = $('.process-menu .menu-list--link');
    const processImgs = document.querySelectorAll('.process-img')
    
    processImgs.forEach(pImg => {
        pImg.style.maxWidth = `${pImg.dataset.width}px`
        pImg.style.aspectRatio = pImg.dataset.aspect
    })
          
    // Active link switching
    $(window).scroll(function() {
        const scrollbarLocation = $(this).scrollTop();
        scrollLink.each(function() {
            let sectionOffset = $(this.hash).offset().top - 95;
            if ( sectionOffset <= scrollbarLocation ) {
                $(this).addClass('active');
                $(this).parent().siblings().find('.menu-list--link').removeClass('active');
            }
        })
    })
});

/* ============================================== */
/* STEPS FORM */
/* ============================================== */

jQuery(document).ready(function() {

    jQuery(document).on('click', '.form-step-button', function() {
        let error = '* Please fill all fields'
        switch (document.documentElement.lang){
            case 'es':
                error = '* Por favor llene todos los campos'
                break;
            default:
                break;
        }
        let valid = false;
        let alertMessage	= jQuery('.step-alert');
        let _this 			= jQuery(this);
        let _thisClass		= _this.hasClass('button-invalid');
        let stepContent		= _this.closest('.form-step-content').index();
        let stepContentNext	= _this.closest('.form-step-content').index() +1;

        // Loop through the fields 
        let $step = jQuery(".form-step-content").eq(stepContent);

        // 1. Validar inputs de texto y email (deben tener valor)
        $step.find('input[type="text"], input[type="email"], input[type="tel"]').each(function() {
            if (jQuery(this).val().trim() === "") {
                valid = true;
            }
        });

        // 2. Validar checkboxes: al menos uno debe estar marcado (si hay checkboxes en el paso)
        let $checkboxes = $step.find('input[type="checkbox"]');
        if ($checkboxes.length > 0 && $checkboxes.filter(':checked').length === 0) {
            valid = true;
        }

        // 3. Validar radios: al menos uno debe estar seleccionado (si hay radios en el paso)
        let radioGroups = {};
        $step.find('input[type="radio"]').each(function() {
            radioGroups[jQuery(this).attr('name')] = true;
        });
        for (let groupName in radioGroups) {
            if ($step.find('input[type="radio"][name="' + groupName + '"]:checked').length === 0) {
                valid = true;
            }
        }

        // Set boolean true if all not is empty
        if(valid == true) {
            _this.addClass('button-invalid'); 
            _thisClass = true;
        }
        else {
            _this.removeClass('button-invalid');
            _thisClass = false;
        }

        // Alert message / Hide and show the content
        if(_thisClass == true) {
            alertMessage.html(error);
        }
        else {
            alertMessage.html('');

            jQuery('.form-step-content').hide();
            jQuery('.form-step-content').eq(stepContentNext).fadeIn(500);
            
            //stepBarNext
            jQuery('.step-item').eq(stepContentNext).addClass('step-item-active');
        }
    });
    
    // Step bar
    jQuery(document).on('click', '.step-item-active', function() {
        let _this 		= jQuery(this);
        let index 		= _this.index(); 
        let hideNext 	= index +1;

        // Set content
        jQuery('.form-step-content').hide();
        jQuery('.form-step-content').eq(index).fadeIn(500);

        // Set sidebar
        jQuery(_this).nextAll().removeClass('step-item-active');

    });	

});

/* ============================================== */
/* TEXTAREA */
/* ============================================== */

$(document).ready(function() {
    autosize(document.getElementById("autosize"));
});

/* ============================================== */
/* SELECT */
/* ============================================== */

$(".custom-select").each(function() {
    let classes = $(this).attr("class"),
        id      = $(this).attr("id"),
        name    = $(this).attr("name");
    let template =  '<div class="rel ' + classes + '">';
    template += '<span class="custom-select-trigger select br-5 rel">' + $(this).attr("placeholder") + '</span>';
    template += '<div class="custom-options w-100 p-10-20 c-white br-5 abs">';
    $(this).find("option").each(function() {
        template += '<div class="custom-option p-10 p-0x t-left ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</div>';
    });
    template += '</div></div>';
    
    $(this).wrap('<div class="custom-select-wrapper"></div>');
    $(this).hide();
    $(this).after(template);
});
$(".custom-option:first-of-type").hover(function() {
    $(this).parents(".custom-options").addClass("option-hover");
}, function() {
    $(this).parents(".custom-options").removeClass("option-hover");
});
$(".custom-select-trigger").on("click", function() {
    $('html').one('click',function() {
        $(".custom-select").removeClass("opened");
    });
    $(this).parents(".custom-select").toggleClass("opened");
    event.stopPropagation();
});
$(".custom-option").on("click", function() {
    $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
    $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
    $(this).addClass("selection");
    $(this).parents(".custom-select").removeClass("opened");
    $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
});

/* ============================================== */
/* TEL */
/* ============================================== */

$(function () {
    $('.input--tel').mask('999-99-99-999');
    $('.input--tel').keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
                (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                return;
        }

        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});

/* ============================================== */
/* TABS */
/* ============================================== */

$(document).ready(function() {
    $('.tabgroup > div').hide();
    $('.tabgroup > div:first-of-type').show();
    $('.tabs a').click(function(e){
        e.preventDefault();
        let $this = $(this),
            tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
            others = $this.closest('li').siblings().children('a'),
            target = $this.attr('href');
        others.removeClass('active');
        $this.addClass('active');
        $(tabgroup).children('div').hide();
        $(target).show();
        
    });
});

/* ============================================== */
/* SENDING DATA BY AJAX */
/* ============================================== */



$(document).ready(function(){
	$('#submit').click(function(e){
	  // e.preventDefault(); 
	   /* Submit form data using ajax*/
       $('#response').html('<br><div class="spinner-border" role="status"><span class="visually-hidden" style="width:; height: 2rem;color:green;" rol="status">Enviando...</span></div>');
	   
	});
});