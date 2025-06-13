<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <!-- Primary Meta Tags -->
    <title>Lumia | Web & Mobile App Development Company | [Your Location]</title>
    <meta name="description" content="Lumia is a leading web and mobile app development company specializing in PHP, JavaScript, and modern frameworks. We build scalable, secure digital solutions for businesses worldwide.">
    <meta name="keywords" content="web development, mobile app development, PHP developers, JavaScript experts, custom software solutions">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://lumia.dev">
    
    <!-- Favicon & App Icons -->
    <link rel="icon" href="/assets/logo.jpg" type="image/jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/logo.jpg">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/logo.jpg">
    
    <!-- Open Graph / Social Media Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://lumia.dev">
    <meta property="og:title" content="Lumia | Web & Mobile App Development Company">
    <meta property="og:description" content="We build cutting-edge web and mobile applications with innovative technology solutions">
    <meta property="og:image" content="/assets/banner.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Lumia">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@LumiaTech">
    <meta name="twitter:creator" content="@LumiaTech">
    <meta name="twitter:title" content="Lumia | Web & Mobile App Development Company">
    <meta name="twitter:description" content="We build cutting-edge web and mobile applications with innovative technology solutions">
    <meta name="twitter:image" content="/assets/banner.jpg">
    
    <!-- Structured Data / Schema Markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Lumia",
      "url": "https://lumia.dev",
      "logo": "https://lumia.dev/assets/logo.jpg",
      "sameAs": [
        "https://twitter.com/Lumia-tech",
        "https://linkedin.com/company/lumia-tech",
        "https://github.com/lumia-tech"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+2349064779856",
        "contactType": "customer service",
        "email": "contact@lumia.dev",
        "areaServed": "Global"
      }
    }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            light: '#6366f1',  // indigo-500
                            DEFAULT: '#4f46e5',  // indigo-600
                            dark: '#4338ca',  // indigo-700
                        },
                        secondary: {
                            light: '#8b5cf6',  // violet-500
                            DEFAULT: '#7c3aed',  // violet-600
                            dark: '#6d28d9',  // violet-700
                        },
                        dark: {
                            DEFAULT: '#1e1b4b',  // indigo-950
                            light: '#312e81',  // indigo-900
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Custom CSS (optional) -->
    <style>
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        /* Custom glow effect */
        .glow {
            text-shadow: 0 0 10px rgba(124, 58, 237, 0.7);
        }
    </style>
</head>
<body class="bg-dark-DEFAULT text-gray-100 min-h-screen">
<?php include './includes/nav.php';?>
<!--Hero section-->
<?php include './includes/hero.php';?>
<?php include './includes/client.php';?>
<!--Servuces section-->
<?php include './includes/service.php';?>
<!--Project section-->
<?php include './includes/project.php';?>
<!--Testimonial section-->
<?php include './includes/testimonial.php';?>
<!--Tecnologies section-->
<?php include './includes/technology.php';?>
<!--team section-->
<?php include './includes/team.php';?>
<?php include './includes/contact.php';?>
<?php include './includes/footer.php';?>
</body>
</html>