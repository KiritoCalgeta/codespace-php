<?php

echo"<h1>Student Results</h1>";
    $results = array(
        "aarron" => array ("Physics" => '74%', "English" => '69%', "Maths" => '70%'),
        "jamie" => array ("Physics" => '64%', "English" => '79%', "Maths" => '69%'),
        "harry" => array ("Physics" => '55%', "English" => '52%', "Maths" => '57%')
    );
        
    echo "Result for Physics for Aarron : " ;
    echo $results['aarron']['Physics'] . "<br>";

    echo "Result for Physics for Jamie : " ;
    echo $results['jamie']['English'] . "<br>";

    echo "Result for Physics for Harry : " ;
    echo $results['harry']['Maths'] . "<br>";

// echo "<table class='table'>
//   <thead>
//     <tr>
//       <th scope='col'>Name</th>
//       <th scope='col'>Physics</th>
//       <th scope='col'>English</th>
//       <th scope='col'>Maths</th>
//     </tr>
//   </thead>
//   <tbody>
//     <tr>
//       <th scope='row'>Aarron</th>
//       <td>" . `Result for Physics for Aarron :` + $results['aarron']['Physics'] . "</td>
//       <td>" . `Result for English for Aarron :` + $results['aarron']['English'] . "</td>
//       <td>" . `Result for Maths for Aarron :` + $results['aarron']['Maths'] . "</td>
//     </tr>
//     <tr>
//       <th scope='row'>Jamie</th>
//       <td>" . `Result for Physics for Jamie :` + $results['jamie']['Physics'] . "</td>
//       <td>" . `Result for Physics for Jamie :` + $results['jamie']['English'] . "</td>
//       <td>" . `Result for Physics for Jamie :` + $results['jamie']['Maths'] . "</td>
//     </tr>
//     <tr>
//       <th scope='row'>Harry</th>
//       <td>" . `Result for Physics for Harry :` + $results['harry']['Physics'] . "</td>
//       <td>" . `Result for Physics for Harry :` + $results['harry']['English'] . "</td>
//       <td>" . `Result for Physics for Harry :` + $results['harry']['Maths'] . "</td>
//     </tr>
//   </tbody>
// </table>";

?>