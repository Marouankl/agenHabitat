<!DOCTYPE html>
<html>
<head>
    <title>Login Everyone | Agen Habitat</title>

    <style>
        body {
            background-color: #f2f2f2;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            max-width: 600px;
            height: 600px;
            margin: 200px auto;
            padding: 30px;
            text-align: center;
            border-radius: 20px;
        }

        .logo {
            max-width: 300px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 20px;
            text-align: center;
            font-size: 25px;
        }

        input {
            display: block;
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: #060606 2px solid;
            border-radius: 10px;
        }

        button {
            background-color: orangered;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0062cc;
        }
    </style>
</head>

<body>
<div class="container">
    @if(Request::get("msg_notAuthenticated"))
    <div class="alert alert-danger">{{Request::get("msg_notAuthenticated")}}</div>
    @endif
    <img src="https://www.agenhabitat.fr/fileadmin/templates/master/assets/assets_site_agen_habitat/img/svg/done/logo.svg" alt="Logo Agence Habitat" class="logo">
    <h1> Bonjour, veuillez vous connecter ici </h1>
    <form action="{{route('check')}}" method="post">
        <input name="_token" type="hidden" value="{{ csrf_token() }}">

        <label for="email">Identifiant</label>
        <input type="text" id="email" name="email" required>
            @if($errors->has('email'))
                  <span class="text-danger">{{$errors->first('name')}}</span>
            @endif

        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" required>
            @if($errors->has('password'))
                <span class="text-danger">{{$errors->first('password')}}</span>
            @endif
        <button type="submit">Se connecter</button>
    </form>
</div>
</body>
</html>
