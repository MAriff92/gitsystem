<html>
<head>
<!-- Required meta tags-->
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Page-->
    <title>PSTW Daily Registration List</title>

    <!-- Icons font CSS-->
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/main.css" rel="stylesheet" media="all">
    <link rel="shortcut icon" href="../icon-pstw-main.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/datatables/datatables.min.css"/>
    <!-- <link rel="icon" href="icon-pstw-main.ico"> -->
</head>
<body>
<div class="container">
<div class="row-fluid">

</div>
<div class="row-fluid">
    <div class="row">
    <div class="col-md-12"  style="font-weight: bold;">Date Range Filter</div>
        <div class="col-md-4">
            <label>Start Date</label>
            <input 
            type="date" 
            id="min_date"
            class="date-range-filter"
            placeholder="From: yyyy-mm-dd">
        </div>   
        <div class="col-md-4">
            <label>End Date</label>
            <input 
            type="date" 
            id="max_date" 
            class="date-range-filter"
            placeholder="To: yyyy-mm-dd">
        </div>
    </div>
<table class="table table-bordered" id="reglist">
  <thead>
    <tr class="table-info">
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Temperature</th>
      <th scope="col">Fever</th>
      <th scope="col">Cough</th>
	  <th scope="col">User Company</th>
      <th scope="col">User Type</th>
      <th scope="col">Selangkah</th>
      <th scope="col">Checked Time</th>
    </tr>
  </thead>
  <tbody id="tbody_list">
    
  </tbody>
</table>
</div>
</div>
 <!-- Jquery JS-->
 <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    
    <script src="../vendor/select2/select2.min.js"></script>
    <script src="../vendor/datepicker/moment.min.js"></script>
    <script src="../vendor/datepicker/daterangepicker.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <!-- Main JS-->
    <script src="../js/global.js"></script>
    <script src="../js/js.cookie.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../vendor/datatables/datatables.min.js"></script>
    <script>
    $(document).ready(function(){
        function GetFormattedDate(MinMax) {
            var todayTime = new Date();
            var month;
            var day;
            var year = (todayTime.getFullYear());
            if (MinMax == "Min"){
                day = "01";
                month = "01"
            }
            if (MinMax == "Max"){
                day = "31";
                month = "12"
            }
            return year + "-" + month + "-" + day;
        }
        function formatDate(date) {
                day = date.substring(0, 2)
                month = date.substring(3, 5)
                year = date.substring(6, 10)

            return [month, day, year].join('/');
        }
        function formatDatePicker(date) {
                day = date.substring(8, 10)
                month = date.substring(5, 7)
                year = date.substring(0, 4)

            return [month, day, year].join('/');
        }
    
        $('#min_date').change( function() {
            $('#reglist').DataTable().draw();
        } );
        $('#max_date').change( function() {
            $('#reglist').DataTable().draw();
        });
        $.ajax({
                    url: 'reg_list.php',
                    type: 'get',
                    data: {key:"PSTW" },
				    cache: false,
                    success: function(response){
                        var jsonresponse = JSON.parse(response);
                        console.log(jsonresponse.statusCode)
                        if (jsonresponse.statusCode == 200){
                            if(jsonresponse.data){
                                var userlist = jsonresponse.data;
                                userlist.forEach(function(userrow){
                                    $("#tbody_list").append("<tr><td>"+userrow.id+"</td><td>"+userrow.uname+"</td><td>"+userrow.utemp+"</td><td>"+userrow.ufever+"</td><td>"+userrow.ucough+"</td><td>"+userrow.ucomp+"</td><td>"+userrow.utype+"</td><td>"+userrow.ucheck+"</td><td>"+userrow.utime+"</td></tr>");
                                });
                            }
                            else{
                                $("#tbody_list").append("<tr><td colspan='8' class='text-center'>No Data</td></tr>");
                            }
                        }
                        else{
                            alert("Something wrong");
                        }
                        
                        $('#reglist').DataTable({
                            dom: 'Bfrtip',
                            buttons: [
                                'pdfHtml5',
                                'excel',
                            ]
                        });
                        
                        $.fn.dataTable.ext.search.push(
                            function (settings, data, dataIndex) {
                                var min;
                                var max;
                                if($('#min_date').val() == ''){
                                    min= new Date(GetFormattedDate("Min"));
                                }
                                else{
                                    min = new Date(formatDatePicker($('#min_date').val()));
                                }
                                if($('#max_date').val() == ''){
                                    max= new Date(GetFormattedDate("Max"));
                                }
                                else{
                                    max = new Date(formatDatePicker($('#max_date').val()));
                                }
                                var startDate = new Date(formatDate(data[7]));
                                if (min == null && max == null) return true;
                                if (min == null && startDate <= max) return true;
                                if (max == null && startDate >= min) return true;
                                if (startDate <= max && startDate >= min) return true;
                                return false;
                            }
                        );
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    }
                });
    });
    </script>
    </body>
    </html>