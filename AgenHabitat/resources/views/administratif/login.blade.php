<!DOCTYPE html>
<html>
<head>
    <title>Login Everyone | Agen Habitat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        body {
            background-color: #f2f2f2;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            max-width: 600px;
            height: 800px;
            margin: 200px auto;
            padding: 45px;
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
            padding: 35px 40px;
            border: none;
            border-radius: 10px;
            font-size: 25px;
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
        <div class="alert alert-danger" role="alert">{{Request::get("msg_notAuthenticated")}}</div>
    @endif
    <img src="https://www.agenhabitat.fr/fileadmin/templates/master/assets/assets_site_agen_habitat/img/svg/done/logo.svg" alt="Logo Agence Habitat" class="logo">
    <h1> Bonjour, veuillez vous connecter ici </h1>

    <form class="mt-5" action="{{route('check')}}" method="post">
        <input name="_token" type="hidden" value="{{ csrf_token() }}">

        <label class="fw-medium" for="email">Adresse E-mail</label>
        <input type="text" id="email" name="email" placeholder="nom.prenom@agen-habitat.com" required>
            @if($errors->has('email'))
                  <span class="text-danger">{{$errors->first('name')}}</span>
            @endif

        <label class="fw-medium" for="password">Mot de passe</label>
        <input type="password" id="password" name="password" required>
            @if($errors->has('password'))
                <span class="text-danger">{{$errors->first('password')}}</span>
            @endif
        <button class="mt-4" type="submit">Se connecter</button>
    </form>
</div>
</body>
</html>
