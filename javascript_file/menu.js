
// showing nav links
const menuIcon = document.querySelector(".fa-bars")
const navLinks = document.querySelector(".nav-links")

menuIcon.addEventListener("click",()=>{
    navLinks.style.display="block"
})

//  pop up
function showImage(img){
    const popupImg = document.getElementById("pop-up-img")
    popupImg.src = img.src

    const popupImage = document.getElementById("popupImage")
    popupImage.style.display="flex"
}

// hidePopup()
function hidePopup(){
    const popupImage = document.getElementById("popupImage")
    popupImage.style.display="none" 
}

