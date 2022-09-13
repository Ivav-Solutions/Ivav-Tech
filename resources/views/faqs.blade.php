@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('page-content')
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>FAQs</h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li class="active">FAQs</li>
            </ul>
        </div>
    </div>
</div>
<div class="choose-area ptb-100">
    <div class="container">
        <div class="section-title">
            <div class="section-title"><span>FAQs</span>
                <h2>Frequently Asked Questions</h2>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12">
                <div class="choose-content">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne" >
                                <button style="font-size: 18px; font-weight: 600;" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What does {{config('app.name')}} do?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Basically, we provide custom made IT solutions for clients in different industries. Secondly, we train those interested in acquiring tech skills till they become experts and lastly, we assist businesses and individuals by offering consultation sessions where we identify their IT needs and proffer the best guidance.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What product can {{config('app.name')}} build for me?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We develop software tailored to your business needs and we build a fully controlled website that accommodates all your personal or business offerings.    
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    My website and app are not functioning properly, how can {{config('app.name')}} help?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    When you book a consultation session with us, our representative will schedule a call with you and audit the affected digital platform to understand what exactly is wrong. Once the problem is ascertained, we will present a probable solution and start work on it immediately.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How can I ensure my website or software is up-to-date?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   {{config('app.name')}} doesn't just build websites, develop software or train upcoming tech gurus. We also provide routine maintenance for your digital platforms to ensure all parts function optimally.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    What technologies do {{config('app.name')}} use in development?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We employ a variety of programming options e.g. Java, JavaScript. Python etc. to provide the best solution and our team which consists of highly experienced and sort after professionals help in deploying these technologies.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How long does it take {{config('app.name')}} to build a custom made website?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    There are different websites with different scopes and complexities. So, there's no 'one cap fits all' duration for all the websites we build. However, a website development project will not take more than a month before it's delivered to you.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    How long does it take {{config('app.name')}} to develop a software?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Just like a website, there's no particular duration for the completion of all categories of software but we can guarantee that you will have it handed over to you before the end of a calendar month.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    What's the duration of {{config('app.name')}}'s training?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The duration of training depends on the course you opt-in for. However, the maximum completion time for our courses is 6 months.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    What IT Courses Can I be trained on?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    With us you can learn and become proficient in Software Development, Web Development, Full stack Development etc. Also, you can learn individual programming languages such as Python, PHP, Java, JavaScript, HTML, CSS, React Node, React JS and so on.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    How will the course material be delivered?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    All our courses are delivered online which means you can access them at any time and at your preferred location.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEleven">
                                <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    Can I trust the quality of the training?
                                </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Absolutely! Our courses are taught by industry practitioners who will not only impact you with theoretical concepts but also take you through the rigours of practicals so that you can be equipped for real world problems.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection