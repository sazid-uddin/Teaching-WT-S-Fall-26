// let s1 = {
// 	name: "Rahim",
// 	cgpa: 3.5
// }

let students = [
	{name: "Rahim", cgpa: 3.5},
	{name: "Karim", cgpa: 3.5},
	{name: "Nadia", cgpa: 3.5},
]

let student_table = document.createElement('table');

let header_row = document.createElement('tr');
header_row.style.fontStyle = 'italic';
let nameTH = document.createElement('th')
nameTH.innerText = "Name";
let cgpaTH = document.createElement('th')
cgpaTH.innerText = "CGPA";

header_row.appendChild(nameTH);
header_row.appendChild(cgpaTH);

student_table.appendChild(header_row);

document.body.appendChild(student_table);

function addStudentRow(student) {
	// console.log(student.name);
	// console.log(student.cgpa);

	let student_row = document.createElement('tr');

	let student_name_td = document.createElement('td');
	student_name_td.innerText = student.name;
	student_row.appendChild(student_name_td);

	// let student_cgpa_td = document.createElement('td');
	// student_cgpa_td.innerText = student.cgpa;
	// student_row.appendChild(student_cgpa_td);

	let td_html = "<td>" + student.cgpa + "</td>";
	student_row.innerHTML += td_html;
	// <tr>
	// 	"<td>" + student.cgpa + "</td>"	
	// </tr>

	student_table.appendChild(student_row);
}

students.forEach(addStudentRow);