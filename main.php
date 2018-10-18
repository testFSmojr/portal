<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">IP </th>
      <th scope="col">Nombre</th>
      <th scope="col">Estado</th>
      <th scope="col">Latencia</th>
    </tr>
  </thead>
  <tbody>
    <tr>
 
        
      <th scope="row">
        <?php
require_once('asset/Ping.php');
$host = 'www.google.com';
$ping = new Ping($host);
$latency = $ping->ping();
if ($latency) {
  print 'Latency is ' . $latency . ' ms';
}
else {
  print 'Host could not be reached.';
}

      ?>
         
      </th>
      <td>
      <?php
      print $host;
        ?>
      </td>
      <td>Verde</td>
      <td>100</td>
    </tr>
      </tbody>
</table>  