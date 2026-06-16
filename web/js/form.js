document.addEventListener('DOMContentLoaded', function () {
    var form = document.querySelector('.vanilla-form');

    if (!form) {
        return;
    }

    var colorInput = form.querySelector('input[type="color"]');
    var colorOutput = form.querySelector('.form__color-value');
    var message = form.querySelector('.form__message');

    function syncColor() {
        if (!colorInput || !colorOutput) {
            return;
        }

        colorOutput.value = colorInput.value;
        colorOutput.textContent = colorInput.value;
    }

    syncColor();

    if (colorInput) {
        colorInput.addEventListener('input', syncColor);
    }

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        var data = new FormData(form);
        var name = String(data.get('name') || '').trim();
        var moodColor = String(data.get('moodColor') || '').trim();
        var comment = String(data.get('comment') || '').trim();

        message.textContent = 'HTML/CSS/JS-форма собрала данные: ' + name + ', настроение ' + moodColor + ', комментарий "' + comment + '".';
        form.reset();
        syncColor();
    });
});
