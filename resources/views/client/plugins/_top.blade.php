<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title }} - {{ appSetting()->name }}
</title>

<meta name="description" content="{{ appSetting()->description }}" />
<meta name="keyword" content="{{ appSetting()->keyword }}" />
<link rel="shortcut icon" href="{{ asset('storage/assets/logo/' . appSetting()->logo) }}">

<link rel="preconnect" href="https://fonts.bunny.net" crossorigin>

<link rel="stylesheet" href="{{ asset('client/css/vendors.min.css') }}">
<link rel="stylesheet" href="{{ asset('client/css/icon.min.css') }}">
<link rel="stylesheet" href="{{ asset('client/css/style.min.css') }}">
<link rel="stylesheet" href="{{ asset('client/css/responsive.min.css') }}">
