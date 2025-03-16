<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "county";
$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn) {
    die(mysqli_error($conn));
}
?>
<html>
<head>
    <title>Listed</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #333;
}

/* Table Styling */
table {
    width: 90%;
    max-width: 1000px;
    border-collapse: collapse;
    margin: 20px 0;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    border-radius: 10px;
    overflow: hidden;
}

/* Header Styling */
th {
    background: #5c6bc0;
    color: white;
    padding: 12px;
    text-align: center;
    font-weight: bold;
}

/* Data Cells Styling */
td {
    padding: 12px;
    text-align: center;
    border: 1px solid #ddd;
    font-size: 14px;
    color: #555;
}

/* Hover Effect */
tr:hover {
    background-color: #f1f1f1;
}

/* Placeholder when no data found */
tbody td {
    text-align: center;
    font-style: italic;
    color: #999;
}

/* Centering table */
center {
    width: 100%;
}

/* Responsive Design */
@media (max-width: 768px) {
    table {
        width: 95%;
    }

    th, td {
        padding: 8px;
    }

    td {
        font-size: 12px;
    }
}

/* Responsive Styling for DataTables pagination */
.dataTables_wrapper .dataTables_paginate {
    text-align: center;
    padding: 15px 0;
}

.dataTables_wrapper .dataTables_paginate .paginate_button {
    color: #5c6bc0;
    border: 1px solid #5c6bc0;
    padding: 5px 10px;
    margin: 0 3px;
    background-color: #fff;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background-color: #5c6bc0;
    color: white;
}

    </style>
</head>

<center>
    <table border="2" id="myTable">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>status</th>
                <th>create date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM country";
            $data = mysqli_query($conn, $sql);
            $result = mysqli_num_rows($data);
            if ($result) {
                while ($r = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $r['id']; ?></td>
                <td><?php echo $r['name']; ?></td>
                <td><?php echo $r['status']; ?></td>
                <td><?php echo $r['create_date']; ?></td>
            </tr>
            <?php
                }
            } else {
            ?>
            <tr>
                <td colspan="4">Data not found</td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</center>
</html>
