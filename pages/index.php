<?php

?>
<div class="input-group">
        <span class="input-group-addon selected-icon-0"></span>
    <input type="text" class="form-control iconpicker" />
</div>
    <div class="input-group">
            <span class="input-group-addon selected-icon-1"></span>
        <input type="text" class="form-control iconpicker" />
    </div>
    <div class="input-group">
            <span class="input-group-addon selected-icon-2"></span>
        <input type="text" class="form-control iconpicker" />
    </div>

<script>
    (async () => {
        const response = await fetch('/assets/addons/bs5_iconpicker/iconsets/bootstrap5.json')
        const result = await response.json()


        var all = document.querySelectorAll('.iconpicker');

        Array.from({length: all.length}, (v, k) => k).forEach((index) => {
         let element = all.item(index);

            iconpicker = new Iconpicker(element, {
                icons: result,
                showSelectedIn: document.querySelector('.selected-icon-'+index),
                searchable: true,
                selectedClass: "selected",
                containerClass: "my-picker",
                hideOnSelect: true,
                fade: false,
                defaultValue: 'bi bi-app',
                valueFormat: val => `bi ${val}`
            });

        });

    })()
</script>
