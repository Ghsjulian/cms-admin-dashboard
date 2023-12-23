function ghs__(tag) {
  return document.querySelector(tag);
}

ghs__("#add-marksheet").onclick = (e) => {
  var group = ghs__("#group").textContent;
  getAllvalues(group);
};

function getAllvalues(check) {
  var formData = new FormData();
  var group = ghs__("#group").textContent;
  var board = ghs__("#board").value;
  var father = ghs__("#father").value;
  var mother = ghs__("#mother").value;
  var type = ghs__("#type").value;

  var gpa = ghs__("#gpa").value;
  var name = ghs__("#name").textContent;
  var roll = ghs__("#roll").textContent;
  var dob = ghs__("#dob").value;
  var select = ghs__("#select_bank");
  var Selectvalue = select.value;
  var exam_name = select.options[select.selectedIndex].text;
  var year = ghs__("#year").value;
  var ID = ghs__("#hidden-id").value;
  var institute = ghs__("#institute").value;
  var result = ghs__("#result").value;
  formData.append("board", board);
  formData.append("ID", ID);
  formData.append("father", father);
  formData.append("mother", mother);
  formData.append("type", type);
  formData.append("result", result);
  formData.append("roll", roll);
  formData.append("group", group);
  formData.append("gpa", gpa);
  formData.append("name", name);
  formData.append("institute", institute);
  formData.append("birth", dob);
  formData.append("year", year);
  formData.append("exam_name", exam_name);
  var bangla = ghs__("#bangla").value;
  var english = ghs__("#english").value;
  var ict = ghs__("#ict").value;
  var math = ghs__("#math").value;
  var agriculture = ghs__("#agriculture").value;
  var phisical = ghs__("#phisical").value;
  var carrier = ghs__("#carrier").value;
  var history = ghs__("#bangladesh_history").value;
  var economic = ghs__("#economics").value;
  var geography = ghs__("#geography").value;
  var science = ghs__("#science").value;
  var bangladesh_history = ghs__("#global_study").value;
  var physics = ghs__("#physics").value;
  var chemistry = ghs__("#chemistry").value;
  var biology = ghs__("#biology").value;
  formData.append("physics", physics);
  formData.append("chemistry", chemistry);
  formData.append("biology", biology);
  formData.append("global_study", bangladesh_history);
  var bd_history = ghs__("#bangladesh_history").value;
  var finnance = ghs__("#finnance").value;
  var business = ghs__("#business").value;
  var hindu = ghs__("#hindu").value;
  var islam = ghs__("#islam").value;
  var christian = ghs__("#christian").value;
  var accounting = ghs__("#accounting").value;
  //var science = ghs__("#science").value;
  var cm_geography = ghs__("#geography_world").value;

  /*   APPENDING ALL VALUES  */
  formData.append("history", bd_history);
  formData.append("hindu", hindu);
  formData.append("islam", islam);
  formData.append("christian", christian);
  formData.append("business", business);
  formData.append("cm_geography", cm_geography);
  //formData.append("cm_science", cm_science);
  formData.append("accounting", accounting);
  formData.append("finnance", finnance);
  formData.append("history", history);
  formData.append("economic", economic);
  formData.append("geography", geography);
  formData.append("science", science);
  formData.append("bangla", bangla);
  formData.append("english", english);
  formData.append("math", math);
  formData.append("ict", ict);
  formData.append("agriculture", agriculture);
  formData.append("phisical", phisical);
  formData.append("carrier", carrier);
  /*    SHEET VALUES   */

  /*    STUDENTS   INFORMATION**/

  //console.log("It's Science")
  /*
   *
   *
   *  HERE I'LL USE AJAX
   *
   *
   */
  fetch("http://localhost:8000/Bd_Result/API/server/functions/sheet.php", {
    method: "POST",
    body: formData,
  })
    .then((res) => {
      return res.text();
    })
    .then((data) => {
      if (data === "Inserted") {
        window.location.href = "index.php";
      }
    });
}

function Fetchstudent(id) {
  var html, btn, religion;
  fetch(
    `http://localhost:8000/Bd_Result/API/server/functions/addstudent.php?student_id=${id}`
  )
    .then((res) => {
      return res.json();
    })
    .then((data) => {
      ghs__("#roll").textContent = data.rool;
      ghs__("#name").textContent = data.student_name;
      ghs__("#group").textContent = data.group;
      ghs__("#sheet_id").innerHTML = `
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
<td align="left" valign="middle" bgcolor="#DEE1E4"><input id="global_study" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">136</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">BIOLOGY</td>
<td align="left" valign="middle" bgcolor="#DEE1E4"><input id="biology" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">137</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">CHEMISTRY</td>
<td align="left" valign="middle" bgcolor="#EEEEEE"><input id="chemistry" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">138</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">PHYSICS</td>
<td align="left" valign="middle" bgcolor="#DEE1E4"><input id="physics" type="text" placeholder="Enter Grade"></td>
</tr>
  <tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">112</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">HINDU RELIGION AND MORAL EDUCATION</td>
<td align="left" valign="middle" bgcolor="#EEEEEE"><input id="hindu" type="text" placeholder="Enter Grade"></td>
</tr>
  <tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">112</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">Christian RELIGION AND MORAL EDUCATION</td>
<td align="left" valign="middle" bgcolor="#EEEEEE"><input id="christian" type="text" placeholder="Enter Grade"></td>
</tr>

  <tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">112</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">ISLAM RELIGION AND MORAL EDUCATION</td>
<td align="left" valign="middle" bgcolor="#EEEEEE"><input id="islam" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">150</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">BANGLADESH AND HISTORY</td>
<td align="left" valign="middle" bgcolor="#DEE1E4"><input id="bangladesh_history" type="text" placeholder="Enter Grade"></td>
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
<td align="left" valign="middle" bgcolor="#DEE1E4">136</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">CIVIC AND ECONOMICS</td>
<td align="left" valign="middle" bgcolor="#DEE1E4"><input id="economics" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">137</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">GEOGRAPHY OF WORLD</td>
<td align="left" valign="middle" bgcolor="#EEEEEE"><input id="geography_world" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">138</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">GENERAL SCIENCE</td>
<td align="left" valign="middle" bgcolor="#DEE1E4"><input id="science" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">150</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">ACCOUNTING</td>
<td align="left" valign="middle" bgcolor="#DEE1E4"><input id="accounting" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">136</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">FINNANCE AND BANKING</td>
<td align="left" valign="middle" bgcolor="#DEE1E4"><input id="finnance" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#EEEEEE">137</td>
<td align="left" valign="middle" bgcolor="#EEEEEE">GEOGRAPHY OF WORLD</td>
<td align="left" valign="middle" bgcolor="#EEEEEE"><input id="geography" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">138</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">BUSINESS ENT</td>
<td align="left" valign="middle" bgcolor="#DEE1E4"><input id="business" type="text" placeholder="Enter Grade"></td>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#DEE1E4">156</td>
<td align="left" valign="middle" bgcolor="#DEE1E4">CAREER EDUCATION</td>
<td align="left" valign="middle" bgcolor="#DEE1E4"><input id="carrier" type="text" placeholder="Enter Grade"></td>
</tr>
</tbody>
</table>
</td>
        `;
    });
}

window.onload = () => {
  var std_id = ghs__("#hidden-id").value;
  Fetchstudent(std_id);
};
