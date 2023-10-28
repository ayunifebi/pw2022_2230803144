<DOCTYPE html>
    <html lang="en">
        <head>
            <style>
                th, td{
                    border:1px solid black;
                    margin:30px;
                    height:20px;
                    width:20px;
                    padding:10px;
                    text-align;center;
                }
                </style>
                </head>
                <body>
                    <table>
                        <?php
                        $a="A";
                        $b="B";
                        $c="c";
                        echo "<tr>";
                        echo "<td>".$a."</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>".$a."</td>";
                        echo "<td>".$b."</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>".$a."</td>";
                        echo "<td>".$b."</td>";
                        echo "<td>".$c."</td>";
                        echo "</tr>";
                        ?>
                        </table>
            </body>
            </html>