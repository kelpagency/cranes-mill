document.addEventListener('DOMContentLoaded', function () {
  // *********************
  // Hamburger menu
  // *********************

  const sidebar = document.querySelector(".sidebar")

  const closeSidebar = document.querySelector(".close-btn")

  const showSidebar = document.querySelector(".menu-button")

  showSidebar.addEventListener("click", () => {
    sidebar.classList.add("show");
  })
  closeSidebar.addEventListener("click", () => {
    sidebar.classList.remove("show");
  })

  const linkChev = document.querySelectorAll(".link-chev");

  linkChev.forEach(function (item) {
    item.addEventListener("click", (e) => {
      item.parentElement.classList.toggle("active");
    })
  })

  function handleSidebar() {
    const hamburgerMenu = document.querySelector(".hamburger-menu")
    const desktopMenu = document.querySelector(".header-navigation")

    if (window.innerWidth > 900) {
      hamburgerMenu.classList.add("hide");
      desktopMenu.classList.remove("hide");
    }
    if (window.innerWidth < 900) {
      hamburgerMenu.classList.remove("hide");
      desktopMenu.classList.add("hide");
    }
  }

  handleSidebar();
  window.addEventListener('resize', handleSidebar);
  // *********************
  // Blog comments
  // reply to comment button
  var commentReplyButtons = document.querySelectorAll('.comment-form-button');
  if (commentReplyButtons) {
    commentReplyButtons.forEach(function (item) {
      item.addEventListener('click', function () {
        item.nextElementSibling.classList.remove('hidden');
        item.nextElementSibling.querySelector('textarea').focus();
        item.remove();
      });
    });
  }
});

// *********************
// Copywrite year
// *********************
document.getElementById("copyright-year").innerHTML = new Date().getFullYear();
