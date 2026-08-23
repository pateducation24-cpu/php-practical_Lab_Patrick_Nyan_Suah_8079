<!DOCTYPE html>
<html>
<head>
    <title>Prompt Example</title>
</head>
<body>
    <h2>JavaScript Prompt Example</h2>
    <button onclick="getUserInput()">Click to Enter Your Name</button>
    <p id="display"></p>

    <script>
        function getUserInput() {
            var name = prompt("Please enter your name:");
            if (name != null && name != "") {
                document.getElementById("display").innerHTML = "Hello " + name + "! Welcome!";
            }
        }
    </script>
</body>
</html>