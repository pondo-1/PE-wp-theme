class PictureSlider {
    constructor(galleryWrapper) {
        console.log("constructor test");
        this.currentIndex = 0;
        this.gallery = galleryWrapper; // Galerie-Container wird als Parameter übergeben
        this.totalImages = this.gallery.children.length;
        this.initEvents();
        this.changeCircleColor(0);
        this.checkScreenWidth(); // Überprüfen Sie die Bildschirmbreite beim Initialisieren
    }

    initEvents() {
        this.gallery.closest('.module').querySelector('.button-slider.left').addEventListener('click', () => this.moveLeft());
        this.gallery.closest('.module').querySelector('.button-slider.right').addEventListener('click', () => this.moveRight());
        window.addEventListener('resize', () => this.checkScreenWidth()); // Überprüfen Sie die Bildschirmbreite bei Größenänderung des Fensters
    }

    moveLeft() {
        console.log("left");
        if (this.currentIndex > 0) {
            this.currentIndex--;
            this.updateGallery();
            this.changeCircleColor(this.currentIndex);
        } else {
            this.currentIndex = this.totalImages - 1;
            this.updateGallery();
            this.changeCircleColor(this.totalImages - 1);
        }
    }

    moveRight() {
        console.log("right");
        if (this.currentIndex < this.totalImages - 1) {
            this.currentIndex++;
            this.updateGallery();
            this.changeCircleColor(this.currentIndex);
        } else {
            this.currentIndex = 0;
            this.updateGallery();
            this.changeCircleColor(this.currentIndex);
        }
    }

    changeCircleColor(idnew) {
        for (let id = 0; id < this.totalImages + 1; id++) {
            var circle = this.gallery.closest('.module').querySelector('#circle_' + id  );
            if (circle) {
                circle.style.backgroundColor = 'black';
            }
        }
        var circle = this.gallery.closest('.module').querySelector('#circle_' + ( idnew + 1 ));
        if (circle) {
            circle.style.backgroundColor = 'red';
        }
    }

    updateGallery() {
        const offset = -this.currentIndex * 337; // 337 ist die Breite jedes Bildes
        this.gallery.style.transform = `translateX(${offset}px)`;
    }

    checkScreenWidth() {
        if (window.innerWidth > 900) {
            this.resetGallery();
        }
    }

    resetGallery() {
        this.currentIndex = 0;
        this.updateGallery();
        this.changeCircleColor(0);
        console.log("Gallery reset due to screen width > 900px");
    }
}

function initializeSliders() {
    document.querySelectorAll('.gallery-wrapper').forEach(galleryWrapper => {
        new PictureSlider(galleryWrapper);
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initializeSliders();
});

export default PictureSlider;

