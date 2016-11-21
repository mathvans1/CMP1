<?php
$cars = [
    ['Volvo', 22, 18],
    ['BMW', 15, 13],
    ['Saab', 0, 5],
    ['Land Rover', 17, 15],
];

?>
<table style="border: solid black 1px;">
  <tr>
    <th>Merk</th>
    <th>Stock</th>
    <th>aantal verkocht</th>
    <th>totaal aantal</th>
  </tr>
    <tr>
        <td><?php echo $cars[0][0];?></td>
        <td><?php echo $cars[0][1];?></td>
        <td><?php echo $cars[0][2];?></td>
        <td><?php echo $cars[0][3];?></td>
    </tr>
  <tr>
        <td><?php echo $cars[1][0];?></td>
        <td><?php echo $cars[1][1];?></td>
        <td><?php echo $cars[1][2];?></td>
        <td><?php echo $cars[1][3];?></td>
    </tr>
    <tr>
        <td><?php echo $cars[2][0];?></td>
        <td><?php echo $cars[2][1];?></td>
        <td><?php echo $cars[2][2];?></td>
        <td><?php echo $cars[2][3];?></td>
    </tr>
    <tr>
        <td><?php echo $cars[3][0];?></td>
        <td><?php echo $cars[3][1];?></td>
        <td><?php echo $cars[3][2];?></td>
        <td><?php echo $cars[3][3];?></td>
    </tr>
</table>