<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Page-->
    <title>Patient Registration Form</title>

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
    <!-- <link rel="icon" href="icon-pstw-main.ico"> -->
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
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
                                <label class=""><span style="color:red;">*Notes </span><br>Do Click Selangkah To Store Data & Continue to Selangkah</label>
                            </div>
                            <input type="hidden" name="ucheck" id="ucheck" value="Uncheck" title="Please Click Selangkah">
                        </div>
                        <div class="p-t-15">
                            <button class="btn" type="submit" id="ajaxstore"><img src="SELangkah_logo.jpg" width="50%" id="selangkahclick"/></button>
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
    <script>
        $(document).ready(function(){
            // $("#utemp").keypress(function (e) {
            //     //if the letter is not digit then display error and don't type anything
            //     if (e.which != 8 && e.which != 0 && e.which != 190 && (e.which < 48 || e.which > 57)) {
            //         //display error message
            //         $("#errmsg").html("Digits Only").show().fadeOut("slow");
            //             return false;
            //     }
            // });
            // $("#ajaxstore").hide();
            // $("#selangkahclick").click(function(){
            //     $("#ajaxstore").show();
            // })
            $('#regform').validate({ // initialize the plugin
                    rules: {
                        uname: {
                            required: true,
                        },
                        utemp: {
                            required: true,
                            number: true,
                        },
                        ucheck: {
                            required: true,
                        },
                        utype: {
                            required: true,
                        }
                    },
         submitHandler: function (form) {
                var uname = $('#uname').val();
                var utemp = $('#utemp').val();
                var ucheck = $('#ucheck').val();
                var utype = $('#utype :selected').val();
                $.ajax({
                    url: 'store.php',
                    type: 'post',
                    data: {uname: uname, utemp: utemp, ucheck: ucheck, utype: utype },
				    cache: false,
                    success: function(response){
                        var jsonresponse = JSON.parse(response);
                        console.log(response)
                        if (jsonresponse.statusCode == 200){
                            alert("Record Stored");
                            window.location.href = "https://selangkah.my/qrscan/register?LQR=163000000020686";
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

</body>

</html>
<!-- end document-->
