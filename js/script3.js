var ele1Class = ".service-1 .service-img";
var ele1 = $(ele1Class);
var ele2Class = ".service-2 .service-img";
var ele2 = $(ele2Class);
var ele3Class = ".service-3 .service-img";
var ele3 = $(ele3Class);

function slider(sliderEle, eleClass){
  var curSlide, curIndex, nextSlide, nextIndex, sliderLength = sliderEle.length;

  sliderEle.first().addClass("is-current");
  // curSlide = $(".is-current");
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
  }, 2000)
}

slider(ele1, ele1Class);
slider(ele2, ele2Class);
slider(ele3, ele1Class);
