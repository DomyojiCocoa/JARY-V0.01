<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<select multiple class="select2 w-64"  name="climas[]" required>
    <option value="clear sky">Cielo Despejado</option>
    <option value="few clouds">Algo de nubes</option>
    <option value="scattered clouds">scattered clouds</option>
    <option value="broken clouds">broken clouds</option>
</select>

<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
