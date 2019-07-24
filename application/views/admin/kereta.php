<div>
    <div style="font-size: 20px; margin-bottom: 2px;"><?= $header?></div>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Tanggal Order</th>
                <th scope="col">Tipe</th>
                <th scope="col">Asal</th>
                <th scope="col">Tujuan</th>
                <th scope="col">Tgl Berangkat</th>
                <th scope="col">Tgl Pulang</th>
                <th scope="col">Jml Dewasa</th>
                <th scope="col">Jml Anak</th>
                <th scope="col">Status</th>
                <th scope="col">Chat Admin</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($data); $i++) {
                echo '<tr><th scope="row">' . $data[$i]->date_order . '</th><td>' . $data[$i]->type . '</td><td>' . $data[$i]->asal . '</td><td>' . $data[$i]->tujuan . '</td><td>' . $data[$i]->date_berangkat . '</td><td>' . $data[$i]->date_pulang . '</td><td>' . $data[$i]->jml_dewasa . '</td><td>' . $data[$i]->jml_anak . '</td><td>' . $data[$i]->status . '</td><td>' . $data[$i]->chat_admin . '</td></tr>';
            }
            ?>
        </tbody>
    </table>
</div>