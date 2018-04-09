<html>
    <head>
        <title>Laporan</title>
        <style>
            div.laporan_style {
                border:1px solid red;
            }
            div.header_a {
                /*border:1px solid orange;*/
                height:180px;
            }
            div.left {
                /*border: 1px solid green;*/
                width:25%;
                float:left;
                display: -webkit-flex; /* Safari */
                -webkit-justify-content: space-around; /* Safari 6.1+ */
                display: flex;
                justify-content: space-around;
                height: 100%;
                padding-left:10;
            }
            div.left img{
                margin-top: 55%;
            }
            div.center {
                /*border:1px solid yellow;*/
                width:30%;
                float:left;
                display: -webkit-flex; /* Safari */
                -webkit-justify-content: space-around; /* Safari 6.1+ */
                display: flex;
                justify-content: space-around;
                height:100%;
            }
            div.right{
                /*border:1px solid blue;*/
                width:15%;
                float:left;
                display: -webkit-flex; /* Safari */
                -webkit-justify-content: space-around; /* Safari 6.1+ */
                display: flex;
                justify-content: space-around;
                height:100%;
            }
            div.right div {
                border-radius: 25px;
                border: 2px solid #000000;
                padding:2px;
                width: 120px;
                height: 25px; 
                margin-top:55%;
                text-align: center;
            }
            div.sub_header {
                text-align:center;
                /*border: 2px solid blue;*/
                width:100%;
                padding-left:150;
            }
            div.sub_header span {
                border: 1px solid #000000;
                width:55%;
                display:block;
                outline-style: double;                
            }
            div.sub_sheader {
                padding-top:20;
            }
            table.blok_1 {
                border: 1px solid;
                width:85%;
            }
            th.title{
                border:2px solid;
                background-color: darkgray;
            }
            td.left_side {
                width:25%;
            }
            table.blok_2 {
                /*border: 0px solid #000000;*/
                border-collapse: collapse;
                width:85%;
            }
            tr.row_subhead {
                text-align: center;
            }
            table.subblok_1 {
                border: 1px solid #000000;
                width:85%;
            }
            table.subblok_2 {
                border: 1px solid #000000;
                width:85%;
                background-color: darkgray;
                text-align: center;
                font-weight: bold;
            }
            table.blok_3 {
                border: 1px solid #000000;                
                width:85%;
            }
        </style>
    </head>
    <body>
        <div class="laporan_style">
            <div class="header_a">
                <div class="left">
                    <img src="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>images/aqua/logo_bps.png" height="75"/>
                </div>
                <div class="center">
                    <div style="text-align:center;">
                        <img src="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>images/pancasila.png" height="125" /><br/>
                        <span>REPUBLIK INDONESIA<br/>BADAN PUSAT STATISTIK</span>
                    </div>
                </div>
                <div class="right">
                    <div>DAFTAR - PIT</div>
                </div>
            </div>
            <div class="sub_header"><span><h3>LAPORAN TRIWULAN<br/>TEMPAT PENDARATAN IKAN TRADISIONAL</h3></span></div>
            <div class="sub_sheader">R A H A S I A</div>
            <div class="center_content">
                <table class="blok_1">
                    <thead>
                        <th colspan="2" class="title">BLOK I. KETERANGAN TEMPAT PENDARATAN IKAN TRADISIONAL</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="left_side">1. Provinsi</td>
                            <td>..............</td>
                        </tr>
                        <tr>
                            <td class="left_side">2. Kabupaten / Kota *)</td>
                            <td>..............</td>
                        </tr>
                        <tr>
                            <td class="left_side">3. Kecamatan</td>
                            <td>..............</td>
                        </tr>
                        <tr>
                            <td class="left_side">4. Desa / Kelurahan *)</td>
                            <td>..............</td>
                        </tr>
                        <tr>
                            <td class="left_side">5. Data yang dilaporkan</td>
                            <td>Triwulan......Tahun........</td>
                        </tr>
                        <tr>
                            <td class="left_side">6. Nomor urut tempat pendaratan ikan</td>
                            <td>Diisi oleh BPS</td>
                        </tr>
                        <tr>
                            <td>7. Nama lengkap tempat pendaratan ikan</td>
                            <td>..............</td>
                        </tr>
                        <tr>
                            <td>8. Alamat lengkap tempat pendaratan ikan</td>
                            <td>..............</td>
                        </tr>
                        <tr>
                            <td>9. Kondisi tempat pendaratan ikan</td>
                            <td>..............</td>
                        </tr>
                    </tbody>
                </table><br/>
                <table border="1" class="blok_2">
                    <thead>
                        <th colspan="3" class="title">BLOK II. KETERANGAN PETUGAS</th>
                    </thead>
                    <tbody>
                        <tr class="row_subhead">
                            <td class="left_side">Uraian</td>
                            <td>Pencacah</td>
                            <td>Pemeriksa</td>
                        </tr>
                        <tr>
                            <td class="left_side">1. Nama</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="left_side">2. Tanggal Pencacahan/Pemeriksaan</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="left_side">3. Tandatangan</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table><br/>
                <table class="subblok_1">
                    <tr>
                        <td>Tujuan</td>
                        <td>:</td>
                        <td>Memperoleh data statistik yang akurat dan tepat waktu untuk perencanaan dan evaluasi pembangunan.</td>
                    </tr>
                    <tr>
                        <td>Dasar Hukum</td>
                        <td>:</td>
                        <td>Pengumpulan data ini berdasarkan Undang-Undang No. 16 Tahun 1997 tentang Statistik.</td>
                    </tr>
                    <tr>
                        <td>Kerahasiaan</td>
                        <td>:</td>
                        <td>Kerahasiaan data dijamin oleh Undang-Undang No. 16 Tahun 1997 tentang Statistik.</td>
                    </tr>
                </table><br/>
                <table class="subblok_2">
                    <tr>
                        <td>Perhatian : Pengumpulan data ini tidak memungut biaya apapun</td>
                    </tr>
                </table><br/>
                <table class="blok_3">
                    <thead>
                        <th colspan="3" class="title">BLOK III. KETERANGAN KEGIATAN PENDARATAN IKAN</th>
                    </thead>
                    <tbody>                        
                    </tbody>
                </table>
            </div>            
        </div>
    </body>
</html>