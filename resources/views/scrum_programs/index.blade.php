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
                <li><a href="/service/it_programs/scrum_program">Scrum Programs</a></li>
                <li class="active">{{$name}}</li>
            </ul>
        </div>
    </div>
</div>

@if($name == 'Scrum Master Certified (SMC™)')
<section class="services-details-area" style="padding-top: 5rem; padding-bottom: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="scrum-container">
                    <h1>Scrum Master Certified (SMC&trade;)</h1>
                    <div style="overflow-x:auto;">
                        <table width="100%" class="comparison-table certification-details-table" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th rowspan="2">Certification</th>
                                <th colspan="2">Prerequisites</th>
                                <th rowspan="2">Target Audience</th>
                                <th rowspan="2">Maintaining Certification (RCUs)</th>
                            </tr>
                            <tr class="second-row">
                                <th>Experience</th>
                                <th>Education</th>
                            </tr>
                            <tr>
                                <td>SMC<sup>&trade;</sup></td>
                                <td>Nil</td>
                                <td>Preferably SDC&trade; certified professional</td>
                                <td>Anyone who is interested in becoming a Scrum Master</td>
                                <td>40 Recertification units every 2 years</td>
                            </tr>
                        </table>
                    </div>
                    <h2>Overview</h2>
                    <p>Scrum Master Certified (SMC&trade;) professionals are facilitators who ensure that the Scrum Team is provided with an environment conducive to completing the project successfully. The Scrum Master guides, facilitates, and teaches Scrum practices to everyone involved in the project; clears impediments for the team; and, ensure that Scrum processes are being followed. Successful candidates will be awarded the Scrum Master Certified (SMC&trade;) certification by SCRUMstudy after passing the certification exam.
                    <h2>Audience Profile</h2>
                    <p>This certification is appropriate for anyone who is interested in working as a Scrum Master.</p>
                    <h2>Prerequisites</h2>
                    <p>There is no formal prerequisite for this certification. However, it is preferable to complete the Scrum Developer Certified (SDC&trade;) certification before applying for the Scrum Master certification. It is also highly recommended to attend the SMC&trade;&nbsp;classroom training provided by the SCRUMstudy approved Registered Education Provider (R.E.P.)</p>
                    <h2>Exam Format </h2>
                    <ul>
                        <li>Multiple Choice</li>
                        <li>100 questions per exam</li>
                        <li>One mark awarded for every right answer</li>
                        <li>No negative marks for wrong answers</li>
                        <li>120 minutes duration</li>
                        <li>Proctored online exam.</li>
                    </ul>
                </div>
            </div>
            <div class="home-service-area pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="single-service">
                                <div class="service-img"><img src="{{URL::asset('images/favicon.png')}}" alt="service" /></div>
                                <div class="service-content">
                                    <h3>Scrum Master Self-Paced Online Course (including online ceritifcates): Priced at £350.
                                        <ul style="text-align: left !important; font-size: 1.2rem; margin-top: 1.2rem;">
                                            <span style="font-size: 1.4rem;">Benifits</span>
                                            <br>
                                            <li>- Beginner friendly</li>
                                            <li>- High video quality of clearly explained scrum topics</li>
                                            <li>- Professional Certification</li>
                                            <li>- Access to Scrum book of Knowledge</li>
                                            <li>- Professional Membership</li>
                                        </ul>
                                        <br><a class="box-btn signup-btn" href="/login">Enroll</a>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="single-service">
                                <div class="service-img"><img src="{{URL::asset('images/favicon.png')}}" alt="service" /></div>
                                <div class="service-content">
                                    <h3>Two(2) Days Live Training Via Zoom @ £499
                                        <ul style="text-align: left !important; font-size: 1.2rem; margin-top: 1.2rem;">January 14 and 15 (2days Saturday and Sunday, 10am to 6pm each day, London time)
                                            February 11 and 12 (2days Saturday and Sunday, 10am to 6pm each day, London time)
                                            March 11 and 12 (2days Saturday and Sunday, 10am to 6pm each day, London time)
                                        </ul>
                                        <ul style="text-align: left !important; font-size: 1.2rem; margin-top: 1.2rem;">
                                            <span style="font-size: 1.4rem;">Benifits</span>
                                            <br>
                                            <li>- Beginner friendly</li>
                                            <li>- In-depth Trainings</li>
                                            <li>- Live class giving opportunity to ask questions</li>
                                            <li>- Professional Certification</li>
                                            <li>- Professional Membership</li>
                                            <li>- Access to Scrum Book of Knowledge</li>
                                        </ul>
                                        <br><a class="box-btn signup-btn" href="/login">Enroll</a>
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="single-service">
                                <div class="service-img"><img src="{{URL::asset('images/favicon.png')}}" alt="service" /></div>
                                <div class="service-content">
                                    <h3 class="ml-4 mr-4">Four(4) Weeks Live Training Via Zoom June 17 - July 8 (Saturdays 12pm-5pm and Sundays 3pm-5pm) @ £2,099
                                        <ul style="text-align: left !important; font-size: 1.2rem; margin-top: 1.2rem;">
                                            <span style="font-size: 1.4rem;">Benifits</span>
                                            <br>
                                            <li>- Beginner friendly</li>
                                            <li>- In-depth Trainings</li>
                                            <li>- Up to 3months ongoing Mentorship after trainings while job hunting or while practicing</li>
                                            <li>- CV-do</li>
                                            <li>- Interview Preparations</li>
                                            <li>- Professional Certification</li>
                                            <li>- Exposure to industry tool's</li>
                                            <li>- Professional Networking/Membership</li>
                                            <li>- Access to Scrum book of Knowledge</li>
                                        </ul>
                                        <br><a class="box-btn signup-btn" href="/login">Enroll</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@elseif($name == 'Scrum Developer Certified (SDC™)')
<section class="services-details-area" style="padding-top: 5rem; padding-bottom: 50px;">
    <div class="container">
        <div id="scrum-container">
            <h1>Scrum Developer Certified (SDC&trade;)</h1>
            <div style="overflow-x:auto;">
                <table width="100%" class="comparison-table certification-details-table" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <th rowspan="2">Certification</th>
                        <th colspan="2">Prerequisites</th>
                        <th rowspan="2">Target Audience</th>
                        <th rowspan="2">Maintaining Certification (RCUs)</th>
                    </tr>
                    <tr class="second-row">
                        <th>Experience</th>
                        <th>Education</th>
                    </tr>
                    <tr>
                        <td>SDC<sup>&trade;</sup></td>
                        <td>Nil</td>
                        <td>Nil</td>
                        <td>Anyone on a SCRUM Team or anyone who interacts with any Scrum Team</td>
                        <td>25 Recertification units every 2 years</td>
                    </tr>
                </table>
            </div>
            <h2>Overview</h2>
            <p>Scrum Developer Certified (SDC&trade;) is an entry level certification for Scrum Team members and those who interact with any Scrum Team. The objective of this certification is to ensure that Scrum Team members know enough about Scrum to effectively contribute to a Scrum project. The courseware and preparation tools required for the certification exam will be available online on SCRUMstudy.com. An online proctored exam will be conducted at the end of the course.
            <h2>Audience Profile</h2>
            <p>This is highly recommended for everyone in a company who works in a Scrum Team or anyone who interacts with any Scrum Team. This will also be very useful for those who are interested in understanding the basics of Scrum and how this method could be used effectively.</p>
            <h2>Prerequisites</h2>
            <p>There is no formal prerequisite for this certification.</p>
            <h2>Exam Format </h2>
            <ul>
                <li>Multiple Choice</li>
                <li>75 questions per exam</li>
                <li>One mark awarded for every right answer</li>
                <li>No negative marks for wrong answers</li>
                <li>57 questions need to be answered correctly to pass</li>
                <li>90 minutes duration</li>
                <li>Proctored online exam</li>
            </ul>
        </div>
        <div class="col-12">
            <div class="services-details-text">
                <h2>
                    Scrum Developer Self-Paced Online Course (including online certificates): Priced at £150.
                    <br><a class="box-btn signup-btn" href="/enroll">Enroll Now</a>
                </h2>
            </div>
        </div>
    </div>
</section>

@elseif($name == 'Scrum Product Owner Certified (SPOC™)')
<section class="services-details-area" style="padding-top: 5rem; padding-bottom: 50px;">
    <div class="container">
        <div id="scrum-container">
            <h1>Scrum Product Owner Certified (SPOC&trade;)</h1>
            <div style="overflow-x:auto;">
                <table width="100%" class="comparison-table certification-details-table" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <th rowspan="2">Certification</th>
                        <th colspan="2">Prerequisites</th>
                        <th rowspan="2">Target Audience</th>
                        <th rowspan="2">Maintaining Certification (RCUs)</th>
                    </tr>
                    <tr class="second-row">
                        <th>Experience</th>
                        <th>Education</th>
                    </tr>
                    <tr>
                        <td>SPOC<sup>&trade;</sup></td>
                        <td>Nil</td>
                        <td>Preferably SDC&trade; (or) SMC&trade; certified professional</td>
                        <td>Anyone who interfaces with business stakeholders or works as a Product Owner in a Scrum project.</td>
                        <td>40 Recertification units every 2 years</td>
                    </tr>
                </table>
            </div>
            <h2>Overview</h2>
            <p>The Product Owner represents the interests of the stakeholder community to the Scrum Team. The Product Owner is responsible for ensuring clear communication of product or service functionality requirements to the Scrum Team, defining Acceptance Criteria, and ensuring those criteria are met. The Product Owner must always maintain a dual view. He or she must understand and support the needs and interests of all stakeholders, while also understanding the needs and workings of the Scrum Team.</p>
            <p>Applicants will be awarded the Scrum Product Owner Certified (SPOC&trade;) certificate by SCRUMstudy upon successfully passing the certification exam.</p>
            <h2>Audience Profile</h2>
            <p>This certification is for anyone who interfaces with stakeholders or works as a Product Owner in a Scrum Team.</p>
            <h2>Prerequisites</h2>
            <p>There is no formal prerequisite for this certification. However, SDC&trade;&nbsp;or SMC&trade;&nbsp;Certified professionals will be able to better understand the concepts required for this certification exam. It is also highly recommended to attend a 2-day SPOC&trade;&nbsp;classroom training provided by a SCRUMstudy approved Registered Education Provider (R.E.P.)</p>
            <h2>Exam Format </h2>
            <ul>
                <li>Multiple Choice</li>
                <li>140 questions per exam</li>
                <li>One mark awarded for every right answer</li>
                <li>No negative marks for wrong answers</li>
                <li>180 minutes duration</li>
                <li>Proctored online exam</li>
            </ul>
        </div>
        <div class="col-12">
            <div class="services-details-text">
                <h2>
                    Scrum Product Owner Self-Paced Online Course (including online certificates): Priced at £450.
                    <br><a class="box-btn signup-btn" href="/enroll">Enroll Now</a>
                </h2>
            </div>
        </div>
    </div>
</section>

@elseif($name == 'SCRUMstudy Agile Master Certified (SAMC™)')
<section class="services-details-area" style="padding-top: 5rem; padding-bottom: 50px;">
    <div class="container">
        <div id="scrum-container">
            <h1>SCRUMstudy Agile Master Certified (SAMC&trade;)</h1>
            <div style="overflow-x:auto;">
                <table width="100%" class="comparison-table certification-details-table" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <th rowspan="2">Certification</th>
                        <th colspan="2">Prerequisites</th>
                        <th rowspan="2">Target Audience</th>
                        <th rowspan="2">Maintaining Certification (RCUs)</th>
                    </tr>
                    <tr class="second-row">
                        <th>Experience</th>
                        <th>Education</th>
                    </tr>
                    <tr>
                        <td>SAMC<sup>&trade;</sup></td>
                        <td>Nil</td>
                        <td>Preferably SDC&trade; (or) SMC&trade; Certified professional</td>
                        <td>Anyone on a Scrum team</td>
                        <td>40 Recertification units every 2 years</td>
                    </tr>
                </table>
            </div>
            <h2>Overview</h2>
            <p>Rapid changes in technology, market demands, and expectations have paved the way for the conceptualization and implementation of Agile methods and values in many organizations. Agile relies on adaptive planning and iterative development and delivery. It focuses primiarily on the value of people in getting the job done effectively. (SAMC&trade;) Certified Professionals should appreciate the concepts of Agile development and have the ability to compare and choose the Agile methodology appropriate in a given situation.</p>
            <p>Applicants will be awarded the SCRUMstudy Agile Master Certified (SAMC&trade;) certificate by SCRUMstudy after successfully passing the certification exam.</p>
            <h2>Audience Profile</h2>
            <p>This certification is appropriate for anyone interested in getting familiar with the concepts and practices of Agile Project Delivery, and who wants to have a working knowledge of the various Agile methodologies.</p>
            <h2>Prerequisites</h2>
            <p>There is no formal prerequisite for this certification. However, a SDC&trade;&nbsp;or SMC&trade;&nbsp;certified professional will be able to easily understand the concepts required for the certification exam. Alternatively, you can attend a 3-day SAMC&trade;&nbsp;classroom training provided by a SCRUMstudy approved Registered Education Provider (R.E.P.)</p>
            <h2>Exam Format </h2>
            <ul>
                <li>Multiple Choice</li>
                <li>100 questions per exam</li>
                <li>One mark awarded for every right answer</li>
                <li>No negative marks for wrong answers</li>
                <li>120 minutes duration</li>
                <li>Proctored online exam.</li>
            </ul>
        </div>
        <div class="col-12">
            <div class="services-details-text">
                <h2>
                    Scrum Agile Master Self-Paced Online Course (including online certificates): Priced at £450.
                    <br><a class="box-btn signup-btn" href="/enroll">Enroll Now</a>
                </h2>
            </div>
        </div>
    </div>
</section>

@elseif($name == 'Expert Scrum Master (ESM™)')
<section class="services-details-area" style="padding-top: 5rem; padding-bottom: 50px;">
    <div class="container">
        <div id="scrum-container">
            <h1>Expert Scrum Master (ESM&trade;)</h1>
            <div style="overflow-x:auto;">
                <table width="100%" class="comparison-table certification-details-table" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <th rowspan="2">Certification</th>
                        <th colspan="2">Prerequisites</th>
                        <th rowspan="2">Target Audience</th>
                        <th rowspan="2">Maintaining Certification (RCUs)</th>
                    </tr>
                    <tr class="second-row">
                        <th>Experience</th>
                        <th>Education</th>
                    </tr>
                    <tr>
                        <td>ESM<sup>&trade;</sup></td>
                        <td>3 Years managing SCRUM/AGILE projects</td>
                        <td>Should be SMC&trade;, SAMC&trade;, and SPOC&trade; Certified</td>
                        <td>Experienced Scrum Professional</td>
                        <td>60 Recertification units every 2 years</td>
                    </tr>
                </table>
            </div>
            <h2>Overview </h2>
            <p>Expert Scrum Master (ESM&trade;) certification is the next step for Scrum practitioners to further demonstrate their expertise in Scrum methodology. This will test your ability to manage complex Scrum projects and scale Scrum in complex projects involving big project teams, programs and portfolios. Applicants will be awarded the Expert Scrum Master (ESM&trade;) certificate by SCRUMstudy upon successfully passing the certification exam.</p>
            <h2>Audience Profile:</h2>
            <p>This Certification is suitable for anyone who is an expert in the SCRUM team and wants to handle complicated Scrum projects as an Expert Scrum Master.</p>
            <h2>Prerequisites</h2>
            <p>To become an ESM&trade; certified professional you should fulfil the following criteria:</p>
            <ul>
                <li>Should have three years of experience managing Scrum/Agile Projects</li>
                <li>Should be SMC&trade;, SAMC&trade; and SPOC&trade; certified.</li>
                <li>Should submit 500 words write up about two Scrum/Agile projects.</li>
                <li>You can also attend a 2-day ESM&trade; classroom training provided by a SCRUMstudy R.E.P.</li>
            </ul>
            <h2>Exam Format </h2>
            <ul>
                <li>Objective testing. Case study and scenario based</li>
                <li>240 minutes duration</li>
                <li>Proctored online exam</li>
                <li>Open book exam (SBOK&trade; Guide only)</li>
            </ul>
        </div>
        <div class="col-12">
            <div class="services-details-text">
                <h2>
                    Scrum Expert Scrum Master Self-Paced Online Course (including online certificates): Priced at £650.
                    <br><a class="box-btn signup-btn" href="/enroll">Enroll Now</a>
                </h2>
            </div>
        </div>
    </div>
</section>

@elseif($name == 'Scrum Fundamentals Certified (SFC™)')
<section class="services-details-area" style="padding-top: 5rem; padding-bottom: 50px;">
    <div class="container">
        <div class="col-12">
            <div class="services-details-text">
                <h2>
                    Scrum Fundamentals Self-Paced Online Course (including online certificates): Free.
                    <br><a class="box-btn signup-btn" href="/enroll">Enroll In Free SFC</a>
                </h2>
            </div>
        </div>
        <div id="scrum-container">
            <h1>Scrum Fundamentals Certified (SFC™)</h1>
            <div style="overflow-x:auto;">
                <table width="100%" class="comparison-table certification-details-table" border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>Certification</th>
                            <th>Prerequisite Experience</th>
                            <th>Prerequisite Education</th>
                            <th>Target Audience</th>
                            <th>Cost of Exam</th>
                            <th>Maintaining certification <sup></sup></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span>Certification </span>Scrum Fundamentals Certified</td>
                            <td><span>Prerequisite Experience: </span>Nil</td>
                            <td><span>Prerequisite Education: </span>Nil</td>
                            <td><span>Target Audience: </span>Anyone interested to know more about Scrum and Agile</td>
                            <td><span>Cost of Exam: </span>0 </td>
                            <td><span>Maintaining certification <sup></sup></span> Valid for lifetime. </td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="small">
            </p>
            <p>
                'Scrum Fundamentals Certified' course is tailored to help anyone interested to know more about Scrum; learn about key concepts in Scrum as defined in the SBOK<sup>®</sup> Guide; and to get a basic understanding of how Scrum framework works in delivering successful projects. This course is included as a part of Free Primary Lifetime Membership. The purpose of the 'Scrum Fundamentals Certified' exam is to confirm you have basic understanding of the Scrum framework. On passing the exam, you will be accredited as "Scrum Fundamentals Certified".
            </p>
            <div class="row">
                <div class="col-12">
                    <h3>Exam Format</h3>
                    <ul>
                        <li>Multiple choice</li>
                        <li>40 questions per exam</li>
                        <li>One mark awarded for every right answer</li>
                        <li>No negative marks for wrong answers</li>
                        <li>30 questions need to be answered correctly to pass</li>
                        <li>60 minutes duration</li>
                        <li>Online unproctored exam</li>
                    </ul>

                    <h3>Audience Profile</h3>
                    <p>Anyone interested in knowing more about Scrum and Agile can take up this course and exam for free.</p>

                    <h3>Prerequisites</h3>
                    <p>There is no formal prerequisite for this course.</p>

                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="services-details-text">
                <h2>
                    Scrum Fundamentals Self-Paced Online Course (including online certificates): Free.
                    <br><a class="box-btn signup-btn" href="/enroll">Enroll In Free SFC</a>
                </h2>
            </div>
        </div>
    </div>
</section>
@endif
@endsection