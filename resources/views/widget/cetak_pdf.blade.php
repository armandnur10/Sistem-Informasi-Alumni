<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @font-face {
            font-family: 'Nunito';
            src: url('/fonts/nunito/Nunito-Light.tff') format('tff');
            font-weight: 300;
            font-style: normal;
        }
        @font-face {
            font-family: 'Nunito';
            src: url('/fonts/nunito/Nunito-regular.tff') format('tff');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'Nunito';
            src: url('/fonts/nunito/Nunito-Medium.tff') format('tff');
            font-weight: 500;
            font-style: normal;
        }
        @font-face {
            font-family: 'Nunito';
            src: url('/fonts/nunito/Nunito-SemiBold.tff') format('tff');
            font-weight: 600;
            font-style: normal;
        }
        @font-face {
            font-family: 'Nunito';
            src: url('/fonts/nunito/Nunito-Bold.tff') format('tff');
            font-weight: 700;
            font-style: normal;
        }

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
        }

        .text-title {
            font-size: 40px;
            font-weight: normal;
            font-family: 'Nunito', sans-serif;
        }
        .container{
            width: 100vw;
            height: 100vh;
            padding: 3rem;
            border: 1px solid #e7eaf0;
            border-radius: 5px;
        }
        .header{
            width: 100%;
            height: 20%;
            border: 1px solid black;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header img{
            width: 100px;
            height: 100px;
            border-radius: 100%;
            background: gray;
        }
        .header > div{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }


    </style>
</head>

<body>
    @foreach($user as $row)
    <div class="container">
        <div class="header">
            <div>
                <p>{{$row->alamat}}</p>
            </div>
            <div>
                <img src="" alt="">
                <p>{{$row->nama}}</p>
            </div>
            <div>
                <p>No Hp</p>
                <p>{{$row->no_hp}}</p>
            </div>
        </div>
    </div>
    @endforeach
</body>

</html>
