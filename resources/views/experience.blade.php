@extends('index')
@section('main_content')



<style>
.main-section {
            padding: 80px 20px;
            background: #ffffff;
            display: flex;
            justify-content: center;
            background: linear-gradient(120deg, #e0f7fa 0%, #fafbfc 100%);
        }

        .exp-timeline {
            max-width: 1000px;
            width: 100%;
            display: grid;
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .exp-title {
            font-size: 2.4rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 40px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .exp-card {
            display: flex;
            gap: 24px;
            align-items: flex-start;
            background: #ffffff;
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .exp-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.08);
        }

        .exp-icon {
            min-width: 60px;
            min-height: 60px;
            background: #19b3a6;
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.6rem;
        }

        .exp-details {
            flex: 1;
        }

        .exp-role {
            font-size: 1.4rem;
            font-weight: 700;
            color: #111;
            margin-bottom: 6px;
        }

        .exp-org {
            font-size: 1.05rem;
            font-weight: 600;
            color: #19b3a6;
            margin-bottom: 6px;
        }

        .exp-duration {
            font-size: 0.95rem;
            color: #666;
            margin-bottom: 10px;
        }

        .exp-desc {
            font-size: 1rem;
            color: #333;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .exp-card {
                flex-direction: column;
                align-items: flex-start;
            }
            .exp-icon {
                margin-bottom: 12px;
            }
        }
    </style>

<div class="main-section">
        <div class="exp-timeline">
            <div class="exp-title">
                <i class="fas fa-briefcase"></i> My Experience
            </div>

            <div class="exp-card">
                <div class="exp-icon"><i class="fas fa-microscope"></i></div>
                <div class="exp-details">
                    <div class="exp-role">Undergraduate Research Assistant</div>
                    <div class="exp-org">$IR Research Cell, Daffodil International University</div>
                    <div class="exp-duration"><i class="fa-regular fa-calendar"></i> 1 year</div>
                    <div class="exp-desc">
                        Conducted research on information retrieval and natural language processing, collaborated with faculty and peers, and contributed to academic publications.
                    </div>
                </div>
            </div>

            <div class="exp-card">
                <div class="exp-icon"><i class="fas fa-user-graduate"></i></div>
                <div class="exp-details">
                    <div class="exp-role">Internship</div>
                    <div class="exp-org">ABC Company</div>
                    <div class="exp-duration"><i class="fa-regular fa-calendar"></i> 6 months</div>
                    <div class="exp-desc">
                        Worked as a web development intern, contributed to real-world projects, learned agile methodologies, and enhanced teamwork and communication skills.
                    </div>
                </div>
            </div>

            <div class="exp-card">
                <div class="exp-icon"><i class="fas fa-globe"></i></div>
                <div class="exp-details">
                    <div class="exp-role">Remote Job Holder</div>
                    <div class="exp-org">Freelance/Remote</div>
                    <div class="exp-duration"><i class="fa-regular fa-calendar"></i> 2 years</div>
                    <div class="exp-desc">
                        Delivered web solutions for international clients, managed projects independently, and developed expertise in remote collaboration and client communication.
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

