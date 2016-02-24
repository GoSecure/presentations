<script>
function loadPlugin(plugin,version) {

    console.info("Plugin "+plugin);
    console.info("Version "+version);
}

var name = loadPlugin("<?php echo htmlentities($_GET['name']);?>","<?php echo htmlentities($_GET['version']);?>");

</script>