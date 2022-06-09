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

function showChangePassword() {
	let a = document.getElementById("current-password");
	let b = document.getElementById("new-password1");
	let c = document.getElementById("new-password2");

	if (a.type === "password") {
		a.type = "text";
		b.type = "text";
		c.type = "text";
	} else {
		a.type = "password";
		b.type = "password";
		c.type = "password";
	}
}

$(".custom-file-input").on("change", function () {
	let fileName = $(this).val().split("\\").pop();
	$(this).next(".custom-file-label").addClass("selected").html(fileName);
});
