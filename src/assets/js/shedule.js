setTimeout(
  document.addEventListener("click", function (e) {
    if (e.target.classList.contains("session")) {
      let session = e.target;
      let hallDiv = document.getElementById("hallDiv");

      session.classList.add("selectSession");
      document.getElementById("blackout").style.opacity = "1";
      hallDiv.style.opacity = "1";
      hallDiv.style.pointerEvents = "auto";
    }

    if (e.target.classList.contains("seatNumber")) {
      let seat = e.target;
      seat.style.backgroundColor = "#19463D";
    }

    if (e.target.classList.contains("buyTicketBtn")) {
      if (document.getElementById("countSeats").innerText == "Выберите место") {
        const Toast = Swal.mixin({
          toast: true,
          position: "top-end",
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
        });

        Toast.fire({
          icon: "warning",
          title: "Перед оформлением заказа, выберите место!",
        });
      } else {
        let orderDiv = document.getElementsByClassName("orderTickets");
        let hallBlackout = document.getElementsByClassName("hallBlackout");

        orderDiv[0].style.opacity = "1";
        orderDiv[0].style.pointerEvents = "auto";

        hallBlackout[0].style.opacity = "1";
      }
    }

    if (e.target.classList.contains("seatNumber")) {
      document.getElementById("countSeats").innerText =
        "1" + " билет за " + "228 ₽";
    }

    if (e.target.classList.contains("sheduleDay")) {
      let days = document.getElementsByClassName("sheduleDay");

      for (let i = 0; i < days.length; i++) {
        days[i].classList.remove("selectSheduleDay");
      }

      e.target.classList.add("selectSheduleDay");
    }
  }),
  50
);
