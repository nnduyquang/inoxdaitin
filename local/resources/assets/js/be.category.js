
if ($('#btnBrowse').length) {
    var button1 = document.getElementById('btnBrowse');

    button1.onclick = function () {
        selectFileWithCKFinder('path');
    }
}
;
if ($('#path').val() == '')
    $('#showHinhLoaiSanPham').hide();
else
    $('#showHinhLoaiSanPham').show();

function selectFileWithCKFinder(elementId) {
    window.KCFinder = {
        callBack: function (url) {
            var output = document.getElementById(elementId);
            output.value = url;
            $('#showHinhLoaiSanPham').show();
            $('#showHinhLoaiSanPham').fadeIn("fast").attr('src', url);
            window.KCFinder = null;
        }
    };
    window.open(getBaseURL() + 'js/kcfinder/browse.php?type=images', 'kcfinder_textbox',
        'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
        'resizable=1, scrollbars=0, width=800, height=600'
    );
}