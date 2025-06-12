<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumia - Tech Solutions for Web & Mobile</title>
    <meta name="description" content="Lumia creates cutting-edge web and mobile applications with innovative technology solutions">
    
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
<!--Servuces section-->
<?php include './includes/service.php';?>
<!--Project section-->
<?php include './includes/project.php';?>
<!--Testimonial section-->
<?php include './includes/testimonial.php';?>
<!--Tecnologies section-->
<?php include './includes/technology.php';?>

</body>
</html>