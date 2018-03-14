var div = document.createElement('div');
return ('draggable' in div) || ('ondragstart' in div && 'ondrop' in div);
return 'FormData' in window;
}
var $form = $('.box');

if (isAdvancedUpload) {
$form.addClass('has-advanced-upload');
if (isAdvancedUpload) {

var droppedFiles = false;

$form.on('drag dragstart dragend dragover dragenter dragleave drop', function(e) {
  e.preventDefault();
  e.stopPropagation();
})
.on('dragover dragenter', function() {
  $form.addClass('is-dragover');
})
.on('dragleave dragend drop', function() {
  $form.removeClass('is-dragover');
})
.on('drop', function(e) {
  droppedFiles = e.originalEvent.dataTransfer.files;
});
}
}
$form.on('submit', function(e) {
if ($form.hasClass('is-uploading')) return false;

$form.addClass('is-uploading').removeClass('is-error');

if (isAdvancedUpload) {
  // ajax for modern browsers
} else {
  // ajax for legacy browsers
}
});
var $input    = $form.find('input[type="file"]'),
  $label    = $form.find('label'),
  showFiles = function(files) {
    $label.text(files.length > 1 ? ($input.attr('data-multiple-caption') || '').replace( '{count}', files.length ) : files[ 0 ].name);
  };

.on('drop', function(e) {
droppedFiles = e.originalEvent.dataTransfer.files; // the files that were dropped
showFiles( droppedFiles );
});

$input.on('change', function(e) {
showFiles(e.target.files);
});
