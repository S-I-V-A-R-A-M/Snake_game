<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snake Game Scoreboard</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 32px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f5f5f5;
        }

        tr:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Snake Game Scoreboard</h1>
    
    <table>
        <thead>
            <tr>
                <th>Player Name</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $con=mysqli_connect("localhost","root","","snake");
            $sq="SELECT * from scoreboard ORDER BY s DESC";
            $r=mysqli_query($con,$sq);
            $result_check=mysqli_num_rows($r);
            if($result_check > 0) {
                while($row=mysqli_fetch_assoc($r)) {
                    echo "<tr>
                            <td>" . $row['n'] . "</td>
                            <td>" . $row['s'] . "</td>
                        </tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
