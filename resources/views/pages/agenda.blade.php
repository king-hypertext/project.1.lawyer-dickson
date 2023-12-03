@extends('layout.app')
@section('content')
    <div class="row mx-2 pt-2 pb-3 shadow">
        <h6 class="h5 fw-semi-normal text-info shadow text-center py-4 display-6">
            Welcome to JEHDU - Jobs, Education, Health, Development, and Unity!
        </h6>
        <h6 class="h6">
            At JEHDU, our mission is rooted in creating a brighter future for all, with a strong focus on five essential
            pillars: Jobs, Education, Health, Development, and Unity. We believe that these pillars form the foundation of a
            prosperous and inclusive society, where every individual can thrive and contribute to the collective growth of
            our community.

        </h6>
        <div class="container-fluid py-2">
            <ol class="my-2">
                <li class="py-2">
                    <b class="text-uppercase d-block" style="color: #0072bb">Jobs:</b>
                    Our commitment to creating opportunities for economic growth is unwavering. We strive to foster an
                    environment that empowers entrepreneurs and businesses, generating more jobs and better livelihoods for
                    our constituents. By attracting investments and supporting local enterprises, we aim to reduce
                    unemployment and create a thriving job market.
                </li>
                <li class="py-2">
                    <b class="text-uppercase d-block" style="color: #0072bb">Education</b>
                    Education is the cornerstone of progress and advancement. At JEHDU, we are dedicated to improving access
                    to quality education, ensuring that every child has the chance to fulfill their potential. From early
                    childhood development to higher education, we will work tirelessly to equip our youth with the knowledge
                    and skills they need to build a brighter future.
                </li>
                <li class="py-2">
                    <b class="text-uppercase d-block" style="color: #0072bb">
                        Health
                    </b>
                    A healthy population is a strong foundation for any community. We are committed to enhancing healthcare
                    services and promoting preventive measures to ensure the well-being of all our residents. By investing
                    in modern healthcare infrastructure and prioritizing public health initiatives, we aim to create a
                    healthier and more resilient society.

                </li>
                <li class="py-2">
                    <b class="text-uppercase d-block" style="color: #0072bb">
                        development
                    </b>
                    Sustainable development is at the core of our vision. We will work hand in hand with our communities to
                    identify and address their unique needs. From infrastructure projects to environmental conservation, we
                    are dedicated to building a prosperous and resilient district that future generations can be proud of.

                </li>
                <li class="py-2">
                    <b class="text-uppercase d-block" style="color: #0072bb">
                        unity
                    </b>
                    Unity is the force that binds us together. At JEHDU, we value diversity and inclusivity, recognizing
                    that our strength lies in our ability to work together. We will foster a sense of belonging and
                    cooperation, bridging gaps and promoting harmony across all sectors of our community.

                </li>
            </ol>
            <cite class="text-justfy d-block">
                Join us on this journey of transformation, as we strive to turn our vision for Jobs, Education, Health,
                Development, and Unity into a reality. Together, we can build a stronger, more vibrant, and united Atwima
                Nwabiagya North district for everyone. Let's move forward, hand in hand, towards a brighter future for all.
            </cite>
        </div>
    </div>
    @include('components.scroll-top')
@endsection
