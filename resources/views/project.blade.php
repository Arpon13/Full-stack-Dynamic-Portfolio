@extends('index')
@section('main_content')

<div class="main-section">
    <style>
        .main-section{
            padding:60px 0 40px 0;
            background:linear-gradient(120deg,#e0f7fa 0%,#fafbfc 100%);
            min-height:80vh;

        }
        .projects-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 36px;
            display: flex;
            align-items: center;
            gap: 12px;
            justify-content: center;
        }
        .projects-title i {
            color: #19b3a6;
            font-size: 2rem;
        }
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 28px;
            max-width: 1100px;
            margin: 0 auto;
        }
        .project-card {
            background: #fff;
            border-radius: 9px;
            box-shadow: 0 2px 8px rgba(25,179,166,0.06);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 0 18px 0;
            transition: box-shadow 0.2s, transform 0.2s;
            overflow: hidden;
            min-height: 320px;
            max-width: 320px;
            margin: 0 auto;
        }
        .project-card:hover {
            box-shadow: 0 8px 24px rgba(25,179,166,0.13);
            transform: translateY(-4px) scale(1.025);
        }
        .project-img {
            width: 100%;
            height: 120px;
            object-fit: cover;
            background: #e0f7fa;
        }
        .project-content {
            padding: 16px 16px 0 16px;
            width: 100%;
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .project-name {
            font-size: 1.08rem;
            font-weight: 700;
            color: #19b3a6;
            margin-bottom: 6px;
            text-align: center;
        }
        .project-desc {
            font-size: 0.97rem;
            color: #444;
            margin-bottom: 10px;
            text-align: center;
        }
        .project-tools {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 12px;
            justify-content: center;
        }
        .project-tool {
            background: #e0f7fa;
            color: #19b3a6;
            border-radius: 6px;
            padding: 3px 10px;
            font-size: 0.92rem;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        .see-project-btn {
            background: #19b3a6;
            color: #fff;
            border: none;
            border-radius: 18px;
            padding: 7px 20px;
            font-size: 0.98rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            margin-top: auto;
        }
        .see-project-btn:hover {
        }
        @media (max-width: 900px) {
            .projects-grid {
                grid-template-columns: 1fr;
            }
            .main-section {
                padding: 24px 0;
            }
            .project-card {
                max-width: 100%;
            }
        }
    </style>
    <div class="projects-title">
        <i class="fas fa-layer-group"></i> My Projects
    </div>
    <div class="projects-grid">
        
        <div class="project-card">
            <img class="project-img" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=80" alt="Bank Management System">
            <div class="project-content">
                <div class="project-name">Bank Management System</div>
                <div class="project-desc">A console-based system to manage bank accounts, transactions, and user authentication efficiently.</div>
                <div class="project-tools">
                    <span class="project-tool">C</span>
                    <span class="project-tool">C++</span>
                    <span class="project-tool">Console</span>
                </div>
                <a href="#" class="see-project-btn">See Project</a>
            </div>
        </div>
    
        <div class="project-card">
            <img class="project-img" src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=600&q=80" alt="EduGourdian">
            <div class="project-content">
                <div class="project-name">EduGourdian</div>
                <div class="project-desc">A modern education platform UI/UX prototype for students and teachers to connect and collaborate.</div>
                <div class="project-tools">
                    <span class="project-tool">Figma</span>
                    <span class="project-tool">Canva</span>
                </div>
                <a href="#" class="see-project-btn">See Project</a>
            </div>
        </div>
    
        <div class="project-card">
            <img class="project-img" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" alt="On The GO">
            <div class="project-content">
                <div class="project-name">On The GO</div>
                <div class="project-desc">A social traffic and road update platform for real-time updates and safe travel planning.</div>
                <div class="project-tools">
                    <span class="project-tool">Flutter</span>
                    <span class="project-tool">Firebase</span>
                </div>
                <a href="#" class="see-project-btn">See Project</a>
            </div>
        </div>

        <div class="project-card">
            <img class="project-img" src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=600&q=80" alt="Medical Center Management System">
            <div class="project-content">
                <div class="project-name">Medical Center Management System</div>
                <div class="project-desc">A desktop app for managing patient records, appointments, and billing in medical centers.</div>
                <div class="project-tools">
                    <span class="project-tool">Python</span>
                    <span class="project-tool">OOP</span>
                    <span class="project-tool">File Database</span>
                </div>
                <a href="#" class="see-project-btn">See Project</a>
            </div>
        </div>
    
        <div class="project-card">
            <img class="project-img" src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80" alt="Restaurant Management System">
            <div class="project-content">
                <div class="project-name">Restaurant Management System</div>
                <div class="project-desc">A UI/UX design for restaurant order, menu, and billing management with a modern look.</div>
                <div class="project-tools">
                    <span class="project-tool">Figma</span>
                    <span class="project-tool">Canva</span>
                </div>
                <a href="#" class="see-project-btn">See Project</a>
            </div>
        </div>
    
        <div class="project-card">
            <img class="project-img" src="https://img.freepik.com/premium-vector/portfolio-word-with-pencil-instead-letter-i-art-design-gallery-concept-vector-conceptual-creative-logo-poster-made-with-special-font_570429-20468.jpg" alt="Student Portfolio">
            <div class="project-content">
                <div class="project-name">Student Portfolio</div>
                <div class="project-desc">A personal portfolio website for students to showcase their skills, projects, and achievements.</div>
                <div class="project-tools">
                    <span class="project-tool">HTML</span>
                    <span class="project-tool">CSS</span>
                    <span class="project-tool">JS</span>
                </div>
                <a href="#" class="see-project-btn">See Project</a>
            </div>
        </div>
    
        <div class="project-card">
            <img class="project-img" src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80" alt="Student Dropout Prediction">
            <div class="project-content">
                <div class="project-name">Student Dropout Prediction</div>
                <div class="project-desc">A machine learning project to predict student dropout using Scikit Learn and Gradio interface.</div>
                <div class="project-tools">
                    <span class="project-tool">Python</span>
                    <span class="project-tool">ML</span>
                    <span class="project-tool">Scikit Learn</span>
                    <span class="project-tool">Gradio</span>
                </div>
                <a href="#" class="see-project-btn">See Project</a>
            </div>
        </div>
    </div>
</body>

    

@endsection

