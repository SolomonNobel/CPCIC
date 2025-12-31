/* ---------------------------
   RESPONSIVE MOBILE MENU
--------------------------- */
function toggleMenu() {
    const nav = document.getElementById("navMenu");
    nav.classList.toggle("nav-open");
}

/* ---------------------------
   SCROLL BUTTON
--------------------------- */
function scrollToSection(id) {
    document.getElementById(id).scrollIntoView({ behavior: "smooth" });
}

/* ---------------------------
   CONTACT FORM
--------------------------- */
document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("contactForm");
    if (form) {
        form.addEventListener("submit", (e) => {
            e.preventDefault();
            document.getElementById("form-status").innerText =
                "Thank you! Your message has been sent.";
        });
    }
});

/* ---------------------------
   THEME SWITCHER
--------------------------- */
function toggleTheme() {
    document.body.classList.toggle("blue-theme");
}

// Add theme button dynamically to all pages
document.addEventListener("DOMContentLoaded", () => {
    const btn = document.createElement("button");
    btn.className = "theme-btn";
    btn.innerText = "Switch Theme";
    btn.onclick = toggleTheme;
    document.body.appendChild(btn);
});


// Hover functionality for dropdown menu
const dropdown = document.querySelector('div[style*="position:relative"]');
const list = dropdown.querySelector('ul');

let isInside = false;

dropdown.addEventListener("mouseenter", () => {
    isInside = true;
    list.style.display = "block";
});

dropdown.addEventListener("mouseleave", () => {
    isInside = false;
    setTimeout(() => {
        if (!isInside) list.style.display = "none";
    }, 150); // small delay prevents flicker
});

list.addEventListener("mouseenter", () => {
    isInside = true;
    list.style.display = "block";
});

list.addEventListener("mouseleave", () => {
    isInside = false;
    setTimeout(() => {
        if (!isInside) list.style.display = "none";
    }, 150);
});

let angle = 0; // starting angle

function animateDivisions() {
    angle += 0.016; // medium speed

    const centerX = window.innerWidth / 2; // center horizontally
    const centerY = 300; // vertical center for motion
    const radius = 150; // radius of the circular path

    // Energy division (0 offset)
    energy.style.position = "absolute";
    energy.style.left = centerX + radius * Math.cos(angle) - energy.offsetWidth / 2 + "px";
    energy.style.top  = centerY + radius * Math.sin(angle) - energy.offsetHeight / 2 + "px";

    // Construction division (120° offset)
    construction.style.position = "absolute";
    construction.style.left = centerX + radius * Math.cos(angle + 2) - construction.offsetWidth / 2 + "px";
    construction.style.top  = centerY + radius * Math.sin(angle + 2) - construction.offsetHeight / 2 + "px";

    // Mining division (240° offset)
    mining.style.position = "absolute";
    mining.style.left = centerX + radius * Math.cos(angle + 4) - mining.offsetWidth / 2 + "px";
    mining.style.top  = centerY + radius * Math.sin(angle + 4) - mining.offsetHeight / 2 + "px";

    requestAnimationFrame(animateDivisions);
}

animateDivisions();

function openPopup(title, image) {
    document.getElementById("popup-title").innerText = title;
    document.getElementById("popup-image").src = image;

    document.getElementById("popup").style.display = "flex";
}

function closePopup() {
    document.getElementById("popup").style.display = "none";
}




function checkCode() {
    let code = prompt("Enter the 4-digit access code:");

    if (code === "1234") {   // change 1234 to your own code
        alert("Access Granted ✅");
        // Example: redirect
        // window.location.href = "dashboard.html";
    } else {
        alert("Access Denied ❌");
    }
}
