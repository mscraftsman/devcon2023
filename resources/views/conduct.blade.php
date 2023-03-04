@extends('layouts.main')

@section('content')

<section class="mt-16 max-w-4xl mx-auto">
    <h1 class="text-center text-gray-700 text-4xl font-astronomus uppercase">Code of Conduct</h1>

    <div class="mt-4 text-gray-600 font-ibm">
        <p class="text-sm">All attendees, speakers, sponsors and volunteers at our conference are required to agree with the following code of conduct. Organisers will enforce this code throughout the event. We expect cooperation from all participants to help ensure a safe environment for everybody.</p>

        <h2 class="mt-6 text-center text-gray-700 text-2xl font-astronomus uppercase hidden">Be Excellent to each other</h2>

        <div class="mt-8 grid place-items-center">
            <img class="w-[460px]" src="{{ asset('images/be-excellent-to-each-other.jpg') }}" />
        </div>

        <p class="text-sm">You have our contact details in the emails we've sent.</p>

        <h2 class="mt-6 text-center text-gray-700 text-2xl font-astronomus uppercase">The quick version</h2>

        <p class="mt-4 text-sm">Our conference is dedicated to providing a harassment-free conference experience for everyone, regardless of gender, gender identity and expression, age, sexual orientation, disability, physical appearance, body size, race, ethnicity, religion (or lack thereof), or technology choices. We do not tolerate harassment of conference participants in any form. Sexual language and imagery is not appropriate for any conference venue, including talks, workshops, parties, Twitter and other online media. Conference participants violating these rules may be sanctioned or expelled from the conference at the discretion of the conference organisers.</p>

        <h2 class="mt-6 text-center text-gray-700 text-2xl font-astronomus uppercase">The less quick version</h2>

        <p class="mt-4 text-sm">Harassment includes offensive verbal comments related to gender, gender identity and expression, age, sexual orientation, disability, physical appearance, body size, race, ethnicity, religion, technology choices, sexual images in public spaces, deliberate intimidation, stalking, following, harassing photography or recording, sustained disruption of talks or other events, inappropriate physical contact, and unwelcome sexual attention.</p>
        <p class="mt-4 text-sm">Participants asked to stop any harassing behavior are expected to comply immediately.</p>
        <p class="mt-4 text-sm">Sponsors are also subject to the anti-harassment policy. In particular, sponsors should not use sexualized images, activities, or other material. Booth staff (including volunteers) should not use sexualized clothing/uniforms/costumes, or otherwise create a sexualized environment.</p>
        <p class="mt-4 text-sm">If a participant engages in harassing behavior, the conference organisers may take any action they deem appropriate, including warning the offender or expulsion from the conference with no refund.</p>
        <p class="mt-4 text-sm">If you are being harassed, notice that someone else is being harassed, or have any other concerns, please contact a member of conference staff immediately. Conference staff can be identified as they'll be wearing branded t-shirts.</p>
        <p class="mt-4 text-sm">Conference staff will be happy to help participants contact hotel/venue security or local law enforcement, provide escorts, or otherwise assist those experiencing harassment to feel safe for the duration of the conference. We value your attendance.</p>
        <p class="mt-4 text-sm">We expect participants to follow these rules at conference and workshop venues and conference-related social events.</p>
        <p class="mt-4 mb-8 text-sm">Original source and credit: <a class="hover:underline hover:decoration-red-500 hover:underline-offset-4" href="http://2012.jsconf.us/#/about">http://2012.jsconf.us/#/about</a> & <a class="hover:underline hover:decoration-red-500 hover:underline-offset-4" href="http://geekfeminism.wikia.com/wiki/Conference_anti-harassment/Policy">The Ada Initiative</a></p>
    </div>
</section>

@endsection
