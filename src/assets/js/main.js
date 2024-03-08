$(document).ready(function () {
  let sheduleHeaderBtn = document.getElementById("sheduleHeaderBtn"),
    filmsHeaderBtn = document.getElementById("filmsHeaderBtn"),
    promocodeHeaderBtn = document.getElementById("promocodeHeaderBtn")

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
    document.title = "HugeVision | " + document.getElementById("nameSelectedFilm").innerText;
    if (document.getElementById("statusFilm") == '0') {
      let sessionsDiv = document.getElementById('sessionsDiv')
      sessionsDiv.classList.add('boldFont')
      sessionsDiv.classList.add('text-2xl')
      sessionsDiv.style.textAlign = 'center'
      sessionsDiv.innerText = 'Во всех кинотеатрах HugeVision с ' + document.getElementById('dayFilm').innerText
    }
    else {
      
    }
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

  $(window).scroll(function(){
    if (document.getElementById('hallDiv').style.opacity == '1') {
      setTimeout(moveModal, 250)
    }
  });
});

function moveModal() {
  let posTop = window.pageYOffset;

  hallDiv.style.top = posTop + 150 + 'px';

  hallDiv.style.opacity = "1";
  hallDiv.style.pointerEvents = "auto";
}
