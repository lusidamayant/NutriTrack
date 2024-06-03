
<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_food");
$html = '<center><h3>Data Transaksi</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>nama makanan</th>
                <th>Calories</th>
                <th>Protein</th>
                <th>Carbs</th>
                <th>Fat</th>
                <th>Fiber</th>
            </tr>';
$no = 1;
while ($transaction = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $transaction['tanggal'] . "</td>
                <td>" . $transaction['calories'] . "</td>
                <td>" . $transaction['protein'] . "</td>
                <td>" . $transaction['carbs'] . "</td>
                <td>" . $transaction['fat'] . "</td>
                <td>" . $transaction['fiber'] . "</td>
            </tr>";
    $no++;
}
$html .= "</table>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-transaksi.pdf');
?>
