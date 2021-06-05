<section class="search-module">
    <div class="corner-button">
        <button id="search-btn">
            <i class="fas fa-search fa-2x"></i>
        </button>
    </div>

    <div class="search-bar" id="search-container">
        <div class="search-bar__container">
            <h2>Search Album</h2>
            <label for="search_text"></label>
            <div class="form-control">
                <input type="text" class="" id="search_text" placeholder="Search Albums (Press '/')">
            </div>
            <div id="search-result">
            </div>
            <div class="search-bar__container__cross" id="close-search">
                <i class="fas fa-times fa-2x"></i>
            </div>
        </div>
    </div>
</section>

@section('js')
    <script src="{{asset('js/search.js')}}"></script>
@endsection
