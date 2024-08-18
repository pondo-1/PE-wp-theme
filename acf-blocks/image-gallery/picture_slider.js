class PictureSlider {
    constructor() {
        console.log("constructor test");
        this.currentIndex = 0;
        this.gallery = document.querySelector('.gallery-wrapper'); // Korrigiert: Wählen Sie den Galerie-Container aus
        this.totalImages = this.gallery.children.length;
        this.initEvents();
        this.changeCircleColor(0)
    }

    initEvents() {
        document.querySelector('.button-slider.left').addEventListener('click', () => this.moveLeft());
        document.querySelector('.button-slider.right').addEventListener('click', () => this.moveRight());
    }

    moveLeft() {
        console.log("left");
        if (this.currentIndex > 0) {
            this.currentIndex--;
            this.updateGallery();
            
            this.changeCircleColor(this.currentIndex);
        }
    }

    moveRight() {
        console.log("right");
        if (this.currentIndex < this.totalImages - 1) {
            this.currentIndex++;
            this.updateGallery();
           
            this.changeCircleColor(this.currentIndex);
        }
    }
    changeCircleColor(id) {
        var circle = document.getElementById('circle_' + (id +1));
        if (circle) {
            circle.style.backgroundColor = 'red';
        }
        var circle = document.getElementById('circle_' + id);
        if (circle) {
            circle.style.backgroundColor = 'black';
        }
        var circle = document.getElementById('circle_' + (id +2));
        if (circle) {
            circle.style.backgroundColor = 'black';
        }
    }

    updateGallery() {
        const offset = -this.currentIndex * 375; // 375 ist die Breite jedes Bildes
        this.gallery.style.transform = `translateX(${offset}px)`;
    }
}

function initializeSlider() {
    if (window.matchMedia("(max-width: 768px)").matches) { // Beispiel für Tablet-Breite
        new PictureSlider();
    }
}

document.addEventListener('DOMContentLoaded', () => {
    initializeSlider();
    window.addEventListener('resize', initializeSlider); // Überprüfen Sie die Breite bei Größenänderung des Fensters
});

export default PictureSlider;
