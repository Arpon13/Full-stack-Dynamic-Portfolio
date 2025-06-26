<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Home</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
<div class="navbar" 
     style="display:flex;
            align-items:center;
            justify-content:space-between;
            padding:24px 60px 24px 60px;
            background:#fff;
            box-shadow:0 2px 8px rgba(0,0,0,0.03);">

        <div class="logo" style="font-weight:bold;font-size:1.5rem;display:flex;align-items:center;gap:8px;">
            <span style="display:inline-flex;align-items:center;justify-content:center;width:36px;height:36px;background:#19b3a6;color:#fff;border-radius:50%;font-size:1.3rem;font-weight:700;">A</span>
            <span style="color:#19b3a6;">Arpon</span>
        </div>
        <nav>
            <a href="/" {{ Request::is('/') ? 'class=active' : '' }} style="text-decoration:none;color:#222;margin:0 18px;font-weight:500;position:relative;padding-bottom:4px;transition:color 0.2s;">Home</a>
            <a href="/about" {{ Request::is('about') ? 'class=active' : '' }} style="text-decoration:none;color:#222;margin:0 18px;font-weight:500;position:relative;padding-bottom:4px;transition:color 0.2s;">About</a>
            <a href="/skills" {{ Request::is('skills') ? 'class=active' : '' }} style="text-decoration:none;color:#222;margin:0 18px;font-weight:500;position:relative;padding-bottom:4px;transition:color 0.2s;">Skills</a>
            <a href="/education" {{ Request::is('education') ? 'class=active' : '' }} style="text-decoration:none;color:#222;margin:0 18px;font-weight:500;position:relative;padding-bottom:4px;transition:color 0.2s;">Education</a>
            <a href="/project" {{ Request::is('project') ? 'class=active' : '' }} style="text-decoration:none;color:#222;margin:0 18px;font-weight:500;position:relative;padding-bottom:4px;transition:color 0.2s;">Project</a>
            <a href="/experience" {{ Request::is('experience') ? 'class=active' : '' }} style="text-decoration:none;color:#222;margin:0 18px;font-weight:500;position:relative;padding-bottom:4px;transition:color 0.2s;">Experience</a>
            
        </nav>
    </div>
    <style>
         body {
            margin: 0;
            font-family: 'Montserrat', Arial, sans-serif;
            background: #fafbfc;
        }
        .navbar nav a.active,
        .navbar nav a:hover {
            color: #19b3a6 !important;
        }
        .navbar nav a.active::after {
            content: '';
            display: block;
            width: 100%;
            height: 2px;
            background: #19b3a6;
            border-radius: 1px;
            position: absolute;
            left: 0;
            bottom: 0;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

@yield('main_content')


