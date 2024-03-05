let sheduleHeaderBtn = document.getElementById("sheduleHeaderBtn"),
  filmsHeaderBtn = document.getElementById("filmsHeaderBtn"),
  promocodeHeaderBtn = document.getElementById("promocodeHeaderBtn"),
  crosBtn = document.getElementById("crosBtn");

let path = window.location.pathname;
let page = path.split("/").pop();

if (page == "") {
  document.title += " | Расписание";
  sheduleHeaderBtn.classList.add("colorWhite");
  $("#main").css("opacity", 0);

  $("#main").load("./src/pages/shedule.php", function () {
    $(this).animate({ opacity: 1 }, "slow");
  });
} else {
  document.title =
    "HugeVision | " + document.getElementById("nameSelectedFilm").innerText;
}

sheduleHeaderBtn.onclick = function () {
  sheduleHeaderBtn.classList.add("colorWhite");
  filmsHeaderBtn.classList.remove("colorWhite");
  promocodeHeaderBtn.classList.remove("colorWhite");

  document.title = "HugeVision | Расписание";

  $("#main").html("");

  $("#main")
    .css("opacity", 0)
    .load("./src/pages/shedule.php", function () {
      $(this).animate({ opacity: 1 }, "slow");
    });

  document.getElementById("blackout").style.height = "135vh";
};

filmsHeaderBtn.onclick = function () {
  sheduleHeaderBtn.classList.remove("colorWhite");
  filmsHeaderBtn.classList.add("colorWhite");
  promocodeHeaderBtn.classList.remove("colorWhite");

  document.title = "HugeVision | Фильмы";

  $("#main").html("");

  $("#main")
    .css("opacity", 0)
    .load("./src/pages/films.php", function () {
      $(this).animate({ opacity: 1 }, "slow");
    });

  document.getElementById("blackout").style.height = "100vh";
};

promocodeHeaderBtn.onclick = function () {
  sheduleHeaderBtn.classList.remove("colorWhite");
  filmsHeaderBtn.classList.remove("colorWhite");
  promocodeHeaderBtn.classList.add("colorWhite");

  document.title = "HugeVision | Промокоды";

  $("#main").html("");

  $("#main")
    .css("opacity", 0)
    .load("./src/pages/promocode.php", function () {
      $(this).animate({ opacity: 1 }, "slow");
    });

  document.getElementById("blackout").style.height = "20vh";
};

crosBtn.onclick = function () {
  document.getElementById("hallDiv").style.pointerEvents = "none";
  document.getElementById("hallDiv").style.opacity = "0";
  document.getElementById("blackout").style.opacity = "0";
};
