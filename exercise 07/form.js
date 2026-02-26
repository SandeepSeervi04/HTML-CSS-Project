function printData() {

    let name = document.getElementById("name").value;
    let age = document.getElementById("age").value;
    let dob = document.getElementById("dob").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let country = document.getElementById("country").value;
    let password = document.getElementById("password").value;
    let repassword = document.getElementById("repassword").value;
    let about = document.getElementById("about").value;

    let gender = document.querySelector('input[name="gender"]:checked');
    gender = gender ? gender.value : "Not selected";

    let hobbies = [];
    document.querySelectorAll('input[type="checkbox"]:checked')
        .forEach((checkbox) => {
            hobbies.push(checkbox.value);
        });

    if (password !== repassword) {
        alert("Passwords do not match!");
        return;
    }

    let outputDiv = document.getElementById("output");

    outputDiv.innerHTML = `
        <h3>Entered Details:</h3>
        <b>Name:</b> ${name} <br>
        <b>Age:</b> ${age} <br>
        <b>DOB:</b> ${dob} <br>
        <b>Email:</b> ${email} <br>
        <b>Phone:</b> ${phone} <br>
        <b>Country:</b> ${country} <br>
        <b>Gender:</b> ${gender} <br>
        <b>Hobbies:</b> ${hobbies.join(", ")} <br>
        <b>About:</b> ${about}
    `;
}