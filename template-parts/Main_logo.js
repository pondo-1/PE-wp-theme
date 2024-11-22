class MainLogo {
    constructor() {
        this.navWrapper = document.querySelector('.header .navigation .nav_wrapper');
        this.logoBox = document.querySelector('.header__logo-box img');
        this.initResizeObserver();
        console.log("constructor");
    }

    initResizeObserver() {
        if (this.navWrapper) {
            const resizeObserver = new ResizeObserver(() => this.checkWidth());
            resizeObserver.observe(this.navWrapper);
        }
    }

    checkWidth() {
        if (this.navWrapper && this.logoBox) {
            const navWrapperWidth = this.navWrapper.offsetWidth;
            const screenWidth = window.innerWidth;
            console.log(navWrapperWidth)
            if ((screenWidth - navWrapperWidth) < (150 + screenWidth * 0.05) && navWrapperWidth > 0) {
                this.logoBox.classList.add('rotate-image');
                console.log("rotate");
            } else {
                this.logoBox.classList.remove('rotate-image');
                console.log("rotate");
            }
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new MainLogo();
});

