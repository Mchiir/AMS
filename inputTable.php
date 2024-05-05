<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMS</title>
    <link rel="stylesheet" href="table.css">
</head>

<?php
session_start();

// Retrieve the $marksArray from the session
$marksArray = isset($_SESSION['marksArray']) ? $_SESSION['marksArray'] : array();
// echo $marksArray['php'][0];

 echo '
 <body>
        <div class="tableP">
            <table class="table">
                <div class="theadP">
                    <p class="thead">Academy Management System</p>                        
                </div>
                <thead>
                    <tr>
                        <th>Subject</th>
                        <th>Mrks</th>
                        <th>CAT</th>
                        <th>Mrks</th>
                        <th>EXAM</th>
                        <th>SUM</th>
                        <th>TOT</th>
                    </tr>
                </thead>
        <form action="table.php" method="post">
                <tr>
                    <td>PHP</td>
                    <td><input type="number" name="php1" min="-40" max="40" step="any" class="marksI" value='. $marksArray['php'][0] .'></td>
                    <td>40</td>
                    <td><input type="number" name="php2" min="-40" max="40" step="any" class="marksI" value='. $marksArray['php'][1] .'></td>
                    <td>40</td>
                    <td><input type="number" name="php3" min="-40" max="40" step="any" class="marksI" value='. $marksArray['php'][2] .'></td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>Networking</td>
                    <td><input type="number" name="Networking1" min="-40" max="40" step="any" class="marksI" value='. $marksArray['Networking'][0] .'></td>
                    <td>40</td>
                    <td><input type="number" name="Networking2" min="-40" max="40" step="any" class="marksI" value='. $marksArray['Networking'][1] .'></td>
                    <td>40</td>
                    <td><input type="number" name="Networking3" min="-40" max="40" step="any" class="marksI" value='. $marksArray['Networking'][2] .'></td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>Math</td>
                    <td><input type="number" name="Math1" min="-40" max="40" step="any" class="marksI" value='. $marksArray['Math'][0] .'></td>
                    <td>40</td>
                    <td><input type="number" name="Math2" min="-40" max="40" step="any" class="marksI" value='. $marksArray['Math'][1] .'></td>
                    <td>40</td>
                    <td><input type="number" name="Math3" min="-40" max="40" step="any" class="marksI" value='. $marksArray['Math'][2] .'></td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>WUI</td>
                    <td><input type="number" name="WUI1" min="-40" max="40" step="any" class="marksI" value='. $marksArray['WUI'][0] .'></td>
                    <td>40</td>
                    <td><input type="number" name="WUI2" min="-40" max="40" step="any" class="marksI" value='. $marksArray['WUI'][1] .'></td>
                    <td>40</td>
                    <td><input type="number" name="WUI3" min="-40" max="40" step="any" class="marksI" value='. $marksArray['WUI'][2] .'></td>
                    <td>40</td>
                </tr>
                <tr>
                 <td colspan="7" style="border: 0px solid black;" class="submitR">
                <button type="submit" value="submit" id="submit">Save changes</button>
                <button type="button" 
                onclick="clearInputfields()"
                style="position: relative; left:1cm; padding: 0 5px;width:2cm"
                >Clear</button>
                 </td>
                </tr>
        </form>
           </table>
        </div>
</body>
 ';
?>

<script>
     function clearInputfields() {
        var inputFields = document.getElementsByTagName('input');
          // Iterate over the input fields and set their values to an empty string
        for (var i = 0; i < inputFields.length; i++) {
            inputFields[i].value = '';
        }    
    }
    </script>

  <?php
   if(!isset($_SESSION['marksArray'])){
    session_start();
    $_SESSION['marksArray'] = $marksArray;
   }
   exit();
  ?>
</html>