  <?php
    require_once('koneksi.php');
         
        $id_post=$_POST['id_post'];
        $title=$_POST['title'];
        $isi=$_POST['isi'];

    $update = "UPDATE post SET title = '$title', isi = '$isi' WHERE id_post ='$id_post'";

    if ($conn->query($update)===TRUE) {
       echo "Berhasil diperbarui";
       header("location:post.php");
    } else {
        echo "Gagal memperbarui";
    }
    $conn->close();
    exit;
  ?>