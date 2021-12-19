@if ($message = Session::get('Delete'))
<script>
    M.toast({html: ' {{ $message }} '});
</script>
@endif
@if ($message = Session::get('Create'))
<script>
    M.toast({html: ' {{ $message }} '});
</script>
@endif
@if ($message = Session::get('Update'))
<script>
    M.toast({html: ' {{ $message }} '});
</script>
@endif

