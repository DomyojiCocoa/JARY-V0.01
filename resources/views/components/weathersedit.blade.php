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
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/css/multi-select-tag.css">
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>
<select name="climas1[]" id="climas" value="" multiple>
    <option value="Soleado">Soleado</option>
    <option value="Nublado">Nublado</option>
    <option value="LLuvia">LLuvia</option>
    <option value="Nevando">Nevando</option>
    <option value="Vino messi a visitar el real cartagena">Vino messi a visitar el real cartagena</option>
</select>
<script>
    new MultiSelectTag('climas1');
</script> --}}