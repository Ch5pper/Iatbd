@if (session('message'))
    <section class="flash-message">
        {{session('message')}}
    </section>
@endif