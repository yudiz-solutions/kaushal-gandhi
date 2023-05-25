<?php
include "config.php";


$vsql = "SELECT * FROM `post_table` INNER JOIN `post_meta` ON post_table.id = post_meta.post_id ";
// echo $vsql;
// die;
$result = mysqli_query($conn, $vsql);
$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $post_id = $row['post_id'];
    if (!isset($data[$post_id])) {
        $data[$post_id] = array(
            'firstname' => $row['firstname'],
            'lastname' => $row['lastname'],
            'email' => $row['email'],
            'massage' => $row['massage'],
            'post' => $row['post'],
            'number' => '',
            'hashtag' => ''
        );
    }

    if ($row['meta_key'] === 'number') {
        $data[$post_id]['number'] = $row['meta_value'];
    } elseif ($row['meta_key'] === 'hashtag') {
        $data[$post_id]['hashtag'] = $row['meta_value'];
    }
}

?>
<table>
    <style>
        table,
        th,
        td,
        tr {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <thead>
        <tr>
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>masssage</th>
            <th>Profile image</th>
            <th>phone.no</th>
            <th>hashtag</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $num = 0;

        foreach ($data as $post_id => $row) {

            $num++;
            $id = $row['id'];
            echo $id;
            die;
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $massage = $row['massage'];
            $post = $row['post'];

            $number = $row['number'];
            $hashtag = $row['hashtag'];


        ?>
            <tr>
                <th><?php echo $num; ?></th>
                <td><?php echo $firstname; ?></td>
                <td><?php echo $lastname; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $massage; ?></td>
                <td><img src="postimage/<?php echo $post; ?>" width="100" height="120"></td>
                <td><?php echo $number; ?></td>
                <td><?php echo $hashtag; ?></td>

                <td><button name="Delete"><a style="text-decoration:none; color: black" href="post_delete.php?id=<?php echo $id; ?>">Delete</a></button></td>

            </tr>
        <?php
        }
        ?>
    </tbody>
</table>