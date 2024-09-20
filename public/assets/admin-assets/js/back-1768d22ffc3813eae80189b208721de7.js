
(function ($) {
  'use strict';




  /*----------------------------------------*/
	/*  Check if element exists
	/*----------------------------------------*/
	$.fn.elExists = function () {
		return this.length > 0;
	};


  	/*----------------------------------------*/
	/*  Nice Select
	/*----------------------------------------*/
	if ($('.nice-select').elExists()) {
		  $('.nice-select').niceSelect();
	}

  /*--------------------------------
  /*  Filter tables
  -------------------------------- */
  $(document).ready(function () {
    $(".search-input").on("keyup", function () {
      var value = $(this).val().toLowerCase();
      $(".search-table tbody tr").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });


  /*--------------------------------
  /* Datatables
  -------------------------------- */
  new DataTable('#userstable , #servicestable, #brandstable , #usedcarstable, #usedcarstable, #testimonialstable' ,{
    responsive: true,
    searching: false,
    info: false,
    lengthChange: false,
    language: {
      'paginate': {
        'previous': '<span class="bi bi-chevron-double-left"></span>',
        'next': '<span class="bi bi-chevron-double-right"></span>'
      }
    }

  });

  /*--------------------------------
  /*  Toggle Dropdown
    -------------------------------- */
  $(".main-header .dropdown-toggle").click(function (event) {
    $('.main-header .dropdown-menu').toggleClass('show');
  });

  $(".animal-dropdown .dropdown-toggle").click(function (event) {
    $('.animal-dropdown .dropdown-menu').toggleClass('show');
  });

  /* Closes  dropdown on click outside the conatainer*/
	
  var mouse_is_inside = false;

  $(".main-header .dropdown-toggle").on("mouseenter", function () {
    mouse_is_inside = true;
  });
  $(".main-header .dropdown-toggle").on("mouseleave", function () {
    mouse_is_inside = false;
  });

  $("body").mouseup(function () {
    if (!mouse_is_inside)  $('.main-header .dropdown-menu').removeClass('show');
    ;
  });



  /*----------------------------------------*/
	/*  Fill select inputs
	/*----------------------------------------*/

  if ($('[data-value-mt]').elExists()) {
    $('[data-value-mt]').each(function () {
      
      var $this = $(this),
      $val = $this.data('value-mt');

      $this.find("option[value='" + $val +"']").attr("selected","selected");
      $this.next().find("span.current").html($val)


    });

  }


  if ($('[data-value-op]').elExists()) {
    $('[data-value-op]').each(function () {
      
      var $this = $(this),
      $val = $this.data('value-op');

      $this.find("input[value='" + $val +"']").attr("checked","checked");
    });

  }

// /*----------------------------------------*/
	/*  Fill radio input / Testimonial
	/*----------------------------------------*/
  
  var note = $('input[name="notestored"]').val()

  $('input:radio[name="testimonial[note]"][value='+note+']').attr('checked',true);


  

})(jQuery);