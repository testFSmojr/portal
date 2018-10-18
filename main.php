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
      $host = "138.255.116.90";
        $services = "test";
          $status = "1"; 
	 $host="127.0.0.1"; $output=shell_exec('ping -n 1 '.$host); 
	      echo "$output";
	  

      ?>
         
      </th>
      <td>
      <?php
      //print $host;
        ?>
      </td>
      <td>Verde</td>
      <td>100</td>
    </tr>
      </tbody>
</table>  
