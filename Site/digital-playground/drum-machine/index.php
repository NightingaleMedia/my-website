<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<head>
  <!--- Basic Page Needs
   ================================================== -->
  <meta charset="utf-8">
  <title>Drum Project</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Mobile Specific Metas
   ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- CSS
    ================================================== -->
  <link rel="stylesheet" href="style.css">

</head>
<header>
  </header>

<body>
  <h1> The Drum Kit </h1>
<div class="drum-container">

  <div
  data-key="65"
  class="single-drum">
    Kick<br> ("A")
  </div>

  <div
  data-key="83"
  class="single-drum">
    Snare <br>("S")
  </div>

  <div
  data-key="68"
  class="single-drum">
    Hat <br>("D")
  </div>

  <div
  data-key="70"
  class="single-drum">
    Hat 2 <br>("F")
  </div>

  <div
  data-key="74"
  class="single-drum">
    Tom 1 <br>("J")
  </div>

  <div
  data-key="75"
  class="single-drum">
    Tom 2 <br>("K")
  </div>

  <div
  data-key="76"
  class="single-drum">
    Ride <br>("L")
  </div>

  <div
  data-key="186"
  class="single-drum">
    Crash<br>(";")
  </div>

</div>


<!-- kick -->
<audio data-key="65" src="sounds/kick.wav"></audio>
<!-- snare -->
<audio data-key="83" src="sounds/snare.wav"></audio>
<!-- hat1 -->
<audio data-key="68" src="sounds/hat1.wav"></audio>
<!-- hat2 -->
<audio data-key="70" src="sounds/hat2.wav"></audio>
<!-- tom1 -->
<audio data-key="74" src="sounds/tom1.wav"></audio>
<!-- tom2 -->
<audio data-key="75" src="sounds/tom2.wav"></audio>
<!-- ride -->
<audio data-key="76" src="sounds/ride.wav"></audio>
<!-- crash -->
<audio data-key="186" src="sounds/crash.wav"></audio>




<script>


  function playSound(e) {
    const audio = document.querySelector(`audio[data-key="${e.keyCode}"]`);
    const key = document.querySelector(`.single-drum[data-key="${e.keyCode}"]`);
    key.classList.add('playing');
    if(!audio) return;
    audio.currentTime = 0; //rewind to the start
    audio.play();
  }


  function removeTransition(e){
    if(e.propertyName !== 'transform') return; //skip it if its not a transform
    this.classList.remove('playing');

  }

  const keys = document.querySelectorAll('.single-drum');
  keys.forEach(key => key.addEventListener('transitionend', removeTransition));
  window.addEventListener('keydown', playSound);

  </script>

  </body>
