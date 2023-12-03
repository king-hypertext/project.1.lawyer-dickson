(function ($) {
    "use strict"
    $(function () {
        var sidebar = $('.sidebar');
        var navbar = $('.navbar');

        $('[data-bs-toggle="sidebar-offcanvas"]')
            .on("click", () => {
                $('#backdrop').toggleClass('sidebar-backdrop show')
                $('.sidebar.sidebar-offcanvas').toggleClass('show')
                $('#x-toggle').toggleClass('fa-bars')
                $('#x-toggle').toggleClass('fa-times')
            })
        $('#backdrop')
            .on('click', () => {
                $('.sidebar.sidebar-offcanvas').toggleClass('show')
                $('#backdrop').toggleClass('sidebar-backdrop show')
                $('#x-toggle').toggleClass('fa-bars')
                $('#x-toggle').toggleClass('fa-times')
            })

        var current = location.pathname.split("/").slice(-1)[0].replace(/^\/|\/$/g, '');
        function addActiveClass(element) {
            if (current === '') {
                $('.navbar-collapse ul.navbar-nav li a[aria-current="page"]').addClass('active')
                $('.nav ul li a[aria-current="page"]').addClass('active')
            } else {
                if (element.attr('href').indexOf(current) !== -1) {
                    element.addClass('active');
                }
            }
        }
        $('.navbar-collapse ul.navbar-nav li a').each(function () {
            var $this = $(this);
            addActiveClass($this);
        })
        $('.nav ul li a', navbar).each(function () {
            var $this = $(this);
            addActiveClass($this);
        })
        $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 6000,
            centerMode: false,
            dots: false
        })
        Fancybox.bind("[data-fancybox='gallery'], [data-fancybox]", {
            // Your custom options
        });
        $('.vol').slick({
            autoplay: true,
            autoplaySpeed: 4000,
            centerMode: false,
            slidesToShow: 3,
            responsive: [{
                breakpoint: 998,
                settings: {
                    slidesToScroll: 1,
                    // infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 679,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    // dots: true
                }
            },
            {
                breakpoint: 320,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    // dots: true
                }
            }
            ]
        })
        document.querySelectorAll('[data-card-vol]').forEach(el => {
            el.addEventListener('mouseover', () => {
                el.classList.add('shadow')
                el.classList.add('border-0')
                // el.classList.add('rounded')
                el.classList.remove('rounded-0')
            })
            el.addEventListener('mouseleave', () => {
                el.classList.remove('shadow')
                el.classList.remove('border-0')
                el.classList.add('rounded-0')
            })
        })
        $('#get-in-touch').on('submit', function (e) {
            var firstname = $('#firstname').val(),
                lastname = $('#lastname').val(),
                phoneNumber = $('#phoneNumber').val(),
                email = $('#email').val();
            e.preventDefault()
            var data = {
                service_id: 'YOUR_SERVICE_ID',
                template_id: 'YOUR_TEMPLATE_ID',
                user_id: 'YOUR_PUBLIC_KEY',
                template_params: {
                    'username': 'James',
                    'g-recaptcha-response': '03AHJ_ASjnLA214KSNKFJAK12sfKASfehbmfd...'
                }
            };

            $.ajax('https://api.emailjs.com/api/v1.0/email/send', {
                type: 'POST',
                data: JSON.stringify(data),
                contentType: 'application/json'
            }).done(function () {
                toastr.success("Your message is sent", "Success")
                // alert('Your mail is sent!');
            }).fail(function (error) {
                toastr.error("Internet Disconnected", "Failed")
                // alert('Oops... ' + JSON.stringify(error));
            });
            console.log(`${firstname} ${lastname} ${phoneNumber} ${email}`)
        })
    })
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
    function customDate() {
        var _date = document.querySelectorAll('.date'), date = new Date(), y = date.getFullYear(), m = date.getMonth(), d = date.getDay(), f = date.getUTCDate();
        let months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
        let days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]
        var CurrentDate = days[d] + ", " + f + " " + months[m] + ", " + y;
        _date.forEach(elem => {
            elem.innerText = CurrentDate;
        })
    }
    customDate();
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
    $('video').each(function () {
        $(this).attr('autoplay', 'true');
    })
})(jQuery);