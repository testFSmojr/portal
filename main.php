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
          
$counter = $count +1 ;
	 $num0 = 0 ; 
			$num = $num0 +1 ;
	  $pingreply = exec("ping -n $value");
	  if ( substr($pingreply, -2) == 'ms')
  		{
			
		echo "Reply Speed ";
		    echo substr($pingreply, -13);
		}
	  else 
		{
			#echo "<td width=60><strong><font color='#990000'>DOWN</font></strong></td>";
			
			echo "Timeout...";
		}

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
