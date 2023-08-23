const logoLink = () => {
    const logoImgLinks = document.querySelectorAll('.logo-img-link')
    if ( logoImgLinks.length > 0 ) {
        logoImgLinks.forEach((link) => {
            link.addEventListener('click', (e) => {e.preventDefault();})
        });
    }
}
logoLink();

const navMobile = () => {
    const menuToggle = document.querySelector('button.menu-toggle')
    if ( menuToggle ) {
        const menuMobile = document.querySelector('.menu-primary-mobile-container')
        const menuMobileItems = menuMobile.querySelectorAll('ul li')
        const menuClose = document.querySelector('.menu-close')
        menuToggle.addEventListener('click', (e) => {
            menuToggle.style.display = 'none'
            menuClose.style.display = 'block'
            menuMobile.classList.add("active")
            document.querySelector('.exec-top').style.background = 'none'
            document.querySelector('body').style.overflow = 'hidden'
        });

        menuClose.addEventListener('click', (e) => {
            menuToggle.style.display = ''
            menuClose.style.display = ''
            menuMobile.classList.remove("active")
            document.querySelector('.exec-top').style.background = ''
            document.querySelector('body').style.overflow = ''
        });

        menuMobileItems.forEach((item) => {
            item.addEventListener('click', (e) => {
                menuToggle.style.display = ''
                menuClose.style.display = ''
                menuMobile.classList.remove("active")
                document.querySelector('.exec-top').style.background = ''
                document.querySelector('body').style.overflow = ''
            })
        });

    }
}
navMobile()

jQuery(document).ready( function($){
    // $('.scrollto a').click(function() {
    //     let href = $(this).attr('href');
    //     $('html, body').animate({
    //         scrollTop: $(href).offset().top
    //     }, {
    //         duration: 500,   // по умолчанию «400»
    //         easing: "linear" // по умолчанию «swing»
    //     });
    //     return false;
    // });
});
