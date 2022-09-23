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
                <li><a href="/service/it_trainings/project_management">Project Management</a></li>
                <li class="active">ITIL (IT Services) Program</li>
            </ul>
        </div>
    </div>
</div>

<section class="services-details-area pb-100" style="padding-top: 5rem;">
    <div class="container">
        <div class="wrapper">
            <div id="scrum-container">
                <h1>About ITIL</h1>
                <h2>ABOUT ITIL<sup>®</sup></h2>
                <p>IT Infrastructure Library<sup>®</sup> (ITIL) is the most widely adopted framework for IT Service Management in the world. It is a practical approach to identifying, planning, delivering and supporting IT services to the business. It describes how IT resources should be organized to deliver business value, documenting the processes, functions and roles of IT Service Management (ITSM).</p>
                <p>ITIL principles are used by a number of organizations in both the public and private sectors such as NASA, IBM, HP, British Telecom, HSBC bank and L'Oreal.</p>
                <p>ITIL is created and owned by the Cabinet Office. ITIL best practices are explained in the five core guidance publications outlining the fundamental ITIL principles that focus on various areas within the service management discipline.</p>
                <p>ITIL best practices also underpin the foundations of ISO/IEC 20000 (previously BS15000), the International Service Management Standard for organizational certification and compliance.</p>
                <h2>About ITIL Qualifications</h2>
                <p>The following certifications are available under the ITIL Qualifications scheme:</p>
                <ul>
                    <li>ITIL Foundation (known as ITIL v3 and ITIL 2011 edition)
                        <ol type="i">
                            <li>The ITIL Foundation Certificate in IT Service Management is the entry level examination for the scheme. There are no pre-requites for this examination.</li>
                        </ol>
                    </li>
                    <li>ITIL Intermediate Level
                        <ol type="i">
                            <li>The ITIL Intermediate level is the core of the scheme. To take an examination at this level, candidates must hold the ITIL Foundation qualification and must complete an accredited training course.</li>
                            <li>The following examinations are available at the intermediate level:
                                <ul type="circle">
                                    <li>Service Lifecycle: management focused examinations
                                        <ul>
                                            <li>Service Strategy</li>
                                            <li>Service Design</li>
                                            <li>Service Transition</li>
                                            <li>Service Operation</li>
                                            <li>Continual Service Improvement</li>
                                        </ul>
                                    </li>
                                    <li>Service Capability: process focused examinations
                                        <ul>
                                            <li>Planning Protection and Optimization</li>
                                            <li>Release Control and Validation</li>
                                            <li>Operational Support and Analysis</li>
                                            <li>Service Offerings and Agreements</li>
                                        </ul>
                                    </li>
                                </ul>

                            </li>
                        </ol>
                    </li>
                    <li>ITIL Managing Across the Lifecycle (MALC)
                        <ol type="i">
                            <li>It is the capstone examination for the scheme. Candidates who have earned at least 17 credits from both Foundation and Intermediate modules of ITIL Certifications are eligible to take this course and examination, and will be eligible for the ITIL Expert level award following successful completion.</li>
                            <li>For full information on the qualifications available under the scheme please see: <br />
                                www.itil-officialsite.com/Qualifications/ITILQualificationScheme.aspx
                            </li>
                        </ol>
                    </li>
                </ul>
                <h2>Benefits of ITIL</h2>
                The Benefits of ITIL:
                <ul>
                    <li>Provides a single documented framework for IT best practices that flow across the IT organization.</li>
                    <li>Reduces IT costs and justifies the cost of IT quality and supports improvement of user productivity.</li>
                    <li>Supports ability of IT to measure and improve internal performance and service provisioning.</li>
                    <li>Improves communication and information flow between IT and the organization and business departments and identifies roles and responsibilities for IT Service Management.</li>
                    <li>Improves ability of IT to adjust as business opportunities and challenges are presented.</li>
                    <li>Improves relationship of IT with the business - builds trust.</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<section class="services-details-area pb-100">
    <div class="container">
        <div class="wrapper">
            <div id="scrum-container">
                <h1>COURSE MATERIALS</h1>
                <h2>COURSE MATERIALS</h2>
                <p>Our course materials have been designed by a panel of ITIL experts with more than 15 years of industry experience in IT Service Management. MyITstudy has created a time-tested methodology, which is backed by high pass rates. We provide students with all the materials they need, including workbooks, chapter test books, a final test booklet, process charts, case studies and gift packs. The study material details the goals, objectives and basic concepts of core ITIL processes and functions everything students need to know to pass the exam. It seamlessly combines real-life examples with ITIL concepts to help students effectively implement ITIL concepts in their organizations. One of the major benefits MyITstudy offers students is one month of free access to online study materials, which includes process charts, study guides and exam tips.</p>
                <p>Students do not have to bring anything to class. All materials are provided!</p>
                <h2>Student Workbook:</h2>
                <p>MyITstudy course content has been updated to align with the 2011 syllabus. The workbook contains an introduction along with chapters detailing each stage of the Service Lifecycle:</p>
                <ul>
                    <li>Service Strategy,</li>
                    <li>Service Design,</li>
                    <li>Service Transition,</li>
                    <li>Service Operation and</li>
                    <li>Continual Service improvement.</li>
                </ul>
                <p>The purpose, value, scope and objectives of each process and function as well as ITIL terminology is explained in detail. This workbook contains simple, yet informative, real-life situations that help students contextualize important ITIL concepts. Each chapter is complemented by a brief chapter test that reinforces retention and application of important concepts.</p>
                <h2>Chapter Test Workbook: </h2>
                <p>Students can discuss important concepts during the interactive session after each chapter while they are given feedback on areas of improvement. The chapter test workbook also contains justifications for all the chapter test questions to help students understand each concept.</p>
                <h2>Mock Exam:</h2>
                <p>This exam has been modelled after the ITIL Foundation Exam.
                    The mock test is conducted on the second day of class, prior to the actual ITIL Foundation exam. It consists of 40 questions that mimic the type of questions students will see on the real exam. It helps students prepare for the final exam and assists them in understanding their strengths and weaknesses.
                </p>
                <h2>Case Study:</h2>
                <p>Implementing the ITIL framework is as necessary as the knowledge of ITIL concepts is, in creating a successful organization. MyITstudy understands this reality and has prepared case studies based on real-life experiences, which offers a balance between theoretical concepts and implementable knowledge of the ITIL framework. A service topic is chosen and is explained with reference to each component of the Service Lifecycle in ITIL Foundation. With this method, students can get an idea of how to formulate an ITIL culture in their respective organizations to improve service delivery and productivity.</p>

            </div>
        </div>
    </div>
</section>

<section class="services-details-area pb-100">
    <div class="container">
        <div class="wrapper">
            <div id="scrum-container">
                <h1>Course Outline</h1>
                <h2>Day 1</h2>
                <ul>
                    <li>An Introduction to IT Service Management</li>
                    <li>Lifecycles and Strategies</li>
                    <li>Service Design - Principles, Processes and Roles</li>
                    <li>Evening work & Revision</li>
                </ul>
                <h2>Day 2</h2>
                <ul>
                    <li>Review of evening work and day 1</li>
                    <li>Service Transition - Principles, Processes and Roles</li>
                    <li>Service Operation - Principles, Processes, Roles and Functions</li>
                    <li>Evening work, Revision & Mock Exam</li>
                </ul>
                <h2>Day 3</h2>
                <ul>
                    <li>Review of evening work and day 2</li>
                    <li>Interfaces and Continual Service Improvement</li>
                    <li>Technology and Architecture</li>
                    <li>Certification scheme</li>
                    <li>Mock Exam and review</li>
                    <li>Exam</li>
                </ul>
                <p>Candidates can expect to gain competencies in the following upon successful completion of the education and examination components related to this certification:</p>
                <ul>
                    <li>Service management as a practice – the concept of good practice, the concept of a service, the concept of service management, define roles, processes and functions</li>
                    <li>The Service Lifecycle – The service lifecycle and its key concepts, the business value of the phases of the lifecycle</li>
                    <li>Key Concepts and Definitions – Key terminology of service management, key principles and models</li>
                    <li>Service Strategy – The four main activities of service strategy, the main goals and objectives of service strategy, basic overview of value creation through services, overview of the five service strategy processes</li>
                    <li>Service Design – The importance of people, processes, products and partners, the five major aspects of service design, different sourcing approaches and options, overview of the seven service design processes</li>
                    <li>Service Transition – The service V model, overview of the five service transition processes</li>
                    <li>Service Operation – IT service versus technology components, quality of service versus costs of service, reactive versus proactive, overview of the five key service operation processes</li>
                    <li>Continual Service Improvement – Objectives of continual service improvement, the seven step improvement process</li>
                    <li>Functions – The service desk, technical management, application management, IT operations management</li>
                    <li>Roles – The role of the process owner, the role of a service owner, the role of the RACI model in determining organisational structure</li>
                    <li>Technology and Architecture – Requirements for an integrated set of service management technology, how service automation assists with integrated processes</li>

                </ul>

            </div>
        </div>
    </div>
</section>

<section class="services-details-area pb-100">
    <div class="container">
        <div class="wrapper">
            <div id="scrum-container">
                <h1>ITIL Foundation</h1>
                <h2>What you will learn:</h2>
                <p>The ITIL<sup>®</sup> Foundation Certificate is a three day course in which delegates will gain a comprehensive grounding in the aspects of ITIL<sup>®</sup> service management. Delegates will prepare for and sit the one hour, multiple- choice ITIL® Foundation certificate in service management exam. The course consists of short lectures, exercises, discussions, examination technique training, mock examinations and culminates in an invigilated exam on the third day.</p>
                <p>Effective and formal IT Service Management will give an organization a clear view of its IT capabilities. It will give the IT department a clear understanding of the customer's needs, drivers and motivation. The interlocking IT Service Management disciplines will allow the needs of the customer to be matched by the capability of the services being offered.</p>
                <p>In documenting best practice ITIL has laid before us a professional approach to the provision of IT services. In the ITIL world measurement and monitoring are critical. We are able to focus on the needs of the business and to measure the performance of the services offered, reviewing and improving on a continual basis.</p>
                <p>Critical among costs the Service Management disciplines is Availability Management. If services are not available then it's not a service. All the service support and service delivery disciplines work together to deliver agreed levels of service availability to our customers.</p>
                <p>Delivery of service availability to meet customer needs benefits the whole organization. Customer satisfaction is greatly increased, as is the motivation of those staff involved in service provision.</p>
                <p>Overall, professional IT Service Management disciplines will deliver improved quality of service to customers enabling the business to reduce costs, derive higher revenues and hence increased profit.</p>
                <p>This course leads to the ITIL<sup>®</sup> Foundation level certification. Delegates are prepared for the Foundation examination and will normally take this examination on the third day of the course. The Foundation qualification is a pre-requisite for the ITIL Intermediate examinations.</p>
                <p>The ITIL Foundation examination is a closed- book 60 minute 40 multiple choice question paper. The pass mark is 65% (26 marks required to pass out of 40 available).</p>
                <h2>Audience Profile</h2>
                The target groups of the ITIL<sup>®</sup> Foundation Certificate are:
                <ul>
                    <li>Individuals who require a basic understanding of the refreshed ITIL<sup>®</sup> framework and how it may be used to enhance the quality of IT service management within an organization.</li>
                    <li>IT professionals that are working within an organization that has adopted and adapted ITIL<sup>®</sup>, who need to be informed about and thereafter contribute to, an ongoing service improvement program.</li>
                </ul>
                <h2>Prerequisites</h2>
                <p>There are no pre-requisites for this course, nor is there any pre-course preparation required. Evening work is not compulsory, although it may benefit delegates to ensure they have consolidated each day's learning through reading and checking notes. This should take no longer than an hour each evening, although further self-study is encouraged.</p>
                <p><strong>Course Learning Objectives</strong></p>
                <ul>
                    <li>To provide a basic understanding of the ITIL framework</li>
                    <li>To understand how ITIL can be used to enhance the quality of IT service management within an organization</li>
                    <li>To enable comprehension and / or awareness of key areas of the 5 ITIL core books:
                        <ul>
                            <li>Service Strategy, Service Design, Service Transition, Service Operation and Continual Service Improvement</li>
                        </ul>
                    </li>
                    <li>To prepare to sit the ITIL Foundation Exam</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection