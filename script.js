function showTab(tabId) {
    var tabs = document.getElementsByClassName('tab-content');
    for (var i = 0; i < tabs.length; i++) {
        tabs[i].style.display = 'none';
    }

    document.getElementById(tabId).style.display = 'block';
}


function checkPassword() {
    const correctPassword = "tiger"; 
    const enteredPassword = document.getElementById("bus_password").value;
    const messageElement = document.getElementById("password_message");

    if (enteredPassword === correctPassword) {
        document.getElementById("bus_management_form").style.display = "block"; 
        messageElement.textContent = ""; 
        document.querySelector('.password-prompt').style.display = 'none'; 
    } else {
        messageElement.textContent = "Incorrect Password. Please try again.";
    }
}

function showTab(tabId) {
    var tabContents = document.querySelectorAll('.tab-content');
    for (var i = 0; i < tabContents.length; i++) {
        tabContents[i].style.display = 'none';
    }
    document.getElementById(tabId).style.display = 'block';
}

