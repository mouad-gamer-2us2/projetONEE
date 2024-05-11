@component('mail::message')
# ONEE!

votre compte a été bien modifié avec succès.

voici vos informations:
- Email: {{ $email }}
- Password: {{ $password }}

Merci pour vos services!

@endcomponent
