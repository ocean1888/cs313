var image1=new Image()
image1.src="image1.jpg"
var image2=new Image()
image2.src="image2.jpg"
var image3=new Image()
image3.src="image3.jpg"
var image4=new Image()
image4.src="image4.jpg"

var step=1
function slideit()
{
if(!document.images)
return
document.images.slide.src=eval("image"+step+".src")
if (step < 4)
step++
else
step=1
setTimeout("slideit()", 5000)
}
slideit()