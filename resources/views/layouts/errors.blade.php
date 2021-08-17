<section class="errors_mod">
    {{-- TODO: Loop all errors start here --}}
    <div class="errors_mod__item">
        <div class="errors_mod__item__content">
            {{-- TODO: Show The Error Message Here --}}
            <i class="fas fa-times close-item"></i>
        </div>
    </div>
    {{-- TODO: Loop all errors end here --}}
</section>

<script>
    const err_element = document.getElementsByClassName('close-item');
    const err_obj = Array.from(err_element);
    err_obj.map((icons) => {
        icons.addEventListener('click', () => {
            icons.parentNode.parentNode.style.opacity = '0';
            setTimeout(()=> {
                icons
                    .parentNode
                    .parentNode
                    .parentNode
                    .removeChild(icons.parentNode.parentNode)
            }, 600);
        });
    });
</script>