<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
    <style>
        table,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table tr {
            border: 1px solid black;
        }

        table td {
            border: 1px solid black;
            padding: .5em;
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>
        Write a e PHP script to display string, values within a table.
    </h2>
    <table>
        <?php
        $employeeTable = array(
            array("Salary of Employee 1", 25000),
            array("Salary of Employee 2", 30350),
            array("Salary of Employee 3", 40250),
            array("Salary of Employee 4", 20125),
            array("Salary of Employee 5", 35358),
            array("TOTAL:", 0)
        );
        $total = 0;
        for ($row = 0; $row < count($employeeTable); $row++) {
            echo '<tr>';
            for ($col = 0; $col < 2; $col++) {

                if ($col === 0) {
                    echo "<td>" . $employeeTable[$row][$col] . "</td>";
                } else {
                    if (count($employeeTable) - 1  === $row) {
                        $employeeTable[count($employeeTable) - 1][1] = $total;
                    }
                    $total += $employeeTable[$row][$col];
                    echo "<td>" . number_format($employeeTable[$row][$col]) . " php</td>";
                }
            }
            echo '</tr>';
        }

        ?>

    </table>
    <h2>
        Write a PHP program to print out the multiplication table up to 12*12.
    </h2>


    <table>
        <?php
        $xLength = 12;
        $yLength = 12;

        function renderTabularData($isColored, $data)
        {
            if ($isColored) {
                return "<td style='background-color:#d1cfcf;'>$data</td>";
            } else {
                return "<td style='background-color: #ebe8e8;'>$data</td>";
            }
        }

        for ($i = 0; $i <= $xLength; $i++) {
            echo '<tr>';
            for ($j = 0; $j <= $yLength; $j++) {
                $res = $j * $i;

                // Showing the x
                if ($i === 0 && $j === 0) {
                    echo renderTabularData(true, 'x');
                }
                // Showing the data
                else {
                    // rendering the first row with the darker background color
                    if ($i === 0) {
                        echo renderTabularData(true, $j);
                    } else {
                        // If the j is in the first column which is 0 it will render a darker background color
                        if ($j === 0) {
                            echo renderTabularData(true, $i);
                        }
                        // Else it will render the normal tabular data
                        else {
                            echo renderTabularData(false, $res);
                        }
                    }
                }
            }
            echo '</tr>';
        }
        ?>
    </table>
    <h2>Create a script to construct a scalene triangle, using for loop.</h2>
    <?php
    $starCount = 5;

    for ($i = 1; $i <= $starCount; $i++) {
        echo str_repeat('*', $i) . '<br></br>';
    }
    ?>
</body>

</html>