<style type="text/css">

table.disdukcapil {
  width: 100%;
  /*border-collapse: collapse;*/
}
table.disdukcapil td {
  padding: 1px 1px 1px 3px;
}
table.disdukcapil td.padat {
  padding: 0px;
  margin: 0px;
}
table.disdukcapil td.anggota {
  border-left: solid 1px #000000;
  border-right: solid 1px #000000;
  border-top: dashed 1px #000000;
  border-bottom: dashed 1px #000000;
}
table.disdukcapil td.judul {
  border-left: solid 1px #000000;
  border-right: solid 1px #000000;
  border-top: double 1px #000000;
  border-bottom: double 1px #000000;
}
table.disdukcapil td.bawah {
  border-left: solid 1px #000000;
  border-right: solid 1px #000000;
  border-bottom: solid 1px #000000;
}
table.disdukcapil td.tengah_blank {
  border-left: solid 1px #000000;
  border-right: solid 1px #000000;
}
table.disdukcapil td.pinggir_kiri {border-left: solid 1px #000000;}
table.disdukcapil td.pinggir_kanan {border-right: solid 1px #000000;}
table.disdukcapil td.kotak {border: solid 1px #000000;}
table.disdukcapil td.abu {background-color: lightgrey;}
table.disdukcapil td.kode {background-color: lightgrey;}
table.disdukcapil td.kode div {
  margin: 0px 15px 0px 15px;
  border: solid 1px black;
  background-color: white;
  text-align: center;
}
table.disdukcapil td.pakai-padding {
  padding-left: 20px;
  padding-right: 2px;
}
table.disdukcapil td.kanan { text-align: right; }
table.disdukcapil td.tengah { text-align: center; }

table.ttd {
  margin-top: 20px;
  width: 100%;
}

table.ttd td { text-align: center; }
table.ttd td.left { text-align: left;  }
table.ttd td div {
  display: inline-block;
  width: auto;
  border-bottom: 1px solid black;
  padding-bottom: 3px;
}
</style>

<page style="font-size: 8pt">

  <table align="right" style="padding: 5px 20px; border: solid 1px black;">
    <tr><td><strong style="font-size: 14pt;">F-1.15</strong></td></tr>
  </table>
  <p style="text-align: center;">
      <strong style="font-size: 12pt;">FORMULIR PERMOHOHAN KARTU KELUARGA (KK) BARU WARGA NEGARA INDONESIA</strong>
  </p>
  <table class="disdukcapil" style="margin-top: 0px;">
    <col span="48" style="width: 2.0833%;">
<!--     <col span="13" style="width: 1.17%;">
    <col style="width: 3%;">
    <col span="3" style="width: 1.17%;">
    <col style="width: 10%;">
    <col span="2" style="width: 1.17%;">
    <col style="width: 2.5%;">
    <col style="width: 15%;">
    <col span="5" style="width: 1.17%;">
    <col style="width: 30%";>
 -->    <tr>
      <?php for($i=0; $i<48; $i++): ?>
        <td class="kotak">&nbsp;</td>
      <?php endfor; ?>
    </tr>

    <tr>
      <td class="kotak" colspan=48>
        <strong>Perhatian:</strong><br>
        1. Harap diisi dengan huruf cetak dan menggunakan tinta hitam<br>
        2. Setelah formulir ini diisi dan ditandatangani, harap diserahkan kembali ke Kantor Desa/Kelurahan
      </td>
    </tr>
    <tr>
      <td colspan="11" class="pinggir_kiri left"><strong>PEMERINTAH PROPINSI</strong></td>
      <td>:</td>
      <?php for($i=0; $i<2; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($config['kode_propinsi'][$i]))
            echo $config['kode_propinsi'][$i];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan=3>&nbsp;</td>
      <td colspan="17" class="kotak"><?php echo $config['nama_propinsi'];?></td>
      <td colspan=14 class="pinggir_kanan">&nbsp;</td>
    </tr>

    <tr>
      <td colspan="11" class="pinggir_kiri left"><strong>PEMERINTAH KABUPATEN/KOTA</strong></td>
      <td>:</td>
      <?php for($i=0; $i<2; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($config['kode_kabupaten'][$i]))
            echo $config['kode_kabupaten'][$i];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan=3>&nbsp;</td>
      <td colspan="17" class="kotak"><?php echo $config['nama_kabupaten'];?></td>
      <td colspan=14 class="pinggir_kanan">&nbsp;</td>
    </tr>

     <tr>
      <td colspan="11" class="pinggir_kiri left"><strong>KECAMATAN</strong></td>
      <td>:</td>
      <?php for($i=0; $i<2; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($config['kode_kecamatan'][$i]))
            echo $config['kode_kecamatan'][$i];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan=3>&nbsp;</td>
      <td colspan="17" class="kotak"><?php echo $config['nama_kecamatan'];?></td>
      <td colspan=14 class="pinggir_kanan">&nbsp;</td>
    </tr>

    <tr>
      <td colspan="11" class="pinggir_kiri left"><strong>KELURAHAN/DESA</strong></td>
      <td>:</td>
      <?php for($i=0; $i<4; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($config['kode_desa'][$i]))
            echo $config['kode_desa'][$i];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td>&nbsp;</td>
      <td colspan="17" class="kotak"><?php echo $config['nama_desa'];?></td>
      <td colspan=14 class="pinggir_kanan">&nbsp;</td>
    </tr>
    <tr><td colspan=48 class="bawah">&nbsp;</td></tr>
    <tr><td colspan=48 class="tengah_blank">&nbsp;</td></tr>

    <tr>
      <td colspan=7 class="kotak">1. Nama Lengkap Pemohon</td>
      <td>:</td>
      <?php for($i=0; $i<33; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($individu['nama'][$i]))
            echo $individu['nama'][$i];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan=7 class="pinggir_kanan">&nbsp;</td>
    </tr>
    <tr>
      <td colspan=7 class="kotak">2. NIK Pemohon</td>
      <td>:</td>
      <?php for($i=0; $i<16; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($individu['nik'][$i]))
            echo $individu['nik'][$i];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan=24 class="pinggir_kanan">&nbsp;</td>
    </tr>
    <tr>
      <td colspan=7 class="kotak">3. No. KK Semula</td>
      <td>:</td>
      <?php for($i=0; $i<16; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($individu['no_kk'][$i]))
            echo $individu['no_kk'][$i];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan=24 class="left pinggir_kanan">*) Diisi oleh petugas</td>
    </tr>
    <tr>
      <td colspan="7" class="kotak">4. Alamat Pemohon</td>
      <td>:</td>
      <td colspan="23" class="kotak"><?php echo $individu['alamat']?></td>
      <td colspan="3" class="tengah">RT:</td>
      <?php for($i=0; $i<3; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($individu['rt'][$i]))
            echo $individu['rt'][$i];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="3" class="tengah">RW:</td>
      <?php for($i=0; $i<3; $i++): ?>
        <td class="kotak padat tengah">
          <?php if(isset($individu['rw'][$i]))
            echo $individu['rw'][$i];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="5" class="pinggir_kanan">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="8" class="pinggir_kiri">&nbsp;</td>
      <td colspan="6" class="left">a. Desa/Keluarga</td>
      <td colspan="14" class="kotak"><?php echo $config['nama_desa'];?></td>
      <td colspan="5" class="left">b. Kecamatan</td>
      <td colspan="14" class="kotak"><?php echo $config['nama_kecamatan'];?></td>
      <td colspan="2" class="pinggir_kanan">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="8" class="pinggir_kiri">&nbsp;</td>
      <td colspan="6" class="left">c. Kabupaten/Kota</td>
      <td colspan="14" class="kotak"><?php echo $config['nama_kabupaten'];?></td>
      <td colspan="5" class="left">d. Propinsi</td>
      <td colspan="14" class="kotak"><?php echo $config['nama_propinsi'];?></td>
      <td colspan="2" class="pinggir_kanan">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="8" class="pinggir_kiri">&nbsp;</td>
      <td colspan="6" class="left">Kode Pos</td>
      <?php for($i=0; $i<5; $i++) : ?>
        <td class="kotak padat tengah">
          <?php if(isset($config['kode_pos'][$i]))
            echo $config['kode_pos'][$i];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="9" class="pinggir_kiri">&nbsp;</td>
      <td colspan="5" class="left">Telepon</td>
      <?php for($i=0; $i<8; $i++) : ?>
        <td class="kotak padat tengah">
          <?php if(isset($individu['telepon_kk'][$i]))
            echo $individu['telepon_kk'][$i];
            else echo "&nbsp;";
          ?>
        </td>
      <?php endfor; ?>
      <td colspan="7" class="pinggir_kanan">&nbsp;</td>
    </tr>
  </table>


  <table class="ttd" style="margin-top: 15px">
    <col style="width:6%">
    <col style="width:2%">
    <col style="width:19%">
    <col style="width:22%">
    <col style="width:16%">
    <col style="width:18%">
    <col style="width:17%">
    <tr>
      <?php $pengisi = str_pad("",300,"&nbsp;");?>
      <td class="left">Nama Ketua RT</td>
      <td> : </td>
      <td class="left"><u><?php echo $pengisi.$pengisi?></u></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td class="left">.........................................., .............................20..</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Petugas/Registrar</td>
      <td>Mengetahui</td>
      <td>&nbsp;</td>
      <td class="left">Kepala Keluarga</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>(Kabupaten/Kota atau Kecamatan atau Kelurahan/Desa)</td>
      <td>Lurah/Kepala Desa</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td class="left">Nama Ketua RW</td>
      <td> : </td>
      <td class="left"><u><?php echo $pengisi.$pengisi?></u></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td class="left">Ttd / cap Jempol</td>
    </tr>
    <tr><td colspan="7" style="line-height: 3px;">&nbsp;</td></tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td class="left" style="padding-left: 20px;"><div>Nama Lengkap:<?php echo str_pad("",390,"&nbsp;")?></div></td>
      <td class="left"><div>Nama Lengkap:<?php echo padded_string_fixed_length(strtoupper($kepala_desa['pamong_nama']),3,50)?></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td class="left" style="padding-left: 20px;"><?php echo "NIP".str_pad("",54,"&nbsp;").":"?></td>
      <td class="left"><?php echo "NIP".str_pad("",54,"&nbsp;").":&nbsp;&nbsp;&nbsp;".$kepala_desa['pamong_nip']?></td>
      <td>&nbsp;</td>
      <td class="left"><div>Nama Jelas:<?php echo padded_string_fixed_length($individu['kepala_kk'],5,60)?></div></td>
    </tr>
  </table>
  <p style="margin-top: 0px;">
    <u>PERNYATAAN</u><br>
    Demikian Formulir ini saya/kami isi dengan sesungguhnya apabila keterangan tersebut tidak sesuai dengan<br>
    keadaan sebenarnya, saya bersedia dikenakan sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku<br><br>
    Catatan: *) Hanya diisi oleh salah satu pasangan keluarga tersebut (suami/istri)
  </p>

</page>