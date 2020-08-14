<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
  var slideIndex = 1;
  var slideIndexs = 1;
  
  showDivs(slideIndex);
  function currentDiv(n) {
    showDivs(slideIndex = n);
  }

  function plusDivs(n) {
    showDivs(slideIndex += n);
  }

  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("element");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) { slideIndex = 1}
      if (n < 1) { slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-opacity-off";
        if(dots[slideIndex])
        {
          $('.demo').addClass('animated infinite bounce animated.slow');
          console.log("berhasil");
          console.log(dots[slideIndex]);
        }
        else
        {
          $('.demo').removeClass('animated infinite bounce animated.slow');
          console.log("salah");
          console.log(dots[slideIndex]);
        }
      }

showDivss(slideIndexs);
  function currentDivss(n) {
    showDivss(slideIndexs = n);
  }

  function plusDivss(n) {
    showDivss(slideIndexs += n);
  }


  function showDivss(n) {
    var i;
    var x = document.getElementsByClassName("element");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) { slideIndexs = 1}
      if (n < 1) { slideIndexs = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
        }
        x[slideIndexs-1].style.display = "block";
        dots[slideIndexs-1].className += " w3-opacity-off";
        if(dots[slideIndexs])
        {
          $('.demo').addClass('animated infinite bounce animated.slow');
          console.log("berhasil");
          console.log(dots[slideIndexs]);
        }
        else
        {
          $('.demo').removeClass('animated infinite bounce animated.slow');
          console.log("salah");
          console.log(dots[slideIndexs]);
        }
      }


$(document).ready(function(){
		    $("#click-embed-podcrast").click(function(){
		    	var url=$("#click-embed-podcrast").attr('src');
          window.open(url,'_blank')
	    	});
      });

    </script>