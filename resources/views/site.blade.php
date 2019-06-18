@extends('layouts.inicio')

@section('content')
<slide-component url="{{ route('Site.index') }}">
</slide-component>
<noticias-component>
</noticias-component>
<footer-component>
</footer-component>
@endsection
