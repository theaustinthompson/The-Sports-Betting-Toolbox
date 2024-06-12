<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Betting Toolbox | Built for #TheCrew</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Austin Thompson">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Home Page">
    <meta property="og:description" content="Your go-to source for sports news, updates, and blogs.">
    <meta property="og:image" content="path_to_your_image.jpg">
    <meta property="og:url" content="https://www.sportsbettingtoolbox.com/">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Home Page">
    <meta name="twitter:description" content="Your go-to source for sports news, updates, and blogs.">
    <meta name="twitter:image" content="path_to_your_image.jpg">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "Sport Com",
      "url": "https://www.sportsbettingtoolbox.com/",
      "description": "Sport Com is your go-to source for sports news, updates, and blogs.",
      "publisher": {
        "@type": "Organization",
        "name": "Sport Com",
        "logo": {
          "@type": "ImageObject",
          "url": "https://www.sportsbettingtoolbox.com//logo.png",
          "width": 200,
          "height": 60
        }
      },
      "image": "https://www.sportsbettingtoolbox.com//hero-image.jpg",
      "sameAs": [
        "https://www.facebook.com/sportcom",
        "https://www.twitter.com/sportcom",
        "https://www.instagram.com/sportcom"
      ],
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://www.sportsbettingtoolbox.com//search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      },
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://www.sportsbettingtoolbox.com/"
      },
      "author": {
        "@type": "Person",
        "name": "Your Name",
        "url": "http://www.yourwebsite.com"
      },
      "about": {
        "@type": "Thing",
        "name": "Sports",
        "url": "https://www.sportsbettingtoolbox.com/"
      },
      "inLanguage": "en-US",
      "datePublished": "2024-06-09",
      "dateModified": "2024-06-09"
    }
    </script>

    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="header-container">
            <div class="logo">
                <a href="index.php"><img src="logo.png" alt="Logo"></a>
            </div>
            <div class="social-media">
                <a href="https://facebook.com/bettingtoolbox" target="_blank">Facebook</a>
                <a href="https://twitter.com/bettingtoolbox" target="_blank">Twitter</a>
                <a href="https://instagram.com/bettingtoolbox" target="_blank">Instagram</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <video autoplay muted loop id="hero-video">
            <source src="/video/video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </section>

    <!-- Navigation Menu -->
    <nav>
        <ul class="menu">
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

    <!-- Blog Content Section -->
    <section class="blog-content">
        <div class="blog-header">
            <h2>Latest Blog Posts</h2>
        </div>
        <div class="blog-posts">
            <!-- Future blog posts will go here -->
            <article class="blog-post">
                <h3>Blog Post Title</h3>
                <p>Excerpt of the blog post...</p>
                <a href="#">Read More</a>
            </article>
            <!-- Repeat above block for more blog posts -->
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Thompson Industries. All Rights Reserved.</p>
    </footer>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
        }
        .logo img {
            height: 50px;
        }
        .social-media a {
            margin-left: 20px;
            color: #fff;
            text-decoration: none;
        }
        .hero {
            position: relative;
            height: 60vh;
            overflow: hidden;
        }
        #hero-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .menu {
            list-style-type: none;
            padding: 0;
            margin: 0;
            background-color: #444;
        }
        .menu li {
            display: inline;
            position: relative;
        }
        .menu a {
            display: inline-block;
            padding: 15px 20px;
            color: #fff;
            text-decoration: none;
        }
        .menu .dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #555;
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .menu li:hover .dropdown {
            display: block;
        }
        .dropdown li {
            display: block;
        }
        .blog-content {
            padding: 20px;
        }
        .blog-header h2 {
            margin: 0 0 20px 0;
        }
        .blog-post {
            margin-bottom: 20px;
        }
        .blog-post h3 {
            margin: 0 0 10px 0;
        }
        .blog-post p {
            margin: 0 0 10px 0;
        }
        footer {
            padding: 10px;
            text-align: center;
            background-color: #333;
            color: #fff;
        }
    </style>
</body>
</html>
