
<HTML>
<BODY>

<FORM METHOD="POST" ACTION="GetFormValue.php">
    <H2>Contact List</H2>
    <BR>Nickname:
    <BR><INPUT TYPE="TEXT" NAME="Nickname">
    <BR>
    <BR>Full Name:
    <BR><INPUT TYPE="TEXT" NAME="Fullname">
    <BR>
    <BR>Memo:
    <BR><TEXTAREA NAME="Memo" ROWS="4" COLS="40" WRAP="PHYSICAL">
    </TEXTAREA>
    <BR>
    <BR>
    <INPUT TYPE="SUBMIT">
</FORM>
</BODY>


<!-- GetFormValue.php
<?php
  echo "<BR>Nickname=$Nickname";
  echo "<BR>Fullname=$Fullname";
  echo "<BR>Memo=$Memo";
?>
-->
