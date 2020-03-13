@if($errors->any())
@foreach($errors->all() as $error)
<div class="container">
    <div class="mt-3 alert alert-danger text-center">
        {{ $error }}
    </div>
</div>
@endforeach
@endif