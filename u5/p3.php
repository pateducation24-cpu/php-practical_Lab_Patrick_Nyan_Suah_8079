<!DOCTYPE html>
<html>
<head>
    <title>Login Authentication</title>
</head>
<body>
    <h2>Login Form</h2>
    <div id="loginForm">
        <label>Username:</label>
        <input type="text" id="username"><br><br>
        
        <label>Password:</label>
        <input type="password" id="password"><br><br>
        
        <button onclick="authenticateUser()">Login</button>
    </div>
    <div id="message"></div>

    <script>
        // User Defined Function for authentication
        function authenticateUser() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            
            // Call validation function
            if (validateInput(username, password)) {
                // Call authentication function
                if (checkCredentials(username, password)) {
                    displayMessage("Login successful! Welcome " + username, "success");
                } else {
                    displayMessage("Invalid username or password!", "error");
                }
            }
        }
        
        // UDF to validate input
        function validateInput(username, password) {
            if (username == "" || password == "") {
                displayMessage("Please enter both username and password!", "error");
                return false;
            }
            return true;
        }
        
        // UDF to check credentials
        function checkCredentials(username, password) {
            // Hardcoded credentials for demo
            var validUsers = {
                "admin": "admin123",
                "user": "user123",
                "john": "john123"
            };
            
            if (validUsers[username] && validUsers[username] == password) {
                return true;
            }
            return false;
        }
        
        // UDF to display message
        function displayMessage(msg, type) {
            var messageDiv = document.getElementById("message");
            messageDiv.innerHTML = msg;
            messageDiv.style.color = (type == "success") ? "green" : "red";
            messageDiv.style.fontWeight = "bold";
        }
    </script>
</body>
</html>