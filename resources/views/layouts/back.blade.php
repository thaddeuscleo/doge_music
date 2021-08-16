<section class="auth_back_btn" id="back_auth_button">
    <i class="fas fa-angle-left fa-2x"></i>
</section>

<script>
 const auth_back = document.getElementById('back_auth_button');
 auth_back.addEventListener('click', ()=> {
    window.history.back();
 })
</script>