function googleTranslateElementInit2() { new google.translate.TranslateElement({ pageLanguage: 'pt', autoDisplay: false }, 'google_translate_element2'); } if (!window.gt_translate_script) { window.gt_translate_script = document.createElement('script'); gt_translate_script.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2'; document.body.appendChild(gt_translate_script); }
function GTranslateGetCurrentLang() { var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)'); return keyValue ? keyValue[2].split('/')[2] : null; }
function GTranslateFireEvent(element, event) { try { if (document.createEventObject) { var evt = document.createEventObject(); element.fireEvent('on' + event, evt) } else { var evt = document.createEvent('HTMLEvents'); evt.initEvent(event, true, true); element.dispatchEvent(evt) } } catch (e) { } }
function doGTranslate(lang_pair) { if (lang_pair.value) lang_pair = lang_pair.value; if (lang_pair == '') return; var lang = lang_pair.split('|')[1]; if (GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0]) return; if (typeof ga == 'function') { ga('send', 'event', 'GTranslate', lang, location.hostname + location.pathname + location.search); } var teCombo; var sel = document.getElementsByTagName('select'); for (var i = 0; i < sel.length; i++)if (sel[i].className.indexOf('goog-te-combo') != -1) { teCombo = sel[i]; break; } if (document.getElementById('google_translate_element2') == null || document.getElementById('google_translate_element2').innerHTML.length == 0 || teCombo.length == 0 || teCombo.innerHTML.length == 0) { setTimeout(function () { doGTranslate(lang_pair) }, 500) } else { teCombo.value = lang; GTranslateFireEvent(teCombo, 'change'); GTranslateFireEvent(teCombo, 'change') } }
(function gt_jquery_ready() { if (!window.jQuery || !jQuery.fn.click) return setTimeout(gt_jquery_ready, 20); jQuery(document).ready(function () { var allowed_languages = ["en", "pt"]; var accept_language = navigator.language.toLowerCase() || navigator.userLanguage.toLowerCase(); switch (accept_language) { case 'zh-cn': var preferred_language = 'zh-CN'; break; case 'zh': var preferred_language = 'zh-CN'; break; case 'zh-tw': var preferred_language = 'zh-TW'; break; case 'zh-hk': var preferred_language = 'zh-TW'; break; case 'he': var preferred_language = 'iw'; break; default: var preferred_language = accept_language.substr(0, 2); break; }if (preferred_language != 'pt' && GTranslateGetCurrentLang() == null && document.cookie.match('gt_auto_switch') == null && allowed_languages.indexOf(preferred_language) >= 0) { doGTranslate('pt|' + preferred_language); document.cookie = 'gt_auto_switch=1; expires=Thu, 05 Dec 2030 08:08:08 UTC; path=/;'; } }); })();


