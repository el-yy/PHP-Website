<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lexend+Zetta:wght@400;700&display=swap');

        body {
            margin: 0;
            font-family: 'Lexend Zetta', sans-serif;
        }

        header {
            position: relative;
            width: 100%;
            height: 100vh; 
            overflow: hidden;
        }

        .video-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1; 
        }

        video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .header-content {
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -20%); /* Adjusted vertical position */
            text-align: center;
            z-index: 2; 
            color: #fff;
        }

        h5 {
            font-size: 40.78px;
            font-weight: 600; /* Semi-bold */
            margin-bottom: 0;
            letter-spacing: 4px; /* Increased letter spacing to elongate the text more */
        }

        h1 {
            font-size: 76.05px;
            font-weight: bold;
            margin-bottom: 0;
            letter-spacing: 6px; /* Increased letter spacing to elongate the text more */
        }

        .discover-button {
            text-decoration: none;
            color: inherit; 
            cursor: pointer;
        }

        .discover-button h6 {
            pointer-events: none; 
        }

        .discover-button span {
            font-size: 18px; /* Decreased font size to make the text smaller */
            font-weight: 100; /* Thin */
            letter-spacing: 6px; /* Increased letter spacing to elongate the text more */
        }

        .discover-button:hover {
            background-color: #fff;
            color: #c8102e;
        }
    </style>
</head>
<body>
    <header>
        <div class="video-container">
            <video autoplay muted loop>
                <source src="https://videos.pexels.com/video-files/5309380/5309380-hd_1920_1080_25fps.mp4" type="video/mp4"> 
            </video>
        </div>

        <div class="header-content">

            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            <h4>Sports Cars</h4></br>
            <h2>START YOUR ENGINE</h2></br>
            <a href="https://www.ferrari.com/en-PH" class="discover-button">
                <span>DISCOVER  &rarr;</span>
            </a>
        </div>
    </header>
    <script>
        const discoverButton = document.querySelector('.discover-button');

        discoverButton.addEventListener('click', () => {
            window.location.href = 'https://www.ferrari.com/en-EN/formula1';
        });
    </script>
</body>
</html>