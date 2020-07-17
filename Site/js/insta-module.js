    const numInstas = 6;
    let instaList = [];

    const instaWrap = document.querySelector('.instagram-grid-wrap');
        function renderInstas(insta) {
        divList = [];
        for (i = 1; i <= numInstas; i++) {
            divList.push(`
                   <div class="item-grid grid-style--1">
                       <div class="thumb">
                           <a href="http://www.instagram.com/phre_owle" target="_blank">
                               <img src="../img/instagram/instagram-${i}.png" alt="instagram-image-${i}">
                           </a>
                       </div>
                   </div>
            `);
        }
        return divList.join('');
    }
window.onload = () =>{ 
    instaWrap.innerHTML = renderInstas();
  
}

  