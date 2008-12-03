{foreach ezini( 'JavaScriptSettings', 'JavaScriptList', 'design.ini' ) as $script}
    <script type="text/javascript" src={concat( 'javascript/', $script )|ezdesign}></script>
{/foreach}