<style>
    body {
        position: relative;
    }
    .btn-arrow {
        display: none;
        position: fixed;
        top: 92%;
        right: 5%;
        width: auto;
        height: auto;
        font-size: 28px;
        cursor: pointer;
        z-index: 100000;
    }
    .btn-arrow.show {
        display: block;
    }
</style>

<a href="#top-anchor" class="btn-scroll btn-arrow">
    <i class="fas fa-chevron-circle-up color--primary"></i>
</a>

<script>
  $(document).ready(function () {

    $(document).scroll(function () {
      if ($(this).scrollTop() > 200) {
        $('.btn-arrow').addClass('show');
        console.log('ADD show')
      } else {
        $('.btn-arrow').removeClass('show');
        console.log('REMOVE show')
      }
    });

    // Якоря
    try {
      $("a.btn-scroll[href*='#']").on("click", function(e){
        var anchor = $(this);
        var indent = -180;

        $('html, body').stop().animate({
          scrollTop: $(anchor.attr('href')).offset().top + indent
        }, 1000);
        e.preventDefault();
        return false;
      });
    } catch (e) {
      console.error(e);
    }

  });
</script>