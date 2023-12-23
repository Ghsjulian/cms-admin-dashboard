function ghs__(tag) {
  return document.querySelector(tag);
}
function __ghs(tag) {
  return document.querySelector(tag);
}

function Allstudent() {
  var html, btn;
  fetch(
    `http://localhost:8000/Bd_Result/API/server/functions/addstudent.php?fetch_student=student`
  )
    .then((res) => {
      return res.json();
    })
    .then((data) => {
      if (data.length > 0) {
        for (var i = 0; i < data.length; i++) {
          if (data[i].marksheet === "YES") {
            btn = `<button id="sheet"><a href="#"><i class="bi bi-check-circle"></i></a></button>`;
          } else {
            btn = `<button id="sheet"><a href="add-sheet.php?std_id=${data[i].student_id}"><i class="bi bi-book"></i></a></button>`;
          }
          html = `
      <div class="task-list">
            <span id="note">
            ${data[i].student_name}
            </span>
            <div class="btn-area">
              ${btn}
              <button id="edit"><a href="edit-user.php?std_id=${data[i].student_id}"><i class="bi bi-pencil-square"></i></a></button>
              <button id="delete"><a href="http://localhost:8000/Bd_Result/API/server/functions/deleteStudent.php?std_id=${data[i].student_id}"><i class="bi bi-trash"></i></a></button>
            </div>
          </div>
      `;
          ghs__(".task-area").innerHTML += html;
        }
      } else {
        ghs__("#err-id").innerHTML = `
        <span style="display:block" id="error">No User Found !</span>
        `;
      }
    });
}
Allstudent();
