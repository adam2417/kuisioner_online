<?php 
$x = 0; 
?>
<span class="title_blue"><center>BLOK 3.KETERANGAN KEGIATAN PENDARATAN IKAN</center></span><br/>
<br/>
<div class="form-style-3">
<form method="post" name="frm_keg" action="<?php echo site_url('ket_keg_pend/postData'); ?>">
<table>
    <tbody>        
        <?php 
        $x = 0;
        foreach($data_header as $dh){ ?>
        <tr>
            <td><?php echo $x+1; ?>.</td>
            <td><?php echo $dh->ket_kegiatan; ?></td>
        </tr>
        <tr>
            <?php if(isset($dh->selection_list) && ($dh->selection_list != "#")) { ?>
            <td>&nbsp;</td>
            <td>
                <table>
                    <tr>
                        <?php                            
                            $sel_data = $dh->selection_list;
                            $arr_sel = explode('#',$sel_data);
                            foreach ($arr_sel as $sel)
                            {
                                if($sel != "~"){
                        ?>
                            <td><input type="radio" name="selection_<?php echo $dh->kd_ket; ?>" value="<?php echo $sel; ?>"><?php echo $sel;?></td>
                        <?php
                                }else {
                                    ?>
                        <td><input type="radio" name="selection_<?php echo $dh->kd_ket; ?>" value="<?php echo $sel; ?>">Lainnya <input type="text" name="txt_<?php echo $dh->kd_ket; ?>" /></td>
                        <?php
                                } 
                            }
                        ?>
                    </tr>
                </table>
            </td>
            <?php } ?>
            <?php if(isset($dh->has_sub) && ($dh->has_sub == "Y")){ ?>
            <td>&nbsp;</td>
            <td>
                <table>
                    <?php 
                    $j = 0;
                    foreach($dh->sub_data as $sub) {?>
                    <tr>
                        <td>-</td>
                        <td><?php echo $sub->ket;?></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <table>
                                <tr>
                                    <?php 
                                        $subsel = $sub->selection;
                                        $arrsubsel = explode('#',$subsel);
                                        foreach($arrsubsel as $subsl){
                                            if($subsl != "~"){
                                    ?>
                                    <td><input type="radio" name="selection_<?php echo $dh->kd_ket; ?>_<?php echo $sub->kd_sub;?>" value="<?php echo $subsl; ?>"><?php echo $subsl; ?></td>
                                    <?php
                                            }else { 
                                                if(count($arrsubsel) > 1){
                                    ?>
                                    <td><input type="radio" name="selection_<?php echo $dh->kd_ket; ?>_<?php echo $sub->kd_sub;?>" value="<?php echo $subsl; ?>">Lainnya <input type="text" name="txt_<?php echo $dh->kd_ket; ?>_<?php echo $sub->kd_sub;?>" class="input-field" /></td>
                                    <?php
                                                } else{
                                                    ?>
                                    <td><input type="text" name="txt_<?php echo $dh->kd_ket; ?>_<?php echo $sub->kd_sub;?>" class="input-field" /></td>
                                    <?php
                                                }
                                            }
                                        }
                                    ?>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <?php $j++; } ?>
                </table>
            </td>
            <?php } ?>            
        </tr>
        <?php $x++; } ?>
    </tbody>
</table>
<fieldset>
    <input type="submit" value="Lanjut" name="lanjut" />
    <input type="button" value="Clear" name="clear" />
</fieldset>
</form>
</div>