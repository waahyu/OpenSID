<script type="text/javascript" src="<?=base_url()?>assets/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
        // General options
		mode : "textareas",
		theme : "advanced",
		skin : "o2k7",
        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

        // Theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Skin options
        skin : "o2k7",
        skin_variant : "blue",

        // Example content CSS (should be your site CSS)
        content_css : "css/example.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "js/template_list.js",
        external_link_list_url : "js/link_list.js",
        external_image_list_url : "js/image_list.js",
        media_external_list_url : "js/media_list.js",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
});
</script>
<div id="pageC">
<table class="inner">
<tr style="vertical-align:top">
<td style="background:#fff;padding:0px;"> 
<div id="contentpane">
<form id="validasi" action="<?=$form_action?>" method="POST" enctype="multipart/form-data">
<div class="ui-layout-center" id="maincontent" style="padding: 5px;">
<h3>Form Artikel</h3>
<table class="form">
<tr>
<th width="120">Judul Artikel</th>
<td><input class="inputbox" type="text" name="judul" value="<?=$artikel['judul']?>" size="60"/></td>
</tr>
<tr>
<tr>
<th width="120" colspan="2">Isi Artikel</th>
</tr>
<tr>
<tr>
<td colspan="2">
<textarea  name="isi" style="width: 800px; height: 500px;">
<?=$artikel['isi']?>
</textarea>
</td>
</tr>
<tr>
<td colspan="2">
&nbsp;
</td>
</tr>
<?if($artikel['gambar']){?>
<tr>
<th class="top">Gambar</th>
<td>
<div class="gallerybox-avatar">
<img src="<?=base_url()?>assets/front/artikel/kecil_<?=$artikel['gambar']?>" alt="" width="200"/>
</div>
</td>
<input type="hidden" name="old_gambar" value="<?=$artikel['gambar']?>">
</tr>
<?}?>
<tr>
<th>Dokumen Lampiran</th>
<td><input type="file" name="dokumen" /> <span style="color: #aaa;"></span></td>
</tr>
<tr>
<th>Nama Dokumen (Nantinya akan menjadi link unduh/download)</th>
<td><input size="30" type="text" name="link_dokumen" value="<?=$artikel['link_dokumen']?>"/></td>
</tr>
<tr>
<th>Unggah/Upload Gambar Utama</th>
<td><input type="file" name="gambar" /> <span style="color: #aaa;">(Kosongi jika tidak ingin mengubah gambar)</span></td>
</tr>
<tr>
<th class="top">Gambar</th>
<td>
<?if($artikel['gambar1']){?>  
<div class="gallerybox-avatar">
<img src="<?=base_url()?>assets/front/artikel/kecil_<?=$artikel['gambar1']?>" alt="" width="200"/>
</div>
</td>
</tr>
<?}?>
<tr>
<th>Gambar Tambahan</th>
<td><input type="file" name="gambar1" /> <span style="color: #aaa;">(Kosongi jika tidak ingin mengubah gambar)</span></td>
</tr>
<tr>
<th class="top">Gambar</th>
<td>
<?if($artikel['gambar2']){?>  
<div class="gallerybox-avatar">
<img src="<?=base_url()?>assets/front/artikel/kecil_<?=$artikel['gambar2']?>" alt="" width="200"/>
</div>
</td>
</tr>
<?}?>
<tr>
<th>Gambar Tambahan</th>
<td><input type="file" name="gambar2" /> <span style="color: #aaa;">(Kosongi jika tidak ingin mengubah gambar)</span></td>
</tr>
<tr>
<th class="top">Gambar</th>
<td>
<?if($artikel['gambar3']){?>  
<div class="gallerybox-avatar">
<img src="<?=base_url()?>assets/front/artikel/kecil_<?=$artikel['gambar3']?>" alt="" width="200"/>
</div>
</td>
</tr>
<?}?>
<tr>
<th>Gambar Tambahan</th>
<td><input type="file" name="gambar3" /> <span style="color: #aaa;">(Kosongi jika tidak ingin mengubah gambar)</span></td>
</tr>
</table>
</div>
   
<div class="ui-layout-south panel bottom">
<div class="left">
<a href="<?=site_url()?>web/index/<?=$cat?>" class="uibutton icon prev">Kembali</a>
</div>
<div class="right">
<div class="uibutton-group">
<button class="uibutton" type="reset">Clear</button>
<button class="uibutton confirm" type="submit" >Simpan</button>
</div>
</div>
</div> </form>
</div>
</td></tr></table>
</div>