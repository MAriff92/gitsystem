<html>
<head>
<!-- Jquery JS-->
 <script src="../vendor/jquery/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css"/>

<link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<script type="text/javascript" src="../vendor/datatables/datatables.min.js"></script>
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
</body>
<script>

$(document).ready(function() {
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
						
						// Add event listeners to the two range filtering inputs
						$('#min_date').change( function() {
							$('#reglist').DataTable().draw();
						} );
						$('#max_date').change( function() {
							$('#reglist').DataTable().draw();
						});
                        
                        $.fn.dataTable.ext.search.push(
                            function (settings, data, dataIndex) {
								// console.log(data);
                                var min;
                                var max;
                                if($('#min_date').val() == ''){
                                    min = new Date(GetFormattedDate("Min"));
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
                                var startDate = new Date(formatDate(data[8]));
                                if (min == null && max == null) {return true;}
                                if (min == null && startDate <= max) {return true;}
                                if (max == null && startDate >= min) {return true;}
                                if (startDate <= max && startDate >= min) {return true;}
                                return false;
                            }
                        );
						
						// $.fn.dataTableExt.afnFiltering.push(
							// function( oSettings, aData, iDataIndex ) {
								// var iFini = document.getElementById('min_date').value;
								// var iFfin = document.getElementById('max_date').value;
								// var iStartDateCol = 6;
								// var iEndDateCol = 7;
						 
								// iFini=iFini.substring(6,10) + iFini.substring(3,5)+ iFini.substring(0,2);
								// iFfin=iFfin.substring(6,10) + iFfin.substring(3,5)+ iFfin.substring(0,2);
						 
								// var datofini=aData[iStartDateCol].substring(6,10) + aData[iStartDateCol].substring(3,5)+ aData[iStartDateCol].substring(0,2);
								// var datoffin=aData[iEndDateCol].substring(6,10) + aData[iEndDateCol].substring(3,5)+ aData[iEndDateCol].substring(0,2);
						 
								// if ( iFini === "" && iFfin === "" )
								// {
									// return true;
								// }
								// else if ( iFini <= datofini && iFfin === "")
								// {
									// return true;
								// }
								// else if ( iFfin >= datoffin && iFini === "")
								// {
									// return true;
								// }
								// else if (iFini <= datofini && iFfin >= datoffin)
								// {
									// return true;
								// }
								// return false;
							// }
						// );
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    }
                });
  
	
});
</script>