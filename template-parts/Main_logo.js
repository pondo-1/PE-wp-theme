class MainLogo {
    constructor() {
        this.navWrapper = document.querySelector('.header .navigation .nav_wrapper');
        this.logoBox = document.querySelector('.header__logo-box img');
        this.initResizeObserver();
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
            if ((screenWidth - navWrapperWidth) < 150  && navWrapperWidth > 0) {
                this.logoBox.classList.add('rotate-image');
            } else {
                this.logoBox.classList.remove('rotate-image');
            }
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new MainLogo();
});

