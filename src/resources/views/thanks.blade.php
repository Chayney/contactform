<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
    <title>お問い合わせありがとうございました</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Simonetta:ital,wght@0,400;0,900;1,400;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class='center'>
            <div class='back'>Thank you</div>
            <div class='front'>
                <h1>お問い合わせありがとうございました</h1>
                <form action="{{ url('/') }}" method="get">
                    @csrf
                <button>HOME</button>
            </div>
        </div>
    </main>
</body>
</html>