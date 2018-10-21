
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Table Pagination</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    <div class="container" style="margin-top:35px">
        <h2>Select Number Of Rows</h2>
        <div class="form-group"> 
            <select class  ="form-control" name="state" id="maxRows">
				<option value="5000">Show ALL Rows</option>
				<option value="5">5</option>
				<option value="10">10</option>
				<option value="15">15</option>
				<option value="20">20</option>
				<option value="50">50</option>
				<option value="70">70</option>
				<option value="100">100</option>
            </select> 		
        </div>
        <table id="mytable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
                <tr><td>T Ghazali</td><td>tghazali@hotmail.com</td><td>989767767777</td><td>Palabuhanratu</td></tr>
            </tbody>
        </table>
        <div class='pagination-container' >
            <nav>
				<ul class="pagination"></ul>
            </nav>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        var table = '#mytable';
        $('#maxRows').on('change',function(){
		  	$('.pagination').html('');
		  	var trnum = 0 ;	
		  	var maxRows = parseInt($(this).val());
		  	var totalRows = $(table+' tbody tr').length;
			 $(table+' tr:gt(0)').each(function(){	
			 	trnum++;				
			 	if (trnum > maxRows ){		
			 		$(this).hide();		
			 	}if (trnum <= maxRows ){$(this).show();}
			 });										
			 if (totalRows > maxRows){						
			 	var pagenum = Math.ceil(totalRows/maxRows);	
			 	for (var i = 1; i <= pagenum ;){
			 	$('.pagination').append('<li data-page="'+i+'">\
								      <span>'+ i++ +'<span class="sr-only">(current)</span></span>\
								    </li>').show();
			 	}											
			} 												
			$('.pagination li:first-child').addClass('active');
			$('.pagination li').on('click',function(){	
				var pageNum = $(this).attr('data-page');
				var trIndex = 0 ;						
				$('.pagination li').removeClass('active');
				$(this).addClass('active');				 
				$(table+' tr:gt(0)').each(function(){	
				 	trIndex++;	
				 	if (trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
				 		$(this).hide();		
				 	}else {$(this).show();} 				
				}); 										
            });	
        });
        $(function(){
            $('table tr:eq(0)').prepend('<th> ID </th>');
            var id = 0;
            $('table tr:gt(0)').each(function(){	
                id++
                $(this).prepend('<td>'+id+'</td>');
            });
        })
    </script>
</body>
</html>