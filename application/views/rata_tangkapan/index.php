<span class="title_blue">BLOK 4.RATA-RATA HASIL TANGKAPAN IKAN YANG <br/>DIDARATKAN PER HARI PENDARATAN MENURUT <br/>JENIS PERAHU/KAPAL</span><br/>
<div class="form-style-3">
    <form method="post" action="#" id="frm_kol" name="frm_kol">
        <table>
            {rerata_tangkapan}
            <tr>
                <td>{kd_kolom}.</td>
                <td>-</td>
                <td>Banyaknya hari pendaratan ikan {desc} dalam satu triwulan:</td>
                <td><input type="text" value="{jm_hari}" name="jmhari_{kd_kolom}" id="jmhari" class="input-field"/></td>
                <td>Hari</td>
                
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>-</td>
                <td>Rata-rata banyaknya {desc} yang mendaratkan ikan disetiap hari pendaratan:</td>
                <td><input type="text" value="{rerata_perahu}" name="rata_{kd_kolom}" id="rata" class="input-field"/></td>
                <td>Unit</td>
            </tr>
            <tr><td><input type="hidden" nama="kdkolom" value="{kd_kolom}" /></td></tr>
            {/rerata_tangkapan}
        </table>
        <fieldset>
        <input type="submit" value="Lanjut" name="lanjut" />
        <input type="button" value="Clear" name="clear" />
        </fieldset>
    </form>
</div>