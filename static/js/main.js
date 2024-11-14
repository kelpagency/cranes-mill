document.addEventListener("DOMContentLoaded", function () {
  // *********************
  // Hamburger menu
  // *********************
  const sidebar = document.querySelector(".sidebar");

  const closeSidebar = document.querySelector(".close-btn");

  const showSidebar = document.querySelector(".menu-button");

  showSidebar.addEventListener("click", () => {
    sidebar.classList.add("show");
  });
  closeSidebar.addEventListener("click", () => {
    sidebar.classList.remove("show");
  });

  const linkChev = document.querySelectorAll(".link-chev");

  linkChev.forEach(function (item) {
    item.addEventListener("click", () => {
      item.parentElement.classList.toggle("active");
    });
  });

  // *********************
  // Blog comments
  // reply to comment button
  var commentReplyButtons = document.querySelectorAll(".comment-form-button");
  if (commentReplyButtons) {
    commentReplyButtons.forEach(function (item) {
      item.addEventListener("click", function () {
        item.nextElementSibling.classList.remove("hidden");
        item.nextElementSibling.querySelector("textarea").focus();
        item.remove();
      });
    });
  }

  // *********************
  // Copyright year
  // *********************
  document.getElementById("copyright-year").innerHTML =
    new Date().getFullYear();

  // *********************
  // Floor plan popups
  // *********************
  const floorplans = document.querySelectorAll(".floorplan-tease");

  if (floorplans.length > 0) {
    floorplans.forEach(function (item) {
      const button = item.querySelector(".elementor-button");
      const close = item.querySelector(".floorplan-popup .elementor-button");
      if (button) {
        button.addEventListener("click", function (event) {
          event.preventDefault();
          item.classList.add("popup-active");
        });
        close.addEventListener("click", function (event) {
          event.preventDefault();
          item.classList.remove("popup-active");
        });
      }
    });
  }
});
