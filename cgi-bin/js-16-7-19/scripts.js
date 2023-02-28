var curSlide, curIndex, nextSlide, nextIndex, sliderLength = $(".text-item").length;

$(".text-item").first().addClass("is-current");
curSlide = $(".text-item.is-current");
curIndex = 0;
nextSlide = curSlide.next();
nextIndex = nextSlide.index();

var i = 0;
function autoSlider(i){

  $(".text-item.is-current").addClass("is-hidden");
  $(".text-item.is-current").removeClass("is-current");

  if(i >= sliderLength){
    $(".text-item").eq(0).addClass("is-current");
  }else{
    $(".text-item").eq(i).addClass("is-current");
  }

  setTimeout(function(){
    $(".text-item").removeClass("is-hidden");
  }, 500)
}

setInterval(function(){
  if(i >= sliderLength){
    i = 0;
  }
  autoSlider(i);
  i++;
}, 3500)

if($(".featured-work-item")){

  var ele1Class = ".featured-work-list .featured-work-item";
  var ele1 = $(ele1Class);

  var ele2Class = ".featured-img-list .featured-img-item";
  var ele2 = $(ele2Class);

  slider(ele1, ele1Class);
  slider(ele2, ele2Class);
}

if($(".mission-list")){

  var ele1Class = ".mission-list .mission-item";
  var ele1 = $(ele1Class);

  slider(ele1, ele1Class);
}

if($(".project-img-list")){
  var ele1Class = ".slider-ul .slider-item";
  var ele1 = $(ele1Class);

  slider(ele1, ele1Class);
}

function slider(sliderEle, eleClass){
  var curSlide, curIndex, nextSlide, nextIndex, sliderLength = sliderEle.length;

  sliderEle.first().addClass("is-current");
  curSlide = $(eleClass+".is-current");
  curIndex = 0;
  nextSlide = curSlide.next();
  nextIndex = nextSlide.index();

  var i = 0;
  function autoSlider(i){
    sliderEle.removeClass("is-current");

    if(i >= sliderLength){
      sliderEle.eq(0).addClass("is-current");
    }else{
      sliderEle.eq(i).addClass("is-current");
    }
  }

  setInterval(function(){
    if(i >= sliderLength){
      i = 0;
    }
    autoSlider(i);
    i++;
  }, 6000)
}
