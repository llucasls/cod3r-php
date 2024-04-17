for (const folder of document.querySelectorAll('[wm-folder]')) {
    folder.onclick = function({ target }) {
	const { nextElementSibling: sibling } = target;
	const { display } = sibling.style;
	sibling.style.display = display !== 'none' ? 'none' : 'block';
    }
}
