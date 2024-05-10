<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<select multiple class="select2 w-64"  name="climas[]" >
    <option value="Soleado">Soleado</option>
    <option value="Nublado">Nublado</option>
    <option value="LLuvia">LLuvia</option>
    <option value="Nevando">Nevando</option>
    <option value="Vino messi a visitar el real cartagena">Vino messi a visitar el real cartagena</option>
</select>

<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
{{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<select class="select2" name="campo_select">
    <option value="opcion1">Opción 1</option>
    <option value="opcion2">Opción 2</option>
    <option value="opcion3">Opción 3</option>
</select>

<script>
    $(document).ready(function() {
        $('.select2').select2();
    });

</script> --}}
{{-- <select class="js-example-basic-multiple" name="climas[]" multiple="multiple">
    <option value="Soleado">Soleado2</option>
    <option value="Nublado">Nublado</option>
    <option value="LLuvia">LLuvia</option>
    <option value="Nevando">Nevando</option>
    <option value="Vino messi a visitar el real cartagena">Vino messi a visitar el real cartagena</option>
</select>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script> --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/css/multi-select-tag.css">
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>
<select name="climas[]" id="climas" value="" multiple>
    <option value="Soleado">Soleado</option>
    <option value="Nublado">Nublado</option>
    <option value="LLuvia">LLuvia</option>
    <option value="Nevando">Nevando</option>
    <option value="Vino messi a visitar el real cartagena">Vino messi a visitar el real cartagena</option>
</select>
<script>
    new MultiSelectTag('climas')  
</script> --}}