$(document).on('rex:ready', async function (event, container) {
    const response = await fetch('/assets/addons/bs5_iconpicker/iconsets/bootstrap5.json');
    const result = await response.json();

    let all = document.querySelectorAll('.bs5-iconpicker');

    Array.from({length: all.length}, (v, k) => k).forEach((index) => {
        let element = all.item(index);
        element.classList.add('form-control');

        // check if input-group is available
        if (!element.parentNode.classList.contains('input-group')) {
            element.parentNode.classList.add('input-group');
            // force display table...
            element.parentNode.style.setProperty('display', 'table', 'important');
        }

        // check if input-group-addon is available
        if (!(element.previousElementSibling && element.previousElementSibling.classList.contains('input-group-addon'))) {
            //set input-group and default icon
            const placeholder = document.createElement('div');
            placeholder.innerHTML = '<span class="input-group-addon selected-icon-0"><i class="bi bi-app"></i></span>';
            element.parentNode.insertBefore(placeholder.firstElementChild, element);
        }

        iconpicker = new Iconpicker(element, {
            icons: result,
            showSelectedIn: document.querySelector('.selected-icon-' + index),
            searchable: true,
            selectedClass: 'selected',
            containerClass: 'bs5-picker',
            hideOnSelect: true,
            fade: false,
            defaultValue: element.value || 'bi-app',
            valueFormat: val => `bi ${val}`
        });

    });
});
