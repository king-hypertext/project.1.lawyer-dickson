@extends('layout.app')
@section('content')
    <h6 class="card-title text-center fw-bold text-uppercase h2 py-3 shadow mb-1" style="color: #0072bb">
        DR. LAWYER DICKSON OSEI-ASIBEY
    </h6>
    <div class="row  mx-2 mx-md-3 mx-lg-4 shadow">
        <div class="row mx-2 mb-3">
            <div class="col-md-4 col-sm-4" data-aos="zoom-in">
                <div class="card my-2 border-0">
                    {{-- <div class="card-body"> --}}
                    <img title="Dr. Lawyer Dickson Osei Asibey" data-fancybox data-caption="Dr. Lawyer Dickson Osei Asibey"
                        src="{{ url('assets/images/dr.dickson-001.jpg') }}" alt="" class="img-thumbnail">
                    {{-- </div> --}}
                </div>
            </div>
            <div class="col-md-8 col-sm-8 pt-0 pt-md-5">
                <div style="background-color: inherit !important"
                    class="card my-2 my-0 my-md-4 justify-content-center border-0">
                    {{-- <h5 class="card-title text-center text-info fw-bold text-uppercase h2 pt-0 pt-md-2">
                Biography
            </h5> --}}
                    <div class="card-body">
                        <h6 class="h6 fw-bold text-end">
                            Unveiling a Remarkable Journey
                        </h6>
                        <div class="d-flex justify-content-end">
                            <hr style="opacity: 1; height: 4px;background-color: #222; width: 180px" />
                        </div>
                        <p data-aos="zoom-in">
                            Dr. Dickson Osei-Asibey, Esq., a distinguished native of Atwima Nwabiagya North, Barekese, is a
                            multifaceted professional with an impressive track record in various fields. As an entrepreneur,
                            Development Consultant, Lawyer, experienced educationalist, and Senior Lecturer at the
                            Department of Construction Technology and Management, Kwame Nkrumah University of Science and
                            Technology, Kumasi, he possesses a unique blend of expertise. A man of vision and passion for
                            community development, Dr. Osei-Asibey has selflessly committed himself to exemplary leadership,
                            focusing on professionalism and efficiency in his service to humanity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-2 mb-3">
            <div class="col-md-8 col-sm-8 order-2 order-md-1">
                <div style="background-color: inherit !important"
                    class="card my-2 my-0 my-md-4 justify-content-center border-0">
                    <h6 class="h6 fw-bold text-end">
                        Inspiring Leadership
                    </h6>
                    <div class="d-flex justify-content-end">
                        <hr style="opacity: 1; height: 4px;background-color: #222; width: 180px" />
                    </div>
                    <div class="card-body" id="biography">
                        <p data-aos="zoom-in">
                            He takes pride in his commitment to making a positive impact, evident through his numerous
                            projects, such as the OCADS Educational Centre and Royal Foam, providing employment
                            opportunities for constituents. As President of the Ghana Institute of Construction (GIOC) and a
                            Council Board Member of the Dr. Hilla Limann Technical University (DHLTU), his dedication to
                            education and growth is evident. Driven by his Christian faith, he actively contributes to the
                            well-being of his people, exemplifying the values of integrity and inclusivity. With an
                            impressive academic journey, including a Ph.D. in Construction Management, LLB, and MSc in
                            Construction Management, he is equipped with the knowledge and expertise to address complex
                            challenges. His involvement in professional associations, including the Ghana Institution of
                            Surveyors and Ghana Bar Association, reflects his commitment to continuous learning and
                            professional development.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 order-1 order-md-2" data-aos="zoom-in">
                <div class="card my-2 border-0">
                    {{-- <div class="card-body"> --}}
                    <img title="Dr. Lawyer Dickson Osei Asibey" data-fancybox data-caption="Dr. Lawyer Dickson Osei Asibey"
                        src="{{ url('assets/images/dr.dickson-001.jpg') }}" alt="" class="img-thumbnail">
                    {{-- </div> --}}
                </div>
            </div>
        </div>
        <div class="row mx-2 mb-3">
            <div class="col-md-4 col-sm-4" data-aos="zoom-in">
                <div class="card my-2 border-0">
                    {{-- <div class="card-body"> --}}
                    <img title="Dr. Lawyer Dickson Osei Asibey" data-fancybox data-caption="Dr. Lawyer Dickson Osei Asibey"
                        src="{{ url('assets/images/dr.dickson-001.jpg') }}" alt="" class="img-thumbnail">
                    {{-- </div> --}}
                </div>
            </div>
            <div class="col-md-8 col-sm-8 pt-0 pt-md-5 ">
                <div style="background-color: inherit !important"
                    class="card my-2 my-0 my-md-4 justify-content-center border-0">
                    <h6 class="h6 fw-bold text-end">
                        Unveiling a Remarkable Journey
                    </h6>
                    <div class="d-flex justify-content-end">
                        <hr style="opacity: 1; height: 4px;background-color: #222; width: 180px" />
                    </div>
                    <div class="card-body">
                        <p data-aos="zoom-in">
                            Through his political campaign, Dr. Dickson Osei-Asibey aspires to harness his skills,
                            experience, and passion to lead his constituency towards progress, inclusive growth, and a
                            brighter future for all. His ultimate goal is to represent and serve the people of Atwima
                            Nwabiagya North, fostering unity and prosperity while upholding the values that define his
                            leadership. With a strong focus on education, economic development, and community welfare, Dr.
                            Osei-Asibey seeks to empower the next generation of leaders and create a lasting positive impact
                            on the lives of his fellow citizens. His unwavering dedication to the betterment of the
                            community and commitment to transparent and accountable governance make him an inspiring
                            candidate ready to bring positive change and progress to his beloved constituency.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.scroll-top')
@endsection
@section('script')
    <script>
        AOS.init({
            easing: 'ease-in'
        })
        Fancybox.bind("[data-fancybox='gallery'], [data-fancybox]", {
            // Your custom options
        });
    </script>
@endsection
