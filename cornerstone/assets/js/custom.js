jQuery(document).ready(function($) {
    $('.video-play').on('click', function() {
        $(this).find('svg, .overlay-image').hide();
        
        var iframe = $(this).find('iframe')[0];
        
        if (iframe) {
            var videoSrc = $(iframe).attr('src');
            if (videoSrc && !videoSrc.includes('autoplay=1')) {
                var newSrc = videoSrc + (videoSrc.includes('?') ? '&' : '?') + 'autoplay=1';
                $(iframe).attr('src', newSrc);
            }
        }
    });
});


let question = document.querySelectorAll(".question");

question.forEach(question => {
  question.addEventListener("click", event => {
    const active = document.querySelector(".question.active");
    if(active && active !== question ) {
      active.classList.toggle("active");
      active.nextElementSibling.style.maxHeight = 0;
    }
    question.classList.toggle("active");
    const answer = question.nextElementSibling;
    if(question.classList.contains("active")){
      answer.style.maxHeight = answer.scrollHeight + "px";
    } else {
      answer.style.maxHeight = 0;
    }
  })
})
