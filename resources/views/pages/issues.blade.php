@extends('layout.app')
@section('content')
    <section class="row mx-2 shadow">
        <div class="accordion py-3" id="accordionPanelsStayOpenExample">
            <div class="accordion-item border-0">
                <h3 class="accordion-header" style="border: none;">
                    <button class="accordion-button py-3 border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        <H6 style="font-size: 30px;  color: #0072bb;"> EDUCATION </H6>
                    </button>
                </h3>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        <hr style="color: red;">
                        <div class="row featurette">
                            <div class="col-md-7 order-md-2 order-lg-2">
                                <p>
                                    Education is the bedrock of a thriving society, and in Atwima Nwabiagya North,
                                    we recognize the need for significant improvements in our educational system.
                                    Our district is home to bright and talented young minds, but unfortunately, many
                                    face challenges in accessing quality education. Limited school facilities,
                                    shortage of skilled teachers, and insufficient learning resources hinder their
                                    academic growth.
                                    To address this, our campaign is committed to investing in education. We will
                                    work tirelessly to upgrade school infrastructure, ensuring that every child has
                                    access to a conducive learning environment. By recruiting and training more
                                    qualified teachers, we can enhance the quality of education and inspire a love
                                    for learning among our students.
                                </p>
                            </div>
                            <div class="col-md-5 order-md-1 order-lg-1">
                                <img src="{{ url('assets/images/issues/education.jpg') }}"
                                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                                    width="500" height="500" alt="...">
                            </div>
                            <div class="col order-md-3 order-lg-3">
                                <p>
                                    Moreover, we will advocate for the provision of essential teaching materials,
                                    including textbooks and learning aids, to enhance the learning experience. Our
                                    goal is to empower our youth with the knowledge and skills they need to thrive
                                    in the modern world and become leaders of tomorrow.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item border-0">
                <h2 class="accordion-header">
                    <button class="accordion-button py-3 collapsed d-flex" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                        <H6 style="font-size: 30px;   color: #0072bb;"> HEALTH <br> </H6>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <hr style="color: red;">
                        <div class="row featurette">
                            <div class="col-md-7 order-md-2 order-lg-2">
                                <p>
                                    The health and well-being of our residents are paramount, and we are fully aware
                                    of the challenges our district faces in providing adequate healthcare services.
                                    Many of our fellow citizens, especially those in remote areas, struggle to
                                    access medical facilities and qualified healthcare professionals.
                                    As part of our campaign's vision, we aim to transform healthcare in Atwima
                                    Nwabiagya North. We will focus on improving healthcare infrastructure, including
                                    the construction and renovation of clinics and health centers. By bringing
                                    quality medical services closer to our communities, we can ensure timely access
                                    to healthcare.
                                </p>
                            </div>
                            <div class="col-md-5 order-md-1 order-lg-1">
                                <img src="{{ url('assets/images/issues/health.jpg') }}"
                                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                                    width="500" height="500" alt="...">
                            </div>
                            <div class="col order-md-3 order-lg-3">
                                <p>
                                    Furthermore, we will work to attract and retain skilled medical personnel to
                                    serve in our district. Adequate medical supplies and equipment are also
                                    essential to ensure that our residents receive top-notch healthcare services.
                                    Through these efforts, we aspire to promote good health and well-being among our
                                    people.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item border-0">
                <h2 class="accordion-header">
                    <button class="accordion-button py-3 collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        <H6 style="font-size: 30px;  color: #0072bb;"> AGRICULTURE </H6>
                    </button>
                </h2>

                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <hr style="color: red;">
                        <div class="row featurette">
                            <div class="col-md-7 order-md-2 order-lg-2">
                                <p>
                                    Agriculture forms the backbone of our district's economy, and we are committed
                                    to transforming this sector for sustainable growth. Despite its significance,
                                    farmers in Atwima Nwabiagya North face numerous challenges, including limited
                                    access to modern farming techniques, insufficient irrigation systems, and
                                    post-harvest losses.

                                    Our campaign will focus on empowering our farmers with the resources they need
                                    to thrive. By providing them with access to modern agricultural practices,
                                    high-quality seeds, and fertilizers, we can increase agricultural productivity
                                    and boost yields.

                                </p>
                            </div>
                            <div class="col-md-5 order-md-1 order-lg-1">
                                <img src="{{ url('assets/images/issues/agriculture.jpg') }}"
                                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                                    width="500" height="500" alt="...">
                            </div>
                            <div class="col order-md-3 order-lg-3">
                                <p>
                                    Additionally, we recognize the importance of irrigation systems in ensuring
                                    consistent crop growth. Our commitment to upgrading irrigation facilities will
                                    lead to enhanced water management and a more resilient agricultural sector.
                                <p>
                                    Furthermore, we aim to invest in post-harvest handling facilities to reduce
                                    losses and enhance the value of our agricultural produce. By supporting our
                                    farmers, we can enhance food security and create a thriving rural economy. </p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion Item #4 -->
            <div class="accordion-item border-0">
                <h2 class="accordion-header">
                    <button class="accordion-button py-3 collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseFour">
                        <h6 style="font-size: 30px;  color: #0072bb; ">INFRASTRUCTURE</h6>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <hr style="color: red;">
                        <div class="row featurette">
                            <div class="col-md-7 order-md-2 order-lg-2">
                                <p>
                                    Atwima Nwabiagya North's progress and prosperity hinge on the strength of our
                                    infrastructure. Better roads, bridges, and transportation networks are essential
                                    for economic growth and development. However, we acknowledge that some areas in
                                    our district lack the necessary infrastructure to fully unleash their potential.

                                    Our campaign is determined to prioritize infrastructure development. By
                                    investing in road construction and maintenance, we can enhance connectivity and
                                    accessibility within our district. This will not only foster trade and commerce
                                    but also create employment opportunities for our people.
                                </p>
                                <p>
                                    In addition, we aim to build and upgrade bridges to improve transportation and
                                    connect communities. By investing in essential infrastructure projects, we can
                                    unlock new opportunities and promote overall development in Atwima Nwabiagya
                                    North.
                                </p>
                            </div>
                            <div class="col-md-5 order-md-1 order-lg-1">
                                <img src="{{ url('assets/images/issues/infractructures.jpg') }}"
                                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                                    width="500" height="500" alt="...">
                            </div>
                            <div class="col order-md-3 order-lg-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion Item #5 -->
            <div class="accordion-item border-0">
                <h2 class="accordion-header">
                    <button class="accordion-button py-3 collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseFive">
                        <h6 style="font-size: 30px;  color: #0072bb;">JOBS</h6>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <hr style="color: red;">
                        <div class="row featurette">
                            <div class="col-md-7 order-md-2 order-lg-2">
                                <p>
                                    Unemployment is a pressing concern for our district, and we are committed to
                                    addressing this issue head-on. Our campaign believes that job creation is key to
                                    unlocking the full potential of our district's workforce.

                                    To achieve this, we will focus on promoting entrepreneurship and attracting
                                    investments to our district. By supporting local businesses and industries, we
                                    can create more job opportunities for our youth and reduce the unemployment
                                    rate.
                                </p>
                                <p>
                                    Furthermore, we will invest in skill development programs to equip our young
                                    talents with the expertise required in various fields. By nurturing a skilled
                                    workforce, we can attract more industries and encourage economic growth.
                                </p>
                                <p>
                                    Together, these efforts will empower our residents with meaningful employment
                                    and enable them to contribute to the prosperity of Atwima Nwabiagya North.
                                </p>
                            </div>
                            <div class="col-md-5 order-md-1 order-lg-1">
                                <img src="{{ url('assets/images/issues/jobs.jpg') }}"
                                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                                    width="500" height="500" alt="...">
                            </div>
                            <div class="col order-md-3 order-lg-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion Item #7 -->
            <div class="accordion-item border-0">
                <h2 class="accordion-header">
                    <button class="accordion-button py-3 collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseSeven">
                        <h6 style="font-size: 30px; color: #0072bb; border-radius: 0%;" id="title">SOCIAL
                            PROTECTION</h6>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <hr style="color: red;">
                        <div class="row featurette">
                            <div class="col-md-7 order-md-2 order-lg-2">
                                <p>
                                    Our campaign firmly believes in the principle of leaving no one behind. We
                                    understand that some members of our community are vulnerable and require social
                                    protection to thrive.
                                    To ensure the well-being of all our residents, we will implement robust social
                                    safety nets. These social safety nets will encompass various programs designed
                                    to provide support to those facing challenging circumstances. Among these
                                    initiatives are social assistance programs and comprehensive health insurance
                                    coverage. Additionally, we will prioritize schemes that cater to the needs of
                                    the elderly and differently-abled individuals.
                                    By fostering a caring and inclusive society, we can uplift those who need our
                                    help the most and create an environment where everyone can flourish.
                                </p>
                            </div>
                            <div class="col-md-5 order-md-1 order-lg-1">
                                <img src="{{ url('assets/images/issues/social_proetction.jpg') }}"
                                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                                    width="500" height="500" alt="...">
                            </div>
                            <div class="col order-md-3 order-lg-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.scroll-top')
@endsection
