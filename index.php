<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kopi</title>
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/TweenMax.min.js"></script>
  <script src="assets/js/ScrollMagic.min.js"></script>
  <script src="assets/js/animation.gsap.js"></script>
  <!-- <script src="assets/js/debug.addIndicators.js"></script> -->

</head>

<body>

  <section class="section--home">
    <div class="spacer s2"></div>
    <div id="trigger1" class="spacer s0"></div>
    <div id="pin1">
      <div id="coffee"></div>
    </div>
  </section>
  <section class="panel blue">
    <b>ONE</b>
  </section>
  <section class="panel turqoise">
    <b>TWO</b>
  </section>
  <section class="panel green">
    <b>THREE</b>
  </section>
  <section class="panel yellow">
    <b>FOUR</b>
  </section>


  <script>
  var controller = new ScrollMagic.Controller({
    globalSceneOptions: {
      triggerHook: 'onLeave',
      duration: "200%"
    }
  });
  </script>

  <script>
  $(function() {

    var coffee = TweenMax.to("#coffee", 0.5, {
      scaleY: 300,
      ease: Linear.easeNone
    });

    var slides = document.querySelectorAll("section.panel");

    // create scene for every slide
    for (var i = 0; i < slides.length; i++) {
      new ScrollMagic.Scene({
          triggerElement: slides[i]
        })
        .setPin(slides[i], {
          pushFollowers: false
        })
        // .addIndicators()
        .addTo(controller);
    }


    var cup = new ScrollMagic.Scene({
        triggerElement: "#trigger1",
        duration: 400
      })
      .setTween(coffee)
      // .addIndicators({
      //   name: "1 (duration: 300)"
      // })
      .addTo(controller);


  });
  </script>
</body>

</html>