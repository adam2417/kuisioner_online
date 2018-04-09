<?php $alphabet = range('A', 'Z'); $j = 1;?>
<span class="title_blue">BLOK 4.RATA-RATA HASIL TANGKAPAN IKAN YANG <br/>DIDARATKAN PER HARI PENDARATAN MENURUT <br/>JENIS PERAHU/KAPAL</span><br/>
<div class="form-style-3">
    <form method="post" action="#" id="frm_kol" name="frm_kol">
        <table class="responstable" name="blok_iv" id="blok_iv">
            <thead>
                <tr>
                    <th rowspan="4" width="100px" class="first_kol">Jenis Ikan</th>
                    <th rowspan="4" width="100px" class="first_kol">Kode</th>
                    <?php
                    foreach($col_def as $cd) {
                        ?>
                    <th colspan="2"><?php echo $alphabet[($cd->kd_kolom-1)].'. '. $cd->desc;?></th>
                    <?php
                    }
                    ?>
                </tr>
                <tr>
                    <?php
                    foreach($col_def as $cd) {
                        ?>
                    <th colspan="2">1.Banyaknya hari pendaratan ikan <?php echo $cd->desc;?> dalam satu triwulan: 
                        <?php
                        foreach($col_deff as $cdd){
                            if($cd->kd_kolom == $cdd->kd_kol){
                                echo $cdd->jml_hari;
                            }
                        }
                        ?>
                        hari</th>
                    <?php
                    }
                    ?>
                </tr>
                <tr>
                    <?php
                    foreach($col_def as $cd) {
                        ?>
                    <th colspan="2">2.Rata-rata banyaknya <?php echo $cd->desc;?> yang mendaratkan ikan disetiap hari pendaratan :
                        <?php
                        foreach($col_deff as $cdd){
                            if($cd->kd_kolom == $cdd->kd_kol){
                                echo $cdd->rerata_perahu;
                            }
                        }
                        ?>
                        Unit</th>
                    <?php
                    }
                    ?>
                </tr>
                <tr>
                    <?php
                    foreach($col_def as $cd) {
                        ?>
                    <th>3.Rata-rata volume ikan yang didarat kan PER HARI pendaratan dari seluruh <?php echo $cd->desc;?><br/><center>(Kg)</center></th>
                    <th>4.Rata-rata nilai ikan yang didaratkan PER HARI pendaratan dari seluruh <?php echo $cd->desc;?><br/><center>(Rp)</center></th>
                    <?php
                    }
                    ?>
                </tr>
                <tr>
                    <?php
                    while($j <= 8){
                        ?>
                    <td style="text-align:center;">(<?php echo $j; ?>)</td>
                    <?php
                        $j++;
                    }
                    ?>
                </tr>
            </thead>
            <tr>
                <td colspan="8"><button type="button" onclick="myFunction()">Tambah Jenis Ikan</button></td>
            </tr>
        </table>
    <fieldset>
        <input type="submit" value="Lanjut" name="lanjut" />
        <input type="button" value="Clear" name="clear" />
    </fieldset>
    </form>    
</div>
<script type="text/javascript">
function formatNumber(myElement) { // JavaScript function to insert thousand separators
    var myVal = ""; // The number part
    var myDec = ""; // The digits pars
    // Splitting the value in parts using a dot as decimal separator

    var parts = myElement.value.toString().split(".");
    // Filtering out the trash!
    parts[0] = parts[0].replace(/[^0-9]/g,""); 
    // Setting up the decimal part
    if ( ! parts[1] && myElement.value.indexOf(".") > 1 ) { 
        myDec= ".00"; 
    }
    if ( parts[1] ) { 
        myDec = "."+parts[1]; 
    }
    // Adding the thousand separator
    while ( parts[0].length > 3 ) {
        myVal = ","+parts[0].substr(parts[0].length-3, parts[0].length)+myVal;
        parts[0] = parts[0].substr(0, parts[0].length-3);
    }
    myElement.value = parts[0]+myVal+myDec;
}
function myFunction() {
    var table = document.getElementById("blok_iv");    
    var rowCount = table.rows.length;    
    var row = table.insertRow(rowCount);
    var cellJenisIkan = row.insertCell(0);
    cellJenisIkan.padding = 0;
    var cellKodeIkan = row.insertCell(1);
    cellJenisIkan.innerHTML = "<select id=\"jenis_ikan_"+ rowCount +"\" name=\"jenis_ikan[]\" style=\"width:95%\" onChange=\"pilihJenisIkan(this.value,"+ rowCount +");\" >" +
        " <option value=\"---\">==Pilih Jenis ikan==</option>" +
        <?php foreach($ikan_list as $il) { ?>
        " <option value=\"<?php echo $il->kd_ikan; ?>\"><?php echo $il->nama_ikan; ?></option>" +
        <?php
        } ?>
        "</select>";
    cellKodeIkan.innerHTML = "<input type=\"text\" name=\"kode_jenis_ikan[]\" id=\"kode_jenis_ikan_"+ rowCount +"\" readonly=\"readonly\"/>";

    <?php
    $z = 2;
    $cd = 0;
    while($cd < count($col_def)){
    //foreach($col_def as $cd) {
    ?>
    var cell_<?php echo $z; ?>_a = row.insertCell(<?php echo $z; ?>);
    var cell_<?php echo $z; ?>_b = row.insertCell(<?php echo $z+1; ?>);
    cell_<?php echo $z; ?>_a.innerHTML = "<input type=\"text\" name=\"volume_ikan_<?php echo $col_def[$cd]->kd_kolom; ?>[]\" value=\"0\" onkeyup=\"formatNumber(this);\" />";
    cell_<?php echo $z; ?>_b.innerHTML = "<input type=\"text\" name=\"harga_ikan_<?php echo $col_def[$cd]->kd_kolom; ?>[]\" value=\"0\" onkeyup=\"formatNumber(this);\"/>";
    <?php
        $cd++;
    }
    ?>
}
function pilihJenisIkan(vals,obj_id){
    var kode_jenis = document.getElementById("kode_jenis_ikan_" + obj_id);
    kode_jenis.value = vals;
}
</script>