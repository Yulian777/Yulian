<script type="text/javascript"
        src="https://code.jquery.com/jquery-3.2.1.min.js">
</script>
<script type="text/javascript">
    $(function () {
        // $('#searchQuery').hide();
        // $('#searchQuery').css('background-color', 'red');
        // $('.post:eq(0)').html('new html');
        // $('[type=text]').val('123');
        $('.post:eq(1) .text').text('New text');

        // var content = $('.content');

        // $('#searchButton').on('click', function () {
        //     alert('Нажали');
        // });

        $('.content').on('click', '#searchButton', function () {
            alert('Нажали');
        });
    });

    $.ajax({
        url: "index.php?action=ajax",
        data: {},
        type: "post",
        dataType: "json",
        success: function(posts) {
            posts.forEach(function (post) {
                $('.posts').append("<div class=\"post\">\n" +
                    "            <p class=\"title\">Заголовок 1</p>\n" +
                    "            <p class=\"text\">Текст 2</p>\n" +
                    "        </div>")
            });
        },
        error: function (response) {

        }
    });

</script>

<div class="header">
    <img id="logo">
</div>
<div class="content">
    <input type="text" id="searchQuery">
    <input type="button" value="Искать" id="searchButton">
    <div class="posts">
        <div class="post">
            <p class="title">Заголовок 1</p>
            <p class="text">Текст 1</p>
        </div>
        <div class="post">
            <p class="title">Заголовок 2</p>
            <p class="text">Текст 2</p>
        </div>
    </div>
</div>