$(".portfolio-tab").first().addClass("is-active");

$(".portfolio-tab").on("click", function(e){
  e.preventDefault();
  var tab_name = $(this).attr("href"),
      tab_name = tab_name.replace("#","");

      console.log(tab_name);

  $(".portfolio-tab").removeClass("is-active");
  $(this).addClass("is-active");

  $(".tab-blocks").removeAttr("style");
  $(".tab-blocks").addClass("is-active");

  if(tab_name != "all"){
    $(".tab-blocks").css("display","none");
    $(".tab-blocks").removeClass("is-active");
    $(".tab-blocks[data-tab="+tab_name+"]").css("display","block");
    $(".tab-blocks[data-tab="+tab_name+"]").addClass("is-active");
  }
})
