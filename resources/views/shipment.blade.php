<!DOCTYPE html>
<html>
<head>
    <title>Create Shipment</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container">
    <button id="create-shipment">Create Shipment</button>
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.getElementById('create-shipment').addEventListener('click', function() {
        console.log('Starting');

        axios.post('{{ route('create.shipment') }}', {})
            .then(function(response) {
                console.log(response.data);
            })
            .catch(function(error) {
                console.error(error);
            });
    });
</script>
</body>
</html>
