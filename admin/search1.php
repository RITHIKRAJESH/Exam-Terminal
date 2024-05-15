<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
</head>
<body>

    <h1>Search Page</h1>

    <form action="#" method="GET">
        <label for="search">Search:</label>
        <input type="text" id="search" name="query" placeholder="Enter your search term">
        <button type="submit">Search</button>
    </form>

</body>
</html>
<?php
// Assuming you have a sample array of data to search through
$data = array(
    "apple",
    "banana",
    "orange",
    "grape",
    "kiwi",
    // Add more data as needed
);

// Get the search query from the form
$searchQuery = isset($_GET['query']) ? $_GET['query'] : '';

// Perform the search
$results = array_filter($data, function($item) use ($searchQuery) {
    return stripos($item, $searchQuery) !== false;
});

// Display the results
echo "<h2>Search Results:</h2>";
if (empty($results)) {
    echo "No results found.";
} else {
    echo "<ul>";
    foreach ($results as $result) {
        echo "<li>$result</li>";
    }
    echo "</ul>";
}
?>
