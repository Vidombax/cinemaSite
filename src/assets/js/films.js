if (nowBtn) {
} else {
  let nowBtn = document.getElementById("nowBtn"),
    soonBtn = document.getElementById("soonBtn"),
    listOfFilms = document.getElementById("listOfFilms");
}

nowBtn.classList.add("colorWhite");

nowBtn.onclick = function () {
  nowBtn.classList.add("colorWhite");
  soonBtn.classList.remove("colorWhite");

  $("#listOfFilms #soonInRentalDiv").remove();

  $(listOfFilms)
    .css("opacity", 0)
    .load("./src/modules/nowInRental.php", function () {
      $(this).animate({ opacity: 1 }, "slow");
    });
};

soonBtn.onclick = function () {
  nowBtn.classList.remove("colorWhite");
  soonBtn.classList.add("colorWhite");

  $("#listOfFilms #nowInRentalDiv").remove();
  $(listOfFilms)
    .css("opacity", 0)
    .load("./src/modules/soonInRental.php", function () {
      $(this).animate({ opacity: 1 }, "slow");
    });
};
