<!DOCTYPE html>
<html>
<head>
    <title>Random Recipe Generator</title>
</head>
<body>
    <h1>Random Recipe Generator</h1>
    <?php
    // Database connection settings
    // Database connection settings
$servername = "localhost"; // Change this if your MySQL server is on a different host
$username = "root"; // Default MySQL username in XAMPP is "root"
$password = ""; // By default, there is no password in XAMPP
$dbname = "random_recipe_generator"; // Replace with the name of your database

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve user inputs
    $cuisine = $_POST["cuisine"];
    $course = $_POST["course"];
    $dietary_preference = $_POST["dietary_preference"];

    // Prepare SQL query based on user inputs
    $sql = "SELECT * FROM recipes WHERE cuisine='$cuisine' AND course='$course'";
    if ($dietary_preference !== "Any") {
        $sql .= " AND dietary_preference='$dietary_preference'";
    }

    // Execute the query and get a random recipe
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $recipes = $result->fetch_all(MYSQLI_ASSOC);
        $randomRecipe = $recipes[array_rand($recipes)];

        // Display the random recipe
        echo "<h2>Random Recipe:</h2>";
        echo "<p><strong>Name:</strong> " . $randomRecipe['name'] . "</p>";
        echo "<p><strong>Cuisine:</strong> " . $randomRecipe['cuisine'] . "</p>";
        echo "<p><strong>Course:</strong> " . $randomRecipe['course'] . "</p>";
        echo "<p><strong>Dietary Preference:</strong> " . $randomRecipe['dietary_preference'] . "</p>";
        echo "<p><strong>Instructions:</strong><br>" . nl2br($randomRecipe['instructions']) . "</p>";
    } else {
        echo "No recipes found for the selected criteria.";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
