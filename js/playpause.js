 var animationTimer = null;
  var currentbgx = 0;
  var animDiv = null;
function startAnimation()
{
	if(animationTimer == null)
	 {
	 animationTimer = setInterval(playAnimation, 50);
	 }
}
function stopAnimation()
{
	clearInterval(animationTimer);
	animationTimer = null;
}
function playAnimation()
{
	if(animDiv == null)
	{
	animDiv = document.getElementById("animDiv, animDiv1, animDiv2, animDiv3");
	}
animDiv.style.backgroundPosition = currentbgx + "0px";
currentbgx -= 65;
	if (currentbgx < -1267)
	 {
	currentbgx = 0;
	 }
	}
	                