<html>
<body>
<form name="form1" method="post" action="aksi_edit_kecamatan.php"> 
      <table width="400" border="0" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFF99" bgcolor="#FF0000"> 
        <tr bgcolor="#FFFFCC"> 
          <td height="50" colspan="2"><div align="center">EDIT DATA</div></td> 
        </tr> 
     <?php 
      include("koneksi.php");
       
      $sqlTampil="select * from tb_kecamatan Where id_kec='$_GET[id]'"; 
      $qryTampil=mysql_query($sqlTampil); 
      $dataTampil=mysql_fetch_array($qryTampil); 
     ?> 
    <tr bgcolor="#FFFFFF"> 
          <td height="40">No Tidak Diedit</td> 
          <td>: 
          <input name="no" type="text" id="no" value="<?php echo $dataTampil['id_kec']; ?>"></td> 
        </tr> 
		<tr bgcolor="#FFFFFF"> 
          <td height="40">Kecamatan</td> 
          <td>: 
          <input name="kec" type="text" id="kec" value="<?php echo $dataTampil['nama_kec']; ?>"></td> 
        </tr> 
        <tr bgcolor="#FFFFFF"> 
          <td height="40">Jumlah Desa dan Dusun Irigasi</td> 
          <td>: 
          <input name="jumlah" type="text" id="jumlah" value="<?php echo $dataTampil['jumlah']; ?>"></td> 
        </tr> 
		<tr bgcolor="#FFFFFF"> 
          <td>&nbsp;</td> 
          <td height="50"><input type="submit" name="Submit" value="Simpan"></td> 
        </tr> 
      </table> 
    </form>  