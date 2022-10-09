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
                <li><a href="/service/it_programs">IT Programs</a></li>
                <li class="active">Scrum Program</li>
            </ul>
        </div>
    </div>
</div>

<section class="services-details-area" style="padding-top: 5rem; padding-bottom: 0px;">
    <div class="container">
        <div class="wrapper">
            <div id="scrum-container">
                <h1>Why SCRUM?</h1>
                <div class="media-block-holder">
                    <!-- <iframe class="responsive-iframe" width="640" height="360" src="http://www.youtube.com/embed/aP3TBpWWwJ8?rel=0" frameborder="0" allowfullscreen></iframe> -->
                    <video style="width: 100%" height="360" controls>
                        <source src="{{URL::asset('SCRUM in 6 minutes.mp4')}}" type="video/mp4">
                        <source src="{{URL::asset('SCRUM in 6 minutes.ogg')}}" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <p>Scrum is one of the most popular agile methodologies. It is an adaptive, iterative, fast, flexible, and effective methodology designed to deliver significant value quickly and throughout a project. Scrum ensures transparency in communication and creates an environment of collective accountability and continuous progress. The Scrum framework, as defined in the SBOK&trade; Guide, is structured in such a way that it supports product and service development in all types of industries and in any type of project, irrespective of its complexity.</p>
                <p>A key strength of Scrum lies in its use of cross-functional, self-organized, and empowered teams who divide their work into short, concentrated work cycles called Sprints.</p>
                <p>Traditional project management emphasizes on conducting detailed upfront planning for the project with emphasis on fixing the scope, cost and schedule - and managing those parameters. Whereas, Scrum encourages data-based, iterative decision making in which the primary focus is on delivering products that satisfy customer requirements.</p>
                <p>To deliver the greatest amount of value in the shortest amount of time, Scrum promotes prioritization and Time-boxing over fixing the scope, cost and schedule of a project. An important feature of Scrum is self-organization, which allows the individuals who are actually doing the work to estimate and take ownership of tasks.</p>
            </div>
        </div>
    </div>
</section>

<section class="services-details-area" style="padding-top: 5rem; padding-bottom: 0px;">
    <div class="container">
        <div class="wrapper">
            <div id="scrum-container">
                <h1>SBOK&trade; Guide First Chapter</h1>
                <p>A Guide to the Scrum Body of Knowledge (SBOK&trade;) provides guidelines for the successful implementation of Scrum—the most popular Agile project management and product development methodology. It provides a comprehensive framework that includes the principles, aspects, and processes of Scrum.</p>
                <p>Scrum, as defined in the SBOK&trade;, is applicable to the following:</p>
                <ul>
                    <li>Portfolios, programs, and/or projects in any industry</li>
                    <li>Products, services, or any other results to be delivered to stakeholders</li>
                    <li>Projects of any size or complexity</li>
                </ul>
                <p>The term 'product' in this Body of Knowledge may refer to a product, service, or other deliverable. Scrum can be applied effectively to any project in any industry—from small projects or teams with as few as six team members to large, complex projects with up to several hundred team members. This first chapter describes the purpose and framework of the SBOK&trade;&nbsp;Guide and provides an introduction to the key concepts of Scrum. It contains a summary of Scrum principles, Scrum aspects, and Scrum processes.</p>
                <p>The following sections are covered in this chapter.</p>
                <ul>
                    <li>Overview of Scrum</li>
                    <li>Why Use Scrum?</li>
                    <li>Purpose of the SBOK&trade;&nbsp;Guide</li>
                    <li>Framework of the SBOK&trade;&nbsp;Guide</li>
                    <li>Scrum vs. Traditional Project Management</li>
                </ul>
                <div class="scrum-action-box">
                    <a href="http://www.scrumstudy.com/Chapter%201%20(Introduction).pdf" class="scrum-btn" style="float:right">Click Here</a>
                    <p><strong>Download the first chapter</strong></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-details-area" style="padding-top: 5rem; padding-bottom: 0px;">
    <div class="container">
        <div class="wrapper">
            <div id="scrum-container">
                <h1>SCRUM increases ROI</h1>
                <p>One of the key characteristics of any project is the uncertainty of results or outcomes. It is impossible to guarantee project success at completion, irrespective of the size or complexity of a project. Considering this uncertainty of achieving success, it is therefore important to start delivering results as early in the project as possible. This early delivery of results, and thereby value, provides an opportunity for reinvestment and proves the worth of the project to interested stakeholders. It is important to:</p>
                <ul>
                    <li>Understand what adds value to customers and users and to prioritize the high value requirements on the top of the Prioritized Product Backlog.</li>
                    <li>Decrease uncertainty and constantly address risks that can potentially decrease value if they materialize. Also work closely with project stakeholders showing them product increments at the end of each Sprint, enabling effective management of changes.</li>
                    <li>Create Deliverables based on the priorities determined by producing potentially shippable product increments during each Sprint so that customers start realizing value early on in the project.</li>
                </ul>
                <p>Some of the key differences with respect to Value-driven Delivery in Scrum project and Traditional projects are given in the figure below. </p>
                <div class="media-block-holder"> <img src="{{URL::asset('images/scrum-improves-roi.png')}}" height="340" width="445" alt="Description" /> </div>
                <p>In Scrum projects, User Stories are ranked in order of priority which is an effective method for determining the desired User Stories for each iteration or release of the product or service. The purpose is to create a simple, single list with the goal of prioritizing features, rather than being distracted by multiple prioritization schemes.</p>
                <p>This simple list also provides a basis for incorporating changes and identified risks when necessary. Each change or identified risk can be inserted in the list based on its priority relative to the other User Stories in the list. Typically, new changes will be included at the expense of features that have been assigned a lower priority.</p>
                <p>Minimum Marketable Features (MMF) are also defined, so that the first release or iteration happens as early as possible, leading to increased ROI.</p>

            </div>
        </div>
    </div>
</section>

<section class="services-details-area" style="padding-top: 5rem; padding-bottom: 0px;">
    <div class="container">
        <div class="wrapper">
            <div id="scrum-container">
                <h1>Guide to Scrum Body of Knowledge</h1>
                <h2>Overview</h2>
                <p>The SBOK&trade;&nbsp;Guide was developed as a means to create a necessary guide for organizations and project management practitioners who want to implement Scrum, as well as those already doing so who want to make needed improvements to their processes. It is based on experience drawn from thousands of projects across a variety of organizations and industries. The contributions of many Scrum experts and project management practitioners have been considered in its development. </p>
                <p>A Guide to the Scrum Body of Knowledge (SBOK<sup>&trade;</sup> Guide) provides guidelines for the successful implementation of Scrum—the most popular Agile product development and project delivery methodology. Scrum, as defined in the SBOK&trade; Guide, is applicable to the following:</p>
                <ul>
                    <li>Portfolios, programs, and/or projects in any industry</li>
                    <li>Products, services, or any other results to be delivered to stakeholders</li>
                    <li>Projects of any size or complexity</li>
                </ul>
                <p>The SBOK&trade; Guide can be used as a reference and knowledge guide by both experienced Scrum and other product and service development practitioners, as well as by individuals with no prior experience or knowledge of Scrum or other project delivery methodology. The first chapter of the SBOK&trade; Guide describes the purpose and framework of the SBOK&trade; Guide and provides an introduction to the key concepts of Scrum. It contains a summary of Scrum principles, Scrum aspects and Scrum processes. Chapter 2 expands on the six Scrum principles which are the foundation on which the Scrum framework is based. Chapters 3 through 7 elaborate on the five Scrum aspects that must be addressed throughout any project: organization, business justification, quality, change, and risk. Chapters 8 through 12 cover the 19 Scrum processes involved in carrying out a Scrum project. These processes are part of the 5 Scrum phases: Initiate; Plan and Estimate; Implement; Review and Retrospect; and Release. These phases describe in detail the associated inputs and outputs of each process, as well as the various tools that may be used in each.</p>
                <h2>Usage</h2>
                <p>The SBOK&trade;&nbsp;Guide is especially valuable:
                <ul>
                    <li>to Scrum Core Team members including:</li>
                    <ul>
                        <li>Product Owners who want to fully understand the Scrum framework and particularly the customer/stakeholder-related concerns involving business justification, quality, change, and risk aspects associated with Scrum projects</li>
                        <li>Scrum Masters who want to learn their specific role in overseeing the application of Scrum framework to Scrum projects</li>
                        <li>Scrum Team members who want to better understand Scrum processes and the associated tools that may be used to create the project&rsquo;s product or service</li>
                    </ul>
                    <li>as a comprehensive guide for all Scrum practitioners working on Scrum projects in any organization or industry</li>
                    <li>as a reference source for anyone interacting with the Scrum Core Team, including but not limited to the Portfolio Product Owner, Portfolio Scrum Master, Program Product Owner, Program Scrum Master, Scrum Guidance Body, and Stakeholders (i.e., sponsor, customer, and users)</li>
                    <li>as a knowledge source for any person who has no prior experience or knowledge of Scrum framework but wants to learn in details about the subject</li>
                    <li>The contents of the SBOK&trade;&nbsp;Guide are also helpful for individuals preparing to write the following SCRUMstudy&trade;&nbsp;certification exams:</li>
                    <li>Scrum Developer Certified (SDC&trade;)</li>
                    <li>Scrum Master Certified (SMC&trade;)</li>
                    <li>SCRUMstudy Agile Master Certified (SAMC&trade;)</li>
                    <li>Scrum Product Owner Certified (SPOC&trade;)</li>
                    <li>Expert Scrum Master (ESM
                        &trade;) </li>
                </ul>
                <div class="buy-sbok">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="sbok-cover" style="float:left"><img src="{{URL::asset('images/sbok-book.png')}}" width="240" /></div>    
                        </div>
                        <div class="col-lg-6">
                            <div class="sbok-value">
                                <h3>A Guide to the Scrum Body of Knowledge</h3>
                                <ul class="scrum-no-list">
                                    <li>Price: $ 35.95 (includes free global shipping)</li>
                                    <li>Number of Pages: 340</li>
                                    <li>ISBN: 978-0-9899252-0-4</li>
                                    <li>Date Published: 2013</li>
                                    <li>Subject: A Comprehensive Guide to Deliver Projects using Scrum</li>
                                    <li>Publisher: VMEdu, Inc.</li>
                                    <li>Author: SCRUMstudy</li>
                                </ul>
                                <a href="http://www.scrumstudy.com/buy-sbok.asp" target="_blank" class="scrum-btn" style="margin-right:20px">Buy Now</a><a href="http://www.scrumstudy.com/Chapter%201%20(Introduction).pdf" class="scrum-btn">Sample Chapter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-details-area" style="padding-top: 5rem; padding-bottom: 0px;">
    <div class="container">
        <div class="wrapper">
            <div id="scrum-container">
                <h1>SCRUM Videos</h1>
                <div class="youtube-list">
                    <div class="yt-list">
                        <!-- <iframe width="320" height="180" src="http://www.youtube.com/embed/bNwGXrSIoyU?rel=0" frameborder="0" allowfullscreen></iframe> -->
                        <video style="width: 100%" height="180" controls>
                            <source src="{{URL::asset('8. How to use SBOK™ Guide_.mp4')}}" type="video/mp4">
                            <source src="{{URL::asset('8. How to use SBOK™ Guide_.ogg')}}" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                        <div class="yt-description">
                            <h4>How to use SBOK Guide</h4>
                            <p>The SBOK&trade; Guide was developed as a means to create a necessary guide for organizations and project management practitioners who want to implement Scrum, as well as those already doing so who want to make needed improvements to their processes. It is based on experience drawn from thousands of projects across a variety of organizations and industries. The contributions of many Scrum experts and project management practitioners have been considered in its development.</p>
                        </div>
                    </div>
                    <div class="yt-list">
                        <!-- <iframe width="320" height="180" src="http://www.youtube.com/embed/yq2OcJIPIW0?rel=0" frameborder="0" allowfullscreen></iframe> -->
                        <video style="width: 100%" height="180" controls>
                            <source src="{{URL::asset('Scrum Study_Why get certified in SCRUM.mp4')}}" type="video/mp4">
                            <source src="{{URL::asset('Scrum Study_Why get certified in SCRUM.ogg')}}" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                        <div class="yt-description">
                            <h4>Why get certified in SCRUM</h4>
                            <p>Scrum is one of the most popular Agile methodologies. It is an adaptive, iterative, fast, flexible, and effective methodology designed to deliver significant value quickly and throughout a project. Scrum ensures transparency in communication and creates an environment of collective accountability and continuous progress. A key strength of Scrum lies in its use of cross-functional, self-organized, and empowered teams who divide their work into short, concentrated work cycles called Sprints.</p>
                        </div>
                    </div>
                    <div class="yt-list">
                        <!-- <iframe width="320" height="180" src="http://www.youtube.com/embed/KQb4VeE3iI0?rel=0" frameborder="0" allowfullscreen></iframe> -->
                        <video style="width: 100%" height="180" controls>
                            <source src="{{URL::asset('9. Scrum Principles.mp4')}}" type="video/mp4">
                            <source src="{{URL::asset('9. Scrum Principles.ogg')}}" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                        <div class="yt-description">
                            <h4>Scrum Principles </h4>
                            <p>Scrum principles are the core guidelines for applying the Scrum framework and should mandatorily be used in all Scrum projects. They are non-negotiable and must be applied as specified in the SBOK&trade;. Keeping the principles intact and using them appropriately instils confidence in the Scrum framework with regard to attaining the objectives of the project.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="home-service-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="single-service">
                    <a href="/service/it_programs/scrum_program/Scrum Master Certified (SMC™)">
                        <div class="service-img"><img src="{{URL::asset('images/favicon.png')}}" alt="service" /></div>
                        <div class="service-content">
                            <h3>Scrum Master Certified (SMC™)</h3>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="single-service">
                    <a href="/service/it_programs/scrum_program/Scrum Developer Certified (SDC™)">
                        <div class="service-img"><img src="{{URL::asset('images/favicon.png')}}" alt="service" /></div>
                        <div class="service-content">
                            <h3 class="ml-4 mr-4">Scrum Developer Certified (SDC™)</h3>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="single-service">
                    <a href="/service/it_programs/scrum_program/Scrum Product Owner Certified (SPOC™)">
                        <div class="service-img"><img src="{{URL::asset('images/favicon.png')}}" alt="service" /></div>
                        <div class="service-content">
                            <h3>Scrum Product Owner Certified (SPOC™)</h3>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="single-service">
                    <a href="/service/it_programs/scrum_program/SCRUMstudy Agile Master Certified (SAMC™)">
                        <div class="service-img"><img src="{{URL::asset('images/favicon.png')}}" alt="service" /></div>
                        <div class="service-content">
                            <h3>SCRUMstudy Agile Master Certified (SAMC™)</h3>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="single-service">
                    <a href="/service/it_programs/scrum_program/Expert Scrum Master (ESM™)">
                        <div class="service-img"><img src="{{URL::asset('images/favicon.png')}}" alt="service" /></div>
                        <div class="service-content">
                            <h3>Expert Scrum Master (ESM™)</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="services-details-area" style="padding-top: 5rem; padding-bottom: 50px;">
    <div class="container">
        <div class="wrapper">
            <div id="scrum-container">
                <h1>Scrum Vs Traditional PM</h1>
                <p>Traditional project management emphasizes on conducting detailed upfront planning for the project with emphasis on fixing the scope, cost and schedule - and managing those parameters. Whereas, Scrum encourages data-based, iterative decision making in which the primary focus is on delivering products that satisfy customer requirements.</p>
                <p>To deliver the greatest amount of value in the shortest amount of time, Scrum promotes prioritization and Time-boxing over fixing the scope, cost and schedule of a project. An important feature of Scrum is self-organization, which allows the individuals who are actually doing the work to estimate and take ownership of tasks.</p>
                <p>Following table summarizes many of the differences between Scrum and traditional project management: </p>
                <div style="overflow-x:auto;">
                    <table width="100%" class="comparison-table" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <th width="20%">Parameters</th>
                                <th width="14%">Scrum</th>
                                <th width="14%">Traditional Project Management</th>
                            </tr>
                            <tr class="odd">
                                <td>Emphasis is on</td>
                                <td>People</td>
                                <td>Processes</td>
                            </tr>
                            <tr>
                                <td>Documentation</td>
                                <td>Minimal - only as required</td>
                                <td>Comprehensive</td>
                            </tr>
                            <tr class="odd">
                                <td>Process style</td>
                                <td>Iterative</td>
                                <td>Linear</td>
                            </tr>
                            <tr>
                                <td>Upfront planning</td>
                                <td>Low</td>
                                <td>High</td>
                            </tr>
                            <tr class="odd">
                                <td>Prioritization of Requirements</td>
                                <td>Based on business value and regularly updated</td>
                                <td>Fixed in the Project Plan</td>
                            </tr>
                            <tr>
                                <td>Quality assurance</td>
                                <td>Customer centric</td>
                                <td>Process centric</td>
                            </tr>
                            <tr class="odd">
                                <td>Organization</td>
                                <td>Self-organized</td>
                                <td>Managed</td>
                            </tr>
                            <tr>
                                <td>Management style</td>
                                <td>Decentralized</td>
                                <td>Centralized</td>
                            </tr>
                            <tr class="odd">
                                <td>Change</td>
                                <td>Updates to Productized Product Backlog</td>
                                <td>Formal Change Management System</td>
                            </tr>
                            <tr>
                                <td>Leadership</td>
                                <td>Collaborative, Servant Leadership</td>
                                <td>Command and control</td>
                            </tr>
                            <tr class="odd">
                                <td>Performance measurement</td>
                                <td>Business value</td>
                                <td>Plan conformity</td>
                            </tr>
                            <tr>
                                <td>Return on Investment</td>
                                <td>Early/throughout project life</td>
                                <td>End of project life</td>
                            </tr>
                            <tr class="odd">
                                <td>Customer involvement</td>
                                <td>High throughout the project</td>
                                <td>Varies depending on the project lifecycle</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection