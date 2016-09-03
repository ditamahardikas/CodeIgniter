<html>
<head>
    <title>tab</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
    
</head>
<body>
 <div class="container"><h1> Belajar Tab Panel</h1></div>   
<div id="exTab2" class="container"> 
        <ul class="nav nav-tabs">
            <li class="active">
            <a  href="#1" data-toggle="tab">Data 1</a>
            </li>
            <li><a href="#2" data-toggle="tab">data 2</a>
            </li>
            <li><a href="#3" data-toggle="tab">Data 3</a>
            </li>
        </ul>

        <div class="tab-content ">
              <div class="tab-pane active" id="1">
                    <div class="panel panel-default">
                        <div class="panel-heading"><b>Tampil CRUD Mahasiswa</b></div>
                        <br>
                            <?php print 'input nama : ';?>
                            <br>
                            <form action="<?php print site_url();?>/crud/cari" method=POST>
                            <input type=text name=cari> <input type=submit value="cari">
                            </form>

                        <div class="table-responsive">
                        <center ><a href="<?php echo ('tambah'); ?>" class="btn btn-primary">Tambah Data</a> </center>
                        <table style="margin:20px auto;" border="1" class="table table-bordered table-striped">
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Mapel</th>
                                <th>Action</th>
                            </tr>
                            <?php 
                            $no = 1;
                            foreach($mahasiswa as $m){ 
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $m->nis ?></td>
                                <td><?php echo $m->nama ?></td>
                                <td><?php echo $m->mapel ?></td>
                                <td>

                                     <a href="<?php echo ('edit/'.$m->nis); ?>"><span class="glyphicon glyphicon-pencil">[edit] </span>
                                      <a href="<?php echo ('hapus/'.$m->nis); ?>"><span class="glyphicon glyphicon-trash">[hapus]</span>         
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                        </div>
                 </div>    <!-- /panel -->
              </div>

              <div class="tab-pane" id="2">
                         <div class="panel panel-default">
                        <div class="panel-heading"><b>Tampil CRUD mapel</b></div>

                        <form action="<?php echo site_url('crud/delete_multiple'); ?>" method="post">
                            <select name="action">
                                <option value="null">Bulk Action</option>
                                <option value="delete">Delete</option>
                            </select>
                            <input type="submit" name="submit" value="Action">

                        <div class="table-responsive">
                        
                        <table style="margin:20px auto;" border="1" class="table table-bordered table-striped">
                            <tr>
                                <th><input type="checkbox" id="checkAll" name="checkAll"></th>
                                <th>No</th>
                                <th>ID mapel</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                            <?php 
                            $no = 1;
                            foreach($mapel as $mpl){ 
                            ?>
                            <tr>
                                <td><input type="checkbox" name="msg[]" value="<?php echo $mpl->id_mapel; ?>"></td>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $mpl->id_mapel ?></td>
                                <td><?php echo $mpl->nm_mapel ?></td>
                                <td>

                                     <a href="<?php echo ('editmapel/'.$mpl->id_mapel); ?>"><span class="glyphicon glyphicon-pencil">[edit] </span>
                                     
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                        </form>
                        </div>
                     </div>    <!-- /panel -->
          
                </div>


             <div class="tab-pane" id="3">
                <h3>menggunakan database
            </div>
       
</div>
</script>
</body>
</html>
