setTimeout(
    document.addEventListener("click", function (e) {
        if (e.target.classList.contains('couponImg')) {
            let promocode = e.target

            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                  }
              });
      
              Toast.fire({
                icon: "info",
                title: "Ваш промокод: " + promocode.alt,
              });
        }
    })    
, 100)