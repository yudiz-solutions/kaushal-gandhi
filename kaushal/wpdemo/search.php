<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Bar</title>
    <style>
        * {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 24px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 26.4px;
        }

        button {
            cursor: pointer;
            height: 40px;
            transition: all 0.3s ease-in-out;
            border-radius: 30px;
            border: 3px solid black;
        }

        button:hover {
            transform: scale(1.1);
        }

        .search {
            width: 100%;
            height: 100%;
            margin: 25px;
            border-radius: 15px;
            background: skyblue;
            box-shadow: 25px 25px 50px #848484,
                -25px -25px 50px #ffffff;
            ;
        }

        table {
            width: 100%;
            height: 100%;
            margin: 25px;
            border-radius: 15px;
            /* border: solid black; */
            text-align: center;
        }

        th,
        td,
        tr {
            border: solid black;


        }


        input {
            border-radius: 10px;
            border: 3px solid black;
            width: 70%;
        }
    </style>
</head>

<body>
    <center>
        <div class="search"><br>
            <form action="" method="GET">
                <div>
                    <input type="text" name="search" required value="<?php if (isset($_GET['search'])) {
                                                                            echo $_GET['search'];
                                                                        } ?>" class="form-control" placeholder="Search data">
                    <button type="submit" name="search-btn">Search</button>
                </div>
            </form>


            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>DOB</th>
                            <th>Hobby</th>
                            <th>Gender</th>
                            <th>Country </th>
                            <th>Message</th>
                            <th>ProfileImage</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        include "config.php";

                        if (isset($_GET['search-btn'])) {

                            $filtervalues = $_GET['search'];
                            echo $filtervalues;
                            $query = "SELECT * FROM wpdemo WHERE CONCAT(id,FirstName,LastName,UserName) LIKE '%$filtervalues%' ";
                            $query_run = mysqli_query($conn, $query);

                            if ($query_run->num_rows > 0) {

                                foreach ($query_run as $items) {
                        ?>

                                    <tr>
                                        <td><?= $items['id']; ?></td>
                                        <td><?= $items['FirstName']; ?></td>
                                        <td><?= $items['LastName']; ?></td>
                                        <td><?= $items['UserName']; ?></td>
                                        <td><?= $items['Email']; ?></td>
                                        <td><?= $items['DOB']; ?></td>
                                        <td><?= $items['Hobby']; ?></td>
                                        <td><?= $items['Gender']; ?></td>
                                        <td><?= $items['Country']; ?></td>
                                        <td><?= $items['Message']; ?></td>
                                        <td><?= $items['ProfileImage']; ?></td>
                                    </tr>

                                <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="4">No Record Found</td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </center>
</body>

</html>