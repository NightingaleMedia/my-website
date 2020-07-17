const comingSoon = document.querySelector('.coming-soon');
comingSoon.addEventListener('click', ()=>{
  comingSoon.innerText = "Coming Soon!";
})

const bgElements = document.querySelectorAll('.bg-changer')
let colors = ["#512677", "#f78e1e", "#0084f5", "#ea212d", "#39363c"];

bgElements.forEach(bgElement => {

    bgElement.style.transition = "background-color 0.8s ease"
    let i=0;
    setInterval(()=>{
      bgElement.style.backgroundColor =  colors[i];
      i = (i == colors.length-1 ? i=0 : i+=1);
  }, 1500)
})
