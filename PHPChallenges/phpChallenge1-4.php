<?php
$summer= "July-Aug";
$winter = "Jan-Feb";
$temperature = array("summer_low" =>11, "summer_high" =>19, "winter_low" =>1, "winter_high" =>7);

echo "<table class='table'>
<thead>
  <tr>
    <th scope='col'>Month</th>
    <th scope='col'>High</th>
    <th scope='col'>Low</th>
  </tr>
</thead>
<tbody>
  <tr>
    <th scope='row'>July-Aug</th>
    <td>" . $temperature['summer_high'] . " ℃</td>
    <td>" . $temperature['summer_low'] . " ℃</td>
  </tr>
  <tr>
    <th scope='row'>Jan-Feb</th>
    <td>" . $temperature['winter_high'] . " ℃</td>
    <td>" . $temperature['winter_low'] . " ℃</td>
  </tr>
</tbody>
</table>";


?>