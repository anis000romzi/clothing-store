function showPassword() {
	let a = document.getElementById("password");

	if (a.type === "password") {
		a.type = "text";
	} else {
		a.type = "password";
	}
}

function showConfirmPassword() {
	let a = document.getElementById("password1");
	let b = document.getElementById("password2");

	if (a.type === "password") {
		a.type = "text";
		b.type = "text";
	} else {
		a.type = "password";
		b.type = "password";
	}
}

$(".custom-file-input").on("change", function () {
	let fileName = $(this).val().split("\\").pop();
	$(this).next(".custom-file-label").addClass("selected").html(fileName);
});
