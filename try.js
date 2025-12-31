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
