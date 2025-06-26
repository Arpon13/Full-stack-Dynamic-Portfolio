@extends('index')
@section('main_content')



<style>

 .main-section {
            padding: 40px 0;
            background: linear-gradient(120deg, #e0f7fa 0%, #fafbfc 100%);
            min-height: 80vh;

        }
        .skills-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .skills-title i {
            color: #19b3a6;
        }
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 28px;
            max-width: 1100px;
            margin: 0 auto;
        }
        .skill-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.04);
            padding: 28px 24px 20px 24px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            cursor: pointer;
            transition: box-shadow 0.2s, transform 0.2s;
            min-height: 150px;
            max-width: 100%;
            position: relative;
            overflow: hidden;
        }
        .skill-card:hover {
            box-shadow: 0 6px 24px rgba(25,179,166,0.13);
            transform: translateY(-4px) scale(1.03);
        }
        .skill-card h3 {
            margin: 0 0 4px 0;
            font-size: 1.15rem;
            font-weight: 700;
            color: #222;
        }
        .skill-card .exp {
            font-size: 1rem;
            color: #444;
        }
        .skill-card .projects {
            font-size: 1rem;
            color: #b23b3b;
            margin-left: 8px;
        }
        .skill-level {
            display: flex;
            gap: 4px;
            margin-top: 8px;
        }
        .skill-dot {
            width: 18px;
            height: 18px;
            border-radius: 4px;
            display: inline-block;
        }
        .skill-dot.year {
            background: #d9534f;
        }
        .skill-dot.project {
            background: #19b3a6;
        }
        .skill-desc {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: max-height 0.35s cubic-bezier(.4,0,.2,1), opacity 0.25s;
            font-size: 1rem;
            color: #333;
            margin-top: 10px;
        }
        .skill-card.expanded .skill-desc {
            max-height: 80px;
            opacity: 1;
            margin-top: 10px;
        }
        .skill-card {
            min-height: 150px;
            height: 150px;
        }
        .skill-card.expanded {
            height: 250px;
            z-index: 2;
        }
        @media (max-width: 900px) {
            .skills-grid {
                grid-template-columns: 1fr;
            }
            .main-section {
                padding: 24px 0;
            }
        }
    </style>

<div class="main-section">
        <div style="max-width:1200px;margin:0 auto;">
            <div class="skills-title">
                <i class="fas fa-tools"></i> The Skills
            </div>
            <div class="skills-grid" id="skillsGrid">
                <div class="skill-card" onclick="expandSkill(this)">
                    <h3>C</h3>
                    <span class="exp">2 years,<span class="projects">3 projects</span></span>
                    <div class="skill-level">
                        <span class="skill-dot year"></span>
                        <span class="skill-dot year"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                    </div>
                    <div class="skill-desc">I am fluent in C and have used it for various algorithmic and system-level projects.</div>
                </div>
                <div class="skill-card" onclick="expandSkill(this)">
                    <h3>C++</h3>
                    <span class="exp">2 years,<span class="projects">4 projects</span></span>
                    <div class="skill-level">
                        <span class="skill-dot year"></span>
                        <span class="skill-dot year"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                    </div>
                    <div class="skill-desc">I am fluent in C++ and have built several OOP and competitive programming projects.</div>
                </div>
                <div class="skill-card" onclick="expandSkill(this)">
                    <h3>Python</h3>
                    <span class="exp">3 years,<span class="projects">6 projects</span></span>
                    <div class="skill-level">
                        <span class="skill-dot year"></span>
                        <span class="skill-dot year"></span>
                        <span class="skill-dot year"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                    </div>
                    <div class="skill-desc">I am fluent in Python and have experience in automation, data analysis, and web development.</div>
                </div>
                <div class="skill-card" onclick="expandSkill(this)">
                    <h3>Java</h3>
                    <span class="exp">2 years,<span class="projects">4 projects</span></span>
                    <div class="skill-level">
                        <span class="skill-dot year"></span>
                        <span class="skill-dot year"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                    </div>
                    <div class="skill-desc">I am fluent in Java and have built desktop and Android applications.</div>
                </div>
                <div class="skill-card" onclick="expandSkill(this)">
                    <h3>MySQL</h3>
                    <span class="exp">2 years,<span class="projects">4 projects</span></span>
                    <div class="skill-level">
                        <span class="skill-dot year"></span>
                        <span class="skill-dot year"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                    </div>
                    <div class="skill-desc">I am fluent in MySQL and have designed and managed relational databases.</div>
                </div>
                <div class="skill-card" onclick="expandSkill(this)">
                    <h3>Flutter</h3>
                    <span class="exp">2 years,<span class="projects">5 projects</span></span>
                    <div class="skill-level">
                        <span class="skill-dot year"></span>
                        <span class="skill-dot year"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                    </div>
                    <div class="skill-desc">I am fluent in Flutter and have developed cross-platform mobile applications.</div>
                </div>
                <div class="skill-card" onclick="expandSkill(this)">
                    <h3>HTML</h3>
                    <span class="exp">2 years,<span class="projects">4 projects</span></span>
                    <div class="skill-level">
                        <span class="skill-dot year"></span>
                        <span class="skill-dot year"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                    </div>
                    <div class="skill-desc">I am fluent in HTML and have built many responsive web pages.</div>
                </div>
                <div class="skill-card" onclick="expandSkill(this)">
                    <h3>CSS</h3>
                    <span class="exp">2 years,<span class="projects">4 projects</span></span>
                    <div class="skill-level">
                        <span class="skill-dot year"></span>
                        <span class="skill-dot year"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                    </div>
                    <div class="skill-desc">I am fluent in CSS and have styled modern, visually appealing websites.</div>
                </div>
                <div class="skill-card" onclick="expandSkill(this)">
                    <h3>JavaScript</h3>
                    <span class="exp">2 years,<span class="projects">4 projects</span></span>
                    <div class="skill-level">
                        <span class="skill-dot year"></span>
                        <span class="skill-dot year"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                        <span class="skill-dot project"></span>
                    </div>
                    <div class="skill-desc">I am fluent in JavaScript and have built interactive and dynamic web applications.</div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function expandSkill(card) {
            
            document.querySelectorAll('.skill-card.expanded').forEach(function(el) {
                if (el !== card) el.classList.remove('expanded');
            });
            
            card.classList.toggle('expanded');
        }
    </script>

@endsection

