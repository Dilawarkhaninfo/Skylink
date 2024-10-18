<!-- resources/views/faq.blade.php -->

@extends('layouts.app')

@section('title', 'Frequently Asked Questions')

@section('content')

<!-- FAQ Start -->
<div class="container-fluid steps py-5">
    <div class="container py-5">

        <!-- Main Title -->
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-5 text-white text-capitalize mb-3">Frequently Asked Questions</h1>
            <p class="mb-0 text-white">See below for our most commonly asked questions. If you'd like to ask anything
                else, please contact us directly.</p>
        </div>

        <!-- FAQ Accordion -->
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        How secure are the car parks?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Look for the ParkMark award. By choosing a Park Mark Safer Parking facility, you will benefit
                        from a car park that has been inspected by a specially trained police officer; uses modern
                        security systems such as alarms and/or CCTV; and is regularly visited and re-assessed for
                        inspections to maintain the Park Mark award.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Do I need to leave my car keys?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        This depends on the car park's service you have booked. Please check the More Info on the
                        website prior to booking and the Important Info on your Booking Confirmation. If you are unsure
                        prior to booking, please contact our customer services team via email or live chat.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What does gate price mean?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Gate price is the term used to mean paying on arrival or onsite. These prices are from 10% to as
                        much as 60% higher than the pre-booked price online.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        What is on-airport car parking?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        This is when the car park is situated within the airport perimeter. On-airport car parking is
                        usually the closest service to the terminal, with the shortest transfer times.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        What is off-airport car parking?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Off-airport car parks are services that operate outside of the airport perimeter and are
                        generally owned by private car parking companies. A shuttle bus is required to take you to and
                        from the airport terminal.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        What is meet and greet/chauffeur/valet parking?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        This is one of the most convenient car parking services — you can simply drive to the airport
                        terminal where you will be met by a fully-insured chauffeur who will take your vehicle to a
                        secure storage facility for the duration of your trip. Your vehicle will be waiting at the
                        terminal on your return. Arrival and departure procedures apply.
                    </div>
                </div>
            </div>

            <!-- Additional sections can be added here, following the same structure -->

        </div>

    </div>
</div>
<!-- FAQ End -->

@endsection