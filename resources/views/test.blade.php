{{-- @php
    $user = "Azan";
    $fruit = ["Apple", "banana", "Orange","Grapes"];
@endphp

<script>
    var data = @json ($fruit);

    data.forEach(function(entry) {
        console.log(entry);
    });
</script> --}}