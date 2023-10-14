export default class Lightbox {
// Find all elements with the class "image-wrapper"
var imageWrappers = document.querySelectorAll(".image-wrapper");

// Add a click event listener to each element
imageWrappers.forEach(function(imageWrapper) {
  imageWrapper.addEventListener("click", function() {
    // Add the "lightbox" class to the clicked element
    this.classList.add("lightbox");
  });
});
};