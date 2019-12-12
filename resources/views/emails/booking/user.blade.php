<!doctype html>
<html>
<head>
    <title>{{ config('booking.subject.user') }}</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, height=device-height">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <style type="text/css">

        body { font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 16px; background-color: #ededed; padding: 20px; }
        table { width: 800px; }
        td[class="logo"] { height: 250px; background-image: url("{{ url('img/email/bg_desktop.png') }}"); }
        td[class="content"] { padding: 25px 40px; background-color: #ffffff; }
        p[class="hello"] { font-size: 24px; }

        @media only screen and (max-device-width: 480px) {
            body { padding: 10px; }
            table { width: 280px !important; }
            td[class="logo"] { height: 188px !important; background-image: url("{{ url('img/email/bg_mobile.png') }}") !important; }
            td[class="content"] { padding: 10px 25px !important; }
        }

    </style>
</head>
<body>
    <table border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td class="logo"></td>
        </tr>
        <tr>
            <td class="content">
                <p class="hello">Hello, <strong>{{ $user->name }}</strong></p>
                <p>You just made a booking of last minute deal <strong>{{ $model->name }}</strong><br>Your adventure will start at <strong>{{ $model->starts }}</strong></p>
                <p>To get more details, you can contact deal provider <a href="mailto:{{ $model->owner_email }}">{{ $model->owner }}</a>, <strong>{{ $model->owner_phone }}</strong></p>
                <p>Kind regards,<br><i>GolfSkiWorld Team</i></p>
            </td>
        </tr>
    </table>
</body>
</html>
