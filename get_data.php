
<?php
$file = "my_data.json";
$ambildata = file_get_contents($file);
$decodedata = json_decode($ambildata, true);
?>
<?php foreach($decodedata as $data) : ?>
<tr>
    <td><?= $data['nama'];?></td>
    <td><?= $data['email'];?></td>
    <td><?= $data['alamat'];?></td>
    <td><?= $data['gender'];?></td>
    <td><?= $data['program'];?></td>
    <td><?= $data['tahun'];?></td>

</tr>
<?php endforeach; ?>