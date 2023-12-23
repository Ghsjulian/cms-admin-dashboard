<?php
session_start();
$session = $_SESSION['admin'];
if (isset($session['user_role'])) {
  $id = $_GET['std_id'];
  ?>
  <html>
  <head>
    <title>Education Board Bangladesh</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="keywords" content>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/sheet.css" rel="stylesheet" type="text/css">

    <style type="text/css">
      .eruda-search-highlight-block {
        display: inline
      }

      .eruda-search-highlight-block .eruda-keyword {
        background: #332a00;
        color: #ffcb6b
      }
    </style>
  </head>
  <body>
    <br><br><br>
    <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <td>
            <table width="650" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
              <tbody>
                <tr>
                  <td width="12" align="left" valign="top" background="images/back_cor_left_top.gif">
                  </td>
                  <td valign="top" background="images/back_top.gif">
                  </td>
                  <td width="12" align="right" valign="top" background="images/back_cor_right_top.gif">
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="top" background="images/back_left.gif"> </td>
                  <td valign="top">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td valign="top" bgcolor="#007814">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                  <td align="right">
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" bgcolor="#FFFFFF">
                                    <img src="images/trans.gif" width="1" height="1">
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <img src="images/trans.gif" width="1" height="1">
                  </td>
                  <td align="right" valign="top" background="images/back_right.gif"> </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td>
            <table width="650" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
              <tbody>
                <tr>
                  <td width="12" align="left" valign="top" background="images/back_left.gif"> </td>
                  <td valign="top">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td height="50" align="center" valign="middle" class="black16bold" style="color :#0078e2">Add Examine MarkSheet</td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                  <td align="center" valign="middle">
                                    <table width="100%" border="0" cellpadding="3" cellspacing="1" class="black12">
                                      <tbody>
                                        <tr>
                                          <td width="12%" align="left" valign="middle" bgcolor="#EEEEEE">Roll No</td>
                                          <td width="27%" align="left" valign="middle" bgcolor="#EEEEEE" id="roll"></td>
                                          <td width="22%" align="left" valign="middle" bgcolor="#EEEEEE">Name</td>
                                          <td width="39%" align="left" valign="middle" bgcolor="#EEEEEE" id="name">

                                          </td>
                                        </tr>
                                        <tr>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE">Board</td>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE">  <input id="board" name="board" type="text" placeholder="Enter Board"></td>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE">Father's Name</td>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE">  <input id="father" name="father" type="text" placeholder="Student Father's Name"></td>
                                        </tr>
                                        <tr>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE">Group</td>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE" id="group"></td>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE">Mother's Name</td>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE">  <input id="mother" name="mother" type="text" placeholder="Student Mother's Name"></td>
                                        </tr>
                                        <tr>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE">Type
                                          </td>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE">  <input id="type" name="type" type="text" placeholder="Enter Type"></td>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE">Date of Birth</td>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE">  <input id="dob" name="dob" type="text" placeholder="Ex : DD-MM-YY"></td>
                                        </tr>


                                        <tr>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE">Year
                                          </td>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE">  <input id="year" name="year" type="number" placeholder="Enter Session Year"></td>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE">Exam Name</td>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE">
                                            <select id="select_bank" name="exam" class="textfield05" id="exam" onchange="fd(this);">
                                              <option value="SSC/Dakhil/Equivalent">SSC/Dakhil/Equivalent</option>
                                              <option value="JSC/JDC">JSC/JDC</option>
                                              <option value="SSC/Dakhil">SSC/Dakhil</option>
                                              <option value="SSC(Vocational">SSC(Vocational)</option>
                                              <option value="HSC/Alim">HSC/Alim</option>
                                              <option value="HSC(Vocational)">HSC(Vocational)</option>
                                              <option value="HSC(BM)">HSC(BM)</option>
                                              <option value="Diploma in Commerce">Diploma in Commerce</option>
                                              <option value="Diploma in Business Studies">Diploma in Business Studies</option>
                                            </select>
                                          </td>
                                        </tr>






                                        <tr>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE">Result</td>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE" class="black12bold">  <input id="result" name="result" type="text" placeholder="Enter Result"></td>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE">Institute</td>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE">  <input id="institute" name="institute" type="text" placeholder="Institute Name"></td>
                                        </tr>
                                        <tr>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE">GPA</td>
                                          <td align="left" valign="middle" bgcolor="#EEEEEE" class="black12bold" colspan="3">  <input id="gpa" name="gpa" type="number" placeholder="Enter GPA"></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td height="40" align="center" valign="middle">
                                    <span class="black16bold">Grade Sheet</span>
                                  </td>
                                </tr>
                                <form id="add-form" action="#" method="POST">
                                  <tr id="sheet_id">

                                    <!--- ADDED DYNAMIC ----->
                                    <!---
                                                                                                            <td align="center" valign="middle">
                                                                                                            <table width="100%" border="0" cellpadding="3" cellspacing="1" class="black12">
                                                                                                            <tbody>
                                                                                                            <tr class="black12bold">
                                                                                                            <td width="19%" align="left" valign="middle" bgcolor="#AFB7BE">Code</td>
                                                                                                            <td width="66%" align="left" valign="middle" bgcolor="#AFB7BE">Subject</td>
                                                                                                            <td width="15%" align="left" valign="middle" bgcolor="#AFB7BE">Grade</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                            <td align="left" valign="middle" bgcolor="#EEEEEE">101</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#EEEEEE">BANGLA</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#EEEEEE"><input id="bangla" type="text" placeholder="Enter Grade"></td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                            <td align="left" valign="middle" bgcolor="#DEE1E4">107</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#DEE1E4">ENGLISH</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#DEE1E4"><input id="english" type="text" placeholder="Enter Grade"></td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                            <td align="left" valign="middle" bgcolor="#EEEEEE">109</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#EEEEEE">MATHEMATICS</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#EEEEEE"><input id="math" type="text" placeholder="Enter Grade"></td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                            <td align="left" valign="middle" bgcolor="#DEE1E4">150</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#DEE1E4">BANGLADESH AND GLOBAL STUDIES</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#DEE1E4"><input id="bangladesh_history" type="text" placeholder="Enter Grade"></td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                            <td align="left" valign="middle" bgcolor="#EEEEEE">112</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#EEEEEE">HINDU RELIGION AND MORAL EDUCATION</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#EEEEEE"><input id="hindu" type="text" placeholder="Enter Grade"></td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                            <td align="left" valign="middle" bgcolor="#DEE1E4">136</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#DEE1E4">PHYSICS</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#DEE1E4"><input id="physics" type="text" placeholder="Enter Grade"></td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                            <td align="left" valign="middle" bgcolor="#EEEEEE">137</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#EEEEEE">CHEMISTRY</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#EEEEEE"><input id="chemistry" type="text" placeholder="Enter Grade"></td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                            <td align="left" valign="middle" bgcolor="#DEE1E4">138</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#DEE1E4">BIOLOGY</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#DEE1E4"><input id="biology" type="text" placeholder="Enter Grade"></td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                            <td align="left" valign="middle" bgcolor="#EEEEEE">154</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#EEEEEE">INFORMATION AND COMMUNICATION TECHNOLOGY</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#EEEEEE"><input id="ict" type="text" placeholder="Enter Grade"></td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                            <td align="left" valign="middle" bgcolor="#DEE1E4">134</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#DEE1E4">AGRICULTURE STUDIES</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#DEE1E4"><input id="agriculture" type="text" placeholder="Enter Grade"></td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                            <td align="left" valign="middle" bgcolor="#EEEEEE">147</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#EEEEEE">PHYSICAL EDUCATION, HEALTH & SPORTS</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#EEEEEE"><input id="phisical" type="text" placeholder="Enter Grade"></td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                            <td align="left" valign="middle" bgcolor="#DEE1E4">156</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#DEE1E4">CAREER EDUCATION</td>
                                                                                                            <td align="left" valign="middle" bgcolor="#DEE1E4"><input id="carrier" type="text" placeholder="Enter Grade"></td>
                                                                                                            </tr>
                                                                                                            </tbody>
                                                                                                            </table>
                                                                                                            </td>
                                                                                                            --->
                                  </tr>
                                </form>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" height="40">
                            <button id="add-marksheet">Submit </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                  <td width="12" align="right" valign="top" background="images/back_right.gif"> </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td> </td>
        </tr>
      </tbody>
    </table>
    <input type="text" id="hidden-id" hidden="true" value="<?php echo $id ?>">
    <script src="http://cdn.jsdelivr.net/npm/eruda-dom@2.0.0"> < div id = "erudakaalgroup516" style = "all: initial;" > < div class = "__chobitsu-hide__ luna-dom-highlighter luna-dom-highlighter-platform-mac" > < canvas id = "canvas" class = "luna-dom-highlighter-fill" width = "980" height = "1818" style = "width: 980px; height: 1818px;" > < div >
    </script>
    <script src="js/addSheet.js"></script>
  </body>
</html>
  <?php
}
?>