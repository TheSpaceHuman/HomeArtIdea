try {
  $('.slick-col-3').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
} catch (e) {
  console.log(e)
}

try {
  $("#modalBtn1").animatedModal({
    modalTarget: 'case1',
    animatedInd: 'zoomIn',
    animatedOut: 'zoomOut',
    color: '#fff',
    beforeOpen: function() {
      var children = $(".thumb");
      var index = 0;
      function addClassNextChild() {
        if (index == children.length) return;
        children.eq(index++).show().velocity("transition.expandIn", {
          opacity: 1,
          stagger: 250
        });
        window.setTimeout(addClassNextChild, 200);
      }
      addClassNextChild();
    },
    afterClose: function() {
      $(".thumb").hide();
    }
  });

  $("#modalBtn2").animatedModal({
    modalTarget: 'case2',
    animatedInd: 'zoomIn',
    animatedOut: 'zoomOut',
    color: '#fff',
    beforeOpen: function() {
      var children = $(".thumb");
      var index = 0;
      function addClassNextChild() {
        if (index == children.length) return;
        children.eq(index++).show().velocity("transition.expandIn", {
          opacity: 1,
          stagger: 250
        });
        window.setTimeout(addClassNextChild, 200);
      }
      addClassNextChild();
    },
    afterClose: function() {
      $(".thumb").hide();
    }
  });

  $("#modalBtn3").animatedModal({
    modalTarget: 'case3',
    animatedInd: 'zoomIn',
    animatedOut: 'zoomOut',
    color: '#fff',
    beforeOpen: function() {
      var children = $(".thumb");
      var index = 0;
      function addClassNextChild() {
        if (index == children.length) return;
        children.eq(index++).show().velocity("transition.expandIn", {
          opacity: 1,
          stagger: 250
        });
        window.setTimeout(addClassNextChild, 200);
      }
      addClassNextChild();
    },
    afterClose: function() {
      $(".thumb").hide();
    }
  });

} catch (e) {
  console.log(e)
}
try {
  $("#modalBtn1").animatedModal({
    modalTarget: 'about',
    animatedInd: 'zoomIn',
    animatedOut: 'zoomOut',
    color: '#fff',
    beforeOpen: function() {
      var children = $(".thumb");
      var index = 0;
      function addClassNextChild() {
        if (index == children.length) return;
        children.eq(index++).show().velocity("transition.expandIn", {
          opacity: 1,
          stagger: 250
        });
        window.setTimeout(addClassNextChild, 200);
      }
      addClassNextChild();
    },
    afterClose: function() {
      $(".thumb").hide();
    }
  });
} catch (e) {
  console.log(e)
}

// Download PDF
try {
  $(".btn-download-modal").animatedModal({
    modalTarget: 'download-modal',
    animatedInd: 'zoomIn',
    animatedOut: 'zoomOut',
    color: '#fff'
  });
} catch (e) {
  console.log(e)
}

// Logic PDF Catalog
/*
$('.catalog-item_download-btn').click(function (e) {
  e.preventDefault();
  $('.catalog-item_input').toggleClass('d-none');
});
var catalogSecretValue = function () {
  return $('.catalog-item_input #secret-key').val();
};

if (catalogSecretValue() === 'password') {
  $('.catalog-item_result-panel').removeClass('d-none');
}

$(function() {
  //keypress wouldn't include delete key, keyup does. We also query the div id app and find the other elements so that we can reduce lookups
  $('#app').keyup(function(e) {
    var formname = $(this).find('.formname');
    //store in a variable to reduce repetition
    var n_input = $(this).find('#thing').val();
    formname.empty();
    formname.append(n_input);
  });
});*/
/*try {
  $(document).on('submit','#ajaxForm form',function(ev){
    var frm = $('#ajaxForm form');
    $.ajax({
      type: 'post',
      url: '/feedbackajaxform',
      data: frm.serialize(),
      success: function (data) {
        $('ajaxForm form').remove();
        $('#ajaxForm').html( data );
      }
    });
    ev.preventDefault();
  });
} catch (e) {
  console.log(e)
}*/
try {
  $(function(){
    $(document).on("submit","#form-feetback",function(e){
      e.preventDefault();
      var m_method=$(this).attr('method');
      var m_action=$(this).attr('action');
      var m_data=$(this).serialize();
      $.ajax({
        type: m_method,
        url: m_action,
        data: m_data,
        resetForm: 'true',
        success: function(result){
          var data = $(result).find("#ajax-form").html();
          $("#ajax-form").html(data);
        }
      });
    });
  });
} catch (e) {
  console.log(e)
}
