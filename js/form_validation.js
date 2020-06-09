function FormValidation (arrFormEle) {
    var len = arrFormEle.length;
    var parentEle;
    var isValid = true;
    $('#submit').on('click', function () {
        for (var i = 0; i < len; i++) {
            var formEle = arrFormEle[i];
            if ($('#'+formEle).val() === "") {
                displayError($('#'+formEle).parents('.form-group'));
                isValid = false;
            } else {
                isValid = true;
            }
        }
        if (isValid === true) {
            return true;
        } else {
            $('input')[0].focus();
            return false;
        }
    });

    for (var i = 0; i < len; i++) {
        var formEle = arrFormEle[i];
        addKeypressEvent(formEle);
    }
}

function displayError(parentEle) {
    removeValidation(parentEle);
    parentEle.addClass('has-error');
    parentEle.find('.glyphicon').addClass('glyphicon-remove').show();
    parentEle.find('#inputError2Status').show();
    parentEle.find('input').attr('aria-describedby', 'inputError2Status');
};

function displaySuccess(parentEle) {
    removeValidation(parentEle);
    parentEle.addClass('has-success');
    parentEle.find('.glyphicon').addClass('glyphicon-ok').show();
    parentEle.find('#inputSucccess2Status').show();
    parentEle.find('input').attr('aria-describedby', 'inputSuccess2Status');
};

function addKeypressEvent(formEle) {
    $('#'+formEle).on('keypress', function () {
        if ($('#'+formEle).val() !== "") {
            var parentEle = $('#'+formEle).parents('.form-group');
            displaySuccess(parentEle);
        }
        return true;
    });
};

function removeValidation(parentEle) {
    parentEle.removeClass('has-success');
    parentEle.removeClass('has-error');
    parentEle.find('.glyphicon').removeClass('glyphicon-ok');
    parentEle.find('.glyphicon').removeClass('glyphicon-remove');
    parentEle.find('#inputSucccess2Status').hide();
    parentEle.find('#inputError2Status').hide();
    parentEle.find('input').attr('aria-describedby', '');
};
