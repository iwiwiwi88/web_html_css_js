var windowHeight=$(window).height();
var menuBarHeight=$("#menuBar").height();
var codeContainerHeight=windowHeight;

$(".codeContainer").height(codeContainerHeight+"px");

$(".toggle").click(function() {
	$(this).toggleClass("selected");
	var activeDiv=$(this).html();
	//alert(activeDiv);
	$("#"+activeDiv+"Container").toggle();
	var showingDivs=$(".codeContainer").filter(function() {
		return($(this).css("display")!="none");
	}).length;
	var width=100/showingDivs;
	$(".codeContainer").width(width+"%");
});

$("#runB").click(function() {
	$("iframe").contents().find("html").html('<style>'+$("#cssCode").val()+'</style>'+$("#htmlCode").val());
	document.getElementById("resultF").contentWindow.eval($("#jsCode").val());
});
