$(document).ready(function () {
  let listOfMovies = document.getElementById("listOfMovies");

  $(listOfMovies).load("./src/modules/movieSessions.html");
});
