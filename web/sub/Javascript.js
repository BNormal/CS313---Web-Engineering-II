$(document).ready(function(){
    $('#btnColorQ').click(function(){
       	$(".div1").css("background-color", $('input[name=hexColor]').val());
    });
	$('#btnthirdDiv').click(function(){
		if ($(".div3").is(':visible')){
       		$(".div3").fadeOut();
		} else {
			$(".div3").fadeIn();
		}
    });
});

function alertMessage() {
    alert("Clicked!");
}

function changeColor() {
	var color = document.getElementsByName("hexColor")[0].value;
    document.getElementsByClassName("div1")[0].style.backgroundColor = color;
}