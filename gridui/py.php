<?php
$request=$_GET['request'];
 ?>

<script type="text/javascript">
	//document.getElementById('py').submit();
</script>

<?php 

$postdata = http_build_query(
    array(
        'var1' => 'some content',
        'var2' => 'doh'
    )
);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);

$context  = stream_context_create($opts);

$result = file_get_contents("http://127.0.0.1:5000/$request", false, $context);
echo $result;
?>