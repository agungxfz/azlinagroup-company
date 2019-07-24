<div>
    <div style="font-size: 20px; margin-bottom: 2px;"><?= $header?></div>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Tanggal Order</th>
                <th scope="col">Kota Tujuan</th>
                <th scope="col">Check - In Date</th>
                <th scope="col">Check - Out Date</th>
                <th scope="col">Jml Kamar</th>
                <th scope="col">Jml Tamu</th>
                <th scope="col">Status</th>
                <th scope="col">Chat Admin</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($data); $i++) {
                echo '<tr><th scope="row">' . $data[$i]->order_date . '</th><td>' . $data[$i]->kota_tujuan . '</td><td>' . $data[$i]->checkin_date . '</td><td>' . $data[$i]->checkout_date . '</td><td>' . $data[$i]->jml_kamar . '</td><td>' . $data[$i]->jml_tamu	 . '</td><td>' . $data[$i]->status . '</td><td>' . $data[$i]->chat_admin . '</td></tr>';
            }
            ?>
        </tbody>
    </table>
</div>