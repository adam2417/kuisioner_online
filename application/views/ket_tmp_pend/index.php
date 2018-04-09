<span class="title_blue"><center>BLOK 1.KETERANGAN TEMPAT PENDARATAN <br/>IKAN TRADISIONAL</center></span><br/>
<br/>
<div class="form-style-3">
    <form method="post" action="<?php echo site_url('ket_tmp_pend'); ?>" id="frm_ket" name="frm_ket">
        <label for="nolap"><span>No. Laporan</span></label><input type="text" name="nolap" id="nolap" class="input-field" value="{newid}" readonly="readonly" />
        <label for="provinsi"><span>Provinsi</span></label><select name="provinsi" id="provinsi" class="select-field">
        <option>--Semua Provinsi--</option>
        {prov_list}
        <option value="{kd_prov}">{nm_prov}</option>
        {/prov_list}
    </select>
        <label for="kabupaten"><span>Kabupaten</span></label><select name="kabupaten" id="kabupaten" class="select-field">
        <option>--Semua Kabupaten--</option>
        {kab_list}
        <option value="{kd_kab}">{nm_kab}</option>
        {/kab_list}
    </select>
        <label for="kota"><span>Kota</span></label><select name="kota" id="kota" class="select-field">
        <option>--Semua Kota--</option>
        {kota_list}
        <option value="{kd_kota}">{nm_kota}</option>
        {/kota_list}
    </select>
        <label for="kecamatan"><span>Kecamatan</span></label><select name="kecamatan" id="kecamatan" class="select-field">
        <option>--Semua Kecamatan--</option>
        {kec_list}
        <option value="{kd_kec}">{nm_kec}</option>
        {/kec_list}
    </select>
        <label for="desa"><span>Desa</span></label><select name="desa" id="desa" class="select-field">
        <option>--Semua Desa--</option>
        {desa_list}
        <option value="{kd_desa}">{nm_desa}</option>
        {/desa_list}
    </select>
        <label for="kelurahan"><span>Kelurahan</span></label><select name="kelurahan" id="kelurahan" class="select-field">
        <option>--Semua Kelurahan--</option>
        {kel_list}
        <option value="{kd_kel}">{nm_kel}</option>
        {/kel_list}
    </select><br/><br/>
    <fieldset>
    <legend>Data yang dilaporkan</legend>
        <label for="triwulan"><span>Triwulan</span></label><input type="text" name="triwulan" id="triwulan" class="input-field" />
        <label for="tahun"><span>Tahun</span></label><input type="text" name="tahun" id="tahun" class="input-field" />
    </fieldset>
    <br/>
    <label for="no_urut_tempat"><span>Nomor Urut Tempat Pendaratan Ikan</span></label><input type="text" name="no_urut_tempat" id="no_urut_tempat" class="input-field" />
    <label for="nama_tempat"><span>Nama Lengkap Tempat Pendaratan Ikan</span></label><input type="text" name="nama_tempat" id="nama_tempat" class="input-field" />
    <label for="alamat_tempat"><span>Alamat Lengkap Tempat Pendaratan Ikan</span></label><textarea name="alamat_tempat" id="alamat_tempat" class="textarea-field"></textarea>
        <br/><br/>
    <fieldset>
        <legend>Kondisi Tempat Pendaratan Ikan</legend>
        {kond_tmp}
        <input type="radio" name="kondisi" value="{kd_kondisi}">{ket}
        {/kond_tmp}
    </fieldset>
    <fieldset>
        <input type="submit" value="Lanjut" name="lanjut" />
        <input type="button" value="Clear" name="clear" />
        <input type="submit" value="Buat Laporan Baru" name="new" />
    </fieldset>
    </form>
</div>
<script type="text/javascript">
    function resetData(){
        
    }
</script>