<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$baza = "agencija";
$connection = new mysqli($hostname, $username, $password, $baza) or die("Connect failed: %s\n" . $connection->error);

$sql = "SELECT putnik.id, putnik.imeprezime, putnik.brojtelefona, putnik.brojrezervacije, putovanje.naziv, bus.regtablice, vodic.imeprezime as vip 
FROM putnik
 JOIN putovanje ON putnik.putovanje_id=putovanje.id 
 JOIN bus ON putnik.bus_id=bus.id 
 JOIN vodic ON putnik.vodic_id=vodic.id";

$putnici = $connection->query($sql);

while($putnik = $putnici->fetch_object()){
?>
    <tr>
        <td><?php echo $putnik->id ?></td>
        <td><?php echo $putnik->imeprezime ?></td>
        <td><?php echo $putnik->brojtelefona ?></td>
        <td><?php echo $putnik->brojrezervacije ?></td>
        <td><?php echo $putnik->naziv ?></td>
        <td><?php echo $putnik->regtablice ?></td>
        <td><?php echo $putnik->vip ?></td>
        <td><button class="btn btn-primary" id="obrisibutton" value="<?php echo $putnik->id ?>">OBRIŠI</button></td>
        <td><button class="btn btn-primary" id="izmenabutton" value="<?php echo $putnik->id ?>">IZMENA</button></td>
    </tr>
<?php
}
?>