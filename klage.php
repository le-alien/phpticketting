<?php
include "connection.php";

include "header.php";



?>


<HTml>



    <head>
        <title>klage</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h2>klage</h2>
            <form method="post" action="klagelager.php">
                <div class="form-group">
                    <label for="klage">klage</label>
                    <select id="kategori" name="kategori" required>
                        <option value="">Select a category</option>
                        <option value="category1">produktfeil</option>
                        <option value="category2">server feil</option>
                        <option value="category3">leveringsfeil</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <input type="text" id="klage" name="klage" maxchar="450" required>
                <!-- Rest of the form -->
                <button>send</button>
            </form>
</HTml>




