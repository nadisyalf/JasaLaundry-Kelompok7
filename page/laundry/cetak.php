<?php 

    include "../../include/koneksi.php";
        $id = $_GET['id'];
        $sql = $koneksi->query("select * from tb_laundry, tb_pelanggan, tb_user where 
            tb_laundry.id_pelanggan=tb_pelanggan.kode_pelanggan and tb_laundry.kode_user=tb_user.id");

        $data = $sql->fetch_assoc();




?>

<script>


            window.print();
            window.onfocus=function() {window.close();}
                


</script>


<body onload="window.print()">






        <table>


            <tbody>
                <tr>
                    <td>Jasa Laundry</td>
                </tr>
                <tr>
                    <td>Jalan Raya Bekasi No 15</td>
                </tr>
                <tr>
                    <td>Telpone 08965437856</td>
                </tr>
            </tbody>
        </table>

        <hr widht="30%" align="left">



        <table>

            <tbody>
                <tr>
                    <td>Kasir</td>
                    <td>:</td>
                    <td><?php echo $data['nama_user'] ?></td>
                </tr>

                <tr>
                    <td>Pelanggan</td>
                    <td>:</td>
                    <td><?php echo $data['nama'] ?></td>
                </tr>

                <tr>
                    <td>Tanggal Terima</td>
                    <td>:</td>
                    <td><?php echo $data['tanggal_terima'] ?></td>
                </tr>

                <tr>
                    <td>Tanggal Selesai</td>
                    <td>:</td>
                    <td><?php echo $data['tanggal_selesai'] ?></td>
                </tr>

                <tr>
                    <td>Jumlah Kiloan</td>
                    <td>:</td>
                    <td><?php echo $data['jumlah_kiloan'] ?></td>
                </tr>

                <tr>
                    <td>Total</td>
                    <td>:</td>
                    <td><?php echo $data['nominal'] ?></td>
                </tr>

                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><?php echo $data['status'] ?></td>
                </tr>

                <tr>
                    <td>Catatan</td>
                    <td>:</td>
                    <td><?php echo $data['catatan'] ?></td>
                </tr>
            </tbody>
        </table>


    </body>