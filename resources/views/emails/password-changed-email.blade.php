<x-mail::message>
# Introduction

Votre mot de passe a ete change.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
