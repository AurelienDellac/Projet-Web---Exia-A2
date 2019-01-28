@component('mail::message')
# Nouvelle commande

{{$user->name}} {{$user->forename}} a passé une nouvelle commande le {{$date}}

@component('mail::button', ['url' => 'bdecesi/panier/' . $user->id . '/' . $date])
Détails de la commande
@endcomponent

Pensez à le contacter pour définir les modalités de paiement !
@endcomponent
