function idlostCheck(){
	var form = document.searchId_form;

	if(!form.name.value) {
		alert("이름을 입력하세요!");
		form.name.focus();
		return ;
	}

	if(!form.phone1.value) {
		alert("전화번호를 입력하세요!");
		form.phone1.focus();
		return;
	}
  
	if(!form.phone2.value) {
		alert("전화번호를 입력하세요!");
		form.phone2.focus();
		return;
	}
	if(!form.phone3.value) {
		alert("전화번호를 입력하세요!");
		form.phone3.focus();
		return;
	}
 	form.submit();
}

function pwdlostCheck(){
	var form = document.searchPwd_form;
	   
	if(!form.id.value) {
		alert("ID를 입력하세요!");
		form.id.focus();
		return ;
	}

	if(!form.name.value) {
		alert("이름을 입력하세요!");
		form.name.focus();
		return ;
	}
}

function reset_Idform() {
	alert("다시 작성 하시겠습니까?");
	document.searchId_form.name.value = "";
	document.searchId_form.phone1.value = "010";
	document.searchId_form.phone2.value = "";
	document.searchId_form.phone3.value = "";
	document.searchId_form.name.focus();
	return;
}

function reset_Pwdform() {
	alert("다시 작성 하시겠습니까?");
	document.searchPwd_form.id.value = "";
	document.searchPwd_form.name.value = "";
	document.searchPwd_form.id.focus();
	return;
}