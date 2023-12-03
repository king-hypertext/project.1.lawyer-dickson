(function ($) {
  "use strict"
  const getInTouch = (e) => {
    e.preventDefault();
    alert('submitted')
  }
  document.querySelectorAll('.nav-item .nav-link')
    .forEach(element => {
      if (element.classList.contains('active')) {
        return null
      } else {
        element.addEventListener('mouseenter', () => {
          element.classList.toggle('nav-item-hover')
        })
        element.addEventListener('mouseleave', () => {
          element.classList.toggle('nav-item-hover')
        })
      }
    })
  function showDate() {
    var _date = document.querySelectorAll('.date'), date = new Date(), y = date.getFullYear(), m = date.getMonth(), d = date.getDay(), f = date.getUTCDate();
    let months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
    let days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]
    var CurrentDate = days[d] + ", " + f + " " + months[m] + ", " + y;
    _date.forEach(elem => {
      elem.innerText = CurrentDate;
    })
  }
  showDate();
  setInterval(() => {
    $('.time').text(new Date().toLocaleTimeString())
  }, 1000)
  $(window).scroll(() => {
    $(window).scrollTop() > 100 ? $('.scrollTop').fadeIn() : $('.scrollTop').fadeOut()
  })
  $('.scrollTop').click(e => {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, 0)
    return 0;
  });
  $('#year').text(new Date().getFullYear())
  $('video').each(function() {
    $(this).attr('autoplay', 'true');
  })
})(jQuery);