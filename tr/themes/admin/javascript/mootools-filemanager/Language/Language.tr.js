/*
Script: Language.tr.js
	MooTools FileManager - Language Strings in Turkish

Translation:
	[Christoph Pojer](http://cpojer.net)
*/

FileManager.Language.tr = {
	more: 'Detaylar',
	width: 'Genişlik:',
	height: 'Yükseklik:',
	
	ok: 'Tamam',
	open: 'Dosyayı Seç',
	upload: 'Yükle',
	create: 'Klasör Oluştur',
	createdir: 'Lütfen Klasör İsmi Belirleyin:',
	cancel: 'İptal',
	
	information: 'Bilgi',
	type: 'Tip:',
	size: 'Boyut:',
	dir: 'Yol:',
	modified: 'Son Düzenleme:',
	preview: 'Önizleme',
	close: 'Kapat',
	destroy: 'Sil',
	destroyfile: 'Dosyayı silmek istediğinizden eminmisiniz?',
	
	rename: 'Yeniden adlandır',
	renamefile: 'Lütfen yeni bir dosya ismi girin:',
	
	download: 'İndir',
	nopreview: '<i>Önizleme mümkün değil</i>',
	
	title: 'Başlık:',
	artist: 'Artist:',
	album: 'Albüm:',
	length: 'Uzunluk:',
	bitrate: 'Kalite:',	
	deselect: 'Kaldır',
	
	nodestroy: 'Serverda dosya silme engellenmiş.',
	
	'backend.disabled': 'Bu işlem sunucu tarafından devre dışı bırakılmış',
	'backend.authorized': 'Bu işlemi gerçekleştirmek için yeterli yetkiye sahip deilsiniz.',
	'backend.path': 'Belirtilen klasör mevcut değil. Site yöneticisine başvurun.',
	'backend.exists': 'Belirtilen yer mevcut. Lütfen site yöneticinizle iletişim kurun',
	'backend.mime': 'Belirtilen dosya türüne izin verilmiyor',
	'backend.extension': 'Yüklemeye çalıştığınız dosya bilinmiyor yada yasak bir dosya uzantısına sahip.',
	'backend.size': 'Yüklemek istediğiniz dosya boyutu sunucuda işlemek için çok büyük. Lütfen daha küçük boyutlara sahip bir dosya yüklemeyi deneyin.',
	'backend.partial': 'Yüklemeye çalıştığınız dosya teknik nedenlerden dolayı yüklenemedi, lütfen tekrar yüklemeyi deneyin.',
	'backend.nofile': 'Belirttiğiniz dosya bulunamıyor yada dosya mevcut değil.',
	'backend.default': 'Dosya yükleme işlemi esnasında problem çıktı.',
	
	'backend.nonewfile': 'A new name for the file to be moved / copied is missing.',
	'backend.corrupt_img': 'This file is a not a image or a corrupt file: ', // path
	'backend.copy_failed': 'An error occurred while copying the file / directory: ', // oldlocalpath : newlocalpath
	'backend.delete_thumbnail_failed': 'An error occurred when attempting to delete the image thumbnail',
	'backend.mkdir_failed': 'An error occurred when attempting to create the directory: ', // path
	'backend.move_failed': 'An error occurred while moving / renaming the file / directory: ', // oldlocalpath : newlocalpath
	'backend.path_tampering': 'Path tampering detected.',
	'backend.realpath_failed': 'Cannot translate the given file specification to a valid storage location: ', // $path
	'backend.unlink_failed': 'Dosyayı / Klasörü silmeye çalışırken bir hata oluştu: ',  // path

	// Image.class.php:
	'backend.process_nofile': 'Görüntü işleme birimi üzerinde çalışmak için geçerli bir dosya konumu alamadı.',
	'backend.imagecreatetruecolor_failed': 'Görüntü işleme birimi başarısız : GD imagecreatetruecolor() başarısız.',
	'backend.imagealphablending_failed': 'Görüntü işleme birimi başarısız : image alpha blending gerçekleştirilemiyor.',
	'backend.imageallocalpha50pctgrey_failed': 'Görüntü işleme birimi başarısız : alfa kanalı ve % 50 arka plan için yer ayıramıyor.',
	'backend.imagecolorallocatealpha_failed': 'Görüntü işleme birimi başarısız : Bu renkli görüntü için alfa kanalı yer ayıramıyor..',
	'backend.imagerotate_failed': 'Görüntü işleme birimi başarısız : GD imagerotate() başarısız.',
	'backend.imagecopyresampled_failed': 'Görüntü işleme birimi başarısız : GD imagecopyresampled() başarısız.',
	'backend.imagecopy_failed': 'Görüntü işleme birimi başarısız : GD imagecopy() başarısız.',
	'backend.imageflip_failed': 'Görüntü işleme birimi başarısız : görüntü döndürülemedi.',
	'backend.imagejpeg_failed': 'Görüntü işleme birimi başarısız : GD imagejpeg() başarısız.',
	'backend.imagepng_failed': 'Görüntü işleme birimi başarısız : GD imagepng() başarısız.',
	'backend.imagegif_failed': 'Görüntü işleme birimi başarısız : GD imagegif() başarısız.',
	'backend.imagecreate_failed': 'Görüntü işleme birimi başarısız : GD imagecreate() başarısız.',
	'backend.cvt2truecolor_failed': 'True Color dönüşümü başarısız oldu. Görüntü çözünürlüğü: ', /* x * y */
	'backend.no_imageinfo': 'Bozuk görüntü ya da resim dosyası yok.',
	'backend.img_will_not_fit': 'Görüntü mevcut RAM ile uyuşmuyor; gereken asgari (tahmini): ', /* XXX MBytes */
	'backend.unsupported_imgfmt': 'Desteklenmeyen resim formatı: ',    /* jpeg/png/gif/... */
	
	/* FU */
	uploader: {
		unknown: 'Bilinmeyen hata',
		sizeLimitMin: 'Eklenemez "<em>${name}</em>" (${size}), Minimun dosya boyutu <strong>${size_min}</strong>!',
		sizeLimitMax: 'Eklenemez "<em>${name}</em>" (${size}), dosya boyutu limiti <strong>${size_max}</strong>!'
	},
	
	flash: {
		hidden: 'Flash Medya yükleyiciyi etkinleştirmek için, internet tarayıcınızın açılır pencere engelleyicisini kapatın ve sayfayı yenileyin.',
		disabled: 'Flash Medya yükleyiciyi etkinleştirmek için, engellenen flash videoyu aktive edin ve sayfayı yenileyin.',
		flash: 'Dosya yükleyebilmek için <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe Flash</a> yüklemeniz gerekiyor.'
	},
	
	resizeImages: 'Büyük resimleri yüklerken yeniden boyutlandır',

	serialize: 'Galeriyi Kaydet',
	gallery: {
		text: 'Resim Açıklaması',
		save: 'Kaydet',
		remove: 'Galeriden kaldır',
		drag: 'Elementleri buraya taşıyıp bir galeri oluşturun...'
	}
};