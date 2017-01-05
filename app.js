$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        /*custom code*/
    
        /*/custom code*/
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

/* Scrolling header */
function ScrollingNavbar() {
    if(document.body.scrollTop > 50){
        $('.scrolling-navbar').addClass('dark-blue small');

    } else if (document.body.scrollTop < 50){
        $('.scrolling-navbar').removeClass('dark-blue small');
        
    }
}


function Warning() {
    $('.error').each(function () {
        if(!this.innerHTML == "") {
            $(this).addClass('alert alert-danger');
        }
    });
}

$(document).ready(Warning());

$(document).on("submit", "form", function(event)
{
    event.preventDefault();

    var url=$("form").attr("action");
    $.ajax({
        url: url,
        type: 'POST',            
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function (data, status)
        {
            console.log(data);
        }
    });
});

