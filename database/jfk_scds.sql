<br />
<b>Notice</b>:  Undefined index: output_format in <b>C:\xampp\phpMyAdmin\export.php</b> on line <b>13</b><br />
<!DOCTYPE HTML><html lang='en' dir='ltr'><meta charset="utf-8" /><meta name="robots" content="noindex,nofollow" /><meta http-equiv="X-UA-Compatible" content="IE=Edge"><style>html{display: none;}</style><link rel="icon" href="favicon.ico" type="image/x-icon" /><link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /><link rel="stylesheet" type="text/css" href="phpmyadmin.css.php?server=1&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c&amp;nocache=5565634137ltr" /><link rel="stylesheet" type="text/css" href="./themes/pmahomme/jquery/jquery-ui-1.9.2.custom.css" /><title>localhost / 127.0.0.1 | phpMyAdmin 4.0.9</title><script type='text/javascript' src='js/get_scripts.js.php?scripts[]=jquery/jquery-1.8.3.min.js&scripts[]=ajax.js&scripts[]=keyhandler.js&scripts[]=jquery/jquery-ui-1.9.2.custom.min.js&scripts[]=jquery/jquery.sprintf.js&scripts[]=jquery/jquery.cookie.js&scripts[]=jquery/jquery.mousewheel.js&scripts[]=jquery/jquery.event.drag-2.2.js&scripts[]=jquery/jquery-ui-timepicker-addon.js&scripts[]=jquery/jquery.ba-hashchange-1.3.js&scripts[]=jquery/jquery.debounce-1.0.5.js&scripts[]=jquery/jquery.menuResizer-1.0.js&scripts[]=cross_framing_protection.js&scripts[]=rte.js&scripts[]=functions.js&scripts[]=navigation.js&scripts[]=indexes.js&scripts[]=common.js&scripts[]=codemirror/lib/codemirror.js&scripts[]=codemirror/mode/mysql/mysql.js'></script><script type='text/javascript' src='js/messages.php?lang=en&amp;db=&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'></script><script type='text/javascript' src='js/get_image.js.php?theme=pmahomme'></script><script type="text/javascript">// <![CDATA[
PMA_commonParams.setAll({common_query:"token=5b7a2a899f2f046e2cf5aacdba5e560c",opendb_url:"db_structure.php",safari_browser:"0",querywindow_height:"400",querywindow_width:"600",collation_connection:"utf8_general_ci",lang:"en",server:"1",table:"",db:"",token:"5b7a2a899f2f046e2cf5aacdba5e560c",text_dir:"ltr",pma_absolute_uri:"http://localhost/phpmyadmin/",pma_text_default_tab:"Browse",pma_text_left_default_tab:"Structure",confirm:"1"});
AJAX.scriptHandler.add("jquery/jquery-1.8.3.min.js",0).add("ajax.js",0).add("keyhandler.js",1).add("jquery/jquery-ui-1.9.2.custom.min.js",0).add("jquery/jquery.sprintf.js",0).add("jquery/jquery.cookie.js",0).add("jquery/jquery.mousewheel.js",0).add("jquery/jquery.event.drag-2.2.js",0).add("jquery/jquery-ui-timepicker-addon.js",0).add("jquery/jquery.ba-hashchange-1.3.js",0).add("jquery/jquery.debounce-1.0.5.js",0).add("jquery/jquery.menuResizer-1.0.js",0).add("cross_framing_protection.js",0).add("rte.js",1).add("messages.php?lang=en&amp;db=&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c",0).add("get_image.js.php?theme=pmahomme",0).add("functions.js",1).add("navigation.js",0).add("indexes.js",1).add("common.js",1).add("codemirror/lib/codemirror.js",0).add("codemirror/mode/mysql/mysql.js",0);
$(function() {AJAX.fireOnload("keyhandler.js");AJAX.fireOnload("rte.js");AJAX.fireOnload("functions.js");AJAX.fireOnload("indexes.js");AJAX.fireOnload("common.js");});
// ]]></script></head><body><div id="pma_navigation"><div id="pma_navigation_resizer"></div><div id="pma_navigation_collapser"></div><div id="pma_navigation_content"><div id="pma_navigation_header"><a class="hide navigation_url" href="navigation.php?ajax_request=1&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c"></a><!-- LOGO START --><div id="pmalogo">    <a href="index.php?token=5b7a2a899f2f046e2cf5aacdba5e560c"><img src="./themes/pmahomme/img/logo_left.png" alt="phpMyAdmin" id="imgpmalogo" /></a></div><!-- LOGO END --><!-- LINKS START --><div id="leftframelinks"><a href="index.php?token=5b7a2a899f2f046e2cf5aacdba5e560c" title="Home"><img src="themes/dot.gif" title="Home" alt="Home" class="icon ic_b_home" /></a><a href="querywindow.php?token=5b7a2a899f2f046e2cf5aacdba5e560c&amp;no_js=true" id="pma_open_querywindow" class="disableAjax" title="Query window"><img src="themes/dot.gif" title="Query window" alt="Query window" class="icon ic_b_selboard" /></a><a href="./doc/html/index.html" target="documentation" title="phpMyAdmin documentation"><img src="themes/dot.gif" title="phpMyAdmin documentation" alt="phpMyAdmin documentation" class="icon ic_b_docs" /></a><a href="./url.php?url=http%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.6%2Fen%2Findex.html&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c" target="mysql_doc"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_sqlhelp" /></a><a href="#" id="pma_navigation_reload" title="Reload navigation frame"><img src="themes/dot.gif" title="Reload navigation frame" alt="Reload navigation frame" class="icon ic_s_reload" /></a></div><!-- LINKS ENDS --><!-- RECENT START --><div id="recentTableList"><form method="post" action="sql.php"><input type="hidden" name="db" value="" /><input type="hidden" name="table" value="" /><input type="hidden" name="server" value="1" /><input type="hidden" name="token" value="5b7a2a899f2f046e2cf5aacdba5e560c" /><select name="selected_recent_table" id="recentTable"><option value="">(Recent tables) ...</option><option value="{&quot;db&quot;:&quot;jfk_scds&quot;,&quot;table&quot;:&quot;products&quot;}">`jfk_scds`.`products`</option><option value="{&quot;db&quot;:&quot;jfk_scds&quot;,&quot;table&quot;:&quot;volunteer&quot;}">`jfk_scds`.`volunteer`</option><option value="{&quot;db&quot;:&quot;jfk_scds&quot;,&quot;table&quot;:&quot;user&quot;}">`jfk_scds`.`user`</option><option value="{&quot;db&quot;:&quot;jfk_scds&quot;,&quot;table&quot;:&quot;subsciber&quot;}">`jfk_scds`.`subsciber`</option><option value="{&quot;db&quot;:&quot;jfk_scds&quot;,&quot;table&quot;:&quot;payment&quot;}">`jfk_scds`.`payment`</option><option value="{&quot;db&quot;:&quot;jfk_scds&quot;,&quot;table&quot;:&quot;country&quot;}">`jfk_scds`.`country`</option><option value="{&quot;db&quot;:&quot;jfk_scds&quot;,&quot;table&quot;:&quot;city&quot;}">`jfk_scds`.`city`</option><option value="{&quot;db&quot;:&quot;jfk_scds&quot;,&quot;table&quot;:&quot;cds&quot;}">`jfk_scds`.`cds`</option><option value="{&quot;db&quot;:&quot;jfk_scds&quot;,&quot;table&quot;:&quot;admin&quot;}">`jfk_scds`.`admin`</option><option value="{&quot;db&quot;:&quot;jfk&quot;,&quot;table&quot;:&quot;user&quot;}">`jfk`.`user`</option></select></form></div><!-- RECENT END --><img src="./themes/pmahomme/img/ajax_clock_small.gif" title="Loading" alt="Loading" style="visibility: hidden;" class="throbber" /></div><div id="pma_navigation_tree" class="list_container highlight"><div id='pma_navigation_tree_content'><ul><li class='first database'><div class='block'><i class='first'></i><b></b><a class='expander' href='#'><span class='hide aPath'>cm9vdA==.Y2Rjb2w=</span><span class='hide vPath'>cm9vdA==.Y2Rjb2w=</span><span class='hide pos'>0</span><img src="themes/dot.gif" title="Expand/Collapse" alt="Expand/Collapse" class="icon ic_b_plus" /></a></div><div class='block'><a href='db_operations.php?server=1&amp;db=cdcol&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'><img src="themes/dot.gif" title="Database operations" alt="Database operations" class="icon ic_s_db" /></a></div><a href='db_structure.php?server=1&amp;db=cdcol&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'>cdcol</a></li><li class='database'><div class='block'><i></i><b></b><a class='expander' href='#'><span class='hide aPath'>cm9vdA==.aW5mb3JtYXRpb25fc2NoZW1h</span><span class='hide vPath'>cm9vdA==.aW5mb3JtYXRpb25fc2NoZW1h</span><span class='hide pos'>0</span><img src="themes/dot.gif" title="Expand/Collapse" alt="Expand/Collapse" class="icon ic_b_plus" /></a></div><div class='block'><a href='db_operations.php?server=1&amp;db=information_schema&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'><img src="themes/dot.gif" title="Database operations" alt="Database operations" class="icon ic_s_db" /></a></div><a href='db_structure.php?server=1&amp;db=information_schema&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'>information_schema</a></li><li class='database'><div class='block'><i></i><b></b><a class='expander' href='#'><span class='hide aPath'>cm9vdA==.aXQxMTFfZXhlcmNpc2Ux</span><span class='hide vPath'>cm9vdA==.aXQxMTFfZXhlcmNpc2Ux</span><span class='hide pos'>0</span><img src="themes/dot.gif" title="Expand/Collapse" alt="Expand/Collapse" class="icon ic_b_plus" /></a></div><div class='block'><a href='db_operations.php?server=1&amp;db=it111_exercise1&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'><img src="themes/dot.gif" title="Database operations" alt="Database operations" class="icon ic_s_db" /></a></div><a href='db_structure.php?server=1&amp;db=it111_exercise1&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'>it111_exercise1</a></li><li class='database'><div class='block'><i></i><b></b><a class='expander' href='#'><span class='hide aPath'>cm9vdA==.amZr</span><span class='hide vPath'>cm9vdA==.amZr</span><span class='hide pos'>0</span><img src="themes/dot.gif" title="Expand/Collapse" alt="Expand/Collapse" class="icon ic_b_plus" /></a></div><div class='block'><a href='db_operations.php?server=1&amp;db=jfk&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'><img src="themes/dot.gif" title="Database operations" alt="Database operations" class="icon ic_s_db" /></a></div><a href='db_structure.php?server=1&amp;db=jfk&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'>jfk</a></li><li class='database'><div class='block'><i></i><b></b><a class='expander' href='#'><span class='hide aPath'>cm9vdA==.amZrX3NjZHM=</span><span class='hide vPath'>cm9vdA==.amZrX3NjZHM=</span><span class='hide pos'>0</span><img src="themes/dot.gif" title="Expand/Collapse" alt="Expand/Collapse" class="icon ic_b_plus" /></a></div><div class='block'><a href='db_operations.php?server=1&amp;db=jfk_scds&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'><img src="themes/dot.gif" title="Database operations" alt="Database operations" class="icon ic_s_db" /></a></div><a href='db_structure.php?server=1&amp;db=jfk_scds&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'>jfk_scds</a></li><li class='database'><div class='block'><i></i><b></b><a class='expander' href='#'><span class='hide aPath'>cm9vdA==.bXlzcWw=</span><span class='hide vPath'>cm9vdA==.bXlzcWw=</span><span class='hide pos'>0</span><img src="themes/dot.gif" title="Expand/Collapse" alt="Expand/Collapse" class="icon ic_b_plus" /></a></div><div class='block'><a href='db_operations.php?server=1&amp;db=mysql&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'><img src="themes/dot.gif" title="Database operations" alt="Database operations" class="icon ic_s_db" /></a></div><a href='db_structure.php?server=1&amp;db=mysql&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'>mysql</a></li><li class='database'><div class='block'><i></i><b></b><a class='expander' href='#'><span class='hide aPath'>cm9vdA==.cGVyZm9ybWFuY2Vfc2NoZW1h</span><span class='hide vPath'>cm9vdA==.cGVyZm9ybWFuY2Vfc2NoZW1h</span><span class='hide pos'>0</span><img src="themes/dot.gif" title="Expand/Collapse" alt="Expand/Collapse" class="icon ic_b_plus" /></a></div><div class='block'><a href='db_operations.php?server=1&amp;db=performance_schema&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'><img src="themes/dot.gif" title="Database operations" alt="Database operations" class="icon ic_s_db" /></a></div><a href='db_structure.php?server=1&amp;db=performance_schema&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'>performance_schema</a></li><li class='database'><div class='block'><i></i><b></b><a class='expander' href='#'><span class='hide aPath'>cm9vdA==.cGhwbXlhZG1pbg==</span><span class='hide vPath'>cm9vdA==.cGhwbXlhZG1pbg==</span><span class='hide pos'>0</span><img src="themes/dot.gif" title="Expand/Collapse" alt="Expand/Collapse" class="icon ic_b_plus" /></a></div><div class='block'><a href='db_operations.php?server=1&amp;db=phpmyadmin&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'><img src="themes/dot.gif" title="Database operations" alt="Database operations" class="icon ic_s_db" /></a></div><a href='db_structure.php?server=1&amp;db=phpmyadmin&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'>phpmyadmin</a></li><li class='database'><div class='block'><i></i><b></b><a class='expander' href='#'><span class='hide aPath'>cm9vdA==.c29mdGRldl9sb2dyb25pb19sb2lzYW5uZV9vdXJzcGFjZQ==</span><span class='hide vPath'>cm9vdA==.c29mdGRldl9sb2dyb25pb19sb2lzYW5uZV9vdXJzcGFjZQ==</span><span class='hide pos'>0</span><img src="themes/dot.gif" title="Expand/Collapse" alt="Expand/Collapse" class="icon ic_b_plus" /></a></div><div class='block'><a href='db_operations.php?server=1&amp;db=softdev_logronio_loisanne_ourspace&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'><img src="themes/dot.gif" title="Database operations" alt="Database operations" class="icon ic_s_db" /></a></div><a href='db_structure.php?server=1&amp;db=softdev_logronio_loisanne_ourspace&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'>softdev_logronio_loisanne_ourspace</a></li><li class='database'><div class='block'><i></i><b></b><a class='expander' href='#'><span class='hide aPath'>cm9vdA==.dGVzdA==</span><span class='hide vPath'>cm9vdA==.dGVzdA==</span><span class='hide pos'>0</span><img src="themes/dot.gif" title="Expand/Collapse" alt="Expand/Collapse" class="icon ic_b_plus" /></a></div><div class='block'><a href='db_operations.php?server=1&amp;db=test&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'><img src="themes/dot.gif" title="Database operations" alt="Database operations" class="icon ic_s_db" /></a></div><a href='db_structure.php?server=1&amp;db=test&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'>test</a></li><li class='last database'><div class='block'><i></i><a class='expander' href='#'><span class='hide aPath'>cm9vdA==.d2ViYXV0aA==</span><span class='hide vPath'>cm9vdA==.d2ViYXV0aA==</span><span class='hide pos'>0</span><img src="themes/dot.gif" title="Expand/Collapse" alt="Expand/Collapse" class="icon ic_b_plus" /></a></div><div class='block'><a href='db_operations.php?server=1&amp;db=webauth&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'><img src="themes/dot.gif" title="Database operations" alt="Database operations" class="icon ic_s_db" /></a></div><a href='db_structure.php?server=1&amp;db=webauth&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c'>webauth</a></li></ul></div></div></div></div><noscript><div class="error"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_error" /> Javascript must be enabled past this point</div></noscript><div id='floating_menubar'></div><div id='serverinfo'><img src="themes/dot.gif" title="" alt="" class="icon ic_s_host item" /><a href="index.php?token=5b7a2a899f2f046e2cf5aacdba5e560c" class="item">Server: 127.0.0.1</a><div class="clearfloat"></div></div><div id="topmenucontainer" class="menucontainer"><ul id="topmenu"  class="resizable-menu"><li><a class="tab" href="server_databases.php?db=&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c" ><img src="themes/dot.gif" title="Databases" alt="Databases" class="icon ic_s_db" /> Databases</a></li><li><a class="tab" href="server_sql.php?db=&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c" ><img src="themes/dot.gif" title="SQL" alt="SQL" class="icon ic_b_sql" /> SQL</a></li><li><a class="tab" href="server_status.php?db=&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c" ><img src="themes/dot.gif" title="Status" alt="Status" class="icon ic_s_status" /> Status</a></li><li><a class="tab" href="server_privileges.php?db=&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c" ><img src="themes/dot.gif" title="Users" alt="Users" class="icon ic_s_rights" /> Users</a></li><li><a class="tab" href="server_export.php?db=&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c" ><img src="themes/dot.gif" title="Export" alt="Export" class="icon ic_b_export" /> Export</a></li><li><a class="tab" href="server_import.php?db=&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c" ><img src="themes/dot.gif" title="Import" alt="Import" class="icon ic_b_import" /> Import</a></li><li><a class="tab" href="prefs_manage.php?db=&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c" ><img src="themes/dot.gif" title="Settings" alt="Settings" class="icon ic_b_tblops" /> Settings</a></li><li><a class="tab" href="server_replication.php?db=&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c" ><img src="themes/dot.gif" title="Replication" alt="Replication" class="icon ic_s_replication" /> Replication</a></li><li><a class="tab" href="server_variables.php?db=&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c" ><img src="themes/dot.gif" title="Variables" alt="Variables" class="icon ic_s_vars" /> Variables</a></li><li><a class="tab" href="server_collations.php?db=&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c" ><img src="themes/dot.gif" title="Charsets" alt="Charsets" class="icon ic_s_asci" /> Charsets</a></li><li><a class="tab" href="server_engines.php?db=&amp;token=5b7a2a899f2f046e2cf5aacdba5e560c" ><img src="themes/dot.gif" title="Engines" alt="Engines" class="icon ic_b_engine" /> Engines</a></li></ul>
<div class="clearfloat"></div></div>
<a id="goto_pagetop" href="#" title="Click on the bar to scroll to top of page"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_top" /></a><div id="page_content"><!DOCTYPE HTML>
<html lang="en" dir="ltr">
<head>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title>phpMyAdmin</title>
    <meta charset="utf-8" />
    <style type="text/css">
    <!--
    html {
        padding: 0;
        margin: 0;
    }
    body  {
        font-family: sans-serif;
        font-size: small;
        color: #000000;
        background-color: #F5F5F5;
        margin: 1em;
    }
    h1 {
        margin: 0;
        padding: 0.3em;
        font-size: 1.4em;
        font-weight: bold;
        color: #ffffff;
        background-color: #ff0000;
    }
    p {
        margin: 0;
        padding: 0.5em;
        border: 0.1em solid red;
        background-color: #ffeeee;
    }
    //-->
    </style>
</head>
<body>
<h1>phpMyAdmin - Error</h1>
<p>export.php: Missing parameter: export_type&lt;a href="./doc/html/faq.html#faqmissingparameters" target="documentation"&gt;&lt;img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /&gt;&lt;/a&gt;<br /></p>
</body>
</html>

</div><script type="text/javascript">// <![CDATA[
AJAX.scriptHandler;
$(function() {});
// ]]></script></body></html>