// wind

const query = (element) => document.querySelector(element);
const queryAll = (element) => document.querySelectorAll(element);

const MenuIcon = query(".menu-icon");
const MenuHeader = query(".header-menu");

const menuTablet = query(".menu-tablet");
const closeMenu = query(".close-menu span");

const navbarLabel = queryAll(".navbar-admin ul li a label");

const arrowShowNavbar = query(".sub-navbar");

const iconArrowNavbar = query(".navbar-icon .material-symbols-outlined");
// Menu left
const elemntLiMenuLeft = queryAll(".header-menu-left li");
// End Menu left

// Menu right
const elementLiMenuRight = queryAll(".header-menu-right li a");
// End menu right

var mdScreen = window.matchMedia("(max-width: 856px)");
// NavBar

const elementANavbar = queryAll(".item-navbar");

const elementsLi = queryAll(".item-li-navbar");

const elementOptionValue = query(".value-option");

const handleActiveNavBarAdmin = (event) => {
    const currentItem = event.target;
    elementsLi.forEach((element) => {
        element.classList.remove("active-navbar-admin");
    });
    currentItem.closest(".item-li-navbar").classList.add("active-navbar-admin");
    if (currentItem.closest(".sub-navbar")) {
        currentItem
            .closest(".item-li-navbar")
            .classList.add("active-navbar-admin");
    } else {
        currentItem
            .closest(".item-li-navbar")
            .querySelector(".sub-navbar")
            .classList.toggle("show-sub-navbar");
    }
};

// End navbar

function ReponsiveNavbar(screen) {
    if (screen.matches) {
        navbarLabel.forEach((item) => {
            item.classList.remove("show-navbar");
            item.classList.add("close-navbar");

            iconArrowNavbar.classList.remove("navbar-icon-reverse");
            iconArrowNavbar.classList.add("navbar-icon-rotate");
        });
    } else {
        navbarLabel.forEach((item) => {
            item.classList.remove("close-navbar");
            item.classList.add("show-navbar");
            if (iconArrowNavbar) {
                iconArrowNavbar.classList.remove("navbar-icon-rotate");
                iconArrowNavbar.classList.add("navbar-icon-reverse");
            }
        });
    }
}

ReponsiveNavbar(mdScreen);

mdScreen.addListener(ReponsiveNavbar);

const toggleNavbar = () => {
    navbarLabel.forEach((item) => {
        item.classList.toggle("show-navbar");
        item.classList.toggle("close-navbar");
        iconArrowNavbar.classList.toggle("navbar-icon-reverse");
        iconArrowNavbar.classList.toggle("navbar-icon-rotate");
    });
};

const showNavbar = () => {
    navbarLabel.forEach((item) => {
        if (
            item.parentElement
                .querySelector("label")
                .closest(".show-navbar") === null
        ) {
            item.classList.remove("close-navbar");
            item.classList.add("show-navbar");
            iconArrowNavbar.classList.toggle("navbar-icon-reverse");
            iconArrowNavbar.classList.toggle("navbar-icon-rotate");
        }
    });
};

const disableScroll = (event) => {
    event.preventDefault();
};

// Menu left
const handleActiveMenuLeft = (event) => {
    elemntLiMenuLeft.forEach((item) => {
        item.classList.remove("active-header-menu-left");
    });
    event.target
        .closest(".item-menu-left")
        .classList.add("active-header-menu-left");
};
// End Menu left

// Menu right
const handleActiveMenuRight = (event) => {
    elementLiMenuRight.forEach((item) => {
        item.classList.remove("active-header-menu-right");
    });
    event.target
        .closest(".item-menu-right")
        .classList.add("active-header-menu-right");
};

// End menu right

// NavBar

const handleActiveNavbar = (event) => {
    elementANavbar.forEach((item) => {
        item.classList.remove("active-navbar");
    });
    event.target.closest(".item-navbar").classList.add("active-navbar");
};
// End navbar

const svgTag = queryAll(".svg-tag");

const getValueOption = (event) => {
    event.target.parentElement.parentElement.querySelector(
        ".value-option"
    ).innerText = event.target.innerText;
};

const handleCopyClipboard = (event) => {
    const copyText = query(".value-copy");
    /* Select the text field */
    if (copyText) {
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */
        navigator.clipboard.writeText(copyText.value);
        console.log(copyText.value);
    }
};

const toggleTypeInputPassword = (event) => {
    let typeInput = event.target.parentElement.querySelector("input").type;
    event.target.innerText =
        typeInput === "password" ? "visibility_off" : "visibility";
    event.target.parentElement.querySelector("input").type =
        typeInput === "password" ? "text" : "password";
};
