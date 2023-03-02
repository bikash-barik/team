<link rel="stylesheet" href="css/bootstrap.css" />
<style type="text/css">
br{display:none;}
</style>

<?php
include 'excel_class/excel_reader.php';     // include the class

// creates an object instance of the class, and read the excel file data
$excel = new PhpExcelReader;
$excel->read('tests.xls');

// this function creates and returns a HTML table with excel rows and columns data
// Parameter - array with excel worksheet data
function sheetData($sheet) {
  $re = '<table class="table table-responsive">';     // starts html table

  $x = 1;
  while($x <= $sheet['numRows']) {
    $re .= "<tr>\n";
    $y = 1;
    while($y <= $sheet['numCols']) {
      $cell = isset($sheet['cells'][$x][$y]) ? $sheet['cells'][$x][$y] : '';
      $re .= " <td>$x&nbsp;)</td><td class='bg-info'>$cell</td><td style='display:none'><p id='middlep'><button id='$x' onclick='load(this.id);' style='display:none'>Click</button></p><input type='hidden' value='$cell' id='hd$x'></td><td  class='bg-warning'><p id='output$x'></p></td>\n";  
      $y++;
    }  
    $re .= "</tr>\n";
    $x++;
  }
$x--;
  return $re ."</table><input type='hidden' id='totalhd' value='$x'>";     // ends and returns the html table
}

$nr_sheets = count($excel->sheets);       // gets the number of worksheets
$excel_data = '';              // to store the the html tables with data of each sheet

// traverses the number of sheets and sets html table with each sheet data in $excel_data
//for($i=0; $i<$nr_sheets; $i++) {
//  $excel_data .= '<h4>Sheet '. ($i + 1) .' (<em>'. $excel->boundsheets[$i]['name'] .'</em>)</h4>'. sheetData($excel->sheets[$i]) .'<br/>';  
//}
for($i=0; $i<1; $i++) {
  $excel_data .= '<h4>Powered by : Clan HP >>>> Sheet '. ($i + 1) .' (<em>'. $excel->boundsheets[$i]['name'] .'</em>)</h4>'. sheetData($excel->sheets[$i]) .'<br/>';  
}

echo $excel_data;      // outputs HTML tables with excel file data


?>

<input type="hidden" value="www.deriveseo.com" id="hdx">

<button onclick="startcrawl();">Start Crawl</button>

<p id="demo"></p>

<script>
function startcrawl()
{
	for(var i=1;i<=document.getElementById("totalhd").value;i++)
	{
		document.getElementById(i).click();
	}
}
function load(id) {
	//alert(id);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
	  if(xhttp.readyState == 1)
	  {
		  document.getElementById("output"+id).innerHTML="Loading";
	  }
	  if(xhttp.readyState == 2)
	  {
		  document.getElementById("output"+id).innerHTML="Loaded";
	  }
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     document.getElementById("output"+id).innerHTML= xhttp.responseText;
    }
  };
  xhttp.open("GET","http://www.baninfotech.com/team/email-extractor.php?url=http%3A%2F%2F"+document.getElementById("hd"+id).value, true);
  xhttp.send();
}

</script>