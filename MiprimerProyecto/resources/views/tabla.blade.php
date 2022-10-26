@extends('plantilla')
@section('contenido')

<h1 class="mt-4 display-1 text-center">Tabla</h1>

<?php
$rows = 10; // define number of rows
$cols = 4;// define number of columns

echo "<table border='1'>";

for($tr=1;$tr<=$rows;$tr++){

    echo "<tr>";
        for($td=1;$td<=$cols;$td++){
               echo "<td>row: ".$tr." column: ".$td."</td>";
        }
    echo "</tr>";
}

echo "</table>";
?>

@stop