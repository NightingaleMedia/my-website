// <script src="https://apis.google.com/js/api.js"></script>

  /**
   * Sample JavaScript code for youtube.playlistItems.list
   * See instructions for running APIs Explorer code samples locally:
   * https://developers.google.com/explorer-help/guides/code_samples#javascript
   */
  const button = document.querySelector('#load-vid-button')
  
  class VideoCreator {
    constructor(src) {
      this._container = document.createElement('div');

      this._container.classList.add('col-lg-4', 'col-md-4', 'col-sm-6', 'col-12', 'mt--30', 'youtuber')
 
      this._div1 = this.divBuilder('div', ['portfolio', 'portfolio_style--1']);

      this._container.append(this._div1);
      
      this._div2 = this.divBuilder('div', ['poss_relative']);
      this._div1.append(this._div2);
                                  
      this._thumb = this.divBuilder('div',['thumb']);
      this._thumb.style.backgroundImage = `url(${src})`;
      this._div2.appendChild(this._thumb);
      
      this._image = this.divBuilder('img',['youtuber'])
      this._thumb.append(this._image);
      
      this._port = this.divBuilder('div', ['port-overlay-info'])
      this._div2.appendChild(this._port);
      
      this._hoverAction = this.divBuilder('div', ['hover-action']);
      this._port.appendChild(this._hoverAction);
      
      this._title = this.divBuilder('h3', ['post-overlay-title']);
      this._hoverAction.appendChild(this._title);
 
    }

    
    
    divBuilder(elemType, classListData){
      const created = document.createElement(elemType);
      created.classList.add(...classListData);  
      return created;
    };
    
    addImageInfo(src, alt){
      this._image.src = src;

      this._image.classList.add('video-playlist')
      this._image.alt = alt;
      return this._image;
    }
    addHref(href, title){
      this._title.innerHTML = `<a href="${href}" target="_blank">${title}</a>`
      return this._title;
    }
    render() {
      return this._container;
    }
  }

  const buildVideos = (data) => {
       console.log(data);

    data.items.forEach((item) => {
    if(item.snippet.title !== "Private video"){ 
      let imageSrc = item.snippet.thumbnails.medium.url;
      videoBox = new VideoCreator(imageSrc);
   
      videoBox.addImageInfo(imageSrc, item.snippet.title);
      videoBox.addHref(`http://www.youtube.com/watch?v=${item.snippet.resourceId.videoId}`, item.snippet.title)
      anchor.appendChild(videoBox.render());
    }
    })
  }

  const API_KEY = 'AIzaSyAn4glPcwA-22h509z7xsHu04f7TWFrQuQ';
  const PLAYLIST_ID = 'PLGVZlmzZDMxIcmlHvDzWs-esBabZ2JDWz';
  const CHANNEL_ID = 'UC-DnqeSgK-rCz0cHOcDNCcg';
  const url = `https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=${PLAYLIST_ID}&key=${API_KEY}`;
 
  const getVids = (u) => {
     fetch(u, {
      mode : 'cors',
      headers: {
        'Access-Control-Allow-Origin':''
      }
    })
      .then(response => response.json())
      .then(data => buildVideos(data))
  }
  
//   button.addEventListener('click', ()=>{getVids(url)})
//   button.addEventListener('click', ()=>{button.innerText = "yed"})
  const anchor = document.querySelector('.anchor-elem');
  if (anchor != null){ 
  setTimeout(10000, getVids(url));
  }

// getVids(url);