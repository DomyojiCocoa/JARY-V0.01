<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<select multiple class="select2 w-48 rounded-lg pb-2"  name="climas[]" required>
    <option value="	clear sky">	clear sky</option>
    <option value="few clouds">few clouds</option>
    <option value="scattered clouds">scattered clouds</option>
    <option value="broken clouds">broken clouds</option>
    <option value="shower rain">shower rain</option>
    <option value="rain">rain</option>
    <option value="thunderstorm">thunderstorm</option>
</select>

<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
