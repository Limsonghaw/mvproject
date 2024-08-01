// Update the label text with the selected file name for each file input field
// var fileInputs = document.querySelectorAll('.custom-file-input');
// fileInputs.forEach(function (input) {
//   input.addEventListener('change', function (e) {
//     var fileName = e.target.files[0].name;
//     var label = input.nextElementSibling;
//     label.textContent = fileName;
//   });
// });

var fileInputs = document.querySelectorAll('.custom-file-input');
fileInputs.forEach(function (input) {
  input.addEventListener('change', function (e) {
    var files = Array.from(e.target.files);
    var label = input.nextElementSibling;
    label.textContent = '';

    files.forEach(function (file, index) {
      var fileName = file.name;
      if (index === files.length - 1) {
        label.textContent += fileName;
      } else {
        label.textContent += fileName + ', ';
      }
    });
  });
});
