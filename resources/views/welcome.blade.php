<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Home</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Montserrat', Arial, sans-serif;
            background: #fafbfc;
        }
        .main-section {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 80vh;
            padding: 40px 0;
            background: linear-gradient(120deg, #e0f7fa 0%, #fafbfc 100%);
            
        }
        .main-img {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .main-img .img-bg {
            background: #19b3a6;
            border-radius: 50%;
            width: 320px;
            height: 320px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 32px rgba(0,0,0,0.07);
        }
        .main-img img {
            width: 220px;
            height: 280px;
            object-fit: contain;
            border-radius: 0 0 80px 80px;
        }
        .main-content {
            flex: 1.2;
            padding-left: 60px;
        }
        .main-content h2 {
            font-size: 2.5rem;
            margin: 0 0 10px 0;
            font-weight: 700;
            color: #222;
        }
        .main-content h1 {
            font-size: 3.2rem;
            margin: 0 0 10px 0;
            font-weight: 700;
            color: #222;
        }
        .main-content h1 span {
            color: #19b3a6;
        }
        .main-content h3 {
            font-size: 1.4rem;
            font-weight: 500;
            margin: 0 0 24px 0;
            color: #7a1f1f;
        }
        .main-content .about-btn {
            display: inline-block;
            background: #19b3a6;
            color: #fff;
            padding: 14px 36px;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            margin-bottom: 24px;
            box-shadow: 0 2px 12px rgba(25,179,166,0.12);
            transition: background 0.2s;
        }
        .main-content .about-btn:hover {
            background: #117a6b;
        }
        .main-content .socials {
            margin-top: 18px;
            display: flex;
            gap: 18px;
        }
        .main-content .socials a {
            color: #222;
            font-size: 1.5rem;
            background: #fff;
            border-radius: 50%;
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            transition: background 0.2s, color 0.2s;
        }
        .main-content .socials a:hover {
            background: #19b3a6;
            color: #fff;
        }
        @media (max-width: 900px) {
            .main-section {
                flex-direction: column;
                padding: 30px 0;
            }
            .main-img, .main-content {
                padding: 0;
                width: 100%;
                justify-content: center;
            }
            .main-content {
                padding-left: 0;
                margin-top: 30px;
                text-align: center;
            }
            .main-content .socials {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    
    <div class="navbar" style="display:flex;align-items:center;justify-content:space-between;padding:24px 60px 24px 60px;background:#fff;box-shadow:0 2px 8px rgba(0,0,0,0.03);">
        <div class="logo" style="font-weight:bold;font-size:1.5rem;display:flex;align-items:center;gap:8px;">
            <span style="display:inline-flex;align-items:center;justify-content:center;width:36px;height:36px;background:#19b3a6;color:#fff;border-radius:50%;font-size:1.3rem;font-weight:700;">A</span>
            <span style="color:#19b3a6;">Arpon</span>
        </div>
        <nav>
            <a href="/" class="active" 
                        style="text-decoration:none;
                        color:#222;
                        margin:0 18px;
                        font-weight:500;
                        position:relative;
                        padding-bottom:4px;
                        transition:color 0.2s;">
                        Home</a>
            <a href="/about" 
                    style="text-decoration:none;
                           color:#222;
                           margin:0 18px;
                           font-weight:500;
                           position:relative;
                           padding-bottom:4px;
                           transition:color 0.2s;"
                           >About</a>
            <a href="/skills" 
                    style="text-decoration:none;
                    color:#222;margin:0 18px;
                    font-weight:500;position:relative;
                    padding-bottom:4px;
                    transition:color 0.2s;">
                    Skills</a>
            <a href="/education" 
              style="text-decoration:none;
                     color:#222;margin:0 18px;
                     font-weight:500;
                     position:relative;
                     padding-bottom:4px;
                     transition:color 0.2s;">
                     Education</a>
            <a href="/project" 
               style="text-decoration:none;
                      color:#222;margin:0 18px;
                      font-weight:500;
                      position:relative;
                      padding-bottom:4px;
                      transition:color 0.2s;">
                      Project</a>
            <a href="/experience" 
               style="text-decoration:none;
                      color:#222;
                      margin:0 18px;
                      font-weight:500;
                      position:relative;
                      padding-bottom:4px;
                      transition:color 0.2s;">
                      Experience</a>
            
        </nav>
    </div>
    <style>
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
    <div class="main-section">
        <div class="main-img">
            <div class="img-bg">
                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="Profile Image">
            </div>
        </div>
        <div class="main-content">
            <h2>Hello There,</h2>
            <h1>I'm <span>Arpon</span></h1>
            <h3>I Am a Developer<span style="color:#7a1f1f;"> & Coder</span></h3>
            <a href="\about" class="about-btn">About Me <i class="fa-solid fa-arrow-right"></i></a>
            <div class="socials">
                <a href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://github.com/"><i class="fab fa-github"></i></a>
                <a href="https://web.facebook.com/?_rdc=1&_rdr#"><i class="fab fa-facebook"></i></a>
                <a href="https://telegram.org/"><i class="fab fa-telegram-plane"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                <a href="https://dev.to/"><i class="fab fa-dev"></i></a>
            </div>
        </div>
    </div>
</body>
</html>