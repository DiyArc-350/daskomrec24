let sidebar = document.querySelector(".sidebar");
let boxsidebar = document.querySelector(".profile .boxsidebar");
let textsidebar = document.querySelector(".profile");
let closeBtn = document.querySelector("#btn");

closeBtn.addEventListener("click", () => {
  console.log("Button clicked");
  sidebar.classList.toggle("open");
  boxsidebar.classList.toggle("open");
  textsidebar.classList.toggle("open");
});