<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM nutrient_intake");
$html = '<center><h3>Data Nutrient Intake</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Total Kalori</th>
                <th>Total Protein</th>
                <th>Total Karbohidrat</th>
                <th>Total Lemak</th>
                <th>Total Serat</th>
            </tr>';
$no = 1;
while ($data = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $data['total_calories'] . "</td>
                <td>" . $data['total_protein'] . "</td>
                <td>" . $data['total_carbohydrates'] . "</td>
                <td>" . $data['total_fat'] . "</td>
                <td>" . $data['total_fiber'] . "</td>
              </tr>";
    $no++;
}
$html .= "</table>";
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream('laporan-nutrient-intake.pdf');
?>
