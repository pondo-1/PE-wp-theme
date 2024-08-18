class PictureSlider {
    constructor() {
        console.log("constructor test");
        this.currentIndex = 0;
        this.gallery = document.querySelector('.gallery'); // Korrigiert: Wählen Sie den Galerie-Container aus
        this.totalImages = this.gallery.children.length;
        this.initEvents();
    }

    initEvents() {
        document.querySelector('.button.left').addEventListener('click', () => this.moveLeft());
        document.querySelector('.button.right').addEventListener('click', () => this.moveRight());
    }

    moveLeft() {
        console.log("left");
        if (this.currentIndex > 0) {
            this.currentIndex--;
            this.updateGallery();
        }
    }

    moveRight() {
        console.log("right");
        if (this.currentIndex < this.totalImages - 1) {
            this.currentIndex++;
            this.updateGallery();
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
