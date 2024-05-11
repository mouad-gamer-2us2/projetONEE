@component('mail::message')
# Bienvenu sur notre platforme!

votre compte a été créé avec succès.

voici vos informations:
- Email: {{ $email }}
- Password: {{ $password }}

Merci pour vos services!

@endcomponent
