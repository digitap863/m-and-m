window.addEventListener("scroll", function() {
    const navbar = document.querySelector("navbar");
    const scrollPosition = window.scrollY;
  
    if (scrollPosition > 100) { // Adjust this value to set the scroll threshold for changing the background color
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });