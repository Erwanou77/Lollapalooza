<!DOCTYPE html>
<html style="font-size: 20px;" lang="fr">

<head>
    <meta http-equiv="Content-Type" Content="text/html; charset=UTF-8">
</head>

<body>
    <div style="text-align: center; margin: 0 auto; color: #f3f9ff; background-color: #691cad; width: 500px; border-radius:10px; padding:20px 0;">
        <div style="margin: 0 auto; text-align: center;">
            <h5 style="text-align: center; margin: 40px auto 0; color: #f3f9ff; line-height: 24px; font-size: 24px;">Ce mail, a été envoyé par :</h5>
            <h5 style="font-size: 20px; margin-top: 20px; margin-bottom: 0; color:#3c252b">{{ nom }} {{ prenom }}</h5>
            <h5 style="font-size: 20px; margin: 0; color:#3c252b">{{ mail }}</h5>
            <h5 style="margin: 40px auto 0; color: #f3f9ff; line-height: 24px; font-size: 24px;">Voici son message :</h5>
            <p style="color: #3c252b; font-size: 24px;"> {{ message }}</p>
        </div>
    </div>
</body>

</html>