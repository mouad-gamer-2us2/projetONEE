@component('mail::message')


Cher(e)  client(e),

Nous sommes ravis de vous confirmer votre rendez-vous avec notre agent. Nous sommes impatients de vous rencontrer et de discuter.
<br>
Voici les détails de votre rendez-vous :

Agent : {{ $name}}
<br>
Date : {{ $date}}

<br>
Si vous avez des questions ou si vous avez besoin de modifier votre rendez-vous, n'hésitez pas à nous contacter .
<br>
Nous avons hâte de vous voir et de vous offrir notre meilleur service.
<br>
Cordialement,
<br>
ONEE

@endcomponent
