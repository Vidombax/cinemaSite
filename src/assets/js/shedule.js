let countTickets = 0,
  priceTicket = 0;
setTimeout(
  document.addEventListener("click", function (e) {
    if (e.target.classList.contains("session")) {
      let session = e.target;
      let hallDiv = document.getElementById("hallDiv");

      session.classList.add("selectSession");
      document.getElementById("blackout").style.opacity = "1";

      let mainDiv = document.getElementsByClassName("mainDiv");
      document.getElementById("blackout").style.height =
        mainDiv[0].offsetHeight + "px";

      let nameFilmInOrder = document.getElementById("nameFilmInOrder");

      let sessions = $(session).parent(".sessions");
      let movie = $(sessions).parent(".grid");
      let movieSession = $(movie).parent(".movieSession");

      let path = window.location.pathname;
      let page = path.split("/").pop();

      if (page == "") {
        nameFilmInOrder.innerText = movie[0].childNodes[3].innerText;
      } else {
        nameFilmInOrder.innerText =
          document.getElementById("nameSelectedFilm").innerText;
      }

      document.getElementById("timeSelectedSession").innerText =
        session.childNodes[1].innerText;
      document.getElementById("priceSelectedSession").innerText =
        session.childNodes[3].innerText;
      priceTicket = Number(
        document
          .getElementById("priceSelectedSession")
          .innerText.split("₽")[0]
          .trim()
      );

      let timeSession = document.getElementById("timeSelectedSession");
      let idFilm, url;
      if (page == "") {
        url = "src/db/getRentSeat.php";
        idFilm = movieSession[0].childNodes[1].innerText;
        document.getElementById("iddd").innerText = idFilm;
      } else {
        url = "../db/getRentSeat.php";
        idFilm = document.getElementById("idFilm").innerText;
        document.getElementById("iddd").innerText = idFilm;
      }

      $.ajax({
        type: "POST",
        url: url,
        data: { id: idFilm, time: timeSession.innerText },
        dataType: "json",
        success: function (response) {
          if (response.length > 0) {
            for (let i = 0; i < response.length; i++) {
              let rowSeat = response[i].rowSeat - 1;
              let seats = document.getElementsByClassName("seats")[rowSeat];
              let rentSeat =
                seats.childNodes[response[i].seat + response[i].seat + 1];

              rentSeat.style.backgroundColor = "#EF3838";
            }
          } else {
          }
        },
      });

      moveModal();
    }

    if (e.target.classList.contains("seatNumber")) {
      let seat = e.target;

      if (seat.style.backgroundColor == "rgb(25, 70, 61)") {
        seat.style.backgroundColor = "#5cdb95";
        countTickets--;
      } else if (seat.style.backgroundColor == "rgb(239, 56, 56)") {
        const Toast = Swal.mixin({
          toast: true,
          position: "top-end",
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
        });

        Toast.fire({
          icon: "warning",
          title: "Это место уже занято!",
        });
      } else {
        countTickets++;
        seat.style.backgroundColor = "#19463d";
      }
    }

    if (e.target.classList.contains("seatNumber")) {
      if (countTickets == 0) {
      } else if (countTickets > 1) {
        document.getElementById("countSeats").innerText =
          countTickets + " билета за " + priceTicket * countTickets + " ₽";
      } else {
        document.getElementById("countSeats").innerText =
          countTickets + " билет за " + priceTicket * countTickets + " ₽";
      }

      switch (countTickets) {
        case 0:
          document.getElementById("countSeats").innerText = "Выберите место";
          break;
        case 1:
          document.getElementById("countSeats").innerText =
            countTickets + " билет за " + priceTicket * countTickets + " ₽";
          break;
        case 2:
          document.getElementById("countSeats").innerText =
            countTickets + " билета за " + priceTicket * countTickets + " ₽";
          break;
        case 3:
          document.getElementById("countSeats").innerText =
            countTickets + " билета за " + priceTicket * countTickets + " ₽";
          break;
        case 4:
          document.getElementById("countSeats").innerText =
            countTickets + " билета за " + priceTicket * countTickets + " ₽";
          break;
        default:
          document.getElementById("countSeats").innerText =
            countTickets + " билетов за " + priceTicket * countTickets + " ₽";
          break;
      }
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
        document.getElementById("itogValue").innerText =
          document.getElementById("countSeats").innerText;

        let orderDiv = document.getElementsByClassName("orderTickets");
        let hallBlackout = document.getElementsByClassName("hallBlackout");

        orderDiv[0].style.opacity = "1";
        orderDiv[0].style.pointerEvents = "auto";

        hallBlackout[0].style.opacity = "1";
      }
    }

    if (e.target.classList.contains("calendar-item")) {
      let days = document.getElementsByClassName("calendar-item");

      for (let i = 0; i < days.length; i++) {
        days[i].classList.remove("selectSheduleDay");
        days[i].classList.remove("colorWhite");
      }

      e.target.classList.add("selectSheduleDay");
      e.target.classList.add("colorWhite");
    }

    if (e.target.classList.contains("crosBtn")) {
      let seats = document.getElementsByClassName("seatNumber");

      for (let i = 0; i < seats.length; i++) {
        seats[i].style.backgroundColor = "#5cdb95";
      }

      $("#telInput").val("");
      $("#mailInput").val("");

      countTickets = 0;

      document.getElementById("countSeats").innerText = "Выберите место";

      document.getElementById("hallDiv").style.pointerEvents = "none";
      document.getElementById("hallDiv").style.opacity = "0";
      document.getElementById("blackout").style.opacity = "0";

      let session = document.getElementsByClassName("session");

      for (let i = 0; i < session.length; i++) {
        session[i].classList.remove("selectSession");
      }
    }

    if (e.target.classList.contains("backBtnOrder")) {
      let orderDiv = document.getElementsByClassName("orderTickets");
      let hallBlackout = document.getElementsByClassName("hallBlackout");

      orderDiv[0].style.opacity = "0";
      orderDiv[0].style.pointerEvents = "none";

      hallBlackout[0].style.opacity = "0";

      $("#telInput").val("");
      $("#mailInput").val("");
    }

    if (e.target.classList.contains("orderBtnInInfoDiv")) {
      if (
        document.getElementById("telInput").value != "" &&
        document.getElementById("mailInput").value != ""
      ) {
        if (document.getElementById("mailInput").innerText.indexOf("@")) {
          let inputDiv = document.getElementById("orderTickets"),
            seats = document.getElementsByClassName("seatNumber"),
            id = document.getElementById("iddd").innerText,
            time = document.getElementById("timeSelectedSession").innerText,
            nameFilm = document.getElementById("nameFilmInOrder").innerText,
            day = parseDateString(
              document.getElementsByClassName("selectSheduleDay")[0].innerText
            );

          console.log(day);

          let mail = document.getElementById("mailInput").value;

          for (let i = 0; i < seats.length; i++) {
            if (seats[i].style.backgroundColor == "rgb(25, 70, 61)") {
              let row = seats[i].parentElement.childNodes[1].innerText;
              seats[i].style.backgroundColor = "#EF3838";
              $.ajax({
                type: "POST",
                url: "../src/db/orderSeat.php",
                data: {
                  seat: seats[i].innerText,
                  row: row,
                  id: id,
                  time: time,
                  nameFilm: nameFilm,
                  price: priceTicket,
                  mail: mail,
                  date: day,
                },
                success: function (response) {
                  console.log(response);
                },
              });

              const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
              });

              Toast.fire({
                icon: "success",
                title: "Место забронировано!",
              });
            }
          }

          inputDiv.style.opacity = "0";
          document.getElementsByClassName("hallBlackout")[0].style.opacity =
            "0";
        } else {
          const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
          });

          Toast.fire({
            icon: "error",
            title: "Некоректный электронный адрес!",
          });
        }
      } else {
        const Toast = Swal.mixin({
          toast: true,
          position: "top-end",
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
        });

        Toast.fire({
          icon: "error",
          title: "Напишите свои данные, чтобы забронировать билет",
        });
      }
    }

    if (e.target.classList.contains("calendar-item")) {
      let day = e.target.innerText;
      let dayToBack = parseDateString(day);

      $.ajax({
        type: "POST",
        url: "../src/db/selectCurrentDay.php",
        data: { day: dayToBack },
        success: function (response) {
          let films = response;
        },
      });
    }
  })
);
