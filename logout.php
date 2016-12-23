<?php
session_start();
?>
<?php
if (isset($_SESSION['id_member']))
{
	unset($_SESSION['id_member']);
}
?>
<script language="javascript">
	window.location.href = 'index.php';
</script>