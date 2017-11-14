<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery.ajax({
                url: 'http://localhost:82/projects/frameworks/CI/canada_west/cwa/site/home/newsletter',
                type: 'POST',
                dataType: 'json',
                crossDomain: true,
                async: false,
                processData: false,
                cache: false,
                data: 'newsletter_email=ajdhd@gaha.com&submit=Submit'
            })
                .done(function(data, textStatus, jqXHR) {
                    alert(data.message);
                })
                .fail(function(jqXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                })
                .always(function(data, textStatus, errorThrown) {
                    //alert(errorThrown);
                });
});
</script>
</head>
<body>
</body>
</html>