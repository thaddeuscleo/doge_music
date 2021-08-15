<section class="errors_mod">
    @foreach ($errors->all() as $message)
        <div class="errors_mod__item">
            <div class="errors_mod__item__content">
                {{$message}}
                <i class="fas fa-times close-item"></i>
            </div>
        </div>
    @endforeach
</section>

<script>
    const err_element = document.getElementsByClassName('close-item');
    const err_obj = Array.from(err_element);
    err_obj.map((icons) => {
        icons.addEventListener('click', (e) => {
            icons.parentNode.parentNode.style.opacity = '0';
            setTimeout(()=> {
                icons.parentNode.parentNode.parentNode.removeChild(icons.parentNode.parentNode)
            }, 600);
        });
    });
</script>