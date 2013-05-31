<?php
/**
 * Ionize
 *
 * Varsayılan Form dil dosyası
 *
 * Language : 	Türkçe
 * Translater :	İskender TOTOĞLU / ALTI VE BİR BİLİŞİM TEKNOLOJİLERİ / http://www.altivebir.com.tr
 *
 * Bu dosyayı /themes/<my_theme/language/xx/form_lang.php kopyalayıp
 * kendi çevirileriniz ile değiştirebilirsiniz.
 *
 * ÖNEMLİ :
 * Bu dosyayı düzenlemeyin.
 * IONize versiyonu güncelleme esnasında dosyanın üzerine yazılacaktır.
 *
 */

/*
 * Etiketler
 * Kullanılacak form etiketleri.
 * Aynı zamanda Form Onaylaması için hata mesajlarının gösteriminde kullanılacak.
 * Her bir form kurulumu için 'label' olarak atandı : /config/ionize.php
 *
 */
$lang['form_label_email'] = 'E-Posta';
$lang['form_label_name'] = 'İsim';
$lang['form_label_firstname'] = 'Ad';
$lang['form_label_lastname'] = 'Soyad';
$lang['form_label_subject'] = 'Konu';
$lang['form_label_message'] = 'Mesaj';
$lang['form_label_screen_name'] = 'Ekran İsmi';
$lang['form_label_username'] = 'Kullanıcı Adı';
$lang['form_label_birthdate'] = 'Doğum Tarihi';
$lang['form_label_gender'] = 'Cinsiyet';
$lang['form_label_gender_female'] = 'Kadın';
$lang['form_label_gender_male'] = 'Erkek';
$lang['form_label_gender_unisex'] = 'Belirtmek istemiyorum';
$lang['form_label_login'] = 'Giriş';
$lang['form_label_password'] = 'Parola';
$lang['form_label_password_confirmation'] = 'Parola Onayı';
$lang['form_label_delete_account'] = 'Hesabı sil';

/*
 * Tuşlar
 *
 */
$lang['form_button_send'] = "Gönder";
$lang['form_button_save'] = "Kaydet";
$lang['form_button_register'] = "Kayıt Ol";
$lang['form_button_login'] = "Giriş";
$lang['form_button_logout'] = "Çıkış";
$lang['form_button_post'] = "Post";
$lang['form_button_answer'] = "Cevap";
$lang['form_button_save_profile'] = "Profili Kaydet";
$lang['form_button_password_back'] = "Parolayı geri al";

/*
 * E-Postalar
 *
 */
// Kayıt : İnternet sitesi e-posta adresine e-posta gönderimi
$lang['mail_website_registration_subject'] = "İnternet sitenize yeni bir kullanıcı kayıt oldu";
$lang['mail_website_registration_message'] = "Yeni kayıt olan kullanıcıların detayları.";

// Kullanıcıya Gönderilecek E-Posta
$lang['mail_user_registration_subject'] = "Kayıt Tarihi %s";
$lang['mail_user_registration_intro'] = "Değerli %s,";
$lang['mail_user_registration_message'] = "%s tarihinde kayıt oldunuz.<br/>Giriş bilgileriniz burada yer aldığı gibidir.";
$lang['mail_user_registration_activate'] = "Giriş yapmadan önce, linke tıklayarak hesabınızı aktive etmeniz gerekiyor :";

// Yeni Şifre : Kullanıcıya E-posta gönderimi
$lang['mail_user_password_subject'] = "%s için yeni parolanız";
$lang['mail_user_password_intro'] = "Değerli %s,";
$lang['mail_user_password_message'] = "İnternet sitemize erişmek için yeni bir parola talebinde bulundunuz <b>%s</b>.<br/>Yeni giriş bilgileriniz burada yer alıyor:";

// İletişim : Yöneticiye e-posta
$lang['mail_website_contact_subject'] = "İletişim formundan gelen e-posta";
$lang['mail_website_contact_message'] = "Bir kullanıcı internet sitesindeki iletişim formunu kullanarak bir mesaj gönderdi.";

// İletişim : Kullanıcıya e-posta
$lang['mail_user_contact_subject'] = "Gönderdiğiniz mesaj için teşekkür ederiz %s";
$lang['mail_user_contact_intro'] = "Sayın %s,";
$lang['mail_user_contact_message'] = "Mesajınız için teşekkür ederiz.<br/>Hızlı bir şekilde size geri dönüş yapacağız.";
// Message about automatic message
$lang['mail_automatic_message_warning'] = "Bu mesaj otomatik olarak oluşturuldu. Lütfen cevaplamayın.";
/*
 * Mesajlar
 * Giriş için başarılı mesajı / kayıt formları
 * Her bir form kurulumu için 'success' olarak atandı : /config/ionize.php
 *
 */
$lang['form_not_logged'] = "Giriş yapmadınız.";
$lang['form_login_success_message'] = "Başarıyla giriş yaptınız.";
$lang['form_login_error_message'] = "Giriş işleminde hata : Giriş bilgilerinizi kontrol edin.";
$lang['form_login_not_found_message'] = "Kullanıcı bulunamadı.";
$lang['form_login_not_activated_message'] = "Bu hesap henüz aktive edilmemiş görünüyor. Aktivasyon için e-postalarınızı kontrol edip gönderilen aktivasyon bağlantısına tıklayın.";
$lang['form_register_success_message'] = "Başarıyla kayıt oldunuz.";
$lang['form_register_error_message'] = "Hata : Kayıt işlemi başarısız.";
$lang['form_profile_success_message'] = "Profil bilgileri kayıt edildi";
$lang['form_profile_error_message'] = "Böyle bir kullanıcı zaten mevcut. Lütfen kullanıcı adınızı yada e-posta adresinizi değiştirerek tekrar deneyiniz";
$lang['form_profile_account_deleted'] = "Hesap silindi";

$lang['form_password_error_message'] = "Bir hata meydana geldi.";
$lang['form_password_not_found_message'] = "E-posta adresi sistemimizde bulunmamaktadır";
$lang['form_password_success_message'] = "Yeni parolanızı içeren bir e-posta, e-posta adresinize gönderildi.";

$lang['form_contact_error_title'] = 'Bir hata oluştu.';
$lang['form_contact_error_message'] = 'Umarım sadece eksik alanlardır. Lütfen formu kontrol edin...';
$lang['form_contact_success_title'] = 'Mesajınız başarıyla gönderildi !';
$lang['form_contact_success_message'] = 'Mesajınız gönderildi, Hızlı bir şekilde geri dönüş yapacağız !';
/*
 * Onaylama Hataları
 * 
 */
$lang['form_error_javascript_required'] = "Formu gönderebilmek tarayıcınızın javascript desteğinin aktive edilmesi gerekiyor.";
$lang['form_error_spam'] = "Gereksiz mesajınız (SPAM) için teşekkür ederiz !";
$lang['form_error_required'] = "<strong>%s</strong> alanı doldurulması zorunludur.";
$lang['form_error_isset'] = "<strong>%s</strong> alanı bir değer içermelidir.";
$lang['form_error_valid_email'] = "<strong>%s</strong> alanı doğru bir e-posta adresi içermelidir.";
$lang['form_error_valid_emails'] = "<strong>%s</strong> alanı doğru bir e-posta adresleri içermelidir.";
$lang['form_error_valid_url'] = "<strong>%s</strong> alanı doğru bir (URL) içermelidir.";
$lang['form_error_valid_ip'] = "<strong>%s</strong> alanı doğru bir (IP) adresi içermelidir.";
$lang['form_error_min_length'] = "<strong>%s</strong> alanı %s karakterden az karakter içermelidir.";
$lang['form_error_max_length'] = "<strong>%s</strong> alanı en fazla %s karakter içermelidir.";
$lang['form_error_exact_length'] = "<strong>%s</strong> alanı tam olarak %s karakter içermelidir.";
$lang['form_error_alpha'] = "<strong>%s</strong> alanı sadece alfabetik karakterler içerebilir.";
$lang['form_error_alpha_numeric'] = "<strong>%s</strong> alanı sadece alfa-sayısal karakterler içermelidir.";
$lang['form_error_alpha_dash'] = "<strong>%s</strong> alanı sadece alfa-sayısal, çizgi, ve nokta karakterlerini içerebilir.";
$lang['form_error_numeric'] = "<strong>%s</strong> alanı sadece numara içermelidir.";
$lang['form_error_is_numeric'] = "<strong>%s</strong> alanı sadece sayısal karakterler içermelidir.";
$lang['form_error_integer'] = "<strong>%s</strong> alanı sadece tamsayı içermelidir.";
$lang['form_error_matches'] = "<strong>%s</strong> alanları uyuşmuyor.";
$lang['form_error_is_natural'] = "<strong>%s</strong> alanı sadece pozitif sayılar içermelidir.";
$lang['form_error_is_natural_no_zero']	= "<strong>%s</strong> alana sıfırdan büyük bir sayı içermelidir.";
$lang['form_error_restricted_field'] = "İzin verilmeyen veri türü.";
$lang['form_error_terms'] = "Kullanım koşullarını kabul etmek zorundasınız.";
$lang['form_error_upload_something'] = "Dosya yüklemesi sırasında bir hata oluştu.";
$lang['form_error_upload_file_size'] = "Yüklenecek dosya boyutunun 1 MB dan büyük olmaması gerekiyor.";
$lang['form_error_upload_file_type'] = "Sadece JPEG, PNG ve GIF dosya uzantılarının yüklenmesine izin veriliyor.";

