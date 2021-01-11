<footer class="section-footer border-top bg">
    <div class="container">
        <section class="footer-bottom row">
            <div class="col-md-2">
                <p class="text-muted"> &copy 2020 E-Shop</p>
            </div>
            <div class="col-md-8 text-md-center">
                <span class="px-2">eshop.aecc@gmail.com</span>
                <span class="px-2">+999-999-999</span>
                <span class="px-2">227 Nguyễn Văn Cừ, Quận 5, TP. HCM</span>
            </div>
            <div class="col-md-2 text-md-right text-muted">
                <i class="fab fa-lg fa-cc-visa"></i>
                <i class="fab fa-lg fa-cc-paypal"></i>
                <i class="fab fa-lg fa-cc-mastercard"></i>
            </div>
        </section>
    </div><!-- //container -->
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script>
jQuery(document).ready(function($) {
    var engine = new Bloodhound({
        remote: {
            url: '/api/find?q=%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    $(".search-input").typeahead({
        hint: true,
        highlight: true,
        minLength: 1,
    }, {
        source: engine.ttAdapter(),
        name: 'productsList',
        templates: {
            empty: [
                '<div class="list-group search-results-dropdown"><div class="list-group-item">No matching results.</div></div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function(data) {
                return '<a href="products/' + data.pro_slug + '" class="list-group-item">' + data.pro_name +
                    '</a>'
            }
        }
    });
});
</script>
@stack('scripts')