@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('page-content')
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Service</h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/service/it_programs/quality_management_program">Quality Management Programs</a></li>
                <li class="active">{{$name}}</li>
            </ul>
        </div>
    </div>
</div>

@if($name == 'Six Sigma Black Belt')
<section class="services-details-area" style="padding-top: 5rem; padding-bottom: 50px;">
    <div class="container">
        <div id="scrum-container">
            <h1>Six Sigma Black Belt</h1>
            <h2>Overview</h2>
            <p>Six Sigma Black Belt (SSBB) certification focuses on testing students on their comprehensive understanding of the various Six Sigma tools and techniques. The objective of the online value added course (complementary with certification exam) is to develop a comprehensive knowledge base that helps students to function effectively as a Six Sigma Black Belt in various projects. The tools and techniques cover both quantitative and non-quantitative analysis along with other necessary knowledge to improve the production process and minimize defects in the end product with a greater focus on the practical implementation of these tool and techniques in the organization.</p>
            <h2>Certification Exam Format</h2>
            <ul>
                <li>Multiple Choice</li>
                <li>125 questions per exam</li>
                <li>One mark awarded for every right answer</li>
                <li>No negative marks for wrong answers</li>
                <li>180 minutes duration</li>
                <li>Proctored online exam</li>
            </ul>
            <h2>Audience Profile</h2>
            <p>This certification is highly recommended for employees, professionals who require developing comprehensive understanding of practical implementation of Six Sigma methodologies with the help of various tools and techniques for the purpose of continuous improvement in processes and products.</p>
            <h2>Prerequisites</h2>
            <p>Six Sigma Green Belt certification<strong> </strong></p>
        </div>
        <div class="col-12">
            <div class="services-details-text">
                <h2>
                    Six Sigma Black Belt Self-Paced Online Course (including online certificates): Priced at £300.
                    <br><a class="box-btn signup-btn" href="/enroll">Enroll Now</a>
                </h2>
            </div>
        </div>
    </div>
</section>

@elseif($name == 'Six Sigma Green Belt')
<section class="services-details-area" style="padding-top: 5rem; padding-bottom: 50px;">
    <div class="container">
        <div id="scrum-container">
            <h1>Six Sigma Green Belt</h1>
            <h2>Overview</h2>
            <p>Six Sigma Green Belt course focuses on providing students with an understanding of the various Six Sigma tools and techniques useful to improve the production process and minimize defects in the end product with a greater focus on the practical implementation of these tool and techniques in the organization.</p>
            <h2>Certification Exam Format</h2>
            <ul>
                <li>Multiple Choice</li>
                <li>90 questions per exam</li>
                <li>One mark awarded for every right answer</li>
                <li>No negative marks for wrong answers</li>
                <li>120 minutes duration</li>
                <li>Proctored online exam</li>
            </ul>
            <h2>Audience Profile</h2>
            <p>This course is highly recommended for employees and organizations requiring a standardized approach to problem solving for the purpose of continuous improvement in Quality Management.</p>
            <h2>Prerequisites</h2>
            <p>Preferably Six Sigma Yellow Belt (But Not Mandatory)</p>
            <h2>Training:</h2>
            <ul>
                <li>When you apply for the Six Sigma Green Belt certification, you get access to a free online course</li>
                <li>If you are looking for classroom training before certification, please refer to Training section to find a Registered Education Provider in your place. </li>
            </ul>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
        <div class="col-12">
            <div class="services-details-text">
                <h2>
                    Six Sigma Green Belt Self-Paced Online Course (including online certificates): Priced at £150.
                    <br><a class="box-btn signup-btn" href="/enroll">Enroll Now</a>
                </h2>
            </div>
        </div>
    </div>
</section>

@elseif($name == 'Six Sigma Yellow Belt')
<section class="services-details-area" style="padding-top: 5rem; padding-bottom: 50px;">
    <div class="container">
        <div id="scrum-container">
            <h1>Six Sigma Yellow Belt</h1>
            <h2>Overview</h2>
            <p>The Six Sigma Yellow Belt course is tailored to help anyone interested to know what Six Sigma is; learn key concepts in Six Sigma; and to get a basic understanding of how Six Sigma framework works in delivering successful projects. This course is included as a part of Free Lifetime Primary Membership. Once the course is completed, the student needs to take an assessment to get the certificate. The purpose of the exam is to confirm you have basic understanding of Six Sigma.</p>
            <h2>Certification Exam Format</h2>
            <ul>
                <li>Multiple Choice</li>
                <li>40 questions for the exam</li>
                <li>One mark awarded for every right answer</li>
                <li>No negative marks for wrong answers</li>
                <li>60 minutes duration</li>
                <li>28 questions need to be answered correctly to pass</li>
                <li>Online un-proctored exam</li>
            </ul>
            <h2>Audience Profile</h2>
            <p>Anyone interested in knowing more about Six Sigma can take up this course and exam for free.</p>
            <h2>Prerequisites</h2>
            <p>There is no formal prerequisite for this course.</p>
        </div>
        <div class="col-12">
            <div class="services-details-text">
                <h2>
                    Six Sigma Yellow Belt Self-Paced Online Course (including online certificates): Priced at £250.
                    <br><a class="box-btn signup-btn" href="/enroll">Enroll Now</a>
                </h2>
            </div>
        </div>
    </div>
</section>

@elseif($name == 'Lean Six Sigma Black Belt')
<section class="services-details-area" style="padding-top: 5rem; padding-bottom: 50px;">
    <div class="container">
        <div id="scrum-container">
            <h1>Lean Six Sigma Black Belt</h1>
            <h2>Overview</h2>
            <p>Lean Six Sigma Black Belt (LSSBB) certification focuses on testing students on their comprehensive understanding of the various Six Sigma tools and techniques in conjunction with Lean. The objective of the online value added course (complementary with certification exam) is to develop a comprehensive knowledge base that helps students to function effectively as a Lean Six Sigma Black Belt in various projects. The tools and techniques cover both quantitative and non-quantitative analysis along with other necessary knowledge to improve the production process, minimize inefficiencies and increase with a greater focus on the practical implementation of these tool and techniques in the organization.</p>
            <h2>Certification Exam Format</h2>
            <ul>
                <li>Multiple Choice</li>
                <li>125 questions per exam</li>
                <li>One mark awarded for every right answer</li>
                <li>No negative marks for wrong answers</li>
                <li>180 minutes duration</li>
                <li>Proctored online exam</li>
            </ul>
            <h2>Audience Profile</h2>
            <p>This certification is highly recommended for employees, professionals who require developing comprehensive understanding of practical implementation of Lean Six Sigma with the help of various tools and techniques for the purpose of continuous improvement in processes and products.</p>
            <h2>Prerequisites</h2>
            <p>Six Sigma Green Belt Certification</p>
        </div>
        <div class="col-12">
            <div class="services-details-text">
                <h2>
                    Lean Six Sigma Black Belt Self-Paced Online Course (including online certificates): Priced at £450.
                    <br><a class="box-btn signup-btn" href="/enroll">Enroll Now</a>
                </h2>
            </div>
        </div>
    </div>
</section>
@endif
@endsection