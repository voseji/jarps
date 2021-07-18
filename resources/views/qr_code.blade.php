<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Laravel QR Code Example</title>
</head>
<body>

<div class="text-center" style="margin-top: 50px;">
    <h3>Laravel QR Code Example</h3>

    {!! QrCode::size(300)->generate('MyNotePaper'); !!}

    <p>FCT School of Nursing and Midwifery 2021 Admission</p>
    
</div>

</body>
</html>