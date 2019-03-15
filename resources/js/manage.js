const accordians = document.getElementsByClassName('has-submenu')
for(var i=0; i < accordians.length; i++){
    accordians[i].onclick = function () {
        
        this.classList.toggle('is-active')

        const submenu = this.nextElementSibling
        if(submenu.style.maxHeight){
            //menu is open , we need to close it now
            submenu.style.maxHeight = null
            submenu.style.marginTop = null
            submenu.style.marginBottom= null
        }else{
            //menu is close , we need to open it
            submenu.style.maxHeight = submenu.scrollHeight + "px"
            submenu.style.marginTop = "0.75em"
            submenu.style.marginBottom= "0.75em"
        }
    }
}