<?php
include ('../php/conn.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$sql = "SELECT car.name AS car_name, categories.name AS category_name, categories.id AS categories_id, car.harga, car.description, car.id 
                    FROM car 
                    LEFT JOIN categories ON car.categories_id = categories.id";
$query = mysqli_query($koneksi, $sql);
$html = '<center><h3>Data Car</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Description</th>
            </tr>';
$no = 1;
while ($car = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
            <td>" . $car['car_name'] . "</td>
                <td>" . $car['category_name'] . "</td>
                <td>Rp. " . number_format($car['harga']) . "</td>
                <td>" . $car['description'] . "</td>
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
$dompdf->stream('list-car.pdf');
