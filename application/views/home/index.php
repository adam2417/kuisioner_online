<span class="title_blue"><center>DASHBOARD</center></span><br/>
<div class="form-style-3">
<table class="responstable">
    <thead>
        <tr>
            <th>Kode Laporan</th>
            <th>Periode(Triwulan/Tahun)</th>
            <th>Status</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data_list as $dl) { ?>
        <tr>
            <td><?php echo $dl->kd_lap; ?></td>
            <td><?php echo $dl->triwulan_ke.'/'.$dl->tahun_ke; ?></td>
            <td><?php
                if($dl->status_lap=='O'){
                    echo 'Open';
                } else {
                    echo 'Closed';
                }
                ?>
            </td>
            <td>
                <?php 
                    if($dl->status_lap == 'O'){
                ?>
                <a href="#">Tutup Laporan</a>
                <?php
                    } else {
                ?>
                <a href="#">Lihat Laporan</a>
                <?php } ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>