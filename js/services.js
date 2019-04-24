$(document).ready(() => {
    // $('#serviceEng').addClass('service-focus');
    // $('#engSelect').removeClass('hide');
    // $('#engServices').removeClass('hide');
    // $('#enTower').removeClass('hide');

    $('#serviceMain').addClass('service-focus');
    $('#mainSelect').removeClass('hide');
    $('#mainServices').removeClass('hide');
    $('#mainTelcom').removeClass('hide');

    $('#serviceEng').click(() => {
        selectEng();
        chooseEng();
    })

    $('#serviceMain').click(() => {
        selectMain();
        chooseMain();
    })

    $('#serviceUnique').click(() => {
        selectUnique();
        chooseUnique();
    })

    engProduct();
    mainProduct();
});

function selectEng() {
    $('#serviceEng').addClass('service-focus');
    $('#serviceMain').removeClass('service-focus');
    $('#serviceUnique').removeClass('service-focus');
}

function selectMain() {
    $('#serviceEng').removeClass('service-focus');
    $('#serviceMain').addClass('service-focus');
    $('#serviceUnique').removeClass('service-focus');
    $('#mainServices').removeClass('hide');
}

function selectUnique() {
    $('#serviceEng').removeClass('service-focus');
    $('#serviceMain').removeClass('service-focus');
    $('#serviceUnique').addClass('service-focus');
}

function chooseEng() {
    $('#engSelect').removeClass('hide');
    $('#mainSelect').addClass('hide');
    $('#uniqueSelect').addClass('hide');

    $('#engServices').removeClass('hide');
    $('#mainTelcom').addClass('hide');
}

function chooseMain() {
    $('#engSelect').addClass('hide');
    $('#mainSelect').removeClass('hide');
    $('#uniqueSelect').addClass('hide');

    $('#engServices').addClass('hide');
    $('#mainTelcom').removeClass('hide');

}

function chooseUnique() {
    $('#engSelect').addClass('hide');
    $('#mainSelect').addClass('hide');
    $('#uniqueSelect').removeClass('hide');
}

function engProduct() {
    $("select#selectEngineering").change(function () {
        var engpro = $(this).children("option:selected").val();
        if (engpro === "tower") {
            $('#enTower').removeClass('hide');
            $('#enColocation').addClass('hide');
            $('#enShelter').addClass('hide');
            $('#enLab').addClass('hide');
        }

        if (engpro === "colocation") {
            $('#enTower').addClass('hide');
            $('#enColocation').removeClass('hide');
            $('#enShelter').addClass('hide');
            $('#enLab').addClass('hide');
        }

        if (engpro === "shelter") {
            $('#enTower').addClass('hide');
            $('#enColocation').addClass('hide');
            $('#enShelter').removeClass('hide');
            $('#enLab').addClass('hide');
        }

        if (engpro === "lab") {
            $('#enTower').addClass('hide');
            $('#enColocation').addClass('hide');
            $('#enShelter').addClass('hide');
            $('#enLab').removeClass('hide');
        }
    });
}

function mainProduct() {

    $('.mainSel').click(function () {
        if ($(this).is(':checked')) {
            if ($(this).val() === "telcom") {
                $('#mainTelcom').removeClass('hide');
                $('#mainBuilding').addClass('hide');
            }

            if ($(this).val() === "building") {
                $('#mainTelcom').addClass('hide');
                $('#mainBuilding').removeClass('hide');
            }
        }
    });
}

function uniqueProduct() {

}