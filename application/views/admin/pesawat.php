<div>
    <div style="font-size: 20px; margin-bottom: 2px;"><?= $header?></div>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Tanggal Order</th>
                <th scope="col">Tipe</th>
                <th scope="col">Keberangkatan</th>
                <th scope="col">Kedatangan</th>
                <th scope="col">Tgl Keberangkatan</th>
                <th scope="col">Tgl Kedatangan</th>
                <th scope="col">Jml Dewasa</th>
                <th scope="col">Jml Anak</th>
                <th scope="col">Jml Infant</th>
                <th scope="col">Cabin</th>
                <th scope="col">Status</th>
                <th scope="col">Chat Admin</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($data); $i++) {
                echo '<tr><th scope="row">' . $data[$i]->date_order . '</th><td>' . $data[$i]->category . '</td><td>' . $data[$i]->departure . '</td><td>' . $data[$i]->arrival . '</td><td>' . $data[$i]->date_departure . '</td><td>' . $data[$i]->date_arrival . '</td><td>' . $data[$i]->jml_dewasa . '</td><td>' . $data[$i]->jml_anak . '</td><td>' . $data[$i]->jml_infant . '</td><td>' . $data[$i]->cabin . '</td><td>' . $data[$i]->status . '</td><td>' . $data[$i]->chat_admin . '</td></tr>';
            }
            ?>
        </tbody>
    </table>
</div>