$(document).ready(function() {
  var MyMar = null;
  var SleepTime = 4000; //停留时长 单位毫秒 
  function next() {
    $("#foucs").find(".right").click();
  }

  funcfoucs();

  $("#foucs").hover(function() {
    $("#foucs").find(".navi").fadeIn();
    clearInterval(MyMar);
  }, function() {
    $("#foucs").find(".navi").fadeOut();
    MyMar = setInterval(next, SleepTime);
  });
  
  MyMar = setInterval(next, SleepTime);

});

jQuery.extend(jQuery.easing, {
  def : 'easeOutQuint',
  swing : function(x, t, b, c, d) {
    return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
  },
  easeOutQuint : function(x, t, b, c, d) {
    return c * ((t = t / d - 1) * t * t * t * t + 1) + b;
  }
});

function funcfoucs() {
  var boxWidth = 888;
  var imgWidth = 630;
  var imgWidthHalf = imgWidth / 2;
  var boxHeight = 338;
  var imgOpacity = 0.5;
  var _imgArray = new Array();

  $("#foucs").find(".main").css({
    "position" : "absolute"
  });
  for ( var i = 0; i < $("#foucs").find(".element").length; i++) {
    if ($("#foucs").find(".element").eq(i).find("img").attr("src")) {
      _imgArray.push($("#foucs").find(".element").eq(i).find("img").attr("src"));
    }
  }
  if(/*@cc_on!@*/false){
    // IE
    setTimeout(startslide, 400);
  } else {
    // Non IE
    if (_imgArray.length) {
      loopImageLoader(0);
    } else {
      setTimeout(startslide, 400);
    }
  }

  function loopImageLoader(i) {
    var image1 = new Image();
    image1.onload = function() {
      i++;
      if (_imgArray.length != i) {
        loopImageLoader(i);
      } else {
        startslide();
      }
    }
    image1.src = _imgArray[i];
  }

  var _maxpage = 0;
  var _currentpage = 0;

  function startslide() {
    $("#foucs").find(".preload").hide();
    $("#foucs").find(".element").css("display", "inline-block");
    $("#foucs").find(".navi").hide();

    _maxpage = $("#foucs").find(".pict").length;

    for ( var i = 0; i < _maxpage; i++) {
      var _pos = Math.round(imgWidth * (i - _currentpage) + boxWidth / 2 - imgWidthHalf);
      var _opa = imgOpacity;
      if (i == _currentpage)
        _opa = 1;
      if (_pos > boxWidth) {
        _pos -= _maxpage * imgWidth
      } else if (_pos < -imgWidth) {
        _pos += _maxpage * imgWidth
      }
      $("#foucs").find(".pict").eq(i).css({
        left : _pos,
        opacity : 0
      }).animate({
        opacity : _opa
      }, {
        duration : 400,
        easing : 'linear'
      })
    }
    $("#foucs").stop().find(".main").removeClass("main");
    $("#foucs").stop().find(".pict").eq(_currentpage).addClass("main").css({
      "position" : "absolute"
    });

    window.onresize = function() {
      for ( var i = 0; i < _maxpage; i++) {
        var _pos = Math.round(imgWidth * (i - _currentpage) + boxWidth / 2 - imgWidthHalf);
        var _opa = imgOpacity;
        if (i == _currentpage)
          _opa = 1;
        if (_pos > boxWidth) {
          _pos -= _maxpage * imgWidth
        }
        $("#foucs").stop().find(".pict").eq(i).css({
          left : _pos,
          opacity : _opa
        })
      }
    }
    $("#foucs").find(".right").click(nextPage);
    $("#foucs").find(".left").click(prevPage);
  }

  function nextPage() {
    _currentpage++;
    if (_currentpage > _maxpage - 1)
      _currentpage = 0;
    $("#foucs").stop().find(".main").removeClass("main");
    $("#foucs").stop().find(".pict").eq(_currentpage).addClass("main").css({
      "position" : "absolute"
    });
    ;
    _pict = $("#foucs").find(".pict");
    for ( var i = 0; i < _maxpage; i++) {
      var _pos = Math.round(imgWidth * (i - _currentpage) + boxWidth / 2 - imgWidthHalf);
      var _opa = imgOpacity;
      if (i == _currentpage)
        _opa = 1;
      if (_pos > boxWidth) {
        _pos -= _maxpage * imgWidth
      } else if (_pos < -imgWidth * 2) {
        _pos += _maxpage * imgWidth
      }
      _pict.eq(i).stop().css({
        left : _pos + imgWidth
      }).animate({
        left : _pos,
        opacity : _opa
      }, {
        duration : 700,
        easing : 'easeOutQuint'
      })
    }
  }

  function prevPage() {
    _currentpage--;
    if (_currentpage < 0)
      _currentpage = _maxpage - 1;
    $("#foucs").stop().find(".main").removeClass("main");
    $("#foucs").stop().find(".pict").eq(_currentpage).addClass("main").css({
      "position" : "absolute"
    });
    ;
    for ( var i = 0; i < _maxpage; i++) {
      var _pos = Math.round(imgWidth * (i - _currentpage) + boxWidth / 2 - imgWidthHalf);
      var _opa = imgOpacity;
      if (i == _currentpage)
        _opa = 1;
      if (_pos < -imgWidth) {
        _pos += _maxpage * imgWidth
      } else if (_pos > boxWidth + imgWidth) {
        _pos -= _maxpage * imgWidth
      }
      $("#foucs").find(".pict").eq(i).stop().css({
        left : _pos - imgWidth
      }).animate({
        left : _pos,
        opacity : _opa
      }, {
        duration : 700,
        easing : 'easeOutQuint'
      })
    }
  }

}