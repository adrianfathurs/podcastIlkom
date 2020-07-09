<script>
  var slideIndex = 1;
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

    </script>