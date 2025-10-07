<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamdard Foundation Bangladesh</title>
    <meta name="description" content="Hamdard Insights is a centralized digital platform showcasing all educational institutions under Hamdard Bangladesh, including departments, courses, students, faculty, staff, and a media gallery.">
    <meta name="keywords" content="Hamdard Bangladesh, Hamdard Education, Hamdard Insights, Educational Management, Academic Portal, Departments, Courses, Students, Teachers, Staff, Institutional Data">
    <meta name="author" content="Hamdard Bangladesh">
    <meta property="og:title" content="Hamdard Insights – Educational Information System">
    <meta property="og:description" content="Explore all of Hamdard Bangladesh's educational institutions in one place – from departments and courses to student and faculty details.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://hamdardinsight.com/">
    <meta property="og:image" content="">
    <meta name="robots" content="index, follow">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('admin/favicon/fav.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                primary: '#2e7d32',
                secondary: '#388e3c',
                light: '#e8f5e9',
                dark: '#1b5e20',
              }
            }
          }
        }
    </script>
    <style>
        .masonry-grid {
        column-count: 3;
        column-gap: 1rem;
        }
        .masonry-item {
        break-inside: avoid;
        margin-bottom: 1rem;
        transition: all 0.3s ease;
        }
        .masonry-item:hover {
        transform: scale(1.02);
        }
        @media (max-width: 768px) {
        .masonry-grid {
        column-count: 2;
        }
        }
        @media (max-width: 480px) {
        .masonry-grid {
        column-count: 1;
        }
        }
        .leader-card {
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .leader-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        .floating-cap {
        animation: float 3s ease-in-out infinite;
        }
        .floating-diploma {
        animation: float 4s ease-in-out infinite 1s;
        }
        @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
        }
        .confetti {
        position: absolute;
        width: 10px;
        height: 10px;
        opacity: 0;
        }
        .foundation-card {
        perspective: 1000px;
        }
        .foundation-inner {
        transition: transform 0.8s;
        transform-style: preserve-3d;
        position: relative;
        }
        .foundation-card:hover .foundation-inner {
        transform: rotateY(180deg);
        }
        .foundation-front, .foundation-back {
        backface-visibility: hidden;
        position: absolute;
        width: 100%;
        height: 100%;
        }
        .foundation-back {
        transform: rotateY(180deg);
        }
        .wave-shape {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
        transform: rotate(180deg);
        }
        .wave-shape svg {
        position: relative;
        display: block;
        width: calc(100% + 1.3px);
        height: 150px;
        }
        .wave-shape .shape-fill {
        fill: #e8f5e9;
        }
        .parallax-bg {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }
        
        /* Navigation Styles */
        .nav-container {
            position: relative;
        }
        .nav-menu {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .nav-item {
            position: relative;
        }
        .nav-link {
            color: white;
            font-weight: 400;
            padding: 2px ;
            border-radius: 0.375rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 14px;
        }
        .nav-link:hover {
            /* background-color: rgba(255, 255, 255, 0.1); */
        }
        .nav-link.active {
            /* background-color: rgba(255, 255, 255, 0.2); */
        }
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            min-width: 220px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            border-radius: 0.5rem;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            z-index: 50;
            font-size:12px;

        }
        .dropdown-menu.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .dropdown-item {
            color: #1f2937;
            padding: 0.75rem 1rem;
            display: block;
            transition: all 0.2s ease;
            border-bottom: 1px solid #f3f4f6;
        }
        .dropdown-item:last-child {
            border-bottom: none;
        }
        .dropdown-item:hover {
            background-color: #f9fafb;
            color: #2e7d32;
        }
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        @media (max-width: 1024px) {
            .mobile-menu-btn {
                display: block;
            }
            .nav-menu {
                position: fixed;
                top: 0;
                right: -100%;
                height: 100vh;
                width: 80%;
                max-width: 300px;
                background-color: #2e7d32;
                flex-direction: column;
                align-items: flex-start;
                padding: 2rem;
                transition: right 0.3s ease;
                z-index: 100;
                overflow-y: auto;
            }
            .nav-menu.active {
                right: 0;
            }
            .nav-item {
                width: 100%;
            }
            .nav-link {
                padding: 1rem 0;
                width: 100%;
                justify-content: flex-start;
            }
            .dropdown-menu {
                position: static;
                opacity: 1;
                visibility: visible;
                transform: none;
                box-shadow: none;
                background-color: rgba(255, 255, 255, 0.1);
                margin-top: 0.5rem;
                margin-left: 1rem;
                width: calc(100% - 2rem);
            }
            .dropdown-item {
                color: white;
                border-bottom-color: rgba(255, 255, 255, 0.1);
            }
            .dropdown-item:hover {
                background-color: rgba(255, 255, 255, 0.1);
                color: white;
            }
            .overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 99;
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
            }
            .overlay.active {
                opacity: 1;
                visibility: visible;
            }
        }
    </style>
</head>