@component('mail::message')
Cher Agent,
<br>
Nous vous écrivons pour vous informer que vos informations de connexion au système ont été modifiées avec succès. Veuillez trouver ci-dessous vos nouvelles informations de connexion :
<br>
Email:  {{ $email }}
<br>
Mot de passe : {{ $password }}
<br>
Si vous avez des questions ou si vous rencontrez des problèmes lors de la connexion, n'hésitez pas à  contacter l'administrateur.
<br>
Nous vous remercions de votre collaboration et nous vous souhaitons une excellente journée !
<br>
Cordialement,
<br>
ONEE


@endcomponent
