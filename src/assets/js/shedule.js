setTimeout(
  document.addEventListener("click", function (e) {
    if (e.target.classList.contains("session")) {
      let session = e.target;
      let hallDiv = document.getElementById("hallDiv");
      
      session.classList.add("selectSession");
      document.getElementById("blackout").style.opacity = "1";

      let mainDiv = document.getElementsByClassName("mainDiv");
      document.getElementById("blackout").style.height = mainDiv[0].offsetHeight + "px";

      //TODO:Сделать нормальный вывод названия фильма в модалку
      let nameFilmInOrder = document.getElementById('nameFilmInOrder')

      nameFilmInOrder.innerText = document.getElementById('nameSelectedFilm').innerText

      moveModal()
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

    if (e.target.classList.contains('crosBtn')) {
      let seats = document.getElementsByClassName('seatNumber')

      for (let i = 0; i < seats.length; i++) {
        seats[i].style.backgroundColor = '#5cdb95'
      }

      document.getElementById('countSeats').innerText = 'Выберите место'

      document.getElementById("hallDiv").style.pointerEvents = "none";
      document.getElementById("hallDiv").style.opacity = "0";
      document.getElementById("blackout").style.opacity = "0";
    
      let session = document.getElementsByClassName("session");
    
      for (let i = 0; i < session.length; i++) {
        session[i].classList.remove("selectSession");
      }
    }

    if (e.target.classList.contains('backBtnOrder')) {
      let orderDiv = document.getElementsByClassName("orderTickets");
      let hallBlackout = document.getElementsByClassName("hallBlackout");
    
      orderDiv[0].style.opacity = "0";
      orderDiv[0].style.pointerEvents = "none";
    
      hallBlackout[0].style.opacity = "0";
    }
  }),
  50
);
