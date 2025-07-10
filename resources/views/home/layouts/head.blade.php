<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rawshan Jahan Eastern Medical College & Hospital')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
     <link rel="icon" href="{{ asset('admin/favicon/fav.png') }}" type="image/png">
    
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
    
    @stack('styles')
</head>