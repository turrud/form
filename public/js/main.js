// preview image start
const fileInput = document.getElementById("fileInput");
    const imagePreview = document.getElementById("imagePreview");

    fileInput.addEventListener("change", function () {
    const file = fileInput.files[0];
    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
        const imageUrl = e.target.result;
        imagePreview.innerHTML = `<img src="${imageUrl}" alt="Preview">`;
        };

        reader.readAsDataURL(file);
    } else {
        imagePreview.innerHTML = "";
    }
});
// preview image end

//

(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


})(jQuery);

