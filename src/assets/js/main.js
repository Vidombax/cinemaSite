let sheduleHeaderBtn = document.getElementById("sheduleHeaderBtn"),
  filmsHeaderBtn = document.getElementById("filmsHeaderBtn"),
  promocodeHeaderBtn = document.getElementById("promocodeHeaderBtn");

sheduleHeaderBtn.classList.add("colorWhite");
$("#main").load("./src/pages/shedule.html");

sheduleHeaderBtn.onclick = function () {
  sheduleHeaderBtn.classList.add("colorWhite");
  filmsHeaderBtn.classList.remove("colorWhite");
  promocodeHeaderBtn.classList.remove("colorWhite");

  $("#main").html("");

  $("#main").load("./src/pages/shedule.html");
};

filmsHeaderBtn.onclick = function () {
  sheduleHeaderBtn.classList.remove("colorWhite");
  filmsHeaderBtn.classList.add("colorWhite");
  promocodeHeaderBtn.classList.remove("colorWhite");

  $("#main").html("");
  $("#main").load("./src/pages/films.html");
};

promocodeHeaderBtn.onclick = function () {
  sheduleHeaderBtn.classList.remove("colorWhite");
  filmsHeaderBtn.classList.remove("colorWhite");
  promocodeHeaderBtn.classList.add("colorWhite");

  $("#main").html("");
  $("#main").load("./src/pages/promocode.html");
};
