<?php
/**
 * Internationalisation file for ContactPage extension.
 *
 * @file
 * @ingroup Extensions
 * @author Daniel Kinzler, brightbyte.de
 * @copyright © 2007 Daniel Kinzler
 * @license GNU General Public Licence 2.0 or later
 */

$messages = array();

/** English
 * @author Daniel Kinzler
 * @author Reedy
 */
$messages['en'] = array(
	'contactpage' => 'Contact page',
	'contactpage-desc' => '[[Special:Contact|Contact form for visitors]]',
	'contactpage-title' => 'Contact',
	'contactpage-pagetext' => 'Please use the form below to contact us.',
	'contactpage-legend' => 'Send email',
	'contactpage-defsubject' => 'Contact message',
	'contactpage-subject-and-sender' => '$1 (from $2)',
	'contactpage-subject-and-sender-withip' => '$1 (from $2 at $3)',
	'contactpage-fromname' => 'Your name:',
	'contactpage-fromaddress' => 'Your email address:',
	'contactpage-formfootnotes' => '(needed if you want an answer)',
	'contactpage-includeip' => 'Include my IP address in this message.',
);

/** Message documentation (Message documentation)
 * @author Bennylin
 * @author EugeneZelenko
 * @author Jon Harald Søby
 * @author Lloffiwr
 * @author Purodha
 * @author Reedy
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'contactpage' => '{{Identical|ContactPage}}',
	'contactpage-desc' => 'Extension description displayed on [[Special:Version]].',
	'contactpage-title' => 'Used as page title.
{{Identical|Contact}}',
	'contactpage-pagetext' => 'Used as page text.

The page title for this message is {{msg-mw|Contactpage-title}}.',
	'contactpage-legend' => '{{Identical|E-mail}}',
	'contactpage-defsubject' => 'Default subject for sent e-mail. {{Identical|Contact}}',
	'contactpage-subject-and-sender' => 'Subject with sender included. Parameters:
* $1 - original subject or default subject {{msg-mw|contactpage-defsubject}}
* $2 - username, email address or IP address',
	'contactpage-subject-and-sender-withip' => 'Subject with sender and IP address included. Parameters:
* $1 - original subject or default subject {{msg-mw|contactpage-defsubject}}
* $2 - username, email address
* $3 - IP address',
	'contactpage-fromname' => '{{Identical|Your name}}',
	'contactpage-fromaddress' => '{{Identical|E-mail address}}',
	'contactpage-formfootnotes' => 'Message to notify users that an email address is needed if an answer is required',
	'contactpage-includeip' => 'Used as checkbox label in the ContactPage form.',
);

/** Afrikaans (Afrikaans)
 * @author Arnobarnard
 * @author Naudefj
 */
$messages['af'] = array(
	'contactpage' => 'Kontakblad',
	'contactpage-desc' => '[[Special:Contact|Kontak vorm vir besoekers]]',
	'contactpage-title' => 'Kontak',
	'contactpage-pagetext' => 'Gebruik die onderstaande vorm om ons te kontak.',
	'contactpage-legend' => 'Stuur E-pos',
	'contactpage-defsubject' => 'Kontak boodskap',
	'contactpage-subject-and-sender' => '$1 (van $2)',
	'contactpage-subject-and-sender-withip' => '$1 (van $2 op $3)',
	'contactpage-fromname' => 'U naam *',
	'contactpage-fromaddress' => 'U e-posadres **',
	'contactpage-formfootnotes' => "* opsioneel<br />
** opsioneel, maar noodsaaklik as u 'n antwoord wil ontvang",
	'contactpage-fromname-required' => 'U naam:',
	'contactpage-fromaddress-required' => 'U e-posadres:',
	'contactpage-formfootnotes-required' => 'Alle velde is verpligtend.',
	'contactpage-captcha' => 'Los die captch op voor u die boodskap kan stuur ([[Special:Captcha/help|meer inligting]])',
	'contactpage-captcha-failed' => 'Die captcha-toets het gefaal! ([[Special:Captcha/help|meer inligting]])',
	'contactpage-includeip' => 'Sluit my IP-adres by die boodskap in.',
);

/** Gheg Albanian (Gegë)
 * @author Mdupont
 */
$messages['aln'] = array(
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Ju lutem përdorni formularin e mëposhtëm për të na kontaktoni.',
	'contactpage-legend' => 'Dergo e-mail',
	'contactpage-defsubject' => 'mesazh Kontakt',
	'contactpage-subject-and-sender' => '$1 (nga $2)',
	'contactpage-subject-and-sender-withip' => '$1 (prej $2 në $3)',
	'contactpage-fromname' => 'Emri juaj: *',
	'contactpage-fromaddress' => 'Your e-mail: **',
	'contactpage-formfootnotes' => '* Opcionale <br /> ** Dëshirë por e nevojshme qoftë se dëshironi një përgjigje',
	'contactpage-fromname-required' => 'Emri juaj:',
	'contactpage-fromaddress-required' => 'Your e-mail:',
	'contactpage-formfootnotes-required' => 'Të gjitha fushat janë të kërkuara.',
	'contactpage-captcha' => 'Për të dërguar mesazh, ju lutem zgjidh captcha ([[Special:Captcha/help|më shumë informacion]])',
	'contactpage-captcha-failed' => 'Captcha test i dështuar! ([[Special:Captcha/help|më shumë informacion]])',
	'contactpage-includeip' => 'Përfshini IP adresa ime ne kete mesazh.',
);

/** Arabic (العربية)
 * @author Meno25
 * @author OsamaK
 * @author أحمد
 * @author زكريا
 */
$messages['ar'] = array(
	'contactpage' => 'صفحة المراسلة',
	'contactpage-desc' => '[[Special:Contact|استمارة اتصال للزائرين]]',
	'contactpage-title' => 'راسلنا',
	'contactpage-pagetext' => 'استخدم الاستمارة التالية لتُكاتبنا.',
	'contactpage-legend' => 'رسالة بريد إلكتروني',
	'contactpage-defsubject' => 'موضوع المراسلة',
	'contactpage-subject-and-sender' => '$1 (من $2)',
	'contactpage-subject-and-sender-withip' => '$1 (من $2 ذي $3)',
	'contactpage-fromname' => 'الاسم:',
	'contactpage-fromaddress' => 'عنوان البريد:',
	'contactpage-formfootnotes' => '(مطلوب لو أردت ردًّا)',
	'contactpage-includeip' => 'ضمّن عنوان بروتوكول الإنترنت الدال عليّ في الرسالة.',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'contactpage-subject-and-sender' => '$1 (ܡܢ $2)',
	'contactpage-fromname' => 'ܫܡܐ ܕܝܠܟ: *',
	'contactpage-fromname-required' => 'ܫܡܐ ܕܝܠܟ:',
	'contactpage-fromaddress-required' => 'ܒܝܠܕܪܐ ܐܠܩܛܪܘܢܝܐ ܕܝܠܟ:',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Ghaly
 * @author Meno25
 * @author Ramsis II
 */
$messages['arz'] = array(
	'contactpage' => 'صفحة الاتصال',
	'contactpage-desc' => '[[Special:Contact|استمارة اتصال للزائرين]]',
	'contactpage-title' => 'اتصل',
	'contactpage-pagetext' => 'من فضلك استخدم الاستمارة بالأسفل للاتصال بنا.',
	'contactpage-legend' => 'ايعت ايميل',
	'contactpage-defsubject' => 'رسالة الاتصال',
	'contactpage-subject-and-sender' => '$1 (من $2)',
	'contactpage-fromname' => 'اسمك*',
	'contactpage-fromaddress' => 'الايميل بتاعك: **',
	'contactpage-formfootnotes' => '* اختياري<br />
** اختيارى لكن ضرورى لو أردت إجابة',
	'contactpage-fromname-required' => 'اسمك',
	'contactpage-fromaddress-required' => 'الايميل بتاعك:',
	'contactpage-formfootnotes-required' => 'كل الحقول مطلوبة',
	'contactpage-captcha' => 'لإرسال الرسالة، من فضلك حل الكابتشا ([[Special:Captcha/help|معلومات إضافية]])',
	'contactpage-captcha-failed' => 'اختبار الكابتشا فشل! ([[Special:Captcha/help|معلومات إضافية]])',
);

/** Assamese (অসমীয়া)
 * @author Bishnu Saikia
 */
$messages['as'] = array(
	'contactpage-title' => 'যোগাযোগ',
	'contactpage-fromname' => 'আপোনাৰ নাম:',
	'contactpage-fromname-required' => 'আপোনাৰ নাম:',
	'contactpage-fromaddress-required' => 'আপোনাৰ ই-মেইল:',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'contactpage' => 'Páxina de contautu',
	'contactpage-desc' => '[[Special:Contact|Formulariu de contautu pa los visitantes]]',
	'contactpage-title' => 'Contautu',
	'contactpage-pagetext' => "Usa'l formulariu d'abaxo pa comunicate con nós.",
	'contactpage-legend' => 'Unviar un corréu',
	'contactpage-defsubject' => 'Mensaxe de contautu',
	'contactpage-subject-and-sender' => '$1 (de $2)',
	'contactpage-subject-and-sender-withip' => '$1 (de $2 en $3)',
	'contactpage-fromname' => 'Nome:',
	'contactpage-fromaddress' => 'Direición de corréu electrónicu:',
	'contactpage-formfootnotes' => '(necesario si quier una respuesta)',
	'contactpage-includeip' => 'Incluir la mio direición IP nesti mensaxe.',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'contactpage' => 'Əlaqə səhifəsi',
	'contactpage-title' => 'Əlaqə',
	'contactpage-legend' => 'E-məktub göndər',
	'contactpage-fromname' => 'Sizin adınız: *',
	'contactpage-fromaddress' => 'Sizin e-poçtunuz: **',
	'contactpage-fromname-required' => 'Sizin adınız:',
	'contactpage-fromaddress-required' => 'Sizin e-poçtunuz:',
);

/** South Azerbaijani (تورکجه)
 * @author Mousa
 */
$messages['azb'] = array(
	'contactpage' => 'باغلانتی قورماق صحیفه‌سی',
	'contactpage-desc' => '[[Special:Contact|گؤروشنلر اوچون باغلانتی قورماق فورمو]]',
	'contactpage-title' => 'باغلانتی',
	'contactpage-pagetext' => 'لوطفاً بیزله باغلانتی قورماق اوچون آشاغیداکی فورمدان ایستیفاده ائدین.',
	'contactpage-legend' => 'ایمیل گؤندر',
	'contactpage-defsubject' => 'باغلانتی یازیسی',
	'contactpage-subject-and-sender' => '$1 ($2-دن)',
	'contactpage-subject-and-sender-withip' => '$1 ($3-ده $2-دن)',
	'contactpage-fromname' => 'سیزین آدینیز: *',
	'contactpage-fromaddress' => 'سیزین ایمیلینیز: **',
	'contactpage-formfootnotes' => '* ایستگه باغلی<br />
** ایستگه باغلی، اما جاواب ایسته‌سز گرکلی',
	'contactpage-fromname-required' => 'سیزین آدینیز:',
	'contactpage-fromaddress-required' => 'سیزین ایمیلینیز:',
	'contactpage-formfootnotes-required' => 'بوتون فیلدلر گرکلی‌دیر.',
	'contactpage-captcha' => 'بو مئساژی گؤندرمک اوچون، لوطفاً کپچا-نی حل ائدین ([[Special:Captcha/help|آرتیق بیلگی]])',
	'contactpage-captcha-failed' => 'کپچا اوغورسوز اولدو! ([[Special:Captcha/help|آرتیق بیلگی]])',
	'contactpage-includeip' => 'منیم آی‌پی آدرسیمی بو مئساژدا یئرلشدیر.',
);

/** Bashkir (башҡортса)
 * @author Assele
 * @author Haqmar
 */
$messages['ba'] = array(
	'contactpage' => 'Бәйләнеш бите',
	'contactpage-desc' => '[[Special:Contact|Ҡараусылар өсөн форма]]',
	'contactpage-title' => 'Бәйләнеш',
	'contactpage-pagetext' => 'Зинһар, беҙҙең менән бәйләнешкә кереү өсөн, түбәндәге форманы ҡулланығыҙ.',
	'contactpage-legend' => 'Э-хат ебәрергә',
	'contactpage-defsubject' => 'Хәбәр',
	'contactpage-subject-and-sender' => '$1 ($2 башлап)',
	'contactpage-subject-and-sender-withip' => '$1 ($2  $3 адресынан)',
	'contactpage-fromname' => 'Исемегеҙ: *',
	'contactpage-fromaddress' => 'Электрон почта адресығыҙ: **',
	'contactpage-formfootnotes' => '* мәжбүри түгел<br />
** мәжбүри түгел, ләкин һеҙгә яуап биреү өсөн кәрәк',
	'contactpage-fromname-required' => 'Исемегеҙ:',
	'contactpage-fromaddress-required' => 'Эл. почта адресығыҙ:',
	'contactpage-formfootnotes-required' => 'Бөтә юлдар ҙа тултырылырға тейеш',
	'contactpage-captcha' => 'Хәбәрҙе ебәрер өсөн, зинһар, captcha  тикшерегеҙ ([[Special:Captcha/help|тулыраҡ мәғлүмәт]])',
	'contactpage-captcha-failed' => 'Captcha тикшереүе уңышһыҙ! ([[Special:Captcha/help|тулыраҡ мәғлүмәт]])',
	'contactpage-includeip' => 'Был хәбәргә минең IP адресты өҫтәргә.',
);

/** Bavarian (Boarisch)
 * @author Mucalexx
 */
$messages['bar'] = array(
	'contactpage' => 'Kóntaktseiten',
);

/** Bikol Central (Bikol Central)
 * @author Filipinayzd
 */
$messages['bcl'] = array(
	'contactpage-subject-and-sender' => '$1 (poon $2)',
	'contactpage-fromname' => 'pangaran mo *', # Fuzzy
	'contactpage-fromaddress' => "''e''-surat mo **", # Fuzzy
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Red Winged Duck
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'contactpage' => 'Старонка кантакту',
	'contactpage-desc' => '[[Special:Contact|Кантактная форма для наведвальнікаў]]',
	'contactpage-title' => 'Кантакт',
	'contactpage-pagetext' => 'Калі ласка, карыстайцеся формай ніжэй, каб зьвязацца з намі.',
	'contactpage-legend' => 'Даслаць ліст па электроннай пошце',
	'contactpage-defsubject' => 'Паведамленьне',
	'contactpage-subject-and-sender' => '$1 (ад $2)',
	'contactpage-subject-and-sender-withip' => '$1 (ад $2 з $3)',
	'contactpage-fromname' => 'Ваша імя: *',
	'contactpage-fromaddress' => 'Ваш адрас электроннай пошты: **',
	'contactpage-formfootnotes' => '* неабавязкова<br />
** неабавязкова, але патрабуецца, калі Вы жадаеце атрымаць адказ',
	'contactpage-fromname-required' => 'Ваша імя:',
	'contactpage-fromaddress-required' => 'Ваш адрас электроннай пошты:',
	'contactpage-formfootnotes-required' => 'Усе палі павінны быць запоўнены.',
	'contactpage-captcha' => 'Каб даслаць паведамленьне, калі ласка, прайдзіце праверку CAPTCHA ([[Special:Captcha/help|падрабязьней]])',
	'contactpage-captcha-failed' => 'Праверка CAPTCHA ня пройдзена! ([[Special:Captcha/help|падрабязьней]])',
	'contactpage-includeip' => 'Дадаць мой IP-адрас у гэтае паведамленьне.',
);

/** Bulgarian (български)
 * @author DCLXVI
 * @author Mitzev
 * @author Turin
 */
$messages['bg'] = array(
	'contactpage' => 'Страница за контакт',
	'contactpage-desc' => '[[Special:Contact|Формуляр за връзка]]',
	'contactpage-title' => 'Контакт',
	'contactpage-pagetext' => 'Формулярът по-долу може да бъде използван за връзка с нас.',
	'contactpage-legend' => 'Изпращане на е-писмо',
	'contactpage-defsubject' => 'Съобщение',
	'contactpage-subject-and-sender' => '$1 (от $2)',
	'contactpage-fromname' => 'Вашето име:',
	'contactpage-fromaddress' => 'Вашата е-поща:',
	'contactpage-formfootnotes' => '(необходим ако желаете отговор)',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Usarker
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'contactpage' => 'যোগাযোগের পাতা',
	'contactpage-title' => 'যোগাযোগ',
	'contactpage-pagetext' => 'অনুগ্রহ করে নিচের ফর্মটি ব্যবহার করুন আমাদের সাথে যোগাযোগ করতে।',
	'contactpage-legend' => 'ই-মেইল পাঠাও',
	'contactpage-defsubject' => 'যোগাযোগ বার্তা',
	'contactpage-subject-and-sender' => '$1 ($2 থেকে)',
	'contactpage-subject-and-sender-withip' => '$1 ($2 থেকে $3-এ)',
	'contactpage-fromname' => 'আপনার নাম: *',
	'contactpage-fromaddress' => 'আপনার ই-মেইল: **',
	'contactpage-fromname-required' => 'আপনার নাম:',
	'contactpage-fromaddress-required' => 'আপনার ই-মেইল:',
	'contactpage-formfootnotes-required' => 'সকল অংশ পূরণ করতে হবে।',
	'contactpage-captcha' => 'বার্তা পাঠাতে, অনুগ্রহ করো ক্যাপচাটি সমাধান করুন ([[Special:Captcha/help|বিস্তারিত]])',
	'contactpage-captcha-failed' => 'ক্যাপচা পরীক্ষা ব্যর্থ! ([[Special:Captcha/help|বিস্তারিত]])',
	'contactpage-includeip' => 'এই বার্তায় আমার আইপি ঠিকানা যোগ করো।',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'contactpage' => 'Pajenn daremprediñ',
	'contactpage-desc' => '[[Special:Contact|Furmskrid mont e darempred evit ar gweladennerien]]',
	'contactpage-title' => 'Darempred',
	'contactpage-pagetext' => 'Mar plij implijit ar furmskrid dindan evit dont e darempred ganeomp.',
	'contactpage-legend' => 'Kas ur postel',
	'contactpage-defsubject' => 'Kemennadenn daremprediñ',
	'contactpage-subject-and-sender' => '$1 (eus $2)',
	'contactpage-subject-and-sender-withip' => '$1 (eus $2 da $3)',
	'contactpage-fromname' => "Hoc'h anv : *",
	'contactpage-fromaddress' => "Ho chomlec'h postel : **",
	'contactpage-formfootnotes' => "* diret<br />
** diret, met rekis mar fell deoc'h e vefe respontet deoc'h.",
	'contactpage-fromname-required' => "Hoc'h anv :",
	'contactpage-fromaddress-required' => "Ho chomlec'h postel :",
	'contactpage-formfootnotes-required' => 'Rekis eo an holl vaeziennoù.',
	'contactpage-captcha' => "Evit kas ar gemennadenn, diskoulmit ar c'haptcha ([[Special:Captcha/help|gouzout hiroc'h]])",
	'contactpage-captcha-failed' => "N'hoc'h eus ket diskoulmet ar c'haptcha ! ([[Special:Captcha/help|gouzout hiroc'h]])",
	'contactpage-includeip' => "Merkañ ma chomlec'h IP er postel-mañ.",
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'contactpage' => 'Stranica za kontakt',
	'contactpage-desc' => '[[Special:Contact|Kontaktni obrazac za posjetioce]]',
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Molimo koristite obrazac ispod da nas kontaktirate.',
	'contactpage-legend' => 'Pošalji e-mail',
	'contactpage-defsubject' => 'Poruka kontakta',
	'contactpage-subject-and-sender' => '$1 (od $2)',
	'contactpage-subject-and-sender-withip' => '$1 (od $2 sa $3)',
	'contactpage-fromname' => 'Vaše ime: *',
	'contactpage-fromaddress' => 'Vaš e-mail: **',
	'contactpage-formfootnotes' => '* opcionalno<br />
** opcionalno ali je poželjno ako želite odgovor',
	'contactpage-fromname-required' => 'Vaše ime:',
	'contactpage-fromaddress-required' => 'Vaš e-mail:',
	'contactpage-formfootnotes-required' => 'Sva polja su neophodna.',
	'contactpage-captcha' => 'Da bi ste poslali poruku, molimo da riješite captcha ([[Special:Captcha/help|više informacija]])',
	'contactpage-captcha-failed' => 'Neuspješan captcha test! ([[Special:Captcha/help|više informacija]])',
	'contactpage-includeip' => 'Uključi moju IP adresu u ovu poruku.',
);

/** Catalan (català)
 * @author BroOk
 * @author Fitoschido
 * @author Martorell
 * @author SMP
 * @author Solde
 */
$messages['ca'] = array(
	'contactpage' => 'Pàgina de contacte',
	'contactpage-desc' => '[[Special:Contact|Formulari de contacte per als visitants]]',
	'contactpage-title' => 'Contacte',
	'contactpage-pagetext' => 'Utilitzeu el formulari següent per a contactar-nos.',
	'contactpage-legend' => 'Envia missatge',
	'contactpage-defsubject' => 'Missatge de contacte',
	'contactpage-subject-and-sender' => '$1 (des de $2)',
	'contactpage-subject-and-sender-withip' => '$1 (de $2 a $3)',
	'contactpage-fromname' => 'El teu nom: *',
	'contactpage-fromaddress' => 'El vostre correu-e: **',
	'contactpage-formfootnotes' => '* opcional<br />
** opcional però necessari si voleu una resposta',
	'contactpage-fromname-required' => 'El teu nom:',
	'contactpage-fromaddress-required' => 'El teu correu electrònic:',
	'contactpage-formfootnotes-required' => 'Tots els camps són obligatoris.',
	'contactpage-captcha' => 'Per enviar el missatge, si us plau resoleu el captcha ([[Special:Captcha/help|more info]])',
	'contactpage-captcha-failed' => 'Captcha erroni! ([[Special:Captcha/help|more info]])',
	'contactpage-includeip' => "Inclou al missatge l'adreça IP que estic utilitzant.",
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'contactpage' => 'Контактан агӀо',
	'contactpage-defsubject' => 'Хаам',
	'contactpage-fromname' => 'Хьа хан:',
	'contactpage-fromaddress' => 'Хьан электронан почтан адрес:',
	'contactpage-formfootnotes' => '(оьшу хьона жоп даийта лууш делахь)',
);

/** Sorani Kurdish (کوردی)
 * @author Calak
 */
$messages['ckb'] = array(
	'contactpage-fromname-required' => 'ناوەکەت:',
);

/** Czech (čeština)
 * @author Matěj Grabovský
 * @author Mormegil
 * @author לערי ריינהארט
 */
$messages['cs'] = array(
	'contactpage' => 'Kontaktní stránka',
	'contactpage-desc' => '[[Special:Contact|Kontaktní formulář pro návštěvníky]]',
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Pomocí níže zobrazeného formuláře se s námi můžete spojit.',
	'contactpage-legend' => 'Poslat e-mail',
	'contactpage-defsubject' => 'Zpráva',
	'contactpage-subject-and-sender' => '$1 (od $2)',
	'contactpage-subject-and-sender-withip' => '$1 (od $2 z $3)',
	'contactpage-fromname' => 'Vaše jméno: *',
	'contactpage-fromaddress' => 'Váš e-mail: **',
	'contactpage-formfootnotes' => '&#042; volitelné<br />
&#042;&#042; volitelné, ale potřebné pokud chcete odpověď',
	'contactpage-fromname-required' => 'Vaše jméno:',
	'contactpage-fromaddress-required' => 'Váš e-mail:',
	'contactpage-formfootnotes-required' => 'Všechna pole musí být vyplněna.',
	'contactpage-captcha' => 'Abyste mohli odeslat zprávu, musíte vyřešit CAPTCHA ([[Special:Captcha/help|vysvětlení]])',
	'contactpage-captcha-failed' => '{{GENDER:Neuspěl|Neuspěla|Neuspěli}} jste v testu CAPTCHA! ([[Special:Captcha/help|vysvětlení]])',
	'contactpage-includeip' => 'Přiložit ke zprávě mou IP adresu.',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'contactpage' => 'Tudalen gysylltu',
	'contactpage-desc' => '[[Special:Contact|Ffurlen gysylltu ar gyfer ymwelwyr]]',
	'contactpage-title' => 'Cysylltu',
	'contactpage-pagetext' => "Mae croeso i chi ddefnyddio'r ffurflen isod i gysylltu â ni.",
	'contactpage-legend' => 'Anfon e-bost',
	'contactpage-defsubject' => 'Neges',
	'contactpage-subject-and-sender' => '$1 (oddi wrth $2)',
	'contactpage-subject-and-sender-withip' => '$1 (oddi wrth $2 ar $3)',
	'contactpage-fromname' => 'Eich enw: *',
	'contactpage-fromaddress' => 'Eich cyfeiriad e-bost: **',
	'contactpage-formfootnotes' => '* dewisol<br />
** dewisol ond rhaid ei gael er mwyn gallu derbyn ateb',
	'contactpage-fromname-required' => 'Eich enw:',
	'contactpage-fromaddress-required' => 'Eich cyfeiriad e-bost:',
	'contactpage-formfootnotes-required' => 'Rhaid llanw pob maes.',
	'contactpage-captcha' => 'Er mwyn anfon y neges, byddwch gystal â datrys y pos gwrth-sbam ([[Special:Captcha/help|mwy o wybodaeth]])',
	'contactpage-captcha-failed' => 'Ni lwyddodd y prawf gwrth-sbam! ([[Special:Captcha/help|mwy o wybodaeth]])',
	'contactpage-includeip' => 'Cynnwys fy nghyfeiriad IP yn y neges hon.',
);

/** Danish (dansk)
 * @author Byrial
 * @author Christian List
 * @author Hylle
 */
$messages['da'] = array(
	'contactpage' => 'Kontaktside',
	'contactpage-desc' => '[[Special:Contact|Kontaktformular for besøgende]]',
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Brug formularen herunder til at kontakte os.',
	'contactpage-legend' => 'Send e-mail',
	'contactpage-defsubject' => 'Kontaktbesked',
	'contactpage-subject-and-sender' => '$1 (fra $2)',
	'contactpage-subject-and-sender-withip' => '$1 (fra $2 på $3)',
	'contactpage-fromname' => 'Dit navn: *',
	'contactpage-fromaddress' => 'Din e-mailadresse: **',
	'contactpage-formfootnotes' => '* valgfrit<br />
** valgfrit, men er nødvendig hvis du ønsker at få svar',
	'contactpage-fromname-required' => 'Dit navn:',
	'contactpage-fromaddress-required' => 'Din e-mailadresse:',
	'contactpage-formfootnotes-required' => 'Alle felter er obligatoriske.',
	'contactpage-captcha' => 'Løs venligst captcha-opgaven for at sende beskeden ([[Special:Captcha/help|mere information]])',
	'contactpage-captcha-failed' => 'Captcha-prøven mislykkedes! ([[Special:Captcha/help|mere information]])',
	'contactpage-includeip' => 'Inkluder min IP-adresse i denne besked.',
);

/** German (Deutsch)
 * @author Kghbln
 * @author LWChris
 * @author Metalhead64
 * @author Raimond Spekking
 * @author Umherirrender
 */
$messages['de'] = array(
	'contactpage' => 'Kontaktseite',
	'contactpage-desc' => 'Ergänzt eine [[Special:Contact|Spezialseite]] als Kontaktformular für Besucher',
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Mit diesem Formular kannst du uns Nachrichten zukommen lassen.',
	'contactpage-legend' => 'E-Mail senden',
	'contactpage-defsubject' => 'Kontaktnachricht',
	'contactpage-subject-and-sender' => '$1 (von $2)',
	'contactpage-subject-and-sender-withip' => '$1 (von $2 mit der IP-Adresse $3)',
	'contactpage-fromname' => 'Dein Name:',
	'contactpage-fromaddress' => 'Deine E-Mail-Adresse:',
	'contactpage-formfootnotes' => '(nötig, falls du eine Antwort wünschst)',
	'contactpage-includeip' => 'Meine IP-Adresse in diese Nachricht einfügen.',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Kghbln
 * @author Raimond Spekking
 */
$messages['de-formal'] = array(
	'contactpage-pagetext' => 'Mit diesem Formular können Sie uns Nachrichten zukommen lassen.',
	'contactpage-fromname' => 'Ihr Name: *',
	'contactpage-fromaddress' => 'Ihre E-Mail-Adresse: **',
	'contactpage-formfootnotes' => '* optional<br />
** optional, wird aber benötigt, um Ihnen antworten zu können',
	'contactpage-fromname-required' => 'Ihr Name:',
	'contactpage-fromaddress-required' => 'Ihre E-Mail-Adresse:',
	'contactpage-captcha' => 'Um die Nachricht senden zu können, lösen Sie bitte das CAPTCHA ([[Special:Captcha/help|weitere Informationen]])',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Xoser
 */
$messages['diq'] = array(
	'contactpage' => 'Pelê kontakî',
	'contactpage-desc' => '[[Special:Contact|Qe meymanan enformasyonê kontakî]]',
	'contactpage-title' => 'İrtibat',
	'contactpage-pagetext' => 'Qe ma rê kontak kerdişî rê, ma rica kenê ena form sero kar bike.',
	'contactpage-legend' => 'Yew e-mail bişirav',
	'contactpage-defsubject' => 'Mesajê kontakî',
	'contactpage-subject-and-sender' => '$1 ($2 ra)',
	'contactpage-subject-and-sender-withip' => '$1 ($2 ra $3 de)',
	'contactpage-fromname' => 'Nameyê tu: *',
	'contactpage-fromaddress' => 'E-maîlê tu: **',
	'contactpage-formfootnotes' => '* opsiyonal<br />
** opsiyonal feqet beno gani eka ti yew cewap biwazo',
	'contactpage-fromname-required' => 'Nameyê tu:',
	'contactpage-fromaddress-required' => 'E-maîlê tu:',
	'contactpage-formfootnotes-required' => 'Ti gani qutiyanê hemî de biker.',
	'contactpage-captcha' => 'Qe mesaj şawitîşî, ma rica keno problemê captchayî hal biko ([[Special:Captcha/help|enformasyonê bînî]])',
	'contactpage-captcha-failed' => 'Testê Captchayî nibiyo! ([[Special:Captcha/help|enformasyonê bînî]])',
	'contactpage-includeip' => 'Ena mesaj de adresê IP mi de bike.',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'contactpage' => 'Kontaktowy bok',
	'contactpage-desc' => '[[Special:Contact|Kontaktowy formular za wobglědowarjow]]',
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Pšosym wužyj toś ten formular, aby se z nami  do zwiska stajił.',
	'contactpage-legend' => 'E-mail pósłaś',
	'contactpage-defsubject' => 'Kontaktowa powěźenka',
	'contactpage-subject-and-sender' => '$1 (z $2)',
	'contactpage-subject-and-sender-withip' => '$1 (wót $2 na $3)',
	'contactpage-fromname' => 'Twójo mě:',
	'contactpage-fromaddress' => 'Twója e-mailowa adresa:',
	'contactpage-formfootnotes' => '(trěbny, jolic coš wótegrono)',
	'contactpage-includeip' => 'Móju IP-adresu w toś tej powěźeńce zapśěgnuś.',
);

/** Greek (Ελληνικά)
 * @author Consta
 * @author Dada
 * @author Omnipaedista
 * @author ZaDiak
 * @author Περίεργος
 */
$messages['el'] = array(
	'contactpage' => 'Σελίδα επαφών',
	'contactpage-desc' => '[[Special:Contact|Φόρμα επαφής για επισκέπτες]]',
	'contactpage-title' => 'Επαφή',
	'contactpage-pagetext' => 'Παρακαλούμε χρησιμοποιείστε την παρακάτω φόρμα για να επικοινωνήσετε μαζί μας.',
	'contactpage-legend' => 'Αποστολή e-mail',
	'contactpage-defsubject' => 'Μήνυμα επαφής',
	'contactpage-subject-and-sender' => '$1 (από $2)',
	'contactpage-subject-and-sender-withip' => '$1 (από $2 σε $3)',
	'contactpage-fromname' => 'Το όνομά σας: *',
	'contactpage-fromaddress' => 'Το ηλεκτρονικό ταχυδρομείο σας: **',
	'contactpage-formfootnotes' => '* προαιρετικό<br />
** προαιρετικό αλλά απαραίτητο αν θέλεις μια απάντηση',
	'contactpage-fromname-required' => 'Το όνομά σας:',
	'contactpage-fromaddress-required' => 'Το ηλεκτρονικό σας ταχυδρομείο:',
	'contactpage-formfootnotes-required' => 'Όλα τα πεδία είναι υποχρεωτικά.',
	'contactpage-captcha' => 'Για να αποστείλετε αυτό το μήνυμα, παρακαλώ επιλύστε το captcha ([[Special:Captcha/help|βοήθεια]])',
	'contactpage-captcha-failed' => 'Το τεστ Captcha απέτυχε! ([[Special:Captcha/help|περισσότερες πληροφορίες]])',
	'contactpage-includeip' => 'Συμπεριλάβετε τη διεύθυνση IP μου σε αυτό το μήνυμα',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'contactpage' => 'Kontaktpaĝo',
	'contactpage-desc' => '[[Special:Contact|Kontaktpaĝo por vizitantoj]]',
	'contactpage-title' => 'Kontaktigi',
	'contactpage-pagetext' => 'Bonvolu uzi la suban kamparon por kontakti nin.',
	'contactpage-legend' => 'Sendi retpoŝton',
	'contactpage-defsubject' => 'Kontakta Mesaĝo',
	'contactpage-subject-and-sender' => '$1 (de $2)',
	'contactpage-subject-and-sender-withip' => '$1 (de $2 ĉe $3)',
	'contactpage-fromname' => 'Via nomo: *',
	'contactpage-fromaddress' => 'Via retadreso: **',
	'contactpage-formfootnotes' => '* nedeviga<br />
** nedeviga sed deviga se vi volas respondon',
	'contactpage-fromname-required' => 'Via nomo:',
	'contactpage-fromaddress-required' => 'Via retadreso:',
	'contactpage-formfootnotes-required' => 'Ĉiuj kampoj estas devigaj.',
	'contactpage-captcha' => "Sendi la mesaĝon, bonvolu solvi la enigmon de ''captcha'' ([[Special:Captcha/help|plua informo]])",
	'contactpage-captcha-failed' => 'Malsukcesis Captcha-testo! ([[Special:Captcha/help|plua informo]])',
	'contactpage-includeip' => 'Inkluzivi mian IP-adreson en ĉi tiu mesaĝo',
);

/** Spanish (español)
 * @author Crazymadlover
 * @author Fitoschido
 * @author Imre
 * @author Locos epraix
 * @author Peter17
 * @author Sanbec
 * @author Sporeunai
 * @author לערי ריינהארט
 */
$messages['es'] = array(
	'contactpage' => 'Página de contacto',
	'contactpage-desc' => '[[Special:Contact|Formulario de contacto para visitantes]]',
	'contactpage-title' => 'Contacto',
	'contactpage-pagetext' => 'Utiliza el siguiente formulario para ponerte en contacto con nosotros.',
	'contactpage-legend' => 'Enviar correo electrónico',
	'contactpage-defsubject' => 'Mensaje de contacto',
	'contactpage-subject-and-sender' => '$1 (de $2)',
	'contactpage-subject-and-sender-withip' => '$1 (de $2 en $3)',
	'contactpage-fromname' => 'Tu nombre:',
	'contactpage-fromaddress' => 'Tu dirección de correo:',
	'contactpage-formfootnotes' => '(necesario si desea una respuesta)',
	'contactpage-includeip' => 'Incluir mi dirección IP en este mensaje.',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'contactpage' => 'Ühendustvõtmise lehekülg',
	'contactpage-desc' => '[[Special:Contact|Ühendustvõtmise vorm külalistele]]',
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Palun kasuta all olevat vormi meiega ühenduse võtmiseks.',
	'contactpage-legend' => 'Saada e-kiri',
	'contactpage-defsubject' => 'Sõnum',
	'contactpage-subject-and-sender' => '$1 (saatis $2)',
	'contactpage-subject-and-sender-withip' => '$1 (saatis $2 IP-aadressilt $3)',
	'contactpage-fromname' => 'Sinu nimi:',
	'contactpage-fromaddress' => 'Sinu e-posti aadress:',
	'contactpage-formfootnotes' => '(vajalik, kui tahad vastust)',
	'contactpage-includeip' => 'Lisa selle sõnumi juurde minu IP-aadress.',
);

/** Basque (euskara)
 * @author An13sa
 * @author Theklan
 */
$messages['eu'] = array(
	'contactpage' => 'Kontaktu orrialdea',
	'contactpage-desc' => '[[Special:Contact|Bisitarientzako kontaktu formularioa]]',
	'contactpage-title' => 'Kontaktatu',
	'contactpage-pagetext' => 'Erabil ezazu beheko formularioa gurekin kontaktatzeko.',
	'contactpage-legend' => 'E-posta bidali',
	'contactpage-defsubject' => 'Kontaktu mezua',
	'contactpage-subject-and-sender' => '$1 ($2(e)k bidalia)',
	'contactpage-subject-and-sender-withip' => '$1 ($2-k bidalia, $3-(r)ekin)',
	'contactpage-fromname' => 'Zure izena: *',
	'contactpage-fromaddress' => 'Zure e-posta: **',
	'contactpage-formfootnotes' => ' * ez da beharrezkoa<br />
 ** ez da beharrezkoa baina erantzuteko garaian nahitaezkoa da',
	'contactpage-fromname-required' => 'Zure izena:',
	'contactpage-fromaddress-required' => 'Zure e-posta:',
	'contactpage-formfootnotes-required' => 'Esparru guztiak betetzea beharrezkoa da.',
	'contactpage-captcha' => 'Mezua bidaltzeko captcha jarri behar duzu ([[Special:Captcha/help|info gehiago]])',
	'contactpage-captcha-failed' => 'Captcha testak huts egin du! ([[Special:Captcha/help|info gehiago]])',
	'contactpage-includeip' => 'Nire IP helbidea mezu honetan sartu.',
);

/** Extremaduran (estremeñu)
 * @author Better
 */
$messages['ext'] = array(
	'contactpage-subject-and-sender' => '$1 (endi $2)',
	'contactpage-fromname' => 'el tu nombri *', # Fuzzy
	'contactpage-fromaddress' => 'el tu email **', # Fuzzy
);

/** Persian (فارسی)
 * @author Armin1392
 * @author Ebraminio
 * @author Ladsgroup
 * @author Mjbmr
 * @author Wayiran
 */
$messages['fa'] = array(
	'contactpage' => 'صفحه تماس',
	'contactpage-desc' => '[[Special:Contact|فرم تماس برای بازدیدکنندگان]]',
	'contactpage-title' => 'تماس',
	'contactpage-pagetext' => 'لطفاً از فرم زیر برای تماس با ما استفاده کنید.',
	'contactpage-legend' => 'ارسال رایانامه',
	'contactpage-defsubject' => 'پیام تماس',
	'contactpage-subject-and-sender' => '$1 (از $2)',
	'contactpage-subject-and-sender-withip' => '$1 (از $2 در $3)',
	'contactpage-fromname' => 'نام شما:',
	'contactpage-fromaddress' => 'آدرس رایانامه شما:',
	'contactpage-formfootnotes' => '(اگر جواب می‌خواهید مورد نیاز است)',
	'contactpage-includeip' => 'نشانی آی‌پی من را با این پیغام ضمیمه کن.',
);

/** Finnish (suomi)
 * @author Cimon Avaro
 * @author Crt
 * @author Jaakonam
 * @author Nike
 * @author Silvonen
 * @author Vililikku
 */
$messages['fi'] = array(
	'contactpage' => 'Yhteydenottosivu',
	'contactpage-desc' => '[[Special:Contact|Yhteydenottolomake vierailijoille]].',
	'contactpage-title' => 'Ota yhteyttä',
	'contactpage-pagetext' => 'Voit ottaa yhteyttä meihin alla olevalla lomakkeella.',
	'contactpage-legend' => 'Lähetä sähköposti',
	'contactpage-defsubject' => 'Viestisi',
	'contactpage-subject-and-sender' => '$1 (lähettäjä: $2)',
	'contactpage-subject-and-sender-withip' => '$1 (käyttäjältä $2 osoitteesta $3)',
	'contactpage-fromname' => 'Nimesi *',
	'contactpage-fromaddress' => 'Sähköpostiosoitteesi **',
	'contactpage-formfootnotes' => '* vapaaehtoinen<br />
** vapaaehtoinen mutta tarpeen, jos haluat vastauksen viestiisi',
	'contactpage-fromname-required' => 'Nimesi',
	'contactpage-fromaddress-required' => 'Sähköpostiosoitteesi',
	'contactpage-formfootnotes-required' => 'Kaikki kentät ovat pakollisia.',
	'contactpage-captcha' => 'Ratkaise captcha-testi ennen viestin lähettämistä ([[Special:Captcha/help|lisätietoja]])',
	'contactpage-captcha-failed' => 'Captcha-testi ei onnistunut! ([[Special:Captcha/help|lisätietoja]])',
	'contactpage-includeip' => 'Sisällytä IP-osoitteeni tähän viestiin.',
);

/** French (français)
 * @author Gomoko
 * @author Grondin
 * @author IAlex
 * @author Peter17
 * @author Sherbrooke
 * @author Urhixidur
 * @author לערי ריינהארט
 */
$messages['fr'] = array(
	'contactpage' => 'Contact',
	'contactpage-desc' => '[[Special:Contact|Formulaire de contact pour les visiteurs]]',
	'contactpage-title' => 'Contacter',
	'contactpage-pagetext' => 'Veuillez utiliser le formulaire ci-dessous pour nous contacter.',
	'contactpage-legend' => 'Envoyer un courriel',
	'contactpage-defsubject' => 'Message',
	'contactpage-subject-and-sender' => '$1 (de $2)',
	'contactpage-subject-and-sender-withip' => '$1 (de $2 à $3)',
	'contactpage-fromname' => 'Votre nom :',
	'contactpage-fromaddress' => 'Votre adresse de courriel :',
	'contactpage-formfootnotes' => '(obligatoire si vous désirez une réponse)',
	'contactpage-includeip' => 'Inclure mon adresse IP dans ce message.',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'contactpage' => 'Contacte',
	'contactpage-desc' => '[[Special:Contact|Formulèro de contacte por los visitors]].',
	'contactpage-title' => 'Contacte',
	'contactpage-pagetext' => 'Volyéd utilisar lo formulèro ce-desot por vos veriér vers nos.',
	'contactpage-legend' => 'Mandar un mèssâjo',
	'contactpage-defsubject' => 'Mèssâjo',
	'contactpage-subject-and-sender' => '$1 (de $2)',
	'contactpage-subject-and-sender-withip' => '$1 (de $2 a $3)',
	'contactpage-fromname' => 'Voutron nom : *',
	'contactpage-fromaddress' => 'Voutra adrèce èlèctronica : **',
	'contactpage-formfootnotes' => '* u chouèx<br />
** u chouèx mas nècèssèro se vos voléd una rèponsa',
	'contactpage-fromname-required' => 'Voutron nom :',
	'contactpage-fromaddress-required' => 'Voutra adrèce èlèctronica :',
	'contactpage-formfootnotes-required' => 'Tôs los champs sont nècèssèros.',
	'contactpage-captcha' => 'Por mandar lo mèssâjo, volyéd trovar la solucion du captch·a ([[Special:Captcha/help|éde]])',
	'contactpage-captcha-failed' => 'Vos éd pas dècodâ lo captch·a ! ([[Special:Captcha/help|éde]])',
	'contactpage-includeip' => 'Encllure mon adrèce IP dens ceti mèssâjo.',
);

/** Friulian (furlan)
 * @author Klenje
 */
$messages['fur'] = array(
	'contactpage-fromname' => 'Il to non: *',
	'contactpage-fromname-required' => 'Il to non:',
);

/** Galician (galego)
 * @author Alma
 * @author Toliño
 * @author Vivaelcelta
 * @author Xosé
 */
$messages['gl'] = array(
	'contactpage' => 'Páxina de contacto',
	'contactpage-desc' => '[[Special:Contact|Formulario de contacto para os visitantes]]',
	'contactpage-title' => 'Contacto',
	'contactpage-pagetext' => 'Use o formulario de embaixo para contactar con nós.',
	'contactpage-legend' => 'Enviar un correo electrónico',
	'contactpage-defsubject' => 'Mensaxe de contacto',
	'contactpage-subject-and-sender' => '$1 (de $2)',
	'contactpage-subject-and-sender-withip' => '$1 (de $2 a $3)',
	'contactpage-fromname' => 'O seu nome:',
	'contactpage-fromaddress' => 'O seu correo electrónico:',
	'contactpage-formfootnotes' => '(necesario se quere unha resposta)',
	'contactpage-includeip' => 'Incluír o meu enderezo IP nesta mensaxe.',
);

/** Goan Konkani (कोंकणी/Konknni )
 * @author The Discoverer
 */
$messages['gom'] = array(
	'contactpage' => 'Sompork pan',
);

/** Goan Konkani (Latin script) (Konknni)
 * @author The Discoverer
 */
$messages['gom-latn'] = array(
	'contactpage' => 'Sompork pan',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'contactpage-title' => 'Ἐπαφή',
	'contactpage-subject-and-sender' => '$1 (ἀπὸ $2)',
	'contactpage-fromname' => 'Τὸ ὄνομά σου: *',
	'contactpage-fromname-required' => 'Τὸ ὄνομά σου:',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'contactpage' => 'Kontaktsyte',
	'contactpage-desc' => '[[Special:Contact|Kontaktformular fir Bsuecher]]',
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Mit däm Formular chasch is Nochrichte schicke.',
	'contactpage-legend' => 'E-Mail abschicke',
	'contactpage-defsubject' => 'Kontaktnochricht',
	'contactpage-subject-and-sender' => '$1 (vu $2)',
	'contactpage-subject-and-sender-withip' => '$1 (vu $2 uf $3)',
	'contactpage-fromname' => 'Dy Name: *',
	'contactpage-fromaddress' => 'Dyy E-Mail-Adräss: **',
	'contactpage-formfootnotes' => '* optional<br />
** optional, wird aber bruucht wänn du ne Antwort witt',
	'contactpage-fromname-required' => 'Dyy Name:',
	'contactpage-fromaddress-required' => 'Dyy E-Mail-Adräss:',
	'contactpage-formfootnotes-required' => 'Alli Fälder mien uusgfillt syy.',
	'contactpage-captcha' => 'Zum d Nochricht schicke z chenne, les bitte s Captcha ([[Special:Captcha/help|meh Informatione]])',
	'contactpage-captcha-failed' => 'Captcha-Tescht nit bstande! ([[Special:Captcha/help|meh Informatione]])',
	'contactpage-includeip' => 'Myy IP-Adräss in die Nochricht yysetze.',
);

/** Gujarati (ગુજરાતી)
 * @author KartikMistry
 */
$messages['gu'] = array(
	'contactpage-fromname' => 'તમારું નામ:',
);

/** Manx (Gaelg)
 * @author MacTire02
 */
$messages['gv'] = array(
	'contactpage-fromname' => "Dt'ennym: *",
	'contactpage-fromaddress' => 'Dty phost-L: **',
);

/** Hebrew (עברית)
 * @author Agbad
 * @author Amire80
 * @author Guycn2
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'contactpage' => 'דף יצירת קשר',
	'contactpage-desc' => '[[Special:Contact|טופס יצירת קשר למבקרים]]',
	'contactpage-title' => 'יצירת קשר',
	'contactpage-pagetext' => 'אנא השתמשו בטופס שלהלן כדי ליצור עמנו קשר.',
	'contactpage-legend' => 'שליחת דוא"ל',
	'contactpage-defsubject' => 'הודעת יצירת קשר',
	'contactpage-subject-and-sender' => '$1 (מתוך $2)',
	'contactpage-subject-and-sender-withip' => '$1 (מ{{grammar:תחילית|$2}} מהכתובת $3)',
	'contactpage-fromname' => 'שמך:',
	'contactpage-fromaddress' => 'כתובת הדוא"ל שלך:',
	'contactpage-formfootnotes' => '(זה נחוץ אם ברצונך לקבל תשובה)',
	'contactpage-includeip' => 'הכללת כתובת ה־IP שלי בהודעה זו.',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 * @author Kaustubh
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'contactpage' => 'सम्पर्क पॄष्ठ',
	'contactpage-desc' => '[[Special:Contact|भेंट देनेवालोंके लिये संपर्क फ़ार्म]]',
	'contactpage-title' => 'संपर्क',
	'contactpage-pagetext' => 'हमसे संपर्क करने के लिये नीचे दिये गये फ़ार्म का इस्तेमाल करें।',
	'contactpage-legend' => 'ई-मेल भेजें',
	'contactpage-defsubject' => 'संपर्क संदेश',
	'contactpage-subject-and-sender' => '$1 ($2 से)',
	'contactpage-subject-and-sender-withip' => '$1 ($2 से $3 पे)',
	'contactpage-fromname' => 'आपका नाम:',
	'contactpage-fromaddress' => 'आपका इ-मेल पता:',
	'contactpage-formfootnotes' => '(यदि आपको उत्तर चाहिए तो आवश्यक)',
	'contactpage-includeip' => 'मेरा आईपि पता इस संदेश में शामिल हैं।',
);

/** Fiji Hindi (Latin script) (Fiji Hindi)
 * @author Karthi.dr
 */
$messages['hif-latn'] = array(
	'contactpage-fromname-required' => 'Aap ka naam:',
);

/** Croatian (hrvatski)
 * @author Dnik
 * @author SpeedyGonsales
 * @author Tivek
 */
$messages['hr'] = array(
	'contactpage' => 'Stranica za kontakt',
	'contactpage-desc' => '[[Special:Contact|Obrazac za posjetitelje]]',
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Molimo, koristite ovaj obrazac za kontakt s nama.',
	'contactpage-legend' => 'Pošalji e-mail',
	'contactpage-defsubject' => 'Poruka za kontakt',
	'contactpage-subject-and-sender' => '$1 (od $2)',
	'contactpage-subject-and-sender-withip' => '$1 (od $2 s $3)',
	'contactpage-fromname' => 'Vaše ime: *',
	'contactpage-fromaddress' => 'Vaš e-mail: **',
	'contactpage-formfootnotes' => '* neobavezno<br />
** neobavezno, ali potrebno ako želite odgovor',
	'contactpage-fromname-required' => 'Vaše ime:',
	'contactpage-fromaddress-required' => 'Vaš e-mail:',
	'contactpage-formfootnotes-required' => 'Sva polja su obvezna.',
	'contactpage-captcha' => 'Da biste poslali poruku, molimo da u svrhu prevencije spama, prepišete simbole ([[Special:Captcha/help|više informacija]])',
	'contactpage-captcha-failed' => 'Antispam-test nije uspio! ([[Special:Captcha/help|više informacija]])',
	'contactpage-includeip' => 'Priloži moju IP adresu u ovu poruku.',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'contactpage' => 'Kontaktna strona',
	'contactpage-desc' => '[[Special:Contact|Kontaktowy formular za wopytarjow]]',
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Prošu wužij tutón formular, zo by nas skontaktował.',
	'contactpage-legend' => 'E-mejl pósłać',
	'contactpage-defsubject' => 'Kontaktna zdźělenka',
	'contactpage-subject-and-sender' => '$1 (z $2)',
	'contactpage-subject-and-sender-withip' => '$1 (wot $2 na $3)',
	'contactpage-fromname' => 'Twoje mjeno:',
	'contactpage-fromaddress' => 'Twoja e-mejlowa adresa:',
	'contactpage-formfootnotes' => '(trěbny, jeli chceš wotmołwu)',
	'contactpage-includeip' => 'Moju IP-adresu w tutej powěsći zapřijeć.',
);

/** Hungarian (magyar)
 * @author Dani
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'contactpage' => 'Kapcsolat',
	'contactpage-desc' => '[[Special:Contact|Kapcsolatfelvevő oldal látogatóknak]]',
	'contactpage-title' => 'Kapcsolatfelvétel',
	'contactpage-pagetext' => 'Az alábbi űrlap kitöltésével küldhetsz nekünk üzenetet.',
	'contactpage-legend' => 'E-mail küldése',
	'contactpage-defsubject' => 'Üzenet',
	'contactpage-subject-and-sender' => '$1 (küldte: $2)',
	'contactpage-subject-and-sender-withip' => '$1 (feladó: $2, $3)',
	'contactpage-fromname' => 'Neved: *',
	'contactpage-fromaddress' => 'E-mail címed: **',
	'contactpage-formfootnotes' => '* nem kötelező<br />
* nem kötelező, de add meg, ha választ szeretnél',
	'contactpage-fromname-required' => 'Neved:',
	'contactpage-fromaddress-required' => 'E-mail címed:',
	'contactpage-formfootnotes-required' => 'Az összes mező kitöltése kötelező.',
	'contactpage-captcha' => 'Az üzenet elküldéséhez írd be a képen megjelent szót ([[Special:Captcha/help|további segítség]])',
	'contactpage-captcha-failed' => 'Captcha teszt nem sikerült! ([[Special:Captcha/help|további segítség]])',
	'contactpage-includeip' => 'Tüntesd fel az IP-címemet az üzenetben.',
);

/** Armenian (Հայերեն)
 * @author Chaojoker
 */
$messages['hy'] = array(
	'contactpage' => 'Կապի էջ',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'contactpage' => 'Pagina de contacto',
	'contactpage-desc' => '[[Special:Contact|Formulario de contacto pro visitatores]]',
	'contactpage-title' => 'Contacto',
	'contactpage-pagetext' => 'Per favor usa le formulario infra pro contactar nos.',
	'contactpage-legend' => 'Inviar e-mail',
	'contactpage-defsubject' => 'Message de contacto',
	'contactpage-subject-and-sender' => '$1 (de $2)',
	'contactpage-subject-and-sender-withip' => '$1 (de $2 a $3)',
	'contactpage-fromname' => 'Tu nomine: *',
	'contactpage-fromaddress' => 'Tu e-mail: **',
	'contactpage-formfootnotes' => '* optional<br />
** optional sed necessari si tu vole reciper un responsa',
	'contactpage-fromname-required' => 'Tu nomine:',
	'contactpage-fromaddress-required' => 'Tu e-mail:',
	'contactpage-formfootnotes-required' => 'Tote le campos es obligatori.',
	'contactpage-captcha' => 'Pro inviar le message, per favor resolve le captcha ([[Special:Captcha/help|plus info]])',
	'contactpage-captcha-failed' => 'Le test captcha falleva! ([[Special:Captcha/help|plus info]])',
	'contactpage-includeip' => 'Includer mi adresse IP in iste message.',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 * @author Iwan Novirion
 */
$messages['id'] = array(
	'contactpage' => 'Hubungi kami',
	'contactpage-desc' => '[[Special:Contact|Formulir hubungi kami untuk pengunjung]]',
	'contactpage-title' => 'Hubungi',
	'contactpage-pagetext' => 'Gunakan formulir berikut untuk menghubungi kami',
	'contactpage-legend' => 'Kirim surel',
	'contactpage-defsubject' => 'Pesan',
	'contactpage-subject-and-sender' => '$1 (dari $2)',
	'contactpage-subject-and-sender-withip' => '$1 (dari $2 pada $3)',
	'contactpage-fromname' => 'Nama Anda: *',
	'contactpage-fromaddress' => 'Surel Anda: **',
	'contactpage-formfootnotes' => '* opsional<br />
** opsional, namun dibutuhkan jika Anda menginginkan jawaban',
	'contactpage-fromname-required' => 'Nama Anda:',
	'contactpage-fromaddress-required' => 'Surel Anda:',
	'contactpage-formfootnotes-required' => 'Semua harus diisi.',
	'contactpage-captcha' => 'Untuk mengirim pesan, silakan mengisi Captcha ([[Special:Captcha/help|info]])',
	'contactpage-captcha-failed' => 'Tes Captcha gagal! ([[Special:Captcha/help|info]])',
	'contactpage-includeip' => 'Sertakan alamat IP saya di pesan ini.',
);

/** Iloko (Ilokano)
 * @author Lam-ang
 */
$messages['ilo'] = array(
	'contactpage' => 'Pagdamagan a panid',
	'contactpage-desc' => '[[Special:Contact|Pagdamagan a porma para kadagiti bisita]]',
	'contactpage-title' => 'Pagdamagan',
	'contactpage-pagetext' => 'Pangngaasi nga usaren ti porma dita baba tapno agdamag kaniami.',
	'contactpage-legend' => 'Ipatulod ti esurat',
	'contactpage-defsubject' => 'Mensahe ti pagdamagan',
	'contactpage-subject-and-sender' => '$1 (manipud kenni $2)',
	'contactpage-subject-and-sender-withip' => '$1 (manipud kenni $2 iti $3)',
	'contactpage-fromname' => 'Ti naganmo:',
	'contactpage-fromaddress' => 'Ti esuratmo:',
	'contactpage-formfootnotes' => '(nasken no kayatmo ti sungbat)',
	'contactpage-includeip' => 'Iraman ti IP a pagtaengak iti daytoy a mensahe.',
);

/** Ido (Ido)
 * @author Malafaya
 */
$messages['io'] = array(
	'contactpage-subject-and-sender' => '$1 (de $2)',
	'contactpage-subject-and-sender-withip' => '$1 (de $2 en $3)',
	'contactpage-fromname' => 'Vua nomo: *',
	'contactpage-fromaddress' => 'Vua e-posto: **',
	'contactpage-fromname-required' => 'Vua nomo:',
);

/** Icelandic (íslenska)
 * @author Jóna Þórunn
 * @author S.Örvarr.S
 */
$messages['is'] = array(
	'contactpage-title' => 'Hafa samband',
	'contactpage-pagetext' => 'Gjörðu svo vel og notaðu eyðublaðið fyrir neðan til að hafa samband við okkur.',
	'contactpage-subject-and-sender' => '$1 (frá $2)',
	'contactpage-fromname' => 'nafnið þitt *', # Fuzzy
	'contactpage-fromaddress' => 'netfangið þitt **', # Fuzzy
	'contactpage-formfootnotes' => '* valfrjálst<br />
** valfrjálst en nauðsynlegt ef þú vilt fá svar',
);

/** Italian (italiano)
 * @author Beta16
 * @author Civvì
 * @author Darth Kule
 * @author Gianfranco
 */
$messages['it'] = array(
	'contactpage' => 'Contatti',
	'contactpage-desc' => '[[Special:Contact|Modulo di contatto per gli ospiti]]',
	'contactpage-title' => 'Contatti',
	'contactpage-pagetext' => 'Il modulo riportato di seguito consente di mettersi in contatto con noi.',
	'contactpage-legend' => 'Invia email',
	'contactpage-defsubject' => 'Messaggio',
	'contactpage-subject-and-sender' => '$1 (da $2)',
	'contactpage-subject-and-sender-withip' => "$1 (da $2 all'indirizzo $3)",
	'contactpage-fromname' => 'Il tuo nome:',
	'contactpage-fromaddress' => 'Il tuo indirizzo email:',
	'contactpage-formfootnotes' => '(obbligatorio se si desidera una risposta)',
	'contactpage-includeip' => 'Includi il mio indirizzo IP in questo messaggio.',
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fryed-peach
 * @author JtFuruhata
 * @author Naohiro19
 * @author Shirayuki
 * @author לערי ריינהארט
 */
$messages['ja'] = array(
	'contactpage' => '連絡先',
	'contactpage-desc' => '[[Special:Contact|サイト来訪者向け連絡フォーム]]',
	'contactpage-title' => '連絡フォーム',
	'contactpage-pagetext' => '以下のフォームでは、私たちにメッセージを送信できます。',
	'contactpage-legend' => 'メールを送信',
	'contactpage-defsubject' => '連絡事項',
	'contactpage-subject-and-sender' => '$1 ($2 より)',
	'contactpage-subject-and-sender-withip' => '$1 ($2 が $3 から送信)',
	'contactpage-fromname' => 'あなたの名前:',
	'contactpage-fromaddress' => 'あなたのメールアドレス:',
	'contactpage-formfootnotes' => '(回答が必要な場合は必ずご記入ください)',
	'contactpage-includeip' => 'このメッセージに自分のIPアドレスを含める',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 * @author NoiX180
 * @author Pras
 */
$messages['jv'] = array(
	'contactpage' => 'Hubungi awak dhéwé',
	'contactpage-desc' => '[[Special:Contact|Formulir kontak kanggo pangunjung]]',
	'contactpage-title' => 'Kontak',
	'contactpage-pagetext' => 'Mangga nganggo formulir sing kapacak ing ngisor iki menawa arep kontak kita.',
	'contactpage-legend' => 'Kirim layang èlèktronik',
	'contactpage-defsubject' => 'Layang kontak',
	'contactpage-subject-and-sender' => '$1 (saka $2)',
	'contactpage-subject-and-sender-withip' => '$1 (saka $2 nèng $3)',
	'contactpage-fromname' => 'Asma panjenengan: *',
	'contactpage-fromaddress' => 'Layang-e panjenengan: **',
	'contactpage-formfootnotes' => '* opsional<br />
** opsional nanging diperlokaké yèn panjenengan perlu wangsulan',
	'contactpage-fromname-required' => 'Jeneng Sampéyan:',
	'contactpage-fromaddress-required' => 'Layang èlèktronik Sampéyan:',
	'contactpage-formfootnotes-required' => 'Kabèh bidhang kudu diisi.',
	'contactpage-captcha' => 'Kanggo ngirim layang, mangga isi captcha ([[Special:Captcha/help|info luwih]])',
	'contactpage-captcha-failed' => 'Uji captcha gagal! ([[Special:Captcha/help|info luwih]])',
	'contactpage-includeip' => 'Sartakaké alamat IP kula nèng layang iki.',
);

/** Georgian (ქართული)
 * @author BRUTE
 * @author David1010
 * @author Temuri rajavi
 */
$messages['ka'] = array(
	'contactpage' => 'საკონტაქტო გვერდი',
	'contactpage-desc' => '[[Special:Contact|საკონტაქტო ფორმა სტუმრებისათვის]]',
	'contactpage-title' => 'კონტაქტი',
	'contactpage-pagetext' => 'გთხოვთ, გამოიყენეთ ქვემოთ მოცემული ფორმა ჩვენთან საკონტაქტოთ.',
	'contactpage-legend' => 'e-mail-ის გაგზავნა',
	'contactpage-defsubject' => 'საკონტაქტო შეტყობინება',
	'contactpage-subject-and-sender' => '$1 ($2-სგან)',
	'contactpage-fromname' => 'თქვენი სახელი: *',
	'contactpage-fromaddress' => 'თქვენი ელ-ფოსტა: **',
	'contactpage-formfootnotes' => '* არასავალდებულო<br />
** არასავალდებულო, მაგრამ საჭიროა პასუხის მისაღებად',
	'contactpage-fromname-required' => 'თქვენი სახელი:',
	'contactpage-fromaddress-required' => 'თქვენი ელ-ფოსტა:',
	'contactpage-formfootnotes-required' => 'ყველა ველი სავალდებულოა.',
	'contactpage-captcha' => 'ამ შეტყობინების გასაგზავნად, გთოვთ გაიარეთ captcha- შემოწმება ([[Special:Captcha/help|რა არის ეს?]])',
	'contactpage-captcha-failed' => 'Captcha-ს შემოწმება ჩავარდა! ([[Special:Captcha/help|რა არის ეს?]])',
	'contactpage-includeip' => 'მიამაგრე ჩემი IP მისამართი ამ შეტყობინებაში.',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Chhorran
 * @author Lovekhmer
 * @author Thearith
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'contactpage' => 'ទំព័រ​ទំនាក់ទំនង',
	'contactpage-desc' => '[[Special:Contact|សំណុំបែបបទទាក់ទង​សម្រាប់អ្នកទស្សនា]]',
	'contactpage-title' => 'ទាក់ទង',
	'contactpage-pagetext' => 'សូម​ប្រើ​ប្រាស់​សំណុំបែបបទ​ខាងក្រោម​ ដើម្បី​ទាក់ទងមក​យើងខ្ញុំ។',
	'contactpage-legend' => 'ផ្ញើអ៊ីមែល',
	'contactpage-defsubject' => 'សារទាក់ទង',
	'contactpage-subject-and-sender' => '$1 (ផ្ញើ​ពី $2)',
	'contactpage-subject-and-sender-withip' => '$1 (ផ្ញើពី $2 នៅ $3)',
	'contactpage-fromname' => 'ឈ្មោះ​​របស់អ្នក៖ *',
	'contactpage-fromaddress' => 'អ៊ីមែល​​របស់អ្នក៖ **',
	'contactpage-formfootnotes' => '* ដាក់មិនដាក់ក៏បាន<br />
** ដាក់មិនដាក់ក៏បានដែរ តែបើសិនជាអ្នកចង់បានចំលើយតបសូមដាក់',
	'contactpage-fromname-required' => 'ឈ្មោះរបស់អ្នក៖',
	'contactpage-fromaddress-required' => 'អ៊ីមែលរបស់អ្នក៖',
	'contactpage-formfootnotes-required' => 'តំរូវអោយបំពេលគ្រប់ប្រលោះ',
	'contactpage-includeip' => 'បញ្ចូលអាសយដ្ឋានIPរបស់ខ្ញុំទៅក្នុងសារនេះ។',
);

/** Kannada (ಕನ್ನಡ)
 * @author Nayvik
 */
$messages['kn'] = array(
	'contactpage' => 'ಸಂಪರ್ಕ ಪುಟ',
	'contactpage-title' => 'ಸಂಪರ್ಕ',
	'contactpage-legend' => 'ಇ-ಅಂಚೆ ಕಳುಹಿಸಿ',
	'contactpage-defsubject' => 'ಸಂಪರ್ಕ ಸಂದೇಶ',
	'contactpage-fromname' => 'ನಿಮ್ಮ ಹೆಸರು: *',
	'contactpage-fromaddress' => 'ನಿಮ್ಮ ಇ-ಅಂಚೆ: **',
	'contactpage-fromname-required' => 'ನಿಮ್ಮ ಹೆಸರು:',
	'contactpage-fromaddress-required' => 'ನಿಮ್ಮ ಇ-ಅಂಚೆ:',
);

/** Korean (한국어)
 * @author Hym411
 * @author Ilovesabbath
 * @author Kwj2772
 * @author WonRyong
 * @author 아라
 */
$messages['ko'] = array(
	'contactpage' => '연락 문서',
	'contactpage-desc' => '[[Special:Contact|방문자가 연락할 수 있는 양식]]',
	'contactpage-title' => '연락하기',
	'contactpage-pagetext' => '저희에게 연락하시려면 아래 양식을 사용해주세요.',
	'contactpage-legend' => '이메일 보내기',
	'contactpage-defsubject' => '연락 메시지',
	'contactpage-subject-and-sender' => '$1 ($2님이 보냄)',
	'contactpage-subject-and-sender-withip' => '$1 ($2님이 $3에서 보냄)',
	'contactpage-fromname' => '내 이름:',
	'contactpage-fromaddress' => '내 이메일 주소 :',
	'contactpage-formfootnotes' => '(답변을 원할 경우 필요)',
	'contactpage-includeip' => '이 메시지에 내 IP 주소를 포함합니다.',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'contactpage' => 'Kontak-Sigg',
	'contactpage-desc' => '[[Special:Contact|Kontak-Sigg]] för Besöker.',
	'contactpage-title' => 'Kumtak',
	'contactpage-pagetext' => 'Övver di Sigg hee kanns De dä Wiki-Maacher jet schrieve.',
	'contactpage-legend' => '<i lang="en">e-mail</i> schecke',
	'contactpage-defsubject' => 'Kontak-Nohreesch',
	'contactpage-subject-and-sender' => '$1 (fun $2)',
	'contactpage-subject-and-sender-withip' => '$1 (vum $2 met dä IP-Addräß $3)',
	'contactpage-fromname' => 'Dinge Name: <sup>*</sup>',
	'contactpage-fromaddress' => 'Ding <i lang="en">e-mail</i> Address: <sup>**</sup>',
	'contactpage-formfootnotes' => '<sup>*</sup> kannze fott lohße
<br />
<sup>**</sup> kanze fott lohße, ußer wann De en Antwoot han wells',
	'contactpage-fromname-required' => 'Dinge Name:',
	'contactpage-fromaddress-required' => 'Ding <i lang="en">e-mail</i> Address:',
	'contactpage-formfootnotes-required' => 'Dat moß all ußjefollt wäde.',
	'contactpage-captcha' => 'Öm Ding Nohreesch ze schecke, don dat Kaptscha endrare.
([[Special:Captcha/help|Mieh Enfommazjuhne]])',
	'contactpage-captcha-failed' => 'De Pröfung fum Kaptscha jingk donevve.
Eß ävver kei Problem.
Don et einfach norr_ens versöke.
([[Special:Captcha/help|Mieh Enfommazjuhne]])',
	'contactpage-includeip' => 'Donn ming <i lang="en">IP</i>-Addräß en heh di Nohreesch erin.',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'contactpage' => 'Rûpela têkiliyê',
	'contactpage-fromname' => 'Navê te: *',
	'contactpage-fromname-required' => 'Navê te:',
	'contactpage-fromaddress-required' => 'E-nameya te:',
);

/** Cornish (kernowek)
 * @author Kernoweger
 * @author Kw-Moon
 * @author Nrowe
 */
$messages['kw'] = array(
	'contactpage-fromaddress-required' => 'Agas trigva ebost:',
);

/** Latin (Latina)
 * @author Omnipaedista
 * @author SPQRobin
 * @author UV
 */
$messages['la'] = array(
	'contactpage-subject-and-sender' => '$1 (ex $2)',
	'contactpage-fromname' => 'Nomen tuum: *',
	'contactpage-fromname-required' => 'Nomen tuum:',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Les Meloures
 * @author Robby
 * @author Soued031
 */
$messages['lb'] = array(
	'contactpage' => 'Kontaktsäit',
	'contactpage-desc' => '[[Special:Contact|Kontakt-Formulair fir Visiteuren]]',
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Mat dësem Formelär kënnt Dir eis kontaktéieren.',
	'contactpage-legend' => 'E-Mail schécken',
	'contactpage-defsubject' => 'Kontakt Message',
	'contactpage-subject-and-sender' => '$1 (vum $2)',
	'contactpage-subject-and-sender-withip' => '$1 (vum $2 iwwer $3)',
	'contactpage-fromname' => 'Ären Numm:',
	'contactpage-fromaddress' => 'Är E-mail-Adress:',
	'contactpage-formfootnotes' => '(gëtt gebraucht wann Dir eng Äntwert wëllt)',
	'contactpage-includeip' => 'Meng IP-Adress an dëse Message drasetzen',
);

/** Limburgish (Limburgs)
 * @author Aelske
 * @author Ooswesthoesbes
 * @author Pahles
 */
$messages['li'] = array(
	'contactpage' => 'Kóntakpaasj',
	'contactpage-desc' => '[[Special:Contact|Kóntakformuleer veur bezeuker]]',
	'contactpage-title' => 'Kóntak',
	'contactpage-pagetext' => "Gebroek 't óngerstäöndje formeleer óm kóntak mit ós óp te nömme.",
	'contactpage-legend' => 'Sjik e-mail',
	'contactpage-defsubject' => 'Kóntakberich',
	'contactpage-subject-and-sender' => '$1 (ven $2)',
	'contactpage-subject-and-sender-withip' => '$1 (van $2 op $3)',
	'contactpage-fromname' => 'Diene naam: *',
	'contactpage-fromaddress' => 'Die-t e-mailadres: **',
	'contactpage-formfootnotes' => '* keuzevrie<br />
** keuzevrie, mer beneudj es antjwaord gewönsj is',
	'contactpage-fromname-required' => 'Diene naam:',
	'contactpage-fromaddress-required' => 'Dien e-mailadres:',
	'contactpage-formfootnotes-required' => 'Alle velder zin verplich.',
	'contactpage-captcha' => 'Óm get te sjikke, mósse de captcha óplósse ([[Special:Captcha/help|mieë weite]])',
	'contactpage-captcha-failed' => 'Captchatès mislök ([[Special:Captcha/help|mieë weite]])',
	'contactpage-includeip' => 'Sjik mien IP-adres mit in dit berich.',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 * @author Garas
 * @author Mantak111
 * @author Matasg
 */
$messages['lt'] = array(
	'contactpage' => 'Kontaktų puslapis',
	'contactpage-title' => 'Kontaktas',
	'contactpage-pagetext' => 'Prašome naudoti žemiau esančią formą norint susisiekti su mumis.',
	'contactpage-legend' => 'Siųsti elektroninį laišką',
	'contactpage-subject-and-sender' => '$1 (iš $2 )',
	'contactpage-fromname' => 'Jūsų vardas:',
	'contactpage-fromaddress' => 'Jūsų elektroninis paštas:',
	'contactpage-formfootnotes' => '(reikalingas, jei norite gauti atsakymą)',
	'contactpage-includeip' => 'Įtraukti mano IP adresą į šį pranešimą.',
);

/** Latvian (latviešu)
 * @author GreenZeb
 * @author Papuass
 */
$messages['lv'] = array(
	'contactpage' => 'Kontaktu lapa',
	'contactpage-desc' => '[[Special:Contact|Apmeklētāju kontaktforma]]',
	'contactpage-title' => 'Kontakti',
	'contactpage-pagetext' => 'Lūdzu, izmantojiet zemāk esošo formu, lai sazinātos ar mums.',
	'contactpage-legend' => 'Sūtīt e-pastu',
	'contactpage-subject-and-sender' => '$1 (no $2)',
	'contactpage-subject-and-sender-withip' => '$1 (no $2 - $3)',
	'contactpage-fromname' => 'Jūsu vārds: *',
	'contactpage-fromaddress' => 'Jūsu e-pasts: **',
	'contactpage-fromname-required' => 'Jūsu vārds:',
	'contactpage-fromaddress-required' => 'Jūsu e-pasts:',
	'contactpage-formfootnotes-required' => 'Visi lauki ir jāaizpilda.',
	'contactpage-includeip' => 'Iekļaut šajā ziņojumā manu IP adresi.',
);

/** Lazuri (Lazuri)
 * @author Bombola
 */
$messages['lzz'] = array(
	'contactpage-fromname' => 'Skani coxo: *',
	'contactpage-fromaddress' => 'Skani e-mail: **',
	'contactpage-fromname-required' => 'Skani coxo:',
	'contactpage-fromaddress-required' => 'Skani e-mail:',
);

/** Malagasy (Malagasy)
 * @author Jagwar
 */
$messages['mg'] = array(
	'contactpage-fromname' => 'Ny anaranao : *',
	'contactpage-fromaddress' => 'Ny imailakanao : **',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 * @author Misos
 */
$messages['mk'] = array(
	'contactpage' => 'Контактна страница',
	'contactpage-desc' => '[[Special:Contact|Контактен образец за посетители]]',
	'contactpage-title' => 'Контакт',
	'contactpage-pagetext' => 'Послужете се со образецот подолу за да нè контактирате.',
	'contactpage-legend' => 'Испрати е-пошта',
	'contactpage-defsubject' => 'Контактна порака',
	'contactpage-subject-and-sender' => '$1 (од $2)',
	'contactpage-subject-and-sender-withip' => '$1 (од $2 од адресата $3)',
	'contactpage-fromname' => 'Вашето име:',
	'contactpage-fromaddress' => 'Вашата е-пошта:',
	'contactpage-formfootnotes' => '(по избор, но неопходно ако сакате да добиете одговор)',
	'contactpage-includeip' => 'Вклучи ја мојата IP-адреса во оваа порака.',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 * @author Shijualex
 */
$messages['ml'] = array(
	'contactpage' => 'ബന്ധപ്പെടാനുള്ള താൾ',
	'contactpage-desc' => '[[Special:Contact|സന്ദർശകർക്ക് ബന്ധപ്പെടാനുള്ള ഫോം]]',
	'contactpage-title' => 'വിലാസം',
	'contactpage-pagetext' => 'ഞങ്ങളെ ബന്ധപ്പെടാൻ ദയവായി താഴെ കൊടുത്തിരിക്കുന്ന ഫോം ഉപയോഗിക്കുക.',
	'contactpage-legend' => 'ഇമെയിൽ അയയ്ക്കുക',
	'contactpage-defsubject' => 'ബന്ധപ്പെടാനുള്ള സന്ദേശം',
	'contactpage-subject-and-sender' => '$1 (അയച്ചത് $2)',
	'contactpage-subject-and-sender-withip' => '$1 ($3 എന്ന വിലാസത്തിൽനിന്നുള്ള $2)',
	'contactpage-fromname' => 'താങ്കളുടെ പേര്‌: *',
	'contactpage-fromaddress' => 'താങ്കളുടെ ഇമെയിൽ വിലാസം: **',
	'contactpage-formfootnotes' => '* നിർബന്ധമില്ല<br />
** നിർബന്ധമില്ല, പക്ഷെ താങ്കൾക്ക് മറുപടി വേണമെങ്കിൽ ഇതു ആവശ്യമാണ്‌',
	'contactpage-fromname-required' => 'താങ്കളുടെ പേര്:',
	'contactpage-fromaddress-required' => 'താങ്കളുടെ ഇമെയിൽ:',
	'contactpage-formfootnotes-required' => 'എല്ലാ ഫീൽഡുകളും പൂരിപ്പിച്ചിരിക്കണം.',
	'contactpage-captcha' => 'സന്ദേശം അയക്കാൻ, ദയവായി Captcha നിർദ്ധാരണം ചെയ്യുക. [[Special:Captcha/help|കൂടുതൽ വിവരം]]',
	'contactpage-captcha-failed' => 'Captcha പരീക്ഷണം പരാജയപ്പെട്ടു! ([[Special:Captcha/help|കൂടുതൽ വിവരം]])',
	'contactpage-includeip' => 'ഈ സന്ദേശത്തിൽ എന്റെ ഐ.പി. വിലാസവും ചേർക്കുക.',
);

/** Marathi (मराठी)
 * @author Kaustubh
 * @author Mahitgar
 * @author V.narsikar
 */
$messages['mr'] = array(
	'contactpage' => 'संपर्कपान',
	'contactpage-desc' => '[[Special:Contact|भेट देणार्‍यांसाठी संपर्क अर्ज]]',
	'contactpage-title' => 'संपर्क',
	'contactpage-pagetext' => 'कृपया आमच्याशी संपर्क साधण्यासाठी खालील अर्ज भरा.',
	'contactpage-legend' => 'विपत्र पाठवा',
	'contactpage-defsubject' => 'संपर्क संदेश',
	'contactpage-subject-and-sender' => '$1 ($2 कडून)',
	'contactpage-fromname' => 'आपले नाव: *',
	'contactpage-fromaddress' => 'आपला विपत्रपत्ता:**',
	'contactpage-formfootnotes' => '* वैकल्पिक<br />
** वैकल्पिक पण उत्तर हवे असल्यास आवश्यक',
	'contactpage-fromname-required' => 'आपले नाव:',
	'contactpage-fromaddress-required' => 'आपला विपत्रपत्ता:',
	'contactpage-formfootnotes-required' => 'सर्व फिल्डस् भरणे आवश्यक',
	'contactpage-captcha' => 'हा संदेश पाठविण्यासाठी, कृपया कॅपचा (captcha) सोडवा ([[Special:Captcha/help|अधिक माहिती]])',
	'contactpage-captcha-failed' => 'कॅपचा चाचणी पूर्ण झालेली नाही! ([[Special:Captcha/help|अधिक माहिती]])',
	'contactpage-includeip' => 'माझा अंकपत्ता या संदेशात अंतर्भूत करा',
);

/** Malay (Bahasa Melayu)
 * @author Aurora
 * @author Aviator
 */
$messages['ms'] = array(
	'contactpage' => 'Laman hubungan',
	'contactpage-desc' => '[[Special:Contact|Borang hubungan untuk pengunjung]]',
	'contactpage-title' => 'Hubungi kami',
	'contactpage-pagetext' => 'Sila gunakan borang di bawah untuk menghubungi kami.',
	'contactpage-legend' => 'Kirim e-mel',
	'contactpage-defsubject' => 'Pesanan',
	'contactpage-subject-and-sender' => '$1 (daripada $2)',
	'contactpage-subject-and-sender-withip' => '$1 (daripada $2 di alamat $3)',
	'contactpage-fromname' => 'Nama anda: *',
	'contactpage-fromaddress' => 'E-mel anda: **',
	'contactpage-formfootnotes' => '* pilihan<br />
** perlu diisi jika mahu dibalas',
	'contactpage-fromname-required' => 'Nama anda:',
	'contactpage-fromaddress-required' => 'E-mel anda:',
	'contactpage-formfootnotes-required' => 'Semua ruangan wajib diisi.',
	'contactpage-captcha' => 'Untuk mengirim pesanan ini, sila selesaikan ujian CAPTCHA yang diberikan ([[Special:Captcha/help|maklumat lanjut]])',
	'contactpage-captcha-failed' => 'Anda tidak melepasi ujian CAPTCHA! ([[Special:Captcha/help|maklumat lanjut]])',
	'contactpage-includeip' => 'Sertakan alamat IP saya dalam pesanan ini.',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'contactpage' => 'Kuntatt',
	'contactpage-desc' => "[[Special:Contact|Formola ta' kuntatt għall-viżitaturi]]",
	'contactpage-title' => 'Kuntatt',
	'contactpage-pagetext' => 'Jekk jogħġbok uża din il-formola sabiex tikkuntatjana.',
	'contactpage-legend' => 'Ibgħat ittra-e',
	'contactpage-defsubject' => 'Messaġġ',
	'contactpage-subject-and-sender' => '$1 (minn $2)',
	'contactpage-subject-and-sender-withip' => '$1 (minn $2 sa $3)',
	'contactpage-fromname' => 'Isem: *',
	'contactpage-fromaddress' => 'Indirizz elettroniku: **',
	'contactpage-formfootnotes' => '* opzjonali<br />
** opzjonali imma neċessarju jekk qed tistenna tweġiba',
	'contactpage-fromname-required' => 'Ismek:',
	'contactpage-fromaddress-required' => 'Indirizz elettroniku tiegħek:',
	'contactpage-formfootnotes-required' => 'L-oqsma kollha huma neċessarji.',
	'contactpage-captcha' => "Sabiex tibgħat il-messaġġ, jekk jogħġbok solvi l-''captcha'' ([[Special:Captcha/help|aktar informazzjoni]])",
	'contactpage-captcha-failed' => "It-test tal-''captcha'' falla! ([[Special:Captcha/help|aktar informazzjoni]])",
	'contactpage-includeip' => "Inkludi l-indirizz IP f'dan il-messaġġ.",
);

/** Erzya (эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'contactpage-legend' => 'Кучомс е-сёрма',
	'contactpage-fromname' => 'Эсеть леметь: *',
	'contactpage-fromaddress' => 'Эсеть е-сёрмат: **',
	'contactpage-fromname-required' => 'Эсеть леметь:',
	'contactpage-formfootnotes-required' => 'Весе паксятне эрявикст.',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'contactpage-legend' => 'Tiquihuāz e-mail',
	'contactpage-subject-and-sender' => '$1 (īhuīcpa $2)',
	'contactpage-fromname' => 'Motōca: *',
	'contactpage-fromaddress' => 'Mo e-mail: **',
	'contactpage-fromname-required' => 'Motōca:',
	'contactpage-fromaddress-required' => 'Mo e-mail:',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'contactpage' => 'Kontaktside',
	'contactpage-desc' => '[[Special:Contact|Kontaktskjema for besøkende]]',
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Bruk skjemaet nedenunder for å kontakte oss.',
	'contactpage-legend' => 'Send e-post',
	'contactpage-defsubject' => 'Beskjed',
	'contactpage-subject-and-sender' => '$1 (fra $2)',
	'contactpage-subject-and-sender-withip' => '$1 (fra $2 på $3)',
	'contactpage-fromname' => 'Ditt navn: *',
	'contactpage-fromaddress' => 'Din e-postadresse: **',
	'contactpage-formfootnotes' => '* valgfri<br />
** valgfri, men er nødvendig dersom du vil ha svar',
	'contactpage-fromname-required' => 'Ditt navn:',
	'contactpage-fromaddress-required' => 'Din e-postadresse:',
	'contactpage-formfootnotes-required' => 'Alle felt er obligatoriske.',
	'contactpage-captcha' => 'Løs captcha-oppgaven for å sende beskjeden ([[Special:Captcha/help|mer informasjon]])',
	'contactpage-captcha-failed' => 'Captcha-test mislyktes! ([[Special:Captcha/help|mer informasjon]])',
	'contactpage-includeip' => 'Inkluder IP-adressen min i denne meldingen.',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 */
$messages['nds'] = array(
	'contactpage' => 'Kontaktsied',
	'contactpage-desc' => '[[Special:Contact|Kontaktformular för Besökers]]',
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Över dit Formular kannst du uns Narichten tostüern.',
	'contactpage-legend' => 'E-Mail afschicken',
	'contactpage-defsubject' => 'Kontaktnaricht',
	'contactpage-subject-and-sender' => '$1 (vun $2)',
	'contactpage-fromname' => 'Dien Naam: *',
	'contactpage-fromaddress' => 'Dien E-Mail-Adress: **',
	'contactpage-formfootnotes' => '* optional<br />
** optional, aver nödig, wenn du en Antwoord hebben wullt',
	'contactpage-fromname-required' => 'Dien Naam:',
	'contactpage-fromaddress-required' => 'Dien E-Mail:',
	'contactpage-formfootnotes-required' => 'All Feller mööt utfüllt warrn.',
	'contactpage-captcha' => 'Dat du dien Naricht afschicken kannst, löös dit Captcha ([[Special:Captcha/help|mehr Infos]])',
	'contactpage-captcha-failed' => 'Captcha-Test is scheefgahn! ([[Special:Captcha/help|mehr Infos]])',
);

/** Nepali (नेपाली)
 * @author Bhawani Gautam
 * @author Bhawani Gautam Rhk
 */
$messages['ne'] = array(
	'contactpage' => 'सम्पर्क पृष्ठ',
	'contactpage-desc' => '[[Special:Contact|आगन्तुकसितको सम्पर्क]]',
	'contactpage-title' => 'संपर्क गर्ने',
	'contactpage-pagetext' => 'हामीसित सम्पर्क साध्न तल दिइएको फ़ारमको प्रयोग गर्नुहोस्।',
	'contactpage-legend' => 'इमेल पठाउने',
	'contactpage-defsubject' => 'सम्पर्क सन्देश',
	'contactpage-subject-and-sender' => '($2बाट) $1',
	'contactpage-subject-and-sender-withip' => '($2बाट  $3मा) $1',
	'contactpage-fromname' => 'तपाईंको नाम:  *',
	'contactpage-fromaddress' => 'तपाईंको इमेल: **',
	'contactpage-formfootnotes' => '* ऐच्छिक <br />
** ऐच्छिक तर आवश्यक यदि तपाईं उत्तर चाहनु हुन्छ भनें',
	'contactpage-fromname-required' => 'तपाईंको नाम:',
	'contactpage-fromaddress-required' => 'तपाईंको इमेल:',
	'contactpage-formfootnotes-required' => 'सबै क्षेत्र जरुरी।',
	'contactpage-captcha' => 'सन्देश पठाउन,  कृपया क्याप्चा सुल्झाउनु होस् ([[Special:Captcha/help|थप जानाकारी]])',
	'contactpage-captcha-failed' => 'क्याप्चा जाँच विफल!  [[Special:Captcha/help|थप जानकारी]]',
	'contactpage-includeip' => 'मेरो आई पी ठेगाना यस सन्देशमा संलग्न गर्ने।',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 * @author Sjoerddebruin
 */
$messages['nl'] = array(
	'contactpage' => 'Contactpagina',
	'contactpage-desc' => '[[Special:Contact|Contactformulier voor bezoekers]]',
	'contactpage-title' => 'Contact',
	'contactpage-pagetext' => 'Gebruik het onderstaande formulier om contact met ons op te nemen.',
	'contactpage-legend' => 'E-mail verzenden',
	'contactpage-defsubject' => 'Contactbericht',
	'contactpage-subject-and-sender' => '$1 (van $2)',
	'contactpage-subject-and-sender-withip' => '$1 (van $2 op $3)',
	'contactpage-fromname' => 'Uw naam:',
	'contactpage-fromaddress' => 'Uw e-mailadres:',
	'contactpage-formfootnotes' => '(nodig als u een antwoord wilt ontvangen)',
	'contactpage-includeip' => 'Stuur mijn IP-adres mee met dit bericht.',
);

/** Nederlands (informeel)‎ (Nederlands (informeel)‎)
 * @author Siebrand
 */
$messages['nl-informal'] = array(
	'contactpage-fromname' => 'Je naam:*',
	'contactpage-fromaddress' => 'Je e-mailadres:**',
	'contactpage-fromname-required' => 'Je naam:',
	'contactpage-fromaddress-required' => 'Je e-mailadres:',
);

/** Norwegian Nynorsk (norsk nynorsk)
 * @author Harald Khan
 * @author Nghtwlkr
 * @author Njardarlogar
 */
$messages['nn'] = array(
	'contactpage' => 'Kontaktsida',
	'contactpage-desc' => '[[Special:Contact|Kontaktskjema for vitjande]]',
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Bruk skjemaet nedanfor for å kontakta oss.',
	'contactpage-legend' => 'Send e-post',
	'contactpage-defsubject' => 'Melding',
	'contactpage-subject-and-sender' => '$1 (frå $2)',
	'contactpage-subject-and-sender-withip' => '$1 (frå $2 på $3)',
	'contactpage-fromname' => 'Namnet ditt: *',
	'contactpage-fromaddress' => 'E-postadressa di: **',
	'contactpage-formfootnotes' => '* valfri<br />
** valfri, men er naudsynleg dersom du vil ha svar',
	'contactpage-fromname-required' => 'Namnet ditt:',
	'contactpage-fromaddress-required' => 'E-postadressa di:',
	'contactpage-formfootnotes-required' => 'Alle felt er naudsynlege.',
	'contactpage-captcha' => 'For å senda meldinga, ver venleg og løys captcha-oppgåva ([[Special:Captcha/help|meir informasjon]])',
	'contactpage-captcha-failed' => 'Captcha-testen feila! ([[Special:Captcha/help|meir informasjon]])',
);

/** Northern Sotho (Sesotho sa Leboa)
 * @author Mohau
 */
$messages['nso'] = array(
	'contactpage-fromname' => 'Leina la gago: *',
	'contactpage-fromaddress' => 'Email aterese ya gago: **',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'contactpage' => 'Contacte',
	'contactpage-desc' => '[[Special:Contact|Formulari de contacte pels visitors]]',
	'contactpage-title' => 'Contacte',
	'contactpage-pagetext' => 'Utilizatz lo formulari çaijós per nos contactar.',
	'contactpage-legend' => 'Mandar un corrièr electronic',
	'contactpage-defsubject' => 'Messatge',
	'contactpage-subject-and-sender' => '$1 (de $2)',
	'contactpage-subject-and-sender-withip' => '$1 (de $2 a $3)',
	'contactpage-fromname' => 'Vòstre nom :',
	'contactpage-fromaddress' => 'Vòstra adreça electronica :',
	'contactpage-formfootnotes' => '(obligatòri se desiratz una responsa)',
	'contactpage-includeip' => 'Inclure mon adreça IP dins aquel messatge.',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Ansumang
 * @author Psubhashish
 */
$messages['or'] = array(
	'contactpage' => 'ସମ୍ପର୍କ ପୃଷ୍ଠା',
	'contactpage-desc' => '[[Special:Contact|ଆଗନ୍ତୁକଙ୍କ ପାଇଁ ସମ୍ପର୍କ ପତ୍ର]]',
	'contactpage-title' => 'ସମ୍ପର୍କ',
	'contactpage-pagetext' => 'ଆମ ସହ ଯୋଗାଯୋଗ କରିବା ନିମନ୍ତେ ଏହି ତଳ ଆବେଦନ ପତ୍ରଟି ବ୍ୟବହାର କରନ୍ତୁ ।',
	'contactpage-legend' => 'ଇ-ମେଲ ପଠାଇବେ',
	'contactpage-defsubject' => 'ଯୋଗାଯୋଗ ସନ୍ଦେଶ',
	'contactpage-subject-and-sender' => '$1 (from $2)',
	'contactpage-subject-and-sender-withip' => '$1 (from $2 at $3)',
	'contactpage-fromname' => 'ଆପଣଙ୍କ ନାମ: *',
	'contactpage-fromaddress' => 'ଆପଣଙ୍କ ଇ-ମେଲ: **',
	'contactpage-formfootnotes' => '* ଇଛାଧୀନ<br />
** ଇଛାଧୀନ କିନ୍ତୁ ଯଦି ଆପଣଙ୍କୁ ଉତ୍ତରଟିଏ ଲୋଡ଼ା ତାହେଲେ ଏହା ବି ଲୋଡ଼ା',
	'contactpage-fromname-required' => 'ଆପଣଙ୍କ ନାମ:',
	'contactpage-fromaddress-required' => 'ଆପଣଙ୍କ ଇ-ମେଲ:',
	'contactpage-formfootnotes-required' => 'ସବୁଯାକ ଘର ଭରିବାକୁ ପଡ଼ିବ ।',
);

/** Ossetic (Ирон)
 * @author Amikeco
 */
$messages['os'] = array(
	'contactpage-fromname-required' => 'Дæ ном:',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'contactpage-subject-and-sender' => '$1 (vun $2)',
	'contactpage-fromname' => 'Dei Naame: *',
	'contactpage-fromaddress' => 'Dei E-Poschd: **',
	'contactpage-fromname-required' => 'Dei Naame:',
	'contactpage-fromaddress-required' => 'Dei E-Poschd:',
);

/** Polish (polski)
 * @author Derbeth
 * @author Jacenty359
 * @author Leinad
 * @author Maikking
 * @author Sp5uhe
 * @author WTM
 * @author Wpedzich
 */
$messages['pl'] = array(
	'contactpage' => 'Kontakt',
	'contactpage-desc' => '[[Special:Contact|Formularz kontaktowy dla czytelników serwisu]]',
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Prosimy użyć poniższego formularza by skontaktować się z nami',
	'contactpage-legend' => 'Wyślij e‐mail',
	'contactpage-defsubject' => 'Wiadomość',
	'contactpage-subject-and-sender' => '$1 (z $2)',
	'contactpage-subject-and-sender-withip' => '$1 (od $2 z $3)',
	'contactpage-fromname' => 'Twoje imię:',
	'contactpage-fromaddress' => 'Twój adres email:',
	'contactpage-formfootnotes' => '(potrzebne jeśli chcesz uzyskać odpowiedź)',
	'contactpage-includeip' => 'Dodaj do tej wiadomości informację o moim adresie IP.',
);

/** Piedmontese (Piemontèis)
 * @author Bèrto 'd Sèra
 * @author Dragonòt
 */
$messages['pms'] = array(
	'contactpage' => 'Pàgina ëd contat',
	'contactpage-desc' => "[[Special:Contact|Forma ëd contat për j'anònim]]",
	'contactpage-title' => 'Contat',
	'contactpage-pagetext' => "Për piasì, për contatene ch'a dòvra ël mòdulo ambelessì sota.",
	'contactpage-legend' => 'Manda e-mail',
	'contactpage-defsubject' => 'Messagi',
	'contactpage-subject-and-sender' => '$1 (da $2)',
	'contactpage-subject-and-sender-withip' => '$1 (da $2 a $3)',
	'contactpage-fromname' => 'Tò nòm: *',
	'contactpage-fromaddress' => 'Toa e-mail: **',
	'contactpage-formfootnotes' => "* opsional<br /> ** opsional, ma për podej avej d'arspòsta a venta butelo",
	'contactpage-fromname-required' => 'Tò nòm:',
	'contactpage-fromaddress-required' => 'Toa e-mail:',
	'contactpage-formfootnotes-required' => 'Tùit ij camp a son obligatòri.',
	'contactpage-captcha' => "Për mandé via ël messagi, për piasì ch'arzòlva ël test antirumenta ([[Special:Captcha/help|pì d'anformassion]])",
	'contactpage-captcha-failed' => "Test antirumenta falì! ([[Special:Captcha/help|pì d'anformassion]])",
	'contactpage-includeip' => 'Anclud mia adrëssa IP an sto mëssagi-sì',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'contactpage' => 'د اړيکو مخ',
	'contactpage-desc' => '[[Special:Contact|د کتونکو لپاره د اړيکو فورمه]]',
	'contactpage-title' => 'اړيکه ټينګول',
	'contactpage-pagetext' => 'له موږ سره د اړيکو ټينگولو لپاره، لاندينۍ فورمه وکاروۍ.',
	'contactpage-legend' => 'برېښليک لېږل',
	'contactpage-defsubject' => 'د اړيکې پيغام',
	'contactpage-subject-and-sender' => '$1 (د $2 لخوا )',
	'contactpage-fromname' => 'ستاسې نوم: *',
	'contactpage-fromaddress' => 'ستاسې برېښليک: **',
	'contactpage-formfootnotes' => '* ستاسو د خوښې کړنه<br />
** دا ستاسو د خوښې کړنه ده خو که چېرته تاسو يو ځواب غواړی نو بيا پکار ده چې ډک شي',
	'contactpage-fromname-required' => 'ستاسې نوم:',
	'contactpage-fromaddress-required' => 'ستاسې برېښليک:',
);

/** Portuguese (português)
 * @author Hamilton Abreu
 * @author Imperadeiro98
 * @author Malafaya
 * @author Waldir
 */
$messages['pt'] = array(
	'contactpage' => 'Página de Contacto',
	'contactpage-desc' => '[[Special:Contact|Formulário de contacto para visitantes]]',
	'contactpage-title' => 'Contacto',
	'contactpage-pagetext' => 'Por favor, use o formulário abaixo para nos contactar.',
	'contactpage-legend' => 'Enviar correio electrónico',
	'contactpage-defsubject' => 'Mensagem de Contacto',
	'contactpage-subject-and-sender' => '$1 (de $2)',
	'contactpage-subject-and-sender-withip' => '$1 (de $2, endereço $3)',
	'contactpage-fromname' => 'O seu nome:',
	'contactpage-fromaddress' => 'O seu correio electrónico:',
	'contactpage-formfootnotes' => '(necessário se deseja uma resposta)',
	'contactpage-includeip' => 'Incluir o meu endereço IP nesta mensagem.',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Carla404
 * @author Eduardo.mps
 * @author Giro720
 */
$messages['pt-br'] = array(
	'contactpage' => 'Página de Contato',
	'contactpage-desc' => '[[Special:Contact|Formulário de contato para visitantes]]',
	'contactpage-title' => 'Contato',
	'contactpage-pagetext' => 'Por favor, use o formulário abaixo para nos contatar.',
	'contactpage-legend' => 'Enviar e-mail',
	'contactpage-defsubject' => 'Mensagem de Contato',
	'contactpage-subject-and-sender' => '$1 (de $2)',
	'contactpage-subject-and-sender-withip' => '$1 (de $2, endereço $3)',
	'contactpage-fromname' => 'O seu nome: *',
	'contactpage-fromaddress' => 'O seu email: **',
	'contactpage-formfootnotes' => '* opcional<br />
** opcional, mas necessário se quiser uma resposta',
	'contactpage-fromname-required' => 'O seu nome:',
	'contactpage-fromaddress-required' => 'O seu e-mail:',
	'contactpage-formfootnotes-required' => 'Todos os campos são obrigatórios.',
	'contactpage-captcha' => "Para enviar a mensagem, por favor, resolva o ''captcha'' ([[Special:Captcha/help|mais informação]])",
	'contactpage-captcha-failed' => 'Teste captcha falhou! ([[Special:Captcha/help|mais informação]])',
	'contactpage-includeip' => 'Incluir o meu endereço IP nesta mensagem.',
);

/** Romanian (română)
 * @author KlaudiuMihaila
 * @author Mihai
 * @author Minisarm
 */
$messages['ro'] = array(
	'contactpage' => 'Pagină de contact',
	'contactpage-desc' => '[[Special:Contact|Formular de contact pentru vizitatori]]',
	'contactpage-title' => 'Contact',
	'contactpage-pagetext' => 'Folosește formularul de mai jos pentru a ne contacta.',
	'contactpage-legend' => 'Trimite e-mail',
	'contactpage-defsubject' => 'Mesaj de contact',
	'contactpage-subject-and-sender' => '$1 (de la $2)',
	'contactpage-subject-and-sender-withip' => '$1 (de la $2 la $3)',
	'contactpage-fromname' => 'Numele dumneavoastră: *',
	'contactpage-fromaddress' => 'Adresa dumneavoastră de e-mail: **',
	'contactpage-formfootnotes' => '* opțional<br />
** opțională, dar necesară dacă doriți un răspuns',
	'contactpage-fromname-required' => 'Numele dumneavoastră:',
	'contactpage-fromaddress-required' => 'Adresa dumneavoastră de e-mail:',
	'contactpage-formfootnotes-required' => 'Toate câmpurile sunt obligatorii.',
	'contactpage-captcha' => 'Pentru a trimite mesajul, rezolvă captcha ([[Special:Captcha/help|mai multe detalii]])',
	'contactpage-captcha-failed' => 'Testul captcha a eșuat! ([[Special:Captcha/help|mai multe informații]])',
	'contactpage-includeip' => 'Include-mi adresa IP în acest mesaj.',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'contactpage' => 'Pàgene de le condatte',
	'contactpage-desc' => '[[Special:Contact|Form de le condatte pe le visitature]]',
	'contactpage-title' => 'Condatte',
	'contactpage-pagetext' => "Pe piacere ause 'u form ca ste aqquà sotte pe ne condattà.",
	'contactpage-legend' => "Manne 'n'e-mail",
	'contactpage-defsubject' => "Message d'u condatte",
	'contactpage-subject-and-sender' => '$1 (da $2)',
	'contactpage-subject-and-sender-withip' => '$1 (da $2 a le $3)',
	'contactpage-fromname' => "'U nome tune:",
	'contactpage-fromaddress' => "L'e-mail toje:",
	'contactpage-formfootnotes' => "(abbesogne ce tu vuè cu ave 'na resposte)",
	'contactpage-includeip' => "Inglude l'indirizze UP mije sus a stu messagge.",
);

/** Russian (русский)
 * @author Ferrer
 * @author Okras
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'contactpage' => 'Страница контакта',
	'contactpage-desc' => '[[Special:Contact|Форма для посетителей]]',
	'contactpage-title' => 'Контакт',
	'contactpage-pagetext' => 'Пожалуйста, используйте данную форму, чтобы связаться с нами.',
	'contactpage-legend' => 'Отправить письмо',
	'contactpage-defsubject' => 'Сообщение',
	'contactpage-subject-and-sender' => '$1 (от $2)',
	'contactpage-subject-and-sender-withip' => '$1 (от $2 с адреса $3)',
	'contactpage-fromname' => 'Ваше имя:',
	'contactpage-fromaddress' => 'Ваш адрес электронной почты:',
	'contactpage-formfootnotes' => '(необходимо только если вы хотите получить ответ)',
	'contactpage-includeip' => 'Включить мой IP-адрес в это сообщение.',
);

/** Rusyn (русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'contactpage' => 'Сторінка контакту',
	'contactpage-desc' => '[[Special:Contact|Контактный формуларь про навщівників]]',
	'contactpage-title' => 'Контакт',
	'contactpage-pagetext' => 'За помочі ниже указаного формуларя ся з нами можете споїти.',
	'contactpage-legend' => 'Послати ел. пошту',
	'contactpage-defsubject' => 'Повідомлїня',
	'contactpage-subject-and-sender' => '$1 (з $2)',
	'contactpage-subject-and-sender-withip' => '$1 (од $2 з $3)',
	'contactpage-fromname' => 'Ваше імя: *',
	'contactpage-fromaddress' => 'Ваша адреса ел. пошты: **',
	'contactpage-formfootnotes' => '&#042; волительны<br />
&#042;&#042; волительны, але потрібны кідь хочете одповідь',
	'contactpage-fromname-required' => 'Ваше імя:',
	'contactpage-fromaddress-required' => 'Ваша адреса ел. пошты:',
	'contactpage-formfootnotes-required' => 'Вшыткы поля мусять быти выповнены.',
	'contactpage-captcha' => 'Жебы сьте могли одослати повідомлїня, мусите вырїшытиt CAPTCHA ([[Special:Captcha/help|пояснїня]])',
	'contactpage-captcha-failed' => '{{GENDER:Не перешов|Не перешла|Не перешли}} сьте у тестї CAPTCHA! ([[Special:Captcha/help|пояснїня]])',
	'contactpage-includeip' => 'Приложыти ку повідомлїню мою IP адресу.',
);

/** Sakha (саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'contactpage' => 'Алтыһыы сирэйэ',
	'contactpage-desc' => '[[Special:Contact|Ыалдьыттарга аналлаах фуорма]]',
	'contactpage-title' => 'Контакт',
	'contactpage-pagetext' => 'Биһигини кытта ситимнэһэргэ бу фуорманы туһан.',
	'contactpage-legend' => 'Суругу ыыт',
	'contactpage-defsubject' => 'Сурук',
	'contactpage-subject-and-sender' => '$1 (от $2)',
	'contactpage-subject-and-sender-withip' => '$1 ($2, $3 аадырыстан)',
	'contactpage-fromname' => 'Эн аатыҥ: *',
	'contactpage-fromaddress' => 'Эн эл. почтаҥ аадырыһа: **',
	'contactpage-formfootnotes' => '* булугуччута суох<br />
** булугуччута суох гынан баран эппиэт эрэйэр буоллаххына наада',
	'contactpage-fromname-required' => 'Эн аатыҥ:',
	'contactpage-fromaddress-required' => 'Эн эл. почтаҥ аадырыһа:',
	'contactpage-formfootnotes-required' => 'Бары түннүктэр булгуччу толоруллуохтаахтар.',
	'contactpage-captcha' => 'Сурук ыытарга CAPTCHA бэрэбиэркэтин ааһыахтааххын ([[Special:Captcha/help|ол туһунан сиһилии]])',
	'contactpage-captcha-failed' => 'CAPTCHA бэрэбиэркэтэ ааһыллыбатах! ([[Special:Captcha/help|ол туһунан сиһилии]])',
	'contactpage-includeip' => 'Мин IP-бын бу биллэриккэ киллэр.',
);

/** Scots (Scots)
 * @author John Reid
 */
$messages['sco'] = array(
	'contactpage-fromname' => 'Yer name:',
	'contactpage-fromaddress' => 'Yer wab-mail address',
	'contactpage-formfootnotes' => '(needed gif ye want aen answer)',
);

/** Sinhala (සිංහල)
 * @author Sahan.ssw
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'contactpage' => 'සම්බන්ධක පිටුව',
	'contactpage-desc' => '[[Special:Contact|අමුත්තන් සඳහා සම්බන්ධක ෆෝරමය]]',
	'contactpage-title' => 'සම්බන්ධ කරන්න',
	'contactpage-pagetext' => 'අපව සම්බන්ධ කරගැනීමට කරුණාකර මෙම ෆෝරමය භාවිතා කරන්න.',
	'contactpage-legend' => 'ඊ-තැපෑල යවන්න',
	'contactpage-defsubject' => 'සම්බන්ධක පණිවුඩය',
	'contactpage-subject-and-sender' => '$1 ($2 ගෙන්)',
	'contactpage-subject-and-sender-withip' => '$1 ($2 ගෙන් $3 හීදී)',
	'contactpage-fromname' => 'ඔබේ නම: *', # Fuzzy
	'contactpage-fromaddress' => 'ඔබේ ඊ-තැපෑල: **', # Fuzzy
	'contactpage-formfootnotes' => '(ඔබට පිළිතුරක් ලබා ගැනීමට නම්)',
	'contactpage-includeip' => 'මෙම පණිවුඩයෙහි මගේ අයිපී ලිපිනය අඩංගු කරන්න.',
);

/** Slovak (slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'contactpage' => 'Kontaktná stránka',
	'contactpage-desc' => '[[Special:Contact|Kontaktný formulár pre návštevníkov]]',
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Prosím, použite tento formulár, aby ste nás kontaktovali.',
	'contactpage-legend' => 'Poslať email',
	'contactpage-defsubject' => 'Správa',
	'contactpage-subject-and-sender' => '$1 (od $2)',
	'contactpage-subject-and-sender-withip' => '$1 (od $2 z $3)',
	'contactpage-fromname' => 'Vaše meno: *',
	'contactpage-fromaddress' => 'Váš email: **',
	'contactpage-formfootnotes' => '
* voliteľné<br />
** voliteľné, ale potrebné ak chcete odpoveď',
	'contactpage-fromname-required' => 'Vaše meno:',
	'contactpage-fromaddress-required' => 'Váš email:',
	'contactpage-formfootnotes-required' => 'Je povinné vyplniť všetky polia.',
	'contactpage-captcha' => 'Aby ste mohli poslať správu, vyriešte prosím captcha ([[Special:Captcha/help|podrobnosti]])',
	'contactpage-captcha-failed' => 'Test captcha bol neúspešný! ([[Special:Captcha/help|podrobnosti]])',
	'contactpage-includeip' => 'Vložiť k tejto správe moju IP adresu.',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'contactpage' => 'Stik z nami',
	'contactpage-desc' => '[[Special:Contact|Kontaktni obrazec za obiskovalce]]',
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Prosimo, uporabite spodnji obrazec za stik z nami.',
	'contactpage-legend' => 'Pošljite e-pošto',
	'contactpage-defsubject' => 'Kontaktno sporočilo',
	'contactpage-subject-and-sender' => '$1 (od $2)',
	'contactpage-subject-and-sender-withip' => '$1 (od $2 iz $3)',
	'contactpage-fromname' => 'Vaše ime:',
	'contactpage-fromaddress' => 'Vaš e-poštni naslov:',
	'contactpage-formfootnotes' => '(potrebno, če želite odgovor)',
	'contactpage-includeip' => 'Vključi moj IP-naslov v tem sporočilu.',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'contactpage' => 'Страница за контакт',
	'contactpage-desc' => '[[Special:Contact|Контакт-форма за посетиоце]]',
	'contactpage-title' => 'Контакт',
	'contactpage-pagetext' => 'Молимо Вас да користите форму испод да нас контактирате.',
	'contactpage-legend' => 'Пошаљи е-поруку',
	'contactpage-defsubject' => 'Порука за контакт',
	'contactpage-subject-and-sender' => '$1 (од $2)',
	'contactpage-fromname' => 'Ваше име: *',
	'contactpage-fromaddress' => 'Ваша е-адреса: **',
	'contactpage-formfootnotes' => '* необавезно<br />
** необавезно, али потребно ако желите да добијете одговор',
	'contactpage-fromname-required' => 'Ваше име:',
	'contactpage-fromaddress-required' => 'Е-пошта:',
	'contactpage-formfootnotes-required' => 'Сва поља су обавезна.',
	'contactpage-captcha' => 'Молимо Вас да решите CAPTCHA-у, да бисте послали поруку ([[Special:Captcha/help|више информација]])',
	'contactpage-captcha-failed' => 'CAPTCHA тест није прошао! ([[Special:Captcha/help|више информација]])',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Michaello
 * @author Rancher
 * @author Жељко Тодоровић
 */
$messages['sr-el'] = array(
	'contactpage-desc' => '[[Special:Contact|Kontakt-forma za posetioce]]',
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Molimo Vas da koristite formu ispod da nas kontaktirate.',
	'contactpage-legend' => 'Pošalji e-poruku',
	'contactpage-subject-and-sender' => '$1 (od $2)',
	'contactpage-fromname' => 'Vaše ime: *',
	'contactpage-fromaddress' => 'Vaš mejl: **',
	'contactpage-formfootnotes' => '* neobavezno<br />
** neobavezno, ali potrebno ako želite da dobijete odgovor',
	'contactpage-fromname-required' => 'Vaše ime:',
	'contactpage-fromaddress-required' => 'E-pošta:',
	'contactpage-formfootnotes-required' => 'Sva polja su obavezna.',
	'contactpage-captcha' => 'Molimo Vas da rešite CAPTCHA-u, da biste poslali poruku ([[Special:Captcha/help|više informacija]])',
	'contactpage-captcha-failed' => 'CAPTCHA test nije prošao! ([[Special:Captcha/help|više informacija]])',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'contactpage' => 'Kontaktsiede',
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Mäd dit Formular koast du uus Ättergjuchte toukuume läite.',
	'contactpage-defsubject' => 'Kontakt-Ättergjucht',
	'contactpage-subject-and-sender' => '$1 (fon $2)',
	'contactpage-fromname' => 'Din Noome *', # Fuzzy
	'contactpage-fromaddress' => 'Dien E-Mail Adresse **', # Fuzzy
	'contactpage-formfootnotes' => '* optional<br />
** optional, is oawers nöödich, uum die oantwoudje tou konnen',
	'contactpage-captcha' => 'Uum ju Ättergjucht seende tou konnen, löös dät Captcha ([[Special:Captcha/help|wiedere Informatione]])',
	'contactpage-captcha-failed' => 'Captcha-Test nit besteen! ([[Special:Captcha/help|wiedere Informatione]])',
);

/** Sundanese (Basa Sunda)
 * @author Irwangatot
 * @author Kandar
 */
$messages['su'] = array(
	'contactpage-pagetext' => 'Mangga eusian formulir di handap pikeun ngontak ka kami.',
	'contactpage-subject-and-sender' => '$1 (ti $2)',
	'contactpage-fromname' => 'ngaran anjeun *', # Fuzzy
	'contactpage-fromaddress' => 'surélék anjeun **', # Fuzzy
);

/** Swedish (svenska)
 * @author Ainali
 * @author Boivie
 * @author Dafer45
 * @author Lejonel
 * @author Lokal Profil
 * @author M.M.S.
 * @author Najami
 * @author לערי ריינהארט
 */
$messages['sv'] = array(
	'contactpage' => 'Kontaktsida',
	'contactpage-desc' => '[[Special:Contact|Kontaktformulär för besökare]]',
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Använd formuläret härunder för att kontakta oss.',
	'contactpage-legend' => 'Skicka e-post',
	'contactpage-defsubject' => 'Kontaktmeddelande',
	'contactpage-subject-and-sender' => '$1 (från $2)',
	'contactpage-subject-and-sender-withip' => ' $1 (från $2 på $3)',
	'contactpage-fromname' => 'Ditt namn:',
	'contactpage-fromaddress' => 'Din e-postadress:',
	'contactpage-formfootnotes' => '(behövs om du vill ha ett svar)',
	'contactpage-includeip' => 'Inkludera min IP-adress i detta meddelande.',
);

/** Swahili (Kiswahili)
 * @author Kwisha
 */
$messages['sw'] = array(
	'contactpage-title' => 'Mawasiliano',
	'contactpage-legend' => 'Tuma barua pepe',
	'contactpage-fromname' => 'Jina lako: *',
	'contactpage-fromaddress' => 'Barua pepe yako: **',
);

/** Tamil (தமிழ்)
 * @author Jayarathina
 * @author Shanmugamp7
 * @author TRYPPN
 */
$messages['ta'] = array(
	'contactpage' => 'தொடர்பு பக்கம்',
	'contactpage-desc' => '[[Special:தொடர்பு|தொடர்பு படிவம் பார்வையாளர்களுக்கு]]', # Fuzzy
	'contactpage-title' => 'தொடர்பு கொள்',
	'contactpage-pagetext' => 'எங்களை தொடர்புகொள்ள கீழேயுள்ள படிவத்தை பயன்படுத்தவும்.',
	'contactpage-legend' => 'மின்னஞ்சலை அனுப்பவும்',
	'contactpage-defsubject' => 'தொடர்பு தகவல்',
	'contactpage-subject-and-sender' => '$1($2 லிருந்து)',
	'contactpage-subject-and-sender-withip' => '$1(லிருந்து $2  $3க்கு)',
	'contactpage-fromname' => 'உங்கள் பெயர்:',
	'contactpage-fromaddress' => 'உங்கள் மின்னஞ்சல்:',
	'contactpage-includeip' => 'இந்த தகவலில் எனது IP முகவரியை  சேர்க்கவும்.',
);

/** Telugu (తెలుగు)
 * @author Ravichandra
 * @author Veeven
 */
$messages['te'] = array(
	'contactpage' => 'సంప్రదింపుపేజీ',
	'contactpage-desc' => '[[Special:Contact|సందర్శకుల సంప్రదింపు ఫారం]]',
	'contactpage-title' => 'సంప్రదించండి',
	'contactpage-pagetext' => 'మమ్మల్ని సంప్రదించడానికి క్రిందనిచ్చిన ఫారం ఉపయోగించండి.',
	'contactpage-legend' => 'ఈమెయిలు పంపండి',
	'contactpage-defsubject' => 'సంప్రదింపు సందేశం',
	'contactpage-subject-and-sender' => '$1 ($2 నుండి)',
	'contactpage-subject-and-sender-withip' => '$1 ($3 వద్ద $2 నుండి)',
	'contactpage-fromname' => 'మీ పేరు:',
	'contactpage-fromaddress' => 'మీ ఈ-మెయిల్: **',
	'contactpage-formfootnotes' => '(మీకు జవాబు కావాలంటే మాత్రం తప్పనిసరి)',
	'contactpage-includeip' => 'ఈ సందేశంలో నా ఐపీ చిరునామాని చేర్చు.',
);

/** Tajik (Cyrillic script) (тоҷикӣ)
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'contactpage' => 'СаҳифаиТамос',
	'contactpage-title' => 'Алоқа',
	'contactpage-pagetext' => 'Лутфан барои дар алоқа будан бо мо аз форми зер истифода кунед.',
	'contactpage-defsubject' => 'Паёми Алоқа',
	'contactpage-subject-and-sender' => '$1 (аз $2)',
	'contactpage-fromname' => 'номи шумо *', # Fuzzy
	'contactpage-fromaddress' => 'почтаи электронии шумо **', # Fuzzy
);

/** Tajik (Latin script) (tojikī)
 * @author Liangent
 */
$messages['tg-latn'] = array(
	'contactpage' => 'SahifaiTamos',
	'contactpage-title' => 'Aloqa',
	'contactpage-pagetext' => 'Lutfan baroi dar aloqa budan bo mo az formi zer istifoda kuned.',
	'contactpage-defsubject' => 'Pajomi Aloqa',
	'contactpage-subject-and-sender' => '$1 (az $2)',
);

/** Thai (ไทย)
 * @author Harley Hartwell
 * @author Horus
 * @author Woraponboonkerd
 */
$messages['th'] = array(
	'contactpage' => 'หน้าติดต่อ',
	'contactpage-desc' => '[[Special:Contact|แบบการติดต่อสำหรับผู้เยื่ยมชม]]',
	'contactpage-title' => 'ติดต่อ',
	'contactpage-pagetext' => 'กรุณาใช้แบบด้านล่างนี้เพื่อติดต่อเรา',
	'contactpage-legend' => 'ส่งอีเมล',
	'contactpage-defsubject' => 'ข้อความติดต่อ',
	'contactpage-subject-and-sender' => '$1 (จาก $2)',
	'contactpage-subject-and-sender-withip' => '$1 (จาก $2 ที่ $3)',
	'contactpage-fromname' => 'ชื่อของคุณ:',
	'contactpage-fromaddress' => 'ที่อยู่อีเมลของคุณ:',
	'contactpage-formfootnotes' => '(จำเป็นหากคุณต้องการคำตอบ)',
	'contactpage-includeip' => 'รวมเลขที่อยู่ไอพีของฉันในข้อความนี้',
);

/** Turkmen (Türkmençe)
 * @author Hanberke
 */
$messages['tk'] = array(
	'contactpage' => 'Kontakt sahypasy',
	'contactpage-desc' => '[[Special:Contact|Zyýaratçylar üçin kontakt formy]]',
	'contactpage-title' => 'Kontakt',
	'contactpage-pagetext' => 'Biziň bilen habarlaşmak üçin aşakdaky formy ulanyň.',
	'contactpage-legend' => 'E-poçta iber',
	'contactpage-defsubject' => 'Kontakt habarlaşygy',
	'contactpage-subject-and-sender' => '$1 ($2-dan/den)',
	'contactpage-subject-and-sender-withip' => '$1 (gelýän ýeri: $3 IP adresindäki $2 )',
	'contactpage-fromname' => 'Adyňyz: *',
	'contactpage-fromaddress' => 'E-poçtaňyz: **',
	'contactpage-formfootnotes' => '* islege görä<br />
** islege görä, ýöne jogap isleýän bolsaňyz gerek',
	'contactpage-fromname-required' => 'Adyňyz:',
	'contactpage-fromaddress-required' => 'E-poçtaňyz:',
	'contactpage-formfootnotes-required' => 'Ähli meýdançalar hökmanydyr.',
	'contactpage-captcha' => 'Habarlaşygy ibermek üçin, captcha-ny çözüň ([[Special:Captcha/help|has köp maglumat]])',
	'contactpage-captcha-failed' => 'Captcha synagy şowsuz! ([[Special:Captcha/help|has köp maglumat]])',
	'contactpage-includeip' => 'Bu habara meniň IP adresimi goş.',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'contactpage' => 'Pahina ng pakikipag-ugnayan',
	'contactpage-desc' => '[[Special:Contact|Pormularyo ng pakikipag-ugnayan para sa mga panauhin]]',
	'contactpage-title' => 'Makipag-ugnayan',
	'contactpage-pagetext' => 'Pakigamit ang pormularyo sa ibaba upang makipag-ugnayan sa amin.',
	'contactpage-legend' => 'Magpadala ng e-liham',
	'contactpage-defsubject' => 'Mensahe ng pakikipag-ugnayan',
	'contactpage-subject-and-sender' => '$1 (mula sa $2)',
	'contactpage-subject-and-sender-withip' => '$1 (mula sa $2 na nasa $3)',
	'contactpage-fromname' => 'Pangalan mo: *',
	'contactpage-fromaddress' => 'E-liham mo: **',
	'contactpage-formfootnotes' => '* maaaring wala nito<br />
** maaaring wala nito ngunit kailangan kung kailangan mo ng tugon',
	'contactpage-fromname-required' => 'Pangalan mo:',
	'contactpage-fromaddress-required' => 'E-liham mo:',
	'contactpage-formfootnotes-required' => 'Kailangan ang lahat ng mga hanay.',
	'contactpage-captcha' => "Upang makapagpadala ng mensahe, pakilutas ang \"hulihin ka\" o ''captcha'' ([[Special:Captcha/help|mas marami pang kabatiran]])",
	'contactpage-captcha-failed' => 'Nabigo ang captcha! ([[Special:Captcha/help|mas marami pang kabatiran]])',
	'contactpage-includeip' => 'Isama ang aking adres ng IP sa mensaheng ito.',
);

/** Turkish (Türkçe)
 * @author Emperyan
 * @author Homonihilis
 * @author Joseph
 * @author Karduelis
 * @author Mach
 * @author Manco Capac
 */
$messages['tr'] = array(
	'contactpage' => 'İrtibat sayfası',
	'contactpage-desc' => '[[Special:Contact|Ziyaretçiler için irtibat formu]]',
	'contactpage-title' => 'İrtibat',
	'contactpage-pagetext' => 'İrtibat için lütfen aşağıdaki formu kullanın.',
	'contactpage-legend' => 'E-posta gönderin',
	'contactpage-defsubject' => 'İrtibat mesajı',
	'contactpage-subject-and-sender' => "$1 ($2'den)",
	'contactpage-subject-and-sender-withip' => "$1 ($3'teki $2'den)",
	'contactpage-fromname' => 'İsminiz: *',
	'contactpage-fromaddress' => 'E-postanız: **',
	'contactpage-formfootnotes' => '* isteğe bağlı<br />
** isteğe bağlı ancak cevap istiyorsanız gerekli',
	'contactpage-fromname-required' => 'Adınız:',
	'contactpage-fromaddress-required' => 'E-posta adresiniz:',
	'contactpage-formfootnotes-required' => 'Bütün alanlar gereklidir.',
	'contactpage-captcha' => 'Mesajı göndermek için, lütfen güvenlik kodunu çözün ([[Special:Captcha/help|daha fazla bilgi]])',
	'contactpage-captcha-failed' => 'Captcha testi başarısız oldu! ([[Special:Captcha/help|daha fazla bilgi]])',
	'contactpage-includeip' => 'Mesaja IP adresimi ekle.',
);

/** Tatar (Cyrillic script) (татарча)
 * @author Ильнар
 */
$messages['tt-cyrl'] = array(
	'contactpage' => 'Элемтә бите',
	'contactpage-desc' => '[[Special:Contact|Караучылар өчен форма]]',
	'contactpage-title' => 'Элемтә',
	'contactpage-pagetext' => 'Зинһар, астагы форманы безнең белән элемтәгә керү өчен кулланыгыз.',
	'contactpage-legend' => 'Хат җибәрү',
	'contactpage-defsubject' => 'Хат',
	'contactpage-subject-and-sender' => '$1 ($2 башлап)',
	'contactpage-subject-and-sender-withip' => '$1 ($2  $3 юлламасыннан)',
	'contactpage-fromname' => 'Сезнең исемегез: *',
	'contactpage-fromaddress' => 'Сезнең эл. почта юлламагыз: **',
	'contactpage-formfootnotes' => '* мәҗбүри түгел<br />
** мәҗбүри түгел, ләкин сезгә җавап бирү өчен кирәк',
	'contactpage-fromname-required' => 'Сезнең исемегез:',
	'contactpage-fromaddress-required' => 'Сезнең эл. почта юлламагыз:',
	'contactpage-formfootnotes-required' => 'Барлык кырлар да тутырылган булырга тиеш.',
	'contactpage-captcha' => 'Хатны җибәрү өчен, зинһар, CAPTCHA тикшерүен узыгыз ([[Special:Captcha/help|нәрсә бу?]])',
	'contactpage-captcha-failed' => 'CAPTCHA тикшерүе үтмәде! ([[Special:Captcha/help|нәрсә бу?]])',
	'contactpage-includeip' => 'Минем IP-юлламаны бу хат белән җибәрергә.',
);

/** Udmurt (удмурт)
 * @author Kaganer
 */
$messages['udm'] = array(
	'contactpage-defsubject' => 'Ивортон',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'contactpage-title' => 'ئالاقەداش',
	'contactpage-legend' => 'تورخەت يوللا',
	'contactpage-fromname-required' => 'ئاتىڭىز:',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 * @author NickK
 * @author Prima klasy4na
 * @author Тест
 */
$messages['uk'] = array(
	'contactpage' => 'Сторінка контакту',
	'contactpage-desc' => '[[Special:Contact|Форма для відвідувачів]]',
	'contactpage-title' => 'Контакт',
	'contactpage-pagetext' => "Будь ласка, використовуйте цю форму, щоб зв'язатися з нами.",
	'contactpage-legend' => 'Надіслати листа електронною поштою',
	'contactpage-defsubject' => 'Повідомлення',
	'contactpage-subject-and-sender' => '$1 (з $2)',
	'contactpage-subject-and-sender-withip' => '$1 (від $2 з $3)',
	'contactpage-fromname' => "Ваше ім'я:",
	'contactpage-fromaddress' => 'Ваша адреса електронної пошти:',
	'contactpage-formfootnotes' => '(вимагається, якщо ви хочете отримати відповідь)',
	'contactpage-includeip' => 'Додати мою IP-адресу до цього повідомлення.',
);

/** Urdu (اردو)
 * @author محبوب عالم
 */
$messages['ur'] = array(
	'contactpage' => 'صفحۂ رابطہ',
	'contactpage-title' => 'رابطہ کریں',
	'contactpage-pagetext' => 'ہم سے رابطہ کرنے کیلئے درج ذیل تشکیلہ استعمال کریں',
	'contactpage-defsubject' => 'پیغام',
	'contactpage-fromname' => 'آپ کا نام: *',
	'contactpage-fromaddress' => 'آپکا برقی پتہ: **',
	'contactpage-fromname-required' => 'آپکا نام:',
	'contactpage-fromaddress-required' => 'آپکا برقی پتہ:',
	'contactpage-formfootnotes-required' => 'تمام جگہیں پُر کرنا ضروری ہیں.',
);

/** vèneto (vèneto)
 * @author Candalua
 * @author GatoSelvadego
 */
$messages['vec'] = array(
	'contactpage' => 'Contatto',
	'contactpage-desc' => '[[Special:Contact|Modulo de contatto par i visitadori]]',
	'contactpage-title' => 'Contato',
	'contactpage-pagetext' => 'Par piaser, par contatarne doparè el mòdulo qua soto.',
	'contactpage-legend' => 'Manda e-mail',
	'contactpage-defsubject' => 'Messajo',
	'contactpage-subject-and-sender' => '$1 (da $2)',
	'contactpage-subject-and-sender-withip' => '$1 (da $2 a $3)',
	'contactpage-fromname' => 'El to nome: *',
	'contactpage-fromaddress' => 'La to e-mail: **',
	'contactpage-formfootnotes' => '* canpo mia obligatorio<br />
** canpo obligatorio se te voli na risposta',
	'contactpage-fromname-required' => 'El to nome:',
	'contactpage-fromaddress-required' => 'La to e-mail:',
	'contactpage-formfootnotes-required' => 'Tuti i canpi i xe obligatori.',
	'contactpage-captcha' => 'Par mandar el messajo, par piaser risolvi el captcha ([[Special:Captcha/help|ulteriori informassion]])',
	'contactpage-captcha-failed' => 'Test captcha mia riussìo! ([[Special:Captcha/help|ulteriori informassion]])',
	'contactpage-includeip' => 'Includi el me indirisso IP in sto messajo.',
);

/** Veps (vepsän kel’)
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'contactpage-legend' => 'Oigeta e-kirjeine',
	'contactpage-defsubject' => 'Tedotuz',
	'contactpage-subject-and-sender' => '$1 (oigendai: $2)',
	'contactpage-fromname' => 'Teiden nimi: *',
	'contactpage-fromaddress' => 'Teiden e-počtan aderes: **',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 * @author לערי ריינהארט
 */
$messages['vi'] = array(
	'contactpage' => 'Liên hệ',
	'contactpage-desc' => '[[Special:Contact|Mẫu liên hệ cho khách ghé thăm]]',
	'contactpage-title' => 'Liên lạc',
	'contactpage-pagetext' => 'Xin hãy sử dụng biểu mẫu ở dưới để liên lạc với chúng tôi.',
	'contactpage-legend' => 'Gửi thư điện tử',
	'contactpage-defsubject' => 'Tin nhắn liên hệ',
	'contactpage-subject-and-sender' => '$1 (gửi từ $2)',
	'contactpage-subject-and-sender-withip' => '$1 (từ $2 lúc $3)',
	'contactpage-fromname' => 'Tên của bạn:',
	'contactpage-fromaddress' => 'Địa chỉ thư điện tử của bạn:',
	'contactpage-formfootnotes' => '(cần thiết nếu bạn muốn nhận được câu trả lời)',
	'contactpage-includeip' => 'Bao gồm địa chỉ IP của tôi trong thư này.',
);

/** Volapük (Volapük)
 * @author Malafaya
 * @author Smeira
 */
$messages['vo'] = array(
	'contactpage' => 'Kosikamapad',
	'contactpage-desc' => 'Kosikamafomet visitanes',
	'contactpage-title' => 'Kosikam',
	'contactpage-pagetext' => 'Gebolös fometi dono ad kosikön ko obs.',
	'contactpage-legend' => 'Sedön penedi leäktronik',
	'contactpage-defsubject' => 'Kosikamanun',
	'contactpage-subject-and-sender' => '$1 (de $2)',
	'contactpage-fromname' => 'Nem olik:',
	'contactpage-fromaddress' => 'Ladet leäktronik olik: **', # Fuzzy
);

/** Walloon (walon)
 * @author Srtxg
 */
$messages['wa'] = array(
	'contactpage' => "Pådje d' atôtchance",
	'contactpage-desc' => "[[Special:Contact|Formulrece d' atôtchance po les viziteus]]",
	'contactpage-title' => 'Atôtchî',
	'contactpage-pagetext' => "Eployîz l' formulrce chal pa dzo po nos atôtchî.",
	'contactpage-legend' => 'Evoyî èn emile',
	'contactpage-defsubject' => 'Messaedje po-z atôtchî',
	'contactpage-subject-and-sender' => '$1 (di $2)',
	'contactpage-subject-and-sender-withip' => '$1 (di $2 a $3)',
	'contactpage-fromname' => 'Vosse no: *',
	'contactpage-fromaddress' => 'Vost emile: **',
	'contactpage-formfootnotes' => "* opcionel<br />
** opcionel mins vos l' divoz mete si vos vloz rçure ene response",
	'contactpage-fromname-required' => 'Vosse no:',
	'contactpage-fromaddress-required' => 'Vost emile:',
	'contactpage-formfootnotes-required' => 'I fåt rimpli tos les tchamps.',
	'contactpage-captcha' => "Po-z evoyî l' messaedje, vos dvoz responde å «captcha» ([[Special:Captcha/help|aidance]])",
	'contactpage-captcha-failed' => "Vos n' avoz nén reyussi l' «captcha»! ([[Special:Captcha/help|aidance]])",
	'contactpage-includeip' => "Mete l' adresse IP da minne dins l' messaedje.",
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'contactpage-title' => 'קאנטאקט',
	'contactpage-legend' => 'שיקן ע־פאסט',
	'contactpage-fromname' => 'אייער נאמען:',
	'contactpage-fromaddress' => 'אייער ע-פאסט:',
);

/** Cantonese (粵語)
 * @author Antonytse
 * @author Shinjiman
 */
$messages['yue'] = array(
	'contactpage' => '聯絡頁',
	'contactpage-title' => '聯絡',
	'contactpage-pagetext' => '請用下面嘅表格去聯絡我哋。',
	'contactpage-defsubject' => '聯絡訊息',
	'contactpage-subject-and-sender' => '$1 (自$2)',
	'contactpage-fromname' => '你嘅名：*',
	'contactpage-fromaddress' => '你嘅電郵：**',
	'contactpage-formfootnotes' => '* 可選<br />
** 可選，如果你想答嘅話',
	'contactpage-captcha' => '要傳呢個訊息，請先解決 captcha ([[Special:Captcha/help|更多資料]])',
	'contactpage-captcha-failed' => 'Captcha 測試失敗! ([[Special:Captcha/help|更多資訊]])',
);

/** Zhuang (Vahcuengh)
 * @author Biŋhai
 */
$messages['za'] = array(
	'contactpage' => 'Yieb ciepgyaeuj',
	'contactpage-title' => 'Ciepgyaeuj',
	'contactpage-legend' => 'Fat e-mail',
	'contactpage-fromname' => 'Mingzcoh mwngz:*',
	'contactpage-fromaddress' => 'E-mail mwngz:**',
	'contactpage-fromname-required' => 'Mingzcoh mwngz',
	'contactpage-fromaddress-required' => 'E-mail mwngz:',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Gzdavidwong
 * @author Liangent
 * @author Liuxinyu970226
 * @author Shinjiman
 * @author Wmr89502270
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'contactpage' => '联系我们',
	'contactpage-desc' => '[[Special:Contact|供访问者使用的联系表单]]',
	'contactpage-title' => '联系',
	'contactpage-pagetext' => '请用以下的表格去联络我们。',
	'contactpage-legend' => '发送电邮',
	'contactpage-defsubject' => '联系信息',
	'contactpage-subject-and-sender' => '$1 （自$2）',
	'contactpage-subject-and-sender-withip' => '$1 (由$2在$3)',
	'contactpage-fromname' => '您的名字：',
	'contactpage-fromaddress' => '您的邮箱：',
	'contactpage-formfootnotes' => '（可选，如果您想回答的话）',
	'contactpage-includeip' => '在此邮件中包含我的IP位置资料。',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Gzdavidwong
 * @author Horacewai2
 * @author Liangent
 * @author Shinjiman
 * @author Waihorace
 * @author Wrightbus
 */
$messages['zh-hant'] = array(
	'contactpage' => '聯絡頁面',
	'contactpage-desc' => '[[Special:Contact|供訪問者使用的聯繫表單]]',
	'contactpage-title' => '聯絡',
	'contactpage-pagetext' => '請用以下的表格去聯絡我們。',
	'contactpage-legend' => '傳送電郵',
	'contactpage-defsubject' => '聯絡訊息',
	'contactpage-subject-and-sender' => '$1 （自$2）',
	'contactpage-subject-and-sender-withip' => '$1 (由$2在$3)',
	'contactpage-fromname' => '您的名字： *',
	'contactpage-fromaddress' => '您的郵箱：**',
	'contactpage-formfootnotes' => '* 可選<br />
** 可選，如果您想回答的話',
	'contactpage-fromname-required' => '您的名字：',
	'contactpage-fromaddress-required' => '您的電郵：',
	'contactpage-formfootnotes-required' => '所有字段都是必需的。',
	'contactpage-captcha' => '要傳送這個訊息，請先解決這個 captcha （[[Special:Captcha/help|更多資訊]]）',
	'contactpage-captcha-failed' => 'Captcha 測試失敗! （[[Special:Captcha/help|更多資訊]]）',
	'contactpage-includeip' => '在此郵件中包含我的IP位置資料。',
);
