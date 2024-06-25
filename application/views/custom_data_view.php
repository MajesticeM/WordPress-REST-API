<!DOCTYPE html>
<html>
<head>
    <title>Custom Data</title>
</head>
<body>

<h1>Custom Data</h1>

<?php if (!empty($custom_data)) : ?>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>type</th>
                <th>hash_id</th>
                <th>main_meta_id</th>
                <th>post_id</th>
                <th>referer</th>
                <th>referer_title</th>
                <th>element_id</th>
                <th>form_name</th>
                <th>campaign_id</th>
                <th>user_id</th>
                <th>user_ip</th>
                <th>user_agent</th>
                <th>actions_count</th>
                <th>actions_succeeded_count</th>
                <th>status</th>
                <th>is_read</th>
                <th>meta</th>
                <th>created_at_gmt</th>
                <th>updated_at_gmt</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($custom_data as $index => $data): ?>
                <?php if ($index > 0): ?>
                    <tr>
                        <td colspan="22"><hr></td>
                    </tr>
                <?php endif; ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['type']; ?></td>
                    <td><?php echo $data['hash_id']; ?></td>
                    <td><?php echo $data['main_meta_id']; ?></td>
                    <td><?php echo $data['post_id']; ?></td>
                    <td><?php echo $data['referer']; ?></td>
                    <td><?php echo $data['referer_title']; ?></td>
                    <td><?php echo $data['element_id']; ?></td>
                    <td><?php echo $data['form_name']; ?></td>
                    <td><?php echo $data['campaign_id']; ?></td>
                    <td><?php echo $data['user_id']; ?></td>
                    <td><?php echo $data['user_ip']; ?></td>
                    <td><?php echo $data['user_agent']; ?></td>
                    <td><?php echo $data['actions_count']; ?></td>
                    <td><?php echo $data['actions_succeeded_count']; ?></td>
                    <td><?php echo $data['status']; ?></td>
                    <td><?php echo $data['is_read']; ?></td>
                    <td><?php echo $data['meta']; ?></td>
                    <td><?php echo $data['created_at_gmt']; ?></td>
                    <td><?php echo $data['updated_at_gmt']; ?></td>
                    <td><?php echo $data['created_at']; ?></td>
                    <td><?php echo $data['updated_at']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <p>No data found</p>
<?php endif; ?>



</body>
</html>
