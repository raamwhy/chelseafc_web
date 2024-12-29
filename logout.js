document.getElementById("logoutButton").addEventListener("click", function() {
    // AJAX request to logout
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "logout.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
        if (xhr.status === 200) {
            // Clear session and redirect to index
            window.location.href = "index.php";
        }
    };
    xhr.send("logout=true");
});
