# Bootstrap 5 Icons Iconpicker für REDAXO

Stellt Icons von https://icons.getbootstrap.com/ mit einem Icon-Auswahlfeld zur Verfügung.

![www ehkg-hn de_redaxo_index php_page=wortpresse_category table_name=rex_wortpresse_category rex_yform_manager_popup=0 data_id=1 func=edit list=4b52690d sort= sorttype= start=0 _csrf_token=L3gCP](https://user-images.githubusercontent.com/3855487/197399806-4f35a649-b423-4bd8-8e3c-a6e8804e1bb4.png)

## Features

### Verwendung in YForm

Verwende das Value `bs5_iconpicker`, um einen Icon Picker zur Verfügung zu stellen.

### Eigene Verwendung im Backend

```html
<div class="input-group">
	<span class="input-group-addon selected-icon-0"></span>
	<input type="text" data-bi-iconpicker="0" value="bi-cloud-fog2" class="form-control bs5-iconpicker" />
</div>
<div class="input-group">
	<span class="input-group-addon selected-icon-1"></span>
	<input type="text" data-bi-iconpicker="1" value="bi-folder" class="form-control bs5-iconpicker" />
</div>
<div class="input-group">
	<span class="input-group-addon selected-icon-15"><i class="bi-x"></i></span>
	<input type="text" data-bi-iconpicker="15" value="" class="form-control bs5-iconpicker" />
</div>
```

### Verwendung im Frontend.

Die Verwendung im Frontend bleibt dem Entwickler überlassen. Nutze die beiliegende Icon-Schrift oder lade das passende SVG von https://icons.getbootstrap.com/

## Lizenz

MIT Lizenz, siehe [LICENSE.md](https://github.com/alexplusde/bs5_iconpicker/blob/master/LICENSE.md)  

## Autoren

**Alexander Walther**  
http://www.alexplus.de  
https://github.com/alexplusde  

**Projekt-Lead**  
[Alexander Walther](https://github.com/alexplusde)

## Credits

Basierend auf https://www.cssscript.com/bootstrap-5-icon-picker/
