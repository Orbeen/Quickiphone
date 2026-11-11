// Destinations page: country / regional-pack picker and plan filters.
document.addEventListener('DOMContentLoaded', function () {
  var node = document.getElementById('qi-dest-data');
  if (!node) return;
  var D = JSON.parse(node.textContent);
  var $ = function (s) { return document.querySelector(s); };
  var $$ = function (s) { return [].slice.call(document.querySelectorAll(s)); };
  var mode = 'countries', cur = null, filter = '';
  function el(tag, cls, text) { var e = document.createElement(tag); if (cls) e.className = cls; if (text != null) e.textContent = text; return e; }
  function list() { return D[mode]; }
  function tiles() {
    var items = mode === 'countries' ? D.countries.filter(function (c) { return D.popular.indexOf(c.name) > -1; }) : D.regions;
    var box = $('[data-tiles]'); box.textContent = '';
    box.className = 'qi-tiles qi-tiles--' + items.length;
    items.forEach(function (c) {
      var b = el('button', 'qi-tile' + (cur && cur.name === c.name ? ' on' : ''));
      b.type = 'button'; b.style.backgroundImage = 'url("' + c.imgUrl + '")';
      b.appendChild(el('i', '', c.code)); b.appendChild(el('span', '', c.name));
      b.addEventListener('click', function () { choose(c.name); });
      box.appendChild(b);
    });
  }
  function options() {
    var s = $('[data-select]'); s.textContent = '';
    list().forEach(function (c) { var o = el('option', '', c.name); o.value = c.name; s.appendChild(o); });
    s.value = cur.name;
  }
  function plans() {
    var g = $('[data-plans]'); g.textContent = '';
    D.plans.forEach(function (p, i) {
      if (filter && p[0] !== filter) return;
      var c = el('article', 'qi-plan2' + (p[3] ? ' hot' : ''));
      if (p[3]) c.appendChild(el('em', '', 'Popular'));
      c.appendChild(el('small', '', p[0]));
      c.appendChild(el('b', 'gb', p[1] + ' GB'));
      c.appendChild(el('span', 'spd', '4G/5G Speed'));
      var d = el('div', 'days'); d.appendChild(el('strong', '', String(p[2]))); d.appendChild(el('span', '', 'Days')); c.appendChild(d);
      c.appendChild(el('small', 'lbl', 'One-time price'));
      c.appendChild(el('b', 'price', '$' + cur.prices[i].toFixed(2)));
      var a = el('a', 'qi-btn', 'Buy now'); a.href = D.cart; c.appendChild(a);
      g.appendChild(c);
    });
  }
  function render() {
    var reg = mode === 'regions';
    $('[data-kicker]').textContent = reg ? 'Multi-country eSIM plans' : 'Local eSIM plans';
    $('[data-title]').textContent = 'Explore ' + cur.name + '.';
    $('[data-tag]').textContent = cur.tag;
    $('[data-code]').textContent = cur.code;
    $('[data-pick-label]').textContent = reg ? 'Select your regional pack' : 'Select your country';
    $('[data-avail]').textContent = reg ? 'Available regional packages' : 'Available packages for';
    $('[data-name]').textContent = cur.name;
    $('[data-net]').textContent = cur.net;
    $('[data-hero]').style.backgroundImage = 'linear-gradient(90deg,rgba(0,0,0,.7),rgba(0,0,0,.2)),url("' + cur.imgUrl + '")';
    tiles(); options(); plans();
  }
  function choose(name) {
    cur = list().filter(function (c) { return c.name === name; })[0] || list()[0];
    render();
  }
  $$('.qi-seg button').forEach(function (b) {
    b.addEventListener('click', function () {
      mode = b.getAttribute('data-mode');
      $$('.qi-seg button').forEach(function (x) { x.classList.toggle('on', x === b); });
      cur = list()[0]; render();
    });
  });
  $('[data-select]').addEventListener('change', function (e) { choose(e.target.value); });
  $$('[data-filters] button').forEach(function (b) {
    b.addEventListener('click', function () {
      filter = b.getAttribute('data-f');
      $$('[data-filters] button').forEach(function (x) { x.classList.toggle('on', x === b); });
      plans();
    });
  });
  var start = (D.start || '').toLowerCase();
  cur = D.countries.filter(function (c) { return start && c.name.toLowerCase().indexOf(start) > -1; })[0] || D.countries[0];
  render();
});
