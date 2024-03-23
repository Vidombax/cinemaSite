$(document).ready(function () {
  let sheduleHeaderBtn = document.getElementById("sheduleHeaderBtn"),
    filmsHeaderBtn = document.getElementById("filmsHeaderBtn"),
    promocodeHeaderBtn = document.getElementById("promocodeHeaderBtn")

  let path = window.location.pathname;
  let page = path.split("/").pop();

  $("#telInput").mask("+7 (999) 999-9999")

  if (page == "") {
    document.title += " | Расписание";
    sheduleHeaderBtn.classList.add("colorWhite");
    $("#main").css("opacity", 0);

    $("#main").load("./src/pages/shedule.php", function () {
      $(this).animate({ opacity: 1 }, "slow");
    });

    let arrowUp = document.getElementById('arrowUp')

    $(window).scroll(function(){
      if (document.getElementById('hallDiv').style.opacity == '1') {
        setTimeout(moveModal, 250)
      }
      
      if (window.pageYOffset > 600) {
        arrowUp.style.opacity = '1'
        moveArrow()
      }
      else {
        arrowUp.style.opacity = '0'
      }
    });
  } else {
    document.title = "HugeVision | " + document.getElementById("nameSelectedFilm").innerText;
    if (document.getElementById("statusFilm").innerText == '0') {
      let sessionsDiv = document.getElementById('sessionsDiv')

      sessionsDiv.classList.add('boldFont')
      sessionsDiv.classList.add('text-2xl')
      sessionsDiv.style.textAlign = 'center'
      sessionsDiv.innerText = 'Во всех кинотеатрах HugeVision с ' + document.getElementById('dayFilm').innerText
    }
    else {
      console.log('something wrong i can feel that...')
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
});

function moveModal() {
  let posTop = window.pageYOffset;

  hallDiv.style.top = posTop + 150 + 'px';

  hallDiv.style.opacity = "1";
  hallDiv.style.pointerEvents = "auto";
}

function moveArrow() {
  let postTop = window.pageYOffset

  arrowUp.style.top = postTop + 25 + 'px'
}