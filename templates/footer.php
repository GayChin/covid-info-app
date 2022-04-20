<footer class="footer">
    <div class="footer-item">
        <img src="img/cprc.png" alt="">
        <ul class="footer-item-list">
            <li><strong>CRPC Kebangsaan KKM</strong></li>
            <li>Telephone: 03 8881 0200 / 03 8881 0600</li>
            <li>Whatsapp: +60178429454
            </li>
            <li>Email: cprc@moh.gov.my
            </li>
            <li>Operation Time: 8:00 a.m.- 5:00 p.m.</li>
        </ul>

    </div>
    <div class="footer-item">
        <img class="se-flag" src="img/selangor.png" alt="">
        <ul class="footer-item-list">
            <li><strong>CRPC Selangor</strong></li>
            <li>Telephone : 03-5123 7366 / 03-5123 7367</li>
            <li>cprc_sel@moh.gov.my</li>
            <li>Operation time : 8.00 a.m. - 5.00 p.m.
            </li>
            <li>Public Holiday & Sat/Sun Operation Time : 9.00 a.m. - 1.00 p.m.
            </li>
        </ul>
    </div>
    <div class="footer-item">
        <img class="ma-flag" src="img/malaysia.png" alt="">
        <ul class="footer-item-list">
            <li><strong>CRPC KL</strong></li>
            <li>Telephone: 03-2698 3757 / 03-2268 7301</li>
            <li>Email: cprckl@moh.gov.my
            </li>
            <li>Operation time: 8.00 a.m. - 5.00 p.m.
            </li>
            <li>Public Holiday & Sat/Sun Operation Time : 9.00 a.m. - 3.00 p.m.
            </li>
        </ul>
    </div>
    <div class="copyright">
        © COVID-19 MALAYSIA 2022
    </div>
</footer>

<script>
$(document).ready(function() {
    var current = location.pathname;

    $('nav ul li.burger').click(() => {
        $('nav ul li').toggleClass("hide");
        $('nav ul li.items').toggleClass("show");
    })

    $("nav ul li.items").each(function() {
        var $this = $(this);
        var $currentPath = $this.children().attr('href')
        if (current.indexOf($currentPath) !== -1) {
            $this.addClass('selected');
        }
    });


})
</script>
</body>