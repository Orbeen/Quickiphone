document.addEventListener('DOMContentLoaded', function () {
  var burger = document.querySelector('[data-qi-burger]');
  var nav = document.querySelector('[data-qi-nav]');
  if (burger && nav) burger.addEventListener('click', function () { nav.classList.toggle('open'); });

  // FAQ accordion, topic filter and search
  var items = [].slice.call(document.querySelectorAll('.qi-faq-item'));
  items.forEach(function (it) {
    it.querySelector('button').addEventListener('click', function () { it.classList.toggle('open'); });
  });
  var topic = 'All topics';
  function applyFilter() {
    var q = (document.querySelector('[data-qi-faq-search]') || { value: '' }).value.toLowerCase();
    items.forEach(function (it) {
      var okTopic = topic === 'All topics' || it.getAttribute('data-topic') === topic;
      var okText = !q || it.textContent.toLowerCase().indexOf(q) > -1;
      it.style.display = okTopic && okText ? '' : 'none';
    });
  }
  [].slice.call(document.querySelectorAll('.qi-topics button')).forEach(function (b) {
    b.addEventListener('click', function () {
      document.querySelectorAll('.qi-topics button').forEach(function (x) { x.classList.remove('on'); });
      b.classList.add('on');
      topic = b.textContent.trim();
      applyFilter();
    });
  });
  var s = document.querySelector('[data-qi-faq-search]');
  if (s) s.addEventListener('input', applyFilter);
});
