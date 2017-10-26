/declaring HTML tag body or equivalent and calling javaScript function to execute on event load.
//Additionally, device dimensions afre checked on first page and thus right-click and keydown is disabled.
<body onload="setTimeout(abc, 0);" oncontextmenu="return false" onkeydown="return false" bgcolor="black">

<script>
  function abc()
    {
    if(screen.width > screen.height) //checking whether width is greater (landscape mode of device) or height is more (portrait mode of device)
      {var oW = screen.height;}
    else
      {var oW = screen.width;}
//The variable oW (original width) after execution of this condition will store the actual device width (in portrait mode).
//This value is lowest among 'screen.height' and 'screen.width'.
if(oW <= 480) // checking if the original width (so far calculated) is less than 481 pixels.
    top.window.location.href="testmob.php"; //Opening mibile page for device width of less than the mentioned condition.
    //Additionally, using frame busting url redirect to force redirect even if the code is executed within an iframe, provided the condition is met.
    else window.location="test.php";//OPening Web-View for devices with width greater than mentioned condition.
    }
</script>