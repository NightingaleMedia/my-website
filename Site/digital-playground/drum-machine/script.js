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
