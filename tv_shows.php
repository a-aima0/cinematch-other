


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TV Shows - CineMatch</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include_once('header.php'); ?>
    <!-- TV Shows Section -->
    <section class="movie-grid">
        <h2>Popular TV Shows</h2>
        <div class="grid" id="tv-show-list"></div>
    </section>

    <script src="script.js"></script>
    <script>
        async function fetchTVShows() {
            const res = await fetch(`${BASE_URL}/tv/popular?api_key=${API_KEY}`);
            const data = await res.json();
            displayMovies(data.results, "tv-show-list");
        }

        fetchTVShows();
    </script>

</body>
</html>
