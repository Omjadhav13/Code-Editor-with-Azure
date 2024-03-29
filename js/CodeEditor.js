var h = ace.edit('htmlcode');
h.getSession().setMode('ace/mode/html');
h.setTheme('ace/theme/clouds');
/*h.setTheme("ace/theme/terminal");*/
h.getSession().setTabSize(4);

var c = ace.edit('csscode');
c.getSession().setMode('ace/mode/css');
c.setTheme('ace/theme/clouds');
/*c.setTheme("ace/theme/terminal");*/
c.getSession().setTabSize(4);

var j = ace.edit('jscode');
j.getSession().setMode('ace/mode/javascript');
j.setTheme('ace/theme/clouds');
/*j.setTheme("ace/theme/terminal");*/
j.getSession().setTabSize(4);

const run = document.querySelector('.run-btn');
function runOutput() {
	run.onfullscreenchange;
	let htmlCode = h.getValue();
	let cssCode = '<style>' + c.getValue() + '</style>';
	let jsCode = '<scri' + 'pt>' + j.getValue() + '</scri' + 'pt>';
	let previewWindow = document.querySelector('#output').contentWindow.document;
	previewWindow.open();
	previewWindow.write(htmlCode + cssCode + jsCode);
	previewWindow.close();
}

function consoleOpen() {
	const c = document.querySelector('.console-div');
	const o = document.getElementById('output');
	if (c.style.display == 'none') {
		c.style.display = 'flex';
		o.style.height = '80%';
	} else {
		c.style.display = 'none';
		o.style.height = '100%';
	}
	error = document.querySelector('.ace_error');
	document.querySelector('console-message').write(error);
}

function consoleClose() {
	const c = document.querySelector('.console-div');
	const o = document.getElementById('output');
	if (c.style.display == 'flex') {
		c.style.display = 'none';
		o.style.height = '100%';
	}
}

function newOutputWindow() {
	nw = window.open();
	let htmlCode = h.getValue();
	let cssCode = '<style>' + c.getValue() + '</style>';
	let jsCode = '<scri' + 'pt>' + j.getValue() + '</scri' + 'pt>';
	nw.open();
	nw.document.write(htmlCode + cssCode + jsCode);
	nw.close;
}
