function generateTable() {
    let num = document.getElementById("number").value;
    let output = document.getElementById("output");

    if (num === "") {
        output.innerHTML = "Please enter a number!";
        return;
    }

    let result = "<h3>Table of " + num + "</h3>";

    for (let i = 1; i <= 10; i++) {
        result += num + " × " + i + " = " + (num * i) + "<br>";
    }

    output.innerHTML = result;
}

function clearTable() {
    document.getElementById("output").innerHTML = "";
    document.getElementById("number").value = "";
}