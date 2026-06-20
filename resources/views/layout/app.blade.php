<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ritesh Tax & Legal Consultant | Tax & Legal Expertise You Can Trust')</title>
    <meta name="description" content="@yield('description', 'Accurate, timely and professional Tax & Legal solutions — ITR Filing, GST Registration, TDS Compliance, Accounting and Business Registration.')">
 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-rtc-navy antialiased">
 
    @include('partials.header')
 
    <main>
        @yield('content')
    </main>
 
    @include('partials.footer')
 
</body>
</html>
