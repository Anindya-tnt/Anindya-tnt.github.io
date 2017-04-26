window.onload = function() {

	 var num;
  //Take screenshot
  var takeScreen = document.getElementById("snap");

  //Save Image
  var saveImage = document.getElementById("saveImage");

  //For cloning image to Note
  var cloneImage = document.getElementById("cloneImage");

  // Event listener for the play/pause button
	

	// Get handles on the video2 and canvas elements
		var video2 = document.querySelector('video');
		var canvas = document.querySelector('canvas');
		// Get a handle on the 2d context of the canvas element
		var context = canvas.getContext('2d');
		// Define some vars required later
		var w, h, ratio;
		
		// Add a listener to wait for the 'loadedmetadata' state so the video2's dimensions can be read
		video2.addEventListener('loadedmetadata', function() {
			// Calculate the ratio of the video2's width to height
			ratio = video2.videoWidth / video2.videoHeight;
			// Define the required width as 100 pixels smaller than the actual video2's width
			w = video2.videoWidth - 600;
			// Calculate the height based on the video2's width and the ratio
			h = parseInt(w / ratio, 10);
			// Set the canvas width and height to the values just calculated
			canvas.width = w;
			canvas.height = h;			
		}, false);
		
		// Takes a snapshot of the video
		takeScreen.addEventListener('click',function () {
			// Define the size of the rectangle that will be filled (basically the entire element)
				context.fillRect(0, 0, w, h);
				// Grab the image from the video
				context.drawImage(video2, 0, 0, w, h);
		});


    	saveImage.addEventListener('click',function () {
			var ua = window.navigator.userAgent;
 
                if (ua.indexOf("Chrome") > 0) {
                    // save image without file type
                    var canvas = document.getElementById("canvas1");
                    //document.location.href = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
 
                    // save image as png
                    var link = document.createElement('a');
                    link.download = "test.png";
                    link.href = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");;
                    link.click();
                }
                else {
                    alert("Please use Chrome");
                }
		});

		cloneImage.addEventListener('click',function () {
			
			// get the last DIV whose ID starts with ^= "canvas"
		    //var $div = $('img[id^="img"]:last');
				
			// Read the Number from that DIV's ID (i.e: 3 from "klon3")
			// And increment that number by 1
		   
			var canvas = document.getElementById("canvas1");
			var img    = canvas.toDataURL("image/jpeg");	
			// Clone it and assign the new ID (i.e: from num 4 to ID "klon4")
			if (num == undefined){
				console.log("undefined");
				num = 1;
			}
			else{
				num += 1;
			}
			$('.panel-body').append('<p><img style="border: 1px solid black;" src="'+img+'" alt="image"/></p><br/>');
			//console.log($div);
			console.log(num);
			// console.log($canv);
			console.log("click");
  			//$('#Note').html($canv);
  			// 	img.appendTo('#Note');
  			//document.getElementById("canvas"+num).getContext('2d').drawImage(canvas, 0, 0);
		});
}