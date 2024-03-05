setTimeout(
  document.addEventListener("click", function (e) {
    if (e.target.classList.contains("session")) {
      let hallDiv = document.getElementById("hallDiv");
      document.getElementById("blackout").style.opacity = "1";
      hallDiv.style.opacity = "1";
      hallDiv.style.pointerEvents = "auto";
    }
  }),
  50
);
