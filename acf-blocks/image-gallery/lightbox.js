class Lightbox {
  constructor() {
    // Find all elements with the class "image-wrapper"
    var imageWrappers = document.querySelectorAll(".image-wrapper");
    var close = document.querySelectorAll(".close");
    var body = document.body;

    // Add a click event listener to each element
    imageWrappers.forEach(function (imageWrapper) {
      imageWrapper.addEventListener("click", function () {
        // Add the "lightbox" class to the clicked element
        this.classList.add("lightbox");
        var body = document.body;
        body.classList.add("popped");
      });
    });

    close.forEach(function (close) {
      close.addEventListener("click", function (event) {
        event.stopPropagation();
        // Add the "lightbox" class to the clicked element
        //var lightbox = document.querySelectorAll(".lightbox");
        imageWrappers.forEach(function (imageWrapper) {
          console.log(imageWrapper.classList);
          imageWrapper.classList.remove("lightbox");
          body.classList.remove("popped");
        });
      });
    });
  }
}

export default Lightbox;
