<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the values from the HTML form
    $php1 = $_POST['php1'];
    $php2 = $_POST['php2'];
    $php3 = $_POST['php3'];


    $Networking1 = $_POST['Networking1'];
    $Networking2 = $_POST['Networking2'];
    $Networking3 = $_POST['Networking3'];


    $Math1 = $_POST['Math1'];
    $Math2 = $_POST['Math2'];
    $Math3 = $_POST['Math3'];


    $WUI1 = $_POST['WUI1'];
    $WUI2 = $_POST['WUI2'];
    $WUI3 = $_POST['WUI3'];

    // Add more variables for other input fields if needed
    
    // Create an array to store the values
    $marksArray = array(
        'php' => [$php1, $php2, $php3],
        'Networking' => [$Networking1, $Networking2, $Networking3],
        'Math' => [$Math1, $Math2, $Math3],
        'WUI' => [$WUI1, $WUI2, $WUI3]
        // Add more key-value pairs for other input fields if needed
    );
    
    // Display the values from the array
    echo '<pre>';
    print_r($marksArray);
    echo '</pre>';

    function updating($marksArray){
        return '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>AMS</title>
            <link rel="stylesheet" href="table.css">
        </head>
        <body>
            <div class="tableP">
                <table class="table">
                    <div class="theadP">
                        <p class="thead">Academy Management System</p>
                        <a href="http://localhost/SMMS/inputTable.php" class="linkA">Edit</a>
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
                    <tbody>
                        <tr>
                            <td>PHP</td>
                            <td>'. $marksArray['php'][0] .'</td>
                            <td>40</td>
                            <td>'. $marksArray['php'][1] .'</td>
                            <td>40</td>
                            <td>'. $marksArray['php'][2] .'</td>
                            <td>40</td>
                        </tr>
                        <tr>
                            <td>Networking</td>
                            <td>'. $marksArray['Networking'][0] .'</td>
                            <td>40</td>
                            <td>'. $marksArray['Networking'][1] .'</td>
                            <td>40</td>
                            <td>'. $marksArray['Networking'][2] .'</td>
                            <td>40</td>
                        </tr>
                        <tr>
                            <td>Math</td>
                            <td>'. $marksArray['Math'][0] .'</td>
                            <td>40</td>
                            <td>'. $marksArray['Math'][1] .'</td>
                            <td>40</td>
                            <td>'. $marksArray['Math'][2] .'</td>
                            <td>40</td>
                        </tr>
                        <tr>
                            <td>WUI</td>
                            <td>'. $marksArray['WUI'][0] .'</td>
                            <td>40</td>
                            <td>'. $marksArray['WUI'][1] .'</td>
                            <td>40</td>
                            <td>'. $marksArray['WUI'][2] .'</td>
                            <td>40</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </body>
        </html>
        ';
    }

    // Save the updated HTML content
    file_put_contents("table1.html", updating($marksArray));

    session_start();
    $_SESSION['marksArray'] = $marksArray;

    // Redirect to the updated page
    header("Location: /SMMS/table1.html");
    exit(); // Stop further execution of the PHP script
}
?>
