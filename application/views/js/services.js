$(document).ready(() => {
    $('#serviceEng').addClass('service-focus');
    $('#engSelect').removeClass('hide');
    $('#engServices').removeClass('hide');
    $('#enTower').removeClass('hide');

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
    uniqueProduct();
});

function selectEng() {
    $('#serviceEng').addClass('service-focus');
    $('#serviceMain').removeClass('service-focus');
    $('#serviceUnique').removeClass('service-focus');
    $('#engServices').removeClass('hide');

    $('#mainServices').addClass('hide');
    $('#uniqueServices').addClass('hide');
}

function selectMain() {
    $('#serviceEng').removeClass('service-focus');
    $('#serviceMain').addClass('service-focus');
    $('#serviceUnique').removeClass('service-focus');
    $('#mainServices').removeClass('hide');

    $('#engServices').addClass('hide');
    $('#uniqueServices').addClass('hide');

}

function selectUnique() {
    $('#serviceEng').removeClass('service-focus');
    $('#serviceMain').removeClass('service-focus');
    $('#serviceUnique').addClass('service-focus');
    $('#uniqueServices').removeClass('hide');

    $('#engServices').addClass('hide');
    $('#mainServices').addClass('hide');
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

    $('#uniqueScada').removeClass('hide');
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

    $('.uniqueSel').click(function () {
        if ($(this).is(':checked')) {
            if ($(this).val() === "scada") {
                $('#uniqueScada').removeClass('hide');
                $('#uniqueGPA').addClass('hide');
            }

            if ($(this).val() === "gpa") {
                $('#uniqueScada').addClass('hide');
                $('#uniqueGPA').removeClass('hide');
            }
        }
    });
}
