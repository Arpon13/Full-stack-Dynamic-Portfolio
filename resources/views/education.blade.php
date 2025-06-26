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
        .edu-container {
            background: transparent;
            border-radius: 18px;
            box-shadow: none;
            padding: 0;
            max-width: 1100px;
            width: 100%;
        }
        .edu-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 36px;
            display: flex;
            align-items: center;
            gap: 12px;
            justify-content: center;
            letter-spacing: 1px;
        }
        .edu-title i {
            color: #19b3a6;
            font-size: 2rem;
        }
        .edu-timeline {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: stretch;
            gap: 36px;
            width: 100%;
            margin: 0 auto;
        }
        .edu-step {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 32px rgba(25,179,166,0.09);
            padding: 36px 28px 28px 28px;
            min-width: 260px;
            max-width: 320px;
            flex: 1 1 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            transition: box-shadow 0.2s, transform 0.2s;
            z-index: 1;
        }
        .edu-step:hover {
            box-shadow: 0 8px 32px rgba(25,179,166,0.17);
            transform: translateY(-6px) scale(1.04);
        }
        .edu-step .edu-icon {
            background: #19b3a6;
            color: #fff;
            width: 54px;
            height: 54px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 18px;
            box-shadow: 0 2px 12px rgba(25,179,166,0.13);
        }
        .edu-step .edu-badge {
            background: #e0f7fa;
            color: #19b3a6;
            font-size: 1.05rem;
            font-weight: 700;
            border-radius: 8px;
            padding: 3px 16px;
            margin-bottom: 10px;
            display: inline-block;
            letter-spacing: 1px;
        }
        .edu-step .edu-degree {
            font-size: 1.13rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 4px;
            text-align: center;
        }
        .edu-step .edu-institute {
            font-size: 1rem;
            color: #444;
            margin-bottom: 8px;
            text-align: center;
        }
        .edu-step .edu-duration {
            font-size: 0.98rem;
            color: #19b3a6;
            font-weight: 500;
            margin-bottom: 10px;
        }
        .edu-step .edu-desc {
            font-size: 0.97rem;
            color: #555;
            margin-bottom: 0;
            line-height: 1.6;
            text-align: center;
        }
        .edu-arrow {
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 0 0 40px;
            font-size: 2.5rem;
            color: #19b3a6;
            opacity: 0.7;
            user-select: none;
        }
        @media (max-width: 1100px) {
            .edu-timeline {
                flex-direction: column;
                gap: 28px;
                align-items: center;
            }
            .edu-arrow {
                transform: rotate(90deg);
                font-size: 2.2rem;
            }
        }
    </style>

<div class="main-section">
        <div class="edu-container">
            <div class="edu-title">
                <i class="fas fa-graduation-cap"></i> My Education
            </div>
            <div class="edu-timeline">
                <div class="edu-step">
                    <div class="edu-icon"><i class="fas fa-laptop-code"></i></div>
                    <span class="edu-badge">B.Sc.</span>
                    <div class="edu-degree">B.Sc. in Computer Science & Engineering</div>
                    <div class="edu-institute">Daffodil International University</div>
                    <div class="edu-duration"><i class="fa-regular fa-calendar"></i> 2022 - Present</div>
                    <div class="edu-desc">
                        Pursuing my undergraduate degree with a focus on Computer Science & Engineering, algorithms, and system design. Active in coding competitions and tech communities.
                    </div>
                </div>
                <div class="edu-arrow"><i class="fas fa-arrow-left"></i></div>
                <div class="edu-step">
                    <div class="edu-icon"><i class="fas fa-flask"></i></div>
                    <span class="edu-badge">HSC</span>
                    <div class="edu-degree">Higher Secondary Certificate (Science)</div>
                    <div class="edu-institute">Gazipur Cantonment College</div>
                    <div class="edu-duration"><i class="fa-regular fa-calendar"></i> 2018 - 2020</div>
                    <div class="edu-desc">
                        Completed HSC with distinction, majoring in science. Developed strong analytical and problem-solving skills, and participated in science fairs.
                    </div>
                </div>
                <div class="edu-arrow"><i class="fas fa-arrow-left"></i></div>
                <div class="edu-step">
                    <div class="edu-icon"><i class="fas fa-book"></i></div>
                    <span class="edu-badge">SSC</span>
                    <div class="edu-degree">Secondary School Certificate (Science)</div>
                    <div class="edu-institute">Gazipur Cantonment Board High School</div>
                    <div class="edu-duration"><i class="fa-regular fa-calendar"></i> 2016 - 2018</div>
                    <div class="edu-desc">
                        Achieved excellent results in SSC, laying the foundation for my academic journey in science and technology.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

