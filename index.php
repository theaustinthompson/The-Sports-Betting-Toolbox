<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Betting Toolbox</title>
    <meta name="description" content="Your go-to source for sports betting news, updates, and blogs.">
    <meta name="keywords" content="sports betting, news, blogs, football, basketball, baseball, hockey">
    <meta name="author" content="Austin Thompson">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Sports Betting Toolbox">
    <meta property="og:description" content="Your go-to source for sports betting news, updates, and blogs.">
    <meta property="og:image" content="images/hero-image.jpg">
    <meta property="og:url" content="https://www.sportsbettingtoolbox.com">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sports Betting Toolbox">
    <meta name="twitter:description" content="Your go-to source for sports betting news, updates, and blogs.">
    <meta name="twitter:image" content="images/hero-image.jpg">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "Sports Betting Toolbox",
      "url": "https://www.sportsbettingtoolbox.com",
      "description": "Sports Betting Toolbox is your go-to source for sports betting news, updates, and blogs.",
      "publisher": {
        "@type": "Organization",
        "name": "Sports Betting Toolbox",
        "logo": {
          "@type": "ImageObject",
          "url": "images/logo.png",
          "width": 200,
          "height": 60
        }
      },
      "image": "images/hero-image.jpg",
      "sameAs": [
        "https://www.facebook.com/BettingToolbox",
        "https://www.twitter.com/BettingToolbox",
        "https://www.instagram.com/BettingToolbox"
      ],
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://www.sportsbettingtoolbox.com/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      },
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://www.sportsbettingtoolbox.com"
      },
      "author": {
        "@type": "Person",
        "name": "Austin Thompson",
        "url": "https://www.twitter.com/NotReallyAustin"
      },
      "about": {
        "@type": "Thing",
        "name": "Sports Betting",
        "url": "https://www.sportsbettingtoolbox.com"
      },
      "inLanguage": "en-US",
      "datePublished": "2024-06-09",
      "dateModified": "2024-06-09"
    }
    </script>

    <link rel="stylesheet" href="style.css">

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var videos = [
                'video/video1.mp4',
                'video/video2.mp4',
                'video/video3.mp4',
                'video/video4.mp4'
            ];
            var randomVideo = videos[Math.floor(Math.random() * videos.length)];
            document.getElementById('hero-video-source').src = randomVideo;
            document.getElementById('hero-video').load();
        });
    </script>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="header-container">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
            </div>
            <div class="social-media">
                <a href="https://www.facebook.com/BettingToolbox" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.twitter.com/BettingToolbox" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/BettingToolbox" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <!-- Navigation Menu -->
        <nav>
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Football</a></li>
                <li><a href="#">Basketball</a></li>
                <li><a href="#">Baseball</a></li>
                <li><a href="#">Hockey</a></li>
                <li><a href="#">More Sports</a>
                    <ul class="dropdown">
                        <li><a href="#">Tennis</a></li>
                        <li><a href="#">Golf</a></li>
                        <li><a href="#">Soccer</a></li>
                        <li><a href="#">Rugby</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <video autoplay muted loop id="hero-video">
            <source id="hero-video-source" src="video/video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </section>

    <!-- Divider Line -->
    <hr class="divider-line">

    <!-- Blog Content Section -->
    <section class="blog-content">
        <div class="blog-header">
            <h2>Latest Blog Posts</h2>
        </div>
        <div class="blog-posts">
            <?php
            $blogDir = 'blog/';
            $blogFiles = array_diff(scandir($blogDir), array('.', '..'));

            foreach ($blogFiles as $blogFile) {
                $filePath = $blogDir . $blogFile;
                if (is_file($filePath)) {
                    $fileName = pathinfo($filePath, PATHINFO_FILENAME);
                    $fileContent = file_get_contents($filePath);

                    preg_match('/<title>(.*?)<\/title>/', $fileContent, $titleMatches);
                    preg_match('/<meta name="subject" content="(.*?)">/', $fileContent, $subjectMatches);
                    preg_match('/<meta name="hero-image" content="(.*?)">/', $fileContent, $heroMatches);

                    $title = $titleMatches[1] ?? $fileName;
                    $subject = $subjectMatches[1] ?? 'General';
                    $heroImage = $heroMatches[1] ?? 'images/hero-image.jpg';
                    
                    echo '<article class="blog-post">';
                    echo '<img src="' . $heroImage . '" alt="' . $title . '">';
                    echo '<h3><a href="' . $filePath . '">' . $title . '</a></h3>';
                    echo '<p>Category: ' . $subject . '</p>';
                    echo '</article>';
                }
            }
            ?>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Sports Betting Toolbox. All Rights Reserved.</p>
    </footer>
</body>
</html>
