$(document).ready(function () {
    if ($('#dataTable').length !== 0) {
        $('#dataTable').DataTable({
            paging: false,
            language: {
                "sDecimal": ",",
                "sEmptyTable": "Tabloda herhangi bir veri mevcut değil",
                "sInfo": "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
                "sInfoEmpty": "Kayıt yok",
                "sInfoFiltered": "(_MAX_ kayıt içerisinden bulunan)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "Sayfada _MENU_ kayıt göster",
                "sLoadingRecords": "Yükleniyor...",
                "sProcessing": "İşleniyor...",
                "sSearch": "Ara:",
                "sZeroRecords": "Eşleşen kayıt bulunamadı",
                "oPaginate": {
                    "sFirst": "İlk",
                    "sLast": "Son",
                    "sNext": "Sonraki",
                    "sPrevious": "Önceki"
                },
                "oAria": {
                    "sSortAscending": ": artan sütun sıralamasını aktifleştir",
                    "sSortDescending": ": azalan sütun sıralamasını aktifleştir"
                },
                "select": {
                    "rows": {
                        "_": "%d kayıt seçildi",
                        "0": "",
                        "1": "1 kayıt seçildi"
                    }
                }
            }
        });
    }

});

genericAjax = (method, url, data, pageLoader = true, successFunc = null, errorFunc = null) => {

    if (pageLoader === true)
        showLoader();

    //response status;
    let status = true;

    $.ajax({
        method: method,
        url: url,
        data: data,

    }).done(function (msg) {

        if (pageLoader === true)
            hideLoader();

        successFunc(msg);

        status = true;

    }).fail(function (response) {

        console.log("fail response", response);

        if (pageLoader === true)
            hideLoader();

        status = false;

        errorFunc(response);

    });

    return status;

};

const hideLoader = () => {
    $('.custom-loader-bg').css('display', 'none');
};

const showLoader = () => {
    $('.custom-loader-bg').css('display', 'flex');
};
