<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <title>Card Contact</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css'>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat');


    * {
        box-sizing: border-box;
    }

    body {
        background-image: linear-gradient(to right top, #2d0036, #2d0036, #2d0036, #2d0036, #2d0036);
        font-family: Montserrat, sans-serif;

        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;

        min-height: 100vh;
        margin: 0;
    }

    h3 {
        margin: 10px 0;
    }

    h6 {
        margin: 5px 0;
        text-transform: uppercase;
    }

    p {
        font-size: 14px;
        line-height: 21px;
    }

    .card-container {
        background-color: #231E39;
        border-radius: 25px;
        box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.35);
        color: #B3B8CD;
        padding: 30px 0 0;
        position: relative;
        width: 350px;
        max-width: 100%;
        text-align: center;
        margin: 20px 0;
        overflow: hidden;
    }

    .text-left {
        background-color: #231E39;
        border-radius: 25px;
        box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.35);
        color: #B3B8CD;
        padding: 30px 0 0;
        position: relative;
        width: 350px;
        margin-left: 12%;
        text-align: left;
        max-width: 100%;

        overflow: hidden;
    }

    .card-container .pro {
        color: #231E39;
        background-color: #FEBB0B;
        border-radius: 3px;
        font-size: 14px;
        font-weight: bold;
        padding: 3px 7px;
        position: absolute;
        top: 30px;
        left: 30px;
    }

    .card-container img {
        border: 1px solid #C400D7;
        border-radius: 50%;
        padding: 7px;
        height: 150px;
        width: 150px;
    }

    button.primary {
        background-color: #C400D7;
        border: 1px solid #C400D7;
        border-radius: 3px;
        color: #fff;
        font-family: Montserrat, sans-serif;
        font-weight: 500;
        padding: 10px 25px;
    }

    button.primary.ghost {
        background-color: transparent;
        color: #C400D7;
    }

    .skills {
        background-color: #1F1A36;
        text-align: left;
        padding: 15px;
        margin-top: 30px;
    }

    .skills ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .skills ul li {
        border: 1px solid #2D2747;
        border-radius: 2px;
        display: inline-block;
        font-size: 12px;
        margin: 0 7px 7px 0;
        padding: 7px;
    }
    </style>
</head>

<body>

    <div class="card-container">
        <span class="pro">NFC</span>
        <img src="public/profile.jpg" alt="user" />
        <br>
        <br>
        <h3>{{$data->name}}</h3>
        <h6>{{$data->address}}</h6>
        <h5>{{$data->title}} at {{$data->company}}</h5>

        <br>
        <h5 style="margin-left: 12%; text-align: left;">Contact</h5>
        <p style="margin-left: 12%; text-align: left;">Email: {{$data->email}}</p>
        <p style="margin-left: 12%; text-align: left;">Phone: {{$data->phone}}</p>
        <p style="margin-left: 12%; text-align: left;">Website: {{$data->web}}</p>
        <br>
        <h5 style="margin-left: 12%; text-align: left;">Social</h5>
        <p style="margin-left: 12%; text-align: left;">Twitter: {{$data->twitter}}</p>
        <p style="margin-left: 12%; text-align: left;">Telegram: {{$data->phone}}</p>
        <p style="margin-left: 12%; text-align: left;">Facebook: {{$data->facebook}}</p>
        <p style="margin-left: 12%; text-align: left;">Twitter: {{$data->twitter}}</p>
        <p style="margin-left: 12%; text-align: left;">Instagram: {{$data->insta}}</p>
        <p style="margin-left: 12%; text-align: left;">YouTube: {{$data->youtube}}</p>

        <br>
        <h5 style="margin-left: 12%; text-align: left;">Business</h5>
        <p style="margin-left: 12%; text-align: left;">Shopee: {{$data->shopee}}</p>
        <p style="margin-left: 12%; text-align: left;">Lazada: {{$data->shopee}}</p>
        <p style="margin-left: 12%; text-align: left;">Yezza.io: {{$data->shopee}}</p>

        <br>
        <br>


        <div class="buttons">
            <a style=" background-color: #6a3dff; /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                width: 80%;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;" href="public/zahir.vcf">
                Add to Contact
            </a>

        </div>
        <br>
        <div class="buttons">
            <a style=" background-color: #6a3dff; /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                width: 80%;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;" href="https://wa.me/60117265940/?text=Hi%20{{$data->name}}">
                Whatsapp me
            </a>

        </div>
        <br>

        <div class="buttons">
            <a style=" background-color: #6a3dff; /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                width: 80%;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;"
                href="mailto:{{$data->email}}"
                target="_blank">
                Send Email
            </a>

        </div>

        <br>
        <br>
        <br>




    </div>
</body>

</html>