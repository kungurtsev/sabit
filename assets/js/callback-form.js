$(document).ready(documentLoaded);

function documentLoaded() {
    $("#form-number").inputmask("8(999)999-99-99")
    $('#form-submit').click(clickSubmitButton);
}

function clickSubmitButton() {
    // Если формы прошла валидацию, отправляем форму.
    if (validate()) {
        sendAjaxForm('form-result', 'callback-form', 'ajax-response.php')
    }
}

/**
 * Валидация формы.
 *
 * @returns {boolean}
 */
function validate() {
    var curse = $('#callback-form select').val();

    if (!validateCurse(curse)) {
        $('#help-block-curse').html('Курс должен быть цифрой.');
        return false;
    }

    var name = $('#callback-form #form-name').val();
    if (!validateName(name)) {
        $('#help-block-name').html('Имя должно быть заполнено.');
        return false;
    }

    var number = $('#callback-form #form-number').val();
    if (!validatePhone(number)) {
        $('#help-block-number').html('Формат телефона некорректен.');
        return false;
    }

    var email = $('#callback-form #form-email').val();
    if (!validateEmail(email)) {
        $('#help-block-email').html('Формат почты некорректен.');
        return false;
    }
    return true;
}

/**
 * Валидация имени пользователя.
 *
 * @param name
 * @returns {boolean}
 */
function validateName(name) {
    if (name) {
        return true;
    }
    return false;
}

/**
 * Валидация телефона.
 *
 * @param phone
 * @returns {boolean}
 */
function validatePhone(phone) {
    var regular = /^\d[\d\(\)\ -]{4,14}\d$/;
    return regular.test(phone);
}

/**
 * Валидация email.
 *
 * @param email
 * @returns {boolean}
 */
function validateEmail(email) {
    var regular = /^[\w]{1}[\w-\.]*@[\w-]+\.[a-z]{2,4}$/i;
    return regular.test(email);
}

/**
 * Валидация курса.
 *
 * @param curse
 * @returns {boolean}
 */
function validateCurse(curse) {
    var regular = /^[\d]{1}$/;
    return regular.test(curse);
}

// Функция отправки ajax.
function sendAjaxForm (resultDiv, form, url) {
    $.ajax({
        url: url,
        type: "POST",
        dataType: "json",
        data: $('#' + form).serialize(),
        success: function (response) {
            console.log(response);
            $('#' + resultDiv).html('<div class="alert alert-success">' +
                response.name + ' '  + response.email +'</div>');
        },
        error: function (response) {
            console.log(response);
            $('#' + resultDiv).html('<div class="alert alert-success">Не сработало</div>');
        }
    });
}