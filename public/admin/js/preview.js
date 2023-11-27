function previewImage() {
    var input = document.getElementById('foto');
    var preview = document.getElementById('preview-image');

    var reader = new FileReader();

    reader.onload = function (e) {
        preview.src = e.target.result;
    };

    reader.readAsDataURL(input.files[0]);
}