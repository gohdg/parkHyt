<?php

$html = '
<style>
    .d-flex {
    text-align:right;
    }
    h2{
        font-size:20px;
    }
    h4{
        font-size:16px;
    }
    p{
        font-size:12px;
        text-align: justify;
    }

    p.declare{
        font-size:12px;
        font-weight:bold;
    }

</style>

<h2>Privacy Agreement</h2>
<p>
    Park Hyatt Seoul takes full accountability for guest information security
    and manages guest privacy information according to the corporation’s
    global policy (www.privacy.hyatt.com) and domestic privacy policy.
</p>

    <h4>1. General Personal Information</h4>
    <p>
    To deliver appropriate accommodation services and any other guest
    services, Park Hyatt Seoul requires prior consent from guests for the
    collection of any personal information that may be collected and used as
    detailed below; - Use of collected data: identification of guest,
    provision of return visit services, emergency contacts, membership
    enrolment, membership administration. - List of collected data:
    Mandatory: name, passport number or registration number, email,
    nationality / Optional: company name, job title, date of birth,
    membership number. - You may be required to present a membership card to
    receive a discount for a particular membership promotion or confirm
    affiliation with an organization entitled to special benefits. -
    Information retention / Information use period; registration card
    information will be deleted ten year after check-out, however, Park
    Hyatt Seoul may keep the information a maximum of ten years in
    accordance with commercial law and company rules and regulations. -
    Rights of Refusal and Disadvantages of Non-Participation: guests who
    want to stay at Park Hyatt Seoul have the right to refuse to agree to
    the collection and use of personal information, however, should you not
    agree to provide such information, certain services provided by Park
    Hyatt Seoul may not be available to you.
    </p>


    <p class="declare">
    I fully understand and agree to the above rules and regulations
    regarding the collection and use of personal information
    </p>
    <div class="d-flex">
    
        <label for="agree1">Agree</label>

        <label for="disagree1">Do not agree</label>
    
    </div>

    <h4>2. Personal Identification Number</h4>
    <p>
    - Use of collected data: identification, membership enrolment,
    membership administration. - List of collected data: registration number
    / passport number. - Information retention / Information use period:
    registration card information will be deleted ten year after check-out,
    however, Park Hyatt Seoul may keep the information a maximum of ten
    years in accordance with commercial law and company rules and
    regulations. - Rights of Refusal and Disadvantage of Non-Participation:
    guests who want to stay at Park Hyatt Seoul have the right to refuse to
    agree to the collection and use of personal information, however, should
    you not agree to provide such information, certain services provided by
    Park Hyatt Seoul may not be available to you.
    </p>

    <p class="declare">
    I fully understand and agree to the above rules and regulations
    regarding the collection and use of personal information
    </p>
    <div class="d-flex">
    
        <input
        type="radio"
        name="agreement2"
        id="agree2"
        value="agree2"
        /><label for="agree2">Agree</label>

        <input
        type="radio"
        name="agreement2"
        id="disagree2"
        value="disagree2"
        /><label for="disagree2">Do not agree</label>
    
    </div>


    <h4>3. Disclosure of personal information to overseas third parties</h4>
    <p>
    To deliver appropriate and seamless services to guests, Park Hyatt Seoul
    may disclose certain personal information to overseas third parties as
    detailed below;
    </p>

    <p class="declare">
    I fully understand and agree to the above rules and regulations
    regarding the collection and use of personal information
    </p>
    <div class="d-flex">
    
        <input
        type="radio"
        name="agreement3"
        id="agree3"
        value="agree3"
        /><label for="agree3">Agree</label>

        <input
        type="radio"
        name="agreement3"
        id="disagree3"
        value="disagree3"
        /><label for="disagree3">Do not agree</label>
    
    </div>
    <img src="img_sign/'.$efileName.'" width="100" height="100">

';

?>