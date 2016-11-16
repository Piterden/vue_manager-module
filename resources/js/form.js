/*eslint semi:[2, always]*/
/*eslint space-after-keywords:[0]*/
/*eslint space-return-throw-case:[0]*/
/*eslint no-shadow-restricted-names:[0]*/

+(function(window, document, undefined) {

  var doOnModeChange = function(ev) {

    var textAreaSelector = '.tab-pane.active .editor-field_type textarea';
    var textArea = document.querySelector(textAreaSelector);

    textArea.id = 'active-ace';

    var name = textArea.id;
    var mode = ev.target.value;
    var editor = ace.edit(name);

    editor.session.setMode('ace/mode/' + mode);

    textArea.id = '';

  };

  var doOnReady = function() {

    var editorsSelector = 'select[data-field_name$="mode"]';
    var modeSelects = document.querySelectorAll(editorsSelector);

    modeSelects.forEach(function(el, idx) {
      el.addEventListener('change', doOnModeChange);
    });

  };

  document.addEventListener('DOMContentLoaded', doOnReady);

})(window, document);
