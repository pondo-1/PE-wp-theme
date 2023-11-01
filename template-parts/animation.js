//Backround Animation New

class Animation {
  constructor() {
    const point1 = document.getElementById("point1");

    document.addEventListener("mousemove", (e) => {
      const mouseX = e.clientX;
      const mouseY = e.clientY;

      point1.style.top = mouseY - 10 + "px"; //-50px : half of the height of the point
      point1.style.left = mouseX - 10 + "px";
    });

    const point2 = document.getElementById("point2");

    document.addEventListener("mousemove", (e) => {
      const mouseX = e.clientX;
      const mouseY = e.clientY;

      point2.style.top = mouseY + 10 + "px";
      point2.style.left = mouseX + 10 + "px";
    });
  }
}

export default Animation;
