@extends('index')
@section('main_content')

<style>
    .main-section {
        padding: 60px 0 40px 0;
        background: linear-gradient(120deg, #e0f7fa 0%, #fafbfc 100%);
        min-height: 80vh;
        display: flex;
        align-items: flex-start;
        justify-content: center;
    }

    .about-container {
        max-width: 600px;
        margin: 48px auto;
        padding: 32px 24px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 12px #e0f7fa;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .about-title {
        text-align: center;
        font-size: 2rem;
        color: #19b3a6;
        margin-bottom: 18px;
        font-weight: bold;
    }

    .about-text {
        font-size: 1.08rem;
        color: #333;
        line-height: 1.7;
        text-align: center;
        margin-bottom: 28px;
    }

    .contact-info {
        margin-top: 18px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        font-size: 1.05rem;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #222;
        justify-content: center;
    }

    .contact-item i {
        color: #19b3a6;
        font-size: 1.2rem;
        min-width: 22px;
        text-align: center;
    }

    .about-container:hover {
        box-shadow: 0 8px 32px rgba(25, 179, 166, 0.18);
        transform: scale(1.03);
    }

</style>



<div class="main-section">
    <div class="about-container">
        <div class="about-title">About Me</div>
        <div class="about-text">
            Hello! I'm a passionate web developer and designer with a love for building clean, user-friendly, and dynamic web applications.<br><br>
            I enjoy learning new technologies and solving real-world problems through code. My journey started with C and C++, and now I work with JavaScript, Python, and modern web frameworks.<br><br>
            When I'm not coding, I like to explore UI/UX design, contribute to open-source projects, and help others learn programming.<br><br>
            Let's connect and create something amazing together!
        </div>
        <div class="contact-info">
            <div class="contact-item">
                <i class="fas fa-phone-alt"></i>
                <span>+01811111111</span>
            </div>
            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <span>arpon@gmail.com</span>
            </div>
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <span>123 Main Street, Dhaka, bangladesh</span>
            </div>
        </div>
    </div>
</div>

@endsection

