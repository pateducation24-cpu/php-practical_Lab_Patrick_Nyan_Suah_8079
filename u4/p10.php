<?php

// Database connection
$conn = mysqli_connect("localhost", "root", "", "studentdb");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert
if (isset($_POST['insert'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $sql = "INSERT INTO student1 (name, email) VALUES ('$name', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Record Inserted")</script>';
    } else {
        echo '<script>alert("Insert failed: ' . mysqli_error($conn) . '")</script>';
    }
}

// Update
if (isset($_POST['update'])) {
    $id = intval($_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $sql = "UPDATE student1 SET name='$name', email='$email' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Record Updated")</script>';
    } else {
        echo '<script>alert("Update failed: ' . mysqli_error($conn) . '")</script>';
    }
}

// Delete
if (isset($_POST['delete'])) {
    $id = intval($_POST['id']);
    $sql = "DELETE FROM student1 WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Record Deleted")</script>';
    } else {
        echo '<script>alert("Delete failed: ' . mysqli_error($conn) . '")</script>';
    }
}

$result = mysqli_query($conn, "SELECT * FROM student1");
?>

<html>
<head>
    <title>Simple PHP CRUD</title>
</head>
<body>
    <h2>PHP CRUD Operations (Insert, Update, Delete, View)</h2>
    <form method="post">
        ID (for update/delete): <input type="number" name="id"><br><br>
        Name: <input type="text" name="name"><br><br>
        Email: <input type="email" name="email"><br><br>

        <input type="submit" name="insert" value="Insert">
        <input type="submit" name="update" value="Update">
        <input type="submit" name="delete" value="Delete">
    </form>

    <h3>Student Records</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No records found</td></tr>";
        }
        mysqli_close($conn);
        ?>
    </table>
</body>
</html>
