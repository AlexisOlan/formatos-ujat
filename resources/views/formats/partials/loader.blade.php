<div class="loader">
    <div class="heart">
        <img src="{{asset('img/logo/logo-negro.png')}}" height="350px" alt="">
    </div>
</div>

<script>
    window.addEventListener('load', () => {
        const loader = document.querySelector('.loader');
        setTimeout( () => {
            loader.classList.add('loader-finish');
        }, 1500);
    });


</script>