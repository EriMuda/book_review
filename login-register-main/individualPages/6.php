<br />
<b>Notice</b>:  session_start(): Ignoring session_start() because a session is already active in <b>C:\xampp\htdocs\login-register-main\individualPages\bookTemplate.php</b> on line <b>3</b><br />
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pride and Prejudice</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            font-size: 2em;
            color: #333333;
            margin-bottom: 20px;
        }

        .book-details {
            text-align: left;  /* Align to the left for details */
            margin-bottom: 20px;
        }

        .cover-photo img {
            max-width: 50%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transition for smoother hover effect */
        }

        .cover-photo img:hover {
            transform: scale(1.05);  /* Enlarge on hover */
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
        }

        .button {
            display: inline-block;
            padding: 10px 30px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3; /* Darken on hover */
        }
    </style>
    <script>
        function toggleBookDetails() {
            const coverPhoto = document.querySelector('.cover-photo img');
            coverPhoto.classList.toggle('enlarged');
        }
    </script>
</head>
<body>

    <div class="container">
        <h1>Pride and Prejudice</h1> <!-- Use htmlspecialchars for safety -->
        <div class="book-details">
            <p><strong>Author:</strong> 432</p>
            <p><strong>Number of Pages:</strong> 0</p>
            
            
</form>
        </div>
        
        <div class="cover-photo" onclick="toggleBookDetails()">
            <img src="data:image/jpeg;base64,SmFuZSBBdXN0ZW4=" alt="Cover Photo">
        </div>
        
        <a href="index.php" class="button">Back to Book List</a>
    </div>
</body>
</html>
