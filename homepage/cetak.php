<?php

require_once "vendor/autoload.php";
require '../admin/includes/koneksi.php';

$mpdf = new \Mpdf\Mpdf();
$id = $_POST['medlist_id'];
$query = mysqli_query($koneksi, "SELECT * FROM medlist_details JOIN drugs ON medlist_details.drug_id = drugs.drug_id JOIN medlist ON medlist.medlist_id = medlist_details.medlist_id WHERE medlist_details.medlist_id = $id");
$query2 = mysqli_fetch_array($query);
$date = date("Y-m-d H:i:s"); 
$date2 = date('l, d F Y');

$html = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Calibri;
        }
    </style>
    </head>
    <body>
	<div class="container">
        <table>
            <tr>
                <td>
                    <h1 class="text-primary">Drugs.com</h1>
                </td>
            </tr>
        </table>
        <hr size="1" style="color: #000;">';

        $html .= '
        <table>
            <tr>
                <td><p>'.$date.'</p></td>
            </tr>
        </table>
    
        ';

        $html .=
        '<h4>My Med List Details</h4>
        <table style="text-align: left;">
                <tr>
                    <th style="text-align: left;">Profile Name</th>
                    <td>:</td>
                    <td>'.$query2['profile_name'].'</td>
                </tr>
                <tr>
                    <th style="text-align: left;">Emergency Contact</th>
                    <td>:</td>
                    <td>'.$query2['emergency_contact'].'</td>
                </tr>
                <tr>
                    <th style="text-align: left;">Primary Physician</th>
                    <td>:</td>
                    <td>'.$query2['primary_physician'].'</td>
                </tr>
                <tr>
                    <br><br>
                </tr>
                <tr>
                    <br>
                </tr>
                <tr>
                    <br>
                </tr>
                <tr>
                    <br>
                </tr>
                <tr>
                    <br>
                </tr>
                
                <tr>
                    <th style="text-align: left;">Condition</th>
                    <td>:</td>
                    <td>'.$query2['condition'].'</td>
                </tr>
                <tr>
                    <th style="text-align: left;">Allergy</th>
                    <td>:</td>
                    <td>'.$query2['allergy'].'</td>
                </tr>
                <tr>
                    <th style="text-align: left;">Drug Used</th>
                    <td>:</td>
                    <td>'.$query2['drug_name'].'</td>
                </tr>

        </tr>';
    
    
    $html .=  '</table>
    </body>
    </html>';
	
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	$mpdf->WriteHTML($html);
	$mpdf->Output();
?>


?>