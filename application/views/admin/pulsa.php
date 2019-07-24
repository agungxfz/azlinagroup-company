<div>
    <div style="font-size: 20px; margin-bottom: 2px;"><?= $header?></div>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Tanggal Order</th>
                <th scope="col">Nomor HP</th>
                <th scope="col">Nominal Pulsa</th>
                <th scope="col">Status</th>
                <th scope="col">Chat Admin</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($data); $i++) {
                echo '<tr><th scope="row">' . $data[$i]->order_date . '</th><td>' . $data[$i]->nomer . '</td><td>' . $data[$i]->nominal . '</td><td>' . $data[$i]->status . '</td><td>' . $data[$i]->chat_to . '</td></tr>';
            }
            ?>
        </tbody>
    </table>
</div>