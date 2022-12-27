<?php 

function hapus($id)
{
    global $connect;
    query("DELETE FROM showroom_afni_table WHERE id_mobil = $id");

    return mysqli_affected_rows($connect);
}

?>
