// Fixed nav bar JQuery code
$(function(){    // this is the shorthand for document.ready
  $(document).scroll(function(){    // this is the scroll event for the document

    scrolltop = $(document).scrollTop(); // by this we get the value of the scrolltop ie how much scroll has been don by user
    if(parseInt(scrolltop) >= 402)    // check if the scroll value is equal to the top of navigation
      { 
        $("#navbar").css({"position":"fixed","top":"0"});   // is yes then make the position fixed to top 0
      }
    else
    {
      $("#navbar").css({"position":"absolute","top":"402px"}); // if no then make the position to absolute and set it to 80
    }
  })

});
// end of fixed nav bar JQuery code