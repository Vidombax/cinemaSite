setTimeout(
  document.addEventListener("click", function (e) {
    if (e.target.classList.contains("session")) {
      let session = e.target;
      let hallDiv = document.getElementById("hallDiv");
      
      session.classList.add("selectSession");
      document.getElementById("blackout").style.opacity = "1";

      let mainDiv = document.getElementsByClassName("mainDiv");
      document.getElementById("blackout").style.height = mainDiv[0].offsetHeight + "px";

      let nameFilmInOrder = document.getElementById('nameFilmInOrder')

      let sessions = $(session).parent('.sessions')
      let movie = $(sessions).parent('.grid')
      let movieSession = $(movie).parent('.movieSession')  

      let path = window.location.pathname;
      let page = path.split("/").pop();

      if (page == '') {
        nameFilmInOrder.innerText = movie[0].childNodes[3].innerText
      }      
      else {
        nameFilmInOrder.innerText = document.getElementById('nameSelectedFilm').innerText
      }

      document.getElementById('timeSelectedSession').innerText = session.childNodes[1].innerText
      document.getElementById('priceSelectedSession').innerText = session.childNodes[3].innerText


      //TODO:На страницу фильма переделай условие            
      let timeSession = document.getElementById('timeSelectedSession')
      let idFilm,
      url
      if (page == '') {
        url = 'src/db/getRentSeat.php'
        idFilm = movieSession[0].childNodes[1].innerText
      }
      else {
        url = '../db/getRentSeat.php'
        idFilm = document.getElementById('idFilm').innerText
      }

      $.ajax({
        type: "POST",
        url: url, 
        data: { id: idFilm, time: timeSession.innerText },
        dataType: 'json',
        success: function(response) {  
          if (response.length > 0) {
            for (let i = 0; i < response.length; i++) {
              let rowSeat = response[i].rowSeat - 1
              let seats = document.getElementsByClassName('seats')[rowSeat]
              let rentSeat = seats.childNodes[response[i].seat + response[i].seat + 1] 

              rentSeat.style.backgroundColor = '#EF3838'
            }            
          }
          else {
            console.log('У зала нет занятых мест')
          }
        }
      })

      moveModal()
    }

  if (e.target.classList.contains("seatNumber")) {
      let seat = e.target;      

      if (seat.style.backgroundColor == 'rgb(25, 70, 61)') {
        seat.style.backgroundColor = '#5cdb95'
      }
      else if (seat.style.backgroundColor == 'rgb(239, 56, 56)') {
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
      }  
      else {
        seat.style.backgroundColor = '#19463d' 
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

      $('#telInput').val('')
      $('#mailInput').val('')

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
  })
);
