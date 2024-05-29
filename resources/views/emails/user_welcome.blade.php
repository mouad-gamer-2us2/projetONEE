@component('mail::message')
Cher Agent,

Nous avons le plaisir de vous fournir vos informations de connexion pour accéder à notre système :
<br>
Email : {{ $email }}
<br>
Mot de passe : {{ $password }}
<br>
Pour accéder au système, veuillez suivre les étapes suivantes :
<br>
1. Rendez-vous sur la page de connexion .
<br>
2. Saisissez votre email et votre mot de passe.
<br>

Si vous rencontrez des problèmes lors de la connexion ou si vous avez besoin d'une assistance supplémentaire, n'hésitez pas à  contacter l'administrateur.
<br>
Nous vous remercions de votre collaboration et nous vous souhaitons une excellente journée !
<br>
Cordialement,
<br>
ONEE



@endcomponent
