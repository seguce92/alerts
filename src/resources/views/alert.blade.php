<link rel="stylesheet" type="text/css" href="{{ asset('vendor/seguce92/alerts/css/pnotify.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/seguce92/alerts/css/pnotify.brighttheme.css') }}">
<script type="text/javascript" src="{{ asset('vendor/seguce92/alerts/js/pnotify.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/seguce92/alerts/js/pnotify.desktop.js') }}"></script>

<script type="text/javascript">
  jQuery(document).ready(function($) {
  	PNotify.prototype.options.styling = "{{ config('seguce92.alerts.styling') }}";
    PNotify.prototype.options.icon = "{{ config('seguce92.alerts.icon') }}";
    PNotify.prototype.options.delay = "{{ config('seguce92.alerts.delay') }}";
    PNotify.prototype.options.text_escape = "{{ config('seguce92.alerts.text_escape') }}";
    PNotify.prototype.options.opacity = "{{ config('seguce92.alerts.opacity') }}";
    PNotify.prototype.options.shadow = "{{ config('seguce92.alerts.shadow') }}";

    var desktop = "{{ config('seguce92.alerts.desktop') }}";

    @foreach (Alert::getMessages() as $type => $messages)
        @foreach ($messages as $message)

            $(function(){
              new PNotify({
  	            text: "{{ $message }}",
  	            type: "{{ $type }}",
  		          desktop: {
  		            desktop: desktop
  		          }
              });
            });

        @endforeach
    @endforeach
  });
</script>