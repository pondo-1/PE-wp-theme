class PictureSlider {
    constructor(galleryWrapper) {
        console.log("constructor test");
        this.currentIndex = 0;
        this.gallery = galleryWrapper; // Galerie-Container wird als Parameter übergeben
        this.totalImages = this.gallery.children.length;
        this.initEvents();
        this.changeCircleColor(0);
    }

    initEvents() {
        this.gallery.closest('.module').querySelector('.button-slider.left').addEventListener('click', () => this.moveLeft());
        this.gallery.closest('.module').querySelector('.button-slider.right').addEventListener('click', () => this.moveRight());
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
        for (let id = 0; id < this.totalImages; id++) {
            var circle = this.gallery.closest('.module').querySelector('#circle_' + id);
            if (circle) {
                circle.style.backgroundColor = 'black';
            }
        }
        var circle = this.gallery.closest('.module').querySelector('#circle_' + idnew);
        if (circle) {
            circle.style.backgroundColor = 'red';
        }
    }

    updateGallery() {
        const offset = -this.currentIndex * 337; // 337 ist die Breite jedes Bildes
        this.gallery.style.transform = `translateX(${offset}px)`;
    }
}

function initializeSliders() {
    document.querySelectorAll('.gallery-wrapper').forEach(galleryWrapper => {
        new PictureSlider(galleryWrapper);
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initializeSliders();
    window.addEventListener('resize', initializeSliders); // Überprüfen Sie die Breite bei Größenänderung des Fensters
});

export default PictureSlider;
