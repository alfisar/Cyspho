$(document).ready(()=>{
    $('#serviceEng').addClass('service-focus');
    $('#engSelect').removeClass('hide');
    $('#proServices').removeClass('hide');
    $('#enTower').removeClass('hide');

    $('#serviceEng').click(()=>{
        selectEng();
        chooseEng();
    })

    $('#serviceMain').click(()=>{
        selectMain();
        chooseMain();
    })

    $('#serviceUnique').click(()=>{
        selectUnique();
        chooseUnique();
    })

    engProduct();
});

function selectEng(){
        $('#serviceEng').addClass('service-focus');
        $('#serviceMain').removeClass('service-focus');
        $('#serviceUnique').removeClass('service-focus');
}

function selectMain(){
    $('#serviceEng').removeClass('service-focus');
    $('#serviceMain').addClass('service-focus');
    $('#serviceUnique').removeClass('service-focus');
}

function selectUnique(){
    $('#serviceEng').removeClass('service-focus');
        $('#serviceMain').removeClass('service-focus');
        $('#serviceUnique').addClass('service-focus');
}

function chooseEng(){
    $('#engSelect').removeClass('hide');
    $('#mainSelect').addClass('hide');
    $('#uniqueSelect').addClass('hide');
}

function chooseMain(){
    $('#engSelect').addClass('hide');
    $('#mainSelect').removeClass('hide');
    $('#uniqueSelect').addClass('hide');
}

function chooseUnique(){
    $('#engSelect').addClass('hide');
    $('#mainSelect').addClass('hide');
    $('#uniqueSelect').removeClass('hide');
}

function engProduct(){
    $("select#selectEngineering").change(function(){
        var engpro = $(this).children("option:selected").val();
        if(engpro === "colocation"){
            
        }
    });

}