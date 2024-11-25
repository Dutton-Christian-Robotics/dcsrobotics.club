String.uuid = function() {
	return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
		var r = crypto.getRandomValues(new Uint8Array(1))[0]%16|0, v = c == 'x' ? r : (r&0x3|0x8);
		return v.toString(16);
	});
}


export class DomElement {
	
	constructor(s) {
		if (typeof s == "string") {
			this.el = document.querySelector(s)
		} else {
			this.el = s
		}
		this.listeners = new Map()
	}
	
	static all(s) {
		return Array.from(document.querySelectorAll(s)).map(x => new DomElement(x))
	}
	
	static create(t) {
		return new DomElement(document.createElement(t))
	}
	
	parent() {
		return new DomElement(this.el.parentNode);
	}
	
	children() {
		return Array.from(this.el.children).map((n) => el(n));
	}
	
	get isValid() {
		return !!this.el;
	}
	
	get value() {
		if (['INPUT', 'SELECT', 'TEXTAREA'].includes(this.el.tagName)) {
			return this.el.value
		} else if (this.el.hasAttribute('value')) {
			return this.el.getAttribute('value');

		} else {
			return this.el.innerHTML
		}
		
	}
	
	get hasText() {
		return /\w/.test(this.el.value)
	}
	
	get isBlank() {
		return !/\w/.test(this.el.value)
	}
	
	get files() {
		return this.el.files
	}

	
	get isHidden() {
		return this.el.classList.contains("d-none")
	}
	
	set value(v) {
		if (['INPUT', 'SELECT', 'TEXTAREA'].includes(this.el.tagName)) {
			this.el.value = v
		} else {
			this.el.innerHTML = v
		}
	}
	
	get checked() {
		if ((this.el.tagName == "INPUT") && (this.el.getAttribute('type') == "checkbox")) {
			return this.el.checked
		} else {
			return null
		}
	}
	
	set checked(b) {
		if ((this.el.tagName == "INPUT") && (this.el.getAttribute('type') == "checkbox")) {
			this.el.checked = b
		}
	}

	
	setValue(v) {
		this.value = v
		return this
	}
	
	setText(v) {
		return this.setValue(v);
	}
	
	eraseContents() {
		this.value = ""
		return this
	}
	
	qs(s) {
		return new DomElement(this.el.querySelector(s))
	}
	
	qsAll(s) {
		return Array.from(this.el.querySelectorAll(s)).map(e => new DomElement(e))
	}
	
	closest(s) {
		return el(this.el.closest(s))
	}
	
	appendAfter(newEl) {
		this.parent().el.insertBefore(newEl.el, this.el.nextSibling);

	}

	insertBefore(newEl, referenceEl) {
		this.el.insertBefore(newEl.el, referenceEl.el);
	}
	
	append(el) {
		if (arguments.length > 1) {
			el = [...arguments]
		} else if (!Array.isArray(el)) {
			el = [el]
		}
		
		el.forEach(x => {
			if (x == null) {
				//
			} else if (typeof x == "string") {
				this.el.append(DomElement.create('span').setValue(x).el)
			} else if (x?.tagName) {
				this.el.append(x)
			} else {
				this.el.append(x.el)
			}	
		})
		return this
	}
	
	show(showClass = "d-flex") {
		this.el.classList.add(showClass)
		this.el.classList.remove("d-none")	
		return this
	}
	
	hide(showClass = "d-flex") {
		this.el.classList.remove(showClass)
		this.el.classList.add("d-none")
		return this			
	}
	
	get classList() {
		return this.el.classList
	}
	
	setAttribute(key, val) {
		let args
		if (arguments.length > 2) {
			args = [...arguments]
		} else {
			args = [[key,val]]
		}
		args.forEach(([k,v]) => this.el?.setAttribute(k, v))
		return this
	}
	
	setStyle(key, val) {
		this.el.style[key] = val;
		return this;
	}
	
	setId(val) {
		return this.setAttribute('id', val);
	}
	
	addClass(c) {
		if (arguments.length > 1) {
			c = [...arguments];
		} else if (/ /.test(c)) {
			c = c.split(" ");
		} else if (!Array.isArray(c)) {
			c = [c];
		}
		c.forEach(x => hasText(x) && this.el.classList.add(x))
		return this
	}
	
	removeClass(c) {
		if (arguments.length > 1) {
			c = [...arguments]
		} else if (!Array.isArray(c)) {
			c = [c]
		}
		c.forEach(x => hasText(x) && this.el.classList.remove(x))
		return this

	}
	
	toggleClass(c, b = null) {
		let f
		if (arguments.length > 1) {
			c = [...arguments]
		} else if (!Array.isArray(c)) {
			c = [c]
		}
		
		if (b == null) {
			f = 'toggle'
		} else if (b === true) {
			f = 'add'
		} else if (b === false) {
			f = 'remove'
		}

		c.forEach(x => this.el.classList[f](x))
		return this
	}
	
	addEventListener(event, f, name = String.uuid()) {
		let key = `${event}/${name}`
		this.listeners.set(key, f)
		this.el?.addEventListener(event, f)
		return key
	}
	
	removeEventListener(key) {
		let [event, name] = key.split("/")
		let f = this.listeners.get(key)
		this.el?.removeEventListener(event, f)
	}
	
	onClick(f, name) {
		this.addEventListener('click', f, name)
		return this
	}
	
	doClick() {
		this.el.click()
		return this
	}
	
	select() {
		this.el.select()
	}
	
	remove() {
		this.el.remove()
	}
	
	scrollIntoView() {
		this.el.scrollIntoView()
	}
	
}

function pick(obj, fields = []) {// eslint-disable-line no-unused-vars
	let newObj = {}
	fields.forEach(f => {
		newObj[f] = obj[f]
	})
	return newObj
}

function extend(target, source, fields = []) {// eslint-disable-line no-unused-vars
	fields.forEach(f => {
		let targetKey = (typeof f == "string") ? f : f[0]
		let sourceKey = (typeof f == "string") ? f : f[1]
		target[targetKey] = source[sourceKey] ?? null
	})
}

function partition(arr, f) {
	let result = {}
	arr.forEach(x => {
		let value = f(x)
		if (result[value] === undefined) {
			result[value] = []
		}
		result[value].push(x)
	})
	return result
}

export function el(s) { // eslint-disable-line no-unused-vars
	return new DomElement(s)
}

function id(s) { // eslint-disable-line no-unused-vars
	return document.getElementById(s)
}

function hasText(v) { // eslint-disable-line no-unused-vars
	return (v != null) && /\S/.test(v)
}

function isNumeric(v) { // eslint-disable-line no-unused-vars
	return !isNaN(v)
}

export function h(n, txt = null) {
	const e = DomElement.create(`h${n}`);
	if (!!txt) {
		e.setValue(txt);
	}
	return e;

}

export function p(txt) { // eslint-disable-line no-unused-vars
	const dEl = DomElement.create('p');
	if (!!txt) {
		dEl.setValue(txt);
	}
	return dEl;
}
export function div(txt) { // eslint-disable-line no-unused-vars
	const dEl = DomElement.create('div');
	if (!!txt) {
		dEl.setValue(txt);
	}
	return dEl;
}

export function a(text, href = null, onclick = null) { // eslint-disable-line no-unused-vars
	let aEl = DomElement.create('a').setValue(text);
	if (!!href) {
		aEl = aEl.setAttribute("href", href);
	}
	if (!!onclick) {
		aEl = aEl.setAttribute("onclick", onclick);
	}
	return aEl;
}


export function span(t = null) { // eslint-disable-line no-unused-vars
	let sEl = DomElement.create('span');
	if (!!t) {
		sEl.setValue(t);
	}
	return sEl;
}

export function ul() { // eslint-disable-line no-unused-vars
	return DomElement.create('ul')
}

export function li() { // eslint-disable-line no-unused-vars
	return DomElement.create('li')
}

export function i(classes = '') {
	let iEl = DomElement.create('i');
	iEl.addClass(classes);
	return iEl;
}

export function button(classes = '') {
	let b = DomElement.create('button').setAttribute('type', 'button');
	b.addClass(classes);
	return b;
}

function debounce(func, wait, immediate) {  // eslint-disable-line no-unused-vars
	var timeout;
	
	return function executedFunction() {
		var context = this;
		var args = arguments;
	
		var later = function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
	
		var callNow = immediate && !timeout;
	
		clearTimeout(timeout);
	
		timeout = setTimeout(later, wait);
	
		if (callNow) func.apply(context, args);
	}
}

export function pluralize(n, text) {
	const nouns = text.split("|");
	if (nouns.length == 1) {
		nouns.push(`${nouns[0]}s`);
	}
	return n == 1 ? nouns[0] : nouns[1];
}
export function sortObjectArray(arr, key, reverse = false) {
	const sortOrder = reverse ? -1 : 1;
	return arr
		.sort((a, b) => {
			try {
				const aValue = typeof (a)[key] == "string" ? (a)[key].toLowerCase() : (a)[key];
				const bValue = typeof (b)[key] == "string" ? (b)[key].toLowerCase() : (b)[key];
				// @ts-ignore
				if (aValue < bValue) return sortOrder * -1;
				// @ts-ignore
				else if (aValue > bValue) return sortOrder * 1;
				else return 0;
			} catch (e) {
				return 0;
			}
		});

}