console.log("sss")

// ============= CLICKED ELEMENT =============
document.addEventListener("click", (event) => {
    clickedElement = event.target;
    console.log(clickedElement)

    // ====== Show Hide Password ======
    if (clickedElement == document.getElementById("showLogin")) {
        showHidePassword(
            "showLogin", 
            "passwordLogin", 
            "repeatPasswordLogin" /*HIDDEN*/ , 
            "mataLogin", 
            "butaLogin");

    } else if (clickedElement == document.getElementById("showRegistration")) {
        showHidePassword(
            "showRegistration", 
            "passwordRegistration", 
            "repeatPasswordRegistration", 
            "mataRegistration", 
            "butaRegistration");
    
    } else if (clickedElement == document.getElementById("showUserEdit")) {
        showHidePassword(
            "showUserEdit", 
            "passwordUserEdit", 
            "repeatPasswordUserEdit"/*HIDDEN*/, 
            "mataUserEdit", 
            "butaUserEdit"
        )
    }

    // ===== Remove Animation Label when we click anywhere ======
    for (let z = 0; z < input.length; z++) {
        if (clickedElement != input[z] && clickedElement != label[z] && label[z].classList.contains("labelMovingTop") && input[z].value == "") {
            label[z].classList.remove("labelMovingTop");
        }
    }

    // ===== Icon Camera - Edit Photo =====
    const iconCamera = document.getElementById("iconCamera");
    const camera = document.getElementById("camera")
    const inputImageInForm = document.getElementById("image");

    if(clickedElement == iconCamera || clickedElement == camera) {
        console.log(camera)
        inputImageInForm.click();
    }

    // ==================== Toggle Menu =========================
    const menuToggle = document.getElementById("menu-toggle");
    const iconMenuToggle = document.getElementById("iconMenuToggle");
    const navbar = document.getElementById("navbar");
    const pageContentWrapper = document.getElementById("page-content-wrapper");
    const sidebarWrapper = document.getElementById("sidebarWrapper");
    
    if (clickedElement == iconMenuToggle || clickedElement == menuToggle) {
        iconMenuToggle.classList.toggle("animationNavIconMenu");
        navbar.classList.toggle("width-100vw");
        sidebarWrapper.classList.toggle("sidebarToggled");
        pageContentWrapper.classList.toggle("toggled");
    }

    // ==================== Dropdown =========================
    const iconNavbarDropdown = document.getElementById("iconNavbarDropdown");
    const buttonNavbarDropdown = document.getElementById("buttonNavbarDropdown");
    const menuNavbarDropdown = document.getElementById("menuNavbarDropdown");

    if (clickedElement == buttonNavbarDropdown || clickedElement == iconNavbarDropdown) {
        buttonNavbarDropdown.classList.toggle("animationButtonNavbarDropdown");
        menuNavbarDropdown.classList.toggle("navbarDropdownStyle");
    }

    // ==================== Details Preview =========================
    // const details = document.getElementsByTagName("details");
    // const wisataPreview = document.getElementsByClassName("wisataPreview");
    // for (let i = 0; i < wisataPreview.length; i++) {
    //     if (clickedElement == details[i]) {
    //         wisataPreview[i].classList.toggle("addMoreHeight");
    //     }
    // }

});

// ==================== Animation Input Label for Form Login & Registration =========================
const input = document.getElementsByClassName("ourInput");
const label = document.getElementsByClassName("ourLabel");
const select = document.getElementsByTagName("select");

// add animation
for (let i = 0; i < input.length; i++) {
    // while input:focus and input doesnt have value and label doesnt have that classlist, label go up
    input[i].addEventListener("focus", () => {
        if (input[i].value == "" && !(label[i].classList.contains("labelMovingTop"))) {
            label[i].classList.add("labelMovingTop");
        } 
    });

    // if input have value label go up 
    if (input[i].value != "" && !(label[i].classList.contains("labelMovingTop"))){
        label[i].classList.add("labelMovingTop");
    } 
}

// for (let i = 0; i < select.length; i++) {
//     select[i].addEventListener("focus", () => {
//         if (select[i].value == "" && !(label[i].classList.contains("labelMovingTop"))) {
//             label[i].classList.add("labelMovingTop");
//         }
//     });
//     if (select[i].value != "" && !(label[i].classList.contains("labelMovingTop"))){
//         label[i].classList.add("labelMovingTop");
//     } 
// }

// ========================= HOVER ELEMENT =======================
document.addEventListener("mouseover", (event) => {
    hoveredElement = event.target;

    const containerImageInForm = document.getElementById("containerImageInForm");
    const imageToUpload = document.getElementById("imageToUpload");
    const inputImageInForm = document.getElementById("image");
    if (containerImageInForm) {
        if (hoveredElement == containerImageInForm || hoveredElement == imageToUpload || hoveredElement == inputImageInForm) {
            inputImageInForm.classList.add("opacityAndFilterForImageInput");
            imageToUpload.classList.add("brightnessDown")
        } else {
            inputImageInForm.classList.remove("opacityAndFilterForImageInput");
            imageToUpload.classList.remove("brightnessDown");
        }
    } 
    
});

// ============== Get Widht Sidebar
// const navbar = document.getElementById("navbar");
// const sidebarWrapper = document.getElementById("sidebarWrapper");
// const sidebarWidth = document.getElementById("sidebarWrapper").clientWidth;
// navbar.style.width = 100 + "vw" - sidebarWidth + "px";
// console.log(sidebarWidth)
// =============== FUNCTION =================
function showHidePassword(show, password, repeatPassword, mata, buta) {
    if (document.getElementById(show).checked == true) {
        document.getElementById(password).setAttribute("type", "text");
        document.getElementById(repeatPassword).setAttribute("type", "text");
        document.getElementById(mata).style.opacity = "0";
        document.getElementById(buta).style.opacity = "1";

    } else {
        document.getElementById(password).setAttribute("type", "password");
        document.getElementById(repeatPassword).setAttribute("type", "password");
        document.getElementById(mata).style.opacity = "1";
        document.getElementById(buta).style.opacity = "0";
    }
}

// const wisataPreview = document.getElementsByClassName("wisataPreview")
// let arraywisata = [];
// for(let i = 0; i < wisataPreview.length; i++) {
//     arraywisata = [Math.max(wisataPreview)];
//     // console.log(Math.max(arraywisata[i]));
//     console.log(arraywisata);

// }    
