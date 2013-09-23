/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-facebook' : '&#xe000;',
			'icon-facebook-2' : '&#xe001;',
			'icon-twitter' : '&#xe002;',
			'icon-twitter-2' : '&#xe003;',
			'icon-about' : '&#xe004;',
			'icon-process-4' : '&#xe005;',
			'icon-process-3' : '&#xe006;',
			'icon-process-2' : '&#xe007;',
			'icon-process-1' : '&#xe008;',
			'icon-logo' : '&#xe009;',
			'icon-logo-g' : '&#xe00a;',
			'icon-casestudies' : '&#xe00b;',
			'icon-process-7' : '&#xe00c;',
			'icon-process-6' : '&#xe00d;',
			'icon-process-5' : '&#xe00e;',
			'icon-arrow' : '&#xe00f;',
			'icon-arrow-left' : '&#xe010;',
			'icon-arrow-right' : '&#xe011;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};