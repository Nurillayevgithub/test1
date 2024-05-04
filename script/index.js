
document.getElementById("registrationForm").addEventListener("submit", function(event){
    event.preventDefault();
    
    var firstName = document.getElementById("fname").value;
    var lastName = document.getElementById("lname").value;
    var phoneNumber = document.getElementById("pnumber").value;
    var email = document.getElementById("eml").value;
    var password = document.getElementById("pasword").value;
    var educationCenter = document.querySelector('input[name="program"]:checked').value;
    var languages = [];
    var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
    checkboxes.forEach(function(checkbox) {
        languages.push(checkbox.value);
    });
    var level = document.getElementById("level").value;
    var startDate = document.getElementById("start_date").value;
    var finishDate = document.getElementById("finish_date").value;
    var file = document.getElementById("file").value;

    console.log("First Name: " + firstName);
    console.log("Last Name: " + lastName);
    console.log("Phone Number: " + phoneNumber);
    console.log("Email: " + email);
    console.log("Password: " + password);
    console.log("Education Center: " + educationCenter);
    console.log("Languages: " + languages.join(", "));
    console.log("Level: " + level);
    console.log("Start Date: " + startDate);
    console.log("Finish Date: " + finishDate);
    console.log("File: " + file);
});

