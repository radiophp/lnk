URL 		:	http://127.0.0.1:8000/triangle/{INT}/{INT}/{INT}  
Service	:	calculate surface and circumference of triangle based on 3 side size  
Test data 	: 	http://127.0.0.1:8000/triangle/2/3/4  
----------------------------------------------------------  
URL 		:	http://127.0.0.1:8000/circle/{INT}  
Service	:	calculate surface and circumference of circle based on radius  
Test data 	: 	http://127.0.0.1:8000/circle/4  
----------------------------------------------------------  
URL 		:	http://127.0.0.1:8000/geometry/surface  
Service	:	calculate sum of surfaces of circles or triangles   
Method	: 	POST / JSON / RAW  
Test data	:	[{"type":"circle","radius":6},{"type":"circle","radius":4},{"type":"triangle","a":2,"b":3,"c":4}]  
-----------------------------------------------------------  
URL 		:	http://127.0.0.1:8000/geometry/circumference  
Service	:	calculate sum of circumferences of circles or triangles   
Method	: 	POST / JSON / RAW  
Test data	:	[{"type":"circle","radius":6},{"type":"circle","radius":4},{"type":"triangle","a":2,"b":3,"c":4}]  
-----------------------------------------------------------
