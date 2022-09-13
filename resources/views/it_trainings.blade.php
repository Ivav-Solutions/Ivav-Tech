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
                <li class="active">IT Trainings</li>
            </ul>
        </div>
    </div>
</div>
<section class="home-case pt-100">
    <div class="container">
        <div class="section-title">
            <h2>Become an IT expert - boost your relevance in this fast-paced world and earn your dream income.</h2>
            <div class="row">
                <div class="col-12">
                    <p>Organizations in the private and public sectors are passionately sourcing for proficient IT solution providers to enhance their efficiency and maximize profit. </p>

                    <p>Choose your preferred training from the options below and get started immediately. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="services-details-area pt-80 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="services-details-text">
                    <h2>Scrum Master Certification</h2>
                    <p>Scrum is a framework that helps teams work together. Much like a rugby team (where it gets its name) training for the big game, scrum encourages teams to learn through experiences, self-organize while working on a problem, and reflect on their wins and losses to continuously improve.</p>
                    <p>
                        As a scrum master, you will coordinate a project, guide a result-oriented team together with the product owner, and ensure the team members follow agile best practices. 

                        This interactive and activity-based training will equip you with the comprehensive understanding of professional scrum and what a scrum master's responsibilities are.

                        At the end of this training, you will be certified to lead agile-minded teams and achieve the goals of different projects you undertake.  
                    </p>
                    <p>
                        While the scrum I’m talking about is most frequently used by software development teams, its principles and lessons can be applied to all kinds of teamwork. This is one of the reasons scrum is so popular. Often thought of as an agile project management framework, 
                        scrum describes a set of meetings, tools, and roles that work in concert to help teams structure and manage their work.
                    </p>
                    <p>
                        At {{config('app.name')}}, We have specialized, reputable and experienced instructors who will take you from the basics of Scrum to the point where you will be able to manage large teams, take on complex projects, and achieve outstanding results. All for discounted prices.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services-details-area pt-80 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="services-details-text">
                    <h2>Software Development</h2>
                    <p>Become a problem-solving expert through the development of software.  
                        This training will expose you to all that's required to build web and software applications.</p>
                    <p>Upon the completion of this training, you will fully understand the development of software from its inception to testing and maintenance.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services-details-area pt-80 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="services-details-text">
                    <h2>Project Management</h2>
                    <p>Build a lucrative career in project management by improving your ability to manage team and resources efficiently. </p>
                    <p>In this exercise-based training, you will learn how to marshal the right knowledge, skills, tools, and techniques to carry out several tasks to achieve project objectives in a given time and budget.<p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services-details-area pt-80 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="services-details-text">
                    <h2>Business Analysis</h2>
                    <p>Business analysts are highly sought-after professionals in today's data-driven business environment. Basically, they identify areas of improvement for a business in order to maximize its productivity. </p>
                    <p>
                        So, this training which is facilitated by industry experts will help you build the skills needed for a successful career. 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services-details-area pt-80 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="services-details-text">
                    <h2>Digital Marketing</h2>
                    <p>Marketing is at the centre of the growth strategy of businesses and a digital marketing expert helps to facilitate the promotion of business offerings on different digital touch points. </p>
                    <p>
                        In this practical training, be prepared to discover and learn online marketing best practices and strategies. This exposure will make you job-ready upon completion.  
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection