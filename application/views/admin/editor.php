<div id="container">
    <div id="body">
        <form action="index.php/welcome/add" method="post">
            <table>
                <tr>
                    <td>
                        <?php echo $this->ckeditor->editor('article', ''); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Tambah">
                    </td>
                </tr>
            </table>
        </form>
    </div>

</div>