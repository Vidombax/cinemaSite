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
    }),  
    document.addEventListener('mouseover', function(e) {
        if (e.target.classList.contains('question')) {
            let question = e.target,
            coupon = $(question).parent('.coupon'),
            promocode = $(coupon).parent('.divPromocode')
            couponExplanation = promocode[0].childNodes[1]
            
            couponExplanation.style.opacity = 1
        }
    }),
    document.addEventListener('mouseout', function(e) {
        if (e.target.classList.contains('question')) {
            let question = e.target,
            coupon = $(question).parent('.coupon'),
            promocode = $(coupon).parent('.divPromocode')
            couponExplanation = promocode[0].childNodes[1]
            
            couponExplanation.style.opacity = 0
        }
    })
, 100)