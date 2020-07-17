// document.designMode = "on";



const showMenuCheck = document.querySelector("#tooltip");
const showMenuCheckBox = document.querySelector('input[name="open-context"]');
const hoverMenu = document.querySelector('.context-menu');
const options = document.querySelectorAll('.radial-menu__menu-item', '.radial-menu__exit');
const exitMenu = document.querySelector('.radial-menu__exit > div');
const editor = document.querySelector('.editor');


const openContextMenu = (e) => {

    let width = hoverMenu.offsetWidth;

    hoverMenu.style.top = `${e.layerY - (width / 2)+45}px`
    hoverMenu.style.left = `${e.layerX - (width / 2)+70}px`
    showMenuCheck.checked = false
    handleRotation()
    // handleOption()
}

const closeMenu = () => {
    
    hoverMenu.style.top = '0%';
    hoverMenu.style.left = '100%';
    hoverMenu.style.transform = `rotate(45deg) translate(-108px, -6px);`
    showMenuCheck.checked = true;
}

const resetMenu = (e) => {

    console.log('reset')
    closeMenu();
    openContextMenu(e)

}

editor.oncontextmenu = () => {
    return false
};


const handleRotation = () => {
    for (let i = 0; i <= options.length - 1; i++) {
        let rotation = (45 * i - 135);
        options[i].style.transform = `rotate(${rotation}deg)`;
        options[i].querySelector('ul > i').style.transform = `rotate(${-rotation -45}deg)`;
    }
}



    options.forEach(option => {
        const d = option.dataset.role;
        option.addEventListener('mousedown', () => {
            switch (d) {
                case "bold" :
                    document.execCommand('bold', false)
                    closeMenu();
                    break;

                case "italics" :
                    closeMenu();
                    break;

                case "exit" : 
                    closeMenu();
                    break;

                default:
                    closeMenu();
                    break;
            }
        })
    })


exitMenu.onclick = () => {
    closeMenu()
}
// exitMenu.addEventListener('mouseover',()=>{console.log('hver')})
editor.addEventListener('mouseup', (e) => {

    let select = document.getSelection();
    console.log(e)
    // select.deleteFromDocument();
    if (Math.abs(select.focusOffset - select.baseOffset) >= 1) {
        e.preventDefault()
        openContextMenu(e)
    // }else if (e.button == 2) {
    //     e.preventDefault();
    //     openContextMenu(e, select);
    }
})