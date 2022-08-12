<!DOCTYPE html>
<!-- saved from url=(0143)https://mysejahtera.malaysia.gov.my/qrscan/?lId=5f31fc47e0dcfd089c4e1983&eln=UEFLQVIgU0NJRU5PIFRXIFNETiBCSEQ=&formType=REGULAR&isExternal=false -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>My Sejahtera</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/My Sejahtera_files/logo-chk.png">
    <link href="/My Sejahtera_files/styles.css" rel="stylesheet" type="text/css">
    <link href="/My Sejahtera_files/datepicker.min.css" rel="stylesheet" type="text/css">
    <style>

        html {
          --color: #000;
          --bgColor: #d89;
          --size: 1rem;
          --border: calc(var(--size) * 0.1);
          --borderRadius: calc(var(--size) * 0.3);
          --labelSize: calc(var(--size) * 0.75);
          --margin: calc(var(--size) * 0.25);
          --marginLeft: calc(var(--size) + calc(var(--size) * 0.5));
        }

        input.datePicker {
          background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'><circle cx='20' cy='20' r='18.5' fill='none' stroke='%23222' stroke-width='3' /><path d='M20,4 20,8 M4,20 8,20 M36,20 32,20 M20,36 20,32' stroke='%23bbb' stroke-width='1' /><circle cx='20' cy='20' r='2' fill='%23222' stroke='%23222' stroke-width='2' /></svg>"), url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'><path d='M18.5,24.5 19.5,4 20.5,4 21.5,24.5 Z' fill='%23222' style='transform:rotate(120deg); transform-origin: 50% 50%;' /></svg>"), url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'><path d='M18.5,24.5 19.5,8.5 20.5,8.5 21.5,24.5 Z' style='transform:rotate(20deg); transform-origin: 50% 50%;' /></svg>");
          background-position: var(--margin) 50%;
          background-repeat: no-repeat;
          background-size: var(--size) var(--size);
          border: var(--border) solid var(--color);
          border-radius: var(--borderRadius);
          color: #222;
          font-size: var(--size);
          padding: var(--margin) var(--margin) var(--margin) var(--marginLeft);
          transition: backgroundImage 0.25s;
        }

        .form-group.required label:after {
           content:"*";
           color:red;
        }
        .form-control {
            background: #F4FAFF;
            border-color: #000000;
            font-size: 0.9rem;
            height: calc(1.8em + 0.75rem + 5px);
        }
        .form-control:focus {
            border-color: #000000;
            box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.25);
        }
        .check-box {
            position: relative;
            margin-top: 100px;
            background-color: #3a83ff;
            color: #ffffff;
            -webkit-border-top-left-radius: 20px;
            -webkit-border-top-right-radius: 20px;
            -moz-border-radius-topleft: 20px;
            -moz-border-radius-topright: 20px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }
        .check-contain {
            padding: 15px;
            padding-top: 50px;
        }
        .check {
            width: 75px;
            height: 75px;
            position: absolute;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
        }
        .check-contain {
            margin-top: 40px;
        }
        .card {
            box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.05);
            border: none;
        }
        .border-radius-bottom {
            border-radius: 0px;
            -webkit-border-bottom-right-radius: 20px;
            -webkit-border-bottom-left-radius: 20px;
            -moz-border-radius-bottomright: 20px;
            -moz-border-radius-bottomleft: 20px;
            border-bottom-right-radius: 20px;
            border-bottom-left-radius: 20px;
        }
        .bold {
            font-weight: bold;
        }
        .pill {
            background-color: green;
            color: #fff;
            border-radius: 20px;
            padding: 4px 15px;
        }
        p {
            font-size: 14px;
        }
        .success .small {
            font-size: 12px;
            color: #b0b0b0;
        }
        .title {
            font-size: 14px;
            font-weight: 600;
        }
        .loader {
            width: 30px;
            padding: 0px 5px;
            display: none;
        }
        .colored-header {
            background: #000000;
            color: #FFFFFF;
        }
        label {
            font-size: 0.75rem !important;
        }
        .form-control::placeholder {font-size: 13px}
        .form-control:disabled, .form-control[readonly] {
            background-color: #F4FAFF;
            opacity: 1;
        }

        .eventWrap {
            background-color: #3a83ff;
        }

        .btn-white {
            color: #3a83ff;
            background-color: #fff;
            border-color: #fff;
        }

        .eventContain {
            border-radius: 5px;
            border: solid 2px #ffffff;
            padding: 16px;
            text-align: center;
            color: #ffffff;
        }
        .eventImg {
            width: 100px;
            position: relative;
            top: 16px;
            left: 50%;
            transform: translate(-50%, -0%);
            background-color: #3a83ff;
        }

        select.form-control option {
            font-size: 0.8rem;
        }
    </style>
</head>

<body>
    <nav class="navbar justify-content-center mb-4 colored-header py-2" id="navbar">
        <img src="/My Sejahtera_files/logo-chk.png" class="mr-2" style="height: 32px;">
        <h5 class="mb-0" id="hdrTxt">Check-in</h5>
    </nav>

    <div class="row justify-content-center">
        <div class="col-sm-8 col-md-6 col-lg-4 col-xl-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!--General Form-->
                        <div id="formContainer"><p class="mb-0">Sila masukkan butiran berikut​​:</p>
<p class="small"><i>Please fill in the following details:</i></p>

<div class="form-group required">
    <label class="control-label">Nama/Name</label>
    <input type="text" placeholder="Nama/Name" autocomplete="off" id="name" class="form-control" maxlength="40" minlength="1" onkeyup="validateName(&#39;name&#39;);">
    <div class="text-danger small"></div>
</div>

<div class="form-group required">
    <label class="control-label">Nombor Telefon/Mobile Number</label>
    <input type="tel" placeholder="Nombor Telefon/Mobile Number" autocomplete="off" id="contactNumber" class="form-control" maxlength="15" minlength="9" onkeyup="validatePhoneNumber(&#39;contactNumber&#39;);">
    <div class="text-danger small"></div>
</div>

<div class="form-group" name="statusChkQue">
    <ul class="pl-3">
        <p class="mb-0">Dalam 14 hari yang lalu, adakah anda:<span class="text-danger">*</span></p>
        <p class="small mb-1"><i>In the last 14 days, have you:</i></p>

        <li>
            <p class="mb-0">Mengalami sebarang simptom COVID-19 (demam, batuk, sesak nafas, sakit tekak)?</p>
            <p class="small mb-1"><i>Been exhibiting any COVID-19 symptoms (fever, cough,
                shortness of breath, sore throat)?</i></p>
        </li>

        <li>
            <p class="mb-0">Berhubung rapat dengan pesakit positif COVID-19?</p>
            <p class="small mb-1"><i>Had close contact with COVID-19 positive patient?</i></p>
        </li>
    </ul>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sym_radio" id="radio1_NO" value="NO" checked="">
        <label class="form-check-label" for="radio1_NO">Tidak/No</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sym_radio" id="radio1_YES" value="YES">
        <label class="form-check-label" for="radio1_YES">Ya/Yes</label>
    </div>
</div>

<div class="form-group">
    <label class="mb-0">Dengan ini, saya mengakui bahawa butiran yang diisi adalah betul dan tepat.<span class="text-danger">*</span></label>
    <label class="small"><i>I hereby acknowledge that the information given in this form is correct and accurate.</i></label>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="chkTruthful" checked="">
        <label class="form-check-label" for="chkTruthful">Setuju/Agree</label>
        <div class="text-danger small"></div>
    </div>
</div>

<div class="form-group my-4">
    <button class="btn btn-dark btn-block" type="button" id="btnSubmit" onclick="showLoader(&#39;btnSubmit&#39;);submitCheckInDetails();">
        <img class="loader" src="/My Sejahtera_files/loader.gif">Hantar/Submit</button>
</div>

<ul class="pl-3" style="list-style: square;">
    <li>
        <p class="mb-1">Mengikut peraturan Kerajaan Malaysia, semua pelawat hendaklah menyatakan
            keadaan kesihatan kendiri sebelum memasuki premis.</p>
        <p class="small"><i>In accordance with Malaysian Government regulations, all visitors must declare their state of health before entering.</i></p>
    </li>

    <li>
        <p class="mb-1">Leceh untuk mengisi butiran pendaftaran? Muat turun aplikasi MySejahtera
            dan gunakan fungsi pengimbas kod QR untuk kunjungan seterusnya!​</p>
        <p class="small"><i>Tired of filling in your details? Download the MySejahtera Application and use the QR function for your next visit!</i></p>
    </li>
</ul></div>

                        <!-- Success Page -->
                        <div id="SuccessContainer"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
	
		const queryString = window.location.search;
		console.log(queryString);

		const urlParams = new URLSearchParams(queryString);
		const uname = urlParams.get('uname');
		const unumb = urlParams.get('unumb');
		
		
        var monthNmArr = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        var jsonData = {};
		var viaMysj = false;

        document.addEventListener('DOMContentLoaded', function(event) {
              let urlParams = new URLSearchParams(window.location.search);
              let formType = urlParams.has('formType') ? urlParams.get('formType') : 'REGULAR';
              let locationName = urlParams.has('ln') ? urlParams.get('ln').replace(/_/g, ' ') : "-";
				
              jsonData.locationId = urlParams.has('lId') ? urlParams.get('lId') : null;
              jsonData.locationName = urlParams.has('eln') ? unescape(atob(urlParams.get('eln'))) : locationName;
              jsonData.rsvpEndDt = urlParams.has('rsvpEndDt') ? urlParams.get('rsvpEndDt') : '-';
              let eventDt = urlParams.has('evtStartDt') ? urlParams.get('evtStartDt') : '-';
              let eventEndDt = urlParams.has('evtEndDt') ? urlParams.get('evtEndDt') : ''
              jsonData.eventDate = (eventDt == eventEndDt) ? eventDt : (eventDt + " hingga " + eventEndDt);
              jsonData.menDressCode = urlParams.has('menDressCode') ? atob(urlParams.get('menDressCode')) : '-';
              jsonData.womenDressCode = urlParams.has('womenDressCode') ? atob(urlParams.get('womenDressCode')) : '-';
              jsonData.venue = urlParams.has('venue') ? atob(urlParams.get('venue')) : '-';
              jsonData.date = formattedDate(null);
              jsonData.time = formattedTime(null);
              jsonData.type = 0;
              jsonData.formType = formType;

              if(urlParams.has('data')) {
					viaMysj = true;
                    let encDataStr = urlParams.get('data');
                    let dataJSON = JSON.parse(atob(encDataStr));
                    let userId = dataJSON.contact;

                    jsonData.name = decodeURIComponent(dataJSON.name);
                    jsonData.contact = userId.startsWith('+') ? userId.substring(1, userId.length) : userId;
                    let status = dataJSON.userStatus;

                    if(formType == 'TRAVELLER') {
                        jsonData.status = (status != null && (status.indexOf('WS') > 0 || status == 'PUI')) ? 'PUI' : 'PUS';
                    } else {
                        jsonData.status = (status != null && status.startsWith('LOW')) ? 'Low' : 'High';
                    }
                    jsonData.licenceNumber = dataJSON.licenceNumber;
                    jsonData.type = 1;

                    if(formType == 'REGULAR' || formType == 'GB_EMPLOYEE') {
                        submitDetailsToRabbitMQueue();
                        displayInfoToUser();
                    } else if(formType == 'EVENT_BODY') {
                        submitDetailsToRabbitMQueue();
                        displayEventSuccessInfoToUser();
                    } else {
                        initForm();
                    }
              } else {
                    initForm();
              }
        });
		
		 function myFunc(variable,new_input){
            var new_data = document.getElementById(variable);
			new_data.value = new_input;
			console.log(document.getElementById(variable));
        } 
		myFunc('name',uname);
		myFunc('contactNumber',unumb);

        function initForm() {
            if(jsonData.formType == 'GB_VISITOR') {
                document.getElementById('hdrTxt').innerHTML = 'MySejahtera Office';
                loadHtmlTemplate('formContainer', 'formVisitor.html');
            } else if(jsonData.formType == 'TRAVELLER') {
                document.getElementById('hdrTxt').innerHTML = 'MySejahtera Travel';
                loadHtmlTemplate('formContainer', 'formTraveller.html');
            } else if(jsonData.formType == 'EVENT_RSVP') {
                document.getElementById('hdrTxt').innerHTML = 'MySejahtera Event';
                loadHtmlTemplate('formContainer', 'formTempEventRsvp.html');
            } else if(jsonData.formType == 'EVENT_RSVP_NEW') {
                document.getElementById('hdrTxt').innerHTML = 'MySejahtera Event';
                loadHtmlTemplate('formContainer', 'formEventRsvp.html');
            } else if(jsonData.formType == 'EVENT_BODY') {
                document.getElementById('hdrTxt').innerHTML = 'MySejahtera Event';
                loadHtmlTemplate('formContainer', 'formEvent.html');
            } else if(jsonData.formType == 'TRAVEL_QUARANTINE') {
                document.getElementById('hdrTxt').innerHTML = 'MySejahtera Quarantine';
                loadHtmlTemplate('formContainer', 'formTravelQuarantine.html');
            } else {
                loadHtmlTemplate('formContainer', 'https://mysejahtera.malaysia.gov.my/qrscan/formGeneral.html?lId=5f31fc47e0dcfd089c4e1983&eln=UEFLQVIgU0NJRU5PIFRXIFNETiBCSEQ=&formType=REGULAR&isExternal=false');
            }
        }

        function afterFormInit() {
            if(jsonData.formType == 'TRAVELLER' || jsonData.formType == 'GB_VISITOR' || jsonData.formType == 'EVENT_BODY'
                || jsonData.formType == 'EVENT_RSVP' || jsonData.formType == 'EVENT_RSVP_NEW' || jsonData.formType == 'TRAVEL_QUARANTINE') {
                if(viaMysj) {
                    preFillValues();
                    if(jsonData.formType == 'TRAVELLER' || jsonData.formType == 'GB_VISITOR' || jsonData.formType == 'EVENT_BODY') removeSymptomQuestion();
                }

                if(jsonData.formType == 'GB_VISITOR') {
                    addSelectEvent();
                } else if(jsonData.formType == 'EVENT_RSVP_NEW') {
                    makeReadOnly('locationName', jsonData.locationName);
                    makeReadOnly('eventDate', jsonData.eventDate);
                    makeReadOnly('venue', jsonData.venue);
                } else if(jsonData.formType == 'TRAVELLER') {
                    new Datepicker(document.getElementById('travellerFlightDt'), {format: 'dd/mm/yyyy', maxDate: new Date(), autohide: true});
                    new Datepicker(document.getElementById('travellerVaccinationDt'), {format: 'yyyy-mm-dd', maxDate: new Date(), autohide: true});
                } else if(jsonData.formType == 'TRAVEL_QUARANTINE') {
                    let minDt = addDays(new Date(), -2);
                    let maxDt = addDays(new Date(), 7);
                    new Datepicker(document.getElementById('travelQuarantineArrivalDt'), {format: 'dd/mm/yyyy', minDate: minDt, maxDate: maxDt, autohide: true});
                    new Datepicker(document.getElementById('travelQuarantineDepartureDt'), {format: 'dd/mm/yyyy', minDate: minDt, maxDate: maxDt, autohide: true});

                    enableTimePicker('travelQuarantineDepartureTime');
                    enableTimePicker('travelQuarantineArrivalTime');
                }
            }
        }

        function preFillValues() {
            if(jsonData.formType == 'GB_VISITOR') {
                makeReadOnly('name_vis', jsonData.name);
                makeReadOnly('contactNumber_vis', jsonData.contact);
                makeReadOnly('passportOrICNumber', jsonData.licenceNumber);

                let cn = document.getElementById('contactNumber_vis');
                if(jsonData.contact.indexOf('@') > 0) {
                    cn.previousElementSibling.innerHTML = "E-mel/Email";
                }
            } else if(jsonData.formType == 'TRAVELLER') {
                if(!isNull(jsonData.name)) makeReadOnly('travellerName', jsonData.name);
                makeReadOnly('travellerUserName', jsonData.contact);

				let cn = document.getElementById('travellerUserName');
                if(jsonData.contact.indexOf('@') > 0) {
                    cn.previousElementSibling.innerHTML = "E-mel/Email";
                }
            } else if(jsonData.formType == 'EVENT_BODY' || jsonData.formType == 'EVENT_RSVP_NEW') {
                if(!isNull(jsonData.name)) makeReadOnly('name', jsonData.name);
                makeReadOnly('contactNumber', jsonData.contact);

                let cn = document.getElementById('contactNumber');
                if(jsonData.contact.indexOf('@') > 0) {
                    cn.previousElementSibling.innerHTML = "E-mel/Email";
                }
            } else if(jsonData.formType == 'EVENT_RSVP') {
                if(jsonData.contact.indexOf('@') > 0) {
                    document.getElementById('emailAddress').value = jsonData.contact;
                }
            } else if(jsonData.formType == 'TRAVEL_QUARANTINE') {
                if(!isNull(jsonData.name)) makeReadOnly('travelQuarantineName', jsonData.name);
                makeReadOnly('travelQuarantineUserName', jsonData.contact);

				let cn = document.getElementById('travelQuarantineUserName');
                if(jsonData.contact.indexOf('@') > 0) {
                    cn.previousElementSibling.innerHTML = "E-mel/Email";
                }
            }
        }

        function removeSymptomQuestion() {
            let symElements = document.getElementsByName('statusChkQue');
            for (let i=0; i < symElements.length; i++) symElements[i].classList.add("d-none");
        }

        function displayNotInterestedEventInfoToUser(flag) {
            let xhr= new XMLHttpRequest();
             xhr.open('GET', 'notInterestedEvent.html', true);
             xhr.onreadystatechange= function() {
                if (this.readyState!==4) return;
                if (this.status!==200) return; // or whatever error handling you want
                document.getElementById('SuccessContainer').innerHTML= this.responseText;

                if(flag) {
                    document.getElementById('dispMessage').innerHTML= "Tempoh untuk membuat RSVP telah tamat/RSVP period has ended";
                }

                document.getElementById('formContainer').remove();
                document.getElementById('navbar').style.display = 'none';
                document.body.style = "background: #697386";
                document.getElementById('successHeader').innerHTML = "RSVP - " + jsonData.locationName;
             };
             xhr.send();
        }

        function displayPostponedEventInfoToUser() {
            let xhr= new XMLHttpRequest();
             xhr.open('GET', 'postponedEvent.html', true);
             xhr.onreadystatechange= function() {
                if (this.readyState!==4) return;
                if (this.status!==200) return; // or whatever error handling you want
                document.getElementById('SuccessContainer').innerHTML= this.responseText;

                document.getElementById('formContainer').remove();
                document.getElementById('navbar').style.display = 'none';
                document.body.style = "background: #697386";
                document.getElementById('successHeader').innerHTML = "RSVP - " + jsonData.locationName;
             };
             xhr.send();
        }

        function displayEventSuccessInfoToUser() {
            let xhr= new XMLHttpRequest();
             xhr.open('GET', 'eventSuccess.html', true);
             xhr.onreadystatechange= function() {
                if (this.readyState!==4) return;
                if (this.status!==200) return; // or whatever error handling you want
                document.getElementById('SuccessContainer').innerHTML= this.responseText;

                document.getElementById('formContainer').remove();
                document.getElementById('navbar').style.display = 'none';
                document.body.style = "background: #697386";

                if(jsonData.contact.indexOf('@') > 0) document.getElementById('userText').innerHTML = 'Email';
                document.getElementById('location').innerHTML = jsonData.venue;
                document.getElementById('displayName').innerHTML = jsonData.name;
                document.getElementById('contact').innerHTML = jsonData.contact;
                document.getElementById('date').innerHTML = jsonData.date;
                document.getElementById('time').innerHTML = jsonData.time;
                document.getElementById('orgName').innerHTML = jsonData.organisationName;

                if(jsonData.formType == 'EVENT_RSVP_NEW') {
                    document.getElementById('eventViewContainer').remove();
                    document.getElementById('risiko').classList.add('d-none');
                    document.getElementById('successHeader').innerHTML = "RSVP - " + jsonData.locationName;
                    document.getElementById('topSupHeader').innerHTML = "Your RSVP has been recorded!";

                    let eleList = document.getElementsByName("eventDispInfo");
                    for (let i = 0; i < eleList.length; i++) eleList[i].classList.remove("d-none");

                    document.getElementById('position').innerHTML = jsonData.position;
                    document.getElementById('menDressCode').innerHTML = jsonData.menDressCode;
                    document.getElementById('womenDressCode').innerHTML = jsonData.womenDressCode;
                } else if(jsonData.formType == 'EVENT_BODY') {
                    document.getElementById('sucNote').remove();

                    document.getElementById('successHeader').innerHTML = jsonData.locationName;

                    if(viaMysj) {
                        document.getElementById('orgName').parentElement.classList.add('d-none');
                    } else {
                        let eleList = document.getElementsByName("eventDisplayInfo");
                        for (let i = 0; i < eleList.length; i++) eleList[i].classList.remove("d-none");
                    }

                    let dataObject = {'name': jsonData.name, 'contact':jsonData.contact, 'sessionId': jsonData.locationId};
                    document.getElementById('eventLink').href = '/qrscan/event?data='+ btoa(JSON.stringify(dataObject));

                    let statusSpan = document.getElementById('status');
                    statusSpan.innerHTML = jsonData.status;
                    if(jsonData.status == 'High' || jsonData.status == 'PUI') {
                        statusSpan.style = "background: red";
                    }
                }
             };
             xhr.send();
        }

        function displayInfoToUser() {
            let xhr= new XMLHttpRequest();
             xhr.open('GET', 'https://mysejahtera.malaysia.gov.my/qrscan/checkinSuccess.html', true);
             xhr.onreadystatechange= function() {
                if (this.readyState!==4) return;
                if (this.status!==200) return; // or whatever error handling you want
                document.getElementById('SuccessContainer').innerHTML= this.responseText;

                document.getElementById('formContainer').remove();
                displaySuccessInfo();
             };
             xhr.send();
        }

        function displaySuccessInfo() {
            document.getElementById('navbar').style.display = 'none';
            document.body.style = "background: #697386";

            if(jsonData.contact.indexOf('@') > 0) {
                document.getElementById('userText').innerHTML = 'Emel';
            }

            document.getElementById('location').innerHTML = jsonData.locationName;
            document.getElementById('displayName').innerHTML = jsonData.name;
            document.getElementById('contact').innerHTML = jsonData.contact;
            document.getElementById('date').innerHTML = jsonData.date;
			document.getElementById('time').innerHTML = jsonData.time;
			document.getElementById('status').innerHTML = jsonData.status;

			if(jsonData.formType == 'GB_VISITOR') {
				let eleList = document.getElementsByName("dispVis");
                for (let i = 0; i < eleList.length; i++) eleList[i].classList.remove("d-none");

				if(jsonData.purposeOfVisit == 'Others'){
					document.getElementById('pov').innerHTML = jsonData.purposeOfVisit + " - " + jsonData.others;
				} else {
					document.getElementById('pov').innerHTML = jsonData.purposeOfVisit;
				}
				document.getElementById('icNum').innerHTML = jsonData.licenceNumber;
				document.getElementById('mRoom').innerHTML = jsonData.meetingRoom;
				document.getElementById('levelId').innerHTML = jsonData.floorNo;
			} else if(jsonData.formType == 'TRAVELLER') {
			    let eleList = document.getElementsByName("travellerDispInfo");
                for (let i = 0; i < eleList.length; i++) eleList[i].classList.remove("d-none");

                document.getElementById('locTxt').innerHTML = 'Pintu Masuk';
                document.getElementById('userText').innerHTML = 'ID Pengguna';
                document.getElementById('sucNote').innerHTML = 'Sila tunjukkan maklumat ini kepada pegawai KKM untuk pengesahan';

                document.getElementById('arrivedFrom').innerHTML = jsonData.arrivalSource;
                document.getElementById('nationality').innerHTML = jsonData.nationality;
                document.getElementById('flightNum').innerHTML = jsonData.flightNum;
                document.getElementById('passportNum').innerHTML = jsonData.passportNumber;
                document.getElementById('seatNum').innerHTML = jsonData.seatNum;
                document.getElementById('district').innerHTML = jsonData.district;
                document.getElementById('contactPerson').innerHTML = jsonData.contactPerson;
                document.getElementById('contactPersonNum').innerHTML = jsonData.contactPersonNumber;

                // removing Risk text
                document.getElementById('risiko').classList.add('d-none');
			} else if(jsonData.formType == 'TRAVEL_QUARANTINE') {
			    let eleList = document.getElementsByName("travelQuarantineDispInfo");
                for (let i = 0; i < eleList.length; i++) eleList[i].classList.remove("d-none");

                document.getElementById('successHeader').innerHTML = "Maklumat Pendaftaran";
                document.getElementById('locTxt').innerHTML = 'Pintu Masuk';
                document.getElementById('sucNote').innerHTML = 'Sila ambil tangkapan skrin ini untuk rujukan anda';

                document.getElementById('location').innerHTML = jsonData.portOfEntry;
                document.getElementById('flightNumber').innerHTML = jsonData.flightNum;
                document.getElementById('passportNumber').innerHTML = jsonData.passportNumber;
                document.getElementById('departureDate').innerHTML = formattedDate(new Date(jsonData.departureDtm)) + " " + formattedTime(new Date(jsonData.departureDtm));
                document.getElementById('arrivalDate').innerHTML = formattedDate(new Date(jsonData.arrivalDtm)) + " " + formattedTime(new Date(jsonData.arrivalDtm));
                document.getElementById('hotel').innerHTML = jsonData.hotel;

                let names = "-";
                if(typeof(jsonData.dependentArr) != 'undefined') {
                    for(let i=0;i<jsonData.dependentArr.length;i++) {
                        if(i == 0) {
                            names = '';
                        } else {
                            names += '<br/>';
                        }
                        let dependentData = jsonData.dependentArr[i];
                        names += dependentData.name;
                    }
                }
                document.getElementById('dependentNames').innerHTML = names.toString();

                // removing Risk text
                document.getElementById('risiko').classList.add('d-none');
			}

            let statusSpan = document.getElementById('status');
            statusSpan.innerHTML = jsonData.status;
            if(jsonData.status == 'High' || jsonData.status == 'PUI') {
                statusSpan.style = "background: red";
            }
        }

        function addSelectEvent(){
            let pov_select_ele = document.getElementById('purposeOfVisit');
            pov_select_ele.addEventListener('change',function(){
                let others_info_ele = document.getElementById('others_info');
                if(this.value == 'Others'){
                    others_info_ele.classList.remove("d-none");
                } else {
                    others_info_ele.classList.add("d-none");
                }
            });
        }

        function submitDetailsToRabbitMQueue() {
            let domainName = "https://" + window.location.host;
            let dtm = new Date().toJSON();
			let reqJson = {};
			let url = null;

			if(jsonData.formType == 'TRAVELLER') {
			    url = "/clockinTraveller";

				reqJson = {
					'name': jsonData.name,
					'contact': jsonData.contact.toLowerCase(),
					'userStatus': jsonData.status,
					'tenant': jsonData.locationId,
					'location': jsonData.locationName,
					'identityNumber': jsonData.identityNumber,
					'passportNumber': jsonData.passportNumber,
					'nationality': jsonData.nationality,
					'flightNum': jsonData.flightNum,
					'seatNum': jsonData.seatNum,
					'flightDate': jsonData.flightDate,
					'address': jsonData.address,
					'postcode': jsonData.postcode,
					'state': jsonData.state,
					'district': jsonData.district,
					'contactPerson': jsonData.contactPerson,
					'contactPersonNumber': jsonData.contactPersonNumber,
					'arrivalFrom': jsonData.arrivalSource,
					'vaccinationDate': jsonData.vaccinationDate,
					'vaccineType': jsonData.vaccineType,
					'vaccinationLocation': jsonData.vaccinationLocation,
					'createdDate': dtm,
					'type': jsonData.type,
					'completed': false
				};
			} else if(jsonData.formType == 'TRAVEL_QUARANTINE') {
			    url = "/clockinTraveller";

				reqJson = {
					'name': jsonData.name,
					'contact': jsonData.contact.toLowerCase(),
					'userStatus': jsonData.status,
					'tenant': jsonData.locationId,
					'location': jsonData.locationName,
					'identityNumber': jsonData.identityNumber,
					'passportNumber': jsonData.passportNumber,
					'flightNum': jsonData.flightNum,
					'arrivalDate': jsonData.arrivalDtm,
					'departureDate': jsonData.departureDtm,
					'hotel': jsonData.hotel,
					'portOfEntry': jsonData.portOfEntry,
					'createdDate': dtm,
					'preferredHotel': jsonData.preferredHotel,
					'hotelBookingNumber': jsonData.hotelBookingNumber,
					'type': jsonData.type
				};
			} else if(jsonData.formType == 'EVENT_RSVP') {
			    url = "/clockinEvent";
                reqJson = {
                    "name": jsonData.name,
                    "contact": jsonData.contact.toLowerCase(),
                    "userResponse": "INTERESTED",
                    "tenant": jsonData.locationId,
                    "location": jsonData.locationName,
                    "passportOrICNumber": jsonData.licenceNumber,
                    "createdDate": dtm,
                    "isRSVP": true,
                    "type": jsonData.type
                };
            } else if(jsonData.formType == 'EVENT_BODY') {
			    url = "/clockinEvent";
                 reqJson = {
                    "name": jsonData.name,
                    "userStatus": jsonData.status,
                    "contact": jsonData.contact.toLowerCase(),
                    "tenant": jsonData.locationId,
                    "location": jsonData.locationName,
                    "passportOrICNumber": jsonData.licenceNumber,
                    "organisationName": jsonData.organisationName,
                    "createdDate": dtm,
                    "isRSVP": false,
                    "type": jsonData.type
                };
            } else if(jsonData.formType == 'EVENT_RSVP_NEW') {
                url = "/clockinEvent";
                 reqJson = {
                    "name": jsonData.name,
                    "contact": jsonData.contact.toLowerCase(),
                    "userResponse": jsonData.userResponse,
                    "tenant": jsonData.locationId,
                    "location": jsonData.locationName,
                    "passportOrICNumber": jsonData.licenceNumber,
                    "createdDate": dtm,
                    "position": jsonData.position,
                    "organisationName": jsonData.organisationName,
                    "isRSVP": true,
                    "type": jsonData.type
                };
			} else {
			    if(jsonData.formType == 'GB_VISITOR' || jsonData.formType == 'GB_EMPLOYEE') {
			        url = "/clockinOffice";
			    } else {
			        url = "https://mysejahtera.malaysia.gov.my/clockin";
			    }

				reqJson = {
					'name': jsonData.name,
					'contact': jsonData.contact.toLowerCase(),
					'userStatus': jsonData.status,
					'tenant': jsonData.locationId,
					'location': jsonData.locationName,
					'purposeOfVisit': jsonData.purposeOfVisit,
					'others': jsonData.others,
					'floorNo': jsonData.floorNo,
					'meetingRoom': jsonData.meetingRoom,
					'passportOrICNumber': jsonData.licenceNumber,
					'createdDate': dtm,
					'type': jsonData.type
				};
			}

            url = domainName + url;
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(response) {
                if (this.readyState == 4 && this.status == 200) { }
            };

            xhttp.open("POST", url, true);
            xhttp.setRequestHeader("Content-type", "application/json");
            xhttp.send(JSON.stringify(reqJson));
        }

        function submitDetailListToRabbitMQueue() {
            let domainName = "https://mysejahtera.malaysia.gov.my/qrscan/?lId=5f31fc47e0dcfd089c4e1983&eln=UEFLQVIgU0NJRU5PIFRXIFNETiBCSEQ=&formType=REGULAR&isExternal=false;"
            let dtm = new Date().toJSON();
			let url = '/clockinTravellerQuarantine';
			let reqArr = [];

            let reqJson = {
                'name': jsonData.name,
                'contact': jsonData.contact.toLowerCase(),
                'tenant': jsonData.locationId,
                'location': jsonData.locationName,
                'identityNumber': jsonData.identityNumber,
                'passportNumber': jsonData.passportNumber,
                'flightNum': jsonData.flightNum,
                'arrivalDate': jsonData.arrivalDtm,
                'departureDate': jsonData.departureDtm,
                'hotel': jsonData.hotel,
                'portOfEntry': jsonData.portOfEntry,
                'travelMode': jsonData.travelMode,
                'nationality': jsonData.nationality,
                'createdDate': dtm,
                'preferredHotel': jsonData.preferredHotel,
				'hotelBookingNumber': jsonData.hotelBookingNumber,
                'type': jsonData.type
            };
            reqArr.push(reqJson);

            if(typeof(jsonData.dependentArr) != 'undefined') {
                for(let i=0;i<jsonData.dependentArr.length;i++) {
                    let dependentData = jsonData.dependentArr[i];
                    let depJson = Object.assign({}, reqJson);
                    depJson.name = dependentData.name;
                    depJson.relation = dependentData.relation;
                    depJson.identityNumber = dependentData.icNumber;
                    depJson.passportNumber = dependentData.passportNumber;
                    depJson.parentContact = reqJson.contact;
                    depJson.nationality = dependentData.nationality;
                    reqArr.push(depJson);
                }
            }

            url = domainName + url;
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(response) {
                if (this.readyState == 4 && this.status == 200) { }
            };
            xhttp.open("POST", url, true);
            xhttp.setRequestHeader("Content-type", "application/json");
            xhttp.send(JSON.stringify(reqArr));
        }

        function validate() {
            let msgDivArr = document.getElementsByClassName('text-danger');
            for(let i=0;i<msgDivArr.length;i++) msgDivArr[i].innerHTML = "";

            if(!validateNonEmptyField('name', "Name must not be empty.")
                || !validateNonEmptyField('contactNumber', "Contact number must not be empty.")
                || !validateFieldLength('contactNumber', 9, 15, 'Contact Number not valid.')) {
                return false;
            }

            let chkBoxVal = document.getElementById('chkTruthful');
            if(!chkBoxVal.checked) {
                let msgDiv = chkBoxVal.nextElementSibling.nextElementSibling;
                msgDiv.innerHTML = "You must acknowledge above information to continue.";
                disableLoader('btnSubmit');
                return false;
            }

            return true;
        }

		function validateVisitor() {
            let msgDivArr = document.getElementsByClassName('text-danger');
            for(let i=0;i<msgDivArr.length;i++) msgDivArr[i].innerHTML = "";

            if(!viaMysj && (
                !validateNonEmptyField('name_vis', "Name must not be empty.")
                || !validateNonEmptyField('contactNumber_vis', "Contact number must not be empty.")
                || !validateFieldLength('contactNumber_vis', 9, 15, 'Contact Number not valid.')
                || !validateNonEmptyField('passportOrICNumber', "Passport or IC Number must not be empty.")
                || !validateFieldLength('passportOrICNumber', 6, 15, 'Passport or IC Number not valid.'))) return false;

			let purposeOfVisit = document.getElementById('purposeOfVisit');
			if(purposeOfVisit.value == 'none') {
				let msgDiv = purposeOfVisit.nextElementSibling;
				msgDiv.innerHTML = "Select purpose of visit.";
				disableLoader('btnSubmit1');
				purposeOfVisit.focus();
				return false;
			}

			if(purposeOfVisit.value == 'Others') {
			    if(!validateNonEmptyField('others', "Other information must not be empty.")
                    || !validateFieldLength('others', 5, 30, 'Other information not valid (Min - 5, Max - 30).')) return false;
			}

            if(!validateNonEmptyField('floorNo', "Level must not be empty.")
                || !validateFieldLength('floorNo', 1, 3, 'Level not valid.')) return false;

            let chkBoxVal = document.getElementById('chkTruthful1');
            if(!chkBoxVal.checked) {
                let msgDiv = chkBoxVal.nextElementSibling.nextElementSibling;
                msgDiv.innerHTML = "You must acknowledge above information to continue.";
                disableLoader('btnSubmit1');
                return false;
            }

            return true;
        }

        function submitVisitorCheckInDetails(){
            if(!validateVisitor()) return;

            if(!viaMysj) {
                let sym = document.querySelector('input[name="sym_radio_1"]:checked').value;
                jsonData.status = (sym == "YES") ? "High" : "Low";

                jsonData.name = document.getElementById('name_vis').value;
                jsonData.contact = document.getElementById('contactNumber_vis').value;
                jsonData.licenceNumber = document.getElementById('passportOrICNumber').value;
            }

			jsonData.purposeOfVisit = document.getElementById('purposeOfVisit').value;
			jsonData.others = document.getElementById('others').value;
			jsonData.floorNo = document.getElementById('floorNo').value;
			jsonData.meetingRoom = document.getElementById('meetingRoom').value;

            // Submitting details to RabbitMQ
            submitDetailsToRabbitMQueue();
            displayInfoToUser();
        }

        function submitCheckInDetails() {
            if(!validate()) return;

            jsonData.name = document.getElementById('name').value;
            jsonData.contact = document.getElementById('contactNumber').value;
            let sym = document.querySelector('input[name="sym_radio"]:checked').value;
            jsonData.status = (sym == "YES") ? "High" : "Low";

            submitDetailsToRabbitMQueue();
            displayInfoToUser();
        }

        function submitTravellerCheckInDetails() {
            if(!validateTravellerDetails()) return;

            jsonData.identityNumber = document.getElementById('travellerICNumber').value;
            jsonData.passportNumber = document.getElementById('travellerPassport').value;
            jsonData.passportNumber = jsonData.passportNumber.toUpperCase();
            jsonData.nationality = document.getElementById('travellerNationality').value;
            jsonData.flightNum = document.getElementById('travellerFlightNum').value;
            jsonData.seatNum = document.getElementById('travellerSeatNum').value;
            jsonData.flightDate = document.getElementById('travellerFlightDt').value;
            jsonData.arrivalSource = document.getElementById('travellerSource').value;
            jsonData.contactPerson = document.getElementById('travellerContactPerson').value;
            jsonData.contactPersonNumber = document.getElementById('travellerContactPersonNumber').value;
            jsonData.address = document.getElementById('travellerAddress').value;
            jsonData.postcode = document.getElementById('travellerPostcode').value;
            jsonData.state = document.getElementById('travellerState').value;
            jsonData.district = document.getElementById('travellerDistrict').value;

            if(!viaMysj) {
                let sym = document.querySelector('input[name="traveller_sym_radio"]:checked').value;
                let cont = document.querySelector('input[name="traveller_sym_radio"]:checked').value;
                jsonData.status = (sym == "YES" && cont == "YES") ? "CLOSE CONTACT" : ((sym == "YES")  ? "PUI" : "PUS");
                jsonData.name = document.getElementById('travellerName').value;
                jsonData.contact = document.getElementById('travellerUserName').value;
            }

            if(isNull(jsonData.name)) {
                jsonData.name = document.getElementById('travellerName').value
            }

            let vaccineTaken = document.querySelector('#travellerVaccineSelect').value;
            if(vaccineTaken == 'YES') {
                jsonData.vaccinationDate = document.getElementById('travellerVaccinationDt').value;
                jsonData.vaccineType = document.getElementById('travellerVaccineType').value;
                jsonData.vaccinationLocation = document.getElementById('travellerVaccinationLocation').value;
            }

            submitDetailsToRabbitMQueue();
            displayInfoToUser();
        }

        function validateTravellerDetails() {
            let msgDivArr = document.getElementsByClassName('text-danger');
            for(let i=0;i<msgDivArr.length;i++) msgDivArr[i].innerHTML = "";

            if(!viaMysj && !validateNonEmptyField('travellerName', "Name must not be empty.")) return false;

			let passportVal = document.getElementById('travellerPassport').value;
			if(passportVal.trim().length > 0 && !validateFieldLength('travellerPassport', 6, 15, "Passport number not valid.")) return false;

            if(!viaMysj && !validateNonEmptyField('travellerUserName', "Mobile Number must not be empty.")) return false;

            if(!validateNonEmptyField('travellerNationality', "Nationality must not be empty.")
                || !validateNonEmptyField('travellerFlightNum', "Flight number must not be empty.")
                || !validateFieldLength('travellerFlightNum', 3, 10, 'Flight Number not valid.')
                || !validateNonEmptyField('travellerSeatNum', "Seat number must not be empty.")
                || !validateNonEmptyField('travellerFlightDt', "Flight date must not be empty.")
                || !validateNonEmptyField('travellerSource', "Arrival from place must not be empty.")
                || !validateNonEmptyField('travellerAddress', "Address must not be empty.")
                || !validateNonEmptyField('travellerPostcode', "Postcode must not be empty.")
                || !validateFieldLength('travellerPostcode', 4, 8, 'Postcode not valid.')
                || !validateNonEmptyField('travellerState', "State must not be empty.")
                || !validateNonEmptyField('travellerDistrict', "District must not be empty.")
                || !validateNonEmptyField('travellerContactPerson', "Contact person must not be empty.")
                || !validateNonEmptyField('travellerContactPersonNumber', "Contact person number must not be empty.")
                || !validateFieldLength('travellerContactPersonNumber', 9, 15, 'Contact Person Number not valid.')
                || !validateNonEmptyField('travellerVaccineSelect', 'Please provide vaccine details.')) {
                return false;
            }

            let vaccineTaken = document.querySelector('#travellerVaccineSelect').value;
            if(vaccineTaken == 'YES') {
                if(!validateNonEmptyField('travellerVaccinationDt', "Vaccination Date must not be empty.")
                    || !validateNonEmptyField('travellerVaccineType', "Vaccine Type must not be empty.")
                    || !validateNonEmptyField('travellerVaccinationLocation', "Vaccination Location must not be empty.")) {
                    return false;
                }
            }

            let chkBoxVal = document.getElementById('chkTravellerTruthful');
            if(!chkBoxVal.checked) {
                let msgDiv = chkBoxVal.nextElementSibling.nextElementSibling;
                msgDiv.innerHTML = "You must acknowledge above information to continue.";
                disableLoader('btnSubmit');
                return false;
            }
            return true;
        }

        function submitEventRSVPCheckInDetails() {
            if(!validateRSVPEventDetails()) return false;

            if(!viaMysj) {
                jsonData.name = document.getElementById('name').value;
                jsonData.contact = document.getElementById('contactNumber').value;
            }
            jsonData.position = document.getElementById('position').value;
            jsonData.organisationName = document.getElementById('organisationName').value;
            let sym = document.querySelector('input[name="sym_radio"]:checked').value;
            jsonData.userResponse = (sym == "YES") ? "YES" : "NO";

            if(isNull(jsonData.name)) {
                jsonData.name = document.getElementById('name').value
            }

            submitDetailsToRabbitMQueue();
            if(sym == "NO") {
                displayNotInterestedEventInfoToUser(false);
            } else {
                displayEventSuccessInfoToUser();
            }
        }

        function validateRSVPEventDetails() {
            let msgDivArr = document.getElementsByClassName('text-danger');
            for(let i=0;i<msgDivArr.length;i++) msgDivArr[i].innerHTML = "";

            if(!validateNonEmptyField('name', "Name must not be empty.")) return false;

            if(!viaMysj && (
               !validateNonEmptyField('contactNumber', "Contact number must not be empty.")
                || !validateFieldLength('contactNumber', 9, 15, 'Contact Number not valid.'))) return false;

            if(!validateNonEmptyField('position', "Position must not be empty.")
                || !validateNonEmptyField('organisationName', "Organisation Name must not be empty.")) return false;

            return true;
        }

        function submitEventCheckInDetails() {
            let msgDivArr = document.getElementsByClassName('text-danger');
            for(let i=0;i<msgDivArr.length;i++) msgDivArr[i].innerHTML = "";

            if(!viaMysj && (!validateNonEmptyField('name', "Name must not be empty.")
                || !validateNonEmptyField('contactNumber', "Contact number must not be empty.")
                || !validateFieldLength('contactNumber', 9, 15, 'Contact Number not valid.'))) return false;

            if(!validateNonEmptyField('organisationName', "Organisation Name must not be empty.")) return false;

            let chkBoxVal = document.getElementById('chkTruthful');
            if(!chkBoxVal.checked) {
                let msgDiv = chkBoxVal.nextElementSibling.nextElementSibling;
                msgDiv.innerHTML = "You must acknowledge above information to continue.";
                disableLoader('btnSubmit');
                return false;
            }

            if(!viaMysj) {
                let sym = document.querySelector('input[name="sym_radio"]:checked').value;
                jsonData.status = (sym == "YES") ? "High" : "Low";
            }

            jsonData.name = document.getElementById('name').value;
            jsonData.contact = document.getElementById('contactNumber').value;
            jsonData.organisationName = document.getElementById('organisationName').value;

            submitDetailsToRabbitMQueue();
            displayEventSuccessInfoToUser();
        }

        function submitTempEventRSVPCheckInDetails() {
            if(!validateNonEmptyField('emailAddress', "Email must not be empty.")) return false;

            if(!validateEmail(emailAddress.value)) {
                let msgDiv = emailAddress.nextElementSibling;
                msgDiv.innerHTML = "Email Address is not valid.";
                disableLoader('btnSubmit');
                return false;
            }

            jsonData.name = document.getElementById('emailAddress').value;
            if(!viaMysj) {
                jsonData.contact = jsonData.name;
                jsonData.licenceNumber = null;
            }
            submitDetailsToRabbitMQueue();
            displayPostponedEventInfoToUser();
        }

        function submitTravelQuarantineCheckInDetails() {
            if(!validateTravelQuarantineDetails()) return false;

            if(!viaMysj) {
                jsonData.name = document.getElementById('travelQuarantineName').value;
                jsonData.contact = document.getElementById('travelQuarantineUserName').value;
            }
            if(isNull(jsonData.name)) {
                jsonData.name = document.getElementById('travelQuarantineName').value
            }

            jsonData.identityNumber = document.getElementById('travelQuarantineICNumber').value;
            jsonData.passportNumber = document.getElementById('travelQuarantinePassport').value;
            jsonData.passportNumber = jsonData.passportNumber.toUpperCase();
            jsonData.portOfEntry = document.getElementById('travelQuarantinePointOfEntry').value;
            jsonData.hotel = document.getElementById('travelQuarantineHotel').value;
            jsonData.preferredHotel = document.getElementById('travelQuarantinePrefHotel').value;
            jsonData.hotelBookingNumber = document.getElementById('travelQuarantineHotelBookingNumber').value;
            jsonData.flightNum = document.getElementById('travelQuarantineFlightNum').value;

            jsonData.arrivalDtm = combineDateAndTime('travelQuarantineArrivalDt', 'travelQuarantineArrivalTime');
            jsonData.departureDtm = combineDateAndTime('travelQuarantineDepartureDt', 'travelQuarantineDepartureTime');
            jsonData.nationality = document.getElementById('travelQuarantineNationality').value;
            jsonData.travelMode = document.getElementById('travelQuarantineType').value;

            let dependentArr = [];
            let dependentSize = document.querySelector('#dependentsContainer').childElementCount;
            for(let i=0;i<dependentSize;i++) {
                let dJson = {
                    "name": document.getElementsByName('dependentName')[i].value,
                    "relation": document.getElementsByName('dependentRelation')[i].value,
                    "icNumber": document.getElementsByName('dependentICNumber')[i].value,
                    "passportNumber": document.getElementsByName('dependentPassport')[i].value,
                    "nationality": document.getElementsByName('dependentNationality')[i].value
                };
                dependentArr.push(dJson);
            }
            jsonData.dependentArr = dependentArr;

            submitDetailListToRabbitMQueue();
            displayInfoToUser();
        }

        function validateTravelQuarantineDetails() {
            let msgDivArr = document.getElementsByClassName('text-danger');
            for(let i=0;i<msgDivArr.length;i++) msgDivArr[i].innerHTML = "";

            if(!viaMysj && (
                !validateNonEmptyField('travelQuarantineName', "Name must not be empty.")
                || !validateNonEmptyField('travelQuarantineUserName', "Mobile Number must not be empty."))) return false;

            if(!validateNonEmptyField('travelQuarantineNationality', "Nationality must not be empty.")) return false;

            let nationalityVal = document.getElementById('travelQuarantineNationality').value;
            if(nationalityVal == 'MALAYSIAN') {
                if(!validateNonEmptyField('travelQuarantineICNumber', "IC Number must not be empty.")) return false;
            }
			if(!validateNonEmptyField('travelQuarantinePassport', "Passport number must not be empty.")
			    || !validateFieldLength('travelQuarantinePassport', 6, 10, 'Passport number not valid.')) return false;

            if(!validateNonEmptyField('travelQuarantineType', "Travelling Via must not be empty.")
                || !validateNonEmptyField('travelQuarantinePointOfEntry', "Point of entry must not be empty.")
                || !validateNonEmptyField('travelQuarantineHotel', "Hotel selection must not be empty.")) {
                return false;
            }

            let hotelType = document.querySelector('#travelQuarantineHotel').value;
            if(hotelType == 'Premium Hotel') {
                if(!validateNonEmptyField('travelQuarantinePrefHotel', "Please enter preferred hotel.")
                    || !validateNonEmptyField('travelQuarantineHotelBookingNumber', "Please enter hotel booking number.")) {
                        return false;
                    }
            }

            if(!validateNonEmptyField('travelQuarantineFlightNum', "Flight number must not be empty.")
                || !validateFieldLength('travelQuarantineFlightNum', 3, 10, 'Flight number not valid.')
                || !validateNonEmptyField('travelQuarantineArrivalDt', "Arrival date must not be empty.")
                || !validateNonEmptyField('travelQuarantineArrivalTime', "Arrival time must not be empty.")
                || !validateNonEmptyField('travelQuarantineDepartureDt', "Departure date must not be empty.")
                || !validateNonEmptyField('travelQuarantineDepartureTime', "Departure time must not be empty.")) {
                return false;
            }

            var depDt = new Date(combineDateAndTime('travelQuarantineDepartureDt', 'travelQuarantineDepartureTime'));
            var arrivalDt = new Date(combineDateAndTime('travelQuarantineArrivalDt', 'travelQuarantineArrivalTime'));
            if(depDt.getTime() >= arrivalDt.getTime()) {
                let msgDiv = document.getElementById('travelQuarantineDepartureDt').nextElementSibling;
				msgDiv.innerHTML = "Departure date should be before arrival date.";
                disableLoader('btnSubmit');
                return false;
            }

            let dependentSize = document.querySelector('#dependentsContainer').childElementCount;
            for(let i=0;i<dependentSize;i++) {
                if(!validateNonEmptyField('dependentName_'+i, "Dependent name must not be empty.")
                    || !validateNonEmptyField('dependentRelation_'+i, "Relation must not be empty.")
                    || !validateNonEmptyField('dependentPassport_'+i, "Dependent Passport number must not be empty.")
			        || !validateFieldLength('dependentPassport_'+i, 6, 10, 'Dependent Passport number not valid.')) return false;
            }

            let chkBoxVal = document.getElementById('chkTravelQuarantineTruthful');
            if(!chkBoxVal.checked) {
                let msgDiv = chkBoxVal.nextElementSibling.nextElementSibling;
                msgDiv.innerHTML = "You must acknowledge above information to continue.";
                disableLoader('btnSubmit');
                return false;
            }
            return true;
        }

        function combineDateAndTime(dateElementId, timeElementId) {
            let arrivalDt = document.getElementById(dateElementId).value;
            let dtObj = stringToDate(arrivalDt, 'dd/mm/yyyy', '/');

            let arrivalTm = document.getElementById(timeElementId).value;
            let arrivalTmArr = arrivalTm.split(':');
            dtObj.setHours(arrivalTmArr[0]);
            dtObj.setMinutes(arrivalTmArr[1]);
            return dtObj.toJSON();
        }

        function formattedDate(dt) {
            let d = dt == null ? new Date() : dt;
            return monthNmArr[d.getMonth()] + " " + formattedValue(d.getDate()) + ", " + d.getFullYear();
        }

        function formattedTime(dt) {
            let date = dt == null ? new Date() : dt;
            let hours = date.getHours();
            let minutes = date.getMinutes();
            let ampm = hours >= 12 ? 'pm' : 'am';
            hours = hours % 12;
            hours = hours ? hours : 12;
            return formattedValue(hours) + ':' + formattedValue(minutes) + ':' +  formattedValue(date.getSeconds()) + ' ' + ampm;
        }

        function formattedValue(val) {
            return (val < 10) ? "0"+val : val;
        }

        function disableLoader(buttonId) {
            if(typeof buttonId === 'undefined') return;
            let button = document.getElementById(buttonId);
            let childNodes = button.childNodes;
            childNodes[1].style.display = "none";
        }

        function showLoader(buttonId) {
            if(typeof buttonId === 'undefined') return;
            let btn = document.getElementById(buttonId);
            let childNodes = btn.childNodes;
            childNodes[1].style.display = "inline";
        }

        function validatePhoneNumber(elementId) {
            let element = document.getElementById(elementId);
            let val = element.value;
            if(!(/[0-9]+/i.test(element.val))) {
                element.value = val.replace(/[^0-9]+/i, '');
            }
        }

        function validateName(elementId) {
            let element = document.getElementById(elementId);
            let val = element.value;
            if(!(/^[a-zA-Z@',-./\s]+$/i.test(val))) {
                element.value = val.replace(/[^a-zA-Z@',-./\s]+$/, '');
            }
        }

		function validateAlphanumeric(elementName) {
            let element = document.getElementById(elementName);
            let val = element.value;
            if(!(/^[a-zA-Z\s0-9]+$/i.test(val))) {
                element.value = val.replace(/[^a-zA-Z0-9\s]+$/, '');
            }
        }

        function validateNonEmptyField(elementId, errMessage) {
            let element = document.getElementById(elementId);
			if(element.value.trim().length == 0) {
				let msgDiv = element.nextElementSibling;
				msgDiv.innerHTML = errMessage;
				disableLoader('btnSubmit');
				element.focus();
				return false;
			}
			return true;
        }

        function validateFieldLength(elementId, minLength, maxLength, errorMessage) {
            let element = document.getElementById(elementId);
			if(element.value.length < minLength || element.value.length > maxLength) {
				let msgDiv = element.nextElementSibling;
				msgDiv.innerHTML = errorMessage;
				disableLoader('btnSubmit');
				element.focus();
				return false;
			}
			return true;
        }

        function validateEmail(email) {
            const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }

        function loadHtmlTemplate(elementId, htmlTemplate) {
             let xhr= new XMLHttpRequest();
             xhr.open('GET', htmlTemplate, true);
             xhr.onreadystatechange= function() {
                if (this.readyState!==4) return;
                if (this.status!==200) return; // or whatever error handling you want
                document.getElementById(elementId).innerHTML= this.responseText;

                afterFormInit();
             };
             xhr.send();
        }

        function makeReadOnly(elementId, value) {
            let cn = document.getElementById(elementId);
            cn.value = value;
            cn.readOnly = true;
            cn.classList.remove('form-control');
            cn.classList = (['form-control-plaintext bold text-wrap text-break']);
            cn.onKeyUp = "";
            cn.removeEventListener('onKeyUp', function () {});
        }

        function loadDistrictByState() {
            let stateVal = document.getElementById('travellerState').value;
            document.getElementById('travellerDistrict').innerHTML = getDistrictHtmlStrByState(stateVal);
        }

        function getDistrictHtmlStrByState(stateVal) {
            let htmlStr = "<option value=''>Daerah/District</option>";
            if(stateVal == 'Johor') {
                htmlStr += "<option value='Batu Pahat'>Batu Pahat</option>";
                htmlStr += "<option value='Johor Bahru'>Johor Bahru</option>";
                htmlStr += "<option value='Kluang'>Kluang</option>";
                htmlStr += "<option value='Kota Tinggi'>Kota Tinggi</option>";
                htmlStr += "<option value='Kulai'>Kulai</option>";
                htmlStr += "<option value='Mersing'>Mersing</option>";
                htmlStr += "<option value='Muar'>Muar</option>";
                htmlStr += "<option value='Pontian'>Pontian</option>";
                htmlStr += "<option value='Segamat'>Segamat</option>";
                htmlStr += "<option value='Tangkak'>Tangkak</option>";
            } else if(stateVal == 'Kedah') {
                htmlStr += "<option value='Baling'>Baling</option>";
                htmlStr += "<option value='Bandar Baharu'>Bandar Baharu</option>";
                htmlStr += "<option value='Kota Setar'>Kota Setar</option>";
                htmlStr += "<option value='Kuala Muda'>Kuala Muda</option>";
                htmlStr += "<option value='Kubang Pasu'>Kubang Pasu</option>";
                htmlStr += "<option value='Kulim'>Kulim</option>";
                htmlStr += "<option value='Langkawi'>Langkawi</option>";
                htmlStr += "<option value='Padang Terap'>Padang Terap</option>";
                htmlStr += "<option value='Pendang'>Pendang</option>";
                htmlStr += "<option value='Pokok Sena'>Pokok Sena</option>";
                htmlStr += "<option value='Sik'>Sik</option>";
                htmlStr += "<option value='Yan'>Yan</option>";
            } else if(stateVal == 'Kelantan') {
                htmlStr += "<option value='Bachok'>Bachok</option>";
                htmlStr += "<option value='Gua Musang'>Gua Musang</option>";
                htmlStr += "<option value='Jeli'>Jeli</option>";
                htmlStr += "<option value='Kecil Lojing'>Kecil Lojing</option>";
                htmlStr += "<option value='Kota Bharu'>Kota Bharu</option>";
                htmlStr += "<option value='Kuala Krai'>Kuala Krai</option>";
                htmlStr += "<option value='Machang'>Machang</option>";
                htmlStr += "<option value='Pasir Mas'>Pasir Mas</option>";
                htmlStr += "<option value='Pasir Puteh'>Pasir Puteh</option>";
                htmlStr += "<option value='Tanah Merah'>Tanah Merah</option>";
                htmlStr += "<option value='Tumpat'>Tumpat</option>";
            } else if(stateVal == 'Melaka') {
                htmlStr += "<option value='Alor Gajah'>Alor Gajah</option>";
                htmlStr += "<option value='Jasin'>Jasin</option>";
                htmlStr += "<option value='Melaka Tengah'>Melaka Tengah</option>";
            } else if(stateVal == 'Negeri Sembilan') {
                htmlStr += "<option value='Jelebu'>Jelebu</option>";
                htmlStr += "<option value='Jempol'>Jempol</option>";
                htmlStr += "<option value='Kuala Pilah'>Kuala Pilah</option>";
                htmlStr += "<option value='Port Dickson'>Port Dickson</option>";
                htmlStr += "<option value='Rembau'>Rembau</option>";
                htmlStr += "<option value='Seremban'>Seremban</option>";
                htmlStr += "<option value='Tampin'>Tampin</option>";
            } else if(stateVal == 'Pahang') {
                htmlStr += "<option value='Bentong'>Bentong</option>";
                htmlStr += "<option value='Bera'>Bera</option>";
                htmlStr += "<option value='Cameron Highlands'>Cameron Highlands</option>";
                htmlStr += "<option value='Jerantut'>Jerantut</option>";
                htmlStr += "<option value='Kuantan'>Kuantan</option>";
                htmlStr += "<option value='Lipis'>Lipis</option>";
                htmlStr += "<option value='Maran'>Maran</option>";
                htmlStr += "<option value='Pekan'>Pekan</option>";
                htmlStr += "<option value='Raub'>Raub</option>";
                htmlStr += "<option value='Rompin'>Rompin</option>";
                htmlStr += "<option value='Temerloh'>Temerloh</option>";
            } else if(stateVal == 'Perak') {
                htmlStr += "<option value='Bagan Datuk'>Bagan Datuk</option>";
                htmlStr += "<option value='Batang Padang'>Batang Padang</option>";
                htmlStr += "<option value='Hilir Perak'>Hilir Perak</option>";
                htmlStr += "<option value='Kampar'>Kampar</option>";
                htmlStr += "<option value='Kerian'>Kerian</option>";
                htmlStr += "<option value='Kinta'>Kinta</option>";
                htmlStr += "<option value='Kuala Kangsar'>Kuala Kangsar</option>";
                htmlStr += "<option value='Larut Dan Matang'>Larut Dan Matang</option>";
                htmlStr += "<option value='Manjung'>Manjung</option>";
                htmlStr += "<option value='Muallim'>Muallim</option>";
                htmlStr += "<option value='Perak Tengah'>Perak Tengah</option>";
                htmlStr += "<option value='Hulu Perak'>Hulu Perak</option>";
                htmlStr += "<option value='Selama'>Selama</option>";
            } else if(stateVal == 'Perlis') {
                htmlStr += "<option value='Perlis'>Perlis</option>";
            } else if(stateVal == 'Pulau Pinang') {
                htmlStr += "<option value='Barat Daya'>Barat Daya</option>";
                htmlStr += "<option value='Seberang Perai Selatan'>Seberang Perai Selatan</option>";
                htmlStr += "<option value='Seberang Perai Tengah'>Seberang Perai Tengah</option>";
                htmlStr += "<option value='Seberang Perai Utara'>Seberang Perai Utara</option>";
                htmlStr += "<option value='Timur Laut'>Timur Laut</option>";
            } else if(stateVal == 'Sabah') {
                htmlStr += "<option value='Beaufort'>Beaufort</option>";
                htmlStr += "<option value='Beluran'>Beluran</option>";
                htmlStr += "<option value='Kalabakan'>Kalabakan</option>";
                htmlStr += "<option value='Keningau'>Keningau</option>";
                htmlStr += "<option value='Kinabatangan'>Kinabatangan</option>";
                htmlStr += "<option value='Kota Belud'>Kota Belud</option>";
                htmlStr += "<option value='Kota Kinabalu'>Kota Kinabalu</option>";
                htmlStr += "<option value='Kota Marudu'>Kota Marudu</option>";
                htmlStr += "<option value='Kuala Penyu'>Kuala Penyu</option>";
                htmlStr += "<option value='Kudat'>Kudat</option>";
                htmlStr += "<option value='Kunak'>Kunak</option>";
                htmlStr += "<option value='Lahad Datu'>Lahad Datu</option>";
                htmlStr += "<option value='Nabawan'>Nabawan</option>";
                htmlStr += "<option value='Papar'>Papar</option>";
                htmlStr += "<option value='Penampang'>Penampang</option>";
                htmlStr += "<option value='Pitas'>Pitas</option>";
                htmlStr += "<option value='Putatan'>Putatan</option>";
                htmlStr += "<option value='Ranau'>Ranau</option>";
                htmlStr += "<option value='Sandakan'>Sandakan</option>";
                htmlStr += "<option value='Semporna'>Semporna</option>";
                htmlStr += "<option value='Sipitang'>Sipitang</option>";
                htmlStr += "<option value='Tambunan'>Tambunan</option>";
                htmlStr += "<option value='Tawau'>Tawau</option>";
                htmlStr += "<option value='Telupid'>Telupid</option>";
                htmlStr += "<option value='Tenom'>Tenom</option>";
                htmlStr += "<option value='Tongod'>Tongod</option>";
                htmlStr += "<option value='Tuaran'>Tuaran</option>";
            } else if(stateVal == 'Sarawak') {
                htmlStr += "<option value='Asajaya'>Asajaya</option>";
                htmlStr += "<option value='Bau'>Bau</option>";
                htmlStr += "<option value='Belaga'>Belaga</option>";
                htmlStr += "<option value='Beluru'>Beluru</option>";
                htmlStr += "<option value='Betong'>Betong</option>";
                htmlStr += "<option value='Bintulu'>Bintulu</option>";
                htmlStr += "<option value='Bukit Mabong'>Bukit Mabong</option>";
                htmlStr += "<option value='Dalat'>Dalat</option>";
                htmlStr += "<option value='Daro'>Daro</option>";
                htmlStr += "<option value='Julau'>Julau</option>";
                htmlStr += "<option value='Kabong'>Kabong</option>";
                htmlStr += "<option value='Kanowit'>Kanowit</option>";
                htmlStr += "<option value='Kapit'>Kapit</option>";
                htmlStr += "<option value='Kuching'>Kuching</option>";
                htmlStr += "<option value='Lawas'>Lawas</option>";
                htmlStr += "<option value='Limbang'>Limbang</option>";
                htmlStr += "<option value='Lubok Antu'>Lubok Antu</option>";
                htmlStr += "<option value='Lundu'>Lundu</option>";
                htmlStr += "<option value='Maradong'>Maradong</option>";
                htmlStr += "<option value='Marudi'>Marudi</option>";
                htmlStr += "<option value='Matu'>Matu</option>";
                htmlStr += "<option value='Miri'>Miri</option>";
                htmlStr += "<option value='Mukah'>Mukah</option>";
                htmlStr += "<option value='Pakan'>Pakan</option>";
                htmlStr += "<option value='Pusa'>Pusa</option>";
                htmlStr += "<option value='Samarahan'>Samarahan</option>";
                htmlStr += "<option value='Saratok'>Saratok</option>";
                htmlStr += "<option value='Sarikei'>Sarikei</option>";
                htmlStr += "<option value='Sebauh'>Sebauh</option>";
                htmlStr += "<option value='Selangau'>Selangau</option>";
                htmlStr += "<option value='Serian'>Serian</option>";
                htmlStr += "<option value='Sibu'>Sibu</option>";
                htmlStr += "<option value='Simunjan'>Simunjan</option>";
                htmlStr += "<option value='Song'>Song</option>";
                htmlStr += "<option value='Sri Aman'>Sri Aman</option>";
                htmlStr += "<option value='Subis'>Subis</option>";
                htmlStr += "<option value='Tanjung Manis'>Tanjung Manis</option>";
                htmlStr += "<option value='Tatau'>Tatau</option>";
                htmlStr += "<option value='Tebedu'>Tebedu</option>";
                htmlStr += "<option value='Telang usan'>Telang usan</option>";
            } else if(stateVal == 'Selangor') {
                htmlStr += "<option value='Gombak'>Gombak</option>";
                htmlStr += "<option value='Klang'>Klang</option>";
                htmlStr += "<option value='Kuala Langat'>Kuala Langat</option>";
                htmlStr += "<option value='Kuala Selangor'>Kuala Selangor</option>";
                htmlStr += "<option value='Petaling'>Petaling</option>";
                htmlStr += "<option value='Sabak Bernam'>Sabak Bernam</option>";
                htmlStr += "<option value='Sepang'>Sepang</option>";
                htmlStr += "<option value='Hulu Langat'>Hulu Langat</option>";
                htmlStr += "<option value='Hulu Selangor'>Hulu Selangor</option>";
            } else if(stateVal == 'Terengganu') {
                htmlStr += "<option value='Besut'>Besut</option>";
                htmlStr += "<option value='Dungun'>Dungun</option>";
                htmlStr += "<option value='Hulu Terengganu'>Hulu Terengganu</option>";
                htmlStr += "<option value='Kemaman'>Kemaman</option>";
                htmlStr += "<option value='Kuala Nerus'>Kuala Nerus</option>";
                htmlStr += "<option value='Kuala Terengganu'>Kuala Terengganu</option>";
                htmlStr += "<option value='Marang'>Marang</option>";
                htmlStr += "<option value='Setiu'>Setiu</option>";
            } else if(stateVal == 'WP Kuala Lumpur') {
                htmlStr += "<option value='Wilayah Persekutuan Kuala Lumpur'>W.P. Kuala Lumpur</option>";
            } else if(stateVal == 'WP Labuan') {
                htmlStr += "<option value='Wilayah Persekutuan Labuan'>W.P. Labuan</option>";
            } else if(stateVal == 'WP Putrajaya') {
                htmlStr += "<option value='Wilayah Persekutuan Putrajaya'>W.P. Putrajaya</option>";
            }
            return htmlStr;
        }

        function isNull(str) {
            return str == null || typeof(str) == 'undefined' || str == 'undefined' || str == 'null' || str.trim().length == 0;
        }

        function stringToDate(_date,_format,_delimiter) {
            let formatLowerCase=_format.toLowerCase();
            let formatItems=formatLowerCase.split(_delimiter);
            let dateItems=_date.split(_delimiter);
            let monthIndex=formatItems.indexOf("mm");
            let dayIndex=formatItems.indexOf("dd");
            let yearIndex=formatItems.indexOf("yyyy");
            let month=parseInt(dateItems[monthIndex]);
            month-=1;
            return new Date(dateItems[yearIndex],month,dateItems[dayIndex]);
        }

        function enableTimePicker(elementId) {
            document.querySelector("#"+elementId).addEventListener("input", function(e) {
                const reTime = /^([0-1][0-9]|2[0-3]):[0-5][0-9]$/;
                const time = this.value;
                if (reTime.exec(time)) {
                const minute = Number(time.substring(3,5));
                const hour = Number(time.substring(0,2)) % 12 + (minute / 60);
                this.style.backgroundImage = `url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'><circle cx='20' cy='20' r='18.5' fill='none' stroke='%23222' stroke-width='3' /><path d='M20,4 20,8 M4,20 8,20 M36,20 32,20 M20,36 20,32' stroke='%23bbb' stroke-width='1' /><circle cx='20' cy='20' r='2' fill='%23222' stroke='%23222' stroke-width='2' /></svg>"), url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'><path d='M18.5,24.5 19.5,4 20.5,4 21.5,24.5 Z' fill='%23222' style='transform:rotate(${360 * minute / 60}deg); transform-origin: 50% 50%;' /></svg>"), url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'><path d='M18.5,24.5 19.5,8.5 20.5,8.5 21.5,24.5 Z' style='transform:rotate(${360 * hour / 12}deg); transform-origin: 50% 50%;' /></svg>")`;
                }
            });
        }

        function addMoreDependent() {
            let count = document.querySelector('#dependentsContainer').childElementCount;
            if(count == 10) {
                document.querySelector("#dependentsContainer").nextElementSibling.nextElementSibling.innerHTML = 'Please scan QR code again to add additional family member';
                return;
            }

            let htmlStr = '<div class="" id="">';
            htmlStr += '<div class="row">';
            htmlStr += '<div class="col-10"><h6>Tanggungan '+(count+1)+'/Dependent '+(count+1)+'</h6></div>';
            htmlStr += '<a href="javascript:deleteDependent('+count+')"><div class="col text-center"><img src="/images/minus.png" width="25" /></a></div>';
            htmlStr += '</div>';

            htmlStr += '<div class="form-group required">';
            htmlStr += '    <label class="control-label">Nama Tanggungan/Dependent’s Name</label>';
            htmlStr += '    <input type="text" placeholder="Nama Tanggungan/Dependent’s Name" autocomplete="off" id="dependentName_'+count+'" class="form-control" maxlength="40" minlength="1" onkeyup="validateName(\'dependentName_'+count+'\');" name="dependentName"/>';
            htmlStr += '    <div class="text-danger small"></div>';
            htmlStr += '</div>';

            htmlStr += '<div class="form-group">';
            htmlStr += '    <label class="control-label">Hubungan/Relation</label>';
            htmlStr += '    <select id="dependentRelation_'+count+'" name="dependentRelation" class="form-control">';
            htmlStr += '        <option value="">Hubungan/Relation</option>';
            htmlStr += '        <option value="Spouse">Spouse</option>';
            htmlStr += '        <option value="Child">Child</option>';
            htmlStr += '        <option value="Siblings">Siblings</option>';
            htmlStr += '        <option value="Parents">Parents/Parents-in-law</option>';
            htmlStr += '        <option value="Grandparents">Grandparents</option>';
            htmlStr += '        <option value="Guardian">Guardian</option>';
            htmlStr += '    </select>';
            htmlStr += '    <div class="text-danger small"></div>';
            htmlStr += '</div>';

            htmlStr += '    <div class="form-group required">';
            htmlStr += '        <label class="control-label">Nationality</label>';
            htmlStr += '        <select id="dependentNationality_'+count+'" class="form-control" name="dependentNationality" onchange="onChangeDependentNationality('+count+');">';
            htmlStr += '            <option value="">Warganegara/Nationality</option>';
            htmlStr += '            <option value="MALAYSIAN">Malaysian</option>';
            htmlStr += '            <option value="NON-MALAYSIAN">Non Malaysian</option>';
            htmlStr += '        </select>';
            htmlStr += '        <div class="text-danger small"></div>';
            htmlStr += '    </div>';

            htmlStr += '<div class="form-group d-none">';
            htmlStr += '    <label class="control-label">No KP Tanggungan/Dependent IC Number</label>';
            htmlStr += '    <input type="text" placeholder="No KP Tanggungan/Dependent IC Number" autocomplete="off" id="dependentICNumber_'+count+'" class="form-control" maxlength="20" minlength="6" name="dependentICNumber"/>';
            htmlStr += '    <div class="text-danger small"></div>';
            htmlStr += '</div>';

            htmlStr += '<div class="form-group mb-2 required">';
            htmlStr += '    <label class="control-label">No. Passport Tanggungan/Dependent’s Passport</label>';
            htmlStr += '    <input type="text" placeholder="No. Passport Tanggungan/Dependent’s Passport" autocomplete="off" id="dependentPassport_'+count+'" class="form-control" maxlength="10" minlength="6" onkeyup="validateAlphanumeric(\'dependentPassport_'+count+'\');" name="dependentPassport"/>';
            htmlStr += '    <div class="text-danger small"></div>';
            htmlStr += '</div>';

            var dvElement = document.createElement("div");
            dvElement.id = 'dependent_' + count;
            dvElement.classList = ["mb-2 bg-light p-3 rounded"];
            dvElement.innerHTML = htmlStr;
            document.querySelector("#dependentsContainer").appendChild(dvElement);
        }

        function deleteDependent(cnt) {
            document.querySelector("#dependentsContainer").nextElementSibling.nextElementSibling.innerHTML = '';
            document.getElementById('dependent_'+cnt).remove();
        }

        function loadPortOfEntryByType() {
            let typeVal = document.getElementById('travelQuarantineType').value;
            document.getElementById('travelQuarantinePointOfEntry').innerHTML = getPortOfEntryOptionsHtmlStrByType(typeVal);
        }

        function getPortOfEntryOptionsHtmlStrByType(type) {
            let htmlStr = '<option value="">Pintu Masuk/Point of Entry</option>';
            if(type == 'AIR') {
                htmlStr += '<option value="Bintulu International Airport">Bintulu International Airport</option>';
                htmlStr += '<option value="KLIA">KLIA</option>';
                htmlStr += '<option value="KLIA2">KLIA2</option>';
                htmlStr += '<option value="Kota Kinabalu International Airport">Kota Kinabalu International Airport</option>';
                htmlStr += '<option value="Kuching International Airport">Kuching International Airport</option>';
                htmlStr += '<option value="Labuan International Airport">Labuan International Airport</option>';
                htmlStr += '<option value="Langkawi International Airport">Langkawi International Airport</option>';
                htmlStr += '<option value="LTAAS Subang">LTAAS Subang</option>';
                htmlStr += '<option value="Malacca International Airport">Malacca International Airport</option>';
                htmlStr += '<option value="Miri International Airport">Miri International Airport</option>';
                htmlStr += '<option value="Penang International Airport">Penang International Airport</option>';
                htmlStr += '<option value="Redang Airport">Redang Airport</option>';
                htmlStr += '<option value="Sandakan International Airport">Sandakan International Airport</option>';
                htmlStr += '<option value="Senai International Airport">Senai International Airport</option>';
                htmlStr += '<option value="Sibu International Airport">Sibu International Airport</option>';
                htmlStr += '<option value="Sultan Azlan Shah Airport">Sultan Azlan Shah Airport</option>';
                htmlStr += '<option value="Sultan Haji Ahmad Shah Airport">Sultan Haji Ahmad Shah Airport</option>';
                htmlStr += '<option value="Tawau International Airport">Tawau International Airport</option>';
                htmlStr += '<option value="Tioman Airport">Tioman Airport</option>';
            } else if(type == 'LAND') {
                htmlStr += '<option value="Bangunan Sultan Iskandar (Tanjung Puteri)">Bangunan Sultan Iskandar (Tanjung Puteri)</option>';
                htmlStr += '<option value="Bukit Bunga">Bukit Bunga</option>';
                htmlStr += '<option value="Bukit Kayu Hitam">Bukit Kayu Hitam</option>';
                htmlStr += '<option value="ICQS Biawak">ICQS Biawak</option>';
                htmlStr += '<option value="ICQS Lubok Antu">ICQS Lubok Antu</option>';
                htmlStr += '<option value="ICQS Mengkalap">ICQS Mengkalap</option>';
                htmlStr += '<option value="ICQS Merapok">ICQS Merapok</option>';
                htmlStr += '<option value="ICQS Pandaruan">ICQS Pandaruan</option>';
                htmlStr += '<option value="ICQS Sungei Tujoh">ICQS Sungei Tujoh</option>';
                htmlStr += '<option value="ICQS Tebedu">ICQS Tebedu</option>';
                htmlStr += '<option value="ICQS Tedungan">ICQS Tedungan</option>';
                htmlStr += '<option value="Kompleks Sultan Abu Bakar (Second Link)">Kompleks Sultan Abu Bakar (Second Link)</option>';
                htmlStr += '<option value="Kota Putra, Durian Burung">Kota Putra, Durian Burung</option>';
                htmlStr += '<option value="Nabawan">Nabawan</option>';
                htmlStr += '<option value="Padang Besar">Padang Besar</option>';
                htmlStr += '<option value="Pengkalan Hulu">Pengkalan Hulu</option>';
                htmlStr += '<option value="Pengkalan Kubur">Pengkalan Kubur</option>';
                htmlStr += '<option value="Rantau Panjang">Rantau Panjang</option>';
                htmlStr += '<option value="Wang Kelian">Wang Kelian</option>';
            } else if(type == 'SEA') {
                htmlStr += '<option value="Batu Pahat Port">Batu Pahat Port</option>';
                htmlStr += '<option value="Bintulu Port">Bintulu Port</option>';
                htmlStr += '<option value="Dagangan Barter Sg Kuala Linggi Port">Dagangan Barter Sg Kuala Linggi Port</option>';
                htmlStr += '<option value="Dermaga Custom Limbang">Dermaga Custom Limbang</option>';
                htmlStr += '<option value="Dermaga Tanjung Lembung Port">Dermaga Tanjung Lembung Port</option>';
                htmlStr += '<option value="ICQ P Melaka">ICQ P Melaka</option>';
                htmlStr += '<option value="Kerteh Port">Kerteh Port</option>';
                htmlStr += '<option value="Klang Port">Klang Port</option>';
                htmlStr += '<option value="Kuah Jetty">Kuah Jetty</option>';
                htmlStr += '<option value="Kuantan Port">Kuantan Port</option>';
                htmlStr += '<option value="Kukup Jetty, Pontian">Kukup Jetty, Pontian</option>';
                htmlStr += '<option value="Kunak Port">Kunak Port</option>';
                htmlStr += '<option value="Labuan Port">Labuan Port</option>';
                htmlStr += '<option value="Lahad Datu Port">Lahad Datu Port</option>';
                htmlStr += '<option value="Lumut Port">Lumut Port</option>';
                htmlStr += '<option value="Miri Port">Miri Port</option>';
                htmlStr += '<option value="Muar Port">Muar Port</option>';
                htmlStr += '<option value="Pasir Gudang Ferry Terminal">Pasir Gudang Ferry Terminal</option>';
                htmlStr += '<option value="Pasir Gudang Port">Pasir Gudang Port</option>';
                htmlStr += '<option value="Petronas Sg Udang Port">Petronas Sg Udang Port</option>';
                htmlStr += '<option value="Port Dickson">Port Dickson</option>';
                htmlStr += '<option value="Pulau Pinang Port">Pulau Pinang Port</option>';
                htmlStr += '<option value="Pulau Redang Port">Pulau Redang Port</option>';
                htmlStr += '<option value="Pulau Tioman Port">Pulau Tioman Port</option>';
                htmlStr += '<option value="Pusat Dagangan Barter Sg Rambai Port">Pusat Dagangan Barter Sg Rambai Port</option>';
                htmlStr += '<option value="Puteri Harbour Port">Puteri Harbour Port</option>';
                htmlStr += '<option value="Quayside Melaka Port">Quayside Melaka Port</option>';
                htmlStr += '<option value="Sandakan Port">Sandakan Port</option>';
                htmlStr += '<option value="Semporna Port">Semporna Port</option>';
                htmlStr += '<option value="Senari (Kuching) Port">Senari (Kuching) Port</option>';
                htmlStr += '<option value="Sibu Port">Sibu Port</option>';
                htmlStr += '<option value="Sipitang Port">Sipitang Port</option>';
                htmlStr += '<option value="Stulang Port">Stulang Port</option>';
                htmlStr += '<option value="Tanjung Belungkor Port">Tanjung Belungkor Port</option>';
                htmlStr += '<option value="Tanjung Berhala Port">Tanjung Berhala Port</option>';
                htmlStr += '<option value="Tanjung Beruas Port">Tanjung Beruas Port</option>';
                htmlStr += '<option value="Tanjung Manis Port">Tanjung Manis Port</option>';
                htmlStr += '<option value="Tanjung Pelepas Port">Tanjung Pelepas Port</option>';
                htmlStr += '<option value="Tanjung Pengelih Port">Tanjung Pengelih Port</option>';
                htmlStr += '<option value="Tawau Port">Tawau Port</option>';
                htmlStr += '<option value="Telaga Harbour Park Port">Telaga Harbour Park Port</option>';
            }
            return htmlStr;
        }

        function onChangeNationality() {
            let nVal = document.getElementById('travelQuarantineNationality').value;
            if(nVal == 'MALAYSIAN') {
                document.querySelector('#travelQuarantineICNumber').parentElement.classList.remove('d-none');
            } else {
                document.querySelector('#travelQuarantineICNumber').parentElement.classList.add('d-none');
            }
        }

        function onChangeDependentNationality(cnt) {
            let nVal = document.getElementById('dependentNationality_'+cnt).value;
            if(nVal == 'MALAYSIAN') {
                document.querySelector('#dependentICNumber_'+cnt).parentElement.classList.remove('d-none');
            } else {
                document.querySelector('#dependentICNumber_'+cnt).parentElement.classList.add('d-none');
            }
        }

        function addDays(date, days) {
            let dt = date.setDate(date.getDate() + days);
            return new Date(dt);
        }

        function displayVaccinationContainer() {
            let vaccineTaken = document.querySelector('#travellerVaccineSelect').value;
            if(vaccineTaken == 'YES') {
                document.getElementById('vaccinationContainer').classList.remove('d-none');
            } else {
                document.getElementById('vaccinationContainer').classList.add('d-none');
            }
        }

        function displayHotelContainer() {
            let hotelType = document.querySelector('#travelQuarantineHotel').value;
            if(hotelType == 'Premium Hotel') {
                document.getElementById('travelQuarantineHotelContainer').classList.remove('d-none');
            } else {
                document.getElementById('travelQuarantineHotelContainer').classList.add('d-none');
            }
        }
    </script>
	


</body></html>