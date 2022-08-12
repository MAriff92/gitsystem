
<?php
// include('top-cache.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Page-->
    <title>Daily Registration Form</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link rel="shortcut icon" href="icon-pstw-main.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="icon" href="icon-pstw-main.ico"> -->
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h6 id="lastlog"></h6>
                    <h2 class="title">PSTW Daily Registration</h2>
                    <form method="POST" id="regform">
                        <div class="row row-space">
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="uname" id="uname" required/>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <label class="">Phone</label>
                                    <input class="input--style-4" type="text" name="unumb" id="unumb" required/>
                                </div>
                            </div>
                        </div>
						<div class="row row-space">
                            <div class="form-group col-md-6">
                                <div class="input-group">
                                    <label class="">Temperature (°C)</label>
                                    <input class="input--style-4" type="text" name="utemp" id="utemp" required/><span id="errmsg"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="form-group col-md-6">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="ufever" id="ufever" value="Positive"/>Fever
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="ucough" id="ucough" value="Positive"/>Cough
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row row-space">
							<div class="form-group col-md-6">
                                <label for="ucomp">Company</label>
                                <div class="">
                                    <select name="ucomp" id="ucomp" required title="Please select type" class="form-control">
                                        <option value="" disabled="disabled" selected="selected" >Select Type</option>
                                        <option value="PSTW">PSTW</option>
                                        <option value="TECS">TECS</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="utype">User Type</label>
                                <div class="">
                                    <select name="utype" id="utype" required title="Please select type" class="form-control">
                                        <option value="" disabled="disabled" selected="selected" >Select Type</option>
                                        <option value="Staff">Staff</option>
                                        <option value="Guest">Guest</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group">
                                <label class=""><span style="color:red;">*Notes </span><br>Do click Pakar Scieno TW logo below to store data</label>
                            </div>
                            <input type="hidden" name="ucheck" id="ucheck" value="Uncheck" title="Please Click Selangkah">
                        </div>
                        <div class="p-t-15">
                            <button class="btn" type="submit" id="ajaxstore"><img src="img/logo-pstw-main.png" width="100%" id="selangkahclick"/></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->

    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script src="js/js.cookie.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
                var cur_fever = "Negative";
                var cur_cough = "Negative"
            $('#ufever').change(function(){
                if($('#ufever:checked').val() == "Positive"){
                    cur_fever = $('#ufever:checked').val();
                }
                else{
                    cur_fever ="Negative";
                }
            });
            $('#ucough').change(function(){
                if($('#ucough:checked').val() == "Positive"){
                    cur_cough = $('#ucough:checked').val();
                }
                else{
                    cur_cough = "Negative";
                }
            });
            if (Cookies.get('uname')){
                var cookies_uname = Cookies.get('uname')
                $('#uname').val(cookies_uname);
            }
			if (Cookies.get('unumb')){
                var cookies_unumb = Cookies.get('unumb')
                $('#unumb').val(cookies_unumb);
            }
            if (Cookies.get('utype')){
                var cookies_utype = Cookies.get('utype')
                $("#utype").val(cookies_utype)
            }
			if (Cookies.get('ucomp')){
                var cookies_ucomp = Cookies.get('ucomp')
                $("#ucomp").val(cookies_ucomp)
            }
            if (Cookies.get('ukey')){
                var cookies_ukey = Cookies.get('ukey')
                $.ajax({
                    url: 'userkey.php',
                    type: 'POST',
                    data: {ukey:cookies_ukey,  uname:cookies_uname, utype:cookies_utype, unumb:cookies_unumb},
				    cache: false,
                    success: function(response){
                        var jsonresponse = JSON.parse(response);
                        if (jsonresponse.statusCode == 200){
                            if(jsonresponse.data){
                                var userlist = jsonresponse.data;
                                userlist.forEach(function(userrow){
                                    $("#lastlog").append("Last Login: "+userrow.utime);
                                });
                            }
                            else{
                                $("#lastlog").append("Last Login: No Data");
                            }
                        }
                        else{
                            console.log("Something wrong");
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        console.log("Status: " + textStatus); console.log("Error: " + errorThrown);
                    }
                });
            }
            $('#regform').validate({ // initialize the plugin
                    rules: {
                        uname: {
                            required: true,
                        },
						unumb: {
                            required: true,
							number: true,
                        },
                        utemp: {
                            required: true,
                            number: true,
                        },
                        ucheck: {
                            required: true,
                        },
						ucomp: {
                            required: true,
                        },
                        utype: {
                            required: true,
                        }
                    },
         submitHandler: function (form) {
                $('#ucheck').val("Checked");
                var uname = $('#uname').val();
				var unumb = $('#unumb').val();
                var utemp = $('#utemp').val();
                var ufever = cur_fever;
                var ucough = cur_cough;
                var ucheck = $('#ucheck').val();
				var ucomp = $('#ucomp').val();
                var utype = $('#utype :selected').val();
                Cookies.set('uname', uname, { expires: 30 });
				Cookies.set('unumb', unumb, { expires: 30 });
				Cookies.set('ucomp', ucomp, { expires: 30 });
                Cookies.set('utype', utype, { expires: 30 });
                var ukey = btoa(uname + utype);
                Cookies.set('ukey', ukey, { expires: 30 });
                $.ajax({
                    url: 'store.php',
                    type: 'post',
                    data: {uname: uname, utemp: utemp, ucheck: ucheck, ucomp: ucomp, utype: utype, ufever: ufever, ucough: ucough, ukey: ukey},
                    success: function(response){
                        var jsonresponse = JSON.parse(response);
                        console.log(response)
                        if (jsonresponse.statusCode == 200){
                            alert("Record Stored");
                            // window.location.href = "https://selangkah.my/qrscan/scan?LQR=163000000020686";
							window.location.href = "MySejahtera.php?lId=5f31fc47e0dcfd089c4e1983&eln=UEFLQVIgU0NJRU5PIFRXIFNETiBCSEQ=&formType=REGULAR&isExternal=false&uname="+uname+"&unumb="+unumb;
                        }
                        else{
                            alert("Something wrong");
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        alert("Status: " + textStatus); alert("Error: " + errorThrown);
                    }
                });
         }
                });

        });
    </script>

{{-- <script src="http://code.jquery.com/jquery-3.3.1.min.js"
https://appdividend.com/2022/01/22/laravel-ajax/
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous">
</script>
<script>
   jQuery(document).ready(function(){
      jQuery('#ajaxSubmit').click(function(e){
         e.preventDefault();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
         jQuery.ajax({
            url: "{{ url('/grocery/post') }}",
            method: 'post',
            data: {
               name: jQuery('#name').val(),
               type: jQuery('#type').val(),
               price: jQuery('#price').val()
            },
            success: function(result){
               console.log(result);
            }});
         });
      });
</script> --}}

</body>

</html>
<!-- end document-->
<?php
// include('bottom-cache.php');
?>
