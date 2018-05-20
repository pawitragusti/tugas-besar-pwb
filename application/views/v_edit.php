<html>
<head>
  <title>Edit User Data</title>
</head>

<body>
  <a href="admin.php">Home</a>
  <br/><br/>

  <?php foreach($sewa as $c){ ?>
    <form action="<?php echo base_url(). 'admin/update'; ?>" method="post">
      <table border="0">
        <tr>
        <input type="hidden" name="id" value="<?php echo $c->id ?>">  
        </tr>
        <tr>
          <td>jenis_mobil</td>
          <td><input type="text" name="jenis_mobil" value=<?php echo $c->jenis_mobil;?>></td>
        </tr>
        <tr>
          <td>nama</td>
          <td><input type="text" name="nama" value=<?php echo $c->nama;?>></td>
        </tr>
          <tr>
          <td>email</td>
          <td><input type="text" name="email" value=<?php echo $c->email;?>></td>
        </tr>
        <tr>
          <td>nomor_hp</td>
          <td><input type="text" name="nomor_hp" value=<?php echo $c->nomor_hp;?>></td>
        </tr>
        <tr>
          <td><input type="submit" name="update" value="Update"></td>
        </tr>
      </table>
    <?php } ?>
    </form>
  </body>
  </html>
